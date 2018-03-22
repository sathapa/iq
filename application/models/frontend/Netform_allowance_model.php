<?php
Class Netform_allowance_model extends MY_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all Netform Allowance details.
	 * 
	 * @Function	getAllNetformAllowance()
	 * @Param		void(0)
	 * @Created		05-10-2017
	 * @Return		array()
	 * */
	
	function getAllNetformAllowance(){
		try{
			$sql		= "select * from qw.get_netform_allownace('all')";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_netform_allownace) ? json_decode($results->get_netform_allownace) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Netform Allowance details data.'.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for create update netform allowance.
	 * 
	 * @Function	createUpdateNetformAllowance()
	 * @Param		netformAllowanceData(array())
	 * @Created		05-10-2017
	 * @Return		boolean(true/false)
	 * 
	 * */
	
	function createUpdateNetformAllowance($netformAllowanceData=array()){
		try{
			if(!empty($netformAllowanceData)){
				$product		= !empty($netformAllowanceData['product']) ? $netformAllowanceData['product'] : '';
				$category		= !empty($netformAllowanceData['category']) ? $netformAllowanceData['category'] : '';
				$termAllowance	= !empty($netformAllowanceData['term_allowance']) ? $netformAllowanceData['term_allowance'] : '0';
				$sql		= "select * from qw.create_update_netform_allowance('$product','$category',$termAllowance)";
				$results	= $this->db->query($sql);
				$results	= $results->row();
				if(!empty($results)){
					$results= !empty($results->create_update_netform_allowance) ? $results->create_update_netform_allowance : '';
					if(!empty($results)){
						return $results;
					}return false;
				}
				return false;
			}return false;
		}catch(Exception	$ex){
			log_message('error','Unable to create update Netform Allowance details data.'.$ex->getMessage());
		}
	}
	
	
}

?>
