<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$newdata = array(
                'user_name'  =>'',
                'user_email' => '',
                'logged_in' => FALSE,
			    'progress_data' => ''
               );
		$this->session->unset_userdata($newdata);

		$resultdata = array(
				'session_budget' => '',
				'session_antivirus' => '',
				'session_opt_system' => '',
				'session_firewall' => '',
				'session_internet' => '',
				'session_access_control' => '',
				'session_data_protection' => '',
				'session_managed_service' => '',
				'session_business_continuity' => '',
				'session_password_policy' => '',
				'session_accreditation_regulation' => '',
				'session_device' => '',
				'session_training'=> '',
				'session_remote_working' => '',
				'session_reputation_manage' => '',
				'session_consultancy' => ''
		);
     $this->session->unset_userdata($resultdata);
     $this->session->sess_destroy();
	 session_destroy();

     redirect('login');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */