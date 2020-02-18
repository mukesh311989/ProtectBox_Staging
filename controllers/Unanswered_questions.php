<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unanswered_questions extends CI_Controller {
	
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
  		
		$this->load->library('Emailtemplate');	
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }

	public function index()
	{
		$this->load->model('unanswered_questions_m');
		$smb_id = $this->session->userdata['logged_in']['user_id'];
		$data['smb_id'] = $smb_id;
		$fetch_questionnaire_basic = $this->unanswered_questions_m->fetch_basics($smb_id);
		$fetch_questionnaire_tech = $this->unanswered_questions_m->fetch_tech($smb_id);
		$fetch_questionnaire_non_tech = $this->unanswered_questions_m->fetch_non_tech($smb_id);
		$fetch_questionnaire_budget = $this->unanswered_questions_m->fetch_budget($smb_id);

		/*$data['fetch_questionnaire_tech_delegate'] = $this->unanswered_questions_m->fetch_tech_delegate($smb_id);
		$data['fetch_questionnaire_non_tech_delegate'] = $this->unanswered_questions_m->fetch_non_tech_delegate($smb_id);
		$data['fetch_questionnaire_budget_delegate'] = $this->unanswered_questions_m->fetch_budget_delegate($smb_id);*/
		// BASICS ARRAY STARTS
		$questionnaire_basics_data = array();
		foreach($fetch_questionnaire_basic AS $basics){
			$questionnaire_basics_data = array(
				'industry_input' => $basics->industry_input,
				'employees_input' => $basics->employees_input,
				'location_input' => $basics->location_input,
				'location_business_input' => $basics->location_business_input,
				'handle_data_input' => $basics->handle_data_input,
			);
		}
		$data['questionnaire_basics_data'] = $questionnaire_basics_data;
		// BASICS ARRAY ENDS
		// TECHNICAL ARRAY STARTS
		$questionnaire_technical_data = array();
		foreach($fetch_questionnaire_tech AS $tech){
			$questionnaire_technical_data = array(
				'os_input' => $tech->os_input,
				'antivirus_input' => $tech->antivirus_input,
				'firewall_input' => $tech->firewall_input,
				'manage_it_input' => $tech->manage_it_input,
				'system_admin_input' => $tech->system_admin_input,
				'internet_input' => $tech->internet_input,
				'internet_option_input' => $tech->internet_option_input,
				'wifi_option_input' => $tech->wifi_option_input,
				'wpa2_input' => $tech->wpa2_input,
				'browser_input' => $tech->browser_input,
				'update_browser_input' => $tech->update_browser_input,
				'email_input' => $tech->email_input,
				'spam_filtering_input' => $tech->spam_filtering_input,
				'ad_blocking_input' => $tech->ad_blocking_input,
				'web_hosting_input' => $tech->web_hosting_input,
				'web_hosting_option_input' => $tech->web_hosting_option_input,
				'hacking_input' => $tech->hacking_input,
				'logs_input' => $tech->logs_input,
				'software_update_input' => $tech->software_update_input,
				'data_encrypt_input' => $tech->data_encrypt_input,
				'system_access_input' => $tech->system_access_input,
				'directory_service_input' => $tech->directory_service_input,
				'two_factor_authentication_input' => $tech->two_factor_authentication_input,
				'premises_input' => $tech->premises_input,
				'public_key_infrastructure_input' => $tech->public_key_infrastructure_input,
				'server_option_input' => $tech->server_option_input,
				'msp_input' => $tech->msp_input,
				'managed_msp_input' => $tech->managed_msp_input
			);
		}
		$data['questionnaire_technical_data'] = $questionnaire_technical_data;
		// TECHNICAL ARRAY ENDS
		// NON TECHNICAL ARRAY STARTS
		$questionnaire_non_technical_data = array();
		foreach($fetch_questionnaire_non_tech AS $non_tech){
			$questionnaire_non_technical_data = array(
				'business_continuity_plan_input' => $non_tech->business_continuity_plan_input,
				'business_continuity_procedure_input' => $non_tech->business_continuity_procedure_input,
				'regular_backup_input' => $non_tech->regular_backup_input,
				'training_cybersecurity_input' => $non_tech->training_cybersecurity_input,
				'aware_information_security_standard_input' => $non_tech->aware_information_security_standard_input,
				'cover_information_security_standard_input' => $non_tech->cover_information_security_standard_input,
				'it_governance_policy_input' => $non_tech->it_governance_policy_input,
				'password_rules_input' => $non_tech->password_rules_input,
				'member_cisp_input' => $non_tech->member_cisp_input,
				'cyber_insurance_input' => $non_tech->cyber_insurance_input,
				'threat_detection_input' => $non_tech->threat_detection_input,
				'cloud_data_storage_solution_input' => $non_tech->cloud_data_storage_solution_input,
				'device_to_employees_input' => $non_tech->device_to_employees_input,
				'what_devices_employees_input' => $non_tech->what_devices_employees_input,
				'misuse_equipment_input' => $non_tech->misuse_equipment_input,
				'mdm_input' => $non_tech->mdm_input,
				'employees_use_remotely_input' => $non_tech->employees_use_remotely_input,
				'employees_work_home_input' => $non_tech->employees_work_home_input,
				'vpn_software_input' => $non_tech->vpn_software_input,
				'cyber_consultant_input' => $non_tech->cyber_consultant_input,
				'need_consultant_input' => $non_tech->need_consultant_input
			);
		}
		$data['questionnaire_non_technical_data'] = $questionnaire_non_technical_data;
		// NON TECHNICAL ARRAY ENDS
		// BUDGET ARRAY STARTS
		$questionnaire_budget_data = array();
		foreach($fetch_questionnaire_budget AS $budget){
			$questionnaire_budget_data = array(
				'amount_cybersecurity_input' => $budget->amount_cybersecurity_input,
				'percentage_annual_budget_input' => $budget->percentage_annual_budget_input,
				'budget_cybersecurity_per_year_input' => $budget->budget_cybersecurity_per_year_input,
				'paid_for_input' => $budget->paid_for_input,
				'preferred_budget_breakdown_currency_input' => $budget->preferred_budget_breakdown_currency_input,
				'tech_operating_system_input' => $budget->tech_operating_system_input,
				'tech_internet_input' => $budget->tech_internet_input,
				'tech_antivirus_input' => $budget->tech_antivirus_input,
				'tech_firewall_input' => $budget->tech_firewall_input,
				'tech_access_control_input' => $budget->tech_access_control_input,
				'tech_protecting_data_input' => $budget->tech_protecting_data_input,
				'tech_mssp_input' => $budget->tech_mssp_input,
				'non_tech_business_continuity_input' => $budget->non_tech_business_continuity_input,
				'non_tech_training_input' => $budget->non_tech_training_input,
				'non_tech_accredation_input' => $budget->non_tech_accredation_input,
				'non_tech_reputation_management_input' => $budget->non_tech_reputation_management_input,
				'non_tech_password_policy_input' => $budget->non_tech_password_policy_input,
				'non_tech_devices_input' => $budget->non_tech_devices_input,
				'non_tech_vpn_input' => $budget->non_tech_vpn_input,
				'non_tech_consultancy_input' => $budget->non_tech_consultancy_input
			);
		}
		$data['questionnaire_budget_data'] = $questionnaire_budget_data;
		// BUDGET ARRAY ENDS
		if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == '' || $questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == '' || $questionnaire_basics_data['handle_data_input'] == '' || $questionnaire_technical_data['os_input'] == '' || $questionnaire_technical_data['antivirus_input'] == '' || $questionnaire_technical_data['firewall_input'] == '' || $questionnaire_technical_data['manage_it_input'] == '' || $questionnaire_technical_data['internet_input'] == '' || $questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == '' || $questionnaire_non_technical_data['business_continuity_plan_input'] == '' || $questionnaire_non_technical_data['training_cybersecurity_input'] == '' || $questionnaire_non_technical_data['aware_information_security_standard_input'] == '' || $questionnaire_non_technical_data['password_rules_input'] == '' || $questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == '' || $questionnaire_non_technical_data['device_to_employees_input'] == '' || $questionnaire_non_technical_data['cyber_consultant_input'] == '' || $questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
			
			$this->load->view('unanswered_questions',$data);
		}else{
			
			redirect('bundle_json');
		}
	}

	public function send_reminder(){
		$this->load->model('manage_delegates_m');
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$delegate_id_array = $this->input->post('del_idz');
		
		$fetch_sme = $this->manage_delegates_m->fetch_user($this->session->userdata['logged_in']['user_id']);
		$sme_firstname = $fetch_sme->firstname;
		$sme_lastname = $fetch_sme->lastname;

		foreach($delegate_id_array AS $delegate_id){
			$fetch_delegate = $this->manage_delegates_m->fetch_user($delegate_id);
			$del_firstname = $fetch_delegate->firstname;
			$del_lastname = $fetch_delegate->lastname;
			$del_email = $fetch_delegate->email;
			if($del_email != ""){
				$message = $this->emailtemplate->deligate_send_reminder_email($del_email,$del_firstname,$del_lastname,$sme_firstname,$sme_lastname);
				
				$this->email->from('noreply@protectbox.com', 'Protectbox');
				$this->email->to($del_email); 

				$this->email->subject('Reminder For Delegate User');
				$this->email->message($message);    

				$okay = $this->email->send();
				if($okay){
					$date = time();
					$update_reminder = $this->manage_delegates_m->update_reminder($delegate_id,$date);
					echo "success";
				}else{
					echo "failed";
				}
			}else{
				echo "email_error";
			}
		}
	}
}
?>