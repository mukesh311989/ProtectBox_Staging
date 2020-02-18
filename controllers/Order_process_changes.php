<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(FCPATH."lib/xero_library/lib/XeroOAuth.php");
class Order_process extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model("order_process_m");

		$this->load->library('Emailtemplate');
		$this->load->library('m_pdf');
        /*if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business" && $this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }*/
    }
	
	public function index(){
		
		/* Order Data starts */
			$bundle_payment_id = $this->input->post('bundle_payment_id');
			$total_service = $this->input->post('total_service');
			$service_each_pro_price = $this->input->post('service_each_price');
			$each_service_payment_option = $this->input->post('each_service_payment_option');
			$each_service_commission = $this->input->post('each_service_commission');
			$service_each_pro_currency = $this->input->post('each_service_currency');
			$supplier_id = $this->input->post('supplier_id');
			$sup_price = $this->input->post('sup_price');
			$pb_price = $this->input->post('pb_price');
			$total_price = $this->input->post('total_price');
			$sup_payment_status = $this->input->post('sup_payment_status');
			$smbzz_email = $this->session->userdata['logged_in']['email'];
			$smb_name = $this->session->userdata['logged_in']['name'];	
			$sme_id = $this->session->userdata['logged_in']['user_id'];
			$currency = $this->input->post('currency');

			$records = array(
				"sme_id"=> $sme_id,
				"bundle_payment_id"=>$bundle_payment_id,
				"supplier_id"=> $supplier_id,
				"supplier_service_id"=> $total_service,
				"supplier_service_price"=> $service_each_pro_price,
				"service_payment_option"=> $each_service_payment_option,
				"supplier_service_currency"=> $service_each_pro_currency,
				"commission_percentage"=> $each_service_commission,
				"total_price"=> $total_price,
				"pb_amt_received"=> $pb_price,
				"sup_amt_received"=> $sup_price,
				"currency"=> $currency,
				"payment_option"=> "Year",
				"cus_payment_status"=> "Pending",
				"upload_date"=> time(),
				"status"=> "0"
			);
	      $insert_order = $this->order_process_m->data_insert($records);
		  $data['order_data'] = $this->order_process_m->fetch_order_info($insert_order);
		
		/* Order Data ends */
		/* supplier transeaction Data start */

			$each_service_id = explode("," ,$total_service);
					
			$each_service_amount = explode("," ,$service_each_pro_price);
			$each_supplier_id = explode("," ,$supplier_id);
			$order_id = $insert_order;
			$i = 0;
			$supplier_order_status = "smb_placed_order";


			foreach($each_service_id As $all_supply)
			{
				$service_id_each = $each_service_id[$i];
				$service_price = $each_service_amount[$i];
				$supplier_id = $each_supplier_id[$i];
				$get_priority = $this->order_process_m->get_payment_status($supplier_id);
				$payment_recive_option = $get_priority->payment_receive_option;
				
				if($payment_recive_option == 'PRIOR')
				{
					$option = 1;
				}
				else
				{
					$option = 0;
				}

				$pay_status = "Pending";
				$dt = date('Y-m-d');
				$requested_by = 0;

				$records_transe = array(
					"order_id"=> $order_id,
					"seller_id"=>$supplier_id,
					"seller_amount"=> $service_price,
					"supplier_service_id"=> $service_id_each,
					"sup_order_status"=> $supplier_order_status,
					"pay_status"=> $pay_status,
					"pay_mode"=> $option,
					"requested_by"=> $requested_by,
					"last_modified"=> $dt
				);
				//print_r($records_transe);
				$insert_trance = $this->order_process_m->data_insert_transe($records_transe);
				$i++;
			}
		/* supplier transeaction Data ends */


		/* Generate Invoice starts */
			$html = $this->load->view('invoice_email',$data,TRUE);	//load the pdf_output.php by passing our data and get all data in $html varriable.
			$pdfFilePath ="Invoice-".time()."-download.pdf"; 		//this the the PDF filename that user will get to download
			$pdf = $this->m_pdf->load();							//actually, you can pass mPDF parameter on this load() function
			$pdf->WriteHTML((utf8_encode($html)));					//generate the PDF!
			$invoice_attach = $pdf->Output('', 'S');				// Saving pdf to attach to email 
		/* Generate Invoice ends */

		if($this->input->post('payment_mode') == 'stripe'){
			$token = $this->input->post('stripeToken');

			$payment_status = $this->stripe_payment($smbzz_email,$token,$total_price,$currency,$insert_order,$total_service);
		}else if($this->input->post('payment_mode') == 'paypal'){
			$payment_status = $this->paypal_payment($smbzz_email,$total_price,$currency,$insert_order,$total_service);
		}

		$array_supplier_id = explode("," ,$supplier_id);

		if(in_array('54',$array_supplier_id)){		// Change supplier_id to '54'
			$this->order_techdata_api($insert_order);	// $insert_order as parameter
		}
		

		if($payment_status == 'pay_success'){

			$smb_email = $this->email_to_smb($smbzz_email,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);
					
			if($smb_email == 'success'){
				$admin_email = $this->email_to_admin($smbzz_email,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);

				if($admin_email == 'admin_success'){
					$each_service_amount = explode("," ,$service_each_pro_price);

					$supplier_email = $this->email_to_supplier($smbzz_email,$array_supplier_id,$each_service_amount,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);

					if($supplier_email == 'supplier_success'){

						if($this->input->post('payment_mode') == 'stripe'){
							redirect('thank_you/'.$insert_order);
						}else if($this->input->post('payment_mode') == 'paypal'){
							echo $insert_order;
						}

					}
				}
			}
		}
	}

	public function paypal_payment($email,$total_price,$currency,$order_id,$total_service){

		$paypal_charge = ($total_price * 0.044);

		$service_array = explode(",",$total_service);
		$status = '';
		foreach($service_array As $yoo)
		{
			$status .= "smb_placed_order";
			$status .= ",";
		}
		$count_str_len = strlen($status);
		$final_status = substr($status,0,$count_str_len-1);
		
		$supplier_status = '';
		foreach($service_array As $yoo)
		{
			$supplier_status .= "Pending";
			$supplier_status .= ",";
		}
		$count_str_len_sup = strlen($supplier_status);
		$final_status_sup = substr($supplier_status,0,$count_str_len_sup-1);
		
		$records = array(
			"payment_method"=> "Paypal",
			"payment_processor" => "Paypal",
			"payment_gateway_charge" => "4.40%",
			"payment_gateway_charge_amount" => $paypal_charge,
			"order_status"=> $final_status,
			"cus_payment_status"=> "Success",
			"sup_payment_status"=> $final_status_sup,
			"status"=> "1"
		);

		$update_records = $this->order_process_m->order_update_after_payment($order_id,$records);
		
		if($update_records){
			$msg = 'pay_success';
			return $msg;
		}else{
			$msg = 'pay_failed';
			return $msg;
		}
	}

	public function stripe_payment($email,$token,$total_price,$currency,$order_id,$total_service){
		
		require_once('application/libraries/stripe-php/init.php');
		$itemName = "Protectbox Service Purchase";
		$bundle_price = $total_price * 100;

		\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
		 //add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));

			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
					'customer' => $customer->id,
					'amount'   => $bundle_price,
					'currency' => $currency,
					'description' => $itemName,
					'metadata' => array(
					'order_id' => $order_id
					)
			));
			
			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();
			if($chargeJson['paid'] == 1){

				$stripe_charge = ($total_price * 0.029);

				$service_array = explode(",",$total_service);
				$status = '';
				foreach($service_array As $yoo)
				{
					$status .= "smb_placed_order";
					$status .= ",";
				}
				$count_str_len = strlen($status);
				$final_status = substr($status,0,$count_str_len-1);
				
				$supplier_status = '';
				foreach($service_array As $yoo)
				{
					$supplier_status .= "Pending";
					$supplier_status .= ",";
				}
				$count_str_len_sup = strlen($supplier_status);
				$final_status_sup = substr($supplier_status,0,$count_str_len_sup-1);
				
				$records = array(
					"payment_method"=> "Stripe",
					"payment_processor" => "Stripe",
					"payment_gateway_charge" => "2.90%",
					"payment_gateway_charge_amount" => $stripe_charge,
					"order_status"=> $final_status,
					"cus_payment_status"=> "Success",
					"sup_payment_status"=> $final_status_sup,
					"status"=> "1"
				);
				$update_records = $this->order_process_m->order_update_after_payment($order_id,$records);
				if($update_records){
					$msg = 'pay_success';
					return $msg;
				}else{
					$msg = 'pay_failed';
					return $msg;
				}
			}
	}

	public function email_to_smb($smbzz_email,$smb_name,$order_id,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id){

		 $subject="Order received for Amount ".$currency." ".$total_price."";
		 $order_message = $this->emailtemplate->smb_order_bundle($smbzz_email,$smb_name,$order_id,$currency,$total_price);
		
		 $this->load->library('email');
		 $this->email->set_newline("\r\n");
		 $this->email->set_crlf( "\r\n" );

		 $this->email->from('noreply@protectbox.com','Protectbox');
		 //$this->email->from('support@clickrstop.com','Protectbox');
		 $this->email->to($smbzz_email);
		 //$this->email->to('sweezit92@gmail.com');
		 $this->email->subject($subject);
		 $this->email->message($order_message);
		 $this->email->set_mailtype("html"); 

		 $this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
		 $smb_email = $this->email->send();
		 
		 if($smb_email){
			 $msg = 'success';
			 return $msg;
		 }else{
			 $msg = 'failed';
			return $msg;
		 }
	}

	public function email_to_supplier($email,$each_supplier_id,$each_service_amount,$smb_name,$order_id,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id){
		$k = 0;
		foreach($each_supplier_id As $supplier_id){	
			if($each_supplier_id[$k] != '52'){
				$service_price = $each_service_amount[$k];
				$supplier_info = $this->order_process_m->cus_details($each_supplier_id[$k]);
				$supplier_email = $supplier_info->email;

				$subject_admin = "Order received for Amount ".$currency." ".$service_price." from ".$smb_name."";
				$order_message_supplier = $this->emailtemplate->supplier_order_bundle($email,$smb_name,$order_id,$currency,$service_price,$sme_id,$supplier_email);
				
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->set_crlf( "\r\n" );

				$this->email->from('noreply@protectbox.com','Protectbox');
				$email_to = $supplier_email;
				//$email_to = 'debashisnath1992@gmail.com';
				$this->email->to($email_to);
				$this->email->subject($subject_admin);
				$this->email->message($order_message_supplier);
				$this->email->set_mailtype("html"); 
				 
				$this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
				$supplier_email = $this->email->send();
			}else{
				$supplier_email = $this->order_techdata_uk($order_id,$service_price);
			}
		$k++;
		}
		if($supplier_email){
			 $msg = 'supplier_success';
			 return $msg;
		 }else{
			 $msg = 'supplier_failed';
			return $msg;
		 }
	}

	public function email_to_admin($smbzz_email,$smb_name,$order_id,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id){

		$this->load->model("signup_m");
		$get_admins = $this->signup_m->get_admins();
		
		$admin_email = array();
		$admin_fullname = 'Admin';
		foreach($get_admins as $fetch_admin){
			$admin_email[] = $fetch_admin->email;
		}
		$email_to = implode(',', $admin_email);
		//$email_to = 'sweezit92@gmail.com';
		$subject_admin = "Order received for Amount ".$currency." ".$total_price."";
		$order_message_admin = $this->emailtemplate->smb_order_bundle_admin($admin_fullname,$smbzz_email,$smb_name,$order_id,$currency,$total_price,$sme_id);
	
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->set_crlf( "\r\n" );
		$this->email->from('noreply@protectbox.com','Protectbox');
		$this->email->to($email_to);
		$this->email->subject($subject_admin);
		$this->email->message($order_message_admin);
		$this->email->set_mailtype("html");
		 
		$this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
		$admin_email_send = $this->email->send();
		
		if($admin_email_send){
			 $msg = 'admin_success';
			 return $msg;
		 }else{
			 $msg = 'admin_failed';
			return $msg;
		 }
	}
	
	public function order_techdata_uk($order_id,$service_price){	// order_id,service_price
		//$order_id = '14';
		//$service_price = '1000';

		/* Order Details Starts */
			$data['order_data'] = $this->order_process_m->fetch_td_data_service($order_id);
			$fetch_sme_data = $this->order_process_m->fetch_sme($data['order_data']->sme_id);
			$smb_name = $this->session->userdata['logged_in']['name'];	
			$service_provider = 'TechData UK';
			$data['td_uk_account'] = $this->order_process_m->fetch_token($service_provider);
		/* Order Details Ends */
		
		/* Generate Invoice starts */
			$html = $this->load->view('invoice_email_td_uk',$data,TRUE);			//load the pdf_output.php by passing our data and get all data in $html varriable.
			$pdfFilePath ="Invoice-".time()."-download.pdf"; 						//this the the PDF filename that user will get to download
			$pdf = $this->m_pdf->load();											//actually, you can pass mPDF parameter on this load() function
			$pdf->WriteHTML((utf8_encode($html)));									//generate the PDF!
			$invoice_attach = $pdf->Output('', 'S');								// Saving pdf to attach to email 
		/* Generate Invoice ends */

		 $subject="Order received for Amount ".$data['order_data']->currency." ".$service_price."";
		 $order_message = $this->emailtemplate->techdata_uk_orders($fetch_sme_data->email,$smb_name,$order_id,$data['order_data']->currency,$service_price,$data['order_data']->sme_id,$data['td_uk_account']->td_uk_email);
		
		
		 $this->load->library('email');
		 $this->email->set_newline("\r\n");
		 $this->email->set_crlf( "\r\n" );

		 $this->email->from('noreply@protectbox.com','Protectbox');
		 $this->email->to('smborders@techdata.com');
		 //$this->email->to('debashisnath1992@gmail.com');
		 $this->email->subject($subject);
		 $this->email->message($order_message);
		 $this->email->set_mailtype("html"); 

		 $this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
		 $smb_email = $this->email->send();

		 return true;
	}

	public function order_techdata_api($order_id){	//$order_id
		//$order_id = 6;
		$fetch_td_data = $this->order_process_m->fetch_td_data_service($order_id);
		$supplier_id_array = explode(',',$fetch_td_data->supplier_id);
		$supplier_service_id_array = explode(',',$fetch_td_data->supplier_service_id);
		$supplier_service_price_array = explode(',',$fetch_td_data->supplier_service_price);
		$supplier_service_currency_array = explode(',',$fetch_td_data->supplier_service_currency);
		$smb_order_status_array = explode(',',$fetch_td_data->order_status);

		$td_order_data = array();
		foreach($supplier_id_array AS $key=>$td_us_array){
			if($td_us_array == '54'){
				$td_order_data = array(
					'service_id' => $supplier_service_id_array[$key],
					'service_price' => $supplier_service_price_array[$key],
					'service_currency' => $supplier_service_currency_array[$key],
					'payment_method' => $fetch_td_data->payment_method,
					'sme_id' =>  $fetch_td_data->sme_id,
					'smb_order_status' => $smb_order_status_array[$key],
					'order_date' =>  $fetch_td_data->upload_date
				);
			}
		}
		$fetch_sme_data = $this->order_process_m->fetch_sme($td_order_data['sme_id']);
		$fetch_service_data = $this->order_process_m->fetch_service($td_order_data['service_id']);

		$service_provider = 'TechData US';
		$fetch_access_token = $this->order_process_m->fetch_token($service_provider);
		$sme_name = $fetch_sme_data->firstname .' '. $fetch_sme_data->lastname;
		
		$pro_details = $fetch_service_data->product_detail;
		$substr_details = substr($pro_details,0,10);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://connect.cstenet.com/orders/api/v1/orders');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
		"{ \"pricingLevel\": \"CO\", \"currency\": \"".$td_order_data['service_currency']."\", \"lines\": [ { \"shortDescription\": \"Short description\", \"lineNumber\": \"100\", \"partNumber\": \"".$fetch_service_data->td_part."\", \"quantity\": 0, \"unitPrice\": ".$td_order_data['service_price'].", \"extendedPrice\": 3.98, \"serviceLevel\": { \"serviceLevelCode\": \"OT\", \"accountNumber\": \"\" } } ], \"notifications\": { \"reseller\": { \"emailAddress\": \"team@protectbox.com\", \"orderConfirmation\": false, \"deliveryConfirmation\": true, \"shipmentConfirmation\": true, \"orderCancelled\": true, \"newEstimatedShipDate\": false, \"backorder\": false, \"creditReview\": false, \"salesReview\": false, \"missedPlantCutoff\": false, \"missedCarrierPull\": false }, \"endUser\": { \"emailAddress\": \"TEST EMAIL\", \"orderConfirmation\": true, \"deliveryConfirmation\": true, \"shipmentConfirmation\": true } }, \"paymentInformation\": { \"contact\": \"ProtectBox\", \"paymentMethod\": \"".$td_order_data['payment_method']."\" }, \"endUserInformation\": { \"businessName\": \"ProtectBox\", \"contactPerson\": \"Kiran Bhagotra\", \"email\": \"team@protectbox.com\", \"phone\": \"TEST PHONE\", \"note\": \"Order Placed\", \"address\": { \"name\": \"ProtectBox Ltd.\", \"addressline1\": \"6 Doagh Road,\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"US\" } }, \"shipTo\": { \"accountNumber\": \"\", \"businessName\": \"ProtectBox\", \"contactPerson\": \"Maria Cots\", \"email\": \"mcots9437@gmail.com\", \"phone\": \"+44 7467 052794\", \"note\": \"\", \"address\": { \"name\": \"Maria Cots\", \"addressline1\": \"44 Coldbath Street\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"US\" } }, \"soldTo\": { \"accountNumber\": \"\", \"businessName\": \"ProtectBox\", \"contactPerson\": \"Maria Cots\", \"email\": \"mcots9437@gmail.com\", \"phone\": \"+44 7467 052794\", \"note\": \"SoldTo note\", \"address\": { \"name\": \"Maria Cots\", \"addressline1\": \"44 Coldbath Street\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"US\" } }, \"endUserPO\": \"TEST ORDER\", \"customerPO\": \"TEST ORDER\", \"additionalNote\": \"Additional note\", \"customerNote\": \"Customer note\"}");

		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer '.$fetch_access_token->access_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result_prod_data = curl_exec($ch);

		curl_close($ch);
		
		$decode_json = json_decode($result_prod_data,TRUE);

		if($decode_json['salesOrderNumber']){
			$order_number = array(
				'order_number' => $decode_json['salesOrderNumber']
			);
			$update_order_number = $this->order_process_m->update_techdata($insert_order,$order_number);
			if($update_order_number){
				$order_status = 'supplier_us_success';
			}
		}else{
			$order_status = 'supplier_us_failed';
		}
		return $order_status;
	}

	public function xero_integration()
		{
		    
		    $smbzz_email='arpita.yadav@yashco.com';
		    $supplier_email='aarohiyadav29@gmail.com';
		    $total_price=50;
		    $total_supplier_price=100;
		    $val=10;

		    //print_r(FCPATH);die;
		    
			//define ( 'BASE_PATH', dirname(__FILE__) );
			define ( "XRO_APP_TYPE", "Private" );
			define ( "OAUTH_CALLBACK", "oob" );
			$useragent = "Protectbox_private";
			//require_once(FCPATH .'lib/xero_library/tests/testRunner.php');
			
			//print_r(FCPATH .'lib/xero_library/tests/testRunner.php');die;
			$signatures = array (
					'consumer_key' => 'B8RD6JFXEANZR7O3TTWXGCGSIMYXDJ',
					'shared_secret' => 'TGXS9ARTYGDJNYKRMNZ241QINDNBZD',
					// API versions
					'core_version' => '2.0',
					'payroll_version' => '1.0',
					'file_version' => '1.0' 
			);
			

			if (XRO_APP_TYPE == "Private" || XRO_APP_TYPE == "Partner") {
				$signatures ['rsa_private_key'] = FCPATH . 'lib/xero_library/certs/privatekey.pem';
				$signatures ['rsa_public_key'] = FCPATH . 'lib/xero_library/certs/publickey.cer';
			}

			$XeroOAuth = new XeroOAuth ( array_merge ( array (
					'application_type' => XRO_APP_TYPE,
					'oauth_callback' => OAUTH_CALLBACK,
					'user_agent' => $useragent 
			), $signatures ) );
			
		
    
			
			echo '<pre>';
			print_r($XeroOAuth);

			$initialCheck = $XeroOAuth->diagnostics();
			
				print_r($initialCheck);
		
			$checkErrors = count ( $initialCheck );
			
			if ($checkErrors > 0) {
				// you could handle any config errors here, or keep on truckin if you like to live dangerously
				foreach ( $initialCheck as $check ) {
					echo 'Error: ' . $check . PHP_EOL;
				}
			} 
			 else {
	$session = persistSession ( array (
			'oauth_token' => $XeroOAuth->config ['consumer_key'],
			'oauth_token_secret' => $XeroOAuth->config ['shared_secret'],
			'oauth_session_handle' => '' 
	));
	$oauthSession = retrieveSession ();
	
	if (isset ( $oauthSession ['oauth_token'] )) {
		$XeroOAuth->config ['access_token'] = $oauthSession ['oauth_token'];
		$XeroOAuth->config ['access_token_secret'] = $oauthSession['oauth_token_secret'];

       $XeroOAuth->config['session_handle'] = $oauthSession['oauth_session_handle'];
		
		//require_once(BASE_PATH .'/xero/tests.php');
		$date =  date("Y-m-d");
		$dueDate = date('Y-m-d',strtotime($date." +1 month"));
		 $xml = "<BankTransactions>
				<BankTransaction>
				  <Type>RECEIVE</Type>
				  <Contact>
					<Name>".$smbzz_email."</Name>
				  </Contact>
				  <Date>".$date."</Date>
				  <LineItems>
					<LineItem>
					
					  <Description>Protectbox Sales</Description>
					  <Quantity>1.00</Quantity>
					  <UnitAmount>".$total_price."</UnitAmount>
					  <AccountCode>403</AccountCode>
					</LineItem>
				  </LineItems>
				  <BankAccount>
					<Code>750</Code>
				  </BankAccount>
				</BankTransaction>
			</BankTransactions>";
           $response = $XeroOAuth->request('PUT', $XeroOAuth->url('BankTransactions', 'core'), array(), $xml);
		    if ($XeroOAuth->response['code'] == 200) {
			}
			else {
                outputError($XeroOAuth);
            }

			       $xml = "<Invoices>
                      <Invoice>
                        <Type>ACCREC</Type>
                        <Contact>
                          <Name>".$supplier_email."</Name>
                        </Contact>
                        <Date>".$date."</Date>
                        <DueDate>".$dueDate."</DueDate>
                        <LineAmountTypes>Exclusive</LineAmountTypes>
                        <LineItems>
                          <LineItem>
                            <Description>Protectbox Purchase Invoice</Description>
                            <Quantity>1</Quantity>
                            <UnitAmount>".$total_supplier_price."</UnitAmount>
                            <AccountCode>403</AccountCode>
                          </LineItem>
                        </LineItems>
                      </Invoice>
                    </Invoices>";
            $response = $XeroOAuth->request('PUT', $XeroOAuth->url('Invoices', 'core'), array(), $xml);
            if ($XeroOAuth->response['code'] == 200) {
                $invoice = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
            
            } else {
                outputError($XeroOAuth);
            }	
			
	}
	
	//testLinks ();
	}

			
		}
}
?>