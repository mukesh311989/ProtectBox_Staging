<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_all_orders extends CI_Controller {
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
		$this->load->view('view_all_orders',$data);
	}

	public function bank_info(){
    	$this->load->model('view_all_orders_m');
    	$supplier_id = $this->input->post('supplier_id');
    	$data['fetch_bank_details'] = $this->view_all_orders_m->payment_info($supplier_id);
    	$this->load->view('bank_information',$data);
    }

	public function update_status(){
        $this->load->model('view_all_orders_m');
        $order_id = $this->input->post('order_id');
        $status = $this->input->post('status_val');
		if($status == '1'){
			$updated_status = '0';
		}else if($status == '0'){
			$updated_status = '1';
		}
        
        $records = array(
                        'status'=>$updated_status,
                        );

        $status_update = $this->view_all_orders_m->update_order_status($order_id,$records);
		echo $updated_status;
    }
}

/* End of file View_all_orders.php */
/* Location: ./application/controllers/View_all_orders.php */