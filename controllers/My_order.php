<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_order extends CI_Controller {
    function __construct(){
        parent::__construct();
		
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
		if(!$this->session->userdata['logged_in']['email']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
		$this->load->library('Emailtemplate');	
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will 
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html 
     */
    public function index()
    {
		$this->load->model('my_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["order_data"] = $this->my_order_m->fetch_order($user_id);
		$data['get_it'] = $this->my_order_m->check_payment($user_id);
	
		
		$this->load->view('my_order',$data);
    }

	public function save_rating()
    {
		$this->load->model('my_order_m');
		$sme_id = $this->session->userdata['logged_in']['user_id'];
		$supplier_id = $this->input->post("supplier_id");
        $order_id = $this->input->post("order_id");
		$service_id = $this->input->post("service_id");
		
		$rating_value = $this->input->post("rating_value");
		$review = $this->input->post("review");
		$date = time();
		$records = array(
                    'sme_id' => $sme_id,
                    'order_id' => $order_id,
                    'supplier_id' => $supplier_id,
					'service_id' => $service_id,
                    'rating' => $rating_value,
                    'review' => $review,
                    'orders_date' => $date
                );
		$insert_rating = $this->my_order_m->save_rating($records);
		if($insert_rating)
		{
			redirect('my_order');
		}
    }

	public function refund_request()
	{
		$this->load->model('my_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		//echo $get_count = $this->my_order_m->check_payment($user_id);
		//exit;

		$currency = $this->input->post('bank_currency');

		if($this->input->post('iban_eur') != ''){
			$iban_eur = $this->input->post('iban_eur');
		}else{
			$iban_eur = "";
		}
		if($this->input->post('sort_code_gbp') != ''){
			$sort_code_gbp = $this->input->post('sort_code_gbp');
		}else{
			$sort_code_gbp = "";
		}
		if($this->input->post('account_number_gbp') != ''){
			$account_number_gbp = $this->input->post('account_number_gbp');
		}else{
			$account_number_gbp = "";
		}
		if($this->input->post('account_type_usd') != ''){
			$account_type_usd = $this->input->post('account_type_usd');
		}else{
			$account_type_usd = "";
		}
		if($this->input->post('account_number_usd') != ''){
			$account_number_usd = $this->input->post('account_number_usd');
		}else{
			$account_number_usd = "";
		}
		if($this->input->post('routing_number_usd') != ''){
			$routing_number_usd = $this->input->post('routing_number_usd');
		}else{
			$routing_number_usd = "";
		}

		//bank input details
		/*$bank_name = $this->input->post('bank_name');
		$branch_name = $this->input->post('branch_name');
		$ifsc_code = $this->input->post('ifsc');
		$account_number = $this->input->post('account_number');*/

		$insert_array = array(
							"user_id" => $user_id,
							"currency" => $currency,
							"iban_eur" => $iban_eur,
							"sort_code_gbp" => $sort_code_gbp,
							"account_number_gbp" => $account_number_gbp,
							"account_type_usd" => $account_type_usd,
							"account_number_usd" => $account_number_usd,
							"routing_number_usd" => $routing_number_usd,
							"bank_priority" => 0
						 );

		$get_count = $this->my_order_m->count_payment($user_id);
		if($get_count == 0)
		{
			
			$smb_payment_method = $this->my_order_m->insert_payment($insert_array);
		}
		else
		{
			$smb_payment_method = $this->my_order_m->update_payment($insert_array,$user_id);
		}
		if($smb_payment_method)
		{

		$order_id  = $this->input->post('order_id');
		$service_id = $this->input->post('service_id');
		$refund_date = time();
		$status  = "seller_payment_pending";
		$admin_id = '24';
		$admin_details = $this->my_order_m->supp_info($admin_id);

		$records=array(
						'order_id'=>$order_id,
						'service_id'=> $service_id,
						'smb_id'=>$user_id,
						'refund_date'=>$refund_date,
						'refund_status'=>$status
					);
		//print_r($records);
		//exit;
		$refund_request_it = $this->my_order_m->insert_request($records);
		
		//order updated for refund start
		$this->load->model('order_details_m');
		$fetch_order = $this->order_details_m->get_order_details($order_id);

		$sup_pay_status = explode(',',$fetch_order->sup_payment_status);
		$sup_service_array = explode(',',$fetch_order->supplier_service_id);
		$key = array_search($service_id, $sup_service_array);
		$sup_pay_status[$key] = 'Refund_requested';
		$new_sup_pay_status = implode(',',$sup_pay_status);

		$update_order = $this->my_order_m->update_order($new_sup_pay_status,$order_id);
		//order updated for refund start

		//Supplier transaction updated for refund start
		$update_sup_trans = $this->my_order_m->update_sup_trans($order_id,$service_id);
		//Supplier transaction updated for refund end

		if($refund_request_it){

			$get_cus_details = $this->my_order_m->cus_details($this->session->userdata['logged_in']['user_id']);
			$smb_email = $get_cus_details->email;
			$cus_phone = $get_cus_details->phone;
			$cus_fullname = $get_cus_details->firstname . " " . $get_cus_details->lastname;
			$get_service_name = $this->my_order_m->fetch_service_name($service_id);
			$serv_name = $get_service_name->service_name;
			$price_detail = $get_service_name->price_detail;
			$price_cuurency = $get_service_name->currency;
			$get_supplier_details = $this->my_order_m->supp_details($service_id);
			$service_name = $get_supplier_details->service_name;
			
			// SMB Email Starts
				$smb_message = $this->emailtemplate->smb_refund_request($cus_fullname,$smb_email,$order_id,$serv_name,$price_detail,$price_cuurency);
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'Protectbox');
				$this->email->to($smb_email); 
				$this->email->subject('Refund Request In ProtectBox');
				$this->email->message($smb_message);    
				$okay = $this->email->send();
			// SMB Email Ends 
			
			// Team@protectbox.com email starts
				$admin_fullname = 'Admin';
				$admin_email = 'team@protectbox.com';
				$admin_message = $this->emailtemplate->admin_refund_request($admin_fullname,$service_name,$order_id,$serv_name,$price_detail,$price_cuurency,$smb_email,$cus_phone);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($admin_email); 

				$this->email->subject('Refund Request In ProtectBox');
				$this->email->message($admin_message);
				$this->email->send();
			// Team@protectbox.com email ends

			// Admin Email Starts
				$this->load->model('signup_m');
				$get_admins = $this->signup_m->get_admins();
				foreach($get_admins as $fetch_admin){
					$admin_fullname = $fetch_admin->firstname . " " . $fetch_admin->lastname;
					$admin_message = $this->emailtemplate->admin_refund_request($admin_fullname,$service_name,$order_id,$serv_name,$price_detail,$price_cuurency,$smb_email,$cus_phone);
		
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('noreply@protectbox.com', 'Protectbox');
					$this->email->to($fetch_admin->email); 
					$this->email->subject('Refund Request In ProtectBox');
					$this->email->message($admin_message);    
					$okay_admin = $this->email->send();
				}
			// Admin Email Ends
			
			$this->session->set_flashdata("success", "Your Refund Request is Successfully Submited!");
			redirect('my_order');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('my_order');
		}
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('my_order');
		}
		
	}
}
?>