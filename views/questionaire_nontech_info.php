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
		.lbl_error {
			font-size: 11px;
			right: 0;
			height: 35px;
			line-height: 25px;
			background-color: #e34f4f;
			color: #fff;
			font-weight: 400;
			padding: 5px 6px;
			margin-top: 8px;
			border-radius: 4px;
		}
		.err_btn{
			height: 25px;
			font-size: 10px;
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
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Let's source your protection…
        </div>
      </div>
    </section>
    <!-- End section -->
    <main id="mouse_move">    
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
					if($this->session->flashdata('del_first_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_has')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_has');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('user_has')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('user_has');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_first_success')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('skip_flash') && !empty($this->session->flashdata('skip_flash'))){
					$flash = $this->session->flashdata('skip_flash');
				?>
				<div class="alert alert-danger"> <strong>You need to answer the required question or assign a delegate user to required question for skipping this page, thank you.</strong> </div>
				<?php
				}
				?>
				<ul class="nav nav-tabs " id="myDIV" style="margin-bottom:10px;">
					<li class="arrow_success"><a href="<?php echo base_url('questionaire');?>"   class="red-gradient_success">Basics</a></li>
					<li class=" arrow_success"><a href="<?php echo base_url('questionaire_tech_info');?>" class="red-gradient_success">Technical Info</a></li>
					<li class=" active arrow "><a href="<?php echo base_url('questionaire_nontech_info');?>" class="red-gradient">Non-Technical Info</a></li>
					<?php
					if($get_budget > 0)
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_budget');?>"  class="red-gradient_success">Budget</a>  </li>
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
					<div class="tab-pane " id="home"></div>
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
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="profile">
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
										<p style="color:#808080;font-size:13px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> (next to each question) to ask delegate user to answer this question. </p>
									</div>-->
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> If you still have further questions (after reading our green info icons, please use our chat function, in bottom right corner, in blue.</p>
								</div>
								<div class="col-md-12">
									<p style="color:#808080;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> to ask delegate user to answer this question. You can also add a new delegate user by clicking this button.&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-previous" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div>
								<!-- <div class="col-md-12">
									<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div> -->

								<div class="col-md-12 text-center">
								<form action="<?php echo base_url("questionaire_nontech_info/add_delegate");?>" method="post" class="delegate_modal" enctype="multipart/form-data">
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
										<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
									</div>
									<div class="col-md-12 text-center">
									<form action="<?php echo base_url("questionaire_nontech_info/add_delegate");?>" method="post" enctype="multipart/form-data">
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
						
					<div class="progress" style="margin:10px;margin-bottom:30px;">
						<?php
							$tab_one = $progress->tab_one;
							$tab_two = $progress->tab_two;
							$tab_three = $progress->tab_three;
							$total_progress = $tab_one+$tab_two+$tab_three;
						?>
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
					</div>
					<div style="margin-top:-10px;margin-bottom:20px;margin-left:10px;"><span>15 minutes to complete this section, 1 hour in total</span></div>
					<form name="questionaire_non_tech" method="POST" action="<?php echo base_url();?>questionaire_nontech_info/add_questioniare_non_tech">
					 <div class="form_title">
					  <h3>
						<strong><i class="icon-cog-6"></i></strong> Business Continuity Procedures							
					  </h3>
      			 	</div>
				    <div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>12a</b> Do you use security monitoring solutions for your Business Continuity?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						 
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="business_continuity" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="business_continuity_image">
								  <select class="form-control del_industry reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'business_continuity_security',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_plan_input;?>" ><?php echo $name;?></option>   
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->business_continuity_plan_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				          <select class="form-control" name="business_continuity_plan" id="business_continuity_plan">
					  
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($non_tech_detail->business_continuity_plan_input) && $non_tech_detail->business_continuity_plan_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($non_tech_detail->business_continuity_plan_input) && $non_tech_detail->business_continuity_plan_input == '0')?'selected':'')?>> No </option>
					
				          </select>
						  <div id="12a"></div>
						  
				       </div>
				
				        </div>
				      </div>
				      <div class="row"  id="business_continuity_procedures" style="display:none;">
				        <div class="col-md-6 col-sm-6">
					       <div class="form-group">
					         <label class="not_required"><b>12b</b> Which Business Continuity Procedures do you use?<a data-container="body" class="tooltiplink" title="Please tell us if you use any business continuity procedures such as IDS (see above), IPS (see below) or Backups (see below). Intrusion Prevention System (IPS) is a network security/threat prevention technology that examines network traffic flows to detect and prevent vulnerability exploits. Vulnerability exploits usually come in the form of malicious inputs to a target application or service that attackers use to interrupt and gain control of an application or machine. Following a successful exploit, the attacker can disable the target application (resulting in a denial-of-service state), or can potentially access to all the rights and permissions available to the compromised application. Backups make copies of computer data to keep in case anything goes wrong with the original." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_business_continuity_procedure_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="business_continuity_procedure_input">
								  <select class="form-control del_business_continuity_procedure_input reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'business_continuity_procedure_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_procedure_input;?>" ><?php echo $name;?></option>   
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->business_continuity_procedure_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
							$explode_proceduress = explode(',',$non_tech_detail->business_continuity_procedure_input);
						 ?>
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_procedureszz[]" multiple="multiple">
							<?php
								$business_continuity_procedure_use = $this->session->userdata['salesforce']['business_continuity_procedure_use'];
								if(isset($business_continuity_procedure_use) && $business_continuity_procedure_use != ''){
							?>
								 <option disabled="" value="" <?php echo ((strstr("",$business_continuity_procedure_use))?'selected':'')?>> choose an option</option>
								 <option value="IDS" <?php echo ((strstr("IDS",$business_continuity_procedure_use))?'selected':'')?>> IDS </option>
								 <option value="IPS" <?php echo ((strstr("IPS",$business_continuity_procedure_use))?'selected':'')?>> IPS </option>
								 <option value="Backups" <?php echo ((strstr("Backups",$business_continuity_procedure_use))?'selected':'')?>> Backups </option>
								 <option value="None" <?php echo ((strstr("None",$business_continuity_procedure_use))?'selected':'')?>> None </option>
							<?php
								}else{
							?>
								 <option disabled="" selected=""> choose an option</option>
								 <option value="IDS" <?php echo ((in_array("IDS",$explode_proceduress))?'selected':'')?>> IDS </option>
								 <option value="IPS" <?php echo ((in_array("IPS",$explode_proceduress))?'selected':'')?>> IPS </option>
								 <option value="Backups" <?php echo ((in_array("Backups",$explode_proceduress))?'selected':'')?>> Backups </option>
								 <option value="None" <?php echo ((in_array("None",$explode_proceduress))?'selected':'')?>> None </option>
							<?php
								}	
							?>
							  </select>
						   </div>
				        </div>
				      </div>
				      <div class="row" id="business_continuity_regular_backup" style="display:none;">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label class="not_required"><b>12c</b> Does your business have regular backups?<a data-container="body" class="tooltiplink" title="Please tell us if you have Local or Remote backups or no backups at all." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 
							 <img src="<?php echo base_url();?>images/deligate_icon.png" class="regular_backup" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="regular_backup_image">
								  <select class="form-control del_regular_backup reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'regular_backup',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->regular_backup;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->regular_backup == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						<div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_regular_backup">
							<?php
								$business_regular_backups = $this->session->userdata['salesforce']['business_regular_backups'];
								if(isset($business_regular_backups) && $business_regular_backups != ''){
							?>
								 <option disabled="" value="" <?php echo ((strstr("",$business_regular_backups))?'selected':'')?>> choose an option</option>
								 <option value="Local" <?php echo ((strstr("Local",$business_regular_backups))?'selected':'')?>> Local </option>
								 <option value="Remote" <?php echo ((strstr("Remote",$business_regular_backups))?'selected':'')?>> Remote </option>
								 <option value="None" <?php echo ((strstr("None",$business_regular_backups))?'selected':'')?>> None </option>
							<?php
								}else{
							?>
								 <option selected disabled> choose an option</option>
								 <option  value="Local" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'Local')?'selected':'')?>> Local </option>
								 <option  value="Remote" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'Remote')?'selected':'')?>> Remote </option>
								 <option  value="None" <?php echo ((isset($non_tech_detail->regular_backup_input) && $non_tech_detail->regular_backup_input == 'None')?'selected':'')?>> None </option>
							<?php
								}		
							?>
							  </select>
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
				         <label><b>13</b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						 
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_training" style="height:15px;cursor: pointer;margin-top: -2px;">
						  <br/>
						  <div id="cybersecurity_training_image">
								  <select class="form-control cybersecurity_training_only reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'cybersecurity_training',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->training_cybersecurity_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->training_cybersecurity_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
							<select class="form-control" name="training_staff" id="training_staff">
						
								 <option disabled="" selected=""> choose an option</option>
								 <option  value="Cyber security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Cyber security')?'selected':'')?>> Cyber security </option>
								 <option  value="Physical security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Physical security')?'selected':'')?>> Physical security </option>
								 <option  value="Cyber & Physical security"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'Cyber & Physical security')?'selected':'')?>> Cyber & Physical security </option>
								 <option  value="None"  <?php echo ((isset($non_tech_detail->training_cybersecurity_input) && $non_tech_detail->training_cybersecurity_input == 'None')?'selected':'')?>> None </option>
						
							</select>
							<div id="13"></div>
				         </div>

						  <?php
								if(isset($this->session->userdata['salesforce']['security_monitoring_solution']) && sizeof($this->session->userdata['salesforce']['security_monitoring_solution']) > 0)
										{
								?>
								<span style="margin-top:20px;margin-bottom:20px;">Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['security_monitoring_solution'];
									?>
											<div class="table-responsive " style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
												<tbody>
										
											<?php
												foreach ($unique_sage_data As $key)
											{
												$date_format = strtotime($key['order_date']);
											?>
											 <tr>
												<td><?php echo date("d-m-Y", $date_format);?></td>
												<td><?php echo $key['product'];?></td>
												<td><?php echo $this->session->userdata['salesforce']['currency'];?><?php echo round($key['price']);?></td>
											  </tr>
											<?php
											}
											?>
											</tbody>
											</table>
										</div>

										 <?php
											}
										 if(isset($this->session->userdata['xero']['security_monitoring_solution']) && sizeof($this->session->userdata['xero']['security_monitoring_solution']) > 0)
										 {
										?>
										<span style="margin-top:20px;margin-bottom:20px;">Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['security_monitoring_solution'];
											
										?>

											<div class="table-responsive " style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
													
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_xero_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															
														?>
													  <tr>
														<td><?php echo $i;?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['xero']['currency'];?>&nbsp;<?php echo $key['price'];?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										 }
										if(isset($this->session->userdata['sage']['security_monitoring_solution']) && sizeof($this->session->userdata['sage']['security_monitoring_solution']) > 0)
										{
										?>
											<span style="margin-top:20px;margin-bottom:20px;">Sage Accounting shows:</span>&nbsp;&nbsp;
											<?php 
												$unique_sage_data =  array_unique($this->session->userdata['sage']['security_monitoring_solution']);
											?>
											<div class="table-responsive " style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
													
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_sage_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															$date_format = strtotime($key['order_date']);
															
														?>
													  <tr>
														<td><?php echo date("d-m-Y", $date_format);?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['sage']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										}
										?>
				        </div>
				      </div>
					</div>
					<div class="form_title">
				      <h3>
				        <strong><i class="icon-hammer"></i></strong> Accreditation/Regulation
				      </h3>
				    </div>
			    	<div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>14</b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click<a href="https://staging.protectbox.com/regulation" target="_blank"> here</a> for detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="security_standerds" style="height:15px;cursor: pointer;margin-top: -2px;">
						  <br/>
						  <div id="security_standers_image">
						  <select class="form-control information_security_standers reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'security_standerd',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
							 <option selected disabled>Select Delegate</option> 
							 <?php
							 $ci =&get_instance();
							 $ci->load->model('questionaire_m');
							 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
							 if(sizeof($get_delegate_info) > 0)
							 {
								 foreach($get_delegate_info as $del_result)
								 {
									 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
									 if(sizeof($get_del_name) > 0)
									 {
										 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
									 }else{
										 $name = $del_result->delicate_email;
									 }
								 ?>
								 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->accreditation_security_standerd_input;?>" ><?php echo $name;?></option>  
								 <?php
								 }
							 }
							 ?>
							 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
						  </select>
						  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->accreditation_security_standerd_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_iso_iec" id="accreditation_iso_iec" data-dropup-auto="false">
						  <?php
								$information_security_standard_relevant = $this->session->userdata['salesforce']['information_security_standard_relevant'];
								if(isset($information_security_standard_relevant) && $information_security_standard_relevant != ''){
							?>
								<option disabled="" value="" <?php echo ((strstr("",$information_security_standard_relevant))?'selected':'')?>> choose an option</option>
								<option value='CyberEssentials only'<?php echo ((strstr("CyberEssentials only",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials only</option>
								<option value='CyberEssentials+ only'<?php echo ((strstr("CyberEssentials+ only",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ only</option>
								<option value='GDPR only'<?php echo ((strstr("GDPR only",$information_security_standard_relevant))?'selected':'')?>>GDPR only</option>
								<option value='PCI/DSS only'<?php echo ((strstr("PCI/DSS only",$information_security_standard_relevant))?'selected':'')?>>PCI/DSS only</option>
								<option value='ISO only'<?php echo ((strstr("ISO only",$information_security_standard_relevant))?'selected':'')?>>ISO only</option>
								<option value='NIST only'<?php echo ((strstr("NIST only",$information_security_standard_relevant))?'selected':'')?>>NIST only</option>
								<option value='CyberEssentials & GDPR'<?php echo ((strstr("CyberEssentials & GDPR",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR</option>
								<option value='CyberEssentials+ & GDPR'<?php echo ((strstr("CyberEssentials+ & GDPR",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ & GDPR</option>
								<option value='CyberEssentials & GDPR & PCI/DSS'<?php echo ((strstr("CyberEssentials & GDPR & PCI/DSS",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & PCI/DSS</option>
								<option value='CyberEssentials+ & GDPR & PCI/DSS'<?php echo ((strstr("CyberEssentials+ & GDPR & PCI/DSS",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ & GDPR & PCI/DSS</option>
								<option value='GDPR & PCI/DSS'<?php echo ((strstr("GDPR & PCI/DSS",$information_security_standard_relevant))?'selected':'')?>>GDPR & PCI/DSS</option>
								<option value='GDPR & PCI/DSS & NIST'<?php echo ((strstr("GDPR & PCI/DSS & NIST",$information_security_standard_relevant))?'selected':'')?>>GDPR & PCI/DSS & NIST</option>
								<option value='CyberEssentials & GDPR & ISO'<?php echo ((strstr("CyberEssentials & GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & ISO</option>
								<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo ((strstr("CyberEssentials & GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & ISO & NIST</option>
								<option value='CyberEssentials+ & GDPR & ISO'<?php echo ((strstr("CyberEssentials+ & GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ & GDPR & ISO</option>
								<option value='CyberEssentials+ & GDPR & ISO & NIST'<?php echo ((strstr("CyberEssentials+ & GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ & GDPR & ISO & NIST</option>
								<option value='GDPR & ISO'<?php echo ((strstr("GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>GDPR & ISO</option>
								<option value='GDPR & ISO & NIST'<?php echo ((strstr("GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>GDPR & ISO & NIST</option>
								<option value='CyberEssentials & GDPR & ISO'<?php echo ((strstr("CyberEssentials & GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & ISO</option>
								<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo ((strstr("CyberEssentials & GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & ISO & NIST</option>
								<option value='CyberEssentials+ & GDPR & ISO'<?php echo ((strstr("CyberEssentials+ & GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials+ & GDPR & ISO</option>
								<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo ((strstr("CyberEssentials & GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>CyberEssentials & GDPR & ISO & NIST</option>
								<option value='GDPR & ISO'<?php echo ((strstr("GDPR & ISO",$information_security_standard_relevant))?'selected':'')?>>GDPR & ISO</option>
								<option value='GDPR & ISO & NIST'<?php echo ((strstr("GDPR & ISO & NIST",$information_security_standard_relevant))?'selected':'')?>>GDPR & ISO & NIST</option>
						<?php
							}else{
						?>
						  	<option disabled="" selected="" value=""> choose an option</option>
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
						<?php
							}		
						?>
				          </select>
						  <div id="14"></div>
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
							 <option value="1" <?php echo ((isset($non_tech_detail->it_governance_policy_input) && $non_tech_detail->it_governance_policy_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($non_tech_detail->it_governance_policy_input) && $non_tech_detail->it_governance_policy_input == '0')?'selected':'')?>> No </option>
				          </select>
				         </div>
				        </div>
				      </div>-->
				    </div>
					 <div class="form_title">
				      <h3>
				        <strong><i class="icon-lock"></i></strong>  Passwords Policy
				      </h3>
				       </div>
					    <div class="step">
							<div class="row">
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label><b>15</b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide password strength checks on your customers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								 
								   <img src="<?php echo base_url();?>images/deligate_icon.png" class="password_policy" style="height:15px;cursor: pointer;margin-top: -2px;">
								   <br/>
								   <div id="password_policy_image">
								  <select class="form-control password_policy_rules reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'password_policy_rules',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->adaquate_password_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->adaquate_password_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
							  <div class="col-md-6 col-sm-6">
								  <div class="form-group">
									  <select class="form-control" name="password_policy_rules" id="password_policy">
										<?php
											$adequate_password_rules = $this->session->userdata['salesforce']['adequate_password_rules'];
											if(isset($adequate_password_rules) && $adequate_password_rules != ''){
										?>
											<option disabled="" value="" <?php echo ((isset($adequate_password_rules) && $adequate_password_rules == "")?'selected':'');?>>Choose an option</option>
											<option  value="1" <?php echo ((isset($adequate_password_rules) && $adequate_password_rules == "1")?'selected':'');?>> Yes </option>
											<option  value="0" <?php echo ((isset($adequate_password_rules) && $adequate_password_rules == "0")?'selected':'');?>> No </option>
										<?php
											}else{
										?>
											<option disabled="" selected=""> choose an option</option>
											<option  value="1" <?php echo ((isset($non_tech_detail->password_rules_input) && $non_tech_detail->password_rules_input == '1')?'selected':'')?>> Yes </option>
											<option  value="0" <?php echo ((isset($non_tech_detail->password_rules_input) && $non_tech_detail->password_rules_input == '0')?'selected':'')?>> No </option>
										<?php
											}	
										?>
									  </select>
									  <div id="15"></div>
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
							  <label><b>16a</b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
								 <img src="<?php echo base_url();?>images/deligate_icon.png" class="cisp_pertnership" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="cisp_image">
								  <select class="form-control cisp_partnership_rule reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'cisp_partnership',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_security_information_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cyber_security_information_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_member_cisp" id="cisp">
								<?php
									$member_cisp = $this->session->userdata['salesforce']['member_cisp'];
									if(isset($member_cisp) && $member_cisp != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($member_cisp) && $member_cisp == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($member_cisp) && $member_cisp == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($member_cisp) && $member_cisp == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->member_cisp_input) && $non_tech_detail->member_cisp_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->member_cisp_input) && $non_tech_detail->member_cisp_input == '0')?'selected':'')?>>No </option>
								<?php
									}	
								?>
								  </select>
								  <div id="16a"></div>
							  </div>
						  </div>
						</div>
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16b</b> Do you have cybersecurity insurance? Due to www.fca.org.uk (in the UK) & other international regulators requirements, we must divert you to a trusted cybersecurity insurance provider’s website. Please click&nbsp;i (info) icon for details.<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="If you do not have cybersecurity insurance, or wish to change your cybersecurity insurance provider, select “No” as an answer & you will be automatically re-directed (in a new tab) to a trusted cybersecurity insurance provider. Once you have completed your cybersecurity insurance application on our partner’s website, you must return to your account on www.protectbox.com to complete your bundle selection. Please note that you will pay our trusted insurance partner DIRECTLY (on their website or via an invoice to them) for your cybersecurity insurance policy. You will pay separately, on www.protectbox.com, for the other products that you select in ProtectBox’s bundle. You will not see the cybersecurity insurance policy (that you will have bought through our partner) in ProtectBox’s bundle when you return to complete that process. But you will see the details of your cybersecurity insurance policy in" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="cyber_insurence" style="height:15px;cursor: pointer;margin-top: -2px;">
							    <br/>
								<div id="cyber_insurence_image">
								  <select id="onChangeStatus" class="form-control cyber_insurence_pertnership reset_onchange" style="width:50%;display:none" onchange="get_delegate(this.value,'cyber_insurence',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_insurence_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cyber_insurence_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cyber_insurance" id="cyber_insurance">
								<?php
									$have_cyber_insurance = $this->session->userdata['salesforce']['have_cyber_insurance'];
									if(isset($have_cyber_insurance) && $have_cyber_insurance != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_cyber_insurance) && $have_cyber_insurance == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_cyber_insurance) && $have_cyber_insurance == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_cyber_insurance) && $have_cyber_insurance == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" > choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_insurance_input) && $non_tech_detail->cyber_insurance_input == '0')?'selected':'')?>> No </option>
								<?php
									}	
								?>
								  </select>
								  <div id="16b"></div>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16c</b> Do you have threat detection and prevention solutions?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>   <a data-container="body" class="tooltiplink" title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="threat_prvention" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="threat_prevention_image">
								  <select  class="form-control threat_prevention_detection reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'threat_prevention_detection',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->threat_detection_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->threat_detection_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_threat_detection" id="threat_detection">
								<?php
									$have_threat_detection_solution = $this->session->userdata['salesforce']['have_threat_detection_solution'];
									if(isset($have_threat_detection_solution) && $have_threat_detection_solution != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_threat_detection_solution) && $have_threat_detection_solution == "")?'selected':'');?>>Choose an option</option>
									<option  value="Detection" <?php echo ((strstr("Detection",$have_threat_detection_solution))?'selected':'')?>> Detection </option>
									<option  value="Prevention" <?php echo ((strstr("Prevention",$have_threat_detection_solution))?'selected':'')?>> Prevention </option>
									<option  value="Detection_prevention" <?php echo ((strstr("Detection_prevention",$have_threat_detection_solution))?'selected':'')?>>Detection And Prevention </option>
									<option  value="none" <?php echo ((strstr("none",$have_threat_detection_solution))?'selected':'')?>>None </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="Detection" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == 'Detection')?'selected':'')?>> Detection </option>
									<option  value="Prevention" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == 'Prevention')?'selected':'')?>> Prevention </option>
									<option  value="Detection_prevention" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == 'Detection_prevention')?'selected':'')?>>Detection And Prevention </option>
									<option  value="none" <?php echo ((isset($non_tech_detail->threat_detection_input) && $non_tech_detail->threat_detection_input == 'none')?'selected':'')?>>None </option>
								<?php
									}	
								?>
								  </select>
								  <div id="16c"></div>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>16d</b> Do you use cloud data storage solutions?&nbsp;<a data-container="body" class="tooltiplink" title="Data storage solutions is the recording (storing) of information (data).Examples include Dropbox, OneDrive, Google Drive, Amazon Drive, Apple iCloud etc." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cloud_storage" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="cloud_storage_image">
								  <select class="form-control del_cloud_storage reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'cloud_storage',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cloud_storage;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cloud_storage == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cloud_storage">
									<?php
										$use_cloud_data_storage = $this->session->userdata['salesforce']['use_cloud_data_storage'];
										if(isset($use_cloud_data_storage) && $use_cloud_data_storage != ''){
									?>
										<option disabled="" value="" <?php echo ((isset($use_cloud_data_storage) && $use_cloud_data_storage == "")?'selected':'');?>>Choose an option</option>
										<option  value="1" <?php echo ((isset($use_cloud_data_storage) && $use_cloud_data_storage == "1")?'selected':'');?>> Yes </option>
										<option  value="0" <?php echo ((isset($use_cloud_data_storage) && $use_cloud_data_storage == "0")?'selected':'');?>> No </option>
									<?php
										}else{
									?>
										<option disabled="" selected=""> choose an option</option>
										<option  value="1" <?php echo ((isset($non_tech_detail->cloud_data_storage_solution_input) && $non_tech_detail->cloud_data_storage_solution_input == '1')?'selected':'')?>> Yes </option>
										<option  value="0" <?php echo ((isset($non_tech_detail->cloud_data_storage_solution_input) && $non_tech_detail->cloud_data_storage_solution_input == '0')?'selected':'')?>> No </option>
									<?php
										}	
									?>
								  </select>
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
							  <label><b>17</b> Do you have device management solutions on the devices issued to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="device_management" style="height:15px;cursor: pointer;margin-top: -2px;">
							    <br/>
								<div id="device_management_image">
								  <select class="form-control device_management_solution reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'device_management_solution',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->device_management_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->device_management_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_mdm" id="device_mdm">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->device_to_employees_input) && $non_tech_detail->device_to_employees_input == '0')?'selected':'')?>> No </option>
							
								  </select>
								  <div id="17"></div>
							  </div>
							     <?php
								if(isset($this->session->userdata['salesforce']['device_management_solution']) && sizeof($this->session->userdata['salesforce']['device_management_solution']) > 0)
										{
								?>
								<span style="margin-top:20px;margin-bottom:20px;">Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['device_management_solution'];
									?>
									<div class="table-responsive" style="margin-top:15px;">
										<table id="" class="table table-striped table-bordered  example">
										
											<tbody>
											
											<?php
												foreach ($unique_sage_data As $key)
											{
												$date_format = strtotime($key['order_date']);
											?>
											 <tr>
												<td ><?php echo date("d-m-Y", $date_format);?></td>
												<td ><?php echo $key['product'];?></td>
												<td ><?php echo $this->session->userdata['salesforce']['currency'];?><?php echo round($key['price']);?></td>
											  </tr>
											<?php
											}
											?>
									</tbody>
									</table>
									</div>

										 <?php
											}
										 if(isset($this->session->userdata['xero']['device_management_solution']) && sizeof($this->session->userdata['xero']['device_management_solution']) > 0)
										 {
										?>
										<span style="margin-top:20px;margin-bottom:20px;">Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['device_management_solution'];
											
										?>

											<div class="table-responsive" style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
												
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_xero_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															
														?>
													  <tr>
														<td><?php echo $i;?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['xero']['currency'];?>&nbsp;<?php echo $key['price'];?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										 }
										if(isset($this->session->userdata['sage']['device_management_solution']) && sizeof($this->session->userdata['sage']['device_management_solution']) > 0)
										{
										?>
											<span style="margin-top:20px;margin-bottom:20px;">Sage Accounting shows:</span>&nbsp;&nbsp;
											<?php 
												$unique_xero_data =  array_unique($this->session->userdata['sage']['device_management_solution']);
											?>

											<div class="table-responsive" style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
												
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_xero_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															$date_format = strtotime($key['order_date']);
														?>
													  <tr>
														<td><?php echo date("d-m-Y", $date_format);?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['sage']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										}
										?>
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
							  <label class="not_required"><b>18</b> Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely?&nbsp;<a data-container="body" class="tooltiplink" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="vpn_home" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="vpn_home_image">
								  <select class="form-control del_vpn_home reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'vpn_home',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->vpn_home;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->vpn_home == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remotezz" id="vpn_home_remote_deleted">
								<?php
									$vpn_web_proxies = $this->session->userdata['salesforce']['vpn_web_proxies'];
									if(isset($vpn_web_proxies) && $vpn_web_proxies != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($vpn_web_proxies) && $vpn_web_proxies == "")?'selected':'');?>>Choose an option</option>
									<option  value="VPN" <?php echo ((strstr("VPN",$vpn_web_proxies))?'selected':'')?>> VPN </option>
									<option  value="Web Proxy" <?php echo ((strstr("Web Proxy",$vpn_web_proxies))?'selected':'')?>> Web Proxy </option>
									<option  value="None" <?php echo ((strstr("None",$vpn_web_proxies))?'selected':'')?>> None </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="VPN" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'VPN')?'selected':'')?>> VPN </option>
									<option  value="Web Proxy" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'Web Proxy')?'selected':'')?>> Web Proxy </option>
									<option  value="None" <?php echo ((isset($non_tech_detail->employees_use_remotely_input) && $non_tech_detail->employees_use_remotely_input == 'None')?'selected':'')?>> None </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						
						<!--<div class="row" id="vpn_home_remote_from_company" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please tell us if employees ever work from home &/or access your company's systems & data remotely?&nbsp;<a data-container="body" class="tooltiplink" title="Do your employees use these devices remotely." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remote_from_companyzz">
								<?php
									$have_cyber_consultant = $this->session->userdata['salesforce']['have_cyber_consultant'];
									if(isset($have_cyber_consultant) && $have_cyber_consultant != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_cyber_consultant) && $have_cyber_consultant == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_cyber_consultant) && $have_cyber_consultant == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_cyber_consultant) && $have_cyber_consultant == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->employees_work_home_input) && $non_tech_detail->employees_work_home_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->employees_work_home_input) && $non_tech_detail->employees_work_home_input == '0')?'selected':'')?>> No </option>
								<?php
									}	
								?>
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
						</div>-->
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
							  <label><b>19</b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cyber_consultent" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="cyber_consultent_image">
								  <select class="form-control cyber_consultent_solution reset_onchange"  style="width:50%;display:none" onchange="get_delegate(this.value,'cyber_consultent',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_m');
									 $get_delegate_info = $this->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(sizeof($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(sizeof($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->need_consultant_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(sizeof($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->need_consultant_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(sizeof($del_name) > 0)
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_cyber_consultantzz" id="consultancy_cyber_consultant_deleted">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->cyber_consultant_input) && $non_tech_detail->cyber_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
								  <div id="19"></div>
							  </div>
							  
						   <?php
								if(isset($this->session->userdata['salesforce']['consultancy_implemention_solution']) && sizeof($this->session->userdata['salesforce']['consultancy_implemention_solution']) > 0)
										{
								?>
								<span style="margin-top:20px;margin-bottom:20px;">Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['consultancy_implemention_solution'];
									?>
								<div class="table-responsive" style="margin-top:15px;">
									<table id="" class="table table-striped table-bordered  example">
										
										<tbody>
										
											<?php
												foreach ($unique_sage_data As $key)
											{
												$date_format = strtotime($key['order_date']);
											?>
											 <tr>
												<td><?php echo date("d-m-Y", $date_format);?></td>
												<td><?php echo $key['product'];?></td>
												<td><?php echo $this->session->userdata['salesforce']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
											  </tr>
											<?php
											}
											?>
										</tbody>
										</table>
									</div>

										 <?php
											}
										 if(isset($this->session->userdata['xero']['consultancy_implemention_solution']) && sizeof($this->session->userdata['xero']['consultancy_implemention_solution']) > 0)
										 {
										?>
										<span style="margin-top:20px;margin-bottom:20px;">Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['consultancy_implemention_solution'];
											
										?>
											<div class="table-responsive" style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
													
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_xero_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															
														?>
													  <tr>
														<td><?php echo $i;?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['xero']['currency'];?>&nbsp;<?php echo $key['price'];?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										 }
										if(isset($this->session->userdata['sage']['consultancy_implemention_solution']) && sizeof($this->session->userdata['sage']['consultancy_implemention_solution']) > 0)
										{
										?>
											<span style="margin-top:20px;margin-bottom:20px;">Sage Accounting shows:</span>&nbsp;&nbsp;
											<?php 
												$unique_sage_data =  array_unique($this->session->userdata['sage']['consultancy_implemention_solution']);
											?>
											<div class="table-responsive" style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
													
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_sage_data As $key)
														{
															//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
															//echo $data = date('m/d/Y', 1562652386157);
															$date_format = strtotime($key['order_date']);
															
														?>
													  <tr>
														<td><?php echo date("d-m-Y", $date_format);?></td>
														<td><?php echo $key['product'];?></td>
														<td><?php echo $this->session->userdata['sage']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
													  </tr>
													  <?php
														  $i++;
														}
														?>

													</tbody>
												</table>
											</div>
										<?php
										}
										?>
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
						</div>
						 <div class="col-md-12 text-right">
							<button name="save_continue" type="submit" value="skip" class="btn btn-previous btn-medium" onclick="do_something();">Skip</button>
						 	<a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-medium">Previous</a>
							<button name="save_continue" type="submit" value="return" class="btn btn-warning btn-medium">Save and Return</button>
							<button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium" onclick="skip_error();">Save and Continue</button>
						</div>
					</div>
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
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>

	<script>
	function do_something(){
		$("form[name='questionaire_non_tech']").validate().cancelSubmit = true;
	}
	</script>

<?php
if($this->session->flashdata('skip_flash') && !empty($this->session->flashdata('skip_flash'))){
	$flash_array = $this->session->flashdata('skip_flash');
?>
	<script>
	var response = <?php echo json_encode($flash_array); ?>;
	if(response.business_continuity_12a_res == '1')
	{
		$("#12a").html('<label for="business_continuity_plan" generated="true" class="error">This field is required</label>');
	}
	if(response.training_staff_13_res == '1')
	{
		$("#13").html('<label for="training_staff" generated="true" class="error">This field is required</label>');
	}
	if(response.accreditation_14_res == '1')
	{
		$("#14").html('<label for="accreditation_iso_iec" generated="true" class="error">This field is required</label>');
	}
	if(response.password_policy_15_res == '1')
	{
		$("#15").html('<label for="password_policy_rules" generated="true" class="error">This field is required</label>');
	}
	if(response.cisp_16a_res == '1')
	{
		$("#16a").html('<label for="reputation_management_member_cisp" generated="true" class="error">This field is required</label>');
	}
	if(response.cyber_insurance_16b_res == '1')
	{
		$("#16b").html('<label for="reputation_management_cyber_insurance" generated="true" class="error">This field is required</label>');
	}
	if(response.threat_detection_16c_res == '1')
	{
		$("#16c").html('<label for="reputation_management_threat_detection" generated="true" class="error">This field is required</label>');
	}
	if(response.device_mdm_17_res == '1')
	{
		$("#17").html('<label for="device_mdm" generated="true" class="error">This field is required</label>');
	}
	if(response.cyber_consultantzz_19_res == '1')
	{
		$("#19").html('<label for="consultancy_cyber_consultant_deleted" generated="true" class="error">This field is required</label>');
	}
	</script>
<?php
}
?>
	<script>
	function skip_error(){
		var business_continuity_12a = $("#business_continuity_plan").val();
		var training_staff_13 = $("#training_staff").val();
		var accreditation_14 = $("#accreditation_iso_iec").val();
		var password_policy_15 = $("#password_policy").val();
		var cisp_16a = $("#cisp").val();
		var cyber_insurance_16b = $("#cyber_insurance").val();
		var threat_detection_16c = $("#threat_detection").val();
		var device_mdm_17 = $("#device_mdm").val();
		var cyber_consultant_19 = $("#consultancy_cyber_consultant_deleted").val();
		
		$.ajax({
		  url: '<?php echo base_url();?>questionaire_nontech_info/check_delegate',
		  type: "post",
		  dataType: "json",
		  success: function(response){
			if(business_continuity_12a == null && response.business_continuity_12a_res == 'exist')
			{
				$('#12a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(training_staff_13 == null && response.training_staff_13_res == 'exist')
			{
				$('#13').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(accreditation_14 == null && response.accreditation_14_res == 'exist')
			{
				$('#14').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(password_policy_15 == null && response.password_policy_15_res == 'exist')
			{
				$('#15').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(cisp_16a == null && response.cisp_16a_res == 'exist')
			{
				$('#16a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(cyber_insurance_16b == null && response.cyber_insurance_16b_res == 'exist')
			{
				$('#16b').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(threat_detection_16c == null && response.threat_detection_16c_res == 'exist')
			{
				$('#16c').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(device_mdm_17 == null && response.device_mdm_17_res == 'exist')
			{
				$('#17').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(cyber_consultant_19 == null && response.cyber_consultantzz_19_res == 'exist')
			{
				$('#19').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
		  }
		}); 

		
	}
	</script>
	<script>
	/* Business continuity Procedures */
		$( document ).ready(function() {
		    $("#business_continuity_plan").change(function(){
			    if( $(this).val()=="1"){
					$("#business_continuity_procedures").show()
					$("#business_continuity_regular_backup").show()
				} else{
					$("#business_continuity_procedures").hide()
					$("#business_continuity_regular_backup").show()
				}
			});
			if( $("#business_continuity_plan").val()=="1"){
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
			if( $(this).val()=="1"){
				$("#training_iss").show()
				$("#accreditation_regular_audit").show()
			} else{
				$("#training_iss").hide()
				$("#accreditation_regular_audit").hide()
			}
		});
		if( $("#accreditation_iso_iec").val()=="1"){
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
			if( $(this).val()=="1"){
				$("#device_for_employees").show()
				$("#device_policy_software").show()
				$("#device_have").show()
			} else{
				$("#device_for_employees").hide()
				$("#device_policy_software").hide()
				$("#device_have").hide()
			}
		});
		if( $("#device_mdm").val()=="1"){
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
			if( $(this).val()=="1"){
				$("#vpn_home_remote_from_company").show()
				$("#vpn_have").show()
			} else{
				$("#vpn_home_remote_from_company").hide()
				$("#vpn_have").hide()
			}
		});
		if( $("#vpn_home_remote").val()=="1"){
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
			if( $(this).val()=="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
		});
		if( $("#consultancy_cyber_consultant").val()=="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
		});
	</script>
    <!-- Specific scripts -->
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	<script>
	$(function() {
	  $("form[name='questionaire_non_tech']").validate({
		rules: {
		  business_continuity_plan: "required",
		  training_staff : "required",
		  accreditation_iso_iec : "required",
		  password_policy_rules : "required",
		  reputation_management_member_cisp : "required",
		  reputation_management_cyber_insurance : "required",
		  device_mdm : "required",
		  vpn_home_remote : "required",
		  consultancy_cyber_consultantzz : "required",
		  reputation_management_threat_detection : "required",
			  
		},
		messages: {
		  business_continuity_plan: "This field is required",
		  training_staff : "This field is required",
		  accreditation_iso_iec : "This field is required",
		  password_policy_rules : "This field is required",
		  reputation_management_member_cisp : "This field is required",
		  reputation_management_cyber_insurance : "This field is required",
		  device_mdm : "This field is required",
		  vpn_home_remote : "This field is required",
		  consultancy_cyber_consultantzz : "This field is required",
		  reputation_management_threat_detection : "This field is required"
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

		$( "#mouse_move" ).mousemove(function( event ) {
		    var business_continuity_12a = $("#business_continuity_plan").val();
			var training_staff_13 = $("#training_staff").val();
			var accreditation_14 = $("#accreditation_iso_iec").val();
			var password_policy_15 = $("#password_policy").val();
			var cisp_16a = $("#cisp").val();
			var cyber_insurance_16b = $("#cyber_insurance").val();
			var threat_detection_16c = $("#threat_detection").val();
			var device_mdm_17 = $("#device_mdm").val();
			var cyber_consultant_19 = $("#consultancy_cyber_consultant_deleted").val();
			
			if(business_continuity_12a != null)
			{
				$('#12a').hide();
			}
			if(training_staff_13 != null)
			{
				$('#13').hide();
			}
			if(accreditation_14 != null)
			{
				$('#14').hide();
			}
			if(password_policy_15 != null)
			{
				$('#15').hide();
			}
			if(cisp_16a != null)
			{
				$('#16a').hide();
			}
			if(cyber_insurance_16b != null)
			{
				$('#16b').hide();
			}
			if(threat_detection_16c != null)
			{
				$('#16c').hide();
			}
			if(device_mdm_17 != null)
			{
				$('#17').hide();
			}
			if(cyber_consultant_19 != null)
			{
				$('#19').hide();
			}
		});
	</script>
<script>
	$('.business_continuity').click(function() {
		$('.del_industry').toggle();
	});

	$('.del_business_continuity_procedure_input_button').click(function() {
		$('.del_business_continuity_procedure_input').toggle();
	});

	$('.regular_backup').click(function() {
		$('.del_regular_backup').toggle();
	});

	$('.cybersecurity_training').click(function() {
		$('.cybersecurity_training_only').toggle();
	});

	$('.security_standerds').click(function() {
		$('.information_security_standers').toggle();
	});

	$('.password_policy').click(function() {
		$('.password_policy_rules').toggle();
	});

	$('.cisp_pertnership').click(function() {
		$('.cisp_partnership_rule').toggle();
	});

	$('.cyber_insurence').click(function() {
		$('.cyber_insurence_pertnership').toggle();
	});

	$('.threat_prvention').click(function() {
		$('.threat_prevention_detection').toggle();
	});

	$('.cloud_storage').click(function() {
		$('.del_cloud_storage').toggle();
	});
	
	$('.device_management').click(function() {
		$('.device_management_solution').toggle();
	});

	$('.vpn_home').click(function() {
		$('.del_vpn_home').toggle();
	});

	$('.cyber_consultent').click(function() {
		$('.cyber_consultent_solution').toggle();
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
			 $('.del_industry').hide();
			 $('.del_business_continuity_procedure_input').hide();
			 $('.del_regular_backup').hide();
			 $('.cybersecurity_training_only').hide();
			 $('.information_security_standers').hide();
			 $('.password_policy_rules').hide();
			 $('.cisp_partnership_rule').hide();
			 $('.cyber_insurence_pertnership').hide();
			 $('.threat_prevention_detection').hide();
			 $('.del_cloud_storage').hide();
			 $('.device_management_solution').hide();
			 $('.del_vpn_home').hide();
			 $('.cyber_consultent_solution').hide();
		}
		else if(key == 'business_continuity_security' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_industry').hide();
		}
		else if(key == 'business_continuity_procedure_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_business_continuity_procedure_input').hide();
		}else if(key == 'regular_backup' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_regular_backup').hide();
		}
		else if(key == 'cybersecurity_training' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cybersecurity_training_only').hide();
		}
		else if(key == 'security_standerd' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.information_security_standers').hide();
		}
		else if(key == 'password_policy_rules' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.password_policy_rules').hide();
		}
		else if(key == 'cisp_partnership' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cisp_partnership_rule').hide();
		}
		else if(key == 'cyber_insurence' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cyber_insurence_pertnership').hide();
		}
		else if(key == 'threat_prevention_detection' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.threat_prevention_detection').hide();
		}
		else if(key == 'cloud_storage' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cloud_storage').hide();
		}
		else if(key == 'device_management_solution' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.device_management_solution').hide();
		}
		else if(key == 'vpn_home' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_vpn_home').hide();
		}
		else if(key == 'cyber_consultent' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cyber_consultent_solution').hide();
		}
		else{
				if(key == 'business_continuity_security')
				{
					var update_array = 'UPDATE delegate_non_technical SET business_continuity_plan_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'business_continuity_procedure_input')
				{
					var update_array = 'UPDATE delegate_non_technical SET business_continuity_procedure_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'regular_backup')
				{
					var update_array = 'UPDATE delegate_non_technical SET regular_backup = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cybersecurity_training')
				{
					var update_array = 'UPDATE delegate_non_technical SET training_cybersecurity_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'security_standerd')
				{
					var update_array = 'UPDATE delegate_non_technical SET accreditation_security_standerd_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'password_policy_rules')
				{
					var update_array = 'UPDATE delegate_non_technical SET adaquate_password_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cisp_partnership')
				{
					var update_array = 'UPDATE delegate_non_technical SET cyber_security_information_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cyber_insurence')
				{
					var update_array = 'UPDATE delegate_non_technical SET cyber_insurence_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'threat_prevention_detection')
				{
					var update_array = 'UPDATE delegate_non_technical SET threat_detection_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cloud_storage')
				{
					var update_array = 'UPDATE delegate_non_technical SET cloud_storage = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'device_management_solution')
				{
					var update_array = 'UPDATE delegate_non_technical SET device_management_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'vpn_home')
				{
					var update_array = 'UPDATE delegate_non_technical SET vpn_home = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cyber_consultent')
				{
					var update_array = 'UPDATE delegate_non_technical SET need_consultant_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				//alert(update_array);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_nontech_info/delegate_assign',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div').show();
					 $('.del_industry').hide();
					 $('.business_continuity_procedure_input').hide();
					 $('.del_regular_backup').hide();
					 $('.cybersecurity_training_only').hide();
					 $('.information_security_standers').hide();
					 $('.password_policy_rules').hide();
					 $('.cisp_partnership_rule').hide();
					 $('.cyber_insurence_pertnership').hide();
					 $('.threat_prevention_detection').hide();
					 $('.del_cloud_storage').hide();
					 $('.device_management_solution').hide();
					 $('.del_vpn_home').hide();
					 $('.cyber_consultent_solution').hide();

					 if(key == 'business_continuity_security')
					 {
						 $("#business_continuity_image").html(response);
					 }
					 else if(key == 'business_continuity_procedure_input')
					 {
						 $("#business_continuity_procedure_input").html(response);
					 }
					 else if(key == 'regular_backup')
					 {
						 $("#regular_backup_image").html(response);
					 }
					 else if(key == 'cybersecurity_training')
					 {
						 $("#cybersecurity_training_image").html(response);
					 }
					 else if(key == 'security_standerd')
					 {
						 $("#security_standers_image").html(response);
					 }
					 else if(key == 'password_policy_rules')
					 {
						 $("#password_policy_image").html(response);
					 }
					 else if(key == 'cisp_partnership')
					 {
						 $("#cisp_image").html(response);
					 }
					 else if(key == 'cyber_insurence')
					 {
						 $("#cyber_insurence_image").html(response);
					 }
					 else if(key == 'threat_prevention_detection')
					 {
						 $("#threat_prevention_image").html(response);
					 }
					 else if(key == 'cloud_storage')
					 {
						 $("#cloud_storage_image").html(response);
					 }
					 else if(key == 'device_management_solution')
					 {
						 $("#device_management_image").html(response);
					 }
					 else if(key == 'vpn_home')
					 {
						 $("#vpn_home_image").html(response);
					 }
					 else if(key == 'cyber_consultent')
					 {
						 $("#cyber_consultent_image").html(response);
					 }
					
					 $(window).scrollTop(0);
				  }
				}); 
			   /* ajax code ends*/
		}
		
		
	}
	$(document).on('change', '#cyber_insurance', function(){
	   var status= $("#cyber_insurance").children("option").filter(":selected").val();
	   if(status==0){
	  window.open('https://partners.bewica.com/insurance?partner_id=elmoreprotectbox', '_blank');

	   }


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

