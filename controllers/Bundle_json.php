<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bundle_json extends CI_Controller {

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
  		
		$this->load->model('bundle_json_m');
		
		$this->data['check_availability'] = $this->bundle_json_m->fetch_free_ip();
		
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
		$this->load->model('questionaire_budget_m');
		$this->data['currency'] = $this->questionaire_budget_m->check_questioniare_budget($this->session->userdata['logged_in']['user_id']);

		header('Cache-Control: no-cache');
    }

	public function index(){
		
		if($this->data['check_availability']->number_of_users < 1){
			$records = array(
				'number_of_users' => $this->data['check_availability']->number_of_users + 1,
				'instance_status' => 'free',
				'instance_date' => time()
			);
		}else{
			$records = array(
				'number_of_users' => $this->data['check_availability']->number_of_users + 1,
				'instance_status' => 'allocated',
				'instance_date' => time()
			);
		}
		$update_user_number = $this->bundle_json_m->update_user_no($this->data['check_availability']->result_bundle_instance_id,$records);
		$this->load->view('bundle_json');
	}

	public function fetch_loader(){
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
		//$fetch_bundle_order = $this->bundle_json_m->fetch_bundle_order($user_id);
		
		$url = 'http://'.$this->data['check_availability']->instance_ip.'/loader/'.$user_id.'.txt';
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$data = curl_exec($curl);
		curl_close($curl);
		//$decode_json = json_decode($data,TRUE);
		print_r($data);
	}

	public function result_bundle(){
		$url = 'http://'.$this->data['check_availability']->instance_ip.'/bundle_json';
		/* parameters starts*/

			/* user data starts */
				$user_id = $this->session->userdata['logged_in']['user_id'];
				$currency = $this->data['currency']->preferred_budget_breakdown_currency_input;

				$user_data = array(
					'user_id' => $user_id,
					'currency' => $currency
				);
			/* user data ends */
				
			/* Left Slider start */
				if(!empty($this->session->userdata['results']['session_price_range'])){
					$price_range = $this->session->userdata['results']['session_price_range'];
				}else{
					$price_range = '';
				}
				if(!empty($this->session->userdata['results']['session_opt_system'])){
					$total_operating_system_bundle_score = $this->session->userdata['results']['session_opt_system'];
				}else{
					$total_operating_system_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_internet'])){
					$total_internet_bundle_score = $this->session->userdata['results']['session_internet'];
				}else{
					$total_internet_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_antivirus'])){
					$total_antivirus_bundle_score = $this->session->userdata['results']['session_antivirus'];
				}else{
					$total_antivirus_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_firewall'])){
					$total_firewall_bundle_score = $this->session->userdata['results']['session_firewall'];
				}else{
					$total_firewall_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_access_control'])){
					$total_access_control_bundle_score = $this->session->userdata['results']['session_access_control'];
				}else{
					$total_access_control_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_data_protection'])){
					$total_data_bundle_score = $this->session->userdata['results']['session_data_protection'];
				}else{
					$total_data_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_managed_service'])){
					$total_mssp_bundle_score = $this->session->userdata['results']['session_managed_service'];
				}else{
					$total_mssp_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_business_continuity'])){
					$total_business_continuity_bundle_score = $this->session->userdata['results']['session_business_continuity'];
				}else{
					$total_business_continuity_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_accreditation_regulation'])){
					$total_accredition_regulation_bundle_score = $this->session->userdata['results']['session_accreditation_regulation'];
				}else{
					$total_accredition_regulation_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_training'])){
					$total_training_bundle_score = $this->session->userdata['results']['session_training'];
				}else{
					$total_training_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_reputation_manage'])){
					$total_reputation_manage_bundle_score = $this->session->userdata['results']['session_reputation_manage'];
				}else{
					$total_reputation_manage_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_password_policy'])){
					$total_password_policy_bundle_score = $this->session->userdata['results']['session_password_policy'];
				}else{
					$total_password_policy_bundle_score = '0';
				}if(!empty($this->session->userdata['results']['session_device'])){
					$total_devices_bundle_score = $this->session->userdata['results']['session_device'];
				}else{
					$total_devices_bundle_score = '0';
				}
				if(!empty($this->session->userdata['results']['session_remote_working'])){
					$total_remote_working_bundle_score = $this->session->userdata['results']['session_remote_working'];
				}else{
					$total_remote_working_bundle_score = '0';
				}if(!empty($this->session->userdata['results']['session_consultancy'])){
					$total_consultancy_implement_bundle_score = $this->session->userdata['results']['session_consultancy'];
				}else{
					$total_consultancy_implement_bundle_score = '0';
				}

				$left_slider = array(
					'session_price_range' => $price_range,
					'session_opt_system' => $total_operating_system_bundle_score,
					'session_internet' => $total_internet_bundle_score,
					'session_antivirus' => $total_antivirus_bundle_score,
					'session_firewall' => $total_firewall_bundle_score,
					'session_access_control' => $total_access_control_bundle_score,
					'session_data_protection' => $total_data_bundle_score,
					'session_managed_service' => $total_mssp_bundle_score,
					'session_business_continuity' => $total_business_continuity_bundle_score,
					'session_accreditation_regulation' => $total_accredition_regulation_bundle_score,
					'session_training' => $total_training_bundle_score,
					'session_reputation_manage' => $total_reputation_manage_bundle_score,
					'session_password_policy' => $total_password_policy_bundle_score,
					'session_device' => $total_devices_bundle_score,
					'session_remote_working' => $total_remote_working_bundle_score,
					'session_consultancy' => $total_consultancy_implement_bundle_score
				);
			/* Left Slider ends */

			/* Top filter starts */	
				if(!empty($this->session->userdata['top_filter']['session_suppliers'])){
					$supplier_top_filter = $this->session->userdata['top_filter']['session_suppliers'];
				}else{
					$supplier_top_filter = '';
				}
				if(!empty($this->session->userdata['top_filter']['session_solution'])){
					$solution_top_filter = $this->session->userdata['top_filter']['session_solution'];
				}else{
					$solution_top_filter = '';
				}
				if(!empty($this->session->userdata['top_filter']['session_price_range_top'])){
					$price_range_top_filter = $this->session->userdata['top_filter']['session_price_range_top'];
				}else{
					$price_range_top_filter = '';
				}
				$top_filter = array(
					'supplier_top_filter' => $supplier_top_filter,
					'solution_top_filter' => $solution_top_filter,
					'price_range_top_filter' => $price_range_top_filter
				);
			/* Top filter ends */

				$data = array(
					'user_data' => $user_data,
					'left_slider' =>$left_slider,
					'top_filter' => $top_filter,
					'country_code' => $this->$ipdat->geoplugin_countryCode
				);
				$payload = json_encode($data);
				
		/* parameters ends*/

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//echo "<strong>Request</strong><br/>" . print_r(curl_getinfo($ch)) . "<br/>";

		$result = curl_exec($ch);
		curl_close($ch);

		print_r($result);

		if (!empty($result) && $result == 'complete') {
			$this->delete_txt();
		}

	}

	public function delete_txt(){

		$url = 'http://'.$this->data['check_availability']->instance_ip.'/bundle_json/delete_txt';
		$user_data = array(
			'user_id' => $this->session->userdata['logged_in']['user_id']
		);
		$payload = json_encode($user_data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		if($result){
			// reduce user_number from allocation
			$records = array(
				'number_of_users' => $this->data['check_availability']->number_of_users - 1,
				'instance_status' => 'free',
				'instance_date' => ""
			);
			$update_user_number = $this->bundle_json_m->update_user_no($this->data['check_availability']->result_bundle_instance_id,$records);
			if($update_user_number){
				print_r($result);
			}
		}
	}
}
?>