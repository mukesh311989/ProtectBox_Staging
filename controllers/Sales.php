<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	function __construct(){
        
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Supplier"){
            redirect('error_page');
        }
		$this->load->library('Emailtemplate');
	
    }
    public function index()
    {
		$this->load->model('sales_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["order_data"] = $this->sales_m->fetch_order($user_id);

		$get_unique_cat_from_serv = array();
        $get_unique_services = array();

		if($user_id != 54 && $user_id != 52){
			
			$data['all_services'] = $this->total_services($this->session->userdata['logged_in']['user_id']);
			$data['supplier_services'] = $this->sales_m->supplier_servicezz($user_id);

			foreach($data['all_services'] As $n_all_serivces){
				$n = $n_all_serivces;
				$b = $this->sales_m->unique_cats($n);
				$get_unique_cat_from_serv[] = $b->product_category;
			 }

			  /* Total services added by supplier starts */
				foreach($data['supplier_services'] AS $each_supplier_servicez){
					$get_unique_services[] = $each_supplier_servicez->product_category;
				}
				$data['cat_from_orders'] = array_count_values($get_unique_cat_from_serv);
				$data['cat_from_services'] = array_count_values($get_unique_services);
			 /* Total services added by suppliers ends */

			  $data['unique_mycat'] = array_unique($get_unique_cat_from_serv);


			  /* FOR GRAPH STARTS */
				$get_all_country_names = array();
				$get_all_categories = array();
				foreach($data['all_services'] AS $each_services){
					$country = $this->sales_m->fetch_supplier_servicezz($each_services);
					$get_all_country_names[] = $country->location;
					$get_all_categories[] = $country->product_category;
				}
				$data['all_country_names'] = array_unique($get_all_country_names);
				$data['countrywise_categories'] = array_unique(array_count_values($get_all_categories));        
			 /* FOR GRAPH ENDS */
		}else{
			
			$data['cat_from_orders'] = array();
			$data['cat_from_services'] = array();
			$data['unique_mycat'] = array();
			$data['all_country_names'] = array();
			$data['countrywise_categories'] = array();
		}
		
        $data['subscribed_supplier'] = $this->sales_m->subscription_info($user_id);
        $data['subscription_data'] = $this->sales_m->all_subscription_data($user_id);
        $data['ratings_data'] = $this->sales_m->all_ratings_data($user_id);
		$data['currency'] = $this->session->userdata['logged_in']['currency'];


         
		 $this->load->view('sales',$data);
    }

    public function subscription(){
		$this->load->model('sales_m');
        $data["supplier_data"] = $this->sales_m->fetch_supplier_info($user_id);
        
    }


	public function sales_details()
	{
		$this->load->model('sales_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$order_id = $this->uri->segment(3);
		$data['fetch_order'] = $this->sales_m->get_order_details($order_id);
		$this->load->view('sales_details',$data);
	
	}

    public function total_services($user_id){
        $this->load->model('sales_m');
        $get_supplier_info = $this->sales_m->fetch_order_infozz($user_id);
        $remove_stdclass_get_supplier_info = json_decode(json_encode($get_supplier_info),true);
        $countarr = count($remove_stdclass_get_supplier_info);
        $get_service_detailz = array();
        for($i = 0 ; $i < $countarr ; $i++){
            $supp_serr_id = $remove_stdclass_get_supplier_info[$i]['supplier_service_id'];
            $explode_service_id = explode(',',$supp_serr_id);
            $get_service_detailz = array_merge($get_service_detailz,$explode_service_id);
        }
        return $get_service_detailz;
    }

    public function stripe_unsubscribe(){

        $this->load->model('sales_m');
        $subscriber_id = $this->input->post('subscriber_id');
        $change_status = array(
            'subscription_status' => '0'
        );
        $update_subscriber_status = $this->sales_m->subscriber_status($subscriber_id,$change_status);
        if($update_subscriber_status){
			$fetch_supplier_info = $this->sales_m->supplier_info($subscriber_id);
			$supplier_email = $fetch_supplier_info->email;
			$supplier_name = $fetch_supplier_info->firstname.' '.$fetch_supplier_info->lastname;

			$supplier_unsubscribe = $this->emailtemplate->stripe_supplier_unsubscription_success($supplier_name,$supplier_email,$subscriber_id);
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			//$this->email->to($supplier_email); 
			$this->email->to('debashisnath1992@gmail.com'); 
			$this->email->subject('Un-subscription Confirmation-ProtectBox');
			$this->email->message($supplier_unsubscribe);    

			$supplier_unsubscribe = $this->email->send();
			if($supplier_unsubscribe){
				$supplier_unsubscribe_admin = $this->emailtemplate->stripe_supplier_unsubscription_success_admin($supplier_name,$supplier_email,$subscriber_id);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				//$this->email->to($supplier_email); 
				$this->email->to('debashisnath1992@gmail.com'); 
				$this->email->subject('Un-subscription Confirmation-ProtectBox');
				$this->email->message($supplier_unsubscribe_admin); 

				$supplier_unsubscribe_adminzz = $this->email->send();
				if($supplier_unsubscribe_adminzz){
					$this->session->set_flashdata("success", "You have successfully unsubscribed from the next month!");
					redirect('sales');
				}
				
			}else{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('sales');
			}
        }else{
            $this->session->set_flashdata("failed", "Something went wrong!");
            redirect('sales');
        }
    }

	public function supplier_subscription_paypal(){
		$this->load->model('sales_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$email = $this->session->userdata['logged_in']['email'];
		$supplier_name = $this->session->userdata['logged_in']['name'];
		$subscription_price = $this->input->post('subscription_price');
		$paypal_charge = ($subscription_price*0.044);
		$received_payment = $subscription_price - $paypal_charge;
		$date = time();
		$currency = $this->session->userdata['logged_in']['currency'];
		$after_one_month = strtotime('+30 days',$date);
		 $records = array(
			'supplier_id' => $user_id,
			'payment_processor' => 'Paypal',
			'total_amount' => $subscription_price,
			'payment_gateway_charge' => '4.40%',
			'payment_gateway_charge_amount' => $paypal_charge,
			'payment_received' => $received_payment,
			'payment_status' => '1',
			'subscription_status' => '1',
			'date' => $date,
			'subscription_end_date' => $after_one_month
		 );
		$insert_subscription = $this->sales_m->supplier_subscription($records);
		 
		if($insert_subscription){
			$supplier_message = $this->emailtemplate->paypal_supplier_subscription_successss($supplier_name,$email,$currency,$subscription_price);
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($email); 

				$this->email->subject('Subscription Confirmation-ProtectBox');
				$this->email->message($supplier_message);    

				$supplier_email = $this->email->send();
				/* ADMIN EMAIL SMB SUBSCRIPTION*/
				if($supplier_email){
					$admin_message = $this->emailtemplate->paypal_supplier_subscription_success_admin($supplier_name,$email,$currency,$subscription_price,$user_id);
					$this->load->library('email');
					$this->email->set_mailtype("html");
					$this->email->from('noreply@protectbox.com', 'ProtectBox');
					$this->email->to('debashisnath1992@gmail.com');
					//$this->email->to($email); 

					$this->email->subject('Subscription Confirmation-ProtectBox');
					$this->email->message($admin_message);    

					$admin_email = $this->email->send();
				}
			}
		echo $insert_subscription;
		
	}

		public function update_status(){
		$this->load->model('sales_m');
		$order_id = $this->input->post('order_id');
		$service_id = $this->input->post('service_id');
		$key = $this->input->post('key');
		$status = $this->input->post('status');

		$fetch_service_name = $this->sales_m->fetch_service_name($service_id);
		$service_name = $fetch_service_name->service_name;

		//supplier transation starts
		$update_array = array('sup_order_status' => $status);
		$update_sup_trans = $this->sales_m->update_sup_trans($update_array,$order_id,$service_id);
		//supplier transation ends
		
		//order starts
		$fetch_order = $this->sales_m->get_order_details($order_id);
		$subject = "Order (No. ".$order_id.", ".$fetch_order->currency." ".number_format($fetch_order->total_price,2).") Status update-ProtectBox";
		$subject_admin = "Order (No. ".$order_id.", ".$fetch_order->currency." ".number_format($fetch_order->total_price,2).") Status Update";
		$old_status = explode(',',$fetch_order->order_status);
		$old_status[$key] = $status;
		$new_status = implode(',',$old_status);
		$update_order_array = array('order_status' => $new_status);
		$update_order = $this->sales_m->update_order($order_id,$update_order_array);
		//order ends
		
		
		if($status != 'Intimate-seller'){
		//to smb starts
			$get_smb = $this->sales_m->get_user($fetch_order->sme_id);
			$smb_fullname = ucfirst($get_smb->firstname).' '.ucfirst($get_smb->lastname);
			$smb_email = $get_smb->email;
			$smb_message = $this->emailtemplate->order_status_update_sme($smb_fullname,$status,$order_id,$service_name);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($smb_email); 

			$this->email->subject($subject);
			$this->email->message($smb_message);    

			$smb_okay = $this->email->send();
		//to smb ends
		}
		//to supplier starts
			$get_sup = $this->sales_m->get_user($fetch_order->supplier_id);
			$sup_fullname = ucfirst($get_sup->firstname).' '.ucfirst($get_sup->lastname);
			$sup_email = $get_sup->email;
			$sup_message = $this->emailtemplate->order_status_update_supplier($sup_fullname,$status,$order_id,$service_name);
			
			$this->load->library('email');
			$this->email->set_mailtype("html");

			$this->email->from('noreply@protectbox.com', 'ProtectBox');
			$this->email->to($sup_email); 

			$this->email->subject($subject);
			$this->email->message($sup_message);
			$sup_okay = $this->email->send();
		//to supplier ends

		//to admin starts
			$this->load->model('signup_m');
			$get_admins = $this->signup_m->get_admins();
			foreach($get_admins as $fetch_admin){
				$admin_fullname = ucfirst($fetch_admin->firstname).' '.ucfirst($fetch_admin->lastname);
				$admin_email = $fetch_admin->email;
				$admin_message = $this->emailtemplate->order_status_update_admin($admin_fullname,$status,$order_id,$service_name);
				
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('noreply@protectbox.com', 'ProtectBox');
				$this->email->to($admin_email); 

				$this->email->subject($subject_admin);
				$this->email->message($admin_message);
				$admin_okay = $this->email->send();
			}
			
		//to admin ends
		}
		
		
		/* refund request */
    function stripe_refund($order_id,$transaction_id){
     
        	$this->load->model('sales_m');
       
      
        
       $orderData = $this->sales_m->fetch_order_datas($order_id);
      
        $productData = $this->sales_m->fetch_order_products($transaction_id);
       
        $refund=\Stripe\Refund::create([
             'charge' => $orderData->charge_id,
             'amount'=>round($productData->seller_amount),
             'currency'=>$orderData->currency
        ]);
        
       $refundJson = $refund->jsonSerialize();
    
     
    
        
       if(isset($refundJson['status'])){
           if($refundJson['status']=='succeeded'){
                $productData = $this->order_process_m->update_transactionStatus($transaction_id,array('pay_status'=>'Refund_completed','transaction_id'=>$refundJson['balance_transaction']));
                $productData = $this->order_process_m->order_update_after_payment($order_id,array('sup_payment_status'=>'Refund_completed'));
                   // supplier_transaction  =pay_status
                  //  order=sup_payment_status
                    //refund table remain
                    
           }
            redirect(base_url().'sales/sales_details/'.$order_id);
       }
       redirect(base_url().'sales/sales_details/'.$order_id);
    }


}
?>