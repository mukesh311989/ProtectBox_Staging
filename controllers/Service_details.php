<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_details extends CI_Controller {

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
		$this->load->model('service_details_m');
		$user_id = $this->uri->segment(2);
        $data['all_services'] = $this->service_details_m->get_service_info($user_id);
		$data['get_supplier'] = $this->service_details_m->get_supplier_info($user_id);
		$this->load->view('service_details',$data);
	}

	public function update_status(){
        $this->load->model('service_details_m');
        $supplier_service_id = $this->input->post('supplier_service_id');
        $status = $this->input->post('status_val');
        
        $records = array(
                        'status'=>$status,
                        );

        $status_update = $this->service_details_m->update_order_status($supplier_service_id,$records);

    }
}

/* End of file Supplier_details.php */
/* Location: ./application/controllers/Supplier_details.php */