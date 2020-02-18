<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard | ProtectBox</title>

    <!-- Favicons-->
   <?php $this->load->view("common/metalinks");?>
   <style>
	.new_div {
		margin-bottom:20px;
	}
	.rounded_div {
		border:1px solid #CCC;
		box-shadow: 0px 0px 3px #bfbfbf;
		border-radius:5px;
	}
    .main_image
    {
		width:60%;
		margin: 0 15px 30px 0;
    }
    #gauge_compliance-license-text{
    	display:none;
    }
    #gauge_supply_chain-license-text{
    	display:none;
    }
</style>
	<link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<!--<div id="load"></div> Mobile menu overlay mask -->
	<!-- Header================================================== -->
	<?php $this->load->view("common/header");?>
	<section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
         Admin Dashboard
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="table-responsive rounded_div">
                <h3 style="padding:8px;">TechData UK</h3>
               <div class="col-md-12 col-sm-12">
				   <div style="text-align:center;padding:10px;"  id="btn_hidezz">
						<a href="<?php echo base_url();?>techdata_uk_pull" target="_blank" class="btn btn-primary">Pull Data</a>
				   </div>
				   <div style="text-align:center;padding:10px;"  id="btn_hidezz">
						<a href="<?php echo base_url();?>techdata_uk_pull" target="_blank" class="btn btn-primary">Scrape Data</a>
				   </div>
                </div>
            </div>
        </div>

		<div class="col-md-12 col-sm-12" style="margin-top:15px;">
            <div class="table-responsive rounded_div">
                <h3 style="padding:8px;">TechData US</h3>
               <div class="col-md-12 col-sm-12">
				   <div style="text-align:center;padding:10px;"  id="btn_hidezz_us">
						<a href="<?php echo base_url();?>techdata_us_pull" target="_blank" class="btn btn-primary">Pull Data</a>
				   </div>
				   <div style="text-align:center;padding:10px;"  id="btn_hidezz_us">
						<a href="<?php echo base_url();?>techdata_us_pull" target="_blank" class="btn btn-primary">Scrape Data</a>
				   </div>
                </div>
            </div>
        </div>

		<div class="col-md-12 col-sm-12" style="margin-top:15px;">
            <div class="table-responsive rounded_div">
                <h3 style="padding:8px;">Custom Order</h3>
               <div class="col-md-12 col-sm-12">
				   <form action="<?php echo base_url();?>admin_dashboard/custom_order" method="POST">
				   		<div class="row">
							<div class="col-md-4">
								<label>TD Part Number&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" name="td_part" value="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<button type="submit"  class="btn btn-success btn-medium " >Place Order</a>
								</div>
							</div>
						</div>
						
				   </form>
                </div>
            </div>
        </div>

		<div class="col-md-12  col-sm-12" style="margin-top:15px;">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
				<!-- End row -->
				<div id="supplier_alert" style="display:none;">
					<div class="alert alert-success"> <strong>Supplier status updated successfully!</strong> </div>
				</div>
				<div id="customer_alert" style="display:none;">
					<div class="alert alert-success"> <strong>Customer status updated successfully!</strong> </div>
				</div>
				<div id="service_alert" style="display:none;">
					<div class="alert alert-success"> <strong>Service status updated successfully!</strong> </div>
				</div>
				<div id="order_alert" style="display:none;">
					<div class="alert alert-success"> <strong>Order status updated successfully!</strong> </div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="table-responsive rounded_div">
							<h3 style="padding:8px;">Total Suppliers</h3>
						   <div class="col-md-12 col-sm-12" style="padding:15px;margin-left:-5px;">
								<div class="row">
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#EC8B0D;">
											<h4 style="color:#fff;"><?php echo $total_suppliers;?></h4>
											<p style="color:#fff;">Total</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#49c149;">
											<h4 style="color:#fff;"><?php echo $active_suppliers;?></h4>
											<p style="color:#fff;">Active</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#bbbb1d;">
											<?php
												$count_inactive_suppliers = $total_suppliers - $active_suppliers;
											?>
											<h4 style="color:#fff;"><?php echo $count_inactive_suppliers;?></h4>
											<p style="color:#fff;">Inactive</p>
										</div>
									</div>
								</div>
								<div class="table-responsive" style="margin-top:15px;">
										<table id="" class="table table-striped table-bordered  example">
											<thead>
											  <tr>
												<th width="10%">Supplier&nbsp;No.</th>
												<th width="15%">Supplier&nbsp;Name</th>
												<th width="30%">Company&nbsp;Name</th>
												<th width="15%">Email</th>
												<th width="15%">Phone</th>
												<th>Status</th>
												<?php
													if(empty($get_admin_info)){
												?>
														<th width="15%">More&nbsp;Info</th>
												<?php
													}else{
												
													if($get_admin_info->supplier_price_edit == 'YES' || $get_admin_info->supplier_price_review == 'YES'){
												?>
													<th width="15%">More&nbsp;Info</th>
												<?php
													}
												}	
												?>
											  </tr>
											</thead>
											<tbody>
												<?php
													$size_all_suppliers = count($all_suppliers);
													if($size_all_suppliers > 0){							
													$i = 1;
													foreach($all_suppliers AS $supplier_info){
												?>
											  <tr>
												<td><?php echo $i;?></td>
												<td><?php echo $supplier_info->firstname;?>&nbsp;<?php echo $supplier_info->lastname;?>&nbsp;
												<?php
												$check_date = $supplier_info->registration_date;
												$present_time = time();
												$last_seven_days = strtotime("7 days ago");
												if($check_date > $last_seven_days && $check_date <= $present_time){
													echo '<span style="color:red;font-size:20px;">*</span>';
												}else{
													echo '';
												}
											?>
												</td>
												<td><?php echo $supplier_info->company_name;?></td>
												<td><?php echo $supplier_info->email;?></td>
												<td><?php echo $supplier_info->phone;?></td>
												<td>
													<div class="form-group options">
														<label class="switch-light switch-ios">
														<input type="checkbox" name="status" id="supplier_option" <?php echo (($supplier_info->status == '1')?'checked':'')?> onchange="supplier_statzz(<?php echo $supplier_info->user_id?>);">
														<span>
															<span>Inactive</span>
															<span>Active</span>
														</span>
														<a></a>
														</label>
													</div>
													<input type="hidden" id="supp_tgle_<?php echo $supplier_info->user_id;?>" value="<?php echo $supplier_info->status;?>">
												</td>
												<?php
													if (empty($get_admin_info)){
												?>
												<td>
													<a href="<?php echo base_url('edit_supplier');?>/<?php echo $supplier_info->user_id;?>" class="btn btn-warning" style="width:110px;">Edit Supplier</a><br/><a href="<?php echo base_url('service_details');?>/<?php echo $supplier_info->user_id;?>" class="btn btn-success" style="width:110px;">View Services</a>
												</td>
												<?php
													}else{
												?>	
												<?php 
													if($get_admin_info->supplier_price_edit == 'YES' || $get_admin_info->supplier_price_review == 'YES'){
												?>
												<td>
													<?php
														if($get_admin_info->supplier_price_edit == 'YES'){
													?>
														<a href="<?php echo base_url('edit_supplier');?>/<?php echo $supplier_info->user_id;?>" class="btn btn-warning" style="width:110px;">Edit Supplier</a><br/>
													<?php
														}
													?>
														
													<?php
														if($get_admin_info->supplier_price_review == 'YES'){
													?>	
														<a href="<?php echo base_url('service_details');?>/<?php echo $supplier_info->user_id;?>" class="btn btn-success" style="width:110px;">View Services</a>
													<?php
															}
													?>
												</td>
												<?php
													}
												}
												?>
											  </tr>
												<?php
													$i++;
													}
												}else{
												?>
												<tr>
													<td colspan="6">No results to display</td>
												</tr>
												<?php
												}
												?>
											</tbody>
										</table>
									</div>
								
							</div>
						</div>
					</div>
					
					<div class="col-md-12 col-sm-12" style="margin-top:15px;">
						<div class="table-responsive rounded_div">
							<h3 style="padding:8px;">Total Customers</h3>
						   <div class="col-md-12 col-sm-12" style="padding:15px;margin-left:-5px;">
								<div class="row">
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#EC8B0D;">
											<h4 style="color:#fff;"><?php echo $total_customers;?></h4>
											<p style="color:#fff;">Total</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#49c149;">
											<h4 style="color:#fff;"><?php echo $active_customers;?></h4>
											<p style="color:#fff;">Active</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#bbbb1d;">
											<?php
												$count_inactive_customers = $total_customers - $active_customers;
											?>
											<h4 style="color:#fff;"><?php echo $count_inactive_customers;?></h4>
											<p style="color:#fff;">Inactive</p>
										</div>
									</div>
								</div>
								<div class=" table-responsive" style="margin-top:15px;">

								  <table id="" class="table table-striped table-bordered example">
										<thead>
										  <tr>
											<th width="10%">Customer&nbsp;No.</th>
											<th width="15%">SME&nbsp;Name</th>
											<th width="30%">Company&nbsp;Name</th>
											<th width="15%">Email</th>
											<th width="15%">Phone</th>
											<th width="15%">Status</th>
											<?php
												if (empty($get_admin_info)){
											?>
												<th width="15%">Order&nbsp;Info</th>
												<th width="15%">More&nbsp;Info</th>
											<?php
												}else{
											
												if($get_admin_info->smb_leads_edit == 'YES' || $get_admin_info->smb_leads_review == 'YES'){
											?>
												<th width="15%">Order&nbsp;Info</th>
												<th width="15%">More&nbsp;Info</th>
											<?php
												}
											}	
											?>

										  </tr>
										  </tr>
										</thead>
										<tbody>
											<?php
												$size_all_sme = count($all_sme);
												if($size_all_sme > 0){							
												$i = 1;
												foreach($all_sme AS $sme_info){
											?>
										  <tr>
											<td><?php echo $i;?></td>
											<td><?php echo $sme_info->firstname;?>&nbsp;<?php echo $sme_info->lastname;?>&nbsp;
												<?php
												$check_date = $sme_info->registration_date;
												$present_time = time();
												$last_seven_days = strtotime("7 days ago");
												if($check_date > $last_seven_days && $check_date <= $present_time){
													echo '<span style="color:red;font-size:20px;">*</span>';
												}else{
													echo '';
												}
											?>
											</td>
											<td><?php echo $sme_info->company_name;?></td>
											<td><?php echo $sme_info->email;?></td>
											<td><?php echo $sme_info->phone;?></td>
											<td>
												<div class="form-group options">
													<label class="switch-light switch-ios">
													
													<input type="checkbox" name="status" id="customer_option" <?php echo (($sme_info->status == '1')?'checked':'')?> onchange="customer_statzz('<?php echo $sme_info->user_id?>');">

													<span>
														<span>Inactive</span>
														<span>Active</span>
													</span>
													<a></a>
													</label>
												</div>
												<input type="hidden" id="tgle_<?php echo $sme_info->user_id;?>" value="<?php echo $sme_info->status;?>">
											</td>
											<?php
												if (empty($get_admin_info)){
											?>
											<td>
												<a href="<?php echo base_url('edit_smb');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Edit SMB</a><br/><a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
											</td>
											<td>
												<a href="<?php echo base_url('sme_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">View Orders</a><a href="<?php echo base_url('sme_pending_order');?>/<?php echo $sme_info->user_id;?>" class="btn" style="background-color:#808080;color:#fff;border-color: #4cae4c;font-size:13px;padding-left:4px;width:100px;">Pending Orders</a>
											</td>
											<?php
												}else{
											?>
											<?php 
												if($get_admin_info->smb_leads_edit == 'YES'){
											?>
											<td>
												<a href="<?php echo base_url('edit_smb');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Edit SMB</a><br/><a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
											</td>
											<?php 
											}if($get_admin_info->smb_leads_review == 'YES'){
											?>
											<td>
												<a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
											</td>
											<?php
											}
											?>
											<td>
												<a href="<?php echo base_url('sme_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">View Orders</a><br/><a href="<?php echo base_url('sme_pending_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">Pending Orders</a>
											</td>
										   <?php
											}
										   ?>
										  </tr>
											<?php
												$i++;
												}
											}else{
											?>
											<tr>
												<td colspan="6">No results to display</td>
											</tr>
											<?php
											}
											?>
										</tbody>
									  </table>
								  </div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12" style="padding-top:20px;">
						<div class="table-responsive rounded_div">
							<h3 style="padding:8px;">Total Services</h3>
						   <div class="col-md-12 col-sm-12" style="padding:15px;margin-left:-5px;">
								<div class="row">
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#EC8B0D;">
									
											<h4 style="color:#fff;"><?php echo $services;?></h4>
											<p style="color:#fff;">Total</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#49c149;">
									
											<h4 style="color:#fff;"><?php echo $active_services;?></h4>
											<p style="color:#fff;">Active</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#bbbb1d;">
											<?php
												$count_inactive_services = $services - $active_services;
											?>
											<h4 style="color:#fff;"><?php echo $count_inactive_services;?></h4>
											<p style="color:#fff;">Inactive</p>
										</div>
									</div>
								</div>
								<div class=" table-responsive" style="margin-top:15px;">
								  <table id="" class="table table-striped table-bordered example" >
										<thead>
										  <tr>
											<th width="10%">Service&nbsp;No.</th>
											<th>Service&nbsp;Provider</th>
											<th width="30%">Logo</th>
											<th width="15%">Service&nbsp;Name</th>
											<th width="15%">Customer&nbsp;Type</th>
											<th width="15%">Product&nbsp;Category</th>
											<th width="15%">Product&nbsp;Detail</th>
											<th width="15%">Currency</th>
											<th width="15%">Price&nbsp;Range</th>
											<th width="15%">Price&nbsp;Detail</th>
											<th width="15%">Operating&nbsp;System</th>
											<th width="15%">Specialist&nbsp;Hardware</th>
											<th width="15%">Third&nbsp;Party&nbsp;Supplier</th>
											<th width="15%">Ease&nbsp;of&nbsp;setup</th>
											<th width="15%">Protection&nbsp;level</th>
											<th width="15%">Product&nbsp;link</th>
											<th width="15%">Commission&nbsp;detail</th>
											<th width="15%">Payment&nbsp;option</th>
											<th width="15%">Government&nbsp;voucher</th>
											<th width="15%">Cashback</th>
											<th width="15%">Rating</th>
											<th width="15%">Location</th>
											<th width="15%">Regulation</th>
											<th width="15%">User&nbsp;instruction</th>
											<th>Status</th>
											<?php
												if (empty($get_admin_info)){
											?>
													<th width="15%">More&nbsp;Info</th>
											<?php
												}else{
											
												if($get_admin_info->supplier_desc_edit == 'YES'){
											?>
												<th width="15%">More&nbsp;Info</th>
											<?php
												}
											}	
											?>
										  </tr>
										</thead>
										<tbody>
											<?php
												$i = 1;
												foreach($get_all_services AS $service_info){	
											?>
										  <tr>
											<td><?php echo $i;?></td>
											<td>
												<?php 
													echo ucfirst($service_info->service_provider);
												?>
											</td>
											<td>
											<?php
												$this->load->model('results_m');
												if($service_info->logo != ''){
													$pro_logo = base_url('uploads/'.$service_info->logo);	

												}else if($service_info->openrange != ''){

													if($service_info->openrange == 'scraped'){
														$fetch_image = $this->results_m->fetch_scrape_image($service_info->td_part);
														$decode_images = json_decode($fetch_image->product_image,TRUE);
														$fetch_last_url = count($decode_images) - 2;
														$pro_logo = $decode_images[$fetch_last_url];

													}else if($service_info->openrange == 'mapped'){
														$fetch_image = $this->results_m->fetch_openrange_image($service_info->td_part);
														$pro_logo = $fetch_image->HighPic;
													}

												}else{
													$pro_logo = '';
												}
													if($pro_logo != ''){
												?>
													<img src="<?php echo $pro_logo;?>" class="main_image amar_img__<?php echo $key;?>" />


													<div class="imager_dev yoo_okk" style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;display:none;">
													 <?php
														$pro_details = $service_info->product_detail;
														$substr_details = substr($pro_details,0,30);
														echo $substr_details;
														echo "...";
													 ?>
												</div>
												<?php
													}else{	
												?>
												<div class="imager_dev" style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;">
													 <?php
														$pro_details = $service_info->product_detail;
														$substr_details = substr($pro_details,0,30);
														echo $substr_details;
														echo "...";
													 ?>
												</div>
												<?php
													}
												?>
											</td>
											<td><?php echo $service_info->service_name;?>&nbsp;
												<?php
												$check_date = $service_info->upload_date;
												$present_time = time();
												$last_seven_days = strtotime("7 days ago");
												if($check_date > $last_seven_days && $check_date <= $present_time){
													echo '<span style="color:red;font-size:20px;">*</span>';
												}else{
													echo '';
												}
											?></td>
											<td><?php echo $service_info->customer_type;?></td>
											<td><?php echo $service_info->product_category;?></td>
											<td><?php echo $service_info->product_detail;?></td>
											<td><?php echo $service_info->currency;?></td>
											<td><?php echo $service_info->price_range;?></td>
											<td><?php echo $service_info->price_detail;?></td>
											<td><?php echo $service_info->operating_system;?></td>
											<td><?php echo $service_info->specialist_hardware;?></td>
											<td><?php echo $service_info->third_party_supplier;?></td>
											<td><?php echo $service_info->ease_of_setup;?></td>
											<td><?php echo $service_info->protection_level;?></td>
											<td><a href="<?php echo $service_info->product_link;?>"><?php echo $service_info->product_link;?></a></td>
											<td><?php echo $service_info->commission_detail;?></td>
											<td><?php echo $service_info->payment_option;?></td>
											<td><?php echo $service_info->govt_voucher;?></td>
											<td><?php echo $service_info->cashback;?></td>
											<td><?php echo $service_info->rating;?></td>
											<td><?php echo $service_info->location;?></td>
											<td><?php echo $service_info->regulation;?></td>
											<td><?php echo $service_info->user_instruction;?></td>
											<td>
												<div class="form-group options">
													<label class="switch-light switch-ios">
													<input type="checkbox" name="status" id="service_option" <?php echo (($service_info->status == '1')?'checked':'')?> onchange="service_statzz(<?php echo $service_info->supplier_service_id?>);">
													<span>
														<span>Inactive</span>
														<span>Active</span>
													</span>
													<a></a>
													</label>
												</div>
												<input type="hidden" id="serv_tgle_<?php echo $service_info->supplier_service_id;?>" value="<?php echo $service_info->status;?>">
											</td>
											<?php
												if (empty($get_admin_info)){
											?>
											<td>
												<a href="<?php echo base_url('edit_admin_service_details');?>/<?php echo $this->uri->segment(2);?>/<?php echo $service_info->supplier_service_id;?>" class="btn btn-warning">Edit Services</a>
											</td>
											<?php
												}else{
											?>	
											<?php 
												if($get_admin_info->supplier_desc_edit == 'YES'){
											?>
											<td>
												<?php
													if($get_admin_info->supplier_desc_edit == 'YES'){
												?>
													<a href="<?php echo base_url('edit_admin_service_details');?>/<?php echo $service_info->supplier_service_id;?>" class="btn btn-warning">Edit Services</a>
												<?php
													}
												?>
											</td>
											<?php
												}
											}
											?>
										  </tr>
											<?php
												$i++;
												}
											?>
										</tbody>
									  </table>
								  </div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12" style="padding-top:20px;">
						<div class="table-responsive rounded_div">
							<h3 style="padding:8px;">Total Orders</h3>
						   <div class="col-md-12 col-sm-12" style="padding:15px;margin-left:-5px;">
								<div class="row">
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#EC8B0D;">
											<h4 style="color:#fff;"><?php echo $orders;?></h4>
											<p style="color:#fff;">Total</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#49c149;">
											<h4 style="color:#fff;"><?php echo $active_orders;?></h4>
											<p style="color:#fff;">Active</p>
										</div>
									</div>
									<div class="col-md-4" style="padding-top:5px;">
										<div class="rounded_div text-center" style="background-color:#bbbb1d;">
											<?php
												$count_inactive_orders = $orders - $active_orders;
											?>
											<h4 style="color:#fff;"><?php echo $count_inactive_orders;?></h4>
											<p style="color:#fff;">Inactive</p>
										</div>
									</div>
								</div>
								<div class=" table-responsive" style="margin-top:15px;">
								  <table id="" class="table table-striped table-bordered example" style="width:100%">
										<thead>
										  <tr>
											<th width="10%">Order&nbsp;No.</th>
											<th width="30%">SME</th>
											<th width="15%">Supplier&nbsp;Name</th>
											<th width="15%">Service&nbsp;Provider</th>
											<th width="15%">Sage/Direct</th>
											<th width="15%">Total&nbsp;Price</th>
											<th width="15%">Payment&nbsp;Option</th>
											<th width="15%">Payment&nbsp;Method</th>
											<th width="15%">Customer&nbsp;Payment&nbsp;Status</th>
											<th width="15%">Supplier&nbsp;Payment&nbsp;Status</th>
											<th width="15%">Order&nbsp;Status</th>
											<th width="15%">Refund&nbsp;Status</th>
											<th width="15%">Refund&nbsp;Item</th>
											<th width="15%">Status</th>
											<th width="15%">Date</th>
											<th width="15%">Action</th>
										  </tr>
										</thead>
										<tbody>
											<?php
												$i = 1;
												foreach($fetch_all_orders AS $all_orders){
											?>
										  <tr>
											<td><?php echo $i;?></td>
											<td><?php 
												$sme_id = $all_orders->sme_id;
												$this->load->model('admin_dashboard_m');
												$get_sme_name = $this->admin_dashboard_m->get_sme_name($sme_id);
												echo $get_sme_name->firstname; 
												echo "&nbsp;";
												echo $get_sme_name->lastname;
											?>&nbsp;
												<?php
												$check_date = $all_orders->upload_date;
												$present_time = time();
												$last_seven_days = strtotime("7 days ago");
												if($check_date > $last_seven_days && $check_date <= $present_time){
													echo '<span style="color:red;font-size:20px;">*</span>';
												}else{
													echo '';
												}
											?></td>
											<td><?php
												$supplier_id = $all_orders->supplier_id;
												$get_sup_name = $this->admin_dashboard_m->get_sme_name($supplier_id);
												echo $get_sup_name->firstname; 
												echo "&nbsp;";
												echo $get_sup_name->lastname;?>&nbsp;
												<?php
													$check_date = $all_orders->upload_date;
													$present_time = time();
													$last_seven_days = strtotime("7 days ago");
													if($check_date > $last_seven_days && $check_date <= $present_time){
														echo '<span style="color:red;font-size:20px;">*</span>';
													}else{
														echo '';
													}
												?>
											</td>
											<td>
											<?php 
												$get_providing_method = $this->admin_dashboard_m->get_method($supplier_id);
												echo ucfirst($get_providing_method->service_provider);
											 ?>
											</td>
											<td>
												<?php 
													if($get_sme_name->user_id == '52'){
														echo "Sage";
													}else{
														echo "Direct";
													}
												?>
											</td>
											<td><?php echo $all_orders->currency;?>&nbsp;<?php echo $all_orders->total_price;?></td>
											<td><?php echo $all_orders->payment_option;?></td>
											<td><?php echo $all_orders->payment_method;?></td>
											<td><?php echo $all_orders->cus_payment_status;?></td>
											<td><?php echo (($all_orders->sup_payment_status == 'Success')?'Success':(($all_orders->sup_payment_status == 'Failed')?'Failed':'Pending'));?></td>
											<td>
												<?php 
													$order_status = explode(",",$all_orders->order_status);
													$tmp = array_count_values($order_status);
													if (in_array("Pending", $order_status))
													{
													  $cnt = $tmp['Pending'];
													  echo $cnt.' Pending';
													  echo "<br>";
													}
													if (in_array("Success", $order_status))
													{
													  $cnt = $tmp['Success'];
													  echo $cnt.' Success';
													  echo "<br>";
													}
													if (in_array("Intimate-seller", $order_status))
													{
													  $cnt = $tmp['Intimate-seller'];
													  echo $cnt.' Intimate-seller';
													  echo "<br>";
													}
													if (in_array("Confirmed-by-seller", $order_status))
													{
													  $cnt = $tmp['Confirmed-by-seller'];
													  echo $cnt.' Confirmed-by-seller';
													  echo "<br>";
													}
													if (in_array("Reject-by-seller", $order_status))
													{
													  $cnt = $tmp['Reject-by-seller'];
													  echo $cnt.' Reject-by-seller';
													  echo "<br>";
													}
													if (in_array("Cancelled-by-Admin", $order_status))
													{
													  $cnt = $tmp['Cancelled-by-Admin'];
													  echo $cnt.' Cancelled-by-Admin';
													  echo "<br>";
													}
													
												?>
											</td>
											<td>
												<?php
													$ci =&get_instance();
													$ci->load->model('view_all_orders_m');
													$check_refund = $ci->view_all_orders_m->check_refund($all_orders->orders_id);
													if(!empty($check_refund) > 0){
														echo ucfirst($check_refund->refund_status);
													}else{
														echo "NA";
													}
												?>
											</td>
											<td>
												<?php 
													if(!empty($check_refund) > 0){
														echo ucfirst($check_refund->service_name);
													}else{
														echo "NA";
													}
												?>
											</td>
											<td>
												<div class="form-group options">
													<label class="switch-light switch-ios">
													<input type="checkbox" name="status" id="order_option" <?php echo(($all_orders->status == '1')?'checked':'');?> onchange="order_statzz(<?php echo $all_orders->orders_id?>);">
													<span>
														<span>Inactive</span>
														<span>Active</span>
													</span>
													<a></a>
													</label>
												</div>
												<input type="hidden" id="order_tgle_<?php echo $all_orders->orders_id;?>" value="<?php echo $all_orders->status;?>">
											</td>
											<td><?php echo date('d/m/Y',$all_orders->upload_date);?></td>
											<td><a href="<?php echo base_url('order_details');?>/<?php echo $all_orders->orders_id;?>" class="btn btn-success" style="width:100px;">View Details</a></td>
										  </tr>
											<?php
												$i++;
												}
											?>
										</tbody>
									  </table>
								  </div>
							</div>
						</div>
					</div>

					
				  </div>
				</div><!-- End row -->

		</div><!-- End row -->
	</div><!-- End container -->
			
	</main><!-- End main -->
	<?php $this->load->view("common/footer");?>
	 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.example').DataTable( {
				dom: 'Bfrtip',
				/*buttons: [
					'copy', 'csv', 'excel', 'print'
				],*/
				"paging":   false,
				"bInfo" : false
			});
			$("img").on("error", function() {
			  $(this).hide();
			 $(this).siblings('.yoo_okk').show();
			});
		});
	</script>
	
<script>
    	function supplier_statzz(e){
    		var status_val = $('#supp_tgle_'+e+'').val();

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_suppliers/update_status',
		        data: {'status_val': status_val,'user_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#supp_tgle_'+e+'').val(response);
		          $('#supplier_alert').show();
		        }
		      });
    		 /* ajax code ends*/
    	}

		function customer_statzz(e){
    		var status_val = $('#tgle_'+e+'').val();

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_sme/update_status',
		        data: {'status_val': status_val,'user_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          $('#customer_alert').show();
		        }
		      });
    		 /* ajax code ends*/
    	}

		function service_statzz(e){
    		var status_val = $('#serv_tgle_'+e+'').val();

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_all_services/update_status',
		        data: {'status_val': status_val,'supplier_service_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#serv_tgle_'+e+'').val(response);
		          $('#service_alert').show();
		        }
		      });
    		 /* ajax code ends*/
    	}

		function order_statzz(e){
    		var status_val = $('#order_tgle_'+e+'').val();
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_all_orders/update_status',
		        data: {'status_val': status_val,'order_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#order_tgle_'+e+'').val(response);
		          $('#order_alert').show();
		        }
		      });
    		 /* ajax code ends*/
    		
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
</body>
</html>