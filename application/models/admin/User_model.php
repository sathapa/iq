<?php
Class User_model extends MY_Model {
	public $table      = 'users';
	public $primary_key = "id";
	public $soft_deletes = TRUE;
	public $limit = 10;
	public function __construct(){
		parent::__construct();
		
	}
	
	/**
	 * This function used for get all user details.
	 * 
	 * In this function we are fetching records from qw_users table and return them.
	 * 
	 * @Function	allUsers()
	 * @Created		01-03-2017
	 * @Param		void(0)
	 * @Return		array()
	 * 
	 * */
	function allUsers(){
		try{
			$adminDetails= $this->db->where('user_group !=','1')->where('deleted_at',null)->get('qw_users')->result();
			if($adminDetails){
				return $adminDetails;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get users from qw_users table '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for register new user.
	 * 
	 * In this function we are saving the new user details in qw_users table
	 * 
	 * @Function	addUser()
	 * @Created		01-03-2017
	 * @Param		userData(array())
	 * @Return		boolean(true/false)
	 * 
	 * */
	function addUser($userData	= array()){
		try{
			if(!empty($userData)){
				$insert	= $this->db->insert('qw_users',$userData);
				if($insert){
					return true;
				}return false;
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to insert a new user '.$ex->getMessage());
		}
	}
	/**
	 * This function used for update user.
	 * 
	 * In this function we are updating user details in qw_users table basis on user id
	 * 
	 * @Function	updateUser()
	 * @Created		01-03-2017
	 * @Param		userData(array()),userId(int)
	 * @Return		boolean(true/false)
	 * 
	 * */
	function updateUser($userData	= array(),$userId=0){
		try{
			if(!empty($userId) && is_numeric($userId)){
				$update	= $this->db->where('id',$userId)->update('qw_users',$userData);
				if($update){
					return true;
				}return false;
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to update user details basis on user id '.$ex->getMessage());
		}
	}
	/**
	 * This function used for check a usniue user.
	 * 
	 * In this function we are checking the regitered user have uniue email or not
	 * 
	 * @Function	checkUniqueEmail()
	 * @Created		01-03-2017
	 * @Param		data(array())
	 * @Return		true/false
	 * 
	 * */
	function checkUniqueEmail($data=array()){
		try{
			if(!empty($data['email'])){
				$records	= $this->db->where('email',$data['email']);
						if($data['user_id']){
							$records->where('id !=',$data['user_id']);
						}
						$users	= $records->get('qw_users')->result();
				if($users){
					return true;
				}return false;
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to check a unique user '.$ex->getMessage());
		}
	}
	
	function deleteUser($userId){
		try{
			if(!empty($userId) && is_numeric($userId)){
				$date	= date('Y-m-d');
				$update	= $this->db->where('id',$userId)->update('qw_users',array('deleted_at'=>$date));
				if($update){
					return true;
				}return false;
			}return false;
		}catch(Exception $ex){
			log_message('error','Unable to delete user details basis on user id '.$ex->getMessage());
		}
	}

}

?>
