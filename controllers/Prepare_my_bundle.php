<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prepare_my_bundle extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
    }
	public function index()
	{
		set_time_limit(0);
		$this->load->model('prepare_my_bundle_m');
		$this->load->model('results_m');
		$this->load->model('bundle_json_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget_per_year = $get_budget->budget_cybersecurity_per_year_input;

		if(isset($this->session->userdata['results']['session_price_range']) && $this->session->userdata['results']['session_price_range'] != ''){
            $user_budget = $this->session->userdata['results']['session_price_range'];
        }else{
            $user_budget = $user_budget_per_year;
        }
		$max_range = $user_budget;
		$min_range = 0;


		/*first remove the previous bundles to initiate new update conditions */
		$remove_prev_bundz = $this->bundle_json_m->rem_prev_bundles($user_id);
		/* removing prev bundles ends */

		//$smb_bundles = $this->prepare_my_bundle_m->result_bundle_dominator($user_id,$max_range,$min_range);
		$smb_bundles = $this->prepare_my_bundle_m->result_bundle_dominator($user_id,$max_range,$min_range);
		
		/* bundle loop start */
			$loop_bundle_cnt = 0;
				  foreach($smb_bundles As $i=>$bundle_fetch){ //$total_bundles
							$service_idz = array();
							$supplier_name = array();
							$total_price = 0;
							$business_cats = json_decode($bundle_fetch->bundle_json,true);
							
							
							foreach($business_cats As $chabi=>$cat_boxesz){

								 $cat_boxes = $cat_boxesz['product_category'];
								 $count_cat_products = count($cat_boxesz['service_id']);
								 $risk_score = $cat_boxesz['score'];
									
									if(!empty($cat_boxesz['max_smb_cat_price'])){
									 if($count_cat_products > 0){	// && $cat_boxesz['cat_price'] < $cat_boxesz['max_smb_cat_price'] NOT WORKING
										
										$cat_price = $cat_boxesz['cat_price'];
										$total_price = $total_price+$cat_boxesz['cat_price'];
											
										if(count($cat_boxesz['service_id']) > 0){
												$supplier_name[] = $cat_boxesz['supplier_name'];
												$service_idz[] = array(
													'product_category' => $cat_boxes,
													'cat_price' => $cat_boxesz['cat_price'],
													'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
													'score' => $cat_boxesz['score'],
													'max_score' => $cat_boxesz['max_score'],
													'service_id'=> $cat_boxesz['service_id'],
													'supplier_name'=>$cat_boxesz['supplier_name']
												);
										}
										//print_r($supplier_name);
										//print_r($service_idz);
									}
								}else{
									
									if($count_cat_products > 0){

										$cat_price = $cat_boxesz['cat_price'];
										$total_price = $total_price+$cat_boxesz['cat_price'];
											
										if(count($cat_boxesz['service_id']) > 0){

												$supplier_name[] = $cat_boxesz['supplier_name'];
												$service_idz[] = array(
													'product_category' => $cat_boxes,
													'cat_price' => $cat_boxesz['cat_price'],
													'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
													'score' => $cat_boxesz['score'],
													'max_score' => $cat_boxesz['max_score'],
													'service_id'=> $cat_boxesz['service_id'],
													'supplier_name'=>$cat_boxesz['supplier_name']
												);
										}
										//print_r($supplier_name);
										//print_r($service_idz);
									}
								}
								
						      }
							 
							  $total_price = round($total_price,2);
							  $final_bundle_json = (object)($service_idz);
							  $bundle_json = json_encode($final_bundle_json,true);
							 
							
							  if(count($service_idz) > 0){
								  $final_supplier_name_json = (object)($supplier_name);
								  $supplier_name_json = json_encode($final_supplier_name_json,true);

								    //insert into my bundle table starts

									if($total_price > 0){
									   $records = array(
											'smb_id' => $user_id,
											'suppliers' => $supplier_name_json,
											'total_bundle_price' => $total_price,
											'bundle_json' => $bundle_json,
											'bundle_order' => $loop_bundle_cnt,
											'risk_score' => "",
											'category_risk_bundle_json' => ""
										  );
									}
									
									$smb_bundle = $this->bundle_json_m->insert_mysmb_bundle($records);
									//insert into my bundle table ends 
								    $loop_bundle_cnt++;
							  }
							  
					}
					redirect('results');
		/* bundle loop ends */
	}

	public function create_bundle()
	{
		set_time_limit(0);
		$this->load->model('prepare_my_bundle_m');
		$this->load->model('results_m');
		$this->load->model('bundle_json_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget = $get_budget->budget_cybersecurity_per_year_input;

		if(isset($this->session->userdata['results']['session_price_range']) && $this->session->userdata['results']['session_price_range'] != ''){
			$price_slider = $this->session->userdata['results']['session_price_range'];
		}else{
			$price_slider = $user_budget;
		}

		/*first remove the previous bundles to initiate new update conditions */
		$remove_prev_bundz = $this->bundle_json_m->rem_prev_bundles($user_id);
		/* removing prev bundles ends */

		$supplier_top_filter = $this->input->get('suppliers');
		$solution_top_filter = $this->input->get('solution');
		$price_range_top_filter = $this->input->get('price_range');

		

		$top_filter_session = array(
				'session_suppliers' => $supplier_top_filter,
				'session_solution' => $solution_top_filter,
				'session_price_range_top' => $price_range_top_filter
		);
		
		$this->session->set_userdata('top_filter',$top_filter_session);
		
		if($price_range_top_filter != ""){
			$array_price_range = str_replace("-",",",$price_range_top_filter); 
			$explode = explode(",",$array_price_range);
			$max_range = max($explode);
			$min_range = min($explode);
		}else{
			$max_range = $price_slider;
			$min_range = 0;
		}
		//exit;
		$explode_solutions_into_array = $this->session->userdata['top_filter']['session_solution'];
		$explode_suppliers_into_array = $this->session->userdata['top_filter']['session_suppliers'];

		//$smb_bundles = $this->prepare_my_bundle_m->result_bundle_dominator($user_id,$max_range,$min_range);
		$smb_bundles = $this->results_m->result_bundle_dominator($user_id,$max_range,$min_range);
		
		/* bundle loop start */
			$loop_bundle_cnt = 0;
				  foreach($smb_bundles As $i=>$bundle_fetch){ //$total_bundles
							$service_idz = array();
							$supplier_name = array();
							$business_cats = json_decode($bundle_fetch->bundle_json,true);
							$total_price = 0;

							foreach($business_cats As $chabi=>$cat_boxesz){

								 $cat_boxes = $cat_boxesz['product_category'];
								 $count_cat_products = count($cat_boxesz['service_id']);
								 $risk_score = $cat_boxesz['score'];
									
									if(isset($cat_boxesz['max_smb_cat_price']) && $cat_boxesz['max_smb_cat_price'] != ''){
									 if($count_cat_products > 0){	//&& $cat_boxesz['cat_price'] < $cat_boxesz['max_smb_cat_price'] NOT WORKING
										$cat_price = $cat_boxesz['cat_price'];
										//$total_price = $total_price+$cat_boxesz['cat_price'];
											foreach($cat_boxesz['service_id'] As $product_value){
												$fetch_prod_data = $this->results_m->fetch_each_results($product_value);
												$pro_details = $fetch_prod_data->product_detail;
												$substr_details = substr($pro_details,0,30);

												
												//echo $substr_details;
											}

												if(count($cat_boxesz['service_id']) > 0){
													/*loop for solutions */
													if(isset($explode_solutions_into_array) && in_array($cat_boxes,$explode_solutions_into_array)){
														if(isset($explode_suppliers_into_array) && in_array($cat_boxesz['supplier_name'][0],$explode_suppliers_into_array)){
															/*loop for suppliers*/
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}else if(!isset($explode_suppliers_into_array) || count($explode_suppliers_into_array) < 1){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}
													}else if(!isset($explode_solutions_into_array) || count($explode_solutions_into_array) < 1){
														if(isset($explode_suppliers_into_array) && in_array($cat_boxesz['supplier_name'][0],$explode_suppliers_into_array)){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}else if(!isset($explode_suppliers_into_array) || count($explode_suppliers_into_array) < 1){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}
															/*loop for supplier ends */
													}
													/* loop for solutions ends */
												}
									}
								}else{
									if($count_cat_products > 0){
										$cat_price = $cat_boxesz['cat_price'];
										//$total_price = $total_price+$cat_boxesz['cat_price'];
											foreach($cat_boxesz['service_id'] As $product_value){
												$fetch_prod_data = $this->results_m->fetch_each_results($product_value);
												$pro_details = $fetch_prod_data->product_detail;
												$substr_details = substr($pro_details,0,30);

												
												//echo $substr_details;
											}

												if(count($cat_boxesz['service_id']) > 0){
													/*loop for solutions */
													if(isset($explode_solutions_into_array) && in_array($cat_boxes,$explode_solutions_into_array)){
														if(isset($explode_suppliers_into_array) && in_array($cat_boxesz['supplier_name'][0],$explode_suppliers_into_array)){
															/*loop for suppliers*/
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}else if(!isset($explode_suppliers_into_array) || count($explode_suppliers_into_array) < 1){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}
													}else if(!isset($explode_solutions_into_array) || count($explode_solutions_into_array) < 1){
														if(isset($explode_suppliers_into_array) && in_array($cat_boxesz['supplier_name'][0],$explode_suppliers_into_array)){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}else if(!isset($explode_suppliers_into_array) || count($explode_suppliers_into_array) < 1){
															$total_price = $total_price+$cat_boxesz['cat_price'];
															$supplier_name[] = $cat_boxesz['supplier_name'];
															$service_idz[] = array(
																'product_category' => $cat_boxes,
																'cat_price' => $cat_boxesz['cat_price'],
																'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
																'score' => $cat_boxesz['score'],
																'max_score' => $cat_boxesz['max_score'],
																'service_id'=> $cat_boxesz['service_id'],
																'supplier_name'=>$cat_boxesz['supplier_name']
															);
														}
															/*loop for supplier ends */
													}
													/* loop for solutions ends */
												}
									}
								}
						      }
							  $total_price = round($total_price,2);
							  $final_bundle_json = (object)($service_idz);
							  $bundle_json = json_encode($final_bundle_json,true);
							  if(count($service_idz) > 0){
								  $final_supplier_name_json = (object)($supplier_name);
								  $supplier_name_json = json_encode($final_supplier_name_json,true);

								/*insert into my bundle table starts */
								
									if($total_price > 0){
									   $records = array(
											'smb_id' => $user_id,
											'suppliers' => $supplier_name_json,
											'total_bundle_price' => $total_price,
											'bundle_json' => $bundle_json,
											'bundle_order' => $loop_bundle_cnt,
											'risk_score' => "",
											'category_risk_bundle_json' => ""
										  );
									}
									/*print_r($records);
									echo "<br>";
									echo "<br>";*/
									$smb_bundle = $this->bundle_json_m->insert_mysmb_bundle($records);
									

									/*insert into my bundle table ends */
								    $loop_bundle_cnt++;


							  }
							  /*if($loop_bundle_cnt==6){
									break;
							  }*/
	  
					}
					redirect('results');
		/* bundle loop ends */
	}

	public function clear_filter(){
		
		$top_filter_session = array(
				'session_suppliers' => $supplier_top_filter,
				'session_solution' => $solution_top_filter,
				'session_price_range_top' => $price_range_top_filter
		);
		$this->session->unset_userdata('top_filter',$top_filter_session);

		/* after clearing the session we generate bundles again */
		$this->load->model('prepare_my_bundle_m');
		$this->load->model('results_m');
		$this->load->model('bundle_json_m');

		$user_id = $this->session->userdata['logged_in']['user_id'];
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($user_id);
		$user_budget = $get_budget->budget_cybersecurity_per_year_input;
		$max_range = $user_budget;
		$min_range = 0;

		/*first remove the previous bundles to initiate new update conditions */
		$remove_prev_bundz = $this->bundle_json_m->rem_prev_bundles($user_id);
		/* removing prev bundles ends */

		//$smb_bundles = $this->prepare_my_bundle_m->result_bundle_dominator($user_id,$max_range,$min_range);
		$smb_bundles = $this->results_m->result_bundle_dominator($user_id,$max_range,$min_range);
		
		/* bundle loop start */
			$loop_bundle_cnt = 0;
				  foreach($smb_bundles As $i=>$bundle_fetch){ //$total_bundles
							$service_idz = array();
							$supplier_name = array();
							$business_cats = json_decode($bundle_fetch->bundle_json,true);
							$total_price = 0;

							foreach($business_cats As $chabi=>$cat_boxesz){

								 $cat_boxes = $cat_boxesz['product_category'];
								 $count_cat_products = count($cat_boxesz['service_id']);
								 $risk_score = $cat_boxesz['score'];
									
									if(isset($cat_boxesz['max_smb_cat_price']) && $cat_boxesz['max_smb_cat_price'] != ''){
									 if($count_cat_products > 0){	//&& $cat_boxesz['cat_price'] < $cat_boxesz['max_smb_cat_price'] NOT WORKING
										$cat_price = $cat_boxesz['cat_price'];
										$total_price = $total_price+$cat_boxesz['cat_price'];
											foreach($cat_boxesz['service_id'] As $product_value){
												$fetch_prod_data = $this->results_m->fetch_each_results($product_value);
												$pro_details = $fetch_prod_data->product_detail;
												$substr_details = substr($pro_details,0,30);
												//echo $substr_details;
										}
										if(count($cat_boxesz['service_id']) > 0){

												$supplier_name[] = $cat_boxesz['supplier_name'];
												$service_idz[] = array(
													'product_category' => $cat_boxes,
													'cat_price' => $cat_boxesz['cat_price'],
													'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
													'score' => $cat_boxesz['score'],
													'max_score' => $cat_boxesz['max_score'],
													'service_id'=> $cat_boxesz['service_id'],
													'supplier_name'=>$cat_boxesz['supplier_name']
												);
										}
										//print_r($supplier_name);
										//print_r($service_idz);
									}
								}else{
									if($count_cat_products > 0){	//&& $cat_boxesz['cat_price'] < $cat_boxesz['max_smb_cat_price'] NOT WORKING
										$cat_price = $cat_boxesz['cat_price'];
										$total_price = $total_price+$cat_boxesz['cat_price'];
											foreach($cat_boxesz['service_id'] As $product_value){
												$fetch_prod_data = $this->results_m->fetch_each_results($product_value);
												$pro_details = $fetch_prod_data->product_detail;
												$substr_details = substr($pro_details,0,30);
												//echo $substr_details;
										}
										if(count($cat_boxesz['service_id']) > 0){

												$supplier_name[] = $cat_boxesz['supplier_name'];
												$service_idz[] = array(
													'product_category' => $cat_boxes,
													'cat_price' => $cat_boxesz['cat_price'],
													'max_smb_cat_price' => $cat_boxesz['max_smb_cat_price'],
													'score' => $cat_boxesz['score'],
													'max_score' => $cat_boxesz['max_score'],
													'service_id'=> $cat_boxesz['service_id'],
													'supplier_name'=>$cat_boxesz['supplier_name']
												);
										}
										//print_r($supplier_name);
										//print_r($service_idz);
									}
								}
						      }
							  $total_price = round($total_price,2);
							  $final_bundle_json = (object)($service_idz);
							  $bundle_json = json_encode($final_bundle_json,true);
							  if(count($service_idz) > 0){
								  $final_supplier_name_json = (object)($supplier_name);
								  $supplier_name_json = json_encode($final_supplier_name_json,true);

								  /*$records = array(
									'smb_id' => $user_id,
									'suppliers' => $supplier_name_json,
									'total_bundle_price' => $total_price,
									'bundle_json' => $bundle_json,
									'bundle_order' => $i,
									'risk_score' => "",
									'category_risk_bundle_json' => ""
								  );*/

								    /*insert into my bundle table starts */

									if($total_price > 0){
									   $records = array(
											'smb_id' => $user_id,
											'suppliers' => $supplier_name_json,
											'total_bundle_price' => $total_price,
											'bundle_json' => $bundle_json,
											'bundle_order' => $loop_bundle_cnt,
											'risk_score' => "",
											'category_risk_bundle_json' => ""
										  );
									}
									$smb_bundle = $this->bundle_json_m->insert_mysmb_bundle($records);
									

									/*insert into my bundle table ends */
								    $loop_bundle_cnt++;

							  }
							  /*if($loop_bundle_cnt==6){
									break;
							  }*/
					}
		/* bundle loop ends */
	
	}

}

/* End of file Prepare_my_bundle.php */
/* Location: ./application/controllers/Prepare_my_bundle.php */