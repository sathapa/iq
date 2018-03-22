<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	28-11-2017
 * @Created By	Prem Yadav
 * 
 * */

class Reports extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Report_model');
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
		$this->Management = 'Reports';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	
	/**
	 * This function used for display the all re-orders.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function index(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min',); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min');
			$data['title']		= 'Reorders';
			$data['reorders']	= $this->Report_model->getAllReOrders();
			//dump($data['reorders']);die;
			$this->load->view('frontend/re_order_page', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for display the inventory summary.
	 * 
	 * @Function	summary()
	 * @Created		30-11-2107
	 * 
	 * */
	function summary(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min',); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min');
			$data['title']	= 'Summary';
			$searchData 	= $this->input->post();
			$searchProduct	= 'all';$searchItemcode	= 'all';
			if(!empty($searchData)){
				$searchProduct	= !empty($searchData['search_product']) ? trim($searchData['search_product']) : 'all';
				$searchItemcode	= !empty($searchData['search_item_code']) ? trim($searchData['search_item_code']) : 'all';
			}
			$searchParam	= array('searchProduct'=>$searchProduct,'searchItemcode'=>$searchItemcode);
			$data['searchParam']= $searchParam;
			$data['summaries']	= $this->Report_model->getAllInventorySummary($searchParam);
			//dump($data['summaries']);die;
			$this->load->view('frontend/summary', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for display the inventory summary.
	 * 
	 * @Function	summary()
	 * @Created		30-11-2107
	 * 
	 * */
	function specialpurchasing(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min',); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min','pop-up-model');
			$data['title']	= 'Special Purchasing';
			$searchData 	= $this->input->post();
			$searchItemCode	= 'all';$searchProcurementType	= 'all';$searchProductLine	= 'all';$searchCustomer	= 'all';$searchVendor	= 'all';
			if(!empty($searchData)){
				$searchItemCode			= !empty($searchData['search_item_code']) ? trim($searchData['search_item_code']) : 'all';
				$searchProcurementType	= !empty($searchData['search_procurement_type']) ? trim($searchData['search_procurement_type']) : 'all';
				$searchProductLine		= !empty($searchData['search_product_line']) ? trim($searchData['search_product_line']) : 'all';
				$searchCustomer			= !empty($searchData['search_customer']) ? trim($searchData['search_customer']) : 'all';
				$searchVendor			= !empty($searchData['search_vendor']) ? trim($searchData['search_vendor']) : 'all';
			}
			$searchParam	= array('item_code'=>$searchItemCode,'procurement_type'=>$searchProcurementType,
									'product_line'=>$searchProductLine,'customer'=>$searchCustomer,'vendor'=>$searchVendor);
			$data['searchParam']= $searchParam;
			$data['purchases']	= $this->Report_model->getSpecialPurchasing($searchParam);
			//dump($data['purchases']);die;
			$this->load->view('frontend/special_purchasing', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for display the inventory summary.
	 * 
	 * @Function	transferwarehouses()
	 * @Param		void(0)
	 * @Created		05-12-2107
	 * 
	 * */
	function transferwarehouses(){
		if(!empty($this->group_permissions) && in_array(14,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','confirmation','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min',); 
			$data['css']	= array('common','managequote','jquery.mCustomScrollbar','jquery.dataTables.min','bootstrap','jquery-ui','font-awesome.min');
			$data['title']	= 'Transfer Ware House';
			$searchData 	= $this->input->post();
			$searchItemCode	= 'All';$searchProcurementType	= 'All';$searchProductLine	= 'All';$searchWarehouse	= 'All';
			if(!empty($searchData)){
				$searchItemCode			= !empty($searchData['search_item_code']) ? trim($searchData['search_item_code']) : 'All';
				$searchProcurementType	= !empty($searchData['search_procurement_type']) ? trim($searchData['search_procurement_type']) : 'All';
				$searchProductLine		= !empty($searchData['search_product_line']) ? trim($searchData['search_product_line']) : 'All';
				$searchWarehouse		= !empty($searchData['search_ware_house']) ? trim($searchData['search_ware_house']) : 'All';
			}
			$searchParam	= array('item_code'=>$searchItemCode,'procurement_type'=>$searchProcurementType,
									'product_line'=>$searchProductLine,'warehouse'=>$searchWarehouse);
			$data['searchParam']= $searchParam;
			$data['transferWarehouses']	= $this->Report_model->getWareHouseTransfers($searchParam);
			//dump($data['transferWarehouses']);die;
			$this->load->view('frontend/warehouse_transfer', $data);
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
			$psnInventories	= $this->Report_model->getPsnInventories();
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
			$inventoryStockouts	= $this->Report_model->getInventoryStockout();
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
	function wip_transfer(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'WIP Transfer';
			$inventoriesWip	= $this->Report_model->getInventoryWIP();
			$data['inventoriesWip']	= $inventoriesWip;
			$this->load->view('frontend/inventory_wip', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * [varifyshipping description] - This funciton use for get and display the varify shipping records.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function varifyshipping(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Varify Shipping';
			$data['varifyShipping']	= $this->Report_model->getVarifyShippings();
			//dump($data['varifyShipping']);die;
			$this->load->view('frontend/varify_shipping', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}

	/**
	 * [pendingpayment description] - This function used for get and display the pending payment records.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function pendingpayment(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
			$data['title']	= 'Pending Payment';
			$data['pendingPayments']	= $this->Report_model->getPendingPayments();
			//dump($data['pendingPayments']);die;
			$this->load->view('frontend/pending_payment', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
}
