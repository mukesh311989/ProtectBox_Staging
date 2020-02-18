<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_details_m extends CI_Model {

	public function get_service_info($user_id){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('upload_date', "desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function get_supplier_info($user_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update_order_status($supplier_service_id,$records){
		$where  = array('supplier_service_id' => $supplier_service_id);
		$this->db->where($where);
		$query = $this->db->update('supplier_service', $records);
		return $query;
	}

}

/* End of file Service_details_m.php */
/* Location: ./application/models/Service_details_m.php */