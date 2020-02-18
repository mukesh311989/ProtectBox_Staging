<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results_m extends CI_Model {

	public function fetch_gv_score(){
		$this->db->select('*');
		$this->db->from('gv_score');
		$query = $this->db->get();
		return $query->result();
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

	public function fetch_results($protection_level,$user_location,$get_sme,$currency,$final_cat_list){	 
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  if(!isset($this->session->userdata['results'])){
			  $this->db->where('protection_level', $protection_level);
			  $this->db->where('customer_type',$get_sme);
		  }
		  $this->db->where('currency',$currency);
		  $this->db->where('status','1');
		  $this->db->or_where_in('product_category',$final_cat_list);
		  $i = 0 ;
		  $where = "";
		  $where .= "(";
		  $cnt = count($user_location);
		  foreach($user_location as $key=>$loc)
		  {
			  $i++;
			  $where .= "`location` LIKE '%".$loc."%' ";
			  if($i > 0 && $i < $cnt){
				$where .= " OR ";
			  }
		  }
		  $where .= ")";
		  $this->db->where($where);
		  $query = $this->db->get();
		  return $query->result();
		  //return $this->db->last_query();
	}

	public function fetch_each_results($service_id){
		 
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('supplier_service_id',$service_id);
		  $query = $this->db->get();
		  return $query->row();
		  //return $this->db->last_query();
	}

	public function fetch_results_from_top_filter($protection_level,$user_location,$get_sme,$currency,$preferred_suppliers,$preferred_services,$top_price_range){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('protection_level', $protection_level);
		  $this->db->where('customer_type',$get_sme);
		  $this->db->where('currency',$currency);
		  $this->db->where('status','1');
		  
		  if(!empty($preferred_suppliers)){
			//$this->db->where_in('supplier_name',$preferred_suppliers);
			$this->db->where_not_in('supplier_name',$preferred_suppliers);
		  }
		  if(!empty($preferred_services)){
			//$this->db->where_in('product_category',$preferred_services);
			$this->db->where_not_in('product_category',$preferred_services);
			
		  }
		  if($top_price_range != ''){
			$price_range = "`price_range` LIKE '%".$top_price_range."%' ";
			$this->db->where($price_range);
		  }

		  $i = 0 ;
		  $where = "";
		  $where .= "(";
		  $cnt = count($user_location);
		  foreach($user_location as $key=>$loc)
		  {
			  $i++;
			  $where .= "`location` LIKE '%".$loc."%' ";
			  if($i > 0 && $i < $cnt){
				$where .= " OR ";
			  }
		  }
		  $where .= ")";
		  $this->db->where($where);
		  $query = $this->db->get();
		  return $query->result();
		  //return $this->db->last_query();
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


	public function fetch_results_smb_services($service_name,$user_id,$smb_user_id,$currecny){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->where('user_id' , $user_id);
		  $this->db->where('status', '1');
		  $this->db->where('currency' , $currecny);
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

	public function fetch_results_serviceszz($service_name,$user_id,$smb_user_id,$sessionzz,$currency){
		  $this->db->select('*');
		  $this->db->from('supplier_service');
		  $this->db->join('questionnaire_technical','questionnaire_technical.user_id = '.$smb_user_id.'');
		  $this->db->join('questionnaire_non_technical','questionnaire_non_technical.user_id = '.$smb_user_id.'');
		  $this->db->where('supplier_service.user_id' , $user_id);
		  $this->db->where('supplier_service.status' , '1');
		  $this->db->where('supplier_service.currency', $currency);
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
		  $this->db->where('status', '1');
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
	 public function fetch_min_budget($user_id){
	  $this->db->select_min('total_bundle_price');
	  $this->db->where('smb_id',$user_id);
	  $query = $this->db->get('preparing_bundle');
	  return $query->row();
	 } 

	 public function fetch_max_budget($user_id){
	  $this->db->select_max('total_bundle_price');
	  $this->db->where('smb_id',$user_id);
	  $query = $this->db->get('preparing_bundle');
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

	  public function category_fetch()
	{
		$this->db->select('*');
	   $this->db->from('category');
	   $query = $this->db->get();
	   return $query->result();
	}

	public function all_supplier()
	{
		$this->db->select('*');
	   $this->db->from('supplier_service');
	    $this->db->group_by('supplier_name'); 
	   $query = $this->db->get();
	   return $query->result();
	}

	public function fetch_icecat_data($mpn)
	{
		$this->db->Select('*');
		$this->db->from('icecat_data');
		$this->db->where('requested_prod_id',$mpn);
		$query = $this->db->get();
		return $query->row();
	}

	public function bundle_insert($bundle_array){
		$this->db->insert('bundle_payment', $bundle_array);
		return $this->db->insert_id();
	}

	public function result_bundle_dominator($smb_id,$max_range,$min_range){
		$this->db->select("*");
		$this->db->from("preparing_bundle");
		$this->db->where("smb_id",$smb_id);
		$this->db->where("total_bundle_price <",$max_range);
		$this->db->where("total_bundle_price >=",$min_range);
		/*if(!empty($fetch_suppliers)){
			foreach($fetch_suppliers AS $each_supplier){
				$this->db->or_where_in('suppliers',$each_supplier);
			}
		}
		if(!empty($fetch_solutions)){
			$encode_json = json_encode($fetch_solutions);
			$condition = implode(" OR ", array_map(function($encode_json) {
			    return "JSON_CONTAINS(product_category, '$encode_json')";
			}, $fetch_solutions));
			$this->db->where_in('bundle_json',$condition);
		}*/
		$this->db->order_by('total_bundle_price','desc');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}
	
	public function result_bungle_dominator_min($smb_id){
		$this->db->select_min("total_bundle_price");
		$this->db->from("preparing_bundle");
		$this->db->where("smb_id",$smb_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function result_bungle_dominator_max($smb_id){
		$this->db->select_max("total_bundle_price");
		$this->db->from("preparing_bundle");
		$this->db->where("smb_id",$smb_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function result_bundle_final_dominator($smb_id){
		$this->db->select("*");
		$this->db->from("preparing_mysmb_bundle");
		$this->db->where("smb_id",$smb_id);
		$this->db->order_by('total_bundle_price','desc');
		$this->db->limit(6, 0);
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function fetch_price_range(){
		$this->db->select("price_range");
		$this->db->from("supplier_service");
		$this->db->DISTINCT("price_range");
		$this->db->order_by("price_range");
		$query = $this->db->get();
		return $query->result();
	}


	public function get_details($service_id)
	{
		$this->db->select("*");
		$this->db->from("supplier_service");
		$this->db->join('user','supplier_service.user_id = user.user_id');
		$this->db->where("supplier_service_id",$service_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_scrape_image($td_part)
	{
		$this->db->select("*");
		$this->db->from("td_scrape");
		$this->db->where("td_part",$td_part);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_openrange_image($td_part)
	{
		$this->openrange_db = $this->load->database(db3, true);
		$this->openrange_db->select("*");
		$this->openrange_db->from("openrange_data_map");
		$this->openrange_db->where("requested_prod_id",$td_part);
		$query = $this->openrange_db->get();
		return $query->row();
	}

	public function fetch_service_data()
	{
		$this->db->select("*");
		$this->db->from("supplier_service");
		$query = $this->db->get();
		return $query->row();
	}

	public function get_symbol($currencyCode)
	{
		$this->db->select("*");
		$this->db->from("currency");
		$this->db->where("code",$currencyCode);
		$query = $this->db->get();
		return $query->row();
	}

// Results Sidebar starts

	public function check_results_sidebar($user_id){
		$this->db->select("*");
		$this->db->from("results_sidebar_data");
		$this->db->where("user_id",$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function insert_sidebar_data($result_sidebar){
		$this->db->insert('results_sidebar_data', $result_sidebar);
		return $this->db->insert_id();
	}

	public function update_sidebar_data($records,$result_id){
		$this->db->where('results_sidebar_data_id', $result_id);
		$query = $this->db->update('results_sidebar_data', $records);
		return true;
	}
// Results Sidebar Ends

}

/* End of file Results_m.php */
/* Location: ./application/models/Results_m.php */