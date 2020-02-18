<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire_budget extends CI_Controller {

    function __construct(){
        parent::__construct();

        $IP=$_SERVER['HTTP_X_FORWARDED_FOR'];
		$this->$ipdat = @json_decode(file_get_contents( 
		    "http://www.geoplugin.net/json.gp?ip=" . $IP));

		$user_type = $this->session->userdata['logged_in']['user_type'];

		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}
  		
		$this->load->library('Emailtemplate');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
     }

    public function index()
    {   
        $this->load->model('questionaire_budget_m');
        $user_id = $this->session->userdata['logged_in']['user_id'];

         /* budget information insertion by user check */
        $get_questioniare_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
        //$check_rows = count($get_questioniare_budget);
        
        if(!empty($get_questioniare_budget)){
            $data['budget_detail'] = $get_questioniare_budget;
        }else{
            $data['budget_detail'] = array();
        }
        /* currency list*/
        $data['get_currency'] = $this->questionaire_budget_m->get_all_currency();
        /* currency list ends*/
        /* budget information insertion by user check ends */
		$data['del_access'] = $this->check_del_access($user_id);
		$data['progress'] = $this->progress();
	
        $this->load->view('questionaire_budget',$data);
		
    }
	
	public function progress(){
	  $user_id = $this->session->userdata['logged_in']['user_id']; 
	  $this->load->model('questionaire_budget_m');
	  $get_info_progress_tab_four = $this->questionaire_budget_m->progress_tab_four($user_id);
	  if(isset($this->session->userdata['progress_data'])){
	  	 $pro_quest_tab_score = $this->session->userdata['progress_data'];
	  }else{
	  	 $pro_quest_tab_score = 0;
	  }
	  $q1=0;$q2=0;$q3=0;$q4=0;$q5=0;$q6=0;$q7=0;$q8=0;$q9=0;$q10=0;$q11=0;$q12=0;$q13=0;$q14=0;$q15=0;$q16=0;$q17=0;$q18=0;$q19=0;$q20=0;

	  if(!empty($get_info_progress_tab_four->amount_cybersecurity_input)){$q1 = 0.5;}
	  if(!empty($get_info_progress_tab_four->percentage_annual_budget_input)){$q2 = 0.5;}
	  if(!empty($get_info_progress_tab_four->budget_cybersecurity_per_year_input)){$q3 = 0.5;}
	  if(!empty($get_info_progress_tab_four->paid_for_input)){$q4 = 0.5;}
	  if(!empty($get_info_progress_tab_four->preferred_budget_breakdown_currency_input)){$q5 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_operating_system_input)){$q6 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_internet_input)){$q7 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_antivirus_input)){$q8 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_firewall_input)){$q9 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_access_control_input)){$q10 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_protecting_data_input)){$q11 = 0.5;}
	  if(!empty($get_info_progress_tab_four->tech_mssp_input)){$q12 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_business_continuity_input)){$q13 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_training_input)){$q14 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_accredation_input)){$q15 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_reputation_management_input)){$q16 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_password_policy_input)){$q17 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_devices_input)){$q18 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_vpn_input)){$q19 = 0.5;}
	  if(!empty($get_info_progress_tab_four->non_tech_consultancy_input)){$q20 = 0.5;}
	 	  
	  $pro_data = round($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q14+$q15+$q16+$q17+$q18+$q18+$q20);
	  /*$this->session->set_userdata('progress_data',$pro_data);*/
	  $progress_four = array(
			"user_id"=>	 $user_id,
			"tab_four" => $pro_data
		 );

		$check_progress_row = $this->questionaire_budget_m->check_row_progress($user_id);
		
		 if($check_progress_row > 0){
            $progress_tab_four_data = $this->questionaire_budget_m->update_progress_four($progress_four,$user_id);
        }else{
            $progress_tab_four_data = $this->questionaire_budget_m->insert_progress_four($progress_four);
        }
		
		if($progress_tab_four_data){
			$view_data = $this->questionaire_budget_m->get_progress_data($user_id);
		}

  		return $view_data;
	 }

    public function add_questioniare_budget()
    {
        $this->load->model('questionaire_budget_m'); 
        if($this->input->post('budget_paid') == ''){
			$implode_budget_paid = '';
		}else{
			$budget_paid = $this->input->post('budget_paid');
			$implode_budget_paid = implode(',',$budget_paid);
		}

		if($this->input->post('currency') == ''){
			$currency = 'GBP';
		}else{
			$currency = $this->input->post('currency');
		}
        
        $date = time();
        $add_budgets = array(
            'user_id' => $this->session->userdata['logged_in']['user_id'],
            'amount_cybersecurity_input'=> $this->input->post('budget_cyber_security'), 
            'percentage_annual_budget_input'=> $this->input->post('budget_annual'), 
            'budget_cybersecurity_per_year_input'=> $this->input->post('budget_per_year'),
            'paid_for_input' => $implode_budget_paid,
            'preferred_budget_breakdown_currency_input'=> $currency,
            'tech_operating_system_input'=> $this->input->post('tech_os'),
            'tech_internet_input'=> $this->input->post('tech_internet'),
            'tech_antivirus_input'=> $this->input->post('tech_antivirus'),
            'tech_firewall_input'=> $this->input->post('tech_firewall'), 
            'tech_access_control_input'=> $this->input->post('tech_access_control'),
            'tech_protecting_data_input'=> $this->input->post('tech_protect_data'),
            'tech_mssp_input'=> $this->input->post('tech_mssp'),
            'non_tech_business_continuity_input'=> $this->input->post('ntech_continuity_procedure'),
            'non_tech_training_input'=> $this->input->post('ntech_training'), 
            'non_tech_accredation_input'=> $this->input->post('ntech_regulation'), 
            'non_tech_reputation_management_input'=> $this->input->post('ntech_reputation'),
            'non_tech_password_policy_input'=> $this->input->post('ntech_pass_policy'),
            'non_tech_devices_input'=> $this->input->post('ntech_devices'),
            'non_tech_vpn_input'=> $this->input->post('ntech_vpn'),
            'non_tech_consultancy_input'=> $this->input->post('ntech_implementation'),
            'date' => $date
        );
        $user_id = $this->session->userdata['logged_in']['user_id'];
        $check_row = $this->questionaire_budget_m->check_questioniare_budget($user_id);
        
        if($check_row > 0)
        {
            $update_data = $this->questionaire_budget_m->questioniare_budget_update($add_budgets,$user_id);
            if($update_data)
            {
                if($this->input->post('save_continue') == "continue")
                {
                    //redirect('bundle_json');
                	redirect('unanswered_questions');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
              /*  else if($this->input->post('save_continue') == "previous")
                {
                	redirect('questionaire_nontech_info');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
                redirect('questionaire_budget');
            }
        }
        else{
            $insert_budget_data = $this->questionaire_budget_m->insert_budget_info($add_budgets);
            if($insert_budget_data)
            {
                if($this->input->post('save_continue') == "continue")
                {
                    //redirect('bundle_json');
                	redirect('unanswered_questions');
                }
                else if($this->input->post('save_continue') == "return")
                {
                    redirect('logout');
                }
               /* else if($this->input->post('save_continue') == "previous")
                {
                	redirect('questionaire_nontech_info');
                }*/
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
                redirect('questionaire_budget');
            }
        }
    }

	public function add_delegate()
    {
        $this->load->model('manage_delegates_m');
    	$this->load->model('signup_m');
		$this->load->model('delicate_signup_m');
		$this->load->model('questionaire_m');
        $this->load->model('profile_m');

        $delegate_email = $this->input->post('delegate_mail');
    	$user_id = $this->session->userdata['logged_in']['user_id'];
    	$delegate_key = rand(10000000,99999999);
    	$date = time();

        $check_delegate_email = $this->manage_delegates_m->get_access($delegate_email,$user_id);
    	if(!empty($check_delegate_email)){
    		// Same delegate email cannot be added
    		$this->session->set_flashdata("del_failed", "This account holder or delegate user already exists as a username. Please either log in using that username or set up a new, different username.");
			redirect('questionaire_budget');
    	}else{
    		// Giving access to the new delegate
    		$get_admins = $this->signup_m->get_admins();
    		$check_delegate_main = $this->signup_m->check_delegate_main($delegate_email);
				if(!empty($check_delegate_main)){
					if($check_delegate_main->user_type == 'Small and medium business'){
						$delegate_type = 'sme_with';
						$user_type ='Small and medium business';
					}else if($check_delegate_main->user_type == 'Supplier'){
						$delegate_type = 'supplier_with';
						$user_type ='Supplier';
					}else if($check_delegate_main->user_type == 'admin'){
						$this->session->set_flashdata("del_admin", "This account holder or delegate user already exists as a admin. Please set up a new, different username.");
						redirect('questionaire_budget');
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
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type);
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
					redirect('questionaire_budget');
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
					$user_type ='';
					//admin email starts
					foreach($get_admins as $fetch_admin){
						$del_name = '';
						$admin_fullname = $fetch_admin->firstname ." ". $fetch_admin->lastname;
						$admin_email = $fetch_admin->email;
						$admin_message = $this->emailtemplate->delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($admin_email); 

						$this->email->subject('New Delegate Registration | ProtectBox');
						$this->email->message($admin_message);    

						$okay = $this->email->send();
					}
					//admin email ends
					$this->session->set_flashdata("del_success", "You have successfully sent an invitation to a new delegate user. Please ask them to check their email inbox & Junk folder (adding noreply@protectbox.com to their address book). They need to register to complete the question.");
					redirect('questionaire_budget');
				}
    	}
		
    }

	public function delegate_assign_budget()
	{
		$this->load->model('questionaire_budget_m');
		$this->load->model('questionaire_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$delegate_id = $this->input->post('del');
		$key = $this->input->post('key');
		$update_array = $this->input->post('update_array');

		$fetch_del_user = $this->questionaire_budget_m->fetch_del_user($user_id,$delegate_id);
		$access_array = explode(",",$fetch_del_user->access);

		$get_del_info = $this->questionaire_m->fetch_delegate_info($delegate_id);
		$delegate_mail = $get_del_info->email;
		$del_name = $get_del_info->firstname.' '.$get_del_info->lastname;

		$username = $this->session->userdata['logged_in']['name'];
		
		
		if (!in_array("budget", $access_array))
		{
			array_push($access_array,"budget");
			$main_array = implode(",",$access_array);
			$update_del_user = $this->questionaire_budget_m->update_del_user($main_array,$delegate_id);
		}
		
		$save_del_accss = $this->questionaire_budget_m->sav_del_acs($update_array);

		if($key == 'amount_cybersecurity_input')
		{
		?>
			<select class="form-control del_cybersecurity"  style="width:50%;display:none" onchange="get_delegate(this.value,'amount_cybersecurity_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_budget_m->get_assign_del($user_id);
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->amount_cybersecurity_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->amount_cybersecurity_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}
		else if($key == 'percentage_annual_budget_input')
		{
		?>
			<select class="form-control del_annual_budget"  style="width:50%;display:none" onchange="get_delegate(this.value,'percentage_annual_budget_input',<?php echo $user_id; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_budget_m->get_assign_del($user_id);
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->percentage_annual_budget_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->percentage_annual_budget_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}
		else if($key == 'budget_cybersecurity_per_year_input')
		{
		?>
			<select class="form-control del_cybersecurity_year"  style="width:50%;display:none" onchange="get_delegate(this.value,'budget_cybersecurity_per_year_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_budget_m->get_assign_del($user_id);
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->budget_cybersecurity_per_year_input; ?>" ><?php echo $name;?></option>  
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->budget_cybersecurity_per_year_input == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}
		else if($key == 'budget_paid')
		{
		?>
			<select class="form-control budget_paid"  style="width:50%;display:none" onchange="get_delegate(this.value,'budget_paid',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_budget_m->get_assign_del($user_id);
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->other_payment; ?>" ><?php echo $name;?></option>   
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->other_payment == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}
		else if($key == 'budget_breakdown')
		{
		?>
			<select class="form-control budget_breakdown"  style="width:15%;display:none" onchange="get_delegate(this.value,'budget_breakdown',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">  
				<option selected disabled>Select Delegate</option> 
		<?php
			$this->load->model('questionaire_m');
			$get_delegate_info = $this->questionaire_budget_m->get_assign_del($user_id);
			 if(sizeof($get_delegate_info) > 0)
			 {
				 foreach($get_delegate_info as $del_result)
				 {
					 $get_del_name = $this->questionaire_m->get_sme($del_result->user_id);
					 if(sizeof($get_del_name) > 0)
					 {
						 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
					 }else{
						 $name = $del_result->delicate_email;
					 }
			?>
				<option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->budget_breakdown; ?>" ><?php echo $name;?></option> 
			<?php
				 }
				 }
			 ?>
				<option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
		   </select>
		  <?php
		  $get_assign_del = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
		  if(sizeof($get_assign_del) > 0)
		  {
			  foreach($get_assign_del as $assign_del)
			  {
				  if($assign_del->budget_breakdown == 1)
				  {
					  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
					  if(sizeof($del_name) > 0)
					  {
						  $name = $del_name->firstname.' '.$del_name->lastname;
					  }else{
						  $name = $del_name->email;
					  }
					  echo "<code style='margin-right: 10px;'>".$name."</code>";
				  }
			  }
		  }
		  $this->email_send_delegate($delegate_email,$del_name,$username);
		}
	}

	public function email_send_delegate($delegate_email,$del_name,$username){	
		$this->load->model('order_process_m');
		$this->load->library('email');
		$this->email->set_mailtype("html");

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$smbData=$this->order_process_m->fetch_sme($user_id);
		$smb_company=$smbData->company_name;
		
		$assign_message = $this->emailtemplate->deligate_assign_question($delegate_email,$del_name,$username,$smb_company);

		$this->email->from('noreply@protectbox.com', 'Protectbox');
		$this->email->to($delegate_email); 

		$this->email->subject('New Delegate Question-ProtectBox');
		$this->email->message($assign_message);    

		$okay = $this->email->send();
	}

	public function check_del_access($user_id){	
		$this->load->model('questionaire_budget_m');
		$get_question_access_val = $this->questionaire_budget_m->fetch_delegate_accesstwo_val($user_id);
		return $get_question_access_val;
	}
}
?>