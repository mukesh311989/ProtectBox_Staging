<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_m extends CI_Model {

	public function fetch_user($user_id)
	{
		$this->db->where("user_id",$user_id);
		$query = $this->db->get("user");
		return $query->row();
	}
	
	public function update_user($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('user', $records);
		return $query;
	}

	public function check_delegate($delegate_email)
	{
		$this->db->where("email",$delegate_email);
		$query = $this->db->get("user");
		return $query->row();
	}
	
	public function check_del_user_table($delegate_id,$user_id){
		$this->db->select('*');
		$this->db->from('delicate_user');
		$this->db->where('user_id', $delegate_id);
		$this->db->where('sme_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_country(){
		$this->db->select('*');
		$this->db->from('country');
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Profile_m.php */
/* Location: ./application/models/Profile_m.php */