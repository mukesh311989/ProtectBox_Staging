<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_staff_m extends CI_Model {

	public function fetch_staff_details($staff_id)
	{
		$this->db->select('*');
		$this->db->from('staff_admin');
		$this->db->join('user', 'user.user_id = staff_admin.staff_admin_id');
		$this->db->where("staff_admin.staff_admin_id",$staff_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function user_update($records,$staff_id)
	{
		$this->db->set($records);
		$this->db->where('user_id', $staff_id);
		$this->db->update('user');
		return true;
	}

	public function roles_update($roles,$staff_id)
	{
		$this->db->set($roles);
		$this->db->where('staff_admin_id', $staff_id);
		$this->db->update('staff_admin');
		return true;
	}

}

/* End of file Edit_staff_m.php */
/* Location: ./application/models/Edit_staff_m.php */