<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_payment_m extends CI_Model {

	public function get_payment_info($service_id){
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->result();
	} 

	public function all_services($user_id){
		$array = array('supplier_service.user_id' => $user_id, 'payment_setup.payment_type' => 'paypal');
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->join('payment_setup', 'supplier_service.user_id = payment_setup.user_id');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
	} 

	/* from thank_you.php of controller */
	public function insert_order_info($orders_data){
		$this->db->insert('orders', $orders_data);
		return true;
	} 

}

/* End of file Paypal_payment_m.php */
/* Location: ./application/models/Paypal_payment_m.php */