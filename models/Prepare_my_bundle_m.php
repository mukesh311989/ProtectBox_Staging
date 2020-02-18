<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prepare_my_bundle_m extends CI_Model {

	public function result_bundle_dominator($smb_id,$max_range,$min_range){
		$this->db->select("*");
		$this->db->from("preparing_bundle");
		$this->db->where("smb_id",$smb_id);
		$this->db->where("total_bundle_price <",$max_range);
		$this->db->where("total_bundle_price >=",$min_range);
		$this->db->order_by('total_bundle_price','desc');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_each_results($service_id){
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}

	public function insert_bundle($records){
		$this->db->insert('preparing_mysmb_bundle', $records);
		return $this->db->insert_id();
	}

	public function count_rows($user_id,$loop_bundle_cnt){
		$this->db->select('*');
		$this->db->from('preparing_mysmb_bundle');
		$this->db->where('smb_id',$user_id);
		$this->db->where('bundle_order',$loop_bundle_cnt);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	public function updatezz_bundle($records,$user_id,$order_number){
		$condition = array('smb_id' => $user_id,
						'bundle_order' => $order_number
					);
		$this->db->where($condition);
		$query = $this->db->update('preparing_mysmb_bundle', $records);
		return true;
	}

}

/* End of file Prepare_my_bundle_m.php */
/* Location: ./application/models/Prepare_my_bundle_m.php */