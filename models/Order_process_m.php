<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_process_m extends CI_Model {

	public function data_insert($records)
	{
		$this->db->insert('orders', $records);
		return $this->db->insert_id();
	}

		public function data_insert_transe($records_transe)
	{
		$this->db->insert('supplier_transaction', $records_transe);
		return true;
	}

	public function order_update_after_payment($order_id,$records)
	{
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $records);
		return true;
	}

	public function fetch_td_data_service($order_id){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_sme($sme_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$sme_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_service($service_id){
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_token($service_provider){
		$this->db->select('*');
		$this->db->from('access_token');
		$this->db->where('service_provider',$service_provider);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_techdata($order_id,$order_number)
	{
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $order_number);
		return true;
	}

	public function sme_details($order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('user', 'user.user_id = orders.supplier_id');
		$this->db->where('orders.orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function location_details($order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('supplier_service', 'supplier_service.user_id = orders.supplier_id');
		$this->db->where('orders.orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function product_details($single_product)
	{
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$single_product);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function ixcg_update($order_id,$nick_order_id)
	{
		$data = array(
						'ixcg_order_id' => $nick_order_id
					);
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $data);
		return true;
	}

	public function order_update($order_id,$nick_order_id)
	{
		$data = array(
						'order_status' => 'Success',
						'sup_payment_status' => 'Success'
					);
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $data);
		return true;
	}

	public function cus_details($cus_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$cus_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
	
	public function smb_subscription($records)
	{
		$this->db->insert('smb_subscription', $records);
		return $this->db->insert_id();
	}

	public function smb_stripe_subscription($records)
	{
		$this->db->insert('smb_subscription', $records);
		return $this->db->insert_id();
	}

	/* FOR SENDING INVOICE ATTACHMENTS STARTS*/
	public function fetch_order_info($order_id){
		$condition = array('orders_id'=> $order_id);
		  $this->db->select('*');
		  $this->db->from('orders');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
		  //return $this->db->last_query();
	}

	public function  item_details($all_item)
	{
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $all_item);
		$query = $this->db->get();
		return $query->row();
	}

		public function  get_sme_details($sme_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $sme_id);
		$query = $this->db->get();
		return $query->row();
	}
		public function get_payment_status($supplier_id)
	{
		$this->db->SELECT('*');
		$this->db->from('payment_setup');
		$this->db->where('user_id',$supplier_id);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row();
	}

	public function get_order_id()
	{
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->order_by('orders_id', 'DESC');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	}

	public function get_admin_accountant(){
		$where = "user_type='accountant' or user_type='admin' and status='1'";
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	/* FOR SENDING INVOICE ATTACHMENTS ENDS*/

	public function fetch_currency_code($currency){
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->where('code', $currency);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function data_transaction($order_id)
    {
    	    $this->db->select('*');
    		$this->db->from('supplier_transaction');
    		$this->db->where('order_id', $order_id);
    		$this->db->order_by('id', 'DESC');
    		$query = $this->db->get();
    		return $query->row();
    }
    public function update_transactionStatus($id,$update)
	{
		$this->db->where('id', $id);
		$this->db->update('supplier_transaction', $update);
		return true;
	}
	public function fetch_order_product($id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->where('id',$id);
		$query = $this->db->row();
		return $query->row();
	}
	public function fetch_order_data($id){
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders_id',$id);
		$query = $this->db->row();
		return $query->row();
	}
}

/* End of file Signup_m.php */
/* Location: ./application/models/Signup_m.php */