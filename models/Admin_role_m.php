<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_role_m extends CI_Model {

	public function fetch_admin($admin_id)
	{
		$this->db->select('*');
		$this->db->from('staff_admin');
		$this->db->where('staff_admin_id', $admin_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Admin_role_m.php */
/* Location: ./application/models/Admin_role_m.php */