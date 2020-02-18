<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delegate_questionaire_nontech_info extends CI_Controller{
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
        $this->load->model('questionaire_non_tech_m');
		$this->load->model('questionaire_m');
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
        $user_id = $this->uri->segment(2);
         /* budget information insertion by user check */
        $get_questioniare_non_tech_info = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);
        $check_rows = count($get_questioniare_non_tech_info);
        
        if($check_rows > 0){
            $data['non_tech_detail'] = $get_questioniare_non_tech_info;
        }else{
            $data['non_tech_detail'] = array();
        }
        /* budget information insertion by user check ends */

		$data['get_non_tech'] = $this->questionaire_m->tech_non_tech($user_id);
		$data['delegate_data'] = $get_sme->access;
		//print_r($delegate_data);
		//exit;
		$data['questions'] = $this->questionaire_non_tech_m->get_questions($this->session->userdata['logged_in']['user_id'],$user_id);
        $this->load->view('delegate_questionaire_nontech_info',$data);
    }

    public function add_questioniare_non_tech(){
		$this->load->helper('url');
        $this->load->model('questionaire_non_tech_m');
        $this->load->model('questionaire_m');
		$val = $this->input->post('sub_val');
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
		$user_id = $this->uri->segment(3);
		$date = time();

		$fetch_all = $this->questionaire_non_tech_m->check_questioniare_non_tech($user_id);
        $check_del = $this->questionaire_non_tech_m->check_question($this->session->userdata['logged_in']['user_id'],$user_id);
		
		//Do you use security monitoring solutions for your Business Continuity starts
		if($check_del->business_continuity_plan_input == '1'){
			if($this->input->post('business_continuity_plan') == ''){
				$business_continuity_plan = '';
				$score_business_continuity_plan = "";
			}else{
				$business_continuity_plan = $this->input->post('business_continuity_plan');
				if($business_continuity_plan == '1'){
					$score_business_continuity_plan = "0";
				}else{
					$score_business_continuity_plan = "0.1";
				}
			}
		}else{
			if($fetch_all->business_continuity_plan_input == ''){
				$business_continuity_plan = '';
			}else{
				$business_continuity_plan = $fetch_all->business_continuity_plan_input;
			}
			if($fetch_all->business_continuity_plan_score == ''){
				$score_business_continuity_plan = '';
			}else{
				$score_business_continuity_plan = $fetch_all->business_continuity_plan_score;
			}
		}
		//Do you use security monitoring solutions for your Business Continuity ends

		//Which Business Continuity Procedures do you use starts
		if($check_del->business_continuity_procedure_input == '1'){
			if($this->input->post('business_continuity_procedureszz') == '')
			{
				$get_business_continuity_procedureszz = '';
			}else{
				$kichu_ekta = $this->input->post('business_continuity_procedureszz');
				$implode_business_continuity_procedureszz = implode(',',$kichu_ekta); 
			}

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
			if($fetch_all->business_continuity_procedure_input == ''){
				$get_business_continuity_procedureszz = '';
			}else{
				$get_business_continuity_procedureszz = $fetch_all->business_continuity_procedure_input;
			}
			if($fetch_all->business_continuity_procedure_score == ''){
				$total_step_score = '';
			}else{
				$total_step_score = $fetch_all->business_continuity_procedure_score;
			}
		}
		//Which Business Continuity Procedures do you use ends

		//Does your business have regular backups starts
		if($check_del->regular_backup == '1'){
			if($this->input->post('business_continuity_regular_backup') == ''){
				$business_continuity_regular_backup_input = "" ;
			}else{
				$business_continuity_regular_backup_input = $this->input->post('business_continuity_regular_backup') ;
			}

			if($business_continuity_regular_backup_input == 'Local'){
                $score_business_continuity_regular_backup = 0.1;
            }else if($business_continuity_regular_backup_input == 'Remote'){
                $score_business_continuity_regular_backup = "";
            }else if($business_continuity_regular_backup_input == 'None'){
                $score_business_continuity_regular_backup = 0.2;
            }
			else if($business_continuity_regular_backup_input == ''){
                $score_business_continuity_regular_backup = "";
            }
		}else{
			if($fetch_all->regular_backup_input == ''){
				$business_continuity_regular_backup_input = '';
			}else{
				$business_continuity_regular_backup_input = $fetch_all->regular_backup_input;
			}
			if($fetch_all->regular_backup_score == ''){
				$score_business_continuity_regular_backup = '';
			}else{
				$score_business_continuity_regular_backup = $fetch_all->regular_backup_score;
			}
		}
		//Does your business have regular backups ends
		
		// Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training starts
		if($check_del->training_cybersecurity_input == '1'){
			if($this->input->post('training_staff') == ''){
				$training_staff = '';
				$score_training_staff = '';
			}else{
				$training_staff = $this->input->post('training_staff');
			}

            if($training_staff == 'Cyber security'){
                $score_training_staff = 0.1;
            }else if($training_staff == 'Physical security'){
                $score_training_staff = 0.1;
            }else if($training_staff == 'Cyber & Physical security'){
                $score_training_staff = "";
            }else if($training_staff == 'None'){
                $score_training_staff = 0.2;
            }
		}else{
			if($fetch_all->training_cybersecurity_input == ''){
				$training_staff = '';
			}else{
				$training_staff = $fetch_all->training_cybersecurity_input;
			}
			if($fetch_all->training_cybersecurity_score == ''){
				$score_training_staff = '';
			}else{
				$score_training_staff = $fetch_all->training_cybersecurity_score;
			}
		}
		// Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training ends
		
       // Which Information Security Standards are relevant to you that you don’t have? Click here for detail starts
		if($check_del->accreditation_security_standerd_input == '1'){
			if($this->input->post('accreditation_iso_iec') != ''){
				$input_accreditation_iso_iec = $this->input->post('accreditation_iso_iec');
                $score_accreditation_iso_iec = "1";
            }else{
                $score_accreditation_iso_iec = "0.1";
				$input_accreditation_iso_iec = '';
            }
		}else{
			if($fetch_all->aware_information_security_standard_input == ''){
				$input_accreditation_iso_iec = '';
			}else{
				$input_accreditation_iso_iec = $fetch_all->aware_information_security_standard_input;
			}
			if($fetch_all->aware_information_security_standard_score == ''){
				$score_accreditation_iso_iec = '';
			}else{
				$score_accreditation_iso_iec = $fetch_all->aware_information_security_standard_score;
			}
		}
	    // Which Information Security Standards are relevant to you that you don’t have? Click here for detail ends
       // Do you implement simple but adequate password rules that encourage customers to have long, random passwords starts
		if($check_del->adaquate_password_input == '1'){
			 if($this->input->post('password_policy_rules') != ''){
				$password_policy_rules = $this->input->post('password_policy_rules');
            }else{
				$password_policy_rules = '';
            }
            
            /* password_policy_rules*/ 
            if($this->input->post('password_policy_rules') == '1'){
                $score_password_policy_rules = "0";
            }else{
                $score_password_policy_rules = "0.1";
            }
		}else{
			if($fetch_all->password_rules_input == ''){
				$password_policy_rules = '';
			}else{
				$password_policy_rules = $fetch_all->password_rules_input;
			}
			if($fetch_all->password_rules_score == ''){
				$score_password_policy_rules = '';
			}else{
				$score_password_policy_rules = $fetch_all->password_rules_score;
			}
		}
		// Do you implement simple but adequate password rules that encourage customers to have long, random passwords ends
		// Are you a member of Cyber Security Information Sharing Partnership (CiSP) starts
			if($check_del->cyber_security_information_input == '1'){
				if($this->input->post('reputation_management_member_cisp') == ''){
					$reputation_management_member_cisp = "";
					$score_reputation_management_member_cisp = "";
				}else{
					$reputation_management_member_cisp = $this->input->post('reputation_management_member_cisp');
				}

				if($reputation_management_member_cisp == '1'){
					$score_reputation_management_member_cisp = "0";
				}else if($reputation_management_member_cisp == '0'){
					$score_reputation_management_member_cisp = "0.1";
				}
			}else{
				if($fetch_all->member_cisp_input == ''){
					$reputation_management_member_cisp = '';
				}else{
					$reputation_management_member_cisp = $fetch_all->member_cisp_input;
				}
				if($fetch_all->member_cisp_score == ''){
					$score_reputation_management_member_cisp = '';
				}else{
					$score_reputation_management_member_cisp = $fetch_all->member_cisp_score;
				}
			}
		// Are you a member of Cyber Security Information Sharing Partnership (CiSP) ends
		// Do you have cyber insurance? starts
			if($check_del->cyber_insurence_input == '1'){
				if($this->input->post('reputation_management_cyber_insurance') == ''){
					$reputation_management_cyber_insurance = "";
					$score_reputation_management_cyber_insurance = "";
				}else{
					$reputation_management_cyber_insurance = $this->input->post('reputation_management_cyber_insurance');
				}

				if($this->input->post('reputation_management_cyber_insurance') == '1'){
					$score_reputation_management_cyber_insurance = "0";
				}else{
					$score_reputation_management_cyber_insurance = "0.1";
				}
			}else{
				if($fetch_all->cyber_insurance_input == ''){
					$reputation_management_cyber_insurance = '';
				}else{
					$reputation_management_cyber_insurance = $fetch_all->cyber_insurance_input;
				}
				if($fetch_all->cyber_insurance_score == ''){
					$score_reputation_management_cyber_insurance = '';
				}else{
					$score_reputation_management_cyber_insurance = $fetch_all->cyber_insurance_score;
				}
			}
		  // Do you have cyber insurance? ends
		  // Do you have threat detection and prevention solutions starts
			if($check_del->threat_detection_input == '1'){
				if($this->input->post('reputation_management_threat_detection') == ''){
					$reputation_management_threat_detection = "";
					$score_reputation_management_threat_detection = "";
				}else{
					$reputation_management_threat_detection = $this->input->post('reputation_management_threat_detection');
				}
				if($reputation_management_threat_detection == 'Detection' || $reputation_management_threat_detection == 'Prevention' || $reputation_management_threat_detection == 'Detection_prevention'){
					$score_reputation_management_threat_detection = "0";
				}else if($reputation_management_threat_detection == 'none'){
					$score_reputation_management_threat_detection = "0.1";
				}
			}else{
				if($fetch_all->threat_detection_input == ''){
					$reputation_management_threat_detection = '';
				}else{
					$reputation_management_threat_detection = $fetch_all->threat_detection_input;
				}
				if($fetch_all->threat_detection_score == ''){
					$score_reputation_management_threat_detection = '';
				}else{
					$score_reputation_management_threat_detection = $fetch_all->threat_detection_score;
				}
			}
		  // Do you have threat detection and prevention solutions ends
		  // Do you use cloud data storage solutions starts
			if($check_del->cloud_storage == '1'){
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
			}else{
				if($fetch_all->cloud_data_storage_solution_input == ''){
					$input_reputation_management_cloud_storage = '';
				}else{
					$input_reputation_management_cloud_storage = $fetch_all->cloud_data_storage_solution_input;
				}
				if($fetch_all->cloud_data_storage_solution_score == ''){
					$score_reputation_management_cloud_storage = '';
				}else{
					$score_reputation_management_cloud_storage = $fetch_all->cloud_data_storage_solution_score;
				}
			}
		  // Do you use cloud data storage solutions ends
			
          // Do you have device management solutions on the devices issued to your employees starts
			if($check_del->device_management_input == '1'){
				if($this->input->post('device_mdm') == ''){
					$device_mdm = '';
					$score_device_mdm = '';
				}else{
					$device_mdm = $this->input->post('device_mdm');
				}
				if($device_mdm == '1'){
					$score_device_mdm = 0.1;
				}else{
					$score_device_mdm = 0;
					$device_for_employeess = "";
				}
			}else{
				if($fetch_all->device_to_employees_input == ''){
					$device_mdm = '';
				}else{
					$device_mdm = $fetch_all->device_to_employees_input;
				}
				if($fetch_all->device_to_employees_score == ''){
					$score_device_mdm = '';
				}else{
					$score_device_mdm = $fetch_all->device_to_employees_score;
				}
			}
		  // Do you have device management solutions on the devices issued to your employees ends
           
          // Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely starts
			if($check_del->vpn_home == '1'){
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
			}else{
				if($fetch_all->vpn_software_input == ''){
					$vpn_home_remotezz = '';
				}else{
					$vpn_home_remotezz = $fetch_all->vpn_software_input;
				}
				if($fetch_all->vpn_software_score == ''){
					$score_vpn_home_remotezz = '';
				}else{
					$score_vpn_home_remotezz = $fetch_all->vpn_software_score;
				}
			}
		  // Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely ends
          // Do you need a cyber consultant to help with implementation, if you don't already have one starts 
			if($check_del->need_consultant_input == '1'){
				if($this->input->post('consultancy_cyber_consultantzz') == ''){
					$consultancy_cyber_consultantzz = '';
				}else{
					$consultancy_cyber_consultantzz = $this->input->post('consultancy_cyber_consultantzz');
				}
				if($consultancy_cyber_consultantzz == '1'){
					$consultancy_consultant_helpzz = $this->input->post('consultancy_consultant_helpzz');
				}else if($consultancy_cyber_consultantzz == '0'){
					$consultancy_consultant_helpzz = $this->input->post('consultancy_consultant_helpzz');
				}else if($consultancy_cyber_consultantzz == ''){
					$consultancy_consultant_helpzz = "";
				}
				$score_accreditation_regular_audit = "";
			}else{
				if($fetch_all->need_consultant_input == ''){
					$consultancy_cyber_consultantzz = '';
				}else{
					$consultancy_cyber_consultantzz = $fetch_all->need_consultant_input;
				}
			}
		  // Do you need a cyber consultant to help with implementation, if you don't already have one ends
          
        /* End of Scores insertion for specific non-tech questions */

        $total_added_score = $score_business_continuity_plan + $total_step_score + $score_business_continuity_regular_backup + $score_training_staff + $score_accreditation_iso_iec + $score_accreditation_regular_audit + $score_password_policy_rules + $score_reputation_management_member_cisp + $score_reputation_management_cyber_insurance + $score_reputation_management_threat_detection + $score_reputation_management_cloud_storage + $score_device_mdm + $score_device_for_employeess + $score_vpn_home_remotezz + $score_vpn_havezz;

        $add_non_tech = array(
            'user_id' => $user_id,
            'business_continuity_plan_input'=> $business_continuity_plan, 
            'business_continuity_plan_score' => $score_business_continuity_plan,
            'business_continuity_procedure_input'=> $implode_business_continuity_procedureszz, 
            'business_continuity_procedure_score' => $total_step_score,
            'regular_backup_input'=> $business_continuity_regular_backup_input,
			'regular_backup_score'=> $score_business_continuity_regular_backup,
            'training_cybersecurity_input' => $training_staff,
			'training_cybersecurity_score' => $score_training_staff,
            'aware_information_security_standard_input'=> $input_accreditation_iso_iec,
			'aware_information_security_standard_score'=> $score_accreditation_iso_iec,
            'cover_information_security_standard_input'=> $implode_training_iss,
			'cover_information_security_standard_score'=> $score_accreditation_regular_audit,
            'password_rules_input'=> $password_policy_rules,
			'password_rules_score'=> $score_password_policy_rules,
            'member_cisp_input'=> $reputation_management_member_cisp,
			'member_cisp_score'=> $score_reputation_management_member_cisp,
            'cyber_insurance_input'=> $reputation_management_cyber_insurance, 
			'cyber_insurance_score'=> $score_reputation_management_cyber_insurance, 
            'threat_detection_input'=> $reputation_management_threat_detection,
			'threat_detection_score'=> $score_reputation_management_threat_detection,
            'cloud_data_storage_solution_input'=> $input_reputation_management_cloud_storage,
			'cloud_data_storage_solution_score'=> $score_reputation_management_cloud_storage,
            'device_to_employees_input'=> $device_mdm,
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
		
        $check_row = $this->questionaire_non_tech_m->check_tech($user_id);
        if(sizeof($check_row) > 0){
           $update_data = $this->questionaire_non_tech_m->questioniare_non_tech_update($add_non_tech,$user_id);
            if($update_data > 0){
                 if($val == "continue"){
					$get_next_info = $this->questionaire_non_tech_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					if($get_next_info > 0)
					{
						$url = 'delegate_questionaire_budget/'.$user_id.'';
					}
					else
					{
						$url = 'delegate_questionaire_nontech_info/'.$user_id.'';
						$this->session->set_flashdata("update", "Success , Your basics updated successfully!");
						//redirect('delegate_questionaire_nontech_info/'.$user_id.'');
					}				
                }
				else if($val == "logout"){
					$url = 'logout'; 
                }
            }else{
				$url = 'delegate_questionaire_nontech_info/'.$user_id.'';
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
            }
        }else{
            $insert_budget_data = $this->questionaire_non_tech_m->insert_non_tech_info($add_non_tech);
            if($insert_budget_data)
            {
                 if($val == "continue"){
					$get_next_info = $this->questionaire_non_tech_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					if($get_next_info > 0){
						$url = 'delegate_questionaire_budget/'.$user_id.'';
					}
					else{
						$url = 'delegate_questionaire_nontech_info/'.$user_id.'';
						$this->session->set_flashdata("update", "Success , Your basics updated successfully!");	
					}
                }
                else if($val == "logout"){
					$url = 'logout';  
                }
            }else{
				$url = 'delegate_questionaire_nontech_info/'.$user_id.'';
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
            }
        }
		//echo $url;
		//redirect(trim($url));
		$xxxurl = base_url($url);
		echo "<script>window.location.href='".$xxxurl."'</script>";
    }
}
?>