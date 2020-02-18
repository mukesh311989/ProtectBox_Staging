<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupons_m extends CI_Model {

	public function fetch_all_coupons(){
		  $this->db->select('*');
		  $this->db->from('coupons');
		  $query = $this->db->get();
		  return $query->result();
	}

	public function del_coupon($id){
		$this->db->where('coupon_id', $id);
		$query = $this->db->delete('coupons');
		return true;
	}

	public function add_data_coupn($records){
		$this->db->insert('coupons', $records);
		return $this->db->last_query();
	}
}

/* End of file View_suppliers_m.php */
/* Location: ./application/models/View_suppliers_m.php */