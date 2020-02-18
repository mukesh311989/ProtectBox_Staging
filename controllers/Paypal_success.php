<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_success extends CI_Controller {

    public function index()
    {
        if(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && $_GET['st'] == 'Completed'){
            //get transaction information from query string
            $item_number = $_GET['item_number'];
            $txn_id = $_GET['tx'];
            $payment_gross = $_GET['amt'];
            $currency_code = $_GET['cc'];
            $payment_status = $_GET['st'];
            $custom = $_GET['cm'];
            
            //Check if subscription data exists with the TXN ID
            $prevPaymentResult = $db->query("SELECT * FROM user_subscriptions WHERE txn_id = '".$txn_id."'");
            
            if($prevPaymentResult->num_rows > 0){
                //get subscription info from database
                $paymentRow = $prevPaymentResult->fetch_assoc();
                
                //prepare subscription html to display
                $data['phtml']  = '<h5 class="success">Thanks for payment, your payment was successful. Payment details are given below.</h5>';
                $data['phtml'] .= '<div class="paymentInfo">';
                $data['phtml'] .= '<p>Payment Reference Number: <span>MS'.$paymentRow['id'].'</span></p>';
                $data['phtml'] .= '<p>Transaction ID: <span>'.$paymentRow['txn_id'].'</span></p>';
                $data['phtml'] .= '<p>Paid Amount: <span>'.$paymentRow['payment_gross'].' '.$paymentRow['currency_code'].'</span></p>';
                $data['phtml'] .= '<p>Validity: <span>'.$paymentRow['valid_from'].' to '.$paymentRow['valid_to'].'</span></p>';
                $data['phtml'] .= '</div>';
            }else{
                $data['phtml'] = '<h5 class="error">Your payment was unsuccessful, please try again.</h5>';
            }
        }elseif(!empty($_GET['item_number']) && !empty($_GET['tx']) && !empty($_GET['amt']) && $_GET['st'] != 'Completed'){
            $data['phtml'] = '<h5 class="error">Your payment was unsuccessful, please try again.</h5>';
        }
        $this->load->view('paypal_success',$data);
    }

}

/* End of file Paypal_success.php */
/* Location: ./application/controllers/Paypal_success.php */