<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delegate_questionaire_tech_info extends CI_Controller {

   
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        /*$this->load->model('delicate_login_m');
		$sme_id = $this->uri->segment(2);
		
		$check_del = $this->delicate_login_m->check_del($this->session->userdata['logged_in']['user_id'],$sme_id);
		if($check_del < 1){
            redirect('error_page');
        }*/
    }
    public function index()
    {
        $this->load->model('questionaire_tech_info_m');
		$this->load->model('questionaire_m');
		
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
        $user_id = $this->uri->segment(2);
        $data['technical_data'] = $this->questionaire_tech_info_m->fetch_technical($user_id);
		$data['delegate_data'] = $get_sme->access;
		$data['progress'] = $this->progress($user_id);
		$data['questions'] = $this->questionaire_tech_info_m->get_questions($this->session->userdata['logged_in']['user_id'],$user_id);
        $this->load->view('delegate_questionaire_tech_info',$data);
    }

	public function progress($user_id){
	  $this->load->model('questionaire_tech_info_m');
	  $get_info_progress_tab_one = $this->questionaire_tech_info_m->progress_tab_two($user_id);
	  if(isset($this->session->userdata['progress_data'])){
	  	 $pro_quest_tab_score = $this->session->userdata['progress_data'];
	  }else{
	  	 $pro_quest_tab_score = 0;
	  }
		$q1  = 0;
		$q2  = 0;
		$q3  = 0;
		$q4  = 0;
		$q5  = 0;
		$q6  = 0;
		$q7  = 0;
		$q8  = 0;
		$q9  = 0;
		$q10 = 0;
		$q11 = 0;
		$q12 = 0;
		$q13 = 0;
		$q14 = 0;
		$q15 = 0;
		$q16 = 0;
		
	  if($get_info_progress_tab_one->os_input != ""){$q1 = 3.13;}
	  if($get_info_progress_tab_one->antivirus_input != ""){$q2 = 3.13;}
	  if($get_info_progress_tab_one->firewall_input != ""){$q3 = 3.13;}
	  if($get_info_progress_tab_one->manage_it_input != ""){$q4 = 3.13;}
	  if($get_info_progress_tab_one->internet_input != ""){$q5 = 3.13;}
	  if($get_info_progress_tab_one->ad_blocking_input != ""){$q6 = 3.13;}
	  if($get_info_progress_tab_one->web_hosting_option_input != ""){$q7 = 3.13;}
	  if($get_info_progress_tab_one->hacking_input != ""){$q8 = 3.13;}
	  if($get_info_progress_tab_one->software_update_input != ""){$q9 = 3.13;}
	  if($get_info_progress_tab_one->system_access_input != ""){$q10 = 3.13;}
	  if($get_info_progress_tab_one->directory_service_input != ""){$q11 = 3.13;}
	  if($get_info_progress_tab_one->two_factor_authentication_input != ""){$q12 = 3.13;}
	  if($get_info_progress_tab_one->premises_input != ""){$q13 = 3.13;}
	  if($get_info_progress_tab_one->public_key_infrastructure_input != ""){$q14 = 3.13;}
	  if($get_info_progress_tab_one->server_option_input != ""){$q15 = 3.13;}
	  if($get_info_progress_tab_one->managed_msp_input != ""){$q16 = 3.13;}
	  
	  $pro_data = round($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q14+$q15+$q16);
	  $check_pro_exists = $this->questionaire_m->progress_check($user_id);
		if($check_pro_exists < 1){
			$add_prog_onetab = array(
				'user_id' => $user_id,
				'tab_one' => '',
				'tab_two' => $pro_data,
				'tab_three' => '',
				'tab_four' => ''
			);
			$inset_progress_tabone = $this->questionaire_m->progress_add_tabone($add_prog_onetab);
		}else{
			$add_prog_onetab = array(
				'tab_two' => $pro_data
			);
			$inset_progress_tabone = $this->questionaire_m->progress_update_tabone($add_prog_onetab,$user_id);
		}
		if($inset_progress_tabone){
			$get_data_progress = $this->questionaire_m->view_prog_data($user_id);
		}

		return $get_data_progress;
	 }
    public function add_data()
    {
		$this->load->model('questionaire_m');
        $this->load->model('questionaire_tech_info_m');
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
		$user_id = $this->uri->segment(3);
		
		$val = $this->input->post('sub_val');
		
		$fetch_all = $this->questionaire_tech_info_m->fetch_technical($user_id);
        $check_del = $this->questionaire_tech_info_m->check_question($this->session->userdata['logged_in']['user_id'],$user_id);

		//Operating System starts
		if($check_del->os_input == '1'){
			if($this->input->post('operating_system') == ''){
			$operating_system = '';
			}else{
				$operating_system = $this->input->post('operating_system');
			}

			if($operating_system == 'Windows 7 or below')
			{
			   $os_score = "0.4";
			}
			else if($operating_system == 'Windows 8 or above')
			{
			   $os_score = "0.3";
			}
			else if($operating_system == 'Mac')
			{
			   $os_score = "0.2";
			}
			else if($operating_system == 'Linux')
			{
			   $os_score = "0.1";
			}
		}else{
			if($fetch_all->os_input == ''){
				$operating_system = '';
			}else{
				$operating_system = $fetch_all->os_input;
			}

			if($fetch_all->os_score == ''){
				$os_score = '';
			}else{
				$os_score = $fetch_all->os_score;
			}
		}
		//Operating System ends

		//Antivirus starts
		if($check_del->antivirus_input == '1'){
			if($this->input->post('antivirus_installed') != ''){
			$antivirus_installed = $this->input->post('antivirus_installed');
			}else{
				$antivirus_installed = '';
			}

			
			if($antivirus_installed == "1")
			{
				$antivirus_score = "";
			}
			else{
				$antivirus_score = "0.1";
			}
		}else{
			if($fetch_all->antivirus_input == ''){
				$antivirus_installed = '';
			}else{
				$antivirus_installed = $fetch_all->antivirus_input;
			}

			if($fetch_all->antivirus_score == ''){
				$antivirus_score = '';
			}else{
				$antivirus_score = $fetch_all->antivirus_score;
			}
		}
		//Antivirus ends

		//Firewall starts
		if($check_del->firewall_input == '1'){
			if($this->input->post('firewall') != ''){
				$firewall = $this->input->post('firewall');
			}else{
				$firewall = '';
			}
			
			if($firewall == "1")
			{
				$firewall_score = "";
			}
			else{
				$firewall_score = "0.1";
			}
		}else{
			if($fetch_all->firewall_input == ''){
				$firewall = '';
			}else{
				$firewall = $fetch_all->firewall_input;
			}

			if($fetch_all->firewall_score == ''){
				$firewall_score = '';
			}else{
				$firewall_score = $fetch_all->firewall_score;
			}
		}
		//Firewall ends

		//IT Management starts
		if($check_del->manage_it_input == '1'){
			if($this->input->post('manage_it') != ''){
				$manage_it = $this->input->post('manage_it');
			}else{
				$manage_it = '';
			}
		}else{
			if($fetch_all->manage_it_input == ''){
				$manage_it = '';
			}else{
				$manage_it = $fetch_all->manage_it_input;
			}
		}
		//IT Management ends

		//internet starts
		if($check_del->internet_input == '1'){
			if($this->input->post('internet_have') != ''){
				$internet_have = $this->input->post('internet_have');
			}else{
				$internet_have = '';
			}

			if($internet_have == "1")
			{
				$internet_score = "0.1";
			}else{
				$internet_score = "";
			}
          
		}else{
			if($fetch_all->internet_input == ''){
				$internet_have = '';
			}else{
				$internet_have = $fetch_all->internet_input;
			}

			if($fetch_all->internet_score == ''){
				$internet_score = '';
			}else{
				$internet_score = $fetch_all->internet_score;
			}
		}
		//internet ends

		// WiFi or LAN starts
		if($check_del->internet_option_input == '1'){
			if($this->input->post('internet_wifi_lan') == ''){
				$internet_wifi_lan = '';
			}else{
				$internet_wifi_lan = $this->input->post('internet_wifi_lan');
			}

			if($internet_wifi_lan == "1")
			{
				$internet_wifi_lan_score = "0.1";
			}
			else{
				$internet_wifi_lan_score = "0";
			}
		}else{
			if($fetch_all->internet_option_input == ''){
				$internet_wifi_lan = '';
			}else{
				$internet_wifi_lan = $fetch_all->internet_option_input;
			}

			if($fetch_all->internet_option_score == ''){
				$internet_wifi_lan_score = '';
			}else{
				$internet_wifi_lan_score = $fetch_all->internet_option_score;
			}
		}
		// WiFi or LAN ends

		//wifi open to the public starts
		if($check_del->wifi_option_input == '1'){
			if($this->input->post('internet_public_wifi') != ''){
				$internet_public_wifi = $this->input->post('internet_public_wifi');
				if($internet_public_wifi == "1")
				{
					$internet_public_wifi_score = "0.1";
				}
				else{
					$internet_public_wifi_score = "0";
				}
			}else{
				$internet_public_wifi = "0";
				$internet_public_wifi_score = "0";
			}
		}else{
			if($fetch_all->wifi_option_input == ''){
				$internet_public_wifi = '';
			}else{
				$internet_public_wifi = $fetch_all->wifi_option_input;
			}

			if($fetch_all->wifi_option_score == ''){
				$internet_public_wifi_score = '';
			}else{
				$internet_public_wifi_score = $fetch_all->wifi_option_score;
			}
		}
		//wifi open to the public ends

		// WPA2 (Wi-Fi Protected Access 2) enabled starts
		if($check_del->wpa2_input == '1'){
			if($this->input->post('internet_wpa2') != ''){
				$internet_wpa2 = $this->input->post('internet_wpa2');
				if($internet_wpa2 == "1")
				{
					$internet_wpa2_score = "0.1";
				}
				else{
					$internet_wpa2_score = "0";
				}
			}else{
				$internet_wpa2 = "";
				$internet_wpa2_score = "0";
			}
		}else{
			if($fetch_all->wpa2_input == ''){
				$internet_wpa2 = '';
			}else{
				$internet_wpa2 = $fetch_all->wpa2_input;
			}

			if($fetch_all->wpa2_score == ''){
				$internet_wpa2_score = '';
			}else{
				$internet_wpa2_score = $fetch_all->wpa2_score;
			}
		}
		// WPA2 (Wi-Fi Protected Access 2) enabled ends

		//browser(s) do you use starts
		if($check_del->browser_input == '1'){
			if($this->input->post('browser_use') != ''){
				$browser_use = $this->input->post('browser_use');
				if($browser_use == "Internet Explorer"){
					$browser_use_score = "0.2";
				}
				else{
					$browser_use_score = "0.1";
				}
				if($this->input->post('browser_other') == ''){
					$browser_other = '';
				}else{
					$browser_other = $this->input->post("browser_other");
				}
			}else{
				$browser_use = "0";
				$browser_use_score = "0";
				$browser_other = '';
			}
		}else{
			if($fetch_all->browser_input == ''){
				$browser_use = '';
			}else{
				$browser_use = $fetch_all->browser_input;
			}

			if($fetch_all->browser_score == ''){
				$browser_use_score = '';
			}else{
				$browser_use_score = $fetch_all->browser_score;
			}

			if($fetch_all->browser_name_input == ''){
				$browser_other = '';
			}else{
				$browser_other = $fetch_all->browser_name_input;
			}
		}
		//browser(s) do you use ends

		// systems administrator update your browser with the latest patches starts
		if($check_del->update_browser_input == '1'){
			if($this->input->post('internet_browser_update') != ''){
				$internet_browser_update = $this->input->post("internet_browser_update");
				if($internet_browser_update == "1")
				{
					$internet_browser_update_score = "0.1";
				}
				else{
					$internet_browser_update_score = "0";
				}
			}else{
				$internet_browser_update = "";
				$internet_browser_update_score = "0";
			}
		}else{
			if($fetch_all->update_browser_input == ''){
				$internet_browser_update = '';
			}else{
				$internet_browser_update = $fetch_all->update_browser_input;
			}

			if($fetch_all->update_browser_score == ''){
				$internet_browser_update_score = '';
			}else{
				$internet_browser_update_score = $fetch_all->update_browser_score;
			}
		}
		// systems administrator update your browser with the latest patches ends

		//email to communicate outside the business starts
		if($check_del->email_input == '1'){
			if($this->input->post('internet_email') != ''){
				$internet_email = $this->input->post("internet_email");
				if($internet_email == "1")
				{
					$internet_email_score = "0.1";
				}
				else{
					$internet_email_score = "0";
				}
			}else{
				$internet_email = "";
				$internet_email_score = "0";
			}
		}else{
			if($fetch_all->email_input == ''){
				$internet_email = '';
			}else{
				$internet_email = $fetch_all->email_input;
			}

			if($fetch_all->email_score == ''){
				$internet_email_score = '';
			}else{
				$internet_email_score = $fetch_all->email_score;
			}
		}
		//email to communicate outside the business ends

		//spam filtering starts
		if($check_del->spam_filtering_input == '1'){
			if($this->input->post('internet_spam') != ''){
				$internet_spam = $this->input->post("internet_spam");
			}else{
				$internet_spam = "";
			}
		}else{
			if($fetch_all->spam_filtering_input == ''){
				$internet_spam = '';
			}else{
				$internet_spam = $fetch_all->spam_filtering_input;
			}
		}
		//spam filtering ends

		//integrate ad blocking software on your systems starts
		if($check_del->ad_blocking_input == '1'){
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
		}else{
			if($fetch_all->ad_blocking_input == ''){
				$internet_ad_block = '';
			}else{
				$internet_ad_block = $fetch_all->ad_blocking_input;
			}

			if($fetch_all->ad_blocking_score == ''){
				$internet_ad_block_score = '';
			}else{
				$internet_ad_block_score = $fetch_all->ad_blocking_score;
			}
		}
		//integrate ad blocking software on your systems ends

		//Web hosting on your network starts
		if($check_del->web_hosting_input == '1'){
			if($this->input->post('internet_web_host') != ''){
				$internet_web_host = $this->input->post("internet_web_host");
				if($internet_web_host == "1")
				{
					$internet_web_host_score = "0.1";
				}
				else{
					$internet_web_host_score = "0";
				}
			}else{
				$internet_web_host = "";
				$internet_web_host_score = "0";
			}
		}else{
			if($fetch_all->web_hosting_input == ''){
				$internet_web_host = '';
			}else{
				$internet_web_host = $fetch_all->web_hosting_input;
			}

			if($fetch_all->web_hosting_score == ''){
				$internet_web_host_score = '';
			}else{
				$internet_web_host_score = $fetch_all->web_hosting_score;
			}
		}
		//Web hosting on your network ends

		//web hosting in house or remote starts
		if($check_del->web_hosting_option_input == '1'){
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
		}else{
			$internet_inhouse_remote = $fetch_all->web_hosting_option_input;
			$internet_inhouse_remote_score = $fetch_all->web_hosting_option_score;

			if($fetch_all->web_hosting_option_input == ''){
				$web_hosting_option_score = '';
			}else{
				$web_hosting_option_score = $fetch_all->web_hosting_option_input;
			}

			if($fetch_all->web_hosting_option_score == ''){
				$internet_inhouse_remote_score = '';
			}else{
				$internet_inhouse_remote_score = $fetch_all->web_hosting_option_score;
			}
		}
		//web hosting in house or remote ends

		//hacking  starts
		if($check_del->hacking_input == '1'){
			if($this->input->post('hacking') == ''){
				$hacking = '';
			}else{
				$hacking = $this->input->post("hacking");
			}
			if($hacking == "1")
			{
				$hacking_score = "0";
			}else{
				$hacking_score = "0";
			}

		}else{
			if($fetch_all->hacking_input == ''){
				$hacking = '';
			}else{
				$hacking = $fetch_all->hacking_input;
			}

			if($fetch_all->hacking_score == ''){
				$hacking_score = '';
			}else{
				$hacking_score = $fetch_all->hacking_score;
			}
		}
		//hacking  ends

		//keep logs starts
		if($check_del->logs_input == '1'){
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
		}else{
			if($fetch_all->logs_input == ''){
				$access_control_logs = '';
			}else{
				$access_control_logs = $fetch_all->logs_input;
			}

			if($fetch_all->logs_score == ''){
				$access_control_logs_score = '';
			}else{
				$access_control_logs_score = $fetch_all->logs_score;
			}
		}
		//keep logs ends

		//regularly update your software starts
		if($check_del->software_update_input == '1'){
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
		}else{
			if($fetch_all->software_update_input == ''){
				$update_software = '';
			}else{
				$update_software = $fetch_all->software_update_input;
			}

			if($fetch_all->software_update_score == ''){
				$update_software_score = '';
			}else{
				$update_software_score = $fetch_all->software_update_score;
			}
		}
		//regularly update your software ends

		//encrypt your data starts
		if($check_del->data_encrypt_input == '1'){
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
		}else{
			if($fetch_all->data_encrypt_input == ''){
				$encrypt = '';
			}else{
				$encrypt = $fetch_all->data_encrypt_input;
			}

			if($fetch_all->data_encrypt_score == ''){
				$encrypt_score = '';
			}else{
				$encrypt_score = $fetch_all->data_encrypt_score;
			}
		}
		//encrypt your data ends

		//differing levels of access to your systems starts
		if($check_del->system_access_input == '1'){
			if($this->input->post("access") == '')
			{
				$access = '';
			}else{
				$access = $this->input->post("access");
			}

			if($access == "1")
			{
				$access_score = "0.1";
			}
			else{
				$access_score = "0";
			}
		}else{
			if($fetch_all->system_access_input == ''){
				$access = '';
			}else{
				$access = $fetch_all->system_access_input;
			}

			if($fetch_all->system_access_score == ''){
				$access_score = '';
			}else{
				$access_score = $fetch_all->system_access_score;
			}
		}
		//differing levels of access to your systems ends

		//Open Directory or Active Directory service  starts
		if($check_del->directory_service_input == '1'){
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
		}else{
			if($fetch_all->directory_service_input == ''){
				$directory = '';
			}else{
				$directory = $fetch_all->directory_service_input;
			}

			if($fetch_all->directory_service_score == ''){
				$directory_score = '';
			}else{
				$directory_score = $fetch_all->directory_service_score;
			}
		}
		//Open Directory or Active Directory service  ends

		//Two factor authentication starts
		if($check_del->two_factor_authentication_input == '1'){
			if($this->input->post('authentication') == '')
			{
				$two_auth = '';
			}else{
				$two_auth = $this->input->post('authentication');
			}
		}else{
			if($fetch_all->two_factor_authentication_input == ''){
				$two_auth = '';
			}else{
				$two_auth = $fetch_all->two_factor_authentication_input;
			}
		}
		//Two factor authentication ends

		//ecure your premises from a physical point of view starts
		if($check_del->premises_input == '1'){
			if($this->input->post('premises_input') == '')
			{
				$premises_input = '';
			}else{
				$premises_input = $this->input->post('premises_input');
			}
		}else{
			if($fetch_all->premises_input == ''){
				$premises_input = '';
			}else{
				$premises_input = $fetch_all->premises_input;
			}
		}
		//ecure your premises from a physical point of view ends

		//digital signatures and wifi certificates starts
		if($check_del->public_key_infrastructure_input == '1'){
			if($this->input->post('public_key_infrastructure_input') == '')
			{
				$public_key_infrastructure_input = '';
			}else{
				$public_key_infrastructure_input = $this->input->post('public_key_infrastructure_input');
			}
		}else{
			if($fetch_all->public_key_infrastructure_input == ''){
				$public_key_infrastructure_input = '';
			}else{
				$public_key_infrastructure_input = $fetch_all->public_key_infrastructure_input;
			}
		}
		//digital signatures and wifi certificates ends

		//email security starts
		if($check_del->email_input_score == '1'){
			if($this->input->post('server_option') == '')
			{
				$server_option_input = '';
			}else{
				$server_option_input = $this->input->post('server_option');
			}
		}else{
			if($fetch_all->server_option_input == ''){
				$server_option_input = '';
			}else{
				$server_option_input = $fetch_all->server_option_input;
			}
		}
		//email security ends
		
		//managed service provider (MSP), if you don't have a MSP starts
		if($check_del->managed_msp_input == '1'){
			if($this->input->post('managed_msp_input') == '')
			{
				$managed_msp_input = '';
			}else{
				$managed_msp_input = $this->input->post('managed_msp_input');
			}
		}else{
			if($fetch_all->managed_msp_input == ''){
				$managed_msp_input = '';
			}else{
				$managed_msp_input = $fetch_all->managed_msp_input;
			}
		}
		//managed service provider (MSP), if you don't have a MSP ends
        
		
		$date = time();

        $total_score = $os_score + $antivirus_score + $firewall_score + $internet_score + $internet_wifi_lan_score + $internet_public_wifi_score + $internet_wpa2_score + $browser_use_score + $internet_browser_update_score + $internet_email_score + $internet_ad_block_score + $internet_web_host_score + $internet_inhouse_remote_score + $hacking_score + $access_control_logs_score + $update_software_score + $encrypt_score + $access_score + $directory_score;


		

		


        $records = array(
                            'user_id' => $user_id,
                            'os_input' => $operating_system,
                            'os_score' => $os_score,
                            'antivirus_input' => $antivirus_installed,
                            'antivirus_score' => $antivirus_score,
                            'firewall_input' => $firewall,
                            'firewall_score' => $firewall_score,
                            'manage_it_input' => $manage_it,
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
                            'browser_name_input' => $browser_other,
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
        //print_r($records);
        $check_row = $this->questionaire_tech_info_m->row_check($user_id);
        if($check_row > 0)
        {
            $update_data = $this->questionaire_tech_info_m->data_update($records,$user_id);
            if($update_data)
            {
				if($val == "continue")
                {
                    $get_next_info = $this->questionaire_tech_info_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					if($get_next_info > 0)
					{
						redirect('delegate_questionaire_nontech_info/'.$user_id.'');
					}else{
						$this->session->set_flashdata("update", "Success , Your technical information updated successfully!");
						redirect('delegate_questionaire_tech_info/'.$user_id.'');
					}
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong!");
                redirect('delegate_questionaire_tech_info');
            }
        }
        else{
            $insert_data = $this->questionaire_tech_info_m->data_insert($records);
            if($insert_data)
            {
                if($val == "continue")
                {
                   $get_next_info = $this->questionaire_tech_info_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					if($get_next_info > 0)
					{
						redirect('delegate_questionaire_nontech_info/'.$user_id.'');
					}else{
						$this->session->set_flashdata("update", "Success , Your technical information updated successfully!");
						redirect('delegate_questionaire_tech_info/'.$user_id.'');
					}
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong!");
                redirect('delegate_questionaire_tech_info');
            }
        }
    }
    
}
?>