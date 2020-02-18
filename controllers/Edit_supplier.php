<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_supplier extends CI_Controller {

	function __construct(){
        parent::__construct();
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
		$this->load->model('edit_supplier_m');
		$user_id = $this->uri->segment(2);
		$data["supplier_data"] = $this->edit_supplier_m->fetch_supplier_info($user_id);
		$this->load->view('edit_supplier',$data);	
	}

	public function update_data(){

		$this->load->model('edit_supplier_m');
        $user_id = $this->uri->segment(3);
        $user_type = $this->input->post('user_type');
        $company_name = $this->input->post('company_name');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $records = array(
        				'user_type'=>$user_type,
                        'company_name'=>$company_name,
                        'firstname'=> $firstname,
                        'lastname'=> $lastname,
                        'email'=> $email,
                        'phone'=> $phone,
                        'address'=> $address
                    );
       
        $update_data = $this->edit_supplier_m->update_supplier($user_id,$records);
        if($update_data)
        {
            $this->session->set_flashdata("success", "Success , Supplier profile updated successfully!");
            redirect('edit_supplier/'.$user_id);
        }else{
            $this->session->set_flashdata("failed", "Something went wrong!");
            redirect('edit_supplier/'.$user_id);
        }
	}

}

/* End of file Edit_supplier.php */
/* Location: ./application/controllers/Edit_supplier.php */