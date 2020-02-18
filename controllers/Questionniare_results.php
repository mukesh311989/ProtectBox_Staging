<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionniare_results extends CI_Controller {
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
  		
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
		if(!$this->session->userdata['logged_in']['email']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
        require_once(FCPATH.'/stripe/init.php');
		$stripe = array(
       "secret_key"      => "sk_test_mhunZ60QIWw44BEYGZNypmTp",
       "publishable_key" => "pk_test_n7WrQXu5AFq89DrbDVMlvUuE"
		);
		\Stripe\Stripe::setApiKey($stripe['secret_key']);
		ini_set('MAX_EXECUTION_TIME', '-1');
    }
	
	public function index()
	{
		$this->load->model('results_m');
		$this->load->model('questionaire_budget_m');
		$this->load->model('questionniare_results_m');
		
		$date = time();
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['smb_user_id'] = $user_id;
		$get_order_ids = $this->questionniare_results_m->fetch_order_bundle($user_id);	
	/*	echo '<pre>';
		print_r($get_order_ids); 
*/
		$all_results_data= array();
		foreach($get_order_ids As $each_ids){
			$a = $this->questionniare_results_m->bundle_array_fetch($each_ids->bundle_payment_id);
			if(!empty($a)){
				$all_results_data[] = json_decode($a->bundle_array,true);
			}
		}
		$data['fetch_subscription'] = $this->questionniare_results_m->fetch_subscr($user_id);
		
	    //$view_data = $bundle_array_fetch->bundle_array;
	    //$data['bundle_decode'] = json_decode($view_data,true);
		$data['questionniare_results_data'] = $all_results_data;
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget = $get_budget->budget_cybersecurity_per_year_input;

		$data['currencyCode'] = $get_budget->preferred_budget_breakdown_currency_input;
		$fetch_currency_symbol = $this->results_m->get_symbol($data['currencyCode']);
		$data['currencySymbol'] = $fetch_currency_symbol->symbol;

		/* Fetching currency from location Ends */

		///////////////////////// TOP FILTERS OPTION FETCH ////////////////////////////////////////////
			$max_range = $user_budget;
			$min_range = 0;
			$data['smb_bundles'] = $this->results_m->result_bundle_dominator($user_id,$max_range,$min_range);
			// SUPPLIER, SOLUTION & PRICE RANGE FOR TOP FILTER STARTS
			$fetch_product_category_array = "";
			$fetch_service_id_array = "";
			foreach($data['smb_bundles'] AS $each_category){
				// SUPPLIER NAME STARTS
				$supplier_array = $each_category->suppliers;
				$decode_supplier_array_json = json_decode($supplier_array,true);
				foreach($decode_supplier_array_json AS $each_supplier){
					foreach($each_supplier AS $suppliers){
						$fetch_service_id_array .= $suppliers;
						$fetch_service_id_array .= ",";
					}
				}
				// SUPPLIER NAME ENDS
				$bundle_fetch = $each_category->bundle_json;
				$decode_bundle_json = json_decode($bundle_fetch,true);
				// FETCHING JSON DATA STARTS
				foreach($decode_bundle_json AS $fetch_json_data){
					// BUSINESS CATEGORY STARTS
					$fetch_product_category_array .= $fetch_json_data['product_category'];
					$fetch_product_category_array .= ",";
					// BUSINESS CATEGORY STARTS
				}
				// FETCHING JSON DATA ENDS
			}
			// SUPPLIER NAME STARTS
			$explode_suppliers = explode(",",$fetch_service_id_array);
			$data['unique_supp'] = array_unique($explode_suppliers);
			// SUPPLIER NAME ENDS
			// PRODUCT CATEGORY STARTS
			$explode_supplier_category = explode(",",$fetch_product_category_array);
			$data['unique_supplier_category'] = array_unique($explode_supplier_category);
			// PRODUCT CATEGORY ENDS
			// PRICE RANGE STARTS
			$unique_price_range = $this->results_m->fetch_price_range();
			$price_range = "";
			foreach($unique_price_range AS $each_price){
				$price_range .= $each_price->price_range;
				$price_range .= ",";
			}
			$data['all_price_range'] = explode(",",$price_range);
			// PRICE RANGE ENDS
			// SUPPLIER, SOLUTION & PRICE RANGE FOR TOP FILTER ENDS
		//Budget min max calculation starts here
		$min_budget = $this->results_m->fetch_min_budget($user_id);
		$data['min_budget'] = round($min_budget->total_bundle_price,2);

		$max_budget = $this->results_m->fetch_max_budget($user_id);
		$data['max_budget'] = round($max_budget->total_bundle_price,2);
		//$data['max_budget'] = $max_budget->supplier_package_price;

		$data['smb_budget'] = $user_budget;

		$data['sidebar_json'] = $this->results_m->check_results_sidebar($user_id);
		if(!empty($data['sidebar_json'])){
			$supplier_explode = explode(',',$data['sidebar_json']->top_filter_supplier);
			$data['top_filter_supplier'] = $supplier_explode;

			$solution_explode = explode(',',$data['sidebar_json']->top_filter_solution);
			$data['top_filter_solution'] = $solution_explode;

			$data['top_filter_price_range'] = $data['sidebar_json']->top_filter_price_range;
		}

		//Risk Scores starts //
		$get_all_risk_score = $this->get_risk_score();
		$data['smb_antivirus_score'] = $get_all_risk_score['Antivirus'];
		$data['smb_os_score'] = $get_all_risk_score['Operating System'];
		$data['smb_firewall_score'] = $get_all_risk_score['Firewall'];
		$data['smb_internet_score'] = $get_all_risk_score['Internet'];;
		$data['smb_system_access_score'] = $get_all_risk_score['Access Control'];
		$data['smb_data_encrypt_score'] = $get_all_risk_score['Data'];
		$data['smb_msp_score'] = $get_all_risk_score['Managed Service Solution Provider'];
		$data['smb_business_continuity_plan_score'] = $get_all_risk_score['Business Continuity'];
		$data['smb_password_rules_score'] = $get_all_risk_score['Password Policy'];
		$data['smb_aware_information_security_standard_score'] = $get_all_risk_score['Accreditation/Regulation'];
		$data['smb_device_to_employees_score'] = $get_all_risk_score['Devices'];
		$data['smb_training_cybersecurity_score'] = $get_all_risk_score['Training'];
		$data['smb_employees_use_remotely_score'] = $get_all_risk_score['Remote working'];
		$data['smb_reputation_mgmt'] = $get_all_risk_score['Reputation Management'];
		$data['smb_cyber_consultant_score'] = $get_all_risk_score['Consultancy/Implementation'];
		//Risk scores ends //
		

		$data["order_data"] = $this->questionniare_results_m->fetch_order($user_id);
		//print_r($order_data);
		//exit;
		$data["get_basic_answars"] = $this->questionniare_results_m->get_basic_answars($user_id);
		$data["get_tech_answars"] = $this->questionniare_results_m->get_tech_answars($user_id);
		$data["get_nontech_answars"] = $this->questionniare_results_m->get_nontech_answars($user_id);
		$data['get_budget_answars'] = $this->questionniare_results_m->get_budget_answars($user_id);
		//print_r($get_tech_answars); 
		//exit;
		$data['employee_number'] = $this->questionniare_results_m->fetch_employees($user_id);
		
		$data['userData'] = $this->questionniare_results_m->fetch_user_data($user_id);
	  /*  echo '<pre>';	
		print_r($data); die;*/
	
		$this->load->view('questionniare_results',$data);
				
		/* Sorting category of bundle Ends */
		
	}
	
	public function remove_cpn(){
		SESSION_START();
		$this->session->unset_userdata('subscription_coupon');
		return true;
	}

	public function addcoupn(){
		$this->load->model("questionniare_results_m");
		$cpn_code = $this->input->post('subscr_coupon_code');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$check_cpn_code = $this->questionniare_results_m->get_cpn($cpn_code);
		$date = time();
		$threeMonthsLater = strtotime("+3 months", $date);
		if(!empty($check_cpn_code)){
			foreach($check_cpn_code As $val_cpn){
				$coupon = array(
				'coupon_code' => $check_cpn_code->coupon_code
				);
			}
			$coupon_data = array(
				'smb_id' => $user_id,
				'payment_processor' => $cpn_code,
				'payment_status' => '1',
				'subscription_status' => '1',
				'date' => $date,
				'subscription_end_date' => $threeMonthsLater
			);
			$subscribe = $this->questionniare_results_m->smb_subscribe($coupon_data);
			if($subscribe){
				$this->session->set_userdata("subscription_coupon",$coupon);
				$this->session->set_flashdata("coupon_success", "Your coupon applied successfully");
			}
			
		}else{
			$this->session->set_flashdata("coupon_invalid", "Your coupon code is invalid");
		}
		redirect('questionniare_results');
		/*
		
		print_r($check_cpn_code);*/

	}

	public function update_basics()
	{
		$this->load->model('questionniare_results_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $industry = $this->input->post('industry');
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
        $located = implode(",",$this->input->post('located'));
        $location_business = implode(",",$this->input->post('location_business'));
        $date = time();
        $total_added_score = $industry_score;
        $records = array(
							'user_id' => $user_id,
                            'industry_input' => $industry,
                            'industry_score' => $industry_score,
                            'employees_input' => $this->input->post('employees'),
                            'employees_score' => "",
                            'location_input' => $located,
                            'location_score' => "",
                            'location_business_input' => $location_business,
                            'location_business_score' => "",
                            'handle_data_input' => $this->input->post('handle_data'),
                            'handle_data_score' => "",
                            'individuals_input' => $this->input->post('budget_individual'),
                            'individuals_score' => "",
                            'sme_business_input' => $this->input->post('sme'),
                            'sme_business_score' => "",
                            'enterprise_input' => $this->input->post('enterprise'),
                            'enterprise_score' => "",
                            'governments_input' => $this->input->post('governments'),
                            'governments_score' => "",
                            'total_score'=> $total_added_score,
                            'date' => $date
                        );
		//print_r ($records);
		//exit;

		$update_data = $this->questionniare_results_m->data_update($records,$user_id);
		if($update_data)
		{
			redirect('results');
		}
		else
		{
			redirect('questionniare_results');	
		}
	}

	public function update_tech()
	{

        $this->load->model('questionniare_results_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $operating_system = $this->input->post('operating_system');
        if($operating_system == 'Windows 7 or below')
        {
           $os_score = "4";
        }
        else if($operating_system == 'Windows 8 or above')
        {
           $os_score = "3";
        }
        else if($operating_system == 'Mac')
        {
           $os_score = "2";
        }
        else if($operating_system == 'Linux')
        {
           $os_score = "1";
        }
        
        $antivirus_installed = $this->input->post('antivirus_installed');
        if($antivirus_installed == "1")
        {
            $antivirus_score = "";
        }
        else{
            $antivirus_score = "0.1";
        }
        $firewall = $this->input->post('firewall');
        if($firewall == "1")
        {
            $firewall_score = "";
        }
        else{
            $firewall_score = "0.1";
        }

        $system_admin = $this->input->post('system_admin');
        if($system_admin == "inhouse")
        {
            $system_admin_score = "0";
        }
        else if ($system_admin == "remote")
        {
            $system_admin_score = "0.1";
        }
        else if($system_admin != "inhouse" && $system_admin != "remote")
        {
            $system_admin_score = "0.2";
        }

		
		//Internet start

        $internet_have = $this->input->post('internet_have');
        if($internet_have == "1")
        {
            $internet_score = "0.1";

			$internet_wifi_lan = $this->input->post('internet_wifi_lan');
			if($internet_wifi_lan == "1")
			{
				$internet_wifi_lan_score = "0.1";
			}
			else{
				$internet_wifi_lan_score = "0";
			}

			$internet_public_wifi = $this->input->post('internet_public_wifi');
			if($internet_public_wifi == "1")
			{
				$internet_public_wifi_score = "0.1";
			}
			else{
				$internet_public_wifi_score = "0";
			}

			$internet_wpa2 = $this->input->post('internet_wpa2');
			if($internet_wpa2 == "1")
			{
				$internet_wpa2_score = "0.1";
			}
			else{
				$internet_wpa2_score = "0";
			}

			$browser_use = $this->input->post('browser_use');
			if($browser_use == "Internet Explorer"){
				$browser_use_score = "0.2";
			}
			else{
				$browser_use_score = "0.1";
			}

			$internet_browser_update = $this->input->post("internet_browser_update");
			if($internet_browser_update == "1")
			{
				$internet_browser_update_score = "0.1";
			}
			else{
				$internet_browser_update_score = "0";
			}

			$internet_browser_update = $this->input->post("internet_browser_update");
			if($internet_browser_update == "1")
			{
				$internet_browser_update_score = "0.1";
			}
			else{
				$internet_browser_update_score = "0";
			}

			$internet_email = $this->input->post("internet_email");
			if($internet_email == "1")
			{
				$internet_email_score = "0.1";
			}
			else{
				$internet_email_score = "0";
			}

			$internet_spam = $this->input->post("internet_spam");

			$internet_web_host = $this->input->post("internet_web_host");
			if($internet_web_host == "1")
			{
				$internet_web_host_score = "0.1";
			}
			else{
				$internet_web_host_score = "0";
			}
        }
        else{
            $internet_score = "";

			$internet_wifi_lan = "0";
			$internet_wifi_lan_score = "";

			$internet_public_wifi = "0";
			$internet_public_wifi_score = "";

			$internet_wpa2 = "0";
			$internet_wpa2_score = "";

			$browser_use = "";
			$browser_use_score = "0.1";

			$internet_browser_update = "0";
			$internet_browser_update_score = "";

			$internet_email = "0";
			$internet_email_score = "";

			$internet_spam = "0";
			
			$internet_web_host = "0";
			$internet_web_host_score = "";

        }
		
		if($this->input->post("internet_ad_block") == '')
		{
			$internet_ad_block = '';
		}
		else{
			$internet_ad_block = $this->input->post("internet_ad_block");
		}
		if($internet_ad_block == "1")
		{
			$internet_ad_block_score = "0.1";
		}
		else{
			$internet_ad_block_score = "0";
		}

		if($this->input->post("internet_inhouse_remote") == ''){
			$internet_inhouse_remote = '';
		}else{
			$internet_inhouse_remote = $this->input->post("internet_inhouse_remote");
		}

		if($internet_inhouse_remote == "remote")
		{
			$internet_inhouse_remote_score = "0.1";
		}
		else{
			$internet_inhouse_remote_score = "0";
		}
		//Internet End
		//Access Control start
        $hacking = $this->input->post("hacking");
        if($hacking == "1")
        {
            $hacking_score = "0";

			if($this->input->post("access_control_logs") == ''){
				$access_control_logs = "";
			}else{
				$access_control_logs = $this->input->post("access_control_logs");
			}

			if($access_control_logs == "1")
			{
				$access_control_logs_score = "0.1";
			}
			else{
				$access_control_logs_score = "0";
			}

			if($this->input->post("update_software") == ''){
				$update_software = "";
			}else{
				$update_software = $this->input->post("update_software");
			}
			if($update_software == "1")
			{
				$update_software_score = "0.1";
			}
			else{
				$update_software_score = "0";
			}

			if($this->input->post("encrypt")==''){
				$encrypt = "";
			}else{
				$encrypt = $this->input->post("encrypt");
			}
			if($encrypt == "1")
			{
				$encrypt_score = "0.1";
			}
			else{
				$encrypt_score = "0";
			}
        }
        else{
            $hacking_score = "0";
			
			$access_control_logs_score = "0";
			if($this->input->post("update_software") == ''){
				$update_software = "";
			}else{
				$update_software = $this->input->post("update_software");
			}

			if($update_software == "1")
			{
				$update_software_score = "0.1";
			}
			else{
				$update_software_score = "0";
			}
			$encrypt = "";
			$encrypt_score = "0";
        }
		//Access Control End
        $access = $this->input->post("access");
        if($access == "1")
        {
            $access_score = "0.1";
        }
        else{
            $access_score = "0";
        }
		if($this->input->post("directory") == '')
		{
			$directory = '';
		}else{
			$directory = $this->input->post("directory");
		}
        if($directory == "Neither" || $directory == "Don't know")
        {
            $directory_score = "0";
        }
        else{
            $directory_score = "0.1";
        }

		if($this->input->post('authentication') == '')
		{
			$two_auth = '';
		}else{
			$two_auth = $this->input->post('authentication');
		}

		if($this->input->post('premises_input') == '')
		{
			$premises_input = '';
		}else{
			$premises_input = $this->input->post('premises_input');
		}

		if($this->input->post('public_key_infrastructure_input') == '')
		{
			$public_key_infrastructure_input = '';
		}else{
			$public_key_infrastructure_input = $this->input->post('public_key_infrastructure_input');
		}

		if($this->input->post('server_option_input') == '')
		{
			$server_option_input = '';
		}else{
			$server_option_input = $this->input->post('server_option_input');
		}

		if($this->input->post('managed_msp_input') == '')
		{
			$managed_msp_input = '';
		}else{
			$managed_msp_input = $this->input->post('managed_msp_input');
		}
		$date = time();
        $total_score = $os_score + $antivirus_score + $firewall_score + $system_admin_score + $internet_score + $internet_wifi_lan_score + $internet_public_wifi_score + $internet_wpa2_score + $browser_use_score + $internet_browser_update_score + $internet_email_score + $internet_ad_block_score + $internet_web_host_score + $internet_inhouse_remote_score + $hacking_score + $access_control_logs_score + $update_software_score + $encrypt_score + $access_score + $directory_score;

        $records1 = array(
							'user_id' => $user_id,
                            'os_input' => $this->input->post('operating_system'),
                            'os_score' => $os_score,
                            'antivirus_input' => $antivirus_installed,
                            'antivirus_score' => $antivirus_score,
                            'firewall_input' => $firewall,
                            'firewall_score' => $firewall_score,
                            'manage_it_input' => $this->input->post('manage_it'),
                            'manage_it_score' => "",
                            /*'system_admin_input' => $system_admin,
                            'system_admin_score' => $system_admin_score,*/
                            'internet_input' => $internet_have,
                            'internet_score' => $internet_score,
                            'internet_option_input' => $internet_wifi_lan,
                            'internet_option_score' => $internet_wifi_lan_score,
                            'wifi_option_input' => $internet_public_wifi,
                            'wifi_option_score' => $internet_public_wifi_score,
                            'wpa2_input' => $internet_wpa2,
                            'wpa2_score' => $internet_wpa2_score,
                            'browser_input' => $browser_use,
                            'browser_score' => $browser_use_score,
                            'browser_name_input' => $this->input->post('browser_other'),
                            'update_browser_input' => $internet_browser_update,
                            'update_browser_score' => $internet_browser_update_score,
                            'email_input' => $internet_email,
                            'email_score' => $internet_email_score,
                            'spam_filtering_input' => $internet_spam,
                            'spam_filtering_score' => "",
                            'ad_blocking_input' => $internet_ad_block,
                            'ad_blocking_score' => $internet_ad_block_score,
                            'web_hosting_input' => $internet_web_host,
                            'web_hosting_score' => $internet_web_host_score,
                            'web_hosting_option_input' => $internet_inhouse_remote,
                            'web_hosting_option_score' => $internet_inhouse_remote_score,
                            'hacking_input' => $hacking,
                            'hacking_score' => $hacking_score,
                            'logs_input' => $access_control_logs,
                            'logs_score' => $access_control_logs_score,
                            'software_update_input' => $update_software,
                            'software_update_score' => $update_software_score,
                            'data_encrypt_input' => $encrypt,
                            'data_encrypt_score' => $encrypt_score,
                            'system_access_input' => $access,
                            'system_access_score' => $access_score,
                            'directory_service_input' => $directory,
                            'directory_service_score' => $directory_score,
                            'two_factor_authentication_input' => $two_auth,
                            'two_factor_authentication_score' => "",
                            'premises_input' => $premises_input,
                            'premises_score' => "",
                            'public_key_infrastructure_input' => $public_key_infrastructure_input,
                            'public_key_infrastructure_score' => "",
                            'server_option_input' => $server_option_input,
                            'server_option_score' => "",
                            /*'msp_input' => $this->input->post('msp_input'),
                            'msp_score' => "",*/
                            'managed_msp_input' => $managed_msp_input,
                            'managed_msp_score' => "",
                            'total_score' => $total_score,
                            'date' => $date
                        );
		//print_r ($records);
		 $update_tech_data = $this->questionniare_results_m->data_tech_update($records1,$user_id);
		if($update_tech_data)
		{
			redirect('results');
		}
		else
		{
			redirect('questionniare_results');	
		}
	}

	public function update_nontech()
	{
		
        $this->load->model('questionniare_results_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		if($this->input->post('business_continuity_plan')=="1")
		{
			$get_business_continuity_procedureszz = $this->input->post('business_continuity_procedureszz');
			if($get_business_continuity_procedureszz != ''){
				$implode_business_continuity_procedureszz = implode(',',$get_business_continuity_procedureszz); 
			}else{
				$implode_business_continuity_procedureszz = ''; 
			}   
		}
		else{
			$implode_business_continuity_procedureszz = ''; 
		}
        

        $get_training_valuezz = $this->input->post('training_isss');
        if($get_training_valuezz != ''){
            $implode_training_iss = implode(',',$get_training_valuezz); 
        }else{
            $implode_training_iss = ''; 
        }               
        $date = time();

        /* Scores insertion for specific non-tech questions */
            /* business_continuity_plan */
            if($this->input->post('business_continuity_plan') == '1'){
                $score_business_continuity_plan = "0";

				/* business_continuity_procedureszz */
				$get_all_selected_options = $this->input->post('business_continuity_procedureszz');
				if(in_array("IDS", $get_all_selected_options)){
					$ids_step_val = "0.1";
				}
				else{
					$ids_step_val = "0";
				}

				if(in_array("IPS", $get_all_selected_options)){
					$ips_step_val = "0.1";
				}
				else{
					$ips_step_val = "0";
				}

				if(in_array("Backups", $get_all_selected_options)){
					$backup_step_val = "0.1";
				}
				else{
					$backup_step_val = "0";
				}

				if(in_array("None", $get_all_selected_options)){
					$none_step_val = "0.3";
				}
				else{
					$none_step_val = "0";
				}
				$total_step_score = $ids_step_val + $ips_step_val + $backup_step_val + $none_step_val;
            }else{
                $score_business_continuity_plan = "0.1";
				$total_step_score = "";
            }
            
            /* business_continuity_regular_backup */
            if($this->input->post('business_continuity_regular_backup') == 'Local'){
                $score_business_continuity_regular_backup = 0.1;
            }else if($this->input->post('business_continuity_regular_backup') == 'Remote'){
                $score_business_continuity_regular_backup = "";
            }else if($this->input->post('business_continuity_regular_backup') == 'None'){
                $score_business_continuity_regular_backup = 0.2;
            }
			else if($this->input->post('business_continuity_regular_backup') == ''){
                $score_business_continuity_regular_backup = "";
            }
			if($this->input->post('business_continuity_regular_backup') == ''){
				$business_continuity_regular_backup_input = "" ;
			}else{
				$business_continuity_regular_backup_input = $this->input->post('business_continuity_regular_backup') ;
			}
            /* training_staff */
            if($this->input->post('training_staff') == 'Cyber security'){
                $score_training_staff = 0.1;
            }else if($this->input->post('training_staff') == 'Physical security'){
                $score_training_staff = 0.1;
            }else if($this->input->post('training_staff') == 'Cyber & Physical security'){
                $score_training_staff = "";
            }else if($this->input->post('training_staff') == 'None'){
                $score_training_staff = 0.2;
            }
            /* accreditation_iso_iec */
            if($this->input->post('accreditation_iso_iec') != ''){
				$input_accreditation_iso_iec = $this->input->post('accreditation_iso_iec');
                $score_accreditation_iso_iec = "1";
            }else{
                $score_accreditation_iso_iec = "0.1";
            }
            /* accreditation_regular_audit */
            
            /* password_policy_rules*/ 
            if($this->input->post('password_policy_rules') == '1'){
                $score_password_policy_rules = "0";
            }else{
                $score_password_policy_rules = "0.1";
            }
            /* reputation_management_member_cisp */
            if($this->input->post('reputation_management_member_cisp') == '1'){
                $score_reputation_management_member_cisp = "0";
            }else if($this->input->post('reputation_management_member_cisp') == '0'){
                $score_reputation_management_member_cisp = "0.1";
            }
            /* reputation_management_cyber_insurance */ 
            if($this->input->post('reputation_management_cyber_insurance') == '1'){
                $score_reputation_management_cyber_insurance = "0";
            }else{
                $score_reputation_management_cyber_insurance = "0.1";
            }
            /* reputation_management_threat_detection */
            if($this->input->post('reputation_management_threat_detection') == 'Detection' || $this->input->post('reputation_management_threat_detection') == 'Prevention' || $this->input->post('reputation_management_threat_detection') == 'Detection_prevention'){
                $score_reputation_management_threat_detection = "0";
            }else if($this->input->post('reputation_management_threat_detection') == 'none'){
                $score_reputation_management_threat_detection = "0.1";
            }
            /* reputation_management_cloud_storage */
            if($this->input->post('reputation_management_cloud_storage') == '1'){
                $score_reputation_management_cloud_storage = "0";
				$input_reputation_management_cloud_storage = $this->input->post('reputation_management_cloud_storage');
            }else if($this->input->post('reputation_management_cloud_storage') == '0'){
                $score_reputation_management_cloud_storage = "0.1";
				$input_reputation_management_cloud_storage = $this->input->post('reputation_management_cloud_storage');
            }
			else if($this->input->post('reputation_management_cloud_storage') == ''){
                $score_reputation_management_cloud_storage = "";
				$input_reputation_management_cloud_storage = "";
            }
            /* device_mdm */
            if($this->input->post('device_mdm') == '1'){
                $score_device_mdm = 0.1;

				/*$device_for_employeess = $this->input->post('device_for_employeess');
				if($device_for_employeess == 'Laptops'){
                $score_device_for_employeess = 0.1;
				}else if($device_for_employeess == 'Phones'){
					$score_device_for_employeess = 0.1;
				}else if($device_for_employeess == 'Tablets'){
					$score_device_for_employeess = 0.1;
				}else if($device_for_employeess == 'None'){
					$score_device_for_employeess = 0;
				}*/
				
				/*$misuse_equipment_input = $this->input->post('device_policy_softwarezz');*/
				/*$mdm_input = $this->input->post('device_havezz');*/
            }else{
                $score_device_mdm = 0;

				$device_for_employeess = "";
				/*$score_device_for_employeess = "0";*/
				/*$misuse_equipment_input = "";*/
				/*$mdm_input = "";*/
            }
            /* device_for_employeess */
            
            /* vpn_home_remotezz */ 
            if($this->input->post('vpn_home_remotezz') == 'VPN' || $this->input->post('vpn_home_remotezz') == 'Web Proxy'){
                $vpn_home_remotezz = $this->input->post('vpn_home_remotezz');
				$score_vpn_home_remotezz = "0.1";

				$vpn_home_remote_from_companyzz = $this->input->post('vpn_home_remote_from_companyzz');

				$vpn_havezz = $this->input->post('vpn_havezz');
				if($vpn_havezz == '1'){
					$score_vpn_havezz = "0";
				}else{
					$score_vpn_havezz = "0.1";
				}
            }else{
				$vpn_home_remotezz = "0";
                $score_vpn_home_remotezz = "0";
				$vpn_home_remote_from_companyzz = "";

				$vpn_havezz = "";
				$score_vpn_havezz = "0";
            }
            /* vpn_havezz */

			$consultancy_cyber_consultantzz = $this->input->post('consultancy_cyber_consultantzz');
			if($consultancy_cyber_consultantzz == '1')
			{
				$consultancy_consultant_helpzz = $this->input->post('consultancy_consultant_helpzz');
			}
			else if($consultancy_cyber_consultantzz == '0'){
				$consultancy_consultant_helpzz = $this->input->post('consultancy_consultant_helpzz');
			}
			else if($consultancy_cyber_consultantzz == ''){
				$consultancy_consultant_helpzz = "";
			}
			
			$score_accreditation_regular_audit = "";
            
			 
        /* End of Scores insertion for specific non-tech questions */
        

        $total_added_score = $score_business_continuity_plan + $total_step_score + $score_business_continuity_regular_backup + $score_training_staff + $score_accreditation_iso_iec + $score_accreditation_regular_audit + $score_password_policy_rules + $score_reputation_management_member_cisp + $score_reputation_management_cyber_insurance + $score_reputation_management_threat_detection + $score_reputation_management_cloud_storage + $score_device_mdm + $score_device_for_employeess + $score_vpn_home_remotezz + $score_vpn_havezz;

        


        $add_non_tech = array(
			'user_id' => $user_id,      
            'business_continuity_plan_input'=> $this->input->post('business_continuity_plan'), 
            'business_continuity_plan_score' => $score_business_continuity_plan,
            'business_continuity_procedure_input'=> $implode_business_continuity_procedureszz, 
            'business_continuity_procedure_score' => $total_step_score,
            'regular_backup_input'=> $business_continuity_regular_backup_input,
			'regular_backup_score'=> $score_business_continuity_regular_backup,
            'training_cybersecurity_input' => $this->input->post('training_staff'),
			'training_cybersecurity_score' => $score_training_staff,
            'aware_information_security_standard_input'=> $input_accreditation_iso_iec,
			'aware_information_security_standard_score'=> $score_accreditation_iso_iec,
            'cover_information_security_standard_input'=> $implode_training_iss,
			'cover_information_security_standard_score'=> $score_accreditation_regular_audit,
            'password_rules_input'=> $this->input->post('password_policy_rules'),
			'password_rules_score'=> $score_password_policy_rules,
            'member_cisp_input'=> $this->input->post('reputation_management_member_cisp'),
			'member_cisp_score'=> $score_reputation_management_member_cisp,
            'cyber_insurance_input'=> $this->input->post('reputation_management_cyber_insurance'), 
			'cyber_insurance_score'=> $score_reputation_management_cyber_insurance, 
            'threat_detection_input'=> $this->input->post('reputation_management_threat_detection'),
			'threat_detection_score'=> $score_reputation_management_threat_detection,
            'cloud_data_storage_solution_input'=> $input_reputation_management_cloud_storage,
			'cloud_data_storage_solution_score'=> $score_reputation_management_cloud_storage,
            'device_to_employees_input'=> $this->input->post('device_mdm'),
			'device_to_employees_score'=> $score_device_mdm,
            /*'what_devices_employees_input'=> $device_for_employeess,
			'what_devices_employees_score'=> $score_device_for_employeess,
            'misuse_equipment_input'=> $misuse_equipment_input, 
            'mdm_input'=> $mdm_input, */
            'employees_use_remotely_input'=> $vpn_home_remotezz,
			'employees_use_remotely_score'=> $score_vpn_home_remotezz,
            'employees_work_home_input'=> $vpn_home_remote_from_companyzz,
            'vpn_software_input'=> $vpn_havezz,
			'vpn_software_score'=> $score_vpn_havezz,
            'cyber_consultant_input'=> $consultancy_cyber_consultantzz,
            /*'need_consultant_input'=> $consultancy_consultant_helpzz,*/
            'total_score'=> $total_added_score,
            'date' => $date
        );

		//print_r($add_non_tech);
		 $update_nontech_data = $this->questionniare_results_m->questioniare_non_tech_update($add_non_tech,$user_id);
		 if($update_nontech_data)
			{
				redirect('results');
			}
		else
			{
				redirect('questionniare_results');	
			}
		
	}

	public function update_budget()
	{
		$this->load->model('questionniare_results_m'); 
		$user_id = $this->session->userdata['logged_in']['user_id'];
        if($this->input->post('budget_paid') == ''){
			$implode_budget_paid = '';
		}else{
			$budget_paid = $this->input->post('budget_paid');
			$implode_budget_paid = implode(',',$budget_paid);
		}

		if($this->input->post('currency') == ''){
			$currency = '';
		}else{
			$currency = $this->input->post('currency');
		}
        
        $date = time();
        $add_budgets = array(
			'user_id' => $user_id,
            'amount_cybersecurity_input'=> $this->input->post('budget_cyber_security'), 
            'percentage_annual_budget_input'=> $this->input->post('budget_annual'), 
            'budget_cybersecurity_per_year_input'=> $this->input->post('budget_per_year'),
            'paid_for_input' => $implode_budget_paid,
            'preferred_budget_breakdown_currency_input'=> $currency,
            'tech_operating_system_input'=> $this->input->post('tech_os'),
            'tech_internet_input'=> $this->input->post('tech_internet'),
            'tech_antivirus_input'=> $this->input->post('tech_antivirus'),
            'tech_firewall_input'=> $this->input->post('tech_firewall'), 
            'tech_access_control_input'=> $this->input->post('tech_access_control'),
            'tech_protecting_data_input'=> $this->input->post('tech_protect_data'),
            'tech_mssp_input'=> $this->input->post('tech_mssp'),
            'non_tech_business_continuity_input'=> $this->input->post('ntech_continuity_procedure'),
            'non_tech_training_input'=> $this->input->post('ntech_training'), 
            'non_tech_accredation_input'=> $this->input->post('ntech_regulation'), 
            'non_tech_reputation_management_input'=> $this->input->post('ntech_reputation'),
            'non_tech_password_policy_input'=> $this->input->post('ntech_pass_policy'),
            'non_tech_devices_input'=> $this->input->post('ntech_devices'),
            'non_tech_vpn_input'=> $this->input->post('ntech_vpn'),
            'non_tech_consultancy_input'=> $this->input->post('ntech_implementation'),
            'date' => $date
        );
		//print_r ($add_budgets);

		$update_budget = $this->questionniare_results_m->update_budget_data($add_budgets,$user_id);

		 if($update_budget)
			{
				redirect('results');
			}
		else
			{
				redirect('questionniare_results');	
			}
	}
	
	public function get_risk_score(){
		$this->load->model('bundle_json_m');
		$this->load->model('results_m');
		//gv score calcualation start//
		$this->load->model('questionaire_m');
		$this->load->model('questionaire_tech_info_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$get_tech = $this->questionaire_tech_info_m->fetch_technical($user_id);
		$get_basic = $this->questionaire_m->fetch_basic($user_id);

		$business_score = $get_basic->industry_score;
		$get_gv_scorez = $this->results_m->fetch_gv_score();
		
		foreach($get_gv_scorez AS $each_gv_score){
			if($each_gv_score->gv_score_employee_input == $get_basic->employees_input){
				$sme_risk_score = $each_gv_score->risk_score;
			}
		}
		
		$os_score = $get_tech->os_score;
		$gv_score = ($os_score + $business_score + $sme_risk_score)/10;

		//c score calcualation start//
		$get_c_risk_scorez = $this->results_m->fetch_c_risk_score();
		foreach($get_c_risk_scorez AS $each_c_risk_score){
			if($each_c_risk_score->industry_type == $get_basic->industry_input){

				$antivirus_c_score = $each_c_risk_score->antivirus;
				$bcp_c_score = "8";
				$firewall_c_score = $each_c_risk_score->firewall;
				$governence_c_score = "8";
				$hacking_c_score = "8";
				$internet_c_score = $each_c_risk_score->internet;
				$pharming_c_score = "8";
				$phishing_c_score = "8";
				$reputation_c_score = "8";
				$system_c_score = $each_c_risk_score->system_hardware;
			}
		}		

		$c_risk = $antivirus_c_score + $bcp_c_score + $firewall_c_score + $governence_c_score + $hacking_c_score + $internet_c_score + $pharming_c_score + $phishing_c_score + $reputation_c_score + $system_c_score;
		//echo $c_risk;
		//exit;

		//c score calcualation end//

		//escalation score calcualation start//

		//tech score start//
		$operating_score = $get_tech->os_score;

		$antivirus_score = $get_tech->antivirus_score;

		$firewall_score = $get_tech->firewall_score;

		$system_admin_score = $get_tech->system_admin_score;

		$hacking_score = $get_tech->hacking_score;

		$logs_score = $get_tech->logs_score;

		$software_update_score = $get_tech->software_update_score;

		$data_encrypt_score = $get_tech->data_encrypt_score;

		$system_access_score = $get_tech->system_access_score;

		$directory_service_score = $get_tech->directory_service_score;

		$two_factor_authentication_score = $get_tech->two_factor_authentication_score;

		$internet_score = $get_tech->internet_score;

		$internet_option_score = $get_tech->internet_option_score;

		$wifi_option_score = $get_tech->wifi_option_score;

		$wpa2_score = $get_tech->wpa2_score;

		$web_hosting_score = $get_tech->web_hosting_score;

		$web_hosting_option_score = $get_tech->web_hosting_option_score;

		$browser_score = $get_tech->browser_score;

		$update_browser_score = $get_tech->update_browser_score;

		$ad_blocking_score = $get_tech->ad_blocking_score;

		$server_option_score = $get_tech->server_option_score;
		//tech score end//

		//non tech score start//
		
		$this->load->model('questionaire_non_tech_m');
		$get_non_tech = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);

		// Do you have a business continuity plan? 

		$business_continuity_plan_score = $get_non_tech->business_continuity_plan_score;

		// Which Business Continuity Procedures do you use? 

		$business_continuity_procedure_score = $get_non_tech->business_continuity_procedure_score;

		// Does your business have regular backups? /

		$regular_backup_score = $get_non_tech->regular_backup_score;

		// Are you aware of Information Security standards?  /

		$aware_information_security_standard_score = $get_non_tech->aware_information_security_standard_score;

		// Please tell us if your staff have had Cybersecurity training only, Physical training, Both or no training? /

		$training_cybersecurity_score = $get_non_tech->training_cybersecurity_score;

		// Do you have any IT governance policies? /

		$it_governance_policy_score = $get_non_tech->it_governance_policy_score;

		// Do you have cyber insurance? / 

		$cyber_insurance_score = $get_non_tech->cyber_insurance_score;

		// Do you have threat detection and prevention solutions? /

		$threat_detection_score = $get_non_tech->threat_detection_score;

		// Do you use cloud data storage solutions? /

		$cloud_data_storage_solution_score = $get_non_tech->cloud_data_storage_solution_score;

		// Are you a member of CISP? /

		$member_cisp_score = $get_non_tech->member_cisp_score;

		// What devices do you issue to your employees? /

		$device_to_employees_score = $get_non_tech->device_to_employees_score;

		// Do you implement simple but adequate password rules that encourage users to have long, random passwords? /

		$password_rules_score = $get_non_tech->password_rules_score;

		// Do your employees use these devices remotely? /

		$employees_use_remotely_score = $get_non_tech->employees_use_remotely_score;

		// Do you have Virtual Private Networks (VPN) software? /

		$vpn_software_score = $get_non_tech->vpn_software_score;

		//non tech score end//
		
		$escalation_score = is_numeric($antivirus_score) + is_numeric($firewall_score) + is_numeric($system_admin_score) + is_numeric($hacking_score) + is_numeric($logs_score) + is_numeric($software_update_score) + is_numeric($data_encrypt_score) + is_numeric($system_access_score) + is_numeric($directory_service_score) + is_numeric($internet_score) + is_numeric($internet_option_score) + is_numeric($wifi_option_score) + is_numeric($wpa2_score) + is_numeric($web_hosting_score) + is_numeric($web_hosting_option_score) + is_numeric($browser_score) + is_numeric($update_browser_score) + is_numeric($ad_blocking_score) + is_numeric($server_option_score) + is_numeric($business_continuity_plan_score) + is_numeric($business_continuity_procedure_score) + is_numeric($regular_backup_score) + is_numeric($aware_information_security_standard_score) + is_numeric($training_cybersecurity_score) + is_numeric($it_governance_policy_score) + is_numeric($cyber_insurance_score) + is_numeric($threat_detection_score) + is_numeric($cloud_data_storage_solution_score) + is_numeric($member_cisp_score) + is_numeric($device_to_employees_score) + is_numeric($password_rules_score) + is_numeric($employees_use_remotely_score) + is_numeric($vpn_software_score);
		
		//escalation score calcualation end//
		/* Max Calculation of Escalataion Value Start */
		$get_tech_max_scores = $this->results_m->fetch_tech_max();
		foreach($get_tech_max_scores AS $each_max_score){
			if($each_max_score->score_type == 'Max Operating System Score'){
				$max_operating_system_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Antivirus Score'){
				$max_antivirus_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Firewall Score'){
				$max_firewall_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max System Admin Score'){
				$max_system_admin_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Internet Score'){
				$max_internet_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Internet Option Score'){
				$max_internet_option_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Wifi Option Score'){
				$max_wifi_option_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Wpa2 Score'){
				$max_wpa2_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Browser Score'){
				$max_browser_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Update Browser Score'){
				$max_update_browser_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Ad Blocking Score'){
				$max_ad_blocking_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Web Hosting Score'){
				$max_web_hosting_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Web Hosting Option Score'){
				$max_web_hosting_option_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Hacking Score'){
				$max_hacking_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Logs Score'){
				$max_logs_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Software Update Score'){
				$max_software_update_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Data Encrypt Score'){
				$max_data_encrypt_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max System Access Score'){
				$max_system_access_score = $each_max_score->max_score;
			}
			if($each_max_score->score_type == 'Max Directory Service Score'){
				$max_directory_service_score = $each_max_score->max_score;
			}
		}

		/*$max_antivirus_score = "0.2";
		$max_firewall_score = "0.4";
		$max_system_admin_score = "0.4";
		$max_internet_score = "0.5";
		$max_internet_option_score = "0.5";
		$max_wifi_option_score = "0.5";
		$max_wpa2_score = "0.5";
		$max_browser_score = "0.4";
		$max_update_browser_score = "0.4";
		$max_ad_blocking_score = "0.4";
		$max_web_hosting_score = "0.5";
		$max_web_hosting_option_score = "0.5";
		$max_hacking_score = "0.6";
		$max_logs_score = "0.6";
		$max_software_update_score = "0.6";
		$max_data_encrypt_score = "0.6";
		$max_system_access_score = "0.6";
		$max_directory_service_score = "0.6";*/

		/* Technical Ends */

		//non tech max score start//
		$get_non_tech_max_scores = $this->results_m->fetch_non_tech_max();
		foreach($get_non_tech_max_scores AS $each_non_tech_max_score){
			if($each_non_tech_max_score->score_type == 'Business Continuity Plan Max Score'){
				// Do you have a business continuity plan? 
				$business_continuity_plan_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Business Continuity Procedure Max Score'){
				// Which Business Continuity Procedures do you use? 
				$business_continuity_procedure_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Regular Backup Max Score'){
				 // Does your business have regular backups? /
				$regular_backup_maxscore = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Aware Information Security Standard Max Score'){
				 // Are you aware of Information Security standards?  /
				$aware_information_security_standard_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Training Cybersecurity Max Score'){
				 // Please tell us if your staff have had Cybersecurity training only, Physical training, Both or no training? /
				$training_cybersecurity_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'IT Governance Policy Max Score'){
				 // Do you have any IT governance policies? /
				$it_governance_policy_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Cyber Insurance Max Score'){
				  // Do you have cyber insurance? / 
				$cyber_insurance_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Threat Detection Max Score'){
				  // Do you have threat detection and prevention solutions? /
				$threat_detection_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Cloud Data Storage Solution Max Score'){
				  // Do you use cloud data storage solutions? /
				$cloud_data_storage_solutio_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Member CISP Max Score'){
				 // Are you a member of CISP? /
				$member_cisp_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Device To Employees Max Score'){
				 // What devices do you issue to your employees? /
				$device_to_employees_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Password Rules Max Score'){
				  // Do you implement simple but adequate password rules that encourage users to have long, random passwords? /
				$password_rules_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'Employees Use Remotely Max Score'){
				  // Do your employees use these devices remotely? /
				$employees_use_remotely_max_score = $each_non_tech_max_score->max_score;
			}
			if($each_non_tech_max_score->score_type == 'VPN Software Max Score'){
				  // Do you have Virtual Private Networks (VPN) software? /
				$vpn_software_max_score = $each_non_tech_max_score->max_score;
			}
		}

		  //non tech max score end//
		$max_esclalation_value = $max_antivirus_score + $max_firewall_score + $max_system_admin_score + $max_internet_score + $max_internet_option_score + $max_wifi_option_score + $max_wpa2_score + $max_browser_score + $max_update_browser_score + $max_ad_blocking_score + $max_web_hosting_score + $max_web_hosting_option_score + $max_hacking_score + $max_logs_score + $max_software_update_score + $max_data_encrypt_score + $max_system_access_score + $max_directory_service_score + $business_continuity_plan_max_score + $business_continuity_procedure_max_score + $regular_backup_maxscore + $aware_information_security_standard_max_score + $training_cybersecurity_max_score + $it_governance_policy_max_score + $cyber_insurance_max_score + $threat_detection_max_score + $cloud_data_storage_solutio_max_score + $member_cisp_max_score + $device_to_employees_max_score + $password_rules_max_score + $employees_use_remotely_max_score + $vpn_software_max_score;

		/* Max Calculation of Escalataion Value End */	
			
		/*  Calculation of Normal Score Start */
			 $category_risk_score = $gv_score*(($c_risk/15)*100)*($c_risk*$escalation_score);
		/*  Calculation of Normal Score End */

		/* Max Calculation of Normal Score Start */
			 $max_category_risk_score = $gv_score*(($c_risk/15)*100)*($c_risk*$max_esclalation_value);
		/* Max Calculation of Normal Score End */

		/* Final Risk Score Start */
			 $risk_score = ($category_risk_score / $max_category_risk_score);
			 
		/* Final Risk Score Ends */

		if($risk_score > 0 && $risk_score <= 33 ){
			$protection_level = "basic";
		}else if($risk_score > 33 && $risk_score <= 66){
			$protection_level = "advanced";
		}else if($risk_score > 66){
			$protection_level = "complete";
		}
		/*echo $risk_score;
		echo "<br/>";
		echo $protection_level;
		exit;*/
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);

		// budget for cybersecurity per year
		//$budget_cybersecurity_per_year_input = $get_budget->budget_cybersecurity_per_year_input;
		
		
		/* basic services information ends */

		$data['suppliers_data'] = $this->results_m->fetch_suppliers();
		$data['category'] = $this->results_m->fetch_category();

		$user_location = explode(',',$get_basic->location_business_input);
		$count_array = sizeof($user_location);
		$location_clause = "";
		foreach($user_location as $key => $value)
		{
			$location_clause .= "'location' like '%".$value."%'";
			if($key < $count_array-1){
				$location_clause .= " OR ";
			}
		}
		
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget = $get_budget->budget_cybersecurity_per_year_input;
		$os_input = $get_tech->os_input;
		
		if($get_basic->employees_input == "1-500")
		{
			$get_sme = "Small";
		}
		else if($get_basic->employees_input == "500-5000")
		{
			$get_sme = "Medium";
		}
		else if($get_basic->employees_input == "5000 >")
		{
			$get_sme = "Enterprise";
		}
		
		/*Fetching currency from location starts */
		if(isset($_SERVER['HTTP_CLIENT_IP']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && $_SERVER['REMOTE_ADDR']){	
			$client  = $_SERVER['HTTP_CLIENT_IP'];
			$forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
			$remote  = $_SERVER['REMOTE_ADDR'];
			$result  = array('country'=>'', 'city'=>'','currencyCode'=>'');
			if(filter_var($client, FILTER_VALIDATE_IP)){
				$ip = $client;
			}else if(filter_var($forward, FILTER_VALIDATE_IP)){
				$ip = $forward;
			}else{
				$ip = $remote;
			}
			$ip_data = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
			if($ip_data && $ip_data->geoplugin_countryName != null){
				$result['country'] = $ip_data->geoplugin_countryName;
				$result['city'] = $ip_data->geoplugin_city;
				$result['currencyCode'] = $ip_data->geoplugin_currencyCode;
			}
		}
			//$data['currencyCode'] = $result['currencyCode'];
			$data['currencyCode'] = 'GBP';
	   /* Fetching currency from location Ends */
		
		/* Sorting category of bundle Starts */
			// Total Operating System Score
			if(isset($this->session->userdata['results']['session_opt_system']) && $this->session->userdata['results']['session_opt_system'] != ''){
				$total_operating_system_bundle_score = $this->session->userdata['results']['session_opt_system']/10;
				$max_operating_system_bundle_score = $max_operating_system_score;
				$round_max_bundle_operating_system_score = round($max_operating_system_bundle_score,1);
				
				$round_bundle_operating_system_score = $total_operating_system_bundle_score;
			}else{
				$total_operating_system_bundle_score = $operating_score;
				$max_operating_system_bundle_score = $max_operating_system_score;
				$round_max_bundle_operating_system_score = round($max_operating_system_bundle_score,1);
				
				$bundle_operating_system_score = ($total_operating_system_bundle_score / $max_operating_system_bundle_score);
				$round_bundle_operating_system_score = round($bundle_operating_system_score,1);
			}	
			
			// Total Internet Score
			if(isset($this->session->userdata['results']['session_internet']) && $this->session->userdata['results']['session_internet'] != ''){
				$total_internet_bundle_score = $this->session->userdata['results']['session_internet']/10;
				$max_internet_bundle_score = $max_wifi_option_score + $max_ad_blocking_score;
				$round_max_bundle_internet_score = round($max_internet_bundle_score,1);
				$round_bundle_internet_score = $total_internet_bundle_score;
			}else{
				$total_internet_bundle_score = $wifi_option_score + $ad_blocking_score;
				$max_internet_bundle_score = $max_wifi_option_score + $max_ad_blocking_score;
				$round_max_bundle_internet_score = round($max_internet_bundle_score,1);

				$bundle_internet_score = ($total_internet_bundle_score / $max_internet_bundle_score);
				$round_bundle_internet_score = round($bundle_internet_score,1);
			}
			
				
			// Total Antivirus Score
			if(isset($this->session->userdata['results']['session_antivirus']) && $this->session->userdata['results']['session_antivirus'] != ''){
				$total_antivirus_bundle_score = $this->session->userdata['results']['session_antivirus']/10;
				$max_antivirus_bundle_score = $max_antivirus_score;
				$round_max_bundle_antivirus_score = round($max_antivirus_bundle_score,1);
				$round_bundle_antivirus_score = $total_antivirus_bundle_score;
			}else{
				$total_antivirus_bundle_score = $antivirus_score;
				$max_antivirus_bundle_score = $max_antivirus_score;
				$round_max_bundle_antivirus_score = round($max_antivirus_bundle_score,1);

				$bundle_antivirus_score = ($total_antivirus_bundle_score / $max_antivirus_bundle_score);
				$round_bundle_antivirus_score = round($bundle_antivirus_score,1);
			}
			

			// Total Firewall Score
			if(isset($this->session->userdata['results']['session_firewall']) && $this->session->userdata['results']['session_firewall'] != ''){
				$total_firewall_bundle_score = $this->session->userdata['results']['session_firewall']/10;
				$max_firewall_bundle_score = $max_firewall_score;
				$round_max_bundle_firewall_score = round($max_firewall_bundle_score,1);

				$round_bundle_firewall_score = $total_firewall_bundle_score;
			}else{
				$total_firewall_bundle_score = $firewall_score;
				$max_firewall_bundle_score = $max_firewall_score;
				$round_max_bundle_firewall_score = round($max_firewall_bundle_score,1);

				$bundle_firewall_score = ($total_firewall_bundle_score / $max_firewall_bundle_score);
				$round_bundle_firewall_score = round($bundle_firewall_score,1);
			}
			

			// Total Access Control Score
			if(isset($this->session->userdata['results']['session_access_control']) && $this->session->userdata['results']['session_access_control'] != ''){
				$total_access_control_bundle_score = $this->session->userdata['results']['session_access_control']/10;
				$max_access_control_bundle_score = $max_data_encrypt_score + $max_directory_service_score + $max_software_update_score + $max_logs_score + $max_system_access_score;
				$round_max_bundle_access_control_score = round($max_access_control_bundle_score,1);
				$round_bundle_access_control_score = $total_access_control_bundle_score;
			}else{
				$total_access_control_bundle_score = $data_encrypt_score + $directory_service_score + $software_update_score + $logs_score + $system_access_score;
				$max_access_control_bundle_score = $max_data_encrypt_score + $max_directory_service_score + $max_software_update_score + $max_logs_score + $max_system_access_score;
				$round_max_bundle_access_control_score = round($max_access_control_bundle_score,1);

				$bundle_access_control_score = ($total_access_control_bundle_score / $max_access_control_bundle_score);
				$round_bundle_access_control_score = round($bundle_access_control_score,1);
			}
			


			// Total Data Score
			if(isset($this->session->userdata['results']['session_data_protection']) && $this->session->userdata['results']['session_data_protection'] != ''){
				$total_data_bundle_score = $this->session->userdata['results']['session_data_protection']/10;
				$max_data_bundle_score = "0";
				$round_max_bundle_data_score = "0";
				$round_bundle_data_score = $total_data_bundle_score;
			}else{
				$total_data_bundle_score = "0";
				$max_data_bundle_score = "0";
				$round_max_bundle_data_score = "0";
				$round_bundle_data_score = "0";
			}
			

			// Total Managed Service Solution Providers Score
			if(isset($this->session->userdata['results']['session_managed_service']) && $this->session->userdata['results']['session_managed_service'] != ''){
				$total_mssp_bundle_score = $this->session->userdata['results']['session_managed_service']/10;
				$max_mssp_bundle_score = "0";
				$round_max_bundle_mssp_score = "0";
				$round_bundle_mssp_score = $total_mssp_bundle_score;
			}else{
				$total_mssp_bundle_score = "0";
				$max_mssp_bundle_score = "0";
				$round_max_bundle_mssp_score = "0";
				$round_bundle_mssp_score = "0";
			}
			
			
			// Total Business Continuity Score
			if(isset($this->session->userdata['results']['session_business_continuity']) && $this->session->userdata['results']['session_business_continuity'] != ''){
				$total_business_continuity_bundle_score = $this->session->userdata['results']['session_business_continuity']/10;
				$max_business_continuity_bundle_score = $business_continuity_procedure_max_score;
				$round_max_bundle_business_continuity_score = round($max_business_continuity_bundle_score,1);
				$round_bundle_business_continuity_score = $total_business_continuity_bundle_score;
			}else{
				$total_business_continuity_bundle_score = $business_continuity_procedure_score;
				$max_business_continuity_bundle_score = $business_continuity_procedure_max_score;
				$round_max_bundle_business_continuity_score = round($max_business_continuity_bundle_score,1);

				$bundle_business_continuity_score = ($total_business_continuity_bundle_score / $max_business_continuity_bundle_score);
				$round_bundle_business_continuity_score = round($bundle_business_continuity_score,1);
			}
			
			
			// Total Accreditation / Regulation Score
			if(isset($this->session->userdata['results']['session_accreditation_regulation']) && $this->session->userdata['results']['session_accreditation_regulation'] != ''){
				$total_accredition_regulation_bundle_score = $this->session->userdata['results']['session_accreditation_regulation']/10;
				$max_accredition_regulation_bundle_score = $aware_information_security_standard_max_score;
				$round_max_bundle_accredition_regulation_score = round($max_accredition_regulation_bundle_score,1);
				$round_bundle_accredition_regulation_score = $total_accredition_regulation_bundle_score;
			}else{
				$total_accredition_regulation_bundle_score = $aware_information_security_standard_score;
				$max_accredition_regulation_bundle_score = $aware_information_security_standard_max_score;
				$round_max_bundle_accredition_regulation_score = round($max_accredition_regulation_bundle_score,1);

				$bundle_accredition_regulation_score = ($total_accredition_regulation_bundle_score / $max_accredition_regulation_bundle_score);
				$round_bundle_accredition_regulation_score = round($bundle_accredition_regulation_score,1);
			}
			
			// Total Training Score
			if(isset($this->session->userdata['results']['session_training']) && $this->session->userdata['results']['session_training'] != ''){
				$total_training_bundle_score = $this->session->userdata['results']['session_training']/10;
				$max_training_bundle_score = $training_cybersecurity_max_score;
				$round_max_bundle_training_score = round($max_training_bundle_score,1);
				$round_bundle_training_score = $total_training_bundle_score;
			}else{
				$total_training_bundle_score = $training_cybersecurity_score;
				$max_training_bundle_score = $training_cybersecurity_max_score;
				$round_max_bundle_training_score = round($max_training_bundle_score,1);

				$bundle_training_score = ($total_training_bundle_score / $max_training_bundle_score);
				$round_bundle_training_score = round($bundle_training_score,1);
			}
			

			// Total Reputation Management Score
			if(isset($this->session->userdata['results']['session_reputation_manage']) && $this->session->userdata['results']['session_reputation_manage'] != ''){
				$total_reputation_manage_bundle_score = $this->session->userdata['results']['session_reputation_manage']/10;
				$max_reputation_manage_bundle_score = $cyber_insurance_max_score + $threat_detection_max_score + $cloud_data_storage_solutio_max_score + $member_cisp_max_score;
				$round_max_bundle_reputation_manage_score = round($max_reputation_manage_bundle_score,1);
				$round_bundle_reputation_manage_score = $total_reputation_manage_bundle_score;
			}else{
				$total_reputation_manage_bundle_score = $cyber_insurance_score + $threat_detection_score + $cloud_data_storage_solution_score + $member_cisp_score;
				$max_reputation_manage_bundle_score = $cyber_insurance_max_score + $threat_detection_max_score + $cloud_data_storage_solutio_max_score + $member_cisp_max_score;
				$round_max_bundle_reputation_manage_score = round($max_reputation_manage_bundle_score,1);

				$bundle_reputation_manage_score = ($total_reputation_manage_bundle_score / $max_reputation_manage_bundle_score);
				$round_bundle_reputation_manage_score = round($bundle_reputation_manage_score,1);
			}
			

			// Total Password Policy Score
			if(isset($this->session->userdata['results']['session_password_policy']) && $this->session->userdata['results']['session_password_policy'] != ''){
				$total_password_policy_bundle_score = $this->session->userdata['results']['session_password_policy']/10;
				$max_password_policy_bundle_score = $password_rules_max_score;
				$round_max_bundle_password_policy_score = round($max_password_policy_bundle_score,1);
				$round_bundle_password_policy_score = $total_password_policy_bundle_score;
			}else{
				$total_password_policy_bundle_score = $password_rules_score;
				$max_password_policy_bundle_score = $password_rules_max_score;
				$round_max_bundle_password_policy_score = round($max_password_policy_bundle_score,1);

				$bundle_password_policy_score = ($total_password_policy_bundle_score / $max_password_policy_bundle_score);
				$round_bundle_password_policy_score = round($bundle_password_policy_score,1);
			}
			

			// Total Devices Score
			if(isset($this->session->userdata['results']['session_device']) && $this->session->userdata['results']['session_device'] != ''){
				$total_devices_bundle_score = $this->session->userdata['results']['session_device']/10;
				$max_devices_bundle_score = $device_to_employees_max_score;
				$round_max_bundle_devices_score = round($max_devices_bundle_score,1);

				$round_bundle_devices_score = $total_devices_bundle_score;
			}else{
				$total_devices_bundle_score = $device_to_employees_score;
				$max_devices_bundle_score = $device_to_employees_max_score;
				$round_max_bundle_devices_score = round($max_devices_bundle_score,1);

				$bundle_devices_score = ($total_devices_bundle_score / $max_devices_bundle_score);
				$round_bundle_devices_score = round($bundle_devices_score,1);
			}
			

			// Total Remote working Score
			if(isset($this->session->userdata['results']['session_remote_working']) && $this->session->userdata['results']['session_remote_working'] != ''){
				$total_remote_working_bundle_score = $this->session->userdata['results']['session_remote_working']/10;
				$max_remote_working_bundle_score = $employees_use_remotely_max_score;
				$round_max_bundle_remote_working_score = round($max_remote_working_bundle_score,1);

				$round_bundle_remote_working_score = $total_remote_working_bundle_score;
			}else{
				$total_remote_working_bundle_score = $employees_use_remotely_score;
				$max_remote_working_bundle_score = $employees_use_remotely_max_score;
				$round_max_bundle_remote_working_score = round($max_remote_working_bundle_score,1);

				$bundle_remote_working_score = ($total_remote_working_bundle_score / $max_remote_working_bundle_score);
				$round_bundle_remote_working_score = round($bundle_remote_working_score,1);
			}
			

			// Total Consultancy/Implementation Score
			if(isset($this->session->userdata['results']['session_consultancy']) && $this->session->userdata['results']['session_consultancy'] != ''){
				$total_consultancy_implement_bundle_score = $this->session->userdata['results']['session_consultancy']/10;
				$max_consultancy_implement_bundle_score = "0";
				$round_max_bundle_consultancy_implement_score = "0";
				$round_bundle_consultancy_implement_score = $total_consultancy_implement_bundle_score;
			}else{
				$total_consultancy_implement_bundle_score = "0";
				$max_consultancy_implement_bundle_score = "0";
				$round_max_bundle_consultancy_implement_score = "0";
				$round_bundle_consultancy_implement_score = "0";
			}

			$total_score = array(
				"Operating System" => $round_bundle_operating_system_score,
				"Internet" => $round_bundle_internet_score,
				"Antivirus" => $round_bundle_antivirus_score,
				"Firewall" => $round_bundle_firewall_score,
				"Access Control" => $round_bundle_access_control_score,
				"Data" => $round_bundle_data_score,
				"Managed Service Solution Provider" => $round_bundle_mssp_score,
				"Business Continuity" => $round_bundle_business_continuity_score,
				"Accreditation/Regulation" => $round_bundle_accredition_regulation_score,
				"Training" => $round_bundle_training_score,
				"Reputation Management" => $round_bundle_reputation_manage_score,
				"Password Policy" => $round_bundle_password_policy_score,
				"Devices" => $round_bundle_devices_score,
				"Remote working" => $round_bundle_remote_working_score,
				"Consultancy/Implementation" => $round_bundle_consultancy_implement_score
			);

			return $total_score;
	}
}
?>