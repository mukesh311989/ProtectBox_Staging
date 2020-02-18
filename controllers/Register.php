<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
include("sageone/sageone_constants.php");
include("sageone/SageoneClient.php");
include("sageone/SageoneSigner.php");
class Register extends CI_Controller {

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
	  $this->load->model('signup_m');
	  $this->load->library('form_validation');
	  $this->load->library('Emailtemplate');

		$IP=$_SERVER['HTTP_X_FORWARDED_FOR'];
		$this->$ipdat = @json_decode(file_get_contents( 
		    "http://www.geoplugin.net/json.gp?ip=" . $IP));	

	}
	public function index()
	{
		/*$client_id = '9c6c1e5b4c2c1309ecff';
		$client_secret = '6965ca8544c7f66969fab1c937f0cca91d4d8cb1';
		$signing_secret = '5bddf0f6dfd92323867f78479120cbcb4feaff8c';
		$apim_subscription_key = '971e791e220944daa237ff805632dbe2';
		$callback_url = 'https://staging.protectbox.com/register/callback';
		$scope = 'full_access';
		$auth_endpoint = 'http://www.sageone.com/oauth2/auth';
		//$us_token_endpoint = 'http://mysageone.na.sageone.com/oauth2/token';
		//$ca_token_endpoint = 'http://mysageone.ca.sageone.com/oauth2/token';
		$uki_token_endpoint = 'http://app.sageone.com/oauth2/token';
		//$us_base_endpoint = 'https://api.columbus.sage.com/us/sageone/';
		//$ca_base_endpoint = 'https://api.columbus.sage.com/ca/sageone/';
		$uki_base_endpoint = 'https://api.columbus.sage.com/uki/sageone/';*/
		
		$this->load->library('recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                echo "You got it!";
            }
        }
		
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
		
		$this->load->view('register',$data);
	}
	

	public function add_user(){
		$user_type = $this->input->post('account_type');
		$company_name = $this->input->post('company_name');
		$firstname = $this->input->post('first_name');
		$lastname = $this->input->post('last_name');
		$full_name = $firstname ." ". $lastname;
		$fullname = htmlentities($full_name);
		$key = $this->input->post('key');
		$email = $this->input->post('email_id');
		$phone = "";
		$password = $this->input->post('password');
		$delegate_email = $this->input->post('delegate_email');
		$receive_email = $this->input->post('receive_email');
		if($receive_email == 'on'){
			$email_notification = 1;
		}else{
			$email_notification = 0;
		}
		$registration_date = time();
		$address = "";

		if($this->input->post('delegate_status') == 'on'){
			$delegate_status = 1;
		}else{
			$delegate_status = 0;
		}
		$email_notification_status = 1;

		$this->form_validation->set_rules('company_name', 'Company Name', 'required|max_length[60]');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[30]');
		$this->form_validation->set_rules('email_id', 'Email', 'required|valid_email');
		

		if($this->form_validation->run() == FALSE){   
			//echo "Invalid";
           $this->session->set_flashdata("failed", "You have errors in your form fields!");
		   redirect('register');
        }else{
			//echo "Valid";
		  $records=array('user_type'=>$user_type,'company_name'=> $company_name,'firstname'=> $firstname,'lastname'=> $lastname,'email'=> $email,'phone'=> $phone,'password'=> $password,'email_notification'=> $email_notification,'registration_date'=> $registration_date,'address'=> $address,'delegate_status'=> $delegate_status,'email_notification_status'=> $email_notification_status,'status'=> '1');

		  		$this->db = $this->load->database('default', TRUE);
		  		if ($records['user_type'] == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
					$this->db = $this->load->database('db4_india', TRUE);
		  		}
				
				$this->load->model('signup_m');
				$this->load->model('delicate_signup_m');
				
				//get admin details starts
				$get_admins = $this->signup_m->get_admins();
				//get admin details ends
				
				$prevent_copy = $this->signup_m->prevent_copy($email);
				//Start if user exis or not
				if($prevent_copy < 1){

					//Delegate not clciked starts
					if($delegate_status == 0)
					{
						//check delegate key if coming from delegate email
						if($key != '')
						{
							$redirect = $this->delegate_not_adding_delegate($key,$user_type,$fullname,$email,$records,$get_admins);
							redirect($redirect);
						}
						//Regular Register
						else{
							$redirect = $this->genaral_not_adding_delegate($records,$user_type,$fullname,$email,$get_admins);
							redirect($redirect);
						}
						
					}
					//Delegate clciked starts
					else{
						//Coming from delegate email starts
						if($key != ''){
							$redirect = $this->delegate_adding_delegate($key,$records,$user_type,$fullname,$email,$delegate_email,$get_admins);
							redirect($redirect);
						}
						//Coming from delegate email ends
						//Genaral register starts
						else{
							$redirect = $this->genaral_adding_delegate($records,$user_type,$fullname,$email,$delegate_email,$get_admins);
							redirect($redirect);
						}
						//Genaral register ends

					}
					
				}else{
					//End if user exis or not
					$this->session->set_flashdata("failed", "This account holder or delegate user already exists as a username. Please either log in using that username or set up a new, different username.");
					redirect('register');
				}
		}
	}

	public function delegate_adding_delegate($key,$records,$user_type,$fullname,$email,$delegate_email,$get_admins)
	{
		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}

		$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
		$this->load->model('order_process_m');
		$check_key = $this->signup_m->check_key($key);
		if(count($check_key) > 0)
		{
			$insert_data = $this->signup_m->insert_user($records);
			if($user_type == 'Small and medium business'){
				$delegate_type = 'sme_with';
			}else if($user_type == 'Supplier'){
				$delegate_type = 'supplier_with';
			}
			
			$up_del_array = array('user_id' => $insert_data,'delegate_type' => $delegate_type,'status' => 'active','access'=>'basic');
			$update_delegate_user = $this->signup_m->update_delegate_user($up_del_array,$check_key->delicate_id);
			$all_array = array("user_id"=> $insert_data,"sme_id"=> $check_key->sme_id);
			$insert_all = $this->delicate_signup_m->insert_all($all_array);

			$session_data = array(
								'user_id' => $insert_data,
								'user_type' => $user_type,
								'name' =>$fullname,
								'email'=>$email
							  );
			$this->session->set_userdata('logged_in', $session_data);

			//Mail to user starts
			$message = $this->emailtemplate->regisuccess($fullname,$user_type);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 

			$this->email->subject('Registration Confirmation-ProtectBox');
			$this->email->message($message);    

			$okay = $this->email->send();
			//Mail to user ends

			//sending mail to admins if user dont select delegate starts
				$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);
				$admin_message = $this->emailtemplate->regisuccess_admin($admin_fullname,$fullname,$email,$user_type);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 
				//$this->email->to('himadrimajumder8@gmail.com');

				$this->email->subject('New User Registration | ProtectBox');
				$this->email->message($admin_message);    

				$okay = $this->email->send();
			
			
			//sending mail to admins if user dont select delegate ends
			
			//add delegate starts here
			
			$check_delegate = $this->signup_m->check_delegate_main($delegate_email);
			
			if(!empty($check_delegate))
			{
				$check_type = $this->signup_m->check_delegate_main($delegate_email);
				if($check_type->user_type == 'Small and medium business'){
					$d_type = 'sme_with';
				}else if($check_type->user_type == 'Supplier'){
					$d_type = 'supplier_with';
				}
				$delegate_key = rand(10000000,99999999);
				$date = time();

				$delegate_array = array('user_id' => $check_delegate->user_id, 'sme_id' => $insert_data, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'active','delegate_type' => $d_type, 'date' => $date);
				$insert_delegate = $this->signup_m->add_delegate($delegate_array);
				$all_array = array("user_id"=> $check_delegate->user_id,"sme_id"=> $insert_data);
				$insert_all = $this->delicate_signup_m->insert_all($all_array);

				$del_name = $check_type->firstname ." ".$check_type->lastname;

				$smbData=$this->order_process_m->fetch_sme($insert_data);
				$smb_company=$smbData->company_name;
				
				//send mail to delegate starts
				$del_message = $this->emailtemplate->deligate_questioniare_basics_else_email($delegate_email,$del_name,$fullname,$delegate_key,$smb_company);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($delegate_email); 

				$this->email->subject('Delegate User Request-ProtectBox');
				$this->email->message($del_message);    

				$okay = $this->email->send();
				//send mail to delegate ends

				//admin email starts
				$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);
				$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type,$smb_company);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 

				$this->email->subject('New Delegate Registration');
				$this->email->message($admin_message);    

				$okay = $this->email->send();
				//admin email ends
				return 'questionaire';
			}else{
				$delegate_type = 'sme_without';

				$delegate_key = rand(10000000,99999999);
				$date = time();

				$smbData=$this->order_process_m->fetch_sme($insert_data);
				$smb_company=$smbData->company_name;

				$delegate_array = array('sme_id' => $insert_data, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'inactive','delegate_type' => $delegate_type, 'date' => $date);

				$insert_delegate = $this->signup_m->add_delegate($delegate_array);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$basic_if_message = $this->emailtemplate->deligate_questioniare_basics_if_email($delegate_email,$fullname,$delegate_key,$smb_company);

				$this->email->from('noreply@protectbox.com', 'Protectbox');
				$this->email->to($delegate_email); 

				$this->email->subject('Delegate User Request-ProtectBox');
				$this->email->message($basic_if_message);    

				$okay = $this->email->send();

				//admin email starts
				$admin_email = array();
				$admin_fullname = 'Admin';
				foreach($get_admins as $fetch_admin){
					$admin_email[] = $fetch_admin->email;
				}
				$email_to = implode(',', $admin_email);
				$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type,$smb_company);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email_to); 

				$this->email->subject('New Delegate Registration');
				$this->email->message($admin_message);    

				$okay = $this->email->send();
				return 'questionaire';
			}
			
			//add delegate ends here       
		}else{
			$this->session->set_flashdata("delegate_key_error", "This acctivation code is invalid.");
			return 'register';
		}
	}

	public function delegate_not_adding_delegate($key,$user_type,$fullname,$email,$records,$get_admins)
	{
	
		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}
		$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');

		$check_key = $this->signup_m->check_key($key);
		if(count($check_key) > 0)
		{
			$insert_data = $this->signup_m->insert_user($records);
			if($user_type == 'Small and medium business'){
				$delegate_type = 'sme_with';
			}else if($user_type == 'Supplier'){
				$delegate_type = 'supplier_with';
			}
			$up_del_array = array('user_id' => $insert_data,'delegate_type' => $delegate_type,'status' => 'active');
			$update_delegate_user = $this->signup_m->update_delegate_user($up_del_array,$check_key->delicate_id);
			$all_array = array("user_id"=> $insert_data,"sme_id"=> $check_key->sme_id);
			$insert_all = $this->delicate_signup_m->insert_all($all_array);

			$session_data = array(
							'user_id' => $insert_data,
							'user_type' => $user_type,
							'name' =>$fullname,
							'email'=>$email
						  );
			$this->session->set_userdata('logged_in', $session_data);
			if($this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
				
				$redirect = 'questionaire';
			}
			else if($this->session->userdata['logged_in']['user_type'] == "Supplier")
			{
				
				$redirect = 'edit_solution';
			}

			//Mail to user starts
			$regi_message = $this->emailtemplate->regisuccess($fullname);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email); 

			$this->email->subject('Registration Confirmation-ProtectBox');
			$this->email->message($regi_message);  
			$okay = $this->email->send();
			//Mail to user ends

			//Mail to admin starts
			$admin_email = array();
			$admin_fullname = 'Admin';
			foreach($get_admins as $fetch_admin){
				$admin_email[] = $fetch_admin->email;
			}
			$email_to = implode(',', $admin_email);
			$admin_message = $this->emailtemplate->regisuccess_admin($admin_fullname,$fullname,$email,$user_type);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email_to); 
			//$this->email->to('himadrimajumder8@gmail.com');

			$this->email->subject('New User Registration | ProtectBox');
			$this->email->message($admin_message);    
			$okay = $this->email->send();
			//Mail to admin ends
			return $redirect;
		}else{
			$this->session->set_flashdata("delegate_key_error", "This acctivation code is invalid.");
			return 'register';
		}
	}

	public function genaral_not_adding_delegate($records,$user_type,$fullname,$email,$get_admins)
	{
		
		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}

		$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');

		$insert_data = $this->signup_m->insert_user($records);
		$session_data = array(
								'user_id' => $insert_data,
								'user_type' => $user_type,
								'name' =>$fullname,
								'email'=>$email
							  );
		$this->session->set_userdata('logged_in', $session_data);
		if($this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
			$redirect = 'questionaire';
		}
		else if($this->session->userdata['logged_in']['user_type'] == "Supplier")
		{
			$redirect = 'edit_solution';
		}
		//Mail to user starts
		$message = $this->emailtemplate->regisuccess($fullname);
			
		$this->load->library('email');
		$this->email->set_mailtype("html");

		$this->email->from('noreply@protectbox.com', 'ProtectBox');
		$this->email->to($email); 

		$this->email->subject('Registration Confirmation-ProtectBox');
		$this->email->message($message);    

		$okay = $this->email->send();
		//Mail to user ends

		//sending mail to admins if user dont select delegate starts
		$admin_email = array();
		$admin_fullname = 'Admin';
		foreach($get_admins as $fetch_admin){
			$admin_email[] = $fetch_admin->email;
		}
		$email_to = implode(',', $admin_email);
		$admin_message = $this->emailtemplate->regisuccess_admin($admin_fullname,$fullname,$email,$user_type);
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('noreply@protectbox.com', 'ProtectBox');
		$this->email->to($email_to);
		//$this->email->to('himadrimajumder8@gmail.com'); 

		$this->email->subject('New User Registration | ProtectBox');
		//$this->email->to($admin_email); 
		$this->email->message($admin_message);   

		$okay = $this->email->send();
			
		//sending mail to admins if user dont select delegate ends
		return $redirect;
	}

	public function genaral_adding_delegate($records,$user_type,$fullname,$email,$delegate_email,$get_admins)
	{

		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}

		$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
		$this->load->model('order_process_m');

		$insert_data = $this->signup_m->insert_user($records);
		$session_data = array(
								'user_id' => $insert_data,
								'user_type' => $user_type,
								'name' =>$fullname,
								'email'=>$email
							  );
		$this->session->set_userdata('logged_in', $session_data);
		
		$delegate_key = rand(10000000,99999999);
		$date= time();

		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
		if(sizeof($check_delegate_main) > 0){
			$delegate_array = array('user_id' => $check_delegate_main->user_id, 'sme_id' => $insert_data, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'active', 'date' => $date);
			$insert_delegate = $this->signup_m->add_delegate($delegate_array);

			$all_array = array("user_id"=> $check_delegate_main->user_id,"sme_id"=> $insert_data);
			$insert_all = $this->delicate_signup_m->insert_all($all_array);
			$del_name = $check_delegate_main->firstname ." ".$check_delegate_main->lastname;

			$smbData=$this->order_process_m->fetch_sme($insert_data);
			$smb_company=$smbData->company_name;

			$del_message = $this->emailtemplate->deligate_questioniare_basics_else_email($delegate_email,$del_name,$firstname,$lastname,$delegate_key,$smb_company);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($delegate_email); 

			$this->email->subject('Delegate User Request-ProtectBox');
			$this->email->message($del_message);    

			$okay = $this->email->send();
		}else{

			$smbData=$this->order_process_m->fetch_sme($insert_data);
				$smb_company=$smbData->company_name;

			$delegate_array = array('sme_id' => $insert_data, 'delicate_email' => $delegate_email, 'delicate_key' =>$delegate_key , 'status' => 'inactive', 'date' => $date);
			$insert_delegate = $this->signup_m->add_delegate($delegate_array);

			$del_message = $this->emailtemplate->deligate_questioniare_basics_if_email($delegate_email,$firstname,$lastname,$delegate_key,$smb_company);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($delegate_email); 

			$this->email->subject('Registration Confirmation-ProtectBox');
			$this->email->message($del_message);    

			$okay = $this->email->send();
		}

		//admin email starts
			$admin_email = array();
			$admin_fullname = 'Admin';
			foreach($get_admins as $fetch_admin){
				$admin_email[] = $fetch_admin->email;
			}
			$email_to = implode(',', $admin_email);
			$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type,$smb_company);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($email_to);
			$this->email->subject('New Delegate Registration');
			$this->email->message($admin_message); 

			$okay = $this->email->send();
		//admin email ends
		redirect('questionaire');
	}
	
	function sendMailTest(){
		$this->load->model("order_process_m");
		$this->load->library('m_pdf');

		//Mail to user starts
			$message = $this->emailtemplate->admin_return_supplier('789','GBP','14675.00','test service','test smb','prateek.rathore@yashco.com','test supplier');
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to('prateek.rathore@yashco.com'); 

			$this->email->subject('Admin email for supplier subscription');
			$this->email->message($message);    

			$okay = $this->email->send();

			if ($okay) {
				echo 'mail send';
			} else {
				echo 'Invalid mail';
			}
		//Mail to user ends

	}
	function cronJobsEmails(){
		$OrderDate=date('10-02-2020');
		$Today=date('d-m-Y');

		// add 3 days to date
		$thirdDate=Date('d-m-Y', strtotime($OrderDate. ' + 3 days')) ;
		$sevenDate=Date('d-m-Y', strtotime($OrderDate. "+7 days")) ;
		$fourteenDate=Date('d-m-Y', strtotime($OrderDate. "+14 days")) ;
		$twentyOneDate=Date('d-m-Y', strtotime($OrderDate. "+21 days"));

		if($thirdDate==$Today){

			echo 'it been 3rd day ,but still you did not subscribe email';
		}else if($sevenDate==$Today){

			echo 'it been 7th day ,but still you did not subscribe email';
		}else if($fourteenDate==$Today){

			echo 'Today is 14 day ,but still you did not subscribe email';
		}else if($twentyOneDate==$Today){

			echo 'it been 20 day ,but still you did not subscribe email';
		}

	}
}
?>