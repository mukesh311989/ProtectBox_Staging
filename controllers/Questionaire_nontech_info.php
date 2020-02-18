<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_nontech_info extends CI_Controller {

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
        $this->load->model('questionaire_non_tech_m');
		$this->load->model('questionaire_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
         /* budget information insertion by user check */
        $get_questioniare_non_tech_info = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);
        
        if(!empty($get_questioniare_non_tech_info)){
            $data['non_tech_detail'] = $get_questioniare_non_tech_info;
        }else{
            $data['non_tech_detail'] = array();
        }
        /* budget information insertion by user check ends */

		$data['get_non_tech'] = $this->questionaire_m->tech_non_tech($user_id);
		$data['get_budget'] = $this->questionaire_m->tech_budget($user_id);
		$data['progress'] = $this->progress();
		$data['del_access'] = $this->check_del_access($user_id);
        $this->load->view('questionaire_nontech_info',$data);
    }
	
	public function progress(){
	  $user_id = $this->session->userdata['logged_in']['user_id']; 
	  $this->load->model('questionaire_non_tech_m');
	  $get_info_progress_tab_three = $this->questionaire_non_tech_m->progress_tab_three($user_id);
	  if(isset($this->session->userdata['progress_data'])){
	  	 $pro_quest_tab_score = $this->session->userdata['progress_data'];
	  }else{
	  	 $pro_quest_tab_score = 0;
	  }
	  $q1=0;$q2=0;$q3=0;$q4=0;$q5=0;$q6=0;$q7=0;$q8=0;$q9=0;$q10=0;$q11=0;$q12=0;

	  if($get_info_progress_tab_three->business_continuity_plan_input != ""){$q1 = 2.08;}
	  if($get_info_progress_tab_three->regular_backup_input != ""){$q2 = 2.08;}
	  if($get_info_progress_tab_three->training_cybersecurity_input != ""){$q3 = 2.08;}
	  if($get_info_progress_tab_three->aware_information_security_standard_input != ""){$q4 = 2.08;}
	  if($get_info_progress_tab_three->password_rules_input != ""){$q5 = 2.08;}
	  if($get_info_progress_tab_three->member_cisp_input != ""){$q6 = 2.08;}
	  if($get_info_progress_tab_three->cyber_insurance_input != ""){$q7 = 2.08;}
	  if($get_info_progress_tab_three->threat_detection_input != ""){$q8 = 2.08;}
	  if($get_info_progress_tab_three->cloud_data_storage_solution_input != ""){$q9 = 2.08;}
	  if($get_info_progress_tab_three->device_to_employees_input != ""){$q10 = 2.08;}
	  if($get_info_progress_tab_three->employees_use_remotely_input != ""){$q11 = 2.08;}
	  if($get_info_progress_tab_three->cyber_consultant_input != ""){$q12 = 2.08;}
	 	  
	  $pro_data = round($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12);
	  /*$this->session->set_userdata('progress_data',$pro_data);*/

	   $progress_three = array(
			"user_id"=>	 $user_id,
			"tab_three" => $pro_data
		 );

		$check_progress_row = $this->questionaire_non_tech_m->check_row_progress($user_id);
		
		if($check_progress_row > 0){
            $progress_tab_three_data = $this->questionaire_non_tech_m->update_progress_three($progress_three,$user_id);
        }else{
            $progress_tab_three_data = $this->questionaire_non_tech_m->insert_progress_three($progress_three);
        }
		if($progress_tab_three_data){
			$view_data = $this->questionaire_non_tech_m->get_progress_data($user_id);
		}

  		return $view_data;
	 }

    public function add_questioniare_non_tech(){
        $this->load->model('questionaire_non_tech_m');

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
                $score_accreditation_iso_iec = "0";
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
            }else{
				$vpn_home_remotezz = "0";
                $score_vpn_home_remotezz = "0";
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
            'user_id' => $this->session->userdata['logged_in']['user_id'],
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
            'employees_use_remotely_input'=> $vpn_home_remotezz,
			'employees_use_remotely_score'=> $score_vpn_home_remotezz,
            'cyber_consultant_input'=> $consultancy_cyber_consultantzz,
            /*'need_consultant_input'=> $consultancy_consultant_helpzz,*/
            'total_score'=> $total_added_score,
            'date' => $date
        );
		
        $user_id = $this->session->userdata['logged_in']['user_id'];

		if($this->input->post('save_continue') == 'skip')
		{
			if($this->input->post('business_continuity_plan') == NULL)
			{
				$check_12a_res = $this->questionaire_non_tech_m->check_12a_res($user_id);
				if(!empty($check_12a_res))
				{
					$business_continuity_12a_res = 'exist';
				}else{
					$business_continuity_12a_res = '1';
				}
			}else{
				$business_continuity_12a_res = 'exist';
			}

			if($this->input->post('training_staff') == NULL)
			{
				$check_13_res = $this->questionaire_non_tech_m->check_13_res($user_id);
				if(!empty($check_13_res))
				{
					$training_staff_13_res = 'exist';
				}else{
					$training_staff_13_res = '1';
				}
			}else{
				$training_staff_13_res = 'exist';
			}

			if($this->input->post('accreditation_iso_iec') == NULL)
			{
				$check_14_res = $this->questionaire_non_tech_m->check_14_res($user_id);
				if(!empty($check_14_res))
				{
					$accreditation_14_res = 'exist';
				}else{
					$accreditation_14_res = '1';
				}
			}else{
				$accreditation_14_res = 'exist';
			}

			if($this->input->post('password_policy_rules') == NULL)
			{
				$check_15_res = $this->questionaire_non_tech_m->check_15_res($user_id);
				if(!empty($check_15_res))
				{
					$password_policy_15_res = 'exist';
				}else{
					$password_policy_15_res = '1';
				}
			}else{
				$password_policy_15_res = 'exist';
			}

			if($this->input->post('reputation_management_member_cisp') == NULL)
			{
				$check_16a_res = $this->questionaire_non_tech_m->check_16a_res($user_id);
				if(!empty($check_16a_res))
				{
					$cisp_16a_res = 'exist';
				}else{
					$cisp_16a_res = '1';
				}
			}else{
				$cisp_16a_res = 'exist';
			}

			if($this->input->post('reputation_management_cyber_insurance') == NULL)
			{
				$check_16b_res = $this->questionaire_non_tech_m->check_16b_res($user_id);
				if(!empty($check_16b_res))
				{
					$cyber_insurance_16b_res = 'exist';
				}else{
					$cyber_insurance_16b_res = '1';
				}
			}else{
				$cyber_insurance_16b_res = 'exist';
			}

			if($this->input->post('reputation_management_threat_detection') == NULL)
			{
				$check_16c_res = $this->questionaire_non_tech_m->check_16c_res($user_id);
				if(!empty($check_16c_res))
				{
					$threat_detection_16c_res = 'exist';
				}else{
					$threat_detection_16c_res = '1';
				}
			}else{
				$threat_detection_16c_res = 'exist';
			}

			if($this->input->post('device_mdm') == NULL)
			{
				$check_17_res = $this->questionaire_non_tech_m->check_17_res($user_id);
				if(!empty($check_17_res))
				{
					$device_mdm_17_res = 'exist';
				}else{
					$device_mdm_17_res = '1';
				}
			}else{
				$device_mdm_17_res = 'exist';
			}

			if($consultancy_cyber_consultantzz == NULL)
			{
				$check_19_res = $this->questionaire_non_tech_m->check_19_res($user_id);
				if(!empty($check_19_res))
				{
					$cyber_consultantzz_19_res = 'exist';
				}else{
					$cyber_consultantzz_19_res = '1';
				}
			}else{
				$cyber_consultantzz_19_res = 'exist';
			}
			
			
			if($business_continuity_12a_res == 'exist' && $training_staff_13_res == 'exist' && $accreditation_14_res == 'exist' && $password_policy_15_res == 'exist' && $cisp_16a_res == 'exist' && $cyber_insurance_16b_res == 'exist' && $threat_detection_16c_res == 'exist' && $device_mdm_17_res == 'exist' && $cyber_consultantzz_19_res == 'exist')
			{
				$check_row = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);
				if($check_row > 0)
				{
					$update_data = $this->questionaire_non_tech_m->questioniare_non_tech_update($add_non_tech,$user_id);
					redirect('questionaire_budget');
				}else{
					$insert_budget_data = $this->questionaire_non_tech_m->insert_non_tech_info($add_non_tech);
					redirect('questionaire_budget');
				}
			}else{
				$array = array(
							'business_continuity_12a_res' => $business_continuity_12a_res,
							'training_staff_13_res' => $training_staff_13_res,
							'accreditation_14_res' => $accreditation_14_res,
							'password_policy_15_res' => $password_policy_15_res,
							'cisp_16a_res' => $cisp_16a_res,
							'cyber_insurance_16b_res' => $cyber_insurance_16b_res,
							'threat_detection_16c_res' => $threat_detection_16c_res,
							'device_mdm_17_res' => $device_mdm_17_res,
							'cyber_consultantzz_19_res' => $cyber_consultantzz_19_res
						  );
				$this->session->set_flashdata("skip_flash", $array);
				redirect('questionaire_nontech_info');
			}
		}



        $check_row = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);
        
      if($check_row > 0){
            $update_data = $this->questionaire_non_tech_m->questioniare_non_tech_update($add_non_tech,$user_id);

          if($update_data)
            {
                if($this->input->post('save_continue') == "continue")
                {
                    redirect('questionaire_budget');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
                /* else if($this->input->post('save_continue') == "previous")
                {
                    redirect('questionaire_tech_info');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
                redirect('questionaire_nontech_info');
            }
        }else{
            $insert_budget_data = $this->questionaire_non_tech_m->insert_non_tech_info($add_non_tech);
            if($insert_budget_data)
            {
                if($this->input->post('save_continue') == "continue")
                {
                    redirect('questionaire_budget');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
               /*  else if($this->input->post('save_continue') == "previous")
                {
                    redirect('questionaire_tech_info');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
                redirect('questionaire_nontech_info');
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
			redirect('questionaire_nontech_info');
    	}else{
    		// Giving access to the new delegate
    		$get_admins = $this->signup_m->get_admins();
    		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
				if(!empty($check_delegate_main)){
					if($check_delegate_main->user_type == 'Small and medium business'){
						$delegate_type = 'sme_with';
						$user_type = 'Small and medium business';
					}else if($check_delegate_main->user_type == 'Supplier'){
						$delegate_type = 'supplier_with';
						$user_type = 'Supplier';
					}else if($check_delegate_main->user_type == 'admin'){
						$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
						redirect('questionaire_nontech_info');
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
					redirect('questionaire_nontech_info');
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
					redirect('questionaire_nontech_info');
				}
    	}
		
    }


	public function delegate_assign()
	{
		$this->load->model('questionaire_non_tech_m');
		$this->load->model('questionaire_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$delegate_id = $this->input->post('del');
		$key = $this->input->post('key');
		$update_array = $this->input->post('update_array');

		$fetch_del_user = $this->questionaire_non_tech_m->fetch_del_user($user_id,$delegate_id);
		$access_array = explode(",",$fetch_del_user->access);

		$get_del_info = $this->questionaire_m->fetch_delegate_info($delegate_id);
		$delegate_mail = $get_del_info->email;
		$del_name = $get_del_info->firstname.' '.$get_del_info->lastname;

		$username = $this->session->userdata['logged_in']['name'];
		
		if (!in_array("non_tech", $access_array))
		{
			array_push($access_array,"non_tech");
			$main_array = implode(",",$access_array);
			$update_del_user = $this->questionaire_non_tech_m->update_del_user($main_array,$delegate_id);
		}
		
		$save_del_accss = $this->questionaire_non_tech_m->sav_del_acs($update_array);

		if($key == 'business_continuity_security')
		{
		?>
			<select class="form-control del_industry"  style="width:50%;display:none" onchange="get_delegate(this.value,'business_continuity_security',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name))
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_plan_input;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->business_continuity_plan_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'business_continuity_procedure_input')
		{
		?>
			<select class="form-control del_business_continuity_procedure_input"  style="width:50%;display:none" onchange="get_delegate(this.value,'business_continuity_procedure_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name))
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_procedure_input;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->business_continuity_procedure_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'regular_backup')
		{
		?>
			<select class="form-control del_regular_backup"  style="width:50%;display:none" onchange="get_delegate(this.value,'regular_backup',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name))
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->regular_backup;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->regular_backup == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'cybersecurity_training')
		{
		?>
			<select class="form-control cybersecurity_training_only"  style="width:50%;display:none" onchange="get_delegate(this.value,'cybersecurity_training',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name))
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->training_cybersecurity_input;?>" ><?php echo $name;?></option>  
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->training_cybersecurity_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'security_standerd')
		{
		?>
			<select class="form-control information_security_standers"  style="width:50%;display:none" onchange="get_delegate(this.value,'security_standerd',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name))
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->accreditation_security_standerd_input;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->accreditation_security_standerd_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'password_policy_rules')
		{
		?>
			<select class="form-control password_policy_rules"  style="width:50%;display:none" onchange="get_delegate(this.value,'password_policy_rules',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->adaquate_password_input;?>" ><?php echo $name;?></option> 
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->adaquate_password_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'cisp_partnership')
		{
		?>
			<select class="form-control cisp_partnership_rule"  style="width:50%;display:none" onchange="get_delegate(this.value,'cisp_partnership',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_security_information_input;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->cyber_security_information_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'cyber_insurence')
		{
		?>
			<select class="form-control cyber_insurence_pertnership"  style="width:50%;display:none" onchange="get_delegate(this.value,'cyber_insurence',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_insurence_input;?>" ><?php echo $name;?></option>   
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->cyber_insurence_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'threat_prevention_detection')
		{
		?>
			<select class="form-control threat_prevention_detection"  style="width:50%;display:none" onchange="get_delegate(this.value,'threat_prevention_detection',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->threat_detection_input;?>" ><?php echo $name;?></option>  
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->threat_detection_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'cloud_storage')
		{
		?>
			<select class="form-control del_cloud_storage"  style="width:50%;display:none" onchange="get_delegate(this.value,'cloud_storage',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cloud_storage;?>" ><?php echo $name;?></option>    
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->cloud_storage == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'device_management_solution')
		{
		?>
			<select class="form-control device_management_solution"  style="width:50%;display:none" onchange="get_delegate(this.value,'device_management_solution',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->device_management_input;?>" ><?php echo $name;?></option>  
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->device_management_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'vpn_home')
		{
		?>
			<select class="form-control del_vpn_home"  style="width:50%;display:none" onchange="get_delegate(this.value,'vpn_home',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->vpn_home;?>" ><?php echo $name;?></option> 
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->vpn_home == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		else if($key == 'cyber_consultent')
		{
		?>
			<select class="form-control cyber_consultent_solution"  style="width:50%;display:none" onchange="get_delegate(this.value,'cyber_consultent',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			 $this->load->model('questionaire_m');
			 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
			 if(!empty($get_delegate_info))
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(!empty($get_del_name)) 
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
				 ?>
				 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->need_consultant_input;?>" ><?php echo $name;?></option> 
				 <?php
				 }
			 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(!empty($get_assign_del))
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->need_consultant_input == 1)
				  {
					  $del_name = $this->questionaire_non_tech_m->get_sme($assign_del->user_id);
					  if(!empty($del_name))
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
		}
		
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
		$this->load->model('questionaire_non_tech_m');
		$get_question_access_val = $this->questionaire_non_tech_m->fetch_delegate_access_val($user_id);
		return $get_question_access_val;
	}

	public function check_delegate(){
		$this->load->model('questionaire_non_tech_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$check_12a_res = $this->questionaire_non_tech_m->check_12a_res($user_id);
		if(!empty($check_12a_res))
		{
			$business_continuity_12a_res = 'exist';
		}else{
			$business_continuity_12a_res = '1';
		}

		$check_13_res = $this->questionaire_non_tech_m->check_13_res($user_id);
		if(!empty($check_13_res))
		{
			$training_staff_13_res = 'exist';
		}else{
			$training_staff_13_res = '1';
		}

		$check_14_res = $this->questionaire_non_tech_m->check_14_res($user_id);
		if(!empty($check_14_res))
		{
			$accreditation_14_res = 'exist';
		}else{
			$accreditation_14_res = '1';
		}

		$check_15_res = $this->questionaire_non_tech_m->check_15_res($user_id);
		if(!empty($check_15_res))
		{
			$password_policy_15_res = 'exist';
		}else{
			$password_policy_15_res = '1';
		}

		$check_16a_res = $this->questionaire_non_tech_m->check_16a_res($user_id);
		if(!empty($check_16a_res))
		{
			$cisp_16a_res = 'exist';
		}else{
			$cisp_16a_res = '1';
		}

		$check_16b_res = $this->questionaire_non_tech_m->check_16b_res($user_id);
		if(!empty($check_16b_res))
		{
			$cyber_insurance_16b_res = 'exist';
		}else{
			$cyber_insurance_16b_res = '1';
		}

		$check_16c_res = $this->questionaire_non_tech_m->check_16c_res($user_id);
		if(!empty($check_16c_res))
		{
			$threat_detection_16c_res = 'exist';
		}else{
			$threat_detection_16c_res = '1';
		}

		$check_17_res = $this->questionaire_non_tech_m->check_17_res($user_id);
		if(!empty($check_17_res))
		{
			$device_mdm_17_res = 'exist';
		}else{
			$device_mdm_17_res = '1';
		}

		$check_19_res = $this->questionaire_non_tech_m->check_19_res($user_id);
		if(!empty($check_19_res))
		{
			$cyber_consultantzz_19_res = 'exist';
		}else{
			$cyber_consultantzz_19_res = '1';
		}

		$array = array(
						'business_continuity_12a_res' => $business_continuity_12a_res,
						'training_staff_13_res' => $training_staff_13_res,
						'accreditation_14_res' => $accreditation_14_res,
						'password_policy_15_res' => $password_policy_15_res,
						'cisp_16a_res' => $cisp_16a_res,
						'cyber_insurance_16b_res' => $cyber_insurance_16b_res,
						'threat_detection_16c_res' => $threat_detection_16c_res,
						'device_mdm_17_res' => $device_mdm_17_res,
						'cyber_consultantzz_19_res' => $cyber_consultantzz_19_res
					  );

		$encode = json_encode($array,true);
		print_r($encode);
	}
}
?>