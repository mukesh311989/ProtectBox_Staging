<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMBCoupons extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */
		public function __construct() {
			parent::__construct();	
			//$this->load->library('Emailtemplate');
				if(!$this->session->userdata['logged_in']['user_id']){
					redirect('login');
				}

		}
		public function index()
		{
			$this->load->model("smbcoupons_m");
			$data['coupons'] = $this->smbcoupons_m->fetch_all_coupons();
			$this->load->view('smbcoupons',$data);
		}
		
		public function add(){
			$this->load->model("smbcoupons_m");
			$this->load->view('smbcoupons_add',$data);
		}

		public function add_data(){
			$this->load->model("smbcoupons_m");
			$coupon_code = $this->input->post('coupon_code');
			$discount_type = $this->input->post('discount_type');
			$discount_value = $this->input->post('discount_value');
			$coupon_expiry_date = "";
			$date_created = time();
		    $records = array(
				"coupon_id" => NULL,
				"coupon_code" => $coupon_code,
				"discount_type" => $discount_type,
				"discount_value" => $discount_value,
				"coupon_expiry_date" => $coupon_expiry_date,
				"date_created" => $date_created
			);

			$data = $this->smbcoupons_m->add_data_coupn($records);
			redirect('smbcoupons');
		}
		public function del(){
			$this->load->model("smbcoupons_m");
			$coupon_id = $this->uri->segment(3);
			$rm_coupon = $this->smbcoupons_m->del_coupon($coupon_id);
			if($rm_coupon){
				redirect('smbcoupons');
			}else{
				redirect('smbcoupons');
			}
		}

}
?>