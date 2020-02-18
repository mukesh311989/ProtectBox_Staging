<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->library('Emailtemplate');	
		$this->load->library('form_validation');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->model('profile_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
		$data['country'] = $this->profile_m->fetch_country();
        $data['user_data'] = $this->profile_m->fetch_user($user_id);
        $this->load->view('profile',$data);
    }
    public function update_data()
    {
		$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
        $this->load->model('profile_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $company_name = $this->input->post('company_name');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address1 = $this->input->post('address1');
		$address2 = $this->input->post('address2');
		$city = $this->input->post('city');
		$state_province = $this->input->post('state_province');
		$postal_code = $this->input->post('postal_code');
		$country = $this->input->post('country');
		$date = time();

		if($this->input->post('delegate_status') == 'on')
        {
            $delegate_status = '1';
			$delegate_email = $this->input->post('delegate_email');
			$delegate_key = rand(10000000,99999999);
        }
        else if($this->input->post('delegate_status') == ''){
            $delegate_status = '0';
        }
		
		
        $receive_email = $this->input->post('receive_email');
        if($receive_email == 'on')
        {
            $email_notification = '1';
        }
        else if($receive_email == ''){
            $email_notification = '0';
        }
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');
		
		$this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[60]');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run() == FALSE){   
			//echo "Invalid";
           $this->session->set_flashdata("failed", "You have error in your email address !");
		   redirect('profile');
        }else{
			if($new_password != '' && $confirm_password != '' && $new_password == $confirm_password){
				$records = array(
                                'company_name'=>$company_name,
                                'firstname'=> $firstname,
                                'lastname'=> $lastname,
                                'email'=> $email,
                                'phone'=> $phone,
                                'password'=> $new_password,
                                'email_notification'=> $email_notification,
                                'address1'=> $address1,
								'address2'=> $address2,
								'city'=> $city,
								'state'=> $state_province,
								'postal_code'=> $postal_code,
								'country'=> $country
                            );
			}else{
                $records = array(
                                'company_name'=>$company_name,
                                'firstname'=> $firstname,
                                'lastname'=> $lastname,
                                'email'=> $email,
                                'phone'=> $phone,
                                'email_notification'=> $email_notification,
                                'address1'=> $address1,
								'address2'=> $address2,
								'city'=> $city,
								'state'=> $state_province,
								'postal_code'=> $postal_code,
								'country'=> $country
                            );
			}
		
			$get_admins = $this->signup_m->get_admins();
			$update_data = $this->profile_m->update_user($user_id,$records);
			if($update_data)
			{
				$this->session->set_flashdata("success", "Your profile has been updated, thank you.");
				
				if($delegate_status == '1')
				{
					//delegate check starts
					$check_delegate = $this->profile_m->check_delegate($delegate_email);

					if(count($check_delegate) > 0){
						$check_del_user_table = $this->profile_m->check_del_user_table($check_delegate->user_id,$user_id);
						if(count($check_del_user_table) > 0){
							$this->session->set_flashdata("del_failed", "This account holder or delegate user already exists as a username. Please either log in using that username or set up a new, different username.");
							redirect('profile');
						}else{
							if($check_delegate->user_type == 'Small and medium business'){
								$delegate_type = 'sme_with';
							}else if($check_delegate->user_type == 'Supplier'){
								$delegate_type = 'supplier_with';
							}else if($check_delegate->user_type == 'admin'){
								$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
								redirect('profile');
							}
							$delegate_array = array('user_id' => $check_delegate->user_id, 'sme_id' => $user_id, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'active','delegate_type' => $delegate_type, 'date' => $date);
							$insert_delegate = $this->signup_m->add_delegate($delegate_array);
							$all_array = array("user_id"=> $check_delegate->user_id,"sme_id"=> $user_id);
							$insert_all = $this->delicate_signup_m->insert_all($all_array);
							$del_name = $check_delegate->firstname ." ".$check_delegate->lastname;
							$fullname = $this->session->userdata['logged_in']['name'];

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

							$this->session->set_flashdata("del_first_success", "You have successfully sent an invitation delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to login as a Small and medium business or Supplier to complete the question.");
							redirect('profile');
						}
					}else{
						$delegate_type = 'sme_without';

						$delegate_array = array('sme_id' => $user_id, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key ,'status' => 'inactive','delegate_type' => $delegate_type, 'date' => $date);

						$insert_delegate = $this->signup_m->add_delegate($delegate_array);
						
						$this->load->library('email');
						$this->email->set_mailtype("html");

						$fullname = $this->session->userdata['logged_in']['name'];
						
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
						redirect('profile');
					}
					
					//delegate check ends

				}
			   
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('profile');
			}
			redirect('profile');
		}
    }
}
?>