<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Be_delegate extends CI_Controller {

	 public function __construct() {
        parent::__construct();	
		if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        /*if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }*/
	}

	public function index()
	{
		$del_id = $this->session->userdata['logged_in']['user_id'];
		$this->load->model('be_delegate_m');
		$data['delecate_data'] = $this->be_delegate_m->be_delegate_fetch($del_id);
		$this->load->view('be_delegate',$data);
	}

}

/* End of file Be_delegate.php */
/* Location: ./application/controllers/Be_delegate.php */