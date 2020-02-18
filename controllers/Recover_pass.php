<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recover_pass extends CI_Controller {
	
	public function index()
	{
	
		$this->load->view('recover_pass');
	}

	public function check_details()
	{
		$this->load->library('Emailtemplate');	
		$this->load->model('recover_pass_m');
		$email = $this->input->post('email');
		$encryption = $this->input->post('encryption');
		$new_password = $this->input->post('new_password');

		$check_key = $this->recover_pass_m->key_check($email);
		$actual_key = $check_key->security_code;
		if($actual_key == $encryption){
			$this->load->helper('string');
			$code = random_string('alnum',8);
			$records = array('password' => $new_password,'security_code' => $code);
			$update_data = $this->recover_pass_m->update_user($email,$records);
			$fullname = $check_key->firstname . " " . $check_key->lastname;
			$recover_message = $this->emailtemplate->recoverpass($fullname);
			if($update_data)
			{
				$this->load->library('email');
		        $this->email->set_mailtype("html");

		        

	            $this->email->from('noreply@protectbox.com', 'Protectbox');
	            $this->email->to($email); 

	            $this->email->subject('Password Reset');
	            $this->email->message($recover_message);    

	            $okay = $this->email->send();
				$this->session->set_flashdata("success", "You Have Successfully Reset Your Password!");
				redirect('recover_pass');
			}
			else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('recover_pass');
			}
		}else{
			$this->session->set_flashdata("failed2", "Wrong email or encryption key!");
			redirect('recover_pass');
		}

	}
}

/* End of file Recover_pass.php */
/* Location: ./application/controllers/Recover_pass.php */