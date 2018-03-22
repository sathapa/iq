<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Users Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	06-06-2017
 * @Created By	Prem Yadav
 * 
 */

class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->model('frontend/User_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions	= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
		//dump($groupDetails);
		$this->Management = 'Configuration';
	}
	
	/**
	 * This function used for display users listing.
	 * 
	 * In this function we are displaying users fetching records form related user table.
	 * 
	 * */
	function index(){
		$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
		$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
		$data['title']	= 'users';
		
		$users	= $this->User_model->getAllUsers('',$this->email);
		$data['users']	= $users;
		$this->load->view('frontend/users', $data);
	}
	
	/**
	 * This function used for add user details.
	 * 
	 * In this function we are adding user details
	 * 
	 * @Function	adduser()
	 * @Param		void(0)
	 * @Created		15-06-2017
	 * 
	 * */
	function adduser(){
		if(!empty($this->user_group) && $this->user_group==3){
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap',); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
			$data['title']	= 'users';
			$postData		= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('email','Email Address','trim|required');
				$this->form_validation->set_rules('contact_no','Contact','trim|required');
				$this->form_validation->set_rules('password','Password','trim|required');
				if($this->form_validation->run()==true){
					$email	= !empty($postData['email']) ? $postData['email'] : '';
					$checkForUniue	= $this->User_model->checkUniqueUser($email);
					if($checkForUniue){
						$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>User [ '.$email.' ] already exists.</p></div>';
						$this->session->set_flashdata('message',$message);
					}else{
						/** Profile Image **/
						$updateData	= $postData;
						if(!empty($_FILES['profile_img']['name'])){
							$config['allowed_types'] = 'gif|jpg|png|jpeg';
							$config['max_size'] = '30000';
							$this->load->library('upload', $config);
							$config['upload_path'] = FCPATH.'uploads/users';
							$this->upload->initialize($config);
							$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
							$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
							$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
							$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
							$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
							if(! $this->upload->do_upload('profile_img')){
								$file_name=0;
								$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
							}else{
								$res		= $this->upload->data();
								$file_path	= $res['file_path'];
								$file		= $res['full_path'];
								$file_ext	= $res['file_ext'];
								$file_name	= 'user_'.time().$file_ext;
								rename($file, $file_path . $file_name);
							}
							$updateData['image']= $file_name;
						}
						unset($updateData['profile_img']);
						$insert	= $this->User_model->addUser($updateData);
						if(!empty($insert)){
							$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>User added successfully.</p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('users');
						}
					}
				}else{
					$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.validation_errors().'</p></div>';
					$this->session->set_flashdata('message',$message);
				}
			}
			$groups	= $this->User_model->getAllGroup();
			$data['groups']	= $groups;
			$this->load->view('frontend/add_user', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
	/**
	 * This function used for edit user details.
	 * 
	 * In this function we are updating user details basis on user id.
	 * 
	 * @Function	edituser()
	 * @Param		userId(int)
	 * @Created		12-06-2017
	 * 
	 * */
	function edituser($userId=0){
		if(!empty($this->user_group) && $this->user_group==3){
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
			$data['title']	= 'users';
			$postData	= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('email','Email Address','trim|required');
				$this->form_validation->set_rules('contact_no','Contact','trim|required');
				if($this->form_validation->run()==true){
					$email	= !empty($postData['email']) ? $postData['email'] : '';
					$checkForUniue	= $this->User_model->checkUniqueUser($email,$userId);
					if($checkForUniue){
						$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>User [ '.$email.' ] already exists.</p></div>';
						$this->session->set_flashdata('message',$message);
					}else{
					/** Profile Image **/
					$updateData	= $postData;
					$updateData['user_id']	= $userId;
					if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/users';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$file_name=0;
							$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
						}else{
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'user_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$updateData['image']= $file_name;
					}else{
						$updateData['image']= !empty($postData['hidden_profile_img']) ? $postData['hidden_profile_img'] : '';
					}
					unset($updateData['hidden_profile_img']);
					//dump($updateData);die;
					$update	= $this->User_model->updateUser($updateData);
					if($update){
						$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>User updated successfully.</p></div>';
						$this->session->set_flashdata('message',$message);
						redirect('users');
					}
				}
				}else{
					$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.validation_errors().'</p></div>';
					$this->session->set_flashdata('message',$message);
				}
			}
			if(empty($userId) || !is_numeric($userId)){
				redirect('users');
			}
			$user	= $this->User_model->getAllUsers($userId);
			if(empty($user)){
				redirect('users');
			}
			$data['user']	= !empty($user[0]) ? $user[0] : array();
			//dump($data['user']);die;
			$groups	= $this->User_model->getAllGroup();
			$data['groups']	= $groups;
			$this->load->view('frontend/edit_user', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
	
	/**
	 * This function used for manage group permission.
	 * 
	 * In this function we are managing group permission .
	 * 
	 * @Function	groups()
	 * @Param		void(0)
	 * @Created		12-06-2017
	 * */
	function groups(){
		if(!empty($this->user_group) && $this->user_group==3){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'groups';
			$postData	= $this->input->post();
			if(!empty($postData['permission'])){
				$managePermission	= $this->User_model->setGroupPermission($postData['permission']);
				if($managePermission){
					redirect('groups');
				}
			}
			$groups	= $this->User_model->getAllGroup();
			$data['groups']	= $groups;
			$this->load->view('frontend/user_group', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	function editGroup($groupId=0){
		if(!empty($this->user_group) && $this->user_group==3){
			$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','parsley.min','parsley-fields-comparison-validators','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'groups';
			/* After Submit Function */
			$postData	= $this->input->post();
			if(!empty($postData)){
				$permissions	= !empty($postData['permissions']) ? implode(',',$postData['permissions']) : '';
				$updateData		= array(
										'group_name'=>!empty($postData['group_name']) ? $postData['group_name'] : '',
										'permission'=>$permissions,
										'remarks'=>!empty($postData['remarks']) ? $postData['remarks'] : '',
										'status'=>$postData['status']
									);
				$update	= $this->User_model->updateGroup($groupId,$updateData);
				if($update){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Group updated successfully.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('groups');
				}
			}
			/* After Submit Function End */
			if(empty($groupId) || !is_numeric($groupId)){
				redirect('groups');
			}
			$group	= $this->User_model->getGroupBy($groupId);
			if(empty($group)){
				redirect('groups');
			}
			$data['group']	= $group;
			$this->load->view('frontend/edit_group', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>You are not authorized to access this feature !.</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
}
