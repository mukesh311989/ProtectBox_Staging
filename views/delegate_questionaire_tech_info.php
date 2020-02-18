<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Your Technical Info Questionnaire I ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
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
		.rounded_div {
			border:1px solid #CCC;
			box-shadow: 0px 0px 3px #bfbfbf;
			border-radius:5px;
		}
		label{
			font-weight:normal !important;
		}
		/* style*/
body {
    color: #000;
}
.arrow_success {
    position: relative;
    color: #fff;
    font-weight: bold;
	width:24%;
	text-align:center;
	margin:0.5%;
	
	
}
.red-gradient_success {
    
    
    width: 100%;
    color: #fff;
    background: #9FD45B; /* Old browsers */
	
}

.arrow {
    position: relative;
    color: #fff;
    font-weight: bold;
	width:24%;
	text-align:center;
	margin:0.5%;
 
 
}
.red-gradient {
    
    
    width: 100%;
    color: #EC8C0E;
    background: #fff;
 
}

.arrow1:after {
    z-index: 9999;
    right: -12px;
    border-top: 26px solid transparent;
    border-left: 15px solid #EC8C0E;
    border-bottom: 26px solid transparent;
	position: absolute;
    content: '';
	top:-5px;

}


.nav-tabs>li.active>a{
  background-color:#EC8C0E !important;
  color:#fff !important;
  border-left: 16px solid #EC8C0E;
}
.other_title
{
	background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
}
.another
{
border:3px solid #EC8C0E;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.sage_border
{
	border:3px solid #83C72A;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.another_header
{
}
.not_required
{
color: #A9A9A9;
}
	</style>
  </head>
  <body>
    <div id="load">
    </div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header"  style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Let's source your protection..
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->
				
				<?php
				
					if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_success')){
				?>
					<div class="alert alert-sucess"> <strong><?php echo $this->session->flashdata('del_success');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('update')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update');?></strong> </div>
				<?php
					}
				$array = explode(',',$delegate_data);
				?>
				<ul class="nav nav-tabs " id="myDIV" style="margin-bottom:10px;">
					<?php
					if(in_array("basic", $array))
					{
					?>
					<li class=" arrow_success"><a href="<?php echo base_url('delegate_questionaire/');?><?php echo $this->uri->segment(2);?>"   class="red-gradient_success">Basics</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Basics</a></li>
					<?php
					}
					?>
					<li class=" active arrow "><a href="<?php echo base_url('delegate_questionaire_tech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient">Technical Info</a></li>
					<?php
					if(in_array("non_tech", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_nontech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient_success">Non-Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Non-Technical Info</a></li>
					<?php
					}
					if(in_array("budget", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_budget/');?><?php echo $this->uri->segment(2);?>"  class="red-gradient_success">Budget</a>  </li>
					<?php
					}
					else{
					?>
					<li class="arrow"><a href="javascript:void(0);"  class="red-gradient">Budget</a>  </li>
					<?php
					}
					?>

				</ul>
				
				<div class="tab-content rounded_div">
					<div class="tab-pane " id="home">
					</div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="profile">
					<?php
					if($questions->os_input != '' || $questions->antivirus_input != '' || $questions->firewall_input != '' || $questions->manage_it_input != '' || $questions->internet_input != '' || $questions->internet_option_input != '' || $questions->hacking_input != '' || $questions->system_access_input != '' || $questions->directory_service_input != '' || $questions->two_factor_authentication_input != '' || $questions->premises_input != '' || $questions->public_key_infrastructure_input != '' || $questions->email_input_score != '' || $questions->managed_msp_input != ''){
					?>
					<div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> All questions with an asterisk <span style="color:#ec8b0d;font-size:22px;margin-top:10px;">*</span> must be answered.</p>
								</div>
								<div class="col-md-12" style="padding:0px;margin:0px;">
									<div class="col-md-4">
										<p style="color:#83C72A;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> Click on  <a data-container="body"  href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> for more info. </p>
									</div>
								</div>
							</div>
						</div>
					<?php
						$tab_one = $progress->tab_one;
						$tab_two = $progress->tab_two;
						$total_progress = $tab_one+$tab_two;
					?>
					<div class="progress" style="margin:20px;">
					  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
					</div>
					<div style="margin-top:-18px;margin-bottom:20px;float:right;margin-right:20px;"><span>25 minutes to complete this section, 1 hour in total</span></div>

					<form method="POST" name="questionaire_tech_info" action="<?php echo base_url('delegate_questionaire_tech_info/add_data/');?><?php echo $this->uri->segment(2);?>">
					<?php
					if($questions->os_input != ''){
					?>
					  <div class="form_title">
						<h3>
						  <strong><i class=" icon-desktop-3"></i></strong> Operating System
						</h3>
					  </div>
					<?php
					}
					?>
					<?php
					if($questions->os_input != ''){
					?>
					  <div class="step">
					  <?php
						if($questions->os_input != ''){
					  ?>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>4</b> What Operating System do you use?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Please tell us the primary operating system used in your company." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>

						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
								  <select  name="operating_system" class="form-control " >technical_data
									<option disabled="" selected=""> choose an option</option>
									<option  value="Windows 7 or below" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Windows 7 or below")?'selected':'');?>>Windows 7 or below</option>
									<option  value="Windows 8 or above" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Windows 8 or above")?'selected':'');?>> Windows 8 or above </option>
									<option  value="Mac" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Mac")?'selected':'');?>> Mac</option>4
									<option  value="Linux" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Linux")?'selected':'');?>>Linux</option>
								  </select>
							  </div>
						  </div>
						</div>
					  <?php
						}
					  ?>
					</div>
					<?php
					}
					?>
					<?php
						if($questions->antivirus_input != ''){
					?>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-block-2"></i></strong> Antivirus
						</h3>
					  </div>
					<?php
						}
					?>
					<?php
						if($questions->antivirus_input != ''){
					?>
					  <div class="step">
						<?php
							if($questions->antivirus_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>5</b> Do you have an antivirus product installed?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="antivirus_installed">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->antivirus_input) && $technical_data->antivirus_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->antivirus_input) && $technical_data->antivirus_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
							</div>
						  </div>
						  <?php
							}  
						  ?>
					  </div>
					<?php
						} 
					?>
					<?php
						if($questions->firewall_input != ''){
					?>
					 <div class="form_title">
						<h3>
						  <strong><i class="icon-globe-2"></i></strong> Firewalls
						</h3>
					  </div>
					<?php
						}
					?>
					 <div class="step">
					 <?php
						if($questions->firewall_input != ''){
					?>
						<div class="row">
						<?php
							if($questions->firewall_input != ''){
						?>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>6</b> Do you have more than basic system firewall ?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Firewall monitors & controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="firewall">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->firewall_input) && $technical_data->firewall_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->firewall_input) && $technical_data->firewall_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						  <?php
							}  
						  ?>
						</div>
						<?php
							}	
						?>
					</div>
					<?php
						if($questions->manage_it_input != ''){
					?>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-globe-2"></i></strong> IT Management
						</h3>
					</div>
					<?php
						}
					?>
				<?php
					if($questions->manage_it_input != ''){
				?>
				  <div class="step">
					<?php
						if($questions->manage_it_input != ''){
					?>
					<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>7</b> Who manages your IT?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control " name="manage_it" onchange="java_script_:show(this.options[this.selectedIndex].value)" >
									<option disabled="" selected="">Choose an option</option>
									<option  value="Your own system administrator in-house" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "Your own system administrator in-house")?'selected':'');?>>Your own system administrator in-house</option>
									<option  value="3rd party contracted by your organization" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "3rd party contracted by your organization")?'selected':'');?>>3rd party contracted by your organization</option>
									<option  value="3rd party located in same building / facilities managed" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "3rd party located in same building / facilities managed")?'selected':'');?>>3rd party located in same building / facilities managed</option>
									<option  value="None" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "None")?'selected':'');?>>None</option>
							    </select>
								
							 </div>
						  </div>
						  <div class="col-md-12" id='hiddenDiv' style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;color:#F0A84C;font-weight:bold;font-size:15px;display:none;" href="javascript:void(0);">You may need to ask your 3rd party provider for answers to the next sections (if you&acute;d like to review your 3rd party&acute;s recommendations) or give them &acute;Delegate&acute; access (see &acute;Settings&acute; for this) to answer it themselves. Or answer &acute;Yes&acute; or &quot;Don&acute;t Know&quot; or &quot;None&quot; to these questions so that we don&acute;t include them in your bundles of solutions.</div>
						</div>
					<?php
						}
					?>						
				  </div>
				  <?php
					}
				  ?>
				  <?php
						if($questions->internet_input != '' || $questions->internet_option_input != '' || $questions->wifi_option_input != '' || $questions->wpa2_input != '' || $questions->browser_input != '' || $questions->update_browser_input != '' || $questions->email_input != '' || $questions->spam_filtering_input != '' || $questions->ad_blocking_input != '' || $questions->web_hosting_input != '' || $questions->web_hosting_option_input != ''){
				  ?>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-network"></i></strong> Internet
						</h3>
					  </div>
				  <?php
					}
				  ?>
				  <div class="step">
				   <?php
						if($questions->internet_input != ''){
				  ?>
					<div class="row">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label><b>8a</b> Do you have internet?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us if your network is connected to the internet." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_have" id="internet_have" >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->internet_input) && $technical_data->internet_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->internet_input) && $technical_data->internet_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}	
						if($questions->internet_option_input != ''){
					 ?>
					<div class="row" id="internet_wifi_lan" >
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label class=""><b>8b</b> Do you have WiFi or LAN?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Wired Equivalent Privacy (WEP) is a security protocol, specified in the IEEE Wireless Fidelity (Wi-Fi) standard, 802.11 b, that is designed to provide a wireless local area network (WLAN) with a level of security and privacy comparable to what is usually expected of a traditional wired (LAN) network." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							 <select class="form-control " name="internet_wifi_lan">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->internet_option_input) && $technical_data->internet_option_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->internet_option_input) && $technical_data->internet_option_input == "0")?'selected':'');?>> No </option>
							  </select>
						 </div>
					  </div>
					</div>
					<?php
						}
						if($questions->wifi_option_input != ''){
					?>
					<div class="row" id="internet_public_wifi">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8c</b> Is your wifi open to the public?<a data-container="body" class="tooltiplink" title="Please tell us if you allow non-employees access to the network." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_public_wifi" >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->wifi_option_input) && $technical_data->wifi_option_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->wifi_option_input) && $technical_data->wifi_option_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->wpa2_input != ''){
					?>
					<div class="row" id="internet_wpa2" style="display:none;">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8d</b> Do you have WPA2 (Wi-Fi Protected Access 2) enabled?<a data-container="body" class="tooltiplink" title="WPA2 (Wi-Fi Protected Access 2) is a network security technology commonly used on Wi-Fi wireless networks. It's an upgrade from the original WPA technology, which was designed as a replacement for the older and much less secure  Wired Equivalent Privacy (WEP) . Please tell us if you have this enabled." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_wpa2">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->browser_input != ''){
					?>
					<div class="row" id="browser_use">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8e</b> What browser(s) do you use?<a data-container="body" class="tooltiplink" title="Please select if you use Internet Explorer, Firefox, Chrome or another browser e.g..Opera" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
			
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control "  id="other_browser" name="browser_use" onchange="java_script_:browser_show(this.options[this.selectedIndex].value)"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="Internet Explorer" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Internet Explorer")?'selected':'');?>> Internet Explorer </option>
								<option  value="Firefox" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Firefox")?'selected':'');?>> Firefox </option>
								<option  value="Chrome" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Chrome")?'selected':'');?>> Chrome </option>
								<option  value="Edge (Windows 10)" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Edge (Windows 10)")?'selected':'');?>> Edge (Windows 10) </option>
								<option  value="Other-please specify" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Other-please specify")?'selected':'');?>> Other-please specify </option>
							  </select>
						  </div>
					  </div>
					</div>
					
					<div class="row" id="hiddenBrowser" style="display:none">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label >Please Specifty The Bowser Name?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Mention The Browser Name." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <input type="text" name="browser_other" value="<?php echo ((isset($technical_data->browser_name_input) && $technical_data->browser_name_input!="")?$technical_data->browser_name_input:'') ;?>" class="form-control required" >
						</div>
					  </div>
					</div>
					<?php
						}
						if($questions->update_browser_input != ''){
					?>
					<div class="row" id="internet_browser_update">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8f</b> Do you or your systems administrator update your browser with the latest patches?<a data-container="body" class="tooltiplink" title="Please tell us if you update your browsers" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_browser_update"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->update_browser_input) && $technical_data->update_browser_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->update_browser_input) && $technical_data->update_browser_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->update_browser_input != ''){
					?>
					<div class="row" id="internet_email">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8g</b> Do you use email to communicate outside the business ?<a data-container="body" class="tooltiplink" title="Please tell us if you use email to contact others outside the business." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_email">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->email_input) && $technical_data->email_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->email_input) && $technical_data->email_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->spam_filtering_input != ''){
					?>
					<div class="row" id="internet_spam">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8h</b> Do you have spam filtering?&nbsp;<a data-container="body" class="tooltiplink" title="Spam filtering is a program used to detect unsolicited and unwanted email and prevent those messages from getting to a user's inbox. Like other types of filtering programs, a spam filter looks for certain criteria on which it bases judgments." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_spam"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->spam_filtering_input) && $technical_data->spam_filtering_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->spam_filtering_input) && $technical_data->spam_filtering_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->ad_blocking_input != ''){
					?>
					<div class="row" id="internet_ad_block">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8i</b> Do you integrate ad blocking software on your systems?&nbsp;<a data-container="body" class="tooltiplink" title="Please tell us if you use AD blockers or any ad blocking software." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_ad_block"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->ad_blocking_input) && $technical_data->ad_blocking_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->ad_blocking_input) && $technical_data->ad_blocking_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
			
					<?php
						}
						if($questions->web_hosting_input != ''){
					?>
					<div class="row" id="internet_web_host">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8j</b> Do you have Web hosting on your network? <a data-container="body" class="tooltiplink" title="Web hosting is the activity or business of providing storage space and access for websites." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							  <select class="form-control " name="internet_web_host"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($technical_data->web_hosting_input) && $technical_data->web_hosting_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($technical_data->web_hosting_input) && $technical_data->web_hosting_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<?php
						}
						if($questions->web_hosting_option_input != ''){
					?>
					<div class="row" id="internet_inhouse_remote">
					  <div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <label ><b>8k</b> Do you have web hosting in house or remote?<a data-container="body" class="tooltiplink" title="Are your webservers accessible by external 3rd parties  via the internet?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
						 </div>
					  </div>
					  <div class="col-md-6 col-sm-6">
						  <div class="form-group">
							 <select class="form-control " name="internet_inhouse_remote"  >
								<option disabled="" selected=""> choose an option</option>
								<option  value="inhouse" <?php echo ((isset($technical_data->web_hosting_option_input) && $technical_data->web_hosting_option_input == "inhouse")?'selected':'');?>> In-house </option>
								<option  value="remote" <?php echo ((isset($technical_data->web_hosting_option_input) && $technical_data->web_hosting_option_input == "remote")?'selected':'');?>> Remote </option>
							  </select>
						 </div>
					  </div>
					</div>
				  </div>
				
				  <?php
						}
						if($questions->hacking_input != '' || $questions->logs_input != '' || $questions->software_update_input != '' || $questions->data_encrypt_input != '' || $questions->system_access_input != '' || $questions->directory_service_input != '' || $questions->two_factor_authentication_input != '' || $questions->premises_input != ''){
				  ?>
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-key-5"></i></strong> Access Control
					</h3>
				  </div>
				<?php
					}
				?>
				 <?php
						if($questions->hacking_input != '' || $questions->logs_input != '' || $questions->software_update_input != '' || $questions->data_encrypt_input != '' || $questions->system_access_input != '' || $questions->directory_service_input != '' || $questions->two_factor_authentication_input != '' || $questions->premises_input != ''){
				  ?>
					  <div class="step">
					 <?php
						if($questions->hacking_input != ''){
					 ?>
						  <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>9a</b> Do you know what hacking is ?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="hacking" id="access_control_what">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->hacking_input) && $technical_data->hacking_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->hacking_input) && $technical_data->hacking_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
						}
						if($questions->logs_input != ''){
						?>
						<div class="row" id="access_control_logs">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>9b</b> Do you keep logs?&nbsp;<a data-container="body" class="tooltiplink" title="Does your IT system automatically keep activity logs about system use and/or network activity?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="access_control_logs" >
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->logs_input) && $technical_data->logs_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->logs_input) && $technical_data->logs_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
						}
						if($questions->software_update_input != ''){
						?>
						<div class="row" id="access_control_update_software" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>9c</b> Do you regularly update your software?<a data-container="body" class="tooltiplink" title="Do you keep your systems patched." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="update_software" >
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->software_update_input) && $technical_data->software_update_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->software_update_input) && $technical_data->software_update_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
						}
						if($questions->data_encrypt_input != ''){
						?>
						<div class="row" id="access_control_encrypt" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>9d</b> Do you encrypt your data?<a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="encrypt" >
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->data_encrypt_input) && $technical_data->data_encrypt_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->data_encrypt_input) && $technical_data->data_encrypt_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						 <?php
							}
							 if($questions->system_access_input != ''){
						 ?>
						<div class="row">
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label><b>9e</b> Do you provide differing levels of access to your systems? <span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Do your systems have tier access? " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a><br/>E.g. Administrator access, user access. &nbsp; </label>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="access" >
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($technical_data->system_access_input) && $technical_data->system_access_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($technical_data->system_access_input) && $technical_data->system_access_input == "0")?'selected':'');?>> No </option>
								  </select>
								 </div>
							</div>
						</div>
						<?php
						}
						 if($questions->directory_service_input != '')
						{
						?>
						
						<div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label ><b>9f</b> Do you use Open Directory or Active Directory service ?<a data-container="body" class="tooltiplink" title="Active Directory (AD) is a directory service that Microsoft developed for Windows domain networks and is included in most Windows Server operating systems as a set of processes and services. Open Directory is a directory service which is software which stores and organises information about a computer network's users and network resources and which allows network administrators to manage users' access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
									<select class="form-control " name="directory" >
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="Active Directory" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Active Directory")?'selected':'');?>>Active Directory</option>
									 <option  value="Open Directory" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Open Directory")?'selected':'');?>>Open Directory</option>
									 <option  value="Both" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Both")?'selected':'');?>>Both</option>
									 <option  value="Neither" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Neither")?'selected':'');?>>Neither</option>
									 <option  value="Don't know" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Don't know")?'selected':'');?>>Don't know</option>
									</select>
								</div>
								</div>
							  </div>
							 <?php
						}
						if($questions->two_factor_authentication_input != '')
						{
							 ?>
							 <div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label ><b>9g</b> Do you use Two factor authentication?<a data-container="body" class="tooltiplink" title="Two-factor authentication (also known as 2FA) is a method of confirming a user's claimed identity by using a combination of two different components. These components may be something that the user knows, something that the user possesses or something that is inseparable from the user. " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="authentication" >
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "0")?'selected':'');?>> No </option>
								  </select>
								 </div>
								</div>
							  </div>
						<?php
						}
						if($questions->premises_input != '')
						{
						?>
							<div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label ><b>9h</b> Do you secure your premises from a physical point of view?<a data-container="body" class="tooltiplink" title="Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							</div>
						 
							<div class="col-md-6 col-sm-6">
							 <div class="form-group">
							  <select class="form-control required" name="secure_premises" required>
								 <option disabled="" selected=""> choose an option</option>
								 <option  value="Yes" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "Yes")?'selected':'');?>> Yes </option>
								 <option  value="No" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "No")?'selected':'');?>> No </option>
								 <option  value="N/A" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "N/A")?'selected':'');?>> N/A </option>
								 <option  value="Don’t know" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "Don’t know")?'selected':'');?>> Don't know</option>
							  </select>
							 </div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
					<?php
						}
						if($questions->public_key_infrastructure_input != '' || $questions->email_input_score != '')
						{
					?>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Data
						</h3>
					  </div>
					 <?php
						}
						if($questions->public_key_infrastructure_input != '' || $questions->email_input_score != '')
						{
						?>
					  <div class="step">
					  <?php
					  if($questions->public_key_infrastructure_input != '')
					  {
					  ?>
						 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>10a</b> If your business involves, sensitive data rich activities such as e-commerce, internet banking or confidential email etc,do you encrypt your data by using public key infrastructure (PKI) to manage your digital signatures and wifi certificates?&nbsp;<a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. Do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it.Public key infrastructure is a set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption. The purpose of a PKI is to facilitate the secure electronic transfer of information for a range of network activities such as e-commerce, internet banking and confidential email. It is required for activities where simple passwords are an inadequate authentication method and more rigorous proof is required to confirm the identity of the parties involved in the communication and to validate the information being transferred." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="public_key_infrastructure_input"  >
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->public_key_infrastructure_input) && $technical_data->public_key_infrastructure_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->public_key_infrastructure_input) && $technical_data->public_key_infrastructure_input == "0")?'selected':'');?>> No </option>
									<option  value="Don’t Know" <?php echo ((isset($technical_data->public_key_infrastructure_input) && $technical_data->public_key_infrastructure_input == "Don’t Know")?'selected':'');?>> Don’t Know </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
					  }if($questions->email_input_score != '')
					  {
						  ?>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>10b</b> Do you have email security? <a data-container="body" class="tooltiplink" title="Keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="server_option"  >
									<option disabled="" selected=""> choose an option</option>
									<option  value="yes" <?php echo ((isset($technical_data->server_option_input) && $technical_data->server_option_input == "yes")?'selected':'');?>> Yes </option>
									<option  value="no" <?php echo ((isset($technical_data->server_option_input) && $technical_data->server_option_input == "no")?'selected':'');?>> No </option>
									
								  </select>
							  </div>
						  </div>
						</div>
						<?php
						}
						?>
					 </div>
					 <?php
					 }if($questions->managed_msp_input != '')
					 {
					 ?>

					<div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Managed Service Solution Providers
						</h3>
					  </div>
					  <div class="step">
						
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label ><b>11</b> Would you use a managed service provider (MSP), if you don't have a MSP? <a data-container="body" class="tooltiplink" title="A managed service provider (MSP or sometimes also called a MSSP) is a multi technology purpose solution provided by one company that remotely manages a customer's IT infrastructure and/or end-user systems, typically on a proactive basis and under a subscription model. In contrast to IT projects that tend to be one-time transactions. MSPs often provide their offerings under a service-level agreement, a contractual arrangement between the MSP and its customer that spells out the performance and quality metrics that will govern the relationship." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="managed_msp_input"  >
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->managed_msp_input) && $technical_data->managed_msp_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->managed_msp_input) && $technical_data->managed_msp_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						  	   
						</div>
					 </div>
					 <?php
					 }
					 ?>
						<div class="col-md-12 text-right" style="padding:10px;">
							<button name="save_return" type="submit" value="return" class="btn btn-warning btn-medium logout">Save and Return</button>
						
						    <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium continue">Save and Continue</button>
							<input type="hidden" id="btn_val" name="sub_val" value="">
						</div>
					  </form>
					  <?php
					}else{
					  ?>
						  <div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
								</div>
							</div>
						</div>
						<?php
						  }
						  ?>
					</div>
