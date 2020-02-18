<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_refund_supplier_m extends CI_Model {

	public function fetch_all_serivce($user_id,$status)
	{
		//$this->db->SELECT('*');
		//$this->db->from('supplier_service');
		//$this->db->where($service_records);
		//$this->db->order_by('refund_date');
		//$query = $this->db->get();
		//return $query->result();

		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->join('refund', 'supplier_service.supplier_service_id = refund.service_id'); 
		$this->db->where('supplier_service.user_id',$user_id);
		$this->db->where('refund.refund_status',$status);
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->result();
	}

	public function count_pending_request($records){
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where($records);
		$this->db->order_by('refund_date');
		$query = $this->db->get();
		//return $this->db->last_query();
		//return $query->result();
		return $query->num_rows();
	}
	public function fetch_pending_request($records){
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where($records);
		$this->db->order_by('refund_date');
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->result();
		//return $query->num_rows();
	}	

	public function get_supplier_id($order_id){
		$this->db->SELECT('*');
		$this->db->from('orders');
		$this->db->where('orders_id',$order_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function supp_info($user_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function change_pending_status($records,$refund_id){
		$where  = array('refund_id' => $refund_id);
		$this->db->where($where);
		$query = $this->db->update('refund', $records);
		return true;
	}

	public function refund_details_fetch($refund_id)
	{
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where('refund_id',$refund_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function service_details($service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file View_all_orders_m.php */
/* Location: ./application/models/View_all_orders_m.php */