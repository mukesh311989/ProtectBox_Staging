<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Password Reset | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
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
          Password Reset
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-6 col-md-offset-3" style="padding: 10px 25px 10px;border: 1px solid #CCC;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;background:#f5f5f5">
			<?php
				if($this->session->flashdata('success')){
			?>
			<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
				<script>// Your application has indicated there's an error
				window.setTimeout(function(){
				// Move to a new location or you can do something else
				window.location.href = "<?php echo base_url();?>login";
				}, 3000);</script>
             <?php
			 }
              if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }else if($this->session->flashdata('failed2')){
            ?>
			  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed2');?></strong> </div>
			<?php
			}
			?>
            <form name="login_page" action="<?php echo base_url('recover_pass/check_details');?>" method="POST">
              <div class="row" style="margin-top:20px;">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Email Address
                    </label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Encryption Key
                    </label>
                    <input type="text" class="form-control" name="encryption" required>
                  </div>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>New Password
                    </label>
                    <input type="password" class="form-control pass1" id="myPassword" name="new_password" required>
							  <span toggle="#myPassword" class="icon-eye field-icon toggle-password"></span>
                  </div>
                </div>
              </div>
			  <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Confirm Password
                    </label>
                    <input type="password" class="form-control pass2" id="myConfirmPassword" name="confirm_password" required>
							  <span toggle="#myConfirmPassword" class="icon-eye field-icon toggle-password"></span>
                  </div>
                </div>
              </div>
			  <div id="errors" class="col-md-10 col-sm-10 col-md-offset-1"></div>

			  <div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1">
				  <div class="form-group">
					<label style="color: red !important;font-weight: 400 !important;font-size: 12px !important;">(NOTE : Password must be at least 8 characters, which are a mix of  capital letters (A B), numbers (1 2 3), special characters (! ? < %) etc)</label>
				  </div>
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1">
				  <div class="form-group">
					<label style=";font-weight: 400 !important;color: #83C72A;">Coming soon, are Google verified & picture verified passwords too (for your added security).</label>
				  </div>
				</div>
			  </div>
			  

              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg col-md-offset-4">Update Password
                  </button>
                </div>
              </div>
			  <div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1">
				  <div class="form-group">
					<label>Already have a account? <a href="<?php echo base_url('login');?>"> Login</a> here</label>
				  </div>
				</div>
			  </div>
              <!--End step -->
            </form>
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
	  $("form[name='login_page']").validate({
		rules: {
		  email_id : "required",
		  password_id : "required",
		},
		messages: {
		  email_id: "This field is required",
		  password_id: "This field is required",
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	

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
