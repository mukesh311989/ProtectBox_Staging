<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_ixcg_service_m extends CI_Model {
	
	public function get_details($service_id)
	{
		$condition = "supplier_service_id =" . "'" . $service_id ."'";
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();

	}

	public function check_category($category)
	{
		$condition = "category_name =" . "'" . $category ."'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function inset_new_category($records)
	{
		$query = $this->db->insert('category', $records);
		return true;
	}

	public function get_all_categories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all_currency()
	{
		$this->db->select('*');
		$this->db->from('currency');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_ixcg_service($more_service_data,$service_id)
	{
		$where  = array('supplier_service_id' => $service_id);
		$this->db->where($where);
		$query = $this->db->update('supplier_service', $more_service_data);
		return $query;
		//$this->db->query("your query");
	}

}

/* End of file View_all_services_m.php */
/* Location: ./application/models/View_all_services_m.php */