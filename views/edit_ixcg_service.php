<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit IXCG Services | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	<style>
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
label{
			font-weight:normal !important;
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
          Let’s Edit IXCG Service
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
			<ul class="nav "></ul> 
			<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
					<form name="supplier_information" action="<?php echo base_url();?>edit_ixcg_service/add_ixcg_service" enctype="multipart/form-data" method="POST">
				
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-th-list"></i></strong>Edit IXCG Service
						</h3>
					  </div>
					  <div class="step">
						
					<div class="bbcc">
						<?php
							$logo = $get_service_details->logo;
							if($logo == ""){
								$logo_img_link = "";
							}else{
								$logo_img_link = "".base_url()."uploads/".$get_service_details->logo."";
							}
						?>
						<div class="new_div" style="border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;">
						  <div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Logo</label>
								  <img src="<?php echo $logo_img_link;?>" style="height:30px;"><br/>
								  <input type="file" class="form-control" name="userFiles">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Supplier Name</label>
								  	<input type="text" class="form-control" name="new_supplier_name" value="<?php echo $get_service_details->supplier_name;?>">
									<input type="hidden" name="service_id" value="<?php echo $get_service_details->supplier_service_id;?>">
									<input type="hidden" name="stockcode" value="<?php echo $get_service_details->service_stockcode;?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Service Name</label>
								    <input type="text" class="form-control" name="new_service_name" value="<?php echo $get_service_details->product_detail;?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Customer Type</label>
									<select class="form-control" name="customer_type">
										<option selected hidden>Please select</option>
										<option <?php echo((isset($get_service_details->customer_type) && $get_service_details->customer_type == "Small") ? 'selected' :'')?>>Small</option>
										<option <?php echo((isset($get_service_details->customer_type) && $get_service_details->customer_type == "Medium") ? 'selected' :'')?>>Medium</option>
										<option <?php echo((isset($get_service_details->customer_type) && $get_service_details->customer_type == "Enterprise") ? 'selected' :'')?>>Enterprise</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
									<div class="form-group ">
									  <label>Product Category</label>
										  <select class="selectpicker form-control required tulbovalue" multiple="multiple" name="solution_category" onchange="product_categoryzz(this)">
											<option disabled="disabled">Click all that apply</option>
											<?php 
												$explode_supplier_category = explode(',',$get_service_details->product_category);
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
								  <label>Product Detail</label>

									<select class="form-control required felbovalue" name="product_detailzz" id="product_detailzz">
		
											<option value='Please select'>No category to choose</option>
										<?php
											if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Data Storage"){
										?>
											<option value='Local'>Local</option>
											<option value='Remote'>Remote</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Threat Prevention"){
										?>
											<option value='IPS'>IPS</option><option value='Access Control'>Access Control</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Intrusion Detection Systems (IDS)"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Accreditation/Regulation"){
										?>
											<option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Proxy"){
										?>
											<option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option>
										<?php
											}
											else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Spam Filtering"){
										?>
											<option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option>
										<?php
											}
											else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Cyber Insurance"){
										?>
											<option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option>
										<?php
											}
											else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Encryption"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}
											else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Secure Domain Name System (DNS)"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Mobile Device Management"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Managed Service Solution Providers"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Training"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}else if(isset($get_service_details->product_detail) && $get_service_details->product_detail == "Consultancy/Implementation"){
										?>
											<option value='Please select'>No category to choose</option>
										<?php
											}
										?>
									</select>
								 </div>
							  </div>
							 <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Currency</label>
									<select class="selectpicker form-control" data-live-search="true" name="price_currency" >
										<option disabled="" <?php echo((isset($get_service_details->currency) && $get_service_details->currency != "") ? '' :'selected')?>>Please select</option>
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" <?php echo((isset($get_service_details->currency) && $get_service_details->currency == $all_currency->code) ? 'selected' :'')?>><?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?></option>
										<?php
											}
										?>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Range</label>
									<select class="form-control" name="price_range">
										<option selected hidden>Please select</option>
										<option value="0-500"<?php echo (($get_service_details->price_range == '0-500')?'selected':'')?>>0 - 500</option>
										<option value="500-1000"<?php echo (($get_service_details->price_range == '500-1000')?'selected':'')?>>500 - 1,000</option>
										<option value="1000-5000"<?php echo (($get_service_details->price_range == '1000-5000')?'selected':'')?>>1'000 - 5'000</option>
										<option value="5000-10000"<?php echo (($get_service_details->price_range == '5000-10000')?'selected':'')?>>5'000 - 1'0000</option>
										<option value="10000+"<?php echo (($get_service_details->price_range == '10000+')?'selected':'')?>>10,000 +</option>
									</select>
								</div>
							  </div>
							 
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Price Detail</label>
								   <input type="text" class="form-control" name="price_details" value="<?php echo $get_service_details->price_detail?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Operating System</label>
								  <select class="form-control" name="operating_system" >
										<option selected hidden>Please select</option>
										<option value="Windows 7 or Below"<?php echo (($get_service_details->operating_system == 'Windows 7 or Below')?'selected':'')?>>Windows 7 or Below</option>
										<option value="Windows 8+"<?php echo (($get_service_details->operating_system == 'Windows 8+')?'selected':'')?>>Windows 8 or Above</option>
										<option value="Linux"<?php echo (($get_service_details->operating_system == 'Linux')?'selected':'')?>>Linux</option>
										<option value="Mac"<?php echo (($get_service_details->operating_system == 'Mac')?'selected':'')?>>Mac</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Specialist Hardware</label>
									<select class="form-control" name="specialist_hardware">
										<option selected hidden>Please select</option>
										<option value="yes"<?php echo (($get_service_details->specialist_hardware == 'yes')?'selected':'')?>>Yes</option>
										<option value="no"<?php echo (($get_service_details->specialist_hardware == 'no')?'selected':'')?>>No</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>3rd Party Software</label>
									<select class="form-control" name="third_party_software" >
										<option selected hidden>Please select</option>
										<option value="yes"<?php echo (($get_service_details->third_party_supplier == 'yes')?'selected':'')?>>Yes</option>
										<option value="no"<?php echo (($get_service_details->third_party_supplier == 'yes')?'selected':'')?>>No</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Ease of Setup</label>
									<select class="form-control" name="ease_setup" >
										<option selected hidden>Please select</option>
										<option value="specialist"<?php echo (($get_service_details->ease_of_setup == 'specialist')?'selected':'')?>>Specialist</option>
										<option value="non-specialist"<?php echo (($get_service_details->ease_of_setup == 'non-specialist')?'selected':'')?>>Non-Specialist</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Protection Level</label>
								  <select class="form-control" name="protection_level">
										<option selected hidden>Please select</option>
										<option value="basic"<?php echo (($get_service_details->protection_level == 'basic')?'selected':'')?>>Basic</option>
										<option value="advanced"<?php echo (($get_service_details->protection_level == 'advanced')?'selected':'')?>>Advanced</option>
										<option value="complete"<?php echo (($get_service_details->protection_level == 'complete')?'selected':'')?>>Complete</option>
									</select>
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Product Link</label>
								   <input type="text" class="form-control" name="product_link" value="<?php echo $get_service_details->product_link?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Commission Detail</label>
									<select class="form-control" name="commission_detail">
										<option selected hidden>Please select</option>
										<option value="10"<?php echo (($get_service_details->commission_detail == '10')?'selected':'')?>>10%</option>
										<option value="20"<?php echo (($get_service_details->commission_detail == '20')?'selected':'')?>>20%</option>
										<option value="30"<?php echo (($get_service_details->commission_detail == '30')?'selected':'')?>>30%</option>
									</select>
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Payment Option</label>
									<select class="form-control" name="payment_option">
										<option selected hidden>Please select</option>
										<option value="Monthly"<?php echo (($get_service_details->payment_option == 'Monthly')?'selected':'')?>>Monthly</option>
										<option value="Quarterly"<?php echo (($get_service_details->payment_option == 'Quarterly')?'selected':'')?>>Quarterly</option>
										<option value="Yearly"<?php echo (($get_service_details->payment_option == 'Yearly')?'selected':'')?>>Yearly</option>
									</select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Government Voucher</label>
								   <input type="nubmer" class="form-control" name="government_voucher" value="<?php echo $get_service_details->govt_voucher?>">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Cash Back</label>
								    <input type="text" class="form-control" name="cash_back" value="<?php echo $get_service_details->cashback?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Rating/Ranking</label>
								    <input type="text" class="form-control" name="rating_ranking" value="<?php echo $get_service_details->rating?>">
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in</label>
									<select class="form-control " multiple name="location_service">
										<option selected hidden>Please select</option>
										<option value="Northern Ireland (UK)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Northern Ireland (UK)") ? 'selected' :'')?>>Northern Ireland (UK)</option>
										<option value="Ireland (Europe)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Ireland (Europe)") ? 'selected' :'')?>>Ireland (Europe)</option>
										<option value="Mainland UK" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Mainland UK") ? 'selected' :'')?>>Mainland UK</option>
										<option value="Europe (Continental)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Europe (Continental)") ? 'selected' :'')?>>Europe (Continental)</option>
										<option value="North America" <?php echo((isset($get_service_details->location) && $get_service_details->location == "North America") ? 'selected' :'')?>>North America</option>
										<option value="Central America" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Central America") ? 'selected' :'')?>>Central America</option>
										<option value="South America" <?php echo((isset($get_service_details->location) && $get_service_details->location == "South America") ? 'selected' :'')?>>South America</option>
										<option value="Africa" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Africa") ? 'selected' :'')?>>Africa</option>
										<option value="Middle East (UAE, Qatar, Oman etc)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Middle East (UAE, Qatar, Oman etc)") ? 'selected' :'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option value="Middle East (Israel)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Middle East (Israel)") ? 'selected' :'')?>>Middle East (Israel)</option>
										<option value="Russia" <?php echo((isset($get_service_details->location) && $get_service_details->location == "Russia") ? 'selected' :'')?>>Russia</option>
										<option value="South Asia (India, Pakistan, Bangladesh etc)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "South Asia (India, Pakistan, Bangladesh etc)") ? 'selected' :'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option value="South East Asia (China, Japan etc)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "South East Asia (China, Japan etc)") ? 'selected' :'')?>>South East Asia (China, Japan etc)</option>
										<option value="South Pacific (Australia, New Zealand etc)" <?php echo((isset($get_service_details->location) && $get_service_details->location == "South Pacific (Australia, New Zealand etc)") ? 'selected' :'')?>>South Pacific (Australia, New Zealand etc)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Regulation</label>
									<select class="form-control" name="regulation">
										<option selected hidden>Please select</option>
										<option value="CyberEssentials" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "CyberEssentials") ? 'selected' :'')?>>CyberEssentials</option>
										<option value="General Data Protection regulation (GDPR)" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "General Data Protection regulation (GDPR)") ? 'selected' :'')?>>General Data Protection regulation (GDPR)</option>
										<option value="Control Objectives for Information and Related Technology (COBIT)" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "Control Objectives for Information and Related Technology (COBIT)") ? 'selected' :'')?>>Control Objectives for Information and Related Technology (COBIT)</option>
										<option value="ISO/IEC 27000-series" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "ISO/IEC 27000-series") ? 'selected' :'')?>>ISO/IEC 27000-series</option>
										<option value="FSMA/NIST" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "FSMA/NIST") ? 'selected' :'')?>>FSMA/NIST</option>
										<option value="PDPA (Singapore)" <?php echo((isset($get_service_details->regulation) && $get_service_details->regulation == "PDPA (Singapore)") ? 'selected' :'')?>>PDPA (Singapore)</option>
								  </select>
								</div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label>Instructions to user after order</label>
								    <textarea class="form-control" name="instruction_details" value="<?php echo $get_service_details->user_instruction;?>"></textarea>
								 </div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Service Provider</label>
								    <input type="text" class="form-control" name="service_provide" value="<?php echo $get_service_details->service_provider?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Stock Code</label>
									 <input type="text" class="form-control" name="stock_code" value="<?php echo $get_service_details->service_stockcode?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Net Price</label>
								    <input type="text" class="form-control" name="net_price" value="<?php echo $get_service_details->net_price?>">
								 </div>
							  </div>
							   <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Product Class</label>
								    <input type="text" class="form-control" name="produc_class" value="<?php echo $get_service_details->prodclass?>">
								</div>
							  </div>
							</div>
							<div class="row">
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Ease of Installation</label>
									 <input type="text" class="form-control" name="ease_install" value="<?php echo $get_service_details->easeofinstallation?>">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
								  <label>Virtual</label>
								    <input type="text" class="form-control" name="virtual" value="<?php echo $get_service_details->virtual?>">
								 </div>
							  </div>
							  <div class="col-md-3 col-sm-3">
								<div class="form-group">
									<label>Unit</label>
								    <input type="text" class="form-control" name="unit" value="<?php echo $get_service_details->unit?>">
								</div>
							  </div>
							</div>
						  </div>
					  </div>
					  <div class="row">
						  <div class="col-md-12 col-sm-12">
							<div class="form-group">
							  <div class="checkbox">	
								<label style="font-weight:bold;">
								  <input  type="checkbox" name="check_payment" value="1"> <span style="font-size:18px;color:#ec8b0d;">Yes, I have completed payment setup.</span> If haven't, <a href="payments">Click Here</a> to setup.
								  <span class="checkmark"></span>
								</label>
							  </div>
							 </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							<div class="form-group">
							  <div class="checkbox">	
								<label style="font-weight:bold;">
								  <input  type="checkbox" name="terms_condition[]" value="1"> I acknowledge the <a href="<?php echo base_url('terms')?>">Terms and Conditions</a>.
								  <span class="checkmark"></span>
								</label>
							  </div>
							 </div>
						  </div>
						</div>
						<div class="col-md-12 text-right" style="padding-top:20px;">
							 <button type="submit" class="btn btn-warning btn-medium"  style="margin-left:10px;">Save And Publish</button>
							 <a href="javascript:void(0);"  class="btn btn-success btn-medium add_another" >Cancel</a>
					    </div>
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

    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
