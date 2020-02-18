<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_gv_score extends CI_Controller {

	public function index()
	{
		$this->load->model('dynamic_gv_score_m');
		$data['fetch_gv_scores'] = $this->dynamic_gv_score_m->fetch_gv_score();
		$this->load->view('dynamic_gv_score',$data);
	}

	public function update_gv_score(){

		$this->load->model('dynamic_gv_score_m');
		$gv_score_id = $this->input->post('gv_score_id');
		$gv_score = $this->input->post('score_of_gv');
		$previous_score = $this->input->post('previous_score');
	

		
		$records = array(
			"risk_score" => $gv_score,
			"previous_risk_score" => $previous_score
		);
		$update_gv_score = $this->dynamic_gv_score_m->gv_score_update($gv_score_id,$records);
		
	}
}

/* End of file Dynamic_gv_score.php */
/* Location: ./application/controllers/Dynamic_gv_score.php */