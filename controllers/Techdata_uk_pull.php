<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Techdata_uk_pull extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->library('Emailtemplate');

		$this->data['instance_ip'] = 'http://3.15.197.16/td_uk_pull/';

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
		$data['instance_id'] = $this->data['instance_ip'];
		$this->load->view('techdata_uk_pull',$data);
	}
	
	public function refresh_div(){
		$this->load->model('admin_dashboard_m');
		$get_all_sync_data = $this->admin_dashboard_m->get_all_sync_data();
		$json_encode = json_encode($get_all_sync_data,true);
		echo $json_encode;
	}

	public function send_email_tduk(){
		$this->load->model('admin_dashboard_m');
		$fetch_records = $this->admin_dashboard_m->get_records();
		$records_id = $fetch_records->td_pull_records_id;
		$total_products = $fetch_records->total_records;

		$totat_product_updated = $fetch_records->mapped_records + $fetch_records->unmapped_records;

		if($fetch_records->mapped_records == ''){
			$active_product = '0';
		}else{
			$active_product = $fetch_records->mapped_records;
		}

		if($fetch_records->unmapped_records == ''){
			$new_product = '0';
		}else{
			$new_product = $fetch_records->unmapped_records;
		}
		
		if($fetch_records->email_status == '' && $fetch_records->status == 'Successfull')
		{
			$get_all_admin = $this->admin_dashboard_m->all_admin();

			foreach($get_all_admin as $fetch_admin){
				$admin_name = $fetch_admin->firstname.' '.$fetch_admin->lastname;
				$admin_email = $fetch_admin->email;
				
				$message = $this->emailtemplate->td_uk_daily_email_two($admin_name,$total_products);
				$this->load->library('email', $config);
				$this->email->from('noreply@protectbox.com','Protectbox');
				$this->email->to($admin_email);
				$this->email->subject('TD UK Data pulling complete');
				$this->email->message($message);
				$this->email->set_mailtype("html"); 
				$send_email = $this->email->send();
				if($send_email){
					$order_message = $this->emailtemplate->td_uk_daily_email($admin_name,$totat_product_updated,$active_product,$new_product);

					$this->load->library('email', $config);
					$this->email->from('noreply@protectbox.com','Protectbox');
					$this->email->to($admin_email);
					$this->email->subject('TD UK Active product select complete');
					$this->email->message($order_message);
					$this->email->set_mailtype("html"); 

					$this->email->attach($this->data['instance_ip'].'unmapped/'.$fetch_records->xls_file_name.'');
					$smb_email = $this->email->send();
				}
			}

			$td_records = array(
				'status' => 'Completed'
			); 
			$update_td_record = $this->admin_dashboard_m->update_records_td_admin($td_records,$records_id);
		}
		redirect(base_url('/admin_dashboard'));
		
	}
	
	public function fetch_scrape_data(){
		$this->load->model('admin_dashboard_m');
		$service_provider = 'TechData UK';
		$get_all_scrape_data = $this->admin_dashboard_m->get_all_scrape_data($service_provider);
		$get_all_data = $this->admin_dashboard_m->total_services_admin_dash();
		$unscrape_data = $get_all_data - $get_all_scrape_data;
		$array = array('all' => $get_all_data, 'scrape' => $get_all_scrape_data, 'unscrape' => $unscrape_data);
		$json_encode = json_encode($array,true);
		echo $json_encode;
	}


	/************************** NOT USED ***********************************/
	/*public function tduk_pull(){
		$url = 'http://18.188.169.206/td_uk_pull';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTREDIR, 3);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		print_r($result);
	}

	public function fetch_loader_uk(){
		$this->load->model('techdata_pull_m');
		$get_all_sync_data = $this->techdata_pull_m->get_all_sync_data();
		$json_encode = json_encode($get_all_sync_data,true);
		echo $json_encode;
	}

	public function send_email_tduk(){
		$this->load->model('techdata_pull_m');
		$fetch_records = $this->techdata_pull_m->get_records();
		$records_id = $fetch_records->td_pull_records_id;
		$total_products = $fetch_records->total_records;

		$totat_product_updated = $fetch_records->mapped_records + $fetch_records->unmapped_records;

		if($fetch_records->mapped_records == ''){
			$active_product = '0';
		}else{
			$active_product = $fetch_records->mapped_records;
		}

		if($fetch_records->unmapped_records == ''){
			$new_product = '0';
		}else{
			$new_product = $fetch_records->unmapped_records;
		}
		
		if($fetch_records->email_status == '' && $fetch_records->status == 'Successfull')
		{
			$get_all_admin = $this->techdata_pull_m->all_admin();

			foreach($get_all_admin as $fetch_admin){
				$admin_name = $fetch_admin->firstname.' '.$fetch_admin->lastname;
				$admin_email = $fetch_admin->email;
				
				$message = $this->emailtemplate->td_uk_daily_email_two($admin_name,$total_products);
				$this->load->library('email', $config);
				$this->email->from('noreply@protectbox.com','Protectbox');
				//$this->email->to($admin_email);
				$this->email->to('sweezit92@gmail.com');
				$this->email->subject('TD UK Data pulling complete');
				$this->email->message($message);
				$this->email->set_mailtype("html"); 
				$send_email = $this->email->send();
				if($send_email){
					$order_message = $this->emailtemplate->td_uk_daily_email($admin_name,$totat_product_updated,$active_product,$new_product);

					$this->load->library('email', $config);
					$this->email->from('noreply@protectbox.com','Protectbox');
					//$this->email->to($admin_email);
					$this->email->to('sweezit92@gmail.com');
					$this->email->subject('TD UK Active product select complete');
					$this->email->message($order_message);
					$this->email->set_mailtype("html"); 

					$this->email->attach('http://18.188.169.206/td_uk_pull/unmapped/'.$fetch_records->xls_file_name.'');
					$smb_email = $this->email->send();
				}
				break;
			}

			$td_records = array(
				'status' => 'Completed'
			); 
			$update_td_record = $this->techdata_pull_m->update_records_td_admin($td_records,$records_id);
		}
	}

	public function delete_txt(){

		$url = 'http://18.188.169.206/td_uk_pull/zip_sql/delete_txt';
		$user_data = array(
			'user_id' => $this->session->userdata['logged_in']['user_id']
		);
		$payload = json_encode($user_data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);

		print_r($result);
	}*/
	/************************** NOT USED ***********************************/
}