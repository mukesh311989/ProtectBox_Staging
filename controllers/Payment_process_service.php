<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_process_service extends CI_Controller {
    
	 public function __construct() {
        parent::__construct();	
		//$this->load->library('stripegateway');	
		if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "admin"){
            redirect('error_page');
        }
		$this->data['currencyCode'] = 'GBP';
	}

    
    public function index()
    {
		$this->load->model('payment_process_service_m');

		$data["message"] = "";
		$user_id = $this->session->userdata['logged_in']['user_id'];
    	$data['td_part'] = $this->uri->segment(2);
		$data['service_data'] = $this->payment_process_service_m->service_data_fetch($data['td_part']);
		$data['bundle_id'] = $data['service_data']->supplier_service_id;
        $this->load->model('results_m');
        $data['currencyCode'] = $this->data['currencyCode'];

		$fetch_currency_symbol = $this->payment_process_service_m->currency_code($data['currencyCode']);
		$data['currencySymbol'] = $fetch_currency_symbol->symbol;

		$this->load->view('payment_process_service',$data);
		/* Sorting category of bundle Ends */

        
    }
	public function remove_cpn(){
		SESSION_START();
		$this->session->unset_userdata('coupon');
		return true;
	}

	public function addcoupn(){
		$this->load->model("payment_process_service_m");
		echo $cpn_code = $this->input->post('coupon_code');
		echo $bundle_id = $this->input->post('bundle_id');
		
		$check_cpn_code = $this->payment_process_service_m->get_cpn($cpn_code);
		$count_arr = count($check_cpn_code);
		if($count_arr > 0){
			foreach($check_cpn_code As $val_cpn){
				$coupon = array(
				'coupon_code' => $val_cpn->coupon_code,
				'discount_type' => $val_cpn->discount_type,
				'discount_value' => $val_cpn->discount_value
				);
			}
			$this->session->set_userdata("coupon",$coupon);
			$this->session->set_flashdata("coupon_success", "Your coupon applied successfully");
			
		}else{
			$coupon = array();
			$this->session->set_flashdata("coupon_invalid", "Your coupon code is invalid");
				
		}
		redirect('payment_process_service/'.$bundle_id.'');
		/*
		
		print_r($check_cpn_code);*/
	}

	
	public function sme_subscribe()
	{
		$sub_check = $this->input->post('subscribes');
		$bundle_id = $this->input->post('bundle_id');
		
		if($sub_check != '')
		{
			$subscribe = array(
				'sub_code' => $sub_check
				);
			$this->session->set_userdata("subscription",$subscribe);
			redirect('payment_process_service/'.$bundle_id.'');

		}
		else
		{
			$this->session->unset_userdata("subscription");
			
			
			redirect('payment_process_service/'.$bundle_id.'');
		}
		
		
	}
}
?>