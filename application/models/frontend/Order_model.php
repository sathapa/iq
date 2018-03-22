<?php
Class Order_model extends MY_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all orders info details.
	 * 
	 * @Function	getOrders()
	 * @Param		salesperson(string)
	 * @Created		25-09-2017
	 * @Return		array()
	 * */
	 
	function getOrders($salesperson='all'){
		try{
			$sql		= "select * from qw.get_all_orders('$salesperson')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_all_orders) ? json_decode($results->get_all_orders) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Orders details data');
		}
	}
	
	/**
	 * This function used for get all orders info details based on filtered parameter.
	 * 
	 * @Function	getFilterOrders()
	 * @Param		filterData(array)
	 * @Created		13-10-2017
	 * @Return		array()
	 * */
	 
	function getFilterOrders($filterData=array()){
		try{
			$currentDate	= date('Y-m-d');
			$customerSageNumber = 'All';
			$orderStatus	= !empty($filterData['order_status']) ? $filterData['order_status'] : 'Open'; 
			$shipDateFrom	= !empty($filterData['ship_date_from']) ? $filterData['ship_date_from'] : $currentDate; 
			$shipDateTo		= !empty($filterData['ship_date_to']) ? $filterData['ship_date_to'] : $currentDate; 
			$shippMethode	= !empty($filterData['shipp_method']) ? $filterData['shipp_method'] : 'All'; 
			$shippLocation	= !empty($filterData['shipp_location']) ? $filterData['shipp_location'] : 'All';
			$refNum			= !empty($filterData['tracking_ref']) ? $filterData['tracking_ref'] : '';
			$customerSageNum= !empty($filterData['customer_sage_number']) ? $filterData['customer_sage_number'] : 'All';
			$customerInfo	= (!empty($customerSageNum) && $customerSageNum!=='All') ? explode('[',$customerSageNum):array();
			/*$customerInfo	= !empty($customerInfo[1]) ? explode(')',$customerInfo[1]) : array();*/
			if(!empty($customerInfo[0])){
				$customerSageNumber	= trim($customerInfo[0]);
				/*echo $customerSageNumber;die;*/
			}
			/*echo $customerInfo[0];die; */
			$sql		= "select * from qw.get_all_orders_by_date('$orderStatus','$shipDateFrom','$shipDateTo','$shippMethode',
			'$shippLocation','$refNum','$customerSageNumber')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_all_orders_by_date) ? json_decode($results->get_all_orders_by_date) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Filter Orders details data');
		}
	}
	
	/**
	 * This function used for get sales order based on salesorder number.
	 * 
	 * @Function	getSalesorderDetails()
	 * @Param		salesOrderNo
	 * @Created		10-10-2017
	 * @Return		array()
	 * 
	 * */
	 
	function getSalesorderDetails($salesOrderNo=null){
		try{
			if(!empty($salesOrderNo)){
				$sql		= "select * from qw.get_salesorder_details('$salesOrderNo')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_salesorder_details) ? json_decode($results->get_salesorder_details) : '';
					if(!empty($results)){
						return $results;
					}return false;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Sales Orders based on salesorder number '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update Sales Order Infomation.
	 * 
	 * @Function	updateSalesOrderInfo()
	 * @Param		saleOrderInfo.array
	 * @Created		11-10-2017
	 * @Return		true/false
	 * 
	 * */
	function updateSalesOrderInfo($saleOrderInfo=array()){
		try{
			$status	= 'No';
			$msg	= 'Error';
			$CI			= & get_instance();
			$login_user	= $CI->session->userdata('frontendUserName');
			if(!empty($login_user) && !empty($saleOrderInfo)){
				$salesOrderNum		      = !empty($saleOrderInfo['update_sales_order_num']) ? $saleOrderInfo['update_sales_order_num'] : '';
				$salesOrderLinekey	      = !empty($saleOrderInfo['update_linekey']) ? $saleOrderInfo['update_linekey'] : '';
				$salesOrderWtStep	      = !empty($saleOrderInfo['update_wtstep']) ? $saleOrderInfo['update_wtstep'] : '';
				$salesOrdeItemCode	      = !empty($saleOrderInfo['update_itemcode']) ? $saleOrderInfo['update_itemcode'] : '';
				$salesOrderTimeTaken      = !empty($saleOrderInfo['update_timetaken']) ? $saleOrderInfo['update_timetaken'] : '0.0';
				$salesOrderUsedQnty	      = !empty($saleOrderInfo['update_quantity']) ? $saleOrderInfo['update_quantity'] : '0';
				$salesOrderJobStatus      = !empty($saleOrderInfo['update_jobstatus']) ? $saleOrderInfo['update_jobstatus'] : '';
				$salesOrderComments	      = !empty($saleOrderInfo['update_comments']) ? $saleOrderInfo['update_comments'] : '';
				$salesOrderLotBatchNo     = !empty($saleOrderInfo['update_lotbatchnumber']) ? $saleOrderInfo['update_lotbatchnumber'] : '';
				$salesOrderParentItemCode = !empty($saleOrderInfo['update_parentitemcode']) ? $saleOrderInfo['update_parentitemcode'] : '';
				$sql		= "select * from qw.save_salesorder_details('$salesOrderNum','$salesOrderLinekey','$salesOrderWtStep','$salesOrdeItemCode',$salesOrderTimeTaken,$salesOrderUsedQnty,'$salesOrderJobStatus','$salesOrderComments','$salesOrderLotBatchNo','$salesOrderParentItemCode','$login_user')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->save_salesorder_details) ? $results->save_salesorder_details : '';
					if(!empty($results)){
						$msg	= ucfirst($results);
						$status	= 'Yes';
					}else{
						$msg	= 'Error';
						$status	= 'No';
					}
				}else{
					$msg	= 'Error';
					$status	= 'No';
				}
			}else{
				$msg	= 'Error';
				$status	= 'No';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg));die;
		}catch(Exception	$ex){
			log_message('error','Unable to update Sales Orders based on salesorder number '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for update Sales Order Hardware Infomation.
	 * 
	 * @Function	updateHardWareOrderInfo()
	 * @Param		saleOrderInfo.array
	 * @Created		11-10-2017
	 * @Return		true/false
	 * 
	 * */
	function updateHardWareOrderInfo($saleOrderInfo=array()){ 
		try{
			$status	= 'No';
			$msg	= 'Error';
			$CI			= & get_instance();
			$login_user	= $CI->session->userdata('frontendUserName');
			if(!empty($login_user) && !empty($saleOrderInfo)){
				$salesOrderNum		= !empty($saleOrderInfo['hardware_sales_order_num']) ? $saleOrderInfo['hardware_sales_order_num'] : '';
				$salesOrderLinekey	= !empty($saleOrderInfo['hardware_linekey']) ? $saleOrderInfo['hardware_linekey'] : '';
				$salesOrderWtStep	= !empty($saleOrderInfo['hardware_wtstep']) ? $saleOrderInfo['hardware_wtstep'] : '';
				$update_qty	= !empty($saleOrderInfo['update_qty']) ? $saleOrderInfo['update_qty'] : 0;
				$update_time= !empty($saleOrderInfo['update_tmn']) ? $saleOrderInfo['update_tmn'] : 0.0;
				$update_item= !empty($saleOrderInfo['update_itm']) ? $saleOrderInfo['update_itm'] : '';
				
				$item_data=array();
				if(!empty($update_item)){
					for($i=0;$i<count($update_item);$i++){
						$item_data[$update_item[$i]]=array('quantity'=>$update_qty[$i],'timetaken'=>$update_time[$i]);
					}
				}
				$item_data=json_encode($item_data);
								
				/*$strMsg = "updateHardWareOrderInfo()";
				var_dump($salesOrderNum);
				var_dump($salesOrderLinekey);
				var_dump($salesOrderWtStep);
				var_dump($item_data);
				echo $strMsg; die; */
				
				$sql		= "select * from qw.save_salesorder_hardwaredetails('$salesOrderNum','$salesOrderLinekey','$salesOrderWtStep','$item_data','$login_user')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->save_salesorder_details) ? $results->save_salesorder_details : '';
					if(!empty($results)){
						$msg	= ucfirst($results);
						$status	= 'Yes';
					}else{
						$msg	= 'Error';
						$status	= 'No';
					}
				}else{
					$msg	= 'Error';
					$status	= 'No';
				}
			}else{
				$msg	= 'Error';
				$status	= 'No';
			}
			echo json_encode(array('status'=>$status,'msg'=>$msg));die;
		}catch(Exception	$ex){
			log_message('error','Unable to update Sales Orders based on salesorder number '.$ex->getMessage());
		}
	}
	
}

?>
