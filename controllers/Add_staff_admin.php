<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_staff_admin extends CI_Controller {
	
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
		$this->load->view('add_staff_admin');
	}

	public function add_staff()
	{
		$this->load->model('add_staff_admin_m');
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
			/* SMB Leads Starts */
			if($this->input->post('smb_edit') != 'YES')
			{
				$manage_smb_edit = '';
			}
			else{
				$manage_smb_edit = $this->input->post('smb_edit');
			}

			if($this->input->post('smb_edit_only') != 'YES')
			{
				$manage_smb_edit_only = '';
			}
			else{
				$manage_smb_edit_only = $this->input->post('smb_edit_only');
			}

			if($this->input->post('smb_review') != 'YES')
			{
				$manage_smb_review = '';
			}
			else{
				$manage_smb_review = $this->input->post('smb_review');
			}
		/* SMB Leads Ends */

		/* SMB Orders Starts */
			if($this->input->post('smb_orders_edit') != 'YES')
			{
				$manage_smb_orders_edit = '';
			}
			else{
				$manage_smb_orders_edit = $this->input->post('smb_orders_edit');
			}

			if($this->input->post('smb_orders_edit_only') != 'YES')
			{
				$manage_smb_orders_edit_only = '';
			}
			else{
				$manage_smb_orders_edit_only = $this->input->post('smb_orders_edit_only');
			}

			if($this->input->post('smb_orders_review') != 'YES')
			{
				$manage_smb_orders_review = '';
			}
			else{
				$manage_smb_orders_review = $this->input->post('smb_orders_review');
			}
		/* SMB Orders Ends */

		/* SMB Refund Request Starts */
			if($this->input->post('smb_refund_request_edit') != 'YES')
			{
				$manage_smb_refund_request_edit = '';
			}
			else{
				$manage_smb_refund_request_edit = $this->input->post('smb_refund_request_edit');
			}

			if($this->input->post('smb_refund_request_edit_only') != 'YES')
			{
				$manage_smb_refund_request_edit_only = '';
			}
			else{
				$manage_smb_refund_request_edit_only = $this->input->post('smb_refund_request_edit_only');
			}

			if($this->input->post('smb_refund_request_review') != 'YES')
			{
				$manage_smb_refund_request_review = '';
			}
			else{
				$manage_smb_refund_request_review = $this->input->post('smb_refund_request_review');
			}
		/* SMB Refund Request End */

		/* Supplier Pricing / Ordering Starts */
			if($this->input->post('supplier_pricing_edit') != 'YES')
			{
				$manage_supplier_pricing_edit = '';
			}
			else{
				$manage_supplier_pricing_edit = $this->input->post('supplier_pricing_edit');
			}

			if($this->input->post('supplier_pricing_only') != 'YES')
			{
				$manage_supplier_pricing_only = '';
			}
			else{
				$manage_supplier_pricing_only = $this->input->post('supplier_pricing_only');
			}

			if($this->input->post('supplier_pricing_review') != 'YES')
			{
				$manage_supplier_pricing_review = '';
			}
			else{
				$manage_supplier_pricing_review = $this->input->post('supplier_pricing_review');
			}
		/* Supplier Pricing / Ordering Ends */

		/* Supplier Descriptions Starts */
			if($this->input->post('supplier_desc_edit') != 'YES')
			{
				$manage_supplier_desc_edit = '';
			}
			else{
				$manage_supplier_desc_edit = $this->input->post('supplier_desc_edit');
			}

			if($this->input->post('supplier_desc_only') != 'YES')
			{
				$manage_supplier_desc_only = '';
			}
			else{
				$manage_supplier_desc_only = $this->input->post('supplier_desc_only');
			}

			if($this->input->post('supplier_desc_review') != 'YES')
			{
				$manage_supplier_desc_review = '';
			}
			else{
				$manage_supplier_desc_review = $this->input->post('supplier_desc_review');
			}
		/* Supplier Descriptions Ends */

		
		$date = time();
		$records = array(
							"user_type" => 'admin',
							"firstname" => $firstname,
							"lastname" => $lastname,
							"email" => $email,
							"phone" => $phone,
							"password" => $password,
							"registration_date" => $date
						);

		$check_previous = $this->add_staff_admin_m->check_user($email);
		if($check_previous < 1)
		{
			$insert_users_id = $this->add_staff_admin_m->add_user($records);
			if($insert_users_id!= "")
			{
				$roles = array(
							"staff_admin_id" => $insert_users_id,
							"smb_leads_edit" => $manage_smb_edit,
							"smb_leads_edit_only" => $manage_smb_edit_only,
							"smb_leads_review" => $manage_smb_review,
							"smb_orders_edit" => $manage_smb_orders_edit,
							"smb_orders_edit_only" => $manage_smb_orders_edit_only,
							"smb_orders_review" => $manage_smb_orders_review,
							"smb_refund_request_edit" => $manage_smb_refund_request_edit,
							"smb_refund_request_edit_only" => $manage_smb_refund_request_edit_only,
							"smb_refund_request_review" => $manage_smb_refund_request_review,
							"supplier_price_edit" => $manage_supplier_pricing_edit,
							"supplier_price_edit_only" => $manage_supplier_pricing_only,
							"supplier_price_review" => $manage_supplier_pricing_review,
							"supplier_desc_edit" => $manage_supplier_desc_edit,
							"supplier_desc_edit_only" => $manage_supplier_desc_only,
							"supplier_desc_review" => $manage_supplier_desc_review

						);
				$insert_staff_role = $this->add_staff_admin_m->add_staff_role($roles);
				if($insert_staff_role)
				{
					$this->session->set_flashdata("success", "You have created new staff admin successfully!");
	                redirect('add_staff_admin');
				}else{
					$this->session->set_flashdata("failed", "Something went wrong! Try again later");
	                redirect('add_staff_admin');
				}
			}else{
				$this->session->set_flashdata("failed", "Something went wrong! Try again later");
	            redirect('add_staff_admin');
			}
			//$this->load->view('add_staff_admin');
		}
		else{
			$this->session->set_flashdata("email_failed", "This email already exists as a username. Please either log in using that username or set up a new, different username");
	        redirect('add_staff_admin');
		}
		
	}

}

/* End of file Add_staff_admin.php */
/* Location: ./application/controllers/Add_staff_admin.php */