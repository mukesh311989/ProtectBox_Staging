<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smb_edit_orders extends CI_Controller {

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
		$this->load->model('my_order_m');
		$user_id = $this->uri->segment(2);
		$data["order_data"] = $this->my_order_m->fetch_order($user_id);
		$this->load->view('smb_edit_orders',$data);
	}

}

/* End of file Smb_edit_orders.php */
/* Location: ./application/controllers/Smb_edit_orders.php */