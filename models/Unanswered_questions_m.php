<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unanswered_questions_m extends CI_Model { 

	public function fetch_basics($smb_id)
	{
		$this->db->Select('*');
		$this->db->from('questionnaire_basics');
		$this->db->where('user_id',$smb_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_tech($smb_id)
	{
		$this->db->Select('*');
		$this->db->from('questionnaire_technical');
		$this->db->where('user_id',$smb_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_non_tech($smb_id)
	{
		$this->db->Select('*');
		$this->db->from('questionnaire_non_technical');
		$this->db->where('user_id',$smb_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_budget($smb_id)
	{
		$this->db->Select('*');
		$this->db->from('questionnaire_budget');
		$this->db->where('user_id',$smb_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	// FETCH DELEGATE REQUEST DATA STARTS
	public function fetch_delegate_details($smb_id,$column_field)
	{
		$this->db->Select('*');
		if($column_field == 'industry_input' || $column_field == 'employees_input' || $column_field == 'location_input' || $column_field == 'handle_data_input'){
			$this->db->from('delegate_basics');
			$this->db->where($column_field,'1');
			$this->db->where('sme_id',$smb_id);
		}
		if($column_field == 'os_input' || $column_field == 'antivirus_input' || $column_field == 'firewall_input' || $column_field == 'manage_it_input' || $column_field == 'internet_input' || $column_field == 'hacking_input' || $column_field == 'system_access_input'){
			$this->db->from('delegate_technical');
			$this->db->where($column_field,'1');
			$this->db->where('sme_id',$smb_id);
		}
		if($column_field == 'business_continuity_plan_input' || $column_field == 'training_cybersecurity_input' || $column_field == 'accreditation_security_standerd_input' || $column_field == 'adaquate_password_input' || $column_field == 'cyber_security_information_input' || $column_field == 'cyber_insurence_input' || $column_field == 'threat_detection_input' || $column_field == 'device_management_input' || $column_field == 'need_consultant_input'){
			$this->db->from('delegate_non_technical');
			$this->db->where($column_field,'1');
			$this->db->where('sme_id',$smb_id);
		}
		if($column_field == 'amount_cybersecurity_input' || $column_field == 'percentage_annual_budget_input' || $column_field == 'budget_cybersecurity_per_year_input'){
			$this->db->from('delegate_budget');
			$this->db->where($column_field,'1');
			$this->db->where('sme_id',$smb_id);
		}
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}
	// FETCH DELEGATE REQUEST DATA ENDS
}

/* End of file Result_modal_m.php */
/* Location: ./application/models/Result_modal_m.php */