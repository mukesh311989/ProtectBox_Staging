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
label{
	font-weight:normal !important;
}

	.form-control::-webkit-inner-spin-button, 
	  .form-control::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
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
          Let’s add your protection..
        </div>
      </div>
    </section>
    <!-- End section -->

    <main> 
      <div class="container margin_60">
	  
        <div class="row">
			<div class="col-md-12">

			<!--<div class="col-md-12" style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;margin-bottom:20px;font-weight:bold;font-size:15px;" href="javascript:void(0);">NOTE: <a href="#" style="color:#F0A84C;text-decoration:underline;">Click here</a> for instructions on completing this page.</div>-->
				<!--  Tabs -->   

				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
						<div style="" class="account_info">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click “Account” button in top right corner to change your details (Settings), preferred payment (Payments), to re-access this page (Solutions) or monthly subscriptions for analysis on all your sales (Sales). </p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>We send you email alerts of each sale as part of our affiliate / re-seller fee that you select in “Services” and that you only pay when sale made, which we take automatically.</p>
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
					<form name="supplier_information" action="<?php echo base_url();?>edit_solution/add_supplier" enctype="multipart/form-data" method="POST">
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-users"></i></strong>Overview <a data-container="body" title="This section gives ProtectBox an overview of your services. Whilst ‘Services’ below is detail of each product/service" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						</h3>
					  </div>

					  <div class="step">
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
							<?php
								$user_type = $this->session->userdata['logged_in']['user_id'];
										

									?>
						<div class="row" >
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Which of these categories does your solution fall into ? &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="All the products that you select in 'Product Category' in 'Services' need to be selected here" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								<select class="form-control" name="solution_category[]"  multiple="multiple" style="height:110px;">
									<option disabled="" selected="">Please select all applicable (+shift/cmd - select multiple options)</option>
								  	<?php 
										$explode_supplier_category = explode(',',$supplier_detail->supplier_categories);
									?>
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
									<option selected hidden>choose an option</option>
									<option value="1" <?php echo ((isset($supplier_detail->email_alert) && $supplier_detail->email_alert == '1')?'selected':'')?>>Yes</option>
									<option value="0" <?php echo ((isset($supplier_detail->email_alert) && $supplier_detail->email_alert == '0')?'selected':'')?>>No</option>
								</select>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-th-list"></i></strong>Services<!--<a data-container="body" class="tooltiplink servicezz" title="<div>Mapping of Supplier categories to Results page categories:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Business category</th><th>Supplier category</th></tr></thead><tr><td>Technical (Operating System) </td><td>Operating System</td></tr><tr><td>Technical (Internet)</td><td>WiFi/LAN + Spam Filtering + Ad blocking</td></tr><tr><td>Technical (Anti-Virus) </td><td>Anti-virus</td></tr><tr><td>Technical (Firewall)</td><td>Firewall</td></tr><tr><td>Technical (Access Control) </td><td>Encryption + Microsoft Active/Open Director + Authentication + Physical Security (of Buildings, Equipment) + Patching software + Logs + Tiered User Access ((won’t affect Results slider as only 1 product)</td></tr><tr><td>Data</td><td>PKI + Email Security</td></tr><tr><td>Managed Service Solution Provider</td><td>Managed Service Solution Provider</td></tr><tr><td>Business Continuity</td><td>IDS + Audit (won’t affect Results slider as only 1 product (info sheet on Backups)</td></tr><tr><td>Accreditation/Regulation</td><td>Accreditation/Regulation</td></tr><tr><td>Training</td><td>Training</td></tr><tr><td>Reputation Management</td><td>Cybersecurity Insurance + Threat Prevention + Data Storage CISP + Police (won’t affect Results slider as only 1 product)</td></tr><tr><td>Password Policy</td><td>Password Policy (won’t affect Results slider as only 1 product)</td></tr><tr><td>Devices</td><td>Device Management</td></tr><tr><td>Remote working</td><td>Proxy</td></tr><tr><td>Consultancy/Implementation</td><td>Consultancy/Implementation</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>-->
						</h3>
					  </div>
					  <div class="step">
						
					<div class="addsz">
						<?php
						if (is_array($services_detail) && count($services_detail) > 0) {
							foreach($services_detail As $values){
								$logo = $values->logo;
								if($logo == ""){
									$logo_img_link = "";
								}else{
									$logo_img_link = "".base_url()."uploads/".$values->logo."";
								}
						?>

						
						<div class="new_div" style="border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;">
						  <div class="row">

						  	<div class="col-md-3 col-sm-3" style="display:none;">
								<div class="form-group">
								  <input type="text" class="form-control" name="service_id[0]" value="<?php echo((isset($values->supplier_service_id) && $values->supplier_service_id != "") ? $values->supplier_service_id :'')?>">
								 </div>
							  </div>


							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Logo&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <img src="<?php echo $logo_img_link;?>" style="height:30px;"><br/>
								  <input type="file" class="form-control" name="userFiles[0]">
								  <input type="hidden" name="prev_log[]" value="<?php echo $values->logo; ?>">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Supplier Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<?php
										if(isset($values->supplier_name) && $values->supplier_name != ''){
									?>
								  	<input type="text" class="form-control" name="new_supplier_name[0]" value="<?php echo((isset($values->supplier_name) && $values->supplier_name != "") ? $values->supplier_name :'')?>">
								  <?php
									}else{
								  ?>
								  	 <input type="text" class="form-control" name="new_supplier_name[0]">
								   <?php
										}
								   ?>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Service Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <?php
									if(isset($values->service_name) && $values->service_name != ''){
								  ?>
								   <input type="text" class="form-control" name="new_service_name[0]" value="<?php echo((isset($values->service_name) && $values->service_name != "") ? $values->service_name :'')?>">
								  <?php
									}else{
								  ?>
								   <input type="text" class="form-control" name="new_service_name[0]">
								   <?php
										}
								   ?>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Customer Type&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="customer_type[0]">
										<option value="" disabled=""<?php echo((isset($values->customer_type) && $values->customer_type == '') ? '' :'selected')?> >Please select</option>
										<option value="Small" <?php echo((isset($values->customer_type) && $values->customer_type == "Small") ? 'selected' :'')?>>Small</option>
										<option value="Medium" <?php echo((isset($values->customer_type) && $values->customer_type == "Medium") ? 'selected' :'')?>>Medium</option>
										<option value="Enterprise" <?php echo((isset($values->customer_type) && $values->customer_type == "Enterprise") ? 'selected' :'')?>>Enterprise</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group ">
								  <label>Product Category&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Depending on what you select from this dropdown, you will be given different options in the next dropdown for Product Detail which relates to your selection in Product Category." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
									 <select class="form-control tulbovalue" name="product_category[0]" onchange="product_categoryzz(this)">
										<option value="" disabled=""<?php echo((isset($values->product_category) && $values->product_category == '') ? '' :'selected')?> >Please select</option>
										<?php 
											
												foreach($get_categories AS $catss){
										?>
											<option value="<?php echo $catss->category_name;?>" <?php echo((isset($values->product_category) && $values->product_category == $catss->category_name) ? 'selected' :'')?>> <?php echo $catss->category_name;?> </option>
										<?php
											}
										?>
									 </select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group felbo">
								  <label>Product Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control felbovalue" name="product_detailzz[0]" id="product_detailzz" >
										<?php
											if(isset($values->product_category) && ($values->product_category == "" OR $values->product_category == "Please select")){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Data Storage"){
										?>
											<option value='Local'<?php echo((isset($values->product_detail) && $values->product_detail == 'Local') ? 'selected' :'')?>>Local</option>
											<option value='Remote'<?php echo((isset($values->product_detail) && $values->product_detail == 'Remote') ? 'selected' :'')?>>Remote</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Threat Prevention"){
										?>
											<option value='IPS'<?php echo((isset($values->product_detail) && $values->product_detail == 'IPS') ? 'selected' :'')?>>IPS</option>
											<option value='Access Control'<?php echo((isset($values->product_detail) && $values->product_detail == 'Access Control') ? 'selected' :'')?>>Access Control</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Intrusion Detection Systems (IDS)"){
										?>
											<option value='Please select' <?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Accreditation/Regulation"){
										?>
											<option value='CyberEssentials only'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials only') ? 'selected' :'')?>>CyberEssentials only</option>
											<option value='CyberEssentials+ only'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ only') ? 'selected' :'')?>>CyberEssentials+ only</option>
											<option value='GDPR only'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR only') ? 'selected' :'')?>>GDPR only</option>
											<option value='PCI/DSS only'<?php echo((isset($values->product_detail) && $values->product_detail == 'PCI/DSS only') ? 'selected' :'')?>>PCI/DSS only</option>
											<option value='ISO only'<?php echo((isset($values->product_detail) && $values->product_detail == 'ISO only') ? 'selected' :'')?>>ISO only</option>
											<option value='NIST only'<?php echo((isset($values->product_detail) && $values->product_detail == 'NIST only') ? 'selected' :'')?>>NIST only</option>
											SHOW MORE
											<option value='CyberEssentials & GDPR'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR') ? 'selected' :'')?>>CyberEssentials & GDPR</option>
											<option value='CyberEssentials+ & GDPR'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR') ? 'selected' :'')?>>CyberEssentials+ & GDPR</option>
											<option value='CyberEssentials & GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials & GDPR & PCI/DSS</option>
											<option value='CyberEssentials+ & GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials+ & GDPR & PCI/DSS</option>
											<option value='GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & PCI/DSS') ? 'selected' :'')?>>GDPR & PCI/DSS</option>
											<option value='GDPR & PCI/DSS & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & PCI/DSS & NIST') ? 'selected' :'')?>>GDPR & PCI/DSS & NIST</option>
											<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
											<option value='CyberEssentials+ & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO & NIST</option>
											<option value='GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
											<option value='GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
											<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
											<option value='GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Proxy"){
										?>
											<option value='VPN' <?php echo((isset($values->product_detail) && $values->product_detail == 'VPN') ? 'selected' :'')?>>VPN</option>
											<option value='Web Proxy' <?php echo((isset($values->product_detail) && $values->product_detail == 'Web Proxy') ? 'selected' :'')?>>Web Proxy</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Spam Filtering"){
										?>
											<option value='Email Spam' <?php echo((isset($values->product_detail) && $values->product_detail == 'Email Spam') ? 'selected' :'')?>>Email Spam</option>
											<option value='Ad Blocking' <?php echo((isset($values->product_detail) && $values->product_detail == 'Ad Blocking') ? 'selected' :'')?>>Ad Blocking</option>
											<option value='Packet Filtering' <?php echo((isset($values->product_detail) && $values->product_detail == 'Packet Filtering') ? 'selected' :'')?>>Packet Filtering</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Cybersecurity Insurance"){
										?>
											<option value='No category to use' <?php echo((isset($values->product_detail) && $values->product_detail == 'No category to use') ? 'selected' :'')?>>No category to use</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Encryption"){
										?>
											<option value='Please select' <?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Secure Domain Name System (DNS)"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Mobile Device Management"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Managed Service Solution Providers"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Training"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Consultancy/Implementation"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Operating System"){
										?>
											<option value='Windows 7 or below'<?php echo((isset($values->product_detail) && $values->product_detail == 'Windows 7 or below') ? 'selected' :'')?>>Windows 7 or below</option>
											<option value='Windows 8 or above'<?php echo((isset($values->product_detail) && $values->product_detail == 'Windows 8 or above') ? 'selected' :'')?>>Windows 8 or above</option>
											<option value='Mac'<?php echo((isset($values->product_detail) && $values->product_detail == 'Mac') ? 'selected' :'')?>>Mac</option>
											<option value='Linux'<?php echo((isset($values->product_detail) && $values->product_detail == 'Linux') ? 'selected' :'')?>>Linux</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Internet"){
										?>
											<option value='WiFi/LAN'<?php echo((isset($values->product_detail) && $values->product_detail == 'WiFi/LAN') ? 'selected' :'')?>>WiFi/LAN</option>
											<option value='Spam Filtering'<?php echo((isset($values->product_detail) && $values->product_detail == 'Spam Filtering') ? 'selected' :'')?>>Spam Filtering</option>
											<option value='Ad Blocking'<?php echo((isset($values->product_detail) && $values->product_detail == 'Ad Blocking') ? 'selected' :'')?>>Ad Blocking</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Physical Security (of Buildings, Equipment)"){
										?>
											<option value='Video surveillance'<?php echo((isset($values->product_detail) && $values->product_detail == 'Video surveillance') ? 'selected' :'')?>>Video surveillance</option>
											<option value='Alarm'<?php echo((isset($values->product_detail) && $values->product_detail == 'Alarm') ? 'selected' :'')?>>Alarm</option>
											<option value='Lock'<?php echo((isset($values->product_detail) && $values->product_detail == 'Lock') ? 'selected' :'')?>>Lock</option>
											<option value='Keypad'<?php echo((isset($values->product_detail) && $values->product_detail == 'Keypad') ? 'selected' :'')?>>Keypad</option>
											<option value='Access Card'<?php echo((isset($values->product_detail) && $values->product_detail == 'Access Card') ? 'selected' :'')?>>Access Card</option>
											<option value='Perimeter fencing'<?php echo((isset($values->product_detail) && $values->product_detail == 'Perimeter fencing') ? 'selected' :'')?>>Perimeter fencing</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Microsoft Active/Open Directory"){
										?>
											<option value='Microsoft Active Directory'<?php echo((isset($values->product_detail) && $values->product_detail == 'Microsoft Active Directory') ? 'selected' :'')?>>Microsoft Active Directory</option>
											<option value='Microsoft Open Directory'<?php echo((isset($values->product_detail) && $values->product_detail == 'Microsoft Open Directory') ? 'selected' :'')?>>Microsoft Open Directory</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Training"){
										?>
											<option value='Cybersecurity'<?php echo((isset($values->product_detail) && $values->product_detail == 'Cybersecurity') ? 'selected' :'')?>>Cybersecurity</option>
											<option value='Physical security'<?php echo((isset($values->product_detail) && $values->product_detail == 'Physical security') ? 'selected' :'')?>>Physical security</option>
											<option value='Cyber & Physical security'<?php echo((isset($values->product_detail) && $values->product_detail == 'Cyber & Physical security') ? 'selected' :'')?>>Cyber & Physical security</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Authentication"){
										?>
											<option value='Single-factor'<?php echo((isset($values->product_detail) && $values->product_detail == 'Single factor') ? 'selected' :'')?>>Single factor</option>
											<option value='Multi-factor'<?php echo((isset($values->product_detail) && $values->product_detail == 'Multi-factor') ? 'selected' :'')?>>Multi-factor</option>
										<?php
											}
										?>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Currency&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<?php
											$client  = $_SERVER['HTTP_CLIENT_IP'];
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
											$currencyCode = $result['currencyCode'];
									?>
									<select class="selectpicker form-control" data-live-search="true" name="price_currency[0]" data-dropup-auto="false">
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" <?php echo((isset($values->currency ) && $values->currency != '') ? (($values->currency == $all_currency->code)?'selected':''):(($currencyCode == $all_currency->code)?'selected':''));?>> 
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
									<select class="form-control" name="price_range[0]">
										<option value="" disabled="" <?php echo((isset($values->price_range) && $values->price_range == '') ? 'selected' :'')?>>Please select</option>
										<option value="0-500" <?php echo((isset($values->price_range) && $values->price_range == "0-500") ? 'selected' :'')?>>0 - 500</option>
										<option value="500-1000" <?php echo((isset($values->price_range) && $values->price_range == "500-1000") ? 'selected' :'')?>>500 - 1,000</option>
										<option value="1000-5000" <?php echo((isset($values->price_range) && $values->price_range == "1000-5000") ? 'selected' :'')?>>1'000 - 5'000</option>
										<option value="5000-10000" <?php echo((isset($values->price_range) && $values->price_range == "5000-10000") ? 'selected' :'')?>>5'000 - 1'0000</option>
										<option value="10000+" <?php echo((isset($values->price_range) && $values->price_range == "10000+") ? 'selected' :'')?>>10,000 +</option>
									</select>
								</div>
							  </div>
							 
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <?php
									if(isset($values->price_detail) && $values->price_detail != ''){
								  ?>
								   <input type="number" class="form-control " name="price_details[0]" value="<?php echo((isset($values->price_detail) && $values->price_detail != "") ? $values->price_detail :'')?>" onkeydown="javascript: return event.keyCode == 69 ? false : true">
								  <?php
									}else{
								  ?>
								   <input type="number" class="form-control " name="price_details[0]" onkeydown="javascript: return event.keyCode == 69 ? false : true">
								   <?php
										}
								   ?>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Operating System&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="operating_system[0]" >
										<option value="" disabled="" <?php echo((isset($values->operating_system) && $values->operating_system == '') ? 'selected' :'')?>>Please select</option>
										<option value="Windows 7 or Below" <?php echo((isset($values->operating_system) && $values->operating_system == "Windows 7 or Below") ? 'selected' :'')?>>Windows 7 or Below</option>
										<option value="Windows 8+" <?php echo((isset($values->operating_system) && $values->operating_system == "Windows 8+") ? 'selected' :'')?>>Windows 8 or Above</option>
										<option value="Linux" <?php echo((isset($values->operating_system) && $values->operating_system == "Linux") ? 'selected' :'')?>>Linux</option>
										<option value="Mac" <?php echo((isset($values->operating_system) && $values->operating_system == "Mac") ? 'selected' :'')?>>Mac</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Specialist Hardware&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="specialist_hardware[0]">
										<option value="" disabled="" <?php echo((isset($values->specialist_hardware) && $values->specialist_hardware == '') ? 'selected' :'')?>>Please select</option>
										<option value="yes" <?php echo((isset($values->specialist_hardware) && $values->specialist_hardware == "yes") ? 'selected' :'')?>>Yes</option>
										<option value="no" <?php echo((isset($values->specialist_hardware) && $values->specialist_hardware == "no") ? 'selected' :'')?>>No</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>3rd Party Software&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="third_party_software[0]" >
										<option value="" disabled="" <?php echo((isset($values->third_party_supplier) && $values->third_party_supplier == '') ? 'selected' :'')?>>Please select</option>
										<option value="yes" <?php echo((isset($values->third_party_supplier) && $values->third_party_supplier == "yes") ? 'selected' :'')?>>Yes</option>
										<option value="no" <?php echo((isset($values->third_party_supplier) && $values->third_party_supplier == "yes") ? 'selected' :'')?>>No</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Ease of Setup&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="ease_setup[0]" >
										<option value="" disabled="" <?php echo((isset($values->ease_of_setup) && $values->ease_of_setup == '') ? 'selected' :'')?>>Please select</option>
										<option value="specialist" <?php echo((isset($values->ease_of_setup) && $values->ease_of_setup == "specialist") ? 'selected' :'')?>>Specialist</option>
										<option value="non-specialist" <?php echo((isset($values->ease_of_setup) && $values->ease_of_setup == "non-specialist") ? 'selected' :'')?>>Non-Specialist</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Protection Level&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="protection_level[0]">
										<option value="" disabled="" <?php echo((isset($values->protection_level) && $values->protection_level == '') ? 'selected' :'')?>>Please select</option>
										<option value="basic" <?php echo((isset($values->protection_level) && $values->protection_level == "basic") ? 'selected' :'')?>>Basic</option>
										<option value="advanced" <?php echo((isset($values->protection_level) && $values->protection_level == "advanced") ? 'selected' :'')?>>Advanced</option>
										<option value="complete" <?php echo((isset($values->protection_level) && $values->protection_level == "complete") ? 'selected' :'')?>>Complete</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Product Link</label><span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please add pdf link here including product description, reviews as well as terms & conditions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								  <?php
									if(isset($values->product_link) && $values->product_link != ''){
								  ?>
								  <input type="text" class="form-control" name="product_link[0]" value="<?php echo((isset($values->product_link) && $values->product_link != "") ? $values->product_link :'')?>">
								  <?php
									}else{
								  ?>
								   <input type="text" class="form-control" name="product_link[0]">
								   <?php
										}
								   ?>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Commission Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="Set fees (10% for Basic security offering, 20% for Medium offering, 30% for Difficult to sell offering)" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
									<select class="form-control" name="commission_detail[0]">
										<option value="" disabled="" <?php echo((isset($values->commission_detail) && $values->commission_detail == '') ? 'selected' :'')?>>Please select</option>
										<option value="10" <?php echo((isset($values->commission_detail) && $values->commission_detail == "10") ? 'selected' :'')?>>10%</option>
										<option value="20" <?php echo((isset($values->commission_detail) && $values->commission_detail == "20") ? 'selected' :'')?>>20%</option>
										<option value="30" <?php echo((isset($values->commission_detail) && $values->commission_detail == "30") ? 'selected' :'')?>>30%</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Payment Option&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="payment_option[0]">
										<option value="" disabled="" <?php echo((isset($values->payment_option) && $values->payment_option == '') ? 'selected' :'')?>>Please select</option>
										<option value="Monthly" <?php echo((isset($values->payment_option) && $values->payment_option == "Monthly") ? 'selected' :'')?>>Monthly</option>
										<option value="Quarterly" <?php echo((isset($values->payment_option) && $values->payment_option == "Quarterly") ? 'selected' :'')?>>Quarterly</option>
										<option value="Yearly" <?php echo((isset($values->payment_option) && $values->payment_option == "Yearly") ? 'selected' :'')?>>Yearly</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Government Voucher</label>  <a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								  <?php
									if(isset($values->govt_voucher) && $values->govt_voucher != ''){
								  ?>
								  <input type="nubmer" class="form-control" name="government_voucher[0]" value="<?php echo((isset($values->govt_voucher) && $values->govt_voucher != "") ? $values->govt_voucher :'')?>">
								  <?php
									}else{
								  ?>
								   <input type="nubmer" class="form-control" name="government_voucher[0]">
								   <?php
										}
								   ?>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Cash Back</label>  <a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								  <?php
									if(isset($values->cashback) && $values->cashback != ''){
								  ?>
								   <input type="text" class="form-control" name="cash_back[0]" value="<?php echo((isset($values->cashback) && $values->cashback != "") ? $values->cashback :'')?>">
								  <?php
									}else{
								  ?>
								    <input type="text" class="form-control" name="cash_back[0]">
								   <?php
										}
								   ?>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Rating/Ranking</label>
									<?php
									if(isset($values->rating) && $values->rating != ''){
								  ?>
								   <input type="text" class="form-control" name="rating_ranking[0]" value="<?php echo((isset($values->rating) && $values->rating != "") ? $values->rating :'')?>">
								  <?php
									}else{
								  ?>
								    <input type="text" class="form-control" name="rating_ranking[0]">
								   <?php
										}
								   ?>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select id="dates-field2" class="selectpicker form-control" data-live-search="true" multiple="multiple" name="location_service[0]" data-dropup-auto="false">
										<option disabled="" value="" <?php echo((isset($values->location) && $values->location == '') ? 'selected' :'')?>>Please select</option>
										<option value="Northern Ireland (UK)" <?php echo((isset($values->location) && $values->location == "Northern Ireland (UK)") ? 'selected' :'')?>>Northern Ireland (UK)</option>
										<option value="Ireland (Europe)" <?php echo((isset($values->location) && $values->location == "Ireland (Europe)") ? 'selected' :'')?>>Ireland (Europe)</option>
										<option value="Mainland UK" <?php echo((isset($values->location) && $values->location == "Mainland UK") ? 'selected' :'')?>>Mainland UK</option>
										<option value="Europe (Continental)" <?php echo((isset($values->location) && $values->location == "Europe (Continental)") ? 'selected' :'')?>>Europe (Continental)</option>
										<option value="North America" <?php echo((isset($values->location) && $values->location == "North America") ? 'selected' :'')?>>North America</option>
										<option value="Central America" <?php echo((isset($values->location) && $values->location == "Central America") ? 'selected' :'')?>>Central America</option>
										<option value="South America" <?php echo((isset($values->location) && $values->location == "South America") ? 'selected' :'')?>>South America</option>
										<option value="Africa" <?php echo((isset($values->location) && $values->location == "Africa") ? 'selected' :'')?>>Africa</option>
										<option value="Middle East (UAE, Qatar, Oman etc)" <?php echo((isset($values->location) && $values->location == "Middle East (UAE, Qatar, Oman etc)") ? 'selected' :'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option value="Middle East (Israel)" <?php echo((isset($values->location) && $values->location == "Middle East (Israel)") ? 'selected' :'')?>>Middle East (Israel)</option>
										<option value="Russia" <?php echo((isset($values->location) && $values->location == "Russia") ? 'selected' :'')?>>Russia</option>
										<option value="South Asia (India, Pakistan, Bangladesh etc)" <?php echo((isset($values->location) && $values->location == "South Asia (India, Pakistan, Bangladesh etc)") ? 'selected' :'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option value="South East Asia (China, Japan etc)" <?php echo((isset($values->location) && $values->location == "South East Asia (China, Japan etc)") ? 'selected' :'')?>>South East Asia (China, Japan etc)</option>
										<option value="South Pacific (Australia, New Zealand etc)" <?php echo((isset($values->location) && $values->location == "South Pacific (Australia, New Zealand etc)") ? 'selected' :'')?>>South Pacific (Australia, New Zealand etc)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Regulation&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="regulation[0]">
										<option disabled="" value="" <?php echo((isset($values->regulation) && $values->regulation == '') ? 'selected' :'')?>>Please select</option>
										<option value="CyberEssentials" <?php echo((isset($values->regulation) && $values->regulation == "CyberEssentials") ? 'selected' :'')?>>CyberEssentials</option>
										<option value="General Data Protection regulation (GDPR)" <?php echo((isset($values->regulation) && $values->regulation == "General Data Protection regulation (GDPR)") ? 'selected' :'')?>>General Data Protection regulation (GDPR)</option>
										<option value="Control Objectives for Information and Related Technology (COBIT)" <?php echo((isset($values->regulation) && $values->regulation == "Control Objectives for Information and Related Technology (COBIT)") ? 'selected' :'')?>>Control Objectives for Information and Related Technology (COBIT)</option>
										<option value="ISO/IEC 27000-series" <?php echo((isset($values->regulation) && $values->regulation == "ISO/IEC 27000-series") ? 'selected' :'')?>>ISO/IEC 27000-series</option>
										<option value="FSMA/NIST" <?php echo((isset($values->regulation) && $values->regulation == "FSMA/NIST") ? 'selected' :'')?>>FSMA/NIST</option>
										<option value="PDPA (Singapore)" <?php echo((isset($values->regulation) && $values->regulation == "PDPA (Singapore)") ? 'selected' :'')?>>PDPA (Singapore)</option>
										<option value="Payment Card Industry Data Security Standard (PCI DSS)" <?php echo((isset($values->regulation) && $values->regulation == "Payment Card Industry Data Security Standard (PCI DSS)") ? 'selected' :'')?>>Payment Card Industry Data Security Standard (PCI DSS)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label>Instructions to user after order</label>  <a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								  <?php
									if(isset($values->user_instruction) && $values->user_instruction != ''){
								  ?>
								   <textarea class="form-control" name="instruction_details[0]"><?php echo((isset($values->user_instruction) && $values->user_instruction != "") ? $values->user_instruction :'')?></textarea>
								  <?php
									}else{
								  ?>
								    <textarea class="form-control" name="instruction_details[0]"></textarea>
								   <?php
										}
								   ?>
								 </div>
							  </div>
							</div>
						  </div>
						 
			
						  <?php
							  }
						  ?>
						   </div>
						 <div class="row">
						  <div class="col-md-8 col-sm-8">
							<div class="form-group">
							  <div class="checkbox">	
								<label style="font-weight:bold;">
								  <input  type="checkbox" name="check_payment" value="1"> <span style="font-size:18px;color:#ec8b0d;">Yes, I have completed payment setup.</span> If you haven’t, <a href="<?php echo base_url('payments');?>" target="_blank">Click here</a> to setup.<span style="color:#ec8b0d;font-size:22px;">*</span>
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
								  <input  type="checkbox" name="terms_condition" value="1"> I acknowledge the <a href="<?php echo base_url('terms')?>" target="_blank">Terms and Conditions</a>.<span style="color:#ec8b0d;font-size:22px;">*</span>
								  <span class="checkmark"></span>
								</label>
							  </div>
							 </div>
						  </div>
						</div>
						<div class="col-md-12 text-right" style="padding-top:20px;">
							 <button type="submit" class="btn btn-warning btn-medium"  style="margin-left:10px;">Save</button>
							 <a href="javascript:void(0);"  class="btn btn-success btn-medium add_something" >Add More Service</a>
					    </div>
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
						  <?php
						   }else{
						  ?>
						  <div class="bbcc">
						<div class="new_div" style="border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;">
						  <div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Logo&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="file" class="form-control" name="userFiles[0]">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Supplier Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  	<input type="text" class="form-control" name="new_supplier_name[0]">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Service Name&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								    <input type="text" class="form-control" name="new_service_name[0]">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Customer Type&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="customer_type[0]">
										<option selected="" disabled="" value="">Please select</option>
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
								  <select class="form-control tulbovalue" name="product_category[0]" onchange="product_categoryzz(this)">
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
									<select class="form-control felbovalue" name="product_detailzz[0]" id="product_detailzz">
										<?php
											if(isset($values->product_category) && ($values->product_category == "" OR $values->product_category == "Please select")){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Data Storage"){
										?>
											<option value='Local'<?php echo((isset($values->product_detail) && $values->product_detail == 'Local') ? 'selected' :'')?>>Local</option>
											<option value='Remote'<?php echo((isset($values->product_detail) && $values->product_detail == 'Remote') ? 'selected' :'')?>>Remote</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Threat Prevention"){
										?>
											<option value='IPS'<?php echo((isset($values->product_detail) && $values->product_detail == 'IPS') ? 'selected' :'')?>>IPS</option>
											<option value='Access Control'<?php echo((isset($values->product_detail) && $values->product_detail == 'Access Control') ? 'selected' :'')?>>Access Control</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Intrusion Detection Systems (IDS)"){
										?>
											<option value='Please select' <?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Accreditation/Regulation"){
										?>
											<option value='CyberEssentials only'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials only') ? 'selected' :'')?>>CyberEssentials only</option>
											<option value='CyberEssentials+ only'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ only') ? 'selected' :'')?>>CyberEssentials+ only</option>
											<option value='GDPR only'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR only') ? 'selected' :'')?>>GDPR only</option>
											<option value='PCI/DSS only'<?php echo((isset($values->product_detail) && $values->product_detail == 'PCI/DSS only') ? 'selected' :'')?>>PCI/DSS only</option>
											<option value='ISO only'<?php echo((isset($values->product_detail) && $values->product_detail == 'ISO only') ? 'selected' :'')?>>ISO only</option>
											<option value='NIST only'<?php echo((isset($values->product_detail) && $values->product_detail == 'NIST only') ? 'selected' :'')?>>NIST only</option>
											<option value='CyberEssentials & GDPR'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR') ? 'selected' :'')?>>CyberEssentials & GDPR</option>
											<option value='CyberEssentials+ & GDPR'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR') ? 'selected' :'')?>>CyberEssentials+ & GDPR</option>
											<option value='CyberEssentials & GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials & GDPR & PCI/DSS</option>
											<option value='CyberEssentials+ & GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials+ & GDPR & PCI/DSS</option>
											<option value='GDPR & PCI/DSS'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & PCI/DSS') ? 'selected' :'')?>>GDPR & PCI/DSS</option>
											<option value='GDPR & PCI/DSS & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & PCI/DSS & NIST') ? 'selected' :'')?>>GDPR & PCI/DSS & NIST</option>
											<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
											<option value='CyberEssentials+ & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO & NIST</option>
											<option value='GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
											<option value='GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
											<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
											<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
											<option value='GDPR & ISO'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
											<option value='GDPR & ISO & NIST'<?php echo((isset($values->product_detail) && $values->product_detail == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Proxy"){
										?>
											<option value='VPN' <?php echo((isset($values->product_detail) && $values->product_detail == 'VPN') ? 'selected' :'')?>>VPN</option>
											<option value='Web Proxy' <?php echo((isset($values->product_detail) && $values->product_detail == 'Web Proxy') ? 'selected' :'')?>>Web Proxy</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Spam Filtering"){
										?>
											<option value='Email Spam' <?php echo((isset($values->product_detail) && $values->product_detail == 'Email Spam') ? 'selected' :'')?>>Email Spam</option>
											<option value='Ad Blocking' <?php echo((isset($values->product_detail) && $values->product_detail == 'Ad Blocking') ? 'selected' :'')?>>Ad Blocking</option>
											<option value='Packet Filtering' <?php echo((isset($values->product_detail) && $values->product_detail == 'Packet Filtering') ? 'selected' :'')?>>Packet Filtering</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Cybersecurity Insurance"){
										?>
											<option value='No category to use' <?php echo((isset($values->product_detail) && $values->product_detail == 'No category to use') ? 'selected' :'')?>>No category to use</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Encryption"){
										?>
											<option value='Please select' <?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}
											else if(isset($values->product_category) && $values->product_category == "Secure Domain Name System (DNS)"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Mobile Device Management"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Managed Service Solution Providers"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Training"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Consultancy/Implementation"){
										?>
											<option value='Please select'<?php echo((isset($values->product_detail) && $values->product_detail == 'Please select') ? 'selected' :'')?>>No category to choose</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Operating System"){
										?>
											<option value='Windows 7 or below'<?php echo((isset($values->product_detail) && $values->product_detail == 'Windows 7 or below') ? 'selected' :'')?>>Windows 7 or below</option>
											<option value='Windows 8 or above'<?php echo((isset($values->product_detail) && $values->product_detail == 'Windows 8 or above') ? 'selected' :'')?>>Windows 8 or above</option>
											<option value='Mac'<?php echo((isset($values->product_detail) && $values->product_detail == 'Mac') ? 'selected' :'')?>>Mac</option>
											<option value='Linux'<?php echo((isset($values->product_detail) && $values->product_detail == 'Linux') ? 'selected' :'')?>>Linux</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Internet"){
										?>
											<option value='WiFi/LAN'<?php echo((isset($values->product_detail) && $values->product_detail == 'WiFi/LAN') ? 'selected' :'')?>>WiFi/LAN</option>
											<option value='Spam Filtering'<?php echo((isset($values->product_detail) && $values->product_detail == 'Spam Filtering') ? 'selected' :'')?>>Spam Filtering</option>
											<option value='Ad Blocking'<?php echo((isset($values->product_detail) && $values->product_detail == 'Ad Blocking') ? 'selected' :'')?>>Ad Blocking</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Physical Security (of Buildings, Equipment)"){
										?>
											<option value='Video surveillance'<?php echo((isset($values->product_detail) && $values->product_detail == 'Video surveillance') ? 'selected' :'')?>>Video surveillance</option>
											<option value='Alarm'<?php echo((isset($values->product_detail) && $values->product_detail == 'Alarm') ? 'selected' :'')?>>Alarm</option>
											<option value='Lock'<?php echo((isset($values->product_detail) && $values->product_detail == 'Lock') ? 'selected' :'')?>>Lock</option>
											<option value='Keypad'<?php echo((isset($values->product_detail) && $values->product_detail == 'Keypad') ? 'selected' :'')?>>Keypad</option>
											<option value='Access Card'<?php echo((isset($values->product_detail) && $values->product_detail == 'Access Card') ? 'selected' :'')?>>Access Card</option>
											<option value='Perimeter fencing'<?php echo((isset($values->product_detail) && $values->product_detail == 'Perimeter fencing') ? 'selected' :'')?>>Perimeter fencing</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Microsoft Active/Open Directory"){
										?>
											<option value='Microsoft Active Directory'<?php echo((isset($values->product_detail) && $values->product_detail == 'Microsoft Active Directory') ? 'selected' :'')?>>Microsoft Active Directory</option>
											<option value='Microsoft Open Directory'<?php echo((isset($values->product_detail) && $values->product_detail == 'Microsoft Open Directory') ? 'selected' :'')?>>Microsoft Open Directory</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Training"){
										?>
											<option value='Cybersecurity'<?php echo((isset($values->product_detail) && $values->product_detail == 'Cybersecurity') ? 'selected' :'')?>>Cybersecurity</option>
											<option value='Physical security'<?php echo((isset($values->product_detail) && $values->product_detail == 'Physical security') ? 'selected' :'')?>>Physical security</option>
											<option value='Cyber & Physical security'<?php echo((isset($values->product_detail) && $values->product_detail == 'Cyber & Physical security') ? 'selected' :'')?>>Cyber & Physical security</option>
										<?php
											}else if(isset($values->product_category) && $values->product_category == "Authentication"){
										?>
											<option value='Single-factor'<?php echo((isset($values->product_detail) && $values->product_detail == 'Single factor') ? 'selected' :'')?>>Single factor</option>
											<option value='Multi-factor'<?php echo((isset($values->product_detail) && $values->product_detail == 'Multi-factor') ? 'selected' :'')?>>Multi-factor</option>
										<?php
											}
										?>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Currency&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<?php
											$client  = $_SERVER['HTTP_CLIENT_IP'];
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
											$currencyCode = $result['currencyCode'];
									?>
									<select class="selectpicker form-control" data-live-search="true" name="price_currency[0]" data-dropup-auto="false">
										
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" <?php echo((isset($values->currency ) && $values->currency != '') ? (($values->currency == $all_currency->code)?'selected':''):(($currencyCode == $all_currency->code)?'selected':''));?>> 
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
									<select class="form-control" name="price_range[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="0-500" <?php echo((isset($values->price_range) && $values->price_range == "0-500") ? 'selected' :'')?>>0 - 500</option>
										<option value="500-1000" <?php echo((isset($values->price_range) && $values->price_range == "500-1000") ? 'selected' :'')?>>500 - 1,000</option>
										<option value="1000-5000" <?php echo((isset($values->price_range) && $values->price_range == "1000-5000") ? 'selected' :'')?>>1'000 - 5'000</option>
										<option value="5000-10000" <?php echo((isset($values->price_range) && $values->price_range == "5000-10000") ? 'selected' :'')?>>5'000 - 1'0000</option>
										<option value="10000+" <?php echo((isset($values->price_range) && $values->price_range == "10000+") ? 'selected' :'')?>>10,000 +</option>
									</select>
								</div>
							  </div>
							 
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								    <input type="number" class="form-control " name="price_details[0]" onkeydown="javascript: return event.keyCode == 69 ? false : true">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Operating System&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="operating_system[0]" >
										<option selected="" disabled="" value="">Please select</option>
										<option value="Windows 7 or Below" <?php echo((isset($values->operating_system) && $values->operating_system == "Windows 7 or Below") ? 'selected' :'')?>>Windows 7 or Below</option>
										<option value="Windows 8+" <?php echo((isset($values->operating_system) && $values->operating_system == "Windows 8+") ? 'selected' :'')?>>Windows 8 or Above</option>
										<option value="Linux" <?php echo((isset($values->operating_system) && $values->operating_system == "Linux") ? 'selected' :'')?>>Linux</option>
										<option value="Mac" <?php echo((isset($values->operating_system) && $values->operating_system == "Mac") ? 'selected' :'')?>>Mac</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Specialist Hardware&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="specialist_hardware[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="yes" <?php echo((isset($values->specialist_hardware) && $values->specialist_hardware == "yes") ? 'selected' :'')?>>Yes</option>
										<option value="no" <?php echo((isset($values->specialist_hardware) && $values->specialist_hardware == "no") ? 'selected' :'')?>>No</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>3rd Party Software&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="third_party_software[0]" >
										<option selected="" disabled="" value="">Please select</option>
										<option value="yes" <?php echo((isset($values->third_party_supplier) && $values->third_party_supplier == "yes") ? 'selected' :'')?>>Yes</option>
										<option value="no" <?php echo((isset($values->third_party_supplier) && $values->third_party_supplier == "yes") ? 'selected' :'')?>>No</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Ease of Setup&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="ease_setup[0]" >
										<option selected="" disabled="" value="">Please select</option>
										<option value="specialist" <?php echo((isset($values->ease_of_setup) && $values->ease_of_setup == "specialist") ? 'selected' :'')?>>Specialist</option>
										<option value="non-specialist" <?php echo((isset($values->ease_of_setup) && $values->ease_of_setup == "non-specialist") ? 'selected' :'')?>>Non-Specialist</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Protection Level&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <select class="form-control" name="protection_level[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="basic" <?php echo((isset($values->protection_level) && $values->protection_level == "basic") ? 'selected' :'')?>>Basic</option>
										<option value="advanced" <?php echo((isset($values->protection_level) && $values->protection_level == "advanced") ? 'selected' :'')?>>Advanced</option>
										<option value="complete" <?php echo((isset($values->protection_level) && $values->protection_level == "complete") ? 'selected' :'')?>>Complete</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Product Link</label><span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please add pdf link here including product description, reviews as well as terms & conditions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								   <input type="text" class="form-control" name="product_link[0]">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Commission Detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>  <a data-container="body" title="Set fees (10% for Basic security offering, 20% for Medium offering, 30% for Difficult to sell offering)" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
									<select class="form-control" name="commission_detail[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="10" <?php echo((isset($values->commission_detail) && $values->commission_detail == "10") ? 'selected' :'')?>>10%</option>
										<option value="20" <?php echo((isset($values->commission_detail) && $values->commission_detail == "20") ? 'selected' :'')?>>20%</option>
										<option value="30" <?php echo((isset($values->commission_detail) && $values->commission_detail == "30") ? 'selected' :'')?>>30%</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Payment Option&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="payment_option[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="Monthly" <?php echo((isset($values->payment_option) && $values->payment_option == "Monthly") ? 'selected' :'')?>>Monthly</option>
										<option value="Quarterly" <?php echo((isset($values->payment_option) && $values->payment_option == "Quarterly") ? 'selected' :'')?>>Quarterly</option>
										<option value="Yearly" <?php echo((isset($values->payment_option) && $values->payment_option == "Yearly") ? 'selected' :'')?>>Yearly</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Government Voucher</label> <a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								   <input type="nubmer" class="form-control" name="government_voucher[0]">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Cash Back</label> <a data-container="body" title="Amount (numbers) in same currency that price was given" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								    <input type="text" class="form-control" name="cash_back[0]">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Rating/Ranking</label>
								    <input type="text" class="form-control" name="rating_ranking[0]">
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="selectpicker form-control" data-live-search="true" multiple name="location_service[0]" data-dropup-auto="false">
										<option selected="" disabled="" value="">Please select</option>
										<option value="Northern Ireland (UK)" <?php echo((isset($values->location) && $values->location == "Northern Ireland (UK)") ? 'selected' :'')?>>Northern Ireland (UK)</option>
										<option value="Ireland (Europe)" <?php echo((isset($values->location) && $values->location == "Ireland (Europe)") ? 'selected' :'')?>>Ireland (Europe)</option>
										<option value="Mainland UK" <?php echo((isset($values->location) && $values->location == "Mainland UK") ? 'selected' :'')?>>Mainland UK</option>
										<option value="Europe (Continental)" <?php echo((isset($values->location) && $values->location == "Europe (Continental)") ? 'selected' :'')?>>Europe (Continental)</option>
										<option value="North America" <?php echo((isset($values->location) && $values->location == "North America") ? 'selected' :'')?>>North America</option>
										<option value="Central America" <?php echo((isset($values->location) && $values->location == "Central America") ? 'selected' :'')?>>Central America</option>
										<option value="South America" <?php echo((isset($values->location) && $values->location == "South America") ? 'selected' :'')?>>South America</option>
										<option value="Africa" <?php echo((isset($values->location) && $values->location == "Africa") ? 'selected' :'')?>>Africa</option>
										<option value="Middle East (UAE, Qatar, Oman etc)" <?php echo((isset($values->location) && $values->location == "Middle East (UAE, Qatar, Oman etc)") ? 'selected' :'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option value="Middle East (Israel)" <?php echo((isset($values->location) && $values->location == "Middle East (Israel)") ? 'selected' :'')?>>Middle East (Israel)</option>
										<option value="Russia" <?php echo((isset($values->location) && $values->location == "Russia") ? 'selected' :'')?>>Russia</option>
										<option value="South Asia (India, Pakistan, Bangladesh etc)" <?php echo((isset($values->location) && $values->location == "South Asia (India, Pakistan, Bangladesh etc)") ? 'selected' :'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option value="South East Asia (China, Japan etc)" <?php echo((isset($values->location) && $values->location == "South East Asia (China, Japan etc)") ? 'selected' :'')?>>South East Asia (China, Japan etc)</option>
										<option value="South Pacific (Australia, New Zealand etc)" <?php echo((isset($values->location) && $values->location == "South Pacific (Australia, New Zealand etc)") ? 'selected' :'')?>>South Pacific (Australia, New Zealand etc)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Regulation&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									<select class="form-control" name="regulation[0]">
										<option selected="" disabled="" value="">Please select</option>
										<option value="CyberEssentials" <?php echo((isset($values->location) && $values->location == "CyberEssentials") ? 'selected' :'')?>>CyberEssentials</option>
										<option value="General Data Protection regulation (GDPR)" <?php echo((isset($values->location) && $values->location == "General Data Protection regulation (GDPR)") ? 'selected' :'')?>>General Data Protection regulation (GDPR)</option>
										<option value="Control Objectives for Information and Related Technology (COBIT)" <?php echo((isset($values->location) && $values->location == "Control Objectives for Information and Related Technology (COBIT)") ? 'selected' :'')?>>Control Objectives for Information and Related Technology (COBIT)</option>
										<option value="ISO/IEC 27000-series" <?php echo((isset($values->location) && $values->location == "ISO/IEC 27000-series") ? 'selected' :'')?>>ISO/IEC 27000-series</option>
										<option value="FSMA/NIST" <?php echo((isset($values->location) && $values->location == "FSMA/NIST") ? 'selected' :'')?>>FSMA/NIST</option>
										<option value="Payment Card Industry Data Security Standard (PCI DSS)" <?php echo((isset($values->location) && $values->location == "Payment Card Industry Data Security Standard (PCI DSS)") ? 'selected' :'')?>>Payment Card Industry Data Security Standard (PCI DSS)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label>Instructions to user after order</label>  <a data-container="body" title="Please put download instructions or call back instructions here. As well as terms & conditions" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								    <textarea class="form-control" name="instruction_details[0]"></textarea>
								 </div>
							  </div>
							</div>
						  </div>
						 </div>

						 <div class="row">
						  <div class="col-md-8 col-sm-8">
							<div class="form-group">
							  <div class="checkbox">	
								<label style="font-weight:bold;">
								  <input  type="checkbox" name="check_payment" value="1" class="required"> <span style="font-size:18px;color:#ec8b0d;">Yes, I have completed payment setup.</span> If you haven’t, <a href="<?php echo base_url('payments');?>" target="_blank">Click here</a> to setup.&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
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
								  <input  type="checkbox" name="terms_condition" value="1" class="required"> I acknowledge the <a href="<?php echo base_url('terms')?>" target="_blank">Terms and Conditions</a>.&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
								  <span class="checkmark"></span>
								</label>
							  </div>
							 </div>
						  </div>
						</div>
						<div class="col-md-12 text-right" style="padding-top:20px;">
							 <button type="submit" class="btn btn-warning btn-medium"  style="margin-left:10px;">Save</button>
							 <a href="javascript:void(0);"  class="btn btn-success btn-medium add_another" >Add More Service</a>
					    </div>
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
						  <?php
						   }
						  ?>
						
				
					  </div>
					 </form>
					</div>
				</div>
			  </div><!-- End col-md-12-->
		  </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>

   
<script>
  $(document).ready(function() {
      var max_fields      = 30; //maximum input boxes allowed
      var wrapper         = $(".addsz"); //Fields wrapper
      var add_button      = $(".add_something"); //Add button ID
     
	  var get_currency_addsz = <?php echo json_encode($get_currency)?>;
	  var get_categories_addsz = <?php echo json_encode($get_categories)?>;

	 /*$.each(get_currency_addsz, function () {
			var optioncurrHTML = this.country;
			alert(optioncurrHTML);
		});*/

      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
			
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append("<div class='col-md-12' style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><div class='new_div' style='border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;'><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Logo&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='file' class='form-control' name='userFiles[]' required></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Supplier Name&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='new_supplier_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Service Name&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='new_service_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Customer Type&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='customer_type[]'><option selected hidden>Please select</option><option>Small</option><option>Medium</option><option>Enterprise</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Category&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control tulbovalue' name='product_category[]' onchange='product_categoryzz(this)' id='category_app'></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control felbovalue' name='product_detailzz[]' id='product_detailzz'><option value='Please select'>No category to choose</option><option value='Local'>Local</option><option value='Remote'>Remote</option><option value='IPS'>IPS</option><option value='Access Control'>Access Control</option><option value='Please select'>No category to choose</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option><option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option><option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option><option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Currency&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='selectpicker form-control' id='currency_appzz' data-live-search='true' name='price_currency[]' data-dropup-auto='false' ></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Range&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='price_range[]'><option selected hidden>Please select</option><option value='0-500'>0 - 500</option><option value='500-1000'>500 - 1,000</option><option value='1000-5000'>1'000 - 5'000</option><option value='5000-10000'>5'000 - 1'0000</option><option value='10000+'>10,000 +</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='price_details[]' onkeydown='javascript: return event.keyCode == 69 ? false : true'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Operating System&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='operating_system[]' ><option selected hidden>Please select</option><option value='Windows 7 or Below'>Windows 7 or Below</option><option value='Windows 8+'>Windows 8 or Above</option><option value='Linux'>Linux</option><option value='Mac'>Mac</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Specialist Hardware&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='specialist_hardware[]'><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>3rd Party Software&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='third_party_software[]' ><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Ease of Setup&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='ease_setup[]' ><option selected hidden>Please select</option><option value='specialist'>Specialist</option><option value='non-specialist'>Non-Specialist</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Protection Level&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='protection_level[]'><option selected hidden>Please select</option><option value='basic'>Basic</option><option value='advanced'>Advanced</option><option value='complete'>Complete</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Link&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span><a data-container='body' title='Please add pdf link here including product description, reviews as well as terms & conditions.' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='text' class='form-control' name='product_link[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Commission Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><a data-container='body' title='Set fees (10% for Basic security offering, 20% for Medium offering, 30% for Difficult to sell offering)' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='left' data-html='true'><i class='icon-info-circled-3'></i></a></label><select class='form-control' name='commission_detail[]'><option selected hidden>Please select</option><option value='10'>10%</option><option value='20' <?php echo((isset($values->commission_detail) && $values->commission_detail == '20') ? 'selected' :'')?>>20%</option><option value='30'>30%</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Payment Option&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='payment_option[]'><option selected hidden>Please select</option><option>Monthly</option><option>Quarterly</option><option>Yearly</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Government Voucher&nbsp;  <a data-container='body' title='Amount (numbers) in same currency that price was given' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='nubmer' class='form-control' name='government_voucher[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Cash Back  <a data-container='body' title='Amount (numbers) in same currency that price was given' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='text' class='form-control' name='cash_back[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Rating/Ranking</label><input type='text' class='form-control' name='rating_ranking[]'></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='selectpicker form-control' data-live-search='true' data-dropup-auto='false' multiple name='location_service[]'><option selected hidden>Please select</option><option value='Northern Ireland (UK)' >Northern Ireland (UK)</option><option value='Ireland (Europe)'>Ireland (Europe)</option><option value='Mainland UK'>Mainland UK</option><option value='Europe (Continental)'>Europe (Continental)</option><option value='North America'>North America</option><option value='Central America'>Central America</option><option value='South America'>South America</option><option value='Africa'>Africa</option><option value='Middle East (UAE, Qatar, Oman etc)'>Middle East (UAE, Qatar, Oman etc)</option><option value='Middle East (Israel)'>Middle East (Israel)</option><option value='Russia'>Russia</option><option value='South Asia (India, Pakistan, Bangladesh etc)'>South Asia (India, Pakistan, Bangladesh etc)</option><option value='South East Asia (China, Japan etc)'>South East Asia (China, Japan etc)</option><option value='South Pacific (Australia, New Zealand etc)' >South Pacific (Australia, New Zealand etc)</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Regulation&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='regulation[]'><option selected >Please select</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option></select></div></div><div class='col-md-6 col-sm-6'><div class='form-group'><label>Instructions to user after order  <a data-container='body' title='Please put download instructions or call back instructions here. As well as terms & conditions' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><textarea class='form-control' name='instruction_details[]'></textarea></div></div></div></div></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='<?php echo base_url();?>images/if_Remove_27874.png'style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box
        }
		
		$.each(get_currency_addsz, function () {
			var optioncurrHTML = '<option value="'+this.code+'">'+this.country+' '+this.code+' - '+this.currency+' '+this.symbol+'</option>';
			$("#currency_appzz").append(optioncurrHTML);
		});
		$.each(get_categories_addsz, function () {
			var optioncatHTML = '<option value="'+this.category_name+'">'+this.category_name+'</option>';
			$("#category_app").append(optioncatHTML);
		});
		$('.selectpicker').selectpicker('render');
		
      });

	 
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
</script>

<script src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script>
  $(document).ready(function() {
	  $("form[name='supplier_information']").validate({
			rules: {
			  supplier_name: "required",
			  price_solution: "required",
			  "solution_category[0]" : "required",
			  "userFiles[]": "required",
			  "new_supplier_name[0]": "required",
			  "new_service_name[0]": "required",
			  "customer_type[0]": "required",
			  "product_category[0]": "required",
			  "product_detailzz[0]": "required",
			  "price_currency[0]": "required",
			  "price_range[0]": "required",
			  "price_details[0]": "required",
			  "operating_system[0]": "required",
			  "specialist_hardware[0]": "required",
			  "third_party_software[0]": "required",
			  "ease_setup[0]": "required",
			  "product_link[0]" : "required",
			  "protection_level[0]": "required",
			  "commission_detail[0]": "required",
			  "payment_option[0]": "required",
			  "location_service[0]": "required",
			  "regulation[0]": "required",
			  check_payment : "required",
			  terms_condition:"required"
			},
			messages: {
			  supplier_name: "This field is required",
			  price_solution: "This field is required",
			  "solution_category[0]" : "This field is required",
			  "userFiles[0]": "This field is required",
			  "new_supplier_name[0]": "This field is required",
			  "new_service_name[0]": "This field is required",
			  "customer_type[0]": "This field is required",
			  "product_category[0]": "This field is required",
			  "product_detailzz[0]": "This field is required",
			  "price_currency[0]": "This field is required",
			  "price_range[0]": "This field is required",
			  "price_details[0]": "This field is required",
			  "operating_system[0]": "This field is required",
			  "specialist_hardware[0]": "This field is required",
			  "third_party_software[0]": "This field is required",
			  "ease_setup[0]": "This field is required",
			  "product_link[0]": "This field is required",
			  "protection_level[0]": "This field is required",
			  "commission_detail[0]": "This field is required",
			  "payment_option[0]": "This field is required",
			  "location_service[0]": "This field is required",
			  "regulation[]": "This field is required",
			  check_payment : "Please complete the payment setup",
			  terms_condition:"Please agree with our terms"
			}
			
		  });
      var max_fields      = 30; //maximum input boxes allowed
      var wrapper         = $(".bbcc"); //Fields wrapper
      var add_button      = $(".add_another"); //Add button ID
      
	  var get_currency = <?php echo json_encode($get_currency)?>;
	  var get_categories = <?php echo json_encode($get_categories)?>;

      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
			
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++;
		  $("input[name=solution_category"+x+"]").rules("add", "required");
          $(wrapper).append("<div class='col-md-12' style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><div class='new_div' style='border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;'><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Logo&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='file' class='form-control' name='userFiles["+x+"]' required></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Supplier Name&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='new_supplier_name["+x+"]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Service Name&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='new_service_name["+x+"]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Customer Type&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='customer_type["+x+"]'><option selected hidden>Please select</option><option>Small</option><option>Medium</option><option>Enterprise</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Category&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control tulbovalue' name='product_category["+x+"]' onchange='product_categoryzz(this)' id='category_app_bbcc'></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control felbovalue' name='product_detailzz["+x+"]' id='product_detailzz'><option value='Please select'>No category to choose</option><option value='Local'>Local</option><option value='Remote'>Remote</option><option value='IPS'>IPS</option><option value='Access Control'>Access Control</option><option value='Please select'>No category to choose</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option><option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option><option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option><option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Currency&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='selectpicker form-control' id='currency_app_bbcc' data-live-search='true' name='price_currency["+x+"]' data-dropup-auto='false' ></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Range&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='price_range["+x+"]'><option selected hidden>Please select</option><option value='0-500'>0 - 500</option><option value='500-1000'>500 - 1,000</option><option value='1000-5000'>1'000 - 5'000</option><option value='5000-10000'>5'000 - 1'0000</option><option value='10000+'>10,000 +</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><input type='text' class='form-control' name='price_details["+x+"]' onkeydown='javascript: return event.keyCode == 69 ? false : true'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Operating System&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='operating_system["+x+"]' ><option selected hidden>Please select</option><option value='Windows 7 or Below'>Windows 7 or Below</option><option value='Windows 8+'>Windows 8 or Above</option><option value='Linux'>Linux</option><option value='Mac'>Mac</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Specialist Hardware&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='specialist_hardware["+x+"]'><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>3rd Party Software&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='third_party_software["+x+"]' ><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Ease of Setup&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='ease_setup["+x+"]' ><option selected hidden>Please select</option><option value='specialist'>Specialist</option><option value='non-specialist'>Non-Specialist</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Protection Level&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='protection_level["+x+"]'><option selected hidden>Please select</option><option value='basic'>Basic</option><option value='advanced'>Advanced</option><option value='complete'>Complete</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Link&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span><a data-container='body' title='Please add pdf link here including product description, reviews as well as terms & conditions.' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='text' class='form-control' name='product_link["+x+"]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Commission Detail&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><a data-container='body' title='Set fees (10% for Basic security offering, 20% for Medium offering, 30% for Difficult to sell offering)' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='left' data-html='true'><i class='icon-info-circled-3'></i></a></label><select class='form-control' name='commission_detail["+x+"]'><option selected hidden>Please select</option><option value='10'>10%</option><option value='20' <?php echo((isset($values->commission_detail) && $values->commission_detail == '20') ? 'selected' :'')?>>20%</option><option value='30'>30%</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Payment Option&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='payment_option["+x+"]'><option selected hidden>Please select</option><option>Monthly</option><option>Quarterly</option><option>Yearly</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Government Voucher&nbsp;  <a data-container='body' title='Amount (numbers) in same currency that price was given' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='nubmer' class='form-control' name='government_voucher["+x+"]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Cash Back  <a data-container='body' title='Amount (numbers) in same currency that price was given' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><input type='text' class='form-control' name='cash_back["+x+"]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Rating/Ranking</label><input type='text' class='form-control' name='rating_ranking["+x+"]'></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='selectpicker form-control' data-live-search='true' data-dropup-auto='false' multiple name='location_service["+x+"]'><option selected hidden>Please select</option><option value='Northern Ireland (UK)' >Northern Ireland (UK)</option><option value='Ireland (Europe)'>Ireland (Europe)</option><option value='Mainland UK'>Mainland UK</option><option value='Europe (Continental)'>Europe (Continental)</option><option value='North America'>North America</option><option value='Central America'>Central America</option><option value='South America'>South America</option><option value='Africa'>Africa</option><option value='Middle East (UAE, Qatar, Oman etc)'>Middle East (UAE, Qatar, Oman etc)</option><option value='Middle East (Israel)'>Middle East (Israel)</option><option value='Russia'>Russia</option><option value='South Asia (India, Pakistan, Bangladesh etc)'>South Asia (India, Pakistan, Bangladesh etc)</option><option value='South East Asia (China, Japan etc)'>South East Asia (China, Japan etc)</option><option value='South Pacific (Australia, New Zealand etc)' >South Pacific (Australia, New Zealand etc)</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Regulation&nbsp;<span style='color:#ec8b0d;font-size:22px;'>*</span></label><select class='form-control' name='regulation[]'><option selected >Please select</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option></select></div></div><div class='col-md-6 col-sm-6'><div class='form-group'><label>Instructions to user after order  <a data-container='body' title='Please put download instructions or call back instructions here. As well as terms & conditions' href='javascript:void(0);' class='tooltiplink' data-toggle='tooltip' data-placement='right' data-html='true'><i class='icon-info-circled-3'></i></a></label><textarea class='form-control' name='instruction_details["+x+"]'></textarea></div></div></div></div></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='<?php echo base_url();?>images/if_Remove_27874.png'style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box

		  
		}

			
		$.each(get_currency, function () {
			var optionHTML = '<option value="'+this.code+'">'+this.country+' '+this.code+' - '+this.currency+' '+this.symbol+'</option>';
			$("#currency_app_bbcc").append(optionHTML);

		});
		$.each(get_categories, function () {
			var optionHTML = '<option value="'+this.category_name+'">'+this.category_name+'</option>';
			$("#category_app_bbcc").append(optionHTML);
		});
		$('.selectpicker').selectpicker('render');

		
      });


      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;

      });
		
	  
	  /* validation starts 
		 $("form[name='supplier_information']").validate({
			rules: {
			  "solution_category["+x+"]" : "required",
			  "userFiles["+x+"]": "required",
			  "new_supplier_name["+x+"]": "required",
			  "new_service_name["+x+"]": "required",
			  "customer_type["+x+"]": "required",
			  "product_category["+x+"]": "required",
			  "product_detailzz["+x+"]": "required",
			  "price_currency["+x+"]": "required",
			  "price_range["+x+"]": "required",
			  "price_details["+x+"]": "required",
			  "operating_system["+x+"]": "required",
			  "specialist_hardware["+x+"]": "required",
			  "third_party_software["+x+"]": "required",
			  "ease_setup["+x+"]": "required",
			  "product_link["+x+"]" : "required",
			  "protection_level["+x+"]": "required",
			  "commission_detail["+x+"]": "required",
			  "payment_option["+x+"]": "required",
			  "location_service["+x+"]": "required",
			  "regulation["+x+"]": "required",
			},
			messages: {
			  "solution_category["+x+"]" : "This field is required",
			  "userFiles["+x+"]": "This field is required",
			  "new_supplier_name["+x+"]": "This field is required",
			  "new_service_name["+x+"]": "This field is required",
			  "customer_type["+x+"]": "This field is required",
			  "product_category["+x+"]": "This field is required",
			  "product_detailzz["+x+"]": "This field is required",
			  "price_currency["+x+"]": "This field is required",
			  "price_range["+x+"]": "This field is required",
			  "price_details["+x+"]": "This field is required",
			  "operating_system["+x+"]": "This field is required",
			  "specialist_hardware["+x+"]": "This field is required",
			  "third_party_software["+x+"]": "This field is required",
			  "ease_setup["+x+"]": "This field is required",
			  "product_link["+x+"]": "This field is required",
			  "protection_level["+x+"]": "This field is required",
			  "commission_detail["+x+"]": "This field is required",
			  "payment_option["+x+"]": "This field is required",
			  "location_service["+x+"]": "This field is required",
			  "regulation["+x+"]": "This field is required",
			}
			
		  });
	
	   validation ends */

    });
