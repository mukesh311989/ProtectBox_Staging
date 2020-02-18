<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processing_refund_request_m extends CI_Model {

	public function fetch_progress_request($status,$another_status){
		
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where('refund_status',$status);
		$this->db->or_where('refund_status',$another_status);
		$this->db->order_by('refund_date');
		
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->result();
	}	
	
	public function get_smb_info($refund_id){
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->join('user','user.user_id = refund.smb_id');
		$this->db->where('refund.refund_id',$refund_id);
		$query = $this->db->get();
		return $query->row();

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

	public function change_processing_status($refund_id,$refund_status){
		$this->db->set('refund_status', $refund_status);
		$where  = array('refund_id' => $refund_id);
		$this->db->where($where);
		$query = $this->db->update('refund');
		return true;
	}

	public function get_service($service_id){
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();

	}


}

/* End of file View_all_orders_m.php */
/* Location: ./application/models/View_all_orders_m.php */