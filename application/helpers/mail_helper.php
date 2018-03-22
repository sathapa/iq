<?php
/**
 * Quote Web  mail Helper
 *
 * @package		Quote Web 
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Prem
 * @Created		28-02-2017
 * */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	/**
	* This function use for send a  mail to staff for password reset link.
	* 
	* This function use for send a  mail to staff for password reset link.
	* 
	*  @param : templateAlias
	* @param : ip_address
	* @param   :username
	* @param   :email_id
	*  @param   :link	
	* @created_on: 08-11-2016 
	* @return boolen
	* 
	*/
	function sendAdminResetPasswordMail($mailData=array()){
		
			$CI =& get_instance();
			$email_id	= !empty($mailData['email']) ? $mailData['email'] : '';
			//$email_id	= 'prem@tisindiasupport.com';
			$link		= !empty($mailData['link']) ? $mailData['link'] : '';
			$subject	= 'Quote Web : Reset Your Password ';
			$html		= "Click on this link and reset password <br><a href='".$link."'> ".$link."</a>";
			$config = Array(
				'protocol'	=> $CI->config->item('protocol'),
				'smtp_host'	=> $CI->config->item('smtp_host'),
				'smtp_port'	=> $CI->config->item('smtp_port'),
				'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
				'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
				'mailtype'	=> $CI->config->item('mailtype'),
				'charset'	=> $CI->config->item('charset'),
				'wordwrap'	=> TRUE
			);
			//dump($mailData);die;
			if(!empty($email_id)){
				$CI->load->library('email');
				$CI->email->initialize($config); 
				$CI->email->set_newline("\r\n");
				//$CI->email->from('tisuser@gmail.com');
				$CI->email->from('appsupport@incord.com');
				//$list = array( $email_id );
				$list = array( $email_id);
				$CI->email->to($email_id);
				$CI->email->subject($subject);
				$CI->email->message($html);
				$CI->email->set_alt_message('');
				
				if($CI->email->send()){
					return "success";
				}else{
					 return $CI->email->print_debugger();
				}
				return true;
			}else{
				return false;
			}
	}
	
	/**
	 * This used for send a mail to salesperson to informed that a quote created.
	 * 
	 * @Function	sendMailToSalesPerson()
	 * @Param		mailData(array())
	 * @Created		10-07-2017
	 * @Return		boolean
	 * 
	 * */
	function sendMailToSalesPerson($mailData=array()){
			$CI =& get_instance();
			
			//$email_id	= "prem102@yopmail.com";
			//$email_id	= "sbandyo@incord.com";
			$fileType	= !empty($mailData['file_type']) ? $mailData['file_type'] : '';
			$email_id	= "incordplay_qweb@documents.zohoprojects.com";
			//$email_id	= "prem@tisindiasupport.com";
			$proposal	= !empty($mailData['fileName']) ? $mailData['fileName'] : '';
			$subject	= 'Proposal ID : '.$proposal;
			$html		= "Hello Salesperson, A new quote generated.. Please Review";
			$config = Array(
				'protocol'	=> $CI->config->item('protocol'),
				'smtp_host'	=> $CI->config->item('smtp_host'),
				'smtp_port'	=> $CI->config->item('smtp_port'),
				'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
				'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
				'mailtype'	=> $CI->config->item('mailtype'),
				'charset'	=> $CI->config->item('charset'),
				'wordwrap'	=> TRUE
			);
			
			if(!empty($email_id)){
				$CI->load->library('email');
				$CI->email->initialize($config); 
				$CI->email->set_newline("\r\n");
				//$CI->email->from('tisuser@gmail.com');
				$CI->email->from('appsupport@incord.com');
				//$list = array( $email_id );
				$list = array( $email_id);
				$CI->email->to($email_id);
				$CI->email->subject($subject);
				$CI->email->message($html);
				$CI->email->set_alt_message('');
				/* Attaching docs in mail*/
				if(!empty($fileType)){
					$path = FCPATH.'download_pdf/'.$proposal;
				}else{
					$path = FCPATH.'download_bom/'.$proposal;
				}
				$CI->email->attach($path);  /* Enables you to send an attachment */
				/* Attaching docs in mail */
				if($CI->email->send()){
					return 'success';
				}else{
					 return $CI->email->print_debugger();
				}
				return true;
			}else{
				return false;
			}
	}
	
	function sendMailForProposal($mailData=array()){
			$CI =& get_instance();
			
			//$email_id	= "prem102@yopmail.com";
			//$email_id	= "sbandyo@incord.com";
			$fileType	= !empty($mailData['file_type']) ? $mailData['file_type'] : '';
			//$email_id	= "incordplay_qwproposal@zohoprojects.com";
			//$email_id	= "incordplay_qweb@documents.zohoprojects.com";
			$email_id	= "incordplay_qwproposal@documents.zohoprojects.com";
			//$email_id	= "manmeet@tisindia.com";
			//$email_id	= "prem102@yopmail.com";
			$proposal	= !empty($mailData['fileName']) ? $mailData['fileName'] : '';
			$subject	= 'Proposal ID : '.$proposal;
			$html		= "Hello Salesperson, A new quote generated.. Please Review";
			$config = Array(
				'protocol'	=> $CI->config->item('protocol'),
				'smtp_host'	=> $CI->config->item('smtp_host'),
				'smtp_port'	=> $CI->config->item('smtp_port'),
				'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
				'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
				'mailtype'	=> $CI->config->item('mailtype'),
				'charset'	=> $CI->config->item('charset'),
				'wordwrap'	=> TRUE
			);
			
			if(!empty($email_id)){
				$CI->load->library('email');
				$CI->email->initialize($config); 
				$CI->email->set_newline("\r\n");
				//$CI->email->from('tisuser@gmail.com');
				$CI->email->from('appsupport@incord.com');
				//$list = array( $email_id );
				$list = array( $email_id);
				$CI->email->to($email_id);
				$CI->email->subject($subject);
				$CI->email->message($html);
				$CI->email->set_alt_message('');
				/* Attaching docs in mail*/
				$path = FCPATH.'download_pdf/'.$proposal;
				
				$CI->email->attach($path);  /* Enables you to send an attachment */
				/* Attaching docs in mail */
				if($CI->email->send()){
					return 'success';
				}else{
					 return $CI->email->print_debugger();
				}
				return true;
			}else{
				return false;
			}
	}
	
	/**
	 * This function used for send proposal to a custom mail id with custom mail.
	 * 
	 * @Function	sendProposal()
	 * @Param		mailData(array())
	 * @Created		04-10-2017
	 * 
	 * */
	 
	function sendProposal($mailData=array()){
		$CI =& get_instance();
		$fileType	= !empty($mailData['file_type']) ? $mailData['file_type'] : '';
		$email_to	= !empty($mailData['send_to']) ? $mailData['send_to'] : 'incordplay_qwproposal@documents.zohoprojects.com';
		$email_cc   = !empty($mailData['send_cc']) ? $mailData['send_cc'] : 'incordplay_qwproposal@documents.zohoprojects.com';
		$proposal	= !empty($mailData['fileName']) ? $mailData['fileName'] : '';
		$subject	= !empty($mailData['subject']) ? $mailData['subject'] : 'Proposal ID : '.$proposal;
		$html		= !empty($mailData['comments']) ? $mailData['comments'] : '';
		$config = Array(
			'protocol'	=> $CI->config->item('protocol'),
			'smtp_host'	=> $CI->config->item('smtp_host'),
			'smtp_port'	=> $CI->config->item('smtp_port'),
			'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
			'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
			'mailtype'	=> $CI->config->item('mailtype'),
			'charset'	=> $CI->config->item('charset'),
			'newline'  =>"\r\n",
    		'crlf' =>"\r\n",
			'wordwrap'	=> TRUE
		);
		
		if(!empty($email_to)){
			$CI->load->library('email',$config);
			
			$CI->email->from('appsupport@incord.com');
			$array_to = explode(',',$email_to);
			$array_to = implode(',',$array_to);
			$array_cc = explode(',',$email_cc);
			$array_cc = implode(',',$array_cc);
			
			$CI->email->to($array_to);
			$CI->email->cc($array_cc);
			$CI->email->subject($subject);
			$CI->email->message($html);
			$CI->email->set_newline("\r\n");
			$CI->email->set_alt_message('');
			/* Attaching docs in mail*/
			$path = FCPATH.'download_pdf/'.$proposal;

			if(file_exists($path)){
				$CI->email->attach($path);  /* Enables you to send an attachment */
				/* Attaching docs in mail */
				if($CI->email->send()){
					return 'success'; 
				}else{
					$degug = $CI->email->print_debugger(); var_dump($degug);
					return false; 
				}
				
				return true; 
			}else{
				
				return false; 
			}
		}else{
			
			return false; 
		}
	}
