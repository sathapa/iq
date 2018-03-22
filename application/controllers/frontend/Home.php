<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Home Controller
 *
 * @package		Quoteweb 
 * @subpackage	Controller
 * @category	Controller
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @created by Sandeep singh
 * 
 */

class Home extends CI_Controller {
	
	function __construct() {
		//die('PP');
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
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
		$this->Management = 'Home';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	/**
	 * @Function	-: customnet()
	 * @Description	-: This function used for display custom net page of site
	 * @Param		-: No Parameter
	 * @created		-: 07-03-2017
	 * 
	 * */
	function customnet(){
		if(!empty($this->group_permissions) && in_array(1,$this->group_permissions)){
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model','switch');
			$data['title']	= 'customnet';
			$countries		= getAllCountry();
			$data['countries']	= $countries;
			$this->load->view('frontend/index', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	/**
	 * @Function	-: managequote()
	 * @Description	-: This function used for load the page of manage quote list
	 * @Param		-: No Parameter
	 * @created		-: 10-04-2017
	 * 
	 * */
	
	
	function managequote(){
		$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','parsley.min','jquery.dataTables.min','jquery.PrintArea','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','font-awesome.min');
		$data['title']	= 'managequote';
		$login_user		= $this->session->userdata('frontendUserName');
		
		/* Checking the Cookies History data for filter the quotes */
		$customerAccount 		= '';
		$searchQuoteId 			= !empty($_COOKIE['quote-search-id']) ? $_COOKIE['quote-search-id'] : '';
		$searchCustomer 		= !empty($_COOKIE['quote-search-customer']) ? $_COOKIE['quote-search-customer'] : '';
		$searchContact 			= '';
		$customerInfo				= (!empty($searchCustomer) && $searchCustomer!='') ? explode(' [',$searchCustomer):'';
		if(!empty($customerInfo[0])){
			$customerAccount	= trim($customerInfo[0]);
		}
		$searchDivision 		= !empty($_COOKIE['quote-search-division']) ? $_COOKIE['quote-search-division'] : '';
		$searchStatus 			= !empty($_COOKIE['quote-search-status']) ? $_COOKIE['quote-search-status'] : 'Draft';

		$searchPostData	= $this->input->post();
		if(!empty($searchPostData)){
			$searchQuoteId		= !empty($searchPostData['search_quoteid']) ? trim($searchPostData['search_quoteid']) : '';
			$searchCustomer		= !empty($searchPostData['search_customer']) ? trim($searchPostData['search_customer']) : '';
			$searchContact 		= !empty($searchPostData['search_contact']) ? trim($searchPostData['search_contact']) : '';
			$customerInfo		= (!empty($searchCustomer) && $searchCustomer!='') ? explode(' [',$searchCustomer):'';
			if(!empty($customerInfo[0])){
				$customerAccount	= trim($customerInfo[0]);
			}
			$searchDivision		= !empty($searchPostData['search_division']) ? trim($searchPostData['search_division']) : '';
			$searchStatus			= !empty($searchPostData['search_quote_status']) ? trim($searchPostData['search_quote_status']) : 'Draft';
		}
		$searchParam			= array('searchQuoteId'=>$searchQuoteId,'searchCustomer'=>$searchCustomer,'searchDivision'=>$searchDivision,'searchStatus'=>$searchStatus);
		$data['searchParam']	= $searchParam;
		$data['quote_list']		= $this->Main_model->getQuotelist($searchQuoteId,$customerAccount,$searchDivision,$login_user,$searchStatus,$searchContact);
		//dump($data['quote_list']);die;
		$this->load->view('frontend/managequote', $data);
	}
	
	function FromCRMindex($sageNumber=null){
		$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','parsley.min','jquery.dataTables.min','jquery.PrintArea','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','font-awesome.min');
		$data['title']	= 'managequote';
		$login_user		= $this->session->userdata('frontendUserName');
		
		$searchQuoteId		= '';
		$sageNumber			= !empty($sageNumber) ? trim($sageNumber) : '';
		$searchCustomer		= '';
		$searchDivision		= '';
		$searchStatus		= 'Draft';
	
		$searchParam			= array('searchQuoteId'=>$searchQuoteId,'searchCustomer'=>$searchCustomer,'searchDivision'=>$searchDivision,'searchStatus'=>$searchStatus);
		$data['searchParam']	= $searchParam;
		$data['quote_list']		= $this->Main_model->getQuotelist($searchQuoteId,$sageNumber,$searchDivision,$login_user,$searchStatus);
		//dump($data['quote_list']);die;
		$this->load->view('frontend/managequote', $data);
	}
	
	/**
	 * @Function	-: viewquote()
	 * @Description	-: This function used for load the view details of quote item list
	 * @Param		-: No Parameter
	 * @created		-: 25-03-2017
	 * 
	 * */
	
	function viewquote($quoteId=null){
		
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','bootstrap','confirmation','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','jquery.PrintArea','jquery.table2excel'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','font-awesome.min');
		$data['title']	= 'managequote';
		$login_user		= $this->session->userdata('frontendUserName');
		$quoteUrl	= base64_decode($quoteId);
		$quoteUrl	= explode('#',$quoteUrl);
		$quoteId	= !empty($quoteUrl[0]) ? $quoteUrl[0] : '';
		$proposalId	= !empty($quoteUrl[1]) ? $quoteUrl[1] : '';
		$quoteStatus= !empty($quoteUrl[2]) ? $quoteUrl[2] : '';
		$quoteDetails	= $this->Main_model->getProductLists($quoteId);
		//dump($quoteDetails);die;
		$data['quote_existing_product']	= $quoteDetails;
		if(empty($data['quote_existing_product'])){
			redirect('managequote');
		}
		$data['quote']			= $quoteId;
		$data['quoteStatus']	= $quoteStatus;
		$data['proposalNum']	= $proposalId;
		$this->load->view('frontend/viewquote', $data);
	}
	
	/**
	 * This function used for get customer basis on keyword searching.
	 * 
	 * @Function	-: getCustomer()
	 * @Param		-: No Parameter
	 * @created		-: 02-03-2017
	 * 
	 * */
	function getCustomer(){
		$key	=	$this->input->get('term');
		$suggest="";
		if(!empty($key) && strlen($key) > 2){
			$key	= str_replace("%20"," ",$key);
			$key	= trim($key);
		}
		$suggest	= customerList($key);
		echo json_encode($suggest);
	}
	
	/**
	 * @Function	-: getCustomer()
	 * @Param		-: No Parameter
	 * @created		-: 02-03-2017
	 * 
	 * */
	function getItems(){
		$key	=	$this->input->get('term');
		$suggest="";
		if(!empty($key) && strlen($key) > 2){
			$key	= str_replace("%20"," ",$key);
			$key	= trim($key);
		}
		$suggest	= itemList($key);
		echo json_encode($suggest);
		
	}
	
	
	/**
	 * @Function	-: getProductSpecification()
	 * @Description	-: This function used for product  specification
	 * @Param		-: No Parameter
	 * @created		-: 05-03-2017
	 * 
	 * */
	function getProductSpecification(){
		$keyword	=	$this->input->post('keyword');
		if(!empty($keyword)){
			echo $pp	= getProductSpecification($keyword);
		}
	}
	
	/**
	 * @Function	-: populateThreadlist()
	 * @Description	-: This function used for populate the thread options
	 * @Param		-: No Parameter
	 * @created		-: 05-03-2017
	 * 
	 * */
	function populateThreadlist(){
		$keyword	=	$this->input->post('keyword');
		if(!empty($keyword)){
			echo $pp	= getPopulateThreadlist($keyword);
		}
	}
	
	/**
	 * @Function	-: populateProductOptions()
	 * @Description	-: This function used for populate the product options
	 * @Param		-: No Parameter
	 * @created		-: 05-03-2017
	 * 
	 * */
	function populateProductOptions(){
		$input		=	$this->input->post();
		if(!empty($input)){
			echo $pp	= getpopulateProductOptions($input);
		}
	}

	function populateSLashOptions(){
		$input		=	$this->input->post();
		if(!empty($input)){
			echo $pp	= getSLashOptions($input);
		}
	}
	
	/**
	 * @Function	-: customNetQuote()
	 * @Description	-: This function used for calculate the cost of custom net quote 
	 * @Param		-: No Parameter
	 * @created		-: 04-03-2017
	 * 
	 * */
	function customNetQuote(){
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$result	= customNetQuote($postData);
			echo json_encode($result);die;
		}
	}
	
	/**
	 * @Function	-: saveQuote()
	 * @Description	-: This function used for save the custom net quote details
	 * @Param		-: No Parameter
	 * @created		-: 05-03-2017
	 * 
	 * */
	function saveQuote(){
		
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type=!empty($postData['quote_line'])?3:1;
			$pp	= customNetQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}
	
	
	/**
	 * @Function	-: getViewPage()
	 * @Description	-: This function used for show the page on change event in costom net page
	 * @Param		-: No Parameter
	 * @return		-: html
	 * 
	 * */
	function getViewPage(){
		
		$page	= $this->input->post('view');
		if(!empty($page)){
			if($page=='sample_ts'){
				$page	= 'samplet';
			}
			$this->load->view('frontend/'.$page);
		}
	}
	/**
	 * @Function	-: getCustomPsnQuote()
	 * @Description	-: This function used for calculate the custom psn quote cost
	 * @Param		-: No Parameter
	 *  @return		-:json
	 * 
	 * */
	function getCustomPsnQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$psnQuote	= getCustomPsnQuote($postData);
			echo json_encode($psnQuote);die;
		}
	}
	/**
	 * @Function	-: savePsnQuote()
	 * @Description	-: This function used for save the custom psn quote
	 * @Param		-: No Parameter
	 * @created		-: 15-03-2017
	 * @return		-:json
	 * */
	function savePsnQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			 $type=!empty($postData['quote_line'])?3:1;			
			$psnQuote	= getCustomPsnQuote($postData,$type);
			echo json_encode($psnQuote);die;
		}
	}
	
	
	/**
	 * @Function	-: calculatehardwarequote()
	 * @Description	-: This function used for calculate the cost of hardware
	 * @Param		-: No Parameter
	 * @created		-: 05-04-2017
	 * @return		-:json
	 * */
	function calculatehardwarequote(){
		 $postData	= $this->input->post();
		if(!empty($postData)){
			$hardwareQuote	= getHardwareQuote($postData);
			echo json_encode($hardwareQuote);die;
		}
	}
	
	
	
	/**
	 * @Function	-: savehardwarequote()
	 * @Description	-: This function used for save the hardware quote 
	 * @Param		-: No Parameter
	 * @created		-: 05-04-2017
	 * @return		-:json
	 * */
	function savehardwarequote(){
		$postData	= $this->input->post();
			if(!empty($postData)){
				$type=!empty($postData['quote_line'])?3:1;	
				$hardwareQuote	= getHardwareQuote($postData,$type);
				echo json_encode($hardwareQuote);die;
			}
	}
	
	
	/**
	 * @Function	-: calculateSampletQuote()
	 * @Description	-: This function used for calculate the cost of samplet
	 * @Param		-: No Parameter
	 * @created		-: 07-07-2017
	 * @return		-: json
	 * */
	function calculateSampletQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$hardwareQuote	= getSampletQuote($postData);
			echo json_encode($hardwareQuote);die;
		}
	}
	
	
	
	/**
	 * @Function	-: saveSampletQuote()
	 * @Description	-: This function used for save the samplet quote 
	 * @Param		-: No Parameter
	 * @created		-: 17-07-2017
	 * @return		-: json
	 * */
	function saveSampletQuote(){
		$postData	= $this->input->post();
			if(!empty($postData)){
				$type=!empty($postData['quote_line'])?3:1;
				$hardwareQuote	= getSampletQuote($postData,$type);
				echo json_encode($hardwareQuote);die;
			}
	}
	
	
	/**
	 * @Function	-: calculateRopeQuote()
	 * @Description	-: This function used for calculate the cost of rope
	 * @Param		-: No Parameter
	 * @created		-: 11-07-2017
	 * @return		-: json
	 * */
	function calculateRopeQuote(){
		 $postData	= $this->input->post();
		if(!empty($postData)){
			$ropeQuote	= getRopeQuote($postData);
			echo json_encode($ropeQuote);die;
		}
	}
	
	
	
	/**
	 * @Function	-: saveRopeQuote()
	 * @Description	-: This function used for save the hardware rope 
	 * @Param		-: No Parameter
	 * @created		-: 11-07-2017
	 * @return		-: json
	 * */
	function saveRopeQuote(){
		$this->load->library('email');
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type=!empty($postData['quote_line'])?3:1;
			$ropeQuote	= getRopeQuote($postData,$type);
			echo json_encode($ropeQuote);die;
		}
	}
	
	
	/**
	 * This function used for created a CRM and Sage.
	 * 
	 * In this function we are creating a CRM and Sage click on both differents button managequote screens.
	 * 
	 * @Function	createSageAndCRM()
	 * @Param		void(0)
	 * @Created		15-04-2017
	 * @Return		string()
	 * 
	 * */
	function createSageAndCRM(){
		if(!empty($this->group_permissions) && in_array(5,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$quoteId	= !empty($postData['quote_id']) ? $postData['quote_id'] : '';
				$type		= !empty($postData['type']) ? $postData['type'] : '';
				if(!empty($quoteId)&&!empty($type)){
					if($type=='CRM'){
						$pl	= createdCRM($quoteId);
						echo json_encode(array('response'=>$pl));die;
					}
					if($type=='Sage'){
						$pl	= createdSage($quoteId);
						echo json_encode(array('response'=>$pl));die;
					}
				}
			}
		}else{
			echo "You are not authorized.";
		}
	}
	
	/**
	 * This function used for delete quote line
	 * 
	 * In this function we are deleting quote line
	 * 
	 * @Function	deletedQuoteLine()
	 * @Param		void(0)
	 * @Created		15-04-2017
	 * @Return		string()
	 * 
	 * */
	function deletedQuoteLine(){
		if(!empty($this->group_permissions) && in_array(9,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$quoteId	= !empty($postData['quote_id']) ? $postData['quote_id'] : '';
				$quoteLineId	= !empty($postData['quote_line_no']) ? $postData['quote_line_no'] : '';
				if(!empty($quoteId) && !empty($quoteLineId)){
					$deletQuoteLine	= deleteQuoteLine($quoteId,$quoteLineId);
					if($deletQuoteLine){
						echo "Yes";
					}else{
						echo "No";
					}
				}
			}
		}else{
			echo "You are not authorized.";
		}
	}
	
	/**
	 * This function used for delete quote
	 * 
	 * In this function we are deleting quote
	 * 
	 * @Function	deletedQuote()
	 * @Param		void(0)
	 * @Created		15-04-2017
	 * @Return		string()
	 * 
	 * */
	function deleteQuote(){
		if(!empty($this->group_permissions) && in_array(8,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$quoteId	= !empty($postData['quote_id']) ? $postData['quote_id'] : '';
				$proposalNumber	= !empty($postData['proposalNum']) ? $postData['proposalNum'] : '';
				if(!empty($quoteId)){
					$deletQuote	= deleteQuote($quoteId);
					if($deletQuote){
						echo "Your Proposal deleted successfully";
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Your Proposal ID ('.$proposalNumber.') deleted successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						}else{
							echo "Please try again.";
							$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Please try again.</p></div>';
							$this->session->set_flashdata('message',$message);
						}
				}
			}
		}else{
			echo "You are not authorized.";
		}
	}
	/**
	 * @Function	-: createquoteclone()
	 * @Description	-: This function used for create a clone of quote
	 * @Param		-: array()
	 * @created		-: 28-04-2017
	 * @return		-:quote_id
	 * */
	function createquoteclone(){
		if(!empty($this->group_permissions) && in_array(5,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$quoteId	= !empty($postData['clone_quote_id']) ? $postData['clone_quote_id'] : '';
				$customer_id	= !empty($postData['customer']) ? $postData['customer'] : '';
				if(!empty($quoteId)&&!empty($customer_id)){
					$deletQuote	= create_clone_quote($quoteId,$customer_id);
					if(!empty($deletQuote)){
						echo 	$deletQuote;
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You have successfully created new Quote with ID:'.$deletQuote.'.</p></div>';
						$this->session->set_flashdata('message',$message);
						}else{
						echo '';
						$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Please try again.</p></div>';
						$this->session->set_flashdata('message',$message);
						}
				}
			}
			die;
		}else{
			echo "You are not authorized.";
		}
	}
	/**
	 * @Function	-: addNewItem()
	 * @Description	-: This function used for add new item in existing quote
	 * @Param		-: quote_id
	 * @created		-: 28-04-2017
	 * 
	 * */
	function addNewItem($quote_id){
		
		if(empty($quote_id)){
			redirect('customnet');
		}
		$quote_data	= $this->Main_model->getQuotelist($quote_id,'all','all','all','all');
		$proposalId			= !empty($quote_data[0]->proposal_num) ? $quote_data[0]->proposal_num : '';
		$data['proposalNum']	= $proposalId;
		if(empty($quote_data)){
			redirect('customnet');
		}
		$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
		$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model','switch');
		$data['title']	= 'customnet';
		$data['quote_list']	= $quote_data[0];
		//dump($quote_data[0]);die;
		$this->load->view('frontend/addnewitem', $data);
	}
	/**
	 * @Function	-: editquoteitem()
	 * @Description	-: This function used for edit the any quote line by the quote id and line number
	 * @Param		-: quote_id
	 * @created		-: 03-05-2017
	 * 
	 * */	
	function editquoteitem($quote_id){
		if(!empty($this->group_permissions) && in_array(2,$this->group_permissions)){
			if(empty($quote_id)){
				redirect('customnet');
			}
			$quote=base64_decode($quote_id);
			$quote=explode('_',$quote);
			$proposalId	= 
			$quote_data	= $this->Main_model->getQuoteDetails($quote[0],$quote[1]);
			$quote_data	= json_decode($quote_data[0]->get_quote_detail_items);
			
			if(empty($quote_data)){
				redirect('customnet');
			}
			//dump($quote_data[0]);echo "GGG";die;
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model','switch');
			$data['title']	= 'customnet';
			$data['quote_list']	= $quote_data[0];
			$data['type']=$quote[2];
			$data['proposalId']=!empty($quote[3]) ? $quote[3] : '';
			$data['quoteStatus']=!empty($quote[4]) ? $quote[4] : '';
			$data['line_no']=$quote[1];
			$data['quote_id']=$quote[0];
			$this->load->view('frontend/editquoteitem', $data);
		}else{
			redirect('dashboard');
		}
		
	}
	/**
	 * @Function	-: index()
	 * @Description	-: This function used for calculate the cost of lily pad quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function lilypadQuote(){
		
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$result	= lilyPadQuote($postData);
			echo json_encode($result);die;
		}
	}
	/**
	 * @Function	-: savelilypadQuote()
	 * @Description	-: This function used for save lilypad quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function savelilypadQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type	= !empty($postData['quote_line']) ? 3 : 1;
			$pp		= lilyPadQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}
	/**
	 * @Function	-: baynetQuote()
	 * @Description	-: This function used for calculate the cost of bay net quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function baynetQuote(){
		
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$result	= baynetQuote($postData);
			echo json_encode($result);die;
		}
	}
	/**
	 * @Function	-: savebaynetQuote()
	 * @Description	-: This function used for save baynet quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function savebaynetQuote(){
		
		$postData	= $this->input->post();
		if(!empty($postData)){
			 $type=!empty($postData['quote_line'])?3:1;		
			$pp	= baynetQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}
	/**
	 * @Function	-: CargoClimbingQuote()
	 * @Description	-: This function used for calculate the cost of CargoClimbing net quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function cclimbQuote(){
		$postData = $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$pp = savecClimbQuote($postData);
			echo json_encode($pp);die;
		}
	}
	/**
	 * @Function	-: saveCargoClimbingQuote()
	 * @Description	-: This function used for save CargoClimbing net quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function savecclimbQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type=!empty($postData['quote_line'])?3:1;		
			$pp	= savecClimbQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}	
	/**
	 * @Function	-: cargonetQuote()
	 * @Description	-: This function used for calculate the cost of cargo net quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
        function cargonetQuote(){
		$postData = $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$pp = saveCargonetQuote($postData);
			echo json_encode($pp);die;
		}
	}
	/**
	 * @Function	-: savecargonetQuote()
	 * @Description	-: This function used for save cargo net quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function savecargonetQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type=!empty($postData['quote_line'])?3:1;		
			$pp	= saveCargonetQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}	
	/**
	 * @Function	-: skynetQuote()
	 * @Description	-: This function used for calculate the cost of skynet quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
	function skynetQuote(){
		$postData = $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$pp = saveSkynetQuote($postData);
			echo json_encode($pp);die;
		}
	}
	/**
	 * @Function	-: saveskynetQuote()
	 * @Description	-: This function used for save skynet quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function saveskynetQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$type=!empty($postData['quote_line'])?3:1;		
			$pp	= saveSkynetQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}	

    /**
	 * @Function	-: webnetQuote()
	 * @Description	-: This function used for calculate the cost of webnet quote
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-:json
	 * */
    function webnetQuote(){
        $postData   = $this->input->post();
        $postData['download_excel']='1';
        if(!empty($postData)){
            $result = saveWebnetQuote($postData);
            echo json_encode($result);die;
        }
    }
    /**
	 * @Function	-: savewebnetQuote()
	 * @Description	-: This function used for save webnet quote details
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
    function savewebnetQuote(){
        $postData   = $this->input->post();
        if(!empty($postData)){
            $type=!empty($postData['quote_line'])?3:1;      
            $pp = saveWebnetQuote($postData,$type);
            echo json_encode($pp);die;
        }
    }    

	/**
	 * @Function	-: rocblocQuote()
	 * @Description	-: This function used for calculate the cost of rocbloc quote
	 * @Param		-: No Parameter
	 * @created		-: 06-05-2017
	 * @return		-: json
	 * */
	function rocblocQuote(){
		
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$result	= saveRocblocQuote($postData);
			echo json_encode($result);die;
		}
	}
	/**
	 * @Function	-: saverocblocQuote()
	 * @Description	-: This function used for save rocbloc quote details
	 * @Param		-: No Parameter
	 * @created		-: 06-05-2017
	 * @return		-: json
	 * */
	function saverocblocQuote(){
		
		$postData	= $this->input->post();
		if(!empty($postData)){
			 $type=!empty($postData['quote_line'])?3:1;		
			$pp	= saveRocblocQuote($postData,$type);
			echo json_encode($pp);die;
		}
	}	
	/**
	 * @Function	-: writeinQuote()
	 * @Description	-: This function used for calculate the cost of writein quote
	 * @Param		-: No Parameter
	 * @created		-: 06-05-2017
	 * @return		-:json
	 * */
	function writeinQuote(){
		
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			$result	= saveWriteinQuote($postData);
			echo json_encode($result);die;
		}
	}
	/**
	 * @Function	-: savewriteinQuote()
	 * @Description	-: This function used for calculate the cost of writein quote
	 * @Param		-: No Parameter
	 * @created		-: 06-05-2017
	 * @return		-:json
	 * */
	function savewriteinQuote(){
		
		$postData	= $this->input->post();
		$postData['download_excel']='1';
		if(!empty($postData)){
			 $type=!empty($postData['quote_line'])?3:1;	
			$result	= saveWriteinQuote($postData,$type);
			echo json_encode($result);die;
		}
	}
	/**
	 * @Function	-: download()
	 * @Description	-: This function used for download the quote details
	 * @Param		-: No Parameter
	 * @created		-: 12-05-2017
	 * @return		-: null
	 * */
	public function download($quote_id=0){
		//$quote_id	= $this->input->post('quote');
		if(empty($quote_id)){
			return 0;
		}
		$data['quote_id']	= $quote_id;
		$data['invoice_data']	=$this->Main_model->getProductLists($quote_id);
		$quote_header	= $this->Main_model->getQuotelist($quote_id,'all','all','all','all');
		$data['quote_list']	= $quote_header[0];
		//dump($data['quote_list']);die;
		$proposalNum		= !empty($quote_header[0]->proposal_num) ? $quote_header[0]->proposal_num : '';
		$data['proposalId']	= $proposalNum;
		if(empty($data['invoice_data'])){
			return 0;
		}ini_set('memory_limit', '640M');
				@header("cache-Control: no-store, no-cache, must-revalidate");
	           @header("cache-Control: post-check=0, pre-check=0", false);
               @header("Pragma: no-cache");
               @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		$this->pdf->SetHTMLHeader('Page {PAGENO} of {nbpg}');
		//$this->pdf->showImageErrors = true;
		//$this->load->view('frontend/download',$data); 
		$this->pdf->load_view('frontend/download',$data); 
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
		$fileNameQuoteProposal	= !empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name = FCPATH.'download_pdf/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$fName	= $fileNameQuoteProposal.'.pdf';
		
		/** Sending Mail to Email Id with attachment **/
		$this->load->helper('mail_helper');
		$pp	= sendMailForProposal(array('emailId'=>'prem@tisindiasupport.com','fileName'=>$fName,'file_type'=>'proposal'));
		//dump($pp);die;
		echo "Yes";
		$content = $this->pdf->Output($fName,'D');		
		$this->pdf->Output($invoice_name, 'F');
		$this->pdf->Output();

		
	}
	
	/**
	 * @Function	-: download()
	 * @Description	-: This function used for download the quote details
	 * @Param		-: No Parameter
	 * @created		-: 12-05-2017
	 * @return		-:null
	 * */
	public function downloadProposal($quote_id=0){
		if(empty($quote_id)){
			return 0;
		}
		$data['quote_id']	= $quote_id;
		$data['invoice_data']	=$this->Main_model->getProductLists($quote_id);
		$quote_header		= $this->Main_model->getQuotelist($quote_id,'all','all','all','all');
		$data['quote_list']	= $quote_header[0];
		$proposalNum		= !empty($quote_header[0]->proposal_num) ? $quote_header[0]->proposal_num : '';
		$data['proposalId']	= $proposalNum;
		if(empty($data['invoice_data'])){
			return 0;
		}ini_set("memory_limit", -1);
				@header("cache-Control: no-store, no-cache, must-revalidate");
	           @header("cache-Control: post-check=0, pre-check=0", false);
               @header("Pragma: no-cache");
               @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		//$this->pdf->showImageErrors = true;
		//$this->load->view('frontend/download',$data); 
		$this->pdf->load_view('frontend/download',$data); 
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
		$fileNameQuoteProposal	= !empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name = str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$this->pdf->Output($invoice_name,'D');
		
	}
	
	/**
	 * This function used for get customer default details.
	 * 
	 * In this function we are getting customer default data basis on customer number.
	 * 
	 * @Function	getCustomerDefaults()
	 * @Param		void(0)
	 * @Created		17-05-2017
	 * @Return		json_encode(array())
	 * 
	 * */
	function getCustomerDefaults(){
		$customer	= $this->input->post('customer');
			$result	= getCustomerDefaultsData($customer);
			echo json_encode($result);die;
		
	}
	
	/**
	 * This function used for calculate the cost of template.
	 * 
	 * @Function	-: calculateTemplateQuote()
	 * @Param		-: No Parameter
	 * @Created		-: 18-05-2017
	 * @Return		-: json
	 * */
	function calculateTemplateQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$templateQuote	= getTemplateQuote($postData);
			echo json_encode($templateQuote);die;
		}
	}
	/**
	 * This function used for save the hardware quote.
	 * 
	 * @Function	-: saveTemplateQuote()
	 * @Param		-: No Parameter
	 * @created		-: 18-05-2017
	 * @return		-: json
	 * */
	function saveTemplateQuote(){
		$postData	= $this->input->post();
			if(!empty($postData)){
				$type=!empty($postData['quote_line'])?3:1;	
				$hardwareQuote	= getTemplateQuote($postData,$type);
				echo json_encode($hardwareQuote);die;
			}
	}
	
	/*================= Netform Funtionality ===================*/
	
	/**
	 * This function used for calculate the cost of netform.
	 * 
	 * @Function	-: calculateNetformQuote()
	 * @Param		-: No Parameter
	 * @Created		-: 20-05-2017
	 * @Return		-: json
	 * */
	function calculateNetformQuote(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$netFormQuote	= getNetFormQuote($postData);
			echo json_encode($netFormQuote);die;
		}
	}
	
	/**
	 * This function used for save the netform quote.
	 * 
	 * @Function	-: saveNetformQuote()
	 * @Param		-: No Parameter
	 * @created		-: 23-05-2017
	 * @return		-: json
	 * */
	function saveNetformQuote(){
		$postData	= $this->input->post();
			if(!empty($postData)){
				$type=!empty($postData['quote_line'])?3:1;	
				$hardwareQuote	= getNetFormQuote($postData,$type);
				echo json_encode($hardwareQuote);die;
			}
	}
	/* this function use for create excel file by line of quote
	 * 
	 * */
	 function create_excelsheet(){
		 $input=$this->input->post();
		 $line=!empty( $input['line_id'])?$input['line_id']:'all';
		 $quote_data	= $this->Main_model->getQuoteDetails( $input['quote_id'], $line);
		$quote_data=json_decode($quote_data[0]->get_quote_detail_items);
		
		if(!empty($quote_data)){
			$table='<table class="excel_download">
			<tr><td>Product:</td><td>'.ucwords($input['type']).'</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
			$table .='<tr><td></td><td></td><td>Item#</td><td>QuantityPerNet</td><td>TotalQantity</td><td>UOM</td><td>Activity Code</td><td>Step</td></tr>';
			$quote_data2	= addQuantityNTotalQuantity($quote_data);
			foreach($quote_data2 as $val){
				$table .='<tr><td></td><td></td>
				<td>'.$val['item'].'</td>
				<td>'.round($val['QuantityPerNet'], 2).'</td>
				<td>'.round($val['TotalQantity'], 2).'</td>
				<td>'.$val['UOM'].'</td>
				<td>'.$val['Activity'].'</td>
				<td>'.$val['Step'].'</td></tr>';
			}
			/*foreach($quote_data as $val){
			$table .='<tr><td></td><td></td><td>'.$val->detail_description.'['.$val->product.']</td><td>'.round($val->detail_quantity, 2).'</td><td>'.round($val->detail_quantity, 2).'</td><td>'.$val->detail_uom.'</td><td>'.$val->detail_activitycode.'</td><td>'.$val->detail_wt_step.'</td></tr>';
			
			}*/
			echo $table .='</table>';
			
		}
	}
	
	/**
	 * This function used for update quote header .
	 * 
	 * In this function we are updating quote header basis on quote id.
	 * 
	 * @Function	updateQuoteHeader();
	 * @Param		void(0)
	 * @Created		25-05-2017
	 * @Return		Boolean
	 * 
	 * */
	function updateQuoteHeader(){
		if(!empty($this->group_permissions) && in_array(4,$this->group_permissions)){
			try{
				$postData	= $this->input->post();
				if(!empty($postData)){
					$data=updateQuoteHeader($postData);
					if($data){
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Quote header updated successfully.</p></div>';
					}else{
						$message='<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>Please Try again some issue occured.</div>';
					}
					$this->session->set_flashdata('message',$message);
					redirect('managequote');
				}
			}catch(Exception $ex){
				log_message('error','Unable to update quote header basis on quote id '.$ex->getMessage());
			}
		}else{
			redirect('dashboard');
		}
	}
	/**
	 * This function used for make quote lookup html
	 * 
	 * @Funtion		quoteLookupHtml()
	 * @Param		void(0)
	 * @Created		26-05-2017
	 * 
	 * */
	function quoteLookupHtml(){
		try{
			$postData	= $this->input->post();
			if(!empty($postData)){
				if(!empty($postData['htmlfor']) && $postData['htmlfor']=='uom'){
					$uom		= !empty($postData['uom']) ? $postData['uom'] : '';
					$uomHtml	= '<select name="uom" id="uom" >
									<option value="">None</option>';
					$uomHtml	.= getQuoteHeaderLookUp('activity_uom',$uom);
					$uomHtml	.= '</select>';
					echo json_encode(array('uom'=>$uomHtml));die;
				}else{
					$termCode		= !empty($postData['term_code']) ? $postData['term_code'] : '';
					$shipMethod		= !empty($postData['ship_methode']) ? $postData['ship_methode'] : '';
					$countryCode	= !empty($postData['country']) ? $postData['country'] : '';
					$termCodeHtml	= '<select name="term_code" id="term_code" >
										<option value="">None</option>';
					$termCodeHtml	.= getQuoteHeaderLookUp('term_code',$termCode);
					$termCodeHtml	.= '</select>';
					
					$shipMethodHtml	= '<select name="shipping_method" id="shipping_method"  >
										<option value="">None</option>';
					$shipMethodHtml	.= getQuoteHeaderLookUp('shipping_code',$shipMethod);
					$shipMethodHtml	.= '</select>';
					$countryHtml	= '<select name="update_quote_country" id="update_quote_country"  ><option value="">None</option>';
					$countries		= getAllCountry();
					if(!empty($countries) && is_array($countries)){
						foreach($countries as $country){
							$selectedCountry	= '';
							if(!empty($countryCode==$country->iso_country_code)){
								$selectedCountry	= "selected";
							}
							$countryHtml	.= '<option value="'.$country->iso_country_code.'" '.$selectedCountry.'>'.$country->country_name.'</option>'; 
						}
					}
					$countryHtml	.= '</select>';
					echo json_encode(array('term_code'=>$termCodeHtml,'shipMethod'=>$shipMethodHtml,'countryHtml'=>$countryHtml));die;
				}
			}
		}catch(Exception $ex){
			log_message('error','Unable to update quote header basis on quote id '.$ex->getMessage());
		}
	}
	
	/**
	 * 
	 * 
	 * */
	function getCuttingStyleChangesOnProduct(){
		try{
			$numberOfcuttingStyle	= $this->input->post('number');
			$cuttingStyle	= getQuoteHeaderLookUp('cutting_style','',$numberOfcuttingStyle);
			return $cuttingStyle;
		}catch(Exception $ex){
			log_message('error','Unable to display cutting style '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update item code data.
	 * 
	 * 
	 * */
	
	function updateItemCodeData(){
		if(!empty($this->group_permissions) && ( in_array(10,$this->group_permissions) || in_array(30,$this->group_permissions))){
			try{
				$itemCodeInfo	= $this->input->post();
				$updateInfo		= updateItemInfo($itemCodeInfo);
			}catch(Exception $ex){
				log_message('error','Unable to update item code info '.$ex->getMessage());
			}
		}else{
			echo "You are not authorized..!";
		}
	}
	
	/**
	 * This function used for get products default details.
	 * 
	 * In this function we are getting products default data basis on selected product & wtclass.
	 * 
	 * @Function	getProductDefaults()
	 * @Param		void(0)
	 * @Created		17-05-2017
	 * @Return		json_encode(array())
	 * 
	 * */
	function getProductDefaults(){
		$product_type = $this->input->post('ptype');
		$wt_class = $this->input->post('wt');
			$result	= getProductDefaultsData($product_type, $wt_class);
			echo json_encode($result);die;
		
	}
	/*  ================= Saleskit Function ======================*/
	
	/**
	 * This function get for saleskit product options.
	 *  
	 * @Function	getSaleskitProductOptions()
	 * @Param		void(0)
	 * @Created		16-06-2017
	 * 
	 * */
	function getSaleskitProductOptions(){
		$input	= $this->input->post();
		if(!empty($input)){
			$response	= getSaleskitProductOptions($input);
			echo $response;
		}
	}
	
	/**
	 * @Function	-: calculateSaleskitQuote()
	 * @Description	-: This function used for calculate the cost of saleskit
	 * @Param		-: No Parameter
	 * @created		-: 16-06-2017
	 * @return		-: json
	 * */
	function calculateSaleskitQuote(){
		 $postData	= $this->input->post();
		if(!empty($postData)){
			$saleskitQuote	= getSaleskitQuote($postData);
			echo json_encode($saleskitQuote);die;
		}
	}
	
	
	
	/**
	 * @Function	-: saveSaleskitQuote()
	 * @Description	-: This function used for save the saleskit quote 
	 * @Param		-: No Parameter
	 * @created		-: 16-06-2017
	 * @return		-: json
	 * */
	function saveSaleskitQuote(){
		$postData	= $this->input->post();
			if(!empty($postData)){
				$type=!empty($postData['quote_line']) ? 3 : 1;
				$saleskitQuote	= getSaleskitQuote($postData,$type);
				echo json_encode($saleskitQuote);die;
			}
	}
	
	/**
	 * This function used for add new contact details.
	 * 
	 * @Function	addNewContactDetails()
	 * @Param		void(0)
	 * @Created		14-07-2017
	 * @Return 		boolean
	 * 
	 * */
	function addNewContactDetails(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			echo $response	= addNewContact($postData);die;
		}
	}
	
	/**
	 * This function used for add customer info.
	 * 
	 * @Function	addCustomerInfoFromCreateQuotePage()
	 * @Param		void(0)
	 * @Created		06-09-2017
	 * 
	 * */
	function addCustomerInfoFromCreateQuotePage(){
		$postData	= $this->input->post();
		$status		= 'No';$msg	= 'Customer not added';
		if(!empty($postData)){
			$response	= addUpdateCustomer($postData);
			if(!empty($response)){
				$status	= 'Yes';
				$msg	= 'Customer added successfully.';
			}
		}
		echo json_encode(array('status'=>$status,'msg'=>$msg));die;
	}
	
	/**
	 * This function used for set value of company name,street address, city, state, zipcode, country based on customer change.
	 * 
	 * @Function	getCustomerByAccountId()
	 * @Param		void(0)
	 * @Created		12-09-2017
	 * 
	 * */
	function getCustomerByAccountId(){
		$postData	= $this->input->post('account');
		if(!empty($postData)){
			$postData	= explode(' ',$postData);
			$account	= !empty($postData[0]) ? $postData[0] : '';
			if(!empty($account)){
				$customer	= getCustomerBasedOnAccountId($account);
				$companyName	= ''; $streetAddress	=''; $address1City	='';
				$address1State	= ''; $address1Zipcode	='';
				$countryHtml	='';
				if(!empty($customer)){
					$companyName		= !empty($customer->companyname) ? $customer->companyname : '';
					$address1Street1	= !empty($customer->address1_street1) ? $customer->address1_street1 : '';
					$address1Street2	= !empty($customer->address1_street2) ? $customer->address1_street2 : '';
					$address1City		= !empty($customer->address1_city) ? $customer->address1_city : '';
					$address1State		= !empty($customer->address1_stateprovince) ? $customer->address1_stateprovince : '';
					$address1Zipcode	= !empty($customer->address1_zippostalcode) ? $customer->address1_zippostalcode : '';
					$address1Country	= !empty($customer->address1_countryregion) ? $customer->address1_countryregion : '';
					$streetAddress		= $address1Street1.' '.$address1Street2;
					$countries		= getAllCountry();
					if(!empty($countries) && is_array($countries)){
						foreach($countries as $country){
							$countryName		= !empty($country->country_name) && $country->country_name=='United States of America' ? 'USA' : $country->country_name;
							$selectedCountry	= '';
							if(!empty($address1Country==$country->iso_country_code)){
								$selectedCountry	= "selected";
							}
							$countryHtml	.= '<option value="'.$country->iso_country_code.'" '.$selectedCountry.'>'.$countryName.'</option>'; 
						}
					}
				}
				echo json_encode(array('companyDisplayName'=>$companyName,'streetAddress'=>$streetAddress,
										'addressCity'=>$address1City,'addressState'=>$address1State,
										'addressZipcode'=>$address1Zipcode,'addressCountry'=>$countryHtml,
									)); die;
			}
			
		}
	}
	
	/**
	 * @Function	-: QuoteSummary()
	 * @Description	-: This function used getting the summary of the Quote
	 * @Param		-: No Parameter
	 * @created		-: 12-02-2018
	 * 
	 * */
	function QuoteSummary(){
		$quote_id	=	$this->input->post('quoteID');
		if(!empty($quote_id)){
			$quote_data	= $this->Main_model->getProductLists_ui($quote_id);
			echo json_encode($quote_data);
		}
	}

	/**
	 * @Function	-: BOMSummary()
	 * @Description	-: This function used getting the summary of the BOM
	 * @Param		-: No Parameter
	 * @created		-: 12-02-2018
	 * 
	 * */
	function BOMSummary(){
		$quote_id	=	$this->input->post('quoteID');
		if(!empty($quote_id)){
			$quote_data	= $this->Main_model->getQuoteDetailsNew($quote_id,0);
			$quote_data	= json_decode($quote_data[0]->get_quote_bom_details);
			echo json_encode($quote_data);
		}
	}

	/*================= Controller end ======================== */
	
}
