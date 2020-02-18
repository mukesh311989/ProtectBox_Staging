<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_non_tech_m extends CI_Model {

	public function insert_non_tech_info($add_non_tech)
	{
		$this->db->insert('questionnaire_non_technical', $add_non_tech);
		return true;
	}
	public function check_questioniare_non_tech($user_id)
	{
		  $condition = "user_id =" . "'" . $user_id ."'";
		  $this->db->select('*');
		  $this->db->from('questionnaire_non_technical');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function check_tech($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_non_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function questioniare_non_tech_update($add_non_tech,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('questionnaire_non_technical', $add_non_tech);
	  return true;
	  //return $this->db->last_query();
	}
/* FOR PROGRESS BAR Starts*/
	public function progress_tab_three($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_non_technical');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function check_row_progress($user_id)
	{
		$this->db->select('*');
		$this->db->from('progress');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_progress_three($progress_three)
	{
		$this->db->insert('progress', $progress_three);
		return true;
	}

	public function update_progress_three($progress_three,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('progress', $progress_three);
	  return true;
	}

	public function get_progress_data($user_id)
	{
		$this->db->select('*');
		$this->db->from('progress');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
/* FOR PROGRESS BAR Ends*/

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
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function sav_del_acs($update_array){
		$this->db->query($update_array);
		return true;
		
	}
		public function get_questions($sme_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('user_id', $sme_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_del_acs($user_id,$delegate_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_delegate_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $user_id);
		$this->db->where('status', 'active');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_assign_del($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		//$this->db->where('user_id', $delegate_id);
		$query = $this->db->get();
		return $query->result();
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
		$this->db->from('delegate_non_technical');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function next_info($del_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('sme_id', $user_id);
		$this->db->where('user_id', $del_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function check_12a_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('business_continuity_plan_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_13_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('training_cybersecurity_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_14_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('accreditation_security_standerd_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_15_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('adaquate_password_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_16a_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('cyber_security_information_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_16b_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('cyber_insurence_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_16c_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('threat_detection_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_17_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('device_management_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_19_res($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $user_id);
		$this->db->where('need_consultant_input !=', '');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Questionaire_non_tech_m.php */
/* Location: ./application/models/Questionaire_non_tech_m.php */