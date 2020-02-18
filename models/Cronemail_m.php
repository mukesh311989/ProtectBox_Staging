<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cronemail_m extends CI_Model {

	public function prevent_copy($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_user($records)
	{
		$this->db->insert('user', $records);
		return $this->db->insert_id();
	}

	public function prevent_delegate($delegate_email)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('delicate_email', $delegate_email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function check_delegate_main($delegate_email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $delegate_email);
		$query = $this->db->get();
		return $query->row();
	}

	public function add_delegate($delegate_array)
	{
		$this->db->insert('delicate_user', $delegate_array);
		return $this->db->insert_id();
	}

	public function get_admins()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_type', 'admin');
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function check_key($key)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('delicate_key', $key);
		$this->db->where('status', 'inactive');
		$query = $this->db->get();
		return $query->row();
	}

	public function update_delegate_user($up_del_array,$delicate_id){
		$this->db->where('delicate_id', $delicate_id);
		$this->db->update('delicate_user', $up_del_array);
		return true;
	}

	public function check_delegate($delegate_email)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('delicate_email', $delegate_email);
		$query = $this->db->get();
		return $query->row();
	}
	public function checkAllSMBUser($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_type','Small and medium business');
		$query = $this->db->get();
		return $query->row();
	}

	public function smb_progress($id)
	{
		$this->db->select('*');
		$this->db->from('progress');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function getDelegateUser($id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $id);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file Signup_m.php */
/* Location: ./application/models/Signup_m.php */