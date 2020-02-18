<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
include("sageone/sageone_constants.php");
include("sageone/SageoneClient.php");
include("sageone/SageoneSigner.php");
class Cron_email extends CI_Controller {

	public function __construct() {
      parent::__construct();	
	  $this->load->model('Cronemail_m');

	  $this->load->library('form_validation');
	  $this->load->library('cronemailtemplate');
	}

	function registrationEmail(){
		$data=$this->cronemail_m->checkAllSMBUser();		
		if(isset($data) && !empty($data)){
			foreach ($data as $key => $value) {
			 	$OrderDate = date('Y-m-d', $value->registration_date);			 	
				$Today=date('Y-m-d');
				$fullname=$value->firstname.' '.$value->lastname;
				$email=$value->email;

				$thirdDate=Date('Y-m-d', strtotime($OrderDate. ' + 3 days')) ;
				$sevenDate=Date('Y-m-d', strtotime($OrderDate. "+7 days")) ;
				$fourteenDate=Date('Y-m-d', strtotime($OrderDate. "+14 days")) ;
				$twentyOneDate=Date('Y-m-d', strtotime($OrderDate. "+21 days"));

				$smbProgress=$this->cronemail_m->smb_progress($value->id);

				/*  start register User mail but not active account */
				if($value->status=='Small and medium business'){
				if((strtotime($OrderDate) < strtotime('-30 days')) && $value->status==0) {					
					if($thirdDate==$Today){
						$send=$this->regiMail($email,$fullname,$value->user_type,3);
						//echo 'it been 3rd day ,but still you did not subscribe email';
					}else if($sevenDate==$Today){
						$send=$this->regiMail($email,$fullname,$value->user_type,7);
						//echo 'it been 7th day ,but still you did not subscribe email';
					}else if($fourteenDate==$Today){
						$send=$this->regiMail($email,$fullname,$value->user_type,14);
						//echo 'Today is 14 day ,but still you did not subscribe email';
					}else if($twentyOneDate==$Today){
						$send=$this->regiMail($email,$fullname,$value->user_type,21);
						//echo 'it been 20 day ,but still you did not subscribe email';
					}
				}
				/*  End register User mail but not active account */
				/* Start register User mail active account but not completed Questionnaire */
				$smbProgress=$this->cronemail_m->smb_progress($value->id);

				if(isset($smbProgress->progress_id)){
					if((strtotime($OrderDate) < strtotime('-30 days')) && $value->status==1 && ( $smbProgress->tab_four==0 || $smbProgress->tab_four=='')) { 

					if($thirdDate==$Today){
						$send=$this->regiProgressNotCompleteMail($email,$fullname,$value->user_type,3);
						//echo 'it been 3rd day ,but still you did not subscribe email';
					}else if($sevenDate==$Today){
						$send=$this->regiProgressNotCompleteMail($email,$fullname,$value->user_type,7);
						//echo 'it been 7th day ,but still you did not subscribe email';
					}else if($fourteenDate==$Today){
						$send=$this->regiProgressNotCompleteMail($email,$fullname,$value->user_type,14);
						//echo 'Today is 14 day ,but still you did not subscribe email';
					}else if($twentyOneDate==$Today){
						$send=$this->regiProgressNotCompleteMail($email,$fullname,$value->user_type,21);
						//echo 'it been 20 day ,but still you did not subscribe email';
					}
				}
				/* End register User mail active account but not completed Questionnaire */
				/* Start register User mail active account but completed Questionnaire */

				if((strtotime($OrderDate) < strtotime('-30 days')) && $value->status==1 && ( $smbProgress->tab_four !=0 || $smbProgress->tab_four !='')) { 

					if($thirdDate==$Today){
						$send=$this->regiProgressCompleteMail($email,$fullname,$value->user_type,3);
						//echo 'it been 3rd day ,but still you did not subscribe email';
					}else if($sevenDate==$Today){
						$send=$this->regiProgressCompleteMail($email,$fullname,$value->user_type,7);
						//echo 'it been 7th day ,but still you did not subscribe email';
					}else if($fourteenDate==$Today){
						$send=$this->regiProgressCompleteMail($email,$fullname,$value->user_type,14);
						//echo 'Today is 14 day ,but still you did not subscribe email';
					}else if($twentyOneDate==$Today){
						$send=$this->regiProgressCompleteMail($email,$fullname,$value->user_type,21);
						//echo 'it been 20 day ,but still you did not subscribe email';
					}
				}
				/* End register User mail active account but completed Questionnaire */

				/* Start register User mail active account but completed Questionnaire */
					$getDelegateUser=$this->cronemail_m->getDelegateUser($value->id);

					if(strtotime($OrderDate) < strtotime('-30 days') && isset($getDelegateUser->delicate_id) && $value->status==1) { 
						if($getDelegateUser->status=='inactive'){
							
							if($thirdDate==$Today){
								$send=$this->regiDelNotActive($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,3);
								//echo 'it been 3rd day ,but still you did not subscribe email';
							}else if($sevenDate==$Today){
								$send=$this->regiDelNotActive($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,7);
								//echo 'it been 7th day ,but still you did not subscribe email';
							}else if($fourteenDate==$Today){
								$send=$this->regiDelNotActive($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,14);
								//echo 'Today is 14 day ,but still you did not subscribe email';
							}else if($twentyOneDate==$Today){
								$send=$this->regiDelNotActive($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,21);
								//echo 'it been 20 day ,but still you did not subscribe email';
							}
						}
					}
					
				/* End register User mail active account but completed Questionnaire */

				if(strtotime($OrderDate) < strtotime('-30 days') && isset($getDelegateUser->delicate_id) && $value->status==1) { 
						if($getDelegateUser->status=='active' && ($smbProgress->tab_four !=0 || $smbProgress->tab_four !='')){
							
							if($thirdDate==$Today){
								$send=$this->regiDelActiveQuesCompleted($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,3);
								//echo 'it been 3rd day ,but still you did not subscribe email';
							}else if($sevenDate==$Today){
								$send=$this->regiDelActiveQuesCompleted($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,7);
								//echo 'it been 7th day ,but still you did not subscribe email';
							}else if($fourteenDate==$Today){
								$send=$this->regiDelActiveQuesCompleted($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,14);
								//echo 'Today is 14 day ,but still you did not subscribe email';
							}else if($twentyOneDate==$Today){
								$send=$this->regiDelActiveQuesCompleted($getDelegateUser->delicate_email,$fullname,$getDelegateUser->delicate_key,$value->company_name,$value->user_type,21);
								//echo 'it been 20 day ,but still you did not subscribe email';
							}
						}
					}
				
			}


			}
		}
	}
}

/* 
register User mail but not active account */
function regiMail($email,$fullname,$user_type,$days){
		    $message = $this->cronemailtemplate->regismbnotactive($fullname);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 
			if($days==3 || $days==7){
				$this->email->subject('A reminder that you signed up to ProtectBox last week');
			}
			if($days==14 || $days==21){
				$this->email->subject('A reminder that you signed up to ProtectBox a few weeks ago');
			}
			$this->email->message($message);    

			$okay = $this->email->send();
			//get admin details starts
			$get_admins = $this->signup_m->get_admins();
				//get admin details ends
			$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);
				$admin_message = $this->emailtemplate->regismbnotactive($fullname);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 
				$this->email->subject('New User Reminder – CALL AS FOLLOW-UP to ACTIVATE SMB ACCOUNT');
				$this->email->message($admin_message);    

