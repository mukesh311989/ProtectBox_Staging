<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sme_order extends CI_Controller {
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
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
		$this->load->view('sme_order',$data);
    }

	public function update_status(){
        $this->load->model('my_order_m');
        $order_id = $this->input->post('order_id');
        $status = $this->input->post('status_val');
        $records = array(
                        'status'=>$status,
                        );

        $status_update = $this->my_order_m->update_order_status($order_id,$records);

    }
}
?>