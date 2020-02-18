<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_orders_m extends CI_Model {

	public function all_orders(){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->order_by('upload_date');
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

	public function update_order_status($order_id,$records){
		$where  = array('orders_id' => $order_id);
		$this->db->where($where);
		$query = $this->db->update('orders', $records);
		return true;
	}

	public function get_method($service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_refund($order_id)
	{
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->join('supplier_service', 'supplier_service.supplier_service_id = refund.service_id');
		$this->db->where('refund.order_id',$order_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function payment_info($supplier_id)
	{
		$this->db->SELECT('*');
		$this->db->from('payment_setup');
		$this->db->join('user','payment_setup.user_id = user.user_id');
		$this->db->where('payment_setup.user_id',$supplier_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function currency_sym($currency)
	{
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->where('code',$currency);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file View_all_orders_m.php */
/* Location: ./application/models/View_all_orders_m.php */