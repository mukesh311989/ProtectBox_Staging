<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class My_order_m extends CI_Model {

	
    public function fetch_order($user_id)
    {
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('sme_id', $user_id);
		$this->db->order_by("upload_date", "desc");
		$query = $this->db->get();
		return $query->result();
    }

    public function fetch_pending_order($user_id)
    {
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('sme_id', $user_id);
		$this->db->where('order_status','Pending');
		$this->db->order_by("upload_date", "desc");
		$query = $this->db->get();
		return $query->result();
    }

	public function fetch_subcription($user_id)
    {
    	$array = array('sme_id'=> $user_id , 'order_status' => 'Active');
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
    }

	public function fetch_service_name($service_key)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_key);
		$query = $this->db->get();
		return $query->row();
    }

	public function save_rating($records)
    {
        $this->db->insert('ratings', $records);
		return true;
    }

	public function check_rating($sme_id,$orders_id,$service_id)
    {
    	$array = array('sme_id'=> $sme_id , 'order_id' => $orders_id , 'service_id'=> $service_id);
        $this->db->select('*');
		$this->db->from('ratings');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->row();
    }

	public function fetch_sme_name($sme_id)
    {
        $this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $sme_id);
		$query = $this->db->get();
		return $query->row();
    }

	public function fetch_supplier_name($supplier_id)
    {
        $this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $supplier_id);
		$query = $this->db->get();
		return $query->row();
    }

    public function update_order_status($order_id,$records){
		$where  = array('orders_id' => $order_id);
		$this->db->where($where);
		$query = $this->db->update('orders', $records);
		return $query;
	}

	public function check_return_status($sme_id,$orders_id,$service_id)
	{
		$array = array('smb_id'=> $sme_id , 'order_id' => $orders_id , 'service_id'=> $service_id);
		$this->db->select('*');
		$this->db->from('refund');
		$this->db->where($array);
		//return $this->db->last_query();
		$query = $this->db->get();
		return $query->num_rows();
		
	}
	
	public function check_refund_status($sme_id,$orders_id,$service_id)
	{
		$records = array('smb_id'=> $sme_id , 'order_id' => $orders_id , 'service_id'=> $service_id);
		$this->db->select('*');
		$this->db->from('refund');
		$this->db->where($records);
		$query = $this->db->get();
		return $query->row();
		
	}

	public function supp_info($user_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_request($records)
	{
		$this->db->insert('refund', $records);
		//return $this->db->last_query();
		return true;
	}

		public function cus_details($cus_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$cus_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
	}
	public function supp_details($service_id)
	{
	$this->db->select('supplier_service.*,user.*');
    $this->db->from('supplier_service');
    $this->db->join('user', 'supplier_service.user_id = user.user_id', 'right outer'); 
	$this->db->where('supplier_service.supplier_service_id',$service_id);
    $query = $this->db->get();
    return $query->row();
	}
	public function check_payment($user_id)
	{
		$this->db->select('*');
		$this->db->from('payment_setup');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->row();
	}

	public function count_payment($user_id)
	{
		$this->db->select('*');
		$this->db->from('payment_setup');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//return $this->db->last_query();
		return $query->num_rows();
	}

	public function insert_payment($insert_array)
	{
		$this->db->insert('payment_setup', $insert_array);
		//return $this->db->last_query();
		return true;
	}

	 public function update_payment($insert_array,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('payment_setup', $insert_array);
		return $query;
	}
	

	public function fetch_trans($order_id,$service_id){
		$this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_order($new_sup_pay_status,$order_id){
		$this->db->set('sup_payment_status', $new_sup_pay_status);
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders'); 
		return true;
	}

	public function update_sup_trans($order_id,$service_id){
		$this->db->set('pay_status', 'Refund_requested');
		$this->db->where('order_id', $order_id);
		$this->db->where('supplier_service_id', $service_id);
		$this->db->update('supplier_transaction'); 
		return true;
	}

	public function fetch_currency_code($main_cu){
		$this->db->select('*');
		$this->db->from('currency');
		$this->db->where('code',$main_cu);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file My_sales.php */
/* Location: ./application/models/My_sales.php */