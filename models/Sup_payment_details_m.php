<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sup_payment_details_m extends CI_Model {

	public function get_order_details($order_id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->join('supplier_service', 'supplier_service.supplier_service_id = supplier_transaction.supplier_service_id');
		$this->db->where('supplier_transaction.order_id', $order_id);
		$query = $this->db->get();
		return $query->result();
	}

	 public function update_trans($update_array,$sl_id){
		$this->db->where('id', $sl_id);
		$this->db->update('supplier_transaction', $update_array);
		return true;
	 }

	 public function get_sup_info($sl_id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->join('user', 'user.user_id = supplier_transaction.seller_id');
		$this->db->where('supplier_transaction.id', $sl_id);
		$query = $this->db->get();
		return $query->row();
	 }

	 	public function get_details($order_id){
		$this->db->select('*');
		$this->db->from('orders');
		//$this->db->join('user', 'user.user_id = supplier_transaction.seller_id');
		$this->db->where('orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();
	 }

	 public function update_order($sl_id,$update_order_array)
	{
		$this->db->where('orders_id', $sl_id);
		$this->db->update('orders', $update_order_array);
		return true;
	}

	public function supplier_details($order_id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->join('payment_setup', 'supplier_transaction.seller_id = payment_setup.user_id');
		$this->db->where('supplier_transaction.order_id', $order_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Sup_payment_details_m.php */
/* Location: ./application/models/Sup_payment_details_m.php */