<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_smb_questionnaire extends CI_Controller {  

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
     }

	public function index()
	{
		$this->load->model('questionniare_results_m');
		$user_id = $this->uri->segment(2);
		$data["get_basic_answars"] = $this->questionniare_results_m->get_basic_answars($user_id);
		$data["get_tech_answars"] = $this->questionniare_results_m->get_tech_answars($user_id);
		$data["get_nontech_answars"] = $this->questionniare_results_m->get_nontech_answars($user_id);
		$data['get_budget_answars'] = $this->questionniare_results_m->get_budget_answars($user_id);
		$this->load->view('view_smb_questionnaire',$data);
	}

}

/* End of file View_smb_questionnaire.php */
/* Location: ./application/controllers/View_smb_questionnaire.php */