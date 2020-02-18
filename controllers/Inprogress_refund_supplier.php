<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inprogress_refund_supplier extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
	 function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Supplier"){
            redirect('error_page');
        }
    }
    public function index()
    {
		$this->load->model('inprogress_refund_supplier_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$status = "inprogress";
		//$service_records = array('refund_status'=> $status);
		$get_all_service = $this->inprogress_refund_supplier_m->fetch_all_serivce($user_id,$status);
		//print_r($get_all_service);
		//exit;
		//print_r($get_supplier_details);

		$data['inprogress_refund'] = $get_all_service;
		
  
		//$this->load->view('sales',$data);
		$this->load->view('inprogress_refund_supplier',$data);
		//$this->load->view('pending_refund_supplier');
    }

	public function update_pending_request()
	{
		$this->load->model('pending_refund_request_m');
		$refund_id =  $this->uri->segment(3);
		$refund_status = "processing";
		$change_refund_status = $this->pending_refund_request_m->change_pending_status($refund_id,$refund_status);

		if($change_refund_status)
		{
			$this->session->set_flashdata("success_status", "Successfully accecpet the refund request !");
			 redirect('pending_refund_request');
		}
		else
		{
			$this->session->set_flashdata("failed_status", "OH! Something went wrong");
			 redirect('pending_refund_request');
		}


		
	} 
}
?>