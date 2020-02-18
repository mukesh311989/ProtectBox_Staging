<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment Successful | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	   <style>
      .custom-button {
        padding: 12px 25px 8px 25px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        background: none;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        border-radius: 0;
      }
      .custom-button.orange {
        color: #eb8b10;
        border: 3px solid #eb8b10;
      }
      .custom-button.green {
        color: #84c72a;
        border: 3px solid #84c72a;
      }
      .stripe_btn {
        color: #708299;
        background-color: #EAF1F8;
        font-weight: bold;
      }
      .stripe_btn:hover {
        color: #708299;
        background-color: #EAF1F8;
        font-weight: bold;
      }
      .rounded_div {
        border:1px solid #CCC;
        box-shadow: 0px 0px 3px #bfbfbf;
        border-radius:5px;
      }
      label{
        font-weight:normal !important;
      }
      .preferd
      {
        text-align:center;
        font-size:18px !important;
      }
      .note
      {
        border-radius:5px;
        text-transform: capitalize;
        color: #eb8b10;
        border:3px solid #EC8B0E;
        padding:10px;
        margin-bottom:20px;
        font-weight:bold;
        font-size:15px;
      }
      .c_names
      {
        margin: 0 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 1.2em;
        font-weight: 600;
        border-bottom: 1px solid #dca7a7;
        color:#010101
      }
      .main_image
      {
        width:40%;
        margin: 0 15px 30px 0;
      }
      .price
      {
        margin: 0 0 15px 0;
        font-weight: 600;
        font-size: 2em;
        color:#010101;
      }
      .details
      {
        margin: 0 0 5px 0;
        font-size: 1.2em;
        color:#010101;
        line-height: 1.4;
      }
      .trust_pilot
      {
        max-width: 150px;
        margin: 5px 0 0 0;
      }
      .what
      {
        min-height: 170px;
      }
      .space
      {
        padding:15px;
        margin-top:15px;
        margin-bottom:15px;
      }
	  .thank_you
	  {
		font-weight:bold;font-size:50px;text-align:center;color:#000;margin-top:50px;
	  }
	  .order_success
	  {
		font-weight:bold;font-size:28px;text-align:center;color:#565a5c
	  }
	  .email_recipt
	  {
		margin-bottom:20px;font-size:16px;text-align:left;
	  }
	  .visit
	  {
		margin-bottom:20px;font-size:16px;text-align:left;
	  }
	  .subscription
	  {
		margin-bottom:20px;font-size:16px;text-align:left;
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
          Payment Successful
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
	  
        <div class="row">
			<div class="col-md-12">
			
				<!--  Tabs -->   
			<div class="col-md-12 rounded_div" style="padding:15px;">	
				<div style="" class="thank_you">Thank You.</div>
				<div style="" class="order_success">Your Order Was Completed Successfully</div>

			

				<div class="col-md-12" style="margin-top:70px;">
					<div class="col-md-2 col-sm-2" style="text-align:right;">
						<img src="<?php echo base_url()?>images/if_mail_accept_103616.png" style="height:50px;">
					</div>
					<div class="col-md-10 col-sm-10" style="margin-top:10px;">
						<div style="" class="email_recipt"><i>An email receipt including the details about your order number<b>&nbsp;<?php echo $this->uri->segment(2)?></b> has been  sent to the email address <b><?php echo $this->session->userdata['logged_in']['email'];?></b>, Please keep it for your records</i></div>
					</div>
				</div>

				<div class="col-md-12" style="margin-top:30px;">
					<div class="col-md-2 col-sm-2" style="text-align:right;">
						<img src="<?php echo base_url()?>images/if_031_Printer_183593.png" style="height:50px;">
					</div>
					<div class="col-md-10 col-sm-10" style="margin-top:10px;">
						<div style="" class="visit"><i>Please visit <a href="<?php echo base_url("view_all_orders");?>" style="color:#000;text-decoration:underline;">Orders page</a> now to download (and again at any time to re-download) the necessary details with regards to the activation of your order Number<b>&nbsp;<?php echo $this->uri->segment(2)?></b>. </i></div>
					</div>
				</div>
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
	<script src="<?php echo base_url();?>js/bootstrap_multiselect.js">
    </script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	<script type="text/javascript">
	$(function() {
	    $('.multiselect-ui').multiselect({
	        includeSelectAllOption: true
	    });
	});
	</script>

	<script>
	function add_more()
	{
		var html = $(".after_div").html();
	    $(".new_div").after(html);
	}
	</script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>