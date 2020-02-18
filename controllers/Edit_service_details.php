<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_service_details extends CI_Controller {

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
		$this->load->model('edit_service_details_m');
		$service_id = $this->uri->segment(3);
		$get_service_details_yoo = $this->edit_service_details_m->get_details($service_id);

		$category = $get_service_details_yoo->product_category;
		$get_check_category = $this->edit_service_details_m->check_category($category);

		if($get_check_category == 0)
		{
			$records = array('category_name' => $category);
			$insert_category = $this->edit_service_details_m->inset_new_category($records);
		}

		$data['get_categories'] = $this->edit_service_details_m->get_all_categories();
		$data['get_currency'] = $this->edit_service_details_m->get_all_currency();
		$data['get_service_details'] = $get_service_details_yoo;
		$this->load->view('edit_service_details',$data);

	}

	public function add_service()
	{		$this->load->model('edit_service_details_m');
			$service_id = $this->input->post('service_id');
			$user_idzzz = $this->input->post('user_id');
			$date = time();
			$user_id = $this->session->userdata['logged_in']['user_id'];
				if(isset($_FILES['userFiles']['name']) && $_FILES['userFiles']['name'] != ""){
						$_FILES['userFiles']['name'] = $_FILES['userFiles']['name'];
						$_FILES['userFiles']['type'] = $_FILES['userFiles']['type'];
						$_FILES['userFiles']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
						$_FILES['userFiles']['error'] = $_FILES['userFiles']['error'];
						$_FILES['userFiles']['size'] = $_FILES['userFiles']['size'];

						$uploadPath = 'uploads/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('userFiles')){
							$fileData = $this->upload->data();
							$uploadData['file_name'] = $fileData['file_name'];
							echo 
							$uploadData['created'] = date("Y-m-d H:i:s");
							$uploadData['modified'] = date("Y-m-d H:i:s");
						}
					}
					else
					{
						$uploadData['file_name'] = '';
						}
					$more_service_data = array(
						'logo' => $uploadData['file_name'],
						'supplier_name' => $this->input->post('new_supplier_name'),
						'service_name' => $this->input->post('new_service_name'),
						'customer_type' => $this->input->post('customer_type'),
						'product_category'=> $this->input->post('solution_category'),
						'product_detail'=>$this->input->post('product_detailzz'),
						'currency' => $this->input->post('price_currency'),
						'price_range' => $this->input->post('price_range'),
						'price_detail' => $this->input->post('price_details'),
						'operating_system'=> $this->input->post('operating_system'),
						'specialist_hardware' => $this->input->post('specialist_hardware'),
						'third_party_supplier' => $this->input->post('third_party_software'),
						'ease_of_setup' => $this->input->post('ease_setup'),
						'protection_level' => $this->input->post('protection_level'),
						'product_link' => $this->input->post('product_link'),
						'commission_detail' => $this->input->post('commission_detail'),
						'payment_option' => $this->input->post('payment_option'),
						'govt_voucher' => $this->input->post('government_voucher'),
						'cashback' => $this->input->post('cash_back'),
						'rating' => $this->input->post('rating_ranking'),
						'location' => $this->input->post('location_service'),
						'regulation'=> $this->input->post('regulation'),
						'user_instruction' => $this->input->post('instruction_details'),
						'service_provider' => $this->input->post('service_provide'),
						'service_stockcode' => $this->input->post('stock_code'),
						'net_price' => $this->input->post('net_price'),
						'prodclass' => $this->input->post('produc_class'),
						'easeofinstallation' => $this->input->post('ease_install'),
						'virtual' => $this->input->post('virtual'),
						'unit' => $this->input->post('unit'),
						'upload_date' => $date,
						'status' => '1'
						
					);
					$insert_service = $this->edit_service_details_m->update_service($more_service_data,$service_id);
					if($insert_service){
							$this->session->set_flashdata("success", "Success , You Have Added Service Successfuly!");
							redirect('service_details/'.$user_idzzz.'');
					}else{
							$this->session->set_flashdata("failed", "Something went wrong!");
							redirect('service_details/'.$user_idzzz.'');
					}
			}

}

/* End of file Edit_service_details.php */
/* Location: ./application/controllers/Edit_service_details.php */