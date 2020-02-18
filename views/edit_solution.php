<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suppliers | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	<style>
.tooltiplink + .tooltip > .tooltip-inner {
		background-color: #73AD21; 
		color: #FFFFFF; 
		border: 1px solid green;
		padding: 15px;
		font-size: 20px;
	}

	/* Tooltip on top */
	.tooltiplink + .tooltip.top > .tooltip-arrow {
		border-top: 5px solid green;
	}

	/* Tooltip on bottom */
	.tooltiplink + .tooltip.bottom > .tooltip-arrow {
		border-bottom: 5px solid blue;
	}

	/* Tooltip on left */
	.tooltiplink + .tooltip.left > .tooltip-arrow {
		border-left: 5px solid red;
	}

	/* Tooltip on right */
	.tooltiplink + .tooltip.right > .tooltip-arrow {
		border-right: 5px solid black;
	}

	.tooltip-inner {
    max-width: 350px !important;
    /* If max-width does not work, try using width instead */
    min-width: 350px !important; 
}

.custom-button {
    padding: 12px 25px 8px 25px;
    font-weight: 600;
    text-transform: uppercase;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    background: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border-radius: 0;
}

.custom-button.orange {
    color: #eb8b10;
    border: 3px solid #eb8b10;
}

.custom-button.green {
    color: #84c72a;
    border: 3px solid #84c72a;
}
.stripe_btn {
	color: #708299;
	background-color: #EAF1F8;
	font-weight: bold;
}
.stripe_btn:hover {
	color: #708299;
	background-color: #EAF1F8;
	font-weight: bold;
}
span.multiselect-native-select {
	position: relative
}
span.multiselect-native-select select {
	border: 0!important;
	clip: rect(0 0 0 0)!important;
	height: 1px!important;
	margin: -1px -1px -1px -3px!important;
	overflow: hidden!important;
	padding: 0!important;
	position: absolute!important;
	width: 1px!important;
	left: 50%;
	top: 30px
}
.multiselect-container {
	position: absolute;
	list-style-type: none;
	margin: 0;
	padding: 0
}
.multiselect-container .input-group {
	margin: 5px
}
.multiselect-container>li {
	padding: 0
}
.multiselect-container>li>a.multiselect-all label {
	font-weight: 700
}
.multiselect-container>li.multiselect-group label {
	margin: 0;
	padding: 3px 20px 3px 20px;
	height: 100%;
	font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
	cursor: pointer
}
.multiselect-container>li>a {
	padding: 0
}
.multiselect-container>li>a>label {
	margin: 0;
	height: 100%;
	cursor: pointer;
	font-weight: 400;
	padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
	margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
	margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
	padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
	margin-left: -20px;
	margin-right: 0
}
.new_div {
	margin-bottom:20px;
}
.rounded_div {
	border:1px solid #CCC;
	box-shadow: 0px 0px 3px #bfbfbf;
	border-radius:5px;
}
.account_info
{
	border:3px solid #000;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}

.another
{
	border:3px solid #EC8C0E;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.another_one
{
	border:3px solid #83c627;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
label{
	font-weight:normal !important;
}

	.form-control::-webkit-inner-spin-button, 
	  .form-control::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}
	
.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover
{
	background:#6ca71b;
	color: #fff !important;
}
</style>
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
  </head>
  <body>


    <div id="load">
    </div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Let's add your protection..
        </div>
      </div>
    </section>
    <!-- End section -->

    <main> 
      <div class="container margin_60">
	  
        <div class="row">
			<div class="col-md-12">

				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
						<div style="" class="account_info">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click "Account" button in top right corner to change your details (Settings), preferred payment (Payments), to re-access this page (Solutions) or monthly subscriptions for analysis on all your sales (Sales). </p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>We send you email alerts of each sale as part of our affiliate / re-seller fee that you select in "Services" and that you only pay when sale made, which we take automatically.</p>
								</div>

							</div>
						</div>
						<div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> All questions with an asterisk <span style="color:#ec8b0d;font-size:22px;margin-top:10px;">*</span> must be answered.</p>
								</div>
								<div class="col-md-12" style="padding:0px;margin:0px;">
									<div class="col-md-4">
										<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on  <a data-container="body"  href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> for more info. </p>
									</div>
									<!--<div class="col-md-8">
										<p style="color:#808080;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:25px;"> to ask delegate user to answer this question. </p>
									</div>-->
								</div>
							</div>
						</div>
				
						</div>
				</div>

			
			<ul class="nav "></ul> 
			<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
					
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-users"></i></strong>Overview <a data-container="body" title="This section gives ProtectBox an overview of your services. Whilst ‘Services’ below is detail of each product/service" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						</h3>
					  </div>

					  <div class="step">
					  <form name="supplier_basics_information" action="<?php echo base_url();?>edit_solution/basic_info" enctype="multipart/form-data" method="POST">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Supplier name?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <?php
								if(isset($supplier_detail->supplier_name) && $supplier_detail->supplier_name != ''){
							  ?>
							  <input type="text" class="form-control" name="supplier_name" value="<?php echo $supplier_detail->supplier_name;?>">
							  <?php
								}else{
							  ?>
							   <input type="text" class="form-control" name="supplier_name">
							   <?php
									}
							   ?>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>What price will your solution be?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="This can be single number or range" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								<?php
									if(isset($supplier_detail->supplier_package_price) && $supplier_detail->supplier_package_price != ''){
								?>
									<input type="text" class="form-control" name="price_solution" value="<?php echo $supplier_detail->supplier_package_price;?>">
							  <?php
									}else{
							  ?>
									<input type="text" class="form-control" name="price_solution">
							   <?php
									}
							   ?>					
							</div>
						  </div>
						</div>
							
						<div class="row" >
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Which of these categories does your solution fall into ? &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="All the products that you select in 'Product Category' in 'Services' need to be selected here" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								<select class="form-control" name="solution_category[]"  multiple="multiple" style="height:110px;">
									<?php 
										$explode_supplier_category = explode(',',$supplier_detail->supplier_categories);
									?>
									<option disabled=""  <?php echo ((in_array('',$explode_supplier_category))?'selected':'')?>>Please select all applicable (+shift/cmd - select multiple options)</option>
									<option value="Accreditation/Regulation" <?php echo ((in_array('Accreditation/Regulation',$explode_supplier_category))?'selected':'')?>>Accreditation/Regulation</option>
									<option value="Ad blocking" <?php echo ((in_array('Ad blocking',$explode_supplier_category))?'selected':'')?>>Ad blocking</option>
									<option value="Antivirus"  <?php echo ((in_array('Antivirus',$explode_supplier_category))?'selected':'')?>>Antivirus</option>
									<option value="Audit" <?php echo ((in_array('Audit',$explode_supplier_category))?'selected':'')?>>Audit</option>
									<option value="Authentication" <?php echo ((in_array('Authentication',$explode_supplier_category))?'selected':'')?> >Authentication</option>
									<option value="Consultancy/Implementation" <?php echo ((in_array('Consultancy/Implementation',$explode_supplier_category))?'selected':'')?> >Consultancy/Implementation</option>
									<option value="Cybersecurity Insurance" <?php echo ((in_array('Cybersecurity Insurance',$explode_supplier_category))?'selected':'')?> >Cybersecurity Insurance</option>
									<option value="Data Storage" <?php echo ((in_array('Data Storage',$explode_supplier_category))?'selected':'')?> >Data Storage</option>
									<option value="Device Management" <?php echo ((in_array('Device Management',$explode_supplier_category))?'selected':'')?> >Device Management</option>
									<option value="Email Security" <?php echo ((in_array('Email Security',$explode_supplier_category))?'selected':'')?> >Email Security</option>
									<option value="Encryption" <?php echo ((in_array('Encryption',$explode_supplier_category))?'selected':'')?> >Encryption</option>
								  	<option value="Firewall" <?php echo ((in_array('Firewall',$explode_supplier_category))?'selected':'')?> >Firewall</option>
									
									<option value="Internet" <?php echo ((in_array('Internet',$explode_supplier_category))?'selected':'')?> >Internet</option>
									<option value="Intrusion Detection Systems (IDS)" <?php echo ((in_array('Intrusion Detection Systems (IDS)',$explode_supplier_category))?'selected':'')?> >Intrusion Detection Systems (IDS)</option>
									<option value="Managed Service Solution Provider" <?php echo ((in_array('Managed Service Solution Provider',$explode_supplier_category))?'selected':'')?> >Managed Service Solution Provider</option>
									<option value="Microsoft Active/Open Directory" <?php echo ((in_array('Microsoft Active/Open Directory',$explode_supplier_category))?'selected':'')?> >Microsoft Active/Open Directory</option>
									<option value="Operating System" <?php echo ((in_array('Operating System',$explode_supplier_category))?'selected':'')?> >Operating System</option>
									<option value="Physical Security (of Buildings, Equipment)" <?php echo ((in_array('Physical Security (of Buildings, Equipment)',$explode_supplier_category))?'selected':'')?> >Physical Security (of Buildings, Equipment)</option>
									<option value="Proxy" <?php echo ((in_array('Proxy',$explode_supplier_category))?'selected':'')?> >Proxy</option>
									<option value="Public Key Infrastructure (PKI)" <?php echo ((in_array('Public Key Infrastructure (PKI)',$explode_supplier_category))?'selected':'')?> >Public Key Infrastructure (PKI)</option>
									<option value="Spam Filtering" <?php echo ((in_array('Spam Filtering',$explode_supplier_category))?'selected':'')?> >Spam Filtering</option>
									<option value="Threat Prevention" <?php echo ((in_array('Threat Prevention',$explode_supplier_category))?'selected':'')?> >Threat Prevention</option>
									<option value="Training" <?php echo ((in_array('Training',$explode_supplier_category))?'selected':'')?>>Training</option>
									<?php
										$user_type = $this->session->userdata['logged_in']['user_id'];
										if($user_type == '7')
										{
									?>
									<option value="Patching_software" <?php echo ((in_array('Patching_software',$explode_supplier_category))?'selected':'')?>>Patching software</option>
									<option value="Logs" <?php echo ((in_array('Logs',$explode_supplier_category))?'selected':'')?>>Logs</option>
									<option value="Password_Policy" <?php echo ((in_array('Password_Policy',$explode_supplier_category))?'selected':'')?>>Password Policy</option>
									<option value="CISP" <?php echo ((in_array('CISP',$explode_supplier_category))?'selected':'')?>>CISP</option>
									<option value="Tiered_User_Access" <?php echo ((in_array('Tiered_User_Access',$explode_supplier_category))?'selected':'')?>>Tiered User Access</option>

									<?php
										}
									?>
							  </select>
							 </div>
						  </div>
						  
								
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Which suppliers do you NOT want to be bundled with?</label> <a data-container="body" title="All names need to be separated by commas" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								<?php
									if(isset($supplier_detail->supplier_bundle_with) && $supplier_detail->supplier_package_price != ''){
								?>
							  <input type="text" class="form-control" name="supplier_bundle_with" value="<?php echo $supplier_detail->supplier_bundle_with;?>">
							  <?php
								}else{
							  ?>
							   <input type="text" class="form-control" name="supplier_bundle_with">
							   <?php
									}
							   ?>								
							</div>
							<div class="form-group">
								<label>Receive email alert on sale</label> <a data-container="body" title="We will by default, alert you by email each time we sell one of your products/services." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								<select class="form-control" name="email_receive">
									<option hidden  <?php echo ((isset($supplier_detail->email_alert) && $supplier_detail->email_alert == '')?'selected':'')?>>choose an option</option>
									<option value="1" <?php echo ((isset($supplier_detail->email_alert) && $supplier_detail->email_alert == '1')?'selected':'')?>>Yes</option>
									<option value="0" <?php echo ((isset($supplier_detail->email_alert) && $supplier_detail->email_alert == '0')?'selected':'')?>>No</option>
								</select>
							</div>
						  </div>
						</div>
						<div class=" text-right" style="margin-top:50px;">
							<button type="submit"  class="btn btn-success btn-medium " >Save Data</a>
						</div>
						</form>
					  </div>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-th-list"></i></strong>Services<!--<a data-container="body" class="tooltiplink servicezz" title="<div>Mapping of Supplier categories to Results page categories:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Business category</th><th>Supplier category</th></tr></thead><tr><td>Technical (Operating System) </td><td>Operating System</td></tr><tr><td>Technical (Internet)</td><td>WiFi/LAN + Spam Filtering + Ad blocking</td></tr><tr><td>Technical (Anti-Virus) </td><td>Anti-virus</td></tr><tr><td>Technical (Firewall)</td><td>Firewall</td></tr><tr><td>Technical (Access Control) </td><td>Encryption + Microsoft Active/Open Director + Authentication + Physical Security (of Buildings, Equipment) + Patching software + Logs + Tiered User Access ((won’t affect Results slider as only 1 product)</td></tr><tr><td>Data</td><td>PKI + Email Security</td></tr><tr><td>Managed Service Solution Provider</td><td>Managed Service Solution Provider</td></tr><tr><td>Business Continuity</td><td>IDS + Audit (won’t affect Results slider as only 1 product (info sheet on Backups)</td></tr><tr><td>Accreditation/Regulation</td><td>Accreditation/Regulation</td></tr><tr><td>Training</td><td>Training</td></tr><tr><td>Reputation Management</td><td>Cybersecurity Insurance + Threat Prevention + Data Storage CISP + Police (won’t affect Results slider as only 1 product)</td></tr><tr><td>Password Policy</td><td>Password Policy (won’t affect Results slider as only 1 product)</td></tr><tr><td>Devices</td><td>Device Management</td></tr><tr><td>Remote working</td><td>Proxy</td></tr><tr><td>Consultancy/Implementation</td><td>Consultancy/Implementation</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>-->
						</h3>
					  </div>
			

			
				<div class=" step" >
					 <ul class="nav nav-pills nav-justified">
						<li class="active" style="background:#e1e1e1;"><a href="#Section1" aria-controls="home" role="tab" class="text-uppercase" data-toggle="tab" style="font-size:14px;font-weight:bold;color:black;">Add Services</a></li>
						<li style="background:#e1e1e1;"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" class="text-uppercase" style="font-size:14px;font-weight:bold;color:black;">View Services</a></li>
					  </ul>
					<div class="tab-content tabs">
						<div role="tabpanel" class="tab-pane fade in active" id="Section1" >
						<form name="supplier_information" action="<?php echo base_url();?>edit_solution/add_supplier" enctype="multipart/form-data" method="POST">
						<div class="bbcc">
						<?php
						  $array_length = 1;
							$key= 0;
						?>
						<div class="new_div" style="margin-bottom:30px;padding-bottom:30px;">
						  <div class="row">
						  	<div class="col-md-3 col-sm-3" style="display:none;">
								<div class="form-group">
									<input type="text" class="form-control keyzz_value" value="<?php echo $key;?>">
									<input type="text" class="form-control keyzz" value="<?php echo $array_length;?>">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Logo&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="file" class="form-control" name="userFiles">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Supplier Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  	<input type="text" class="form-control" name="new_supplier_name">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Service Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								    <input type="text" class="form-control" name="new_service_name">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Customer Type&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="customer_type">
										<option selected disabled value="">Please select</option>
										<option value="Small" <?php echo((isset($values->customer_type) && $values->customer_type == "Small") ? 'selected' :'')?>>Small</option>
										<option value="Medium" <?php echo((isset($values->customer_type) && $values->customer_type == "Medium") ? 'selected' :'')?>>Medium</option>
										<option value="Enterprise" <?php echo((isset($values->customer_type) && $values->customer_type == "Enterprise") ? 'selected' :'')?>>Enterprise</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Product Category&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="product_category" onchange="product_categoryzz(this,<?php echo $key;?>)">
										<option value="" <?php echo((isset($values->product_category) && $values->product_category == '')?'selected disabled':'')?> >Please select</option>
										<?php 
											$explode_supplier_category = explode(',',$supplier_detail->supplier_categories);
											echo $count_supp = count($explode_supplier_category);
											/*print_r($explode_supplier_category);*/
												foreach($get_categories AS $catss){
										?>
											<option value="<?php echo $catss->category_name;?>" <?php echo ((in_array($catss->category_name,$explode_supplier_category))?'selected':'')?>> <?php echo $catss->category_name;?> </option>
										<?php
											}
										?>
									 </select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Product Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control felbovalue_<?php echo $key;?>" name="product_detailzz" id="product_detailzz">
									
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Currency&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<?php
											/*$client  = $_SERVER['HTTP_CLIENT_IP'];
											$forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
											$remote  = $_SERVER['REMOTE_ADDR'];
											$result  = array('country'=>'', 'city'=>'','currencyCode'=>'');
											if(filter_var($client, FILTER_VALIDATE_IP)){
												$ip = $client;
											}else if(filter_var($forward, FILTER_VALIDATE_IP)){
												$ip = $forward;
											}else{
												$ip = $remote;
											}
											$ip_data = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
											if($ip_data && $ip_data->geoplugin_countryName != null){
												$result['country'] = $ip_data->geoplugin_countryName;
												$result['city'] = $ip_data->geoplugin_city;
												$result['currencyCode'] = $ip_data->geoplugin_currencyCode;
											}
											$currencyCode = $result['currencyCode'];*/
									?>
									<select class="selectpicker form-control" data-live-search="true" name="price_currency" data-dropup-auto="false">
										
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" > 
											<?php echo $all_currency->country;?> <?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?>
										</option>
										<?php
											}
										?>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Range&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="price_range">
										<option selected disabled value="">Please select</option>
										<option value="0-500" >0 - 500</option>
										<option value="500-1000" >500 - 1,000</option>
										<option value="1000-5000" >1,000 - 5,000</option>
										<option value="5000-10000" >5,000 - 10,000</option>
										<option value="10000+" >10,000 +</option>
									</select>
								</div>
							  </div>
							 
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								    <input type="number" class="form-control " name="price_details" onkeydown="javascript: return event.keyCode == 69 ? false : true">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Operating System&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="operating_system" >
										<option selected disabled value="">Please select</option>
										<option value="Windows 7 or Below" >Windows 7 or Below</option>
										<option value="Windows 8+" >Windows 8 or Above</option>
										<option value="Linux" >Linux</option>
										<option value="Mac" >Mac</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Specialist Hardware&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="specialist_hardware">
										<option selected disabled value="">Please select</option>
										<option value="yes" >Yes</option>
										<option value="no" >No</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>3rd Party Software&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="third_party_software" >
										<option selected disabled value="">Please select</option>
										<option value="yes" >Yes</option>
										<option value="no" >No</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Ease of Setup&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="ease_setup" >
										<option selected disabled value="">Please select</option>
										<option value="specialist" >Specialist</option>
										<option value="non-specialist" >Non-Specialist</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Protection Level&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="protection_level">
										<option selected disabled value="">Please select</option>
										<option value="basic">Basic</option>
										<option value="advanced">Advanced</option>
										<option value="complete">Complete</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Product Link</label><span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please add pdf link here including product description, reviews as well as terms & conditions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								   <input type="text" class="form-control" name="product_link">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Commission Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="Set fees (10% for Basic security offering, 20% for Medium offering, 30% for Difficult to sell offering)" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
									<select class="form-control" name="commission_detail">
										<option selected disabled value="">Please select</option>
										<option value="10">10%</option>
										<option value="20">20%</option>
										<option value="30">30%</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Payment Option&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="payment_option">
										<option selected disabled value="">Please select</option>
										<option value="Monthly" >Monthly</option>
										<option value="Quarterly" >Quarterly</option>
										<option value="Yearly">Yearly</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Government Voucher</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span><a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								   <input type="nubmer" class="form-control" name="government_voucher">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Cash Back</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span><a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								    <input type="text" class="form-control" name="cash_back">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Rating/Ranking&nbsp;<span style="color:#ec8b0d;font-size:21px;"></span></label>
								    <input type="text" class="form-control" name="rating_ranking">
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Locations&nbsp;service&nbsp;is&nbsp;sold&nbsp;in&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="selectpicker form-control" data-live-search="true" multiple name="location_service[<?php echo $key;?>]" data-dropup-auto="false">
										<option value="" disabled selected>Please select</option>
										<option value="Northern Ireland">Northern Ireland (UK)</option>
										<option value="Ireland">Ireland (Europe)</option>
										<option value="Mainland UK">Mainland UK</option>
										<option value="Europe">Europe (Continental)</option>
										<option value="North America">North America</option>
										<option value="Central America">Central America</option>
										<option value="South America">South America</option>
										<option value="Africa">Africa</option>
										<option value="Middle East Qatar">Middle East (UAE, Qatar, Oman etc)</option>
										<option value="Middle East Israel">Middle East (Israel)</option>
										<option value="Russia">Russia</option>
										<option value="South Asia">South Asia (India, Pakistan, Bangladesh etc)</option>
										<option value="South East Asia">South East Asia (China, Japan etc)</option>
										<option value="South Pacific">South Pacific (Australia, New Zealand etc)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Regulation&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="regulation">
										<option selected="" disabled="" value="">Please select</option>
										<option value="CyberEssentials" >CyberEssentials</option>
										<option value="General Data Protection regulation (GDPR)" >General Data Protection regulation (GDPR)</option>
										<option value="Control Objectives for Information and Related Technology (COBIT)" >Control Objectives for Information and Related Technology (COBIT)</option>
										<option value="ISO/IEC 27000-series" >ISO/IEC 27000-series</option>
										<option value="FSMA/NIST" >FSMA/NIST</option>
										<option value="Payment Card Industry Data Security Standard (PCI DSS)" >Payment Card Industry Data Security Standard (PCI DSS)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Refund possible?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control valid" name="refund_possible">
										<option value="" disabled="" selected="">Please select</option>
										<option value="yes" >Yes</option>
										<option value="no" >No</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Instructions to user after order</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span><a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								    <textarea class="form-control" name="instruction_details"></textarea>
								 </div>
							  </div>
							    <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Service Status</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span>
								  <!-- <a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> -->
									<div class="form-group options" >
											<label class="switch-light switch-ios">
											<input type="checkbox" name="status" id="service_option"  >
											<span>
												<span>Inactive</span>
												<span>Active</span>
											</span>
											<a></a>
											</label>
										</div>
								 </div>
							  </div>
							    <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Distributer</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span>
								  <!-- <a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> -->
								    <select class="form-control valid" name="distributor">
										<option value="" disabled="" selected="">Please select</option>
										<option value="Direct" >Direct</option>
										<option value="TechData US" >TechData US</option>
										<option value="TechData UK" >TechData UK</option>
									</select>
								 </div>
							  </div>
							</div>
						  </div>
						  <div class="col-md-12" style="margin-top:-70px;margin-left:-30px;">
						   <div class="col-md-3 col-sm-3" >
							<div class="form-group">
							  <label>Terms And Conditions</label>&nbsp;<span style="color:#ec8b0d;font-size:25px;"></span>
							  <!-- <a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> -->
								<textarea class="form-control" name="terms" style="height:50px;"><?php echo (($supplier_detail->supplier_terms != '')?$supplier_detail->supplier_terms:'')?></textarea>
							 </div>
						  </div>
						 </div>
			
					  </div>
					  	<div class="row">
							  <div class="col-md-8 col-sm-8">
								<div class="form-group">
								  <div class="checkbox">	
									<label style="font-weight:bold;">
									  <input  type="checkbox" name="check_payment" value="1" class="required" style="margin-top:13px;"> <span style="font-size:18px;color:#ec8b0d;">Yes, I have completed payment setup.</span> If you haven't, <a href="<?php echo base_url('payments');?>" target="_blank">Click here</a> to setup.&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
									  <span class="checkmark"></span>
									</label>
								  </div>
								 </div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-8 col-sm-8">
								<div class="form-group">
								  <div class="checkbox">	
									<label style="font-weight:bold;">
									  <input  type="checkbox" name="terms_condition" value="1" class="required" style="margin-top:13px;"> I acknowledge the <a href="<?php echo base_url('terms')?>" target="_blank">Terms and Conditions</a>.&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
									  <span class="checkmark"></span>
									</label>
								  </div>
								 </div>
							  </div>
							  <div class=" text-right" style="margin-top:10px;">
								 <button type="submit" class="btn btn-warning btn-medium"  style="margin-left:10px;">Save</button>
								 <button type="submit"  class="btn btn-success btn-medium " >Add More Products</a>
							</div>
							</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Section2">
							<div class="row">
									<div class=" account_info col-md-12" >
										<div class="col-md-12">
											<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> You can add a new service by either clicking the buttons below OR adding the data into each dropdown cell </p>
										</div>
										
									</div>
								</div>
							<div class="row " style="padding-bottom:20px;">
								<a href="<?php echo base_url('uploads/Download_excel_templates_spreadsheet_for_addition_of_new_services.xlsx');?>" download>
								<div class=" text-center col-md-12">
									<div class="col-md-8 col-md-offset-2">
										<button type="button" class="btn btn-hot text-uppercase btn-lg" style="width:100%;background:#cccccc;border:1px solid #cccccc;"><span style="font-size:10px;font-weight:bold;color:#333;" >Download excel template spreadsheet for addition of new services.</span></button>
									</div></a>
									<a href="<?php echo base_url('edit_solution/down_service');?>"><div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
										<button type="button" class="btn btn-hot text-uppercase btn-lg"  style="width:100%;background:#cccccc;border:1px solid #cccccc;"><span style="font-size:10px;font-weight:bold;color:#333;" >Download excel spreadsheet of current services.</span></button>
									</div></a>
									<div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
										<button type="button" class="btn btn-hot text-uppercase btn-lg" data-toggle="modal" data-target="#uploadModal"style="width:100%;background:#cccccc;border:1px solid #cccccc;"><span style="font-size:10px;font-weight:bold;color:#333;" >Upload completed excel spreadsheet for addition of new services.</span></button>
									</div>
									</div>
								</div>
								<?php
								if(!empty($matching_services_information))
								{
								?>
								<div class="row">
									<div class=" account_info col-md-12" >
										<div class="col-md-12">
											<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> We are already selling your newly added services, through the <b>"Distributor"</b> </p>
										</div>
										<div class="col-md-12">
											<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>If you would prefer us to sell your service directly through protectbox, please change btn to inactive and add your service again but changing distributor to direct..</p>
										</div>
										<div class="col-md-12">
											<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>You can add a new service by either clicking the buttons below or adding the data into each drop down cells.</p>
										</div>
									</div>
								</div>
					
							<div class="row">
							<div class="table-responsive rounded_div col-md-12 " style=";margin-bottom:20px;">
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
										
										  </tr>
										</thead>
										<tbody>
											<?php
												$i = 1;
												foreach($matching_services_information AS $service_info){
													//print_r($service_info);
											?>
										  <tr>
											<td><?php echo $i;?></td>
											<td>
												<?php 
													$service_provider = $service_info->user_id;
													if($service_provider == '52')
													{
														echo "TechData UK";
													}
													else
													{
														$this->load->model('edit_solution_m');
														$get_service_provider = $this->edit_solution_m->get_provider($service_provider);
														echo $get_service_provider->company_name;
													}

												?>
											</td>
											<td><img src="<?php echo base_url();?>uploads/<?php echo $service_info->logo;?>"  style="height:15px;"></td>
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
												<?php
													//echo $service_info->status;
												?>
												<form id="myForm" action="<?php echo base_url("edit_solution/update_status");?>" method="post">
												<div class="form-group options">
													<label class="switch-light switch-ios">
													
													<input type="checkbox" name="status" id="service_option" <?php echo (($service_info->status == '1')?'checked':'');?> onchange="service_statzz(<?php echo $service_info->matching_supplier_service_id;?>);">
													<span>
														<span>Inactive</span>
														<span>Active</span>
													</span>
													<a></a>
													</label>
												</div>
												<input type="hidden" id="serv_tgle_<?php echo $service_info->matching_supplier_service_id;?>" name="status" value="<?php echo $service_info->status;?>">
												<input type="hidden" name="matching_supplier_service_id" value="<?php echo $service_info->matching_supplier_service_id;?>">
											</form>
											</td>
											<!--<?php
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
											?>-->
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
								<?php
								}
								?>
							<!-- all service starts-->
							<div class="row">
							<div class="table-responsive rounded_div col-md-12 " style=";margin-bottom:20px;">
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
										
										  </tr>
										</thead>
										<tbody>
											<?php
												$i = 1;
												
												foreach($get_services_information AS $service_infom){	
											?>
										  <tr>
											<td><?php echo $i;?></td>
											<td>
												<?php 
													$service_provider = $service_infom->user_id;
													if($service_provider == '52')
													{
														echo "TechData UK";
													}
													else
													{
														$this->load->model('edit_solution_m');
														$get_service_provider = $this->edit_solution_m->get_provider($service_provider);
														echo $get_service_provider->company_name;
													}

												?>
											</td>
											<td><img src="<?php echo base_url();?>uploads/<?php echo $service_infom->logo;?>"  style="height:15px;"></td>
											<td><?php echo $service_infom->service_name;?>&nbsp;
												<?php
												$check_date = $service_infom->upload_date;
												$present_time = time();
												$last_seven_days = strtotime("7 days ago");
												if($check_date > $last_seven_days && $check_date <= $present_time){
													echo '<span style="color:red;font-size:20px;">*</span>';
												}else{
													echo '';
												}
											?></td>
											<td><?php echo $service_infom->customer_type;?></td>
											<td><?php echo $service_infom->product_category;?></td>
											<td><?php echo $service_infom->product_detail;?></td>
											<td><?php echo $service_infom->currency;?></td>
											<td><?php echo $service_infom->price_range;?></td>
											<td><?php echo $service_infom->price_detail;?></td>
											<td><?php echo $service_infom->operating_system;?></td>
											<td><?php echo $service_infom->specialist_hardware;?></td>
											<td><?php echo $service_infom->third_party_supplier;?></td>
											<td><?php echo $service_infom->ease_of_setup;?></td>
											<td><?php echo $service_infom->protection_level;?></td>
											<td><a href="<?php echo $service_infom->product_link;?>"><?php echo $service_infom->product_link;?></a></td>
											<td><?php echo $service_infom->commission_detail;?></td>
											<td><?php echo $service_infom->payment_option;?></td>
											<td><?php echo $service_infom->govt_voucher;?></td>
											<td><?php echo $service_infom->cashback;?></td>
											<td><?php echo $service_infom->rating;?></td>
											<td><?php echo $service_infom->location;?></td>
											<td><?php echo $service_infom->regulation;?></td>
											<td><?php echo $service_infom->user_instruction;?></td>
											<td>
												<?php
													//echo $service_info->status;
												?>
												<form id="myForm" action="<?php echo base_url("edit_solution/update_status");?>" method="post">
												<div class="form-group options">
													<label class="switch-light switch-ios">
													
													<input type="checkbox" name="status" id="service_option" <?php echo (($service_infom->status == '1')?'checked':'');?> onchange="service_statzz(<?php echo $service_infom->supplier_service_id;?>);">
													<span>
														<span>Inactive</span>
														<span>Active</span>
													</span>
													<a></a>
													</label>
												</div>
												<input type="hidden" id="serv_tgle_<?php echo $service_infom->supplier_service_id;?>" name="status" value="<?php echo $service_infom->status;?>">
												<input type="hidden" name="matching_supplier_service_id" value="<?php echo $service_infom->supplier_service_id;?>">
												</form>
											</td>
											<!--<?php
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
											?>-->
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
				</div>
				<div class="step">		
				 <div class="row">
				  <div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label style="font-weight:bold;font-size:16px;">
							<a href="<?php echo base_url('sales');?>" target="_blank">Click here</a> to find out more about signing up to a Subscription service that gives you analysis on all your sales.
						  <span class="checkmark"></span>
						</label>
					 </div>
				  </div>
				</div>
			</div>
					 
					</div>
				</div>
			  </div><!-- End col-md-12-->
		  </div>
        <!-- End row -->
      </div>
      <!-- End container -->

	<div id="uploadModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Upload Completeted Excel Spreadsheeet</h4>
		  </div>
		  <div class="modal-body">
			<!-- Form -->
			<form method='post' action='<?php echo base_url('edit_solution/service_import');?>' enctype="multipart/form-data">
			  <div class="form-group">
				<label for="exampleFormControlFile1"></label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="mapped">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<!-- Preview-->
			<div id='preview'></div>
		  </div>
		</div>
	  </div>
	</div>
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


 <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
		
	</script>
	<script type="text/javascript">
	$(function() {
	    $('.multiselect-ui').multiselect({
	        includeSelectAllOption: true
	    });
	});
	</script>
	
	<script type="text/javascript">
		
		function product_categoryzz(e,value){

			val = $(e).val();
			if (val == "No category to choose") {
				$( ".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Data Storage") {
				$( ".felbovalue_"+value+"").html("<option value='Local'>Local</option><option value='Remote'>Remote</option>");
			} 
			else if (val == "Threat Prevention") {
				$(".felbovalue_"+value+"").html("<option value='Detection'>Detection</option><option value='Prevention'>Prevention</option><option value='Detection and Prevention'>Detection and Prevention</option>");
			}
			else if (val == "Intrusion Detection Systems (IDS)") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Antivirus" || val == "Audit" || val == "Firewall" || val == "Ad blocking" || val == "Managed Service Solution Provider"  || val == "Public Key Infrastructure (PKI)" || val == "Email Security" || val == "Device Management" || val == "Consultancy/Implementation"){
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Accreditation/Regulation") {
				$(".felbovalue_"+value+"").html("<option value='CyberEssentials only'>CyberEssentials only</option><option value='CyberEssentials+ only'>CyberEssentials+ only</option><option value='GDPR only'>GDPR only</option><option value='PCI/DSS only'>PCI/DSS only</option><option value='ISO only'>ISO only</option><option value='NIST only'>NIST only</option><option value='CyberEssentials & GDPR'>CyberEssentials & GDPR</option><option value='CyberEssentials+ & GDPR'>CyberEssentials+ & GDPR</option><option value='CyberEssentials & GDPR & PCI/DSS'>CyberEssentials & GDPR & PCI/DSS</option><option value='CyberEssentials+ & GDPR & PCI/DSS'>CyberEssentials+ & GDPR & PCI/DSS</option><option value='GDPR & PCI/DSS'>GDPR & PCI/DSS</option><option value='GDPR & PCI/DSS & NIST'>GDPR & PCI/DSS & NIST</option><option value='CyberEssentials & GDPR & ISO'>CyberEssentials & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='CyberEssentials+ & GDPR & ISO'>CyberEssentials+ & GDPR & ISO</option><option value='CyberEssentials+ & GDPR & ISO & NIST'>CyberEssentials+ & GDPR & ISO & NIST</option><option value='GDPR & ISO'>GDPR & ISO</option><option value='GDPR & ISO & NIST'>GDPR & ISO & NIST</option><option value='CyberEssentials & GDPR & ISO '>CyberEssentials & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='CyberEssentials+ & GDPR & ISO'>CyberEssentials+ & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='GDPR & ISO'>GDPR & ISO</option><option value='GDPR & ISO & NIST'>GDPR & ISO & NIST</option>");
			} 
			else if (val == "Proxy") {
				$(".felbovalue_"+value+"").html("<option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option>");
			} 
			else if (val == "Spam Filtering") {
				$(".felbovalue_"+value+"").html("<option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option>");
			} 
			else if (val == "Cybersecurity Insurance") {
				$(".felbovalue_"+value+"").html("<option value='No category to use'>No category to use</option>");
			} 
			else if (val == "Operating System") {
				$(".felbovalue_"+value+"").html("<option value='Windows 7 or below'>Windows 7 or below</option><option value='Windows 8 or above'>Windows 8 or above</option><option value='Mac'>Mac</option><option value='Linux'>Linux</option>");
			} 
			else if (val == "Internet") {
				$(".felbovalue_"+value+"").html("<option value='WiFi/LAN'>WiFi/LAN</option><option value='Spam Filtering'>Spam Filtering</option><option value='Ad Blocking'>Ad Blocking</option>");
			} 
			else if (val == "Physical Security (of Buildings, Equipment)") {
				$(".felbovalue_"+value+"").html("<option value='Video surveillance'>Video surveillance</option><option value='Alarm'>Alarm</option><option value='Lock'>Lock</option><option value='Keypad'>Keypad</option><option value='Access Card'>Access Card</option><option value='Perimeter fencing'>Perimeter fencing</option>");
			} 
			else if (val == "Microsoft Active/Open Directory") {
				$(".felbovalue_"+value+"").html("<option value='Microsoft Active Directory'>Microsoft Active Directory</option><option value='Microsoft Open Directory'>Microsoft Open Directory</option>");
			}
			else if (val == "Authentication") {
				$(".felbovalue_"+value+"").html("<option value='Single factor'>Single factor</option><option value='Multi-factor'>Multi-factor</option>");
			}
			else if (val == "Encryption") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Secure Domain Name System (DNS)") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Mobile Device Management") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Managed Service Solution Providers") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Training") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
			else if (val == "Consultancy/Implementation") {
				$(".felbovalue_"+value+"").html("<option value='No category to choose'>No category to choose</option>");
			} 
		}
	 
	</script>
	
	<script>
		$(document).ready(function(){
			$("#hide").click(function(){
				$("p").hide();
			});
			$("#show").click(function(){
				$("p").show();
			});
		});
</script>

<script>
function service_statzz(e){
    $('#myForm').submit();
   }
</script>
 <script src="<?php echo base_url();?>js/jquery.validate.js"></script>

 <script>
	$(function() {
	  $("form[name='supplier_basics_information']").validate({
		rules: {
		  "supplier_name": "required",
		  "price_solution": "required",
		  "solution_category": "required"
		
		},
		messages: {
		"supplier_name": "This field is required",
		"price_solution": "This field is required",
		"solution_category" : "This field is required"
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>
<script>
	$(function() {
	  $("form[name='supplier_information']").validate({
		rules: {
		
		  "new_supplier_name": "required",
		  "new_service_name": "required",
		  "customer_type": "required",
		  "product_category": "required",
		  "product_detailzz": "required",
		  "price_currency": "required",
		  "price_range": "required",
		  "price_details": "required",
		  "operating_system": "required",
		  "specialist_hardware": "required",
		  "third_party_software": "required",
		  "ease_setup": "required",
		  "product_link" : "required",
		  "protection_level": "required",
		  "commission_detail": "required",
		  "payment_option": "required",
		  "location_service": "required",
		  "regulation": "required",
		  "refund_possible": "required",
		  "check_payment" : "required",
		  "terms_condition":"required"
		},
		messages: {
		 
		  "new_supplier_name": "This field is required",
		  "new_service_name": "This field is required",
		  "customer_type": "This field is required",
		  "product_category": "This field is required",
		  "product_detailzz": "This field is required",
		  "price_currency": "This field is required",
		  "price_range": "This field is required",
		  "price_details": "This field is required",
		  "operating_system": "This field is required",
		  "specialist_hardware": "This field is required",
		  "third_party_software": "This field is required",
		  "ease_setup": "This field is required",
		  "product_link": "This field is required",
		  "protection_level": "This field is required",
		  "commission_detail": "This field is required",
		  "payment_option": "This field is required",
		  "location_service": "This field is required",
		  "regulation": "This field is required",
		  "refund_possible": "This field is required",
		  "check_payment" : "Please complete the payment setup",
		  "terms_condition":"Please agree with our terms"
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>

	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>