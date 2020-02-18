<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_supplier_m extends CI_Model {

	public function fetch_supplier_info($user_id){
		$condition = array('user_id'=> $user_id , 'user_type' => 'Supplier');
		  $this->db->select('*');
		  $this->db->from('user');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}
	public function update_supplier($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('user', $records);
		return $query;
	}

}

/* End of file Edit_supplier_m.php */
/* Location: ./application/models/Edit_supplier_m.php */