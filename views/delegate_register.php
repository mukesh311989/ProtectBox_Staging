<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Delegate Register | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
	<style>
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

  

    <div id="load" style=""></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
         Delegate Register
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
    
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-6 col-md-offset-3" style="padding: 10px 25px 10px;border: 1px solid #CCC;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;background:#f5f5f5"  id="login-form">
           <?php
              if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }
              if($this->session->flashdata('auth_failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('auth_failed');?></strong> </div>
            <?php
              }
            ?>
            <form name="register" action="<?php echo base_url('delegate_register/add_user');?>" method="POST">
				
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="first_name" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="last_name" required>
                    </div>
                  </div>
                </div>
        				<div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control email1" name="email_id" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Secret Key</label>
                      <input type="text" class="form-control email2" name="delegate_key" required>
                    </div>
                  </div>
                </div>
        				<div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control pass1" name="password" id="myPassword" required>
						<span toggle="#myPassword" class="icon-eye field-icon toggle-password"></span>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" class="form-control pass2" name="repeat_password"  id="myConfirmPassword" required>
						<span toggle="#myConfirmPassword" class="icon-eye field-icon toggle-password"></span>
                        <small class="pass_error" style="color:red;display:none;">Password doesn't match!</small>
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
				  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label style=";font-weight: 400 !important;color: #83C72A;">Coming soon, are Google verified & picture verified passwords too (for your added security).</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="checkbox" name="receive_email" value="1">
                        <label>I want to receive emails from Protectbox in future</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
          				<div class="col-md-12 col-sm-12">
          				  <div class="form-group">
          				    <input type="checkbox" name="terms_condition" required>
          				    <label> I acknowledge the <a href="<?php echo base_url('terms');?>" target="_blank">Terms and Conditions</a>.</label>
          				  </div>
          			    </div>
                    </div>
					<div class="col-md-12 col-sm-12">
					  <div class="form-group">
						<button type="submit" class="btn btn-success btn-lg col-md-offset-5" onclick="check_validation();"> Submit </button>
					  </div>
					</div>
					 <div class="row">
          				<div class="col-md-12 col-sm-12">
          				  <div class="form-group">
          				    <label>Not a delegate user? <a href="<?php echo base_url('signup');?>"> Signup</a> here</label>
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
		  email_id : "required",
		  confirm_email : "required",
		  password : "required",
		  repeat_password : "required",
		  
		  email_id: {
			required: true,
			email: true
		  }
		  confirm_email: {
			required: true,
			email: true
		  }
		   password: {
			required: true,
			minlength: 5
		  }
		   repeat_password: {
			required: true,
			minlength: 5
		  }

		  terms_condition : "required",
		},
		messages: {
		  account_type: "This field is required",
		  company_name: "This field is required",
		  first_name : "This field is required",
		  last_name : "This field is required",
		  email_id : "This field is required",
		  confirm_email : "This field is required",
		  password : "This field is required",
		  repeat_password : "This field is required",
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
