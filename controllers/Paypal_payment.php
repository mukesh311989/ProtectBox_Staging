<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_payment extends CI_Controller {


	function __construct(){
		
		parent::__construct();
        $this->load->helper('url');

		define("API_USER","kiran_api1.protectbox.com");

        define("API_PASS","RBHYBSY9XULF7AL7");

        define("API_SIG","AshWCbg1zW2laPbhqEQdJVEFrZkoAAhSWiQlIQttNPEar.P2EhAgpyNK");

        define("APP_ID","EIwBx5HlfQ8ugTHZp5Xam5jPsI7uk2fIw4WXDZu22LWLcLmdXkFgFFZOLf-mrtB3gRpMpDJG2b_R8S2T"); // This app ID is default for sandbox.

        $this->headers = array(

            "X-PAYPAL-SECURITY-USERID: ".API_USER,

            "X-PAYPAL-SECURITY-PASSWORD: ".API_PASS,

            "X-PAYPAL-SECURITY-SIGNATURE: ".API_SIG,

            "X-PAYPAL-REQUEST-DATA-FORMAT: JSON",   

            "X-PAYPAL-RESPONSE-DATA-FORMAT: JSON",

            "X-PAYPAL-APPLICATION-ID: ".APP_ID  

        );
			$this->load->library("Paypal_adaptive");

    }

	  function getPaymentOptions($paykey) {

        $packet = array(

            "requestEnvelope" => array(

                    "errorLanguage" => "en_US",

                    "detailLevel" => "ReturnAll"

                ),

            "payKey" => $paykey

        );
				
		$this->load->library("Paypal_adaptive");
        return $this->paypal_adaptive->_paypalSend($packet,"GetPaymentOptions");
    }
    function splitPay() {	
		$servizz = $this->uri->segment(3);
		$this->load->model('paypal_payment_m');
		$service_info = $this->paypal_payment_m->get_payment_info($servizz);
     	
		foreach($service_info AS $each_service){
			$supplier_user_id = $each_service->user_id;
			$get_all_services = $this->paypal_payment_m->all_services($supplier_user_id);
			$individual_actual_price = array();
			$commission_price = array();
     		$split_price = array();
			
		  foreach($get_all_services AS $service_details){
			$actual_price = $service_details->price_detail;
			$commission = $service_details->commission_detail;
			
			  if($service_details->payment_option == "Monthly")
				{
					$individual_actual_price[] = ($actual_price * 12);
					$commission_price[] = ($actual_price * 12)*($commission/100);
				}
				else if($service_details->payment_option == "Yearly")
				{
					$individual_actual_price[] = ($actual_price * 1);
					$commission_price[] = ($actual_price * 1)*($commission/100);
				}
				else if($service_details->payment_option == "Quarterly")
				{
					$individual_actual_price[] = ($actual_price * 4);
					$commission_price[] = ($actual_price * 4)*($commission/100);
				}
					
				}
			}

			$total_commission_price = array_sum($commission_price);
			$total_split_price = array_sum($individual_actual_price);

			/*echo $total_commission_price;
			echo "<br/>";
			echo $total_split_price;
			echo "<br/>";*/
		  $createPacket = array (
	            "actionType" => "PAY",
	            "currencyCode" => "USD",
	            "receiverList" => array(

	            
	               "receiver" => array(
						array(
							"amount" => '1',
							"email" => 'ppal@ixcg.com'//supplier
							),
						array(
								"amount" => '1',
								"email" => "kiran@protectbox.com" //kiran
							),
						)
	                ),
	           
	            "returnUrl" => "https://staging.protectbox.com/paypal_order/payment_success/".$this->uri->segment(3)."",
	            "cancelUrl" => "https://staging.protectbox.com/paypal_order/payment_failed/".$this->uri->segment(3)."",
						
					"requestEnvelope" => array(

	                    "errorLanguage" => "en_US",

	                    "detailLevel" => "ReturnAll"

	                ),
	        	);
			
		/*print_r($createPacket);
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";*/
		$this->load->library("Paypal_adaptive");
        $response = $this->paypal_adaptive->_paypalSend($createPacket,"Pay");
		//print_r($response);
		//exit;
        $payKey = $response['payKey'];

			        $detailsPacket = array(

			            "requestEnvelope" => array(

			                    "errorLanguage" => "en_US",

			                    "detailLevel" => "ReturnAll"

			                ),
			            "payKey" => $payKey,

			            "receiverOptions" => array(
							array(
								"receiver" => array("email" => 'ppal@ixcg.com'), //supplier
								"invoiceData" => array(
									"item" => array(
											array(
												"name" => $service_details->product_detail,
												"price" => "1",
												"identifier" => "p1"
											),
											
									)
								)
							),
								array(
								"receiver" => array("email" => "kiran@protectbox.com"), //kiran
								"invoiceData" => array(
									"item" => array(
											array(
												"name" => $service_details->product_detail,
												"price" => '1',
												"identifier" => "p1",
											),
											
									)
								)
							),
						)
			        );
			   
		
         //print_r($detailsPacket);
         //exit;

       $response = $this->paypal_adaptive->_paypalSend($detailsPacket,"SetPaymentOptions");
	   //print_r($response);
       

        $dets = $this->getPaymentOptions($payKey);
		/*print_r($dets);*/
		//exit;
        //header("Location:".$this->paypalUrl.$payKey);
		echo "<script>window.location.href='".$this->paypal_adaptive->paypalUrl.$payKey."'</script>";

    }

}

?>