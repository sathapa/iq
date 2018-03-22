<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	19-09-2017
 * @Created By	Prem Yadav
 * 
 * */

class Inventory extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->model('frontend/Inventory_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions	= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : array();
		$this->Management = 'Inventory';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	/**
	 * This function used for display the all inventories.
	 * 
	 * @Function	index()
	 * @Param		void(0)
	 * @Created		29-09-2017
	 * 
	 * */
	
	function index(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'View Items';
			
			$itemCode = ''; $productLine = ''; $productType = ''; $precurementType = ''; $vendor = ''; $wareHouse = '';
			$postData	= $this->input->post();
			if(!empty($postData)){
				$itemCode			= !empty($postData['search_itemcode']) ? $postData['search_itemcode'] : '';
				$productLine		= !empty($postData['search_productline']) ? trim($postData['search_productline']) : '';
				$productType		= !empty($postData['search_producttype']) ? $postData['search_producttype'] : '';
				$precurementType	= !empty($postData['search_procurementtype']) ? $postData['search_procurementtype'] : '';
				$vendor 			= !empty($postData['search_vendor']) ? trim($postData['search_vendor']) : '';
				$wareHouse 			= !empty($postData['search_warehouse']) ? trim($postData['search_warehouse']) : '';
			}
			//dump($items);die;			
			$items			= $this->Inventory_model->getAllItemCodes($itemCode,$productLine,$productType,$precurementType,$vendor,$wareHouse);
			$data['items']	= $items;
			$this->load->view('frontend/viewitems', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for get all inventory based on item code.
	 * 
	 * @Function	inventories()
	 * @Param		itemCode
	 * @Created		20-09-2017
	 * 
	 * */
	function inventories($itemCode=null){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Inventory';
			
			$inventories		= $this->Inventory_model->getInventories($itemCode);
			$data['inventories']= $inventories;
			$specifications		= $this->Inventory_model->getSpecifications($itemCode);
			$data['specifications']		= $specifications;
			if(empty($itemCode) || empty($inventories)){
				$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Inventory not available for '.$itemCode.' item code</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('viewitems');
			}
			$this->load->view('frontend/inventories', $data);
			
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
	/**
	 * Through this function we are getting the specification based on item code.
	 * 
	 * @Function	showSpecification()
	 * @Param		void(0)
	 * @Created		21-09-2017
	 * @Return		html(string)
	 * 
	 * */
	function showSpecification(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			try{
				$itemCode	= $this->input->post('item_code');
				if(!empty($itemCode)){
					$color	= 'N/A';$construction	= 'N/A';$cordDiameter	= 'N/A';$finish	= 'N/A';$fr	= 'N/A';
					$orientation	= 'N/A';$style	= 'N/A';$weight	= 'N/A';$yarn	= 'N/A';$status		= 'No';
					/*$sql	= "select * from qw.get_item_specification('$itemCode')";
					$results	= $this->db->query($sql);
					$results->row();*/
					$results	= $this->Inventory_model->getSpecifications($itemCode);
					if(!empty($results)){
						$specifications= !empty($results->get_item_specification) ? json_decode($results->get_item_specification) : '';
						if(!empty($specifications)){
							$status			= 'Yes';
							$color			= !empty($specifications[3]->measure) ? $specifications[3]->measure : 'N/A';
							$construction	= !empty($specifications[4]->measure) ? $specifications[4]->measure : 'N/A';
							$cordDiameter	= !empty($specifications[5]->measure) ? $specifications[5]->measure : 'N/A';
							$finish			= !empty($specifications[7]->measure) ? $specifications[7]->measure : 'N/A';
							$fr				= !empty($specifications[8]->measure) ? $specifications[8]->measure : 'N/A';
							$orientation	= !empty($specifications[13]->measure) ? $specifications[13]->measure : 'N/A';
							$style			= !empty($specifications[16]->measure) ? $specifications[16]->measure : 'N/A';
							$weight			= !empty($specifications[17]->measure) ? $specifications[17]->measure : 'N/A';
							$yarn			= !empty($specifications[18]->measure) ? $specifications[18]->measure : 'N/A';
							
						}
					}
					$html	= '<div class="row select-area">
							<div class="form-row two">
								<label>Style:</label>
								<span>'.$style.'</span>
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Yarn:</label>
								<span>'.$yarn.'</span>
								
							</div>
						</div>
						
						<div class="row select-area">
							<div class="form-row two">
								<label>Construction:</label>
								<span>'.$construction.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Orientation:</label>
								<span>'.$orientation.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Color:</label>
								<span>'.$color.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Finish:</label>
								<span>'.$finish.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>FR:</label>
								<span>'.$fr.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Weight:</label>
								<span>'.$weight.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Cord Diameter:</label>
								<span>'.$cordDiameter.'</span>
								 
							</div>
						</div>';
				}
				echo json_encode(array('html'=>$html,'status'=>$status));
			}catch(Exception	$ex){
				log_message('error','Unable to get specification');
			}
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * Using this function we are getting the PSN inventory.
	 * 
	 * @Function	psninventories()
	 * @Param		void(0)
	 * @Created		22-09-2107
	 * 
	 * */
	 
	function psninventories(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'PSN Inventory';
			$psnInventories	= $this->Inventory_model->getPsnInventories();
			$data['psnInventories']	= $psnInventories;
			$this->load->view('frontend/psninventories', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	
	/**
	 * Using this function we are getting the Inventory Stock Outs.
	 * 
	 * @Function	inventorystockout()
	 * @Param		void(0)
	 * @Created		26-09-2107
	 * 
	 * */
	 
	function inventorystockout(){
		/*if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){*/
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Inventory Stockout';
			$inventoryStockouts	= $this->Inventory_model->getInventoryStockout();
			$data['inventoryStockouts']	= $inventoryStockouts;
			$this->load->view('frontend/inventory_stockout', $data);
		/*}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}*/
	}
	
	/**
	 * [inventory_wip description] - This function used for get Inventory WIP listing page.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function inventory_wip(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Inventory WIP';
			$inventoriesWip	= $this->Inventory_model->getInventoryWIP();
			$data['inventoriesWip']	= $inventoriesWip;
			$this->load->view('frontend/inventory_wip', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}

	/*Add item*/
	function additem(){
		if(!empty($this->group_permissions) && in_array(15,$this->group_permissions)){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$status = 1;
				$response = $this->Inventory_model->createUpdateInv($postData, $status);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Inventory item successfully added.</p></div>';
						$this->session->set_flashdata('message',$message);
					redirect('viewitems');
				}
			}

			$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','jquery.mousewheel.min','increment','bootstrap-formhelpers-phone'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Inventory';
			$this->load->view('frontend/addinvitem', $data);
		}
		else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('viewitems');
		}
	}
	/*Edit item*/
	function edititem($itemCode=null){
			$itemCode = base64_decode($itemCode);
			if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
				$postData	= $this->input->post();
				$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.tokenize','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','tether.min','bootstrap','multiselect','bootstrap-datetimepicker.min','jquery.mousewheel.min','increment','bootstrap-formhelpers-phone'); 
				$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','mutiselectcheck');
				$data['title']	= 'Inventory';
				
				$editdata		= $this->Inventory_model->gettheitem($itemCode);
				/*If no item data on the qw.qw_items table*/
				if($editdata == false){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Item '.$itemCode.' not yet added on the Item Repostory.</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('viewitems');
				}

				/*If no item data edited */
				$data['itemdata'] = $editdata;
				$status = 0;
				$response = $this->Inventory_model->createUpdateInv($postData, $status);
				if(!empty($response)){
					$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Inventory item successfully added.</p></div>';
						$this->session->set_flashdata('message',$message);
					redirect('viewitems');
				}

				/*If couldn't be edited*/
				if(empty($itemCode) || empty($editdata)){
					$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Inventory not available for '.$itemCode.' item code</p></div>';
					$this->session->set_flashdata('message',$message);
					redirect('frontend/viewitems');
				}
				$this->load->view('frontend/editinvitem', $data);
			
			}else{
				$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('dashboard');
			}
	}

	/**
	 * [itemVendorsInfo description] - This function used for display the item vendors informations based on item code
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $itemCode [description]
	 * @return [type]           [description]
	 */
	function itemVendorsInfo($itemCode=''){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			if(!empty($itemCode)){
				$itemCode 		= base64_decode($itemCode);
				$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
				$data['title']	= 'View Item Vendor';
				$vendorDetails	= $this->Inventory_model->getItemVendor($itemCode);
				$data['itemCode'] 	= $itemCode;
				$data['vendorDetails']	= $vendorDetails;
				$this->load->view('frontend/item-vendor-details', $data);
			}else{
				$message='<div class="alert alert-block alert-danger">
					<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
					<p>Invalid Url</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('viewitems');
			}
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
}
