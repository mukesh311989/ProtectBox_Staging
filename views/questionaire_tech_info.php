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
.another_header
{
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
    <section id="sub_header"  style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Let's source your protection..
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
					if($this->session->flashdata('del_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_success');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_first_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_has')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_has');?></strong> </div>
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
				<li class=" arrow_success"><a href="<?php echo base_url('questionaire');?>"   class="red-gradient_success">Basics</a></li>
					<li class=" active arrow "><a href="<?php echo base_url('questionaire_tech_info');?>" class="red-gradient">Technical Info</a></li>
					<?php
					if($get_non_tech > 0)
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_nontech_info');?>" class="red-gradient_success">Non-Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Non-Technical Info</a></li>
					<?php
					}
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
					<div class="tab-pane " id="home">
					</div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane active" id="profile">
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
								<form action="<?php echo base_url("questionaire_tech_info/add_delegate");?>" method="post" class="delegate_modal" enctype="multipart/form-data">
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
								<form action="<?php echo base_url("questionaire_tech_info/add_delegate");?>"  method="post" enctype="multipart/form-data">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Add Delegate User</h5>
									  </div>
									  <div class="modal-body">
										<div class="form-group">
											<label for="exampleFormControlTextarea1" style="font-weight:normal;float:left">Delegate User's Email</label>
											<input class="form-control" type="email" name="delegate_mail" required>
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
						<?php
						$tab_one = $progress->tab_one;
						$tab_two = $progress->tab_two;
						$total_progress = $tab_one+$tab_two;

						?>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"> 65% </div>
						</div>
						<div style="margin-top:-10px;margin-bottom:20px;margin-right:20px;"><span>25 minutes to complete this section, 1 hour in total</span></div>
					<form method="POST" name="questionaire_tech_info" action="<?php echo base_url('questionaire_tech_info/add_data');?>">
					  <div class="form_title">
						<h3>
						  <strong><i class=" icon-desktop-3"></i></strong> Operating System
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>4</b> What Operating System do you use?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Please tell us the primary operating system used in your company." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> 
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="operating_system_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="os_use">
							  <select class="form-control del_operating_system reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'os_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->os_input;?>"><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->os_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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

						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
								  <select  name="operating_system" class="form-control" id="operating_system" >
									<option disabled="" selected=""> choose an option</option>
									<option  value="Windows 7 or below" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Windows 7 or below")?'selected':'');?>>Windows 7 or below</option>
									<option  value="Windows 8 or above" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Windows 8 or above")?'selected':'');?>> Windows 8 or above </option>
									<option  value="Mac" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Mac")?'selected':'');?>> Mac</option>4
									<option  value="Linux" <?php echo ((isset($technical_data->os_input) && $technical_data->os_input == "Linux")?'selected':'');?>>Linux</option>
								  </select>
								  <div id="4"></div>
							  </div>

							    <?php
								if(isset($this->session->userdata['salesforce']['operating_system_use']) && sizeof($this->session->userdata['salesforce']['operating_system_use']) > 0)
										{
								?>
								<span>Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['operating_system_use'];
										
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
										 print_r($this->session->userdata['xero']['operating_system_use']);
										 if(isset($this->session->userdata['xero']['operating_system_use']) && sizeof($this->session->userdata['xero']['operating_system_use']) > 0)
										 {
										?>
										<span>Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['operating_system_use'];
											
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
										 if(isset($this->session->userdata['sage']['operating_system_use']) && sizeof($this->session->userdata['sage']['operating_system_use']) > 0)
										 {
										?>
										<span>Sage Accounting shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_account_data =  array_unique($this->session->userdata['sage']['operating_system_use']);
											
										?>

											<div class="table-responsive" style="margin-top:15px;">
												<table id="" class="table table-striped table-bordered  example">
											
													<tbody>
														<?php
															$i = 1;
															foreach ($unique_account_data As $key)
														{
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
						  <strong><i class="icon-block-2"></i></strong> Antivirus
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>5</b> Do you have an antivirus product installed?&nbsp;<span style="color:#ec0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="antivirus_installed_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="antivirus_product">
							  <select class="form-control del_antivirus_installed reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'antivirus_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->antivirus_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->antivirus_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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

						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="antivirus_installed" id="antivirus">
								
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->antivirus_input) && $technical_data->antivirus_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->antivirus_input) && $technical_data->antivirus_input == "0")?'selected':'');?>> No </option>
									
								  </select>
								  <div id="5"></div>
							  </div>
							  <?php
								if(isset($this->session->userdata['salesforce']['antivirus_installed']) && sizeof($this->session->userdata['salesforce']['antivirus_installed']) > 0)
										{
											
								?>
								<span>Sage Financials shows:</span>&nbsp;&nbsp;
								<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['antivirus_installed'];
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
												<td ><?php echo date("d-m-Y" , $date_format);?></td>
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
							 if(isset($this->session->userdata['xero']['antivirus_installed']) && sizeof($this->session->userdata['xero']['antivirus_installed']) > 0)
							 {
							?>
							<span>Xero shows:</span>&nbsp;&nbsp;
							<?php 
								$unique_xero_data =  $this->session->userdata['xero']['antivirus_installed'];
								
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

							 if(isset($this->session->userdata['sage']['antivirus_installed']) && sizeof($this->session->userdata['sage']['antivirus_installed']) > 0)
							 {
							?>
							<span>Sage Accounting shows:</span>&nbsp;&nbsp;
							<?php 
								$unique_sage_data =  array_unique($this->session->userdata['sage']['antivirus_installed']);
							?>
									<div class="table-responsive" style="margin-top:15px;">
										<table id="" class="table table-striped table-bordered  example">
										
											<tbody>
												<?php
													$i = 1;
													foreach ($unique_sage_data As $key)
												{
													$date_format = strtotime($key['order_date']);
													//$trim_data = preg_replace('/[^1-9.]+/', '', $key['order_date']);
													//echo $data = date('m/d/Y', 1562652386157);
													
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
						  <strong><i class="icon-globe-2"></i></strong> Firewall
						</h3>
					  </div>
					 <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>6</b> Do you have more than basic system firewall?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Firewall monitors & controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="firewall_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="firewalzz">
							  <select class="form-control del_firewall reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'firewall_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->firewall_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->firewall_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="firewall" id="firewall">
								  
										<option disabled="" selected=""> choose an option</option>
										<option  value="1" <?php echo ((isset($technical_data->firewall_input) && $technical_data->firewall_input == "1")?'selected':'');?>> Yes </option>
										<option  value="0" <?php echo ((isset($technical_data->firewall_input) && $technical_data->firewall_input == "0")?'selected':'');?>> No </option>
									
								  </select>
								  
								  <div id="6"></div>
								 
							  </div>
									  <?php
						  		
								if(isset($this->session->userdata['salesforce']['basic_system_firewall']) && sizeof($this->session->userdata['salesforce']['basic_system_firewall']) > 0)
										{
								?>
								<span>Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['basic_system_firewall'];
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
										 if(isset($this->session->userdata['xero']['basic_system_firewall']) && sizeof($this->session->userdata['xero']['basic_system_firewall']) > 0)
										 {
										?>
										<span>Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data = $this->session->userdata['xero']['basic_system_firewall'];
											
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
										if(isset($this->session->userdata['sage']['basic_system_firewall']) && sizeof($this->session->userdata['sage']['basic_system_firewall']) > 0)
											{
										?>
										<span>Sage Accounting shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_sage_data = array_unique($this->session->userdata['sage']['basic_system_firewall']);
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
							  <label><b>7</b> Who manages your IT?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely.You may want to add them as a delegate user to answer some of these questions for you" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="manage_it_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="it_manage">
							  <select class="form-control del_manage_it reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'manage_it_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->manage_it_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->manage_it_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control " name="manage_it" onchange="java_script_:show(this.options[this.selectedIndex].value)" >
								<?php
									$it_management = $this->session->userdata['salesforce']['manage_it'];
									if(isset($it_management) && $it_management != ''){
								?>
									<option disabled="" value="" <?php echo ((strstr("",$it_management))?'selected':'')?>>Choose an option</option>
									<option  value="Your own system administrator in-house" <?php echo ((strstr("Your own system administrator in-house",$it_management))?'selected':'')?>>Your own system administrator in-house</option>
									<option  value="3rd party contracted by your organization" <?php echo ((strstr("3rd party contracted by your organization",$it_management))?'selected':'')?>>Third party contracted by your organization</option>
									<option  value="3rd party located in same building / facilities managed" <?php echo ((strstr("3rd party located in same building / facilities managed",$it_management))?'selected':'')?>>Third party located in same building / facilities managed</option>
									<option  value="None" <?php echo ((strstr("None",$it_management))?'selected':'')?>>None</option>
								<?php
									}else{
								?>
									<option disabled="" selected="" value="">Choose an option</option>
									<option  value="Your own system administrator in-house" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "Your own system administrator in-house")?'selected':'');?>>Your own system administrator in-house</option>
									<option  value="3rd party contracted by your organization" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "3rd party contracted by your organization")?'selected':'');?>>Third party contracted by your organization</option>
									<option  value="3rd party located in same building / facilities managed" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "3rd party located in same building / facilities managed")?'selected':'');?>>Third party located in same building / facilities managed</option>
									<option  value="None" <?php echo ((isset($technical_data->manage_it_input) && $technical_data->manage_it_input == "None")?'selected':'');?>>None</option>
								<?php
									}	
								?>
							    </select>
								<div id="7"></div>
								
							 </div>
						  </div>
						  <div class="col-md-12" id='hiddenDiv' style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;color:#F0A84C;font-weight:bold;font-size:15px;display:none;" href="javascript:void(0);">You may need to ask your third party provider for answers to the next sections (if you&acute;d like to review your third party&acute;s recommendations) or give them &acute;Delegate&acute; access (see &acute;Settings&acute; for this) to answer it themselves. Or answer &acute;Yes&acute; or &quot;Don&acute;t Know&quot; or &quot;None&quot; to these questions so that we don&acute;t include them in your bundles of solutions.</div>
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
							  <label><b>8a</b> Do you have internet?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us if your network is connected to the internet." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="internet_have_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="have_internet">
							  <select class="form-control del_internet_have reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'internet_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->internet_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->internet_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_have" id="internet_have" >
								<?php
									$have_internet = $this->session->userdata['salesforce']['have_internet'];
									if(isset($have_internet) && $have_internet != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_internet) && $have_internet == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_internet) && $have_internet == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_internet) && $have_internet == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->internet_input) && $technical_data->internet_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->internet_input) && $technical_data->internet_input == "0")?'selected':'');?>> No </option>
								<?php
									}		
								?>
								  </select>
								  <div id="8a"></div>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_wifi_lan" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class=""><b>8b</b> Do you have WiFi or LAN?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="internet_wifi_lan_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wifi_lan">
							  <select class="form-control del_internet_wifi_lan reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'internet_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->internet_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_internet_wifi_lan_val" value="<?php echo $del_access->internet_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->internet_option_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								 <select class="form-control " name="internet_wifi_lan" id="internet_wifi_lan_8b" onchange="wifi_lan_data(this.value);">
								<?php
									$wifi_or_lan = $this->session->userdata['salesforce']['wifi_or_lan'];
									if(isset($wifi_or_lan) && $wifi_or_lan != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($wifi_or_lan) && $wifi_or_lan == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($wifi_or_lan) && $wifi_or_lan == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($wifi_or_lan) && $wifi_or_lan == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->internet_option_input) && $technical_data->internet_option_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->internet_option_input) && $technical_data->internet_option_input == "0")?'selected':'');?>> No </option>
								<?php
									}
								?>
								  </select>
								  <div id="8b"></div>
							 </div>
						  </div>
						</div>
						<div class="row" id="internet_public_wifi" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8c</b> Is your wifi open to the public?<a data-container="body" class="tooltiplink" title="Please tell us if you allow non-employees access to the network." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="wifi_public_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wifi_public">
							  <select class="form-control del_wifi_public reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'wifi_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->wifi_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_wifi_public_val" value="<?php echo $del_access->wifi_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->wifi_option_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_public_wifi" >
									<?php
									$wifi_open_to_public = $this->session->userdata['salesforce']['wifi_open_to_public'];
									if(isset($wifi_open_to_public) && $wifi_open_to_public != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($wifi_open_to_public) && $wifi_open_to_public == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($wifi_open_to_public) && $wifi_open_to_public == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($wifi_open_to_public) && $wifi_open_to_public == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "0")?'selected':'');?>> No </option>
								<?php
									}		
								?>
								  </select>
							  </div>
						  </div>
						</div>

						<div class="row" id="internet_wpa2" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8d</b> Do you have WPA2 (Wi-Fi Protected Access 2) enabled?<a data-container="body" class="tooltiplink" title="WPA2 (Wi-Fi Protected Access 2) is a network security technology commonly used on Wi-Fi wireless networks. It's an upgrade from the original WPA technology, which was designed as a replacement for the older and much less secure  Wired Equivalent Privacy (WEP) . Please tell us if you have this enabled." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="wpa2_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wpa2_input">
							  <select class="form-control del_wpa2_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'wpa2_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->wpa2_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_wpa2_input_val" value="<?php echo $del_access->wpa2_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->wpa2_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_wpa2">
								<?php
									$wpa2_enabled = $this->session->userdata['salesforce']['wpa2_enabled'];
									if(isset($wpa2_enabled) && $wpa2_enabled != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($wpa2_enabled) && $wpa2_enabled == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($wpa2_enabled) && $wpa2_enabled == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($wpa2_enabled) && $wpa2_enabled == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->wpa2_input) && $technical_data->wpa2_input == "0")?'selected':'');?>> No </option>
								<?php
									}		
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="browser_use" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8e</b> What browser(s) do you use?<a data-container="body" class="tooltiplink" title="Please select if you use Internet Explorer, Firefox, Chrome or another browser e.g..Opera" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_browser_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="browser_input">
							  <select class="form-control del_browser_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'browser_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->browser_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_browser_input_val" value="<?php echo $del_access->browser_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->browser_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
				
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control "  id="other_browser" name="browser_use" onchange="browser_check();"  >
								  <?php
									$browser_use = $this->session->userdata['salesforce']['browser_use'];
									if(isset($browser_use) && $browser_use != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($browser_use) && $browser_use == "")?'selected':'');?>>Choose an option</option>
									<option  value="Internet Explorer" <?php echo ((strstr("Internet Explorer",$browser_use))?'selected':'')?>> Internet Explorer </option>
									<option  value="Firefox" <?php echo ((strstr("Firefox",$browser_use))?'selected':'')?>> Firefox </option>
									<option  value="Chrome" <?php echo ((strstr("Chrome",$browser_use))?'selected':'')?>> Chrome </option>
									<option  value="Edge (Windows 10)" <?php echo ((strstr("Edge (Windows 10)",$browser_use))?'selected':'')?>> Edge (Windows 10) </option>
									<option  value="Other-please specify" <?php echo ((strstr("Other-please specify",$browser_use))?'selected':'')?>> Other</option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="Internet Explorer" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Internet Explorer")?'selected':'');?>> Internet Explorer </option>
									<option  value="Firefox" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Firefox")?'selected':'');?>> Firefox </option>
									<option  value="Chrome" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Chrome")?'selected':'');?>> Chrome </option>
									<option  value="Edge (Windows 10)" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Edge (Windows 10)")?'selected':'');?>> Edge (Windows 10) </option>
									<option  value="Other-please specify" <?php echo ((isset($technical_data->browser_input) && $technical_data->browser_input == "Other-please specify")?'selected':'');?>> Other</option>
								<?php
									}		
								?>
								  </select>
							  </div>
						  </div>
						</div>

						<div class="row" id="hiddenBrowser" style="display:none">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please Specifty The Bowser Name?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Mention The Browser Name." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <input type="text" name="browser_other" value="<?php echo ((isset($technical_data->browser_name_input) && $technical_data->browser_name_input!="")?$technical_data->browser_name_input:'') ;?>" class="form-control required" >
							</div>
						  </div>
						</div>
						<div class="row" id="internet_browser_update" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8f</b> Do you or your systems administrator update your browser with the latest patches?<a data-container="body" class="tooltiplink" title="Please tell us if you update your browsers" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_update_browser_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="update_browser_input">
							  <select class="form-control del_update_browser_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'update_browser_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->update_browser_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_update_browser_input_val" value="<?php echo $del_access->update_browser_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->update_browser_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_browser_update"  >
								<?php
									$system_admin_update_browser = $this->session->userdata['salesforce']['system_admin_update_browser'];
									if(isset($system_admin_update_browser) && $system_admin_update_browser != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($system_admin_update_browser) && $system_admin_update_browser == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($system_admin_update_browser) && $system_admin_update_browser == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($system_admin_update_browser) && $system_admin_update_browser == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->update_browser_input) && $technical_data->update_browser_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->update_browser_input) && $technical_data->update_browser_input == "0")?'selected':'');?>> No </option>
								<?php
									}
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_email" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8g</b> Do you use email to communicate outside the business ?<a data-container="body" class="tooltiplink" title="Please tell us if you use email to contact others outside the business." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_email_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="email_input">
							  <select class="form-control del_email_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'email_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->email_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_email_input_val" value="<?php echo $del_access->email_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->email_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_email">
								<?php
									$email_to_communicate = $this->session->userdata['salesforce']['email_to_communicate'];
									if(isset($email_to_communicate) && $email_to_communicate != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($email_to_communicate) && $email_to_communicate == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($email_to_communicate) && $email_to_communicate == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($email_to_communicate) && $email_to_communicate == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->email_input) && $technical_data->email_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->email_input) && $technical_data->email_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_spam" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8h</b> Do you have spam filtering?&nbsp;<a data-container="body" class="tooltiplink" title="Spam filtering is a program used to detect unsolicited and unwanted email and prevent those messages from getting to a user's inbox. Like other types of filtering programs, a spam filter looks for certain criteria on which it bases judgments." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_spam_filtering_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="spam_filtering_input">
							  <select class="form-control del_spam_filtering_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'spam_filtering_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->spam_filtering_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_spam_filtering_input_val" value="<?php echo $del_access->spam_filtering_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->spam_filtering_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_spam"  >
								<?php
									$have_spam_filtering = $this->session->userdata['salesforce']['have_spam_filtering'];
									if(isset($have_spam_filtering) && $have_spam_filtering != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_spam_filtering) && $have_spam_filtering == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_spam_filtering) && $have_spam_filtering == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_spam_filtering) && $have_spam_filtering == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->spam_filtering_input) && $technical_data->spam_filtering_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->spam_filtering_input) && $technical_data->spam_filtering_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_ad_block" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8i</b> Do you integrate ad blocking software on your systems?&nbsp;<a data-container="body" class="tooltiplink" title="Please tell us if you use ad blockers which prevents advertisements from appearing on a webpage." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_ad_blocking_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="ad_blocking_input">
							  <select class="form-control del_ad_blocking_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'ad_blocking_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->ad_blocking_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_ad_blocking_input_val" value="<?php echo $del_access->ad_blocking_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->ad_blocking_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_ad_block"  >
								<?php
									$ad_blocking_software = $this->session->userdata['salesforce']['ad_blocking_software'];
									if(isset($ad_blocking_software) && $ad_blocking_software != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($ad_blocking_software) && $ad_blocking_software == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($ad_blocking_software) && $ad_blocking_software == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($ad_blocking_software) && $ad_blocking_software == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->ad_blocking_input) && $technical_data->ad_blocking_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->ad_blocking_input) && $technical_data->ad_blocking_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
				
			
						<div class="row" id="internet_web_host" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8j</b> Do you have Web hosting on your network? <a data-container="body" class="tooltiplink" title="Web hosting is the activity or business of providing storage space and access for websites." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_web_hosting_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="web_hosting_input">
							  <select class="form-control del_web_hosting_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'web_hosting_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->web_hosting_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_web_hosting_input_val" value="<?php echo $del_access->web_hosting_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->web_hosting_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_web_host"  >
								<?php
									$have_web_hosting_network = $this->session->userdata['salesforce']['have_web_hosting_network'];
									if(isset($have_web_hosting_network) && $have_web_hosting_network != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_web_hosting_network) && $have_web_hosting_network == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_web_hosting_network) && $have_web_hosting_network == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_web_hosting_network) && $have_web_hosting_network == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->web_hosting_input) && $technical_data->web_hosting_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->web_hosting_input) && $technical_data->web_hosting_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_inhouse_remote" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8k</b> Do you have web hosting in house or remote?<a data-container="body" class="tooltiplink" title="Are your webservers accessible by external third parties  via the internet?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_web_hosting_option_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="web_hosting_option_input">
							  <select class="form-control del_web_hosting_option_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'web_hosting_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->web_hosting_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_web_hosting_option_input_val" value="<?php echo $del_access->web_hosting_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->web_hosting_option_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								 <select class="form-control " name="internet_inhouse_remote"  >
								<?php
									$have_web_hosting_inhouse_remote = $this->session->userdata['salesforce']['have_web_hosting_inhouse_remote'];
									if(isset($have_web_hosting_inhouse_remote) && $have_web_hosting_inhouse_remote != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($have_web_hosting_inhouse_remote) && $have_web_hosting_inhouse_remote == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($have_web_hosting_inhouse_remote) && $have_web_hosting_inhouse_remote == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($have_web_hosting_inhouse_remote) && $have_web_hosting_inhouse_remote == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="inhouse" <?php echo ((isset($technical_data->web_hosting_option_input) && $technical_data->web_hosting_option_input == "inhouse")?'selected':'');?>> In-house </option>
									<option  value="remote" <?php echo ((isset($technical_data->web_hosting_option_input) && $technical_data->web_hosting_option_input == "remote")?'selected':'');?>> Remote </option>
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
						  <strong><i class="icon-key-5"></i></strong> Access Control
						</h3>
					  </div>
					  <div class="step">
						  <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>9a</b> Do you know what hacking is?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="hacking_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="is_hacking">
							  <select class="form-control del_hacking reset_onchange"  name="hacking" style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'hacking_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->hacking_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->hacking_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="hacking" id="access_control_what">
								<?php
									$what_hacking_is = $this->session->userdata['salesforce']['what_hacking_is'];
									if(isset($what_hacking_is) && $what_hacking_is != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($what_hacking_is) && $what_hacking_is == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($what_hacking_is) && $what_hacking_is == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($what_hacking_is) && $what_hacking_is == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->hacking_input) && $technical_data->hacking_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->hacking_input) && $technical_data->hacking_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
								  <div id="9a"></div>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_logs" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9b</b> Do you keep logs?&nbsp;<a data-container="body" class="tooltiplink" title="Does your IT system automatically keep activity logs about system use and/or network activity?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_logs_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="logs_input">
							  <select class="form-control del_logs_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'logs_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->logs_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_logs_input_val" value="<?php echo $del_access->logs_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->logs_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="access_control_logs" >
								<?php
									$keep_logs = $this->session->userdata['salesforce']['keep_logs'];
									if(isset($keep_logs) && $keep_logs != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($keep_logs) && $keep_logs == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($keep_logs) && $keep_logs == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($keep_logs) && $keep_logs == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->logs_input) && $technical_data->logs_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->logs_input) && $technical_data->logs_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_update_software" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9c</b> Do you regularly update your software?<a data-container="body" class="tooltiplink" title="Do you keep your systems patched." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_software_update_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="software_update_input">
							  <select class="form-control del_software_update_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'software_update_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->software_update_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_software_update_input_val" value="<?php echo $del_access->software_update_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->software_update_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="update_software" >
								<?php
									$regularly_update_software = $this->session->userdata['salesforce']['regularly_update_software'];
									if(isset($regularly_update_software) && $regularly_update_software != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($regularly_update_software) && $regularly_update_software == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($regularly_update_software) && $regularly_update_software == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($regularly_update_software) && $regularly_update_software == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->software_update_input) && $technical_data->software_update_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->software_update_input) && $technical_data->software_update_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_encrypt" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9d</b> Do you encrypt your data?<a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_data_encrypt_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="data_encrypt_input">
							  <select class="form-control del_data_encrypt_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'data_encrypt_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->data_encrypt_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_data_encrypt_input_val" value="<?php echo $del_access->data_encrypt_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->data_encrypt_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="encrypt" >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->data_encrypt_input) && $technical_data->data_encrypt_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->data_encrypt_input) && $technical_data->data_encrypt_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
							<div style="padding:10px;">
							  <?php
								if(isset($this->session->userdata['salesforce']['encrypt_data']) && sizeof($this->session->userdata['salesforce']['encrypt_data']) > 0)
										{
								?>
								<span style="margin-top:20px;margin-bottom:20px;">Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['encrypt_data'];
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
												<td ><?php echo $this->session->userdata['salesforce']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
											  </tr>
											<?php
											}
											?>
									</tbody>
										</table>
									</div>

										 <?php
											}
										 if(isset($this->session->userdata['xero']['encrypt_data']) && sizeof($this->session->userdata['xero']['encrypt_data']) > 0)
										 {
										?>
										<span style="margin-top:20px;margin-bottom:20px;">Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['encrypt_data'];
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
										if(isset($this->session->userdata['sage']['encrypt_data']) && sizeof($this->session->userdata['sage']['encrypt_data']) > 0)
										 {
										?>
										<span style="margin-top:20px;margin-bottom:20px;">Sage Accounting shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_sage_data =  array_unique($this->session->userdata['sage']['encrypt_data']);
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
						 
						  	 
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label><b>9e</b> Do you provide differing levels of access to your systems? <span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Do your systems have tier access? " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a><br/>E.g. Administrator access, user access. &nbsp;  
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="access_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="access_levels">
							  <select class="form-control del_access reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'system_access_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(!empty($get_delegate_info))
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(!empty($get_del_name))
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->system_access_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_access_val" value="<?php echo $del_access->system_access_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->system_access_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
							<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="access" id="access">
								<?php
									$differing_access_levels = $this->session->userdata['salesforce']['differing_access_levels'];
									if(isset($differing_access_levels) && $differing_access_levels != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($differing_access_levels) && $differing_access_levels == "")?'selected':'');?>>Choose an option</option>
									<option  value="1" <?php echo ((isset($differing_access_levels) && $differing_access_levels == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($differing_access_levels) && $differing_access_levels == "0")?'selected':'');?>> No </option>
								<?php
									}else{
								?>
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($technical_data->system_access_input) && $technical_data->system_access_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($technical_data->system_access_input) && $technical_data->system_access_input == "0")?'selected':'');?>> No </option>
								<?php
									}	
								?>
								  </select>
								  <div id="9e"></div>
								 </div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9f</b> Do you use Open Directory or Active Directory service ?<a data-container="body" class="tooltiplink" title="It authenticates and authorizes all users and computers in a Windows domain type network. Open Directory is a directory service which is software which stores and organises information about a computer network's users and network resources and which allows network administrators to manage users' access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="directory_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="open_active_dir">
								  <select class="form-control directory reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'directory_service_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->directory_service_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->directory_service_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
									<select class="form-control " name="directory" >
								<?php
									$open_active_directory_service = $this->session->userdata['salesforce']['open_active_directory_service'];
									if(isset($open_active_directory_service) && $open_active_directory_service != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($open_active_directory_service) && $open_active_directory_service == "")?'selected':'');?>>Choose an option</option>
									<option  value="Active Directory" <?php echo ((strstr("Active Directory",$open_active_directory_service))?'selected':'')?>>Active Directory</option>
									 <option  value="Open Directory" <?php echo ((strstr("Open Directory",$open_active_directory_service))?'selected':'')?>>Open Directory</option>
									 <option  value="Both" <?php echo ((strstr("Both",$open_active_directory_service))?'selected':'')?>>Both</option>
									 <option  value="Neither" <?php echo ((strstr("Neither",$open_active_directory_service))?'selected':'')?>>Neither</option>
									 <option  value="Don't know" <?php echo ((strstr("Don't know",$open_active_directory_service))?'selected':'')?>>Don't know</option>
								<?php
									}else{
								?>
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="Active Directory" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Active Directory")?'selected':'');?>>Active Directory</option>
									 <option  value="Open Directory" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Open Directory")?'selected':'');?>>Open Directory</option>
									 <option  value="Both" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Both")?'selected':'');?>>Both</option>
									 <option  value="Neither" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Neither")?'selected':'');?>>Neither</option>
									 <option  value="Don't know" <?php echo ((isset($technical_data->directory_service_input) && $technical_data->directory_service_input == "Don't know")?'selected':'');?>>Don't know</option>
								<?php
									}	
								?>
									</select>
								</div>
								</div>
							  </div>
							 <div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9g</b> Do you use Two factor authentication?<a data-container="body" class="tooltiplink" title="Two-factor authentication (also known as 2FA) is a method of confirming a user's claimed identity by using a combination of two different components. These components may be something that the user knows, something that the user possesses or something that is inseparable from the user. " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="authentication_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								 <div id="two_factorzz">
								  <select class="form-control authentication reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'two_factor_authentication_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->two_factor_authentication_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->two_factor_authentication_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="authentication" >
							
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "0")?'selected':'');?>> No </option>
								
								  </select>
								 </div>
								 <div style="padding:10px;">
								 		   <?php
								if(isset($this->session->userdata['salesforce']['two_factor_authentication']) && sizeof($this->session->userdata['salesforce']['two_factor_authentication']) > 0)
										{
								?>
								<span>Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['two_factor_authentication'];
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
															<td style=" border:1px solid black;"><?php echo date("d-m-Y", $date_format);?></td>
															<td style=" border:1px solid black;"><?php echo $key['product'];?></td>
															<td style=" border:1px solid black;"><?php echo $this->session->userdata['salesforce']['currency']?>&nbsp;<?php echo round($key['price']);?></td>
														  </tr>
														<?php
														}
														?>
													
												</tbody>
											</table>
										</div>

										 <?php
											}
										 if(isset($this->session->userdata['xero']['two_factor_authentication']) && sizeof($this->session->userdata['xero']['two_factor_authentication']) > 0)
										 {
										?>
										<span>Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  $this->session->userdata['xero']['two_factor_authentication'];
											
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
										if(isset($this->session->userdata['sage']['two_factor_authentication']) && sizeof($this->session->userdata['sage']['two_factor_authentication']) > 0)
										 {
										?>
										<span>Sage Accounting shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_sage_data =  array_unique($this->session->userdata['sage']['two_factor_authentication']);
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
														<td><?php echo $this->session->userdata['xero']['currency'];?>&nbsp;<?php echo round($key['price']);?></td>
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
							  <div class="row">
								<div class="col-md-6 col-sm-6">
								   <div class="form-group">
									 <label class="not_required"><b>9h</b> Do you secure your premises from a physical point of view?<a data-container="body" title=" Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="secure_premises_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="secure_premise">
								  <select class="form-control secure_premises reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'premises_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->premises_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->premises_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						 
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control" name="secure_premises">
								<?php
									$secure_premise_from_physical_point = $this->session->userdata['salesforce']['secure_premise_from_physical_point'];
									if(isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point != ''){
								?>
									<option disabled="" value="" <?php echo ((isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point == "")?'selected':'');?>>Choose an option</option>
									<option  value="Yes" <?php echo ((isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point == "Yes")?'selected':'');?>> Yes </option>
									 <option  value="No" <?php echo ((isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point == "No")?'selected':'');?>> No </option>
									 <option  value="N/A" <?php echo ((isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point == "N/A")?'selected':'');?>> N/A </option>
									 <option  value="Don't know" <?php echo ((isset($secure_premise_from_physical_point) && $secure_premise_from_physical_point == "Don't know")?'selected':'');?>> Don't know</option>
								<?php
									}else{
								?>
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="Yes" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "Yes")?'selected':'');?>> Yes </option>
									 <option  value="No" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "No")?'selected':'');?>> No </option>
									 <option  value="N/A" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "N/A")?'selected':'');?>> N/A </option>
									 <option  value="Don’t know" <?php echo ((isset($technical_data->premises_input) && $technical_data->premises_input == "Don’t know")?'selected':'');?>> Don't know</option>
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
						  <strong><i class="icon-database"></i></strong> Data
						</h3>
					  </div>
					  <div class="step">
						 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10a</b> If your business involves, sensitive data rich activities such as e-commerce, internet banking or confidential email etc,do you encrypt your data by using public key infrastructure (PKI) to manage your digital signatures and wifi certificates?&nbsp;<a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. Do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it.Public key infrastructure is a set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption. The purpose of a PKI is to facilitate the secure electronic transfer of information for a range of network activities such as e-commerce, internet banking and confidential email. It is required for activities where simple passwords are an inadequate authentication method and more rigorous proof is required to confirm the identity of the parties involved in the communication and to validate the information being transferred." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="public_key_infrastructure_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="sense_data">
								  <select class="form-control public_key_infrastructure_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'public_key_infrastructure_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->public_key_infrastructure_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->public_key_infrastructure_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="public_key_infrastructure_input"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->public_key_infrastructure_input) && $technical_data->public_key_infrastructure_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->public_key_infrastructure_input) && $technical_data->public_key_infrastructure_input == "0")?'selected':'');?>> No </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10b</b> Do you have email security? <a data-container="body" class="tooltiplink" title="Keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="server_option_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
							<div id="email_div">
								  <select class="form-control server_option reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'email_input_score',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->email_input_score;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <input type="hidden" class="server_option_val" value="<?php echo $del_access->email_input_score;?>" style="width:200px;height:30px;">
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->email_input_score == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="server_option"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="yes" <?php echo ((isset($technical_data->server_option_input) && $technical_data->server_option_input == "yes")?'selected':'');?>> Yes </option>
									<option  value="no" <?php echo ((isset($technical_data->server_option_input) && $technical_data->server_option_input == "no")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
							  <div style="padding:10px;">
							  <?php
								if(isset($this->session->userdata['salesforce']['security_monitoring_solution']) && sizeof($this->session->userdata['salesforce']['security_monitoring_solution']) > 0)
										{
								?>
								<span style="margin-top:20px;margin-bottom:20px;">Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['security_monitoring_solution'];
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
												<td><?php echo $this->session->userdata['salesforce']['currency']?>&nbsp;<?php echo round($key['price']);?></td>
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
											$unique_xero_data = $this->session->userdata['xero']['security_monitoring_solution'];	
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

										if(isset($this->session->userdata['sage']['security_monitoring_solution']) && sizeof($this->session->userdata['sage']['security_monitoring_solution']) > 0)
										 {
										?>
											<span style="margin-top:20px;margin-bottom:20px;">Sage Accounting shows:</span>&nbsp;&nbsp;
											<?php 
												$unique_sage_data = array_unique($this->session->userdata['sage']['security_monitoring_solution']);	
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
							  <label class="not_required"><b>11</b> Would you use a managed service provider (MSP), if you don't have a MSP? <a data-container="body" class="tooltiplink" title="A managed service solution provider (MSP or sometimes also called a MSSP) is a multi technology purpose solution provided by one company that remotely manages a customer's IT infrastructure and/or end-user systems, typically on a proactive basis and under a subscription model. In contrast to IT projects that tend to be one-time transactions. MSPs often provide their offerings under a service-level agreement, a contractual arrangement between the MSP and its customer that spells out the performance and quality metrics that will govern the relationship." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="managed_msp_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="msp_div">
								  <select class="form-control managed_msp_input reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'managed_msp_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $this->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->managed_msp_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $this->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->managed_msp_input == 1)
										  {
											  $del_name = $this->questionaire_m->get_sme($assign_del->user_id);
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
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="managed_msp_input"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($technical_data->managed_msp_input) && $technical_data->managed_msp_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($technical_data->managed_msp_input) && $technical_data->managed_msp_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
							  <div style="padding:10px;">
							      <?php
								if(isset($this->session->userdata['salesforce']['have_msp']) && sizeof($this->session->userdata['salesforce']['have_msp']) > 0)
										{
								?>
								<span>Sage Financials shows:</span>&nbsp;&nbsp;
									<?php 
										$unique_sage_data = $this->session->userdata['salesforce']['have_msp'];
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
												<td><?php echo date("d-m-y", $date_format);?></td>
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
										 if(isset($this->session->userdata['xero']['have_msp']) && sizeof($this->session->userdata['xero']['have_msp']) > 0)
										 {
										?>
										<span>Xero shows:</span>&nbsp;&nbsp;
										<?php 
											$unique_xero_data =  array_unique($this->session->userdata['xero']['have_msp']);
											
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
										?>

								
									</div>

								

						  </div>
					  	   <div class="col-md-12 text-right">
							<button name="save_continue" type="submit" value="skip" class="btn btn-previous btn-medium" onclick="do_something();">Skip</button>
							<a href="<?php echo base_url('questionaire');?>" class="btn btn-previous btn-medium">Previous</a>
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
    <!-- Specific scripts -->
    <script src="<?php echo base_url();?>js/jquery.validate.js">
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
		});

		function do_something(){
			$("form[name='questionaire_tech_info']").validate().cancelSubmit = true;
		}
	</script>

<?php
if($this->session->flashdata('skip_flash') && !empty($this->session->flashdata('skip_flash'))){
	$flash_array = $this->session->flashdata('skip_flash');
?>
	<script>
	var response = <?php echo json_encode($flash_array); ?>;
	if(response.os_4_res == '1')
	{
		$("#4").html('<label for="operating_system" generated="true" class="error">This field is required</label>');
	}
	if(response.antivirus_5_res == '1')
	{
		$("#5").html('<label for="antivirus_installed" generated="true" class="error">This field is required</label>');
	}
	if(response.firewall_6_res == '1')
	{
		$("#6").html('<label for="firewall" generated="true" class="error">This field is required</label>');
	}
	if(response.manage_it_7_res == '1')
	{
		$("#7").html('<label for="manage_it" generated="true" class="error">This field is required</label>');
	}
	if(response.internet_have_8a_res == '1')
	{
		$("#8a").html('<label for="internet_have" generated="true" class="error">This field is required</label>');
	}
	if(response.internet_wifi_lan_8b_res == '1')
	{
		$("#8b").html('<label for="internet_wifi_lan" generated="true" class="error">This field is required</label>');
	}
	if(response.hacking_9a_res == '1')
	{
		$("#9a").html('<label for="access_control_what" generated="true" class="error">This field is required</label>');
	}
	if(response.access_9e_res == '1')
	{
		$("#9e").html('<label for="access" generated="true" class="error">This field is required</label>');
	}
	</script>
<?php
}
?>

<script>
	function skip_error(){
		var operating_system_4 = $("#operating_system").val();
		var antivirus_5 = $("#antivirus").val();
		var firewall_6 = $("#firewall").val();
		var manage_it_7 = $("#manage_it").val();
		var internet_have_8a = $("#internet_have").val();
		var wifi_lan_8b = $("#internet_wifi_lan_8b").val();
		var hacking_9a = $("#access_control_what").val();
		var access_9e = $("#access").val();
		
		$.ajax({
		  url: '<?php echo base_url();?>questionaire_tech_info/check_delegate',
		  type: "post",
		  dataType: "json",
		  success: function(response){
			if(operating_system_4 == null && response.os_4_res == 'exist')
			{
				$('#4').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(antivirus_5 == null && response.antivirus_5_res == 'exist')
			{
				$('#5').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(firewall_6 == null && response.firewall_6_res == 'exist')
			{
				$('#6').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(manage_it_7 == null && response.manage_it_7_res == 'exist')
			{
				$('#7').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(internet_have_8a == null && response.internet_have_8a_res == 'exist')
			{
				$('#8a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}else if(internet_have_8a == '1' && response.internet_have_8a_res == 'exist')
			{
				if(wifi_lan_8b == null && response.internet_wifi_lan_8b_res == 'exist')
				{
					$('#8b').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
				}
			}
			
			if(hacking_9a == null && response.hacking_9a_res == 'exist')
			{
				$('#9a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(access_9e == null && response.access_9e_res == 'exist')
			{
				$('#9e').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
		  }
		}); 


		
	}
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


<script> 	
	function browser_show(select_item) {
	
	    if (select_item == "other") {
			
		    hiddenBrowser.style.visibility='visible';
			hiddenBrowser.style.display='block';
			Form.fileURL.focus();
		} 
		else{
			hiddenBrowser.style.visibility='hidden';
			hiddenBrowser.style.display='none';
		}
	}	
</script> 

	<script>
		$(function() {
		  $("form[name='questionaire_tech_info']").validate({
			rules: {
			  operating_system: "required",
			  antivirus_installed : "required",

			  firewall : "required",
			  manage_it : "required",
			  internet_have : "required",
			  internet_wifi_lan : "required",
			  browser_other : "required",
			  hacking : "required",
			  access : "required",
			 
			},
			messages: {
			  operating_system: "This field is required",
			  antivirus_installed : "This field is required",
			  firewall : "This field is required",
			  manage_it : "This field is required",
			  internet_have : "This field is required",
			  internet_wifi_lan : "This field is required",
			  browser_other : "This field is required",
			  hacking : "This field is required",
			  access : "This field is required",
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
	
	
		});


		$( "#mouse_move" ).mousemove(function( event ) {
		    var operating_system_4 = $("#operating_system").val();
			var antivirus_5 = $("#antivirus").val();
			var firewall_6 = $("#firewall").val();
			var manage_it_7 = $("#manage_it").val();
			var internet_have_8a = $("#internet_have").val();
			var hacking_9a = $("#access_control_what").val();
			var access_9e = $("#access").val();
			
			if(operating_system_4 != null)
			{
				$('#4').hide();
			}
			if(antivirus_5 != null)
			{
				$('#5').hide();
			}
			if(firewall_6 != null)
			{
				$('#6').hide();
			}
			if(manage_it_7 != null)
			{
				$('#7').hide();
			}
			if(internet_have_8a != null)
			{
				$('#8a').hide();
			}
			
			if(hacking_9a != null)
			{
				$('#9a').hide();
			}
			if(access_9e != null)
			{
				$('#9e').hide();
			}
		});

		function wifi_lan_data(e){
			if(e != null)
			{
				$('#8b').hide();
			}
		}
</script>
<script>
function browser_check()
{
	var browser_val = $('#other_browser').val();
	if(browser_val == 'Other-please specify')
	{
		$('#hiddenBrowser').show();
	}else{
		$('#hiddenBrowser').hide();
	}
}
</script>

<script>
	$('.operating_system_button').click(function() {
		$('.del_operating_system').toggle();
	});

	$('.antivirus_installed_button').click(function() {
		$('.del_antivirus_installed').toggle();
	});

	$('.firewall_button').click(function() {
		$('.del_firewall').toggle();
	});

	$('.manage_it_button').click(function() {
		$('.del_manage_it').toggle();
	});

	$('.internet_have_button').click(function() {
		$('.del_internet_have').toggle();
	});

	$('.internet_wifi_lan_button').click(function() {
		$('.del_internet_wifi_lan').toggle();
	});

	$('.wifi_public_button').click(function() {
		$('.del_wifi_public').toggle();
	});

	$('.wpa2_input_button').click(function() {
		$('.del_wpa2_input').toggle();
	});

	$('.del_browser_button').click(function() {
		$('.del_browser_input').toggle();
	});

	$('.del_update_browser_button').click(function() {
		$('.del_update_browser_input').toggle();
	});

	$('.del_email_input_button').click(function() {
		$('.del_email_input').toggle();
	});

	$('.del_spam_filtering_input_button').click(function() {
		$('.del_spam_filtering_input').toggle();
	});

	$('.del_ad_blocking_input_button').click(function() {
		$('.del_ad_blocking_input').toggle();
	});

	$('.del_web_hosting_input_button').click(function() {
		$('.del_web_hosting_input').toggle();
	});

	$('.del_web_hosting_option_input_button').click(function() {
		$('.del_web_hosting_option_input').toggle();
	});

	$('.hacking_button').click(function() {
		$('.del_hacking').toggle();
	});

	$('.del_logs_input_button').click(function() {
		$('.del_logs_input').toggle();
	});

	$('.del_software_update_input_button').click(function() {
		$('.del_software_update_input').toggle();
	});

	$('.del_data_encrypt_input_button').click(function() {
		$('.del_data_encrypt_input').toggle();
	});

	$('.access_button').click(function() {
		$('.del_access').toggle();
	});

	$('.directory_button').click(function() {
		$('.directory').toggle();
	});

	$('.authentication_button').click(function() {
		$('.authentication').toggle();
	});

	$('.secure_premises_button').click(function() {
		$('.secure_premises').toggle();
	});

	$('.public_key_infrastructure_input_button').click(function() {
		$('.public_key_infrastructure_input').toggle();
	});

	$('.server_option_button').click(function() {
		$('.server_option').toggle();
	});

	$('.managed_msp_input_button').click(function() {
		$('.managed_msp_input').toggle();
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
			 $('.del_operating_system').hide();
			 $('.del_antivirus_installed').hide();
			 $('.del_firewall').hide();
			 $('.del_manage_it').hide();
			 $('.del_internet_have').hide();
			 $('.del_internet_wifi_lan').hide();
			 $('.del_wifi_public').hide();
			 $('.del_wpa2_input').hide();
			 $('.del_browser_input').hide();
			 $('.del_update_browser_input').hide();
			 $('.del_email_input').hide();
			 $('.del_spam_filtering_input').hide();
			 $('.del_ad_blocking_input').hide();
			 $('.del_web_hosting_input').hide();
			 $('.del_web_hosting_option_input').hide();
			 $('.del_hacking').hide();
			 $('.del_logs_input').hide();
			 $('.del_software_update_input').hide();
			 $('.del_data_encrypt_input').hide();
			 $('.del_access').hide();
			 $('.directory').hide();
			 $('.authentication').hide();
			 $('.secure_premises').hide();
			 $('.public_key_infrastructure_input').hide();
			 $('.server_option').hide();
			 $('.managed_msp_input').hide();
		}
		else if(key == 'os_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_operating_system').hide();
		}
		else if(key == 'antivirus_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_antivirus_installed').hide();
		}
		else if(key == 'firewall_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_firewall').hide();
		}
		else if(key == 'manage_it_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_manage_it').hide();
		}
		else if(key == 'internet_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_internet_have').hide();
		}
		else if(key == 'internet_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_internet_wifi_lan').hide();
		}
		else if(key == 'wifi_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_wifi_public').hide();
		}
		else if(key == 'wpa2_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_wpa2_input').hide();
		}
		else if(key == 'browser_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_browser_input').hide();
		}
		else if(key == 'update_browser_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_update_browser_input').hide();
		}
		else if(key == 'email_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_email_input').hide();
		}
		else if(key == 'spam_filtering_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_spam_filtering_input').hide();
		}
		else if(key == 'ad_blocking_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_ad_blocking_input').hide();
		}
		else if(key == 'web_hosting_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_web_hosting_input').hide();
		}
		else if(key == 'web_hosting_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_web_hosting_option_input').hide();
		}
		else if(key == 'hacking_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_hacking').hide();
		}
		else if(key == 'logs_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_logs_input').hide();
		}
		else if(key == 'software_update_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_software_update_input').hide();
		}
		else if(key == 'data_encrypt_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_data_encrypt_input').hide();
		}
		else if(key == 'system_access_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_access').hide();
		}
		else if(key == 'directory_service_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.directory').hide();
		}
		else if(key == 'two_factor_authentication_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.authentication').hide();
		}
		else if(key == 'premises_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.secure_premises').hide();
		}
		else if(key == 'public_key_infrastructure_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.public_key_infrastructure_input').hide();
		}
		else if(key == 'email_input_score' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.server_option').hide();
		}
		else if(key == 'managed_msp_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.managed_msp_input').hide();
		}
		else{
				if(key == 'os_input'){
					var update_array = 'UPDATE delegate_technical SET os_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'antivirus_input'){
					var update_array = 'UPDATE delegate_technical SET antivirus_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'firewall_input'){
					var update_array = 'UPDATE delegate_technical SET firewall_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'manage_it_input'){
					var update_array = 'UPDATE delegate_technical SET manage_it_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'internet_input'){
					var update_array = 'UPDATE delegate_technical SET internet_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'internet_option_input'){
					var update_array = 'UPDATE delegate_technical SET internet_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'wifi_option_input'){
					var update_array = 'UPDATE delegate_technical SET wifi_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'wpa2_input'){
					var update_array = 'UPDATE delegate_technical SET wpa2_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'browser_input'){
					var update_array = 'UPDATE delegate_technical SET browser_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'update_browser_input'){
					var update_array = 'UPDATE delegate_technical SET update_browser_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'email_input'){
					var update_array = 'UPDATE delegate_technical SET email_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'spam_filtering_input'){
					var update_array = 'UPDATE delegate_technical SET spam_filtering_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'ad_blocking_input'){
					var update_array = 'UPDATE delegate_technical SET ad_blocking_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'web_hosting_input'){
					var update_array = 'UPDATE delegate_technical SET web_hosting_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'web_hosting_option_input'){
					var update_array = 'UPDATE delegate_technical SET web_hosting_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'hacking_input'){
					var update_array = 'UPDATE delegate_technical SET hacking_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'logs_input'){
					var update_array = 'UPDATE delegate_technical SET logs_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'software_update_input'){
					var update_array = 'UPDATE delegate_technical SET software_update_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'data_encrypt_input'){
					var update_array = 'UPDATE delegate_technical SET data_encrypt_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'system_access_input'){
					var update_array = 'UPDATE delegate_technical SET system_access_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'directory_service_input'){
					var update_array = 'UPDATE delegate_technical SET directory_service_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'two_factor_authentication_input'){
					var update_array = 'UPDATE delegate_technical SET two_factor_authentication_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'premises_input'){
					var update_array = 'UPDATE delegate_technical SET premises_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'public_key_infrastructure_input'){
					var update_array = 'UPDATE delegate_technical SET public_key_infrastructure_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'email_input_score'){
					var update_array = 'UPDATE delegate_technical SET email_input_score = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'managed_msp_input'){
					var update_array = 'UPDATE delegate_technical SET managed_msp_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				
				//alert(del);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_tech_info/delegate_assign',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div').show();
					 $('.del_operating_system').hide();
					 $('.del_antivirus_installed').hide();
					 $('.del_firewall').hide();
					 $('.del_manage_it').hide();
					 $('.del_internet_have').hide();
					 $('.del_internet_wifi_lan').hide();
					 $('.del_hacking').hide();
					 $('.del_access').hide();
					 $('.directory').hide();
					 $('.authentication').hide();
					 $('.secure_premises').hide();
					 $('.public_key_infrastructure_input').hide();
					 $('.server_option').hide();
					 $('.managed_msp_input').hide();

					if(key == 'os_input'){
						 $("#os_use").html(response);
					 }else if(key == 'antivirus_input'){
						$("#antivirus_product").html(response);
					 }else if(key == 'firewall_input'){
						$("#firewalzz").html(response);
					 }else if(key == 'manage_it_input'){
						$("#it_manage").html(response);
					 }else if(key == 'internet_input'){
						$("#have_internet").html(response);
					 }else if(key == 'internet_option_input'){
						$("#wifi_lan").html(response);
					 }else if(key == 'wifi_option_input'){
						$("#wifi_public").html(response);
					 }else if(key == 'wpa2_input'){
						$("#wpa2_input").html(response);
					 }else if(key == 'browser_input'){
						$("#browser_input").html(response);
					 }else if(key == 'update_browser_input'){
						$("#update_browser_input").html(response);
					 }else if(key == 'email_input'){
						$("#email_input").html(response);
					 }else if(key == 'spam_filtering_input'){
						$("#spam_filtering_input").html(response);
					 }else if(key == 'ad_blocking_input'){
						$("#ad_blocking_input").html(response);
					 }else if(key == 'web_hosting_input'){
						$("#web_hosting_input").html(response);
					 }else if(key == 'web_hosting_option_input'){
						$("#web_hosting_option_input").html(response);
					 }else if(key == 'hacking_input'){
						$("#is_hacking").html(response);
					 }else if(key == 'logs_input'){
						$("#logs_input").html(response);
					 }else if(key == 'software_update_input'){
						$("#software_update_input").html(response);
					 }else if(key == 'data_encrypt_input'){
						$("#data_encrypt_input").html(response);
					 }else if(key == 'system_access_input'){
						$("#access_levels").html(response);
					 }else if(key == 'directory_service_input'){
						$("#open_active_dir").html(response);
					 }else if(key == 'two_factor_authentication_input'){
						$("#two_factorzz").html(response);
					 }else if(key == 'premises_input'){
						$("#secure_premise").html(response);
					 }else if(key == 'public_key_infrastructure_input'){
						$("#sense_data").html(response);
					 }else if(key == 'email_input_score'){
						$("#email_div").html(response);
					 }else if(key == 'managed_msp_input'){
						$("#msp_div").html(response);
					 }
					
					 $(window).scrollTop(0);
				  }
				}); 
			   /* ajax code ends*/
		}
	}
	</script>
<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
