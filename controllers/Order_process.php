<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(FCPATH."lib/Xero/lib/XeroOAuth.php");
class Order_process extends CI_Controller {

	function __construct(){
        parent::__construct();

        $IP=$_SERVER['HTTP_X_FORWARDED_FOR'];
		$this->$ipdat = @json_decode(file_get_contents( 
		    "http://www.geoplugin.net/json.gp?ip=" . $IP));

		$user_type = $this->session->userdata['logged_in']['user_type'];

		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}
  		
		$this->load->model("order_process_m");

		$this->load->library('Emailtemplate');
		$this->load->library('m_pdf');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business" && $this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
        require_once APPPATH."third_party/stripe/init.php";
		 $stripe = array(
		  "secret_key"      => "sk_test_mhunZ60QIWw44BEYGZNypmTp",
		  "publishable_key" => "pk_test_n7WrQXu5AFq89DrbDVMlvUuE"
		); 
		\Stripe\Stripe::setApiKey($stripe['secret_key']);
		
		ini_set('MAX_EXECUTION_TIME', '-1');

    }
	
	public function index(){
		
		/* Order Data starts */
	/*	print_r($_POST); die;*/
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
			$card_name=$this->input->post('card_name');
			$card_number=$this->input->post('card_number');
			$card_month=$this->input->post('card_month');
			$card_year=$this->input->post('card_year');
			$card_cvv=$this->input->post('card_cvv');
			if($this->input->post('payment_mode') == 'paypal'){
			    	$transaction_id=$this->input->post('transaction_id');
			}else{
			    	$transaction_id='';
			}

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
				"status"=> "0",
				"order_number"=>$transaction_id
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
				$serviceData = $this->order_process_m->fetch_service($service_id_each);
				
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
		
		if(isset($each_supplier_id[0])){
		    $supplier_id1 = $each_supplier_id[0];
		}else{
		    $supplier_id1 =$supplier_id;
		}
		
		$get_priority1 = $this->order_process_m->get_payment_status($supplier_id1);
	
		if(isset($get_priority1->payment_receive_option)){
		     $payment_recive_option1 = $get_priority1->payment_receive_option;
		}else{
		     $payment_recive_option1 = 'PRIOR';
		}

		if($this->input->post('payment_mode') == 'stripe'){
			$token = $this->input->post('stripeToken');
          // $token ='';
			$payment_status = $this->stripe_payment($smbzz_email,$token,$total_price,$currency,$insert_order,$total_service,$card_name,$card_number,$card_month,$card_year,$card_cvv,$payment_recive_option1,$sup_price,$get_priority1->stripe_account_id);
		}else if($this->input->post('payment_mode') == 'paypal'){
		   
			$payment_status = $this->paypal_payment($smbzz_email,$total_price,$currency,$insert_order,$total_service,$payment_recive_option1);
		}
	

		$array_supplier_id = explode("," ,$supplier_id);

		if(in_array('54',$array_supplier_id)){		// Change supplier_id to '54'
			$this->order_techdata_api($insert_order);	// $insert_order as parameter
		}
		

		if($payment_status == 'pay_success'){

			//$smb_email = $this->email_to_smb($email,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);
					
			/*if($smb_email == 'success'){*/
				//$admin_email = $this->email_to_admin($email,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);

				/*if($admin_email == 'admin_success'){*/
					$each_service_amount = explode("," ,$service_each_pro_price);

					$supplier_email = $this->email_to_supplier($email,$array_supplier_id,$each_service_amount,$smb_name,$insert_order,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id);

					/*if($supplier_email == 'supplier_success'){*/

						if($this->input->post('payment_mode') == 'stripe'){
							redirect('thank_you/'.$insert_order);
						}else if($this->input->post('payment_mode') == 'paypal'){
							echo $insert_order;
						}

					/*}*/
				/*}*/
			/*}*/
		}
	}

	public function paypal_payment($email,$total_price,$currency,$order_id,$total_service,$payment_recive_option1){

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

	/*
	* Function to transfer amount to TransferWise
	*/
	public function stripe_To_Tw($amt,$currency){

		$Payout = \Stripe\Payout::create([
			'amount' => round($amt),
			'currency' => $currency,
			'description' => 'STRIPE PAYOUT TO KIRAN'
		]);
	}

	public function stripe_payment($email,$token,$total_price,$currency,$order_id,$total_service,$card_name,$card_number,$card_month,$card_year,$card_cvv,$payment_recive_option1,$pb_price,$stipe_account_id){
		
		 $token = \Stripe\Token::create(
					array(
						"card" => array(
						"name" => $card_name,
						"number" => $card_number,
						"exp_month" => $card_month,
						"exp_year" => $card_year,
						"cvc" => $card_cvv
						)
					)
		);
	
		$itemName = "Protectbox Service Purchase";
		$bundle_price =$total_price * 100;
		$pb_price=$pb_price;
	

	
		 //add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));

			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
					'customer' => $customer->id,
					'amount'   => round($bundle_price),
					'currency' => $currency,
					'description' => $itemName,
					'metadata' => array(
						'order_id' => $order_id
					)
			));
			
			 /*$charge = \Stripe\Charge::create([
                  "amount" =>  round($bundle_price),
                  'currency' => $currency,
                  "source" => "tok_visa",
                  "transfer_data" => [
                    "amount" => round($pb_price),
                     "destination" =>$stipe_account_id,
                  ],
                  'metadata' => array(
						'order_id' => $order_id
					)
                ]);*/
                
               // print_r($charge); die;
			
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
					"status"=> "1",
					"order_number"=>$chargeJson['balance_transaction'],
					"charge_id"=>$chargeJson['id']
				);
				$update_records = $this->order_process_m->order_update_after_payment($order_id,$records);
			    
			    if ($chargeJson['id']) {
			    	//$nuew = 100;
			    	$this->stripe_To_Tw($bundle_price, $currency);
			    }
				
				if($update_records){
					$msg = 'pay_success';
					return $msg;
				}else{
					$msg = 'pay_failed';
					return  $msg; 
				}
			}
	}

	public function email_to_smb($smbzz_email,$smb_name,$order_id,$currency,$total_price,$pdfFilePath,$invoice_attach,$sme_id){

		 $subject="Order (No. ".$order_id.", ".$currency." ".number_format($total_price,2).") Received-ProtectBox";
		 $smbData=$this->order_process_m->fetch_sme($sme_id);
		 $smb_company=$smbData->company_name;
		 $order_message = $this->emailtemplate->smb_order_bundle($smbzz_email,$smb_name,$order_id,$currency,$total_price,$smb_company);
		
		 $this->load->library('email');
		 $this->email->set_newline("\r\n");
		 $this->email->set_crlf( "\r\n" );

		 $this->email->from('noreply@protectbox.com','Protectbox');
		 //$this->email->to($smbzz_email);
		 $this->email->to('support@clickrstop.com');
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
				$supplier_Name = $supplier_info->company_name;

				//$subject_admin = "Order (No. ".$order_id.", ".$currency." ".number_format($total_price,2).") Received-ProtectBox";

				$subject_admin = "Order (No. ".$order_id.", ".$currency." ".number_format($total_price,2).") Received-ProtectBox";

				$smbData=$this->order_process_m->fetch_sme($sme_id);
				$smbfull_name=$smbData->firstname.''.$smbData->lastname;
				$smb_company=$smbData->company_name;

				$order_message_supplier = $this->emailtemplate->supplier_order_bundle($email,$smb_name,$order_id,$currency,$service_price,$sme_id,$supplier_Name,$smbfull_name,$smb_company);
				
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->set_crlf( "\r\n" );

				$this->email->from('noreply@protectbox.com','Protectbox');
				 //$email_to = $supplier_email;
				//$email_to = 'debashisnath1992@gmail.com';
				$this->email->to($email);
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

		foreach($get_admins as $fetch_admin){

			$admin_fullname = ucfirst($fetch_admin->firstname) ." ". ucfirst($fetch_admin->lastname);
			$admin_email = $fetch_admin->email;

			$subject_admin = "Order (No. ".$order_id.", ".number_format($total_price,2)." ".$total_price.") Received";

			$smbData=$this->order_process_m->fetch_sme($sme_id);
			$smbfull_name=$smbData->firstname.''.$smbData->lastname;
			$smb_company=$smbData->company_name;

			$order_message_admin = $this->emailtemplate->smb_order_bundle_admin($admin_fullname,$smbzz_email,$smb_name,$order_id,$currency,$total_price,$sme_id,$smb_company);
		
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->set_crlf( "\r\n" );
			$this->email->from('noreply@protectbox.com','Protectbox');
			$this->email->to($admin_email);
			$this->email->subject($subject_admin);
			$this->email->message($order_message_admin);
			$this->email->set_mailtype("html"); 
			 
			$this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
			$admin_email_send = $this->email->send();
		}
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
			$fetch_service_data = $this->order_process_m->fetch_service($data['order_data']->supplier_service_id);
			//echo '<pre>'; print_r($fetch_service_data->service_name); die();
		/* Order Details Ends */
		
		/* Generate Invoice starts */
			$html = $this->load->view('invoice_email_td_uk',$data,TRUE);			//load the pdf_output.php by passing our data and get all data in $html varriable.
			$pdfFilePath ="Invoice-".time()."-download.pdf"; 						//this the the PDF filename that user will get to download
			$pdf = $this->m_pdf->load();											//actually, you can pass mPDF parameter on this load() function
			$pdf->WriteHTML((utf8_encode($html)));									//generate the PDF!
			$invoice_attach = $pdf->Output('', 'S');								// Saving pdf to attach to email 
		/* Generate Invoice ends */

		 $subject="Order received for Amount ".$data['order_data']->currency." ".number_format($service_price,2)."";
		 $order_message = $this->emailtemplate->techdata_uk_orders($fetch_sme_data->email,$smb_name,$order_id,$data['order_data']->currency,$service_price,$data['order_data']->sme_id,$fetch_service_data->supplier_name,$fetch_service_data->service_name,$fetch_service_data->manuf,$fetch_sme_data->company_name);
		
		
		 $this->load->library('email');
		 $this->email->set_newline("\r\n");
		 $this->email->set_crlf( "\r\n" );

		 $this->email->from('support@clickrstop.com','Protectbox');
		 $this->email->to($fetch_sme_data->email);
		 //$this->email->to('debashisnath1992@gmail.com');
		 $this->email->subject($subject);
		 $this->email->message($order_message);
		 $this->email->set_mailtype("html"); 

		 $this->email->attach($invoice_attach, 'attachment', $pdfFilePath, 'application/pdf');
		 $smb_email = $this->email->send();

		 return true;
	}

	public function order_techdata_api($order_id){	//$order_id
		//$order_id = 24;
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
		
		/* CU Address Starts */
		$country = "UK";
		if($country == 'US'){
			$note = "";
		}else{
			$note = 'Freight Forwarder';
		}

		/* CU Address Ends */

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://connect.cstenet.com/orders/api/v1/orders');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
		"{ \"pricingLevel\": \"CO\", \"currency\": \"".$td_order_data['service_currency']."\", \"lines\": [ { \"shortDescription\": \"Short description\", \"lineNumber\": \"100\", \"partNumber\": \"".$fetch_service_data->td_part."\", \"quantity\": 1, \"unitPrice\": ".$td_order_data['service_price'].", \"extendedPrice\": 3.98, \"serviceLevel\": { \"serviceLevelCode\": \"OT\", \"accountNumber\": \"\" } } ], \"notifications\": { \"reseller\": { \"emailAddress\": \"team@protectbox.com\", \"orderConfirmation\": false, \"deliveryConfirmation\": true, \"shipmentConfirmation\": true, \"orderCancelled\": true, \"newEstimatedShipDate\": false, \"backorder\": false, \"creditReview\": false, \"salesReview\": false, \"missedPlantCutoff\": false, \"missedCarrierPull\": false }, \"endUser\": { \"emailAddress\": \"TEST EMAIL\", \"orderConfirmation\": true, \"deliveryConfirmation\": true, \"shipmentConfirmation\": true } }, \"paymentInformation\": { \"contact\": \"ProtectBox\", \"paymentMethod\": \"".$td_order_data['payment_method']."\" }, \"endUserInformation\": { \"businessName\": \"ProtectBox\", \"contactPerson\": \"Kiran Bhagotra\", \"email\": \"team@protectbox.com\", \"phone\": \"TEST PHONE\", \"note\": \"".$note."\", \"address\": { \"name\": \"ProtectBox Ltd.\", \"addressline1\": \"6 Doagh Road,\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"UK\" } }, \"shipTo\": { \"accountNumber\": \"\", \"businessName\": \"ProtectBox\", \"contactPerson\": \"Maria Cots\", \"email\": \"mcots9437@gmail.com\", \"phone\": \"+44 7467 052794\", \"note\": \"".$note."\", \"address\": { \"name\": \"Maria Cots\", \"addressline1\": \"44 Coldbath Street\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"UK\" } }, \"soldTo\": { \"accountNumber\": \"\", \"businessName\": \"ProtectBox\", \"contactPerson\": \"Maria Cots\", \"email\": \"mcots9437@gmail.com\", \"phone\": \"+44 7467 052794\", \"note\": \"".$note."\", \"address\": { \"name\": \"Maria Cots\", \"addressline1\": \"44 Coldbath Street\", \"addressline2\": \"\", \"addressline3\": \"\", \"city\": \"Cleawater\", \"stateOrProvince\": \"FL\", \"postalCode\": \"33760\", \"country\": \"UK\" } }, \"endUserPO\": \"".$note."\", \"customerPO\": \"".$note."\", \"additionalNote\": \"".$note."\", \"customerNote\": \"".$note."\"}");

		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Accept: application/json';
		$headers[] = 'Authorization: Bearer '.$fetch_access_token->access_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result_prod_data = curl_exec($ch);

		curl_close($ch);
		
		$decode_json = json_decode($result_prod_data,TRUE);
		
		print_r($decode_json);
		echo "<br>"; die;

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
	
	/* function is used to check or create transferwise api */
	public function tw_profile($sup_fullname,$order_id,$sl_id){
		// $sup_fullname = 'Tech Data'; 
		// $order_id = '3';
		// $sl_id = '3';

		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();
		$api_token = '5f0f05cc-faf5-4c41-adfe-9554172066ee';			//9f9900f1-6dfc-44bd-8dba-67f92db76d73

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/profiles');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		
		$decode_json = json_decode($result,TRUE);
		/*print_r($decode_json);
		die;
		$transactionID=$this->order_process_m->data_transaction($order_id);
		if(isset($transactionID)){
		    $transactionID=$this->order_process_m->update_transactionStatus($transactionID->id,array('trans_trasaction_id'=>$decode_json[0]['id']));
		}*/
		$this->tw_quotes($sup_fullname,$order_id,$sl_id,$decode_json[0]['id'],$api_token);
	    
		

		curl_close($ch);
	}
	
	public function tw_quotes($sup_fullname,$order_id,$sl_id,$profile_id,$api_token){

		$this->load->model('sup_payment_details_m');
		$supplier_account_info = $this->sup_payment_details_m->supplier_details($order_id);
		$amount_paid = $supplier_account_info->seller_amount;
		

		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/quotes');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"profile\":$profile_id,\n          \"source\": \"GBP\",\n          \"target\": \"".$supplier_account_info->currency."\",\n          \"rateType\": \"FIXED\",\n          \"targetAmount\": $amount_paid,\n          \"type\": \"BALANCE_PAYOUT\"\n        }");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		//print_r($result);
		$decode_json = json_decode($result,TRUE);
		$this->tw_account($sup_fullname,$sl_id,$supplier_account_info->currency,$supplier_account_info->sort_code_gbp,$supplier_account_info->account_number_gbp,$supplier_account_info->iban_eur,$supplier_account_info->routing_number_usd,$supplier_account_info->account_number_usd,$supplier_account_info->account_type_usd,$profile_id,$api_token,$decode_json['id']);
		curl_close($ch);
//	print_r($decode_json);
	}
	
	public function tw_account($sup_fullname,$sl_id,$currency,$sort_code_gbp,$account_number_gbp,$iban_eur,$routing_number_usd,$account_number_usd,$account_type_usd,$profile_id,$api_token,$quote_id){
		
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/accounts');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// Dynamic account as per currency
		if($currency == 'GBP'){
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
						\"currency\": \"GBP\", \n
						\"type\": \"sort_code\", \n
						\"profile\": \"".$profile_id."\", \n
						\"accountHolderName\": \"".$sup_fullname."\",\n
						\"legalType\": \"PRIVATE\",\n
						\"details\": { \n
						\"sortCode\": \"".$sort_code_gbp."\", \n
						\"accountNumber\": \"".$account_number_gbp."\" \n
						} \n         }");

		}else if($currency == 'EUR'){
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
						\"currency\": \"EUR\", \n
						\"type\": \"sort_code\", \n
						\"profile\": \"".$profile_id."\", \n
						\"accountHolderName\": \"".$sup_fullname."\",\n
						\"legalType\": \"PRIVATE\",\n
						\"details\": { \n
						\"IBAN\": \"".$iban_eur."\" \n
						} \n         }");
		}else if($currency == 'USD'){
			curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n
						\"currency\": \"USD\", \n
						\"type\": \"sort_code\", \n
						\"profile\": \"".$profile_id."\", \n
						\"accountHolderName\": \"".$sup_fullname."\",\n
						\"legalType\": \"PRIVATE\",\n
						\"details\": { \n
						\"routingNumber\": \"".$routing_number_usd."\", \n
						\"accountNumber\": \"".$account_number_usd."\", \n
						\"accountType\": \"".$account_type_usd."\" \n	
						} \n         }");
		}

		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		
		curl_close($ch);
		$decode_json = json_decode($result,TRUE);
		//print_r($result);
		$recipient_account_id = $decode_json['id'];
		$this->tw_transfers($profile_id,$sl_id,$api_token,$recipient_account_id,$quote_id);
	}


	public function tw_transfers($profile_id,$sl_id,$api_token,$recipient_account_id,$quote_id){
		
		$this->load->model('sup_payment_details_m');
		$pay_date = date('Y-m-d');

		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();
		$uuid = $this->gen_uuid();			//Format: '71bc9946-b9c5-11e9-a2a3-2a2ae2dbcce4'
		
		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"targetAccount\": $recipient_account_id,   \n          \"quote\": $quote_id,\n          \"customerTransactionId\": \"".$uuid."\",\n          \"details\" : {\n              \"reference\" : \"to my friend\",\n              \"transferPurpose\": \"verification.transfers.purpose.pay.bills\",\n              \"sourceOfFunds\": \"verification.source.of.funds.other\"\n            } \n         }");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		$decode_json = json_decode($result,TRUE);
		//print_r($decode_json);
		curl_close($ch);
		
		$update_tw_array = array('pay_date' => $pay_date,'transaction_id' =>$uuid,'pay_method'=>'TransferWise','pay_status_respose'=>$decode_json['status'],'requested_by'=>'1','last_modified'=>$decode_json['created']);
		$update_trans = $this->sup_payment_details_m->update_trans($update_tw_array,$sl_id);

		$this->tw_fund_transfer($sl_id,$api_token,$decode_json['id']);
	}

	public function tw_fund_transfer($sl_id,$api_token,$transfer_id){

		$this->load->model('sup_payment_details_m');

		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers/'.$transfer_id.'/payments');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \n          \"type\": \"BALANCE\"   \n         }");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		$decode_json = json_decode($result);
		curl_close($ch);
		//print_r($decode_json);

		$update_tw_array = array('pay_status_respose'=>$decode_json->status);
		$update_trans = $this->sup_payment_details_m->update_trans($update_tw_array,$sl_id);

		$this->tw_transfer_status($api_token,$transfer_id);
	}

	public function tw_transfer_status($api_token,$transfer_id){
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.transferwise.tech/v1/transfers/'.$transfer_id);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


		$headers = array();
		$headers[] = 'Authorization: Bearer '.$api_token;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		echo '<pre>';
		print_r($result);die;
	}


	/* GENERATES UUID FOR EACH TRANSACTION STARTS */
	public function gen_uuid() {

		return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			// 32 bits for "time_low"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

			// 16 bits for "time_mid"
			mt_rand( 0, 0xffff ),

			// 16 bits for "time_hi_and_version",
			// four most significant bits holds version number 4
			mt_rand( 0, 0x0fff ) | 0x4000,

			// 16 bits, 8 bits for "clk_seq_hi_res",
			// 8 bits for "clk_seq_low",
			// two most significant bits holds zero and one for variant DCE1.1
			mt_rand( 0, 0x3fff ) | 0x8000,

			// 48 bits for "node"
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
		);
	}
	
	
	public function xero_integration()
		{
		    
		    $smbzz_email='arpita.yadav@yashco.com';
		    $supplier_email='aarohiyadav29@gmail.com';
		    $total_price=50;
		    $total_supplier_price=100;
		    $val=10;

			define ( 'BASE_PATH', dirname(__FILE__) );
			define ( "XRO_APP_TYPE", "Private" );
			define ( "OAUTH_CALLBACK", "oob" );
			$useragent = "Protectbox_private";
		//	require_once(FCPATH .'lib/xero_library/tests/testRunner.php');
			
			
			
		

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
			
		
    
			
		

			$initialCheck = $XeroOAuth->diagnostics();
			echo '<pre>';
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
    
    
    /* refund request */
    function stripe_refund($order_id,$transaction_id){
        
        $orderData = $this->order_process_m->fetch_order_data($order_id);
        $productData = $this->order_process_m->fetch_order_product($product_id);
        
        $refund=\Stripe\Refund::create([
             'charge' => 'ch_1G1rceHrhq7Km0XcSLgXFQwC',
             'amount'=>$productData->seller_amount,
             'currency'=>$orderData->currency
        ]);
        
        $refundJson = $refund->jsonSerialize();
        
       if(isset($refundJson['status'])){
           if($refundJson['status']=='succeeded'){
                $productData = $this->order_process_m->update_transactionStatus($transaction_id,array('pay_status'=>'Refund_completed','transaction_id'=>$refundJson['balance_transaction']));
                $productData = $this->order_process_m->order_update_after_payment($order_id,array('sup_payment_status'=>'Refund_completed'));
                   // supplier_transaction  =pay_status
                  //  order=sup_payment_status
                    //refund table remain
                    
           }
            redirect(base_url().'sales/sales_details/'.$order_id);
       }
        
       
        
      
        
    }
    
    function retrive_refund(){
     // $retrive=  \Stripe\Refund::retrieve(
        //      're_1G1qM8Hrhq7Km0XcMih5seWp'
       //     );
       $retrive=  \Stripe\Refund::all(['limit' => 3]);    
         echo '<pre>';
        print_r($retrive);    
    }
    
}
?>