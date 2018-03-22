<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require_once APPPATH."/third_party/PHPExcel.php";
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	06-06-2017
 * @Created By	Prem Yadav
 * 
 */

class Products extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->model('frontend/User_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions	= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : array();
		$this->Management = 'Configuration';
	}
	
	/**
	 * This function used for display all product option types.
	 * 
	 * In this function we are getting all product type and options.
	 * 
	 * @Function	index()
	 * @Param		void(0)
	 * @Created		26-06-2017
	 * 
	 * */
	
	function index(){
		$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery-customselect-1.9.1.min','jquery.dataTables.min','pop-up-model','parsley.min');
		$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min');
		$data['title']	= 'product';
		
		
		$productType	= 'all';$optionType	= 'all';$itemCode	= 'all';
		$getProductOptionParameters	= array('productType'=>$productType,'optionType'=>$optionType,'itemCode'=>$itemCode);
		$productOptions		= getAllProductOptions($getProductOptionParameters);
		$searchData			= $this->input->post();
		if(!empty($searchData)){
			$productType	= !empty($searchData['search_product_type']) ? trim($searchData['search_product_type']) : 'all' ;
			$optionType		= !empty($searchData['search_option_type']) ? trim($searchData['search_option_type']) : 'all' ;
			$itemCode		= !empty($searchData['search_item_code']) ? trim($searchData['search_item_code']) : 'all' ;
			$getProductOptionParameters	= array('productType'=>$productType,'optionType'=>$optionType,'itemCode'=>$itemCode);
			$productOptions		= getAllSearchProductOptions($getProductOptionParameters);
		}
		
		$data['searchParam']= $getProductOptionParameters;
		$data['productOptions']		= $productOptions;
		$this->load->view('frontend/product_options', $data);
	}
	
	function addoption(){
		if(!empty($this->group_permissions) && in_array(11,$this->group_permissions)){
				$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap'); 
				$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap');
				$data['title']	= 'product';
				$postData		= $this->input->post();
				if(!empty($postData)){
					$products		= !empty($postData['product']) ? $postData['product'] : array();
					$itemCodes		= !empty($postData['itemcode']) ? $postData['itemcode'] : array();
					$optionTypes	= !empty($postData['optiontype']) ? $postData['optiontype'] : array();
					$activityCodes	= !empty($postData['activity_code']) ? $postData['activity_code'] : array();
					$quantites		= !empty($postData['quantity']) ? $postData['quantity'] : array();
					if(!empty($products)){
						foreach($products as $key=>$val){
							$n_product	= !empty($val) ? $val : '';
							$product	= substr($n_product, strpos($n_product, "[") + 1, (strpos($n_product, "]") - strpos($n_product, "[") -1));
							$quantity	= !empty($quantites[$key]) ? $quantites[$key] : 0;
							$itemCode	= !empty($itemCodes[$key]) ? $itemCodes[$key] : '';
							$optionType	= !empty($optionTypes[$key]) ? $optionTypes[$key] : '';
							$activityCode	= !empty($activityCodes[$key]) ? $activityCodes[$key] : '';
							$insertData		= array('update_product'=>$product,'itemcode'=>$itemCode,'activity_code'=>$activityCode,
											'optiontype'=>$optionType,'quantity'=>$quantity);
							//dump($insertData);die;
							$result		= manageProductOption($insertData);
							if(!empty($result)){
								$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Product option updated successfully.</p></div>';
								$this->session->set_flashdata('message',$message);
								redirect('products');
							}
						}
					}
				}
				$groups	= $this->User_model->getAllGroup();
				$data['groups']	= $groups;
				$this->load->view('frontend/add_option', $data);
		}else{
			$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized..</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('products');
		}
	}
	
	/**
	 * This function used for update product option.
	 * 
	 * In this function we are update product option information.
	 * 
	 * @Function	updateProductOption()
	 * @Param		void(0)
	 * @Created		27-06-2017
	 * @Return		boolean
	 * 
	 * */
	function updateProductOption(){
		if(!empty($this->group_permissions) && in_array(12,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$result	= manageProductOption($postData);
				if(!empty($result)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Product option updated successfully.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('products');
				}
			}
		}else{
			$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized..</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('products');
		}
	}
	
	
	/**
	 * This function used for get product item list basis on product type.
	 * 
	 * @Function	getProductList()
	 * @Param		void(0)
	 * @Created		27-06-2017
	 * @Return		string
	 * */
	function getProductList(){
		$type	= $this->input->post('type');
		if($type=='custom_net'){
			$typeNew	= 'Custom Net';
		}
		if($type=='custom_psn'){
			$typeNew	= 'Custom PSN';
		}
		if($type=='baynets'){
			$typeNew	= 'BayNets';
		}
		if($type=='rocbloc'){
			$typeNew	= 'RocBloc';
		}
		if($type=='template'){
			$typeNew	= 'Template';
		}
		if($type=='lily_pad'){
			$typeNew	= 'Lily Pad';
		}
		if($type=='netform'){
			$typeNew	= 'Netform';
		}
		if($type=='saleskit'){
			$typeNew	= 'SalesKit';
		}
		
		if($type=='write_in'){
			$typeNew	= '';
			echo $products=itemList();
		}
		if($type=='hardware'){
			$typeNew	= '';
			echo $products	= getpopulateHardware();
		}
		if(!empty($typeNew)){
			echo'<option value="">Select Product</option>';
			 netProduct($typeNew);
		}
	}
	
	/**
	 * This function used for delete product option.
	 * 
	 * @Function	deleteProductOption()
	 * @Param		void(0)
	 * @Created		29-06-2107
	 * @Return		string
	 * */
	 
	function deleteProductOption(){
		if(!empty($this->group_permissions) && in_array(13,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$delete	= deleteProductOption();
				if($delete){
					echo "Coming Soon";
				}else{
					echo "No";
				}
			}
		}else{
			$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized..</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('products');
		}
	}
	
	/**
	 * This function used for search the Item code within auto suggestion function.
	 * 
	 * @Function	autoCompleteItemCodeSearch()
	 * @Param		void(0)
	 * @Created		10-10-2017
	 * 
	 * */
	public function autoCompleteItemCodeSearch(){
		$key	=	$this->input->get('term');
		$suggest="";
		if(!empty($key) && strlen($key) > 2){
			$key	= str_replace("%20"," ",$key);
			$key	= trim($key);
		}
		$suggest	= getItemCodes($key);
		echo json_encode($suggest);
	}
	
	/**
	 * This function used for search the Vendor code within auto suggestion function.
	 * 
	 * @Function	autoCompleteItemCodeSearch()
	 * @Param		void(0)
	 * @Created		10-10-2017
	 * 
	 * */
	public function autoCompleteVendroCodeSearch(){
		$key	=	$this->input->get('term');
		$suggest="";
		if(!empty($key) && strlen($key) > 2){
			$key	= str_replace("%20"," ",$key);
			$key	= trim($key);
		}
		$suggest	= getVendorCodeNo($key);
		echo json_encode($suggest);
	}
	
}
