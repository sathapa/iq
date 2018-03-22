<?php
Class Report_model extends MY_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all the records for Re-orders
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getAllReOrders(){
		try{
			$sql	="select * from qw.get_reorder_report()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_reorder_report) ? json_decode($results->get_reorder_report) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Re-Orders '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get all the records for Inventory summary
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getAllInventorySummary($filterData=array()){
		try{
			$product = !empty($filterData['searchProduct']) ? $filterData['searchProduct'] : 'all';
			$itemCode= !empty($filterData['searchItemcode']) ? $filterData['searchItemcode'] : 'all';
			$sql		= "select * from qw.get_inventory_summary('$product','$itemCode')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_inventory_summary) ? json_decode($results->get_inventory_summary) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Inventory summary '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for make and return excel format for returun.
	 * 
	 * @Function	makeFormatOfSummaryListForDownload()
	 * @Param		summaryData(array())
	 * @Created		30-11-2017
	 * 
	 * */
	function makeFormatOfSummaryListForDownload($summaryData=array()){
		if(!empty($summaryData)){
			//dump($summaryData);die;
			$newArray	= '';$i=0;
			foreach($summaryData as $val){
				$product			= !empty($val->product) ? $val->product : 'N/A';
				$itemCode			= !empty($val->itemcode) ? $val->itemcode : '';
				$color 				= !empty($val->color) ? $val->color : '';
				$totalQntHand		= !empty($val->totalquantityonhand) ? $val->totalquantityonhand : '0';
				$itemDesc			= !empty($val->itemcodedesc) ? $val->itemcodedesc : 'N/A';
				$soQnt				= !empty($val->so_qty) ? $val->so_qty : '0';
				$poQnt				= !empty($val->po_qty) ? $val->po_qty : '0';
				$unlocatedQuantity	= !empty($val->unallocated_qty) ? $val->unallocated_qty : '0';
				$relPo				= !empty($val->rel_po) ? $val->rel_po : 'N/A';
				/* Making Return array */
				$newArray[$i]['Product']	= $product;
				$newArray[$i]['Item Code']	= $itemCode;
				$newArray[$i]['Color']		= $color;
				$newArray[$i]['ONHand']		= $totalQntHand;
				$newArray[$i]['SOQty']			= $soQnt;
				$newArray[$i]['POQty']		= $poQnt;
				$newArray[$i]['Unloacted Quantity']	= $unlocatedQuantity;
				$newArray[$i]['Rel PO']		= $relPo;
				$newArray[$i]['Item Code Desc']	= $itemDesc;
				$i++;
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for get special purchasing based on parameter records.
	 * 
	 * @Function	getSpecialPurchasing()
	 * @Param		paran,array()
	 * @Created		05-12-2017
	 * 
	 * */
	function getSpecialPurchasing($param=array()){
		try{
			$customer	= 'all';
			$itemCode	= !empty($param['item_code']) ? $param['item_code'] : 'all';
			$procuType	= !empty($param['procurement_type']) ? $param['procurement_type'] : 'all';
			$productLine= !empty($param['product_line']) ? $param['product_line'] : 'all';
			$customerInfo	= !empty($param['customer']) ? explode('(',$param['customer']) : array();
			$customerInfo   = !empty($customerInfo[1]) ? explode(')',$customerInfo[1]) : array();
			if(!empty($customerInfo)){
				$customer	= !empty($customerInfo[0]) ? trim($customerInfo[0]) : 'all';
			}
			$vendor		= !empty($param['vendor']) ? $param['vendor'] : 'all';
			$sql		= "select * from qw.get_special_purch_report('$itemCode','$procuType','$productLine','$customer','$vendor')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_special_purch_report) ? json_decode($results->get_special_purch_report) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Special Purchasing '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for make and return excel format for special Purchasing.
	 * 
	 * @Function	makeFormatOfSpecialPurchasingForDownload()
	 * @Param		purchasingData(array())
	 * @Created		05-12-2017
	 * 
	 * */
	function makeFormatOfSpecialPurchasingForDownload($purchasingData=array()){
		if(!empty($purchasingData)){
			//dump($summaryData);die;
			$newArray	= '';$i=0;
			foreach($purchasingData as $val){
				$title			= !empty($val->title) ? $val->title : 'N/A';
				$procurementType= !empty($val->procurementtype) ? $val->procurementtype : 'N/A';
				$itemCode		= !empty($val->itemcode) ? $val->itemcode : '';
				$salesorderno	= !empty($val->salesorderno) ? $val->salesorderno : '0';
				$soQnt			= !empty($val->so_qty) ? $val->so_qty : '0';
				$soShipDate		= !empty($val->so_ship_date) ? $val->so_ship_date : '';
				$productType	= !empty($val->producttype) ? $val->producttype : '';
				$onHand			= !empty($val->on_hand) ? $val->on_hand : '0';
				$avail			= !empty($val->avail) ? $val->avail : '0';
				$descr			= !empty($val->descr) ? $val->descr : '';
				$orderDate		= !empty($val->orderdate) ? $val->orderdate : '';
				$relatedPo		= !empty($val->related_po) ? $val->related_po : '';
				$vendor			= !empty($val->vendor) ? $val->vendor : 'N/A';
				$productLineDesc= !empty($val->productlinedesc) ? $val->productlinedesc : 'N/A';
				$customerNo		= !empty($val->customerno) ? $val->customerno : 'N/A';
				$alertId		= !empty($val->alertid) ? $val->alertid : 'N/A';
				/* Making Return array */
				$newArray[$i]['Procurement Type']	= $procurementType;
				$newArray[$i]['Item Code']			= $itemCode;
				$newArray[$i]['Sales Order No']		= $salesorderno;
				$newArray[$i]['SO Qty']				= $soQnt;
				$newArray[$i]['SO Ship Date']		= $soShipDate;
				$newArray[$i]['Product Type']		= $productType;
				$newArray[$i]['Item Description']	= 'N/A';
				$newArray[$i]['On Hand Qty']		= $onHand;
				$newArray[$i]['Avail Qty']			= $avail;
				$newArray[$i]['SO Date']			= $orderDate;
				$newArray[$i]['Related PO']			= $relatedPo;
				$newArray[$i]['PO Qty']				= '0';
				$newArray[$i]['PO Reqd Date']		= '';
				$newArray[$i]['PO Status']			= '';
				$newArray[$i]['Alertid']			= $alertId;
				$newArray[$i]['Notes']				= '';
				$newArray[$i]['Customer']			= $customerNo;
				$newArray[$i]['Vendor']				= $vendor;
				$newArray[$i]['Product Line']		= 'N/A';
				$newArray[$i]['Item Type']			= 'N/A';
				$i++;
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for get Ware House Records based on filter.
	 * 
	 * @Function	getWareHouseTransfers()
	 * @Param		param array()
	 * @Created		05-12-2017
	 * */
	function getWareHouseTransfers($param=array()){
		try{
			$itemCode	= !empty($param['item_code']) ? $param['item_code'] : 'All';
			$procuType	= !empty($param['procurement_type']) ? $param['procurement_type'] : 'All';
			$productLine= !empty($param['product_line']) ? $param['product_line'] : 'All';
			$wareHouse	= !empty($param['warehouse']) ? $param['warehouse'] : 'All';
			$sql		= "select * from qw.get_wh_trasfer_report('$itemCode','$procuType','$productLine','$wareHouse')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_wh_trasfer_report) ? json_decode($results->get_wh_trasfer_report) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Ware House Transfer '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for make and return excel format for Transfer ware houses.
	 * 
	 * @Function	makeFormatOfTransferWareHousesForDownload()
	 * @Param		warehouses(array())
	 * @Created		05-12-2017
	 * 
	 * */
	function makeFormatOfTransferWareHousesForDownload($warehouses=array()){
		if(!empty($warehouses)){
			//dump($summaryData);die;
			$newArray	= '';$i=0;
			foreach($warehouses as $val){
				$title			= !empty($val->title) ? $val->title : 'N/A';
				$itemCode		= !empty($val->itemcode) ? $val->itemcode : '';
				$itemCodeDesc	= !empty($val->itemcodedesc) ? $val->itemcodedesc : '';
				$procurementType= !empty($val->procurementtype) ? $val->procurementtype : '0';
				$wareHouse		= !empty($val->warehousecode) ? $val->warehousecode : '0';
				$uom			= !empty($val->uom) ? $val->uom : '';
				$qtyOnHand		= !empty($val->quantityonhand) ? $val->quantityonhand : '';
				$reOrderPointQty= !empty($val->reorderpointqty) ? $val->reorderpointqty : '0';
				$maxQtyOnHand	= !empty($val->maximumonhandqty) ? $val->maximumonhandqty : '0';
				$totalQtyOnHand	= !empty($val->totalquantityonhand) ? $val->totalquantityonhand : '0';
				$os5DayQty		= !empty($val->so_5days_qty) ? $val->so_5days_qty : '';
				$action			= !empty($val->action) ? $val->action : '0';
				$actionQty		= !empty($val->actionqty) ? $val->actionqty : '0';
				$alterId		= !empty($val->alertid) ? $val->alertid : 'N/A';
				$altQty			= !empty($val->altqty) ? $val->altqty : '0';
				$productLineDesc= !empty($val->productlinedesc) ? $val->productlinedesc : 'N/A';
				/* Making Return array */
				$newArray[$i]['Action']			= $action;
				$newArray[$i]['Action Qty']		= $actionQty;
				$newArray[$i]['Alt Qty']		= $altQty;
				$newArray[$i]['Item Code']		= $itemCode;
				$newArray[$i]['Item Desc']		= $itemCodeDesc;
				$newArray[$i]['SProcurement Type']	= $procurementType;
				$newArray[$i]['WareHouse']		= $wareHouse;
				$newArray[$i]['On Hand Qty']	= $qtyOnHand;
				$newArray[$i]['Re-Order Point']	= 'N/A';
				$newArray[$i]['Maximum Qty']	= $maxQtyOnHand;
				$newArray[$i]['On SO (5 Days)']	= $os5DayQty;
				$newArray[$i]['Total On Hand']	= $totalQtyOnHand;
				$newArray[$i]['Alter Id']		= $alterId;
				$newArray[$i]['Title']			= $title;
				$newArray[$i]['Product Line Desc']	= $productLineDesc;
				$newArray[$i]['Item Type']		= 'N/A';
				$i++;
			}
			return $newArray;
		}
	}
	
	/**
	 * This function used for get PSN Inventory.
	 * 
	 * @Function	getPsnInventories()
	 * @Param		void(0)
	 * @Created		22-09-2017
	 * @Return		array()
	 * 
	 * */
	 
	function getPsnInventories(){
		try{
			$sql		= "select * from qw.get_psn_inventory()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_psn_inventory) ? json_decode($results->get_psn_inventory) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get PSN Inventory');
		}
	}
	
	/**
	 * This function used for get Inventory Stockout.
	 * 
	 * @Function	getInventoryStockout()
	 * @Param		void(0)
	 * @Created		26-09-2017
	 * @Return		array()
	 * 
	 * */
	 
	function getInventoryStockout(){
		try{
			$sql		= "select * from qw.get_inventory_stockout('all')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_inventory_stockout) ? json_decode($results->get_inventory_stockout) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Inventory Stockout');
		}
	}
	
	/**
	 * [getInventoryWIP description] - This function used for get Inventory WIP details.
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getInventoryWIP(){
		try{
			$sql	= "select * from qw.get_inventory_wip_report('all')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_inventory_wip_report) ? json_decode($results->get_inventory_wip_report) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get inventory WIP '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for make the format of Inventory WIP.
	 * 
	 * @Function 	downloadInventoryWIPList()
	 * @Param		inventorywip array()
	 * @Created		16-01-2018
	 * */
	function makeFormatOfInventoryWIPListForDownload($inventorieswip=array()){
		if(!empty($inventorieswip) && is_array($inventorieswip)){
			$newArray	= '';$i=0;
			foreach($inventorieswip as $inventoryWip){
				$newArray[$i]['Title']				= !empty($inventoryWip->title) ? $inventoryWip->title : '';
				$newArray[$i]['SalesOrderNo']		= !empty($inventoryWip->salesorderno) ? $inventoryWip->salesorderno : '';
				$newArray[$i]['Customer']			= !empty($inventoryWip->customer) ? $inventoryWip->customer : '';
				$newArray[$i]['WTClass']			= !empty($inventoryWip->jt158_wtclass) ? $inventoryWip->jt158_wtclass : '';
				$newArray[$i]['OrderDate']			= !empty($inventoryWip->orderdate) ? $inventoryWip->orderdate : '';
				$newArray[$i]['LineKey']			= !empty($inventoryWip->linekey) ? $inventoryWip->linekey : '';
				
				$newArray[$i]['ShipExpiryDate']		= !empty($inventoryWip->shipexpiredate) ? $inventoryWip->shipexpiredate : '';
				$newArray[$i]['ParentItem']			= !empty($inventoryWip->parentitem) ? $inventoryWip->parentitem : '';
				$newArray[$i]['ComponentItem']		= !empty($inventoryWip->componentitem) ? $inventoryWip->componentitem : '';
				$newArray[$i]['ProductLineDesc']	= !empty($inventoryWip->productlinedesc) ? $inventoryWip->productlinedesc : '';
				$newArray[$i]['ItemDesc']			= !empty($inventoryWip->itemdesc) ? $inventoryWip->itemdesc : '';
				$newArray[$i]['WTNumber']			= !empty($inventoryWip->jt158_wtnumber) ? $inventoryWip->jt158_wtnumber : '';
				$newArray[$i]['WTParent']			= !empty($inventoryWip->t158_wtparent) ? $inventoryWip->t158_wtparent : '';
				$newArray[$i]['WTPart']				= !empty($inventoryWip->jt158_wtpart) ? $inventoryWip->jt158_wtpart : '';
				$newArray[$i]['WTStep']				= !empty($inventoryWip->jt158_wtstep) ? $inventoryWip->jt158_wtstep : '';
				$newArray[$i]['ShipLocation']		= !empty($inventoryWip->shiploc) ? $inventoryWip->shiploc : '';
				$newArray[$i]['ProductLocation']	= !empty($inventoryWip->prodloc) ? $inventoryWip->prodloc : '';
				$newArray[$i]['InventoryLocation']	= !empty($inventoryWip->invloc) ? $inventoryWip->invloc : '';
				$newArray[$i]['DefaultLocation']	= !empty($inventoryWip->defaultloc) ? $inventoryWip->defaultloc : '';
				$newArray[$i]['Quantity']			= !empty($inventoryWip->qty) ? $inventoryWip->qty : '';
				$newArray[$i]['UOM']				= !empty($inventoryWip->uom) ? $inventoryWip->uom : '';
				$newArray[$i]['TransferType']		= !empty($inventoryWip->transfertype) ? $inventoryWip->transfertype : '';
				$newArray[$i]['DayStillShip']		= !empty($inventoryWip->daystilship) ? $inventoryWip->daystilship : '';
				$newArray[$i]['AlertId']			= !empty($inventoryWip->alertid) ? $inventoryWip->alertid : '';
				$newArray[$i]['SalesPerson Name']	= !empty($inventoryWip->salespersonname) ? $inventoryWip->salespersonname : '';
				$newArray[$i]['Weight']				= !empty($inventoryWip->weight) ? $inventoryWip->weight : '';
				$newArray[$i]['ItemType']			= !empty($inventoryWip->itemtype) ? $inventoryWip->itemtype : '';
				$newArray[$i]['Revenue']			= !empty($inventoryWip->revenue) ? $inventoryWip->revenue : '';
				$newArray[$i]['Cost']				= !empty($inventoryWip->cost) ? $inventoryWip->cost : '';
				$newArray[$i]['LF']					= !empty($inventoryWip->lf) ? $inventoryWip->lf : '';
				$newArray[$i]['SF']					= !empty($inventoryWip->sf) ? $inventoryWip->sf : '';
				$i++;
			}
			return $newArray;
		}
	}
	/**
	 * [getVarifypayment description] - This function used for get the varify payment records.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getVarifyShippings(){
		try{
			$sql	= "select * from qw.get_verify_shipping()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_verify_shipping) ? json_decode($results->get_verify_shipping) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get varify payment '.$ex->getMessage());
		}
	}

	/**
	 * [makeFormatOfVarifyShippingInfo description] - This function used for set and return the format of varify payment records.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @param  array  $varifyShippings [description]
	 * @return [type]                 [description]
	 */
	function makeFormatOfVarifyShippingInfoForDownload($varifyShippings=array()){
		if(!empty($varifyShippings)){
			$newArray	= '';$i=0;
			foreach($varifyShippings as $key=>$val){
				$shipping = (array) $val;
				$customer 	= !empty($shipping['Customer']) ? $shipping['Customer'] : '';
				$so 		= !empty($shipping['SO#']) ? $shipping['SO#'] : '';
				$status 	= !empty($shipping['orderstatus']) ? $shipping['orderstatus'] : '';
				$reason 	= !empty($shipping['Reason']) ? $shipping['Reason'] : '';
				$salesperson= !empty($shipping['Salesperson']) ? $shipping['Salesperson'] : '';
				$shiplocation= !empty($shipping['ShipLocatoin']) ? $shipping['ShipLocatoin'] : '';
				$enterBy 	= !empty($shipping['Entered By']) ? $shipping['Entered By'] : '';
				$orderDate 	= !empty($shipping['Order Date']) ? $shipping['Order Date'] : '';
				$shipDate 	= !empty($shipping['Ship Date']) ? $shipping['Ship Date'] : '';
				$shipVia 	= !empty($shipping['Ship Via']) ? $shipping['Ship Via'] : '';
				$shipTo 	= !empty($shipping['Ship To']) ? $shipping['Ship To'] : '';
				$shipInstruction 	= !empty($shipping['Ship Instructions']) ? $shipping['Ship Instructions'] : '';
				$orderStatusDisplay	= '';
				if(!empty($status) && $status=='A'){
					$orderStatusDisplay		= 'Open';
				}
				if(!empty($status) && $status=='H'){
					$orderStatusDisplay		= 'Hold';
				}
				if(!empty($status) && $status=='C'){
					$orderStatusDisplay		= 'Close';
				}
				if(!empty($status) && $status=='X'){
					$orderStatusDisplay		= 'Canceled';
				}
				if(!empty($status) && $status=='O'){
					$orderStatusDisplay		= 'Ordered';
				}
				if(empty($orderStatusDisplay)){
					$orderStatusDisplay = $status;
				}
				/* Making Return array */
				$newArray[$i]['Customer']		= $customer;
				$newArray[$i]['SO#']			= $so;
				$newArray[$i]['Status']			= $orderStatusDisplay;
				$newArray[$i]['Reason']			= $reason;
				$newArray[$i]['Salesperson']	= $salesperson;
				$newArray[$i]['Location']		= $shiplocation;
				$newArray[$i]['Entered By']		= $enterBy;
				$newArray[$i]['Order Date']		= $orderDate;
				$newArray[$i]['Ship Date']		= $shipDate;
				$newArray[$i]['Ship Via']		= $shipVia;
				$newArray[$i]['Ship To']		= $shipTo;
				$newArray[$i]['Ship Instructions']	= $shipInstruction;
				$i++;
			}
			return $newArray;
		}
	}

	/**
	 * [getPendingPayments description] - This function used for get the pending payments.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getPendingPayments(){
		try{
			$sql	= "select * from qw.get_pending_payments()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_pending_payments) ? json_decode($results->get_pending_payments) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Pending Payment '.$ex->getMessage());
		}
	}

	/**
	 * [makeFormatOfPendingPaymentInfo description] - This function used for set and return the format of pending payment records.
	 * @author	Prem Yadav(TIS) <prem@tisindiasupport.com>
	 * @param  array  $pendingPayment [description]
	 * @return [type]                 [description]
	 */
	function makeFormatOfPendingPaymentInfoForDownload($pendingPayments=array()){
		if(!empty($pendingPayments)){
			$newArray	= '';$i=0;
			foreach($pendingPayments as $key=>$val){
				$payment = (array) $val;
				$customer 	= !empty($payment['Customer']) ? $payment['Customer'] : '';
				$so 		= !empty($payment['SO#']) ? $payment['SO#'] : '';
				$status 	= !empty($payment['Status']) ? $payment['Status'] : '';
				$reason 	= !empty($payment['Reason']) ? $payment['Reason'] : '';
				$salesperson= !empty($payment['Salesperson']) ? $payment['Salesperson'] : '';
				$enterBy 	= !empty($payment['Entered By']) ? $payment['Entered By'] : '';
				$orderDate 	= !empty($payment['Order Date']) ? $payment['Order Date'] : '';
				$shipDate 	= !empty($payment['Ship Date']) ? $payment['Ship Date'] : '';
				$ccAuthDate	= !empty($payment['CC Auth Date']) ? $payment['CC Auth Date'] : '';
				$terms  	= !empty($payment['Terms']) ? $payment['Terms'] : '';
				$totalAmt 	= !empty($payment['Total Amt']) ? $payment['Total Amt'] : '';

				$balance 	= !empty($payment['Balance']) ? $payment['Balance'] : '';
				$depReqd 	= !empty($payment['Dep Reqd']) ? $payment['Dep Reqd'] : '';
				$depRecd 	= !empty($payment['Dep Recd']) ? $payment['Dep Recd'] : '';


				$orderStatusDisplay	= '';
				if(!empty($status) && $status=='A'){
					$orderStatusDisplay		= 'Open';
				}
				if(!empty($status) && $status=='H'){
					$orderStatusDisplay		= 'Hold';
				}
				if(!empty($status) && $status=='C'){
					$orderStatusDisplay		= 'Close';
				}
				if(!empty($status) && $status=='X'){
					$orderStatusDisplay		= 'Canceled';
				}
				if(!empty($status) && $status=='O'){
					$orderStatusDisplay		= 'Ordered';
				}
				if(empty($orderStatusDisplay)){
					$orderStatusDisplay = $status;
				}
				/* Making Return array */
				$newArray[$i]['Customer']		= $customer;
				$newArray[$i]['SO#']			= $so;
				$newArray[$i]['Status']			= $orderStatusDisplay;
				$newArray[$i]['Reason']			= $reason;
				$newArray[$i]['Salesperson']	= $salesperson;
				$newArray[$i]['Entered By']		= $enterBy;
				$newArray[$i]['Order Date']		= $orderDate;
				$newArray[$i]['Ship Date']		= $shipDate;
				$newArray[$i]['CC Auth Date']	= $ccAuthDate;
				$newArray[$i]['Terms']			= $terms;
				$newArray[$i]['Total Amt']		= $totalAmt;
				$newArray[$i]['Balance']		= $balance;
				$newArray[$i]['DepReqd']		= $depReqd;
				$newArray[$i]['DepRecd']		= $depRecd;
				$i++;
			}
			return $newArray;
		}
	}
}

?>
