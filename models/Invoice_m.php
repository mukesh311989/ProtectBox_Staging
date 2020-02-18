<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_m extends CI_Model {

	public function fetch_order_info($order_id){
		$condition = array('orders_id'=> $order_id);
		  $this->db->select('*');
		  $this->db->from('orders');
		  $this->db->where($condition);
		  $query = $this->db->get();
		  return $query->row();
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
	public function fetch_currency_code($currency){
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->where('code', $currency);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file Edit_smb_m.php */
/* Location: ./application/models/Edit_smb_m.php */