<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_m extends CI_Model {

	
    public function fetch_order($user_id)
    {
       /* $this->db->select('*');
		$this->db->from('orders');
		$this->db->where_in('supplier_id', $user_id);
		$this->db->where('order_status !=', 'pending');
		$query = $this->db->get();*/
		//return $query->result();
		$query = $this->db->get('orders where FIND_IN_SET("'.$user_id.'",supplier_id) and order_status !="pending"');
		return $query->result();
    }

    public function all_subscription_data($user_id){
    	$this->db->select('*');
		$this->db->from('supplier_subscription');
		$this->db->where('supplier_id', $user_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
    }
	
	public function get_symbol($currencyCode)
	{
		$this->db->select("*");
		$this->db->from("currency");
		$this->db->where("code",$currencyCode);
		$query = $this->db->get();
		return $query->row();
	}

    public function all_ratings_data($user_id){
    	$this->db->select('*');
		$this->db->from('ratings');
		$this->db->where('supplier_id', $user_id);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
    }

    public function fetch_cu_info($user_id){
    	$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
    }

    public function fetch_each_service_name($service_key)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_key);
		$query = $this->db->get();
		return $query->row();
    }

    public function subscription_info($user_id){
    	$this->db->select('*');
		$this->db->from('supplier_subscription');
		$this->db->where('supplier_id', $user_id);
		$this->db->where('payment_status', '1');
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
    }

     public function fetch_supplier_info($user_id)
    {
        $this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->result();
    }

	 public function supplier_info($subscriber_id)
    {
        $this->db->select('*');
		$this->db->from('supplier_subscription');
		$this->db->join('user','user.user_id = supplier_subscription.supplier_id');
		$this->db->where('supplier_subscription.subscription_id', $subscriber_id);
		$query = $this->db->get();
		return $query->row();
    }

	public function fetch_subcription($user_id)
    {
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('sme_id', $user_id);
		$this->db->where('order_status', 'Active');
		$query = $this->db->get();
		return $query->result();
    }

    public function subscriber_status($subscriber_id,$change_status){
    	
		$where  = array('subscription_id' => $subscriber_id);
		$this->db->where($where);
		$query = $this->db->update('supplier_subscription', $change_status);
		return true;
    }

	public function supplier_subscription($records)
	{
		$this->db->insert('supplier_subscription', $records);
		return $this->db->insert_id();
	}

	public function fetch_service_name($service_key)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_key);
		$query = $this->db->get();
		return $query->row();
    }
/* FOR DASHBOARD STARTS */
    public function fetch_order_infozz($supplier_id)
    {
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('supplier_id', $supplier_id);
		$this->db->where('status', '1');
		$query = $this->db->get();
		return $query->result();
    }

    public function fetch_supplier_servicezz($service_id)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_id);
		$query = $this->db->get();
		return $query->row();
		//return $this->db->last_query();
    }

    public function unique_cats($each_service)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $each_service);
		//return $query->num_rows();		
		$query = $this->db->get();
		return $query->row();
    }
   /* FOR DASHBOARD ENDS */
   public function supplier_servicezz($user_id)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id', $user_id);
		//return $query->num_rows();		
		$query = $this->db->get();
		return $query->result();
    }


	public function get_order_details($order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders_id', $order_id);
		$this->db->order_by("upload_date", "desc");
		$query = $this->db->get();
		return $query->row();
	}


	public function get_sme_name($sme_id){
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$sme_id);
		$query = $this->db->get();
		return $query->row();

	}

	public function get_method($supplier_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_service');
		$this->db->where('user_id',$supplier_id);
		$query = $this->db->get();
		return $query->row();
	}

		public function check_refund($order_id, $service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('refund');
		$this->db->where('order_id',$order_id);
		$this->db->where('service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}
		public function check_order_stat($order_id,$service_id)
	{
		$this->db->SELECT('*');
		$this->db->from('supplier_transaction');
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_sup_trans($update_array,$order_id, $service_id)
	{
		$this->db->where('order_id',$order_id);
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->update('supplier_transaction', $update_array);
		return true;
	}

		public function update_order($order_id,$update_order_array)
	{
		$this->db->where('orders_id',$order_id);
		$query = $this->db->update('orders', $update_order_array);
		return true;
	}

		public function get_user($user_id)
	{
		$this->db->SELECT('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	function fetch_serviceTransaction($order_id,$service_id){
	    	$this->db->select('*');
    		$this->db->from('supplier_transaction');
    		$this->db->where('order_id',$order_id);
    		$this->db->where('supplier_service_id',$service_id);
    		$query = $this->db->get();
    		return $query->row();
	}
	
	 public function update_transactionStatus($id,$update)
	{
		$this->db->where('id', $id);
		$this->db->update('supplier_transaction', $update);
		return true;
	}
	public function fetch_order_products($id){
	    
	    $this->db->select('*');
		$this->db->from('supplier_transaction');
		$this->db->where(['id'=>$id]);
		$query = $this->db->get();
        
	
		//	echo $this->db->last_query(); die;
		return $query->row();
	}
	public function fetch_order_datas($id){
	   
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where(['orders_id'=>$id]);
		$query = $this->db->get();
		
	//	echo $this->db->last_query(); die;
		return $query->row();
	}
		public function order_update_after_payment($order_id,$records)
	{
		$this->db->where('orders_id', $order_id);
		$this->db->update('orders', $records);
		return true;
	}


}

/* End of file My_sales.php */
/* Location: ./application/models/My_sales.php */