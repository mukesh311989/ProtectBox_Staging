<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_tech_info_m extends CI_Model {

	public function fetch_technical($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function row_check($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function data_update($records,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('questionnaire_technical', $records);
		return true;
	}
	public function data_insert($records)
	{
		$this->db->insert('questionnaire_technical', $records);
		return true;
		//return $this->db->last_query();
	}

	public function score_row($user_id)
	{
		$this->db->select('*');
		$this->db->from('risk_score');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function update_gv($gv_records,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('risk_score', $gv_records);
		return true;
	}

	public function insert_gv($gv_records)
	{
		$this->db->insert('risk_score', $gv_records);
		return true;
		//return $this->db->last_query();
	}

	public function save_delicate($del_records)
	{
		$this->db->insert('delicate_user', $del_records);
		return true;
	}

	public function get_sme($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function progress_tab_two($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_technical');
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
	
	public function update_del($user_id,$delegate_email,$update_del)
	{
		$this->db->where('sme_id', $user_id);
		$this->db->where('delicate_email', $delegate_email);
		$this->db->update('delicate_user', $update_del);
		return true;
	}
/* questioniare non tech delegate starts*/

	public function fetch_delegate_access_val($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_delegate_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
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
		$this->db->from('delegate_technical');
		$this->db->where('user_id', $sme_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_del_acs($user_id,$delegate_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
/* questioniare non tech delegate ends*/

	public function get_assign_del($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		//$this->db->where('user_id', $delegate_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function next_info($del_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
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
	
	public function check_question($delegate_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_4_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('os_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_5_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('antivirus_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_6_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('firewall_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_7_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('manage_it_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_8a_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('internet_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_8b_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('internet_option_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_9a_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('hacking_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_9e_res($user_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('system_access_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Questionaire_tech_info_m.php */
/* Location: ./application/models/Questionaire_tech_info_m.php */