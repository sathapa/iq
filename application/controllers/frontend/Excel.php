<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require_once APPPATH."/third_party/PHPExcel.php";
/**
 * Quoteweb  Excel Controller
 *
 * @Package		Quoteweb 
 * @Subpackage	Controller
 * @Category	Controller
 * @Author		Team TIS (TIS india Pvt. ltd.)
 * @Created On	06-06-2017
 * @Created By	Prem Yadav
 * 
 */

class Excel extends CI_Controller {
	
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
		$this->group_permissions	= !empty($groupDetails->permission) ? $groupDetails->permission : '';
		//dump($groupDetails);
		$this->Management = 'Configuration';
	}
	
	function excelExport($quote=null){
		$this->load->helper('file');
		$this->load->helper('download');
		$decode	= base64_decode($quote);
		$decode	= !empty($decode) ? explode('##',$decode) : '';
		$quoteId	= !empty($decode[0]) ? $decode[0] : '';
		$proposalId	= !empty($decode[1]) ? $decode[1] : '';
		$lineNo		= !empty($decode[2]) ? $decode[2] : 'all';
		$type		= !empty($decode[3]) ? $decode[3] : '';
		
		$quote_data	= $this->Main_model->getQuoteDetails($quoteId, $lineNo);
		
		$quote_data	=json_decode($quote_data[0]->get_quote_detail_items);
		//dump($quote_data);die;
		if(!empty($quote_data)){
			$quote_data2	= addQuantityNTotalQuantity($quote_data);
			$delimiter = ",";
			$newline = "\r\n";
			
			$filename=$proposalId.".csv";
			//$allProject = $this->Report_model->getAllProjectsExport($type,$zone);
			$headings=array('Product',$type,'','','','');
			$headings2=array('','','Item','Quantity Per Net','Total Quantity','UOM','Activity Code','Step');
			$dataforcsv=array($headings);
			array_push($dataforcsv,$headings2);
			$projectRec=$quote_data2;
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			force_download($filename, $finaldata);
		}
	}
	/**
	 * 
	 * @Description	-: used to write the arrays  into file format for converting csv
	 * @Param  $resultObj database results objects
	 * @Return 		-: comaseprated content  for csv
	 */

 	private function __generateCsv($data, $delimiter = ',', $enclosure = '"',$fileName=null) {
 		$contents='';
 		$handle = fopen('php://temp', 'r+');
 		foreach ($data as $line) {
 			fputcsv($handle, $line, $delimiter, $enclosure);
 		}
 		rewind($handle);
 		while (!feof($handle)) {
 			$contents .= fread($handle, 8192);
 		}
 		fclose($handle);
		/* Try to save the file on server location */
			$pp	= file_put_contents(FCPATH."download_bom/" . $fileName, $contents);
		/* Try to save the file on server location */
 		return $contents;
 	}
 	
 	function export($quoteId=null){
		$login_user		= $this->session->userdata('frontendUserName');
		$quoteUrl	= base64_decode($quoteId);
		$quoteUrl	= explode('#',$quoteUrl);
		$quoteId	= !empty($quoteUrl[0]) ? $quoteUrl[0] : '';
		$proposalId	= !empty($quoteUrl[1]) ? $quoteUrl[1] : '';
		$quoteDetails	= $this->Main_model->getProductLists($quoteId);
		//dump($quoteDetails);die;
		if(!empty($quoteDetails)){
			$this->load->helper('file');
			$this->load->helper('download');
			$newArray	= ''; $i	=0;
			foreach($quoteDetails as $val){
				$newArray[$i]['A']	= '';
				$newArray[$i]['B']	= '';
				$newArray[$i]['line']	= !empty($val->quote_line_no) ? $val->quote_line_no :'';
				$newArray[$i]['product']	= !empty($val->product) ? $val->product :'';
				$newArray[$i]['desc']	= !empty($val->quote_description) ? $val->quote_description :'';
				$newArray[$i]['quantity']	= !empty($val->quantity) ? $val->quantity :'';
				$newArray[$i]['special']	= !empty($val->special_instruction) ? $val->special_instruction :'';
				$newArray[$i]['descount']	= !empty($val->discount) ? $val->discount :0;
				$newArray[$i]['total']	= !empty($val->totalcost) ? $val->totalcost :0;
				$i++;
			}
			/* Excel Process */
			$delimiter	= ",";
			$newline	= "\r\n";
			$filename	= $proposalId.".csv";
			$headings	= array('Proposal',$proposalId,'','','','');
			$headings2	= array('','','Line#','Product','Description','Quantity','Special Instruction','Discount','Total Cost');
			$dataforcsv	= array($headings);
			array_push($dataforcsv,$headings2);
			$projectRec	= $newArray;
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			force_download($filename, $finaldata);
		}else{
			redirect('viewquote/'.$quoteId);
		}
	}
	
	function editExport($quote=null){
		$quoteDetails	= explode('#',base64_decode($quote));
		//dump($quoteDetails);die;
		$quoteId	= !empty($quoteDetails[0]) ? $quoteDetails[0] : '';
		$proposalId	= !empty($quoteDetails[1]) ? $quoteDetails[1] : '';
		$lineNo		= !empty($quoteDetails[2]) ? (1+$quoteDetails[2]) : 0;
		$type		= !empty($quoteDetails[3]) ? $quoteDetails[3] : '';
		$quantity	= !empty($quoteDetails[4]) ? $quoteDetails[4] : '1';
		
		$quote_data	= $this->Main_model->getQuoteDetailsNew($quoteId,$lineNo);
		$quote_data	= json_decode($quote_data[0]->get_quote_bom_details);
		//dump($quote_data);die;
		if(!empty($quote_data)){
			$quote_data2	= getBOMExcelFormotData($quote_data);
			$this->load->helper('file');
			$this->load->helper('download');
			$delimiter	= ",";
			$newline	= "\r\n";
			$filename	= $proposalId.".csv";
			//$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','Quantity','UOM','Step','Activity Code','Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes');
			$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','QuantityPerNet','TotalQuantity','UOM','Step','Activity Code','Expected Labor Time','Total Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes','Ship Weight','Material Cost','Labor Cost');
			$dataforcsv	= array($headings);
			$projectRec	= $quote_data2;
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			//dump($dataforcsv);die;
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			force_download($filename, $finaldata);
		}else{
			redirect('managequote');
		}
	}
	
	
	function viewExport($quote=null){
		$quoteDetails	= explode('#',base64_decode($quote));
		//dump($quoteDetails);die;
		$quoteId	= !empty($quoteDetails[0]) ? $quoteDetails[0] : '';
		$proposalId	= !empty($quoteDetails[1]) ? $quoteDetails[1] : '';
		$lineNo		= !empty($quoteDetails[2]) ? ($quoteDetails[2]) : 0;
		$type		= !empty($quoteDetails[3]) ? $quoteDetails[3] : '';
		$quantity	= !empty($quoteDetails[4]) ? $quoteDetails[4] : '1';
		
		$quote_data	= $this->Main_model->getQuoteDetailsNew($quoteId,$lineNo);
		//dump($quote_data);die;
		$quote_data	= json_decode($quote_data[0]->get_quote_bom_details);
		//dump($quote_data);die;
		if(!empty($quote_data)){
			$quote_data2	= getBOMExcelFormotData($quote_data);
			$this->load->helper('file');
			$this->load->helper('download');
			$delimiter	= ",";
			$newline	= "\r\n";
			$filename	= $proposalId.".csv";
			//$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','QuantityPerNet','TotalQuantity','UOM','Step','Activity Code','Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes');
			$headings	= array('Sage Order#','Proposal Number','Tag#','Product','Product Description','# of Nets','Item Description','Item Code','QuantityPerNet','TotalQuantity','UOM','Step','Activity Code','Expected Labor Time','Total Expected Labor Time','Actual Labor Time','Shipping Location','Product Location','Inventory Location','Expected Shipping Date','LOT','Notes','Ship Weight','Material Cost','Labor Cost');
			$dataforcsv	= array($headings);
			$projectRec	= $quote_data2;
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			//dump($dataforcsv);die;
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			force_download($filename, $finaldata);
		}else{
			redirect('managequote');
		}
	}
	
	function viewExportWrkTicket($salesorder=null){
		$this->load->model('frontend/Order_model');
		$salesorderDetails = explode('#',base64_decode($salesorder));
		$salesOrderNo	   = !empty($salesorderDetails[0]) ? $salesorderDetails[0] : '';
		$salesorder_data   = $this->Order_model->getSalesorderDetails($salesOrderNo);
			
		if(!empty($salesorder_data)){
			$this->load->helper('file');
			$this->load->helper('download');
			$delimiter	= ",";
			$newline	= "\r\n";
			$filename	= "sales-order.csv";
			$headings	= array('SalesOrder#','LineKey','Step','WHCode','ItemCode','ItemCodeDesc','ActivityCode','ActivityDesc','JobStatus','ActualQuantity','EstimatedQuantiy','UOM','TimeTaken','EstimatedTime','LotBatchNumber','Comments', 'UpdateBy', 'UpdateOn');
			$dataforcsv	= array($headings);
			$projectRec	= makeFormatOfWorkTicketForDownload($salesorder_data);
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			force_download($filename, $finaldata);
		} else{
			
		} 
	}
	
	/**
	 * This function used for download all customer list.
	 * 
	 * @Function	downloadCustomersList()
	 * @Param		void(0)
	 * @Created		21-08-2107
	 * 
	 * */
	function downloadCustomersList($searchKeywords=null){
		try{
			$searchKeywords	= base64_decode($searchKeywords);
			$searchKeywords	= !empty($searchKeywords) ? explode('##',$searchKeywords) : array();
			$searchCustomerNum	= !empty($searchKeywords[0]) ? $searchKeywords[0] : 'all';
			$searchDivision		= !empty($searchKeywords[1]) ? $searchKeywords[1] : 'all';
			$searchState		= !empty($searchKeywords[2]) ? trim($searchKeywords[2]) : 'all';
			$searchCountry		= !empty($searchKeywords[3]) ? $searchKeywords[3]: 'all';
			
			$customerAccount	= 'all';
			$customerInfo		= (!empty($searchCustomerNum) && $searchCustomerNum!='all') ? explode(' [',$searchCustomerNum):'';
			if(!empty($customerInfo[0])){
				$customerAccount	= trim($customerInfo[0]);
			}
			
			//$customers		= getAllCustomers('all',$searchKeyword,0,100000);
			$customers		= getAllCustomers($customerAccount,$searchDivision,$searchState,$searchCountry,0,100000);
			if(!empty($customers)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-customers.csv";
				$headings	= array('Company Name#','Primary Contact','Parent Account','Email','Main Phone','Other Phone','Fax','Website','Address Type','Address1 Name','Address1 Street1',
								'Address1 Street2','Address1 Street3','Address1 City','Address1 State','Address1 Zipcode','Address1 Country','Address Phone','Address1 Shipping Method','Address1 Freight Terms','Description','Industry',
								'Annual Revenue','No Of Employees','Siccode','Ownership','Tickersymbol','Territory','Relationship Type','Category','Currency','Credit Limit','CreditHold',
								'Payment Terms','Price List','Owner','PreferredMethodofContact','DonotAllowEmails','DonotAllowPhoneCalls','DonotAllowMails','DonotAllowBulkEmails','DonotAllowFaxes','FollowEmailActivity','OriginatingLead',
								'SendMarketingMaterials','PreferRedday','PreferRedTime','PreferRedService','PreferRedFacilityEquipment','PreferRedUser','SageCustomerNumber','Baynets','ConstructionSafety','House','Incordplay',
								'IncordPlaySpecialty','MaterialHandling','Specialty','Sports','Theatre','Distributor','Enduser','Termscode','NameofBroker','ShippingContact','CarrierShipvia',
								'CarrierAccountNumber','CarrierContact','CRM Guid','CRM Parent Account Id','CRM Parent Account Name','Pricing Tier','Active Flag','AccountNumber','Division','Salesperson');
				$dataforcsv	= array($headings);
				$projectRec	= makeFormatOfCustomersListForDownload($customers);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all customer list in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for download all contact list.
	 * 
	 * @Function	downloadContactsList()
	 * @Param		void(0)
	 * @Created		21-08-2107
	 * 
	 * */
	function downloadContactsList($searchKeywords=null){
		try{
			//if(!empty($searchKeyword)){
				$searchKeywords	= base64_decode($searchKeywords);
				$searchKeywords	= !empty($searchKeywords) ? explode('##',$searchKeywords) : array();
				
				$searchCustomerNum	= !empty($searchKeywords[0]) ? $searchKeywords[0] : 'all';
				$searchContact		= !empty($searchKeywords[1]) ? $searchKeywords[1] : 'all';
				$searchDivision		= !empty($searchKeywords[2]) ? trim($searchKeywords[2]) : 'all';
				$searchState		= !empty($searchKeywords[3]) ? $searchKeywords[3] : 'all';
				$searchCountry		= !empty($searchKeywords[4]) ? $searchKeywords[4]: 'all';
				$searchContactType	= !empty($searchKeywords[5]) ? $searchKeywords[5]: 'all';
				$searchLeadSource	= !empty($searchKeywords[6]) ? $searchKeywords[6]: 'all';
				
				$customerAccount	= 'all';
				$customerInfo		= (!empty($searchCustomerNum) && $searchCustomerNum!='all') ? explode(' [',$searchCustomerNum):'';
				if(!empty($customerInfo[0])){
					$customerAccount	= trim($customerInfo[0]);
				}
				
				$searchState		= !empty($searchState) && $searchState!='all' ? strtoupper($searchState) : $searchState;
				//$contacts		= getAllContacts('all',$searchKeyword,0,100000);
				$contacts	= getAllContacts($customerAccount,$searchContact,$searchDivision,$searchState,
				$searchCountry,0,100000,$searchContactType,$searchLeadSource);
				if(!empty($contacts)){
					$this->load->helper('file');
					$this->load->helper('download');
					$delimiter	= ",";
					$newline	= "\r\n";
					$filename	= "all-contact.csv";
					//$headings	= array('Name#','Email','Company Name','Account Number','Contact','City');
					$headings	= array('Salutation','First Name','Middle Name','Last Name','Job Title','Company Name',
					'Business Phone','Home Phone','Mobile Phone','Fax','Email','Address Type',
					'Address','Street1','Street2','Street3','City','Stateprovince',
					'Zip','Country','Address Phone','Freight Terms','Shipping Method','Description',
					'Department','Manager','Credit Limit','Payment Terms','CRM Contact Id','Last Update On',
					'CRM Account Id','Active Flag','Contact Type','Lead Source','Campaign Source','Linkedin Url',
					'Notes','Division','Salesperson','Account Number','Relationship Type');
					$dataforcsv	= array($headings);
					$projectRec	= makeFormatOfContactsListForDownload($contacts);
					foreach($projectRec as $res){
						array_push($dataforcsv,$res);
					}
					//dump($dataforcsv);die;
					$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
					force_download($filename, $finaldata);
				}
			/*}else{
				redirect('customers');
			}*/
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Contact list in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for download all order list.
	 * 
	 * @Function	downloadOrdersList()
	 * @Param		void(0)
	 * @Created		03-10-2107
	 * 
	 * */
	function downloadOrdersList($url=null){
		try{
			$this->load->model('frontend/Order_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();
			if(!empty($decodedData)){
				$orderStatus	= !empty($decodedData[0]) ? $decodedData[0] : ''; 
				$shipDateFrom	= !empty($decodedData[1]) ? $decodedData[1] : ''; 
				$shipDateTo		= !empty($decodedData[2]) ? $decodedData[2] : ''; 
				$shippMethod	= !empty($decodedData[3]) ? $decodedData[3] : ''; 
				$shippLocation	= !empty($decodedData[4]) ? $decodedData[4] : '';
				$filterData		= array('order_status'=>$orderStatus,'ship_date_from'=>$shipDateFrom,
									'ship_date_to'=>$shipDateTo,'shipp_method'=>$shippMethod,
									'shipp_location'=>$shippLocation);
				$orders			= $this->Order_model->getFilterOrders($filterData);
				if(empty($orders)){
					$orders		= (object)array('salesorderno'=>'Data not available');
				}
			}else{
				$orders		= $this->Order_model->getOrders('all');
			}
			
			//dump($orders);
			if(!empty($orders)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-orders.csv";
				$headings	= array('Sales Order#','Customer Name','WT Class','Division','Amount','Freight','Order Status','Shipping Location','Ship Expire ','Ship Via','Weight');
				$dataforcsv	= array($headings);
				$projectRec	= makeFormatOfOrdersListForDownload($orders);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Orders list in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for download the item list in csv format
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  [type] $url [description]
	 * @return [type]      [description]
	 * @created 14-11-2107
	 */
	function downloadItemsList($url=null){
		try{
			$this->load->model('frontend/Inventory_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();
			if(!empty($decodedData)){
				$itemcode			= !empty($decodedData[0]) ? $decodedData[0] : 'All'; 
				$productLine	= !empty($decodedData[1]) ? $decodedData[1] : 'All'; 
				$productType	= !empty($decodedData[2]) ? $decodedData[2] : 'All'; 
				$procurement	= !empty($decodedData[3]) ? $decodedData[3] : 'All'; 
				$vendor				= !empty($decodedData[4]) ? $decodedData[4] : 'All';
				$warehouse		= !empty($decodedData[5]) ? $decodedData[5] : 'All';
				$filterData		= array('itemcode'=>$itemcode,'productline'=>$productLine,
									'producttype'=>$productType,'procurementtype'=>$procurement,
									'vendor'=>$vendor,'warehouse'=>$warehouse);
				$items			= $this->Inventory_model->getAllItemCodes($filterData);
				if(empty($items)){
					$items		= (object)array('itemcode'=>'Data not available');
				}
			}else{
				$items		= $this->Inventory_model->getAllItemCodes('all');
			}
			if(!empty($items)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-item.csv";
				$headings	= array('Item code','Item Description','Product Line','Product Line Desc',
				'Product Type','Product Type Desc','Procurement Type','Procurement Type Desc','Standard Unit Price',
				'Standard Unit Cost','Standard Unit Of Measure','Primary VendorNo','Category1','Category2',
				'Category3','Category4','Inventory Cycle','Default Warehouse','Item Type','ShipWeight',
				'UdfPurchDescript','BuyerCode','UdfPrevItemNum','Imgage Location');
				$dataforcsv	= array($headings);
				$projectRec	= makeFormatOfItemsListForDownload($items);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Items list in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for download all inventory summary list.
	 * 
	 * @Function	downloadInventorySummary()
	 * @Param		void(0)
	 * @Created		30-11-2107
	 * 
	 * */
	function downloadInventorySummary($url=null){
		try{
			$this->load->model('frontend/Report_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();
			if(!empty($decodedData)){
				$searchProduct	= !empty($decodedData[0]) ? $decodedData[0] : ''; 
				$searchItemcode	= !empty($decodedData[1]) ? $decodedData[1] : ''; 
				$filterData		= array('searchProduct'=>$searchProduct,'searchItemcode'=>$searchItemcode);
				$summaries		= $this->Report_model->getAllInventorySummary($filterData);
				if(empty($summaries)){
					$summaries	= (object)array('Inventory summary '=>'Data not available');
				}
			}else{
				$summaries		= $this->Report_model->getAllInventorySummary();
			}
			if(!empty($summaries)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-summary.csv";
				$headings	= array('Product','Item Code','Color','ONHand','SOQty','POQty','Unlocated Quantity','Rel Po','Item Code Desc');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfSummaryListForDownload($summaries);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all inventory list in excel format '.$ex->getMessage());
		}
	}
	/**
	 * This function used download the special purchasing.
	 * 
	 * @Function	downloadSpecialPurchasing()
	 * @Param		url, string
	 * @Created		05-12-2017
	 * 
	 * */
	function downloadSpecialPurchasing($url=null){
		try{
			$this->load->model('frontend/Report_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();
			if(!empty($decodedData)){
				$searchItemCode	= !empty($decodedData[0]) ? $decodedData[0] : ''; 
				$searchProcurementType	= !empty($decodedData[1]) ? $decodedData[1] : '';
				$searchProductLine	= !empty($decodedData[2]) ? $decodedData[2] : ''; 
				$searchCustomer	= !empty($decodedData[3]) ? $decodedData[3] : '';
				$searchVendor	= !empty($decodedData[4]) ? $decodedData[4] : ''; 
				$searchParam	= array('item_code'=>$searchItemCode,'procurement_type'=>$searchProcurementType,
						'product_line'=>$searchProductLine,'customer'=>$searchCustomer,'vendor'=>$searchVendor);
				$purchasing		= $this->Report_model->getSpecialPurchasing($searchParam);
				if(empty($purchasing)){
					$purchasing	= (object)array('Special Purchasing '=>'Data not available');
				}
			}else{
				$purchasing		= $this->Report_model->getSpecialPurchasing();
			}
			if(!empty($purchasing)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-special-purchasing.csv";
				$headings	= array('Procurement Type','Item Code','Sales Order No','SO Qty','SO Ship Date','Product Type','Item Description','On Hand Qty',
				'Avail Qty','SO Date','Related PO','PO Qty','PO Reqd Date','PO Status','Alertid','Notes','Customer','Vendor','Product Line',
				'Item Type');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfSpecialPurchasingForDownload($purchasing);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all special purchasing in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used download the special purchasing.
	 * 
	 * @Function	downloadTransferWarehouses()
	 * @Param		url, string
	 * @Created		05-12-2017
	 * 
	 * */
	function downloadTransferWarehouses($url=null){
		try{
			$this->load->model('frontend/Report_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();
			if(!empty($decodedData)){
				$searchItemCode			= !empty($decodedData[0]) ? $decodedData[0] : ''; 
				$searchProcurementType	= !empty($decodedData[1]) ? $decodedData[1] : '';
				$searchProductLine		= !empty($decodedData[2]) ? $decodedData[2] : ''; 
				$searchWarehouse		= !empty($decodedData[3]) ? $decodedData[3] : '';
				$searchParam	= array('item_code'=>$searchItemCode,'procurement_type'=>$searchProcurementType,
									'product_line'=>$searchProductLine,'warehouse'=>$searchWarehouse);
				$warehouses		= $this->Report_model->getWareHouseTransfers($searchParam);
				if(empty($warehouses)){
					$warehouses	= (object)array('Transfered Warehouses '=>'Data not available');
				}
			}else{
				$warehouses		= $this->Report_model->getWareHouseTransfers();
			}
			if(!empty($warehouses)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-transfer-warehouses.csv";
				$headings	= array('Action','Action Qty','Alt Qty','Item Code','Item Desc','Procurement Type','WareHouse','On Hand Qty',
				'Re-Order Point','Maximum Qty','On SO (5 Days)','Total On Hand','Alter Id','Title','Product Line Desc','Item Type');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfTransferWareHousesForDownload($warehouses);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all transfer warehouses in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for download the excel file of WIP transfer.
	 * 
	 * */
	function downloadInventoryWIPList(){
		try{
			$this->load->model('frontend/Report_model');
			$inventories= $this->Report_model->getInventoryWIP();
			if(!empty($inventories)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "all-inventory-wip.csv";
				/*
				 ,'SalesOrderNo','Customer','WTClass','OrderDate','LineKey','ShipExpiryDate','ParentItem','ComponentItem','ProductLineDesc','ItemDesc',
								'WTNumber','WTParent','WTPart','WTStep','ShipLocation','ProductLocation','InventoryLocation','DefaultLocation','Quantity','UOM',
								'TransferType','DayStillShip','AlertId','SalesPersonName','Weight','ItemType','Revenue','Cost','Lf','Sf' 
								*/
				$headings	= array('Title','SalesOrderNo','Customer','WTClass','OrderDate','LineKey','ShipExpiryDate','ParentItem','ComponentItem','ProductLineDesc','ItemDesc',
								'WTNumber','WTParent','WTPart','WTStep','ShipLocation','ProductLocation','InventoryLocation','DefaultLocation','Quantity','UOM',
								'TransferType','DayStillShip','AlertId','SalesPersonName','Weight','ItemType','Revenue','Cost','Lf','Sf');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfInventoryWIPListForDownload($inventories);
				
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				//dump($finaldata);die;
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Items list in excel format '.$ex->getMessage());
		}
	}
	
	function newT(){
		$this->load->helper('mail_helper');
		$sendMail	= sendMailToSalesPerson(array('email_address'=>'prem@yopmail.com','link'=>'JKRJK'));
		dump($sendMail);die;
		
	}

	/**
	 * This function used download the HR record.
	 * 
	 * @Function	downloadHR()
	 * @Param		url, string
	 * @Created		05-12-2017
	 * 
	 * */
	function downloadHR($url=null){
		try{
			$this->load->model('frontend/HR_model');
			$urldecode	= base64_decode($url);
			$decodedData	= !empty($urldecode) ? explode('#',$urldecode) : array();

			if(!empty($decodedData)){
				$search_hired_status	= !empty($decodedData[0]) ? $decodedData[0] : ''; 
				$search_admission_sdate	= !empty($decodedData[1]) ? $decodedData[1] : '';
				$search_admission_edate	= !empty($decodedData[2]) ? $decodedData[2] : ''; 
				$searchParam	= array('searchHS'=>$search_hired_status,'searchASDate'=>$search_admission_sdate,
						'searchAEDate'=>$search_admission_edate);
				$hrdata		= $this->HR_model->getAllHR($searchParam);
				if(empty($hrdata)){
					$hrdata	= (object)array('HR Data '=>'Data not available');
				}
			}else{
				$hrdata		= $this->HR_model->getAllHR();
			}	
			if(!empty($hrdata)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "HR_Record.csv";
				$headings	= array('Name','Sex','A-Date','I-Date','Hired Status','Manufacturing Experience','Department','Supervisor',
				'Referred by','Home Telephone');
				$dataforcsv	= array($headings);
				$projectRec	= $this->HR_model->makeFormatOfHRForDownload($hrdata);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				/*dump($dataforcsv);die;*/
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
			
		}catch(Exception	$ex){
			log_message('Error','Unable to download all special purchasing in excel format '.$ex->getMessage());
		}
	}
	

	/**
	 * [downloadItemVendorInfo description] - This function used for download the item vendor info in csv format. 
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @param  [type] $url [description]
	 * @return [type]      [description]
	 */
	function downloadItemVendorInfo($url=null){
		try{
			$this->load->model('frontend/Inventory_model');
			$itemcode	= base64_decode($url);
			if(!empty($itemcode)){
				$vendorInfo		= $this->Inventory_model->getItemVendor($itemcode);
				if(empty($vendorInfo) || empty($itemcode)){
					$vendorInfo		= (object)array('itemcode'=>'Data not available');
				}
			}else{
				$vendorInfo		= $this->Inventory_model->getItemVendor($itemcode);
			}
			if(!empty($vendorInfo)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "item-vendor-info.csv";
				$headings	= array('Item Code','Apdivision No','Vendor No','LastReceiptDate',
				'LastReceiptNo','LastReturnDate','LastReturnNo','VendorWarrantyCode','LastReceiptQuantity',
				'LastUnitCost','StandardLeadTime','LastLeadTime','VendorAliasItemNo','LastReceipTheaderSeqNo',
				'LastReturnPurchaseOrderNo','LastReturnType','LastReceiptPurchaseOrderNo','LastReceiptType',
				'LastReturnHeaderSeqNo','LastAllocatedUnitCost','DateCreated','TimeCreated','UserCreatedKey',
				'Orientation','TimeupDated','UserUpdatedKey','UdfPurchDescript');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Inventory_model->makeFormatOfItemVendorInfo($vendorInfo);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Items list in excel format '.$ex->getMessage());
		}
	}
	
	/**
	 * [downloadVarifyShippingList description] - This function used for download the varify Shipping list in csv format 
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type]      [description]
	 */
	function downloadVarifyShippingList(){
		try{
			$this->load->model('frontend/Report_model');
			$varifyShipping			= $this->Report_model->getVarifyShippings();
			if(empty($varifyShipping)){
				$varifyShipping		= (object)array('Customer'=>'Data not available');
			}
			if(!empty($varifyShipping)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "varify-shipping.csv";
				$headings	= array('Customer','SO#','Status','Reason',
				'Salesperson','Location','Entered By','Order Date','Ship Date','Ship Via',
				'Ship To','Ship Instructions');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfVarifyShippingInfoForDownload($varifyShipping);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all varify shipping in excel format '.$ex->getMessage());
		}
	}

	/**
	 * [downloadPendingPaymentList description] - This function used for download the pending payment list in csv format 
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function downloadPendingPaymentList(){
		try{
			$this->load->model('frontend/Report_model');
			$pendingPayments		= $this->Report_model->getPendingPayments();
			if(empty($pendingPayments)){
				$pendingPayments		= (object)array('Customer'=>'Data not available');
			}			
			if(!empty($pendingPayments)){
				$this->load->helper('file');
				$this->load->helper('download');
				$delimiter	= ",";
				$newline	= "\r\n";
				$filename	= "pending-payment.csv";
				$headings	= array('Customer','SO#','Status','Reason',
							'Salesperson','Entered By','Order Date','Ship Date','CC Auth Date',
							'Terms','Total Amt','Balance','Dep Reqd','Dep Recd');
				$dataforcsv	= array($headings);
				$projectRec	= $this->Report_model->makeFormatOfPendingPaymentInfoForDownload($pendingPayments);
				foreach($projectRec as $res){
					array_push($dataforcsv,$res);
				}
				//dump($dataforcsv);die;
				$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
				force_download($filename, $finaldata);
			}
		}catch(Exception	$ex){
			log_message('Error','Unable to download all Pending Payment in excel format '.$ex->getMessage());
		}
	}
}
?>
	
