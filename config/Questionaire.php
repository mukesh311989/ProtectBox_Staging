<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*include("sageone/sageone_constants.php");
include("sageone/SageoneClient.php");
include("sageone/SageoneSigner.php");*/
include("lib/XeroOAuth.php");
class Questionaire extends CI_Controller {

    
    function __construct(){
        parent::__construct();

        $this->load->library('Emailtemplate');	
		$this->load->library('Invoice_template');	
		$this->load->library('session');
		$this->load->library('table');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }

	define("CLIENT_ID", "3MVG95NPsF2gwOiPJ2VWkhIaH79D5VY23u1cRuFB7ORFWkAb.x_7dB4aVo2ng07RXnbSeuocCPHCZDOsdCKHA");
	define("CLIENT_SECRET", "685F40579805F06ECEB321F0A58A18F926CA2D531E6B1F1CFDE6C29ECDD5ECF9");
	define("REDIRECT_URI", "https://www.staging.protectbox.com/questionaire/callback");
	define("LOGIN_URI", "https://login.salesforce.com");
    }
	
    public function index()
    {
	
        $this->load->model('questionaire_m');
		if(isset($this->session->userdata['sage']['service_yourdetails'])){
				$sage_service = $this->session->userdata['sage']['service_yourdetails'];
				$sage_contacts = $this->session->userdata['sage']['questionnaire_yourdetails'];
				$sage_products = $this->session->userdata['sage']['product_yourdetails'];
				$sage_business = $this->session->userdata['sage']['business_info'];
			
		}elseif(isset($this->session->userdata['salesforce']['service_account'])){
				$salesforce_account = $this->session->userdata['salesforce']['service_account'];
				$salesforce_contact = $this->session->userdata['salesforce']['service_contact'];
		}
		
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['basics_data'] = $this->questionaire_m->fetch_basic($user_id);
		$data['get_tech'] = $this->questionaire_m->tech_row($user_id);
		$data['get_non_tech'] = $this->questionaire_m->tech_non_tech($user_id);
		$data['get_budget'] = $this->questionaire_m->tech_budget($user_id);
		$data['progress'] = $this->progress();
		$data['del_access'] = $this->check_del_access($user_id);

		$data['northern_ireland'] = array(
			"IE" => "Ireland"	
		);

		$data['ireland'] = array(
			"IE" => "Ireland"	
		);

		$data['mainland_uk'] = array(
			"GB" => "United Kingdom"	
		);

		$data['europe_continental'] = array(
			"DE" => "Germany",	
			"CH" => "Switzerland",
			"LI" => "Liechtenstein",
			"AT" => "Austria",
			"MT" => "Malta",
			"IT" => "Italy",	
			"GR" => "Greece",
			"CY" => "Cyprus",
			"UK" => "Ukraine"
		);

		$data['north_america'] = array(
			"BM" => "Bermuda",
			"CA" => "Canada",
			"GL" => "Greenland",
			"PM" => "Saint Pierre and Miquelon",
			"US" => "United States"	
		);

		$data['central_america'] = array(
			"BZ" => "Belize",
			"CR" => "Costa Rica",
			"SV" => "El Salvador",
			"GT" => "Guatemala",
			"HN" => "Honduras",
			"MX" => "Mexico",
			"NI" => "Nicaragua",
			"PA" => "Panama"	
		);

		$data['south_america'] = array(
			"AR" => "Argentina",
			"BO" => "Bolivia",
			"BR" => "Brazil",
			"CL" => "Chile",
			"CO" => "Colombia",
			"EC" => "Ecuador",
			"FK" => "Falkland Islands",
			"GF" => "French Guiana",
			"GY" => "Guyana",
			"PY" => "Paraguay",
			"PE" => "Peru",
			"SR" => "Suriname",
			"UY" => "Uruguay",
			"VE" => "Venezuela"	
		);

		$data['africa'] = array(
			"DZ" => "Algeria",
			"AO" => "Angola",
			"BJ" => "Benin",
			"BW" => "Botswana",
			"BF" => "Burkina Faso",
			"BI" => "Burundi",
			"CM" => "Cameroon",
			"CV" => "Cape Verde",
			"CF" => "Central African Republic",
			"TD" => "Chad",
			"KM" => "Comoros",
			"CG" => "Congo - Brazzaville",
			"CD" => "Congo - Kinshasa",
			"CI" => "Côte d’Ivoire",
			"DJ" => "Djibouti",
			"EG" => "Egypt",
			"GQ" => "Equatorial Guinea",
			"ER" => "Eritrea",
			"ET" => "Ethiopia",
			"GA" => "Gabon",
			"GM" => "Gambia",
			"GH" => "Ghana",
			"GN" => "Guinea",
			"GW" => "Guinea-Bissau",
			"KE" => "Kenya",
			"LS" => "Lesotho",
			"LR" => "Liberia",
			"LY" => "Libya",
			"MG" => "Madagascar",
			"MW" => "Malawi",
			"ML" => "Mali",
			"MR" => "Mauritania",
			"MU" => "Mauritius",
			"YT" => "Mayotte",
			"MA" => "Morocco",
			"MZ" => "Mozambique",
			"NA" => "Namibia",
			"NE" => "Niger",
			"NG" => "Nigeria",
			"RW" => "Rwanda",
			"RE" => "Réunion",
			"SH" => "Saint Helena",
			"SN" => "Senegal",
			"SC" => "Seychelles",
			"SL" => "Sierra Leone",
			"SO" => "Somalia",
			"ZA" => "South Africa",
			"SD" => "Sudan",
			"SZ" => "Swaziland",
			"ST" => "São Tomé and Príncipe",
			"TZ" => "Tanzania",
			"TG" => "Togo",
			"TN" => "Tunisia",
			"UG" => "Uganda",
			"EH" => "Western Sahara",
			"ZM" => "Zambia",
			"ZW" => "Zimbabwe",	
		);

		$data['middle_east_uae'] = array();

		$data['middle_east_israel'] = array(
			"IL" => "ISRAEL"	
		);

		$data['russia'] = array(
			"RU" => "Russia"	
		);

		$data['south_asia'] = array(
			"AF" => "Afghanistan",
			"BD" => "Bangladesh",
			"BT" => "Bhutan",
			"IN" => "India",
			"IR" => "Iran",
			"MV" => "Maldives",
			"NP" => "Nepal",
			"PK" => "Pakistan",
			"LK" => "Sri Lanka",	
		);

		$data['south_east_asia'] = array(
			"BN" => "Brunei",
			"KH" => "Cambodia",
			"ID" => "Indonesia",
			"LA" => "Laos",
			"MY" => "Malaysia",
			"MM" => "Myanmar [Burma]",
			"PH" => "Philippines",
			"SG" => "Singapore",
			"TH" => "Thailand",
			"TL" => "Timor-Leste",
			"VN" => "Vietnam"
		);

		$data['south_pacific'] = array(
			"AS" => "American Samoa",
			"AU" => "Australia",
			"CK" => "Cook Islands",
			"FJ" => "Fiji",
			"GU" => "Guam",
			"ID" => "Indonesia",
			"KI" => "Kiribati",
			"MP" => "Mariana Islands",
			"FM" => "Micronesia",
			"NR" => "Nauru",
			"NC" => "New Caledonia",
			"NZ" => "New Zealand",
			"NF" => "Norfolk Island",
			"PW" => "Palau",
			"PG" => "Papua New Guinea",
			"WS" => "Samoa",
			"SB" => "Solomon Islands",
			"TK" => "Tokelau",
			"TO" => "Tonga",
			"TV" => "Tuvalu",
			"VU" => "Vanuatu",
		);

        $this->load->view('questionaire',$data);
    }

	public function progress(){
		$user_id = $this->session->userdata['logged_in']['user_id'];	
		$this->load->model('questionaire_m');
		$get_info_progress_tab_one = $this->questionaire_m->progress_tab_one($user_id);
		if(isset($this->session->userdata['progress_data'])){
			$pro_quest_tab_score = $this->session->userdata['progress_data'];
		}else{
			$pro_quest_tab_score = 0;
		}
		$q1 = 0;
		$q2 = 0;
		$q3 = 0;
		$q4 = 0;
		$q5 = 0;
		$q6 = 0;
		$q7 = 0;
		$q8 = 0;
		$q9 = 0;
		if($get_info_progress_tab_one->industry_input != ""){$q1 = 1.67;}
		if($get_info_progress_tab_one->employees_input != ""){$q2 = 1.67;}
		if($get_info_progress_tab_one->location_input != ""){$q3 = 1.67;}
		if($get_info_progress_tab_one->location_business_input != ""){$q4 = 1.67;}
		if($get_info_progress_tab_one->handle_data_input != ""){$q5 = 1.67;}
		if($get_info_progress_tab_one->individuals_input != ""){$q6 = 1.67;}
		if($get_info_progress_tab_one->sme_business_input != ""){$q7 = 1.67;}
		if($get_info_progress_tab_one->enterprise_input != ""){$q8 = 1.67;}
		if($get_info_progress_tab_one->governments_input != ""){$q9 = 1.67;}
		
		$pro_data = round($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9);
		$check_pro_exists = $this->questionaire_m->progress_check($user_id);
		if($check_pro_exists < 1){
			$add_prog_onetab = array(
				'user_id' => $user_id,
				'tab_one' => $pro_data,
				'tab_two' => '',
				'tab_three' => '',
				'tab_four' => ''
			);
			$inset_progress_tabone = $this->questionaire_m->progress_add_tabone($add_prog_onetab);
		}else{
			$add_prog_onetab = array(
				'tab_one' => $pro_data
			);
			$inset_progress_tabone = $this->questionaire_m->progress_update_tabone($add_prog_onetab,$user_id);
		}
		if($inset_progress_tabone){
			$get_data_progress = $this->questionaire_m->view_prog_data($user_id);
		}

		return $get_data_progress;
	}
	
    public function add_info()
    {
        $this->load->model('questionaire_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];

        $industry = $this->input->post('industry');
        $method = $this->input->post('method');
		$update_user = $this->questionaire_m->user_update($method,$user_id);
		
        
      
        if($industry == 'Computer and Electronics' || $industry == 'Manufacturing' || $industry == 'Retail' || $industry == 'Wholesale and Distribution')
        {
           $industry_score = "1";
        }
        else if($industry == 'Government')
        {
           $industry_score = "2";
        }
        else if($industry == 'Business Services' || $industry == 'Financial Services')
        {
           $industry_score = "3";
        }
        else if($industry == 'Agriculture and Mining' || $industry == 'Consumer Services' || $industry == 'Education' || $industry == 'Energy' || $industry == 'Health, Pharmaceuticals, and Biotech' || $industry == 'Media and Entertainment' || $industry == 'Non-profit' || $industry == 'Real Estate and Construction' || $industry == 'Software and Internet' || $industry == 'Telecommunications' || $industry == 'Transportation and Storage' || $industry == 'Travel Recreation and Leisur' || $industry == 'Other-profit')
        {
           $industry_score = "4";
        }
        
        $employees = $this->input->post('employees');
		if(!empty($this->input->post('located'))){
			$located = implode(",",$this->input->post('located'));
		}else{
			$located = "";
		}
		if(!empty($this->input->post('location_business'))){
			$location_business = implode(",",$this->input->post('location_business'));
		}else{
			$location_business = "";
		}
		if($this->input->post('budget_individual') == '')
		{
			$budget_individual = "";
		}else{
			$budget_individual = $this->input->post('budget_individual');
		}

		if($this->input->post('sme') == '')
		{
			$sme = "";
		}else{
			$sme = $this->input->post('sme');
		}

		if($this->input->post('enterprise') == '')
		{
			$enterprise = "";
		}else{
			$enterprise = $this->input->post('enterprise');
		}

		if($this->input->post('governments') == '')
		{
			$governments = "";
		}else{
			$governments = $this->input->post('governments');
		}

        $date = time();
        $total_added_score = $industry_score;

		
        $records = array(
                            'user_id' => $user_id,
                            'industry_input' => $industry,
                            'industry_score' => $industry_score,
                            'employees_input' => $employees,
                            'employees_score' => "",
                            'location_input' => $located,
                            'location_score' => "",
                            'location_business_input' => $location_business,
                            'location_business_score' => "",
                            'handle_data_input' => $this->input->post('handle_data'),
                            'handle_data_score' => "",
                            'individuals_input' => $budget_individual,
                            'individuals_score' => "",
                            'sme_business_input' => $sme,
                            'sme_business_score' => "",
                            'enterprise_input' => $enterprise,
                            'enterprise_score' => "",
                            'governments_input' => $governments,
                            'governments_score' => "",
                            'total_score'=> $total_added_score,
                            'date' => $date
                        );

		if($this->input->post('save_continue') == 'skip')
		{
			if($industry == NULL)
			{
				$check_1a_res = $this->questionaire_m->check_1a_res($user_id);
				if(!empty($check_1a_res))
				{
					$industry_1a_res = 'exist';
				}else{
					$industry_1a_res = '1';
				}
			}else{
				$industry_1a_res = 'exist';
			}

			if($employees == NULL)
			{
				$check_1b_res = $this->questionaire_m->check_1b_res($user_id);
				if(!empty($check_1b_res))
				{
					$employees_1b_res = 'exist';
				}else{
					$employees_1b_res = '1';
				}
			}else{
				$employees_1b_res = 'exist';
			}

			if($located == NULL)
			{
				$check_2a_res = $this->questionaire_m->check_2a_res($user_id);
				if(!empty($check_2a_res))
				{
					$located_2a_res = 'exist';
				}else{
					$located_2a_res = '1';
				}
			}else{
				$located_2a_res = 'exist';
			}

			if($location_business == NULL)
			{
				$check_2b_res = $this->questionaire_m->check_2a_res($user_id);
				if(!empty($check_2b_res))
				{
					$location_business_2b_res = 'exist';
				}else{
					$location_business_2b_res = '1';
				}
			}else{
				$location_business_2b_res = 'exist';
			}

			if($this->input->post('handle_data') == NULL)
			{
				$check_3_res = $this->questionaire_m->check_3_res($user_id);
				if(!empty($check_3_res))
				{
					$handle_data_3_res = 'exist';
				}else{
					$handle_data_3_res = '1';
				}
			}else{
				$handle_data_3_res = 'exist';
			}

			if($industry_1a_res == 'exist' && $employees_1b_res == 'exist' && $located_2a_res == 'exist' && $location_business_2b_res == 'exist' && $handle_data_3_res == 'exist')
			{
				$check_row = $this->questionaire_m->row_check($user_id);
				if($check_row > 0)
				{
					$update_data = $this->questionaire_m->data_update($records,$user_id);
					redirect('questionaire_tech_info');
				}else{
					$insert_data = $this->questionaire_m->data_insert($records);
					redirect('questionaire_tech_info');
				}
			}else{
				$array = array(
							'industry_1a_res' => $industry_1a_res,
							'employees_1b_res' => $employees_1b_res,
							'located_2a_res' => $located_2a_res,
							'location_business_2b_res' => $location_business_2b_res,
							'handle_data_3_res' => $handle_data_3_res
						  );
				$this->session->set_flashdata("skip_flash", $array);
				redirect('questionaire');
			}
		}
		
		
        $check_row = $this->questionaire_m->row_check($user_id);
        if($check_row > 0)
        {
            $update_data = $this->questionaire_m->data_update($records,$user_id);
            if($update_data)
            {
                if($this->input->post('save_continue') == "continue" || $this->input->post('save_continue') == "skip")
                {
                    //$this->session->set_flashdata("update", "Success , Your basics updated successfully!");
                    redirect('questionaire_tech_info');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
                
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
                redirect('questionaire');
            }
        }else{
            $insert_data = $this->questionaire_m->data_insert($records);
            if($insert_data)
            {
				
                if($this->input->post('save_continue') == "continue" || $this->input->post('save_continue') == "skip")
                {
                    //$this->session->set_flashdata("update", "Success , Your basics updated successfully!");
                    redirect('questionaire_tech_info');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
                redirect('questionaire');
            }
        }
    }

	public function callback()
	{
		 $this->load->model('questionaire_m');
		$email = $this->session->userdata['logged_in']['email'];
		session_start();
		$token_url = LOGIN_URI . "/services/oauth2/token";
		$code = $_GET['code'];
		if (!isset($code) || $code == "") {

			die("Error - code parameter missing from request!");
		}
		$params = "code=" . $code

			. "&grant_type=authorization_code"

			. "&client_id=" . CLIENT_ID

			. "&client_secret=" . CLIENT_SECRET

			. "&redirect_uri=" . urlencode(REDIRECT_URI);

		$curl = curl_init($token_url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
		$json_response = curl_exec($curl);

		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if ( $status != 200 ) {

			die("Error: call to token URL $token_url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
		}
		curl_close($curl);
		$response = json_decode($json_response, true);
		$access_token = $response['access_token'];
		$instance_url = $response['instance_url'];
		
		/* all contact details from sales force */
		$query = "SELECT Id,Country,Department,Division,EmployeeNumber FROM User WHERE Email = '".$email."'";
		$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER,
		array("Authorization: OAuth $access_token"));
		$json_response = curl_exec($curl);
		curl_close($curl);
		$response = json_decode($json_response, true);
		//print_r($response);
		//echo "<br\>";
		//exit;

		foreach($response AS $each_response){
			$id = $each_response[0]['Id'];
			$country = $each_response[0]['Country'];
			$department = $each_response[0]['Department'];
			$division = $each_response[0]['Division'];
			$employee_number = $each_response[0]['EmployeeNumber'];
		}


			
		/* all orderitem data from salesforce */	
		$query = "SELECT OrderId,Pricebookentry.Product2Id FROM OrderItem";
		$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER,
		array("Authorization: OAuth $access_token"));
		$json_response = curl_exec($curl);
		curl_close($curl);
		$response_feed = json_decode($json_response, true);
		$get_product_feed = $response_feed['records'];

	
		
	
		foreach ($get_product_feed As $item_desc)
		{
			$item_id[] = $item_desc['PricebookEntry']['Product2Id'];
			$item_id['order_id'][] = $item_desc['OrderId'];
			
		}


	/* all Product data from salesforce */	
		foreach($item_id As $sale_id)
		{
		
			$query = "SELECT Name FROM Product2 WHERE Id ='".$sale_id."'";
			//$query = "SELECT Name FROM Product2";
			$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER,
			array("Authorization: OAuth $access_token"));
			$json_response = curl_exec($curl);
			curl_close($curl);
			$response1 = json_decode($json_response, true);
			$product_details[] = $response1['records'][0]['Name'];
		}
		//$product = array();
		//$product['import_system'] = "salesforce";
		foreach($product_details As $product_response)
		{
			$product[] = $product_response;
			
		}
		$type = "salesforce";
		
		$this->get_invoice($product,$item_id,$access_token,$instance_url,$country,$department,$division,$employee_number,$type);
			
	}




	

	public function add_delegate()
    {
        $this->load->model('manage_delegates_m');
    	$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
		$this->load->model('questionaire_m');
        $this->load->model('profile_m');

        $delegate_email = $this->input->post('delegate_mail');
    	$user_id = $this->session->userdata['logged_in']['user_id'];
    	$delegate_key = rand(10000000,99999999);
    	$date = time();

        $check_delegate_email = $this->manage_delegates_m->get_access($delegate_email,$user_id);
    	if(!empty($check_delegate_email)){
    		// Same delegate email cannot be added
    		$this->session->set_flashdata("del_failed", "This account holder or delegate user already exists as a username. Please either log in using that username or set up a new, different username.");
			redirect('questionaire');
    	}else{
    		// Giving access to the new delegate
    		$get_admins = $this->signup_m->get_admins();
    		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
				if(!empty($check_delegate_main)){
					if($check_delegate_main->user_type == 'Small and medium business'){
						$delegate_type = 'sme_with';
					}else if($check_delegate_main->user_type == 'Supplier'){
						$delegate_type = 'supplier_with';
					}else if($check_delegate_main->user_type == 'admin'){
						$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
						redirect('questionaire');
					}
					$delegate_array = array('user_id' => $check_delegate_main->user_id, 'sme_id' => $user_id,"delegate_type" => $delegate_type, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'active', 'date' => $date);
					$del_name = $check_delegate_main->firstname . " " . $check_delegate_main->lastname;
					$insert_delegate = $this->signup_m->add_delegate($delegate_array);

					$all_array = array("user_id"=> $check_delegate_main->user_id,"sme_id"=> $user_id);
					$insert_all = $this->delicate_signup_m->insert_all($all_array);

					$fullname = $firstname.' '.$lastname;

					$del_message = $this->emailtemplate->deligate_questioniare_basics_else_email($delegate_email,$del_name,$fullname,$delegate_key);
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('noreply@protectbox.com', 'ProtectBox');
					$this->email->to($delegate_email); 

					$this->email->subject('deligate_questioniare_basics_else_email');
					$this->email->message($del_message);    

					$okay = $this->email->send();

					//admin email starts
					foreach($get_admins as $fetch_admin){
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($admin_email); 

						$this->email->subject('New Delegate Registration | ProtectBox');
						$this->email->message($admin_message);    

						$okay = $this->email->send();
					}
					//admin email ends

					$this->session->set_flashdata("del_first_success", "You have successfully sent an invitation to a delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to login as a delegate user to complete the question.");
					redirect('questionaire');
				}else{
					$del_records = array(
						"sme_id" => $user_id,
						"delicate_email" => $delegate_email,
						"delicate_key" => $delegate_key, 
						"delegate_type" => 'sme_without',
						"status" => 'inactive',
						"date" => $date
					);
					$save_data = $this->questionaire_m->save_delicate($del_records);
					$this->load->library('email');
					$this->email->set_mailtype("html");

					$fetch_sme = $this->questionaire_m->get_sme($user_id);
					$firstname = $fetch_sme->firstname;
					$lastname = $fetch_sme->lastname;
					$fullname = $firstname.' '.$lastname;
					
					$basic_if_message = $this->emailtemplate->deligate_questioniare_basics_if_email($delegate_email,$fullname,$delegate_key);

					$this->email->from('noreply@protectbox.com', 'Protectbox');
					$this->email->to($delegate_email); 

					$this->email->subject('Delegate User Request-ProtectBox');
					$this->email->message($basic_if_message);    

					$okay = $this->email->send();

					//admin email starts
					foreach($get_admins as $fetch_admin){
						$del_name = '';
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($admin_email); 

						$this->email->subject('New Delegate Registration | ProtectBox');
						$this->email->message($admin_message);    

						$okay = $this->email->send();
					}
					//admin email ends
					$this->session->set_flashdata("del_success", "You have successfully sent an invitation to a new delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to register to complete the question.");
					redirect('questionaire');
				}
    	}
		
    }

	public function delegate_assign()
	{
		$this->load->model("questionaire_m");
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$delegate_id = $this->input->post('del');
		$key = $this->input->post('key');
		$update_array = $this->input->post('update_array');

		$fetch_del_user = $this->questionaire_m->fetch_del_user($user_id,$delegate_id);
		$access_array = explode(",",$fetch_del_user->access);

		$get_del_info = $this->questionaire_m->fetch_delegate_info($delegate_id);
		$delegate_mail = $get_del_info->email;
		$del_name = $get_del_info->firstname.' '.$get_del_info->lastname;

		$username = $this->session->userdata['logged_in']['name'];
		
		if (!in_array("basic", $access_array))
		{
			array_push($access_array,"basic");
			$main_array = implode(",",$access_array);
			$update_del_user = $this->questionaire_m->update_del_user($main_array,$delegate_id);
		}
		
		$save_del_accss = $this->questionaire_m->sav_del_acs($update_array);
		
		if($key == 'industry_input')
		{
		?>
			<select class="form-control del_industry"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'industry_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_m->fetch_delegate_info($user_id);
			 if(count($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(count($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->industry_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_m->get_assign_del($user_id);
		  if(count($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->industry_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(count($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }

		  $this->email_send_delegate($delegate_email,$del_name,$username);

		}/* industry input ends */
		else if($key == 'employees_input'){
		?>
			<select class="form-control del_employees"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'employees_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_m->fetch_delegate_info($user_id);;
			 if(count($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(count($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->employees_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
			  }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_m->get_assign_del($user_id);
		  if(count($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->employees_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(count($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		} /* employee input ends */
		else if($key == 'location_input'){
		?>
			<select class="form-control del_location"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'location_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_m->fetch_delegate_info($user_id);;
			 if(count($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(count($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->location_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
			  }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_m->get_assign_del($user_id);
		  if(count($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->location_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(count($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		} /* location ends */
		else if($key == 'handle_data_input'){
		?>
			<select class="form-control del_supply"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'handle_data_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_m->fetch_delegate_info($user_id);;
			 if(count($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(count($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->handle_data_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
			  }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_m->get_assign_del($user_id);
		  if(count($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->handle_data_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(count($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}/* handle data input ends */
		
		
	}

	public function email_send_delegate($delegate_email,$del_name,$username){	
		$this->load->library('email');
		$this->email->set_mailtype("html");
		
		$assign_message = $this->emailtemplate->deligate_assign_question($delegate_email,$del_name,$username);

		$this->email->from('noreply@protectbox.com', 'Protectbox');
		$this->email->to($delegate_email); 

		$this->email->subject('New question assigned-ProtectBox');
		$this->email->message($assign_message);    

		$okay = $this->email->send();
	}

	public function check_del_access($user_id){	
		$this->load->model('questionaire_m');
		$get_question_access_val = $this->questionaire_m->fetch_delegate_access_val($user_id);
		return $get_question_access_val;
	}


	public function import_xero()
	{
		

		define ( 'BASE_PATH', dirname(__FILE__) );

		/**
		 * Define which app type you are using:
		 * Private - private app method
		 * Public - standard public app method
		 * Public - partner app method
		 */
		define ( "XRO_APP_TYPE", "Public" );
		$useragent = "ProtectBox";
		define ( "OAUTH_CALLBACK", 'https://www.staging.protectbox.com/questionaire/import_xero' );

		require_once(BASE_PATH .'/tests/testRunner.php');

	$signatures = array (
		'consumer_key' => 'J5Y1V3YLFAIWJUSMCUFONZP40NFWPF',
		'shared_secret' => 'Y3CGIN2WIL6G7AQTQY4IDVOX6CWZVP',
		// API versions
		'core_version' => '2.0',
		'payroll_version' => '1.0',
		'file_version' => '1.0' 
	);

	if (XRO_APP_TYPE == "Private" || XRO_APP_TYPE == "Partner") {
	$signatures ['rsa_private_key'] = BASE_PATH . '/certs/privatekey.pem';
	$signatures ['rsa_public_key'] = BASE_PATH . '/certs/publickey.cer';
	}

	if (XRO_APP_TYPE == "Partner") {
		$signatures ['curl_ssl_cert'] = BASE_PATH . '/certs/entrust-cert-RQ3.pem';
		$signatures ['curl_ssl_password'] = '1234';
		$signatures ['curl_ssl_key'] = BASE_PATH . '/certs/entrust-private-RQ3.pem';
	}

	$XeroOAuth = new XeroOAuth ( array_merge ( array (
		'application_type' => XRO_APP_TYPE,
		'oauth_callback' => OAUTH_CALLBACK,
		'user_agent' => $useragent 
	), $signatures ) );
		
$initialCheck = $XeroOAuth->diagnostics ();
$checkErrors = count ( $initialCheck );
if ($checkErrors > 0) {
	// you could handle any config errors here, or keep on truckin if you like to live dangerously
	foreach ( $initialCheck as $check ) {
		echo 'Error: ' . $check . PHP_EOL;
	}
} else {
	
	$here = XeroOAuth::php_self ();
	session_start ();
	$oauthSession = retrieveSession (); 
	
	require_once(BASE_PATH .'/tests/tests.php');
		if($this->input->get('authenticate') != '')
		{
				$params = array (
			'oauth_callback' => OAUTH_CALLBACK 
			);
		
			$response = $XeroOAuth->request ( 'GET', $XeroOAuth->url ( 'RequestToken', '' ), $params );
			
			if ($XeroOAuth->response ['code'] == 200) {
				
				$scope = "";
				// $scope = 'payroll.payrollcalendars,payroll.superfunds,payroll.payruns,payroll.payslip,payroll.employees,payroll.TaxDeclaration';
				print_r ( $XeroOAuth->extract_params ( $XeroOAuth->response ['response'] ) );
				$_SESSION ['oauth'] = $XeroOAuth->extract_params ( $XeroOAuth->response ['response'] );
				
				$authurl = $XeroOAuth->url ( "Authorize", '' ) . "?oauth_token={$_SESSION['oauth']['oauth_token']}&scope=" . $scope;
				//echo '<p>To complete the OAuth flow follow this URL: <a href="' . $authurl . '">' . $authurl . '</a></p>';
				header ( "Location: {$authurl}" );
			} else {
				outputError ( $XeroOAuth );
			}
		}

	
	
	if($this->input->get('oauth_verifier') != '')
	
	{
		$oauth = $this->input->get('oauth_verifier');
		$oauth_token = $this->input->get('oauth_token');
		$XeroOAuth->config ['access_token'] = $_SESSION ['oauth'] ['oauth_token'];
		$XeroOAuth->config ['access_token_secret'] = $_SESSION ['oauth'] ['oauth_token_secret'];
		$code = $XeroOAuth->request ( 'GET', $XeroOAuth->url ( 'AccessToken', '' ), array (
				'oauth_verifier' => $oauth,
				'oauth_token' => $oauth_token 
		));
		

		if ($XeroOAuth->response ['code'] == 200) {
			
			$response = $XeroOAuth->extract_params($XeroOAuth->response ['response']);
			$session = persistSession ($response);
			unset ( $_SESSION['oauth'] );
			header ( "Location: {$here}" );
		} 
		else {
			outputError ( $XeroOAuth );
		}
	}
	if($oauthSession['oauth_token'] != '')
	{
		$XeroOAuth->config['access_token']  = $oauthSession['oauth_token'];
		$XeroOAuth->config['access_token_secret'] = $oauthSession['oauth_token_secret'];
		$XeroOAuth->config['session_handle'] = $oauthSession['oauth_session_handle'];

		//Xero Contacts Fetch
		/*$response = $XeroOAuth->request('GET', $XeroOAuth->url('Contacts', 'core'), array());
		if ($XeroOAuth->response['code'] == 200) {
         $contacts = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
		 //print_r ($contacts->Contacts);
		 foreach($contacts->Contacts As $xero_contact)
			{
				//print_r($xero_contact);
				//echo "<br/>";
			}
       

           } else {
               outputError($XeroOAuth);
           }*/

		//Xero Accounts Fetch
		  /*$response = $XeroOAuth->request('GET', $XeroOAuth->url('Accounts', 'core'), array('Where' => $_REQUEST['where']));
			if ($XeroOAuth->response['code'] == 200) {
            $accounts = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
			//print_r($accounts->Accounts );
			foreach($accounts->Accounts As $xero_account)
			{
				//print_r($xero_account);
				//echo "<br/>";
			}
            
        } else {
            outputError($XeroOAuth);
        }*/

		//Xero Bankaccount Fetch

		/*$response = $XeroOAuth->request('GET', $XeroOAuth->url('BankTransactions', 'core'), array(), "", "xml");
	   if ($XeroOAuth->response['code'] == 200) {
		   $banktransactions = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
		   //print_r($banktransactions->BankTransactions);
		   foreach($banktransactions->BankTransactions As $xero_bnktrance)
		   {
			  //print_r($xero_bnktrance);
			   //echo "<br/>";
		   }
		  
		 }
	   } else {
		   outputError($XeroOAuth);
	   }*/


	   //Xero Payment Fetch

	      /*$response = $XeroOAuth->request('GET', $XeroOAuth->url('Payments', 'core'), array('Where' => 'Status=="AUTHORISED"'));
          if ($XeroOAuth->response['code'] == 200) {
              $payments = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
			 // print_r ($payments->Payments);
			  foreach($payments->Payments As $xero_payment)
			  {
				  //print_r($xero_payment);
					//echo "<br/>";
			  }
              
          } else {
              outputError($XeroOAuth);
          }*/

		//Xero Items Fetch

		   /*$response = $XeroOAuth->request('GET', $XeroOAuth->url('Items', 'core'), array());
           if ($XeroOAuth->response['code'] == 200) {
               $items = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
			   print_r($items->Items);
			   foreach($items->Items As $xero_item)
			   {
				   	print_r($xero_item);
					echo "<br/>";
			   }

           } else {
               outputError($XeroOAuth);
           }*/

		 //Xero Organisation Fetch
		 	 $response = $XeroOAuth->request('GET', $XeroOAuth->url('Organisation', 'core'), array(), $xml, 'json');
			 if($XeroOAuth->response['code'] == 200) {
				   $organisation = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
				   $json = json_decode(json_encode($organisation),true);
				  //$json['Organisations'][0]['LineOfBusiness'];
				   //exit;
				   /* Basic tab Starts*/
				   $this->session->userdata['xero']['country'] = $json['Organisations'][0]['CountryCode'];
				   $this->session->userdata['xero']['currency'] = $json['Organisations'][0]['BaseCurrency'];
				   $this->session->userdata['xero']['industry'] = $json['Organisations'][0]['LineOfBusiness'];
	
				  
			 }else{
				   outputError($XeroOAuth);
			 }




	        /* $response = $XeroOAuth->request('GET', $XeroOAuth->url('Invoices', 'core'), array('order' => 'Total DESC'));
            if ($XeroOAuth->response['code'] == 200) {
                $invoices = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
                echo "There are " . count($invoices->Invoices[0]). " invoices in this Xero organisation, the first one is: </br>";
               print_r ($invoices->Invoices);
           
            } else {
                outputError($XeroOAuth);
            }*/
			
	


	        $response = $XeroOAuth->request('GET', $XeroOAuth->url('Items', 'core'), array(),$xml, 'json');
           if ($XeroOAuth->response['code'] == 200) {
               $items = $XeroOAuth->parseResponse($XeroOAuth->response['response'], $XeroOAuth->response['format']);
			   $json = json_decode(json_encode($items),true);
			   //print_r($json);
               //echo "There are " . count($items->Items[0]). " items in this Xero organisation, the first one is: </br>";
               //echo $items->Items['IsPurchased'];
			   //print_r($items->Items);
				foreach($items->Items As $get_item)
			   {
					if($get_item->IsPurchased > 0)
				   {
						echo "eseche";
				   }
			   }

           } else {
               outputError($XeroOAuth);
           }
		   exit;

			redirect('questionaire');

	}

		 

	}
		
	}


	public function get_invoice($product,$item_id,$access_token,$instance_url,$country,$department,$division,$employee_number,$type)
	{
		
		$this->load->model('questionaire_m');

		$get_all_categories = $this->questionaire_m->get_all_cat();
		foreach($get_all_categories As $cat)
		{
			$service_product_oparating_name = $cat->category_name;
			$get_operating_something = $this->questionaire_m->get_product_details_service($service_product_oparating_name);
			$count_operating = count($get_operating_something);
			if($count_operating > 0)
			{
				foreach($get_operating_something As $operating_data)
				{
					$all_cat_details[$service_product_oparating_name][] = $operating_data->service_name;
				}
			}
		}
	
		//Operating service start
	
	
	// mapping data start
		$i =0;
		foreach($product As $antivirus_product)
		{
			//$item_id = $item_id[$i];
			$order_id = $item_id['order_id'][$i];
	
			//if(in_array('Kaspersky Labs',$all_antivirus_details))
			//antivirus mapping
			if(in_array($antivirus_product,$all_cat_details['Antivirus']))
			{		
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
						//$query = "SELECT Name FROM Product2";
						$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
						
						$curl = curl_init($url);
						curl_setopt($curl, CURLOPT_HEADER, false);
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($curl, CURLOPT_HTTPHEADER,
						array("Authorization: OAuth $access_token"));
						$json_response_it = curl_exec($curl);
						curl_close($curl);
						$order_response = json_decode($json_response_it, true);
						
						foreach($order_response['records'] As $invoice)
						{
							$invoice_price = $invoice['UnitPrice'];
							$invoice_product = $antivirus_product;
							$invoice_date = $invoice['CreatedDate'];

							$antivirus_invoice_data[] = array
							(
								"price" => $invoice_price,
								"product" => $invoice_product,
								"order_date" =>$invoice_date
							);
							break;
						}
					}

				//Firewall mapping
				if(in_array('Lenovo ENT',$all_cat_details['Firewall']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$firewall_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Data Storage mapping
				if(in_array($antivirus_product,$all_cat_details['Data Storage']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$data_storage_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Threat Prevention mapping
				if(in_array($antivirus_product,$all_cat_details['Threat Prevention']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$threat_prevention_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Intrusion Detection Systems (IDS) mapping
				if(in_array($antivirus_product,$all_cat_details['Intrusion Detection Systems (IDS)']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$ids_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Proxy mapping
				if(in_array($antivirus_product,$all_cat_details['Proxy']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$proxy_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Spam Filtering mapping
				if(in_array($antivirus_product,$all_cat_details['Spam Filtering']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$spam_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}


				//Encryption mapping
				if(in_array($antivirus_product,$all_cat_details['Encryption']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$encryption_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}


				//Operating System mapping
				if(in_array($antivirus_product,$all_cat_details['Operating System']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$operating_system_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				
				//Managed Service Solution Provider System mapping
				if(in_array($antivirus_product,$all_cat_details['Managed Service Solution Provider']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$mssp_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Device Management mapping
				if(in_array($antivirus_product,$all_cat_details['Device Management']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$device_management_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Device Management mapping
				if(in_array($antivirus_product,$all_cat_details['Device Management']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$device_management_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}


				//Systems Hardware mapping
				if(in_array($antivirus_product,$all_cat_details['Systems Hardware']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$systems_hardware_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}

				//Authentication mapping
				if(in_array($antivirus_product,$all_cat_details['Authentication']))
				{
					$query = "SELECT CreatedDate,Pricebookentry.Product2Id,UnitPrice FROM OrderItem WHERE OrderId = '".$order_id."'";
					//$query = "SELECT Name FROM Product2";
					$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);
					
					$curl = curl_init($url);
					curl_setopt($curl, CURLOPT_HEADER, false);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER,
					array("Authorization: OAuth $access_token"));
					$json_response_it = curl_exec($curl);
					curl_close($curl);
					$order_response = json_decode($json_response_it, true);
					
					foreach($order_response['records'] As $invoice)
					{
						$invoice_price = $invoice['UnitPrice'];
						$invoice_product = $antivirus_product;
						$invoice_date = $invoice['CreatedDate'];

						$authentication_invoice_data[] = array
						(
							"price" => $invoice_price,
							"product" => $invoice_product,
							"order_date" =>$invoice_date
						);
						break;
					}
				}
				$i++;
			}
		$antivirus_invoice_data = array_unique($antivirus_invoice_data);
		//$antivirus_invoice = $this->invoice_template->get_proper_invoice($antivirus_invoice_data);
		//print_r($firewall_invoice_data);
	
		
		$firewall_invoice_data = array_unique($firewall_invoice_data);
		//$firewall_invoice = $this->invoice_template->get_proper_invoice($firewall_invoice_data);
		$this->table->set_heading('Order Date', 'Product Name', 'Product Price');
		foreach($firewall_invoice_data As $key)
		{
			$this->table->add_row($key['order_date'], $key['product'], $key['price']);
		}
		$firewall_invoice = $this->table->generate();
		
		
	//mapping data end

		//print_r($get_something);
		//exit;
		/* Basic tab Starts*/
			$this->session->userdata[$type]['country'] = $country;
			$this->session->userdata[$type]['department'] = $department;
			$this->session->userdata[$type]['division'] = $division;
			$this->session->userdata[$type]['employee_number'] = $employee_number;
		/* Basic tab Starts*/
		/* technical tab Starts*/
			//$this->session->userdata['salesforce']['operating_system_use'] = $country;
			$this->session->userdata[$type]['antivirus_installed'] = $antivirus_invoice;
			$this->session->set_userdata[$type]['basic_system_firewall'] = $firewall_invoice;
			echo $this->session->set_userdata[$type]['basic_system_firewall'];
			exit;
			$this->session->userdata['salesforce']['manage_it'] = 'None';
			$this->session->userdata['salesforce']['have_internet'] = '1';
			$this->session->userdata['salesforce']['wifi_or_lan'] = '';
			$this->session->userdata['salesforce']['wifi_open_to_public'] = '';
			$this->session->userdata['salesforce']['wpa2_enabled'] = '';
			/*$this->session->userdata['salesforce']['browser_use'] = get_browser code;*/
			$this->session->userdata['salesforce']['system_admin_update_browser'] = '';
			$this->session->userdata['salesforce']['email_to_communicate'] = '';
			$this->session->userdata['salesforce']['have_spam_filtering'] = '';
			$this->session->userdata['salesforce']['ad_blocking_software'] = '';
			$this->session->userdata['salesforce']['have_web_hosting_network'] = '';
			$this->session->userdata['salesforce']['have_web_hosting_inhouse_remote'] = '';
			$this->session->userdata['salesforce']['what_hacking_is'] = '';
			$this->session->userdata['salesforce']['keep_logs'] = '';
			$this->session->userdata['salesforce']['regularly_update_software'] = '';
			$this->session->userdata['salesforce']['encrypt_data'] = '';
			$this->session->userdata['salesforce']['differing_access_levels'] = '';
			$this->session->userdata['salesforce']['open_active_directory_service'] = '';
			$this->session->userdata['salesforce']['two_factor_authentication'] = '';
			$this->session->userdata['salesforce']['secure_premise_from_physical_point'] = '';
			$this->session->userdata['salesforce']['pki_manage'] = '';
			$this->session->userdata['salesforce']['email_security'] = '';
			$this->session->userdata['salesforce']['have_msp'] = '';
			/* technical tab Ends*/

			/* non-technical tab Starts*/
			$this->session->userdata['salesforce']['security_monitoring_solution'] = $security_monitoring_solution;
			$this->session->userdata['salesforce']['matching_security_monitoring_solution_product'] = $matching_security_monitoring_solution_product;

			$this->session->userdata['salesforce']['business_continuity_procedure_use'] = '';
			$this->session->userdata['salesforce']['business_regular_backups'] = '';
			$this->session->userdata['salesforce']['staff_training'] = '';
			//$this->session->userdata['salesforce']['information_security_standard_relevant'] = $information_security_standard_relevant;
			$this->session->userdata['salesforce']['adequate_password_rules'] = '';
			$this->session->userdata['salesforce']['member_cisp'] = '';
			$this->session->userdata['salesforce']['have_cyber_insurance'] = '';
			$this->session->userdata['salesforce']['have_threat_detection_solution'] = '';
			$this->session->userdata['salesforce']['use_cloud_data_storage'] = '';
			$this->session->userdata['salesforce']['device_management_solution'] = '';
			$this->session->userdata['salesforce']['vpn_web_proxies'] = '';
			$this->session->userdata['salesforce']['have_cyber_consultant'] = '';
			/* non-technical tab Ends*/

			/* budget tab Starts*/
			$this->session->userdata['salesforce']['amount_spend_cybersecurity_annually'] = '';
			/*$this->session->userdata['salesforce']['percentage_annual_budget'] = calculation to be done;
			$this->session->userdata['salesforce']['budget_for_cybersecurity_per_year'] = average to amount_spend_cybersecurity_annually;*/
			$this->session->userdata['salesforce']['else_paid_for'] = '';
			/* budget tab Starts*/
			redirect('questionaire');

	}

	public function check_skip(){
		$this->load->model('questionaire_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$industry_1a = $this->input->post('industry_1a'); 
		$employees_1b = $this->input->post('employees_1b');
		$located_2a = $this->input->post('located_2a');
		$location_business_2b = $this->input->post('location_business_2b');
		$handle_data_3 = $this->input->post('handle_data_3');
		$budget_individual = $this->input->post('budget_individual');
		$sme = $this->input->post('sme');
		$enterprise = $this->input->post('enterprise');
		$governments = $this->input->post('governments');

		if($industry_1a == NULL)
		{
			$check_1a_res = $this->questionaire_m->check_1a_res($user_id);
			if(!empty($check_1a_res))
			{
				$industry_1a_res = 'exist';
			}else{
				$industry_1a_res = '1';
			}
		}else{
			$industry_1a_res = 'exist';
		}

		if($employees_1b == NULL)
		{
			$check_1b_res = $this->questionaire_m->check_1b_res($user_id);
			if(!empty($check_1b_res))
			{
				$employees_1b_res = 'exist';
			}else{
				$employees_1b_res = '1';
			}
		}else{
			$employees_1b_res = 'exist';
		}

		if($located_2a == NULL)
		{
			$check_2a_res = $this->questionaire_m->check_2a_res($user_id);
			if(!empty($check_2a_res))
			{
				$located_2a_res = 'exist';
			}else{
				$located_2a_res = '1';
			}
		}else{
			$located_2a_res = 'exist';
		}

		if($location_business_2b == NULL)
		{
			$check_2b_res = $this->questionaire_m->check_2a_res($user_id);
			if(!empty($check_2b_res))
			{
				$location_business_2b_res = 'exist';
			}else{
				$location_business_2b_res = '1';
			}
		}else{
			$location_business_2b_res = 'exist';
		}

		if($handle_data_3 == NULL)
		{
			$check_3_res = $this->questionaire_m->check_3_res($user_id);
			if(!empty($check_3_res))
			{
				$handle_data_3_res = 'exist';
			}else{
				$handle_data_3_res = '1';
			}
		}else{
			$handle_data_3_res = 'exist';
		}

		

		if($industry_1a_res == 'exist' && $employees_1b_res == 'exist' && $located_2a_res == 'exist' && $location_business_2b_res == 'exist' && $handle_data_3_res == 'exist')
		{
			if($industry_1a == 'Computer and Electronics' || $industry_1a == 'Manufacturing' || $industry_1a == 'Retail' || $industry_1a == 'Wholesale and Distribution')
			{
			   $industry_score = "1";
			}
			else if($industry_1a == 'Government')
			{
			   $industry_score = "2";
			}
			else if($industry_1a == 'Business Services' || $industry_1a == 'Financial Services')
			{
			   $industry_score = "3";
			}
			else if($industry_1a == 'Agriculture and Mining' || $industry_1a == 'Consumer Services' || $industry_1a == 'Education' || $industry_1a == 'Energy' || $industry_1a == 'Health, Pharmaceuticals, and Biotech' || $industry_1a == 'Media and Entertainment' || $industry_1a == 'Non-profit' || $industry_1a == 'Real Estate and Construction' || $industry_1a == 'Software and Internet' || $industry_1a == 'Telecommunications' || $industry_1a == 'Transportation and Storage' || $industry_1a == 'Travel Recreation and Leisur' || $industry_1a == 'Other-profit')
			{
			   $industry_score = "4";
			}
			
			if(!$located_2a){
				$located = implode(",",$located_2a);
			}else{
				$located = "";
			}

			if(!$location_business_2b){
				$location_business = implode(",",$location_business_2b);
			}else{
				$location_business = "";
			}
			$date = time();
			$total_added_score = $industry_score;

			$records = array(
                            'user_id' => $user_id,
                            'industry_input' => $industry_1a,
                            'industry_score' => $industry_score,
                            'employees_input' => $employees_1b,
                            'employees_score' => "",
                            'location_input' => $located,
                            'location_score' => "",
                            'location_business_input' => $location_business,
                            'location_business_score' => "",
                            'handle_data_input' => $handle_data_3,
                            'handle_data_score' => "",
                            'individuals_input' => $budget_individual,
                            'individuals_score' => "",
                            'sme_business_input' => $sme,
                            'sme_business_score' => "",
                            'enterprise_input' => $enterprise,
                            'enterprise_score' => "",
                            'governments_input' => $governments,
                            'governments_score' => "",
                            'total_score'=> $total_added_score,
                            'date' => $date
                        );

			$check_row = $this->questionaire_m->row_check($user_id);
			if($check_row > 0)
			{
				$update_data = $this->questionaire_m->data_update($records,$user_id);
			}else{
				$insert_data = $this->questionaire_m->data_insert($records);
			}
			$up = 'success';
		}else{
			$up = 'exist';
		}

		$array = array(
							'industry_1a_res' => $industry_1a_res,
							'employees_1b_res' => $employees_1b_res,
							'located_2a_res' => $located_2a_res,
							'location_business_2b_res' => $location_business_2b_res,
							'handle_data_3_res' => $handle_data_3_res,
							'update' => $up
						  );

		$encode = json_encode($array,true);
		print_r($encode);
		
	}
}


?>