<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_services_m extends CI_Model {

	public function all_services($limit, $start){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->order_by("upload_date", "desc");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_order_status($supplier_service_id,$records){
		$where  = array('supplier_service_id' => $supplier_service_id);
		$this->db->where($where);
		$query = $this->db->update('supplier_service', $records);
		return $query;
	}

	public function update_local($service_id,$update_array)
	{
		$this->db->trans_start();
		$this->db->where('supplier_service_id', $service_id);
		$this->db->update('local_supplier_service', $update_array);
		$this->db->trans_complete();
		if ($this->db->trans_status() === TRUE)
		{
			$this->db->select('*');
			$this->db->from('local_supplier_service');
			$this->db->where('supplier_service_id', $service_id);
			$query = $this->db->get();
			$new = $query->row();
			$array = json_decode(json_encode($new), true);
			if(!empty($array))
			{
				$stock_code = $array['service_stockcode'];
				$supplier = $array['service_provider'];

				$this->db->select('*');
				$this->db->from('supplier_service');
				$this->db->where('service_stockcode', $stock_code);
				$this->db->where('service_provider', $supplier);
				$stock_code_query = $this->db->get();
				$count = $stock_code_query->num_rows();
				if($count < 1)
				{
					$this->db->insert('supplier_service', $array);
				}else{
					array_shift($array);
					$this->db->where('service_stockcode', $stock_code);
					$this->db->where('service_provider', $supplier);
					$this->db->update('supplier_service', $array);
				}
				return true;
			}
		}
	}
}

/* End of file View_all_services_m.php */
/* Location: ./application/models/View_all_services_m.php */