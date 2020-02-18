<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_c_risk_m extends CI_Model {

	public function fetch_c_risk_scores(){
		$this->db->select('*');
		$this->db->from('c_risk_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_risk_c_score($c_risk_id,$records)
	{
		$this->db->set($records);
		$this->db->where('c_risk_score_id',$c_risk_id);
		$this->db->update('c_risk_score');
		return true;
	}

}

/* End of file Dynamic_c_risk_m.php */
/* Location: ./application/models/Dynamic_c_risk_m.php */