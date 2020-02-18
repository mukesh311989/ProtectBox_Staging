<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_m extends CI_Model {

	public function get_sme_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_basic($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_basics');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function row_check($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_basics');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function data_update($records,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('questionnaire_basics', $records);
		return true;
	}
	public function data_insert($records)
	{
		$this->db->insert('questionnaire_basics', $records);
		return true;
		//return $this->db->last_query();
	}

	public function tech_row($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function tech_non_tech($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_non_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function tech_budget($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_budget');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function user_update($method,$user_id)
	{
		$this->db->set('method', $method);
		$this->db->where('user_id', $user_id);
		$query = $this->db->update('user');;
		return true;
	}
	
	public function progress_tab_one($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_basics');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function progress_check($user_id){
		$this->db->select('*');
		$this->db->from('progress');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function progress_add_tabone($records){
		$this->db->insert('progress', $records);
		return true;
	}

	public function progress_update_tabone($records,$user_id){
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('progress', $records);
		return true;
	}

	public function view_prog_data($user_id){
		$this->db->select('*');
		$this->db->from('progress');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_delegate($user_id,$delegate_email,$access)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $user_id);
		$this->db->where('delicate_email', $delegate_email);
		$this->db->where('FIND_IN_SET("'.$access.'", access) ');
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function check_access($user_id,$delegate_email)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $user_id);
		$this->db->where('delicate_email', $delegate_email);
		$query = $this->db->get();
		return $query->row();
	}

	public function save_delicate($del_records)
	{
		$this->db->insert('delicate_user', $del_records);
		return $this->db->insert_id();
	}

	public function get_sme($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_del($user_id,$delegate_email,$update_del)
	{
		$this->db->where('sme_id', $user_id);
		$this->db->where('delicate_email', $delegate_email);
		$this->db->update('delicate_user', $update_del);
		return true;
	}
	
	public function fetch_delegate_access_val($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_delegate_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function sav_del_acs($update_array){
		$this->db->query($update_array);
		return true;
		//return $this->db->last_query();
	}

	/*public function insert_del_access($insert_array)
	{
		$this->db->insert('delegate_basics', $insert_array);
		$this->db->insert('delegate_technical', $insert_array);
		$this->db->insert('delegate_non_technical', $insert_array);
		$this->db->insert('delegate_budget', $insert_array);
		return true;
	}*/

	public function get_questions($sme_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('user_id', $sme_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_del_acs($user_id,$delegate_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_assign_del($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		//$this->db->where('user_id', $delegate_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function next_info($del_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('user_id', $del_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_del_user($user_id,$delegate_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $user_id);
		$this->db->where('user_id', $delegate_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_del_user($main_array,$delegate_id)
	{
		$this->db->set('access', $main_array);
		$this->db->where('user_id', $delegate_id);
		$this->db->update('delicate_user');
		return true;
	}

		public function get_product_details_service($service_product_antivirus_name)
	{
		$this->db->select('service_name');
		$this->db->from('supplier_service');
		$this->db->where('product_category', $service_product_antivirus_name);
		
		$query = $this->db->get();
		return $query->result();
	}

		public function get_product_details_firewall($service_product_firewall_name)
	{
		$this->db->select('service_name');
		$this->db->from('supplier_service');
		$this->db->where('product_category', $service_product_firewall_name);
		$query = $this->db->get();
		return $query->result();
	}
	
		public function get_product_details_business_continuity($service_business_continuity_name)
	{
		$this->db->select('service_name');
		$this->db->from('supplier_service');
		$this->db->where('product_category', $service_business_continuity_name);
		$query = $this->db->get();
		return $query->result();
	}

		public function get_product_details_training($service_training_name)
	{
		$this->db->select('service_name');
		$this->db->from('supplier_service');
		$this->db->where('product_category', $service_training_name);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function check_question($delegate_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
	
	public function check_1a_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$this->db->where('industry_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_1b_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$this->db->where('employees_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_2a_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$this->db->where('location_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_3_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $user_id);
		$this->db->where('handle_data_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_country($country)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('code',$country);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_currency($country)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('code',$country);
		$query = $this->db->get();
		return $query->row();
	
	}

	public function get_it_country($country_full)
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('name',$country_full);
		$query = $this->db->get();
		return $query->row();
	
	}
	
}


/* End of file Questionaire_m.php */
/* Location: ./application/models/Questionaire_m.php */