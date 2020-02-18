<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delicate_signup_m extends CI_Model {

	public function delicate_check($email_id,$delicate_key)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('delicate_email', $email_id);
		$this->db->where('delicate_key', $delicate_key);
		$this->db->where('status', 'inactive');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function user_add($records)
	{
		$this->db->insert('user', $records);
		return $this->db->insert_id();
	}

	public function delicate_update($email_id,$delicate_key,$add_user)
	{
		$records  = array('user_id' => $add_user , 'status' => 'active');
		$this->db->where('delicate_email', $email_id);
		$this->db->where('delicate_key', $delicate_key);
		$query = $this->db->update('delicate_user', $records);
		return true;
	}

	public function sme_info($add_user)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('user_id', $add_user);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_all($all_array)
	{
		$this->db->insert('delegate_basics', $all_array);
		$this->db->insert('delegate_technical', $all_array);
		$this->db->insert('delegate_non_technical', $all_array);
		$this->db->insert('delegate_budget', $all_array);
		return true;
	}

}

/* End of file Delicate_signup_m.php */
/* Location: ./application/models/Delicate_signup_m.php */