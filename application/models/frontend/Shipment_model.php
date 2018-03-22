<?php
Class Shipment_model extends MY_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all UPS Fedex Tracking details.
	 * 
	 * @Function	getUpsFedexTracking()
	 * @Param		void(0)
	 * @Created		22-09-2017
	 * 
	 * */
	 
	function getUpsFedexTracking(){
		try{
			$sql		= "select * from qw.get_upsfedex_tracking()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_upsfedex_tracking) ? json_decode($results->get_upsfedex_tracking) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get UPS FedEx Tracking data');
		}
	}
	
	/**
	 * This function used for get all UPS Fedex Tracking details.
	 * 
	 * @Function	getUpsFedexTracking()
	 * @Param		void(0)
	 * @Created		22-09-2017
	 * 
	 * */
	 
	function getDailyTracking(){
		try{
			$sql		= "select * from qw.get_daily_tracking()";
			$results	= $this->db->query($sql);
			$results	= $results->row();
			if(!empty($results)){
				$results= !empty($results->get_daily_tracking) ? json_decode($results->get_daily_tracking) : '';
				if(!empty($results)){
					return $results;
				}return false;
			}
			return false;
		}catch(Exception	$ex){
			log_message('error','Unable to get Daily Tracking data');
		}
	}
	
	
}

?>
