<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Paypal extends CI_Controller {

    /**
     * Index Page for this controller.
     */
  
    public function __construct() {
	    parent::__construct();
    }

    public function index() {
		 $settings = array('api_username' => 'kiran-facilitator_api1.protectbox.com',
						   'api_password' => 'RZB2ZP7D8DF3J95Q',
						   'api_signature' => 'AANhSLziHCMAB4v.LHz6a-K9b4zDAEKOjymC3aKCiV48n1ynubfBp61H',
						   'api_endpoint' => 'https://api-3t.sandbox.paypal.com/nvp',
						   'api_url' => 'https://www.sandbox.paypal.com/webscr&cmd=_express-checkout&token=',
						   'api_version' => '65.1',
						   'payment_type' => 'Sale',
						   'currency' => 'USD'
						   );
		 $this->load->library('paypalexpress', $settings);		  
		
		 
		       // Setting up your intial variable to send payment process.
			  
			  // $url = dirname('https://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']);
			   $personName  = 'test';
			   $L_NAME0   = 'test';
			   $L_AMT0  = '1';
			   $L_QTY0  =	'1';
			   $returnURL = 'https://staging.protectbox.com/thank_you';
			   $cancelURL = 'https://staging.protectbox.com/payment_cancel';
			   $itemamt = 0.00;
			   $itemamt = $L_QTY0*$L_AMT0;
			   $amt = 1.00;
			   $nvpstr = "&L_NAME0=".$L_NAME0."&L_AMT0=".$L_AMT0."&L_QTY0=".$L_QTY0."&AMT=".(string)$amt."&ITEMAMT=".(string)$itemamt."&L_NUMBER0=1000&L_DESC0=Size: 8.8-oz&ReturnUrl=".$returnURL."&CANCELURL=".$cancelURL ."&CURRENCYCODE=".$settings['currency']."&PAYMENTACTION=".$settings['payment_type'];
		        // calling initial api.
				$initresult = $this->paypalexpress->process_payment($nvpstr);
				print_r($initresult);
				exit;
				if(isset($initresult) && $initresult['ACK'] == 'Failure') {
				  // redirect to view with error message.
				  $this->session->set_flashdata('error_message', 'Please check your details and try again');
				  redirect('myview');
				}
         
		
	}
}