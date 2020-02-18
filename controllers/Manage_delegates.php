<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_delegates extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('Emailtemplate');	
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }

    public function index(){
		$this->load->model('manage_delegates_m');
		$data["get_delegate"] = $this->manage_delegates_m->fetch_delegate_new($this->session->userdata['logged_in']['user_id']);
		$this->load->view('manage_delegates',$data);
	}

	public function send_reminder(){
		$this->load->model('manage_delegates_m');
		$delegate_id =  $this->uri->segment(3);
		$this->load->library('email');
		$this->email->set_mailtype("html");

		$fetch_sme = $this->manage_delegates_m->fetch_user($this->session->userdata['logged_in']['user_id']);
		$sme_firstname = $fetch_sme->firstname;
		$sme_lastname = $fetch_sme->lastname;

		$fetch_delegate = $this->manage_delegates_m->fetch_user($delegate_id);
		$del_firstname = $fetch_delegate->firstname;
		$del_lastname = $fetch_delegate->lastname;
		$del_email = $fetch_delegate->email;
		
		$message = $this->emailtemplate->deligate_send_reminder_email($del_email,$del_firstname,$del_lastname,$sme_firstname,$sme_lastname);
		
		$this->email->from('noreply@protectbox.com', 'Protectbox');
		$this->email->to($del_email); 

		$this->email->subject('Reminder For Delegate User');
		$this->email->message($message);    

		$okay = $this->email->send();
		if($okay){
			$date = time();
			$update_reminder = $this->manage_delegates_m->update_reminder($delegate_id,$date);
			if($update_reminder)
			{
				$this->session->set_flashdata("success_reminder", "Your have send email reminder to this delegate user, thank you.");
				redirect('manage_delegates');
			}
			
		}
	}

	public function update_status()
	{
		$this->load->model('manage_delegates_m');
		if($this->input->post('status') == 'active'){
			$status = "inactive";
		}else if($this->input->post('status') == 'inactive'){
			$status = "active";
		}
		$del_id = $this->input->post('del_id');
		$sme_id = $this->input->post('sme_id');

		$update_status = $this->manage_delegates_m->status_update($status,$del_id,$sme_id);
		if($update_status)
		{
			echo $status;
						
		}
		
	}

	public function add_delegate()
    {	
    	$this->load->model('manage_delegates_m');
    	$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
		$this->load->model('questionaire_m');
        $this->load->model('profile_m');

        $delegate_email = $this->input->post('del_email');
    	$user_id = $this->session->userdata['logged_in']['user_id'];
    	$delegate_key = rand(10000000,99999999);
    	$date = time();

        $check_delegate_email = $this->manage_delegates_m->get_access($delegate_email,$user_id);
    	if(!empty($check_delegate_email)){
    		// Same delegate email cannot be added
    		$this->session->set_flashdata("del_failed", "This account holder or delegate user already exists as a username. Please either log in using that username or set up a new, different username.");
			redirect('manage_delegates');
    	}else{
    		// Giving access to the new delegate
    		$get_admins = $this->signup_m->get_admins();
    		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
				if(!empty($check_delegate_main)){
					if($check_delegate_main->user_type == 'Small and medium business'){
						$delegate_type = 'sme_with';
					}else if($check_delegate_main->user_type == 'Supplier'){
						$delegate_type = 'supplier_with';
					}else if($check_delegate_main->user_type == 'admin'){
						$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
						redirect('manage_delegates');
					}
					$delegate_array = array('user_id' => $check_delegate_main->user_id, 'sme_id' => $user_id,"delegate_type" => $delegate_type, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'active', 'date' => $date);
					$del_name = $check_delegate_main->firstname . " " . $check_delegate_main->lastname;
					$insert_delegate = $this->signup_m->add_delegate($delegate_array);

					$all_array = array("user_id"=> $check_delegate_main->user_id,"sme_id"=> $user_id);
					$insert_all = $this->delicate_signup_m->insert_all($all_array);

					$fullname = $firstname.' '.$lastname;

					$del_message = $this->emailtemplate->deligate_questioniare_basics_else_email($delegate_email,$del_name,$fullname,$delegate_key);
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('noreply@protectbox.com', 'ProtectBox');
					$this->email->to($delegate_email); 

					$this->email->subject('Delegate User Request-ProtectBox');
					$this->email->message($del_message);    

					$okay = $this->email->send();

					//admin email starts
					foreach($get_admins as $fetch_admin){
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($admin_email); 

						$this->email->subject('New Delegate Registration | ProtectBox');
						$this->email->message($admin_message);    

						$okay = $this->email->send();
					}
					//admin email ends

					$this->session->set_flashdata("del_first_success", "You have successfully sent an invitation to a delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to login as a delegate user to complete the question.");
					redirect('manage_delegates');
				}else{
					$del_records = array(
						"sme_id" => $user_id,
						"delicate_email" => $delegate_email,
						"delicate_key" => $delegate_key, 
						"delegate_type" => 'sme_without',
						"status" => 'inactive',
						"date" => $date
					);
					$save_data = $this->questionaire_m->save_delicate($del_records);
					$this->load->library('email');
					$this->email->set_mailtype("html");

					$fetch_sme = $this->questionaire_m->get_sme($user_id);
					$firstname = $fetch_sme->firstname;
					$lastname = $fetch_sme->lastname;
					$fullname = $firstname.' '.$lastname;
					
					$basic_if_message = $this->emailtemplate->deligate_questioniare_basics_if_email($delegate_email,$fullname,$delegate_key);

					$this->email->from('noreply@protectbox.com', 'Protectbox');
					$this->email->to($delegate_email); 

					$this->email->subject('Delegate User Request-ProtectBox');
					$this->email->message($basic_if_message);    

					$okay = $this->email->send();

					//admin email starts
					foreach($get_admins as $fetch_admin){
						$del_name = '';
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($admin_email); 

						$this->email->subject('New Delegate Registration | ProtectBox');
						$this->email->message($admin_message);    

						$okay = $this->email->send();
					}
					//admin email ends
					$this->session->set_flashdata("del_first_success", "You have successfully sent an invitation to a new delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to register to complete the question.");
					redirect('manage_delegates');
				}
    	}
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */