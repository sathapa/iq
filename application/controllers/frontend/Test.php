<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quote Web  Login Controller
 *
 * @package		Quote Web 
 * @subpackage	Controller
 * @category	Controller
 * @author		(Team TIS)
 * @Created on	07-03-2017
 * */
class Test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		$this->email	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
		$this->Management = 'Home';
	}
    
    /**
     * This function used for login.
     * 
     * Using this function we are login based on email id and password.
     * 
     * @Function	index()
     * @Created		07-03-2017
     * @Param		void(0)
     * 
     * */
    
    function index(){
		try{
			//$this->load->helper('mail_helper');
			$pp	= sendMailToSalesPerson();
			dump($pp);
			die;
		}catch(Exception $ex){
			log_message('error','Unable to listing Users'.$ex->getMessage());
		}
	}
	
	
	function editExport($quote=null){
		$quoteDetails	= explode('#',base64_decode($quote));
		//dump($quoteDetails);die;
		$quoteId	= !empty($quoteDetails[0]) ? $quoteDetails[0] : '';
		$proposalId	= !empty($quoteDetails[1]) ? $quoteDetails[1] : '';
		$lineNo		= !empty($quoteDetails[2]) ? (1+$quoteDetails[2]) : 'all';
		$type		= !empty($quoteDetails[3]) ? $quoteDetails[3] : '';
		$quantity	= !empty($quoteDetails[4]) ? $quoteDetails[4] : '1';
		
		$quote_data	= $this->Main_model->getQuoteDetails($quoteId, $lineNo);
		$quote_data	= json_decode($quote_data[0]->get_quote_detail_items);
		//dump($quote_data);die;
		if(!empty($quote_data)){
			$quote_data2	= addQuantityNTotalQuantity($quote_data,$quantity);
			
			$this->load->helper('file');
			$this->load->helper('download');
			$delimiter	= ",";
			$newline	= "\r\n";
			$filename	= $proposalId.".csv";
			$headings	= array('Type',$type,'','','','','','','');
			$headings2	= array('Quantity',$quantity,'','','','','','','');
			$headings3	= array('','','Product','Item Code','Quantity Per Net','Total Quantity','UOM','Activity Code','Step');
			$dataforcsv	= array($headings);
			array_push($dataforcsv,$headings2);
			array_push($dataforcsv,$headings3);
			$projectRec	= $quote_data2;
			
			foreach($projectRec as $res){
				array_push($dataforcsv,$res);
			}
			$finaldata	= $this->__generateCsv($dataforcsv,',', '"',$filename);
			//force_download($filename, $finaldata);
		}else{
			redirect('managequote');
		}
	}
	
	/**
	 * 
	 * @Description	-: used to write the arrays  into file format for converting csv
	 * @Param  $resultObj database results objects
	 * @Return 		-: comaseprated content  for csv
	 */

 	private function __generateCsv($data, $delimiter = ',', $enclosure = '"',$fileName=null) {
 		$contents='';
 		$handle = fopen('php://temp', 'r+');
 		foreach ($data as $line) {
 			fputcsv($handle, $line, $delimiter, $enclosure);
 		}
 		rewind($handle);
 		while (!feof($handle)) {
 			$contents .= fread($handle, 8192);
 		}
 		fclose($handle);
		/* Try to save the file on server location */
			$pp	= file_put_contents(FCPATH."download_bom/" . $fileName, $contents);
		/* Try to save the file on server location */
 		return $contents;
 	}
	
}
