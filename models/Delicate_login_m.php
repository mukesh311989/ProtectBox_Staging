<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delicate_login_m extends CI_Model {

	public function user_check($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email' ,$email);
		$this->db->where('password' ,$password);
		//$this->db->where('user_type' ,'delegate');
		$this->db->where('status' ,'1');
		$query = $this->db->get();
		return $query->row();
	}

	public function delicate_check($email)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('delicate_email' ,$email);
		$this->db->where('status' ,'active');
		$query = $this->db->get();
		return $query->row();
	}

	//for delegate delegate pages

	public function check_del($del_id,$sme_id)
	{
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('sme_id', $sme_id);
		$this->db->where('user_id', $del_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	//for delegate header

	public function get_del_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id' ,$user_id);
		$this->db->where('user_type !=', 'delegate');
		$this->db->where('user_type !=', 'admin');
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

}

/* End of file Delicate_login_m.php */
/* Location: ./application/models/Delicate_login_m.php */