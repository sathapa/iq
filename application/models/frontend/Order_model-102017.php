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
			$orderStatus	= !empty($filterData['order_status']) ? $filterData['order_status'] : 'All'; 
			$shipDateFrom	= !empty($filterData['ship_date_from']) ? $filterData['ship_date_from'] : $currentDate; 
			$shipDateTo		= !empty($filterData['ship_date_to']) ? $filterData['ship_date_to'] : $currentDate; 
			$shippMethode	= !empty($filterData['shipp_method']) ? $filterData['shipp_method'] : 'All'; 
			$shippLocation	= !empty($filterData['shipp_location']) ? $filterData['shipp_location'] : 'All';
			
			$sql		= "select * from qw.get_all_orders_by_date('$orderStatus','$shipDateFrom','$shipDateTo','$shippMethode','$shippLocation')";
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
			if(!empty($saleOrderInfo)){
				$salesOrderNum		= !empty($saleOrderInfo['update_sales_order_num']) ? $saleOrderInfo['update_sales_order_num'] : '';
				$salesOrderLinekey	= !empty($saleOrderInfo['update_linekey']) ? $saleOrderInfo['update_linekey'] : '';
				$salesOrderWtStep	= !empty($saleOrderInfo['update_wtstep']) ? $saleOrderInfo['update_wtstep'] : '';
				$salesOrderTimeTaken= !empty($saleOrderInfo['update_timetaken']) ? $saleOrderInfo['update_timetaken'] : '0.0';
				$salesOrderUsedQnty	= !empty($saleOrderInfo['update_quantity']) ? $saleOrderInfo['update_quantity'] : '0';
				$salesOrderComments	= !empty($saleOrderInfo['update_comments']) ? $saleOrderInfo['update_comments'] : '';
				$sql		= "select * from qw.save_salesorder_details('$salesOrderNum','$salesOrderLinekey','$salesOrderWtStep',$salesOrderTimeTaken,$salesOrderUsedQnty,'$salesOrderComments')";
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
