<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Smb_india extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
        $this->load->library("pagination");
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		 if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
     }
     
	public function index()
	{
		$this->load->model('view_sme_m');

		$config['base_url'] = base_url() . 'smb_india';
		$config['first_url'] = '1';
		$config['total_rows'] = $this->db->where('user_type','Small and medium business')->count_all_results('user');
		$config['per_page'] = 10;
		$config["uri_segment"] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">'; 
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = "<li class='paginate_button'>";
		$config['first_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li class='paginate_button'>";
		$config['prev_tag_close'] = "</li>";
		$config['next_tag_open'] = "<li class='paginate_button'>";
		$config['next_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li class='paginate_button'>";
		$config['last_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='paginate_button active'><a href='page-link'>"; 
		$config['cur_tag_close'] = "</a></li>";
		$config['num_tag_open'] = "<li class='paginate_button'>";
		$config['num_tag_close'] = "</li>";
		$config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

		$page = (($this->uri->segment(2)) ? $this->uri->segment(2) : 0)*$config['per_page'];

        $data["links"] = $this->pagination->create_links();

        $data['all_sme'] = $this->view_sme_m->fetch_all_smes($config["per_page"], $page);
		$this->load->view('view_smb_india',$data);
	}

	public function update_status(){
        $this->load->model('view_sme_m');
        $user_id = $this->input->post('user_id');
        $status = $this->input->post('status_val');

        if($status == '1'){
			$updated_status = '0';
		}else if($status == '0'){
			$updated_status = '1';
		}
        $status_update = $this->view_sme_m->update_user_status($user_id,$updated_status);
		echo $updated_status;
    }

     public function edit_smb_india($user_id)
	{
		$this->load->model('edit_smb_m');
		//$user_id = $this->uri->segment(4);
		
		$data['country'] = $this->edit_smb_m->fetch_country();
		$data["smb_data"] = $this->edit_smb_m->fetch_smb_info($user_id);
		$this->load->view('edit_smb_india',$data);
	}

	public function update_data($user_id){

		$this->load->model('edit_smb_m');
        //$user_id = $this->uri->segment(3);
        $user_type = $this->input->post('user_type');
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
        $records = array(
        				'user_type'=>$user_type,
                        'company_name'=>$company_name,
                        'firstname'=> $firstname,
                        'lastname'=> $lastname,
                        'email'=> $email,
                        'phone'=> $phone,
                        'address1'=> $address1,
						'address2'=> $address2,
						'city'=> $city,
						'state'=> $state_province,
						'postal_code'=> $postal_code,
						'country'=> $country
                    );
       
        $update_data = $this->edit_smb_m->update_user($user_id,$records);
        if($update_data)
        {
            $this->session->set_flashdata("success", "Success , SMB profile updated successfully!");
            redirect('smb_india/edit_smb_india/'.$user_id);
        }else{
            $this->session->set_flashdata("failed", "Something went wrong!");
            redirect('smb_india/edit_smb_india/'.$user_id);
        }
	}


	public function view_smb_india_questionnaire()
	{
		$this->load->model('questionniare_results_m');
		$user_id = $this->uri->segment(3);
		$data["get_basic_answars"] = $this->questionniare_results_m->get_basic_answars($user_id);
		$data["get_tech_answars"] = $this->questionniare_results_m->get_tech_answars($user_id);
		$data["get_nontech_answars"] = $this->questionniare_results_m->get_nontech_answars($user_id);
		$data['get_budget_answars'] = $this->questionniare_results_m->get_budget_answars($user_id);
		$this->load->view('view_smb_questionnaire',$data);
	}


   

}
/* End of file View_suppliers.php */
/* Location: ./application/controllers/View_suppliers.php */