<script>
  $(document).ready(function() {
      var max_fields      = 30; //maximum input boxes allowed
      var wrapper         = $(".addsz"); //Fields wrapper
      var add_button      = $(".add_something"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
			
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append("<div class='col-md-12' style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><div class='new_div' style='border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;'><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Logo</label><input type='file' class='form-control' name='userFiles[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Supplier Name</label><input type='text' class='form-control' name='new_supplier_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Service Name</label><input type='text' class='form-control' name='new_service_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Customer Type</label><select class='form-control' name='customer_type[]'><option selected hidden>Please select</option><option>Small</option><option>Medium</option><option>Enterprise</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Category</label><select class='form-control required tulbovalue' name='product_category[]' onchange='product_categoryzz(this)'><option>Please select</option><option value='Data Storage'>Data Storage</option><option value='Threat Prevention'>Threat Prevention</option><option value='Intrusion Detection Systems (IDS)'>Intrusion Detection Systems (IDS)</option><option value='Antivirus'>Antivirus</option><option value='Accreditation/Regulation'>Accreditation/Regulation</option><option value='Proxy'>Proxy</option><option value='Spam Filtering'>Spam Filtering</option><option value='Cyber Insurance'>Cyber Insurance</option><option value='Encryption'>Encryption</option><option value='Secure Domain Name System (DNS)'>Secure Domain Name System (DNS)</option><option value='Mobile Device Management'>Mobile Device Management</option><option value='Managed Service Solution Providers'>Managed Service Solution Providers</option><option value='Training'>Training</option><option value='Consultancy/Implementation'>Consultancy/Implementation</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Detail</label><select class='form-control required felbovalue' name='product_detailzz[]' id='product_detailzz'><option value='Please select'>No category to choose</option><option value='Local'>Local</option><option value='Remote'>Remote</option><option value='IPS'>IPS</option><option value='Access Control'>Access Control</option><option value='Please select'>No category to choose</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option><option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option><option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option><option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Currency</label><select class='form-control required' name='price_currency[]' ><option selected hidden >Please select</option><option value='AED'>AED - UAE Dirham</option><option value='AFN'>AFN - Afghani - ؋</option><option value='ALL'>ALL - Lek - Lek</option><option value='AMD'>AMD - Armenian Dram</option><option value='ANG'>ANG - Netherlands Antillian Guilder - ƒ</option><option value='AOA'>AOA - Kwanza</option><option value='ARS'>ARS - Argentine Peso - $</option><option value='AUD'>AUD - Australian Dollar - $</option><option value='AWG'>AWG - Aruban Guilder - ƒ</option><option value='AZN'>AZN - Azerbaijanian Manat - ман</option><option value='BAM'>BAM - Convertible Marks - KM</option><option value='BBD'>BBD - Barbados Dollar - $</option><option value='BDT'>BDT - Taka</option><option value='BGN'>BGN - Bulgarian Lev - лв</option><option value='BIF'>BIF - Burundi Franc</option><option value='BMD'>BMD - Bermudian Dollar (customarily known as Bermuda Dollar) - $</option><option value='BND'>BND - Brunei Dollar - $</option><option value='BOB'>BOB BOV - Boliviano Mvdol - $b</option><option value='BRL'>BRL - Brazilian Real - R$</option><option value='BSD'>BSD - Bahamian Dollar - $</option><option value='BWP' >BWP - Pula - P</option><option value='BZD'>BZD - Belize Dollar - BZ$</option><option value='CAD'>CAD - Canadian Dollar - $</option><option value='CDF'>CDF - Congolese Franc</option><option value='CHF'>CHF - Swiss Franc - CHF</option><option value='CLP'>CLP CLF - Chilean Peso Unidades de fomento - $</option><option value='CNY'>CNY - Yuan Renminbi - ¥</option><option value='COP'>COP COU - Colombian Peso Unidad de Valor Real - $</option><option value='CRC'>CRC - Costa Rican Colon - ₡</option><option value='CVE'>CVE - Cape Verde Escudo</option><option value='CZK'>CZK - Czech Koruna - Kč</option><option value='DJF'>DJF - Djibouti Franc</option><option value='DKK'>DKK - Danish Krone - kr</option><option value='DOP'>DOP - Dominican Peso - RD$</option><option value='DZD'>DZD - Algerian Dinar</option><option value='EGP'>EGP - Egyptian Pound - £</option><option value='ETB'>ETB - Ethiopian Birr</option><option value='EUR'>EUR - Euro - €</option><option value='FJD'>FJD - Fiji Dollar - $</option><option value='FKP'>FKP - Falkland Islands Pound - £</option><option value='GBP'>GBP - Pound Sterling - £</option><option value='GEL'>GEL - Lari</option><option value='GIP'>GIP - Gibraltar Pound - £</option><option value='GMD'>GMD - Dalasi</option><option value='GNF'>GNF - Guinea Franc</option><option value='GTQ'>GTQ - Quetzal - Q</option><option value='GYD'>GYD - Guyana Dollar - $</option><option value='HKD'>HKD - Hong Kong Dollar - $</option><option value='HNL'>HNL - Lempira - L</option><option value='HRK'>HRK - Croatian Kuna - kn</option><option value='HTG'>HTG USD - Haitian Gourde US Dollar</option><option value='HUF'>HUF - Forint - Ft</option><option value='IDR'>IDR - Rupiah - Rp</option><option value='ILS'>ILS - New Israeli Sheqel - ₪</option><option value='INR'>INR - Indian Rupee</option><option value='ISK'>ISK - Iceland Krona - kr</option><option value='JMD'>JMD - Jamaican Dollar - J$</option><option value='JPY'>JPY - Yen - ¥</option><option value='KES'>KES - Kenyan Shilling</option><option value='KGS'>KGS - Som - лв</option><option value='KHR'>KHR - Riel - ៛</option><option value='KMF'>KMF - Comoro Franc</option><option value='KRW'>KRW - Won - ₩</option><option value='KYD'>KYD - Cayman Islands Dollar - $</option><option value='KZT'>KZT - Tenge - лв</option><option value='LAK'>LAK - Kip - ₭</option><option value='LBP'>LBP - Lebanese Pound - £</option><option value='LKR'>LKR - Sri Lanka Rupee - ₨</option><option value='LRD'>LRD - Liberian Dollar - $</option><option value='MAD'>MAD - Moroccan Dirham</option><option value='MDL'>MDL - Moldovan Leu</option><option value='MGA'>MGA - Malagasy Ariary</option><option value='MKD'>MKD - Denar - ден</option><option value='MMK'>MMK - Kyat</option><option value='MNT' >MNT - Tugrik - ₮</option><option value='MOP'>MOP - Pataca</option><option value='MRO'>MRO - Ouguiya</option><option value='MUR'>MUR - Mauritius Rupee - ₨</option><option value='MVR'>MVR - Rufiyaa</option><option value='MWK'>MWK - Kwacha</option><option value='MXN'>MXN MXV - Mexican Peso Mexican Unidad de Inversion (UDI) - $</option><option value='MYR'>MYR - Malaysian Ringgit - RM</option><option value='MZN'>MZN - Metical - MT</option><option value='NGN'>NGN - Naira - ₦</option><option value='NIO'>NIO - Cordoba Oro - C$</option><option value='NOK'>NOK - Norwegian Krone - kr</option><option value='NPR'>NPR - Nepalese Rupee - ₨</option><option value='NZD'>NZD - New Zealand Dollar - $</option><option value='PAB'>PAB USD - Balboa US Dollar - B/.</option><option value='PEN'>PEN - Nuevo Sol - S/.</option><option value='PGK'>PGK - Kina</option><option value='PHP'>PHP - Philippine Peso - Php</option><option value='PKR'>PKR - Pakistan Rupee - ₨</option><option value='PLN'>PLN - Zloty - zł</option><option value='PYG'>PYG - Guarani - Gs</option><option value='QAR'>QAR - Qatari Rial - ﷼</option><option value='RON' >RON - New Leu - lei</option><option value='RSD' >RSD - Serbian Dinar - Дин.</option><option value='RUB' >RUB - Russian Ruble - руб</option><option value='RWF'>RWF - Rwanda Franc</option><option value='SAR' >SAR - Saudi Riyal - ﷼</option><option value='SBD' >SBD - Solomon Islands Dollar - $</option><option value='SCR' >SCR - Seychelles Rupee - ₨</option><option value='SDG'>SDG - Sudanese Pound</option><option value='SEK'>SEK - Swedish Krona - kr</option><option value='SGD'>SGD - Singapore Dollar - $</option><option value='SHP'>SHP - Saint Helena Pound - £</option><option value='SLL'>SLL - Leone</option><option value='SOS'>SOS - Somali Shilling - S</option><option value='SRD'>SRD - Surinam Dollar - $</option><option value='STD'>STD - Dobra</option><option value='SVC'>SVC USD - El Salvador Colon US Dollar - $</option><option value='SZL'>SZL - Lilangeni</option><option value='THB'>THB - Baht - ฿</option><option value='TJS'>TJS - Somoni</option><option value='TOP'>TOP - Pa'anga</option><option value='TRY'>TRY - Turkish Lira - TL</option><option value='TTD'>TTD - Trinidad and Tobago Dollar - TT$</option><option value='TWD'>TWD - New Taiwan Dollar - NT$</option><option value='TZS'>TZS - Tanzanian Shilling</option><option value='UAH'>UAH - Hryvnia - ₴</option><option value='UGX'>UGX - Uganda Shilling</option><option value='USD'>USD - US Dollar - $</option><option value='UYU'>UYU UYI - Peso Uruguayo Uruguay Peso en Unidades Indexadas - $U</option><option value='UZS'>UZS - Uzbekistan Sum - лв</option><option value='VND'>VND - Dong - ₫</option><option value='VUV'>VUV - Vatu</option><option value='WST'>WST - Tala</option><option value='XAF'>XAF - CFA Franc BEAC</option><option value='XCD' >XCD - East Caribbean Dollar - $</option><option value='XOF'>XOF - CFA Franc BCEAO</option><option value='XPF'>XPF - CFP Franc</option><option value='YER'>YER - Yemeni Rial - ﷼</option><option value='ZAR'>ZAR - Rand - R</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Range</label><select class='form-control' name='price_range[]'><option selected hidden>Please select</option><option value='0-500'>0 - 500</option><option value='500-1000'>500 - 1,000</option><option value='1000-5000'>1'000 - 5'000</option><option value='5000-10000'>5'000 - 1'0000</option><option value='10000+'>10,000 +</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Detail</label><input type='text' class='form-control' name='price_details[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Operating System</label><select class='form-control' name='operating_system[]' ><option selected hidden>Please select</option><option value='Windows 7 or Below'>Windows 7 or Below</option><option value='Windows 8+'>Windows 8 or Above</option><option value='Linux'>Linux</option><option value='Mac'>Mac</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Specialist Hardware</label><select class='form-control' name='specialist_hardware[]'><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>3rd Party Software</label><select class='form-control' name='third_party_software[]' ><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Ease of Setup</label><select class='form-control' name='ease_setup[]' ><option selected hidden>Please select</option><option value='specialist'>Specialist</option><option value='non-specialist'>Non-Specialist</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Protection Level</label><select class='form-control' name='protection_level[]'><option selected hidden>Please select</option><option value='basic'>Basic</option><option value='advanced'>Advanced</option><option value='complete'>Complete</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Link</label><input type='text' class='form-control' name='product_link[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Commission Detail</label><select class='form-control' name='commission_detail[]'><option selected hidden>Please select</option><option value='10'>10%</option><option value='20' <?php echo((isset($values->commission_detail) && $values->commission_detail == '20') ? 'selected' :'')?>>20%</option><option value='30'>30%</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Payment Option</label><select class='form-control' name='payment_option[]'><option selected hidden>Please select</option><option>Monthly</option><option>Quarterly</option><option>Yearly</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Government Voucher</label><input type='nubmer' class='form-control' name='government_voucher[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Cash Back</label><input type='text' class='form-control' name='cash_back[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Rating/Ranking</label><input type='text' class='form-control' name='rating_ranking[]'></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in</label><select class='form-control' multiple='multiple' name='location_service[]'><option selected hidden>Please select</option><option value='Northern Ireland (UK)' >Northern Ireland (UK)</option><option value='Ireland (Europe)'>Ireland (Europe)</option><option value='Mainland UK'>Mainland UK</option><option value='Europe (Continental)'>Europe (Continental)</option><option value='North America'>North America</option><option value='Central America'>Central America</option><option value='South America'>South America</option><option value='Africa'>Africa</option><option value='Middle East (UAE, Qatar, Oman etc)'>Middle East (UAE, Qatar, Oman etc)</option><option value='Middle East (Israel)'>Middle East (Israel)</option><option value='Russia'>Russia</option><option value='South Asia (India, Pakistan, Bangladesh etc)'>South Asia (India, Pakistan, Bangladesh etc)</option><option value='South East Asia (China, Japan etc)'>South East Asia (China, Japan etc)</option><option value='South Pacific (Australia, New Zealand etc)' >South Pacific (Australia, New Zealand etc)</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Regulation</label><select class='form-control' name='regulation[]'><option selected >Please select</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option></select></div></div><div class='col-md-6 col-sm-6'><div class='form-group'><label>Instructions to user after order</label><textarea class='form-control' name='instruction_details[]'></textarea></div></div></div></div></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='<?php echo base_url();?>images/if_Remove_27874.png'style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box
        }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
</script>


<script>
  $(document).ready(function() {
      var max_fields      = 30; //maximum input boxes allowed
      var wrapper         = $(".bbcc"); //Fields wrapper
      var add_button      = $(".add_another"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
			
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append("<div class='col-md-12' style='margin-top:10px;'><div class='col-md-11' style='padding:0px 0px 0px 0px;'><div class='new_div' style='border-bottom:1px solid #000;margin-bottom:30px;padding-bottom:30px;'><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Logo</label><input type='file' class='form-control' name='userFiles[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Supplier Name</label><input type='text' class='form-control' name='new_supplier_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Service Name</label><input type='text' class='form-control' name='new_service_name[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Customer Type</label><select class='form-control' name='customer_type[]'><option selected hidden>Please select</option><option>Small</option><option>Medium</option><option>Enterprise</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Category</label><select class='form-control required tulbovalue' name='product_category[]' onchange='product_categoryzz(this)'><option>Please select</option><option value='Data Storage'>Data Storage</option><option value='Threat Prevention'>Threat Prevention</option><option value='Intrusion Detection Systems (IDS)'>Intrusion Detection Systems (IDS)</option><option value='Antivirus'>Antivirus</option><option value='Accreditation/Regulation'>Accreditation/Regulation</option><option value='Proxy'>Proxy</option><option value='Spam Filtering'>Spam Filtering</option><option value='Cyber Insurance'>Cyber Insurance</option><option value='Encryption'>Encryption</option><option value='Secure Domain Name System (DNS)'>Secure Domain Name System (DNS)</option><option value='Mobile Device Management'>Mobile Device Management</option><option value='Managed Service Solution Providers'>Managed Service Solution Providers</option><option value='Training'>Training</option><option value='Consultancy/Implementation'>Consultancy/Implementation</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Detail</label><select class='form-control required felbovalue' name='product_detailzz[]' id='product_detailzz'><option value='Please select'>No category to choose</option><option value='Local'>Local</option><option value='Remote'>Remote</option><option value='IPS'>IPS</option><option value='Access Control'>Access Control</option><option value='Please select'>No category to choose</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option><option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option><option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option><option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option><option value='Please select'>No category to choose</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Currency</label><select class='form-control required' name='price_currency[]' ><option selected hidden >Please select</option><option value='AED'>AED - UAE Dirham</option><option value='AFN'>AFN - Afghani - ؋</option><option value='ALL'>ALL - Lek - Lek</option><option value='AMD'>AMD - Armenian Dram</option><option value='ANG'>ANG - Netherlands Antillian Guilder - ƒ</option><option value='AOA'>AOA - Kwanza</option><option value='ARS'>ARS - Argentine Peso - $</option><option value='AUD'>AUD - Australian Dollar - $</option><option value='AWG'>AWG - Aruban Guilder - ƒ</option><option value='AZN'>AZN - Azerbaijanian Manat - ман</option><option value='BAM'>BAM - Convertible Marks - KM</option><option value='BBD'>BBD - Barbados Dollar - $</option><option value='BDT'>BDT - Taka</option><option value='BGN'>BGN - Bulgarian Lev - лв</option><option value='BIF'>BIF - Burundi Franc</option><option value='BMD'>BMD - Bermudian Dollar (customarily known as Bermuda Dollar) - $</option><option value='BND'>BND - Brunei Dollar - $</option><option value='BOB'>BOB BOV - Boliviano Mvdol - $b</option><option value='BRL'>BRL - Brazilian Real - R$</option><option value='BSD'>BSD - Bahamian Dollar - $</option><option value='BWP' >BWP - Pula - P</option><option value='BZD'>BZD - Belize Dollar - BZ$</option><option value='CAD'>CAD - Canadian Dollar - $</option><option value='CDF'>CDF - Congolese Franc</option><option value='CHF'>CHF - Swiss Franc - CHF</option><option value='CLP'>CLP CLF - Chilean Peso Unidades de fomento - $</option><option value='CNY'>CNY - Yuan Renminbi - ¥</option><option value='COP'>COP COU - Colombian Peso Unidad de Valor Real - $</option><option value='CRC'>CRC - Costa Rican Colon - ₡</option><option value='CVE'>CVE - Cape Verde Escudo</option><option value='CZK'>CZK - Czech Koruna - Kč</option><option value='DJF'>DJF - Djibouti Franc</option><option value='DKK'>DKK - Danish Krone - kr</option><option value='DOP'>DOP - Dominican Peso - RD$</option><option value='DZD'>DZD - Algerian Dinar</option><option value='EGP'>EGP - Egyptian Pound - £</option><option value='ETB'>ETB - Ethiopian Birr</option><option value='EUR'>EUR - Euro - €</option><option value='FJD'>FJD - Fiji Dollar - $</option><option value='FKP'>FKP - Falkland Islands Pound - £</option><option value='GBP'>GBP - Pound Sterling - £</option><option value='GEL'>GEL - Lari</option><option value='GIP'>GIP - Gibraltar Pound - £</option><option value='GMD'>GMD - Dalasi</option><option value='GNF'>GNF - Guinea Franc</option><option value='GTQ'>GTQ - Quetzal - Q</option><option value='GYD'>GYD - Guyana Dollar - $</option><option value='HKD'>HKD - Hong Kong Dollar - $</option><option value='HNL'>HNL - Lempira - L</option><option value='HRK'>HRK - Croatian Kuna - kn</option><option value='HTG'>HTG USD - Haitian Gourde US Dollar</option><option value='HUF'>HUF - Forint - Ft</option><option value='IDR'>IDR - Rupiah - Rp</option><option value='ILS'>ILS - New Israeli Sheqel - ₪</option><option value='INR'>INR - Indian Rupee</option><option value='ISK'>ISK - Iceland Krona - kr</option><option value='JMD'>JMD - Jamaican Dollar - J$</option><option value='JPY'>JPY - Yen - ¥</option><option value='KES'>KES - Kenyan Shilling</option><option value='KGS'>KGS - Som - лв</option><option value='KHR'>KHR - Riel - ៛</option><option value='KMF'>KMF - Comoro Franc</option><option value='KRW'>KRW - Won - ₩</option><option value='KYD'>KYD - Cayman Islands Dollar - $</option><option value='KZT'>KZT - Tenge - лв</option><option value='LAK'>LAK - Kip - ₭</option><option value='LBP'>LBP - Lebanese Pound - £</option><option value='LKR'>LKR - Sri Lanka Rupee - ₨</option><option value='LRD'>LRD - Liberian Dollar - $</option><option value='MAD'>MAD - Moroccan Dirham</option><option value='MDL'>MDL - Moldovan Leu</option><option value='MGA'>MGA - Malagasy Ariary</option><option value='MKD'>MKD - Denar - ден</option><option value='MMK'>MMK - Kyat</option><option value='MNT' >MNT - Tugrik - ₮</option><option value='MOP'>MOP - Pataca</option><option value='MRO'>MRO - Ouguiya</option><option value='MUR'>MUR - Mauritius Rupee - ₨</option><option value='MVR'>MVR - Rufiyaa</option><option value='MWK'>MWK - Kwacha</option><option value='MXN'>MXN MXV - Mexican Peso Mexican Unidad de Inversion (UDI) - $</option><option value='MYR'>MYR - Malaysian Ringgit - RM</option><option value='MZN'>MZN - Metical - MT</option><option value='NGN'>NGN - Naira - ₦</option><option value='NIO'>NIO - Cordoba Oro - C$</option><option value='NOK'>NOK - Norwegian Krone - kr</option><option value='NPR'>NPR - Nepalese Rupee - ₨</option><option value='NZD'>NZD - New Zealand Dollar - $</option><option value='PAB'>PAB USD - Balboa US Dollar - B/.</option><option value='PEN'>PEN - Nuevo Sol - S/.</option><option value='PGK'>PGK - Kina</option><option value='PHP'>PHP - Philippine Peso - Php</option><option value='PKR'>PKR - Pakistan Rupee - ₨</option><option value='PLN'>PLN - Zloty - zł</option><option value='PYG'>PYG - Guarani - Gs</option><option value='QAR'>QAR - Qatari Rial - ﷼</option><option value='RON' >RON - New Leu - lei</option><option value='RSD' >RSD - Serbian Dinar - Дин.</option><option value='RUB' >RUB - Russian Ruble - руб</option><option value='RWF'>RWF - Rwanda Franc</option><option value='SAR' >SAR - Saudi Riyal - ﷼</option><option value='SBD' >SBD - Solomon Islands Dollar - $</option><option value='SCR' >SCR - Seychelles Rupee - ₨</option><option value='SDG'>SDG - Sudanese Pound</option><option value='SEK'>SEK - Swedish Krona - kr</option><option value='SGD'>SGD - Singapore Dollar - $</option><option value='SHP'>SHP - Saint Helena Pound - £</option><option value='SLL'>SLL - Leone</option><option value='SOS'>SOS - Somali Shilling - S</option><option value='SRD'>SRD - Surinam Dollar - $</option><option value='STD'>STD - Dobra</option><option value='SVC'>SVC USD - El Salvador Colon US Dollar - $</option><option value='SZL'>SZL - Lilangeni</option><option value='THB'>THB - Baht - ฿</option><option value='TJS'>TJS - Somoni</option><option value='TOP'>TOP - Pa'anga</option><option value='TRY'>TRY - Turkish Lira - TL</option><option value='TTD'>TTD - Trinidad and Tobago Dollar - TT$</option><option value='TWD'>TWD - New Taiwan Dollar - NT$</option><option value='TZS'>TZS - Tanzanian Shilling</option><option value='UAH'>UAH - Hryvnia - ₴</option><option value='UGX'>UGX - Uganda Shilling</option><option value='USD'>USD - US Dollar - $</option><option value='UYU'>UYU UYI - Peso Uruguayo Uruguay Peso en Unidades Indexadas - $U</option><option value='UZS'>UZS - Uzbekistan Sum - лв</option><option value='VND'>VND - Dong - ₫</option><option value='VUV'>VUV - Vatu</option><option value='WST'>WST - Tala</option><option value='XAF'>XAF - CFA Franc BEAC</option><option value='XCD' >XCD - East Caribbean Dollar - $</option><option value='XOF'>XOF - CFA Franc BCEAO</option><option value='XPF'>XPF - CFP Franc</option><option value='YER'>YER - Yemeni Rial - ﷼</option><option value='ZAR'>ZAR - Rand - R</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Range</label><select class='form-control' name='price_range[]'><option selected hidden>Please select</option><option value='0-500'>0 - 500</option><option value='500-1000'>500 - 1,000</option><option value='1000-5000'>1'000 - 5'000</option><option value='5000-10000'>5'000 - 1'0000</option><option value='10000+'>10,000 +</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Price Detail</label><input type='text' class='form-control' name='price_details[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Operating System</label><select class='form-control' name='operating_system[]' ><option selected hidden>Please select</option><option value='Windows 7 or Below'>Windows 7 or Below</option><option value='Windows 8+'>Windows 8 or Above</option><option value='Linux'>Linux</option><option value='Mac'>Mac</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Specialist Hardware</label><select class='form-control' name='specialist_hardware[]'><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>3rd Party Software</label><select class='form-control' name='third_party_software[]' ><option selected hidden>Please select</option><option value='yes'>Yes</option><option value='no'>No</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Ease of Setup</label><select class='form-control' name='ease_setup[]' ><option selected hidden>Please select</option><option value='specialist'>Specialist</option><option value='non-specialist'>Non-Specialist</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Protection Level</label><select class='form-control' name='protection_level[]'><option selected hidden>Please select</option><option value='basic'>Basic</option><option value='advanced'>Advanced</option><option value='complete'>Complete</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Product Link</label><input type='text' class='form-control' name='product_link[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Commission Detail</label><select class='form-control' name='commission_detail[]'><option selected hidden>Please select</option><option value='10'>10%</option><option value='20' <?php echo((isset($values->commission_detail) && $values->commission_detail == '20') ? 'selected' :'')?>>20%</option><option value='30'>30%</option></select></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Payment Option</label><select class='form-control' name='payment_option[]'><option selected hidden>Please select</option><option>Monthly</option><option>Quarterly</option><option>Yearly</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Government Voucher</label><input type='nubmer' class='form-control' name='government_voucher[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Cash Back</label><input type='text' class='form-control' name='cash_back[]'></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Rating/Ranking</label><input type='text' class='form-control' name='rating_ranking[]'></div></div></div><div class='row'><div class='col-md-3 col-sm-3'><div class='form-group'><label>Location's&nbsp;service&nbsp;is&nbsp;sold&nbsp;in</label><select class='form-control' multiple='multiple' name='location_service[]'><option selected hidden>Please select</option><option value='Northern Ireland (UK)' >Northern Ireland (UK)</option><option value='Ireland (Europe)'>Ireland (Europe)</option><option value='Mainland UK'>Mainland UK</option><option value='Europe (Continental)'>Europe (Continental)</option><option value='North America'>North America</option><option value='Central America'>Central America</option><option value='South America'>South America</option><option value='Africa'>Africa</option><option value='Middle East (UAE, Qatar, Oman etc)'>Middle East (UAE, Qatar, Oman etc)</option><option value='Middle East (Israel)'>Middle East (Israel)</option><option value='Russia'>Russia</option><option value='South Asia (India, Pakistan, Bangladesh etc)'>South Asia (India, Pakistan, Bangladesh etc)</option><option value='South East Asia (China, Japan etc)'>South East Asia (China, Japan etc)</option><option value='South Pacific (Australia, New Zealand etc)' >South Pacific (Australia, New Zealand etc)</option></select></div></div><div class='col-md-3 col-sm-3'><div class='form-group'><label>Regulation</label><select class='form-control' name='regulation[]'><option selected >Please select</option><option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option></select></div></div><div class='col-md-6 col-sm-6'><div class='form-group'><label>Instructions to user after order</label><textarea class='form-control' name='instruction_details[]'></textarea></div></div></div></div></div>&nbsp;<a href='#' class='remove_field btn red'><div class='col-md-1' style='padding:0px 0px 0px 0px;'><img src='<?php echo base_url();?>images/if_Remove_27874.png'style='height:20px;width:20px;margin-top:-10px;'></div></a></div>"); //add input box
        }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
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
				$(".felbovalue").html("<option value='IPS'>IPS</option><option value='Access Control'>Access Control</option>");
			}
			else if (val == "Intrusion Detection Systems (IDS)") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Antivirus") {
				$(".felbovalue").html("<option value='Please select'>No category to choose</option>");
			} 
			else if (val == "Accreditation/Regulation") {
				$(".felbovalue").html("<option value='CyberEssentials'>CyberEssentials</option><option value='General Data Protection regulation (GDPR)'>General Data Protection regulation (GDPR)</option><option value='Control Objectives for Information and Related Technology (COBIT)'>Control Objectives for Information and Related Technology (COBIT)</option><option value='ISO/IEC 27000-series'>ISO/IEC 27000-series</option><option value='FSMA/NIST'>FSMA/NIST</option><option value='PDPA (Singapore)'>PDPA (Singapore)</option>");
			} 
			else if (val == "Proxy") {
				$(".felbovalue").html("<option value='VPN'>VPN</option><option value='Web Proxy'>Web Proxy</option>");
			} 
			else if (val == "Spam Filtering") {
				$(".felbovalue").html("<option value='Email Spam'>Email Spam</option><option value='Ad Blocking'>Ad Blocking</option><option value='Packet Filtering'>Packet Filtering</option>");
			} 
			else if (val == "Cyber Insurance") {
				$(".felbovalue").html("<option value='Basic'>Basic</option><option value='Advance'>Advance</option><option value='Complete'>Complete</option>");
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
	$(function() {
	  $("form[name='supplier_information']").validate({
		rules: {
		  check_payment: "required",
		},
		messages: {
		  check_payment: "This field is required",
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