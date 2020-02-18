<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->view('supplier_dashboard');
	}

}

/* End of file Supplier_dashboard.php */
/* Location: ./application/controllers/Supplier_dashboard.php */