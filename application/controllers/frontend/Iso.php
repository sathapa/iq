<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  ISO Controller
 *
 * @package		Quoteweb 
 * @subpackage	Controller
 * @category	Controller
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @Created By	Prem Yadav(23-11-2017)
 * 
 */

class Iso extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Isoncr_model');
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
		$this->Management = 'ISO';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
		//dump($this->group_permissions);
	}
	
	/**
	 * This function used for get and display the ISO ncr
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function index(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','bootstrap-datetimepicker.min'); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min','pop-up-model');
			$data['title']	= 'ISO NCR';
			$searchData		= $this->input->post();$searchParam 	= array();
			if(!empty($searchData)){
				$searchParam['customer']	= !empty($searchData['search_customer']) ? trim($searchData['search_customer']) : '';
				$searchParam['ncrCategory']	= !empty($searchData['search_ncr_category']) ? trim($searchData['search_ncr_category']) : '';
				$searchParam['startDate']	= !empty($searchData['search_start_date']) ? trim($searchData['search_start_date']) : '';
				$searchParam['endDate']		= !empty($searchData['search_end_date']) ? trim($searchData['search_end_date']) : '';
			}
			$data['searchParam']	= $searchParam;
			$data['isoncrs']	= $this->Isoncr_model->getAllIsoncr($searchParam);
			//dump($data['isoncrs']);die;
			$this->load->view('frontend/iso_ncr', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
		
	}
	
	/**
	 * This function used for create / update the ISO NCR information.
	 * 
	 * @Function		createIso()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	
	function createIso(){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				/* Uploading the multiple attachment file of ISO NCR */
				if(!empty($_FILES['attachment']['name']) && is_array($_FILES['attachment']['name'])){
					$j = 0;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '300000';
					$this->load->library('upload', $config);
					$config['upload_path'] = FCPATH.'uploads/isoncr_files/';
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
								setMessage($this->upload->display_errors(),'warning');
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'isoncr_attachment'.time().$j.$file_ext;
								rename($file, $file_path . $file_name);
							}
							$postData[$j]= $file_name;
							$j++;
						}
					}
				}
				$response	= $this->Isoncr_model->createUpdateIsoncr($postData);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>ISO NCR successfully added.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('iso');
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'ncr';
			$this->load->view('frontend/add_isoncr', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('iso');
		}
	}
	
	function createIsoNew(){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				/* Uploading the multiple attachment file of ISO NCR */
				if(!empty($_FILES['attachment']['name']) && is_array($_FILES['attachment']['name'])){
					$j = 0;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '300000';
					$this->load->library('upload', $config);
					$config['upload_path'] = FCPATH.'uploads/isoncr_files/';
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
								setMessage($this->upload->display_errors(),'warning');
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'isoncr_attachment'.time().$j.$file_ext;
								rename($file, $file_path . $file_name);
							}
							$postData[$j]= $file_name;
							$j++;
						}
					}
				}
				$response	= $this->Isoncr_model->createUpdateIsoncr($postData);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>ISO NCR successfully added.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('iso');
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'ncr';
			$this->load->view('frontend/add_isoncr_new', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('iso');
		}
	}
	
	/**
	 * This function used for create / update the ISO NCR information.
	 * 
	 * @Function		editIso()
	 * @Param			void(0)
	 * @Created			11-12-2107
	 * 
	 * */
	
	function editIso($isoId=null){
		//if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
		$isoId		= !empty($isoId) ? base64_decode($isoId) : '';
		$isoInfo	= $this->Isoncr_model->getIsoncrById($isoId);
		if(!empty($isoInfo) && !empty($isoId)){
			//dump($isoInfo);die;
			$postData	= $this->input->post();
			if(!empty($postData)){
				/* Uploading the multiple attachment file of ISO NCR */
				if(!empty($_FILES['attachment']['name']) && is_array($_FILES['attachment']['name'])){
					$j = 0;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '300000';
					$this->load->library('upload', $config);
					$config['upload_path'] = FCPATH.'uploads/isoncr_files/';
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
								setMessage($this->upload->display_errors(),'warning');
								die('Error');
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'isoncr_attachment'.time().$j.$file_ext;
								rename($file, $file_path . $file_name);
							}
							$postData[$j]= $file_name;
						}
						$j++;
					}
				}
				$response	= $this->Isoncr_model->createUpdateIsoncr($postData);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>ISO NCR successfully updated.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('iso');
				}
			}
			
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'ncr';
			$data['isoInfo']	= $isoInfo;	
			//dump($isoInfo);die;
			$this->load->view('frontend/edit_isoncr', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Invalid ISO NCR ID</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('iso');
		}
		/*}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('iso');
		}*/
	}
	
	/*================= Controller end ======================== */
	
}
