<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_staff extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_staff_m');
		$staff_id = $this->uri->segment(2);
		$data["fetch_staff"] = $this->edit_staff_m->fetch_staff_details($staff_id);
		$this->load->view('edit_staff', $data);
	}

	public function update_staff()
	{
		$this->load->model('edit_staff_m');
		$staff_id = $this->uri->segment(3);
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$phone = $this->input->post('phone');
		$roll_idz = $this->input->post('roll_idz');
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

		$records = array(
							"firstname" => $firstname,
							"lastname" => $lastname,
							"phone" => $phone,
						);
		$update_user = $this->edit_staff_m->user_update($records,$staff_id);
		if($update_user)
		{
			$roles = array(
							"role_id" => $roll_idz,
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
			$update_role = $this->edit_staff_m->roles_update($roles,$staff_id);
			if($update_role)
			{
				$this->session->set_flashdata("success", "You have successfully updated staff admin!");
	            redirect('edit_staff/'.$staff_id);
			}else{
				$this->session->set_flashdata("failed", "Something went wrong! Try again later");
	            redirect('edit_staff/'.$staff_id);
			}
		}else{
				$this->session->set_flashdata("failed", "Something went wrong! Try again later");
	            redirect('edit_staff/'.$staff_id);
		}
	}

}

/* End of file Edit_staff.php */
/* Location: ./application/controllers/Edit_staff.php */