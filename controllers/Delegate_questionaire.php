<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delegate_questionaire extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
		/*$this->load->model('delicate_login_m');
		$sme_id = $this->uri->segment(2);
		$check_del = $this->delicate_login_m->check_del($this->session->userdata['logged_in']['user_id'],$sme_id);
		if($check_del < 1){
            redirect('error_page');
        }*/
    }

	public function index()
	{
		
		$this->load->model('questionaire_m');
		$sme_id = $this->uri->segment(2);
		$del_id = $this->session->userdata['logged_in']['user_id'];
		$get_sme = $this->questionaire_m->get_sme_id($del_id);
		
		$data['basics_data'] = $this->questionaire_m->fetch_basic($sme_id);
		$data['delegate_data'] = $get_sme->access;
		$data['progress'] = $this->progress($sme_id);
		$data['questions'] = $this->questionaire_m->get_questions($this->session->userdata['logged_in']['user_id'],$sme_id);
		$this->load->view('delegate_questionaire',$data);
	}
	
	public function progress($sme_id){
		$this->load->model('questionaire_m');
		$get_info_progress_tab_one = $this->questionaire_m->progress_tab_one($sme_id);
		if(isset($this->session->userdata['progress_data'])){
			$pro_quest_tab_score = $this->session->userdata['progress_data'];
		}else{
			$pro_quest_tab_score = 0;
		}
		$q1 = 0;
		$q2 = 0;
		$q3 = 0;
		$q4 = 0;
		$q5 = 0;
		$q6 = 0;
		$q7 = 0;
		$q8 = 0;
		$q9 = 0;
		if($get_info_progress_tab_one->industry_input != ""){$q1 = 1.67;}
		if($get_info_progress_tab_one->employees_input != ""){$q2 = 1.67;}
		if($get_info_progress_tab_one->location_input != ""){$q3 = 1.67;}
		if($get_info_progress_tab_one->location_business_input != ""){$q4 = 1.67;}
		if($get_info_progress_tab_one->handle_data_input != ""){$q5 = 1.67;}
		if($get_info_progress_tab_one->individuals_input != ""){$q6 = 1.67;}
		if($get_info_progress_tab_one->sme_business_input != ""){$q7 = 1.67;}
		if($get_info_progress_tab_one->enterprise_input != ""){$q8 = 1.67;}
		if($get_info_progress_tab_one->governments_input != ""){$q9 = 1.67;}
		
		$pro_data = round($q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9);
		$check_pro_exists = $this->questionaire_m->progress_check($sme_id);
		if($check_pro_exists < 1){
			$add_prog_onetab = array(
				'user_id' => $sme_id,
				'tab_one' => $pro_data,
				'tab_two' => '',
				'tab_three' => '',
				'tab_four' => ''
			);
			$inset_progress_tabone = $this->questionaire_m->progress_add_tabone($add_prog_onetab);
		}else{
			$add_prog_onetab = array(
				'tab_one' => $pro_data
			);
			$inset_progress_tabone = $this->questionaire_m->progress_update_tabone($add_prog_onetab,$sme_id);
		}
		if($inset_progress_tabone){
			$get_data_progress = $this->questionaire_m->view_prog_data($sme_id);
		}

		return $get_data_progress;
	}

	public function add_info()
    {
        $this->load->model('questionaire_m');
		$user_id = $this->uri->segment(3);
		
        $get_sme = $this->questionaire_m->get_sme_id($this->session->userdata['logged_in']['user_id']);
		
		
		$val = $this->input->post('sub_val');

		$fetch_all = $this->questionaire_m->fetch_basic($user_id);
        $check_del = $this->questionaire_m->check_question($this->session->userdata['logged_in']['user_id'],$user_id);

		//industry start
		
		if($check_del->industry_input == '1'){
			if($this->input->post('industry') == '')
			{
				$industry = "";
			}else{
				$industry = $this->input->post('industry');
			}
		
			
		  
			if($industry == 'Computer and Electronics' || $industry == 'Manufacturing' || $industry == 'Retail' || $industry == 'Wholesale and Distribution')
			{
			   $industry_score = "1";
			}
			else if($industry == 'Government')
			{
			   $industry_score = "2";
			}
			else if($industry == 'Business Services' || $industry == 'Financial Services')
			{
			   $industry_score = "3";
			}
			else if($industry == 'Agriculture and Mining' || $industry == 'Consumer Services' || $industry == 'Education' || $industry == 'Energy' || $industry == 'Health, Pharmaceuticals, and Biotech' || $industry == 'Media and Entertainment' || $industry == 'Non-profit' || $industry == 'Real Estate and Construction' || $industry == 'Software and Internet' || $industry == 'Telecommunications' || $industry == 'Transportation and Storage' || $industry == 'Travel Recreation and Leisur' || $industry == 'Other-profit')
			{
			   $industry_score = "4";
			}
		}else{
			
			if($fetch_all->industry_input == '')
			{
				$industry = '';
			}else{
				$industry = $fetch_all->industry_input;
			}

			if($fetch_all->industry_score == '')
			{
				$industry_score = '';
			}else{
				$industry_score = $fetch_all->industry_score;
			}
		}
		//industry end
		
		
        //employees start
		if($check_del->employees_input == '1'){
			if($this->input->post('employees') == '')
			{
				$employees = "";
			}else{
				$employees = $this->input->post('employees');
			}
		}else{
			if($fetch_all->employees_input == '')
			{
				$employees = '';
			}else{
				$employees = $fetch_all->employees_input;
			}
		}
		//employees end
        
		//location start
		if($check_del->location_input == '1'){
			if($this->input->post('located') == '')
			{
				$located = "";
			}else{
				$located = implode(',',$this->input->post('located'));
			}

			if($this->input->post('location_business') == '')
			{
				$location_business = "";
			}else{
				$location_business = implode(',',$this->input->post('location_business'));
			}
		}else{
			if($fetch_all->location_input == '')
			{
				$located = '';
			}else{
				$located = $fetch_all->location_input;
			}

			if($fetch_all->location_business_input == '')
			{
				$location_business = '';
			}else{
				$location_business = $fetch_all->location_business_input;
			}
		}
		//location end


		//handle date start
		if($check_del->location_input == '1'){
			if($this->input->post('handle_data') == '')
			{
				$handle_data = "";
			}else{
				$handle_data = $this->input->post('handle_data');
			}

			if($this->input->post('budget_individual') == '')
			{
				$budget_individual = "";
			}else{
				$budget_individual = $this->input->post('budget_individual');
			}

			if($this->input->post('sme') == '')
			{
				$sme = "";
			}else{
				$sme = $this->input->post('sme');
			}

			if($this->input->post('enterprise') == '')
			{
				$enterprise = "";
			}else{
				$enterprise = $this->input->post('enterprise');
			}

			if($this->input->post('governments') == '')
			{
				$governments = "";
			}else{
				$governments = $this->input->post('governments');
			}
		}else{
			if($fetch_all->handle_data_input == '')
			{
				$handle_data = '';
			}else{
				$handle_data = $fetch_all->handle_data_input;
			}

			if($fetch_all->individuals_input == '')
			{
				$budget_individual = '';
			}else{
				$budget_individual = $fetch_all->individuals_input;
			}

			if($fetch_all->sme_business_input == '')
			{
				$sme = '';
			}else{
				$sme = $fetch_all->sme_business_input;
			}

			if($fetch_all->enterprise_input == '')
			{
				$enterprise = '';
			}else{
				$enterprise = $fetch_all->enterprise_input;
			}

			if($fetch_all->governments_input == '')
			{
				$governments = '';
			}else{
				$governments = $fetch_all->governments_input;
			}
		}
		//handle data end


        $date = time();
        $total_added_score = $industry_score;
		
		
		
        $records = array(
                            'user_id' => $user_id,
                            'industry_input' => $industry,
                            'industry_score' => $industry_score,
                            'employees_input' => $employees,
                            'employees_score' => "",
                            'location_input' => $located,
                            'location_score' => "",
                            'location_business_input' => $location_business,
                            'location_business_score' => "",
                            'handle_data_input' => $handle_data,
                            'handle_data_score' => "",
                            'individuals_input' => $budget_individual,
                            'individuals_score' => "",
                            'sme_business_input' => $sme,
                            'sme_business_score' => "",
                            'enterprise_input' => $enterprise,
                            'enterprise_score' => "",
                            'governments_input' => $governments,
                            'governments_score' => "",
                            'total_score'=> $total_added_score,
                            'date' => $date
                        );
        $check_row = $this->questionaire_m->row_check($user_id);
        if($check_row > 0)
        {
            $update_data = $this->questionaire_m->data_update($records,$user_id);
			
            if($update_data)
            {
				
				
                if($val == "continue")
                {
					$get_next_info = $this->questionaire_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					
					if($get_next_info > 0)
					{
						redirect('delegate_questionaire_tech_info/'.$user_id.'');
					}else{
						$this->session->set_flashdata("update", "Success , Your basics updated successfully!");
						 redirect('delegate_questionaire/'.$user_id.'');
					}
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
                
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while updating!");
                redirect('delegate_questionaire');
            }
        }
        else{
            $insert_data = $this->questionaire_m->data_insert($records);
            if($insert_data)
            {
				
                if($val == "continue")
                {
                    $get_next_info = $this->questionaire_m->next_info($this->session->userdata['logged_in']['user_id'],$user_id);
					//print_r($get_next_info);
					
					if($get_next_info > 0)
					{
						redirect('delegate_questionaire_tech_info/'.$user_id.'');
					}else{
						$this->session->set_flashdata("update", "Success , Your basics updated successfully!");
						 redirect('delegate_questionaire/'.$user_id.'');
					}
                }
                else if($val == "logout")
                {
                    redirect('logout');
                }
            }else{
                $this->session->set_flashdata("failed", "Something went wrong while submitting!");
                redirect('delegate_questionaire/'.$user_id.'');
            }
        }
    }

}

/* End of file delegate_questionaire.php */
/* Location: ./application/controllers/delegate_questionaire.php */