<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_refund_request extends CI_Controller {

	 function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "admin" && $this->session->userdata['logged_in']['user_type'] != "accountant"){
            redirect('error_page');
        }

		$this->load->library('Emailtemplate');	
    }
    public function index()
    {
		$this->load->model('pending_refund_request_m');
		//$user_id = $this->session->userdata['logged_in']['user_id'];
		$status = "seller_payment_pending";
		$records = array('refund_status'=> $status);
		//print_r($records);
		//exit;
		$data['pending_refund'] = $this->pending_refund_request_m->fetch_pending_request($records);
		
        

		//$this->load->view('sales',$data);
		$this->load->view('pending_refund_request',$data);
    }

    public function bank_info(){
    	$this->load->model('pending_refund_request_m');
    	$smb_id = $this->input->post('sbm_id');
    	$data['fetch_bank_details'] = $this->pending_refund_request_m->payment_info($smb_id);
    	$this->load->view('bank_information',$data);
    }

	public function supplier_service_details(){
    	$this->load->model('pending_refund_request_m');
    	$order_id = $this->input->post('order_id');
    	$data['fetch_supplier_service_payment_info'] = $this->pending_refund_request_m->supplier_service_payment_info($order_id);
    	$this->load->view('supplier_payment_service_details',$data);
    }

	public function update_pending_request()
	{
		$this->load->model('pending_refund_request_m');
		$refund_id =  $this->input->post('refund_id');
		$refund_status =  $this->input->post('refund_status');
		
		$order_id = $this->input->post('order_id');
		$trans_id = $this->input->post('trans_id');
		$service_id = $this->input->post('service_id');

		$update_refunds = $this->pending_refund_request_m->change_pending_status($refund_id,$refund_status,$trans_id);
		if($refund_status == 'seller_payment_pending' || $refund_status == 'seller_refund_request_sent' || $refund_status == 'seller_refunded' || $refund_status == 'seller_payment_confirmed')
		{
			$supplier_payment_status = "Refund_requested";
		}
		else
		{
			$supplier_payment_status = "Refund_completed";
		}
		
		$update_sup_trans = $this->pending_refund_request_m->update_sup_trans($order_id,$service_id,$trans_id,$supplier_payment_status);
		
		$get_order_detail = $this->pending_refund_request_m->get_supplier_id($order_id);
		
		$sup_pay_status = explode(',',$get_order_detail->sup_payment_status);
		$sup_service_array = explode(',',$get_order_detail->supplier_service_id);
		$key = array_search($service_id, $sup_service_array);
		$sup_pay_status[$key] = $supplier_payment_status;
		$new_sup_pay_status = implode(',',$sup_pay_status);
		
		$update_sup_stat_order = $this->pending_refund_request_m->update_sup_pay_stat($order_id,$new_sup_pay_status);
		
		$get_smb = $this->pending_refund_request_m->supp_info($get_order_detail->sme_id);
		$smb_name = ucfirst($get_smb->firstname).' '.ucfirst($get_smb->lastname);
		$smb_email = $get_smb->email;
		$smb_number = $get_smb->phone;

		$get_sup = $this->pending_refund_request_m->supp_info($get_order_detail->supplier_id);
		$supplier_fullnames = ucfirst($get_sup->firstname).' '.ucfirst($get_sup->lastname);
		$sup_email = $get_sup->email;
		$supplier_number = $get_sup->phone;

		$get_service_id = $this->pending_refund_request_m->get_service_details($refund_id);
		$service_detail = $this->pending_refund_request_m->get_service($get_service_id->service_id);
		$service_name= $service_detail->service_name;
		$cuurency = $service_detail->currency;
		$ammount = $service_detail->price_detail;
		
		if($refund_status == 'seller_refund_request_sent'){
			$sup_message = $this->emailtemplate->admin_return_supplier($order_id,$cuurency,$ammount,$service_name,$smb_name,$smb_email,$supplier_fullnames);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($sup_email); 

			$this->email->subject('Order Refund-ProtectBox');
			$this->email->message($sup_message);
			$sup_okay = $this->email->send();
		}
		if($refund_status == 'seller_refunded'){
			$get_admins = $this->pending_refund_request_m->get_admin_accountant();
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname).' '.ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;

				$admin_message = $this->emailtemplate->supplier_pending_refund_email_admin($admin_fullname,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name,$smb_number,$smb_email);
			
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($admin_email); 

				$this->email->subject('Order Refund-ProtectBox');
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
			}
		}
		if($refund_status == 'seller_payment_confirmed'){
		

			$sup_message = $this->emailtemplate->supplier_pending_refund_email($sup_email,$supplier_fullnames);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to('himadrimajumder8@gmail.com'); 

			$this->email->subject('Order Refund-ProtectBox');
			$this->email->message($sup_message);
			$sup_okay = $this->email->send();

			$get_admins = $this->pending_refund_request_m->get_admin_accountant();
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname).' '.ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;

				$admin_message = $this->emailtemplate->supplier_payment_confirmed_email_admin($admin_fullname,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name,$smb_number,$smb_email);
			
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to('himadrimajumder8@gmail.com'); 

				$this->email->subject('Order Refund-ProtectBox');
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
			
			}
		}
		if($refund_status == 'smb_refunded'){

			$this->tw_profile($smb_name,$service_id,$order_id,$trans_id,$refund_id);

			$smb_message = $this->emailtemplate->smb_complete_refund_email($smb_name,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name);
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to('himadrimajumder8@gmail.com'); 

			$this->email->subject('Order Refund-ProtectBox');
			$this->email->message($smb_message);
			$smb_okay = $this->email->send();

			$get_admins = $this->pending_refund_request_m->get_admin_accountant();
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname).' '.ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;

				$admin_message = $this->emailtemplate->admin_complete_refund_email($admin_fullname,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name,$smb_number,$smb_email);
			
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to('himadrimajumder8@gmail.com'); 

				$this->email->subject('Order Refund-ProtectBox');
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
				break;
			}

			$sup_message = $this->emailtemplate->supplier_complete_refund_email($supplier_fullnames,$order_id,$cuurency,$ammount,$smb_name,$service_name,$smb_number,$smb_email);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to('himadrimajumder8@gmail.com'); 

			$this->email->subject('Order Refund-ProtectBox');
			$this->email->message($sup_message);
			$sup_okay = $this->email->send();

		}
	} 

	public function tw_profile($smb_name,$service_id,$order_id,$sl_id,$refund_id){

		/*$smb_name = 'Kiran Bhagotra';	//$smb_name,$service_id,$order_id,$sl_id,$refund_id
		$order_id = '2';
		$service_id = '67391';
		$sl_id = '';
		$refund_id = '4';*/

		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();
		$api_token = '9f9900f1-6dfc-44bd-8dba-67f92db76d73';	//9f9900f1-6dfc-44bd-8dba-67f92db76d73

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
		$this->tw_quotes($smb_name,$service_id,$order_id,$sl_id,$refund_id,$decode_json[0]['id'],$api_token);

		curl_close($ch);
	}

	public function tw_quotes($smb_name,$service_id,$order_id,$sl_id,$refund_id,$profile_id,$api_token){

		$this->load->model('pending_refund_request_m');
		$smb_account_info = $this->pending_refund_request_m->smb_details($order_id,$service_id);
		$amount_paid = $smb_account_info->seller_amount;
		
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/quotes');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"profile\":$profile_id,\n          \"source\": \"GBP\",\n          \"target\": \"".$smb_account_info->currency."\",\n          \"rateType\": \"FIXED\",\n          \"targetAmount\": $amount_paid,\n          \"type\": \"BALANCE_PAYOUT\"\n        }");
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
		$this->tw_account($smb_name,$sl_id,$refund_id,$smb_account_info->currency,$smb_account_info->sort_code_gbp,$smb_account_info->account_number_gbp,$smb_account_info->iban_eur,$smb_account_info->routing_number_usd,$smb_account_info->account_number_usd,$smb_account_info->account_type_usd,$profile_id,$api_token,$decode_json['id']);
		curl_close($ch);
	}

	public function tw_account($smb_name,$sl_id,$refund_id,$currency,$sort_code_gbp,$account_number_gbp,$iban_eur,$routing_number_usd,$account_number_usd,$account_type_usd,$profile_id,$api_token,$quote_id){
		
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
						\"accountHolderName\": \"".$smb_name."\",\n
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
						\"accountHolderName\": \"".$smb_name."\",\n
						\"legalType\": \"PRIVATE\",\n
						\"details\": { \n
						\"IBAN\": \"".$iban_eur."\" \n
						} \n         }");
		}else if($currency == 'USD'){
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
						\"currency\": \"USD\", \n
						\"type\": \"sort_code\", \n
						\"profile\": \"".$profile_id."\", \n
						\"accountHolderName\": \"".$smb_name."\",\n
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
		$this->tw_transfers($profile_id,$sl_id,$refund_id,$api_token,$recipient_account_id,$quote_id);
	}


	public function tw_transfers($profile_id,$sl_id,$refund_id,$api_token,$recipient_account_id,$quote_id){
		
		$this->load->model('pending_refund_request_m');

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

		$update_trans = $this->pending_refund_request_m->update_refund_trans_id($uuid,$refund_id);
		$this->tw_fund_transfer($sl_id,$api_token,$decode_json['id']);
	}

	public function tw_fund_transfer($sl_id,$api_token,$transfer_id){

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
?>