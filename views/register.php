<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register | ProtectBox</title>
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
		
		.another
		{
			border:3px solid #EC8C0E;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
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
	<div id="load"></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Register
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
    
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-6 col-md-offset-3" style="padding: 10px 25px 10px;border: 1px solid #CCC;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;background:#f5f5f5" id="login-form">
           <?php
              if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }
              if($this->session->flashdata('email_error')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('email_error');?></strong> </div>
            <?php
              }
			  if($this->session->flashdata('delegate_error')){
            ?>
			   <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('delegate_error');?></strong> </div>
			<?php
			  }
			?>
            <form name="register" action="<?php echo base_url('register/add_user');?>" method="POST" id="myForm">
				<!--<div class="row" style="margin-top:20px;">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group" style="text-align:center;">
                      <a href="<?php echo $redirect_url;?>" class="btn btn-success"  style="text-align:center;">Authorize using SAGE</a>
                    </div>
                  </div>
                </div>-->

				<div style="" class="another">
					<div class="row">
						<div class="col-md-12">
							<p style="color:#ec8b0d;font-size:14px;font-weight:bold">If you are a <a href="https://www.sage.com/" target="_blank">Sage</a> or <a href="https://www.xero.com/" target="_blank">Xero</a> customer, please register here (on ProtectBox) first before logging in as a ProtectBox user. Then press the <a href="https://www.sage.com/" target="_blank">Sage</a> or <a href="https://www.xero.com/" target="_blank">Xero</a> button on the questionnaire to authorise us to pull your <a href="https://www.sage.com/" target="_blank">Sage</a> or <a href="https://www.xero.com/" target="_blank">Xero</a> data into our questionnaire.</p>
						</div>
					</div>
				</div>
			
                <div class="row" style="margin-top:20px;">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label>Account Type <span style="color:red;font-size:20px;">*</span></label>
                      <select class="form-control" name="account_type" id="acc_type" onchange="check_type();">
                        <option selected="" disabled="">Select account type</option>
                        <option value="Small and medium business" >Small and medium business</option>
                        <option value="Supplier">Supplier</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label>Company Name <span style="color:red;font-size:20px;">*</span></label>

                      <input type="text" class="form-control" value="" name="company_name"  maxlength="60">
					 
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>First Name <span style="color:red;font-size:20px;">*</span></label>
                      <input type="text" class="form-control" name="first_name" value="" maxlength="30">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Last Name <span style="color:red;font-size:20px;">*</span></label>
                      <input type="text" class="form-control" name="last_name" value="" maxlength="30">
                    </div>
                  </div>
                </div>
				<?php
				if($this->uri->segment(2) != ''){
				?>
				<div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label>Activation Key <span style="color:red;font-size:20px;">*</span></label>
                      <input type="text" class="form-control" name="key" value="<?php echo $this->uri->segment(2);?>">
                    </div>
                  </div>
                </div>
				<?php
					}
				?>
        		<div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Email Address <span style="color:red;font-size:20px;">*</span></label>
                      <input type="email" class="form-control email1" name="email_id" value="">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Confirm Email Address <span style="color:red;font-size:20px;">*</span></label>
                      <input type="email" class="form-control email2" name="confirm_email" onkeyup="check_mail();" value="">
                      <small class="email_error" style="color:red;display:none;">Email doesn't match!</small>
                    </div>
                  </div>
                </div>
        				<div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Password <span style="color:red;font-size:20px;">*</span></label>
                        <input type="password" class="form-control pass1" name="password" id="myPassword">
						<span toggle="#myPassword" class="icon-eye field-icon toggle-password"></span>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Repeat Password <span style="color:red;font-size:20px;">*</span></label>
                        <input type="password" class="form-control pass2" name="repeat_password" id="myConfirmPassword" >
						<span toggle="#myConfirmPassword" class="icon-eye field-icon toggle-password"></span>
                        
                      </div>
                    </div>
					<div id="errors" class=""></div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label style="color: red !important;font-weight: 400 !important;font-size: 12px !important;">(NOTE : Password must be at least 8 characters, which are a mix of  capital letters (A B), numbers (1 2 3), special characters (! ? < %) etc)</label>
                      </div>
                    </div>
                  </div>

				  <!-- <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label style=";font-weight: 400 !important;color: #83C72A;">Coming soon, are Google verified & picture verified passwords too (for your added security).</label>
                      </div>
                    </div>
                  </div> -->
				  
                  <div class="row" id="delegate_div" >
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="checkbox" name="delegate_status" id="del_add">
                        <label>I want to add a delegate<a data-container="body" title="Delegate user is not the company's main account holder but is authorised by main account holder to perform actions on their behalf. Only the main account holder can set up a delegate user." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> user. Only available to small and medium businesses at the moment.</label>
                      </div>
                    </div>
					<div class="col-md-12 col-sm-12" id="del_input" style="display:none;">
                      <div class="form-group">
                        <label>Email of delegate user <span style="color:red;font-size:20px;">*</span></label>
                        <input type="mail" class="form-control" name="delegate_email">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="checkbox" name="receive_email">
                        <label>I want to receive emails from ProtectBox in future</label>
                      </div>
                    </div>
                  </div>

				  

                  <div class="row">
          				<div class="col-md-12 col-sm-12">
          				  <div class="form-group">
          				    <input type="checkbox" name="terms_condition" >
          				    <label> I acknowledge the <a href="<?php echo base_url('terms');?>" target="_blank">Terms and Conditions</a>. <span style="color:red;font-size:20px;">*</span></label>
          				  </div>
          			    </div>
                    </div>
					
					<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
							  <?php echo $widget;?>
							  <?php echo $script;?>
						</div>
					</div>
				  </div>

					<div class="col-md-12 col-sm-12">
					  <div class="form-group">
						<button type="submit" class="btn btn-success btn-lg col-md-offset-5" > Submit </button>
					  </div>
					</div>
					<!-- <div class="row">
						<div class="col-md-12 col-sm-12">
						  <div class="form-group">
						    <label>Are you a delegate user<a data-container="body" title="Delegate user is not the company's main account holder but is authorised by main account holder to perform actions on their behalf. Only the main account holder can set up a delegate user." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>? <a href="<?php echo base_url('delegate_login');?>"> Login</a> here</label>
						  </div>
					    </div>
                    </div> -->
					<div class="row">
          				<div class="col-md-12 col-sm-12">
          				  <div class="form-group">
          				    <label>If you already have an account, <a href="<?php echo base_url('login');?>"> Login</a> here</label>
          				  </div>
          			    </div>
                    </div>
              <!--End step -->
            </form>
          </div>
		  <div class="col-md-6 col-md-offset-3" style="padding: 10px 25px 10px;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;text-align:center;height:400px;display:none;" id="loaderImg">
              <img src="<?php echo base_url();?>images/favicon.gif" style="height:64px;margin-top:100px;">
			  <h3>Please wait while we process your request.....</h3>
		  </div>
          <!-- End col-md-3 -->
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
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
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
	$(function() {
	  $("form[name='register']").validate({
		rules: {
		  account_type: "required",
		  company_name: "required",
		  first_name : "required",
		  last_name : "required",
		  key : "required",
		  email_id : "required",
		  confirm_email : "required",
		  password : "required",
		  repeat_password : "required",
		  delegate_email : "required",
		  terms_condition : "required",
		},
		messages: {
		  account_type: "This field is required",
		  company_name: "This field is required",
		  first_name : "This field is required",
		  last_name : "This field is required",
		  key : "This field is required",
		  email_id : "This field is required",
		  confirm_email : "This field is required",
		  password : "This field is required",
		  repeat_password : "This field is required",
		  delegate_email : "This field is required",
		  terms_condition : "This field is required",
		  
		},
		submitHandler: function(form) {
		  $('#login-form').hide(); 
		  $('#loaderImg').show(); 
		  form.submit();
		}
	  });
	});	
	</script>
  <script>
    function check_mail() {
      var email1 = $('.email1').val();
      var email2 = $('.email2').val();
      if(email1 != email2)
  	  {
  		  $('.email_error').show();
  	  }
  	  else{
  		  $('.email_error').hide();
  	  }
    }

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

		$('#del_add').click(function()
		{
			if($('#del_add').is(':checked')) {
				$('#del_input').show();
			} else {
				$('#del_input').hide();
			}
		});
	</script>

	<script>
	function check_type()
	{
		var type = $('#acc_type').val();
		if(type == 'Small and medium business')
		{
			$('#delegate_div').show();
		}
		else if(type == 'Supplier')
		{
			$('#delegate_div').hide();
		}
	}
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
	</script>


  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
