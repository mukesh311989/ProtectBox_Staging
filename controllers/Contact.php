<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
   
    public function index()
    {
        $this->load->view('contact');
    }

    public function captcha()
    {
        session_start();
        $random_alpha = md5(rand());
        $captcha_code = substr($random_alpha, 0, 6);
        $_SESSION["captcha_code"] = $captcha_code;
        $target_layer = imagecreatetruecolor(70,30);
        $captcha_background = imagecolorallocate($target_layer, 255, 255, 255);
        imagefill($target_layer,0,0,$captcha_background);
        $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
        imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
        header("Content-type: image/jpeg");
        imagejpeg($target_layer);
    }

	public function send_mail()
	{
		$this->load->library('Emailtemplate');
		$first_name = $this->input->post('first_name');
		$first_name_str = preg_replace("/[^A-Za-z]/","",$first_name);
		$last_name = $this->input->post('last_name');
		$last_name_str = preg_replace("/[^A-Za-z]/","",$last_name);
		$email = $this->input->post('email_id');
		$phone = $this->input->post('phone_number');
		$check_number = preg_match('/^[0-9]{10}+$/', $phone);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_v = "invalid";
		}else{
			$email_v = "valid";
		}
		
		$message = $this->input->post('message_info');
		$message_str = preg_replace("/[^A-Za-z]/","",$message);

		if(strlen($first_name_str) > 0 && strlen($last_name_str) > 0 && strlen($message_str) > 0 && $check_number == 1 && $email_v == 'valid'){
			$this->load->model("signup_m");
			$get_admins = $this->signup_m->get_admins();
			
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname) ." ". ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'Protectbox');
				$this->email->to($admin_email); 
				//$this->email->to('sweezit92@gmail.com'); 
				$message_data = $this->emailtemplate->send_query($admin_fullname,$first_name,$last_name,$email,$phone,$message);
				
				$this->email->subject('Enquiry Mail');
				$this->email->message($message_data);    

				$okay = $this->email->send();
				break;
			}

			
			$this->session->set_flashdata("success", "Thank you for contacting us! We will get back to you soon.");
			redirect('contact');
		}else{
			$this->session->set_flashdata("failed", "You have errors in your form fields!");
			redirect('contact');
		}
		
		
		
	}
}
?>