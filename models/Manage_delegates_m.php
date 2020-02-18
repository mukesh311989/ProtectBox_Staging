<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_delegates_m extends CI_Model {

	public function fetch_delegate($sme_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->join('user', 'user.user_id = delicate_user.user_id');
		$this->db->where('delicate_user.sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_delegate_new($sme_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_user($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function status_update($status,$del_id,$sme_id)
	{
		$this->db->set('status', $status);
		$this->db->where('user_id', $del_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->update('delicate_user');
		//return $this->db->last_query();
		return true;
	}

	public function get_access($del_mail,$sme_id)
	{
		$this->db->select('status');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('delicate_email', $del_mail);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_reminder($delegate_id,$date)
	{
		$this->db->set('last_reminder', $date);
		$this->db->where('user_id', $delegate_id);
		$query = $this->db->update('delicate_user');
		return true;
	}

	public function get_basic($user_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_tech($user_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function get_nontech($user_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_budget($user_id,$sme_id){
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file manage_delegates_m.php */
/* Location: ./application/models/manage_delegates_m.php */