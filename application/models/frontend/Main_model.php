<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  main model
 *
 * @package		Quoteweb 
 * @subpackage	model
 * @category	model
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @created by Sandeep singh
 * 
 */
	class Main_model extends MY_Model {
		function __construct() {
			parent::__construct();
		}
    	
	/**
	 * This function used for find the all quote list by the user name.
	 * 
	 * In this function get the list of all quote of select user by the username
	 *  
	 * @Function	 quotelist()
	 * @Created		 07-04-2017
	 * @Param		 username
	 * @Return		 array()
	 * */
	 
	function getQuotelist($quoteid='',$customerid='',$division='',$username='',$status='', $searchContact=''){
		 try{
			if(!empty($username)){
				//var_dump($quoteid); var_dump($customerid);var_dump($division); var_dump($username);var_dump($status); var_dump($searchContact); die;
				$sql	= "select * from qw.get_quote_header('$quoteid','$customerid','$division','".trim($username)."','$status','$searchContact')";
				$result	= $this->db->query($sql);
				$result	= $result->result();
				if($result){
					return json_decode($result[0]->get_quote_header);
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch(Exception $ex){
			log_message('error','Unable to get quote list of user  '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for find the all product .
	 * 
	 * In this function get the list of all product based on quote id.
	 *  
	 * @Function	 getProductLists()
	 * @Created		 12-04-2017
	 * @Param		 quoteId(string)
	 * @Return		 array()
	 * */
	 
	 function getProductLists($quoteId=null){
		 try{
			if(!empty($quoteId)){
				$sql	= "select * from qw.get_quote_details('".$quoteId."');";
				$result	= $this->db->query($sql);
				$result	= $result->row();
				if($result){
					return json_decode($result->get_quote_details);
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch(Exception $ex){
			log_message('error','Unable to get product list of quote  '.$ex->getMessage());
		}
	}
	
	/** UI
	 * This function used for find the all product .
	 * 
	 * In this function get the list of all product based on quote id.
	 *  
	 * @Function	 getProductLists()
	 * @Created		 12-04-2017
	 * @Param		 quoteId(string)
	 * @Return		 array()
	 * */
	 
	 function getProductLists_ui($quoteId=null){
		 try{
			if(!empty($quoteId)){
				$sql	= "select * from qw.get_quote_details_ui('".$quoteId."');";
				$result	= $this->db->query($sql);
				$result	= $result->row();
				if($result){
					return json_decode($result->get_quote_details_ui);
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch(Exception $ex){
			log_message('error','Unable to get product list of quote  '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get quote details.
	 * 
	 * In this function get the details of quote basis on quote id and product
	 *  
	 * @Function	 getQuoteDetails()
	 * @Created		 12-04-2017
	 * @Param		 quoteId(string),product(string)
	 * @Return		 array()
	 * */
	 
	 function getQuoteDetails($quoteId,$line_no){
		 try{
			if(!empty($quoteId)){
				$sql	= "select * from qw.get_quote_detail_items('".$quoteId."','".$line_no."');";
				$result	= $this->db->query($sql);
				$result	= $result->result();
				if($result){
					return $result;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch(Exception $ex){
			log_message('error','Unable to get product list of quote  '.$ex->getMessage());
		}
	}
	
	/**
	 * This function used for get quote details basis on quote id.
	 * 
	 * @Function	getQuoteDetailsNew()
	 * @Param		quoteId
	 * @Created		01-08-2017
	 * @Return		array()
	 * 
	 * */
	
	function getQuoteDetailsNew($quoteId=null,$lineNo=0){
		try{
			$login_user		= $this->session->userdata('frontendUserName');
			if(!empty($quoteId)){
				$sql	= "select * from qw.get_quote_bom_details('".$quoteId."',$lineNo,'$login_user');";
				$result	= $this->db->query($sql);
				$result	= $result->result();
				if($result){
					return $result;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch(Exception $ex){
			log_message('error','Unable to get quote details  '.$ex->getMessage());
		}
	}
}
