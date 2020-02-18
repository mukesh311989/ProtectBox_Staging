<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completed_refund_supplier_m extends CI_Model {

	public function fetch_all_serivce($user_id,$status)
	{
		//$this->db->SELECT('*');
		//$this->db->from('supplier_service');
		//$this->db->where($service_records);
		//$this->db->order_by('refund_date');
		//$query = $this->db->get();
		//return $query->result();

		$this->db->select('supplier_service.*,refund.*');
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
	public function supp_info($supplier_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$supplier_id);
		$query = $this->db->get();
		return $query->row();

	}

	public function change_pending_status($refund_id,$refund_status){
		$this->db->set('refund_status', $refund_status);
		$where  = array('refund_id' => $refund_id);
		$this->db->where($where);
		$query = $this->db->update('refund');
		return true;
	}


}

/* End of file View_all_orders_m.php */
/* Location: ./application/models/View_all_orders_m.php */