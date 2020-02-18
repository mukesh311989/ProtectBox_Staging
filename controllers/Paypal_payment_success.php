<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_payment_success extends CI_Controller {

	public function __construct() {
      parent::__construct();	
		$this->load->library('Emailtemplate');	

	}

	public function index()
	{
		$this->load->model('paypal_payment_success_m');
		$supplier_id = $this->session->userdata['logged_in']['user_id'];
		$email = $this->session->userdata['logged_in']['email'];
		$supplier_name = $this->session->userdata['logged_in']['name'];
		$paypal_charge = (5*0.044);
		$pb_received = (5.00 - $paypal_charge);
		$date = time();
		$after_one_month = strtotime('+30 days',$date);

		$payment = array(
			'supplier_id' => $supplier_id,
			'payment_processor' => 'Paypal',
			'total_amount' => '5.00',
			'payment_gateway_charge' => '4.40%',
			'payment_gateway_charge_amount' => $paypal_charge,
			'payment_received' => $pb_received,
			'payment_status' => '1',
			'date' => $date,
			'subscription_status' => '1',
			'subscription_end_date' => $after_one_month
		);
		$insert_payment_table = $this->paypal_payment_success_m->paypal_payment_info($payment);
		if($insert_payment_table){

			$del_message = $this->emailtemplate->paypal_supplier_subscription_success($supplier_name,$email);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email); 

				$this->email->subject('Subscription Confirmation-ProtectBox');
				$this->email->message($del_message);    

				$okay = $this->email->send();

		}
		$this->load->view('paypal_payment_success');	
	}

}

/* End of file Paypal_payment_success.php */
/* Location: ./application/controllers/Paypal_payment_success.php */