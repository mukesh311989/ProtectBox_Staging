<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_smb extends CI_Controller {

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
		$this->load->model('edit_smb_m');
		$user_id = $this->uri->segment(2);
		$data['country'] = $this->edit_smb_m->fetch_country();
		$data["smb_data"] = $this->edit_smb_m->fetch_smb_info($user_id);
		$this->load->view('edit_smb',$data);
	}

	public function update_data(){

		$this->load->model('edit_smb_m');
        $user_id = $this->uri->segment(3);
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
            redirect('edit_smb/'.$user_id);
        }else{
            $this->session->set_flashdata("failed", "Something went wrong!");
            redirect('edit_smb/'.$user_id);
        }
	}
}

/* End of file Smb_edit_orders.php */
/* Location: ./application/controllers/Smb_edit_orders.php */