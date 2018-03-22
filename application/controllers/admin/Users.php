<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/User_model');
        $this->load->model('admin/Login_model');
        $this->load->library('form_validation');
        $admin		= $this->Login_model->loggedInUser();
        if(empty($admin)){
			redirect('admin/login');
		}
		$this->admin	= $admin;
		$this->email	= $this->session->userdata('adminUserEmail');
		$this->user_id	= $this->session->userdata('adminUserId');
		$this->Management = 'User Management';
    }
    

    public function profile(){
        $data = array(
            'title' => 'Users | Admin Profile',
            'list_heading' => 'Users | Admin Profile',
            'breadcrum' => '<li><a href="'.base_url('admin/users/').'">Users</a></li>',
        );
        try{
			$adminInfo	= getUserInfoById($this->user_id);
			if($adminInfo){
				$data['adminInfo'] = $adminInfo;
			}
			$postData	= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('contact_no', 'Contact Number', 'trim|min_length[10]|max_length[12]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('first_name', 'First Name', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$error			= '';
				$profiledata	= array();
				if ($this->form_validation->run() == true) {
					if(!empty($_FILES['image']['name'])){
							$config['upload_path']		= FCPATH.'/upload-data/users/';
							$config['allowed_types']	= 'gif|jpg|png|bmp|jpeg';
							$config['overwrite']		= FALSE;
							$config['remove_spaces']	= TRUE;
							$config['encrypt_name']		= TRUE;
							$config['create_thumb']		= TRUE;
							$config['maintain_ratio']	= TRUE;
							$config['max_width']		= 1000;
							$config['max_height']		= 1000;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('image')){
								$error .= $this->upload->display_errors();
								setMessage($error,'warning');
							}else{
								$uploadImage = $this->upload->data();
								$fileName = $uploadImage['file_name'];
								$profiledata['image'] = !empty($fileName) ? $fileName : "";
							}
					}
					if($error){
						setMessage($error,'warning');
					}else{
						$profiledata['contact_no']	= !empty($postData['contact_no']) ? trim($postData['contact_no']) : '';
						$profiledata['first_name']	= !empty($postData['first_name']) ? trim($postData['first_name']) : '';
						$profiledata['last_name']	= !empty($postData['last_name']) ? trim($postData['last_name']) : '';
						$profiledata['aboutus']		= !empty($postData['about_us']) ? trim($postData['about_us']) : '';
						$updateProfile			= $this->User_model->updateUser($profiledata,$this->user_id);
						if($updateProfile){
							setMessage('Admin profile successfully updated','success');
							redirect('admin/users');
						}
					}
				}else{
					setMessage(validation_errors(),'warning');
					$data['error'] = validation_errors();
				}
			}
			
			$this->template->load('admin/base', 'admin/users/profile', $data);
		}catch(Exception $ex){
			log_message('','Unable to display admin details'.$ex->getMessage());
		}
	}
    
    /**
     * @Function		-: index()
     * @Description		-: This function used for display all the sub admins list
     * @Created on		-: 28-02-2017
     * @Param			-: No Parameter
     * 
     * */ 
    
    public function index(){
        $data = array(
            'title' => 'Users | Sub Admin',
            'list_heading' => 'Users | Sub Admin',
            'breadcrum' => '<li><a href="'.base_url('admin/users/').'">Users</a></li>',
        );
        try{
			//$this->db->update('qw_users',array('deleted_at'=>null));
			$users	= $this->User_model->allUsers();
			if($users){
				$data['users'] = $users;
			}
			$this->template->load('admin/base', 'admin/users/users', $data);
		}catch(Exception $ex){
			log_message('','Unable to listing Users'.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for register a user.
	 * 
	 * In this function we are saving the records of register user.
	 * 
	 * @Function	add()
	 * @Created		01-03-2017
	 * @Param		void(0)
	 * 
	 * */
	 
	public function add(){
		$data = array(
				'title' => 'Users | Register User',
				'list_heading' => 'Users | Register User',
				'breadcrum' => '<li><a href="'.base_url('admin/users/').'">Users</a></li>',
			);
		try{
			$postData	= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('user_group', 'User Group', 'trim|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('username', 'User Name', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('contact_no', 'Contact Number', 'trim|min_length[10]|max_length[12]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('first_name', 'First Name', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]|required',array('required' => 'You must provide a %s.'));
				$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|min_length[3]|required|matches[password]',array('required' => 'You must provide a %s.'));
				$error			= '';
				$registerData	= array();
				if ($this->form_validation->run() == true) {
					if(!empty($_FILES['image']['name'])){
							$config['upload_path']		= FCPATH.'/upload-data/users/';
							$config['allowed_types']	= 'gif|jpg|png|bmp|jpeg';
							$config['overwrite']		= FALSE;
							$config['remove_spaces']	= TRUE;
							$config['encrypt_name']		= TRUE;
							$config['create_thumb']		= TRUE;
							$config['maintain_ratio']	= TRUE;
							$config['max_width']		= 500;
							$config['max_height']		= 500;
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload('image')){
								$error .= $this->upload->display_errors();
								setMessage($error,'warning');
							}else{
								$uploadImage = $this->upload->data();
								$fileName = $uploadImage['file_name'];
								$registerData['image'] = !empty($fileName) ? $fileName : "";
							}
					}
					if($error){
						setMessage($error,'warning');
					}else{
						$anotherUser	= getUserInfoByEmail($postData['email']);
						if($anotherUser){
							setMessage('Email id already exists','warning');
						}else{
							$registerData['user_group']	= !empty($postData['user_group']) ? $postData['user_group'] : '';
							$registerData['username']	= !empty($postData['username']) ? trim($postData['username']) : '';
							$registerData['email']		= !empty($postData['email']) ? trim($postData['email']) : '';
							$registerData['contact_no']	= !empty($postData['contact_no']) ? trim($postData['contact_no']) : '';
							$registerData['first_name']	= !empty($postData['first_name']) ? trim($postData['first_name']) : '';
							$registerData['last_name']	= !empty($postData['last_name']) ? trim($postData['last_name']) : '';
							$registerData['aboutus']	= !empty($postData['about_us']) ? trim($postData['about_us']) : '';
							$registerData['active']		= !empty($postData['status']) ? $postData['status'] : 0;
							$registerData['password']	= !empty($postData['password']) ? md5(trim($postData['password'])) : 0;
							//echo "<pre>";print_r($registerData);die;
							$insertNewUser	= $this->User_model->addUser($registerData);
							if($insertNewUser){
								setMessage('New user successfully added','success');
								redirect('admin/users');
							}
						}
					}
				}else{
					setMessage(validation_errors(),'warning');
					$data['error'] = validation_errors();
				}
			}
			$data['js']		= array('parsley.min');
			$data['css']	= array('usersection');
			$this->template->load('admin/base', 'admin/users/add_user', $data);
		}catch(Exception $ex){
			log_message('','Unable to listing Users'.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update a user
	 * 
	 * In this function we are updating the records of register user basis on user id
	 * 
	 * @Function	edituser()
	 * @Created		01-03-2017
	 * @Param		void(0)
	 * 
	 * */
	 
	public function edituser($userId=null){
		$data = array(
				'title' => 'Users | Register User',
				'list_heading' => 'Users | Register User',
				'breadcrum' => '<li><a href="'.base_url('admin/users/').'">Users</a></li>',
			);
		try{
			if(!empty($userId)){
				$userId		= base64_decode($userId);
				$editUserInfo	= getUserInfoById($userId);
				$data['user']	= $editUserInfo;
				if(!empty($editUserInfo)){
					$postData	= $this->input->post();
					if(!empty($postData)){
						$this->form_validation->set_rules('user_group', 'User Group', 'trim|max_length[100]|required',array('required' => 'You must provide a %s.'));
						$this->form_validation->set_rules('username', 'User Name', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
						$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
						$this->form_validation->set_rules('contact_no', 'Contact Number', 'trim|min_length[10]|max_length[12]|required',array('required' => 'You must provide a %s.'));
						$this->form_validation->set_rules('first_name', 'First Name', 'trim|min_length[3]|max_length[100]|required',array('required' => 'You must provide a %s.'));
						$error			= '';
						$registerData	= array();
						$registerData['image'] = $editUserInfo->image;
						if ($this->form_validation->run() == true) {
							if(!empty($_FILES['image']['name'])){
									$config['upload_path']		= FCPATH.'/upload-data/users/';
									$config['allowed_types']	= 'gif|jpg|png|bmp|jpeg';
									$config['overwrite']		= FALSE;
									$config['remove_spaces']	= TRUE;
									$config['encrypt_name']		= TRUE;
									$config['create_thumb']		= TRUE;
									$config['maintain_ratio']	= TRUE;
									$config['max_width']		= 500;
									$config['max_height']		= 500;
									$this->load->library('upload', $config);
									if (!$this->upload->do_upload('image')){
										$error .= $this->upload->display_errors();
										setMessage($error,'warning');
									}else{
										$uploadImage = $this->upload->data();
										$fileName = $uploadImage['file_name'];
										$registerData['image'] = !empty($fileName) ? $fileName : "";
										$oldImagePath	= FCPATH.'upload-data/users/'.$editUserInfo->image;
										if(file_exists($oldImagePath)){
											unlink($oldImagePath);
										}
									}
							}
							if($error){
								setMessage($error,'warning');
							}else{
								$anotherUser	= $this->User_model->checkUniqueEmail(array('email'=>$postData['email'],'user_id'=>$userId));
								if($anotherUser){
									setMessage('Email id already exists','warning');
								}else{
									$registerData['user_group']	= !empty($postData['user_group']) ? $postData['user_group'] : '';
									$registerData['username']	= !empty($postData['username']) ? trim($postData['username']) : '';
									$registerData['email']		= !empty($postData['email']) ? trim($postData['email']) : '';
									$registerData['contact_no']	= !empty($postData['contact_no']) ? trim($postData['contact_no']) : '';
									$registerData['first_name']	= !empty($postData['first_name']) ? trim($postData['first_name']) : '';
									$registerData['last_name']	= !empty($postData['last_name']) ? trim($postData['last_name']) : '';
									$registerData['aboutus']	= !empty($postData['about_us']) ? trim($postData['about_us']) : '';
									$registerData['active']		= !empty($postData['status']) ? $postData['status'] : 0;
									//echo "<pre>";print_r($registerData);die;
									$updateUser	= $this->User_model->updateUser($registerData,$userId);
									if($updateUser){
										setMessage('User details successfully updated','success');
										redirect('admin/users');
									}
								}
							}
						}else{
							setMessage(validation_errors(),'warning');
							$data['error'] = validation_errors();
						}
					}
					$data['js']		= array('parsley.min');
					$data['css']	= array('usersection');
					$this->template->load('admin/base', 'admin/users/edit_user', $data);
				}else{
					redirect('admin/users/');
				}
				
			}else{
				redirect('admin/users/');
			}
		}catch(Exception $ex){
			log_message('error','Unable to listing Users'.$ex->getMessage());
		}
	}
	/**
	 * This function used for delete user.
	 * 
	 * In this function we are deleting user based on user id.
	 * 
	 * @Function	deleteUser()
	 * @Created		01-03-2017
	 * @Param		userId(string)
	 * */
	function deleteuser($userId=null){
		try{
			if(!empty($userId)){
				$userId		= base64_decode($userId);
				$editUserInfo	= getUserInfoById($userId);
				if($editUserInfo){
					$deleteUser		= $this->User_model->deleteUser($userId);
					if($deleteUser){
						setMessage('Successfully user deleted','success');
					}
				}else{
					setMessage('Invalid user id','warning');
				}
			}else{
				setMessage('Invalid user id','warning');
			}
			redirect('admin/users');
		}catch(Exception	$ex){
			log_message('error','Unable to delete user'.$ex->getMessage());
		}
	}
}
