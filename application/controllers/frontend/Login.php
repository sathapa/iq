<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quote Web  Login Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	07-03-2017
 * */
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(!empty($loggedIn)){
			redirect('dashboard');
		}
	}
    
    /**
     * This function used for login.
     * 
     * Using this function we are login based on email id and password.
     * 
     * @Function	index()
     * @Created		07-03-2017
     * @Param		void(0)
     * 
     * */
    
    function index(){
		try{
			$data	= array();
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
						redirect('dashboard');
					} else {
						$data['error'] = 'Invalid Email id or Password';
					}
				} else {
					$data['error'] = validation_errors();
				}
			}
			$this->load->view('frontend/login', $data);
		}catch(Exception $ex){
			log_message('error','Unable to listing Users'.$ex->getMessage());
		}
	}

	
	/**
	 * This function used for forgot password.
	 * 
	 * In this function we are sending the forgot password code on email (provided by user) if exists.
	 * 
	 * @Function	forgotPassword()
	 * @Created		07-03-2017
	 * @Param		void(0)
	 * @Return		true/false
	 * 
	 * */
	public function forgotPassword(){
		try{
			$data	= array();
			$postData	= $this->input->post();
			$message	= "";$status	= "Failed";
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
							$link	= base_url('frontend/reset/index/'.base64_encode($userId.'__'.$forgotPasswordCode));
							$sendMail	= sendAdminResetPasswordMail(array('email'=>$email,'link'=>$link));
							if($sendMail){
								$this->session->set_flashdata('resetSuccess','Forgot password link sent on provided emai id');
								redirect('login');
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
			}
			$this->session->set_flashdata('message',$message);
			$data['status']	= $status;
			$this->load->view('frontend/forgot_pass', $data);
		}catch(Exception	$ex){
			log_message('error','Unable to send a mail provided by user email');
		}
	}
}
