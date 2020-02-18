<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_gv_score_m extends CI_Model {

	public function fetch_gv_score(){
		$this->db->select('*');
		$this->db->from('gv_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function gv_score_update($gv_score_id,$records)
	{
		$this->db->set($records);
		$this->db->where('gv_score_id', $gv_score_id);
		$this->db->update('gv_score');
		return true;
	}

}

/* End of file Dynamic_gv_score_m.php */
/* Location: ./application/models/Dynamic_gv_score_m.php */