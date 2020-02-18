<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpass extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */

	public function __construct() {
        parent::__construct();	
		$this->load->library('Emailtemplate');	

	}
	public function index()
	{
		$this->load->view('forgetpass');
	}

	public function send_mail()
	{
		$this->load->model('forgetpass_m');
		$email = $this->input->post('email');
		$get_details = $this->forgetpass_m->fetch_user($email);
		if(sizeof($get_details) < 1)
		{
			$this->session->set_flashdata("failed", "Invalid email address!");
			redirect('forgetpass');
		}
		else{
			$fullname = $get_details->firstname . " " . $get_details->lastname;
			$this->load->helper('string');
			$encrypted_key = random_string('alnum',8);
			$update_code = $this->forgetpass_m->update_code($email,$encrypted_key);
			$forgot_message = $this->emailtemplate->forgotpass($fullname,$encrypted_key);
			//echo $forgot_message;
			//exit;
			$this->load->library('email');
			//SMTP & mail configuration
			/*$config = array(
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.mail.protectbox.com',
				'smtp_port' => 465,
				'smtp_user' => 'noreply@protectbox.com',
				'smtp_pass' => 'Samadder5#',
				'mailtype'  => 'html',
				'charset'   => 'utf-8'
			);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");*/
			$this->email->set_mailtype("html");
            $this->email->from('noreply@protectbox.com', 'ProtectBox');
            $this->email->to($email); 
            $this->email->subject('Password Reset-ProtectBox');
            $this->email->message($forgot_message);    

            $okay = $this->email->send();
			/*echo $this->email->print_debugger();
			exit;*/
			if($okay)
			{
				$this->session->set_flashdata("success", "Please check your email Inbox (& Junk folder, adding noreply@protectbox.com to your Contacts) for instructions on how to reset your password.");
				redirect('forgetpass');
			}else{
				$this->session->set_flashdata("failed2", "Something went wrong! Please try again later.");
				redirect('forgetpass');
			}
		}
	}
}
?>