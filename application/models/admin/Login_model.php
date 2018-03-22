<?php
/**
* Name		-: Login Model
*
* Author	-: Prem
*
* Created	-: 28-02-2017
*
*/
class Login_model extends MY_Model {
	function __construct() {
        parent::__construct();
    }
	
	
	/**
	 * This function used for checked that admin user login or not.
	 * 
	 * In this function we are checking login session values (userName,email).
	 *  
	 * @Function	 loggedIn()
	 * @Created		 28-02-2017
	 * @Param		 void(0)
	 * @Return		 true/false
	 * */
	public function loggedIn(){
		$userName	= $this->session->userdata('adminUserName');
		$email		= $this->session->userdata('adminUserEmail');
		if(!empty($userName) && !empty($email)){
			return true;
		}else{
			return false;
		}
	}
	
	/**
	 * This function used for logout user.
	 * 
	 * In this function we are destroying session values (userName,email).
	 *  
	 * @Function	 loggedOut()
	 * @Created		 28-02-2017
	 * @Param		 void(0)
	 * 
	 * */
	public function loggedOut(){
		$newdata	= array('adminUserName'=>'','adminUserEmail'=>'');
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$url = base_url('admin/login');
		redirect($url,'refresh');
	}
	
	
	/**
	 * This function used for get logged IN user details.
	 * 
	 * In this function we are getting records from users table basis on loged in user
	 *  
	 * @Function	 loggedInUser()
	 * @Created		 28-02-2017
	 * @Param		 void(0)
	 * @Return		 array()
	 * */
	public function loggedInUser(){
		try{
			$userName	= $this->session->userdata('adminUserName');
			$email		= $this->session->userdata('adminUserEmail');
			if(!empty($userName) && !empty($email)){
				$user = $this->db->where('username',$userName)->where('email',$email)->get('qw_users')->row();
				if($user){
					return $user;
				}else{
					$this->loggedOut();
				}
			}else{
				$this->loggedOut();
			}
		}catch(Exception $ex){
			log_message('error','Unable to get loggedIn user details '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for admin user login
	 * 
	 * In this function we login user basis on provided email id and password.
	 *  
	 * @Function	 login()
	 * @Created		 28-02-2017
	 * @Param		 email(string),password(string),remeber(int)
	 * @Return		 true/false
	 * */
	public function login($email=null,$password=null,$remeber=NULL){
		try{
			if(!empty($email) && !empty($password)){
				$password = md5($password);
				$user = $this->db->where('email',$email)->where('password',$password)->get('qw_users')->row();
				if($user){
					$this->session->set_userdata('adminUserName',$user->username);
					$this->session->set_userdata('adminUserEmail',$user->email);
					$this->session->set_userdata('adminUserId',$user->id);
					$this->session->set_userdata('adminUserGroup',$user->user_group);
					if(!empty($remeber)){
						$domain = $_SERVER['SERVER_NAME'];
						$cookie = array(
									'name' => 'rememberMe',
									'email' => $email,
									'password' => $password,
									'expire' => 31536000,
									'domain' => $domain
						);
						$this->input->set_cookie($cookie);
					}
					return true;
				}else{
					return false;
				}
			}
		}catch(Exception	$ex){
			log_message('error','Unable to user login '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for reset password basis on email id.
	 * 
	 * Through this function we are updating password coloumn of qw_users table.
	 * 
	 * @Function	resetPassword();
	 * @Created		01-03-2017
	 * @Param		userId(int),password(string)
	 * @Return 		boolean(true/false)
	 * 
	 * 
	 * */
	function resetPassword($userId=null,$password=null){
		try{
			if(!empty($userId) && !empty($password)){
				$update	= $this->db->where('id',$userId)->update('qw_users',array('password'=>$password));
				if($update){
					updateUserInfo($userId,array('forget_password_code'=>''));
					return true;
				}return false;
			}return false;
			
		}catch(Exception $ex){
			log_message('error','Unable to reset user password basis on user email. '.$ex->getMessage());
		}
	}


}
