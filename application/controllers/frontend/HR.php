<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Test Report Controller
 *
 * @package		Quoteweb 
 * @subpackage	Controller
 * @category	Controller
 * 
 */

class HR extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/HR_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		//$this->email2	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
		$this->Management = 'HR';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
		//dump($this->group_permissions);
	}
	
	/**
	 * This function used for get and display the TestRecords
	 * @return [type] [description]
	 */
	function index(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.tokenize',
				'jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min',
				'jquery.dataTables.min','jquery.PrintArea','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar',
				'jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min',
				'pop-up-model');
			$data['title']	= 'Manage Test Report';

			$searchData 	= $this->input->post(); $searchParam = array();
			
			$searchHS	= '[all]';$searchASDate	= 'all';$searchAEDate	= 'all';
			if(!empty($searchData)){
				$searchHS	= !empty($searchData['search_hired_status']) ? trim($searchData['search_hired_status']) : '';
				$searchASDate	= !empty($searchData['search_admission_start_date']) ? trim($searchData['search_admission_start_date']) : '';
				$searchAEDate		= !empty($searchData['search_admission_end_date']) ? trim($searchData['search_admission_end_date']) : '';
			}

			$searchParam	= array('searchHS'=>$searchHS,'searchASDate'=>$searchASDate,'searchAEDate'=>$searchAEDate);
			
			$data['searchParam']= $searchParam;

			
			
			$data['datahr']	= $this->HR_model->getAllHR($searchParam);
			$this->load->view('frontend/hr_manage', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
		
	}
	
	/**
	 * This function used for create / update the HR information.
	 * 
	 * @Function		createHR()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function addHR(){
 
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){

				$status = 1;

				/* Uploading the multiple attachment file of ISO NCR */
				if(!empty($_FILES['attachment']['name']) && is_array($_FILES['attachment']['name'])){
					$j = 0;
					$config['allowed_types'] = '*';
					$config['max_size'] = '300000';
					$this->load->library('upload', $config);
					$config['upload_path'] = FCPATH.'uploads/hr_files/';
					$this->upload->initialize($config);
					$isoncr_attachment = array();
					foreach ($_FILES['attachment']['name'] as $key => $value) {
						if(!empty($_FILES['attachment']['name'][$j])){
							$_FILES['attachment'.$j]['name']	= $_FILES['attachment']['name'][$j];
							$_FILES['attachment'.$j]['type']	= $_FILES['attachment']['type'][$j];
							$_FILES['attachment'.$j]['tmp_name']	= $_FILES['attachment']['tmp_name'][$j];
							$_FILES['attachment'.$j]['error']	= $_FILES['attachment']['error'][$j];
							$_FILES['attachment'.$j]['size']	= $_FILES['attachment']['size'][$j];
							if(! $this->upload->do_upload('attachment'.$j)){
								$file_name	= $j;
								die($this->upload->display_errors());
								setMessage($this->upload->display_errors(),'warning');
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'hr_attachment'.time().$j.$file_ext;
								rename($file, $file_path . $file_name);
							}
							$postData[$j]= $file_name;
						}
						$j++;
					}
				}

				

				$response	= $this->HR_model->createUpdateHR($postData, $status);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>HR successfully added.</p></div>';
						$this->session->set_flashdata('message',$message);
					redirect('HR');
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','jquery.mousewheel.min','increment','bootstrap-formhelpers-phone'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'HR';
			$this->load->view('frontend/hr_create', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('HR');
		}
	}


	/**
	 * This function used for create / update the HR information.
	 * 
	 * @Function		createHR()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function editHR($hrno=0){
 		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$status = 0;


				if(!empty($_FILES['attachment']['name']) && is_array($_FILES['attachment']['name'])){

					$j = 0;
					$config['allowed_types'] = '*';
					$config['max_size'] = '300000';
					$this->load->library('upload', $config);
					$config['upload_path'] = FCPATH.'uploads/hr_files/';
					$this->upload->initialize($config);
					$isoncr_attachment = array();
					foreach ($_FILES['attachment']['name'] as $key => $value) {
						if(!empty($_FILES['attachment']['name'][$j])){
							$_FILES['attachment'.$j]['name']	= $_FILES['attachment']['name'][$j];
							$_FILES['attachment'.$j]['type']	= $_FILES['attachment']['type'][$j];
							$_FILES['attachment'.$j]['tmp_name']	= $_FILES['attachment']['tmp_name'][$j];
							$_FILES['attachment'.$j]['error']	= $_FILES['attachment']['error'][$j];
							$_FILES['attachment'.$j]['size']	= $_FILES['attachment']['size'][$j];
							if(! $this->upload->do_upload('attachment'.$j)){
								$file_name	= $j;
								die($this->upload->display_errors());
								setMessage($this->upload->display_errors(),'warning');
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'hr_attachment'.time().$j.$file_ext;
								rename($file, $file_path . $file_name);
							}
							$postData[$j]= $file_name;
						}
						$j++;
					}
				}

				$response	= $this->HR_model->createUpdateHR($postData, $status, $hrno);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>HR successfully added.</p></div>';
						$this->session->set_flashdata('message',$message);
					redirect('HR');
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','jquery.mousewheel.min','increment','bootstrap-formhelpers-phone'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Update';
			$data['hrdata'] = $this->HR_model->get_the_hrdata($hrno);

			$this->load->view('frontend/hr_edit', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('HR');
		}
	}

	/**
	 * This function used for getting the letter for the especific person.
	 * 
	 * @Function		createHR()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function getLetter($let=0)
	{
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			
    		$filepath =  FCPATH.'uploads\hr_files\\'.$let;
			 if(file_exists($filepath)) {
		        header('Content-Description: File Transfer');
		        header('Content-Type: application/octet-stream');
		        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
		        header('Content-Transfer-Encoding: binary');
		        header('Expires: 0');
		        header('Cache-Control: must-revalidate');
		        header('Pragma: public');
		        header('Content-Length: ' . filesize($filepath));
		        flush(); // Flush system output buffer
		        readfile($filepath);
		   }
		}
		
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('HR');
		}
	}

	/**
	 * This function used for deleting the HR with especific $hrno.
	 * 
	 * @Function		hrDelete()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function deleteHR(){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$hrno	= !empty($postData['hrno']) ? $postData['hrno'] : '';
				/*$hrno = base64_decode($hrno);		*/		
				
				if(!empty($hrno)){
					$deleteHr= deleteHR($hrno);
					if($deleteHr){
						echo "Your Test Result has been deleted successfully";
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Your Test Record No.- '.$hrno.' deleted successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						}else{
							echo "Please try again.";
							$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Please try again.</p></div>';
							$this->session->set_flashdata('message',$message);
						}
				}
			}
	}

	/**
	 * This function used for create / update the HR information.
	 * 
	 * @Function		createHR()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function sendmailHR(){
 
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				
				$send_to	= !empty($postData['send_to']) ? $postData['send_to'] : '';
				$send_cc	= !empty($postData['send_cc']) ? $postData['send_cc'] : '';
				$subject	= !empty($postData['subject']) ? $postData['subject'] : '';
				$comments	= !empty($postData['comments']) ? $postData['comments'] : '';

				$this->load->helper('mail_helper');
				$proposalsent	= sendJobOpp(array('send_to'=>$send_to, 'send_cc'=>$send_cc, 'subject'=>$subject, 'comments'=>$comments));
				

				if(!empty($proposalsent)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Mail has been sent.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('sendmailHR');
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','jquery.mousewheel.min','increment','bootstrap-formhelpers-phone'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'HR';
			$this->load->view('frontend/hr_sendmail', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('HR');
		}
	}

	/*================= Controller end ======================== */
}
