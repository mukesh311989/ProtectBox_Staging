<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
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
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }
	
	public function index()
	{
		$this->load->model('results_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget = $get_budget->budget_cybersecurity_per_year_input;

		$data['currencyCode'] = $get_budget->preferred_budget_breakdown_currency_input;
			/* Fetching currency from location Ends */
            if(isset($this->session->userdata['results']['session_price_range']) && $this->session->userdata['results']['session_price_range'] != ''){
                $user_budget_per_year = $this->session->userdata['results']['session_price_range'];
            }else{
                $user_budget_per_year = $user_budget;
            }
			$top_price_rangezz = $this->input->get('price_range');
			if($top_price_rangezz != ""){
			  	$array_price_range = str_replace("-",",",$top_price_rangezz); 
			  	$explode = explode(",",$array_price_range);
			  	$max_range = max($explode);
			  	$min_range = min($explode);
			}else{
				$max_range = $user_budget_per_year;
				$min_range = 0;
			}
			
			$data['smb_bundles_fnal'] = $this->results_m->result_bundle_final_dominator($user_id);
			$data['smb_bundles'] = $this->results_m->result_bundle_dominator($user_id,$max_range,$min_range);

			$data['sidebar_json'] = $this->results_m->check_results_sidebar($user_id);
			if(!empty($data['sidebar_json'])){
				$supplier_explode = explode(',',$data['sidebar_json']->top_filter_supplier);
				$data['top_filter_supplier'] = $supplier_explode;

				$solution_explode = explode(',',$data['sidebar_json']->top_filter_solution);
				$data['top_filter_solution'] = $solution_explode;

				$data['top_filter_price_range'] = $data['sidebar_json']->top_filter_price_range;
			}

			//finally results data loop fetch
				
			//finally results data loop fetch ends
			$amar_bundlekoto_choto = $this->results_m->result_bungle_dominator_min($user_id);
			$data['smb_bundles_min'] = round($amar_bundlekoto_choto->total_bundle_price,2);

			$amar_bundle_kotoboro = $this->results_m->result_bungle_dominator_max($user_id);
			$data['smb_bundles_max'] = round($amar_bundle_kotoboro->total_bundle_price,2);
			
	///////////////////////// TOP FILTERS OPTION FETCH ////////////////////////////////////////////
			
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
			$some = $explode_suppliers;
			asort($some, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
			
			$data['unique_supp'] = array_unique($some);

			// SUPPLIER NAME ENDS
			// PRODUCT CATEGORY STARTS
			$explode_supplier_category = explode(",",$fetch_product_category_array);
			$some_cat = $explode_supplier_category;
			asort($some_cat, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
			$data['unique_supplier_category'] = array_unique($some_cat);

			// PRODUCT CATEGORY ENDS
			// PRICE RANGE STARTS
			$unique_price_range = $this->results_m->fetch_price_range();
			$price_range = "";
			foreach($unique_price_range AS $each_price){
				$price_range .= $each_price->price_range;
				$price_range .= ",";
			}
			$exploade_price_range = explode(",",$price_range);
			$some_price = $exploade_price_range;
			asort($some_price, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
			$data['all_price_range'] = $some_price;
			// PRICE RANGE ENDS
			// SUPPLIER, SOLUTION & PRICE RANGE FOR TOP FILTER ENDS
			
	///////////////////////// LEFT SLIDERS DATA //////////////////////////////////////////////////
				//Budget min max calculation starts here
			    $min_budget = $this->results_m->fetch_min_budget($user_id);
			    $data['min_budget'] = round($min_budget->total_bundle_price,2);

			    $max_budget = $this->results_m->fetch_max_budget($user_id);
			    $data['max_budget'] = round($max_budget->total_bundle_price,2);
			    //$data['max_budget'] = $max_budget->supplier_package_price;

			    $data['smb_budget'] = $user_budget;
			    //Budget min max calculation ends here

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

		/* Sorting category of bundle Ends */
			$this->load->view('results',$data);
		
	}
	
	public function left_sidebar(){	
		$this->load->model('results_m');

		$budget = $this->input->post('budget');
		$antivirus = $this->input->post('antivirus');
		$opt_system = $this->input->post('opt_system');
		$firewall = $this->input->post('firewall');
		$internet = $this->input->post('internet');
		$access_control = $this->input->post('access_control');
		$data_protection = $this->input->post('data_protection');
		$managed_service = $this->input->post('managed_service');
		$business_continuity = $this->input->post('business_continuity');
		$password_policy = $this->input->post('password_policy');
		$accreditation_regulation = $this->input->post('accreditation_regulation');
		$device = $this->input->post('device');
		$training = $this->input->post('training');
		$remote_working = $this->input->post('remote_working');
		$reputation_manage = $this->input->post('reputation_manage');
		$consultancy = $this->input->post('consultancy');

		$advance_filter_session = array(
				'session_price_range' => $budget,
				'session_antivirus' => $antivirus,
				'session_opt_system' => $opt_system,
				'session_firewall' => $firewall,
				'session_internet' => $internet,
				'session_access_control' => $access_control,
				'session_data_protection' => $data_protection,
				'session_managed_service' => $managed_service,
				'session_business_continuity' => $business_continuity,
				'session_password_policy' => $password_policy,
				'session_accreditation_regulation' => $accreditation_regulation,
				'session_device' => $device,
				'session_training'=> $training,
				'session_remote_working' => $remote_working,
				'session_reputation_manage' => $reputation_manage,
				'session_consultancy' => $consultancy
		);
		
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$check_rows = $this->results_m->check_results_sidebar($user_id);

		$records = array(
			'user_id' => $user_id,
			'sidebar_price' => $budget,
			'sidebar_antivirus' => $antivirus,
			'sidebar_operating_system' => $opt_system,
			'sidebar_firewall' => $firewall,
			'sidebar_internet' => $internet,
			'sidebar_access_control' => $access_control,
			'sidebar_data_protection' => $data_protection,
			'sidebar_managed_service' => $managed_service,
			'sidebar_business_continuity' => $business_continuity,
			'sidebar_password_policy' => $password_policy,
			'sidebar_accreditation_regulation' => $accreditation_regulation,
			'sidebar_device' => $device,
			'sidebar_training' => $training,
			'sidebar_remote_working' => $remote_working,
			'sidebar_reputation_manage' => $reputation_manage,
			'sidebar_consultancy' => $consultancy,
			'date' => time()
		);
		
		if(empty($check_rows)){
			$response = $this->results_m->insert_sidebar_data($records);
		}else{
			$response = $this->results_m->update_sidebar_data($records,$check_rows->results_sidebar_data_id);
		}

		$unset_progress = $this->session->unset_userdata('progress');
		$session_results_filter = $this->session->set_userdata('results',$advance_filter_session);
		redirect('bundle_json');
	}

	public function top_filter(){
		$this->load->model('results_m');

		$supplier_top_filter = $this->input->get('suppliers');
		$solution_top_filter = $this->input->get('solution');
		$price_range_top_filter = $this->input->get('price_range');

		$top_filter_session = array(
			'session_suppliers' => $supplier_top_filter,
			'session_solution' => $solution_top_filter,
			'session_price_range_top' => $price_range_top_filter
		);
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$check_rows = $this->results_m->check_results_sidebar($user_id);

		$implode_supplier = '';
		if (!empty($supplier_top_filter)) {
			$implode_supplier = implode(',',$supplier_top_filter);
		}

		$implode_solution = '';
		if (!empty($solution_top_filter)) {
			$implode_solution = implode(',',$solution_top_filter);
		}

		$records = array(
			'user_id' => $user_id,
			'top_filter_supplier' => $implode_supplier,
			'top_filter_solution' => $implode_solution,
			'top_filter_price_range' => $price_range_top_filter,
			'date' => time()
		);

		if(empty($check_rows)){
			$response = $this->results_m->insert_sidebar_data($records);
		}else{
			$response = $this->results_m->update_sidebar_data($records,$check_rows->results_sidebar_data_id);
		}

		$this->session->set_userdata('top_filter',$top_filter_session);
		redirect('bundle_json');
	}

	public function clear_sidebar(){
		unset($_SESSION['results']);
		redirect('bundle_json');
	}
	public function clear_filter(){
		unset($_SESSION['top_filter']);
		redirect('bundle_json');
	}

	public function bundle_array(){
		$this->load->model('results_m');
		$smb_id = $this->session->userdata['logged_in']['user_id'];
		$bundle = $this->input->post('bundle_idz');
		
		$date = time();
		$bundle_data = array(
			'smb_id' => $smb_id,
			'bundle_array' => $bundle,
			'date' => $date
		);
	    $insert_bundle_data = $this->results_m->bundle_insert($bundle_data);
	    if($insert_bundle_data != ""){
	    	redirect('payment_process/'.$insert_bundle_data);
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
		
			$data['currencyCode'] = $get_budget->preferred_budget_breakdown_currency_input;
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

	public function openrange_map(){
		$this->load->model('results_m');
		$fetch_td_part = $this->results_m->fetch_service_data();

	}
}
?>