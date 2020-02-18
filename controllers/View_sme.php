<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class View_sme extends CI_Controller {

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

		$config['base_url'] = base_url() . 'view_sme';
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
		$this->load->view('view_sme',$data);
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


    function smb_india(){
    	$this->load->model('view_sme_m');

		$config['base_url'] = base_url() . 'view_sme';
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
		$this->load->view('view_sme',$data);
    }

}
/* End of file View_suppliers.php */
/* Location: ./application/controllers/View_suppliers.php */