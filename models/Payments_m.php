<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments_m extends CI_Model {

	public function add_payment_mode($more_service_data)
	{
		$this->db->insert('payment_setup', $more_service_data);
		return true;
		//$this->db->query("your query");
	}
	
	public function update_payment_mode($payment_data,$user_id){
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('payment_setup', $payment_data);
		return true;
	}
	public function check_multiple_user($user_id){
		 $condition = "user_id =" . "'" . $user_id ."'";
		 $this->db->select('*');
		 $this->db->from('payment_setup');
		 $this->db->where($condition);
		 $query = $this->db->get();
		 return $query->num_rows();
	}

	public function get_details($user_id)
	{
		$condition = "user_id =" . "'" . $user_id ."'";
		 $this->db->select('*');
		 $this->db->from('payment_setup');
		 $this->db->where($condition);
		 $query = $this->db->get();
			return $query->row();
	}

	public function check_user_data($user_id){
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select("*");
		$this->db->from("payment_setup");
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_order($user_id,$order){
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('payment_setup', $order);
		//return $this->db->last_query();
		return true;
	}

	public function check_priority($user_id){
		 $condition = "user_id =" . "'" . $user_id ."'";
		 $this->db->select('paypal_priority, stripe_priority, bank_priority');
		 $this->db->from('payment_setup');
		 $this->db->where($condition);
		 $query = $this->db->get();
		 return $query->row();
	}

	public function insert_bank($insert_array)
	{
		$this->db->insert('payment_setup', $insert_array);
		return true;
	}

	public function get_count($user_id)
	{
		$this->db->select('*');
		$this->db->from('payment_setup');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_payment_option($update_payment_array)
	{
		$this->db->insert('payment_setup', $update_payment_array);
		return true;
	}

	public function update_payment_option($update_payment_array,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('payment_setup', $update_payment_array);
		//return $this->db->last_query();
		return true;
	}

}

/* End of file Add_category_m.php */
/* Location: ./application/models/Add_category_m.php */