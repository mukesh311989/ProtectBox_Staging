<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_solution_m extends CI_Model {
	
	public function get_all_categories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by('category_name');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all_currency()
	{
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->order_by('code');
		$this->db->group_by('code');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_supplier_info($supplier_data)
	{
		$this->db->insert('supplier_additional_info', $supplier_data);
		return true;
		//$this->db->query("your query"); 
		//$this->db->query("your query");
	}
	
	public function check_additional_info($user_id){
		  $this->db->select('*');
		  $this->db->from('supplier_additional_info');
		  $this->db->where('user_id', $user_id);
		  $query = $this->db->get();
		  return $query->num_rows();
	}
	
	public function update_supplier_info($supplier_data,$user_id){
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('supplier_additional_info', $supplier_data);
		return true;
	}

	public function add_supplier_services($extra_service_data)
	{
		$this->db->insert('supplier_service', $extra_service_data);
		return true;
		//$this->db->query("your query");
	}

	public function check_supplier_details($user_id)
	{
		  $condition = "user_id =" . "'" . $user_id ."'";
		  $this->db->select('*');
		  $this->db->from('supplier_additional_info');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function get_services_details($user_id){
		  $condition = "user_id =" . "'" . $user_id ."'";
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->result();

	}

	public function get_matching_services_details($user_id)
	{
		  $condition = "added_by =" . "'" . $user_id ."'";
		  $this->db->select('*');
		  $this->db->from('matching_supplier_service');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->result();
	}

	public function fetch_services_id_details($supplier_service_id){
		  $condition = "supplier_service_id =" . "'" . $supplier_service_id ."'";
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();

	}

	public function update_supplier_service($more_service_data)
	{
	  $query = $this->db->update_batch('supplier_service',$more_service_data,'supplier_service_id');
	  return true;
	}

	public function get_check($supplier_name,$service_name,$product_detail)
	{
		$this->db->select('*');
		$this->db->from('supplier_service');
		
		$this->db->where('supplier_name', $supplier_name);
		$this->db->where('service_name', $service_name);
		$this->db->where('product_detail', $product_detail);
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->num_rows();
		//return $count;
	}
	public function get_check_serv_details($supplier_name,$service_name,$product_detail)
	{
		$this->db->select('*');
		$this->db->from('supplier_service');
		
		$this->db->where('supplier_name', $supplier_name);
		$this->db->where('service_name', $service_name);
		$this->db->where('product_detail', $product_detail);
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->row();
		//return $count;
	}

	public function insert_matching($supplier_data)
	{
		$this->db->insert('matching_supplier_service', $supplier_data);
		//return $this->db->last_query();
		return $this->db->insert_id();
	}

public function insert_service($supplier_data)
	{
		$this->db->insert('supplier_service', $supplier_data);
		//return $this->db->last_query();
		return $this->db->insert_id();
	}

	public function get_provider($service_provider)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $service_provider);
		$query = $this->db->get();
		return $query->row();
	}

		public function get_service_data($matching_supplier_service_id){
			$this->db->select('*');
			$this->db->from('matching_supplier_service');
			$this->db->where('matching_supplier_service_id', $matching_supplier_service_id);
			$query = $this->db->get();
			//return $this->db->last_query();
			return $query->row();
			 
	}


	public function insert_match_serv($more_service_data)
	{
		$this->db->insert('supplier_service', $more_service_data);
		//return $this->db->last_query();
		return true;
	}

	public function del_service_it($matching_supplier_service_id)
	{
		$this->db ->where('matching_supplier_service_id', $matching_supplier_service_id);
		$this->db->delete('matching_supplier_service');
		return true;
	}

	public function update_service($service_id,$single_data)
	{
		$this->db->where('supplier_service_id',$service_id);
		$this->db->update('supplier_service',$single_data);
		return true;
	}


	public function dlt_service($supplier_service_id)
	{
		$this->db ->where('supplier_service_id', $supplier_service_id);
		$this->db->delete('supplier_service');
		return true;	
	}



	


}
