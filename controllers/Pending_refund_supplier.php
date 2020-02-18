<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_refund_supplier extends CI_Controller {

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
		$this->load->library('Emailtemplate');	
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Supplier"){
            redirect('error_page');
        }
    }
    public function index()
    {
		$this->load->model('pending_refund_supplier_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$status = "processing";
		$service_records = array('refund_status'=> $status);
		$get_all_service = $this->pending_refund_supplier_m->fetch_all_serivce($user_id,$status);
		//print_r($get_all_service);
		//exit;
		//print_r($get_supplier_details);
		$data['pending_refund'] = $get_all_service;
		
  
		//$this->load->view('sales',$data);
		$this->load->view('pending_refund_supplier',$data);
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
	

	public function upload_refund_proof(){

		$this->load->model('pending_refund_supplier_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$supplier_email = ucfirst($this->session->userdata['logged_in']['email']);
		$supplier_name = ucfirst($this->session->userdata['logged_in']['name']);

		$payment_method = $this->input->post('payment_method');
		$refund_id = $this->input->post('refund_id');
		$order_id = $this->input->post('order_id');
		$refund_status = "inprogress";
		$admin_id = '24';
		$admin_details = $this->pending_refund_supplier_m->supp_info($admin_id);
		if(isset($_FILES['userFiles']['name']) && $_FILES['userFiles']['name'] != ""){
						$_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
						$_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
						$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
						$_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
						$_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

						$uploadPath = 'uploads/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('userFile')){
							$fileData = $this->upload->data();
							$uploadData['file_name'] = $fileData['file_name'];
							$uploadData['created'] = date("Y-m-d H:i:s");
							$uploadData['modified'] = date("Y-m-d H:i:s");
				}
			}

			$records = array('proof_type'=>$payment_method,'proof'=>$uploadData['file_name'],'refund_status'=>$refund_status);
			$change_refund_status = $this->pending_refund_supplier_m->change_pending_status($records,$refund_id);
			
			//SMB INFO STARTS
			$get_refund_details = $this->pending_refund_supplier_m->refund_details_fetch($refund_id);
			$smb_id = $get_refund_details->smb_id;
			$get_smb_details = $this->pending_refund_supplier_m->supp_info($smb_id);
			$smb_name = $get_smb_details->firstname . " " . $get_smb_details->lastname;
			$smb_number = $get_smb_details->phone;
			$smb_email = $get_smb_details->email;
			//SMB INFO ENDS
			
			//SUPPLIER INFO STARTS
			$get_supplier_info = $this->pending_refund_supplier_m->supp_info($user_id);
			$supplier_number = $get_supplier_info->phone;
			//SUPPLIER INFO ENDS

			//SERVICE INFO STARTS
			$service_id = $get_refund_details->service_id;
			$get_service = $this->pending_refund_supplier_m->service_details($service_id);
			$service_name = $get_service->service_name;
			$service_curency = $get_service->currency;
			$service_price = $get_service->price_detail;
			//SERVICE INFO ENDS
			
			//$email = $this->session->userdata['logged_in']['email'];
			$subject="ProtectBox refund in progress for ".$service_curency." ".$service_price."00 from customer (".$smb_name.")";
			$refund_message = $this->emailtemplate->supplier_pending_refund_email($supplier_email,$supplier_name);
			
			 $this->load->library('email', $config);
			 $this->email->set_newline("\r\n");
			 $this->email->set_crlf( "\r\n" );

			 $this->email->from('noreply@protectbox.com','Protectbox');
			 $this->email->to($supplier_email);
			 $this->email->subject($subject);
			 $this->email->message($refund_message);
			 $this->email->set_mailtype("html"); 

			 $attched_file= 'http://'.$_SERVER['HTTP_HOST']."/uploads/".$uploadData['file_name'];
			 
			 $this->email->attach($attched_file);
			 $supplierzz_email = $this->email->send();

			/* EMAIL TO ADMIN Starts */
				 if($supplierzz_email){
					 $this->load->model("signup_m");
					 $get_admins = $this->signup_m->get_admins();
					 foreach($get_admins as $fetch_admin){
						$admin_fullname = ucfirst($fetch_admin->firstname) ." ". ucfirst($fetch_admin->lastname);
						$admin_email = $fetch_admin->email;

						$subject_admin = "SMB refund processed by ".$supplier_name."";
						$refund_message_admin = this->emailtemplate->supplier_pending_refund_email_admin($admin_fullname,$supplier_email,$supplier_name,$supplier_number,$order_id,$service_curency,$service_price,$service_name,$smb_number,$smb_email);
						
						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
						$this->email->set_crlf( "\r\n" );

					    $this->email->from('noreply@protectbox.com','Protectbox');
					    $this->email->to($admin_email);
					    //$this->email->to($supplier_email);
					    $this->email->subject($subject_admin);
					    $this->email->message($refund_message_admin);
					    $this->email->set_mailtype("html"); 

					    $attched_file= 'http://'.$_SERVER['HTTP_HOST']."/uploads/".$uploadData['file_name'];
					 
					    $this->email->attach($attched_file);
					    $this->email->send();
					 }

					 
					 $this->session->set_flashdata("success_status", "Successfully sent the refund proof !");
					 redirect('pending_refund_supplier');
				 
			 /* EMAIL TO ADMIN Ends */
			}else{
					$this->session->set_flashdata("failed_status", "OH! Something went wrong");
					redirect('pending_refund_supplier');
			}
	}
}
?>