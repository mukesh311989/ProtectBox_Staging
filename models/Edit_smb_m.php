<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_smb_m extends CI_Model {

	public function fetch_smb_info($user_id){
		$condition = array('user_id'=> $user_id , 'user_type' => 'Small and medium business');
		  $this->db->select('*');
		  $this->db->from('user');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}
	public function update_user($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('user', $records);
		return $query;
	}
	public function fetch_country(){
		$this->db->select('*');
		$this->db->from('country');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Edit_smb_m.php */
/* Location: ./application/models/Edit_smb_m.php */