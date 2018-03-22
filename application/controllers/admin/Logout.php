<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logout extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/Login_model');
    }
    
    /**
     * This function used for logout user.
     * 
     * In this function we are destroying session value of login user
     * 
     * @Function	index()
     * @Created		01-03-2017
     * @Param		void(0)
     * 
     * */
    function index(){
		$this->Login_model->loggedOut();
		$url = base_url('admin');
		redirect($url,'refresh');
	}
}
