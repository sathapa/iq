<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quote Web  Login Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	08-03-2017
 * */
class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->Login_model->loggedInUser();
		if(empty($loggedIn)){
			redirect('login');
		}
		$this->userInfo	= $loggedIn;
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? $groupDetails->permission : '';
		$this->Management = 'Dashboard';
	}
	/**
	 * @Function	-: index()
	 * @Description	-: This function used for load the dashboard page
	 * @Param		-: No Parameter
	 * @created		-: 03-05-2017
	 * @return		-: json
	 * */
	function index(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
		$data['css']	= array('common','dashboard','jquery.dataTables.min');
		$data['title']	= 'dashboard';
		$this->load->view('frontend/dashboard', $data);
	}
	
	

}
