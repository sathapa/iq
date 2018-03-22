<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Quoteweb  Send Controller
 *
 * @package		Quoteweb 
 * @subpackage	Controller
 * @category	Controller
 * @author		Team TIS (TIS india Pvt. ltd.)
 * @created by Sandeep singh
 * 
 * */

class Send extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('frontend/Login_model');
		$this->load->model('frontend/Main_model');
		$this->load->library('form_validation');
		$loggedIn		= $this->session->userdata('frontendUserId');
		if(empty($loggedIn)){
			redirect('');
		}
		//$this->email2	= $this->session->userdata('frontendUserEmail');
		$this->user_id	= $this->session->userdata('frontendUserEmail');
		$this->user_name	= $this->session->userdata('frontendUserName');
		$this->user_group	= $this->session->userdata('frontendUserGroup');
		$groupDetails		= getUserGroupDetils($this->user_group);
		$this->group_permissions		= !empty($groupDetails->permission) ? explode(',',$groupDetails->permission) : '';
		$this->Management	= 'Home';
		$this->NotAuthorizedMsg	= 'You are not authorized to access this feature !.';
	}
	
	
	/**
	 * This function used for display the send proposal form with proposal attachment.
	 * 
	 * @Function	index()
	 * @Param		quoteId
	 * @Created		29-09-2107
	 * 
	 * */
	public function index($quote=null){
		if(!empty($this->group_permissions) && in_array(1,$this->group_permissions)){
			$quoteInfo	= !empty($quote) ? base64_decode($quote) : '';
			$quoteInfo	= !empty($quoteInfo) ? explode('##',$quoteInfo) : '';
			$quoteId	= !empty($quoteInfo[0]) ? $quoteInfo[0] : '';
			$proposal	= !empty($quoteInfo[1]) ? $quoteInfo[1] : '';
			$contactEmail		= !empty($quoteInfo[2]) ? $quoteInfo[2] : '';
			$salespersonEmail	= !empty($quoteInfo[3]) ? $quoteInfo[3] : '';
			$salesAssistantContact	= !empty($quoteInfo[4]) ? $quoteInfo[4] : '';
			if(empty($quote) || empty($quoteId) || empty($proposal)){
				redirect('managequote');
			}
			$data['js']		= array('jquery-min','jquery-ui','jquery.mCustomScrollbar','jquery.selectBoxIt','parsley.min','bootstrap','multiselect'); 
			$data['css']	= array('common','index','jquery-ui','jquery.mCustomScrollbar','font-awesome.min','bootstrap','mutiselectcheck');
			$data['title']	= 'Send';
			$data['quoteId']	= $quoteId;
			$data['proposal']	= $proposal;
			$data['mailDetail']	= array('contactEmail'=>$contactEmail,'salespersonEmail'=>$salespersonEmail,'salesAssistantContact'=>$salesAssistantContact);
			$this->load->view('frontend/send_mail', $data);
		}else{
			$message='<div class="alert alert-block alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>'.$this->NotAuthorizedMsg.'</p></div>';
			$this->session->set_flashdata('message',$message);
			redirect('dashboard');
		}
	}
	
	/**
	 * This function used for send proposal to custom email id with custom message.
	 * 
	 * @Function	sendproposal()
	 * @Param		void(0)
	 * @Created		04-10-2017
	 *
	 * */
	  
	public function sendproposal(){
		$postData	= $this->input->post();
		if(!empty($postData)){
			$quote_id	= !empty($postData['quote_id']) ? $postData['quote_id'] : '';
			$proposal	= !empty($postData['proposal']) ? $postData['proposal'] : '';
			$send_to	= !empty($postData['send_to']) ? $postData['send_to'] : '';
			$send_cc	= !empty($postData['send_cc']) ? $postData['send_cc'] : '';
			$subject	= !empty($postData['subject']) ? $postData['subject'] : '';
			$comments	= !empty($postData['comments']) ? $postData['comments'] : '';
			if(empty($quote_id)){
				return 0;
			}
			$data['quote_id']	= $quote_id;
			$data['invoice_data']	=$this->Main_model->getProductLists($quote_id);
			$quote_header	= $this->Main_model->getQuotelist($quote_id,'all','all','all','all');
			$data['quote_list']	= $quote_header[0];
			//dump($data['quote_list']);die;
			$proposalNum		= !empty($quote_header[0]->proposal_num) ? $quote_header[0]->proposal_num : '';
			$data['proposalId']	= $proposalNum;
			if(empty($data['invoice_data'])){
				return 0;
			}ini_set("memory_limit", -1);
					@header("cache-Control: no-store, no-cache, must-revalidate");
				   @header("cache-Control: post-check=0, pre-check=0", false);
				   @header("Pragma: no-cache");
				   @header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
			$this->load->library('Pdf');
			//$this->pdf->showImageErrors = true;
			//$this->load->view('frontend/download',$data); 
			$this->pdf->load_view('frontend/download',$data); 
			$htm='<table width="100%" cellspacing="0" cellpadding="0" border="0" style="padding:0px 20px;" class="footer" >
					<tr>
						<td width="75%" valign="top" colspan="3">
							<p><strong>FOB: Colchester, CT</strong></p>
						</td>
					   <td colspan="3"></td>
						<td width="25%" valign="top" align="right" colspan="2"><p><strong>Commercial Address</strong></p></td> 
					</tr>
					<tr>
						<td width="70%" align="left" valign="top" colspan="5">
							InCord must be advised if any of the following delivery options apply to shipments:
							lift gate, residential, guaranteed, job site or notification/appointment.
							Additional Charges will apply.
						</td>
						<td colspan="1"></td>
						<td width="30%" align="right" valign="top" colspan="2">
						Sale may be subject to Sales Tax without a sales tax exemption form on file. We accept Visa, Master Card and AMEX
						</td>
					</tr>
					
					 <tr>
						<td width="30%" align="left" valign="top" colspan="4" style="padding-top:15px;">Page {PAGENO} of {nbpg}</td>
						<td width="40%" align="center" valign="top" colspan="3" style="padding-top:15px;">Custom Safety Netting Solutions </td>
						<td width="30%" align="right" valign="top" colspan="3" style="padding-top:15px;">incord.com</td>
					</tr>
				   
				</table>';
			
			$this->pdf->setAutoBottomMargin = 'stretch';
			$this->pdf->SetHTMLFooter($htm);
			
			$fileNameQuoteProposal	= !empty($proposalNum) ? $proposalNum : $quote_id;
			$invoice_name = FCPATH.'download_pdf/'.str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
			$fName	= str_replace(" ","_",$this->user_name).'-'.$fileNameQuoteProposal.'.pdf';
			$this->pdf->Output($invoice_name, 'F');
			//file_put_contents()
			/** Sending Mail to Email Id with attachment **/
			$this->load->helper('mail_helper');
			/*$proposalsent	= sendProposal(array('send_to'=>$send_to,'comments'=>$comments,'fileName'=>$fName,'file_type'=>'proposal'));*/
			$proposalsent	= sendProposal(array('send_to'=>$send_to, 'send_cc'=>$send_cc, 'subject'=>$subject, 'comments'=>$comments,'fileName'=>$fName,'file_type'=>'proposal'));
			if(!empty($proposalsent)){
				$message='<div class="alert alert-block alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><p>Proposal has been sent.</p></div>';
				$this->session->set_flashdata('message',$message);
				$proposalSentUrl	= base64_encode($quote_id.'##'.$proposal);
				redirect('sendproposal/'.$proposalSentUrl);
			}
		}else{
			redirect('managequote');
		}
	}
	
	
	/*================= Controller end ======================== */
	
}
