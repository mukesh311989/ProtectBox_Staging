<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paypal_payment_success_m extends CI_Model {

	public function paypal_payment_info($payment){
		$this->db->insert('supplier_subscription', $payment);
		return true;
	}

}

/* End of file Paypal_payment_success_m.php */
/* Location: ./application/models/Paypal_payment_success_m.php */