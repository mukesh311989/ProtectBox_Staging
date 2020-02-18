<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_staff_m extends CI_Model {

	public function fetch_staff_details()
	{
		$this->db->select('*');
		$this->db->from('staff_admin');
		$this->db->join('user', 'user.user_id = staff_admin.staff_admin_id');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file View_all_staff_m.php */
/* Location: ./application/models/View_all_staff_m.php */