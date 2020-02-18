<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_process_service_m extends CI_Model {

	/* Dynamic Algorithm Code Starts*/
	public function fetch_gv_score(){	
		$this->db->select('*');
		$this->db->from('gv_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_cpn($cpn_code){
		$this->db->select('*');
		$this->db->from('coupons');
		$this->db->where('coupon_code',$cpn_code);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_c_risk_score(){
		$this->db->select('*');
		$this->db->from('c_risk_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_tech_max(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','tech');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_non_tech_max(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','non_tech');
		$query = $this->db->get();
		return $query->result();
	}
	/* Dynamic Algorithm Code Ends*/

	public function service_data_fetch($td_part){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('td_part', $td_part);
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->row();
	}

	public function currency_code($currency_code){
		  $this->db->select('*');
		  $this->db->from('currency');
		  $this->db->where('code', $currency_code);
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->row();
	}

	public function fetch_results($service_id,$currency){
		  
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('supplier_service_id', $service_id);
		  $this->db->where('currency',$currency);
		  $this->db->group_by("product_category");
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->result();
	}
/* this is index*/	
	public function fetch_results_category($user_id,$protection_level){
		  $array = array('user_id'=> $user_id , 'protection_level' => $protection_level);
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($array);
		  $this->db->group_by("service_name");
		  $query = $this->db->get();
		  return $query->result();
	}

	public function fetch_results_services($service_name,$user_id){
		  $array = array('service_name' => $service_name, 'user_id' => $user_id);
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($array);
		  $this->db->order_by('price_detail');
		  $query = $this->db->get();
		  return $query->result();
	}

	public function fetch_total_amount($user_id){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('user_id', $user_id);
		  $query = $this->db->get();
		  return $query->result();
	}
	

	public function sort_results($preferred_supplier,$preferred_location,$preferred_payment){
		  $query = $this->db->query('select * from supplier_service where user_id in ("'.$preferred_supplier.'")');
		  return $query->result();
	}

	public function fetch_suppliers(){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->join('user', 'supplier_service.user_id = user.user_id');
		  $this->db->group_by("supplier_service.user_id");
		  $query = $this->db->get();
		  return $query->result();
	}

	public function fetch_location(){
		  $this->db->select('location');
		  $this->db->from('supplier_service');
		  $this->db->where('location <','Please select');
		  $query = $this->db->get();
		  return $query->result();
	}

	public function save_order($data){
		
		$this->db->insert('orders', $data);
		 return true;
	}

	public function fetch_employees($user_id){
		  $this->db->select('*');
		  $this->db->from('questionnaire_basics');
		  $this->db->where('user_id',$user_id);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function user_info($user_id)
	{
		 $this->db->select('*');
		  $this->db->from('user');
		  $this->db->where('user_id',$user_id);
		  $query = $this->db->get();
		  return $query->row();
	}
	
}

/* End of file Payment_process_m.php */
/* Location: ./application/models/Payment_process_m.php */