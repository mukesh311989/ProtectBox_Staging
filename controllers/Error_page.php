<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_page extends CI_Controller {

	public function index()
	{
		$this->load->view('common/error_page');
	}

}

/* End of file Error_page.php */
/* Location: ./application/controllers/Error_page.php */