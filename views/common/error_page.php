<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Access Denied | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
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
		font-weight:bold;font-size:30px;text-align:center;color:#000;margin-top:50px;margin-bottom:50px
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
		margin-bottom:20px;font-size:16px;text-align:right;
	  }
	  .subscription
	  {
		margin-bottom:20px;font-size:16px;text-align:center;
	  }
    </style>
  </head>
  <body>
    <div class="layer">
    </div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Access Denied...
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
				        <?php
                    if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
                  ?>
                  <div style="" class="thank_you">You need to login as a supplier to access this page</div>
                  <?php
                    }else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
                  ?>
                  <div style="" class="thank_you">You need to login as a business to access this page</div>
                  <?php
                    }else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
                  ?>
                  <div style="" class="thank_you">You need to login as a business or supplier to access this page</div>
                  <?php
                      }
                  ?>
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
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
  </body>
</html>