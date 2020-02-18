<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_pending_orders_m extends CI_Model {

	public function pending_orders(){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->where('sup_payment_status' , 'Pending');
		$this->db->order_by('upload_date');
		$query = $this->db->get();
		return $query->result();
	}	

	public function amount_details($sup_id)
	{
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->where('supplier_id' , $sup_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function currency_details($sup_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id' , $sup_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_priority($sup_id)
	{
		$this->db->SELECT('*');
		$this->db->from('payment_setup');
		$this->db->where('user_id' , $sup_id);
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file View_pending_orders_m.php */
/* Location: ./application/models/View_pending_orders_m.php */