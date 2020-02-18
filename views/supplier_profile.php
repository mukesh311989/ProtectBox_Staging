<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Supplier Profile | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<style>
	.rounded_div {
	border:1px solid #CCC;
	box-shadow: 0px 0px 3px #bfbfbf;
	border-radius:5px;
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
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Supplier Profile
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<?php $this->load->view("common/supplier_sidebar");?>
			<div class="col-md-9">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
				  <form id="quotation" action="quotation-normal_2.php" method="POST" novalidate="novalidate">
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-user-8">
							</i>
						  </strong>Personal info
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>First name
							  </label>
							  <input type="text" class="form-control required" id="firstname_quote" name="firstname_quote">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Last name
							  </label>
							  <input type="text" class="form-control required" id="lastname_quote" name="lastname_quote">
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Email
							  </label>
							  <input type="email" class="form-control required" id="email_quote" name="email_quote">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Telephone
							  </label>
							  <input type="text" class="form-control required" id="phone_quote" name="phone_quote">
							</div>
						  </div>
						</div>
					  </div>
					  <!--End step -->
					   <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-lock">
							</i>
						  </strong>Change Password
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>New Password
							  </label>
							  <input type="password" class="form-control required" id="email_quote" name="email_quote">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Confirm Password
							  </label>
							  <input type="password" class="form-control required" id="phone_quote" name="phone_quote">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-location-5">
							</i>
						  </strong>Your address
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-12 col-sm-12">
							<div class="form-group">
							 <textarea name="message_quote" id="message_quote" style="height:100px" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn_1 medium pull-right">Update Profile</button>
							</div>
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
    <script src="<?php echo base_url();?>js/jquery.validate.js">
    </script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js">
    </script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
