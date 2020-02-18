<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Delegate | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">

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
.account_info
{
	border:3px solid #000;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
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
color: black;
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
        <div class="main_title other_title" >
          Edit Delegate
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->
				<div class="alert alert-success" id="success_div" style="display:none;"> <strong>you have succesfully assign this question to delegate user!</strong> </div>
				<?php
					if($this->session->flashdata('success_status')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success_status');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('success_basic')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success_basic');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_delete')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_delete');?></strong> </div>
				<?php
					}
				?>
				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
						
					<form name="questionaire" method="POST" action="<?php echo base_url('');?>">
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-user"></i></strong>Settings
						</h3>
					  </div>
					  <div class="step">
						   <div class="row">
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Full Name</label> : <label  class="not_required"><?php echo ucfirst($get_del_info->firstname);?>&nbsp;<?php echo ucfirst($get_del_info->lastname);?></label>
								   </div>
							   </div>
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Email</label> : <label  class="not_required"><?php echo $get_del_info->email;?></label>
								   </div>
							   </div>
						   </div>
						   <div class="row">
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Phone</label> : <label  class="not_required"><?php echo $get_del_info->phone;?></label>
								   </div>
							   </div>
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Registration Date</label> : <label  class="not_required"><?php echo date('d/m/Y',$get_del_info->date);?></label>
								   </div>
							   </div>
						  </div>
						  <div class="row">
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Page Access</label> : 
									<?php 
										$ci =&get_instance();
										$ci->load->model('manage_delegates_m');
										$get_basic = $ci->manage_delegates_m->get_basic($this->uri->segment(2),$this->session->userdata['logged_in']['user_id']);
										if(!empty($get_basic)){
											if($get_basic->industry_input != '' || $get_basic->employees_input != '' || $get_basic->location_input != '' || $get_basic->handle_data_input != ''){
												echo "<code>Basics</code>";
												echo "&nbsp;";
											}
										}
										$get_tech = $ci->manage_delegates_m->get_tech($this->uri->segment(2),$this->session->userdata['logged_in']['user_id']);
										if(!empty($get_tech)){
											if($get_tech->os_input != '' || $get_tech->antivirus_input != '' || $get_tech->firewall_input != '' || $get_tech->manage_it_input != '' || $get_tech->internet_input != '' || $get_tech->internet_option_input != '' || $get_tech->wifi_option_input != '' || $get_tech->wpa2_input != '' || $get_tech->browser_input != '' || $get_tech->update_browser_input != '' || $get_tech->email_input != '' || $get_tech->spam_filtering_input != '' || $get_tech->ad_blocking_input != '' || $get_tech->web_hosting_input != '' || $get_tech->web_hosting_option_input != '' || $get_tech->hacking_input != '' || $get_tech->logs_input != '' || $get_tech->software_update_input != '' || $get_tech->data_encrypt_input != '' || $get_tech->system_access_input != '' || $get_tech->directory_service_input != '' || $get_tech->two_factor_authentication_input != '' || $get_tech->premises_input != '' || $get_tech->public_key_infrastructure_input != '' || $get_tech->email_input_score != '' || $get_tech->managed_msp_input != '' ){
												echo "<code>Technical</code>";
												echo "&nbsp;";
											}
										}
										$get_nontech = $ci->manage_delegates_m->get_nontech($this->uri->segment(2),$this->session->userdata['logged_in']['user_id']);
										if(!empty($get_nontech)){
											if($get_nontech->business_continuity_plan_input != '' || $get_nontech->business_continuity_procedure_input != '' || $get_nontech->regular_backup != '' || $get_nontech->training_cybersecurity_input != '' || $get_nontech->accreditation_security_standerd_input != '' || $get_nontech->adaquate_password_input != '' || $get_nontech->adaquate_password_input != '' || $get_nontech->cyber_security_information_input != '' || $get_nontech->cyber_insurence_input != '' || $get_nontech->threat_detection_input != '' || $get_nontech->cloud_storage != '' || $get_nontech->device_management_input != '' || $get_nontech->vpn_home != '' || $get_nontech->need_consultant_input != '' ){
												echo "<code>Non-Technical</code>";
												echo "&nbsp;";
											}
										}

										$get_budget = $ci->manage_delegates_m->get_budget($this->uri->segment(2),$this->session->userdata['logged_in']['user_id']);
										if(!empty($get_budget)){
											if($get_budget->amount_cybersecurity_input != '' || $get_budget->percentage_annual_budget_input != '' || $get_budget->budget_cybersecurity_per_year_input != '' || $get_budget->other_payment != '' || $get_budget->budget_breakdown != '' ){
												echo "<code>Budget</code>";
											}
										}
									?>
								   </div>
							   </div>
							   <?php
							    $ci =&get_instance();
								$ci->load->model('manage_delegates_m');
								$get_access = $ci->manage_delegates_m->get_access($get_del_info->email,$this->session->userdata['logged_in']['user_id']);
								?>
							   <div class="col-md-6">
								   <div class="form-group">
									<label>Status</label> : <label  class="not_required"><?php echo ucfirst($get_access->status);?></label>
								   </div>
							   </div>
						  </div>
						  <div class="col-md-12 text-center" style="padding:10px;">
								  <a class="btn btn-success btn-medium" href="<?php echo base_url("edit_delegate/change_status");?>/<?php echo $this->uri->segment(2);?>">Change status</a>
								
								  <a class="btn btn-danger btn-medium" href="<?php echo base_url("edit_delegate/delete_del");?>/<?php echo $this->uri->segment(2);?>">Delete this delegate</a>
							</div>
					  </div>
					  
				  </form>
				</div>
				</div>


				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
					
					<form name="questionaire" method="POST" action="<?php echo base_url('edit_delegate/remove_basic');?>/<?php echo $this->uri->segment(2);?>">
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-info"></i></strong>Basics - Questionnaire 
						</h3>
					  </div>
					  <?php 
					    if($get_basic->industry_input == '' && $get_basic->employees_input == '' && $get_basic->location_input == '' && $get_basic->handle_data_input == '')
						{
					   ?>
					   <div class="step">
					   	<div class="row">
						  <div class="col-md-12">
							<div class="form-group">
								  <h4>No questions to show!</h4>
							 </div>
						  </div>
						</div>
					   </div>
					  <?php
						}
						if($get_basic->industry_input != '' || $get_basic->employees_input != '' || $get_basic->location_input != '' || $get_basic->handle_data_input != '')
						{
						?>
					  <div class="step">
					  	<?php
					  	if($get_basic->industry_input != '')
					  	{
					  	?>
						 <div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>What industry are you in?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="industry_input" name="get_basic" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
					    }
					    if($get_basic->employees_input != '')
					    {
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>How many employees do you have?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="employees_input" name="get_basic" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						}
						if($get_basic->location_input != '')
					    {
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Where are you located?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="location_input" name="get_basic" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						}
						if($get_basic->handle_data_input != '')
					    {
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you handle or manage personal or financial data or information for others <br/>(e.g. your supply chain or customers)?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="handle_data_input" name="get_basic" class="btn btn-danger btn-medium">Remove question</button>
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
					  </form>
					  
					
					  <form name="questionaire" method="POST" action="<?php echo base_url('edit_delegate/remove_tech');?>/<?php echo $this->uri->segment(2);?>">
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-wrench"></i></strong>Technical Info - Questionnaire
						</h3>
					  </div>
					  <?php 
					    if($get_tech->os_input == '' && $get_tech->antivirus_input == '' && $get_tech->firewall_input == '' && $get_tech->manage_it_input == '' && $get_tech->internet_input == '' && $get_tech->internet_option_input == '' && $get_tech->hacking_input == '' && $get_tech->system_access_input == '' && $get_tech->directory_service_input == '' && $get_tech->two_factor_authentication_input == '' && $get_tech->premises_input == '' && $get_tech->public_key_infrastructure_input == '' && $get_tech->email_input_score == '' && $get_tech->managed_msp_input == '')
						{
					   ?>
					   <div class="step">
					   	<div class="row">
						  <div class="col-md-12">
							<div class="form-group">
								  <h4>No questions to show!</h4>
							 </div>
						  </div>
						</div>
					   </div>
					  <?php
						}
						  if($get_tech->os_input != '' || $get_tech->antivirus_input != '' || $get_tech->firewall_input != '' || $get_tech->manage_it_input != '' || $get_tech->internet_input != '' || $get_tech->internet_option_input != '' || $get_tech->hacking_input != '' || $get_tech->system_access_input != '' || $get_tech->directory_service_input != '' || $get_tech->two_factor_authentication_input != '' || $get_tech->premises_input != '' || $get_tech->public_key_infrastructure_input != '' || $get_tech->email_input_score != '' || $get_tech->managed_msp_input != '')
						{
						?>
					  <div class="step">
					  <?php
					  if($get_tech->os_input != ''){
					  ?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>What Operating System do you use?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="os_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
					  <?php
					   }
					   if($get_tech->antivirus_input != ''){
					  ?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you have an antivirus product installed?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="antivirus_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->firewall_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you have more than basic system firewall?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="firewall_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->manage_it_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Who manages your IT?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="manage_it_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->internet_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you have internet?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="internet_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->internet_option_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you have WiFi or LAN?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="internet_option_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->hacking_input != ''){
						?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label>Do you know what hacking is?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="hacking_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->system_access_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Do you provide differing levels of access to your systems?<br/>E.g. Administrator access, user access.</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="system_access_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->directory_service_input != ''){
						?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label>Do you use Open Directory or Active Directory service?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="directory_service_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->two_factor_authentication_input != ''){
						?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label>Do you use Two factor authentication?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="two_factor_authentication_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->premises_input != ''){
						?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label>Do you secure your premises from a physical point of view?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="premises_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->public_key_infrastructure_input != ''){
						?>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label>If your business involves, sensitive data rich activities such as e-commerce, internet banking or confidential email etc,do you encrypt your data by using public key infrastructure (PKI) to manage your digital signatures and wifi certificates?</label>
							 </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="public_key_infrastructure_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_tech->email_input_score != ''){
						?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label>Do you have email security?</label>
								 </div>
							  </div>

							  <div class="col-md-6">
								<div class="form-group">
									<button type="submit" value="email_input_score" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
								</div>
							  </div>
						</div>
						<?php
						  }
						  if($get_tech->managed_msp_input != ''){
						?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label>Would you use a managed service provider (MSP), if you don't have a MSP?</label>
								 </div>
							  </div>

							  <div class="col-md-6">
								<div class="form-group">
									<button type="submit" value="managed_msp_input" name="get_tech" class="btn btn-danger btn-medium">Remove question</button>
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
					 </form>
					 
				  <form name="questionaire" method="POST" action="<?php echo base_url('edit_delegate/remove_non_tech');?>/<?php echo $this->uri->segment(2);?>">
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-book"></i></strong>Non-Technical Info - Questionnaire
					</h3>
				  </div>
				  <?php 
					if($get_non_tech->business_continuity_plan_input == '' && $get_non_tech->regular_backup == '' && $get_non_tech->training_cybersecurity_input == '' && $get_non_tech->accreditation_security_standerd_input == '' && $get_non_tech->adaquate_password_input == '' && $get_non_tech->cyber_security_information_input == '' && $get_non_tech->cyber_insurence_input == '' && $get_non_tech->threat_detection_input == '' && $get_non_tech->cloud_storage == '' && $get_non_tech->device_management_input == '' && $get_non_tech->vpn_home == '' && $get_non_tech->need_consultant_input == '')
					{
				   ?>
				   <div class="step">
					<div class="row">
					  <div class="col-md-12">
						<div class="form-group">
							  <h4>No questions to show!</h4>
						 </div>
					  </div>
					</div>
				   </div>
				  <?php
					}
					if($get_non_tech->business_continuity_plan_input != '' || $get_non_tech->regular_backup != '' || $get_non_tech->training_cybersecurity_input != '' || $get_non_tech->accreditation_security_standerd_input != '' || $get_non_tech->adaquate_password_input != '' || $get_non_tech->cyber_security_information_input != '' || $get_non_tech->cyber_insurence_input != '' || $get_non_tech->threat_detection_input != '' || $get_non_tech->cloud_storage != '' || $get_non_tech->device_management_input != '' || $get_non_tech->vpn_home != '' || $get_non_tech->need_consultant_input != '')
					{
					 ?>
				  <div class="step">
					  <?php
					  if($get_non_tech->business_continuity_plan_input != ''){
					  ?>
					  <div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you use security monitoring solutions for your Business Continuity?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="business_continuity_plan_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->regular_backup != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Does your business have regular backups?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="regular_backup" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->training_cybersecurity_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="training_cybersecurity_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->accreditation_security_standerd_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Which Information Security Standards are relevant to you that you don't have?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="accreditation_security_standerd_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->adaquate_password_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you implement simple but adequate password rules that encourage customers to have long, random passwords?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="adaquate_password_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->cyber_security_information_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Are you a member of Cyber Security Information Sharing Partnership (CiSP)?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="cyber_security_information_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->cyber_insurence_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you have cyber insurance?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="cyber_insurence_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->threat_detection_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you have threat detection and prevention solutions?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="threat_detection_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->cloud_storage != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you use cloud data storage solutions?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="cloud_storage" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->device_management_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you have device management solutions on the devices issued to your employees?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="device_management_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->vpn_home != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="vpn_home" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
							</div>
						  </div>
						</div>
						<?php
						  }
						  if($get_non_tech->need_consultant_input != ''){
						?>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								  <label>Do you need a cyber consultant to help with implementation, if you don't already have one?</label>
							 </div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
								<button type="submit" value="need_consultant_input" name="get_non_tech" class="btn btn-danger btn-medium">Remove question</button>
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
				  </form>
				  
				  <form name="questionaire" method="POST" action="<?php echo base_url('edit_delegate/remove_budget');?>/<?php echo $this->uri->segment(2);?>">
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-money"></i></strong>Budget - Questionnaire
					</h3>
				  </div>
				  <?php 
					if($get_budget->amount_cybersecurity_input == '' && $get_budget->percentage_annual_budget_input == '' && $get_budget->budget_cybersecurity_per_year_input == '' && $get_budget->other_payment == '' && $get_budget->budget_breakdown == '')
					{
				   ?>
				   <div class="step">
					<div class="row">
					  <div class="col-md-12">
						<div class="form-group">
							  <h4>No questions to show!</h4>
						 </div>
					  </div>
					</div>
				   </div>
				  <?php
					}
					if($get_budget->amount_cybersecurity_input != '' || $get_budget->percentage_annual_budget_input != '' || $get_budget->budget_cybersecurity_per_year_input != '' || $get_budget->other_payment != '' || $get_budget->budget_breakdown != '')
					{
				  ?>
				  <div class="step">
				   <?php
					if($get_budget->amount_cybersecurity_input != '')
					{
				   ?>
				  	<div class="row">
					  <div class="col-md-6">
						<div class="form-group">
						  <label>What amount did you spend on cybersecurity annually?</label>
						 </div>
					  </div>

					  <div class="col-md-6">
						<div class="form-group">
							<button type="submit" value="amount_cybersecurity_input" name="get_budget" class="btn btn-danger btn-medium">Remove question</button>
						</div>
					  </div>
					</div>
					<?php
					}
					if($get_budget->percentage_annual_budget_input != '')
					{
				   ?>
					<div class="row">
					  <div class="col-md-6">
						<div class="form-group">
						  <label>What percentage of your annual budget is that?</label>
						 </div>
					  </div>

					  <div class="col-md-6">
						<div class="form-group">
							<button type="submit" value="percentage_annual_budget_input" name="get_budget" class="btn btn-danger btn-medium">Remove question</button>
						</div>
					  </div>
					</div>
					<?php
					}
					if($get_budget->budget_cybersecurity_per_year_input != '')
					{
				   ?>
					<div class="row">
					  <div class="col-md-6">
						<div class="form-group">
						  <label>What is your budget for Cyber Security per year?</label>
						 </div>
					  </div>

					  <div class="col-md-6">
						<div class="form-group">
							<button type="submit" value="budget_cybersecurity_per_year_input" name="get_budget" class="btn btn-danger btn-medium">Remove question</button>
						</div>
					  </div>
					</div>
					<?php
					}
					if($get_budget->other_payment != '')
					{
				    ?>
					<div class="row">
					  <div class="col-md-6">
						<div class="form-group">
						  <label>How else should it be paid for?</label>
						 </div>
					  </div>

					  <div class="col-md-6">
						<div class="form-group">
							<button type="submit" value="other_payment" name="get_budget" class="btn btn-danger btn-medium">Remove question</button>
						</div>
					  </div>
					</div>
					<?php
					}
					if($get_budget->budget_breakdown != '')
					{
				    ?>
					<div class="row">
					  <div class="col-md-6">
						<div class="form-group">
						  <label>Do you have a preferred budget breakdown?</label>
						 </div>
					  </div>

					  <div class="col-md-6">
						<div class="form-group">
							<button type="submit" value="budget_breakdown" name="get_budget" class="btn btn-danger btn-medium">Remove question</button>
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
	


<SCRIPT> 	
	function show(select_item) {
	    if (select_item == "3rd party located in same building / facilities managed") {
		    hiddenDiv.style.visibility='visible';
			hiddenDiv.style.display='block';
			Form.fileURL.focus();
		} 
		else{
			hiddenDiv.style.visibility='hidden';
			hiddenDiv.style.display='none';
		}
	}	
</SCRIPT> 


	 <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
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
