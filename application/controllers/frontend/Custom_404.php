
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Custom_404 extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->user_name=$login=$this->session->userdata('fronentLoginUserName');
    }

/**
 * @Methode		-: index()
 * @Description	-: This function used to for display Error Messaeg Page 404
 * @Created		-: 21-06-2016
 * @Param		-: No
 */  
    public function index() {
		$data['js']=array('jquery-ui'); 
		$data['meta']=array();
		$data['css']=array('common','error-page');
		$data['resetHeaderClass']	= 'custom_404';
		$this->load->view('frontend/top',$data);
		$this->load->view('frontend/header');
        $this->load->view('errors/html/error_404', $data);
        $this->load->view('frontend/footer');
		$this->load->view('frontend/bottom',$data);
		
    }

}
