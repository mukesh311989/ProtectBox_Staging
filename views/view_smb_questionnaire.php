<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ProtectBox | View SMB Questionnaire</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
	<style>
	.new_div {
		margin-bottom:20px;
	}
	.rounded_div {
		border:1px solid #CCC;
		box-shadow: 0px 0px 3px #bfbfbf;
		border-radius:5px;
	}
	.other_title
	{
		background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
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
        <div class="main_title other_title" style="">
          View SMB Questionnaire
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div" >
			<h3>Answers</h3>
            <div class="panel with-nav-tabs panel-primary" style="border:none;background:transparent !important;">
                <div class="panel-heading" style="border:none;background:transparent !important;">
                        <ul class="nav nav-tabs">
                            <li class="active" style="width:25%;"><a href="#tab1primary" data-toggle="tab" style="text-align:center;">Basics</a></li>
                            <li style="width:25%;"><a href="#tab2primary" data-toggle="tab" style="text-align:center;">Technical Info</a></li>
                            <li style="width:25%;"><a href="#tab3primary" data-toggle="tab" style="text-align:center;">Non-Technical info</a></li>
							<li style="width:25%;"><a href="#tab4primary" data-toggle="tab" style="text-align:center;">Budget</a></li>
                        </ul>
                </div>
                <div class="panel-body" >
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
						<form name="questionaire" method="POST" action="<?php echo base_url('questionniare_results/update_basics');?>">
						  <div class="form_title">
						<h3>
						  <strong><i class="icon-industrial-building"></i></strong> Industry
						</h3>
					  </div>
							<div class="step">
							   <div class="row">
							  <div class="col-md-5 col-sm-5">
								<div class="form-group">
									  <label><b>1a</b> What industry are you in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									  <!-- <a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> -->
								 </div>
							  </div>
							  <div class="col-md-7 col-sm-7">
								<div class="form-group" style="margin-top: 8px;">
								  <label>: <?php echo (($get_basic_answars->industry_input != '')?$get_basic_answars->industry_input:'Not yet answered');?></label>
								</div>
							  </div>
							</div>

							<div class="row">
							  <div class="col-md-5 col-sm-5">
								<div class="form-group">
								  <label><b>1b</b> How many employees do you have?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> </label>
								  <!-- <a data-container="body" title="Please select 1 of the 3 categories for the number of current employees in your company" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> -->
							
								 </div>
							  </div>
							  <div class="col-md-7 col-sm-7">
								<div class="form-group" style="margin-top: 8px;">
								  <label>: <?php echo (($get_basic_answars->employees_input != '')?$get_basic_answars->employees_input:'Not yet answered');?></label>
								</div>
							  </div>
							</div>
						  </div>
						    <div class="form_title">
						<h3>
						  <strong><i class="icon-location-6"></i></strong> Location&nbsp;
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>2</b> Where are you located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <!-- <a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in."><i class="icon-info-circled-3"></i></a> -->
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_basic_answars->location_input != '')?$get_basic_answars->location_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
					 </div>
					 <div class="form_title">
						<h3>
							<strong><i class="icon-users"></i></strong> Supply Chain
						</h3>
					</div>
					 <div class="step">
					  <div class="row">
					  <div class="col-md-5 col-sm-5">
						<div class="form-group">
						  <label><b>3</b> Do you handle or manage personal or financial data or information for others <br/>(e.g. your supply chain or customers)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Let us know if you also handle or manage personal or financial data or information for 3rd parties as this has legal implications for you."><i class="icon-info-circled-3"></i></a> -->
				
						 </div>
					  </div>
					  <div class="col-md-7 col-sm-7">
						<div class="form-group">
						  <label>: <?php echo (($get_basic_answars->handle_data_input != '' && $get_basic_answars->handle_data_input == '1')?'yes':(($get_basic_answars->handle_data_input != '' && $get_basic_answars->handle_data_input == '0')?'No':'Not yet answered'));?></label>
						</div>
					  </div>
					  
					</div>
					<div class="row">
					<div class="row">
						<div class="col-md-12">
							<table class="table">
							 <thead>
							   <tr>
							  <th></th>
							  <th>You are supplier to?</th>
							  <th>Your customer?</th>
							   </tr>
							 </thead>
							 <tbody>
							   <tr>
							  <td>Individuals</td>
							  <td><input  type="radio" name="budget_individual" value="supplier" <?php echo ((isset($get_basic_answars->individuals_input) && $get_basic_answars->individuals_input == "supplier")?'checked':'');?> disabled></td>
							  <td><input  type="radio" name="budget_individual" value="customer" <?php echo ((isset($get_basic_answars->individuals_input) && $get_basic_answars->individuals_input == "customer")?'checked':'');?> disabled></td>
							   </tr>
							   <tr>
							  <td>Small and medium businesses</td>
							  <td><input  type="radio" name="sme" value="supplier" <?php echo ((isset($get_basic_answars->get_basic_answars) && $get_basic_answars->sme_business_input == "supplier")?'checked':'');?> disabled></td>
							  <td><input  type="radio" name="sme" value="customer" <?php echo ((isset($get_basic_answars->get_basic_answars) && $get_basic_answars->sme_business_input == "customer")?'checked':'');?> disabled></td>
							   </tr>
							   <tr>
							  <td>Enterprise</td>
							  <td><input  type="radio" name="enterprise" value="supplier" <?php echo ((isset($get_basic_answars->enterprise_input) && $get_basic_answars->enterprise_input == "supplier")?'checked':'');?> disabled></td>
							  <td><input  type="radio" name="enterprise" value="customer" <?php echo ((isset($get_basic_answars->enterprise_input) && $get_basic_answars->enterprise_input == "customer")?'checked':'');?> disabled></td>
							   </tr>
							   <tr>
							  <td>Governments</td>
							  <td><input  type="radio" name="governments" value="supplier" <?php echo ((isset($get_basic_answars->governments_input) && $get_basic_answars->governments_input == "supplier")?'checked':'');?> disabled></td>
							  <td><input  type="radio" name="governments" value="customer" <?php echo ((isset($get_basic_answars->governments_input) && $get_basic_answars->governments_input == "customer")?'checked':'');?> disabled></td>
							   </tr>
							 </tbody>
							</table>
						 </div><!-- End col-md-12-->
					   </div>
					</div>
				  </div>
				  </form>
				</div>
                        <div class="tab-pane fade" id="tab2primary">
							<form method="POST" name="questionaire_tech_info" action="<?php echo base_url('questionniare_results/update_tech');?>">
								<div class="form_title">
								<h3>
								  <strong><i class=" icon-desktop-3"></i></strong> Operating System
								</h3>
							  </div>
							   <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>4</b> What Operating System do you use?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us the primary operating system used in your company."><i class="icon-info-circled-3"></i></a> -->
							
							</label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						<div class="form-group" style="margin-top: 8px;">
						  <label>: <?php echo (($get_tech_answars->os_input != '')?$get_tech_answars->os_input:'Not yet answered');?></label>
						</div>
					  </div>
						</div>
					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-block-2"></i></strong> Antivirus
						</h3>
					  </div>
					  	  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>5</b> Do you have an antivirus product installed?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines."><i class="icon-info-circled-3"></i></a> -->
							  </label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->antivirus_input != '' && $get_tech_answars->antivirus_input == '1')?'yes':(($get_tech_answars->antivirus_input != '' && $get_tech_answars->antivirus_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						  </div>
					  </div>
					   <div class="form_title">
						<h3>
						  <strong><i class="icon-globe-2"></i></strong> Firewall
						</h3>
					  </div>
					  	 <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>6</b> Do you have more than basic system firewall?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Firewall monitors &amp; controls incoming &amp; outgoing network traffic based on predetermined security rules. It protects from unauthorised access."><i class="icon-info-circled-3"></i></a> -->
							
							  </label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->firewall_input != '' && $get_tech_answars->firewall_input == '1')?'yes':(($get_tech_answars->firewall_input != '' && $get_tech_answars->firewall_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
					</div>
					<div class="form_title">
					<h3>
					  <strong><i class="icon-globe-2"></i></strong> IT Management
					</h3>
				  </div>
				  	  <div class="step">
					<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>7</b> Who manages your IT?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely.You may want to add them as a delegate user to answer some of these questions for you"><i class="icon-info-circled-3"></i></a> -->
							  </label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->manage_it_input != '')?$get_tech_answars->manage_it_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						
				  </div>
				  	<div class="form_title">
						<h3>
						  <strong><i class="icon-network"></i></strong> Internet
						</h3>
					  </div>
					    <div class="step">
					  		 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>8a</b> Do you have internet?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if your network is connected to the internet."><i class="icon-info-circled-3"></i></a> -->
							
							  </label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->internet_input != '' && $get_tech_answars->internet_input == '1')?'yes':(($get_tech_answars->internet_input != '' && $get_tech_answars->internet_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_wifi_lan">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class=""><b>8b</b> Do you have WiFi or LAN?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> -->
							
							  </label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->internet_option_input != '' && $get_tech_answars->internet_option_input == '1')?'yes':(($get_tech_answars->internet_option_input != '' && $get_tech_answars->internet_option_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_public_wifi">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8c</b> Is your wifi open to the public<!-- ?<a data-container="body" class="tooltiplink" title="Please tell us if you allow non-employees access to the network." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->wpa2_input != '' && $get_tech_answars->wpa2_input == '1')?'yes':(($get_tech_answars->wpa2_input != '' && $get_tech_answars->wpa2_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>

						<div class="row" id="internet_wpa2">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8d</b> Do you have WPA2 (Wi-Fi Protected Access 2) enabled?<!-- <a data-container="body" class="tooltiplink" title="WPA2 (Wi-Fi Protected Access 2) is a network security technology commonly used on Wi-Fi wireless networks. It's an upgrade from the original WPA technology, which was designed as a replacement for the older and much less secure  Wired Equivalent Privacy (WEP) . Please tell us if you have this enabled." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->wpa2_input != '' && $get_tech_answars->wpa2_input == '1')?'yes':(($get_tech_answars->wpa2_input != '' && $get_tech_answars->wpa2_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="browser_use">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8e</b> What browser(s) do you use?<!-- <a data-container="body" class="tooltiplink" title="Please select if you use Internet Explorer, Firefox, Chrome or another browser e.g..Opera" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->browser_input != '')?$get_tech_answars->browser_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="hiddenBrowser">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please Specifty The Bowser Name?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->browser_name_input != '')?$get_tech_answars->browser_name_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_browser_update">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8f</b> Do you or your systems administrator update your browser with the latest patches?<!-- <a data-container="body" class="tooltiplink" title="Please tell us if you update your browsers" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->update_browser_input != '' && $get_tech_answars->update_browser_input == '1')?'yes':(($get_tech_answars->update_browser_input != '' && $get_tech_answars->update_browser_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_email">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8g</b> Do you use email to communicate outside the business ?<!-- <a data-container="body" class="tooltiplink" title="Please tell us if you use email to contact others outside the business." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->email_input != '' && $get_tech_answars->email_input == '1')?'yes':(($get_tech_answars->email_input != '' && $get_tech_answars->email_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_spam">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8h</b> Do you have spam filtering?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="Spam filtering is a program used to detect unsolicited and unwanted email and prevent those messages from getting to a user's inbox. Like other types of filtering programs, a spam filter looks for certain criteria on which it bases judgments." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->spam_filtering_input != '' && $get_tech_answars->spam_filtering_input == '1')?'yes':(($get_tech_answars->spam_filtering_input != '' && $get_tech_answars->spam_filtering_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_ad_block">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8i</b> Do you integrate ad blocking software on your systems?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you use ad blockers which prevents advertisements from appearing on a webpage."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->ad_blocking_input != '' && $get_tech_answars->ad_blocking_input == '1')?'yes':(($get_tech_answars->ad_blocking_input != '' && $get_tech_answars->ad_blocking_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_web_host">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8j</b> Do you have Web hosting on your network? <!-- <a data-container="body" class="tooltiplink" title="Web hosting is the activity or business of providing storage space and access for websites." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->web_hosting_input != '' && $get_tech_answars->web_hosting_input == '1')?'yes':(($get_tech_answars->web_hosting_input != '' && $get_tech_answars->web_hosting_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="internet_inhouse_remote">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8k</b> Do you have web hosting in house or remote?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Are your webservers accessible by external third parties  via the internet?"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->web_hosting_option_input != '')?$get_tech_answars->web_hosting_option_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
					  </div>
					   <div class="form_title">
						<h3>
						  <strong><i class="icon-key-5"></i></strong> Access Control
						</h3>
					  </div>
					  		  <div class="step">
						  <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>9a</b> Do you know what hacking is ?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->hacking_input != '' && $get_tech_answars->hacking_input == '1')?'yes':(($get_tech_answars->hacking_input != '' && $get_tech_answars->hacking_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="access_control_logs">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9b</b> Do you keep logs?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="Does your IT system automatically keep activity logs about system use and/or network activity?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->logs_input != '' && $get_tech_answars->logs_input == '1')?'yes':(($get_tech_answars->logs_input != '' && $get_tech_answars->logs_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="access_control_update_software">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9c</b> Do you regularly update your software?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Do you keep your systems patched."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->software_update_input != '' && $get_tech_answars->software_update_input == '1')?'yes':(($get_tech_answars->software_update_input != '' && $get_tech_answars->software_update_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row" id="access_control_encrypt">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9d</b> Do you encrypt your data?<!-- <a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->data_encrypt_input != '' && $get_tech_answars->data_encrypt_input == '1')?'yes':(($get_tech_answars->data_encrypt_input != '' && $get_tech_answars->data_encrypt_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label><b>9e</b> Do you provide differing levels of access to your systems? <span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Do your systems have tier access? "><i class="icon-info-circled-3"></i></a> --><br/>E.g. Administrator access, user access. &nbsp;  
						
							  </label>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group" style="margin-top: 8px;">
								  <label>: <?php echo (($get_tech_answars->system_access_input != '' && $get_tech_answars->system_access_input == '1')?'yes':(($get_tech_answars->system_access_input != '' && $get_tech_answars->system_access_input == '0')?'No':'Not yet answered'));?></label>
								</div>
							  </div>
						</div>
						<div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9f</b> Do you use Open Directory or Active Directory service ?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="It authenticates and authorizes all users and computers in a Windows domain type network. Open Directory is a directory service which is software which stores and organises information about a computer network's users and network resources and which allows network administrators to manage users' access."><i class="icon-info-circled-3"></i></a> --> </label>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group" style="margin-top: 8px;">
									  <label>: <?php echo (($get_tech_answars->directory_service_input != '')?$get_tech_answars->directory_service_input:'Not yet answered');?></label>
									</div>
								  </div>
							  </div>
							 <div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9g</b> Do you use Two factor authentication?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Two-factor authentication (also known as 2FA) is a method of confirming a user's claimed identity by using a combination of two different components. These components may be something that the user knows, something that the user possesses or something that is inseparable from the user. "><i class="icon-info-circled-3"></i></a> --></label>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group" style="margin-top: 8px;">
									  <label>: <?php echo (($get_tech_answars->two_factor_authentication_input != '' && $get_tech_answars->two_factor_authentication_input == '1')?'yes':(($get_tech_answars->two_factor_authentication_input != '' && $get_tech_answars->two_factor_authentication_input == '0')?'No':'Not yet answered'));?></label>
									</div>
								  </div>
							  </div>
							  <div class="row">
								<div class="col-md-6 col-sm-6">
								   <div class="form-group">
									 <label class="not_required"><b>9h</b> Do you secure your premises from a physical point of view?<!-- <a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title=" Physical security (protecting buildings and equipment using video surveillance, alarms, locks)."><i class="icon-info-circled-3"></i></a> --></label>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group" style="margin-top: 8px;">
									  <label>: <?php echo (($get_tech_answars->premises_input != '')?$get_tech_answars->premises_input:'Not yet answered');?></label>
									</div>
								</div>
						</div>

					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Data
						</h3>
					  </div>
					  		  <div class="step">
						 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10a</b> If your business involves, sensitive data rich activities such as e-commerce, internet banking or confidential email etc,do you encrypt your data by using public key infrastructure (PKI) to manage your digital signatures and wifi certificates?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Encrypting data can prevent unauthorised parties reading and tampering with your data. Do you or your system administrator encrypt your organisation�s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it.Public key infrastructure is a set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption. The purpose of a PKI is to facilitate the secure electronic transfer of information for a range of network activities such as e-commerce, internet banking and confidential email. It is required for activities where simple passwords are an inadequate authentication method and more rigorous proof is required to confirm the identity of the parties involved in the communication and to validate the information being transferred."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->public_key_infrastructure_input != '' && $get_tech_answars->public_key_infrastructure_input == '1')?'yes':(($get_tech_answars->public_key_infrastructure_input != '' && $get_tech_answars->public_key_infrastructure_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10b</b> Do you have email security? <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->server_option_input != '')?$get_tech_answars->server_option_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						
					 </div>
					 	  <div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Managed Service Solution Providers
						</h3>
					  </div>
					  	  <div class="step">
				
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>11</b> Would you use a managed service provider (MSP), if you don't have a MSP? <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="A managed service solution provider (MSP or sometimes also called a MSSP) is a multi technology purpose solution provided by one company that remotely manages a customer's IT infrastructure and/or end-user systems, typically on a proactive basis and under a subscription model. In contrast to IT projects that tend to be one-time transactions. MSPs often provide their offerings under a service-level agreement, a contractual arrangement between the MSP and its customer that spells out the performance and quality metrics that will govern the relationship."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_tech_answars->managed_msp_input != '' && $get_tech_answars->managed_msp_input == '1')?'yes':(($get_tech_answars->managed_msp_input != '' && $get_tech_answars->managed_msp_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
					 </div>
							</form>
						</div>
                        <div class="tab-pane fade" id="tab3primary">
							<form name="questionaire_non_tech" method="POST" action="<?php echo base_url('questionniare_results/update_nontech');?>">
								<div class="form_title">
									<h3><strong><i class="icon-cog-6"></i></strong> Business Continuity Procedures</h3>
      			 				</div>
								  <div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>12a</b> Do you use security monitoring solutions for your Business Continuity?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms."><i class="icon-info-circled-3"></i></a> --></label>
				        </div>
				        </div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->business_continuity_plan_input != '' && $get_nontech_answars->business_continuity_plan_input == '1')?'yes':(($get_nontech_answars->business_continuity_plan_input != '' && $get_nontech_answars->business_continuity_plan_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
				      </div>
				      <div class="row"  id="business_continuity_procedures">
				        <div class="col-md-6 col-sm-6">
					       <div class="form-group">
					         <label class="not_required"><b>12b</b> Which Business Continuity Procedures do you use?<!-- <a data-container="body" class="tooltiplink" title="Please tell us if you use any business continuity procedures such as IDS (see above), IPS (see below) or Backups (see below). Intrusion Prevention System (IPS) is a network security/threat prevention technology that examines network traffic flows to detect and prevent vulnerability exploits. Vulnerability exploits usually come in the form of malicious inputs to a target application or service that attackers use to interrupt and gain control of an application or machine. Following a successful exploit, the attacker can disable the target application (resulting in a denial-of-service state), or can potentially access to all the rights and permissions available to the compromised application. Backups make copies of computer data to keep in case anything goes wrong with the original." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
					       </div>
				        </div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->business_continuity_procedure_input != '')?$get_nontech_answars->business_continuity_procedure_input:'Not yet answeres');?></label>
							</div>
						</div>
				      </div>
				      <div class="row" id="business_continuity_regular_backup">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label class="not_required"><b>12c</b> Does your business have regular backups?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you have Local or Remote backups or no backups at all."><i class="icon-info-circled-3"></i></a> --></label>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->regular_backup_input != '')?$get_nontech_answars->regular_backup_input:'Not yet answeres');?></label>
							</div>
						</div>
					</div>
				  </div>
				    <div class="form_title">
				      <h3>
				        <strong><i class="icon-certificate"></i></strong> Training
				      </h3>
				    </div>
					    <div class="step">
						<div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>13</b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training."><i class="icon-info-circled-3"></i></a> --></label>
				        </div>
				        </div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->training_cybersecurity_input != '')?$get_nontech_answars->training_cybersecurity_input:'Not yet answeres');?></label>
							</div>
						</div>
				      </div>
					</div>
					<div class="form_title">
				      <h3><strong><i class="icon-hammer"></i></strong> Accreditation/Regulation</h3>
				    </div>
					    	<div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>14</b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click<a href="https://staging.protectbox.com/regulation" target="_blank"> here</a> for detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <!-- <a data-container="body" class="tooltiplink " title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &amp;/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>"><i class="icon-info-circled-3"></i></a> --></label>
				        </div>
				        </div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->aware_information_security_standard_input != '')?$get_nontech_answars->aware_information_security_standard_input:'Not yet answeres');?></label>
							</div>
						</div>
				      </div>
					  <!--<div class="row" id="training_iss" style="display:none;">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label class="not_required">Are you covered for any Information Security standards?</label>
						   </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
							<select name="training_isss[]" id="dates-field2" class="form-control" multiple="multiple">
								<?php 
									$explode_trainingzz = explode(',',$get_nontech_answars->cover_information_security_standard_input);
						        ?>
								 <option disabled="" selected="">click all that apply</option>
								 <option  value="CyberEssentials" <?php echo ((in_array("CyberEssentials",$explode_trainingzz))?'selected':'')?>>CyberEssentials</option>
								 <option  value="GDPR" <?php echo ((in_array("GDPR",$explode_trainingzz))?'selected':'')?>>GDPR</option>
								 <option  value="ISO/IEC" <?php echo ((in_array("ISO/IEC",$explode_trainingzz))?'selected':'')?>>ISO/IEC</option>
								 <option  value="NIST" <?php echo ((in_array("NIST",$explode_trainingzz))?'selected':'')?>> NIST </option>
								 <option  value="PDPA" <?php echo ((in_array("PDPA",$explode_trainingzz))?'selected':'')?>>PDPA</option>
								 <option  value="DFS/NYCRR500" <?php echo ((in_array("DFS/NYCRR500",$explode_trainingzz))?'selected':'')?>>DFS/NYCRR500</option>
								 <option  value="FFIEC" <?php echo ((in_array("FFIEC",$explode_trainingzz))?'selected':'')?>>FFIEC</option>
								 <option  value="CIS" <?php echo ((in_array("CIS",$explode_trainingzz))?'selected':'')?>> CIS </option>
								 <option  value="SOC 2" <?php echo ((in_array("SOC 2",$explode_trainingzz))?'selected':'')?>>SOC 2</option>
								 <option  value="HIPAA" <?php echo ((in_array("HIPAA",$explode_trainingzz))?'selected':'')?>>HIPAA</option>
								 <option  value="Other" <?php echo ((in_array("Other",$explode_trainingzz))?'selected':'')?>> Other </option>
							</select>
				         </div>
				        </div>
				      </div>-->
				      <!--<div class="row" id="accreditation_regular_audit" style="display:none;">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label class="not_required">Do you have any IT governance policies?<a data-container="body" class="tooltiplink" title="These policies can include Information security policy, Asset Management, Human resources security, Physical & Environmental Security, Communications & Operations Management, Access Control, Information systems acquisition, development & maintenance, Information security incident management, Business Continuity Management & Compliance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_regular_audit">
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($get_nontech_answars->it_governance_policy_input) && $get_nontech_answars->it_governance_policy_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($get_nontech_answars->it_governance_policy_input) && $get_nontech_answars->it_governance_policy_input == '0')?'selected':'')?>> No </option>
				          </select>
				         </div>
				        </div>
				      </div>-->
				    </div>
					 <div class="form_title">
				      <h3>
				        <strong><i class="icon-lock"></i></strong> <b>15</b> Passwords Policy
				      </h3>
				       </div>
					      <div class="step">
							<div class="row">
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label><b>a</b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you provide password strength checks on your customers."><i class="icon-info-circled-3"></i></a> --></label>
								 </div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								<div class="form-group" style="margin-top: 8px;">
								  <label>: <?php echo (($get_nontech_answars->password_rules_input != '' && $get_nontech_answars->password_rules_input == '1')?'yes':(($get_nontech_answars->password_rules_input != '' && $get_nontech_answars->password_rules_input == '0')?'No':'Not yet answered'));?></label>
								</div>
							  </div>
							</div>
						</div>
						  <div class="form_title">
						<h3>
						  <strong><i class="icon-user-md"></i></strong> Reputation Management
						</h3>
					  </div>
					    <div class="step">
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16a</b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						   <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->member_cisp_input != '' && $get_nontech_answars->member_cisp_input == '1')?'yes':(($get_nontech_answars->member_cisp_input != '' && $get_nontech_answars->member_cisp_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16b</b> Do you have cyber insurance?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you have taken out cyber insurance."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->cyber_insurance_input != '' && $get_nontech_answars->cyber_insurance_input == '1')?'yes':(($get_nontech_answars->cyber_insurance_input != '' && $get_nontech_answars->cyber_insurance_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16c</b> Do you have threat detection and prevention solutions?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
								<div class="form-group" style="margin-top: 8px;">
								  <label>: <?php echo (($get_nontech_answars->threat_detection_input != '')?$get_nontech_answars->threat_detection_input:'Not yet answeres');?></label>
								</div>
							</div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>16d</b> Do you use cloud data storage solutions?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Data storage solutions is the recording (storing) of information (data).Examples include Dropbox, OneDrive, Google Drive, Amazon Drive, Apple iCloud etc."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->cloud_data_storage_solution_input != '' && $get_nontech_answars->cloud_data_storage_solution_input == '1')?'yes':(($get_nontech_answars->cloud_data_storage_solution_input != '' && $get_nontech_answars->cloud_data_storage_solution_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div>
						
					  </div>
					    <div class="form_title">
						<h3>
						  <strong><i class="icon-laptop"></i></strong> Devices
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>17</b> Do you have device management solutions on the devices issued to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->device_to_employees_input != '' && $get_nontech_answars->device_to_employees_input == '1')?'yes':(($get_nontech_answars->device_to_employees_input != '' && $get_nontech_answars->device_to_employees_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div>
						<!--<div class="row" id="device_for_employees" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">What devices do you issue to your employees?&nbsp;<a data-container="body" class="tooltiplink" title="Do you provide Laptops, Phones or Tablets to your employees." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_for_employeess">
									<option disabled="" selected=""> choose an option</option>
									<option value="Laptops" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Laptops')?'selected':'')?>> Laptops </option>
									<option value="Phones" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Phones')?'selected':'')?>> Phones </option>
									<option value="Tablets" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Tablets')?'selected':'')?>> Tablets </option>
									<option value="None" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'None')?'selected':'')?>> None </option>
								</select>
							 </div>
						  </div>
						</div>
						<div class="row" id="device_policy_software" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Does your company enforce a policy regarding loss or misuse of equipment?<a data-container="body" class="tooltiplink" title="Is there policies in place to cover misuse" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="device_policy_softwarezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->misuse_equipment_input) && $non_tech_detail->misuse_equipment_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->misuse_equipment_input) && $non_tech_detail->misuse_equipment_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="device_have" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Do you have mobile device management (MDM)? <a data-container="body" class="tooltiplink" title="MDM primarily deals with corporate data segregation, securing emails, securing corporate documents on devices, enforcing corporate policies, integrating and managing mobile devices including laptops and handhelds of various categories. MDM implementations may be either on-premises or cloud-based. Usually involves use of a third party product that has management features for particular vendors of mobile devices such as such as smartphones, tablet computers, laptops and desktop computers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="device_havezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->mdm_input) && $non_tech_detail->mdm_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->mdm_input) && $non_tech_detail->mdm_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>-->
					</div>
					 <div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Remote working
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>18</b> Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->employees_use_remotely_input != '')?$get_nontech_answars->employees_use_remotely_input:'Not yet answeres');?></label>
							</div>
						</div>
						</div>
						<div class="row" id="vpn_home_remote_from_company">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please tell us if employees ever work from home &/or access your company's systems & data remotely?&nbsp;<!-- <a data-container="body" class="tooltiplink" title="Do your employees use these devices remotely." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->employees_work_home_input != '' && $get_nontech_answars->employees_work_home_input == '1')?'yes':(($get_nontech_answars->employees_work_home_input != '' && $get_nontech_answars->employees_work_home_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div>
						<div class="row" id="vpn_have">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Do you have Virtual Private Networks (VPN) software?&nbsp; <!-- <a data-container="body" class="tooltiplink" title="Virtual Private Network (VPN) is the extension of a private network that encompasses links across shared or public networks like the Internet. With a VPN, you can send data between two computers across a shared or public network in a manner that emulates a point-to-point private link." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->vpn_software_input != '' && $get_nontech_answars->vpn_software_input == '1')?'yes':(($get_nontech_answars->vpn_software_input != '' && $get_nontech_answars->vpn_software_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div>
					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Consultancy/Implementation
						</h3>
					  </div>
					  	  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>19</b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->cyber_consultant_input != '' && $get_nontech_answars->cyber_consultant_input == '1')?'yes':(($get_nontech_answars->cyber_consultant_input != '' && $get_nontech_answars->cyber_consultant_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div>
						<!-- <div class="row" id="consultancy_consultant_help">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Would you need a consultant to help with implementation only, if you don't already have one?&nbsp; <a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_nontech_answars->need_consultant_input != '' && $get_nontech_answars->need_consultant_input == '1')?'yes':(($get_nontech_answars->need_consultant_input != '' && $get_nontech_answars->need_consultant_input == '0')?'No':'Not yet answered'));?></label>
							</div>
						</div>
						</div> -->
						 
					</div>
					</form>
				</div>
				<div class="tab-pane fade" id="tab4primary">
					<form method="POST" id="qstn_budget" name="questionaire" action="<?php echo base_url('questionniare_results/update_budget');?>">
						<div class="form_title">
						<h3>
						  <strong><i class="icon-briefcase"></i></strong> Your Budget
						</h3>
					  </div>
					  <div class="step">
						  <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20a</b> What amount did you spend on cybersecurity annually?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
								<!-- <a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please select from one of the five categories the amount you spend on cybersecurity products."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_budget_answars->amount_cybersecurity_input != '')?$get_budget_answars->amount_cybersecurity_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20b</b> What percentage of your annual budget is that?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Could you tell us what % of your IT budget this amounted to."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_budget_answars->percentage_annual_budget_input != '')?$get_budget_answars->percentage_annual_budget_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20c</b> What is your budget for Cyber Security per year?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us how much you intend to spend on security services each year."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_budget_answars->budget_cybersecurity_per_year_input != '')?$get_budget_answars->budget_cybersecurity_per_year_input:'Not yet answered');?></label>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label class="not_required"><b>20d</b> How else should it be paid for?<!-- <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if it should be paid for through cyber protection subsidise, Government funding (training, vouchers, etc.) or some other mechanism."><i class="icon-info-circled-3"></i></a> --></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group" style="margin-top: 8px;">
							  <label>: <?php echo (($get_budget_answars->paid_for_input != '')?$get_budget_answars->paid_for_input:'Not yet answered');?></label>
							</div>
						  </div>
							</div>
						</div>
					 

					 	<div class="form_title">
							<h3 class="not_required">
							  <strong><i class="icon-users"></i></strong> <b>21</b> Do you have a preferred budget breakdown?
							</h3>
						  </div>
						  	  <div class="step">
						<div class="row">
						  <div class="col-md-12">
							<table class="table">
								<thead>
								  <tr>
									<th colspan="5">Budget Component</th>
									<th>Amount in</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td colspan="5">Currency</td>
									<td>
									<?php echo (($get_budget_answars->preferred_budget_breakdown_currency_input != '')?$get_budget_answars->preferred_budget_breakdown_currency_input:'Not yet answered');?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5" >Operating System</td>
									<td><?php echo (($get_budget_answars->tech_operating_system_input != '')?$get_budget_answars->tech_operating_system_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Internet</td>
									<td><?php echo (($get_budget_answars->tech_internet_input != '')?$get_budget_answars->tech_internet_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Antivirus</td>
									<td><?php echo (($get_budget_answars->tech_antivirus_input != '')?$get_budget_answars->tech_antivirus_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Firewall</td>
									<td><?php echo (($get_budget_answars->tech_firewall_input != '')?$get_budget_answars->tech_firewall_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Access Control</td>
									<td><?php echo (($get_budget_answars->tech_access_control_input != '')?$get_budget_answars->tech_access_control_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Data</td>
									<td><?php echo (($get_budget_answars->tech_protecting_data_input != '')?$get_budget_answars->tech_protecting_data_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Managed Service Solution Providers (MSSPs)</td>
									<td><?php echo (($get_budget_answars->tech_mssp_input != '')?$get_budget_answars->tech_mssp_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Non-Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5">Business Continuity Procedures</td>
									<td><?php echo (($get_budget_answars->non_tech_business_continuity_input != '')?$get_budget_answars->non_tech_business_continuity_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Training</td> 
									<td><?php echo (($get_budget_answars->non_tech_training_input != '')?$get_budget_answars->non_tech_training_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Accreditation/Regulation</td>
									<td><?php echo (($get_budget_answars->non_tech_accredation_input != '')?$get_budget_answars->non_tech_accredation_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Reputation Management</td>
									<td><?php echo (($get_budget_answars->non_tech_reputation_management_input != '')?$get_budget_answars->non_tech_reputation_management_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Passwords policy</td>
									<td><?php echo (($get_budget_answars->non_tech_password_policy_input != '')?$get_budget_answars->non_tech_password_policy_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Devices</td>
									<td><?php echo (($get_budget_answars->non_tech_devices_input != '')?$get_budget_answars->non_tech_devices_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Remote working/Virtual Private Networks (VPN)</td>
									<td><?php echo (($get_budget_answars->non_tech_vpn_input != '')?$get_budget_answars->non_tech_vpn_input:'Not yet answered');?></td>
								  </tr>
								  <tr>
									<td colspan="5">Consultancy/Implementation</td>
									<td><?php echo (($get_budget_answars->non_tech_consultancy_input != '')?$get_budget_answars->non_tech_consultancy_input:'Not yet answered');?></td>
								  </tr>
								</tbody>
							</table>
						  </div><!-- End col-md-12-->
						</div>
						 
					  </div>
					</form>
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
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
