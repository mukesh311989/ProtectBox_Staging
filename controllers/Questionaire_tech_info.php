<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_tech_info extends CI_Controller {

   
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
        $this->load->model('questionaire_tech_info_m');
		$this->load->model('questionaire_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $data['technical_data'] = $this->questionaire_tech_info_m->fetch_technical($user_id);
		$data['get_non_tech'] = $this->questionaire_m->tech_non_tech($user_id);
		$data['get_budget'] = $this->questionaire_m->tech_budget($user_id);
		$data['progress'] = $this->progress();
		$data['del_access'] = $this->check_del_access($user_id);
        $this->load->view('questionaire_tech_info',$data);
    }

    public function progress(){
	  $user_id = $this->session->userdata['logged_in']['user_id']; 
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
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $operating_system = $this->input->post('operating_system');
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

			if($this->input->post('browser_use') != ''){
				$browser_use = $this->input->post('browser_use');
				if($browser_use == "Internet Explorer"){
					$browser_use_score = "0.2";
				}
				else{
					$browser_use_score = "0.1";
				}
			}else{
				$browser_use = "0";
				$browser_use_score = "0";
			}

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

			
			if($this->input->post('internet_spam') != ''){
				$internet_spam = $this->input->post("internet_spam");
			}else{
				$internet_spam = "";
			}
			

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

			

			
        }
        else{
            $internet_score = "";

			$internet_wifi_lan = "0";
			$internet_wifi_lan_score = "";

			$internet_public_wifi = "0";
			$internet_public_wifi_score = "";

			$internet_wpa2 = "";
			$internet_wpa2_score = "";

			$browser_use = "";
			$browser_use_score = "0.1";

			$internet_browser_update = "";
			$internet_browser_update_score = "";

			$internet_email = "";
			$internet_email_score = "";

			$internet_spam = "";
			
			$internet_web_host = "";
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

			$access_control_logs = "";

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


		

		


        $records = array(
                            'user_id' => $user_id,
                            'os_input' => $operating_system,
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
        //print_r($records);

		if($this->input->post('save_continue') == 'skip')
		{
			if($operating_system == NULL)
			{
				$check_4_res = $this->questionaire_tech_info_m->check_4_res($user_id);
				if(!empty($check_4_res))
				{
					$os_4_res = 'exist';
				}else{
					$os_4_res = '1';
				}
			}else{
				$os_4_res = 'exist';
			}

			if($antivirus_installed == NULL)
			{
				$check_5_res = $this->questionaire_tech_info_m->check_5_res($user_id);
				if(!empty($check_5_res))
				{
					$antivirus_5_res = 'exist';
				}else{
					$antivirus_5_res = '1';
				}
			}else{
				$antivirus_5_res = 'exist';
			}

			if($firewall == NULL)
			{
				$check_6_res = $this->questionaire_tech_info_m->check_6_res($user_id);
				if(!empty($check_6_res))
				{
					$firewall_6_res = 'exist';
				}else{
					$firewall_6_res = '1';
				}
			}else{
				$firewall_6_res = 'exist';
			}

			if($this->input->post('manage_it') == NULL)
			{
				$check_7_res = $this->questionaire_tech_info_m->check_7_res($user_id);
				if(!empty($check_7_res))
				{
					$manage_it_7_res = 'exist';
				}else{
					$manage_it_7_res = '1';
				}
			}else{
				$manage_it_7_res = 'exist';
			}

			if($internet_have == NULL)
			{
				$check_8a_res = $this->questionaire_tech_info_m->check_8a_res($user_id);
				if(!empty($check_8a_res))
				{
					$internet_have_8a_res = 'exist';
				}else{
					$internet_have_8a_res = '1';
				}
				$internet_wifi_lan_8b_res = 'exist';
			}else if($internet_have == '1'){
				$internet_have_8a_res = 'exist';
				if($internet_wifi_lan == NULL)
				{
					$check_8b_res = $this->questionaire_tech_info_m->check_8b_res($user_id);
					if(!empty($check_8b_res))
					{
						$internet_wifi_lan_8b_res = 'exist';
					}else{
						$internet_wifi_lan_8b_res = '1';
					}
				}else{
					$internet_wifi_lan_8b_res = 'exist';
				}
			}else if ($internet_have == '0'){
				$internet_have_8a_res = 'exist';
				$internet_wifi_lan_8b_res = 'exist';
			}

			if($hacking == NULL)
			{
				$check_9a_res = $this->questionaire_tech_info_m->check_9a_res($user_id);
				if(!empty($check_9a_res))
				{
					$hacking_9a_res = 'exist';
				}else{
					$hacking_9a_res = '1';
				}
			}else{
				$hacking_9a_res = 'exist';
			}

			if($access == NULL)
			{
				$check_9e_res = $this->questionaire_tech_info_m->check_9e_res($user_id);
				if(!empty($check_9e_res))
				{
					$access_9e_res = 'exist';
				}else{
					$access_9e_res = '1';
				}
			}else{
				$access_9e_res = 'exist';
			}
			
			if($os_4_res == 'exist' && $antivirus_5_res == 'exist' && $firewall_6_res == 'exist' && $manage_it_7_res == 'exist' && $internet_have_8a_res == 'exist' && $internet_wifi_lan_8b_res == 'exist' && $hacking_9a_res == 'exist' && $access_9e_res == 'exist'){
				$check_row = $this->questionaire_tech_info_m->row_check($user_id);
				if($check_row > 0)
				{
					$update_data = $this->questionaire_tech_info_m->data_update($records,$user_id);
					redirect('questionaire_nontech_info');
				}else{
					$insert_data = $this->questionaire_tech_info_m->data_insert($records);
					redirect('questionaire_nontech_info');
				}
			}else{
				$array = array(
							'os_4_res' => $os_4_res,
							'antivirus_5_res' => $antivirus_5_res,
							'firewall_6_res' => $firewall_6_res,
							'manage_it_7_res' => $manage_it_7_res,
							'internet_have_8a_res' => $internet_have_8a_res,
							'internet_wifi_lan_8b_res' => $internet_wifi_lan_8b_res,
							'hacking_9a_res' => $hacking_9a_res,
							'access_9e_res' => $access_9e_res
						  );
				$this->session->set_flashdata("skip_flash", $array);
				redirect('questionaire_tech_info');
			}
				
			
		}

        $check_row = $this->questionaire_tech_info_m->row_check($user_id);
	   
        if($check_row > 0)
        {
            $update_data = $this->questionaire_tech_info_m->data_update($records,$user_id);
            if($update_data)
            {
				if($this->input->post('save_continue') == "continue")
                {
                    redirect('questionaire_nontech_info');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
               /* else if($this->input->post('save_continue') == "previous")
                {
                    redirect('questionaire');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong!");
                redirect('questionaire_tech_info');
            }
        }
        else{
            $insert_data = $this->questionaire_tech_info_m->data_insert($records);
			
            if($insert_data)
            {
                if($this->input->post('save_continue') == "continue")
                {
                    redirect('questionaire_nontech_info');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
               /* else if($this->input->post('save_continue') == "previous")
                {
                    redirect('questionaire');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong!");
                redirect('questionaire_tech_info');
            }
        }
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
			redirect('questionaire_tech_info');
    	}else{
    		// Giving access to the new delegate
    		$get_admins = $this->signup_m->get_admins();
    		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
				if(!empty($check_delegate_main)){
					if($check_delegate_main->user_type == 'Small and medium business'){
						$delegate_type = 'sme_with';
						$user_type = 'Small and medium business';
					}else if($check_delegate_main->user_type == 'Supplier'){
						$user_type = 'Supplier';
						$delegate_type = 'supplier_with';
					}else if($check_delegate_main->user_type == 'admin'){
						$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
						redirect('questionaire_tech_info');
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

					$this->email->subject('Delegate User Request-ProtectBox');
					$this->email->message($del_message);    

					$okay = $this->email->send();

					//admin email starts
					foreach($get_admins as $fetch_admin){
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type);
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
					redirect('questionaire_tech_info');
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
					$user_type = '';
					//admin email starts
					foreach($get_admins as $fetch_admin){
						$del_name = '';
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type);
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
					redirect('questionaire_tech_info');
				}
    	}
		
    }

	public function delegate_assign()
	{
		$this->load->model('questionaire_tech_info_m');
		$this->load->model('questionaire_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$delegate_id = $this->input->post('del');
		$key = $this->input->post('key');
		$update_array = $this->input->post('update_array');

		$fetch_del_user = $this->questionaire_tech_info_m->fetch_del_user($user_id,$delegate_id);
		$access_array = explode(",",$fetch_del_user->access);

		$get_del_info = $this->questionaire_m->fetch_delegate_info($delegate_id);
		$delegate_mail = $get_del_info->email;
		$del_name = $get_del_info->firstname.' '.$get_del_info->lastname;

		$username = $this->session->userdata['logged_in']['name'];
		
		if (!in_array("tech", $access_array))
		{
			array_push($access_array,"tech");
			$main_array = implode(",",$access_array);
			$update_del_user = $this->questionaire_tech_info_m->update_del_user($main_array,$delegate_id);
		}
		
		$save_del_accss = $this->questionaire_tech_info_m->sav_del_acs($update_array);

		if($key == 'os_input')
		{
		?>
			<select class="form-control del_operating_system"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'os_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->os_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->os_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* os_input ends */
		else if($key == 'antivirus_input')
		{
		?>
			<select class="form-control del_antivirus_installed"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'antivirus_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->antivirus_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->antivirus_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* antivirus_input ends */
		else if($key == 'firewall_input')
		{
		?>
			<select class="form-control del_firewall"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'firewall_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->firewall_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->firewall_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* firewall_input ends */
		else if($key == 'manage_it_input')
		{
		?>
			<select class="form-control del_manage_it"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'manage_it_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->manage_it_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->manage_it_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* manage_it_input ends */
		else if($key == 'internet_input')
		{
		?>
			<select class="form-control del_internet_have"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'internet_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->internet_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->internet_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* internet_input ends */
		else if($key == 'internet_option_input')
		{
		?>
			<select class="form-control del_internet_wifi_lan"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'internet_option_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->internet_option_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->internet_option_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* internet_option_input ends */
		else if($key == 'wifi_option_input')
		{
		?>
			<select class="form-control del_wifi_public"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'wifi_option_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->wifi_option_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->wifi_option_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* wifi_option_input ends */
		else if($key == 'wpa2_input')
		{
		?>
			<select class="form-control del_wpa2_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'wpa2_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->wpa2_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->wpa2_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* wpa2_input ends */
		else if($key == 'browser_input')
		{
		?>
			<select class="form-control del_browser_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'browser_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->browser_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->browser_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* browser_input ends */
		else if($key == 'update_browser_input')
		{
		?>
			<select class="form-control del_update_browser_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'update_browser_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->update_browser_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->update_browser_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* update_browser_input ends */
		else if($key == 'email_input')
		{
		?>
			<select class="form-control del_email_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'email_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->email_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->email_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* email_input ends */
		else if($key == 'spam_filtering_input')
		{
		?>
			<select class="form-control del_spam_filtering_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'spam_filtering_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->spam_filtering_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->spam_filtering_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* spam_filtering_input ends */
		else if($key == 'ad_blocking_input')
		{
		?>
			<select class="form-control del_ad_blocking_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'ad_blocking_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->ad_blocking_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->ad_blocking_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* ad_blocking_input ends */
		else if($key == 'web_hosting_input')
		{
		?>
			<select class="form-control del_web_hosting_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'web_hosting_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->web_hosting_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->web_hosting_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* web_hosting_input ends */
		else if($key == 'web_hosting_option_input')
		{
		?>
			<select class="form-control del_web_hosting_option_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'web_hosting_option_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->web_hosting_option_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->web_hosting_option_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* web_hosting_option_input ends */
		else if($key == 'hacking_input')
		{
		?>
			<select class="form-control del_hacking"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'hacking_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->hacking_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->hacking_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* hacking_input ends */
		else if($key == 'logs_input')
		{
		?>
			<select class="form-control del_logs_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'logs_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->logs_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->logs_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* logs_input ends */
		else if($key == 'software_update_input')
		{
		?>
			<select class="form-control del_software_update_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'software_update_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->software_update_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->software_update_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* software_update_input ends */
		else if($key == 'data_encrypt_input')
		{
		?>
			<select class="form-control del_data_encrypt_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'data_encrypt_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->data_encrypt_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->data_encrypt_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* data_encrypt_input ends */
		else if($key == 'system_access_input')
		{
		?>
			<select class="form-control del_access"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'system_access_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->system_access_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->system_access_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* system_access_input ends */
		else if($key == 'directory_service_input')
		{
		?>
			<select class="form-control directory"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'directory_service_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->directory_service_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->directory_service_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* directory_service_input ends */
		else if($key == 'two_factor_authentication_input')
		{
		?>
			<select class="form-control authentication"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'two_factor_authentication_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->two_factor_authentication_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->two_factor_authentication_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* two_factor_authentication_input ends */
		else if($key == 'premises_input')
		{
		?>
			<select class="form-control secure_premises"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'premises_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->premises_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->premises_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* premises_input ends */
		else if($key == 'public_key_infrastructure_input')
		{
		?>
			<select class="form-control public_key_infrastructure_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'public_key_infrastructure_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->public_key_infrastructure_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->public_key_infrastructure_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* public_key_infrastructure_input ends */
		else if($key == 'email_input_score')
		{
		?>
			<select class="form-control server_option"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'email_input_score',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->email_input_score; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->email_input_score == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* email_input_score ends */
		else if($key == 'managed_msp_input')
		{
		?>
			<select class="form-control managed_msp_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'managed_msp_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_tech_info_m->get_assign_del($user_id);;
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->managed_msp_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->managed_msp_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
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
		}/* managed_msp_input ends */
	}

	public function email_send_delegate($delegate_email,$del_name,$username){	
		$this->load->model('order_process_m');
		$this->load->library('email');
		$this->email->set_mailtype("html");

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$smbData=$this->order_process_m->fetch_sme($user_id);
		$smb_company=$smbData->company_name;
		
		$assign_message = $this->emailtemplate->deligate_assign_question($delegate_email,$del_name,$username,$smb_company);

		$this->email->from('noreply@protectbox.com', 'Protectbox');
		$this->email->to($delegate_email); 

		$this->email->subject('New Delegate Question-ProtectBox');
		$this->email->message($assign_message);    

		$okay = $this->email->send();
	}

	public function check_del_access($user_id){	
		$this->load->model('questionaire_tech_info_m');
		$get_question_access_val = $this->questionaire_tech_info_m->fetch_delegate_access_val($user_id);
		return $get_question_access_val;
	}

	public function check_delegate(){
		$this->load->model('questionaire_tech_info_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$check_4_res = $this->questionaire_tech_info_m->check_4_res($user_id);
		if(!empty($check_4_res))
		{
			$os_4_res = 'exist';
		}else{
			$os_4_res = '1';
		}

		$check_5_res = $this->questionaire_tech_info_m->check_5_res($user_id);
		if(!empty($check_5_res))
		{
			$antivirus_5_res = 'exist';
		}else{
			$antivirus_5_res = '1';
		}

		$check_6_res = $this->questionaire_tech_info_m->check_6_res($user_id);
		if(!empty($check_6_res))
		{
			$firewall_6_res = 'exist';
		}else{
			$firewall_6_res = '1';
		}

		$check_7_res = $this->questionaire_tech_info_m->check_7_res($user_id);
		if(!empty($check_7_res))
		{
			$manage_it_7_res = 'exist';
		}else{
			$manage_it_7_res = '1';
		}

		$check_8a_res = $this->questionaire_tech_info_m->check_8a_res($user_id);
		if(!empty($check_8a_res))
		{
			$internet_have_8a_res = 'exist';
		}else{
			$internet_have_8a_res = '1';
		}

		$check_8b_res = $this->questionaire_tech_info_m->check_8b_res($user_id);
		if(!empty($check_8b_res))
		{
			$internet_wifi_lan_8b_res = 'exist';
		}else{
			$internet_wifi_lan_8b_res = '1';
		}

		$check_9a_res = $this->questionaire_tech_info_m->check_9a_res($user_id);
		if(!empty($check_9a_res))
		{
			$hacking_9a_res = 'exist';
		}else{
			$hacking_9a_res = '1';
		}

		$check_9e_res = $this->questionaire_tech_info_m->check_9e_res($user_id);
		if(!empty($check_9e_res))
		{
			$access_9e_res = 'exist';
		}else{
			$access_9e_res = '1';
		}

		$array = array(
						'os_4_res' => $os_4_res,
						'antivirus_5_res' => $antivirus_5_res,
						'firewall_6_res' => $firewall_6_res,
						'manage_it_7_res' => $manage_it_7_res,
						'internet_have_8a_res' => $internet_have_8a_res,
						'internet_wifi_lan_8b_res' => $internet_wifi_lan_8b_res,
						'hacking_9a_res' => $hacking_9a_res,
						'access_9e_res' => $access_9e_res
					  );

		$encode = json_encode($array,true);
		print_r($encode);
	}
}
?>