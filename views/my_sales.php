<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Sales | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<style>
	.new_div {
		margin-bottom:20px;
	}
	.rounded_div {
		border:1px solid #CCC;
		box-shadow: 0px 0px 3px #bfbfbf;
		border-radius:5px;
	}
	 .main_image
      {
        width:60%;
        margin: 0 15px 30px 0;
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
          My Sales
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<?php $this->load->view("common/sidebar");?>
			<div class="col-md-9">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
			  <h3>My Sales</h3>
			  <div class=" table-responsive">
				  <table class="table">
						<thead>
						  <tr>
							<th width="10%">Order&nbsp;ID</th>
							<th width="15%">Category</th>
							<th width="30%">Product</th>
							<th width="15%">Total Price</th>
							<th width="15%">Discount</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">Download</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>46780</td>
							<td>Antimalware</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/trend-micro.png" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46781</td>
							<td>IDS</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/watch-guard.gif" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46782</td>
							<td>Proxy</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/websense.png" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46783</td>
							<td>Audit Accreditation</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/dark-trace.png" class="main_image">
							  <img src="https://protectbox.com/media/img/providers/iso-27001.png" class="main_image">
							  <img src="https://protectbox.com/media/img/providers/rivo-mobile.png" class="main_image">
							</td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46784</td>
							<td>Encryption</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/intercrypto.png" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46785</td>
							<td>Spam Filter / SPF</td>
							<td width="30%"> <img src="https://protectbox.com/media/img/providers/office-365.png" class="main_image">
								<img src="https://protectbox.com/media/img/providers/ibm.png" class="main_image">
							</td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46786</td>
							<td>Threat Prevention</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/dark-trace.png" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						  <tr>
							<td>46787</td>
							<td>Data Storage</td>
							<td width="30%"><img src="https://protectbox.com/media/img/providers/rockstar-technology.png" class="main_image"></td>
							<td>&pound;4000/year</td>
							<td>$150/year</td>
							<td>quarterly</td>
							<td style="color:green">Success</td>
							<td><a href="<?php echo base_url("payment_process");?>">Download Packages</a></td>
						  </tr>
						</tbody>
					  </table>
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
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
