<?php
Class Isoncr_model extends MY_Model {
	public $limit = 10;
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all the records for ISO Ncr
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getAllIsoncr($filterData=array()){
		try{
			$currentDate	= date('Y-m-d');
			$customer 		= 'all';
			$startDate		= !empty($filterData['startDate']) ? $filterData['startDate'] : $currentDate; 
			$endDate		= !empty($filterData['endDate']) ? $filterData['endDate'] : $currentDate; 
			$ncrCategory	= !empty($filterData['ncrCategory']) ? $filterData['ncrCategory'] : 'all';
			$searchCustomer	= !empty($filterData['customer']) ? $filterData['customer'] : 'all';
			$customerInfo	= (!empty($searchCustomer) && $searchCustomer!='all') ? explode(' ',$searchCustomer):array();
			if(!empty($customerInfo[0])){
				$customer	= trim($customerInfo[0]);
			}
			//echo $customer;die;
			$sql	="select * from qw.get_iso_nonconformance('$customer','$ncrCategory','$startDate','$endDate',0)";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			//dump($results);die;
			if(!empty($results)){
				$results= !empty($results->get_iso_nonconformance) ? json_decode($results->get_iso_nonconformance) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Iso ncr '.$ex->getMessage());
		}
	}
	

	/**
	 * This function used for get all the records for ISO Ncr
	 * @author	Prem Yadav <prem@tisindiasupport.com>
	 * @return [type] [description]
	 */
	function getIsoncrById($isoId=0){
		try{
			if(!empty($isoId) && is_numeric($isoId)){
				$currentDate	= date('Y-m-d');
				$sql			= "select * from qw.get_iso_nonconformance('all','all','$currentDate','$currentDate',$isoId)";
				$results		= $this->db->query($sql);
				$results		= $results->row();
				if(!empty($results)){
					$results= !empty($results->get_iso_nonconformance) ? json_decode($results->get_iso_nonconformance) : '';
					if(!empty($results)){
						return $results[0];
					}return false;
				}return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Iso ncr '.$ex->getMessage());
		}
	}


	/**
	 * This function used for create / update iso ncr.
	 * @Function	createUpdateIsoncr()
	 * @Param		updateData array()
	 * @Created		27-11-2017
	 * @Return		boolean
	 * 
	 * */
	function createUpdateIsoncr($updateData=array()){
		try{
			if(!empty($updateData) && is_array($updateData)){
				$ncrId			= !empty($updateData['ncr_id']) ? $updateData['ncr_id'] : ''; 
				$customer		= !empty($updateData['customer_name']) ? $updateData['customer_name'] : '';
				$customerInfo	= !empty($customer) ? explode(' ',$customer) : array();
				if(!empty($customerInfo[0])){
					$customer	= trim($customerInfo[0]);
				}
				$project		= !empty($updateData['project']) ? $updateData['project'] : ''; 
				$product		= !empty($updateData['product']) ? $updateData['product'] : ''; 
				$division		= !empty($updateData['division']) ? $updateData['division'] : ''; 
				$origSalesorder	= !empty($updateData['orig_sales_order']) ? $updateData['orig_sales_order'] : ''; 
				$newSalesOrder	= !empty($updateData['new_sales_order']) ? $updateData['new_sales_order'] : ''; 
				$category		= !empty($updateData['non_conformance_category']) ? json_encode($updateData['non_conformance_category']) : ''; 
				$description	= !empty($updateData['non_conformance_complaint']) ? $updateData['non_conformance_complaint'] : ''; 
				$correcAction	= !empty($updateData['corrective_action']) ? $updateData['corrective_action'] : ''; 
				$prevenAction	= !empty($updateData['preventive_action']) ? $updateData['preventive_action'] : '';

				$oldAttach1 = !empty($updateData['attachment1']) ? $updateData['attachment1'] : '';
				$oldAttach2 = !empty($updateData['attachment2']) ? $updateData['attachment2'] : '';
				$oldAttach3 = !empty($updateData['attachment3']) ? $updateData['attachment3'] : '';
				
				$attachment1	= !empty($updateData[0]) ? $updateData[0] : $oldAttach1;
				$attachment2	= !empty($updateData[1]) ? $updateData[1] : $oldAttach2;
				$attachment3	= !empty($updateData[2]) ? $updateData[2] : $oldAttach3;
				$username		= $this->session->userdata('frontendUserName');
				$sql			= "select * from qw.create_update_isoncr('$ncrId','$customer','$division','$origSalesorder','$newSalesOrder',
				'$category','$description','$correcAction','$prevenAction','$username','$project','$product','$attachment1','$attachment2',
				'$attachment3')";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->create_update_isoncr) ? $results->create_update_isoncr : '';
					if(!empty($results)){
						return $results;
					}return false;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to create/update Iso ncr '.$ex->getMessage());
		}
	}
	
}

?>
