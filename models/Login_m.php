<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function __construct() {
      parent::__construct();	
	  $this->load->database('default', TRUE);

	}

	public function login_function($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email' ,$email);
		$this->db->where('password' ,$password);
		$this->db->where('user_type!=' ,'delegate');
		$this->db->where('status' ,'1');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_id($records)
	{
		$condition = "email =" . "'" . $records['email'] . "' AND " . "password =" . "'" . $records['password'] . "' AND " . "Status =" ."'". '1' ."'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_admin($admin_id)
	{
		$this->db->select('*');
		$this->db->from('staff_admin');
		$this->db->where('staff_admin_id', $admin_id);
		return $query->row();
	}
	
	public function smb_bundle($user_id)
	{
		$this->db->select('*');
		$this->db->from('preparing_mysmb_bundle');
		$this->db->where('smb_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function smb_orders($user_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	//FOR SWICTH CONTROLLER

	public function check_user($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */