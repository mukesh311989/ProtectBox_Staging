<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_techdata_m extends CI_Model {

	public function check_records($service_provider){
		$this->db->select('*');
		$this->db->from('access_token');
		$this->db->where('service_provider', $service_provider);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_record($records){
		$this->db->insert('access_token', $records);
		return true;
	}

	public function update_record($service_provider,$records){
		$where  = array('service_provider' => $service_provider);
		$this->db->where($where);
		$query = $this->db->update('access_token', $records);
		return $query;
	}
}

/* End of file Order_techdata_m.php */
/* Location: ./application/models/Order_techdata_m.php */