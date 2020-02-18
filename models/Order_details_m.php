<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_details_m extends CI_Model { 

	
    public function get_order_details($order_id)
    {
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders_id', $order_id);
		$this->db->order_by("upload_date", "desc");
		$query = $this->db->get();
		return $query->row();
    }

	 public function fetch_transac_id($order_id,$service_id)
    {
        $this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->where('order_id', $order_id);
		$this->db->where('supplier_service_id', $service_id);
		$query = $this->db->get();
		return $query->row();
    }

	public function supplier_details($order_id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->join('payment_setup', 'supplier_transaction.seller_id = payment_setup.user_id');
		$this->db->where('supplier_transaction.order_id', $order_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_trans($update_array,$sl_id){
		$this->db->where('id', $sl_id);
		$this->db->update('supplier_transaction', $update_array);
		return true;
	 }

	public function check_refund($order_id, $service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where('order_id',$order_id);
		$this->db->where('service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function check_order_stat($order_id, $service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_transaction');
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update_sup_trans($update_array,$order_id, $service_id)
	{
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->update('supplier_transaction', $update_array);
		return true;
	}

	public function update_order($order_id,$update_order_array)
	{
		$this->db->where('orders_id',$order_id);
		$query = $this->db->update('orders', $update_order_array);
		return true;
	}
	
	public function get_user($user_id)
	{
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_service_name($service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file Order_details_m.php */
/* Location: ./application/models/Order_details_m.php */