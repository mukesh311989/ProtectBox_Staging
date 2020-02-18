<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_order extends CI_Controller {


	  public function payment_success(){
        $service_id = $this->uri->segment(3);
        $this->load->model('paypal_payment_m');
        $service_info = $this->paypal_payment_m->get_payment_info($service_id);

        foreach($service_info AS $each_service){
            $supplier_user_id = $each_service->user_id;
            $get_all_services = $this->paypal_payment_m->all_services($supplier_user_id);
            $all_service_ids = array();
            $individual_actual_price = array();
            $commission_price = array();
            $split_price = array();
            
          foreach($get_all_services AS $service_details){
            $actual_price = $service_details->price_detail;
            $commission = $service_details->commission_detail;
            $all_service_ids[] = $service_details->supplier_service_id;

              if($service_details->payment_option == "Monthly")
                {
                    $individual_actual_price[] = ($actual_price * 12);
                    $commission_price[] = ($actual_price * 12)*($commission/100);
                }
                else if($service_details->payment_option == "Yearly")
                {
                    $individual_actual_price[] = ($actual_price * 1);
                    $commission_price[] = ($actual_price * 1)*($commission/100);
                }
                else if($service_details->payment_option == "Quarterly")
                {
                    $individual_actual_price[] = ($actual_price * 4);
                    $commission_price[] = ($actual_price * 4)*($commission/100);
                }
                    
                }
            }

            $sme_id = $this->session->userdata['logged_in']['user_id'];
            $supplier_id = $service_details->user_id;
            $service_ids = implode(',',$all_service_ids);
            $total_commission_price = array_sum($commission_price);
            $total_split_price = array_sum($individual_actual_price);
            $total_price = $total_commission_price + $total_split_price;
            $discount="";
            $payment_option = "Yearly";
            $payment_method = "Paypal";
            $order_status = "Active";
            $payment_status = "Success";
            $date = time();

            $orders_data = array(
            'sme_id' => $sme_id,
            'supplier_id' => $supplier_id,
            'supplier_service_id' => $service_ids,
            'total_price' => $total_price,
            'discount' => $discount,
            'payment_option' => $payment_option,
            'payment_method' => $payment_method,
            'order_status' => $order_status,
            'payment_status' => $payment_status,
            'date' => $date
        );
           $insert_supplier_data = $this->paypal_payment_m->insert_order_info($orders_data);
           redirect('thank_you');


    }

    public function payment_failed(){
        $service_id = $this->uri->segment(3);
        $this->load->model('paypal_payment_m');
        $service_info = $this->paypal_payment_m->get_payment_info($service_id);

        foreach($service_info AS $each_service){
            $supplier_user_id = $each_service->user_id;
            $get_all_services = $this->paypal_payment_m->all_services($supplier_user_id);
            $all_service_ids = array();
            $individual_actual_price = array();
            $commission_price = array();
            $split_price = array();
            
          foreach($get_all_services AS $service_details){
            $actual_price = $service_details->price_detail;
            $commission = $service_details->commission_detail;
            $all_service_ids[] = $service_details->supplier_service_id;

              if($service_details->payment_option == "Monthly")
                {
                    $individual_actual_price[] = ($actual_price * 12);
                    $commission_price[] = ($actual_price * 12)*($commission/100);
                }
                else if($service_details->payment_option == "Yearly")
                {
                    $individual_actual_price[] = ($actual_price * 1);
                    $commission_price[] = ($actual_price * 1)*($commission/100);
                }
                else if($service_details->payment_option == "Quarterly")
                {
                    $individual_actual_price[] = ($actual_price * 4);
                    $commission_price[] = ($actual_price * 4)*($commission/100);
                }
                    
                }
            }

            $sme_id = $this->session->userdata['logged_in']['user_id'];
            $supplier_id = $service_details->user_id;
            $service_ids = implode(',',$all_service_ids);
            $total_commission_price = array_sum($commission_price);
            $total_split_price = array_sum($individual_actual_price);
            $total_price = $total_commission_price + $total_split_price;
            $discount="";
            $payment_option = "Yearly";
            $payment_method = "Paypal";
            $order_status = "Inactive";
            $payment_status = "Failed";
            $date = time();

            $orders_data = array(
            'sme_id' => $sme_id,
            'supplier_id' => $supplier_id,
            'supplier_service_id' => $service_ids,
            'total_price' => $total_price,
            'discount' => $discount,
            'payment_option' => $payment_option,
            'payment_method' => $payment_method,
            'order_status' => $order_status,
            'payment_status' => $payment_status,
            'date' => $date
        );
           $insert_supplier_data = $this->paypal_payment_m->insert_order_info($orders_data);
           redirect('thank_you');


    }

}

/* End of file Paypal_order.php */
/* Location: ./application/controllers/Paypal_order.php */