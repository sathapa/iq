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

class TReport extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/TR_model');
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
		$this->Management = 'Test Report';
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

			/*if(!empty($searchData)){
				$searchParam['customer']	= !empty($searchData['search_customer']) ? trim($searchData['search_customer']) : '';
				$searchParam['ncrCategory']	= !empty($searchData['search_ncr_category']) ? trim($searchData['search_ncr_category']) : '';
				$searchParam['startDate']	= !empty($searchData['search_start_date']) ? trim($searchData['search_start_date']) : '';
				$searchParam['endDate']		= !empty($searchData['search_end_date']) ? trim($searchData['search_end_date']) : '';
			}*/
			/*$data['searchParam']	= $searchParam;*/
			$data['testr']	= $this->TR_model->getAllTR();
			$this->load->view('frontend/manage_tr', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
		
	}
	
	/**
	 * This function used for create / update the Test Report information.
	 * 
	 * @Function		createTR()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	
		function createTR(){
 
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			
			if(!empty($postData)){
				$trno = base64_encode($postData["test_recordno"]);
				$checkunique = $this->TR_model->checkunique(base64_decode($trno));		
				
				if(empty($checkunique)){
					$status = 1;
					$response	= $this->TR_model->createUpdateTR($postData, $status);
					if(!empty($response)){

						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Test Report successfully added.</p></div>';
						$this->session->set_flashdata('message',$message);

						$message_replicate = '<div class="alert alert-info" role="alert"><strong>Replicate prior Test Record Number ['.base64_decode($trno).'] data?</strong><br><br>
											  <button type="button" id="replicate" class="btn btn-success">Yes - Replicate</button>
											  <button type="button" id="new" class="btn btn-primary">No - Create New</button>
											  </div>';
						$this->session->set_flashdata('message_replicate',$message_replicate);
						redirect('replicateTR/'.$trno.'');
					}
				}
				else{
					$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong>Test Record Number['.base64_decode($trno).'] already exists.</strong><br>Please use unique Test Record Number.</div>';
					$this->session->set_flashdata('message',$message);
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Test Report';
			$this->load->view('frontend/add_tr', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('TR');
		}
	}

	/**
	 * This function used for replicate the Test Report information.
	 * 
	 * @Function		replicateTR()
	 * @Param			$trno
	 * @Created			27-11-2107
	 * 
	 * */
	function replicateTR($trno='0'){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			
			$trno = base64_decode($trno);

			if(!empty($postData)){
				/*newly replicated testrecordno.*/
				$trno_todb = $postData["test_recordno"];
				$checkunique = $this->TR_model->checkunique($trno_todb);	

				if(empty($checkunique)){
					$status = 1;
					$response	= $this->TR_model->createUpdateTR($postData,$status,$trno_todb);
					
					if(!empty($response)){
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Test Report successfully replicated.</p></div>';
						$message_replicate = '<div class="alert alert-info" role="alert"><strong>Replicate more like Test Record Number ['.$trno.'] data?</strong><br><br>
											<button type="button" id="replicate" class="btn btn-success">Yes - Replicate</button>
											<button type="button" id="new" class="btn btn-primary">No - Create New</button>
											</div>';
						$this->session->set_flashdata('message',$message);
						$this->session->set_flashdata('message_replicate',$message_replicate);

						$trno = base64_encode($trno);
						redirect('replicateTR/'.$trno.'');
					}
				}
				else{
					$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong>Test Record Number ['.$trno_todb.'] already exists.</strong><br>Please use unique Test Record Number.</div>';
					$this->session->set_flashdata('message',$message);
				}

			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','multiselect','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Test Report';

			$data['trdata'] = $this->TR_model->get_tr_trdata($trno);
			$data['title_text'] = 'Replicate';
			$this->load->view('frontend/edit_tr', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('TR');
		}
	}
	
	/**
	 * This function used for edit the Test Report information.
	 * 
	 * @Function		editeTR()
	 * @Param			$trno
	 * @Created			27-11-2107
	 * 
	 * */
	function editTR($trno='0'){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			$trno = base64_decode($trno);

			if(!empty($postData)){
				$status = 0;
				$response	= $this->TR_model->createUpdateTR($postData,$status,$trno);
				
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Test Report successfully updated.</p></div>';
					$this->session->set_flashdata('messageIndex',$message);
					redirect('TR');
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','multiselect','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Test Report';

			$data['trdata'] = $this->TR_model->get_tr_trdata($trno);
			$data['title_text'] = 'Update';

			$this->load->view('frontend/edit_tr', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('TR');
		}
	}

	/**
	 * This function used for deleting the Test Report with especific $trno.
	 * 
	 * @Function		trDelete()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function trDelete(){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$trno	= !empty($postData['trno']) ? $postData['trno'] : '';
				$trno = base64_decode($trno);				
				
				if(!empty($trno)){
					$deleteTresult= deleteTResult($trno);
					if($deleteTresult){
						echo "Your Test Result has been deleted successfully";
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Your Test Record No.- '.$trno.' deleted successfully.</p></div>';
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
	 * This function used for generating the Test Report.
	 * 
	 * @Function		trDelete()
	 * @Param			void(0)
	 * @Created			27-11-2107
	 * 
	 * */
	function generateReport($trno=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		$trno = base64_decode($trno);
		$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
		$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
		$data['trno']	= $trno;
		$data['tdata'] = $this->TR_model->get_tr_trdata($trno);
		
		ini_set("memory_limit", -1);
	    	   @header("cache-Control: no-store, no-cache, must-revalidate");
	           @header("cache-Control: post-check=0, pre-check=0", false);
               @header("Pragma: no-cache");
               @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		
		$this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
		$this->pdf->showImageErrors = true;

	    $this->pdf->SetHTMLHeader('Product/Design Test Record ');
		$this->pdf->load_view('frontend/report_tr',$data);

        $this->pdf->setAutoBottomMargin = 'stretch';
		$invoice_name = FCPATH.'download_pdf/'.str_replace(" ","_",$login_user).'-'.$trno.'.pdf';
		$fName	= str_replace(" ","_",$login_user).'-'.$trno.'.pdf';
		
		/** Sending Mail to Email Id with attachment **/
		$this->load->helper('mail_helper');
		echo "Yes";
		$content = $this->pdf->Output($fName,'D');		
		$this->pdf->Output($invoice_name, 'F');
		$this->pdf->Output(); 
	}
	/*================= Controller end ======================== */
	
}
