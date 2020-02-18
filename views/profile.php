<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
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
		.field-icon {
		  float: right;
		  margin-right: 5px;
		  margin-top: -29px;
		  position: relative;
		  font-size:18px;
		  z-index: 2;
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
          My Profile
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
			<?php
			if($this->session->flashdata('success')){
			?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php
				}
			if($this->session->flashdata('del_first_success')){
			?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
			<?php
				}
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
			?>
			<div class="tab-content rounded_div">
				  <form name="profile" action="<?php echo base_url("profile/update_data");?>" method="POST">
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-user-8"></i>
						  </strong>Personal info
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>First name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="firstname" value="<?php echo $user_data->firstname;?>" maxlength="30">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Last name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="lastname" value="<?php echo $user_data->lastname;?>" maxlength="30">
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Email <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="email" class="form-control" name="email" value="<?php echo $user_data->email;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Telephone <span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please enter without any gaps and country code eg +4402080000000 Or +97316670000." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <input type="text" class="form-control" name="phone" value="<?php echo $user_data->phone;?>">
							</div>
						  </div>
						</div>
					  </div>
					  <!--End step -->
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-briefcase-1"></i>
						  </strong>Company info
						</h3>
					  </div>
					  <div class="step">
						  <div class="row">
							  <div class="col-md-12 col-sm-12">
								<div class="form-group">
								  <label>Company Name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="text" class="form-control" name="company_name" value="<?php echo $user_data->company_name;?>" maxlength="60">
								</div>
							  </div>
							</div>
						</div>
					   <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-lock"></i>
						  </strong>Change Password
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>New Password</label>
							  <input type="password" class="form-control pass1" id="myPassword" name="new_password">
							  <span toggle="#myPassword" class="icon-eye field-icon toggle-password"></span>
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Confirm Password
							  </label>
							  <input type="password" class="form-control pass2" id="myConfirmPassword" name="confirm_password">
							  <span toggle="#myConfirmPassword" class="icon-eye field-icon toggle-password"></span>
							</div>
						  </div>
						  <div id="errors" class="col-md-12"></div>
						</div>
					  </div>
					  <?php
					  	if($this->session->userdata['logged_in']['user_type'] == 'Small and medium business'){
					    $ci =&get_instance();
						$ci->load->model('questionaire_tech_info_m');
						$check_delegate = $ci->questionaire_tech_info_m->get_sme($this->session->userdata['logged_in']['user_id']);
					
						?>
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-user-8"></i>
						  </strong>Delegate User
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
							<div class="col-md-12 col-sm-12">
							  <div class="form-group">
								<input type="checkbox" id="del_stat" name="delegate_status" onclick="check_del();" >
								<label>I want to add <a href="<?php echo base_url('manage_delegates');?>">delegate</a> <a data-container="body" title="Delegate user is not the company's main account holder but is authorised by main account holder to perform actions on their behalf" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> user</label>
							  </div>
							</div>
							<div class="col-md-6 col-sm-6" id="delegate_email" style="display:none;">
								<div class="form-group">
								  <label>Email of delegate user <span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="email" class="form-control" name="delegate_email">
								</div>
							  </div>
						</div>
					  </div>
						<?php
							}
						?>

					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-location-5"></i>
						  </strong>Your Address
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Address Line1&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <input name="address1" class="form-control" value="<?php echo $user_data->address1;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group" style="margin-top:12px;">
							 <label>Address Line2</label>
							 <input name="address2" class="form-control" value="<?php echo $user_data->address2;?>">
							</div>
						  </div>
						</div>

						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							 <label>City&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <input name="city" class="form-control" value="<?php echo $user_data->city;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>State/Province&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title='Please enter the state/province code without any gaps (like: For Florida, please type "FL")' href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 <input name="state_province" class="form-control" value="<?php echo $user_data->state;?>" maxlength="2">
							</div>
						  </div>
						</div>

						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							 <label>Postal Code&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <input name="postal_code" class="form-control" value="<?php echo $user_data->postal_code;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							 <label>Country&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <select class="selectpicker form-control" data-live-search="true" name="country" data-dropup-auto="false">
								<option value="" selected disabled>Please Select</option>
								<?php
									foreach($country AS $each_country){
								?>
									<option value="<?php echo $each_country->code;?>" <?php echo (($each_country->code == $user_data->country)?'selected':'')?>><?php echo $each_country->name;?>&nbsp;(<?php echo $each_country->code;?>)</option>
								<?php
									}	
								?>
							 </select>
							</div>
						  </div>
						</div>

						<?php
						if($this->session->userdata['logged_in']['user_type'] != 'admin'){
						?>
						<div class="row">
							<div class="col-md-12 col-sm-12">
							  <div class="form-group">
								<input type="checkbox" name="receive_email" <?php echo(($user_data->email_notification == '1')?'checked':'');?>>
								<label>I want to receive emails from ProtectBox in future</label>
							  </div>
							</div>
						</div>
						<?php
						}
						?>
						<!--<div class="row">
							<div class="col-md-12 col-sm-12">
							  <div class="form-group">
								<label>Click <a href="<?php echo base_url("manage_delegates");?>">here</a> to manage your delegates <a data-container="body" title="Delegate user is not the company's main account holder but is authorised by main account holder to perform actions on their behalf" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  </div>
							</div>
						</div>-->
						<div class="form-group">
							<button type="submit" class="btn btn-success pull-right" >Update Profile</button>
						</div>
					  </div>
					  
					  <!--End step -->
					</form>
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.password-validation.js"></script>
   <script src="js/jquery.validate.js"></script>
   <script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
   <script>
	$(document).ready(function() {
		$("#myPassword").passwordValidation({"confirmField": "#myConfirmPassword"}, function(element, valid, match, failedCases) {

		    $("#errors").html("<pre>" + failedCases.join("\n") + "</pre>");
		  
		     if(valid) $(element).css("border","2px solid green");
		     if(!valid) $(element).css("border","2px solid red");
		     if(valid && match) $("#myConfirmPassword").css("border","2px solid green");
		     if(!valid || !match) $("#myConfirmPassword").css("border","2px solid red");
			 if(valid) $("#errors").hide();
		});
	});
	</script>
	 <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
		
	</script>
	<script type="text/javascript">
	$(function() {
	    $('.multiselect-ui').multiselect({
	        includeSelectAllOption: true
	    });
	});
	</script>
	<script>
	$(function() {
	  $("form[name='profile']").validate({
		rules: {
		  firstname: "required",
		  lastname: "required",
		  email : "required",
		  phone : "required",
		  message : "required",
		  delegate_email : "required",
		  address1 : "required",
		  city : "required",
		  state_province : "required",
		  postal_code : "required",
		  country : "required"
		},
		messages: {
		  firstname: "This field is required",
		  lastname: "This field is required",
		  email : "This field is required",
		  phone : "This field is required",
		  message : "This field is required",
		  delegate_email : "This field is required",
		  address1 : "This field is required",
		  city : "This field is required",
		  state_province : "This field is required",
		  postal_code : "This field is required",
		  country : "This field is required"
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>  

	<script>
	function check_pass() {
      var pass1 = $('.pass1').val();
      var pass2 = $('.pass2').val();
      if(pass1 != pass2)
  	  {
  		  $('.pass_error').show();
  	  }
  	  else{
  		  $('.pass_error').hide();
  	  }
    }
  </script>
  <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

	<script>
	$(".toggle-password").click(function() {

	  $(this).toggleClass("icon-eye-off");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
		input.attr("type", "text");
	  } else {
		input.attr("type", "password");
	  }
	});


	function check_del(){
		if($('#del_stat').prop("checked") == true){
			$('#delegate_email').show();
		}else if($('#del_stat').prop("checked") == false){
			$('#delegate_email').hide();
		}
	}
	</script>
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