				$okay = $this->email->send();
}

/* Start register User mail account actived but not completed Questionnaire */
function regiProgressNotCompleteMail($email,$fullname,$user_type,$days){
	if($days==3 || $days==7){
		$msg='In an hour for free, fill out our simple online questionnaire. ‘Ask a friend’ or our friendly, no-jargon team on team@protectbox.com or +44 (0)207 993 3037) or on the chat on our website. Then 1-click to pay (including 3 months interest free). It really is easy, trust us!';
		    $message = $this->emailtemplate->regiQuesNotCompleteMail($fullname,$msg);
		}
		if($days==14 || $days==21){
			$msg='In an hour for free, fill out our simple online questionnaire. ‘Ask a friend’ or our friendly, no-jargon team on team@protectbox.com or +44 (0)207 993 3037) or on the chat on our website. Then 1-click to pay (including 3 months interest free or government grant discounts). Attached 1-pager shows you step-by-step just how easy it is, trust us & give it a go!';
			  $message = $this->emailtemplate->regiQuesNotCompleteMail($fullname,$msg);
		}
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 
			if($days==3 || $days==7){
				$this->email->subject('Can we help you with your Registration? – ProtectBox');
			}
			if($days==14 || $days==21){
				$this->email->subject('Can we help you with your Registration? – ProtectBox');
			}
			$this->email->message($message); 
			$this->email->set_mailtype("html");  
			$this->email->attach(base_url().'/pdf/ProtectBox - Security Comparison Website.pdf');  

			$okay = $this->email->send();
			//get admin details starts
			$get_admins = $this->signup_m->get_admins();
				//get admin details ends
			$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);				
				
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 
				$this->email->subject('Questionnaire Incomplete Reminder – CALL AS FOLLOW-UP TO COMPLETE SMB QUESTIONNAIRE');
				$this->email->message($message);    
				$this->email->set_mailtype("html"); 

		 		$this->email->attach(base_url().'/pdf/ProtectBox - Security Comparison Website.pdf');

				$okay = $this->email->send();
}

/* Start register User mail  account actived &  Questionnaire completed*/
function regiProgressCompleteMail($email,$fullname,$user_type,$days){
				
			$message = $this->emailtemplate->regiQuesNotCompleteMail($fullname,$msg);	
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 			
			$this->email->subject('');			
			$this->email->message($message); 
			$this->email->set_mailtype("html");
			$okay = $this->email->send();		
}


function regiDelNotActive($delicate_email,$fullname,$delicate_key,$company,$user_type,$days){	
		
		    $message = $this->emailtemplate->regiDelNotActiveMail($delegate_email,$fullname,$delegate_key,$company);		
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 
			
			
			$this->email->subject('Delegate Reminder – ProtectBox');
			
			$this->email->message($message); 

			$okay = $this->email->send();
			//get admin details starts
			$get_admins = $this->signup_m->get_admins();
				//get admin details ends
			$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);				
				
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 
				$this->email->subject('New Delegate Reminder – CALL AS FOLLOW-UP TO CONVERT TO SMB USER (To answer Del Quns)');
				$this->email->message($message); 

				$okay = $this->email->send();
}

function regiDelActiveQuesCompleted($delicate_email,$fullname,$delicate_key,$company,$user_type,$days){


		    $message = $this->emailtemplate->regiDelActiveCompletedMail($delegate_email,$fullname,$delegate_key,$company);		
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 
			
			
			$this->email->subject('Delegate Reminder – ProtectBox');
			
			$this->email->message($message); 

			$okay = $this->email->send();
			//get admin details starts
			$get_admins = $this->signup_m->get_admins();
				//get admin details ends
			$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);				
				
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 
				$this->email->subject('New Delegate Reminder – CALL AS FOLLOW-UP TO CONVERT TO SMB USER (To answer Del Quns)');
				$this->email->message($message); 

				$okay = $this->email->send();

}
}