<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpass_m extends CI_Model {

	public function fetch_user($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_code($email,$encrypted_key)
	{
		$this->db->set('security_code', $encrypted_key);
		$this->db->where('email', $email);
		$this->db->update('user');
		return true;
	}

}

/* End of file Forgetpass_m.php */
/* Location: ./application/models/Forgetpass_m.php */