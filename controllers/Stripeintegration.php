<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripeintegration extends CI_Controller {

	public function __construct() {
        parent::__construct();	
		$this->load->library('stripegateway');			
	}
	
	public function index()
	{		
		$data["message"] = "";
		$this->load->view('view_stripe',$data);
	}

	public function submtpay(){
		    $token = $_POST['stripeToken'];
			echo $token;
			exit;
			$data = array(
				'number' => $this->input->post('cardnumber'),
				'exp_month' => $this->input->post('expirymonth'),
				'exp_year'=> $this->input->post('expiryyear'),
				'amount' => $this->input->post('amount')
			);
			$message= $this->stripegateway->checkout($token);
			print_r($message);
			exit;
			$this->load->view('view_stripe',$data);
	}
}
