<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stripe_payment_m extends CI_Model {

	public function client_id($user_id){

	  $this->db->select('*');
	  $this->db->from('payment_setup');
	  $this->db->where('user_id', $user_id);
	  $query = $this->db->get();
	  return $query->result();
	}

}

/* End of file Stripe_payment_m.php */
/* Location: ./application/models/Stripe_payment_m.php */