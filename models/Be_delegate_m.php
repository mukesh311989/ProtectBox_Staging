<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Be_delegate_m extends CI_Model {

	public function be_delegate_fetch($delegate_id){
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->join('user','delicate_user.sme_id = user.user_id');
		$this->db->where('delicate_user.user_id',$delegate_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function question_details($user_id){
		$this->db->select('*');
		$this->db->from('delegate_basics');
		/*$this->db->join('delegate_technical','delegate_technical.user_id = delegate_basics.user_id');
		$this->db->join('delegate_non_technical','delegate_non_technical.user_id = delegate_basics.user_id');
		$this->db->join('delegate_budget','delegate_budget.user_id = delegate_basics.user_id');*/
		$this->db->where('delegate_basics.user_id',$user_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_basic($user_id,$sme_id){
		$where = "`user_id` = '$user_id' AND `sme_id` = '$sme_id' AND (`industry_input` != '' OR `employees_input` != '' OR `location_input` != '' OR `handle_data_input` != '')";
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_tech($user_id,$sme_id){
		$where = "`user_id` = '$user_id' AND `sme_id` = '$sme_id' AND (`os_input` != '' OR `antivirus_input` != '' OR `firewall_input` != '' OR `manage_it_input` != '' OR `internet_input` != '' OR `internet_option_input` != '' OR `wifi_option_input` != '' OR `wpa2_input` != '' OR `browser_input` != '' OR `update_browser_input` != '' OR `email_input` != '' OR `spam_filtering_input` != '' OR `ad_blocking_input` != '' OR `web_hosting_input` != '' OR `web_hosting_option_input` != '' OR `hacking_input` != '' OR `logs_input` != '' OR `software_update_input` != '' OR `data_encrypt_input` != '' OR `system_access_input` != '' OR `directory_service_input` != '' OR `two_factor_authentication_input` != '' OR `premises_input` != '' OR `public_key_infrastructure_input` != '' OR `email_input_score` != '' OR `managed_msp_input` != '')";
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_non_tech($user_id,$sme_id){
		$where = "`user_id` = '$user_id' AND `sme_id` = '$sme_id' AND (`business_continuity_plan_input` != '' OR `business_continuity_procedure_input` != '' OR `regular_backup` != '' OR `training_cybersecurity_input` != '' OR `accreditation_security_standerd_input` != '' OR `adaquate_password_input` != '' OR `cyber_security_information_input` != '' OR `cyber_insurence_input` != '' OR `threat_detection_input` != '' OR `cloud_storage` != '' OR `device_management_input` != '' OR `vpn_home` != '' OR `need_consultant_input` != '')";
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_budget($user_id,$sme_id){
		$where = "`user_id` = '$user_id' AND `sme_id` = '$sme_id' AND (`amount_cybersecurity_input` != '' OR `percentage_annual_budget_input` != '' OR `budget_cybersecurity_per_year_input` != '' OR `other_payment` != '' OR `budget_breakdown` != '')";
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
}

/* End of file Be_delegate_m.php */
/* Location: ./application/models/Be_delegate_m.php */