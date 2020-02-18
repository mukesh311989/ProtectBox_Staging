<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Subscription | ProtectBox</title>
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
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
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
          My Subscription
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
			<div class="tab-content rounded_div">
			  <h3>My Subscription</h3>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Order&nbsp;ID</th>
							<th width="15%">Category</th>
							<th width="30%">Product</th>
							<th width="15%">Total Price</th>
							<th width="15%">Discount</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Download</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						if(sizeof($order_data) > 0)
						{
						foreach($order_data as $fetch_order)
						{
							$supplier_service_id = explode(",",$fetch_order->supplier_service_id);
						
						?>
						  <tr>
							<td><?php echo $fetch_order->orders_id;?></td>
							<td>
							<?php
								$category_name = "";
								foreach($supplier_service_id as $service_key)
								{
									$get_category_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_category_name as $category_key)
									{
										$category_name .= $category_key->product_category;
										$category_name .= ",<br/>";
									}
									
								}
								echo rtrim($category_name,",<br/>");
							?>
							</td>
							<td>
							<?php
								$service_name = "";
								foreach($supplier_service_id as $service_key)
								{
									$get_service_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_service_name as $serv_key)
									{
										$service_name .= $serv_key->service_name;
										$service_name .= ",<br/>";
									}
									
								}
								echo rtrim($service_name,",<br/>");
							?>
							</td>
							<td>
							<?php 
								foreach($supplier_service_id as $service_key)
								{
									$get_service_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_service_name as $currency_key)
									{
										$currency =  $currency_key->currency;
										
									}
									
								}
								echo $fetch_order->total_price;
								echo "&nbsp;";
								echo $currency;
							?>
							</td>
							<td>
							<?php 
								echo $fetch_order->discount;
								echo "&nbsp;";
								echo $currency;
							?>
							</td>
							<td><?php echo $fetch_order->payment_method;?></td>
							<td><a href="javascript:void(0);">Download Packages</a></td>
						  </tr>
						<?php
						}
						}else{
						?>
						<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>NO DATA FOUND</b></td></tr>
						<?php
						}
						?>
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
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
	  $(document).ready(function() {
			$('#example').DataTable();
		} );
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
