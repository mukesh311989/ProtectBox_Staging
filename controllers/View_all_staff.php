<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_staff extends CI_Controller {

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
		$this->load->model('view_all_staff_m');
		$data['staff_data'] = $this->view_all_staff_m->fetch_staff_details();
		$this->load->view('view_all_staff',$data);
	}

}

/* End of file View_all_staff.php */
/* Location: ./application/controllers/View_all_staff.php */