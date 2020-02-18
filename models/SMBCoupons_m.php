<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMBCoupons_m extends CI_Model {

	public function fetch_all_coupons(){
		  $this->db->select('*');
		  $this->db->from('smb_subscription');
		  $query = $this->db->get();
		  return $query->result();
	}

	public function del_coupon($id){
		$this->db->where('smb_subscription_id', $id);
		$query = $this->db->delete('smb_subscription');
		return true;
	}

	public function add_data_coupn($records){
		$this->db->insert('smb_subscription', $records);
		return $this->db->last_query();
	}
}

/* End of file View_suppliers_m.php */
/* Location: ./application/models/View_suppliers_m.php */