<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Custom_404 extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->Login_model->loggedInUser();
		if(empty($loggedIn)){
			redirect('frontend/login');
		}
		$this->userInfo	= $loggedIn;
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
    }
	
	function index(){
		$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt'); 
		$data['css']	= array('common','index','jquery.mCustomScrollbar');
		$this->load->view('frontend/custome_404', $data);
	}
}
