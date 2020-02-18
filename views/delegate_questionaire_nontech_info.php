<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Your Non-Technical Info Questionnaire | ProtectBox</title>
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

		.oi_header
		{
			background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);
		}
		.other_title{
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
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Let's source your protection…
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
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('update')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update');?></strong> </div>
				<?php
				}
				$array = explode(',',$delegate_data);
				//print_r($array);

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
					if(in_array("tech", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_tech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient_success">Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Technical Info</a></li>
					<?php
					}
					?>
					<li class=" active arrow "><a href="<?php echo base_url('delegate_questionaire_nontech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient">Non-Technical Info</a></li>
					<?php
					if(in_array("budget", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_budget/');?><?php echo $this->uri->segment(2);?>"  class="red-gradient_success">Budget</a>  </li>
					<?php
					}
					else{
					?>
					<li class="arrow"><a href="javascript:void(0);"  class="red-gradient">Your <br /> Budget</a>  </li>
					<?php
					}
					?>
				</ul>
				<div class="tab-content rounded_div">
					<div class="tab-pane " id="home"></div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="profile">
					<?php
					if($questions->business_continuity_plan_input != '' || $questions->regular_backup != '' || $questions->training_cybersecurity_input != '' || $questions->accreditation_security_standerd_input != '' || $questions->adaquate_password_input != '' || $questions->cyber_security_information_input != '' || $questions->cyber_insurence_input != '' || $questions->threat_detection_input != '' || $questions->cloud_storage != '' || $questions->device_management_input != '' || $questions->vpn_home != '' || $questions->need_consultant_input != ''){
					?>
						<div class="another">
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
	
					<div class="progress" style="margin:10px;margin-bottom:30px;">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
						</div>
					<form name="questionaire_non_tech" method="POST" action="<?php echo base_url();?>delegate_questionaire_nontech_info/add_questioniare_non_tech/<?php echo $this->uri->segment(2);?>">

						
					<?php
					if($questions->business_continuity_plan_input != '' || $questions->business_continuity_procedure_input != '' || $questions->regular_backup != ''){
					?>
						
					 <div class="form_title">
					  <h3>
						<strong><i class="icon-cog-6"></i></strong> Business Continuity Procedures							
					  </h3>
      			 	</div>
					<?php
					}
					?>
					<?php
					if($questions->business_continuity_plan_input != '' || $questions->business_continuity_procedure_input != '' || $questions->regular_backup != '')
					{
					?>
				    <div class="step">
					<?php
					if($questions->business_continuity_plan_input != '')
					{
					?>
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>12a</b> Do you use security monitoring solutions for your Business Continuity?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				          <select class="form-control" name="business_continuity_plan" id="business_continuity_plan">
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($non_tech_detail->business_continuity_plan_input) && $non_tech_detail->business_continuity_plan_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($non_tech_detail->business_continuity_plan_input) && $non_tech_detail->business_continuity_plan_input == '0')?'selected':'')?>> No </option>
				          </select>
				       </div>
				        </div>
				      </div>
					  <?php
						}
						else if($questions->regular_backup != '')
						{
					  ?>
						  <div class="row" id="business_continuity_regular_backup">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label><b>12b</b> Does your business have regular backups?<a data-container="body" class="tooltiplink" title="Please tell us if you have Local or Remote backups or no backups at all." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_regular_backup">
								 <option disabled="" selected=""> choose an option</option>
								 <option  value="Local" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'Local')?'selected':'')?>> Local </option>
								 <option  value="Remote" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'Remote')?'selected':'')?>> Remote </option>
								 <option  value="None" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'None')?'selected':'')?>> None </option>
							  </select>
							</div>
						</div>
					</div>
					<?php
						}
						else if($questions->business_continuity_procedure_input != '')
						{
					  ?>

				      <div class="row"  id="business_continuity_procedures">
				        <div class="col-md-6 col-sm-6">
					       <div class="form-group">
					         <label class="not_required"><b>12c</b> Which Business Continuity Procedures do you use?<a data-container="body" class="tooltiplink" title="Please tell us if you use any business continuity procedures such as IDS (see above), IPS (see below) or Backups (see below). Intrusion Prevention System (IPS) is a network security/threat prevention technology that examines network traffic flows to detect and prevent vulnerability exploits. Vulnerability exploits usually come in the form of malicious inputs to a target application or service that attackers use to interrupt and gain control of an application or machine. Following a successful exploit, the attacker can disable the target application (resulting in a denial-of-service state), or can potentially access to all the rights and permissions available to the compromised application. Backups make copies of computer data to keep in case anything goes wrong with the original." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
					       </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_procedureszz[]" multiple="multiple">
								 <option disabled="" selected=""> choose an option</option>
								 <?php
								 	$explode_proceduress = explode(',',$non_tech_detail->business_continuity_procedure_input);
								 ?>
								 <option value="IDS" <?php echo ((in_array("IDS",$explode_proceduress))?'selected':'')?>> IDS </option>
								 <option value="IPS" <?php echo ((in_array("IPS",$explode_proceduress))?'selected':'')?>> IPS </option>
								 <option value="Backups" <?php echo ((in_array("Backups",$explode_proceduress))?'selected':'')?>> Backups </option>
								 <option value="None" <?php echo ((in_array("None",$explode_proceduress))?'selected':'')?>> None </option>
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
				  if($questions->training_cybersecurity_input != '')
				  {
				  ?>

				  <div class="form_title">
				      <h3>
				        <strong><i class="icon-certificate"></i></strong> Training
				      </h3>
				    </div>
					<?php
				  }
				    if($questions->training_cybersecurity_input != '')
				  {
					?>
				    <div class="step">
					<?php
					  if($questions->training_cybersecurity_input != '')
						{
					?>
						<div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>13</b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
							<select class="form-control" name="training_staff">
								 <option disabled="" selected=""> choose an option</option>
								 <option  value="Cyber security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Cyber security')?'selected':'')?>> Cyber security </option>
								 <option  value="Physical security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Physical security')?'selected':'')?>> Physical security </option>
								 <option  value="Cyber & Physical security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Cyber & Physical security')?'selected':'')?>> Cyber & Physical security </option>
								 <option  value="None"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'None')?'selected':'')?>> None </option>
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
					  if($questions->accreditation_security_standerd_input != '')
						{
					?>
					<div class="form_title">
				      <h3>
				        <strong><i class="icon-hammer"></i></strong> Accreditation/Regulation
				      </h3>
				    </div>
					<?php
						}

					?>
					<?php
					  if($questions->accreditation_security_standerd_input != '')
						{
					?>
			    	<div class="step">
						<?php
					  if($questions->accreditation_security_standerd_input != '')
						{
					?>
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>14</b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click<a href="https://staging.protectbox.com/" target="_blank"> here</a> for detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_iso_iec" data-dropup-auto="false">
						  	<option selected disabled> choose an option</option>
							<option value='CyberEssentials only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials only') ? 'selected' :'')?>>CyberEssentials only</option>
							<option value='CyberEssentials+ only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ only') ? 'selected' :'')?>>CyberEssentials+ only</option>
							<option value='GDPR only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR only') ? 'selected' :'')?>>GDPR only</option>
							<option value='PCI/DSS only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'PCI/DSS only') ? 'selected' :'')?>>PCI/DSS only</option>
							<option value='ISO only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'ISO only') ? 'selected' :'')?>>ISO only</option>
							<option value='NIST only'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'NIST only') ? 'selected' :'')?>>NIST only</option>
							<option value='CyberEssentials & GDPR'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR') ? 'selected' :'')?>>CyberEssentials & GDPR</option>
							<option value='CyberEssentials+ & GDPR'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ & GDPR') ? 'selected' :'')?>>CyberEssentials+ & GDPR</option>
							<option value='CyberEssentials & GDPR & PCI/DSS'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials & GDPR & PCI/DSS</option>
							<option value='CyberEssentials+ & GDPR & PCI/DSS'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials+ & GDPR & PCI/DSS</option>
							<option value='GDPR & PCI/DSS'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & PCI/DSS') ? 'selected' :'')?>>GDPR & PCI/DSS</option>
							<option value='GDPR & PCI/DSS & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & PCI/DSS & NIST') ? 'selected' :'')?>>GDPR & PCI/DSS & NIST</option>
							<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
							<option value='CyberEssentials+ & GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO & NIST</option>
							<option value='GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
							<option value='GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
							<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='GDPR & ISO'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
							<option value='GDPR & ISO & NIST'<?php echo((isset($non_tech_detail->aware_information_security_standard_input) && $non_tech_detail->aware_information_security_standard_input == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
				          </select>
				         </div>
				        </div>
				      </div>
					  <?php
						}
					  ?>
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
									$explode_trainingzz = explode(',',$non_tech_detail->cover_information_security_standard_input);
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
				      </div>
				      <div class="row" id="accreditation_regular_audit" style="display:none;">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label class="not_required">Do you have any IT governance policies?<a data-container="body" class="tooltiplink" title="These policies can include Information security policy, Asset Management, Human resources security, Physical & Environmental Security, Communications & Operations Management, Access Control, Information systems acquisition, development & maintenance, Information security incident management, Business Continuity Management & Compliance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_regular_audit">
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($non_tech_detail->it_governance_policy_input) && $non_tech_detail->it_governance_policy_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($non_tech_detail->it_governance_policy_input) && $non_tech_detail->it_governance_policy_input == '0')?'selected':'')?>> No </option>
				          </select>
				         </div>
				        </div>
				      </div>-->
				    </div>
					<?php
						}
					?>
					<?php
						 if($questions->adaquate_password_input != '')
						 {
					?>
					 <div class="form_title">
				      <h3>
				        <strong><i class="icon-lock"></i></strong> Passwords Policy
				      </h3>
				       </div>
					   <?php
						 }
							 if($questions->adaquate_password_input != '')
							 {
					   ?>
					    <div class="step">
						<?php
						if($questions->adaquate_password_input != '')
							 {
						?>
							<div class="row">
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label><b>15</b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide password strength checks on your customers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								 </div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								  <div class="form-group">
									  <select class="form-control" name="password_policy_rules">
										<option disabled="" selected=""> choose an option</option>
										<option  value="1" <?php echo ((isset($non_tech_detail->password_rules_input) && $non_tech_detail->password_rules_input == '1')?'selected':'')?>> Yes </option>
										<option  value="0" <?php echo ((isset($non_tech_detail->password_rules_input) && $non_tech_detail->password_rules_input == '0')?'selected':'')?>> No </option>
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
							if($questions->cyber_security_information_input != '' || $questions->cyber_insurence_input != '' || $questions->threat_detection_input != '' || $questions->cloud_storage != '')
							{
						?>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-user-md"></i></strong> Reputation Management
						</h3>
					  </div>
					  <?php
					  }
					  ?>
					  <?php
							if($questions->cyber_security_information_input != '' || $questions->cyber_insurence_input != ''  || $questions->threat_detection_input != ''  || $questions->cloud_storage != '')
							{
						?>
					  <div class="step">
					   <?php
							if($questions->cyber_security_information_input != '')
							{
						?>
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16a</b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_member_cisp">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
							}
						?>
						 <?php
							if($questions->cyber_insurence_input != '')
							{
						?>
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16b</b> Do you have cyber insurance?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you have taken out cyber insurance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cyber_insurance">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
							}
						?>
						 <?php
							if($questions->threat_detection_input != '')
							{
						?>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16c</b> Do you have threat detection and prevention solutions?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>   <a data-container="body" class="tooltiplink" title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_threat_detection">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
							}
						if($questions->cyber_security_information_input != '')
							{
						?>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16d</b> Do you use cloud data storage solutions?&nbsp; <a data-container="body" class="tooltiplink" title="Data storage solutions is the recording (storing) of information (data).Examples include Dropbox, OneDrive, Google Drive, Amazon Drive, Apple iCloud etc." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cloud_storage">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cloud_data_storage_solution_input) && $non_tech_detail->cloud_data_storage_solution_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cloud_data_storage_solution_input) && $non_tech_detail->cloud_data_storage_solution_input == '0')?'selected':'')?>> No </option>
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
							if($questions->device_management_input != '')
							{
						?>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-laptop"></i></strong> Devices
						</h3>
					  </div>
					  <?php
							}

					  ?>
					  	 <?php
							if($questions->device_management_input != '')
							{
						?>
					  <div class="step">
							 <?php
							if($questions->device_management_input != '')
							{
						?>
					  	<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>17</b> Do you have device management solutions on the devices issued to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  </label>
							    
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_mdm" id="device_mdm">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
							}
						?>
						<!--<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Do you issue devices to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide mobiles, laptops, tablets or combinations of these devices, to your employees" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_mdm" id="device_mdm">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="device_for_employees" style="display:none;">
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
					<?php
							}
					if($questions->vpn_home != '')
					{
					?>
					 <div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Remote working
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>18</b> Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely?&nbsp;<a data-container="body" class="tooltiplink" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remotezz" id="vpn_home_remote_deleted">
									<option disabled="" selected=""> choose an option</option>
									<option  value="VPN" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'VPN')?'selected':'')?>> VPN </option>
									<option  value="Web Proxy" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'Web Proxy')?'selected':'')?>> Web Proxy </option>
									<option  value="None" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'None')?'selected':'')?>> None </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="vpn_home_remote_from_company" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please tell us if employees ever work from home &/or access your company's systems & data remotely?&nbsp;<a data-container="body" class="tooltiplink" title="Do your employees use these devices remotely." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remote_from_companyzz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->employees_work_home_input) && $non_tech_detail->employees_work_home_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->employees_work_home_input) && $non_tech_detail->employees_work_home_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="vpn_have" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Do you have Virtual Private Networks (VPN) software?&nbsp; <a data-container="body" class="tooltiplink" title="Virtual Private Network (VPN) is the extension of a private network that encompasses links across shared or public networks like the Internet. With a VPN, you can send data between two computers across a shared or public network in a manner that emulates a point-to-point private link." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_havezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->vpn_software_input) && $non_tech_detail->vpn_software_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->vpn_software_input) && $non_tech_detail->vpn_software_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
					</div>

					<?php
					}
					if($questions->need_consultant_input != '')
						{
					?>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Consultancy/Implementation
						</h3>
					  </div>
					  <?php
							}
					  ?>
					  	 <?php
							if($questions->need_consultant_input != '')
							{
						?>
					  <div class="step">
					   <?php
							if($questions->need_consultant_input != '')
							{
						?>
					  			<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>19</b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  </label>
							  
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_cyber_consultantzz" id="consultancy_cyber_consultant_deleted">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<?php
							}
						?>
						<!--<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Do you have a cyber consultant?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_cyber_consultantzz" id="consultancy_cyber_consultant">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="consultancy_consultant_help" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Would you need a consultant to help with implementation only, if you don't already have one?&nbsp;<a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_consultant_helpzz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->need_consultant_input) && $non_tech_detail->need_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->need_consultant_input) && $non_tech_detail->need_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>-->
						<?php
							}
					?>
						 <div class="col-md-12 text-right" style="margin-top:-19px;">
							<button name="save_return" type="submit" value="return" class="btn btn-warning btn-medium logout">Save and Return</button>
						
						    <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium continue">Save and Continue</button>
						    <input type="hidden" id="btn_val" name="sub_val" value="">
						</div>
					</div>
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
			  </form>
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
	<script>
	/* Business continuity Procedures */
		$( document ).ready(function() {
		    $("#business_continuity_plan").change(function(){
			    if( $(this).val()==="1"){
					$("#business_continuity_procedures").show()
					$("#business_continuity_regular_backup").show()
				} else{
					$("#business_continuity_procedures").hide()
					$("#business_continuity_regular_backup").show()
				}
			});
			if( $("#business_continuity_plan").val()==="1"){
					$("#business_continuity_procedures").show()
					$("#business_continuity_regular_backup").show()
				} else{
					$("#business_continuity_procedures").hide()
					$("#business_continuity_regular_backup").show()
				}
		});
	/* Information Security standards */
	$( document ).ready(function() {
	    $("#accreditation_iso_iec").change(function(){
			if( $(this).val()==="1"){
				$("#training_iss").show()
				$("#accreditation_regular_audit").show()
			} else{
				$("#training_iss").hide()
				$("#accreditation_regular_audit").hide()
			}
		});
		if( $("#accreditation_iso_iec").val()==="1"){
				$("#training_iss").show()
				$("#accreditation_regular_audit").show()
			} else{
				$("#training_iss").hide()
				$("#accreditation_regular_audit").hide()
			}
		});
	/* devices to your employees */
	$( document ).ready(function() {
	    $("#device_mdm").change(function(){
			if( $(this).val()==="1"){
				$("#device_for_employees").show()
				$("#device_policy_software").show()
				$("#device_have").show()
			} else{
				$("#device_for_employees").hide()
				$("#device_policy_software").hide()
				$("#device_have").hide()
			}
		});
		if( $("#device_mdm").val()==="1"){
				$("#device_for_employees").show()
				$("#device_policy_software").show()
				$("#device_have").show()
			} else{
				$("#device_for_employees").hide()
				$("#device_policy_software").hide()
				$("#device_have").hide()
			}
		});
	/* devices remotely */
	$( document ).ready(function() {
	    $("#vpn_home_remote").change(function(){
			if( $(this).val()==="1"){
				$("#vpn_home_remote_from_company").show()
				$("#vpn_have").show()
			} else{
				$("#vpn_home_remote_from_company").hide()
				$("#vpn_have").hide()
			}
		});
		if( $("#vpn_home_remote").val()==="1"){
				$("#vpn_home_remote_from_company").show()
				$("#vpn_have").show()
			} else{
				$("#vpn_home_remote_from_company").hide()
				$("#vpn_have").hide()
			}
		});
	/* Consultancy/Implementation */
	$( document ).ready(function() {
	    $("#consultancy_cyber_consultant").change(function(){
			if( $(this).val()==="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
		});
		if( $("#consultancy_cyber_consultant").val()==="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
		});
	</script>
    <!-- Specific scripts -->
    <script src="js/jquery.validate.js"></script>
	<script>
	$(function() {
	  $("form[name='questionaire_non_tech']").validate({
		rules: {
		  business_continuity_plan: "required",
		  training_staff : "required",
		  accreditation_iso_iec : "required",
		  password_policy_rules : "required",
		  reputation_management_member_cisp : "required",
		  reputation_management_threat_detection : "required",
		  reputation_management_cyber_insurance : "required",
		  device_mdm : "required",
		  vpn_home_remote : "required",
		  consultancy_cyber_consultantzz : "required"
		},
		messages: {
		  business_continuity_plan: "This field is required",
		  training_staff : "This field is required",
		  accreditation_iso_iec : "This field is required",
		  password_policy_rules : "This field is required",
		  reputation_management_member_cisp : "This field is required",
		  reputation_management_threat_detection : "This field is required",
		  reputation_management_cyber_insurance : "This field is required",
		  device_mdm : "This field is required",
		  vpn_home_remote : "This field is required",
		  consultancy_cyber_consultantzz : "This field is required"
		  
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
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
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>

