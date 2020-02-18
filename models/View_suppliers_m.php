<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_suppliers_m extends CI_Model {

	public function fetch_all_suppliers(){
		  $this->db->select('*');
		  $this->db->from('user');
		  $this->db->where('user_type', 'Supplier');
		  $query = $this->db->get();
		  return $query->result();
	}

	public function update_user_status($user_id,$records){
		$where  = array('user_id' => $user_id, 'user_type'=> 'Supplier');
		$this->db->where($where);
		$query = $this->db->update('user', $records);
		return $query;
	}

	public function update_supplier_status($user_id,$records){
		$where  = array('user_id' => $user_id,);
		$this->db->where($where);
		$query = $this->db->update('supplier_additional_info', $records);
		return $query;
	}

}

/* End of file View_suppliers_m.php */
/* Location: ./application/models/View_suppliers_m.php */