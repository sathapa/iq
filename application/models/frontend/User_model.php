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
	 * This function used for get all users info.
	 * 
	 * In this function we are fetching records from qw_users table basis on user id (if user id available).
	 * 
	 * @Function	getAllUsers()
	 * @Param		userId(int)
	 * @Created		09-06-2017
	 * @Return		array()
	 * 
	 * */
	function getAllUsers($userId=0,$email=null){
		try{
			$users	= $this->db;
				if(!empty($userId)){
					$this->db->where('u.id',$userId);
				}
				if(!empty($email)){
					$this->db->where_not_in('u.email ',$email );
				}
			$users	= $users->select('u.*,ug.group_name,ugp.permission')
							->join('qw.qw_user_group as ug','ug.group_id=u.user_group_id')
							->join('qw.qw_user_group_permission as ugp','ugp.group_id=u.user_group_id','left')
							->order_by('u.user_group_id','desc')
							->get('qw.qw_users as u')->result();
			if(!empty($users)){
				return $users;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get all user list '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for setgroup permisssion.
	 * 
	 * In this function we are managing the group permisssion basis on group id.
	 * 
	 * @Function	setGroupPermission()
	 * @Param		data(array())
	 * @Created		12-06-2017
	 * @Return		boolean
	 * 
	 * */
	function setGroupPermission($data=array()){
		try{
			if(!empty($data) && is_array($data)){
				$checked	= 0;
				foreach($data as $group=>$permission){
					if(!empty($group)){
						$checkPermission	= $this->db->where('group_id',$group)->get('qw.qw_user_group_permission')->row();
						if(!empty($checkPermission)){
							/* Update Group Permission */
							$update	= $this->db->where('group_id',$group)->update('qw.qw_user_group_permission',array('permission'=>$permission));
							if($update){
								$checked++;
							}
						}else{
							/* Add Group Permission */
							$insert	= $this->db->insert('qw.qw_user_group_permission',array('group_id'=>$group,'permission'=>$permission));
							if($insert){
								$checked++;
							}
						}
					}
				}
				if(!empty($checked) && $checked > 0){
					return true;
				}
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get all user list '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get all group
	 * 
	 * In this function we are fetching records from table(qw.qw_user_group)
	 * 
	 * @Function	getAllGroup()
	 * @Param		void(0)
	 * @Created		12-06-2017
	 * @Return		array()
	 * 
	 * */
	function getAllGroup(){
		try{
			$groups	= $this->db
						->select('g.*,gp.permission')
						->join('qw.qw_user_group_permission as gp','gp.group_id=g.group_id','left')
						->get('qw.qw_user_group as g')->result();
			if(!empty($groups)){
				return $groups;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get groups '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get group
	 * 
	 * In this function we are fetching records from table(qw.qw_user_group) basis on group_id
	 * 
	 * @Function	getGroupBy()
	 * @Param		groupId(0)
	 * @Created		14-06-2017
	 * @Return		array()
	 * 
	 * */
	function getGroupBy($groupId=0){
		try{
			if(!empty($groupId) && is_numeric($groupId)){
			$groups	= $this->db
						->select('g.*,gp.permission')->where('g.group_id',$groupId)
						->join('qw.qw_user_group_permission as gp','gp.group_id=g.group_id','left')
						->get('qw.qw_user_group as g')->row();
			if(!empty($groups)){
				return $groups;
			}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get groups '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update group details
	 * 
	 * In this function we are updating records from table(qw.qw_user_group) basis on group_id
	 * 
	 * @Function	updateGroup()
	 * @Param		groupId(int),data(array())
	 * @Created		14-06-2017
	 * @Return		array()
	 * 
	 * */
	function updateGroup($groupId=0,$data=array()){
		try{
			if(!empty($groupId) && is_numeric($groupId)){
				$permission	= !empty($data['permission']) ? $data['permission'] : '';
				unset($data['permission']);
				$update	= $this->db
						->where('group_id',$groupId)
						->update('qw.qw_user_group',$data);
				if(!empty($update)){
					$updatePermission	= $this->db->where('group_id',$groupId)
					->update('qw.qw_user_group_permission',array('permission'=>$permission));
					return true;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to Update group Details '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update user details.
	 * 
	 * In this function we are updating user details basis on user id.
	 * 
	 * @Function	updateUser()
	 * @Param		void(0)
	 * @Created		12-06-2017
	 * @Return		boolean
	 * 
	 * */
	function updateUser($updateData=array()){
		try{
			$userId	= !empty($updateData['user_id']) ? $updateData['user_id'] : '';
			if(!empty($updateData) && !empty($userId)){
				unset($updateData['user_id']);
				$update	= $this->db->where('id',$userId)->update('qw.qw_users',$updateData);
				//print $this->db->last_query();
				if(!empty($update)){
					return true;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to update user details basis on user id '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for add user details.
	 * 
	 * In this function we are adding user details in table (qw_users).
	 * 
	 * @Function	addUser()
	 * @Param		void(0)
	 * @Created		15-06-2017
	 * @Return		boolean
	 * 
	 * */
	function addUser($updateData=array()){
		try{
			if(!empty($updateData)){
				$insert	= $this->db->insert('qw.qw_users',$updateData);
				if(!empty($insert)){
					return true;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to add user details basis on user id '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for check provided user details is already exists.
	 * 
	 * In this function we are matching records basis on email and check that user exists or not.
	 * 
	 * @Function	checkUniqueUser()
	 * @Param		email(string),userId(int)
	 * @Created		17-06-2017
	 * @Return		boolean
	 * 
	 * */
	function checkUniqueUser($email=null,$userId=0){
		try{
			if(!empty($email)){
				$users	= $this->db->where('email',$email);
				if($userId){
					$users->where('id!=',$userId);
				}
				$users	= $users->get('qw.qw_users')->result();
				if(!empty($users)){
					return true;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to check unique user basis on email id  '.$ex->getMessage());
		}
	}

}

?>
