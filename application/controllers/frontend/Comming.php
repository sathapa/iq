<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Comming Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created		Prem Yadav (19-06-2017)
 * 
 * */

class Comming extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->userInfo	= $loggedIn;
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? $groupDetails->permission : '';
		$this->Management = 'Comming';
	}
	
	/**
	 * This function used for display comming soon page 
	 * 
	 * */
	
	function index(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar',); 
		$data['css']	= array('common','comming','jquery.dataTables.min','jquery.mCustomScrollbar');
		$data['title']	= 'comming';
		$this->load->view('frontend/comming_soon', $data);
	}
	
	/*================= Controller end ======================== */
	
}
