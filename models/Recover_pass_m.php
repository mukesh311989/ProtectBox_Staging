<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recover_pass_m extends CI_Model {

	public function key_check($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_user($email,$records)
	{
		$this->db->where('email', $email);
		$this->db->update('user', $records);
		return true;
	}

}

/* End of file Recover_pass_m.php */
/* Location: ./application/models/Recover_pass_m.php */