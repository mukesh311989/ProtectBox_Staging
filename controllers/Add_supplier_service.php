<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_supplier_service extends CI_Controller {

	public function index()
	{
		$this->load->model('add_supplier_service_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		/* category list*/
		$data['get_categories'] = $this->add_supplier_service_m->get_all_categories();
		/* category list ends*/

		/* currency list*/
		$data['get_currency'] = $this->add_supplier_service_m->get_all_currency();
		/* currency list ends*/

		/*basic supplier information *//*basic supplier information */
		$get_supplier_information = $this->add_supplier_service_m->check_supplier_details($user_id);
		
		$check_rows = sizeof($get_supplier_information);
		if($check_rows > 0){
			$data['supplier_detail'] = $get_supplier_information;
		}else{
			$data['supplier_detail'] = array();
		}
		/* basic supplier information ends */

		/*basic services information */
		if($user_id != '52'){
			$get_services_information = $this->add_supplier_service_m->get_services_details($user_id);
		}else{
			$get_services_information = array();
		}

		$check_rows = sizeof($get_services_information);
		if($check_rows > 0){
			$data['services_detail'] = $get_services_information;
		}else{
			$data['services_detail'] = array();
		}
		/* basic services information ends */

		$this->load->view('add_supplier_service',$data);
	}

	public function add_supplier(){

		$this->load->model('add_supplier_service_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$solution_category = $this->input->post('solution_category');
		$implode_solution_category = implode(',',$solution_category);

		$supplier_data = array(
			'user_id' => $user_id,
			'supplier_name' => $this->input->post('supplier_name'),
			'supplier_package_price' => $this->input->post('price_solution'),
			'supplier_categories' => $implode_solution_category,
			'supplier_bundle_with' => $this->input->post('supplier_bundle_with'),
			'email_alert' => $this->input->post('email_receive')
		);
		
		exit;

	}

}

/* End of file Add_supplier_service.php */
/* Location: ./application/controllers/Add_supplier_service.php */