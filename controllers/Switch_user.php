<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Switch_user extends CI_Controller {

	public function index()
	{
		$this->load->model('login_m');
		$this->load->model('questionaire_m');
		$sess_data = $this->session->userdata['logged_in'];
		
		$user_id = $sess_data['user_id'];

		$check_user = $this->login_m->check_user($user_id);
		$sess_data['user_type'] = $check_user->user_type;
		$array_new = array('currency' => 'GBP');
		$merge = array_merge($sess_data,$array_new);
		$this->session->set_userdata('logged_in',$merge);
		if($check_user->user_type == 'Small and medium business'){
			$get_basic = $this->questionaire_m->row_check($user_id);
			$get_tech = $this->questionaire_m->tech_row($user_id);
			$get_non_tech = $this->questionaire_m->tech_non_tech($user_id);
			$get_budget = $this->questionaire_m->tech_budget($user_id);
			$get_orders = $this->login_m->smb_orders($user_id);

			if($get_basic < 1)
			{
				redirect('questionaire');
			}
			else if($get_basic > 0 && $get_tech < 1)
			{
				redirect('questionaire');
			}
			else if($get_basic > 0 && $get_tech > 0 && $get_non_tech < 1)
			{
				redirect('questionaire_tech_info');
			}
			else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget < 1)
			{
				redirect('questionaire_nontech_info');
			}
			else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders < 1)
			{
				redirect('results');
			}
			else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders > 0)
			{
				redirect('questionniare_results');
			}
		}else if($check_user->user_type == 'Supplier'){
			redirect('edit_solution');
		}
		
	}

	public function delegate()
	{
		$this->load->model('delicate_login_m');
		$sess_data = $this->session->userdata['logged_in'];
		$email = $sess_data['email'];
		$check_delegate = $this->delicate_login_m->delicate_check($email);
		unset($sess_data['currency']);
		$user_id = $sess_data['user_id'];
		$sess_data['user_type'] = 'delegate';
		
		$this->session->set_userdata('logged_in',$sess_data);
		
		if($check_delegate->access != ''){
			$array = explode(',',$check_delegate->access);
			if(in_array('basic',$array))
			{
				redirect('delegate_questionaire');
			}else{
				if(in_array('tech',$array))
				{
					redirect('delegate_questionaire_tech_info');
				}else{
					if(in_array('non_tech',$array))
					{
						redirect('delegate_questionaire_nontech_info');
					}else{
						if(in_array('budget',$array))
						{
							redirect('delegate_questionaire_budget');
						}
					}
				}
			}
		}else{
			redirect('delegate_questionaire');
		}
		
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */