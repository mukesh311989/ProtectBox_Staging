<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_max_score extends CI_Controller {

	public function index()
	{
		$this->load->model('dynamic_max_score_m');
		$data['fetch_tech_max_scores'] = $this->dynamic_max_score_m->fetch_tech_max_scores();
		$data['fetch_non_tech_max_scores'] = $this->dynamic_max_score_m->fetch_non_tech_max_scores();
		$this->load->view('dynamic_max_score',$data);
	}

	public function update_tech_max_score(){
		$this->load->model('dynamic_max_score_m');
		$max_score_id = $this->input->post('max_tech_score_id');
		$tech_max_score = $this->input->post('tech_max_score');
		$previous_max_score = $this->input->post('previous_max_score');
		
		$records = array(
			"max_score" => $tech_max_score,
			"previous_max_score" => $previous_max_score
		);

		$update_score_of_c_risk = $this->dynamic_max_score_m->update_techz_max_score($max_score_id,$records);
	}

	public function update_non_tech_max_score(){
		$this->load->model('dynamic_max_score_m');
		$max_score_id = $this->input->post('max_non_tech_score_id');
		$non_tech_max_score = $this->input->post('non_tech_max_score');
		$previous_nontech_score = $this->input->post('previous_non_tech_score');

		$records = array(
			"max_score" => $non_tech_max_score,
			"previous_max_score" => $previous_nontech_score
		);

		$update_score_of_c_risk = $this->dynamic_max_score_m->update_non_techzmax_score($max_score_id,$records);
	}

}

/* End of file Dynamic_max_score.php */
/* Location: ./application/controllers/Dynamic_max_score.php */