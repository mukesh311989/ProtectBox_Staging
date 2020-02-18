<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Results | ProtectBox
    </title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
     <style>
		.tooltiplink + .tooltip > .tooltip-inner {
			background-color: #73AD21; 
			color: #FFFFFF; 
			border: 1px solid green;
			padding: 15px;
			font-size: 20px;
		}
		.tooltip-inner{
			min-width: 300px; 	
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
      .rounded_div {
        border:1px solid #CCC;
        box-shadow: 0px 0px 3px #bfbfbf;
        border-radius:5px;
      }
      label{
        font-weight:normal !important;
      }
      .preferd
      {
        font-size:18px !important;
      }
      .note
      {
        border-radius:5px;
        text-transform: capitalize;
        color: #eb8b10;
        border:3px solid #EC8B0E;
        padding:10px;
        margin-bottom:20px;
        font-weight:bold;
        font-size:15px;
      }
      .c_names
      {
        margin: 0 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 1.0em;
        font-weight: 600;
        border-bottom: 1px solid #dca7a7;
        color:#010101
      }
      .main_image
      {
        height:40px;
        margin: 0 15px 30px 0;
      }
      .price
      {
        margin: 0 0 15px 0;
        font-weight: 600;
        font-size: 2em;
        color:#010101;
      }
      .details
      {
        margin: 0 0 5px 0;
        font-size: 1.2em;
        color:#010101;
        line-height: 1.4;
      }
      .trust_pilot
      {
        max-width: 150px;
        margin: 5px 0 0 0;
      }
      .what
      {
        min-height: 170px;
      }
      .space
      {
        padding:15px;
        margin-top:15px;
        margin-bottom:15px;
      }
	  .more_info
	  {
			font-weight: 500;font-size: 1em;text-transform: uppercase;cursor: pointer;text-align:center;
	  }
	  .certified
	  {
		box-sizing: border-box;margin-top:70px;background:#f5f5f5;border:1px solid #CCC;border-radius:7px;padding:15px
	  }

	  /* Style the tab */
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
		}
    </style>
	<link rel="stylesheet" href="<?php echo base_url();?>css/rangeslider.css">
  </head>
  <body>
    <div class="layer">
    </div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;z-index:1">
          Results
        </div>
      </div>
    </section>
    <!-- End section -->
    <div class="col-md-12" style="padding:20px;background:#e6e7e9;">
      <div class="container">
	   <form method="GET" action="<?php echo base_url('results');?>">
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" style="">Suppliers</label>
            <div class="col-md-12">
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" multiple="multiple" name="suppliers[]" data-dropup-auto="false">
                <?php
				    if(is_array($results_data) && count($results_data) > 0){
					foreach($results_data AS $result){
						if(count($this->input->get('suppliers')) > 0){
						$preferred_suppliers = $this->input->get('suppliers');
                ?>
						<option value="<?php echo $result->user_id;?>" <?php echo (in_array("$result->user_id",$preferred_suppliers)?'selected':'')?> ><?php echo ucfirst($result->supplier_name);?></option>
                <?php
						}else{
                ?>
                  <option value="<?php echo $result->user_id;?>"><?php echo ucfirst($result->supplier_name);?></option>
                <?php
						}
					  }
					}
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Solutions</label>
            <div class="col-md-12">
            	<?php
            	/* Fetching currency from location starts */
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
					//$currencyCode = $result['currencyCode'];
					$currencyCode = 'GBP';
			   /* Fetching currency from location Ends */
			  ?>
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" multiple="multiple" name="solution[]" data-dropup-auto="false">
                <?php
					if(is_array($results_data) && count($results_data) > 0){
					foreach($results_data AS $result){
					  $fresh_cat = array();
					  $get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level,$currencyCode);
					  foreach($get_all_service_names AS $all_services){
						  if($top_filter_category != ''){
							foreach($top_filter_category AS $key=> $top_filter_each_category){
							  if(isset($all_services->product_category, $top_filter_category)){
									$fresh_cat[] = $all_services->product_category;
								}
							}
						}else{
						  foreach($sorting_data As $key=>$cat_score){
							  if(array_key_exists($all_services->product_category, $sorting_data)){
								  $fresh_cat[] = $all_services->product_category;
							  }
						  }
					  }
					}
				foreach(array_unique($fresh_cat) as $combined_category){
					if(count($this->input->get('solution')) > 0){
					$included_solution = $this->input->get('solution');
                ?>
				          <option value="<?php echo $combined_category;?>" <?php echo (in_array("$combined_category",$included_solution)?'selected':'')?>><?php echo ucfirst($combined_category);?></option>
                <?php
						}else{
                ?>
						  <option value="<?php echo $combined_category;?>"><?php echo ucfirst($combined_category);?></option>
                <?php
					  }
					 }
					}
				  }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Price
            </label>
            <div class="col-md-12">
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" name="price_range" data-dropup-auto="false">
                <option value="" selected="" disabled="">Nothing selected</option>
                <?php
                  if($price_range != ''){
                ?>
      					<option value="0-500" <?php echo (($price_range == "0-500")?'selected':'')?>>0 - 500</option>
      					<option value="500-1000" <?php echo (($price_range == "500-1000")?'selected':'')?>>500 - 1,000</option>
      					<option value="1000-5000" <?php echo (($price_range == "1000-5000")?'selected':'')?>>1,000 - 5,000</option>
      					<option value="5000-10000" <?php echo (($price_range == "5000-10000")?'selected':'')?>>5,000 - 10,000</option>
      					<option value="10000+" <?php echo (($price_range == "10000+")?'selected':'')?>>10,000 +</option>
                <?php
                  }else{
                ?>
						<option value="0-500">0 - 500</option>
						<option value="500-1000">500 - 1,000</option>
						<option value="1000-5000">1,000 - 5,000</option>
						<option value="5000-10000">5,000 - 10,000</option>
						<option value="10000+">10,000 +</option>
                <?php
                  }
                ?>
              </select>

            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
          <button name="update_results" value="update_result" type="submit" name="update" class="btn_1 medium pull-right" style="width:100%;margin-top:25px;">Update Results</button>
        </div>
		</form>
      </div>
    </div>
    <main>    
    <div class="container " style="margin-top:120px;">
      <div class="row">
        <div class="col-md-4">
		  <div class="box_style_1 hidden-xs rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 10px;width: 360px;">
			<div class="row">
				<form id="myform" action="<?php echo base_url('results');?>" method="POST">
				<div class="col-md-12">
					<h6 style="color:#73859B;">Budget(Total in )&nbsp;&nbsp;<span class="budget"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_budget']) && $this->session->userdata['results']['session_budget'] == ''){
					?>
						<input type="range" name="budget"  id="myRange" data-rangeslider  value="<?php echo $smb_budget;?>" min="<?php echo $min_budget;?>" max="<?php echo $max_budget;?>" onchange="this.form.submit()"> 
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_budget'];?>" name="budget" min="<?php echo $min_budget?>" max="<?php echo $max_budget?>" id="myRange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<h4 style="color:#73859B;">Technical</h4>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Antivirus&nbsp;<a data-container="body" title="Software designed to detect and destroy computer viruses." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="antivirus"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_antivirus']) && $this->session->userdata['results']['session_antivirus'] == ''){
					?>
						<input type="range" value="<?php echo $smb_antivirus;?>" name="antivirus" min="<?php echo $min_antivirus?>" max="<?php echo $max_antivirus?>" id="antirange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_antivirus'];?>" name="antivirus" min="<?php echo $min_antivirus?>" max="<?php echo $max_antivirus?>" id="antirange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Operating System&nbsp;<a data-container="body" title="Windows, Mac, Linux etc." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="os"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_opt_system']) && $this->session->userdata['results']['session_opt_system'] == ''){
					?>
						<input type="range" value="<?php echo $smb_os;?>" min="<?php echo $min_os;?>" max="<?php echo $max_os;?>" name="opt_system" id="osange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_opt_system'];?>" name="opt_system" min="<?php echo $min_os?>" max="<?php echo $max_os?>" id="osange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Firewall&nbsp;<a data-container="body" title="Monitors and controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="firewall"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_firewall']) && $this->session->userdata['results']['session_firewall'] == ''){
					?>
						<input type="range" value="<?php echo $smb_firewall;?>" min="<?php echo $min_firewall;?>" max="<?php echo $max_firewall;?>" name="firewall" id="firerange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_firewall'];?>" name="firewall" min="<?php echo $min_firewall?>" max="<?php echo $max_firewall?>" id="firerange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Internet&nbsp;<a data-container="body" title="WiFi/LAN, spam filtering and ad-blocking. A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area. Spam filtering detects unwanted and unsolicited emails and stops from arriving. Ad blocking prevents advertisements from appearing on a webpage. " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="internet"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_internet']) && $this->session->userdata['results']['session_internet'] == ''){
					?>
						<input type="range" value="<?php echo $smb_internet;?>" min="<?php echo $min_internet;?>" max="<?php echo $max_internet;?>"  name="internet" id="internetrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_internet'];?>" name="internet" min="<?php echo $min_internet?>" max="<?php echo $max_internet?>" id="internetrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Access control&nbsp;<a data-container="body" title="Data encryption (need secret key to decrypt data to read it), Tiered user access (administrator, editor), Two factor authentication, Updating software, Activity Logs and Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="access"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_access_control']) && $this->session->userdata['results']['session_access_control'] == ''){
					?>
						<input type="range" value="<?php echo $smb_access_control;?>" min="<?php echo $min_access_control;?>" max="<?php echo $max_access_control;?>" name="access_control" id="accessrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_access_control'];?>" name="access_control" min="<?php echo $min_access_control?>" max="<?php echo $max_access_control?>" id="accessrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Data&nbsp;<a data-container="body" title="Email security keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise. Plus enhanced data encryption or public key infrastructure (PKI) that manages digital signatures or wi-fi certificates for processes such as e-commerce, internet banking and confidential information amongst others." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="protect"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_data_protection']) && $this->session->userdata['results']['session_data_protection'] == ''){
					?>
						<input type="range" value="<?php echo $smb_data;?>" min="<?php echo $min_data;?>" max="<?php echo $max_data;?>" id="protectrange" name="data_protection" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_data_protection'];?>" name="data_protection" min="<?php echo $min_data?>" max="<?php echo $max_data?>" id="protectrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h6 style="color:#73859B;">Managed Service Solution Provider&nbsp;<a data-container="body" title=" Company that remotely manages their customer’s IT infrastructure and systems, as an all-in-one service." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="servicezzz"></span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_managed_service']) && $this->session->userdata['results']['session_managed_service'] == ''){
					?>
						<input type="range" value="<?php echo $smb_mssp;?>" min="<?php echo $min_mssp;?>" max="<?php echo $max_mssp;?>" id="serviceRange" name="managed_service" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_managed_service'];?>" name="managed_service" min="<?php echo $min_mssp?>" max="<?php echo $max_mssp?>" id="serviceRange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Business continuity&nbsp;<a data-container="body" title="Management plan to continue doing business in case of attack " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="business"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_business_continuity']) && $this->session->userdata['results']['session_business_continuity'] == ''){
					?>
						<input type="range" value="<?php echo $smb_bu_continue;?>" min="<?php echo $min_bu_continue;?>" max="<?php echo $max_bu_continue;?>" name="business_continuity" id="businessrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_business_continuity'];?>" name="business_continuity" min="<?php echo $min_bu_continue?>" max="<?php echo $max_bu_continue?>" id="businessrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Password policy&nbsp;&nbsp;<span class="password"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_password_policy']) && $this->session->userdata['results']['session_password_policy'] == ''){
					?>
						<input type="range" value="<?php echo $smb_pass_policy;?>" min="<?php echo $min_pass_policy;?>" max="<?php echo $max_pass_policy;?>" id="passwordrange" name="password_policy" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_password_policy'];?>" name="password_policy" min="<?php echo $min_pass_policy?>" max="<?php echo $max_pass_policy?>" id="passwordrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Accreditation regulation&nbsp; <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="accreditation"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_accreditation_regulation']) && $this->session->userdata['results']['session_accreditation_regulation'] == ''){
					?>
						<input type="range" value="<?php echo $smb_accreditation;?>" min="<?php echo $min_accreditation;?>" max="<?php echo $max_accreditation;?>" id="accreditationrange" name="accreditation_regulation" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_accreditation_regulation'];?>" name="accreditation_regulation" min="<?php echo $min_accreditation?>" max="<?php echo $max_accreditation?>" id="accreditationrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Devices&nbsp;<a data-container="body" title="Device management solutions  that keep mobiles, laptops, tablets or combinations of these devices, safe." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="devices"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_device']) && $this->session->userdata['results']['session_device'] == ''){
					?>
						<input type="range" value="<?php echo $smb_devices;?>" min="<?php echo $min_devices;?>" max="<?php echo $max_devices;?>" id="devicesrange" name="device" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_device'];?>" name="device" min="<?php echo $min_devices?>" max="<?php echo $max_devices?>" id="devicesrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Training&nbsp;<a data-container="body" title="Cybersecurity and Physical security training for your management and staff." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="training"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_training']) && $this->session->userdata['results']['session_training'] == ''){
					?>
						<input type="range" value="<?php echo $smb_training;?>" min="<?php echo $min_training;?>" max="<?php echo $max_training;?>" name="training" id="trainingrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_training'];?>" name="training" min="<?php echo $min_training?>" max="<?php echo $max_training?>" id="trainingrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Remote working&nbsp;<a data-container="body" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="remote"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_remote_working']) && $this->session->userdata['results']['session_remote_working'] == ''){
					?>
						<input type="range" value="<?php echo $smb_remote_working;?>" min="<?php echo $min_remote_working;?>" max="<?php echo $max_remote_working;?>" id="remoterange" name="remote_working" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_remote_working'];?>" name="remote_working" min="<?php echo $min_remote_working?>" max="<?php echo $max_remote_working?>" id="remoterange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h6 style="color:#73859B;">Reputation manage&nbsp;<a data-container="body" title="Cybersecurity Insurance, Cyber Security Information Sharing Partnership (CiSP), Threat Detection / Prevention and Data Storage." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="reputation"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_reputation_manage']) && $this->session->userdata['results']['session_reputation_manage'] == ''){
					?>
						<input type="range" value="<?php echo $smb_reputation_manage;?>" min="<?php echo $min_reputation_manage;?>" max="<?php echo $max_reputation_manage;?>" id="reputationrange" name="reputation_manage" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_reputation_manage'];?>" name="reputation_manage" min="<?php echo $min_reputation_manage?>" max="<?php echo $max_reputation_manage?>" id="reputationrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
				<div class="col-md-6">
					<h6 style="color:#73859B;">Consultancy&nbsp;<a data-container="body" title="Teams or individuals that can help with design and/or implementation of technology, people and processes. ProtectBox can find those to help you implement your chosen solutions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;<span class="consultancy"><span></h6>
					<?php
						if(isset($this->session->userdata['results']['session_consultancy']) && $this->session->userdata['results']['session_consultancy'] == ''){
					?>
						<input type="range" value="<?php echo $smb_consultancy;?>" min="<?php echo $min_consultancy;?>" max="<?php echo $max_consultancy;?>" id="consultancyrange" name="consultancy" data-rangeslider onchange="this.form.submit()">
					<?php
						}else{
					?>
						<input type="range" value="<?php echo $this->session->userdata['results']['session_consultancy'];?>" name="consultancy" min="<?php echo $min_consultancy?>" max="<?php echo $max_consultancy?>" id="consultancyrange" data-rangeslider onchange="this.form.submit()">
					<?php
						}
					?>
				</div>
			</div>
			</form>
		   </div>               
		 </div>
          <div class="col-md-8">
            <div class="col-md-12 note" style="" href="javascript:void(0);">
              Click on logos to find out more information about that product.
            </div>
			
<!----------------------------------- first bound ------------------------------------------>
		<?php 
		/*print_r($this->session->userdata['results']);*/
		  if(is_array($results_data) && count($results_data) > 0){
		  $max= 0; $min = 0;
		  $top_filter_category = $this->input->get('solution');
		  foreach($results_data AS $result){
		    $fresh_cat = array();
          $get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level,$currencyCode);
          foreach($get_all_service_names AS $all_services){
            if($top_filter_category != ''){
                foreach($top_filter_category AS $key=> $top_filter_each_category){
                  if(isset($all_services->product_category, $top_filter_category)){
                        $fresh_cat[] = $all_services->product_category;
                    }
                }
            }else{
              foreach($sorting_data As $key=>$cat_score){
                  if(array_key_exists($all_services->product_category, $sorting_data)){
                      $fresh_cat[] = $all_services->product_category;
                  }
              }
            }
          }
          /*print_r($fresh_cat);*/
         
		  //print_r($fresh_cat);
          foreach(array_unique($fresh_cat) as $combined_category){
			if(in_array("", $this->session->userdata['results'])){
				$servicesz = $this->results_m->fetch_results_smb_services($combined_category,$result->user_id,$max_budget,$max_antivirus,$max_os,$max_firewall,$max_internet,$max_access_control,$max_data,$max_mssp,$max_bu_continue,$max_pass_policy,$max_accreditation,$max_devices,$max_training,$max_remote_working,$max_reputation_manage,$max_consultancy,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
			}else{
				$sessionzz = $this->session->userdata['results'];
				$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id,$sessionzz,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
			}
            /*$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id);*/
            $p_array = array();
            foreach($servicesz as $product_price){
              $p_array[] = $product_price->price_detail;
            }
            $total_price = array_sum($p_array);
             if(count($servicesz) == 0){
                $mean_price = 0;
            }else{
                $mean_price = $total_price/count($servicesz);
            }
            $price_array_bundle = array();
            $commission_price_bundle = array();
            $total_commision_price_bundle = array();
            foreach($servicesz as $logos){
            /*if($logos->price_detail <= $mean_price){*/
              if($logos->payment_option == "Monthly"){
                $price_array_bundle[] = ($logos->price_detail * 12);
                $commission_price_bundle[] = ($logos->price_detail * 12)*($logos->commission_detail/100);
              }
              else if($logos->payment_option == "Yearly"){
                $price_array_bundle[] = ($logos->price_detail * 1);
                $commission_price_bundle[] = ($logos->price_detail * 1)*($logos->commission_detail/100);
              }
              else if($logos->payment_option == "Quarterly"){
                $price_array_bundle[] = ($logos->price_detail * 4);
                $commission_price_bundle[] = ($logos->price_detail * 4)*($logos->commission_detail/100);
              }
            }
          }
            $total_price_bundle = array_sum($price_array_bundle);
            $total_commision_price_bundle = array_sum($commission_price_bundle);
            $total_payable_bundle = $total_commision_price_bundle + $total_price_bundle;

           

            if(count($this->input->get('price_range')) > 0){
              $check_price_range = $this->input->get('price_range');
              $array_price_range = str_replace("-",",",$check_price_range); 
      			  $explode = explode(",",$array_price_range);
      			  $max = max($explode);
      			  $min = min($explode);
            }else{
              /*$array_price_range = '';*/
					$max = 999999999999999999999;
					$min = 0;
            }
			if($total_payable_bundle >= $min && $total_payable_bundle < $max){
			if($result->status != '0'){
		?>
      <div class="col-md-12 rounded_div space">	
	  				
			 <div class="col-md-12">
			  <?php
				$fresh_cat = array();
				$top_filter_category = $this->input->get('solution');
				$get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level,$currencyCode);
				//print_r($get_all_service_names);
				foreach($get_all_service_names AS $all_services){
					if($top_filter_category != ''){
						foreach($top_filter_category AS $key=> $top_filter_each_category){
						  if(isset($all_services->product_category, $top_filter_category)){
							  if(isset($all_services->product_category, $sorting_data)){
								$fresh_cat[] = $all_services->product_category;
							  }
							}
						}
					}else{
					  foreach($sorting_data As $key=>$cat_score){
						  if(array_key_exists($all_services->product_category, $sorting_data)){
							  $fresh_cat[] = $all_services->product_category;
						  }
					  }
					}
				}
				foreach(array_unique($fresh_cat) as $combined_category){
					
					if(in_array("", $this->session->userdata['results'])){
						$servicesz = $this->results_m->fetch_results_smb_services($combined_category,$result->user_id,$max_budget,$max_antivirus,$max_os,$max_firewall,$max_internet,$max_access_control,$max_data,$max_mssp,$max_bu_continue,$max_pass_policy,$max_accreditation,$max_devices,$max_training,$max_remote_working,$max_reputation_manage,$max_consultancy,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
					}else{
						$sessionzz = $this->session->userdata['results'];
						$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id,$sessionzz,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
					}
					  /*$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id);*/
					  $p_array = array();
					  foreach($servicesz as $product_price){
							$p_array[] = $product_price->price_detail;
					  }
					  $total_price = array_sum($p_array);
					   if(count($servicesz) == 0){
						 $mean_price = 0;
					  }else{
						  $mean_price = $total_price/count($servicesz);
					  }
					  foreach($servicesz as $logos){
						/*if($logos->price_detail <= $mean_price){*/
						  if($logos->payment_option == "Monthly"){
								$price_array[] = ($logos->price_detail * 12);
								$commission_price[] = ($logos->price_detail * 12)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Yearly"){
								$price_array[] = ($logos->price_detail * 1);
								$commission_price[] = ($logos->price_detail * 1)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Quarterly"){
								$price_array[] = ($logos->price_detail * 4);
								$commission_price[] = ($logos->price_detail * 4)*($logos->commission_detail/100);
							}
						}
					}
						$total_price = array_sum($price_array);
						$total_commision_price = array_sum($commission_price);
						$total_payable_bundle_cost = $total_commision_price + $total_price;

						$total_categories = count(array_unique($fresh_cat));
						if($total_categories%$total_categories == 0){
			  ?>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div style="font-size:1.6em !important" class="price"><?php echo $result->currency?>&nbsp;<?php echo $total_payable_bundle_cost;?>/year</div>
							<div class="details">
							  <input type="range" value="<?php echo $total_payable_bundle_cost;?>" name="" min="0" max="<?php echo $total_payable_bundle_cost;?>" data-rangeslider disabled>
							</div>
							<div class="details" style="text-align:center;">
							  <a href="<?php echo base_url();?>terms" target="_blank" class="btn" style="background:#ccc;color:#000;padding:10px;">Terms & Conditions</a>
							</div>
						</div>
						<div class="col-md-5"style="margin-top:5px;">
							<a href="<?php echo base_url('payment_process');?>/<?php echo $result->supplier_service_id;?>" class="btn_1 medium pull-right" style="padding:15px;">Buy Now</a>
						</div>
					</div>
				 </div>
			  <?php
					}	  
			  ?>
			  <?php
				foreach(array_unique($fresh_cat) as $combined_category){
			  ?>
                <div class="col-md-6 what" >
				 <div class="row">
				 	<div class="col-md-6">
					  <div class="c_names" style="border-bottom:none !important;">
							<?php echo $combined_category;?>&nbsp;<span>(<?php echo $sorting_data[$combined_category];?>)</span>
							<input type="range" value="<?php echo $sorting_data[$combined_category];?>" name="" min="0" max="<?php echo $max_sorting_data[$combined_category];?>" data-rangeslider disabled>
					  </div>
					</div>
				    
					<?php
					/*print_r($left_sidebar);*/
					if(in_array("", $this->session->userdata['results'])){
						$servicesz = $this->results_m->fetch_results_smb_services($combined_category,$result->user_id,$max_budget,$max_antivirus,$max_os,$max_firewall,$max_internet,$max_access_control,$max_data,$max_mssp,$max_bu_continue,$max_pass_policy,$max_accreditation,$max_devices,$max_training,$max_remote_working,$max_reputation_manage,$max_consultancy,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
					}else{
						$sessionzz = $this->session->userdata['results'];
						$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id,$sessionzz,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
   				    }
					  /*$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id);*/
					  foreach($servicesz as $logos){
					  $price_array = array();
					  $commission_price = array();
					  $total_commission_price = array();
				  ?>
					<div class="col-md-3">
					 <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal_<?php echo $logos->supplier_service_id;?>"><img src="<?php echo base_url();?>uploads/<?php echo $logos->logo;?>" class="main_image" style="height:20px;"></a>
					<!-- MODAL Starts-->
						<div class="modal fade" id="myModal_<?php echo $logos->supplier_service_id;?>" role="dialog">
						<div class="modal-dialog" style="width:1230px !important;">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Microsoft Excel 2016 - Licence - 1 PC - academic - OLP: Academic - Level B- Win-Single Language</h4>
							  
							  <div class="col-md-12" style="margin-top:40px;">
								<div class="row">
								  <div class="col-md-8">
										<div class="row">
											<div class="col-md-6 ">
												<div class="c_names">Manufacturer</div>
												<h5>Microsoft</h5>
											</div>
											<div class="col-md-6 ">
												<div class="c_names">Category</div>
												<h5>Software - Applications</h5>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 ">
												<div class="c_names">Mfg Part Number</div>
												<h5>065-08556</h5>
											</div>
											<div class="col-md-6">
												<div class="c_names">Product Type (Virtual)</div>
												<h5>Software - Applications</h5>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 ">
												<div class="c_names">Currency</div>
												<h5 style="font-weight:bold;">(Nick API’s ‘Currency’)</h5>
											</div>
										</div>
									</div>
									<div class="col-md-4" style="text-align:center;margin-top:22px;">
										<img src="<?php echo base_url();?>images/microsoft_open_license.png" alt style="height:100px;">
									</div>
								  </div>
								</div>		 
							</div>
							<div class="modal-body">

								<div class="tab">
								  <button class="tablinks active" onclick="openCity(event, 'Main Specs_<?php echo $logos->supplier_service_id;?>')">Main Specs</button>
								  <button class="tablinks" onclick="openCity(event, 'Extended Specs_<?php echo $logos->supplier_service_id;?>')">Extended Specs</button>
								  <button class="tablinks" onclick="openCity(event, 'Marketing Description_<?php echo $logos->supplier_service_id;?>')">Marketing Description</button>
								  <button class="tablinks" onclick="openCity(event, 'Features_<?php echo $logos->supplier_service_id;?>')">Features</button>
								  <button class="tablinks" onclick="openCity(event, 'Multiple Images_<?php echo $logos->supplier_service_id;?>')">Multiple Images</button>
								  <button class="tablinks" onclick="openCity(event, 'Logo_<?php echo $logos->supplier_service_id;?>')">Logo</button>
								  <button class="tablinks" onclick="openCity(event, 'Attributes_<?php echo $logos->supplier_service_id;?>')">Attributes</button>
								  <button class="tablinks" onclick="openCity(event, 'Ratings_<?php echo $logos->supplier_service_id;?>')">Ratings</button>
								</div>
								
								<!-- Main Specs Starts -->
								<div id="Main Specs_<?php echo $logos->supplier_service_id;?>" class="tabcontent" style="display: block;">
								  <h3>Main Specifications</h3>
								  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Product Description</div>
										<div class="col-md-8">Microsoft Excel 2016 -Licence 1 PC</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Product Type</div>
										<div class="col-md-8">Licence</div>
								  </div>
								  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Category</div>
										<div class="col-md-8">Office applications - office applications - spreadsheet</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Licence Qty</div>
										<div class="col-md-8">1 PC</div>
								  </div>
								  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
										<div class="col-md-4">Licence Pricing</div>
										<div class="col-md-8">Academic, volume/Level B</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Licensing Program</div>
										<div class="col-md-8">Microsoft Open Licence for Academic</div>
								  </div>
								  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Platform</div>
										<div class="col-md-8">Windows</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Language</div>
										<div class="col-md-8">Single Language</div>
								  </div>
								</div>
								<!-- Main Specs Ends -->

								<!-- Extended Specs Starts -->
								<div id="Extended Specs_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								   <h3>Extended Specifications</h3>
								  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
										<div class="col-md-12">General</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Category</div>
										<div class="col-md-8">Office Application - spreadsheet</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
										<div class="col-md-4">Product Type</div>
										<div class="col-md-8">Licence</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
										<div class="col-md-4">Platform</div>
										<div class="col-md-8">Windows</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;border-bottom:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Language</div>
										<div class="col-md-8">Single Language</div>
								  </div>

								<p>&nbsp;</p>

								<div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
										<div class="col-md-12">Licensing</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Licence Type</div>
										<div class="col-md-8">1 PC</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
										<div class="col-md-4">Licence Pricing</div>
										<div class="col-md-8">Academic, volume / Level B</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;border-bottom:1px solid #ccc;">
										<div class="col-md-4">Licence Program</div>
										<div class="col-md-8">Microsoft Open Licence for Academic</div>
								  </div>

								<p>&nbsp;</p>

								<div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
										<div class="col-md-12">System Requirements</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
										<div class="col-md-4">Supported OS</div>
										<div class="col-md-8">Microsoft Windows Server 2008 R2, Microsoft Windows 7 or later, Microsoft Windows Server 2012</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
										<div class="col-md-4">Hardware Requirements</div>
										<div class="col-md-8">Microsoft Windows (32 bit) - 1GHz- RAM 1 GB, HD 3 GB, Microsoft Windows (64 bit) - 1GHz- RAM 2 GB, HD 3 GB</div>
								  </div>
								  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;margin:0px;border-left:1px solid #ccc;border-bottom:1px solid #ccc;">
										<div class="col-md-4">Additional Requirements</div>
										<div class="col-md-8">Mouse or compatible device, DirectX 10.0 compatible graphics card, 1280 x 800 monitor resolution</div>
								  </div>

								</div>
								<!-- Extended Specs Ends -->

								<!-- Marketing Description Starts -->
								<div id="Marketing Description_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								  <h3>Marketing Description</h3>
								  <p>Powerful charts, graphs, and keyboard shortcut turns columns of numbers into valuable information, so you can work easier. Preview recommended charts and graphs to select the optional way to display your information. Review trends with one-click forecasting. Use the TellMe search bar to ask how to perform actions and get the results you want.</p>
								</div>
								<!-- Marketing Description Ends -->

								<!-- Features Starts -->
								<div id="Features_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								<h3>Key Selling Points</h3>
									<ul>
										<li>Lay out your data</li>
										<li>Reformat and rearrange it</li>
										<li>Do your analysis</li>
										<li>Flow into charts and graphs</li>
										<li>Find your storyline</li>
										<li>Highlight trends and patterns</li>
										<li>Collaborate in real time</li>
									</ul>
								<p>&nbsp;</p>
								<h3>Product Features</h3>
									<ul>
										<li><strong>Lay out your data</strong><br/>
											<span>Organize your numeric or text data in spreadsheet or workbooks. Viewing it in context helps you make more informed decisions.</span>
										</li>
											
										<li><strong>Reformat and rearrange it</strong><br/>
											<span>As you look into different configurations, Excel learns and recognizes your pattern and auto-completes the remaining data for you. No formulas or macros required. The TellMe search feature guides you to the feature commands you need to get the results you are looking for.</span>
										</li>

										<li><strong>Do your analysis</strong><br/>
											<span>Excel will perform complex analyzes for you. And it summarizes your data with previews of pivot-table tools, so you can compare them and select one of them</span>
										</li>
										<li><strong>Flow into charts and graphs</strong><br/>
											<span>Excel can recommended the charts and graphs illustrate your data patterns. Quickly preview your possibilities and pick those that present your insights most clearly.</span>
										</li>
										<li><strong>Find your storyline</strong><br/>
											<span>Discover and compare different ways to represent your data and your intents visually. When you see the one that shows your data in an optimal way, apply formatting sparklines, charts and tables with a single click.</span>
										</li>
										<li><strong>Highlight trends and patterns</strong><br/>
											<span>Make it easy to spot trends and patterns in you data by using bars, colors and icons to visually highlight important values. The one-click forecasting feature in Excel 2016 creates forecasts on your data series with one click to future trends.</span>
										</li>
										<li><strong>Collaborate in real time</strong><br/>
											<span>Once you've saved your spreadsheet to a cloud, you and your team can work together in real-time. As you and your team make edits and changes to yur documents, the improved history in Excel 2016 allows you to view or go back to earlier drafts.</span>
										</li>
									</ul>
								</div>
								<!-- Features Ends -->

								<!-- Multiple Images Starts -->
								<div id="Multiple Images_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								  <h3>Multiple Images</h3>
									<div class="row">
										<div class="col-md-4" style="text-align:center;margin:24px;"><img src="<?php echo base_url();?>images/microsoft_open_license.png" alt style="height:73px;"></div>
										<div class="col-md-4">
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Type</div>
												<div class="col-md-8">Licensing Logo</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Width</div>
												<div class="col-md-8">200</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Height</div>
												<div class="col-md-8">150</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">File Size</div>
												<div class="col-md-8">4149</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Resolution</div>
												<div class="col-md-8">200 X 150</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;border-bottom:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Weight</div>
												<div class="col-md-8">68150</div>
										  </div>
										</div>
									</div>
									<p>&nbsp;</p>
									<div class="row">
										<div class="col-md-4" style="text-align:center;margin:24px;"><img src="<?php echo base_url();?>images/microsoft-excel-618x310.png" alt style="height:73px;"></div>
										<div class="col-md-4">
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Type</div>
												<div class="col-md-8">Software Logo</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Angle</div>
												<div class="col-md-8">Front</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Width</div>
												<div class="col-md-8">200</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Height</div>
												<div class="col-md-8">150</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">File Size</div>
												<div class="col-md-8">5006</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Resolution</div>
												<div class="col-md-8">200 X 150</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;border-bottom:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Weight</div>
												<div class="col-md-8">67800</div>
										  </div>
										</div>
									</div>
								</div>
								<!-- Multiple Images Ends -->

								<!-- Logo Starts -->
								<div id="Logo_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								  <h3>Logo Image</h3>
									 <div class="row">
										<div class="col-md-4" style="text-align:center;margin:4px;"><img src="<?php echo base_url();?>images/microsoft_PNG10.png" alt style="height:52px;"></div>
										<div class="col-md-4">
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Type</div>
												<div class="col-md-8">Brand Logo</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Width</div>
												<div class="col-md-8">400</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Image Height</div>
												<div class="col-md-8">300</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;margin:0px;border-left:1px solid #ccc;">
												<div class="col-md-4" style="background:#ddd;border-right:1px solid #ccc;">Resolution</div>
												<div class="col-md-8">400 x 340</div>
										  </div>
										</div>
									</div>
								</div>
								<!-- Logo Ends -->

								<!-- Attributes Starts -->
								<div id="Attributes_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
								  <h3>Searchable Attributes</h3>
								  <div class="row">
										<div class="col-md-12">
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;background:#ddd;">
												<div class="col-md-3" style="border-right:1px solid #ccc;">Attribute</div>
												<div class="col-md-3" style="border-right:1px solid #ccc;">Value & Unit</div>
												<div class="col-md-2" style="border-right:1px solid #ccc;">Attribute ID</div>
												<div class="col-md-2" style="border-right:1px solid #ccc;">Value ID</div>
												<div class="col-md-1" style="border-right:1px solid #ccc;">Unit ID</div>
												<div class="col-md-1">NNV</div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">General/Category</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">office applications</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00342</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K01536</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">General/Installation Type</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Locally Installed</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A07107</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K524325</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">General/Subcategory</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">office application- spreadsheet</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00343</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K01583</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Brand</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00506</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K364620</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Compatibility</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">PC</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00503</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K81219</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										   <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Localisation (vendor specific)</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Single Language</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A02230</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K72547</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Manufacturer</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00530</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">Z00036</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Model</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">2016</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00501</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">M1864530</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Packaged Quantity</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">1</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00594</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K02103</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Header/Product Line</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Excel</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00500</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">P00185</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Licensing/Licence Pricing</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">academic</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00479</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K02954</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Licensing/Licence Pricing</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">volume</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00479</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K02955</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Licensing/Licence Program</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Open Licence for Academic</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A01191</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K275680</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Licensing/Pricing Level</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Level B</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00541</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K83463</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Software/Licence Category</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Licence</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A03544</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K144706</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Software/Licence Qty</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">1PC</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00481</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K156463</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Software/Licence Type</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">licence</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00478</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K02950</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Software Family/Microsoft Family</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">MS Excel</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A03196</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K96683</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">Software Family/Microsoft Version</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">2016</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A03197</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K672292</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">System Requirements/OS Family</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Windows</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A02299</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K94363</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">System Requirements/OS Required</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Windows Server 2008 R2</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00429</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K179604</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">System Requirements/OS Required</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Windows 7 or later</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00429</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K335850</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										  <div class="row" style="border:1px solid #ccc;border-top:1px solid #ccc;margin:0px;">
												<div class="col-md-3" style="border-right:1px solid #ddd;">System Requirements/OS Required</div>
												<div class="col-md-3" style="border-right:1px solid #ddd;">Microsoft Windows Server 2012</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">A00429</div>
												<div class="col-md-2" style="border-right:1px solid #ddd;">K381219</div>
												<div class="col-md-1" style="border-right:1px solid #ddd;"></div>
												<div class="col-md-1"></div>
										  </div>
										</div>
									</div>
								</div>
								<div id="Ratings_<?php echo $logos->supplier_service_id;?>" class="tabcontent">
									<h3>Ratings and Reviews</h3>
									<div class="row" style="border-bottom:1px solid #ccc;">
										<div class="col-md-12">
											<div class="row" style="margin-bottom:1px solid #ccc;">
												<div class="col-md-1" style="margin-top:14px;">
													<span class="btn btn-success" style="font-size:1.5rem;">5 <i class="fa fa-star"></i></span>
												</div>
												<div class="col-md-8">
													<h3>Best in the market</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<p>Best quality product and easy to use.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="row" style="margin-bottom:1px solid #ccc;">
												<div class="col-md-1" style="margin-top:14px;">
													<span class="btn btn-success" style="font-size:1.5rem;">5 <i class="fa fa-star"></i></span>
												</div>
												<div class="col-md-8">
													<h3>Best in the market</h3>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<p>Best quality product and easy to use.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Attributes Ends -->

							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						</div>
					  </div>
					  <!-- Modal Ends -->
					</div>
				  <?php
					/*}*/
					}
				  ?>
				</div>
			</div>
				<?php
					}
				?>
              </div>
				
            </div>
			<?php
					}
				  }
				}
			}else{
			?>
			<div class="col-md-12 rounded_div space" style="height:300px;"> 
          <div class="col-md-12 text-center c_names">Sorry, no bundle found. Please try again later...</div>
      </div>
      <?php
            }
      ?>

      
<!----------------------------------- first bound -------------------------------------------->
            <!-- End row -->
            <!--  Tabs -->   
          </div>
          <!-- End col-md-12-->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
<!-- Script for Tabs starts-->
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
<!-- Script for Tabs Ends -->

    <script>
  		$(document).ready(function(){
  			$('[data-toggle="tooltip"]').tooltip();   
  		});
  	</script>

	<script src="<?php echo base_url();?>js/rangeslider.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
	

    <script>
    $(function() {

        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);

        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
			var new_val = $('#myRange').val();
            $('span.budget').text(new_val);

			var anti_val = $('#antirange').val();
            $('span.antivirus').text(anti_val);

			var osange = $('#osange').val();
            $('span.os').text(osange);

			var firerange = $('#firerange').val();
            $('span.firewall').text(firerange);

			var internetrange = $('#internetrange').val();
            $('span.internet').text(internetrange);

			var accessrange = $('#accessrange').val();
            $('span.access').text(accessrange);

			var protectrange = $('#protectrange').val();
            $('span.protect').text(protectrange);

			var serviceRange = $('#serviceRange').val();
            $('span.servicezzz').text(serviceRange);

			var businessrange = $('#businessrange').val();
            $('span.business').text(businessrange);

			var passwordrange = $('#passwordrange').val();
            $('span.password').text(passwordrange);

			var accreditationrange = $('#accreditationrange').val();
            $('span.accreditation').text(accreditationrange);

			var devicesrange = $('#devicesrange').val();
            $('span.devices').text(devicesrange);

			var trainingrange = $('#trainingrange').val();
            $('span.training').text(trainingrange);

			var remoterange = $('#remoterange').val();
            $('span.remote').text(remoterange);

			var reputationrange = $('#reputationrange').val();
            $('span.reputation').text(reputationrange);

			var consultancyrange = $('#consultancyrange').val();
            $('span.consultancy').text(consultancyrange);
        }

        $document.on('input', 'input[type="range"], ' + selector, function(e) {
            valueOutput(e.target);
        });

        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
                valueOutput(this.$element[0]);
            },

           
        });

    });


    </script>

    <script type="text/javascript">
      $(document).ready(function() {

        $('.multiselect-ui').multiselect({
          onChange: function(option, checked) {
            // Get selected options.
            var selectedOptions = $('.multiselect-ui option:selected');
            if (selectedOptions.length >= 15) {
              // Disable all other checkboxes.
              var nonSelectedOptions = $('.multiselect-ui option').filter(function() {
                return !$(this).is(':selected');
              }
                                                                         );
              nonSelectedOptions.each(function() {
                var input = $('input[value="' + $(this).val() + '"]');
                input.prop('disabled', true);
                input.parent('li').addClass('disabled');
              }
                                     );
            }
            else {
              // Enable all checkboxes.
              $('.multiselect-ui option').each(function() {
                var input = $('input[value="' + $(this).val() + '"]');
                input.prop('disabled', false);
                input.parent('li').addClass('disabled');
              }
                                              );
            }
          }
        }
                                        );
      }
                       );
    </script>
	
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
