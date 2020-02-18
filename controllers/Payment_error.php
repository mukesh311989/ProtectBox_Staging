<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_error extends CI_Controller {

	public function index()
	{
		redirect('payment_failed');
	}

}

/* End of file Payment_error.php */
/* Location: ./application/controllers/Payment_error.php */