<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Products Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	25-09-2017
 * @Created By	Prem Yadav
 * 
 * */

class Orders extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Order_model');
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
		$this->Management = 'Orders';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	/**
	 * This function used for display the all orders.
	 * 
	 * @Function	index()
	 * @Param		void(0)
	 * @Created		25-09-2017
	 * 
	 * */
	
	function index(){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','bootstrap-datetimepicker.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','pop-up-model');
			$data['title']	= 'View Orders';
			$postData	= $this->input->post();
			$filterForm	= '';$filteredOrders=array();$filterData	= array();
			$orders			= $this->Order_model->getFilterOrders();
			if(!empty($postData)){
				/* Filter Form Submit Check */
				$searchCustomer = !empty($postData['search_customer']) ? trim($postData['search_customer']) : 'All';
				$orderStatus	= !empty($postData['order_status']) ? $postData['order_status'] : ''; 
				$shipDateFrom	= !empty($postData['ship_date_from']) ? $postData['ship_date_from'] : ''; 
				$shipDateTo		= !empty($postData['ship_date_to']) ? $postData['ship_date_to'] : ''; 
				$shippMethod	= !empty($postData['shipping_method']) ? $postData['shipping_method'] : ''; 
				$shippLocation	= !empty($postData['shipping_location']) ? $postData['shipping_location'] : '';
				$refNum			= !empty($postData['tracking_ref']) ? trim($postData['tracking_ref']) : '';
				$filterData		= array('order_status'=>$orderStatus,'ship_date_from'=>$shipDateFrom,
									'ship_date_to'=>$shipDateTo,'shipp_method'=>$shippMethod,'customer_sage_number'=>$searchCustomer,
									'shipp_location'=>$shippLocation,'tracking_ref'=>$refNum);
				$orders			= $this->Order_model->getFilterOrders($filterData);
			}
			$data['orders']	= $orders;
			//dump($orders);die;
			$currentDate	= date('Y-m-d');
			$data['currentDate']	= $currentDate;
			$data['filterData']		= $filterData;
			$this->load->view('frontend/order_page', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for display the all orders selected by CRM N-Account
	 * 
	 * @Function	FromCRMindex()
	 * @Param		sageNumber
	 * @Created		02-002-2018
	 * 
	 * */
	function FromCRMindex($sageNumber=null){
		if(!empty($this->group_permissions) && in_array(24,$this->group_permissions)){
			$data['js']		= array('jquery-min','bootstrap','jquery-ui','confirmation','jquery.tokenize','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','bootstrap-datetimepicker.min','pop-up-model'); 
			$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','pop-up-model');
			$data['title']	= 'View Orders';
			$filterForm	= '';$filteredOrders=array();$filterData	= array();
			$orders			= $this->Order_model->getFilterOrders();
			$searchCustomer		= !empty($sageNumber) ? trim($sageNumber) : 'All';
			$orderStatus	= ''; $shipDateFrom		= ''; $shipDateTo	= ''; 
			$shippMethod	= ''; $shippLocation	= ''; $refNum		= '';
			
			$filterData		= array('order_status'=>$orderStatus,'ship_date_from'=>$shipDateFrom,
									'ship_date_to'=>$shipDateTo,'shipp_method'=>$shippMethod,'customer_sage_number'=>$searchCustomer,
									'shipp_location'=>$shippLocation,'tracking_ref'=>$refNum);
									
			$orders			= $this->Order_model->getFilterOrders($filterData);
			$data['orders']	= $orders;
			$currentDate	= date('Y-m-d');
			$data['currentDate']	= $currentDate;
			$data['filterData']		= $filterData;
			$this->load->view('frontend/order_page', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for display sales orders based in sales order number.
	 * 
	 * @Function 	salesorders()
	 * @Param		salesOrderNo
	 * @Created		10-10-2017
	 * 
	 * */
	 
	function salesorders($salesOrderNo=null){
		$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','parsley.min','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
		$data['title']	= 'Sales Orders';
		$salesOrders	= $this->Order_model->getSalesorderDetails($salesOrderNo);
		if(empty($salesOrderNo)){
			redirect('orders');
		}
		$data['salesOrders']		= $salesOrders;
		$data['salesOrderNum']		= $salesOrderNo;
		$this->load->view('frontend/sales_orders', $data);
	}
	
	/**
	 * [salesorderdocuments description] -  This function used for display the all available document related the sales ordernumber.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  [type] $salesOrderNo [description]
	 * @return [type]               [description]
	 */
	function salesorderdocuments($salesOrderNo=null){
		
		$data['js']		= array('jquery-min','bootstrap','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','jquery.dataTables.bootstrap.min','jquery.dataTables.min','parsley.min','pop-up-model'); 
		$data['css']	= array('common','managequote','jquery.dataTables.min','bootstrap','pop-up-model','jquery-ui','jquery.mCustomScrollbar','font-awesome.min');
		$data['title']	= 'Sales Orders';
		if(!empty($salesOrderNo) && file_exists(FCPATH.'assets/paperless/'.$salesOrderNo)){
			$this->load->helper('directory'); //load directory helper
			$map = directory_map(FCPATH.'assets/paperless/'.$salesOrderNo);
			$data['alldocuments'] 	= $map;
			$data['salesOrderNo'] 	= $salesOrderNo;
		}else{
			$data['alldocuments'] 	= '';
			$data['salesOrderNo'] 	= $salesOrderNo;
		}
		$this->load->view('frontend/sales-order-pdf', $data);
	}
	
	/**
	 * [downloadSalesorders description] - This function used for sales order download.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $salesOrderNo [description]
	 * @return [type]               [description]
	 */
	function downloadSalesorders(){
		$salesOrderNo 	= $this->input->post('salesOrderNumber');
		$path 	= FCPATH.'assets/paperless/'.$salesOrderNo;
		if(!file_exists($path)){
			$salesOrderFolder = mkdir($path);
		}
		$salesOrders	= $this->Order_model->getSalesorderDetails($salesOrderNo);
		$salesOrdersDetails	= $this->Order_model->getFilterOrders(array('tracking_ref'=>$salesOrderNo));
		//dump($salesOrdersDetails);dump($salesOrders);die;
		$data['salesOrders']	= $salesOrders;
		$data['salesOrdersDetails']	= $salesOrdersDetails[0];
		ini_set("memory_limit", -1);
		@header("cache-Control: no-store, no-cache, must-revalidate");
		@header("cache-Control: post-check=0, pre-check=0", false);
		@header("Pragma: no-cache");
		@header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		//$this->pdf->SetHTMLHeader('');
		//$this->pdf->SetHTMLHeader('','',true);
		//$this->pdf->showImageErrors = true;
		//$this->load->view('frontend/download',$data); 
		$this->pdf->load_view('frontend/download-salesorder',$data); 
        $this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetDisplayMode('fullpage');
		//$mpdf->useSubstitutions = true;
		$this->pdf->autoScriptToLang = true;
		$this->pdf->autoLangToFont = true;
		$this->pdf->setAutoTopMargin = 'stretch';
		$this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->autoMarginPadding = 10;
		//$this->pdf->SetHTMLFooter($htm);
		
		$fileNameQuoteProposal	= 'sales-order-'.$salesOrderNo;//!empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name	= FCPATH.'assets/paperless/'.$salesOrderNo.'/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$fName			= str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		//echo "Yes";
		//$content = $this->pdf->Output($fName,'D');
		$this->pdf->Output($invoice_name, 'F');
		//$this->pdf->Output();
		/*if(!empty($invoice)){
			redirect(base_url('frontend/orders/downloadSalesorderInvoice/'.$salesOrderNo));	
		}*/
		/** Creating the Folder by sales order name start */
	}
	/**
	 * [downloadSalesorderInvoice description] - This function used for download the sales order invoice.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $salesOrderNo [description]
	 * @return [type]               [description]
	 */
	function downloadSalesorderInvoice(){
		$salesOrderNo 	= $this->input->post('salesOrderNumber');
		//$salesOrderNo 	= !empty($salesOrderNo) ?$salesOrderNo : '0091938';
		$path 	= FCPATH.'assets/paperless/'.$salesOrderNo;
		if(!file_exists($path)){
			$salesOrderFolder = mkdir($path);
		}
		$salesOrders	= $this->Order_model->getSalesorderDetails($salesOrderNo);
		$salesOrdersDetails	= $this->Order_model->getFilterOrders(array('tracking_ref'=>$salesOrderNo));
		//dump($salesOrdersDetails);dump($salesOrders);die;
		$data['salesOrders']	= $salesOrders;
		$data['salesOrdersDetails']	= $salesOrdersDetails[0];
		ini_set("memory_limit", -1);
		@header("cache-Control: no-store, no-cache, must-revalidate");
		@header("cache-Control: post-check=0, pre-check=0", false);
		@header("Pragma: no-cache");
		@header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		$this->pdf->load_view('frontend/download-invoice',$data); 
        $this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetDisplayMode('fullpage');
		//$mpdf->useSubstitutions = true;
		$this->pdf->autoScriptToLang = true;
		$this->pdf->autoLangToFont = true;
		$this->pdf->setAutoTopMargin = 'stretch';
		$this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->autoMarginPadding = 10;
		//$this->pdf->SetHTMLFooter($htm);
		
		$fileNameQuoteProposal	= 'sales-order-invoice-'.$salesOrderNo;//!empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name	= FCPATH.'assets/paperless/'.$salesOrderNo.'/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$fName			= str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		//echo "Yes";
		//$content = $this->pdf->Output($fName,'D');
		$this->pdf->Output($invoice_name, 'F');
		//$this->pdf->Output();
		/** Creating the Folder by sales order name start */
	}

	/**
	 * [downloadPackingProductionSheet description] - This funciton used for download the packing production sheet based on sales order number.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $salesOrderNo [description]
	 * @return [type]               [description]
	 */
	function downloadPackingProductionSheet(){
		$salesOrderNo 	= $this->input->post('salesOrderNumber');

		$path 	= FCPATH.'assets/paperless/'.$salesOrderNo;
		if(!file_exists($path)){
			$salesOrderFolder = mkdir($path);
		}
		$salesOrders	= $this->Order_model->getSalesorderDetails($salesOrderNo);
		$salesOrdersDetails	= $this->Order_model->getFilterOrders(array('tracking_ref'=>$salesOrderNo));
		//dump($salesOrdersDetails);dump($salesOrders);die;
		$data['salesOrders']	= $salesOrders;
		$data['salesOrdersDetails']	= $salesOrdersDetails[0];
		ini_set("memory_limit", -1);
		@header("cache-Control: no-store, no-cache, must-revalidate");
		@header("cache-Control: post-check=0, pre-check=0", false);
		@header("Pragma: no-cache");
		@header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		//$this->pdf->SetHTMLHeader('');
		//$this->pdf->SetHTMLHeader('','',true);
		//$this->pdf->showImageErrors = true;
		//$this->load->view('frontend/download',$data); 
		$this->pdf->load_view('frontend/download-packing-production-sheet',$data); 
        $this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetDisplayMode('fullpage');
		//$mpdf->useSubstitutions = true;
		$this->pdf->autoScriptToLang = true;
		$this->pdf->autoLangToFont = true;
		$this->pdf->setAutoTopMargin = 'stretch';
		$this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->autoMarginPadding = 10;
		//$this->pdf->SetHTMLFooter($htm);
		
		$fileNameQuoteProposal	= 'sales-order-packing-production-sheet-'.$salesOrderNo;//!empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name	= FCPATH.'assets/paperless/'.$salesOrderNo.'/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$fName			= str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		//echo "Yes";
		//$content = $this->pdf->Output($fName,'D');
		$this->pdf->Output($invoice_name, 'F');
		//$this->pdf->Output();
		/** Creating the Folder by sales order name start */
	}


	/**
	 * [downloadPackagingList description] - This function used for the generate the sales order packing list. 
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  string $salesOrderNo [description]
	 * @return [type]               [description]
	 */
	function downloadPackagingList(){
		$salesOrderNo 	= $this->input->post('salesOrderNumber');

		$path 	= FCPATH.'assets/paperless/'.$salesOrderNo;
		if(!file_exists($path)){
			$salesOrderFolder = mkdir($path);
		}
		$salesOrders	= $this->Order_model->getSalesorderDetails($salesOrderNo);
		$salesOrdersDetails	= $this->Order_model->getFilterOrders(array('tracking_ref'=>$salesOrderNo));
		//dump($salesOrdersDetails);dump($salesOrders);die;
		$data['salesOrders']	= $salesOrders;
		$data['salesOrdersDetails']	= $salesOrdersDetails[0];
		ini_set("memory_limit", -1);
		@header("cache-Control: no-store, no-cache, must-revalidate");
		@header("cache-Control: post-check=0, pre-check=0", false);
		@header("Pragma: no-cache");
		@header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		$this->load->library('Pdf');
		//$this->pdf->SetHTMLHeader('');
		//$this->pdf->SetHTMLHeader('','',true);
		//$this->pdf->showImageErrors = true;
		//$this->load->view('frontend/download',$data); 
		$this->pdf->load_view('frontend/download-order-packing',$data); 
        $this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->SetDisplayMode('fullpage');
		//$mpdf->useSubstitutions = true;
		$this->pdf->autoScriptToLang = true;
		$this->pdf->autoLangToFont = true;
		$this->pdf->setAutoTopMargin = 'stretch';
		$this->pdf->setAutoBottomMargin = 'stretch';
		$this->pdf->autoMarginPadding = 10;
        //$this->pdf->SetHTMLFooter($htm);
		$fileNameQuoteProposal	= 'sales-order-packing-list-'.$salesOrderNo;//!empty($proposalNum) ? $proposalNum : $quote_id;
		$invoice_name	= FCPATH.'assets/paperless/'.$salesOrderNo.'/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		$fName			= str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
		//echo "Yes";
		//$content = $this->pdf->Output($fName,'D');
		$this->pdf->Output($invoice_name, 'F');
		//$this->pdf->Output();
		/** Creating the Folder by sales order name start */
	}
	/**
	 * This function used for display the view send the order trackingNo to the custom email.
	 * @Function 	sendOrder()
	 * @Param		trackingNo string
	 * @Created		15-12-2107
	 * */
	function sendOrder($trackingNo=null){
		if(!empty($trackingNo)){
			$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','parsley.min','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Send Tracking No';
			$data['trackingNo']	= base64_decode($trackingNo);
			$this->load->view('frontend/send_order', $data);
		}else{
			redirect('orders');
		}
	}
	
	/**
	 * This function used for send the order trackingNo to the custom email.
	 * @Function 	sendTrackingNo()
	 * @Param		void(0)
	 * @Created		15-12-2107
	 * */
	 
	function sendTrackingNo(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$trackingno	= !empty($postData['tracking_no']) ? base64_encode($postData['tracking_no']) : '';
			$sendTo		= !empty($postData['send_to']) ? $postData['send_to'] : '';
			$sendToCC	= !empty($postData['send_to_cc']) ? $postData['send_to_cc'] : '';
			$comments	= !empty($postData['comments']) ? $postData['comments'] : '';
			/** Sending Mail to Email Id with attachment **/
			$this->load->helper('mail_helper');
			$trackingSent	= sendTracking(array('send_to'=>$sendTo,'send_to_cc'=>$sendToCC,'comments'=>$comments));
			//dump($trackingSent);die;
			if(!empty($trackingSent)){
				$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Tracking muber has been sent.</p></div>';
				$this->session->set_flashdata('message',$message);
				//$proposalSentUrl	= base64_encode($quote_id.'##'.$proposal);
				redirect('sendOrder/'.$trackingno);
			}
		}else{
			redirect('orders');
		}
	}
	
	/**
	 * This function used for update sales order info using ajax function.
	 * 
	 * @Function	updateSalesOrderDetails()
	 * @Param		void(0)
	 * @Created		11-10-2017
	 * 
	 * */
	function updateSalesOrderDetails(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$update	= $this->Order_model->updateSalesOrderInfo($postData);
			echo $update;die;
		}
	}
	
	/**
	 * This function used for update hardware order info using ajax function.
	 * 
	 * @Function	updateHardWareOrderDetails()
	 * @Param		void(0)
	 * @Created		11-10-2017
	 * 
	 * */
	function updateHardWareOrderDetails(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$update	= $this->Order_model->updateHardWareOrderInfo($postData);
			echo $update;die;
		}
	}
	
	function getOrderAddistionalInfo(){
		try{
			$salesOrder		= $this->input->post('sales_order');
			$html			= '';
			if(!empty($salesOrder)){
				$currentDate	= date('Y-m-d');
				$additionalInfo	= $this->Order_model->getFilterOrders(array('order_status'=>'all','ship_date_from'=>$currentDate,
										'ship_date_to'=>$currentDate,'shipp_method'=>'all',
										'shipp_location'=>'all','tracking_ref'=>$salesOrder));
				if(!empty($additionalInfo)){
					$additionalInfo	= $additionalInfo[0];
					$salesOrder		= !empty($additionalInfo->salesorderno) ? $additionalInfo->salesorderno : '';
					$customerPoNo	= !empty($additionalInfo->customerpono) ? $additionalInfo->customerpono : '';
					$udfProposalNum	= !empty($additionalInfo->udf_proposal_num) ? $additionalInfo->udf_proposal_num : '';
					$wtClass		= !empty($additionalInfo->wt_class) ? $additionalInfo->wt_class : '-----';
					$ardivisionno	= !empty($additionalInfo->ardivisionno) ? $additionalInfo->ardivisionno : '-----';
					$wareHouseCode	= !empty($additionalInfo->warehousecode) ? $additionalInfo->warehousecode : '-----';
					$orderStatus	= !empty($additionalInfo->orderstatus) ? $additionalInfo->orderstatus : '';
					$statusReason	= !empty($additionalInfo->statusreason) ? $additionalInfo->statusreason : '-----';
					$shipExpireDate	= !empty($additionalInfo->shipexpiredate) ? explode('T',$additionalInfo->shipexpiredate) : '';
					$expireShipDate	= !empty($shipExpireDate[0]) ? $shipExpireDate[0] : 'N/A';
					$customerno		= !empty($additionalInfo->customerno) ? $additionalInfo->customerno : '-----';
					$customerName	= !empty($additionalInfo->customername) ? $additionalInfo->customername : '-----';
					$amount			= !empty($additionalInfo->amount) ? $additionalInfo->amount : '-----';
					$weight			= !empty($additionalInfo->weight) ? $additionalInfo->weight : '-----';
					$freightamt		= !empty($additionalInfo->freightamt) ? $additionalInfo->freightamt : '-----';
					$shiptoName		= !empty($additionalInfo->shiptoname) ? $additionalInfo->shiptoname : '-----';
					$udfShipInst	= !empty($additionalInfo->udf_ship_inst) ? $additionalInfo->udf_ship_inst : '-----';
					$shipto			= !empty($additionalInfo->shipto) ? $additionalInfo->shipto : '-----';
					$shipvia		= !empty($additionalInfo->shipvia) ? $additionalInfo->shipvia : '-----';
					$trackingRef	= !empty($additionalInfo->tracking_ref) ? $additionalInfo->tracking_ref : '';
					
					$orderStatusDisplay	= '';
								if(!empty($orderStatus) && $orderStatus=='O'){
									$orderStatusDisplay		= 'Open';
								}
								if(!empty($orderStatus) && $orderStatus=='H'){
									$orderStatusDisplay		= 'Hold';
								}
								if(!empty($orderStatus) && $orderStatus=='C'){
									$orderStatusDisplay		= 'Close';
								}
						$html2	= '';	
						if(!empty($trackingRef)){
							$html2	= '<a href="'.$trackingRef.'" target="_blank">Link</a>';
						}else{
							$html2	= '<a target="_blank">N/A</a>';
						}
					
					$html	= '<div class="row select-area">
							<div class="form-row two">
								<label>Sales Order No:</label>
								<span>'.$salesOrder.'</span>
							</div>
						</div>
						
						<div class="row select-area">
							<div class="form-row two">
								<label>PO Number:</label>
								<span>'.$customerPoNo.'</span>
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Proposal Number:</label>
								<span>'.$udfProposalNum.'</span>
							</div>
						</div>
						
						<div class="row select-area">
							<div class="form-row two">
								<label>WT Class:</label>
								<span>'.$wtClass.'</span>
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Division:</label>
								<span>'.$ardivisionno.'</span>
								
							</div>
						</div>
						
						<div class="row select-area">
							<div class="form-row two">
								<label>Warehouse:</label>
								<span>'.$wareHouseCode.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Order Status:</label>
								<span>'.$orderStatusDisplay.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Status Reason:</label>
								<span>'.$statusReason.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Ship Expire Date:</label>
								<span>'.$expireShipDate.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Customer No:</label>
								<span>'.$customerno.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Customer Name:</label>
								<span>'.$customerName.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Amount:</label>
								<span>'.$amount.'</span>
								 
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
								<label>Freight Amount:</label>
								<span>'.$freightamt.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Ship To Name:</label>
								<span>'.$shiptoName.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Shipping Inst:</label>
								<span>'.$udfShipInst.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Ship To:</label>
								<span>'.$shipto.'</span>
								 
							</div>
						</div>
						<div class="row select-area">
							<div class="form-row two">
								<label>Ship Via:</label>
								<span>'.$shipvia.'</span>
								 
							</div>
						</div><div class="row select-area">
							<div class="form-row two">
								<label>Tracking Ref#:</label>
								<span>'.$html2.'</span>
								 
							</div>
						</div>
						';
					
				}
				
			}
			echo json_encode(array('html'=>$html));
		}catch(Exception $ex){
			log_message('error','Unable to get order additional details '.$ex->getMessage());
		}
	}
	
	function purchase(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$response	= addUpdateCustomer($postData);
			if(!empty($response)){
				$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Customer added successfully.</p></div>';
				$this->session->set_flashdata('message',$message);
				redirect('customers');
			}
		}
		$data['js']		= array('jquery-min','jquery-ui','jquery.selectBoxIt','jquery.mCustomScrollbar','parsley.min','jquery-customselect-1.9.1.min','bootstrap','pop-up-model'); 
		$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','jquery-customselect-1.9.1','font-awesome.min','bootstrap','pop-up-model');
		$data['title']	= 'Create';
		$this->Management = 'Purchase Orders';
		$data['countries']	= getAllCountry();
		$this->load->view('frontend/purchase_order', $data);
	}

	function getMsg($path=null){
		header("Pragma: public");
		header("Expires: 0");
		header('Content-Encoding: UTF-8');
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Content-type: application/vnd.ms-outlook;charset=UTF-8"); 
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment; filename=\"".$path."\"");
		header("Content-Transfer-Encoding: binary ");
	}
	function getDocument(){
			$postData	= $this->input->post();
			if(!empty($postData)){
				$path	= !empty($postData['path']) ? $postData['path'] : '';
				$filename	= !empty($postData['filename']) ? $postData['filename'] : '';
				if(!empty($path) || !(empty($filename))){
		   		    $this->load->helper('file');
		    		$mime = get_mime_by_extension($path);
		    		$document = getDoc($path, $filename, $mime);
		    	}
			}
	}
}