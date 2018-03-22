<?php
Class TR_model extends MY_Model {
	public $limit = 10;
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * This function used for get all the records for Test Result
	 *
	 */
		function getAllTR(){
			 try{
					$sql="select * from qw.get_All_TResult()";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					if($result){
						return json_decode($result[0]->get_all_tresult);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}


		function get_tr_trdata($trno='0'){
			 try{
					$sql="select * from qw.get_tr_trdata('$trno')";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					if($result){
						return json_decode($result[0]->get_tr_trdata);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}
	
	
	/**
	 * This function used for create / update Test Report
	 * @Function	createUpdateTR()
	 * @Param		updateData array()
	 * @Created		27-11-2017
	 * @Return		boolean
	 * 
	 * */
	function createUpdateTR($updateData=array(),$status=0,$trno=0){
		try{
			if(!empty($updateData) && is_array($updateData)){
				$sample_identity    = !empty($updateData['sample_identity']) ? $updateData['sample_identity'] : '';
				$sample_identity = str_replace("'", "''", $sample_identity);
		
				$test_recordno		= !empty($updateData['test_recordno']) ? $updateData['test_recordno'] : ''; 
				$test_recordno = str_replace("'", "''", $test_recordno);
				$test_recordno = preg_replace('/\s+/', '', $test_recordno);

				$test_standard		= !empty($updateData['test_standard']) ? $updateData['test_standard'] : '';
				$test_standard = str_replace("'", "''", $test_standard);

				$test_description	= !empty($updateData['test_description']) ? $updateData['test_description'] : '';
				$test_description = str_replace("'", "''", $test_description);

				$test_summary		= !empty($updateData['test_summary']) ? $updateData['test_summary'] : ''; 
			/*	$test_summary 		= htmlspecialchars(stripslashes($test_summary));*/
				$test_summary = str_replace("'", "''", $test_summary);

			    $test_results       = !empty($updateData['test_results']) ? $updateData['test_results'] : array();
			    $test_data		= array();
				if(!empty($test_results)){
					for($i=0;$i<count($test_results);$i++){
						$test_res = !empty($test_results[$i]) ? $test_results[$i] : '';
						/*$ppl	= array("test"=>$test_res);*/
						$test_data[$i]	= str_replace("'", "''", $test_res);;
					}
				}

				$test_data	= (object)$test_data;
				$test_data	= json_encode($test_data);
				if($status == 0){$test_recordno = $trno;}
		
				$date	= !empty($updateData['date']) ? $updateData['date'] : ''; 
				$tester	= !empty($updateData['tester']) ? $updateData['tester'] : ''; 

				$sql	= "select * from qw.create_update_testresult('$sample_identity','$test_recordno','$test_standard','$test_description','$test_summary',
				'$test_data','$date','$tester',$status)";
				
				$results	= $this->db->query($sql);
				$results	= $results->row();
				

				if(!empty($results)){
					$results= !empty($results->create_update_testresult) ? $results->create_update_testresult : '';
					if(!empty($results)){
						return $results;
					}return false;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to create/update Iso ncr '.$ex->getMessage());
		}
	}
	

	/**
	 * This function used for create / update Test Report
	 * @Function	createUpdateIsoncr()
	 * @Param		updateData array()
	 * @Created		27-11-2017
	 * @Return		boolean
	 * 
	 * */
	function checkunique($trno=0){
		try{
				$sql	= "select * from qw.qw_test_result where test_recordno='".$trno."'";
				
				$results	= $this->db->query($sql);
				$results	= $results->row();
				
				if(!empty($results)){
					if(!empty($results)){
						return $results;
					}return false;
				}return false;
			
		}catch(Exception	$ex){
			log_message('error','Unable to create/update Iso ncr '.$ex->getMessage());
		}
	}
}

?>
