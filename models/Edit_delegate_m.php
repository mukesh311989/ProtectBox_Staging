<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_delegate_m extends CI_Model {

	public function del_info($del_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->join('user', 'user.user_id = delicate_user.user_id');
		$this->db->where('delicate_user.user_id' , $del_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_status($del_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('user_id' , $del_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function change_status($del_id,$status)
	{
		$this->db->set('status', $status);
		$this->db->where('user_id', $del_id);
		$query = $this->db->update('delicate_user');
		//return $this->db->last_query();
		return true;
	}

	public function delete_delicate_user($del_id)
	{
		$tables = array('delicate_user', 'user', 'delegate_basics', 'delegate_technical', 'delegate_non_technical', 'delegate_budget');
		$this->db->where('user_id', $del_id);
		$query = $this->db->delete($tables);
		return true;
	}

	public function get_basic($del_id,$sme_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_basics');
		$this->db->where('user_id' , $del_id);
		$this->db->where('sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_basic($del_id,$sme_id,$records)
	{
		$this->db->where('user_id', $del_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->update('delegate_basics', $records);
		return true;
	}
	
	public function get_tech($del_id,$sme_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_technical');
		$this->db->where('user_id' , $del_id);
		$this->db->where('sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_tech($del_id,$sme_id,$records)
	{
		$this->db->where('user_id', $del_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->update('delegate_technical', $records);
		return true;
	}

	public function get_non_tech($del_id,$sme_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_non_technical');
		$this->db->where('user_id' , $del_id);
		$this->db->where('sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_non_tech($del_id,$sme_id,$records)
	{
		$this->db->where('user_id', $del_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->update('delegate_non_technical', $records);
		return true;
	}

	public function get_budget($del_id,$sme_id)
	{
		$this->db->select('*');
		$this->db->from('delegate_budget');
		$this->db->where('user_id' , $del_id);
		$this->db->where('sme_id' , $sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_budget($del_id,$sme_id,$records)
	{
		$this->db->where('user_id', $del_id);
		$this->db->where('sme_id', $sme_id);
		$query = $this->db->update('delegate_budget', $records);
		return true;
	}

}

/* End of file Edit_delegate_m.php */
/* Location: ./application/models/Edit_delegate_m.php */