<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Your Budget Questionnaire | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
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
.another_header
{
background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);"
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
					<div class="alert alert-danger"><strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('update')){
				?>
				<div class="alert alert-success"><strong><?php echo $this->session->flashdata('update');?></strong></div>
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
					?>
					<li class="active arrow"><a href="<?php echo base_url('delegate_questionaire_budget/');?><?php echo $this->uri->segment(2);?>"  class="red-gradient">Budget</a></li>
					
				</ul>
				
				<div class="tab-content rounded_div">
				<?php
						if($questions->amount_cybersecurity_input != '' || $questions->percentage_annual_budget_input != '' || $questions->budget_cybersecurity_per_year_input != '' || $questions->other_payment != '' || $questions->budget_breakdown != '')
						{
					?>
					<div class="tab-pane active" id="home">
		
					</div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane" id="profile">
					</div>
<!-----------------------------------------------------------Step 3---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="messages">
					
					<div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> All questions with an asterisk <span style="color:#ec8b0d;font-size:22px;margin-top:10px;">*</span> must be answered.</p>
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> Click on  <a data-container="body"  href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> for more info. </p>
								</div>
							</div>
						</div>
		
					<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
						</div>
					<form method="POST" name="questionaire" action="<?php echo base_url('');?>delegate_questionaire_budget/add_questioniare_budget/<?php echo $this->uri->segment(2);?>">
					<?php
						if($questions->amount_cybersecurity_input != '' || $questions->percentage_annual_budget_input != '' || $questions->budget_cybersecurity_per_year_input != '' || $questions->other_payment != '')
						{
					?>
						<div class="form_title">
							<h3>
							<strong><i class="icon-briefcase"></i></strong> Your Budget
							</h3>
						</div>
					  <?php
						}
					  ?>
					  <?php
						if($questions->amount_cybersecurity_input != '' || $questions->percentage_annual_budget_input != '' || $questions->budget_cybersecurity_per_year_input != '' || $questions->other_payment != '')
						{
					?>
					  <div class="step">
					    <?php
						if($questions->amount_cybersecurity_input != '')
						{
					?>
						  <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20a</b> What amount did you spend on cybersecurity annually?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
							  <a data-container="body" title="Please select from one of the five categories the amount you spend on cybersecurity products." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_cyber_security" >
								<option  disabled="" selected="">choose an option</option>
								<option  value="Under £100" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "Under £100")?'selected':'');?>>Under £100</option>
								<option  value="£100-500" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£100-500")?'selected':'')?>>£100-500</option>
								<option  value="£500-1,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£500-1,000")?'selected':'')?>>£500-1,000</option>
								<option  value="£1,000-5,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£1,000-5,000")?'selected':'')?>>£1,000-5,000</option>
								<option  value="£5,000-10,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£5,000-10,000")?'selected':'')?>>£5,000-10,000</option>
								<option  value="£10,000+" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£10,000+")?'selected':'')?>>£10,000+</option>
							  </select>
							</div>
						  </div>
						</div>
						<?php
						}
						?>
						<?php
							if($questions->percentage_annual_budget_input != '')
							{
						?>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20b</b> What percentage of your annual budget is that?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Could you tell us what % of your IT budget this amounted to." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_annual">
								<option disabled="" selected="">choose an option</option>
								<option  value="Under 25%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "Under 25%")?'selected':'')?>>Under 25%</option>
								<option  value="25-50%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "25-50%")?'selected':'')?>>25-50%</option>
								<option  value="50-75%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "50-75%")?'selected':'')?>>50-75%</option>
								<option  value="75%+" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "75%+")?'selected':'')?>>75%+</option>
							  </select>
							</div>
						  </div>
						</div>
						<?php
							}
						?>
						<?php
							if($questions->budget_cybersecurity_per_year_input != '')
							{
						?>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20c</b> What is your budget for Cyber Security per year?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us how much you intend to spend on security services each year." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
								<?php
									if(isset($budget_detail->budget_cybersecurity_per_year_input) && $budget_detail->budget_cybersecurity_per_year_input != ''){
								?>
							  <input type="text" name="budget_per_year" class="form-control" value="<?php echo $budget_detail->budget_cybersecurity_per_year_input;?>">
							  <?php
								}else{
							  ?>
							   <input type="text" name="budget_per_year" class="form-control">
							   <?php
									}
							   ?>
							</div>
						  </div>
						</div>
						<?php
							}
							if($questions->other_payment != '')
							{
						?>
							<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20d</b> How else should it be paid for?<a data-container="body" class="tooltiplink" title="Please tell us if it should be paid for through cyber protection subsidise, Government funding (training, vouchers, etc.) or some other mechanism." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  </label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<select name="budget_paid[]" class="form-control" multiple="multiple">
										<?php 
											$explode_budgets = explode(',',$budget_detail->paid_for_input);
								        ?>
									        <option disabled="" selected="">Press ctrl for multiple selections</option>
									        <option value="Sellers of cyber protection subsidise" <?php echo ((in_array("Sellers of cyber protection subsidise",$explode_budgets))?'selected':'')?>>Sellers of cyber protection subsidise</option>
									        <option value="Government" <?php echo ((in_array("Government",$explode_budgets))?'selected':'')?>>Government funding (training,vouchers,etc.)</option>
									        <option value="other" <?php echo ((in_array("other",$explode_budgets))?'selected':'')?>>other</option>
									 </select>
								</div>	
							  </div>
							</div>
						</div>
					  </div>
					  <?php
							}
					  ?>
		
					 </div>
					 <?php
						}
						if($questions->budget_breakdown != '')
						{
					 ?>
						<div class="form_title">
							<h3>
							  <strong><i class="icon-users"></i></strong>Do you have a preferred budget breakdown?
							</h3>
						  </div>
						 <div class="step">
						<div class="row">
						  <div class="col-md-12">
							<table class="table">
								<thead>
								  <tr>
									<th colspan="5"> <b>21</b> Budget Component</th>
									<th>Amount in</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td colspan="5">Currency</td>
									<td>
										<select name="currency" class="selectpicker form-control" data-live-search="true" style="width:90%;">
										<option disabled="" selected="" <?php echo((isset($budget_detail->preferred_budget_breakdown_currency_input) && $budget_detail->preferred_budget_breakdown_currency_input != "") ? '' :'selected')?>>Please select</option>
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" <?php echo((isset($budget_detail->preferred_budget_breakdown_currency_input) && $budget_detail->preferred_budget_breakdown_currency_input == $all_currency->code) ? 'selected' :'')?>><?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?></option>
										<?php
											}
										?>
									</select>
									</td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5" >Operating System</td>
									<td>
										<?php
											if(isset($budget_detail->tech_operating_system_input) && $budget_detail->tech_operating_system_input != ''){
										?>
										  <input  type="text" name="tech_os" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_operating_system_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_os" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Internet</td>
									<td>
										<?php
											if(isset($budget_detail->tech_internet_input) && $budget_detail->tech_internet_input != ''){
										?>
										  <input  type="text" name="tech_internet" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_internet_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_internet" class="form-control" style="width:90%;">
										<?php
											}
									    ?>										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Antivirus</td>
									<td>
										<?php
											if(isset($budget_detail->tech_antivirus_input) && $budget_detail->tech_antivirus_input != ''){
										?>
										  <input  type="text" name="tech_antivirus" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_antivirus_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_antivirus" class="form-control" style="width:90%;">
										<?php
											}
									    ?>										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Firewall</td>
									<td>
										<?php
											if(isset($budget_detail->tech_firewall_input) && $budget_detail->tech_firewall_input != ''){
										?>
										  <input  type="text" name="tech_firewall" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_firewall_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_firewall" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Access Control</td>
									<td>
										<?php
											if(isset($budget_detail->tech_access_control_input) && $budget_detail->tech_access_control_input != ''){
										?>
										  <input  type="text" name="tech_access_control" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_access_control_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_access_control" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Protecting your data</td>
									<td>
										<?php
											if(isset($budget_detail->tech_protecting_data_input) && $budget_detail->tech_protecting_data_input != ''){
										?>
										  <input  type="text" name="tech_protect_data" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_protecting_data_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_protect_data" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Managed Service Solution Providers (MSSPs)</td>
									<td>
										<?php
											if(isset($budget_detail->tech_mssp_input) && $budget_detail->tech_mssp_input != ''){
										?>
										 <input  type="text" name="tech_mssp" class="form-control" style="width:90%;" value="<?php echo $budget_detail->tech_mssp_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_mssp" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Non-Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5">Business Continuity Procedures</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_business_continuity_input) && $budget_detail->non_tech_business_continuity_input != ''){
										?>
										 <input  type="text" name="ntech_continuity_procedure" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_business_continuity_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_continuity_procedure" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Training</td> 
									<td>
										<?php
											if(isset($budget_detail->non_tech_training_input) && $budget_detail->non_tech_training_input != ''){
										?>
										 <input  type="text" name="ntech_training" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_training_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_training" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Accreditation/Regulation</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_accredation_input) && $budget_detail->non_tech_accredation_input != ''){
										?>
										 <input  type="text" name="ntech_regulation" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_accredation_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_regulation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Reputation Management</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_reputation_management_input) && $budget_detail->non_tech_reputation_management_input != ''){
										?>
										 <input  type="text" name="ntech_reputation" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_reputation_management_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_reputation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Passwords policy</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_password_policy_input) && $budget_detail->non_tech_password_policy_input != ''){
										?>
										<input  type="text" name="ntech_pass_policy" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_password_policy_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_pass_policy" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Devices</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_devices_input) && $budget_detail->non_tech_devices_input != ''){
										?>
										<input  type="text" name="ntech_devices" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_devices_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_devices" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Remote working/Virtual Private Networks (VPN)</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_vpn_input) && $budget_detail->non_tech_vpn_input != ''){
										?>
										<input  type="text" name="ntech_vpn" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_vpn_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_vpn" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Consultancy/Implementation</td>
									<td>
										<?php
											if(isset($budget_detail->non_tech_consultancy_input) && $budget_detail->non_tech_consultancy_input != ''){
										?>
										<input  type="text" name="ntech_implementation" class="form-control" style="width:90%;" value="<?php echo $budget_detail->non_tech_consultancy_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_implementation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
										
									</td>
								  </tr>
								</tbody>
							</table>
						  </div>
						</div>
						
						 
						</div>
					  </div>
					  <?php
						}
					  ?>
					  <div class="col-md-12 text-right" style="padding:10px;margin-top:-40px;">
						  <button name="save_return" type="submit" value="return" class="btn btn-warning btn-medium logout">Save and Return</button>
						
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium continue">Save and Continue</button>
						  <input type="hidden" id="btn_val" name="sub_val" value="">
					</div>
					  </form>
					  <?php
					}else{
					  ?>
						  <div class="tab-pane active" id="messages">
						  <div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
								</div>
							</div>
						</div>
						</div>
						<?php
						  }
						  ?>
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
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
	<script>
	$(function() {
	  $("form[name='questionaire']").validate({
		rules: {
		  budget_cyber_security: "required",
		  budget_annual: "required",
		  budget_per_year : "required",
		},
		messages: {
		  budget_cyber_security: "This field is required",
		  budget_annual: "This field is required",
		  budget_per_year : "This field is required",  
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