<!-----------------------------------------------------------Step 3---------------------------------------------------------------------------------->
					<div class="tab-pane" id="messages">
					</div>
<!-----------------------------------------------------------------------Step 4---------------------------------------------------------------------->
					<div class="tab-pane" id="settings">
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
    <script src="js/jquery.validate.js">
    </script>
    <script src="js/bootstrap-datepicker.js">
    </script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	 <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   

			$( ".continue" ).click(function() {
			  $('#btn_val').val('continue');
			});
			$( ".logout" ).click(function() {
			  $('#btn_val').val('logout');
			});
		});
	</script>

	<script>
	var header = document.getElementById("myDIV");
	var btns = header.getElementsByClassName("arrow");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("arrow1");
		current[0].className = current[0].className.replace(" arrow1", "");
		this.className += " arrow1";
	  });
	}
</script>


<SCRIPT> 	
	function browser_show(select_item) {
	
	    if (select_item == "Other-please specify") {
			
		    hiddenBrowser.style.visibility='visible';
			hiddenBrowser.style.display='block';
			Form.fileURL.focus();
		} 
		else{
			hiddenBrowser.style.visibility='hidden';
			hiddenBrowser.style.display='none';
		}
	}	
</SCRIPT> 

	<script>
$(function() {
  $("form[name='questionaire_tech_info']").validate({
    rules: {
      operating_system: "required",
	  antivirus_installed : "required",
	  firewall : "required",
	  internet_have : "required",
	  internet_wifi_lan: "required",
	  browser_other: "required",
      hacking : "required",
	  access : "required",
	  reputation_management_threat_detection : "required",
	  reputation_management_cloud_storage: "required",
	  
    },
    messages: {
      operating_system: "This field is required",
	  antivirus_installed : "This field is required",
	  firewall : "This field is required",
	  internet_have : "This field is required",
	  internet_wifi_lan: "This field is required",
	  browser_other: "This field is required",
	  hacking : "This field is required"
	  access : "This field is required"
	  reputation_management_threat_detection : "This field is required",
	  reputation_management_cloud_storage: "This field is required",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});	
</script>

<script>
	$( document ).ready(function() {
		    $('#internet_have').on('change',function(){
				if( $(this).val()=="1"){
					$("#internet_wifi_lan").show(),
					$("#internet_public_wifi").show(),
					$("#internet_wpa2").show(),
					$("#browser_use").show(),
					$("#internet_browser_update").show(),
					$("#internet_email").show(),
					$("#internet_spam").show(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").show(),
					$("#internet_inhouse_remote").show()
				}
				else if( $(this).val()=="0"){
					$("#internet_wifi_lan").hide(),
					$("#internet_public_wifi").hide(),
					$("#internet_wpa2").hide(),
					$("#browser_use").hide(),
					$("#internet_browser_update").hide(),
					$("#internet_email").hide(),
					$("#internet_spam").hide(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").hide(),
					$("#internet_inhouse_remote").show()
				}
			});

			if( $('#internet_have').val()=="1"){
					$("#internet_wifi_lan").show(),
					$("#internet_public_wifi").show(),
					$("#internet_wpa2").show(),
					$("#browser_use").show(),
					$("#internet_browser_update").show(),
					$("#internet_email").show(),
					$("#internet_spam").show(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").show(),
					$("#internet_inhouse_remote").show()
				}
				else if( $('#internet_have').val()=="0"){
					$("#internet_wifi_lan").hide(),
					$("#internet_public_wifi").hide(),
					$("#internet_wpa2").hide(),
					$("#browser_use").hide(),
					$("#internet_browser_update").hide(),
					$("#internet_email").hide(),
					$("#internet_spam").hide(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").hide(),
					$("#internet_inhouse_remote").show()
				}


			$('#access_control_what').on('change',function(){
        if( $(this).val()=="1"){
			$("#access_control_logs").show(),
			$("#access_control_update_software").show(),
			$("#access_control_encrypt").show()
        }
        else if( $(this).val()=="0"){
			$("#access_control_logs").hide(),
			$("#access_control_update_software").show(),
			$("#access_control_encrypt").hide()
        }
    });

	 if( $('#access_control_what').val()=="1"){
			$("#access_control_logs").show(),
			$("#access_control_update_software").show(),
			$("#access_control_encrypt").show()
        }
        else if( $('#access_control_what').val()=="0"){
			$("#access_control_logs").hide(),
			$("#access_control_update_software").show(),
			$("#access_control_encrypt").hide()
        }
	
	if($('#other_browser').val()=='other')
	{
		$("#hiddenBrowser").show()
	}
		});



	
</script>
<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
