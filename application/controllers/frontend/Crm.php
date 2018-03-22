<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  CRM Controller
 *
 * @package		Quoteweb 
 * @subpackage	Controller
 * @category	Controller
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @Created By	Prem Yadav(10-08-2017)
 * 
 */

class Crm extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		//$this->email2	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
		$this->Management = 'CRM';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
		//dump($this->group_permissions);
	}
	
	/**
	 * @Function	-: index()
	 * @Description	-: This function used for display all customers list.
	 * @Param		-: No Parameter
	 * @created		-: 10-08-2017
	 * 
	 * */
	function index(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','parsley.min','jquery.dataTables.min','pop-up-model','bootstrap-datetimepicker.min','timepicki'); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','timepicki','font-awesome.min');
			$data['title']	= 'account';
			/* Search Section Start */
			$searchCustomerNum	= 'all';$searchDivision	= 'all';
			$searchState		= 'all';$searchCountry	= 'all'; $searchRelationshipType = 'all';
			$postData	= $this->input->post();
			if(!empty($postData)){
				$searchCustomerNum	= !empty($postData['search_customer']) ? $postData['search_customer'] : '';
				$searchDivision		= !empty($postData['search_division']) ? trim($postData['search_division']) : 'all';
				$searchState		= !empty($postData['search_state']) ? $postData['search_state'] : 'all';
				$searchCountry		= !empty($postData['search_country']) ? $postData['search_country'] : 'all';
				$searchRelationshipType = !empty($postData['search_relationship']) ? trim($postData['search_relationship']) : 'all';
			}
			$customerAccount	= 'all';
			$customerInfo		= (!empty($searchCustomerNum) && $searchCustomerNum!='all') ? explode(' [',$searchCustomerNum):'';
			if(!empty($customerInfo[0])){
				$customerAccount	= trim($customerInfo[0]);
			}
			$searchParam			= array('searchCustomer'=>$searchCustomerNum,'searchDivision'=>$searchDivision,'searchState'=>$searchState,'searchCountry'=>$searchCountry,'searchRelationshipType'=>$searchRelationshipType);
			$data['searchParam']	= $searchParam;
			/* Search Section End */ 
			/*$searchKeyword	= '';
			$searchKeyword	= $this->input->post('search_keyword');
			if(!empty($searchKeyword)){
				$searchKeyword		= $searchKeyword;
			}
			* */
			//$data['searchKeyword']	= $searchKeyword;
			$data['customers']		= getAllCustomers($customerAccount,$searchDivision,$searchState,$searchCountry,$searchRelationshipType);
			$numRows				= !empty($data['customers']) ? count($data['customers']) : 0;
			$data['numRows']		= $numRows;
			$data['pagination']		= 'Yes';
			if(empty($numRows) || $numRows < 50){
				$data['pagination']	= 'No';
			}
			//dump($data['customers']);die;
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/customers', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
		
	}
	
	 /**
	 * This function used for add customer info.
	 * 
	 * @Function	addCustomerInfo()
	 * @Param		void(0)
	 * @Created		09-08-2017
	 * 
	 * */
	function addCustomerInfo(){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$response	= addUpdateCustomer($postData);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Customer added successfully.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('customers');
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.PrintArea','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model');
			$data['title']	= 'account';
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/add_customer', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('customers');
		}
	}
	
	/**
	 * This function used for update customer info.
	 * 
	 * @Function	editCustomerInfo()
	 * @Param		void(0)
	 * @Created		10-08-2017
	 * 
	 * */
	function editCustomerInfo($customerSageNumber=null){
		if(!empty($this->group_permissions) && in_array(16,$this->group_permissions)){
			$customerInfo	= '';
			if(!empty($customerSageNumber)){
				$customerInfo	= getAllCustomers($customerSageNumber,'all','all','all','all',0,1);
			}
			//dump($customerInfo);die;
			if(empty($customerInfo[0])){
				redirect('customers');
			}
			$postData	= $this->input->post();
			if(!empty($postData)){
				$response	= addUpdateCustomer($postData);
				//dump($response);die;
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Account updated successfully.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('customers');
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery.table2excel','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model');
			$data['title']	= 'account';
			$data['customerInfo']	= $customerInfo[0];
			$data['countries']		= getAllCountry();
			$this->load->view('frontend/update_customer', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('customers');
		}
	}
	
	/**
	 * This function used for delete customer basis on customer id.
	 * 
	 * @Function	deleteCustomer()
	 * @Param		void(0)
	 * @Created		10-08-2017
	 * @Return		array()
	 * */
	function deleteCustomer(){
		if(!empty($this->group_permissions) && in_array(17,$this->group_permissions)){
			$customerId	= $this->input->post('crm_guid');
			$status	= 'No';
			$msg	= 'Customer not deleted!';
			if(!empty($customerId)){
				$delete	= removeCustomer($customerId);
				if(!empty($delete)){
					$status	= 'Yes';
					$msg	= 'Account successfully deleted';
				}
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg));die;
			
		}else{
			echo json_encode(array('status'=>'No','msg'=>$this->NotAuthorizedMsg));die;
		}
	}
	
	/**
	 * This function used for displaying the paginated customer data.
	 * 
	 * @Function	paginationCustomerTableData()
	 * @Param		void(0)
	 * @Created		18-08-2017
	 * 
	 * */
	function paginationCustomerTableData(){
		$paging				= $this->input->post('page');
		$type				= $this->input->post('type');
		$searchCustomerNum	= $this->input->post('search_customer');
		$searchDivision		= $this->input->post('search_division');
		$searchState		= $this->input->post('search_state');
		$searchCountry		= $this->input->post('search_country');
		$searchRelationshipType		= $this->input->post('search_relationshiptype');
		$searchCustomerNum	= !empty($searchCustomerNum) ? $searchCustomerNum : '';
		$searchDivision		= !empty($searchDivision) ? $searchDivision : 'all';
		$searchState		= !empty($searchState) ? trim($searchState) : 'all';
		$searchCountry		= !empty($searchCountry) ? $searchCountry: 'all';
		$searchRelationshipType		= !empty($searchRelationshipType) ? $searchRelationshipType: 'all';
		$customerAccount	= 'all';
		$customerInfo		= (!empty($searchCustomerNum) && $searchCustomerNum!='all') ? explode(' [',$searchCustomerNum):'';
		if(!empty($customerInfo[0])){
			$customerAccount	= trim($customerInfo[0]);
		}
		
		$pageNumber		= 0;
		if($type=='Next'){
			$pageNumber	= ($paging + 1);
		}
		if($type=='Previous'){
			$pageNumber	= ($paging > 0 )?($paging - 1) : 0;
		}
		$searchKeyword	= !empty($searchKeyword) ? $searchKeyword : '';
		//$customers		= getAllCustomers('',$searchKeyword,$pageNumber);
		$customers		= getAllCustomers($customerAccount,$searchDivision,$searchState,$searchCountry,$searchRelationshipType,$pageNumber);
		//dump($customers);die;
		$html			= '';
		$numRows	= 0;
		$groupPermissions	= $this->group_permissions;
		if(!empty($customers)){
			foreach($customers as $val){
				$companyName		= !empty($val->companyname) ? $val->companyname : '';
				$accountNumber		= !empty($val->accountnumber) ? $val->accountnumber : '';
				$relationshipType	= !empty($val->relationshiptype) ? $val->relationshiptype : 'N/A';
				$primaryContact		= !empty($val->primarycontact) ? $val->primarycontact : 'N/A';
				$mainPhone			= !empty($val->mainphone) ? $val->mainphone : 'N/A';
				$city				= !empty($val->address1_city) ? $val->address1_city : '';
				$state				= !empty($val->address1_stateprovince) ? ' ( '.$val->address1_stateprovince.' )': '';
				$sageNumber			= !empty($val->sagecustomernumber) ? $val->sagecustomernumber : '';
				$crmGuid			= !empty($val->crm_guid) ? $val->crm_guid : '';
				$owner				= !empty($val->owner) ? $val->owner : 'N/A';
				$division			= !empty($val->division) ? $val->division : 'N/A';
				$customerContacts	= base64_encode($accountNumber.' ['.$companyName.']');
				$relation			= getLookupValue('relationship_type',$relationshipType);
				$activityId			= '';
				$html	.= '<tr id="remove-row-'.$sageNumber.'">
				<td>'.$companyName.'</td><td>'.$accountNumber.'</td>
				<td>'.$relation.'</td><td>'.$primaryContact.'</td>
				<td>'.$mainPhone.'</td><td>'.$city.$state.'</td>
				<td>'.$sageNumber.'</td>
				<td>'.$owner.'</td>
				<td>'.$division.'</td>
				<td width="270">';
					if(!empty($groupPermissions) && in_array(18,$groupPermissions)){
						$html .= '<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="javascript:void(0)" >
								<i class="fa fa-male" aria-hidden="true"></i>
								<span class="tooltiptext">Add Activity</span>
							</a> ';
					}
						
					$html .= '<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="'.base_url('interactions/'.$accountNumber).'" >
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<span class="tooltiptext">Manage Interactions</span>
					</a> ';
							
					if(!empty($groupPermissions) && in_array(16,$groupPermissions)){
						$html .= '<a class="view_detail tooltip" href="'.base_url('editCustomer/'.$accountNumber).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="tooltiptext">Edit</span>
						</a> ';
					}
						
					$html .= '<a class="view_detail tooltip" data-activityid="'.$activityId.'" data-accountid="'.$accountNumber.'" href="'.base_url('contacts/'.$customerContacts).'" >
						<i class="fa fa-users" aria-hidden="true"></i>
						<span class="tooltiptext">All Contact</span>
					</a> ';
						
					$html .= '<a class="view_detail tooltip" href="'.base_url('orders/'.$accountNumber).'" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<span class="tooltiptext">Orders</span>
						</a> ';
					$html .= '<a class="view_detail tooltip" href="'.base_url('managequote/'.$accountNumber).'" ><i class="fa fa-credit-card" aria-hidden="true"></i>
						<span class="tooltiptext">Manage Quotes</span>
						</a> ';
							
					$html .= '<a class="view_detail tooltip" href="'.base_url('dashboard/').'" ><i class="fa fa-line-chart" aria-hidden="true"></i>
						<span class="tooltiptext">Revenue</span>
						</a> ';
						
					if(!empty($groupPermissions) && in_array(17,$groupPermissions)){
						$html .= '<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$crmGuid.'" data-sage-number="'.$sageNumber.'" data-type="delete" href="javascript:void(0)">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="tooltiptext">Remove Account</span>
						</a>';
					}
					
				$html .= '</td></tr>';
				$numRows++;
			}
		}else{
			$html	.= '<tr><td colspan="10">No records found!.</td></tr>';
		}
		$pagiDisplay	= (!empty($numRows) && $numRows >= 50) ? 'Yes' :'No';
		echo json_encode(array('html'=>$html,'page'=>$pageNumber,'pagination'=>$pagiDisplay,'numRow'=>$numRows));die;
	}
	
	
	/**========== Contact Section Start (11-08-2017)***===================*/
	 
	/**
	 * @Function	-: contacts()
	 * @Description	-: This function used for display contacts list.
	 * @Param		-: No Parameter
	 * @created		-: 11-08-2017
	 * 
	 * */
	function contacts($customerContact=null){
		if(!empty($this->group_permissions) && in_array(19,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','pop-up-model','confirmation','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.tokenize','jquery.dataTables.bootstrap.min','parsley.min','bootstrap-datetimepicker.min','timepicki','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery-ui','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','timepicki','font-awesome.min');
			$data['title']	= 'contact';
			$customerContacts	= !empty($customerContact) ? base64_decode($customerContact) : '';
			//var_dump("customerContact: " + $customerContacts); die;
			
			$searchCustomer	= !empty($customerContacts) ? $customerContacts : 'all';
			$searchContact	= 'all';$searchDivision	= 'all';$searchState	= 'all';$searchCountry	= 'all';
			$searchContactType	= 'all';$searchLeadSource	= 'all';
			$postData		= $this->input->post();
			if(!empty($postData)){
				if(empty($customerContacts)){
					$searchCustomer	= !empty($postData['search_customer']) ? $postData['search_customer'] : 'all';
				}
				$searchContact		= !empty($postData['search_contact']) ? $postData['search_contact'] : 'all';
				$searchDivision		= !empty($postData['search_division']) ? $postData['search_division'] : 'all';
				$searchState		= !empty($postData['search_state']) ? $postData['search_state'] : 'all';
				$searchCountry		= !empty($postData['search_country']) ? $postData['search_country'] : 'all';
				$searchContactType	= !empty($postData['search_contact_type']) ? $postData['search_contact_type'] : 'all';
				$searchLeadSource	= !empty($postData['search_lead_source']) ? $postData['search_lead_source'] : 'all';
			}
			
			$customerAccount	= 'all';
			$customerInfo		= (!empty($searchCustomer) && $searchCustomer!='all') ? explode(' [',$searchCustomer):'';
			if(!empty($customerInfo[0]) && is_numeric($customerInfo[0]) ){
				$customerAccount	= trim($customerInfo[0]);
				$data['customerContacts'] = $customerContacts;
				$data['customerAccount'] = $customerAccount;
				$searchCustomer		= $customerContacts;
			}else{
				$searchCustomer	= 'all';
			}
			$searchParam			= array('searchCustomer'=>$searchCustomer,'searchContact'=>$searchContact,
											'searchDivision'=>$searchDivision,'searchState'=>$searchState,
											'searchCountry'=>$searchCountry,'searchContactType'=>$searchContactType,
											'searchLeadSource'=>$searchLeadSource);
			$data['searchParam']	= $searchParam;
			
			
			$data['contactsList']	= getAllContacts($customerAccount,$searchContact,$searchDivision,$searchState,
										$searchCountry,0,0,$searchContactType,$searchLeadSource);
			//dump($data['contactsList']);die;
			$numRows				= !empty($data['contactsList']) ? count($data['contactsList']) : 0;
			$data['numRows']		= $numRows;
			$data['pagination']		= 'Yes';
			if(empty($numRows) || $numRows < 50){
				$data['pagination']	= 'No';
			}
			//dump($data['contactsList']);die;
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/contacts', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	 
	
	
	/**
	 * We are adding a activity for a contact through this function.
	 * 
	 * @Function	addactivity()
	 * @Param		void(0)
	 * @Created		04-09-2017
	 * */
	function addActivity(){
		if(!empty($this->group_permissions) && (in_array(17,$this->group_permissions) || in_array(21,$this->group_permissions) )){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$message	= '';
				$status		= 'No';
				$this->form_validation->set_rules('activity_category','Category','trim|required');
				//$this->form_validation->set_rules('activity_date','Date','trim|required');
				if($this->form_validation->run()==true){
					$time		= !empty($postData['activity_time']) ? explode(' ',$postData['activity_time']) : $postData['activity_time'];
					$timeZone	= !empty($time[1]) ? $time[1] : 0;
					$newTime	= !empty($time[0]) ? explode(':',$time[0]):'';
					$timeHr		= !empty($newTime[0]) ? $newTime[0] : 00;
					$timeMin	= !empty($newTime[1]) ? $newTime[1] : 00;
					if(!empty($timeZone) && $timeZone=='PM'){
						$timeHr	= ($timeHr + 12);
					}
					$newTime	= $timeHr.':'.$timeMin.':00';
					$postData['activity_date_time']	= !empty($postData['activity_date']) ? $postData['activity_date'] .' '.($newTime) : date('Y-m-d h:i:s');
					$postData['activity_due_date']	= !empty($postData['activity_due_date']) ? $postData['activity_due_date']: date('Y-m-d h:i:s');
					//dump($postData);die;
					$result	= addContactActivity($postData);
					if(!empty($result)){
						$status		= 'Yes';
						$message	= 'Activity successfully added.';
					}else{
						$status		= 'No';
						$message	= 'Unable to add contact activity';
					}
				}else{
					$message	= validation_errors();
					$status		= 'No';
				}
				echo json_encode(array('status'=>$status,'msg'=>$message));
			}
		}else{
			echo json_encode(array('status'=>'No','msg'=>'You are not authorized'));
		}
	}
	 /**
	 * This function used for add contact for a customer.
	 * 
	 * @Function	addContact()
	 * @Param		void(0)
	 * @Created		11-08-2017
	 * 
	 * */
	function addContact(){
		if(!empty($this->group_permissions) && in_array(18,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$error	= '';
				$this->form_validation->set_rules('new_contact_customer','Customer','trim|required');
				$this->form_validation->set_rules('contact_type','Contact Type','trim|required');
				//$this->form_validation->set_rules('lead_source','Lead Source','trim|required');
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('business_phone','Business Phone','trim|required');
				$this->form_validation->set_rules('new_contact_email','Email Address','trim|required');
				//$this->form_validation->set_rules('new_contact_address','Addressee','trim|required');
				$this->form_validation->set_rules('new_contact_street1','Street1','trim|required');
				$this->form_validation->set_rules('new_contact_city','City','trim|required');
				$this->form_validation->set_rules('new_contact_state','State','trim|required');
				$this->form_validation->set_rules('new_contact_zip','Zip Code','trim|required');
				//$this->form_validation->set_rules('new_contact_country','Country','trim|required');
				if($this->form_validation->run()==true){
					/* Uploading image */
					if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/contacts';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$file_name	= 0;
							$error		='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
						}else{
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'contact_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$postData['image']= $file_name;
					}
					
					if(!empty($error)){
						$message	= '<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$error.'</p></div>';
						$this->session->set_flashdata('message',$message);
					}else{
						$result	= createUpdateContact($postData);
						if(!empty($result)){
							$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact successfully added </p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('contacts');
						}else{
							$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact not added</p></div>';
							$this->session->set_flashdata('message',$message);
						}
					}
					
				}else{
					$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.validation_errors().'</p></div>';
					$this->session->set_flashdata('message',$message);
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
			
			$data['title']	= 'contact';
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/add_contact', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('contacts');
		}
	}
	/**
	 * This function used for edit contact based on account number.
	 * 
	 * @Function	editContact()
	 * @Param		accountNumber
	 * @Created		11-08-2017
	 * 
	 * */
	
	function editContact($accountNumber=null){
		if(!empty($this->group_permissions) && in_array(19,$this->group_permissions)){
			$postData		= $this->input->post();
			$contactInfo	= getAllContacts('all',$accountNumber);
			//dump($contactInfo);die;
			if(empty($contactInfo) || empty($accountNumber) ){
				$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Invalid account number</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('contacts');
			}
			$error	= '';
			$data['contactInfo']	= $contactInfo[0];
			if(!empty($postData)){
				//$this->form_validation->set_rules('new_contact_customer','Customer','trim|required');
				$this->form_validation->set_rules('contact_type','Contact Type','trim|required');
				//$this->form_validation->set_rules('lead_source','Lead Source','trim|required');
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('business_phone','Business Phone','trim|required');
				$this->form_validation->set_rules('new_contact_email','Email Address','trim|required');
				//$this->form_validation->set_rules('new_contact_address','Addressee','trim|required');
				$this->form_validation->set_rules('new_contact_street1','Street1','trim|required');
				$this->form_validation->set_rules('new_contact_city','City','trim|required');
				$this->form_validation->set_rules('new_contact_state','State','trim|required');
				$this->form_validation->set_rules('new_contact_zip','Zip Code','trim|required');
				//$this->form_validation->set_rules('new_contact_country','Country','trim|required');
				if($this->form_validation->run()==true){
					/* Uploading image */
					if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/contacts';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$file_name	= 0;
							$error		='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
						}else{
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'contact_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$postData['image']= $file_name;
					}
					
					if(!empty($error)){
						$message	= '<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$error.'</p></div>';
						$this->session->set_flashdata('message',$message);
					}else{
						$result	= createUpdateContact($postData);
						if($result=='Yes'){
							$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact successfully updated </p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('contacts');
						}else{
							$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact not added</p></div>';
							$this->session->set_flashdata('message',$message);
						}
					}
				}else{
					$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.validation_errors().'</p></div>';
					$this->session->set_flashdata('message',$message);
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
			$data['title']	= 'contact';
			$data['clone']	= '';
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/update_contact', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('contacts');
		}
	}
	
	/**
	 * This function used for make a clone of contact based on contact id.
	 * 
	 * @Function	cloneContact()
	 * @Param		accountNumber
	 * @Created		01-12-2017
	 * 
	 * */
	function cloneContact($accountNumber=null){
		if(!empty($this->group_permissions) && in_array(19,$this->group_permissions)){
			$postData		= $this->input->post();
			$contactInfo	= getAllContacts('all',$accountNumber);
			//dump($contactInfo);die;
			if(empty($contactInfo) || empty($accountNumber) ){
				$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Invalid account number</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('contacts');
			}
			$error	= '';
			$data['contactInfo']	= $contactInfo[0];
			if(!empty($postData)){
				//$this->form_validation->set_rules('new_contact_customer','Customer','trim|required');
				$this->form_validation->set_rules('contact_type','Contact Type','trim|required');
				//$this->form_validation->set_rules('lead_source','Lead Source','trim|required');
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('business_phone','Business Phone','trim|required');
				$this->form_validation->set_rules('new_contact_email','Email Address','trim|required');
				//$this->form_validation->set_rules('new_contact_address','Addressee','trim|required');
				$this->form_validation->set_rules('new_contact_street1','Street1','trim|required');
				$this->form_validation->set_rules('new_contact_city','City','trim|required');
				$this->form_validation->set_rules('new_contact_state','State','trim|required');
				$this->form_validation->set_rules('new_contact_zip','Zip Code','trim|required');
				//$this->form_validation->set_rules('new_contact_country','Country','trim|required');
				if($this->form_validation->run()==true){
					/* Uploading image */
					if(!empty($_FILES['profile_img']['name'])){
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size'] = '30000';
						$this->load->library('upload', $config);
						$config['upload_path'] = FCPATH.'uploads/contacts';
						$this->upload->initialize($config);
						$_FILES['profile_img']['name']	= $_FILES['profile_img']['name'];
						$_FILES['profile_img']['type']	= $_FILES['profile_img']['type'];
						$_FILES['profile_img']['tmp_name']	= $_FILES['profile_img']['tmp_name'];
						$_FILES['profile_img']['error']	= $_FILES['profile_img']['error'];
						$_FILES['profile_img']['size']	= $_FILES['profile_img']['size'];
						if(! $this->upload->do_upload('profile_img')){
							$file_name	= 0;
							$error		='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->upload->display_errors().'</p></div>';
						}else{
							$res		= $this->upload->data();
							$file_path	= $res['file_path'];
							$file		= $res['full_path'];
							$file_ext	= $res['file_ext'];
							$file_name	= 'contact_'.time().$file_ext;
							rename($file, $file_path . $file_name);
						}
						$postData['image']= $file_name;
					}
					
					if(!empty($error)){
						$message	= '<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$error.'</p></div>';
						$this->session->set_flashdata('message',$message);
					}else{
						$result	= createUpdateContact($postData);
						if($result=='Yes'){
							$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact successfully cloned </p></div>';
							$this->session->set_flashdata('message',$message);
							redirect('contacts');
						}else{
							$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Contact not added</p></div>';
							$this->session->set_flashdata('message',$message);
						}
					}
				}else{
					$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.validation_errors().'</p></div>';
					$this->session->set_flashdata('message',$message);
				}
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','upload_button');
			$data['title']	= 'contact';
			$data['clone']	= 'clone';
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/update_contact', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('contacts');
		}
	}
	
	
	/**
	 * This function used for remove contact based on contact id.
	 * 
	 * @Function	deleteContact()
	 * @Param		void()
	 * @Created		18-08-2017
	 * 
	 * */
	function deleteContact(){
		if(!empty($this->group_permissions) && in_array(20,$this->group_permissions)){
			$contactId	= $this->input->post('contactid');
			$status	= 'No';
			$msg	= 'Contact not deleted!';
			if(!empty($contactId)){
				$delete	= removeContact($contactId);
				if(!empty($delete)){
					$status	= 'Yes';
					$msg	= 'Contact successfully deleted';
				}
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg));die;
		}else{
			echo json_encode(array('status'=>'No','msg'=>$this->NotAuthorizedMsg));die;
		}
	}
	
	/**
	 * This function used for displaying the paginated customer data.
	 * 
	 * @Function	paginationContactTableData()
	 * @Param		void(0)
	 * @Created		18-08-2017
	 * 
	 * */
	function paginationContactTableData(){
		$paging			= $this->input->post('page');
		$type			= $this->input->post('type');
		$searchKeyword	= $this->input->post('search_keyword');
		
		$searchCustomer		= $this->input->post('search_customer');
		$searchContact		= $this->input->post('search_contact');
		$searchDivision		= $this->input->post('search_division');
		$searchState		= $this->input->post('search_state');
		$searchCountry		= $this->input->post('search_country');
		
		$searchCustomer		= !empty($searchCustomer) ? $searchCustomer : 'all';
		$searchContact		= !empty($searchContact) ? $searchContact : 'all';
		$searchDivision		= !empty($searchDivision) ? strtoupper($searchDivision) : 'all';
		$searchState		= !empty($searchState) ? $searchState : 'all';
		$searchCountry		= !empty($searchCountry) ? $searchCountry : 'all';
		
		$customerAccount	= 'all';
		$customerInfo		= (!empty($searchCustomer) && $searchCustomer!='all') ? explode(' [',$searchCustomer):'';
		if(!empty($customerInfo[0])){
			$customerAccount	= trim($customerInfo[0]);
		}
		
		$pageNumber		= 0;
		if($type=='Next'){
			$pageNumber	= ($paging + 1);
		}
		if($type=='Previous'){
			$pageNumber	= ($paging > 0 )?($paging - 1) : 0;
		}
		$searchKeyword	= !empty($searchKeyword) ? trim($searchKeyword) : '';
		//$contacts		= getAllContacts('',$searchKeyword,$pageNumber);
		$contacts	= getAllContacts($customerAccount,$searchContact,$searchDivision,$searchState,$searchCountry,$pageNumber);
		//dump($contacts);die;
		$html		= '';
		$contactCardHtml	= '';
		$numRows	= 0;
		if(!empty($contacts)){
			foreach($contacts as $val){
				$firstname		= !empty($val->firstname) ? $val->firstname : '';
				$lastname		= !empty($val->lastname) ? $val->lastname : '';
				$name			= !empty($firstname) ? $firstname.' '.$lastname : '';
				$email			= !empty($val->email) ? $val->email : 'N/A';
				$division		= !empty($val->division) ? $val->division : 'N/A';
				$companyName	= !empty($val->companyname) ? $val->companyname : '';
				$accountNumber	= !empty($val->accountnumber) ? $val->accountnumber : '';
				$phone			= !empty($val->address1_phone) ? $val->address1_phone : 'N/A';
				$homePhone		= !empty($val->homephone) ? $val->homephone : '-----';
				$mobilePhone	= !empty($val->mobilephone) ? $val->mobilephone : '-----';
				$city			= !empty($val->address1_city) ? $val->address1_city : '';
				$state			= !empty($val->address1_stateprovince) ? ' ( '.$val->address1_stateprovince.' )': '';
				$contactId		= !empty($val->crm_contactid) ? $val->crm_contactid : '';
				$crmAccountId	= !empty($val->crm_accountid) ? $val->crm_accountid : '';
				$activityId		= '';
				$address1Street1	= !empty($val->address1_street1) ? $val->address1_street1 : '';
				$address1Zipcode	= !empty($val->address1_zip) ? $val->address1_zip : '';
				$linkedinUrl		= !empty($val->linkedin_url) ? $val->linkedin_url : '';
				$notes				= !empty($val->notes) ? $val->notes : '-----';
				$contactImg			= !empty($val->image) ? $val->image : '';
				$htmlAddress		= $address1Street1.' '.$city.(!empty($val->address1_stateprovince) ? ', '.$val->address1_stateprovince : '').' '.$address1Zipcode;
				$imgSrc		= base_url('uploads/contacts/'.$contactImg);
				$imgPath	= FCPATH.'/uploads/contacts/'.$contactImg;
				if(!empty($contactImg) && file_exists($imgPath)){
					$imgSrc	= base_url('uploads/contacts/'.$contactImg);
				}else{
					$imgSrc	= base_url('assets/front/images/user-default-image-boy.png'); 
				}
				$contactCardHtml	= '<div class="img-section">
										<img src="'.$imgSrc.'">
									</div>
									<div class="content-section	">
										<h5>'.$name.'</h5><label>'.$companyName.'</label>
									<div class="select-area">
										<ul>
											<li><figure><img src="'.base_url('assets/front/images/phone-icon-size-20.png').'"></figure><p>'.$homePhone.'</p><span>Work</span></li>
											<li><figure><img src="'.base_url('assets/front/images/phone-icon-size-20.png').'"></figure><p>'.$mobilePhone.'</p><span>Mobile</span></li>';
											if(!empty($email)){
												$contactCardHtml	.= '<li><figure><img src="'.base_url('assets/front/images/email-icon-size-20.png').'"></figure><p><a href="mailto:'.$email.'" >'.$email.'</a></p></li>';
											}
											if(!empty($linkedinUrl)){
												$contactCardHtml	.= '<li><figure><img src="'.base_url('assets/front/images/in-icon-size-20.png').'"></figure><p><a href="'.$linkedinUrl.'">'.$linkedinUrl.'</a></p></li>';
											}
										
										$contactCardHtml	.= '</ul>
									</div>
									</div>
									
									<div class="row select-area">
										<h5>Address:</h5>
										<label><figure>
										<img src="'.base_url('assets/front/images/address-icon-size-20.png').'"></figure>
										'.$htmlAddress.'</label>
									</div>
									
									<div class="row select-area">
										<h5>Notes:</h5>
										<label>'.$notes.'</label>
									</div>';
				$html.= '<tr id="remove-row-'.$contactId.'">
				<td>'.$name.'</td>
				<td>'.$email.'</td>
				<td>'.$division.'</td><td>'.$phone.'</td>
				<td>'.$companyName.'</td><td>'.$accountNumber.'</td>
				<td>'.$city.$state.'</td>
				<td width="220">';
				if(!empty($this->group_permissions) && in_array(21,$this->group_permissions)){
					$html.= '<a class="add_activity tooltip" href="javascript:void(0)" >
						<i class="fa fa-male" aria-hidden="true"></i>
						<span class="tooltiptext">Add Activity</span>
					</a>
					<a ></a>';
				}
				
					$html.= '<a class="contact-card tooltip" data-contact-card-html="'.base64_encode($contactCardHtml).'"  href="javascript:void(0)" >
						<i class="fa fa-id-card-o" aria-hidden="true"></i>
						<span class="tooltiptext">Contact Card</span></a>
					<a></a>';
				if(!empty($this->group_permissions) && in_array(19,$this->group_permissions)){
					
					$html.= '<a class="edit_detail tooltip" href="'.base_url('editContact/'.$accountNumber).'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="tooltiptext">Edit</span>
					</a>
					<a></a>';
				}
				$html.= '<a class="make-clone tooltip" href="'.base_url('cloneContact/'.$accountNumber).'" >
						<i class="fa fa-clone" aria-hidden="true"></i>
						<span class="tooltiptext">Clone</span>
					</a>';
				if(!empty($this->group_permissions) && in_array(20,$this->group_permissions)){
					$html.= '<a class="delete_detail tooltip" data-toggle="confirmation" data-placement="left" data-singleton="true"  data-id="'.$contactId.'" data-account-number="'.$accountNumber.'" data-type="delete" href="javascript:void(0)">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="tooltiptext">Remove Contact</span>
					</a>';
				}
					$html.= '</td></tr>';
				$numRows++;
			}
		}else{
			$html.= '<tr ><td colspan="7">No Records found!.</td></tr>';
		}
		$pagiDisplay	= (!empty($numRows) && $numRows >= 50) ? 'Yes' :'No';
		echo json_encode(array('html'=>$html,'page'=>$pageNumber,'pagination'=>$pagiDisplay,'numRow'=>$numRows));die;
	}
	
	/**
	 * This function used for get different tier based on relation ship tier.
	 * 
	 * @Function	getTierValue()
	 * @Param		void(0)
	 * @Created		29-08-2107
	 * 
	 * */
	 
	function getTierValue(){
		$relationType	= $this->input->post('relationType');
		$status	= 'No';
		$html	= '';
		if(!empty($relationType)){
			$param	= '';
			if($relationType==2){
				$param	= 'pricing_tier';
			}
			if($relationType==3){
				$param	= 'vendor_tier';
			}
			$status	= 'Yes';
			$html	= '<select id="customer_pricing_tier" name="customer_pricing_tier" data-parsley-required="true" >';
			$html	.= '<option value="">Select Type</option>';
			$html	.= getQuoteHeaderLookUp($param);
			$html	.= '</select >';
		}
		echo json_encode(array('status'=>$status,'html'=>$html));die;
	}
	
	
	/**
	 * This function used for get activity (Interaction) based on Account Id,Sage Number, Contact Id.
	 * 
	 * @Function	manageInteractions()
	 * @Param		accountId
	 * @Created		14-09-2017
	 * 
	 * */
	function manageInteractions($accountId=null){
		$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','parsley.min','jquery.dataTables.min','jquery.dataTables.min','timepicki','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','timepicki','font-awesome.min');
		$data['title']	= 'manage Interaction';
		$interactions	= getInteractions($accountId);
		if(empty($interactions)){
			$message='<div class="alert alert-block alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Customer does not have any interactions</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('customers');
		}
		$data['interactions']	= $interactions;
		$this->load->view('frontend/manage_interactions', $data);
	}
	
	
	/**
	 * Through this function we are adding new contact using popup form ajax. 
	 * 
	 * @Function	addingNewContact()
	 * @Param		void(0)
	 * @Created		21-09-2107
	 * 
	 * */
	function addingNewContact(){
		if(!empty($this->group_permissions) && in_array(18,$this->group_permissions)){
			$status	= 'No';$msg	= 'Error..';$html='';
			$postData	= $this->input->post();
			if(!empty($postData)){
				$this->form_validation->set_rules('new_contact_customer','Customer','trim|required');
				$this->form_validation->set_rules('contact_type','Contact Type','trim|required');
				//$this->form_validation->set_rules('lead_source','Lead Source','trim|required');
				$this->form_validation->set_rules('first_name','First Name','trim|required');
				$this->form_validation->set_rules('last_name','Last Name','trim|required');
				$this->form_validation->set_rules('business_phone','Business Phone','trim|required');
				$this->form_validation->set_rules('new_contact_email','Email Address','trim|required');
				//$this->form_validation->set_rules('new_contact_address','Addressee','trim|required');
				$this->form_validation->set_rules('new_contact_street1','Street1','trim|required');
				$this->form_validation->set_rules('new_contact_city','City','trim|required');
				$this->form_validation->set_rules('new_contact_state','State','trim|required');
				$this->form_validation->set_rules('new_contact_zip','Zip Code','trim|required');
				//$this->form_validation->set_rules('new_contact_country','Country','trim|required');
				if($this->form_validation->run()==true){
					/* Uploading image */
					$result	= createUpdateContact($postData);
					if(!empty($result)){
						$customerId	= '';
						$customer	= !empty($postData['new_contact_customer']) ? $postData['new_contact_customer'] : '';
						if(!empty($customer)){
							$customer	= explode('[',$customer);
							$customerId	= !empty($customer[0]) ? trim($customer[0]) : '';
						}
						$getAllContact	= contactList($customerId);
						if(!empty($getAllContact)){
							foreach($getAllContact as $contact){
								if(!empty($contact->firstname)){
									$value	= ucfirst($contact->firstname.' '.$contact->lastname);
									$sel	= (!empty($postData['first_name']) && (strtolower($postData['new_contact_email'])==strtolower($contact->email)))?'selected':'';
									$html .= '<option value="'.$value.'" '.$sel.'> '.$value.' ['.$contact->email.']</option>';
								}
							}
						}
						$status	= 'Yes';$msg	= "Contact successfully added.";
					}else{
						$status	= 'No';$msg	= "Contact not added successfully.";
					}
				}else{
					$validationError	= str_replace('<p></p>','',validation_errors());
					$status	= 'No';$msg	= $validationError;
				}
			}
		}else{
			$status	= 'No';$msg	= $this->NotAuthorizedMsg;
		}
		echo json_encode(array('status'=>$status,'msg'=>$msg,'html'=>$html));
	}
	
	/**
	 * 
	 * 
	 * 
	 * 
	 * */
	
	function getFullAddressBasedOnZipcode(){
		$zipcode	= $this->input->post('zipcode');
		$city	= '';$state	= '';$countryHtml	= '';
		if(!empty($zipcode)){
			$address	= getFullAddressByZipcode($zipcode);
			//if(!empty($address)){
				$city	= !empty($address->city) ? $address->city : '';
				$state	= !empty($address->state) ? $address->state : '';
				$country= !empty($address->country) ? $address->country : '';
				$countries	= getAllCountry();
				$countryHtml		= '';
				if(!empty($countries)){
					foreach($countries as $val){
						$countryName		= !empty($val->country_name) && $val->country_name=='United States of America' ? 'USA' : $val->country_name;
						if(!empty($country)){
							$selected	= !empty($val->iso_country_code) && $val->iso_country_code==$country ? 'selected' : '';
						}else{
							$selected	= !empty($val->iso_country_code) && $val->iso_country_code=='USA' ? 'selected' : '';
						}
						
						$countryHtml.= '<option value="'.$val->iso_country_code.'" '.$selected.'>'.$countryName.'</option>';
					}
				}
				
			//}
		}
		echo json_encode(array('city'=>$city,'state'=>$state,'country'=>$countryHtml));
	}
	
	
	/**
	 * [addVendorScorecard description] - This function used for display the form page of vendor scorecard
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 */
	function addVendorScorecard(){
		if(!empty($this->group_permissions) && in_array(18,$this->group_permissions)){
			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.mCustomScrollbar','parsley.min','parsley-fields-comparison-validators','jquery-customselect-1.9.1.min','bootstrap'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap');
			$data['title']	= 'vendor';
			$data['countries']	= getAllCountry();
			$this->load->view('frontend/vendor_scorecard', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('contacts');
		}
	}
	/*================= Controller end ======================== */
	
}
