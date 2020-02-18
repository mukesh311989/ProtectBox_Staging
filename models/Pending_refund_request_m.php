<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_refund_request_m extends CI_Model {

	public function fetch_pending_request($records){
		$this->db->SELECT('*');
		$this->db->from('refund');
		//$this->db->where($records);
		$this->db->order_by('refund_date');
		$query = $this->db->get();
		return $query->result();
	}	

	public function get_supplier_id($order_id){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->where('orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();

	}
	public function supp_info($supplier_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$supplier_id);
		$query = $this->db->get();
		return $query->row();

	}
	
	public function update_refund($refund_id,$trans_id){
		$this->db->set('transaction_id', $trans_id);
		$this->db->where('refund_id', $refund_id);
		$this->db->update('refund');
		return true;
	}

	public function update_refund_trans_id($transaction_id,$refund_id){
		$this->db->set('transaction_id', $transaction_id);
		$this->db->where('refund_id', $refund_id);
		$this->db->update('refund');
		return true;
	}

	public function smb_details($order_id,$service_id){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('payment_setup', 'orders.sme_id = payment_setup.user_id');
		$this->db->join('supplier_transaction', 'supplier_transaction.supplier_service_id = '.$service_id.'');
		$this->db->where('orders.orders_id', $order_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function change_pending_status($refund_id,$refund_status,$trans_id){
		$data = array('transaction_id'=> $trans_id,'refund_status'=> $refund_status);
		$this->db->where('refund_id', $refund_id);
		$this->db->update('refund', $data);
		return true;
	}

	public function update_sup_trans($order_id,$service_id,$trans_id,$supplier_payment_status){
		$data = array('transaction_id'=> $trans_id,'pay_status'=>$supplier_payment_status);
		$this->db->where('order_id', $order_id);
		$this->db->where('supplier_service_id', $service_id);
		$this->db->update('supplier_transaction', $data);
		return true;
	}

	public function get_service_details($refund_id)
	{
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where('refund_id',$refund_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_supplier_details($service_id)
	{
		$this->db->select('supplier_service.*,user.*');
		$this->db->from('supplier_service');
		$this->db->join('user', 'supplier_service.user_id = user.user_id', 'right outer'); 
		$this->db->where('supplier_service.supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();

	}

	public function update_sup_pay_stat($order_id,$new_sup_pay_status)
	{
		$data = array('sup_payment_status'=> $new_sup_pay_status);
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $data);
		return true;
	}

	public function get_service($service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function payment_info($smb_id)
	{
		$this->db->SELECT('*');
		$this->db->from('payment_setup');
		$this->db->join('user','payment_setup.user_id = user.user_id');
		$this->db->where('payment_setup.user_id',$smb_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function supplier_service_payment_info($order_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_transaction');
		$this->db->join('supplier_service','supplier_service.supplier_service_id = supplier_transaction.supplier_service_id');
		$this->db->where('supplier_transaction.order_id',$order_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_transaction_id($order_id,$service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_transaction');
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function get_admin_accountant(){
		$where = "user_type='accountant' or user_type='admin' and status='1'";
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file View_all_orders_m.php */
/* Location: ./application/models/View_all_orders_m.php */