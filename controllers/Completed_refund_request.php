<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completed_refund_request extends CI_Controller {

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
        if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
    }
    public function index()
    {
		$this->load->model('completed_refund_request_m');
		//$user_id = $this->session->userdata['logged_in']['user_id'];
		$status = "completed";
		
		//$records = array('refund_status'=> $status);
		//print_r($records);
		//exit;
		$data["completed_refund"] = $this->completed_refund_request_m->fetch_completed_request($status);
		//print_r($completed_refund);
		//exit;
		
        

		//$this->load->view('sales',$data);
		$this->load->view('completed_refund_request',$data);
    }


}
?>