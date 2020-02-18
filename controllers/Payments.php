<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
		if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "Supplier"){
            redirect('error_page');
        }

		define('CLIENT_ID', 'ca_AdvVrUfeTGrSqwHPqbBlgHOKXV9XyQ0G');
		define('API_KEY', 'sk_test_mhunZ60QIWw44BEYGZNypmTp');
		define('TOKEN_URI', 'https://connect.stripe.com/oauth/token');
		define('AUTHORIZE_URI', 'https://connect.stripe.com/oauth/authorize');
    }

	public function index()
	{
		$this->load->model('payments_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];

		if(isset($_GET['code']) && $_GET['code'] != ''){

			  $code = $_GET['code'];
				$token_request_body = array(
				  'client_secret' => API_KEY,
				  'grant_type' => 'authorization_code',
				  'client_id' => CLIENT_ID,
				  'code' => $code,
				);

				$req = curl_init(TOKEN_URI);
				curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($req, CURLOPT_POST, true );
				curl_setopt($req, CURLOPT_POSTFIELDS, http_build_query($token_request_body));
				// TODO: Additional error handling
				$respCode = curl_getinfo($req, CURLINFO_HTTP_CODE);
				$resp = json_decode(curl_exec($req), true);
				
				curl_close($req);
				$access_token = $resp['access_token'];
				$stripe_username = $_GET['stripe_publishable_key'];
				$stripe_user = $resp['stripe_user_id'];

			$check_stripe = $this->payments_m->check_user_data($user_id);

			if(sizeof($check_stripe) < 1){
				$payment_data = array(
				'user_id' => $user_id,
				'stripe_username' => $stripe_username,
				'stripe_authcode' => $access_token,
				'stripe_account_id' => $stripe_user,
				'stripe_priority' => 0
			);
				
				$insert_payment_mode = $this->payments_m->add_payment_mode($payment_data);
				if($insert_payment_mode){
					redirect('payments');
				}else{
					$this->session->set_flashdata("failed", "Something went wrong while updating!");
	                redirect('payments');
				}
			}else{

				if(($check_stripe->paypal_priority == "" && $check_row->bank_priority == 0) || ($check_row->paypal_priority == 0 && $check_row->bank_priority == "" ))
				{
					$stripe_priority = 1;
				}
				else if(($check_row->paypal_priority == 0 && $check_row->bank_priority == 1) || ($check_row->paypal_priority == 1 && $check_row->bank_priority == 0 ))
				{
					$stripe_priority = 2;
				}

				$payment_data = array(
				'user_id' => $user_id,
				'stripe_username' => $stripe_username,
				'stripe_authcode' => $access_token,
				'stripe_priority' => $stripe_priority
				);

				$update_payment_mode = $this->payments_m->update_payment_mode($payment_data,$user_id);
				if($update_payment_mode){
					redirect('payments');
				}else{
					$this->session->set_flashdata("failed", "Something went wrong while updating!");
	                redirect('payments');
				}
			}
		}


		$data['user_paydetails'] = $this->payments_m->check_user_data($user_id);
		
		$priority = $this->payments_m->check_priority($user_id);
	
		if(sizeof($priority) > 0)
		{
			$array = json_decode(json_encode($priority), True);
			$filter_array = array_filter($array,'is_numeric');
			$yo = array_flip($filter_array);
			arsort($yo);
			$data["get_priority"] = $yo;

		}
		
		$this->load->view('payments',$data);
	}

	public function update_paypal(){
			$this->load->model('payments_m');
			$user_id = $this->session->userdata['logged_in']['user_id'];
			$payment_type = "paypal";
			$check_paypal = $this->payments_m->check_user_data($user_id);
			if(sizeof($check_paypal) < 1){
				$insert_array = array(
										'user_id' => $user_id,
										
										'paypal_email' => $this->input->post("paypal"),
										'paypal_priority' => 0
									 );
				$insert_payment_mode = $this->payments_m->add_payment_mode($insert_array);
			}else{
				if(($check_paypal->stripe_priority == "" && $check_paypal->bank_priority == 0) || ($check_paypal->stripe_priority == 0 && $check_paypal->bank_priority == "" ))
				{
					$paypal_priority = 1;
				}
				else if(($check_paypal->stripe_priority == 0 && $check_paypal->bank_priority == 1) || ($check_paypal->stripe_priority == 1 && $check_paypal->bank_priority == 0 ))
				{
					$paypal_priority = 2;
				}
				$update_array = array(
										
										'paypal_email' => $this->input->post("paypal"),
										'paypal_priority' => $paypal_priority
									 );
				$update_payment_mode = $this->payments_m->update_payment_mode($update_array,$user_id);
			}
	}

	public function update_priority(){
		$this->load->model('payments_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$check_row = $this->payments_m->check_user_data($user_id);
		$order = array_flip($this->input->post("order"));
		if($check_row > 0)
		{
			$update_order = $this->payments_m->update_order($user_id,$order);
		}else{
			$user_array = array("user_id" => $user_id);
			$insert_array = array_merge($user_array,$order);
			$insert_order = $this->payments_m->add_payment_mode($insert_array);
		}
	}

	public function update_bank()
	{
		$this->load->model('payments_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$check_row = $this->payments_m->check_user_data($user_id);
		
		$currency = $this->input->post('currency');

		if($this->input->post('iban_eur') != ''){
			$iban_eur = $this->input->post('iban_eur');
		}else{
			$iban_eur = "";
		}
		if($this->input->post('sort_code_gbp') != ''){
			$sort_code_gbp = $this->input->post('sort_code_gbp');
		}else{
			$sort_code_gbp = "";
		}
		if($this->input->post('account_number_gbp') != ''){
			$account_number_gbp = $this->input->post('account_number_gbp');
		}else{
			$account_number_gbp = "";
		}
		if($this->input->post('account_type_usd') != ''){
			$account_type_usd = $this->input->post('account_type_usd');
		}else{
			$account_type_usd = "";
		}
		if($this->input->post('account_number_usd') != ''){
			$account_number_usd = $this->input->post('account_number_usd');
		}else{
			$account_number_usd = "";
		}
		if($this->input->post('routing_number_usd') != ''){
			$routing_number_usd = $this->input->post('routing_number_usd');
		}else{
			$routing_number_usd = "";
		}

		if(sizeof($check_row) < 1)
		{
			$insert_array = array(
									"user_id" => $user_id,
									"currency" => $currency,
									"iban_eur" => $iban_eur,
									"sort_code_gbp" => $sort_code_gbp,
									"account_number_gbp" => $account_number_gbp,
									"account_type_usd" => $account_type_usd,
									"account_number_usd" => $account_number_usd,
									"routing_number_usd" => $routing_number_usd,
									"bank_priority" => 0
								 );
			$insert_bank = $this->payments_m->insert_bank($insert_array);
		}else{
			if(($check_row->stripe_priority == "" && $check_row->paypal_priority == 0) || ($check_row->stripe_priority == 0 && $check_row->paypal_priority == "" ))
			{
				$bank_priority = 1;
			}
			else if(($check_row->stripe_priority == 0 && $check_row->paypal_priority == 1) || ($check_row->stripe_priority == 1 && $check_row->paypal_priority == 0 ))
			{
				$bank_priority = 2;
			}
			$update_array = array(
									"currency" => $currency,
									"iban_eur" => $iban_eur,
									"sort_code_gbp" => $sort_code_gbp,
									"account_number_gbp" => $account_number_gbp,
									"account_type_usd" => $account_type_usd,
									"account_number_usd" => $account_number_usd,
									"routing_number_usd" => $routing_number_usd,
									"bank_priority" => $bank_priority
								 );
			$update_bank = $this->payments_m->update_order($user_id,$update_array);
		}
	}


	public function update_payment_option()
	{
		$this->load->model('payments_m');
		$payment_option = $this->input->post('payment_option');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$update_payment_array = array(
							"payment_receive_option" => $payment_option
							);
		$get_count_supplier = $this->payments_m->get_count($user_id);
		if($get_count_supplier > 0)
		{
			$get_update = $this->payments_m->update_payment_option($update_payment_array,$user_id);

		}
		else
		{	
			$insert_payment_recive = $this->payments_m->insert_payment_option($update_payment_array);

		}
	}
}
?>