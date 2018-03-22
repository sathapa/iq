<?php
Class Survey_model extends MY_Model {
	
		public function __construct(){
			parent::__construct();
		}

		function CreateSurvey($updateData=array(),$type=0,$suyId=0){
			try{
				if(!empty($updateData)){
					

					$customer = $updateData["customer"];
					$user_id  = $updateData["user_id"];
					$updateData1 = array();
					$updateData2 = array();
					$rand = mt_rand(100000, 999999);
					$survey_id = "Survey_".$rand;
					$item_id = "item_".$rand;
					$updateData["item_id"] = $item_id;
					$no_ropes = $updateData["no_ropes"];
					$no_posts = $updateData["no_posts"];
					$survey_date = $updateData['survey_date']; 
					$summary = $updateData['summary']; 
					$recommend = $updateData['recommend']; 
					
					unset($updateData['customer']);
					unset($updateData['user_id']);
					unset($updateData['survey_date']);unset($updateData['summary']);unset($updateData['recommend']); 

					/*if item added for alredy created survey*/
					if(!empty($type)){
						
						$updateData["survey_id"] = $suyId;
						$insert = createUpdateSurveyItem($updateData);
						$para = array($suyId,$item_id);
						if(!empty($insert)){
							return $para;
						}return false;
					}
					/*if survey created with item for the first time*/
					else{
						
						$updateData["survey_id"] = $survey_id;
						$updateData1["user_id"] = $user_id;
						$updateData1["customer"]= $customer;
						$updateData1["survey_id"] = $survey_id;
						$updateData1["survey_date"] = $survey_date; $updateData1["summary"] = $summary; $updateData1["recommend"] = $recommend;
						
						$insert = createSurvey($updateData1); 

						$insert1 = createUpdateSurveyItem($updateData);
						$para = array($survey_id,$item_id);

						if(!empty($insert) && !empty($insert1)){
							return $para;
						}return false;
					}
					
					
				}return false;
			}catch(Exception	$ex){
				log_message('error','Unable to add user details basis on user id '.$ex->getMessage());
			}
		}

		function gettheSurvey($survey_id){
			 try{
					$sql="select * from qw.get_the_Survey('".$survey_id."')";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					
					if($result){
						return json_decode($result[0]->get_the_survey);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}

		function getAllSurvey(){
			 try{

					$sql="select * from qw.get_All_Survey1()";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					
					if($result){
						return json_decode($result[0]->get_all_survey1);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}

		function getSurveyItemLists($survId){
			try{
					$sql="select * from qw.get_all_surveyitems('".$survId."')";
					$result	= $this->db->query($sql);
					$result	= $result->result();
					if($result){
						return json_decode($result[0]->get_all_surveyitems);
					}else{
						return false;
					}
			}catch(Exception $ex){
				log_message('error','Unable to get quote list of user  '.$ex->getMessage());
			}
		}

		function getSurvey($itemId=0){
			try{
				$survey	= $this->db;
				$survey	= $survey->select('i.* ')
								->order_by('i.created_at','desc')
								->where('i.item_id',$itemId)
								->get('qw.qw_survey_item as i')->result();
				if(!empty($survey)){
					return $survey;
				}return false;
			}catch(Exception	$ex){
				log_message('error','Unable to get all user list '.$ex->getMessage());
			}
		}

		function getCusName($cusId=0){
			try{
				$customer	= $this->db;
				$customer	= $customer->select('c.companyname,c.sagecustomernumber,c.address1_city,c.address1_stateprovince,c.accountnumber')
								->where('c.accountnumber',$cusId)
								->get('qw.crm_customer as c')->result();
				if(!empty($customer)){
					return $customer;
				}return false;
			}catch(Exception	$ex){
				log_message('error','Unable to get all user list '.$ex->getMessage());
			}
		}

		function getUserName($loginUser=null){
			try{
				$user	= $this->db;
				$user	= $user->select('u.first_name, u.last_name')
								->where('u.username', $loginUser)
								->get('qw.qw_users as u')->result();
				if(!empty($user)){
					return $user;
				}return false;
			}catch(Exception	$ex){
				log_message('error','Unable to get all user list '.$ex->getMessage());
			}
		}

		function updateISurvey($updateData=array()){
			$st = 1;
			try{
				$item_id 	= $updateData["item_id"];
				$item_id	= !empty($updateData['item_id']) ? $updateData['item_id'] : '';

				if(!empty($updateData) && !empty($item_id)){
					$update = createUpdateSurveyItem($updateData, $st); 
					if(!empty($update)){
						return true;
					}return false;
				}return false;
			}catch(Exception	$ex){
				log_message('error','Unable to update user details basis on user id '.$ex->getMessage());
			}
		}

}
