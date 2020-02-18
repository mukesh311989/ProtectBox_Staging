<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Paypal_adaptive {

	var $receiverList = array();

    var $receiverOption = array();

    var $apiUrl = "https://svcs.paypal.com/AdaptivePayments/";

    var $paypalUrl = "https://www.paypal.com/webscr?cmd=_ap-payment&paykey=";
	
	function __construct(){
		
		

        $this->headers = array(

            "X-PAYPAL-SECURITY-USERID: ".API_USER,

            "X-PAYPAL-SECURITY-PASSWORD: ".API_PASS,

            "X-PAYPAL-SECURITY-SIGNATURE: ".API_SIG,

            "X-PAYPAL-REQUEST-DATA-FORMAT: JSON",   

            "X-PAYPAL-RESPONSE-DATA-FORMAT: JSON",

            "X-PAYPAL-APPLICATION-ID: ".APP_ID  

        );

    }
  

    function _paypalSend($data,$call) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->apiUrl.$call);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        return json_decode(curl_exec($ch), TRUE);                       

    }
}


?>