</script>
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
		function product_categoryzz(e){
			val = $(e).val();
			if (val == "Please select") {
				$( ".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Data Storage") {
				$( ".felbovalue").html("<option value='Local'>Local</option><option value='Remote'>Remote</option>");
			} 
			else if (val == "Threat Prevention") {
				$(".felbovalue").html("<option value='Detection'>Detection</option><option value='Prevention'>Prevention</option><option value='Detection and Prevention'>Detection and Prevention</option>");
			}
			else if (val == "Intrusion Detection Systems (IDS)") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Antivirus" || val == "Firewall" || val == "Ad blocking" || val == "Managed Service Solution Provider"  || val == "Public Key Infrastructure (PKI)" || val == "Email Security" || val == "Device Management" || val == "Consultancy/Implementation"){
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Accreditation/Regulation") {
				$(".felbovalue").html("<option value='CyberEssentials only'>CyberEssentials only</option><option value='CyberEssentials+ only'>CyberEssentials+ only</option><option value='GDPR only'>GDPR only</option><option value='PCI/DSS only'>PCI/DSS only</option><option value='ISO only'>ISO only</option><option value='NIST only'>NIST only</option><option value='CyberEssentials & GDPR'>CyberEssentials & GDPR</option><option value='CyberEssentials+ & GDPR'>CyberEssentials+ & GDPR</option><option value='CyberEssentials & GDPR & PCI/DSS'>CyberEssentials & GDPR & PCI/DSS</option><option value='CyberEssentials+ & GDPR & PCI/DSS'>CyberEssentials+ & GDPR & PCI/DSS</option><option value='GDPR & PCI/DSS'>GDPR & PCI/DSS</option><option value='GDPR & PCI/DSS & NIST'>GDPR & PCI/DSS & NIST</option><option value='CyberEssentials & GDPR & ISO'>CyberEssentials & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='CyberEssentials+ & GDPR & ISO'>CyberEssentials+ & GDPR & ISO</option><option value='CyberEssentials+ & GDPR & ISO & NIST'>CyberEssentials+ & GDPR & ISO & NIST</option><option value='GDPR & ISO'>GDPR & ISO</option><option value='GDPR & ISO & NIST'>GDPR & ISO & NIST</option><option value='CyberEssentials & GDPR & ISO '>CyberEssentials & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='CyberEssentials+ & GDPR & ISO'>CyberEssentials+ & GDPR & ISO</option><option value='CyberEssentials & GDPR & ISO & NIST'>CyberEssentials & GDPR & ISO & NIST</option><option value='GDPR & ISO'>GDPR & ISO</option><option value='GDPR & ISO & NIST'>GDPR & ISO & NIST</option>");
			} 
			else if (val == "Proxy") {
				$(".felbovalue").html("<option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option>");
			} 
			else if (val == "Spam Filtering") {
				$(".felbovalue").html("<option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option>");
			} 
			else if (val == "Cybersecurity Insurance") {
				$(".felbovalue").html("<option value='No category to use'>No category to use</option>");
			} 
			else if (val == "Operating System") {
				$(".felbovalue").html("<option value='Windows 7 or below'>Windows 7 or below</option><option value='Windows 8 or above'>Windows 8 or above</option><option value='Mac'>Mac</option><option value='Linux'>Linux</option>");
			} 
			else if (val == "Internet") {
				$(".felbovalue").html("<option value='WiFi/LAN'>WiFi/LAN</option><option value='Spam Filtering'>Spam Filtering</option><option value='Ad Blocking'>Ad Blocking</option>");
			} 
			else if (val == "Physical Security (of Buildings, Equipment)") {
				$(".felbovalue").html("<option value='Video surveillance'>Video surveillance</option><option value='Alarm'>Alarm</option><option value='Lock'>Lock</option><option value='Keypad'>Keypad</option><option value='Access Card'>Access Card</option><option value='Perimeter fencing'>Perimeter fencing</option>");
			} 
			else if (val == "Microsoft Active/Open Directory") {
				$(".felbovalue").html("<option value='Microsoft Active Directory'>Microsoft Active Directory</option><option value='Microsoft Open Directory'>Microsoft Open Directory</option>");
			}
			else if (val == "Authentication") {
				$(".felbovalue").html("<option value='Single factor'>Single factor</option><option value='Multi-factor'>Multi-factor</option>");
			}
			else if (val == "Training") {
				$(".felbovalue").html("<option value='Cybersecurity'>Cybersecurity</option><option value='Physical security'>Physical security</option><option value='Cyber & Physical security'>Cyber & Physical security</option>");
			}
			else if (val == "Encryption") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Secure Domain Name System (DNS)") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Mobile Device Management") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Managed Service Solution Providers") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Training") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Consultancy/Implementation") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
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
		

	$(function() {
	  
	});	
	</script>

	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>