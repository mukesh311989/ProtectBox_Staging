<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_sup_payments extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin" && $this->session->userdata['logged_in']['user_type'] != "accountant"){
            redirect('error_page');
        }
    }

	public function index()
	{
		$this->load->model('view_all_orders_m');
		$data['fetch_all_orders'] = $this->view_all_orders_m->all_orders();
		$this->load->view('manage_sup_payments',$data);
	}

}

/* End of file Manage_sup_payments.php */
/* Location: ./application/controllers/Manage_sup_payments.php */