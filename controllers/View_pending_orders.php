<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_pending_orders extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
    }
	public function index()
	{
		$this->load->model('view_pending_orders_m');
		$data['fetch_pending_orders'] = $this->view_pending_orders_m->pending_orders();

	

		$this->load->view('view_pending_orders',$data);
	}

	public function paypal_checkout()
	{
		$this->load->model('view_pending_orders_m');
		$sup_id = $this->uri->segment(3);

		


		$get_priority = $this->view_pending_orders_m->get_priority($sup_id);

		$get_amount = $this->view_pending_orders_m->amount_details($sup_id);
		$amount = $get_amount->sup_amt_received;
		
		$get_currency = $this->view_pending_orders_m->currency_details($sup_id);
		$currency = $get_currency->currency;
		

		$priority_array = array("paypal" => $get_priority->paypal_priority , "stripe" => $get_priority->stripe_priority , "bank" => $get_priority->bank_priority);

		$filter_array = array_filter($priority_array,'is_numeric');
		//
		asort($filter_array);
		$yo = array_flip($filter_array);
		//print_r($yo);
		foreach($yo as $key => $val){
			if($val == "paypal")
			{
				$sup_email = $get_priority->paypal;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_USERPWD, "AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0" . ":" . "ENzXBiQMyVYhFK9WJeMpTvn4E9p5NfqZRMQzr3tux9tki7i7ZfXdTnfl7H0ndUtEcQ-dcBt8s60bKaAC");

				$headers = array();
				$headers[] = "Accept: application/json";
				$headers[] = "Accept-Language: en_US";
				$headers[] = "Content-Type: application/x-www-form-urlencoded";
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

				$result = curl_exec($ch);
				if (curl_errno($ch)) {
					echo 'Error:' . curl_error($ch);
				}
				curl_close ($ch);
				$full_arr = json_decode($result);
				//print_r ($full_arr);
				//exit;
				//echo "<br\>";
				 $a = $full_arr->access_token;
				//exit;
				/*do payout payment */
				$ch = curl_init();
				$batch_id = time();
				curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payouts");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"sender_batch_header\": {  \"sender_batch_id\": \"".$batch_id."\",  \"email_subject\": \"You have a payout!\"  },  \"items\": [  {   \"recipient_type\": \"EMAIL\",   \"amount\": {    \"value\": \"".$amount."\",    \"currency\": \"".$currency."\"    },    \"note\": \"Thanks for your patronage!\",    \"sender_item_id\": \"123456789\",    \"receiver\": \"".$sup_email."\"  }  ]}");
				curl_setopt($ch, CURLOPT_POST, 1);

				$headers = array();
				$headers[] = "Content-Type: application/json";
				$headers[] = "Authorization: Bearer $a";
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

				$result = curl_exec($ch);
				if (curl_errno($ch)) {
					echo 'Error:' . curl_error($ch);
				}
				curl_close ($ch);
				echo "<br\>";
				$decoded_array = json_decode($result,true);
				//print_r($decoded_array[message]);
				//print_r($decoded_array);
				break;
				redirect("view_pending_orders");

			}
			else if($val == "stripe")
			{
				break;
				redirect("view_pending_orders");

			}
			else if($val == "bank")
			{
				break;
				redirect("view_pending_orders");

			}
		}
	}

}

/* End of file View_pending_orders.php */
/* Location: ./application/controllers/View_pending_orders.php */