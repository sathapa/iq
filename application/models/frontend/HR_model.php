<?php
Class HR_model extends MY_Model {
	public $limit = 10;
	public function __construct(){
		parent::__construct();
	}
	
	

	/**
	 * This function used for getting all the records for HR
	 * 
	 */
		function getAllHR($param=array()){
			 try{
				 	$hs	= !empty($param['searchHS']) ? $param['searchHS'] : 'all';
				 	$hs	= substr($hs, strpos($hs, "[") + 1, (strpos($hs, "]") - strpos($hs, "[") -1));

					$asdate	= !empty($param['searchASDate']) ? $param['searchASDate'] : 'all';
					$aedate = !empty($param['searchAEDate']) ? $param['searchAEDate'] : 'all';
		
					$sql="select * from qw.get_all_hresult('$hs','$asdate','$aedate')";
					
					$result	= $this->db->query($sql);
					$result	= $result->result();
					if($result){
						return json_decode($result[0]->get_all_hresult);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}


		function get_the_hrdata($hrno='0'){
			 try{
					$sql="select * from qw.get_the_hrdata('$hrno')";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					if($result){
						return json_decode($result[0]->get_the_hrdata);
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
	function createUpdateHR($updateData=array(),$status=0,$hrno=0){
		$CI	= & get_instance();
		try{
			if(!empty($updateData) && is_array($updateData)){
				$userId		= $CI->session->userdata('frontendUserName');

				$first_name    = !empty($updateData['first_name']) ? $updateData['first_name'] : '';
				$first_name    = str_replace("'", "''", $first_name);
				
				$hrid = uniqid(rand());
				if($status == 0){$hrid = $hrno;}

				$last_name		= !empty($updateData['last_name']) ? $updateData['last_name'] : ''; 
				$last_name = str_replace("'", "''", $last_name);
				/*$test_recordno = preg_replace('/\s+/', '', $test_recordno);*/

				$sex		= !empty($updateData['sex']) ? $updateData['sex'] : '';
				$homeno	= !empty($updateData['homeno']) ? $updateData['homeno'] : '';
				$cellno = !empty($updateData['cellno']) ? $updateData['cellno'] : '';

				$department		= !empty($updateData['department']) ? $updateData['department'] : ''; 
				$supervisor	= !empty($updateData['supervisor']) ? $updateData['supervisor'] : ''; 
				$manufac_exp_y = !empty($updateData['manufac_exp_y']) ? $updateData['manufac_exp_y'] : 0; 
				$manufac_exp_m = !empty($updateData['manufac_exp_m']) ? $updateData['manufac_exp_m'] : 0; 
				
				/*$month = divideFloat($manufac_exp_m, 12);*/
				$manuf_exp = $manufac_exp_y + ($manufac_exp_m/12);
				/*var_dump($month); var_dump($manuf_exp); die;*/

				$bonus_check_date = !empty($updateData['bonus_check_date']) ? $updateData['bonus_check_date'] : ''; 
				$a_date	= !empty($updateData['a_date']) ? $updateData['a_date'] : ''; 
				$i_date = !empty($updateData['i_date']) ? $updateData['i_date'] : ''; 
				$hired_status = !empty($updateData['hired_status']) ? $updateData['hired_status'] : ''; 
				$referred_by = !empty($updateData['referred_by']) ? $updateData['referred_by'] : ''; 
				$comment = !empty($updateData['comment']) ? $updateData['comment'] : '';
				$comment = str_replace("'", "''", $comment);
				$other = !empty($updateData['other']) ? $updateData['other'] : '';
				$other = str_replace("'", "''", $other);
				$h_date = !empty($updateData['h_date']) ? $updateData['h_date'] : ''; 

				/*$letter = !empty($updateData['letter']) ? $updateData['letter'] : '';*/				 
				$interviewQ  = !empty($updateData[0]) ? $updateData[0] : '';
				$application	= !empty($updateData[1]) ? $updateData[1] : '';
				$resume	= !empty($updateData[2]) ? $updateData[2] : '';
				$test	= !empty($updateData[3]) ? $updateData[3] : '';
				$letter	= !empty($updateData[4]) ? $updateData[4] : '';
				if(empty($interviewQ)) { $interviewQ = $updateData['interview_questions']; }
				if(empty($application)) { $application = $updateData['application']; }
				if(empty($resume)) {$resume = $updateData['resume']; }
				if(empty($test)) {$test = $updateData['test']; }
				if(empty($letter)) {$letter = $updateData['letter']; }


				$sex	= substr($sex, strpos($sex, "[") + 1, (strpos($sex, "]") - strpos($sex, "[") -1));
				$department	= substr($department, strpos($department, "[") + 1, (strpos($department, "]") - strpos($department, "[") -1));
				$hired_status	= substr($hired_status, strpos($hired_status, "[") + 1, (strpos($hired_status, "]") - strpos($hired_status, "[") -1));			
				$sql	= "select * from qw.create_update_hr('$hrid','$first_name','$last_name','$sex','$homeno','$cellno','$department','$supervisor','$manuf_exp', '$bonus_check_date', '$a_date', '$i_date', '$hired_status', '$referred_by', '$comment','$other',$status, '$userId', '$interviewQ','$application','$resume','$test','$letter', '$h_date')";

				$results	= $this->db->query($sql);
				$results	= $results->row();
				

				if(!empty($results)){
					$results= !empty($results->create_update_hr) ? $results->create_update_hr : '';
					if(!empty($results)){
						return $results;
					}return false;
				}return false;
			}
		}catch(Exception	$ex){
			log_message('error','Unable to create/update HR record '.$ex->getMessage());
		}
	}
	

	/**
	 * This function used for create / update Test Report
	 * @Function	checkunique()
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

	function makeFormatOfHRForDownload($summaryData=array()){
		if(!empty($summaryData)){
			/*dump($summaryData);die;*/
			$newArray	= '';$i=0;
			foreach($summaryData as $val){
				/*name compute*/
				$fname= !empty($val->first_name) ? $val->first_name : 'N/A';
				$lname= !empty($val->last_name) ? $val->last_name : 'N/A';
				$name = $fname." ".$lname;
				$sex			= !empty($val->sex) ? $val->sex : '';
				$a_date 				= !empty($val->a_date) ? $val->a_date : '';
				$i_date		= !empty($val->i_date) ? $val->i_date : '';
				$hired_status			= !empty($val->hired_status) ? $val->hired_status : 'N/A';
				/*manufacturing experience compute*/
				$manufac_exp = !(empty($val->manufac_exp));
				$y_exp = (int) $manufac_exp;
				$m_exp = round(($manufac_exp - $y_exp)*12,1);
				$exp_y = !empty($y_exp)?$y_exp.' yr': '';
				$exp_m = !empty($m_exp)?$m_exp.' m.': '';
				$exp = $exp_y." ".$exp_m;
				$depart	= !empty($val->department) ? $val->department : '0';
				$supervisor	= !empty($val->supervisor) ? $val->supervisor : '0';
				$referred_by				= !empty($val->referred_by) ? $val->referred_by : 'N/A';
				$home_no			= !empty($val->home_no) ? $val->home_no : 'N/A';
				/* Making Return array */
				$newArray[$i]['Name']	= $name;
				$newArray[$i]['Sex']	= $sex;
				$newArray[$i]['A-Date']		= $a_date;
				$newArray[$i]['I-Date']		= $i_date;
				$newArray[$i]['Hired Status']			= $hired_status;
				$newArray[$i]['Manufacturing Experience']		= $exp;
				$newArray[$i]['Department']	= $depart;
				$newArray[$i]['Supervisor']		= $supervisor;
				$newArray[$i]['Referred by']	= $referred_by;
				$newArray[$i]['Home Telephone']	= $home_no;
				$i++;
			}
			return $newArray;
		}
	}

}

?>
