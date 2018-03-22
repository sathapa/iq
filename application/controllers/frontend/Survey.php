<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Survey Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Created On	12-04-2017
 * 
 * */

class Survey extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->model('frontend/Survey_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions	= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : array();
		$this->Management = 'Survey';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}

	function survey(){
			/*$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','moment','bootstrap','bootstrap-datetimepicker','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button','bootstrap-datetimepicker','pop-up-model');*/
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','moment','bootstrap','pop-up-model','bootstrap-select','bootstrap-datetimepicker','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button','pop-up-model','bootstrap-select','bootstrap-datetimepicker');

			

			$data['title']	= 'Survey';

			$this->Management = 'Survey';
			$this->load->view('frontend/survey', $data);
	}

	function createSurvey($type=0,$suyId=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		$postData		= $this->input->post();
		
			if(!empty($postData)){
				$postData['user_id'] = $login_user;
				unset($postData['profile_img']);
				$customer		= str_replace('&', 'and', (!empty($postData['customer']) ? $postData['customer'] : '')); 
				$customer=explode('[',$customer);
				$customer = trim($customer[0]);
				$postData['customer'] = $customer;


				$net_material	= str_replace('&#', ' ', (!empty($postData['net_material']) ? $postData['net_material'] : "None"));
				$lash_material	= str_replace('&', ' ', (!empty($postData['lash_material']) ? $postData['lash_material'] : "None"));
				$rope_material	= str_replace('&', ' ', (!empty($postData['rope_material']) ? $postData['rope_material'] : "None"));
				$border_material	= str_replace('&', ' ', (!empty($postData['border_material']) ? $postData['border_material'] : "None"));


				if ($net_material == "None") {
					$net_material = $postData['net_material1'];
				} else {
					$net_material = explode('[',$net_material); $net_material = str_replace( ']', '', $net_material[1]);
				}
				$postData['net_material'] = $net_material;
				
				if ($lash_material == "None") {
					$lash_material = $postData['lash_material1'];
				} else {
					$lash_material = explode('[',$lash_material); $lash_material = str_replace( ']', '', $lash_material[1]);
				}
				$postData['lash_material'] = $lash_material;

				if ($rope_material == "None") {
					$rope_material = $postData['rope_material1'];
				} else {
					$rope_material = explode('[',$rope_material); $rope_material = str_replace( ']', '', $rope_material[1]);
				}
				$postData['rope_material'] = $rope_material;

				if ($border_material == "None") {
					$border_material = $postData['border_material1'];
				} else {
					$border_material = explode('[',$border_material); $border_material = str_replace( ']', '', $border_material[1]);
				}
				$postData['border_material'] = $border_material;

				unset($postData['lash_material1']);unset($postData['net_material1']);unset($postData['rope_material1']);unset($postData['border_material1']);

				if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/survey';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$file_name	= 0;
							$error		='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
						}else{
							
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'survey_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$postData['profile_img']= $file_name;
					}

						$suyId	= base64_decode($suyId);
						$type   = base64_decode($type);
					
						$ids	= $this->Survey_model->createSurvey($postData,$type,$suyId);

						if(!empty($ids)){
							
							$survey_id = $ids[0];
							
							$survey_id=base64_encode($survey_id);

							
							$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Survey created successfully.</p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('surveyAdd/'.$survey_id);
						}
			}

	}
	
	function surveyIndex(){
		$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','parsley.min','jquery.dataTables.min','jquery.PrintArea','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','font-awesome.min');
		$data['title']	= 'SurveyIndex';

		$survey	= $this->Survey_model->getAllSurvey();
		/*var_dump($survey);die;*/
		$data['survey']	= $survey;
		$this->load->view('frontend/survey_index', $data);
	}

	function surveyView($survId){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','bootstrap','confirmation','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','jquery.PrintArea','jquery.table2excel'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','font-awesome.min');
		$data['title']	= 'managequote';
		$login_user		= $this->session->userdata('frontendUserName');
		$survId	= base64_decode($survId);

		$itemDetails	= $this->Survey_model->getSurveyItemLists($survId);
		
		$data['survId']	= $survId;
		$data['itemDetails'] = $itemDetails;
		$this->load->view('frontend/survey_view1', $data);
	}

	function surveyEdit($itemId=0,$survId=0){
		
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','moment','bootstrap','pop-up-model','bootstrap-select','bootstrap-datetimepicker','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button','pop-up-model','bootstrap-select','bootstrap-datetimepicker');			
			$data['title']	= 'EditSurvey';
			$itemId=base64_decode($itemId);

			$survey	= $this->Survey_model->getSurvey($itemId);
			$data['survId'] = $survId;

			$data['survey'] = $survey;
			$this->load->view('frontend/survey_edit', $data);
	}

	function surveyAdd($survey_id=0){
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','moment','bootstrap','pop-up-model','bootstrap-select','bootstrap-datetimepicker','ckeditor5'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button','pop-up-model','bootstrap-select','bootstrap-datetimepicker');
			$data['title']	= 'AddSurvey';
			$survey_id=base64_decode($survey_id);
			
			$data['survey_id'] = $survey_id;
			$this->load->view('frontend/survey_add', $data);
	}

	function surveyIUpdate($itemId=0,$survId=0){
		$postData	= $this->input->post();

			if(!empty($postData)){
				
					/** Profile Image **/
					$updateData	= $postData;
					$updateData['item_id']	= base64_decode($itemId);
					$updateData['survey_id'] = base64_decode($survId);

					$net_material	= str_replace('&#', ' ', (!empty($postData['net_material']) ? $postData['net_material'] : "None"));
					$lash_material	= str_replace('&', ' ', (!empty($postData['lash_material']) ? $postData['lash_material'] : "None"));
					$rope_material	= str_replace('&', ' ', (!empty($postData['rope_material']) ? $postData['rope_material'] : "None"));
					$border_material	= str_replace('&', ' ', (!empty($postData['border_material']) ? $postData['border_material'] : "None"));

					if ($net_material == "None") {
						$net_material = $postData['net_material1'];
					} else {
						$net_material = explode('[',$net_material); $net_material = str_replace( ']', '', $net_material[1]);
					}
					$updateData['net_material'] = $net_material;

					if ($lash_material == "None") {
						$lash_material = $postData['lash_material1'];
					} else {
						$lash_material = explode('[',$lash_material); $lash_material = str_replace( ']', '', $lash_material[1]);
					}
					$updateData['lash_material'] = $lash_material;

					if ($rope_material == "None") {
						$rope_material = $postData['rope_material1'];
					} else {
						$rope_material = explode('[',$rope_material); $rope_material = str_replace( ']', '', $rope_material[1]);
					}
					$updateData['rope_material'] = $rope_material;

					if ($border_material == "None") {
						$border_material = $postData['border_material1'];
					} else {
						$border_material = explode('[',$border_material); $border_material = str_replace( ']', '', $border_material[1]);
					}
					$updateData['border_material'] = $border_material;
					
					if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/survey';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$surveyId	= base64_encode($surveyId);
							$file_name=0;
							$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('surveyEdit/'.$surveyId);
						}else{
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'survey_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$updateData['profile_img']= $file_name;
					}else{
						$updateData['profile_img']= !empty($postData['hidden_profile_img']) ? $postData['hidden_profile_img'] : '';
					}
					unset($updateData['hidden_profile_img']);
					unset($updateData['lash_material1']);unset($updateData['net_material1']);unset($updateData['rope_material1']);
					

					$update	= $this->Survey_model->updateISurvey($updateData);
					if($update){
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Survey updated successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						redirect('surveyView/'.$survId);
					}	
			}
	}


	function SurveyDelete(){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$survey_id	= !empty($postData['survey_id']) ? $postData['survey_id'] : '';
				if(!empty($survey_id)){
					$deletSurvey	= deleteSurvey($survey_id);
					if($deletSurvey){
						echo "Your Survey deleted successfully";
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Your Survey ID ('.$survey_id.') deleted successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						}else{
							echo "Please try again.";
							$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Please try again.</p></div>';
							$this->session->set_flashdata('message',$message);
						}
				}
			}
	}

	function SurveyItemDelete(){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$survey_id	= !empty($postData['survey_id']) ? $postData['survey_id'] : '';
				$item_id	= !empty($postData['item_id']) ? $postData['item_id'] : '';				
				if(!empty($survey_id) && !empty($item_id)) {
					$survey_id = base64_decode($survey_id);
					$item_id   = base64_decode($item_id);
					$deletSurveyItem	= deleteSurveyItem($survey_id,$item_id);
					if($deletSurveyItem){
						echo "Your SurveyItem deleted successfully";
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Your SurveyItem ID ('.$item_id.') deleted successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						}else{
							echo "Please try again.";
							$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Please try again.</p></div>';
							$this->session->set_flashdata('message',$message);
						}
				}
			}
	}

	function generateReport($survey_id=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');
		$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
		$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
		$survey_id = base64_decode($survey_id);
		$data['userName']  = $this->Survey_model->getUserName($login_user);
		$data['survey_id']	= $survey_id;
		$data['customer_data'] = $this->Survey_model->gettheSurvey($survey_id);
		$data['survey_data']	= $this->Survey_model->getSurveyItemLists($survey_id);
		
		ini_set("memory_limit", -1);
	    	   @header("cache-Control: no-store, no-cache, must-revalidate");
	           @header("cache-Control: post-check=0, pre-check=0", false);
               @header("Pragma: no-cache");
               @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		$this->pdf->showImageErrors = true;

		/*Cover page*/
		$this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
		$this->pdf->Addpage();
		$this->pdf->load_view('frontend/survey_report_cover',$data);
		
		/*Summary page*/
	    $this->pdf->SetHTMLHeader('Report Summary');
	    $this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
	    $this->pdf->Addpage();
		$this->pdf->load_view('frontend/survey_report_summary',$data);

		/*Main Report Item page*/
	    $this->pdf->SetHTMLHeader('Attraction Details');
		$this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
		$this->pdf->Addpage();
		$this->pdf->load_view('frontend/survey_report',$data);

		/*Contact page*/
		$this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
		$this->pdf->SetHTMLHeader('Contact Incord Play');
		$this->pdf->Addpage();
		$this->pdf->load_view('frontend/survey_report_contact',$data);

		/*Recommendation page*/
		$this->pdf->SetHTMLHeader('Recommendations');
		$this->pdf->SetHTMLFooter('Page {PAGENO} of {nbpg}');
		$this->pdf->Addpage();
		$this->pdf->load_view('frontend/survey_report_recomm',$data);

		$invoice_name = FCPATH.'download_pdf/'.str_replace(" ","_",$login_user).'-'.$survey_id.'.pdf';
		$fName	= str_replace(" ","_",$login_user).'-'.$survey_id.'.pdf';
		
		/** Sending Mail to Email Id with attachment **/
		$this->load->helper('mail_helper');
		echo "Yes";
		$content = $this->pdf->Output($fName,'D');		
		$this->pdf->Output($invoice_name, 'F');
		$this->pdf->Output(); 
	}

	function downloadSurvey($survey_id=0){
		$CI	= & get_instance();
		$login_user=$CI->session->userdata('frontendUserName');

		$survey_id = base64_decode($survey_id);
		$data['survey_id']	= $survey_id;
		$data['customer_data'] = $this->Survey_model->gettheSurvey($survey_id);
		$data['survey_data']	= $this->Survey_model->getSurveyItemLists($survey_id);
		
		ini_set("memory_limit", -1);
	    	   @header("cache-Control: no-store, no-cache, must-revalidate");
	           @header("cache-Control: post-check=0, pre-check=0", false);
               @header("Pragma: no-cache");
               @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		$this->pdf->SetHTMLHeader('Page {PAGENO} of {nbpg}');
		$this->pdf->showImageErrors = true;
		$this->pdf->load_view('frontend/downloadSurvey',$data); 

		$htm='<table width="100%" cellspacing="0" cellpadding="0" border="0" style="padding:0px 20px;" class="footer" >
            	<tr>
                	<td width="75%" valign="top" colspan="3">
                    	<p><strong>FOB: Colchester, CT</strong></p>
                    </td>
                   <td colspan="3"></td>
                    <td width="25%" valign="top" align="right" colspan="2"><p><strong>Commercial Address</strong></p></td> 
                </tr>
                <tr>
                	<td width="70%" align="left" valign="top" colspan="5">
                    	InCord must be advised if any of the following delivery options apply to shipments:
                        lift gate, residential, guaranteed, job site or notification/appointment.
                        Additional Charges will apply.
                    </td>
                    <td colspan="1"></td>
                    <td width="30%" align="right" valign="top" colspan="2">
                    Sale may be subject to Sales Tax without a sales tax exemption form on file. We accept Visa, Master Card and AMEX
                    </td>
                </tr>
                
                 <tr>
                	<td width="30%" align="left" valign="top" colspan="4" style="padding-top:15px;">Page {PAGENO} of {nbpg}</td>
                    <td width="40%" align="center" valign="top" colspan="3" style="padding-top:15px;">Custom Safety Netting Solutions </td>
                    <td width="30%" align="right" valign="top" colspan="3" style="padding-top:15px;">incord.com</td>
                </tr>                	
              </table>';
        
        $this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetHTMLFooter($htm);
		$invoice_name = FCPATH.'download_pdf/'.str_replace(" ","_",$login_user).'-'.$survey_id.'.pdf';
		$fName	= str_replace(" ","_",$login_user).'-'.$survey_id.'.pdf';
		
		/** Sending Mail to Email Id with attachment **/
		$this->load->helper('mail_helper');
		echo "Yes";
		$content = $this->pdf->Output($fName,'D');		
		$this->pdf->Output($invoice_name, 'F');
		$this->pdf->Output();

	}

}