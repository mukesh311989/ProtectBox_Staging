<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit SMB | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
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
          Edit SMB
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
				if($this->session->flashdata('failed')){
			?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
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
							  <label>Company name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="comp_name" value="<?php echo $order_data->company_name;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Last name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="firstname" value="<?php echo $order_data->firstname;?>">
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Email <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="email" class="form-control" name="email" value="<?php echo $order_data->email;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Telephone </label>
							  <input type="text" class="form-control" name="phone" value="<?php echo $order_data->phone;?>">
							</div>
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
   <script src="js/jquery.validate.js"></script>
	<script>
	$(function() {
	  $("form[name='profile']").validate({
		rules: {
		  firstname: "required",
		  lastname: "required",
		  email : "required",
		  phone : "required",
		  message : "required",
		},
		messages: {
		  firstname: "This field is required",
		  lastname: "This field is required",
		  email : "This field is required",
		  phone : "This field is required",
		  message : "This field is required",
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
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
