<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
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
          Login
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
			?>
            <form name="login_page" action="<?php echo base_url('login/check_login');?>" method="POST" id="myForm">
			<div >
              <div class="row" style="margin-top:20px;">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Email Address <span style="color:red;font-size:20px;">*</span>
                    </label>
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Password <span style="color:red;font-size:20px;">*</span>
                    </label>
                    <input id="password-field" type="password" class="form-control" name="password">
					<span toggle="#password-field" class="icon-eye field-icon toggle-password"></span>
                  </div>
                </div>
              </div>
			  
			  <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Forgotten Password ? <a href="<?php echo base_url('forgetpass');?>">(click here)</a>
                    </label>
                  </div>
                </div>
              </div>

			  <div class="row">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                    <div class="form-group">
						  <?php echo $widget;?>
						  <?php echo $script;?>
					</div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg col-md-offset-<?php echo (($email == 'activate')?'4':'5');?>"><?php echo (($email == 'activate')?'Activate Account':'Login');?></button>
                </div>
              </div>
			  <!-- <div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1">
				  <div class="form-group">
					<label>Are you a delegate user<a data-container="body" title="Delegate user is not the company's main account holder but is authorised by main account holder to perform actions on their behalf. Only the main account holder can set up a delegate user." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>? Only available to small and medium business at the moment.<a href="<?php echo base_url('delegate_login');?>"> Login</a> here</label>
				  </div>
				</div>
			  </div> -->
			  <div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset-1">
				  <div class="form-group">
					<label>If you have not registered an account, <a href="<?php echo base_url('register');?>"> Register</a> here</label>
				  </div>
				</div>
			  </div>
              <!--End step -->
			  </div>
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
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>


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

	

	<script>
	$(function() {
	  $("form[name='login_page']").validate({
		rules: {
		  email : "required",
		  password : "required",
		},
		messages: {
		  email: "This field is required",
		  password: "This field is required",
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
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
	</body>
</html>
