<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processing_refund_request extends CI_Controller {

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
        if($this->session->userdata['logged_in']['user_type'] != "admin" && $this->session->userdata['logged_in']['user_type'] != "accountant"){
            redirect('error_page');
        }
		$this->load->library('Emailtemplate');	

    }
    public function index()
    {
		$this->load->model('processing_refund_request_m');
		//$user_id = $this->session->userdata['logged_in']['user_id'];
		$status = "processing";
		$another_status = "inprogress";
		//$records = array('refund_status'=> $status);
		//print_r($records);
		//exit;
		$data["progress_refund"] = $this->processing_refund_request_m->fetch_progress_request($status,$another_status);
		
		
        

		//$this->load->view('sales',$data);
		$this->load->view('processing_refund_request',$data);
    }

	public function update_processing_request()
	{
		$this->load->model('processing_refund_request_m');
		$refund_id =  $this->uri->segment(3);
		$refund_status = "completed";
		$change_refund_status = $this->processing_refund_request_m->change_processing_status($refund_id,$refund_status);

		if($change_refund_status)
		{
			$get_cus_details = $this->processing_refund_request_m->get_smb_info($refund_id);
			$order_id = $get_cus_details->order_id;
			$email = $get_cus_details->email;
			$cus_phone = $get_cus_details->phone;
			$fullname = $get_cus_details->firstname . " " . $get_cus_details->lastname;

			//SERVICE INFO STARTS
			$service_id = $get_cus_details->service_id;
			$get_service = $this->processing_refund_request_m->get_service($service_id);
			$service_currency = $get_services->currency;
			$service_price = $get_services->price_detail;
			$service_name = $get_services->service_name;
			//SERVICE INFO ENDS
			
			$smb_message = $this->emailtemplate->smb_refund_completed($fullname,$order_id,$service_currency,$service_price,$service_name,$cus_phone,$email);

			$this->load->library('email');
			$this->email->set_mailtype("html");

            $this->email->from('noreply@protectbox.com', 'Protectbox');
            $this->email->to($email); 
            $this->email->subject('Refund Completed In ProtectBox');
            $this->email->message($smb_message);    
            $okay = $this->email->send();


			$this->session->set_flashdata("success_status", "Successfully accepted the refund request!");
			 redirect('processing_refund_request');
		}
		else
		{
			$this->session->set_flashdata("failed_status", "OH! Something went wrong");
			 redirect('processing_refund_request');
		}


		
	} 
}
?>