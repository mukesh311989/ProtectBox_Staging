<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_details extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->library('Emailtemplate');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin" && $this->session->userdata['logged_in']['user_type'] != "accountant"){
            redirect('error_page');
        }
    }
	public function index()
	{
		$this->load->model('order_details_m');
		$order_id = $this->uri->segment(2);
		$data['fetch_order'] = $this->order_details_m->get_order_details($order_id);
		$this->load->view('order_details',$data);
	}

	public function update_status(){
		$this->load->model('order_details_m');
		$order_id = $this->input->post('order_id');
		$service_id = $this->input->post('service_id');
		$key = $this->input->post('key');
		$status = $this->input->post('status');
		

		$fetch_service_name = $this->order_details_m->fetch_service_name($service_id);
		$service_name = $fetch_service_name->service_name;
		
		$fetch_order = $this->order_details_m->get_order_details($order_id);

		$subject = "Order (No. ".$order_id.", ".$fetch_order->currency." ".number_format($fetch_order->total_price,2).") Status update-ProtectBox";
		$subject_admin = "Order (No. ".$order_id.", ".$fetch_order->currency." ".number_format($fetch_order->total_price,2).") Status Update";

		$old_status = explode(',',$fetch_order->order_status);
		$old_status[$key] = $status;
		$new_status = implode(',',$old_status);

		if($status =='confirmed-by-seller' ){
			$update_array = array('sup_order_status' => $status,'pay_status' => 'Confirm');
			
			$sup_pay_status = explode(',',$fetch_order->sup_payment_status);
			$sup_pay_status[$key] = 'Confirm';
			$new_sup_pay_status = implode(',',$sup_pay_status);

			$sup_order_status = explode(',',$fetch_order->order_status);
			$sup_order_status[$key] = 'confirmed-by-seller';
			$new_sup_order_status = implode(',',$sup_order_status);

			$update_order_array = array('order_status' => $new_status,'sup_payment_status' => $new_sup_pay_status);
		}else if($status =='seller_paid')
			{
		
			$update_array = array('sup_order_status' => $status,'pay_status' => 'Confirm');

			$sup_pay_status = explode(',',$fetch_order->sup_payment_status);
			$sup_pay_status[$key] = 'Confirm';
			$new_sup_pay_status = implode(',',$sup_pay_status);
			
			$sup_order_status = explode(',',$fetch_order->order_status);
			$sup_order_status[$key] = $status;
			$new_sup_order_status = implode(',',$sup_order_status);
			$update_order_array = array('order_status' =>$new_sup_order_status,'sup_payment_status' => $new_sup_pay_status);

		}else if($status =='order_delivered'){

			$update_array = array('sup_order_status' => $status,'pay_status' => 'Confirm');

			$sup_pay_status = explode(',',$fetch_order->sup_payment_status);
			$sup_pay_status[$key] = 'Confirm';
			$new_sup_pay_status = implode(',',$sup_pay_status);
			
			$sup_order_status = explode(',',$fetch_order->order_status);
			$sup_order_status[$key] = $status;
			$new_sup_order_status = implode(',',$sup_order_status);
			$update_order_array = array('order_status' =>$new_sup_order_status,'sup_payment_status' => $new_sup_pay_status);
		}
		else
		{
			$update_array = array('sup_order_status' => $status);
			$sup_order_status = explode(',',$fetch_order->order_status);
			$sup_order_status[$key] = $status;
			$new_sup_order_status = implode(',',$sup_order_status);
			$update_order_array = array('order_status' => $new_sup_order_status);

		}
		//print_r($update_order_array);
		//echo "<br />";
		//exit;
		
		//supplier transation starts
		$update_sup_trans = $this->order_details_m->update_sup_trans($update_array,$order_id,$service_id);
		//supplier transation ends
		
		//order starts
		$update_order = $this->order_details_m->update_order($order_id,$update_order_array);
		//order ends
		
		
		if($status != 'Intimate-seller'){
		//to smb starts
			$get_smb = $this->order_details_m->get_user($fetch_order->sme_id);
			$smb_fullname = ucfirst($get_smb->firstname).' '.ucfirst($get_smb->lastname);
			$smb_email = $get_smb->email;
			$smb_message = $this->emailtemplate->order_status_update_sme($smb_fullname,$status,$order_id,$service_name);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($smb_email); 

			$this->email->subject($subject);
			$this->email->message($smb_message);    

			$smb_okay = $this->email->send();
		//to smb ends
		}
		//to supplier starts
			$get_sup = $this->order_details_m->get_user($fetch_order->supplier_id);
			$sup_fullname = ucfirst($get_sup->firstname).' '.ucfirst($get_sup->lastname);
			$sup_email = $get_sup->email;
			$sup_message = $this->emailtemplate->order_status_update_supplier($sup_fullname,$status,$order_id,$service_name);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($sup_email); 

			$this->email->subject($subject);
			$this->email->message($sup_message);
			$sup_okay = $this->email->send();
		//to supplier ends
		
		/* Team@protectbox.com email starts */
				$admin_fullname = 'Admin';
				$admin_email = 'team@protectbox.com';
				$admin_message = $this->emailtemplate->order_status_update_admin($admin_fullname,$status,$order_id,$service_name);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($admin_email); 

				$this->email->subject($subject_admin);
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
		/* Team@protectbox.com email ends */

		//to admin starts
			$this->load->model('signup_m');
			$get_admins = $this->signup_m->get_admins();
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname).' '.ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;
				$admin_message = $this->emailtemplate->order_status_update_admin($admin_fullname,$status,$order_id,$service_name);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($admin_email); 

				$this->email->subject($subject_admin);
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
			}
			/*if($status =='seller_confirmed'){
				echo "Supplier paymnet complete";
			}*/

			if($status =='seller_paid' || $status =='order_delivered'){
				$fetch_trans_id = $this->order_details_m->fetch_transac_id($order_id,$service_id);
				$sl_id = $fetch_trans_id->id;
				$this->tw_profile($sup_fullname,$order_id,$sl_id);
			}
		//to admin ends

		}

		public function tw_profile($sup_fullname,$order_id,$sl_id){
			/*$sup_fullname = 'Tech Data'; //
			$order_id = '1';
			$sl_id = '2';*/

			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();
			$api_token = '258dc2b5-116e-4555-8572-55eb24899702';

			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/profiles');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			
			$decode_json = json_decode($result,TRUE);
			$this->tw_quotes($sup_fullname,$order_id,$sl_id,$decode_json[0]['id'],$api_token);

			curl_close($ch);
		}

		public function tw_quotes($sup_fullname,$order_id,$sl_id,$profile_id,$api_token){

			$this->load->model('order_details_m');
			$supplier_account_info = $this->order_details_m->supplier_details($order_id);
			$amount_paid = $supplier_account_info->seller_amount;
			

			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/quotes');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"profile\":$profile_id,\n          \"source\": \"GBP\",\n          \"target\": \"".$supplier_account_info->currency."\",\n          \"rateType\": \"FIXED\",\n          \"targetAmount\": $amount_paid,\n          \"type\": \"BALANCE_PAYOUT\"\n        }");
			curl_setopt($ch, CURLOPT_POST, 1);

			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			//print_r($result);
			$decode_json = json_decode($result,TRUE);
			$this->tw_account($sup_fullname,$sl_id,$supplier_account_info->currency,$supplier_account_info->sort_code_gbp,$supplier_account_info->account_number_gbp,$supplier_account_info->iban_eur,$supplier_account_info->routing_number_usd,$supplier_account_info->account_number_usd,$supplier_account_info->account_type_usd,$profile_id,$api_token,$decode_json['id']);
			curl_close($ch);
		}

		public function tw_account($sup_fullname,$sl_id,$currency,$sort_code_gbp,$account_number_gbp,$iban_eur,$routing_number_usd,$account_number_usd,$account_type_usd,$profile_id,$api_token,$quote_id){
			
			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/accounts');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// Dynamic account as per currency
			if($currency == 'GBP'){
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
							\"currency\": \"GBP\", \n
							\"type\": \"sort_code\", \n
							\"profile\": \"".$profile_id."\", \n
							\"accountHolderName\": \"".$sup_fullname."\",\n
							\"legalType\": \"PRIVATE\",\n
							\"details\": { \n
							\"sortCode\": \"".$sort_code_gbp."\", \n
							\"accountNumber\": \"".$account_number_gbp."\" \n
							} \n         }");

			}else if($currency == 'EUR'){
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
							\"currency\": \"EUR\", \n
							\"type\": \"sort_code\", \n
							\"profile\": \"".$profile_id."\", \n
							\"accountHolderName\": \"".$sup_fullname."\",\n
							\"legalType\": \"PRIVATE\",\n
							\"details\": { \n
							\"IBAN\": \"".$iban_eur."\" \n
							} \n         }");
			}else if($currency == 'USD'){
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
							\"currency\": \"USD\", \n
							\"type\": \"sort_code\", \n
							\"profile\": \"".$profile_id."\", \n
							\"accountHolderName\": \"".$sup_fullname."\",\n
							\"legalType\": \"PRIVATE\",\n
							\"details\": { \n
							\"routingNumber\": \"".$routing_number_usd."\", \n
							\"accountNumber\": \"".$account_number_usd."\", \n
							\"accountType\": \"".$account_type_usd."\" \n	
							} \n         }");
			}

			curl_setopt($ch, CURLOPT_POST, 1);

			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			
			curl_close($ch);
			$decode_json = json_decode($result,TRUE);
			//print_r($result);
			$recipient_account_id = $decode_json['id'];
			$this->tw_transfers($profile_id,$sl_id,$api_token,$recipient_account_id,$quote_id);
		}


		public function tw_transfers($profile_id,$sl_id,$api_token,$recipient_account_id,$quote_id){
			
			$this->load->model('order_details_m');
			$pay_date = date('Y-m-d');

			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();
			$uuid = $this->gen_uuid();			//Format: '71bc9946-b9c5-11e9-a2a3-2a2ae2dbcce4'
			
			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"targetAccount\": $recipient_account_id,   \n          \"quote\": $quote_id,\n          \"customerTransactionId\": \"".$uuid."\",\n          \"details\" : {\n              \"reference\" : \"to my friend\",\n              \"transferPurpose\": \"verification.transfers.purpose.pay.bills\",\n              \"sourceOfFunds\": \"verification.source.of.funds.other\"\n            } \n         }");
			curl_setopt($ch, CURLOPT_POST, 1);

			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			$decode_json = json_decode($result,TRUE);
			//print_r($decode_json);
			curl_close($ch);
			
			$update_tw_array = array('pay_date' => $pay_date,'transaction_id' =>$uuid,'pay_method'=>'TransferWise','pay_status_respose'=>$decode_json['status'],'requested_by'=>'1','last_modified'=>$decode_json['created']);
			$update_trans = $this->order_details_m->update_trans($update_tw_array,$sl_id);

			$this->tw_fund_transfer($sl_id,$api_token,$decode_json['id']);
		}

		public function tw_fund_transfer($sl_id,$api_token,$transfer_id){

			$this->load->model('order_details_m');

			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers/'.$transfer_id.'/payments');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"type\": \"BALANCE\"   \n         }");
			curl_setopt($ch, CURLOPT_POST, 1);

			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			$decode_json = json_decode($result);
			curl_close($ch);
			//print_r($decode_json);

			$update_tw_array = array('pay_status_respose'=>$decode_json->status);
			$update_trans = $this->order_details_m->update_trans($update_tw_array,$sl_id);

			$this->tw_transfer_status($api_token,$transfer_id);
		}

		public function tw_transfer_status($api_token,$transfer_id){
			// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers/'.$transfer_id);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


			$headers = array();
			$headers[] = 'Authorization: Bearer '.$api_token;
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);
			print_r($result);
		}


		/* GENERATES UUID FOR EACH TRANSACTION STARTS */
		public function gen_uuid() {

			return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
				// 32 bits for "time_low"
				mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

				// 16 bits for "time_mid"
				mt_rand( 0, 0xffff ),

				// 16 bits for "time_hi_and_version",
				// four most significant bits holds version number 4
				mt_rand( 0, 0x0fff ) | 0x4000,

				// 16 bits, 8 bits for "clk_seq_hi_res",
				// 8 bits for "clk_seq_low",
				// two most significant bits holds zero and one for variant DCE1.1
				mt_rand( 0, 0x3fff ) | 0x8000,

				// 48 bits for "node"
				mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
			);
		}
		/* GENERATES UUID FOR EACH TRANSACTION ENDS */
	}


/* End of file Order_details.php */
/* Location: ./application/controllers/Order_details.php */