<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

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

	public function index(){
		
		set_time_limit(0);
		ini_set('memory_limit','1024M');

		// Total suppliers registered in user table
		$this->load->model('admin_dashboard_m');
        $this->load->model('admin_role_m');
        $data['get_admin_info'] = $this->admin_role_m->fetch_admin($this->session->userdata['logged_in']['user_id']);
		$data['total_suppliers'] = $this->admin_dashboard_m->total_supplier_info_dash();
		$data['all_suppliers'] = $this->admin_dashboard_m->fetch_new_suppliers();

		// Total suppliers active in supplier_additional_info table
		$data['active_suppliers'] = $this->admin_dashboard_m->active_supplier_info_dash();

		// Total suppliers active in supplier_additional_info table
		$data['total_customers'] = $this->admin_dashboard_m->total_customer_info_dash();
		$data['all_sme'] = $this->admin_dashboard_m->fetch_new_smes();

		// Total suppliers active in supplier_additional_info table
		$data['active_customers'] = $this->admin_dashboard_m->active_customer_info_dash();
		$data['get_all_services'] = $this->admin_dashboard_m->all_new_services();

		// Total services active in supplier_service table
		$data['services'] = $this->admin_dashboard_m->total_services_admin_dash();
		$data['active_services'] = $this->admin_dashboard_m->total_active_services_admin_dash();

		/*echo "service_count---->".$data['services'];
		echo "<br>";
		echo "active service_count---->".$data['active_services'];
		exit;*/
		
		// Total orders in orders table
		$data['orders'] = $this->admin_dashboard_m->total_orders_dash();
		$data['active_orders'] = $this->admin_dashboard_m->total_active_orders_dash();
		$data['fetch_all_orders'] = $this->admin_dashboard_m->all_new_orders();

		$this->load->view('admin_dashboard',$data);
	}

	public function custom_order(){
		$td_part = $this->input->post('td_part');
		redirect('payment_process_service/'.$td_part);
	}
}

/* End of file Admin_dashboard.php */
/* Location: ./application/controllers/Admin_dashboard.php */