<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_sme_m extends CI_Model {

	public function fetch_all_smes($limit, $start){
		  $this->db->select('*');
		  $this->db->from('user');
		  $this->db->where('user_type', 'Small and medium business');
		  $this->db->order_by("registration_date", "desc");
		  $this->db->limit($limit, $start);
		  $query = $this->db->get();
		  return $query->result();
	}

	public function update_user_status($user_id,$updated_status){
		$this->db->set('status', $updated_status);
		$this->db->where('user_id', $user_id);
		$query = $this->db->update('user');
		return true;
	}
}

/* End of file View_suppliers_m.php */
/* Location: ./application/models/View_suppliers_m.php */