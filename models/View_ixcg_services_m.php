<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_ixcg_services_m extends CI_Model {

	public function fetch_ixcg_services(){
	$where_condition = array('user_id' => '52', 'service_provider'=> 'ixcg');
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where($where_condition);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_service_status($service_id,$records){
		$where  = array('supplier_service_id' => $service_id,);
		$this->db->where($where);
		$query = $this->db->update('supplier_service', $records);
		return $query;
	}
}

/* End of file View_ixcg_services_m.php */
/* Location: ./application/models/View_ixcg_services_m.php */