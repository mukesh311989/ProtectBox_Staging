<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_results extends CI_Controller {
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }
	
	public function index()
	{
		//gv score calcualation start//
		$this->load->model('questionaire_m');
		$this->load->model('questionaire_tech_info_m');
		

		$user_id = $this->session->userdata['logged_in']['user_id'];

		$get_tech = $this->questionaire_tech_info_m->fetch_technical($user_id);
		$get_basic = $this->questionaire_m->fetch_basic($user_id);

		$business_score = $get_basic->industry_score;
		if($get_basic->employees_input == "1-500")
		{
			$sme_risk_score = "5";
		}
		else if($get_basic->employees_input == "500-5000")
		{
			$sme_risk_score = "10";
		}
		else if($get_basic->employees_input == "5000 >")
		{
			$sme_risk_score = "15";
		}
		
		$os_score = $get_tech->os_score;

		$gv_score = ($os_score + $business_score + $sme_risk_score)/10;

		/*$gv_records = array(
						'user_id' => $user_id,
						'gv_score' => $gv_score,
						'date' => $date
					   );
		$check_score_row = $this->questionaire_tech_info_m->score_row($user_id);
		if($check_score_row > 0)
		{
			$update_score = $this->questionaire_tech_info_m->update_gv($gv_records,$user_id);
		}
		else{
			$insert_score = $this->questionaire_tech_info_m->insert_gv($gv_records);
		}*/
		//gv score calcualation end//

		//c score calcualation start//

		$antivirus_c_score = "8";
		$bcp_c_score = "8";
		$firewall_c_score = "8";
		$governence_c_score = "8";
		$hacking_c_score = "8";
		$internet_c_score = "8";
		$pharming_c_score = "8";
		$phishing_c_score = "8";
		$reputation_c_score = "8";
		$system_c_score = "8";

		$c_risk = $antivirus_c_score + $bcp_c_score + $firewall_c_score + $governence_c_score + $hacking_c_score + $internet_c_score + $pharming_c_score + $phishing_c_score + $reputation_c_score + $system_c_score;

		//c score calcualation end//

		//escalation score calcualation start//

		$this->load->model('questionaire_non_tech_m');
		$get_non_tech = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);

		//tech score start//
		$antivirus_score = $get_tech->antivirus_score;

		$firewall_score = $get_tech->firewall_score;

		$system_admin_score = $get_tech->system_admin_score;

		$hacking_score = $get_tech->hacking_score;

		$logs_score = $get_tech->logs_score;

		$software_update_score = $get_tech->software_update_score;

		$data_encrypt_score = $get_tech->data_encrypt_score;

		$system_access_score = $get_tech->system_access_score;

		$directory_service_score = $get_tech->directory_service_score;

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

		$escalation_score = $antivirus_score + $firewall_score + $system_admin_score + $hacking_score + $logs_score + $software_update_score + $data_encrypt_score + $system_access_score + $directory_service_score + $internet_score + $internet_option_score + $wifi_option_score + $wpa2_score + $web_hosting_score + $web_hosting_option_score + $browser_score + $update_browser_score + $ad_blocking_score + $server_option_score +	$antivirus_score + $antivirus_score + $antivirus_score + $business_continuity_plan_score + $business_continuity_procedure_score + $regular_backup_score + $aware_information_security_standard_score + $training_cybersecurity_score + $it_governance_policy_score + $cyber_insurance_score + $threat_detection_score + $cloud_data_storage_solution_score + $member_cisp_score + $device_to_employees_score + $password_rules_score + $employees_use_remotely_score + $vpn_software_score;

		//escalation score calcualation end//
		/* Max Calculation of Escalataion Value Start */
		$max_antivirus_score = "0.2";
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
		$max_directory_service_score = "0.6";

		/* Technical Ends */

		//non tech max score start//

		  // Do you have a business continuity plan? 

		  $business_continuity_plan_max_score = "0.6";

		  // Which Business Continuity Procedures do you use? 

		  $business_continuity_procedure_max_score = "0.6";

		  // Does your business have regular backups? /

		  $regular_backup_maxscore = "0.6";

		  // Are you aware of Information Security standards?  /

		  $aware_information_security_standard_max_score = "0.4";

		  // Please tell us if your staff have had Cybersecurity training only, Physical training, Both or no training? /

		  $training_cybersecurity_max_score = "0.4";

		  // Do you have any IT governance policies? /

		  $it_governance_policy_max_score = "0.4";

		  // Do you have cyber insurance? / 

		  $cyber_insurance_max_score = "0.5";

		  // Do you have threat detection and prevention solutions? /

		  $threat_detection_max_score = "0.5";

		  // Do you use cloud data storage solutions? /

		  $cloud_data_storage_solutio_max_score = "0.5";

		  // Are you a member of CISP? /

		  $member_cisp_max_score = "0.5";

		  // What devices do you issue to your employees? /

		  $device_to_employees_max_score = "0.5";

		  // Do you implement simple but adequate password rules that encourage users to have long, random passwords? /

		  $password_rules_max_score = "0.5";

		  // Do your employees use these devices remotely? /

		  $employees_use_remotely_max_score = "0.5";

		  // Do you have Virtual Private Networks (VPN) software? /

		  $vpn_software_max_score = "0.5";

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
		$this->load->model('results_m');
		
		
		/* basic services information ends */

		$data['suppliers_data'] = $this->results_m->fetch_suppliers();
		$data['location_data'] = $this->results_m->fetch_location();

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
		$data['results_data'] = $this->results_m->fetch_results($protection_level,$user_location,$user_budget,$os_input,$get_sme);
		
		


		/* Sorting category of bundle Starts */
			// Total Antivirus Score

				$total_antivirus_bundle_score = $antivirus_score;
				/*$total_antivirus_bundle = $gv_score*(($antivirus_c_score/15)*100)*($antivirus_c_score*$total_antivirus_bundle_score);*/

				$max_antivirus_bundle_score = $max_antivirus_score;
				/*$max_antivirus_bundle = $gv_score*(($antivirus_c_score/15)*100)*($antivirus_c_score*$max_antivirus_bundle_score);*/

				$bundle_antivirus_score = ($total_antivirus_bundle_score / $max_antivirus_bundle_score);
				$round_bundle_antivirus_score = round($bundle_antivirus_score,2);
				/*echo "Total Antivirus score from table = ";
				echo $total_antivirus_bundle_score;
				echo "<br/>";
				echo "Total Antivirus Risk score = ";
				echo $total_antivirus_bundle;
				echo "<br/>";
				echo "Max Antivirus score = ";
				echo $max_antivirus_bundle_score;
				echo "<br/>";
				echo "Max Antivirus Risk score = ";
				echo $max_antivirus_bundle;
				echo "<br/>";
				echo "Antivirus Score = ";
				echo $bundle_antivirus_score;*/
				




			// Total Proxy Score
				$total_proxy_bundle_score = $internet_score + $internet_option_score + $wifi_option_score + $wpa2_score + $web_hosting_score + $web_hosting_option_score + $device_to_employees_score + $password_rules_score + $employees_use_remotely_score + $vpn_software_score;
				
				//$total_proxy_bundle = $gv_score*((($internet_c_score + $system_c_score)/15)*100)*(($internet_c_score + $system_c_score)*$total_proxy_bundle_score);

				$max_proxy_bundle_score = $max_internet_score + $max_internet_option_score + $max_wifi_option_score + $max_wpa2_score + $max_web_hosting_score + $max_web_hosting_option_score + $device_to_employees_max_score + $password_rules_max_score + $employees_use_remotely_max_score + $vpn_software_max_score;
				//$max_proxy_bundle = $gv_score*((($internet_c_score + $system_c_score)/15)*100)*(($internet_c_score + $system_c_score)*$max_proxy_bundle_score);

				$bundle_proxy_score = ($total_proxy_bundle_score / $max_proxy_bundle_score);
				$round_bundle_proxy_score= round($bundle_proxy_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Proxy score from table = ";
				echo $total_proxy_bundle_score;
				echo "<br/>";
				echo "Total Proxy Risk score = ";
				echo $total_proxy_bundle;
				echo "<br/>";
				echo "Max Proxy score = ";
				echo $max_proxy_bundle_score;
				echo "<br/>";
				echo "Max Proxy Risk score = ";
				echo $max_proxy_bundle;
				echo "<br/>";
				echo "Proxy Score = ";
				echo $bundle_proxy_score;*/
				
			// Total Audit Score
				$total_governance_bundle_score = $aware_information_security_standard_score + $training_cybersecurity_score + $it_governance_policy_score;
				//$total_governance_bundle = $gv_score*(($governence_c_score/15)*100)*($governence_c_score*$total_governance_bundle_score);
				
				$max_governance_bundle_score = $aware_information_security_standard_max_score + $training_cybersecurity_max_score + $it_governance_policy_max_score;
				//$max_governance_bundle = $gv_score*(($governence_c_score/15)*100)*($governence_c_score*$max_governance_bundle_score);

				$bundle_governance_score = ($total_governance_bundle_score / $max_governance_bundle_score);
				$round_bundle_governance_score = round($bundle_governance_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Audit score from table = ";
				echo $total_governance_bundle_score;
				echo "<br/>";
				echo "Total Audit Risk score = ";
				echo $total_governance_bundle;
				echo "<br/>";
				echo "Max Audit score = ";
				echo $max_governance_bundle_score;
				echo "<br/>";
				echo "Max Audit Risk score = ";
				echo $max_governance_bundle;
				echo "<br/>";
				echo "Audit Score = ";
				echo $bundle_governance_score;*/
				

			// Total Encryption Score
				$total_encrypt_bundle_score = $hacking_score + $logs_score + $software_update_score + $data_encrypt_score + $system_access_score + $directory_service_score;
				//$total_encrypt_bundle = $gv_score*(($hacking_c_score/15)*100)*($hacking_c_score*$total_encrypt_bundle_score);
				
				$max_encrypt_bundle_score = $max_hacking_score + $max_logs_score + $max_software_update_score + $max_data_encrypt_score + $max_system_access_score + $max_directory_service_score ;
				//$max_encrypt_bundle = $gv_score*(($hacking_c_score/15)*100)*($hacking_c_score*$max_encrypt_bundle_score);

				$bundle_encrypt_score = ($total_encrypt_bundle_score / $max_encrypt_bundle_score);
				$round_bundle_encrypt_score = round($bundle_encrypt_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Encryption score from table = ";
				echo $total_encrypt_bundle_score;
				echo "<br/>";
				echo "Total Encryption Risk score = ";
				echo $total_encrypt_bundle;
				echo "<br/>";
				echo "Max Encryption score = ";
				echo $max_encrypt_bundle_score;
				echo "<br/>";
				echo "Max Encryption Risk score = ";
				echo $max_encrypt_bundle;
				echo "<br/>";
				echo "Encryption Score = ";
				echo $bundle_encrypt_score;*/
				
			// Total Spam Filtering Score
				$total_spam_bundle_score = $firewall_score + $browser_score + $update_browser_score + $ad_blocking_score + $hacking_score + $logs_score + $software_update_score + $data_encrypt_score + $system_access_score + $directory_service_score ;
				//$total_spam_bundle = $gv_score*((($firewall_c_score + $pharming_c_score + $hacking_c_score)/15)*100)*(($firewall_c_score + $pharming_c_score + $hacking_c_score)*$total_spam_bundle_score);
				
				$max_spam_bundle_score = $max_firewall_score + $max_browser_score + $max_update_browser_score + $max_ad_blocking_score + $max_hacking_score + $max_logs_score + $max_software_update_score + $max_data_encrypt_score + $max_system_access_score + $max_directory_service_score ;
				//$max_spam_bundle = $gv_score*((($firewall_c_score + $pharming_c_score + $hacking_c_score)/15)*100)*(($firewall_c_score + $pharming_c_score + $hacking_c_score)*$max_spam_bundle_score);

				$bundle_spam_score = ($total_spam_bundle_score / $max_spam_bundle_score); 
				$round_bundle_spam_score = round($bundle_spam_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Spam Filtering score from table = ";
				echo $total_spam_bundle_score;
				echo "<br/>";
				echo "Total Spam Filtering Risk score = ";
				echo $total_spam_bundle;
				echo "<br/>";
				echo "Max Spam Filtering score = ";
				echo $max_spam_bundle_score;
				echo "<br/>";
				echo "Max Spam Filtering Risk score = ";
				echo $max_spam_bundle;
				echo "<br/>";
				echo "Spam Filtering Score = ";
				echo $bundle_spam_score;*/
			
			// Total Threat Prevention Score
				$total_threat_prevent_bundle_score = $business_continuity_plan_score + $business_continuity_procedure_score + $regular_backup_score + $hacking_score + $logs_score + $software_update_score + $data_encrypt_score + $system_access_score + $directory_service_score;
				//$total_threat_prevent_bundle = $gv_score*((($bcp_c_score + $hacking_c_score)/15)*100)*(($bcp_c_score + $hacking_c_score)*$total_threat_prevent_bundle_score);
				
				$max_threat_prevent_bundle_score = $business_continuity_plan_max_score + $business_continuity_procedure_max_score + $regular_backup_maxscore + $max_hacking_score + $max_logs_score + $max_software_update_score + $max_data_encrypt_score + $max_system_access_score + $max_directory_service_score;
				//$max_threat_prevent_bundle = $gv_score*((($bcp_c_score + $hacking_c_score)/15)*100)*(($bcp_c_score + $hacking_c_score)*$max_threat_prevent_bundle_score);

				$bundle_threat_prevent_score = ($total_threat_prevent_bundle_score / $max_threat_prevent_bundle_score); 
				$round_bundle_threat_prevent_score = round($bundle_threat_prevent_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Threat Prevention score from table = ";
				echo $total_threat_prevent_bundle_score;
				echo "<br/>";
				echo "Total Threat Prevention Risk score = ";
				echo $total_threat_prevent_bundle;
				echo "<br/>";
				echo "Max Threat Prevention score = ";
				echo $max_threat_prevent_bundle_score;
				echo "<br/>";
				echo "Max Threat Prevention Risk score = ";
				echo $max_threat_prevent_bundle;
				echo "<br/>";
				echo "Threat Prevention Score = ";
				echo $bundle_threat_prevent_score;*/

			// Total Data Storage Solutions Score
				$total_data_storage_bundle_score = $business_continuity_plan_score + $business_continuity_procedure_score + $regular_backup_score;
				//$total_data_storage_bundle = $gv_score*((($bcp_c_score)/15)*100)*(($bcp_c_score)*$total_data_storage_bundle_score);
				$max_data_storage_bundle_score = $business_continuity_plan_max_score + $business_continuity_procedure_max_score + $regular_backup_maxscore;
				//$max_data_storage_bundle = $gv_score*((($bcp_c_score)/15)*100)*(($bcp_c_score)*$max_data_storage_bundle_score);
				$bundle_data_storage_score = ($total_data_storage_bundle_score / $max_data_storage_bundle_score); 
				$round_bundle_data_storage_score = round($bundle_data_storage_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Data Storage score from table = ";
				echo $total_data_storage_bundle_score;
				echo "<br/>";
				echo "Total Data Storage Risk score = ";
				echo $total_data_storage_bundle;
				echo "<br/>";
				echo "Max Data Storage score = ";
				echo $max_data_storage_bundle_score;
				echo "<br/>";
				echo "Max Data Storage Risk score = ";
				echo $max_data_storage_bundle;
				echo "<br/>";
				echo "Data Storage Score = ";
				echo $bundle_data_storage_score;*/
			
			// Total Training Solutions Score
				$total_training_bundle_score = $aware_information_security_standard_score + $training_cybersecurity_score + $it_governance_policy_score;
				//$total_training_bundle = $gv_score*((($governence_c_score)/15)*100)*(($governence_c_score)*$total_training_bundle_score);
				$max_training_bundle_score = $aware_information_security_standard_max_score + $training_cybersecurity_max_score + $it_governance_policy_max_score;
				//$max_training_bundle = $gv_score*((($governence_c_score)/15)*100)*(($governence_c_score)*$max_training_bundle_score);
				$bundle_training_score = ($total_training_bundle_score / $max_training_bundle_score); 
				$round_bundle_training_score = round($bundle_training_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total Training score from table = ";
				echo $total_training_bundle_score;
				echo "<br/>";
				echo "Total Training Risk score = ";
				echo $total_training_bundle;
				echo "<br/>";
				echo "Max Training score = ";
				echo $max_training_bundle_score;
				echo "<br/>";
				echo "Max Training Risk score = ";
				echo $max_training_bundle;
				echo "<br/>";
				echo "Training Score = ";
				echo $bundle_training_score;*/

			// Total IDS Solutions Score
				$total_ids_bundle_score = $business_continuity_plan_score + $business_continuity_procedure_score + $regular_backup_score;

				//$total_ids_bundle = $gv_score*((($bcp_c_score)/15)*100)*(($bcp_c_score)*$total_ids_bundle_score);
				$max_ids_bundle_score = $business_continuity_plan_max_score + $business_continuity_procedure_max_score + $regular_backup_maxscore;
				//$max_ids_bundle = $gv_score*((($bcp_c_score)/15)*100)*(($bcp_c_score)*$max_ids_bundle_score);
				$bundle_ids_score = ($total_ids_bundle_score / $max_ids_bundle_score); 
				$round_bundle_ids_score = round($bundle_ids_score,2);
				/*echo "<br/>";
				echo "<br/>";
				echo "Total IDS Solution score from table = ";
				echo $total_ids_bundle_score;
				echo "<br/>";
				echo "Total IDS Solution Risk score = ";
				echo $total_ids_bundle;
				echo "<br/>";
				echo "Max IDS Solution score = ";
				echo $max_ids_bundle_score;
				echo "<br/>";
				echo "Max IDS Solution Risk score = ";
				echo $max_ids_bundle;
				echo "<br/>";
				echo "IDS Solution Score = ";
				echo $bundle_ids_score;
				exit;*/
				//$numbers = array($bundle_antivirus_score, $bundle_proxy_score, $bundle_governance_score, $bundle_encrypt_score, $bundle_spam_score, $bundle_threat_prevent_score, $bundle_data_storage_score, $bundle_training_score, $bundle_ids_score);

				$total_score = array(
					"Antivirus" => $total_antivirus_bundle_score,
					"Proxy" => $total_proxy_bundle_score,
					"Audit" => $total_governance_bundle_score,
					"Encryption" => $total_encrypt_bundle_score,
					"Spam Filtering" => $total_spam_bundle_score,
					"Threat Prevention" => $total_threat_prevent_bundle_score,
					"Data Storage" => $total_data_storage_bundle_score,
					"Training" => $total_training_bundle_score,
					"Intrusion Detection Systems (IDS)" => $total_ids_bundle_score
				);
				/*print_r($total_score);
				echo "<br/>";*/
				$numbers = array(
					"Antivirus" => $round_bundle_antivirus_score,
					"Proxy" => $round_bundle_proxy_score,
					"Audit" => $round_bundle_governance_score,
					"Encryption" => $round_bundle_encrypt_score,
					"Spam Filtering" => $round_bundle_spam_score,
					"Threat Prevention" => $round_bundle_threat_prevent_score,
					"Data Storage" => $round_bundle_data_storage_score,
					"Training" => $round_bundle_training_score,
					"Intrusion Detection Systems (IDS)" => $round_bundle_ids_score
				);
				/*print_r($numbers);

				$sum_array = array_sum($numbers);
				echo "<br/>";
				echo $sum_array;
				exit;*/
				arsort($numbers);		 
				$data["sorting_data"] = $numbers;
				$this->load->view('test_results',$data);
				
		/* Sorting category of bundle Ends */
		
	}

	
}
?>