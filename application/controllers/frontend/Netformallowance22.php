<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	25-09-2017
 * @Created By	Prem Yadav
 * 
 * */

class Netformallowance extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Netform_allowance_model');
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
		$this->Management = 'Configuration';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	/**
	 * This function used for display the Netform Allowance details.
	 * 
	 * @Function	index()
	 * @Param		void(0)
	 * @Created		25-09-2017
	 * 
	 * */
	
	function index(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','parsley.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','');
			$data['title']	= 'Netform Allowance';
			$filterForm	= '';$filteredOrders=array();$filterData	= array();
			$netformAllowances		= array();//$this->Netform_allowance_model->getAllNetformAllowance();
			/*if(!empty($postData)){
					$orderStatus	= !empty($postData['order_status']) ? $postData['order_status'] : ''; 
					$shipDateFrom	= !empty($postData['ship_date_from']) ? $postData['ship_date_from'] : ''; 
					$shipDateTo		= !empty($postData['ship_date_to']) ? $postData['ship_date_to'] : ''; 
					$shippMethod	= !empty($postData['shipping_method']) ? $postData['shipping_method'] : ''; 
					$shippLocation	= !empty($postData['shipping_location']) ? $postData['shipping_location'] : '';
					$filterData		= array('order_status'=>$orderStatus,'ship_date_from'=>$shipDateFrom,
										'ship_date_to'=>$shipDateTo,'shipp_method'=>$shippMethod,
										'shipp_location'=>$shippLocation);
					$orders			= $this->Order_model->getFilterOrders($filterData);
			}*/
			$data['netformAllowances']	= $netformAllowances;
			//$data['filterData']		= $filterData;
			$this->load->view('frontend/netform_allowance', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This used for create update netform allowance.
	 * 
	 * @Function	createUpdateNetformAllowance()
	 * @Param		void(0)
	 * @Created		05-10-2017
	 * 
	 * */
	public function createUpdateNetformAllowance(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$result		= $this->Netform_allowance_model->createUpdateNetformAllowance($postData);
				if($result){
					die('DFGHJ');
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Netform Allowance successfully created/updated.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('netformallowances');
				}else{
					die('HH');
				}
			}
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
}
