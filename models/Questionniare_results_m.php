<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionniare_results_m extends CI_Model {
	/* Dynamic Algorithm Code Starts*/

	public function bundle_array_fetch($service_id){
		  $this->db->select('*');
		  $this->db->from('bundle_payment');
		  $this->db->where('bundle_payment_id', $service_id);
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->row();
	}

	public function fetch_gv_score(){	
		$this->db->select('*');
		$this->db->from('gv_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_cpn($cpn_code){
		$this->db->select('*');
		$this->db->from('coupons_subscription');
		$this->db->where('coupon_code',$cpn_code);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function smb_subscribe($data){
		$this->db->insert('smb_subscription', $data);
		 return true;
	}
	
	public function fetch_subscr($user_id){
		$this->db->select('*');
		$this->db->from('smb_subscription');
		$this->db->where('smb_id',$user_id);
		$this->db->order_by('date','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_c_risk_score(){
		$this->db->select('*');
		$this->db->from('c_risk_score');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_tech_max(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','tech');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_non_tech_max(){
		$this->db->select('*');
		$this->db->from('tech_non_tech_max_score');
		$this->db->where('type','non_tech');
		$query = $this->db->get();
		return $query->result();
	}
	/* Dynamic Algorithm Code Ends*/
	public function fetch_results($service_id){
		  
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('supplier_service_id', $service_id);
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->result();
	}

	public function fetch_order_bundle($user_id){
        $this->db->select('*');
		$this->db->from('orders');
		$this->db->where('sme_id', $user_id);
		$this->db->where('status', "1");
		$this->db->order_by('upload_date','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
    }
	

	public function fetch_order($user_id){
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where('sme_id', $user_id);
			$query = $this->db->get();
			return $query->result();
    }

	public function get_basic_answars($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_basics');
		$this->db->where('user_id' , $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_tech_answars($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_technical');
		$this->db->where('user_id' , $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_nontech_answars($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_non_technical');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_budget_answars($user_id)
	{
		$this->db->select('*');
		$this->db->from('questionnaire_budget');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}


	  public function fetch_supplier_name($service_id)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_id);
		$query = $this->db->get();
		return $query->row();
    }

	public function get_service_image($service_data)
    {
        $this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id', $service_data);
		$query = $this->db->get();
		return $query->row();
    }

	
	public function fetch_results_category($user_id,$protection_level){
		  $array = array('user_id'=> $user_id , 'protection_level' => $protection_level, 'status' => '1');
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($array);
		  $this->db->group_by("product_category");
		  $query = $this->db->get();
		  return $query->result();
	}


	public function fetch_results_smb_services($service_name,$user_id,$smb_user_id,$max_budget,$currecny){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('user_id' , $user_id);
		  $this->db->where('status' , '1');
		  $this->db->where('currency' , $currecny);
		  if($max_budget != ""){
			$this->db->where('price_detail <=', $max_budget);
		  }
		  if($service_name == 'Antivirus'){
			$this->db->where('product_category', 'Antivirus');
		  }
		  if($service_name == 'Operating System'){
			$this->db->where('product_category', 'Operating System');
		  }
		  if($service_name == 'Firewall'){
			$this->db->where('product_category', 'Firewall');
		  }
		  if($service_name == 'Internet'){
			$this->db->where('product_category', 'Internet');
			$this->db->or_where('product_category', 'Spam Filtering');
			$this->db->or_where('product_category', 'Ad blocking');
		  }
		  if($service_name == 'Access Control'){
			$this->db->where('product_category', 'Access Control');
			$this->db->or_where('product_category', 'Encryption');
			$this->db->or_where('product_category', 'Microsoft Active/Open Directory');
			$this->db->or_where('product_category', 'Authentication');
			$this->db->or_where('product_category', 'Physical Security (of Buildings, Equipment)');
		  }
		  if($service_name == 'Data Storage'){
			$this->db->where('product_category', 'Data Storage');
			$this->db->or_where('product_category', 'Public Key Infrastructure (PKI)');
			$this->db->or_where('product_category', 'Email Security');
		  }
		  if($service_name == 'Managed Service Solution Provider'){
			$this->db->where('product_category', 'Managed Service Solution Provider');
		  }
		  if($service_name == 'Business Continuity'){
			$this->db->where('product_category', 'Intrusion Detection Systems (IDS)');
			$this->db->or_where('product_category', 'Audit');
			$this->db->or_where('product_category', 'Business Continuity');
		  }
		  if($service_name == 'Password Policy'){
			$this->db->where('product_category', 'Password Policy');
		  }
		  if($service_name == 'Accreditation/Regulation'){
			$this->db->where('product_category', 'Accreditation/Regulation');
		  }
		  if($service_name == 'Device Management'){
			$this->db->where('product_category', 'Device Management');
		  }
		  if($service_name == 'Training'){
			$this->db->where('product_category', 'Training');
		  }
		  if($service_name == 'Remote Working'){
			$this->db->where('product_category', 'Remote Working');
		  }
		  if($service_name == 'Reputation Management'){
			$this->db->where('product_category', 'Reputation Management');
			$this->db->or_where('product_category', 'Data Storage');
			$this->db->or_where('product_category', 'Threat Prevention');
		  }
		  if($service_name == 'Consultancy/Implementation'){
			$this->db->where('product_category', 'Consultancy/Implementation');
		  }
		  $this->db->order_by('price_detail');
		  $this->db->limit(3);
		  $query = $this->db->get();
		  //return $this->db->last_query();
		  return $query->result();
	}

	public function fetch_results_serviceszz($service_name,$user_id,$smb_user_id,$sessionzz,$max_budget,$currency){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->join('questionnaire_technical','questionnaire_technical.user_id = '.$smb_user_id.'');
		  $this->db->join('questionnaire_non_technical','questionnaire_non_technical.user_id = '.$smb_user_id.'');
		  $this->db->where('supplier_service.user_id' , $user_id);
		  $this->db->where('supplier_service.status' , '1');
		  $this->db->where('supplier_service.currency', $currency);
		  if($max_budget != ""){
			$this->db->where('supplier_service.price_detail <=', $max_budget);
		  }
		  if($service_name == 'Antivirus'){
			$this->db->where('supplier_service.product_category', 'Antivirus');
			$this->db->where('questionnaire_technical.antivirus_score <=', $sessionzz['session_antivirus']);
		  }
		  if($service_name == 'Operating System'){
			$this->db->where('supplier_service.product_category', 'Operating System');
			$this->db->where('questionnaire_technical.os_score <=', $sessionzz['session_opt_system']);
		  }
		  if($service_name == 'Firewall'){
			$this->db->where('supplier_service.product_category', 'Firewall');
			$this->db->where('questionnaire_technical.firewall_score <=', $sessionzz['session_firewall']);
		  }
		  if($service_name == 'Internet'){
			$this->db->where('supplier_service.product_category', 'Internet');
			$this->db->or_where('supplier_service.product_category', 'Spam Filtering');
			$this->db->or_where('supplier_service.product_category', 'Ad blocking');
			$this->db->where('questionnaire_technical.internet_score <=', $sessionzz['session_internet']);
		  }
		  if($service_name == 'Access Control'){
			$this->db->where('supplier_service.product_category', 'Access Control');
			$this->db->or_where('supplier_service.product_category', 'Encryption');
			$this->db->or_where('supplier_service.product_category', 'Microsoft Active/Open Directory');
			$this->db->or_where('supplier_service.product_category', 'Authentication');
			$this->db->or_where('supplier_service.product_category', 'Physical Security (of Buildings, Equipment)');
			$this->db->where('questionnaire_technical.system_access_score <=', $sessionzz['session_access_control']);
		  }
		  if($service_name == 'Data Storage'){
			$this->db->where('supplier_service.product_category', 'Data Storage');
			$this->db->or_where('supplier_service.product_category', 'Public Key Infrastructure (PKI)');
			$this->db->or_where('supplier_service.product_category', 'Email Security');
			$this->db->where('questionnaire_technical.data_encrypt_score <=', $sessionzz['session_data_protection']);
		  }
		  if($service_name == 'Managed Service Solution Provider'){
			$this->db->where('supplier_service.product_category', 'Managed Service Solution Provider');
			$this->db->where('questionnaire_technical.msp_score <=', $sessionzz['session_managed_service']);
		  }
		  if($service_name == 'Business Continuity'){
			$this->db->where('supplier_service.product_category', 'Intrusion Detection Systems (IDS)');
			$this->db->or_where('supplier_service.product_category', 'Audit');
			$this->db->or_where('supplier_service.product_category', 'Business Continuity');
			$this->db->where('questionnaire_non_technical.business_continuity_plan_score <=', $sessionzz['session_business_continuity']);
		  }
		  if($service_name == 'Password Policy'){
			$this->db->where('supplier_service.product_category', 'Password Policy');
			$this->db->where('questionnaire_non_technical.password_rules_score <=', $sessionzz['session_password_policy']);
		  }
		  if($service_name == 'Accreditation/Regulation'){
			$this->db->where('supplier_service.product_category', 'Accreditation/Regulation');
			$this->db->where('questionnaire_non_technical.aware_information_security_standard_score <=', $sessionzz['session_accreditation_regulation']);
		  }
		  if($service_name == 'Device Management'){
			$this->db->where('supplier_service.product_category', 'Device Management');
			$this->db->where('questionnaire_non_technical.device_to_employees_score <=', $sessionzz['session_device']);
		  }
		  if($service_name == 'Training'){
			$this->db->where('supplier_service.product_category', 'Training');
			$this->db->where('questionnaire_non_technical.training_cybersecurity_score <=', $sessionzz['session_training']);
		  }
		  if($service_name == 'Remote Working'){
			$this->db->where('supplier_service.product_category', 'Remote Working');
			$this->db->where('questionnaire_non_technical.employees_use_remotely_score <=', $sessionzz['session_remote_working']);
		  }
		  if($service_name == 'Reputation Management'){
			$this->db->where('supplier_service.product_category', 'Reputation Management');
			$this->db->or_where('supplier_service.product_category', 'Data Storage');
			$this->db->or_where('supplier_service.product_category', 'Threat Prevention');
			$this->db->where('questionnaire_non_technical.member_cisp_score <=', $sessionzz['session_reputation_manage']);
		  }
		  if($service_name == 'Consultancy/Implementation'){
			$this->db->where('supplier_service.product_category', 'Consultancy/Implementation');
			$this->db->where('questionnaire_non_technical.cyber_consultant_score <=', $sessionzz['session_consultancy']);
		  }
		  $this->db->order_by('supplier_service.price_detail');	
		  $this->db->limit(3);	  
		  $query = $this->db->get();
		  return $query->result();
		 //return $this->db->last_query();
	}


	public function fetch_total_amount($user_id){
		$array = array('user_id' => $user_id, 'status' => '1');
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where($array);
		  $query = $this->db->get();
		  return $query->result();
	}
	
	

	public function sort_results($preferred_supplier,$preferred_location,$preferred_payment){
		  $query = $this->db->query('select * from supplier_service where user_id in ("'.$preferred_supplier.'")');
		  return $query->result();
	}

	public function fetch_suppliers(){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->join('user', 'supplier_service.user_id = user.user_id');
		  $this->db->group_by("supplier_service.user_id");
		  $query = $this->db->get();
		  return $query->result();
	}

	 public function fetch_location(){
		$this->db->select('location');
		$this->db->from('supplier_service');
		$this->db->where('location <','Please select');
		$query = $this->db->get();
		return $query->result();
	 }
	public function fetch_category(){
		  $this->db->select('*');
		  $this->db->from('category');
		  $this->db->order_by("category_name");
		  $query = $this->db->get();
		  return $query->result();
	}

	public function get_payment_info($service_id){
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where('supplier_service_id',$service_id);
		$query = $this->db->get();
		return $query->result();
	} 

	public function all_services($user_id){
		$array = array('user_id' => $user_id, 'status'=>'1');
		$this->db->select('*');
		$this->db->from('supplier_service');
		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
	} 
	//Budget min max calculation starts here
	 public function fetch_min_budget(){
	  $this->db->select_min('supplier_package_price');
	  $query = $this->db->get('supplier_additional_info');
	  return $query->row();
	 } 

	 public function fetch_max_budget(){
	  $this->db->select_max('supplier_package_price');
	  $query = $this->db->get('supplier_additional_info');
	  return $query->row();
	  //return $this->db->last_query();
	 } 
	 //Budget min max calculation ends here

	// Min max calculation starts here
	  public function fetch_smb_score($user_id){
	   $this->db->select('*');
	   $this->db->from('questionnaire_technical');
	   $this->db->join('questionnaire_non_technical','questionnaire_technical.user_id = questionnaire_non_technical.user_id');
	   $this->db->where('questionnaire_technical.user_id',$user_id);
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  // Min max calculation ends here

	  /*//Os min max calculation starts here
	  public function fetch_min_os(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Operating System');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_os(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Operating System');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Os min max calculation ends here

	  //Firewall min max calculation starts here
	  public function fetch_min_firewall(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Firewall');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  /* SELECT MAX(price_detail + 0) FROM `supplier_service` WHERE `service_name` = 'Firewall' order by `price_detail` + 0 */

	  public function fetch_max_firewall(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Firewall');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Firewall min max calculation ends here

	   //Internet min max calculation starts here
	  public function fetch_min_internet(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Internet');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_internet(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Internet');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Internet min max calculation ends here

	  //Access Control min max calculation starts here
	  public function fetch_min_access_control(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Access Control');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_access_control(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Access Control');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Access Control min max calculation ends here

	  //Data min max calculation starts here
	  public function fetch_min_data(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Data Storage');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_data(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Data Storage');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Data min max calculation ends here

	  //MSSP min max calculation starts here
	  public function fetch_min_mssp(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Managed Service Solution Provider');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_mssp(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Managed Service Solution Provider');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //MSSP min max calculation ends here

	  //Business continuity min max calculation starts here
	  public function fetch_min_bu_continue(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Business Continuity');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_bu_continue(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Business Continuity');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Business continuity min max calculation ends here

	  //Password policy min max calculation starts here
	  public function fetch_min_pass_policy(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Password Policy');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_pass_policy(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Password Policy');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Password policy min max calculation ends here

	  //Accreditation/Regulation min max calculation starts here
	  public function fetch_min_accreditation(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Accreditation/Regulation');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_accreditation(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Accreditation/Regulation');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Accreditation/Regulation min max calculation ends here

	   //Devices min max calculation starts here
	  public function fetch_min_devices(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Device Management');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_devices(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Device Management');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Devices min max calculation ends here 

	   //Training min max calculation starts here
	  public function fetch_min_training(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Training');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_training(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Training');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Training min max calculation ends here  

	   //remote_working min max calculation starts here
	  public function fetch_min_remote_working(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Remote Working');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_remote_working(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Remote Working');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //remote_working min max calculation ends here

	  //reputation manage min max calculation starts here
	  public function fetch_min_reputation_manage(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Reputation Management');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_reputation_manage(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Reputation Management');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //reputation manage min max calculation ends here

	  //consultancy min max calculation starts here
	  public function fetch_min_consultancy(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Consultancy/Implementation');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_consultancy(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Consultancy/Implementation');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //consultancy min max calculation ends here

	  //Proxy min max calculation starts here
	  public function fetch_min_proxy(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Proxy');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_proxy(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Proxy');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Proxy min max calculation ends here

	  //Audit min max calculation starts here
	  public function fetch_min_audit(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Audit');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_audit(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Audit');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Audit min max calculation ends here 
/*************************************************************/
	   //Encryption min max calculation starts here
	  public function fetch_min_encryption(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Encryption');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_encryption(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Encryption');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Encryption min max calculation ends here

	   //Spam Filtering min max calculation starts here
	  public function fetch_min_spam(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Spam Filtering');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_spam(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Spam Filtering');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Spam Filtering min max calculation ends here

	   //Threat Prevention min max calculation starts here
	  public function fetch_min_prevention(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Threat Prevention');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_prevention(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Threat Prevention');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Threat Prevention min max calculation ends here

	   //Intrusion Detection Systems (IDS) min max calculation starts here
	  public function fetch_min_ids(){
	   $this->db->select_min('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Intrusion Detection Systems (IDS)');
	   $query = $this->db->get();
	   return $query->row();
	  } 

	  public function fetch_max_ids(){
	   $this->db->select_max('price_detail');
	   $this->db->from('supplier_service');
	   $this->db->where('product_category' , 'Intrusion Detection Systems (IDS)');
	   $query = $this->db->get();
	   return $query->row();
	  } 
	  //Intrusion Detection Systems (IDS) min max calculation ends here */
	public function data_update($records,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('questionnaire_basics', $records);
		return true;
	}

		public function data_tech_update($records,$user_id)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('questionnaire_technical', $records);
		return true;
	}

		public function questioniare_non_tech_update($add_non_tech,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('questionnaire_non_technical', $add_non_tech);
	  return true;
	}

		public function update_budget_data($add_budgets,$user_id)
	{
	  $where  = array('user_id' => $user_id);
	  $this->db->where($where);
	  $query = $this->db->update('questionnaire_budget', $add_budgets);
	  return true;
	}

	public function fetch_employees($user_id){
		  $this->db->select('*');
		  $this->db->from('questionnaire_basics');
		  $this->db->where('user_id',$user_id);
		  $query = $this->db->get();
		  return $query->row();
	}

	public function fetch_icecat_data($mpn)
	{
		$this->db->Select('*');
		$this->db->from('icecat_data');
		$this->db->where('requested_prod_id',$mpn);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_user_data($id)
	{
		$this->db->Select('email,firstname');
		$this->db->from('user');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Results_m.php */
/* Location: ./application/models/Results_m.php */