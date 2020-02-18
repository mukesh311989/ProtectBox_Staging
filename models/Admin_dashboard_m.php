<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard_m extends CI_Model {

	public function total_supplier_info_dash(){
		//$this->db->SELECT('user_id');
		$this->db->from('user');
		$this->db->where('user_type', 'Supplier');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function total_supplier_info(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Supplier');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_new_suppliers(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Supplier');
		$this->db->order_by('registration_date', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function active_supplier_info_dash(){
		//$this->db->SELECT('user_id');
		$this->db->from('user');
		$this->db->where('user_type', 'Supplier');
		$this->db->where('status', '1');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function active_supplier_info(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Supplier');
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function total_customer_info_dash(){
		//$this->db->SELECT('user_id');
		$this->db->from('user');
		$this->db->where('user_type', 'Small and medium business');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function total_customer_info(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Small and medium business');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_new_smes(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Small and medium business');
		$this->db->order_by('registration_date', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function active_customer_info_dash(){
		//$this->db->SELECT('user_id');
		$this->db->from('user');
		$this->db->where('user_type', 'Small and medium business');
		$this->db->where('status', '1');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function active_customer_info(){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_type', 'Small and medium business');
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function total_services(){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$query = $this->db->get();
		return $query->result();
	}

	public function total_services_admin_dash(){
		//$this->db->SELECT('supplier_service_id');
		$this->db->from('supplier_service');
		$query = $this->db->count_all_results();
		return $query;
	}
	
	public function total_active_services(){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function total_active_services_admin_dash(){
		//$this->db->SELECT('supplier_service_id');
		$this->db->from('supplier_service');
		$this->db->where('status', '1');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function all_new_services(){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->order_by('upload_date', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function total_orders_dash(){
		//$this->db->SELECT('orders_id');
		$this->db->from('orders');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function total_orders(){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function total_active_orders_dash(){
		//$this->db->SELECT('orders_id');
		$this->db->from('orders');
		$this->db->where('status', '1');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function total_active_orders(){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function all_new_orders(){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->order_by('upload_date', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_sme_name($sme_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$sme_id);
		$query = $this->db->get();
		return $query->row();

	}

	public function get_method($supplier_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id',$supplier_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_all_scrape_data($service_provider)
	{
		$this->db->SELECT('*');
		$this->db->from('td_scrape');
		$this->db->where('service_provider',$service_provider);
		$query = $this->db->count_all_results();
		return $query;
	}

	public function get_all_unscrape_data($service_provider)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('service_provider',$service_provider);
		$this->db->where('openrange !=','scraped');
		$this->db->or_where('openrange !=','scraped');
		$query = $this->db->count_all_results();
		return $query;
	}
	
	public function get_records(){
     		$this->db->SELECT('*');
     		$this->db->from('td_pull_records');
     			$query = $this->db->get();
		return $query->row();
  
     	}
}

/* End of file Admin_dashboard_m.php */
/* Location: ./application/models/Admin_dashboard_m.php */