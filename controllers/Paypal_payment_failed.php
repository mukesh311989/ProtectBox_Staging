<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_payment_failed extends CI_Controller {

	public function __construct() {
      parent::__construct();	
		$this->load->library('Emailtemplate');	

	}
	public function index()
	{
		$this->load->model('paypal_payment_failed_m');
		$supplier_id = $this->session->userdata['logged_in']['user_id'];
		$paypal_charge = (5*0.044);
		$date = time();
		
		$payment = array(
			'supplier_id' => $supplier_id,
			'payment_processor' => 'Paypal',
			'payment_gateway_charge' => '',
			'payment_gateway_charge_amount' => '',
			'payment_status' => '0',
			'subscription_status' => '',
			'date' => $date
		);
		$insert_payment_table = $this->paypal_payment_failed_m->paypal_payment_info($payment);
		if($insert_payment_table){

			$del_message = $this->emailtemplate->paypal_supplier_subscription_failed($supplier_name,$email);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email); 

				$this->email->subject('Subscription Confirmation-ProtectBox');
				$this->email->message($del_message);    

				$okay = $this->email->send();

		}
		$this->load->view('paypal_payment_failed');
	}

}

/* End of file Paypal_payment_failed.php */
/* Location: ./application/controllers/Paypal_payment_failed.php */