<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_max_score_m extends CI_Model {
	/* Technical Max Scores Starts*/
	public function fetch_tech_max_scores(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','tech');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_techz_max_score($max_score_id,$records)
	{
		$this->db->set($records);
		$this->db->where('max_score_id',$max_score_id);
		$this->db->where('type','tech');
		$this->db->update('tech_non_tech_max_score');
		return true;
	}
	/* Technical Max Scores Ends*/

	/* Non-Technical Max Scores Starts*/
	public function fetch_non_tech_max_scores(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','non_tech');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_non_techzmax_score($max_score_id,$records)
	{
		$this->db->set($records);
		$this->db->where('max_score_id',$max_score_id);
		$this->db->where('type','non_tech');
		$this->db->update('tech_non_tech_max_score');
		return true;
	}
	/* Non-Technical Max Scores Ends */
}

/* End of file Dynamic_max_score_m.php */
/* Location: ./application/models/Dynamic_max_score_m.php */