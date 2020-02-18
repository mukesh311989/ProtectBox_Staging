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
.account_info
{
	border:3px solid #000;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
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
.btn-previous{
	color: #fff;
    background-color: #808080;
    border-color: #808080;
}
.btn-previous:hover {
  color: #fff;
  background-color: #5b5b5b;
  border-color: #5b5b5b;
}
.reset_onchange{
	width: 200px !important;
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
				<div class="alert alert-success" id="success_div" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account - Delegates" in top right hand corner.</strong> </div>
				<?php
					if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_first_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_has')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_has');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_first_success')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_failed')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_failed');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_admin')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_admin');?></strong> </div>
				<?php
					}
				?>
				<ul class="nav nav-tabs " id="myDIV" style="margin-bottom:10px;">
					<li class="arrow_success"><a href="<?php echo base_url('questionaire');?>"   class="red-gradient_success">Basics</a></li>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_tech_info');?>" class="red-gradient_success">Technical Info</a></li>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_nontech_info');?>" class="red-gradient_success">Non-Technical Info</a></li>
					<li class="active arrow"><a href="<?php echo base_url('questionaire_budget');?>"  class="red-gradient">Budget</a></li>
					
				</ul>
				
				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
		
					</div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane" id="profile">
					</div>
<!-----------------------------------------------------------Step 3---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="messages">
					 <div style="" class="account_info">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>Click "Account" button in top right corner to change your details (Settings), see your purchases (Orders) or to come back to your saved answers before your first purchase (Questionnaire).</p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>You must answer each section (Basics, Technical Info etc) COMPLETELY to save your answers. You can press the <img src="<?php echo base_url('images/');?>skip.png" style="height:30px;"> button (in the bottom right of the page) if you have asked delegates to answer questions on a tab & are waiting for them to reply. This will take you to the next tab of questions. But your delegate will need to provide their answers before you can see the bundles in our Results. You can send reminder emails to your delegates, delete or re-assign delegates, from the "Delegates" menu, found by clicking the "Account" button in top right corner.</p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>After you've bought from us once, you can buy a monthly subscription to store your answers to buy add-ons as many times as you'd like.</p>
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
									<!-- <?php   
									$ci =&get_instance();
									$ci->load->model('questionaire_tech_info_m');
									$check_delegate = $ci->questionaire_tech_info_m->get_sme($this->session->userdata['logged_in']['user_id']);
									if($check_delegate->delegate_status == 1)
									{
									?>
									<div class="col-md-8">
										<p style="color:#808080;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> to ask delegate user to answer this question. </p>
									</div>
									<?php
									}
									?>
									<div class="col-md-8">
										<p style="color:#808080;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> to ask delegate user to answer this question. </p>
									</div> -->
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> If you still have further questions (after reading our green info icons, please use our chat function, in bottom right corner, in blue.</p>
								</div>
								<div class="col-md-12">
									<p style="color:#808080;font-size:13px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> (next to each question) to ask delegate user to answer this question. You can also add a new delegate user by clicking this button.&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-previous" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div>
								<!-- <div class="col-md-12">
									<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div> -->

								<div class="col-md-12 text-center">
								<form action="<?php echo base_url("questionaire_budget/add_delegate");?>" method="post" class="delegate_modal" enctype="multipart/form-data">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Add Delegate User</h5>
									  </div>
									  <div class="modal-body">
										<div class="form-group">
											<label for="exampleFormControlTextarea1" style="font-weight:normal;float:left">Delegate User's Email</label>
											<input type class="form-control" type="email" name="delegate_mail" required>
										  </div>
									    </div>
									    <div class="modal-footer">
										  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										  <button type="submit" class="btn btn-warning">Send Invitation</button>
									    </div>
									</div>
								  </div>
								</div>
								</form>
								</div>
							</div>
						</div>
					
					
						<!-- <div style="margin:10px;margin-bottom:30px;">
								<div class="row">
									<div class="col-md-12">
										<p style="color:#83C72A;font-size:14px;font-weight:bold"><i class="icon-circle-empty"> </i>Give Delegate Access to your team member for answering your question.</p>
									</div>
									<div class="col-md-12">
										<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
									</div>
									<div class="col-md-12 text-center">
									<form action="<?php echo base_url("questionaire_budget/add_delegate");?>" method="post" enctype="multipart/form-data">
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									  <div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Add Delegate User</h5>
										  </div>
										  <div class="modal-body">
											<div class="form-group">
												<label for="exampleFormControlTextarea1" style="font-weight:normal;float:left">Delegate User's Email</label>
												<input type class="form-control" type="email" name="delegate_mail" required>
											  </div>
											</div>
											<div class="modal-footer">
											  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											  <button type="submit" class="btn btn-warning">Send Invitation</button>
											</div>
										</div>
									  </div>
									</div>
									</form>
									</div>
								</div>
							</div> -->
					

					<div class="progress">
							<?php
								$tab_one = $progress->tab_one;
								$tab_two = $progress->tab_two;
								$tab_three = $progress->tab_three;
								$tab_four = $progress->tab_four;
								$total_progress = $tab_one+$tab_two+$tab_three+$tab_four;
							?>
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
					</div>
					<div style="margin-top:-10px;margin-bottom:20px;margin-right:20px;"><span>10 minutes to complete this section, 1 hour in total</span></div>
					<form method="POST" id="qstn_budget" name="questionaire" action="<?php echo base_url();?>questionaire_budget/add_questioniare_budget">
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
								<a data-container="body" title="Please select from one of the five categories the amount you spend on cybersecurity products." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="cybersecurity_image">
								<select class="form-control del_cybersecurity reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'amount_cybersecurity_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->amount_cybersecurity_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->amount_cybersecurity_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
								  
								  </label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_cyber_security" >
							  <?php
									$amount_spend_cybersecurity_annually = $this->session->userdata['salesforce']['amount_spend_cybersecurity_annually'];
									if(isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually != ''){
							  ?>
									<option disabled="" value="" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "")?'selected':'');?>>Choose an option</option>
									<option  value="Under £100" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "Under £100")?'selected':'');?>>Under £100</option>
									<option  value="£100-500" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "£100-500")?'selected':'');?>>£100-500</option>
									<option  value="£500-1,000" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "£500-1,000")?'selected':'');?>>£500-1,000</option>
									<option  value="£1,000-5,000" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "£1,000-5,000")?'selected':'');?>>£1,000-5,000</option>
									<option  value="£5,000-10,000" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "£5,000-10,000")?'selected':'');?>>£5,000-10,000</option>
									<option  value="£10,000+" <?php echo ((isset($amount_spend_cybersecurity_annually) && $amount_spend_cybersecurity_annually == "£10,000+")?'selected':'');?>>£10,000+</option>
							 <?php
								}else{
							 ?>
									<option  disabled="" selected="">choose an option</option>
									<option  value="Under £100" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "Under £100")?'selected':'');?>>Under £100</option>
									<option  value="£100-500" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£100-500")?'selected':'')?>>£100-500</option>
									<option  value="£500-1,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£500-1,000")?'selected':'')?>>£500-1,000</option>
									<option  value="£1,000-5,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£1,000-5,000")?'selected':'')?>>£1,000-5,000</option>
									<option  value="£5,000-10,000" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£5,000-10,000")?'selected':'')?>>£5,000-10,000</option>
									<option  value="£10,000+" <?php echo ((isset($budget_detail->amount_cybersecurity_input) && $budget_detail->amount_cybersecurity_input == "£10,000+")?'selected':'')?>>£10,000+</option>
							<?php
							  }	 
							?>
							  </select>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20b</b> What percentage of your annual budget is that?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Could you tell us what % of your IT budget this amounted to." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="annual_budget_button"  style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="percentage_image">
								<select class="form-control del_annual_budget reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'percentage_annual_budget_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->percentage_annual_budget_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->percentage_annual_budget_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
								  
							  </label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_annual">
							  <?php
									$percentage_annual_budget = $this->session->userdata['salesforce']['percentage_annual_budget'];
									if(isset($percentage_annual_budget) && $percentage_annual_budget != ''){
							  ?>
									<option disabled="" value="" <?php echo ((isset($percentage_annual_budget) && $percentage_annual_budget == "")?'selected':'');?>>Choose an option</option>
									<option  value="Under 25%" <?php echo ((isset($percentage_annual_budget) && $percentage_annual_budget == "Under 25%")?'selected':'');?>>Under 25%</option>
									<option  value="25-50%" <?php echo ((isset($percentage_annual_budget) && $percentage_annual_budget == "25-50%")?'selected':'');?>>25-50%</option>
									<option  value="50-75%" <?php echo ((isset($percentage_annual_budget) && $percentage_annual_budget == "50-75%")?'selected':'');?>>50-75%</option>
									<option  value="75%+" <?php echo ((isset($percentage_annual_budget) && $percentage_annual_budget == "75%+")?'selected':'');?>>75%+</option>
							 <?php
								}else{
							 ?>
									<option disabled="" selected="">choose an option</option>
									<option  value="Under 25%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "Under 25%")?'selected':'')?>>Under 25%</option>
									<option  value="25-50%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "25-50%")?'selected':'')?>>25-50%</option>
									<option  value="50-75%" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "50-75%")?'selected':'')?>>50-75%</option>
									<option  value="75%+" <?php echo ((isset($budget_detail->percentage_annual_budget_input) && $budget_detail->percentage_annual_budget_input == "75%+")?'selected':'')?>>75%+</option>
							<?php
							  }	 
							?>
							  </select>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20c</b> What is your budget for Cyber Security per year?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us how much you intend to spend on security services each year." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_year_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="security_image">
								<select class="form-control del_cybersecurity_year reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'budget_cybersecurity_per_year_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
								<option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->budget_cybersecurity_per_year_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->budget_cybersecurity_per_year_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
								  
							  </label>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <?php
								if(isset($budget_detail->budget_cybersecurity_per_year_input) && $budget_detail->budget_cybersecurity_per_year_input != ''){
							  ?>
									<input type="text" name="budget_per_year" class="form-control" value="<?php echo $budget_detail->budget_cybersecurity_per_year_input;?>">
							  <?php
								}else if(isset($this->session->userdata['salesforce']['budget_for_cybersecurity_per_year']) && $this->session->userdata['salesforce']['budget_for_cybersecurity_per_year'] != ''){
							  ?>
								  <input type="text" name="budget_per_year" class="form-control" value="<?php echo $this->session->userdata['salesforce']['budget_for_cybersecurity_per_year'];?>">
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
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label class="not_required"><b>20d</b> How else should it be paid for?<a data-container="body" class="tooltiplink" title="Please tell us if it should be paid for through cyber protection subsidise, Government funding (training, vouchers, etc.) or some other mechanism." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="budget_paid_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="budget_paid_image">
								<select class="form-control budget_paid reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'budget_paid',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->other_payment; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->other_payment == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								  </div>
								  
							  </label>
							 </div>
						  </div>
						  <?php 
						  	if(!empty($budget_detail)){
								$explode_budgets = explode(',',$budget_detail->paid_for_input);
						  	}else{
						  		$explode_budgets = array();
						  	}
						  ?>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<select name="budget_paid[]" class="form-control" multiple="multiple">
										<?php
											$else_paid_for = $this->session->userdata['salesforce']['else_paid_for'];
											if(isset($else_paid_for) && $else_paid_for != ''){
										?>
												<option disabled="" value="" <?php echo ((isset($else_paid_for) && $else_paid_for == "")?'selected':'');?>>Choose an option</option>
												<option value="Sellers of cyber protection subsidise" <?php echo ((strstr("Sellers of cyber protection subsidise",$else_paid_for))?'selected':'')?>>Sellers of cyber protection subsidise</option>
												<option value="Government" <?php echo ((strstr("Government",$else_paid_for))?'selected':'')?>>Government funding (training,vouchers,etc.)</option>
												<option value="other" <?php echo ((strstr("other",$else_paid_for))?'selected':'')?>>other</option>
										<?php
											}else{
										?>
												<option disabled="" selected="">Press ctrl for multiple selections</option>
												<option value="Sellers of cyber protection subsidise" <?php echo ((in_array("Sellers of cyber protection subsidise",$explode_budgets))?'selected':'')?>>Sellers of cyber protection subsidise</option>
												<option value="Government" <?php echo ((in_array("Government",$explode_budgets))?'selected':'')?>>Government funding (training,vouchers,etc.)</option>
												<option value="other" <?php echo ((in_array("other",$explode_budgets))?'selected':'')?>>other</option>
										<?php
											}			
										?>
									 </select>
								</div>	
							  </div>
							</div>
						</div>
					  </div>
					 </div>
						<div class="form_title">
							<h3 class="not_required" style="color:#333;"> 
							  <strong><i class="icon-users"></i></strong> Do you have a preferred budget breakdown?
							</h3>
							
							<img src="<?php echo base_url();?>images/deligate_icon.png" class="budget_breakdown_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="budget_breakdown_image">
								<select class="form-control budget_breakdown reset_onchange"  style="width:15%;display:none" onchange="get_delegate(this.value,'budget_breakdown',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->budget_breakdown; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->budget_breakdown == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								
								  ?>
								  </div>
								 
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
										<select name="currency" class="selectpicker form-control" data-live-search="true" style="width:90%;" data-dropup-auto="false">
										<?php
										if(isset($this->session->userdata['xero']['currency']) && $this->session->userdata['xero']['currency'] != ''){
											foreach($get_currency AS $all_currency){
										?>
											<option value="<?php echo $all_currency->code;?>" <?php echo((isset($this->session->userdata['xero']['currency']) && $this->session->userdata['xero']['currency'] == $all_currency->code) ? 'selected' :'')?>><?php echo $all_currency->country;?> <?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?></option>
										<?php
											}
										}else{
										?>
											<option disabled="" selected="" <?php echo((isset($budget_detail->preferred_budget_breakdown_currency_input) && $budget_detail->preferred_budget_breakdown_currency_input != "") ? '' :'selected')?>>Please select</option>
											<?php
												foreach($get_currency AS $all_currency){
											?>
											<option value="<?php echo $all_currency->code;?>" <?php echo((isset($budget_detail->preferred_budget_breakdown_currency_input) && $budget_detail->preferred_budget_breakdown_currency_input == $all_currency->code) ? 'selected' :'')?>><?php echo $all_currency->country;?> <?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?></option>
										<?php
											}
										}
										?>
									</select>
									 <?php
										if(isset($this->session->userdata['xero']['currency']) && $this->session->userdata['xero']['currency'] != ''){
									 ?>
										<span>Xero shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:#cccccc;"><?php echo $this->session->userdata['xero']['currency'];?></code></span>
									 <?php
										}
									 ?>
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
									<td colspan="5">Data</td>
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
						  </div><!-- End col-md-12-->
						</div>
						
						 <div class="col-md-12 text-right">
						 	<a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-medium" id="prev">Previous</a>
							<button name="save_continue" type="submit" value="return" class="btn btn-warning btn-medium">Save and Return</button>
							<button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium">Save and Continue</button>
						</div>
					  </div>
					  </form>
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
	  <div class="modal fade" id="alert_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<div class="form-group">
				<h3 style="text-align:center;">You have already assign this delegate user for this question!</h3>
			  </div>
			</div>
			<div class="modal-footer" style="border-top: 1px solid white;text-align:center;margin-top: -25px;">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	  </div>
	</div>
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
		});
	</script>

	<!-- delegate ajax starts here -->
	<script>
	$('.cybersecurity_button').click(function() {
		$('.del_cybersecurity').toggle();
	});

	$('.annual_budget_button').click(function() {
		$('.del_annual_budget').toggle();
	});

	$('.cybersecurity_year_button').click(function() {
		$('.del_cybersecurity_year').toggle();
	});

	$('.budget_paid_button').click(function() {
		$('.budget_paid').toggle();
	});

	$('.budget_breakdown_button').click(function() {
		$('.budget_breakdown').toggle();
	});

	function get_delegate(del,key,sme_id)
	{
		var split = del.split(",");
		var del_id = split[0];
		var key_val = split[1];

		if(del =="add_new_del")
		{ 
			$('#modal').modal("show"); 
			$('.reset_onchange').prop('selectedIndex',0);
			$('.del_cybersecurity').hide();
			 $('.del_annual_budget').hide();
			 $('.del_cybersecurity_year').hide();
			 $('.budget_paid').hide();
			 $('.budget_breakdown').hide();
		}
		if(key == 'amount_cybersecurity_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cybersecurity').hide();
		}
		else if(key == 'percentage_annual_budget_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_annual_budget').hide();
		}
		else if(key == 'budget_cybersecurity_per_year_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cybersecurity_year').hide();
		}
		else if(key == 'budget_paid' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.budget_paid').hide();
		}
		else if(key == 'budget_breakdown' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.budget_breakdown').hide();
		}
		else{
				if(key == 'amount_cybersecurity_input')
				{
					var update_array = 'UPDATE delegate_budget SET amount_cybersecurity_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'percentage_annual_budget_input')
				{
					var update_array = 'UPDATE delegate_budget SET percentage_annual_budget_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_cybersecurity_per_year_input')
				{
					var update_array = 'UPDATE delegate_budget SET budget_cybersecurity_per_year_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_paid')
				{
					var update_array = 'UPDATE delegate_budget SET other_payment = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_breakdown')
				{
					var update_array = 'UPDATE delegate_budget SET budget_breakdown = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				//alert(update_array);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_budget/delegate_assign_budget',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div').show();
					 $('.del_cybersecurity').hide();
					 $('.del_annual_budget').hide();
					 $('.del_cybersecurity_year').hide();
					 $('.budget_paid').hide();
					 $('.budget_breakdown').hide();
					 if(key == 'amount_cybersecurity_input')
					 {
						 $("#cybersecurity_image").html(response);
					 }
					 else if(key == 'percentage_annual_budget_input')
					 {
						 $("#percentage_image").html(response);
					 }
					 else if(key == 'budget_cybersecurity_per_year_input')
					 {
						 $("#security_image").html(response);
					 }
					 else if(key == 'budget_paid')
					 {
						 $("#budget_paid_image").html(response);
					 }
					 else if(key == 'budget_breakdown')
					 {
						 $("#budget_breakdown_image").html(response);
					 }
					 
					 $(window).scrollTop(0);
				  }
				}); 
			   /* ajax code ends*/
		}
		
		
	}
	</script>
<!-- delegate ajax ends here -->

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
