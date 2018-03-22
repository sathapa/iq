<?php
/**
 * Quote Web  Logout Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	07-03-2017
 * */

class Logout extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Login_model');
    }
    
    /**
     * This function used for logout user.
     * 
     * In this function we are destroying session value of login user
     * 
     * @Function	index()
     * @Created		07-03-2017
     * @Param		void(0)
     * 
     * */
    function index(){
		$this->Login_model->loggedOut();
		$url = base_url('login');
		redirect($url,'refresh');
	}
}
