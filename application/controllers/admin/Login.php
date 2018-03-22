<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quote Web  Login Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	28-02-2017
 * */
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/Login_model');
		$this->load->library('form_validation');
	}
    
    /**
     * This function used for login.
     * 
     * Using this function we are login based on email id and password.
     * 
     * @Function	index()
     * @Created		28-02-2017
     * @Param		void(0)
     * 
     * */
    
    function index(){
		try{
			$postData	= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]|required',array('required' => 'You must provide a %s.'));
				if ($this->form_validation->run() == true) {
					$remember	= !empty($postData['remember']) ? $postData['remember'] : NULL;
					$email		= $postData['email'];
					$password	= $postData['password'];
					$login		= $this->Login_model->login($email, $password, $remember);
					if ($login){
						redirect('admin/users', 'refresh');
					} else {
						$data['error'] = 'Invalid Username or Password';
					}
				} else {
					$data['error'] = validation_errors();
				}
			}
			$data['js']	= array('parsley.min');
			$this->template->load('admin/login', 'admin/users/login', $data);
		}catch(Exception $ex){
			log_message('error','Unable to listing Users'.$ex->getMessage());
		}
	}
	
	 /**

     * 
     * */ 
    
    public function forgotPassword(){
		try{
			$postData	= $this->input->post();
			$message= "Please Provide Email Id";$status	= "Failed";
			if(!empty($postData)){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				if ($this->form_validation->run() == true) {
					$email	= $postData['email'];
					$userInfo	= getUserInfoByEmail($email);
					if(!empty($userInfo)){
						$userId	= $userInfo->id;
						$this->load->helper('mail_helper');
						$forgotPasswordCode	= $userId.'-'.mt_rand();
						$updateForgotpassword	= updateUserInfo($userId,array('forget_password_code'=>$forgotPasswordCode));
						if($updateForgotpassword){
							$link	= base_url('admin/reset/index/'.base64_encode($userId.'__'.$forgotPasswordCode));
							$sendMail	= sendAdminResetPasswordMail(array('email'=>$email,'link'=>$link));
							if($sendMail){
								$message= " Forgot password link sent on provided emai id ";$status	= "Success";
							}
						}else{
							$message= "Unable to update forgot password ";$status	= "Failed";
						}
					}else{
						$message= "Provided Email Id Not Exists ";$status	= "Failed";
					}
				}else{
					$message= validation_errors();  $status	= "Failed";
				}
			}else{
				$message= "Please Provide Email Id";$status	= "Failed";
			}
			echo json_encode(array('status'=>$status,'message'=>$message));die;
		}catch(Exception	$ex){
			log_message('error','Unable to send a mail provided by user email');
		}
	}

}
