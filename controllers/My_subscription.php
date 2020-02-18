<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_subscription extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }
	public function index()
	{
		$this->load->model('my_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["order_data"] = $this->my_order_m->fetch_subcription($user_id);
		$this->load->view('my_subscription',$data);
	}

}

/* End of file My_subscription.php */
/* Location: ./application/controllers/My_subscription.php */