/**
	 * This function used for send tracking no to a custom mail id with custom message.
	 * 
	 * @Function	sendTracking()
	 * @Param		mailData(array())
	 * @Created		15-12-2017
	 * 
	 * */
	 
	function sendTracking($mailData=array()){
		$CI =& get_instance();
		//$email_id		= !empty($mailData['send_to']) ? $mailData['send_to'] : 'incordplay_qwproposal@documents.zohoprojects.com';
		$email_id		= !empty($mailData['send_to']) ? $mailData['send_to'] : 'suraj@tisindiasupport.com';
		$email_id_cc	= !empty($mailData['send_to_cc']) ? $mailData['send_to_cc'] : '';
		$subject		= 'Tracking No';
		$html			= !empty($mailData['comments']) ? $mailData['comments'] : '';
		$config = Array(
			'protocol'	=> $CI->config->item('protocol'),
			'smtp_host'	=> $CI->config->item('smtp_host'),
			'smtp_port'	=> $CI->config->item('smtp_port'),
			'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
			'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
			'mailtype'	=> $CI->config->item('mailtype'),
			'charset'	=> $CI->config->item('charset'),
			'wordwrap'	=> TRUE
		);
		
		if(!empty($email_id)){
			$CI->load->library('email');
			$CI->email->initialize($config); 
			$CI->email->set_newline("\r\n");
			$CI->email->from('appsupport@incord.com');
			//$list = array( $email_id );
			$list = array( $email_id);
			$CI->email->to($email_id);
			$CI->email->subject($subject);
			$CI->email->message($html);
			$CI->email->set_alt_message('');
			if($CI->email->send()){
				/* sending CC mail */
				if(!empty($email_id_cc)){
					$CI->load->library('email');
					$CI->email->initialize($config); 
					$CI->email->set_newline("\r\n");
					$CI->email->from('appsupport@incord.com');
					//$list = array( $email_id );
					$list = array( $email_id_cc);
					$CI->email->to($email_id_cc);
					$CI->email->subject($subject);
					$CI->email->message($html);
					$CI->email->set_alt_message('');
					if($CI->email->send()){
						return "success";
					}else{
						return $CI->email->print_debugger();
					}
				}
				/** Sending the End CC */
				return "success";
			}else{
				return $CI->email->print_debugger();
			}
			
			
		}else{
			return false;
		}
	}


	/**
	 * This function used for sending mail about job opportunities to applicants.
	 * 
	 * @Function	sendTracking()
	 * @Param		mailData(array())
	 * @Created		15-12-2017
	 * 
	 * */
	function sendJobOpp($mailData=array()){
		$CI =& get_instance();
		$email_to	= !empty($mailData['send_to']) ? $mailData['send_to'] : 'incordplay_qwproposal@documents.zohoprojects.com';
		$email_cc   = !empty($mailData['send_cc']) ? $mailData['send_cc'] : 'incordplay_qwproposal@documents.zohoprojects.com';
		$subject	= !empty($mailData['subject']) ? $mailData['subject'] : 'Job vacancy at Incord ';
		$html		= !empty($mailData['comments']) ? $mailData['comments'] : '';
		$config = Array(
			'protocol'	=> $CI->config->item('protocol'),
			'smtp_host'	=> $CI->config->item('smtp_host'),
			'smtp_port'	=> $CI->config->item('smtp_port'),
			'smtp_user'	=> $CI->config->item('smtp_user'), // change it to yours
			'smtp_pass'	=> $CI->config->item('smtp_pass'), // change it to yours
			'mailtype'	=> $CI->config->item('mailtype'),
			'charset'	=> $CI->config->item('charset'),
			'newline'  =>"\r\n",
    		'crlf' =>"\r\n",
			'wordwrap'	=> TRUE
		);
		
		if(!empty($email_to)){
			$CI->load->library('email',$config);
			
			$CI->email->from('appsupport@incord.com');
			$array_to = explode(',',$email_to);
			$array_to = implode(',',$array_to);
			$array_cc = explode(',',$email_cc);
			$array_cc = implode(',',$array_cc);
			
			$CI->email->to($array_to);
			$CI->email->cc($array_cc);
			$CI->email->subject($subject);
			$CI->email->message($html);
			$CI->email->set_newline("\r\n");
			$CI->email->set_alt_message('');
			
				if($CI->email->send()){
					return 'success'; 
				}else{
					$degug = $CI->email->print_debugger(); var_dump($degug);
					return false; 
				}

		}else{
			
			return false; 
		}
	}
?>
