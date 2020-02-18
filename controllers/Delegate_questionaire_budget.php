<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delegate_questionaire_budget extends CI_Controller {

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
        $this->load->model('questionaire_budget_m');
        $this->load->model('questionaire_m');
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
        $user_id = $this->uri->segment(2);

         /* budget information insertion by user check */
        $get_questioniare_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
        $check_rows = sizeof($get_questioniare_budget);
        
        if($check_rows > 0){
            $data['budget_detail'] = $get_questioniare_budget;
        }else{
            $data['budget_detail'] = array();
        }
        /* budget information insertion by user check ends */
		$data['delegate_data'] = $get_sme->access;
		$data['questions'] = $this->questionaire_budget_m->get_questions($this->session->userdata['logged_in']['user_id'],$user_id);
        $this->load->view('delegate_questionaire_budget',$data);
    }

    public function add_questioniare_budget()
    {
		
        $this->load->model('questionaire_budget_m'); 
        $this->load->model('questionaire_m');
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
        $user_id = $this->uri->segment(3);

		$val = $this->input->post('sub_val');

		$fetch_all = $this->questionaire_budget_m->check_questioniare_budget($user_id);
        $check_del = $this->questionaire_budget_m->check_question($this->session->userdata['logged_in']['user_id'],$user_id);

		//cybersecurity annually starts
		if($check_del->amount_cybersecurity_input == '1'){
			if($this->input->post('budget_cyber_security') == ''){
				$budget_cyber_security = '';
			}else{
				$budget_cyber_security = $this->input->post('budget_cyber_security');
			}
		}else{
			if($fetch_all->amount_cybersecurity_input == ''){
				$budget_cyber_security = '';
			}else{
				$budget_cyber_security = $fetch_all->amount_cybersecurity_input;
			}
		}
		//cybersecurity annually ends

		//annual budget starts
		if($check_del->percentage_annual_budget_input == '1'){
			if($this->input->post('budget_annual') == ''){
				$budget_annual = '';
			}else{
				$budget_annual = $this->input->post('budget_annual');
			}
		}else{
			if($fetch_all->percentage_annual_budget_input == ''){
				$budget_annual = '';
			}else{
				$budget_annual = $fetch_all->percentage_annual_budget_input;
			}
		}
		//annual budget ends

		//Cyber Security per year starts
		if($check_del->budget_cybersecurity_per_year_input == '1'){
			if($this->input->post('budget_per_year') == ''){
				$budget_per_year = '';
			}else{
				$budget_per_year = $this->input->post('budget_per_year');
			}
		}else{
			if($fetch_all->budget_cybersecurity_per_year_input == ''){
				$budget_per_year = '';
			}else{
				$budget_per_year = $fetch_all->budget_cybersecurity_per_year_input;
			}
		}
		//Cyber Security per year ends

		//paid for starts
		if($check_del->other_payment == '1'){
			if($this->input->post('budget_paid') == ''){
				$implode_budget_paid = '';
			}else{
				$budget_paid = $this->input->post('budget_paid');
				$implode_budget_paid = implode(',',$budget_paid);
			}
		}else{
			if($fetch_all->paid_for_input == ''){
				$implode_budget_paid = '';
			}else{
				$implode_budget_paid = $fetch_all->paid_for_input;
			}
		}
		//paid for ends

        //budget breakdown starts
		if($check_del->budget_breakdown == '1'){
			if($this->input->post('currency') == ''){
				$currency = '';
			}else{
				$currency = $this->input->post('currency');
			}
			if($this->input->post('tech_os') == ''){
				$tech_os = '';
			}else{
				$tech_os = $this->input->post('tech_os');
			}

			if($this->input->post('tech_internet') == ''){
				$tech_internet = '';
			}else{
				$tech_internet = $this->input->post('tech_internet');
			}

			if($this->input->post('tech_antivirus') == ''){
				$tech_antivirus = '';
			}else{
				$tech_antivirus = $this->input->post('tech_antivirus');
			}

			if($this->input->post('tech_firewall') == ''){
				$tech_firewall = '';
			}else{
				$tech_firewall = $this->input->post('tech_firewall');
			}

			if($this->input->post('tech_access_control') == ''){
				$tech_access_control = '';
			}else{
				$tech_access_control = $this->input->post('tech_access_control');
			}

			if($this->input->post('tech_protect_data') == ''){
				$tech_protect_data = '';
			}else{
				$tech_protect_data = $this->input->post('tech_protect_data');
			}

			if($this->input->post('tech_mssp') == ''){
				$tech_mssp = '';
			}else{
				$tech_mssp = $this->input->post('tech_mssp');
			}

			if($this->input->post('ntech_continuity_procedure') == ''){
				$ntech_continuity_procedure = '';
			}else{
				$ntech_continuity_procedure = $this->input->post('ntech_continuity_procedure');
			}

			if($this->input->post('ntech_training') == ''){
				$ntech_training = '';
			}else{
				$ntech_training = $this->input->post('ntech_training');
			}

			if($this->input->post('ntech_regulation') == ''){
				$ntech_regulation = '';
			}else{
				$ntech_regulation = $this->input->post('ntech_regulation');
			}

			if($this->input->post('ntech_reputation') == ''){
				$ntech_reputation = '';
			}else{
				$ntech_reputation = $this->input->post('ntech_reputation');
			}

			if($this->input->post('ntech_pass_policy') == ''){
				$ntech_pass_policy = '';
			}else{
				$ntech_pass_policy = $this->input->post('ntech_pass_policy');
			}

			if($this->input->post('ntech_devices') == ''){
				$ntech_devices = '';
			}else{
				$ntech_devices = $this->input->post('ntech_devices');
			}

			if($this->input->post('ntech_vpn') == ''){
				$ntech_vpn = '';
			}else{
				$ntech_vpn = $this->input->post('ntech_vpn');
			}

			if($this->input->post('ntech_implementation') == ''){
				$ntech_implementation = '';
			}else{
				$ntech_implementation = $this->input->post('ntech_implementation');
			}
		}else{
			if($fetch_all->preferred_budget_breakdown_currency_input == ''){
				$currency = '';
			}else{
				$currency = $fetch_all->preferred_budget_breakdown_currency_input;
			}

			if($fetch_all->tech_operating_system_input == ''){
				$tech_os = '';
			}else{
				$tech_os = $fetch_all->tech_operating_system_input;
			}

			if($fetch_all->tech_internet_input == ''){
				$tech_internet = '';
			}else{
				$tech_internet = $fetch_all->tech_internet_input;
			}

			if($fetch_all->tech_antivirus_input == ''){
				$tech_antivirus = '';
			}else{
				$tech_antivirus = $fetch_all->tech_antivirus_input;
			}

			if($fetch_all->tech_firewall_input == ''){
				$tech_firewall = '';
			}else{
				$tech_firewall = $fetch_all->tech_firewall_input;
			}

			if($fetch_all->tech_access_control_input == ''){
				$tech_access_control = '';
			}else{
				$tech_access_control = $fetch_all->tech_access_control_input;
			}

			if($fetch_all->tech_protecting_data_input == ''){
				$tech_protect_data = '';
			}else{
				$tech_protect_data = $fetch_all->tech_protecting_data_input;
			}

			if($fetch_all->tech_mssp_input == ''){
				$tech_mssp = '';
			}else{
				$tech_mssp = $fetch_all->tech_mssp_input;
			}

			if($fetch_all->non_tech_business_continuity_input == ''){
				$ntech_continuity_procedure = '';
			}else{
				$ntech_continuity_procedure = $fetch_all->non_tech_business_continuity_input;
			}

			if($fetch_all->non_tech_training_input == ''){
				$ntech_training = '';
			}else{
				$ntech_training = $fetch_all->non_tech_training_input;
			}

			if($fetch_all->non_tech_accredation_input == ''){
				$ntech_regulation = '';
			}else{
				$ntech_regulation = $fetch_all->non_tech_accredation_input;
			}

			if($fetch_all->non_tech_reputation_management_input == ''){
				$ntech_reputation = '';
			}else{
				$ntech_reputation = $fetch_all->non_tech_reputation_management_input;
			}

			if($fetch_all->non_tech_password_policy_input == ''){
				$ntech_pass_policy = '';
			}else{
				$ntech_pass_policy = $fetch_all->non_tech_password_policy_input;
			}

			if($fetch_all->non_tech_devices_input == ''){
				$ntech_devices = '';
			}else{
				$ntech_devices = $fetch_all->non_tech_devices_input;
			}

			if($fetch_all->non_tech_vpn_input == ''){
				$ntech_vpn = '';
			}else{
				$ntech_vpn = $fetch_all->non_tech_vpn_input;
			}

			if($fetch_all->non_tech_consultancy_input == ''){
				$ntech_implementation = '';
			}else{
				$ntech_implementation = $fetch_all->non_tech_consultancy_input;
			}
		}
		//budget breakdown ends


        $date = time();
        $add_budgets = array(
            'user_id' => $user_id,
            'amount_cybersecurity_input'=> $budget_cyber_security, 
            'percentage_annual_budget_input'=> $budget_annual, 
            'budget_cybersecurity_per_year_input'=> $budget_per_year,
            'paid_for_input' => $implode_budget_paid,
            'preferred_budget_breakdown_currency_input'=> $currency,
            'tech_operating_system_input'=> $tech_os,
            'tech_internet_input'=> $tech_internet,
            'tech_antivirus_input'=> $tech_antivirus,
            'tech_firewall_input'=> $tech_firewall, 
            'tech_access_control_input'=> $tech_access_control,
            'tech_protecting_data_input'=> $tech_protect_data,
            'tech_mssp_input'=> $tech_mssp,
            'non_tech_business_continuity_input'=> $ntech_continuity_procedure,
            'non_tech_training_input'=> $ntech_training, 
            'non_tech_accredation_input'=> $ntech_regulation, 
            'non_tech_reputation_management_input'=> $ntech_reputation,
            'non_tech_password_policy_input'=> $ntech_pass_policy,
            'non_tech_devices_input'=> $ntech_devices,
            'non_tech_vpn_input'=> $ntech_vpn,
            'non_tech_consultancy_input'=> $ntech_implementation,
            'date' => $date
        );
        
        $check_row = $this->questionaire_budget_m->check_questioniare_budget($user_id);
        
        if($check_row > 0)
        {
            $update_data = $this->questionaire_budget_m->questioniare_budget_update($add_budgets,$user_id);
            if($update_data)
            {
                if($val == "continue")
                {
                    $this->session->set_flashdata("update", "Successfully updated!");
                    redirect('delegate_questionaire_budget/'.$user_id);
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
                redirect('delegate_questionaire_budget/'.$user_id);
            }
        }
        else{
            $insert_budget_data = $this->questionaire_budget_m->insert_budget_info($add_budgets);
            if($insert_budget_data)
            {
                if($val == "continue")
                {
                    $this->session->set_flashdata("update", "Successfully updated!");
                    redirect('delegate_questionaire_budget/'.$user_id);
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
                redirect('delegate_questionaire_budget/'.$user_id);
            }
        }
    }
}
?>