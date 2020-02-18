<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_import_ixcg_m extends CI_Model {

	public function get_it($description)
	{
		$this->db->select('*');
		$this->db->from('nick_service');
		$this->db->where("product_description" ,$description);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_category($cat){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where("category_name",$cat);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function save_category($data){
		$this->db->insert('category',$data);
		return true;
	}

	public function save_services_api($data){
		$this->db->insert('supplier_service',$data);
		return true;
	}

	public function check_services_api_exist($data){
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where($data);
		$query = $this->db->get();
		//return $query->result();
		return $data;
		//return $this->db->last_query();
	}
	
	public function update_services_api($records){
		$this->db->where($records);
		$query = $this->db->update('user', $records);
		return true;
	}
}

/* End of file View_all_services_m.php */
/* Location: ./application/models/View_all_services_m.php */