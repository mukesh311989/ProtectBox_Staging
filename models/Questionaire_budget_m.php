<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_budget_m extends CI_Model {
	public function insert_budget_info($add_budgets)
	{
		$this->db->insert('questionnaire_budget', $add_budgets);
		return true;
	}

	public function get_all_currency()
	{
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->order_by('country');
		$this->db->group_by('code');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function check_questioniare_budget($user_id)
	{
		  $this->db->select('*');
		  $this->db->from('questionnaire_budget');
		  $this->db->where('user_id', $user_id);
		  $query = $this->db->get();
		  return $query->row();
	}
	public function questioniare_budget_update($add_budgets,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('questionnaire_budget', $add_budgets);
	  return true;
	}

	
/* FOR PROGRESS BAR Starts*/
	public function progress_tab_four($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_budget');
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

	public function insert_progress_four($progress_four)
	{
		$this->db->insert('progress', $progress_four);
		return true;
	}

	public function update_progress_four($progress_four,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('progress', $progress_four);
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

	public function fetch_delegate_accesstwo_val($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('sme_id', $user_id);
		$this->db->where('percentage_annual_budget_input', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function sav_del_acs($update_array){
		$this->db->query($update_array);
		return true;
		//return $this->db->last_query();
	}

	public function get_questions($sme_id,$user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('user_id', $sme_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_del_acs($user_id,$delegate_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_assign_del($user_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_del_user($main_array,$delegate_id)
	{
		$this->db->set('access', $main_array);
		$this->db->where('user_id', $delegate_id);
		$this->db->update('delicate_user');
		return true;
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

	public function check_question($delegate_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $delegate_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file questionaire_budget_m */
/* Location: ./application/models/questionaire_budget_m */