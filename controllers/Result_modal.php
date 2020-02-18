<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result_modal extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->library('data/Openrange');
		$this->load->library('data/Scrap');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }

	public function open_modal()
	{
		$this->load->model('result_modal_m');
		$service_id = $this->input->post('service_id');
	
		$data['fetch_service_data'] = $this->result_modal_m->fetch_services($service_id);
		
		$td_part = $data['fetch_service_data']->td_part;
		$import_status = $data['fetch_service_data']->openrange;	
		$service_provider = $data['fetch_service_data']->service_provider;
		
		if($import_status != ''){
			// For Techdata UK and Techdata US

			if($import_status == 'mapped'){
				// For mapped with openrange

				$data['fetch_ice_cat_data'] = $this->result_modal_m->fetch_icecat($td_part);
				$spec_array = array();
				for($i=1;$i<=189;$i++){
					$spec_var = "SPEC_".$i;
					if($data['fetch_ice_cat_data']->$spec_var != ''){
						$spec_array[] = $data['fetch_ice_cat_data']->$spec_var;
					}
				}
				$data['array_specs'] = $spec_array;
				$this->load->view('result_modal',$data);

			}else if($import_status == 'scraped'){
				// For scrapped from Techdata

				$data['fetch_ice_cat_data'] = $this->result_modal_m->fetch_scrap_data($td_part,$service_provider);
				$this->load->view('result_modal_scrap',$data);
			}

		}else{
			// For other service providers
			$data['fetch_ice_cat_data'] = $this->result_modal_m->fetch_icecat($td_part);
			$spec_array = array();
			for($i=1;$i<=189;$i++){
				$spec_var = "SPEC_".$i;
				if($data['fetch_ice_cat_data']->$spec_var != ''){
					$spec_array[] = $data['fetch_ice_cat_data']->$spec_var;
				}
			}
			$data['array_specs'] = $spec_array;
			$this->load->view('result_modal',$data);
		}
	}
}
?>