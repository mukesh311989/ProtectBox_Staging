<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		
     }

	public function index()
	{
		$this->load->model('invoice_m');
		$order_id = $this->uri->segment(2);
		$data['order_data'] = $this->invoice_m->fetch_order_info($order_id);

		$this->load->view('invoice',$data);
	}

	


}

/* End of file Smb_edit_orders.php */
/* Location: ./application/controllers/Smb_edit_orders.php */