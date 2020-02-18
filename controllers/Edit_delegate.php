<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_delegate extends CI_Controller {

	function __construct(){
        parent::__construct();
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
		$this->load->model('edit_delegate_m');
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		$del_id = $this->uri->segment(2);
		$data["get_del_info"] = $this->edit_delegate_m->del_info($del_id);
		$data["get_basic"] = $this->edit_delegate_m->get_basic($del_id,$sme_id);
		$data["get_tech"] = $this->edit_delegate_m->get_tech($del_id,$sme_id);
		$data["get_non_tech"] = $this->edit_delegate_m->get_non_tech($del_id,$sme_id);
		$data["get_budget"] = $this->edit_delegate_m->get_budget($del_id,$sme_id);
		$this->load->view('edit_delegate',$data);
		
	}

	public function change_status()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		$check_status = $this->edit_delegate_m->check_status($del_id);
		
		if($check_status->status =='active'){
			$status = 'inactive';
		}else if($check_status->status == 'inactive'){
			$status = 'active';
		}
		
		$change_status = $this->edit_delegate_m->change_status($del_id,$status);
		if($change_status)
		{
			$this->session->set_flashdata("success_status", "You have changed the status of this delegate user, thank you.");
            redirect('edit_delegate/'.$del_id);
		}
	}

	public function delete_del()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		
		$delete_delicate_user = $this->edit_delegate_m->delete_delicate_user($del_id);
		if($delete_delicate_user)
		{
			$this->session->set_flashdata("del_delete", "You have deleted this delegate user, thank you.");
            redirect('manage_delegates');
		}
	}

	public function remove_basic()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		if($this->input->post("get_basic") == 'industry_input')
		{
			$records = array('industry_input' => "");
		}
		else if($this->input->post("get_basic") == 'employees_input')
		{
			$records = array('employees_input' => "");
		}
		else if($this->input->post("get_basic") == 'location_input')
		{
			$records = array('location_input' => "");
		}
		else if($this->input->post("get_basic") == 'handle_data_input')
		{
			$records = array('handle_data_input' => "");
		}

		$update_basic = $this->edit_delegate_m->update_basic($del_id,$sme_id,$records);
		if($update_basic)
		{
			$this->session->set_flashdata("success_basic", "Your have removed this question for this delegate user, thank you.");
            redirect('edit_delegate/'.$del_id);
		}
	}

	public function remove_tech()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		if($this->input->post("get_tech") == 'os_input')
		{
			$records = array('os_input' => "");
		}
		else if($this->input->post("get_tech") == 'antivirus_input')
		{
			$records = array('antivirus_input' => "");
		}
		else if($this->input->post("get_tech") == 'firewall_input')
		{
			$records = array('firewall_input' => "");
		}
		else if($this->input->post("get_tech") == 'manage_it_input')
		{
			$records = array('manage_it_input' => "");
		}
		else if($this->input->post("get_tech") == 'internet_input')
		{
			$records = array('internet_input' => "");
		}
		else if($this->input->post("get_tech") == 'internet_option_input')
		{
			$records = array('internet_option_input' => "");
		}
		else if($this->input->post("get_tech") == 'hacking_input')
		{
			$records = array('hacking_input' => "");
		}
		else if($this->input->post("get_tech") == 'system_access_input')
		{
			$records = array('system_access_input' => "");
		}
		else if($this->input->post("get_tech") == 'directory_service_input')
		{
			$records = array('directory_service_input' => "");
		}
		else if($this->input->post("get_tech") == 'two_factor_authentication_input')
		{
			$records = array('two_factor_authentication_input' => "");
		}
		else if($this->input->post("get_tech") == 'premises_input')
		{
			$records = array('premises_input' => "");
		}
		else if($this->input->post("get_tech") == 'public_key_infrastructure_input')
		{
			$records = array('public_key_infrastructure_input' => "");
		}
		else if($this->input->post("get_tech") == 'directory_serviemail_input_scorece_input')
		{
			$records = array('email_input_score' => "");
		}
		else if($this->input->post("get_tech") == 'managed_msp_input')
		{
			$records = array('managed_msp_input' => "");
		}

		$update_tech = $this->edit_delegate_m->update_tech($del_id,$sme_id,$records);
		if($update_tech)
		{
			$this->session->set_flashdata("success_basic", "Your have removed this question for this delegate user, thank you.");
            redirect('edit_delegate/'.$del_id);
		}
	}

	public function remove_non_tech()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		if($this->input->post("get_non_tech") == 'business_continuity_plan_input')
		{
			$records = array('business_continuity_plan_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'regular_backup')
		{
			$records = array('regular_backup' => "");
		}
		else if($this->input->post("get_non_tech") == 'training_cybersecurity_input')
		{
			$records = array('training_cybersecurity_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'accreditation_security_standerd_input')
		{
			$records = array('accreditation_security_standerd_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'adaquate_password_input')
		{
			$records = array('adaquate_password_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'cyber_security_information_input')
		{
			$records = array('cyber_security_information_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'cyber_insurence_input')
		{
			$records = array('cyber_insurence_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'threat_detection_input')
		{
			$records = array('threat_detection_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'cloud_storage')
		{
			$records = array('cloud_storage' => "");
		}
		else if($this->input->post("get_non_tech") == 'device_management_input')
		{
			$records = array('device_management_input' => "");
		}
		else if($this->input->post("get_non_tech") == 'vpn_home')
		{
			$records = array('vpn_home' => "");
		}
		else if($this->input->post("get_non_tech") == 'need_consultant_input')
		{
			$records = array('need_consultant_input' => "");
		}
		

		$update_non_tech = $this->edit_delegate_m->update_non_tech($del_id,$sme_id,$records);
		if($update_non_tech)
		{
			$this->session->set_flashdata("success_basic", "Your have removed this question for this delegate user, thank you.");
            redirect('edit_delegate/'.$del_id);
		}
	}

	public function remove_budget()
	{
		$this->load->model('edit_delegate_m');
		$del_id = $this->uri->segment(3);
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		if($this->input->post("get_budget") == 'amount_cybersecurity_input')
		{
			$records = array('amount_cybersecurity_input' => "");
		}
		else if($this->input->post("get_budget") == 'percentage_annual_budget_input')
		{
			$records = array('percentage_annual_budget_input' => "");
		}
		else if($this->input->post("get_budget") == 'budget_cybersecurity_per_year_input')
		{
			$records = array('budget_cybersecurity_per_year_input' => "");
		}
		else if($this->input->post("get_budget") == 'other_payment')
		{
			$records = array('other_payment' => "");
		}
		else if($this->input->post("get_budget") == 'budget_breakdown')
		{
			$records = array('budget_breakdown' => "");
		}

		$update_budget = $this->edit_delegate_m->update_budget($del_id,$sme_id,$records);
		if($update_budget)
		{
			$this->session->set_flashdata("success_basic", "Your have removed this question for this delegate user, thank you.");
            redirect('edit_delegate/'.$del_id);
		}
	}

}

/* End of file Edit_delegate.php */
/* Location: ./application/controllers/Edit_delegate.php */