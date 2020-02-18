<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_staff_admin_m extends CI_Model {

	public function check_user($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function add_user($records)
	{
		$this->db->insert('user', $records);
		return $this->db->insert_id();
	}
	public function add_staff_role($roles)
	{
		$this->db->insert('staff_admin', $roles);
		return true;
	}

}

/* End of file Add_staff_admin_m.php */
/* Location: ./application/models/Add_staff_admin_m.php */