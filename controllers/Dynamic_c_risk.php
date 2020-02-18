<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_c_risk extends CI_Controller {

	public function index()
	{
		$this->load->model('dynamic_c_risk_m');
		$data['fetch_c_risk'] = $this->dynamic_c_risk_m->fetch_c_risk_scores();
		$this->load->view('dynamic_c_risk',$data);
	}

	public function update_c_risk(){
		$this->load->model('dynamic_c_risk_m');
		$c_risk_id = $this->input->post('c_risk_id');
		$c_risk_row_name = $this->input->post('row_name');
		$c_risk_score = $this->input->post('score_of_c_risk');
		$previous_score = $this->input->post('previous_score');
		
		if($c_risk_row_name == 'accreditation_regulation'){
			$records = array(
				"accreditation_regulation" => $c_risk_score,
				"previous_acc_reg" => $previous_score
			);
		}else
		if($c_risk_row_name == 'ad_blocking'){
			$records = array(
				"ad_blocking" => $c_risk_score,
				"previous_ad_blocking " =>$previous_score
			);
		}else
		if($c_risk_row_name == 'antivirus'){
			$records = array(
				"antivirus" => $c_risk_score,
				"previous_antivirus " =>$previous_score
			);
		}else
		if($c_risk_row_name == 'audit'){
			$records = array(
				"audit" => $c_risk_score,
				"previous_audit" => $previous_score
			);
		}else
		if($c_risk_row_name == 'authentication'){
			$records = array(
				"authentication" => $c_risk_score,
				"previous_authentication" => $previous_score
			);
		}else
		if($c_risk_row_name == 'cisp'){
			$records = array(
				"cisp" => $c_risk_score,
				" previous_cisp" => $previous_score
			);
		}else
		if($c_risk_row_name == 'consultancy_implementation'){
			$records = array(
				"consultancy_implementation" => $c_risk_score,
				"previous_consultancy_implemation" => $previous_score
			);
		}else
		if($c_risk_row_name == 'cybersecurity_insurance'){
			$records = array(
				"cybersecurity_insurance" => $c_risk_score,
				"previous_cyber_inc" => $previous_score
			);
		}else
		if($c_risk_row_name == 'data_storage'){
			$records = array(
				"data_storage" => $c_risk_score,
				"previous_data_storage " => $previous_score
			);
		}else
		if($c_risk_row_name == 'device_management'){
			$records = array(
				"device_management" => $c_risk_score,
				"previous_device_menagement" =>$previous_score
			);
		}else
		if($c_risk_row_name == 'email_security'){
			$records = array(
				"email_security" => $c_risk_score,
				"previous_email_security " => $previous_score
			);
		}else
		if($c_risk_row_name == 'encryption'){
			$records = array(
				"encryption" => $c_risk_score,
				"previous_encryption" => $previous_score
			);
		}else
		if($c_risk_row_name == 'firewall'){
			$records = array(
				"firewall" => $c_risk_score,
				"previous_firewall" => $previous_score
			);
		}else
		if($c_risk_row_name == 'internet'){
			$records = array(
				"internet" => $c_risk_score,
				"previous_internet" => $previous_score
			);
		}else
		if($c_risk_row_name == 'ids'){
			$records = array(
				"ids" => $c_risk_score,
				"previous_ids" => $previous_score
			);
		}else
		if($c_risk_row_name == 'logs'){
			$records = array(
				"logs" => $c_risk_score,
				"previous_logs" => $previous_score

			);
		}else
		if($c_risk_row_name == 'mssp'){
			$records = array(
				"mssp" => $c_risk_score,
				"previous_mssp" => $previous_score
			);
		}else
		if($c_risk_row_name == 'microsoft_i_o_directory'){
			$records = array(
				"microsoft_i_o_directory" => $c_risk_score,
				"previous_microsoft_i_o_directory " => $previous_score
			);
		}else
		if($c_risk_row_name == 'os'){
			$records = array(
				"os" => $c_risk_score,
				"previous_os" => $previous_score
			);
		}else


		if($c_risk_row_name == 'password_policy'){
			$records = array(
				"password_policy" => $c_risk_score,
				"previous_password_policy" => $previous_score
			);
		}else
		if($c_risk_row_name == 'police'){
			$records = array(
				"police" => $c_risk_score,
				"previous_police" => $previous_score
			);
		}else
		if($c_risk_row_name == 'patching_software'){
			$records = array(
				"patching_software" => $c_risk_score,
				"previous_patching_software" => $previous_score
			);
		}else
		if($c_risk_row_name == 'physical_security'){
			$records = array(
				"physical_security" => $c_risk_score,
				"previous_physical_security" => $previous_score
			);
		}else
		if($c_risk_row_name == 'proxy'){
			$records = array(
				"proxy" => $c_risk_score,
				"previous_proxy" => $previous_score
			);
		}else
		if($c_risk_row_name == 'pki'){
			$records = array(
				"pki" => $c_risk_score,
				"previous_pki" => $previous_score
			);
		}else
		if($c_risk_row_name == 'sdns'){
			$records = array(
				"sdns" => $c_risk_score,
				"previous_sdns" => $previous_score
			);
		}else
		if($c_risk_row_name == 'spam_filtering'){
			$records = array(
				"spam_filtering" => $c_risk_score,
				"previous_spam_filtering " => $previous_score
			);
		}else
		if($c_risk_row_name == 'system_hardware'){
			$records = array(
				"system_hardware" => $c_risk_score,
				"previous_system_hardware" => $previous_score
			);
		}else
		if($c_risk_row_name == 'threat_prevention'){
			$records = array(
				"threat_prevention" => $c_risk_score,
				"previous_threat_prevention" => $previous_score
			);
		}else
		if($c_risk_row_name == 'tiered_user_access'){
			$records = array(
				"tiered_user_access" => $c_risk_score,
				"previous_tired_user" => $previous_score
			);
		}else
		if($c_risk_row_name == 'training'){
			$records = array(
				"training" => $c_risk_score,
				"previous_training" => $previous_score
			);
		}


		$update_score_of_c_risk = $this->dynamic_c_risk_m->update_risk_c_score($c_risk_id,$records);
	}

}

/* End of file Dynamic_c_risk.php */
/* Location: ./application/controllers/Dynamic_c_risk.php */