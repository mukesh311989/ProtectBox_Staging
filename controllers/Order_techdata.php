<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_techdata extends CI_Controller{


    function __construct(){
		parent::__construct();
		$this->load->model('order_techdata_m');

		$this->allow_get_array = TRUE;
		define("LOGIN_URI", "https://sso.cstenet.com");	// Prod: https://sso.techdata.com && Lab: https://sso.cstenet.com 
		define("CLIENT_ID", "ecom.apps.ext.PartnerAPI.0038066390");	// new: ecom.apps.ext.PartnerAPI.0038066390, old: ecom.apps.ext.PartnerAPI.0038066388
		define("CLIENT_SECRET", "8QmBmwoxsR6072ftYjlMUg8qZHl6cTpDGD2NdF1xwKEQUA6FlSnu9upSDrgeU5ZU");	// Old : NclU7uw6IwaljdoKpq5Qu8LzPn4Qfj3b8p8dHVY1IkbrWoSJ4X1ESSgToDYDxrVc && New: 8tp5xvAtSxuHutDhEowhiV5dfTePA48upZh6Ise9KTgLp7lgw6NNrtKdpI2uATBF , latest = 8QmBmwoxsR6072ftYjlMUg8qZHl6cTpDGD2NdF1xwKEQUA6FlSnu9upSDrgeU5ZU

		define("REDIRECT_URI", "https://www.staging.protectbox.com/order_techdata");
		define("SCOPE", "openid profile agreement freight invoice order order.submit product quote quote.create renewal servicelevel");
		// profile openid order product agreement freight invoice order.submit quote quote.create renewal servicelevel
		// NEW: openid profile agreement freight invoice order order.submit product quote quote.create renewal servicelevel
	}
	
	public function index(){
		if(!isset($_GET['code']) && $_GET['code'] == ''){
			$auth_url = LOGIN_URI. "/as/authorization.oauth2?client_id=". CLIENT_ID . "&response_type=code&pfidpadapterid=PartnerBaseAuthnAdaptor&redirect_uri=" . REDIRECT_URI. "&scope=".SCOPE;
			redirect($auth_url);
		}else{
			$auth_code = $_GET['code'];
			
			// Prepare new cURL resource
			$params = "code=" . $auth_code

			. "&grant_type=authorization_code"

			. "&client_id=" . CLIENT_ID

			. "&client_secret=" . CLIENT_SECRET

			. "&redirect_uri=" . urlencode(REDIRECT_URI);
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, LOGIN_URI.'/as/token.oauth2');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

			$headers = array();
			$headers[] = 'Accept: application/json';
			$headers[] = 'Accept-Language: en_US';
			$headers[] = 'Content-Type: application/x-www-form-urlencoded';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);
			$decode_json = json_decode($result,TRUE);
			if($decode_json['access_token'] != ''){

				$service_provider = 'TechData US';

				$records = array(
					'service_provider' => $service_provider,
					'access_token' => $decode_json['access_token'],
					'refresh_token' => $decode_json['refresh_token'],
					'date' => time()
				);
				$check_records = $this->order_techdata_m->check_records($service_provider);
				if($check_records < 1){
					$this->order_techdata_m->insert_record($records);
				}else{
					$this->order_techdata_m->update_record($service_provider,$records);
				}	
			}
		}
	}
}

?>