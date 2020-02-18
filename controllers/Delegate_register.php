<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delegate_register extends CI_Controller {

	public function index()
	{
		$this->load->view('delegate_register');
	}

	public function add_user()
	{
		$this->load->model('delicate_signup_m');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$fullname = $first_name ." ". $last_name;
		$email_id = $this->input->post('email_id');
		$delegate_key = $this->input->post('delegate_key');
		$password = $this->input->post('password');
		
		if($this->input->post('receive_email') == "1")
		{
			$receive_email = $this->input->post('receive_email');
		}else{
			$receive_email = "";
		}

		$date = time();

		$records = array(
			'user_type'=> 'delegate',
			'firstname'=> $first_name,
			'lastname'=> $last_name,
			'email'=> $email_id,
			'password'=> $password,
			'email_notification'=> $receive_email,
			'registration_date'=> $date,
			'status'=> 1
		);

		$check_delegate = $this->delicate_signup_m->delicate_check($email_id,$delegate_key);
		if($check_delegate > 0)
		{
			$add_user = $this->delicate_signup_m->user_add($records);
			if($add_user != '')
			{
				$update_delicate = $this->delicate_signup_m->delicate_update($email_id,$delegate_key,$add_user);
				if($update_delicate)
				{
					$get_sme_id = $this->delicate_signup_m->sme_info($add_user);
					$sme_id = $get_sme_id->sme_id;
					$all_array = array("user_id"=> $add_user,"sme_id"=> $sme_id);
					$insert_all = $this->delicate_signup_m->insert_all($all_array);
					$session_data = array(
										'user_id' => $add_user,
										'user_type' => 'delegate',
										'name' =>$fullname,
									  	'email'=>$email_id
									  );
					$this->session->set_userdata('logged_in', $session_data);
					redirect('delegate_questionaire');
				}else{
					$this->session->set_flashdata("failed", "Something went wrong!");
					redirect('delegate_register');	
				}
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('delegate_register');	
			}
		}else{
			$this->session->set_flashdata("auth_failed", "Delegate email or secret key is invalid! Please try again.");
			redirect('delegate_register');	
		}
	}

}

/* End of file Delicate_signup.php */
/* Location: ./application/controllers/Delicate_signup.php */