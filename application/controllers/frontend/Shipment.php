<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	22-09-2017
 * @Created By	Prem Yadav
 * 
 * */

class Shipment extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Shipment_model');
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
		$this->Management = 'Shipment';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	/**
	 * This function used for display the all inventories.
	 * 
	 * @Function	index()
	 * @Param		void(0)
	 * @Created		22-09-2017
	 * 
	 * */
	
	function index(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'UPS Tracking';
			$trackings		= $this->Shipment_model->getUpsFedexTracking();
			$data['trackings']	= $trackings;
			$this->load->view('frontend/upsfedextracking', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for get all dailly tracking records.
	 * 
	 * @Function	others()
	 * @Param		void(0)
	 * @Created		22-09-2017
	 * 
	 * */
	function others(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Others';
			$trackings		= $this->Shipment_model->getDailyTracking();
			$data['trackings']	= $trackings;
			$this->load->view('frontend/dailytracking', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
}
