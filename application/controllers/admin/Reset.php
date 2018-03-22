<?php

/**
 * Quote Web  Reset Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	01-03-2017
 * */

class Reset extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/Login_model');
        $this->load->library('form_validation');
        $loggedIn = $this->Login_model->loggedIn();
    }
    
   
	
	/**
	 * This function used for reset password.
	 * 
	 * In this function we are update password basis on email id.
	 * 
	 * @Function	reset()
	 * @Created		01-03-2017
	 * @Param		void(0)
	 * 
	 * */
	function index($link=null){
		try{
			if(!empty($link)){
				$link		= base64_decode($link);
				$info		= explode('__',$link);
				$userId		= !empty($info[0]) ? $info[0] :'';
				$passwordCode		= !empty($info[1]) ? $info[1] :'';
				$userInfo	= getUserInfoById($userId);
				if(!empty($userInfo) && $passwordCode==$userInfo->forget_password_code){
					$postData	= $this->input->post();
					if(!empty($postData)){
						$this->form_validation->set_rules('new_password', 'New Password', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
						$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|min_length[3]|required|matches[new_password]',array('required' => 'You must provide a %s.'));
						if ($this->form_validation->run() == true) {
							$newPassword	= $postData['new_password'];
							$resetSuccess	= $this->Login_model->resetPassword($userId,md5($newPassword));
							if ($resetSuccess){
								$this->session->set_flashdata('resetSuccess','You have success reset your password');
								redirect('admin/');
							} else {
								$data['error'] = 'Unable to reset your password';
							}
						} else {
							$data['error'] = validation_errors();
						}
					}
					$data['js']	= array('parsley.min');
					$this->template->load('admin/login', 'admin/users/reset_pass', $data);
				}else{
					$this->session->set_flashdata('resetError','Provided link expired');
					redirect('admin');
				}
			}else{
				redirect('admin');
			}
		}catch(Exception $ex){
			log_message('error','Unable to listing Users'.$ex->getMessage());
		}
	}
	
}
