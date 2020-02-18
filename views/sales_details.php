<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sales Details | ProtectBox</title>
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
	<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
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
         Sales Details
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
			  <div id="alertzzzz" style="display:none;">
					<div class="alert alert-success"> <strong>Supplier Order status updated successfully!</strong> </div>
				</div>
						  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Order&nbsp;Number</th>
							<th width="30%">SME</th>
							<th width="15%">Service&nbsp;Name</th>
							<th width="15%">Product&nbsp;Name</th>
							<th width="15%">Price</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th width="15%">Customer&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Supplier&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Refund&nbsp;Status</th>
							<th width="15%">Date</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">Option</th>
						  </tr>
						</thead>
						<tbody>
					
						  
						  <?php
							$supplier_service_id = explode(",",$fetch_order->supplier_service_id);
							$price = explode(",",$fetch_order->supplier_service_price);
							$pay_option = explode(",",$fetch_order->service_payment_option);
							$order_status = explode(",",$fetch_order->order_status);
							$get_currency = explode(",",$fetch_order->supplier_service_currency);
							

							
							foreach($supplier_service_id as $key => $service_key)
							{
								$this->load->model('sales_m');
								$get_category_name = $this->sales_m->fetch_service_name($service_key);
								$service_id = $get_category_name->supplier_service_id;

								$fetch_currency = $this->sales_m->get_symbol($get_currency[$key]);
								$curr = $fetch_currency->symbol;
								
								$transaction_id = $this->sales_m->fetch_serviceTransaction($fetch_order->orders_id,$service_id);
								
							    $transactionService_id=$transaction_id->id;
								
						?>
						<tr>
							<td><?php echo $fetch_order->orders_id;?></td>
							<td><?php 
							$this->load->model('sales_m');
							$sme_id = $fetch_order->sme_id;
							$get_sme_name = $this->sales_m->get_sme_name($sme_id);
							echo $get_sme_name->firstname; 
							echo "&nbsp;";
							echo $get_sme_name->lastname;
						
							?>&nbsp;
							<?php
							$check_date = $fetch_order->upload_date;
							$present_time = time();
							$last_seven_days = strtotime("7 days ago");
							if($check_date > $last_seven_days && $check_date <= $present_time){
								echo '<span style="color:red;font-size:20px;">*</span>';
							}else{
								echo '';
							}
						?></td>
							<td><?php echo ucfirst($get_category_name->service_name);?></td>
							<td><?php echo ucfirst($get_category_name->product_detail);?></td>
							<td><?php echo $curr;?>&nbsp;<?php echo $price[$key];?>/&nbsp;<?php echo $pay_option[$key];?></td>
							<td><?php echo (($fetch_order->payment_method == 'Stripe')?'Card': $fetch_order->payment_method);?></td>
							<td><?php echo $fetch_order->cus_payment_status;?></td>
							<td>
								<span id="sup_span_<?php echo $key;?>">
									<?php 
										$sup_pay = explode(",",$fetch_order->sup_payment_status);
										//print_r($sup_pay);
										if($sup_pay[$key] == 'Pending'){
											echo "Supplier payment pending";
										}else if($sup_pay[$key] == 'Confirm'){
											echo "Supplier payment complete";
										}else if($sup_pay[$key] == 'Refund_requested'){
											echo "Refund requested";
										}else if($sup_pay[$key] == 'Refund_completed'){
											echo "Refund completed";
										}
									?>
								</span>
							
							</td>
							<td>
								<?php 
									$this->load->model('sales_m');
									$check_refund = $this->sales_m->check_refund($this->uri->segment(3),$service_id);
									if(!empty($check_refund)){
										if($check_refund->refund_status == 'seller_payment_pending'){
											echo "Seller payment pending";
										}else if($check_refund->refund_status == 'seller_refund_request_sent'){
											echo "Refund request sent to seller";
										}else if($check_refund->refund_status == 'seller_refunded'){
											echo "Seller refunded";
										}else if($check_refund->refund_status == 'seller_payment_confirmed'){
											echo "Seller payment confirmed";
										}else if($check_refund->refund_status == 'smb_refunded'){
											echo "SMB refunded";
										}
									}else{
										echo "NA";
									}
								?>
							</td>
							<td><?php echo date('d/m/Y',$fetch_order->upload_date);?></td>
							<td>
							<?php
								$this->load->model('sales_m');
								$order_id = $this->uri->segment(3);
								
								$check_order_stat = $this->sales_m->check_order_stat($order_id,$service_id);
								
								if($check_order_stat->sup_order_status != 'delivered'){
							?>

							<select class="form-control" onchange="update_status('<?php echo $this->uri->segment(3);?>','<?php echo $service_id;?>','<?php echo $key;?>',this.value);">

								<option value="Pending" <?php echo(($check_order_stat->sup_order_status == 'Pending' || $check_order_stat->sup_order_status == 'seller_informed')?'selected':'');?>>Pending</option>
								<option value="confirmed-by-seller" <?php echo(($check_order_stat->sup_order_status == 'confirmed-by-seller' || $check_order_stat->sup_order_status == 'seller_paid')?'selected':'');?>>Confirmed this order</option>
								<option value="reject-by-seller" <?php echo(($check_order_stat->sup_order_status == 'reject-by-seller')?'selected':'');?>>Reject this order</option>
								<option value="order_delivered" <?php echo(($check_order_stat->sup_order_status == 'order_delivered')?'selected':'');?>>Order Delivered</option>
							
							</select>
							</td>
							<td><?php $sup_pay = explode(",",$fetch_order->sup_payment_status); 
							if($sup_pay[$key] == 'Refund_requested'){ ?>
							
							<a href="<?php echo base_url
							();?>sales/stripe_refund/<?php echo $fetch_order->orders_id; ?>/<?php echo $transactionService_id; ?>" class="btn btn-success">Refund Amount</a>
							    
						    <?php } ?></td>
						  </tr>
						  <?php
								}else{
									echo "Order Delivered";
								}
								
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
<!-- Export button for tables Starts-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<!-- Export button for tables ends-->
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
	  $(document).ready(function() {
			$('#example').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'print'
				]
			} );

		} );
    </script>
    <script>
      function update_status(order_id,service_id,key,status){
		
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>sales/update_status',
			data: {'order_id': order_id,'service_id' :service_id,'key': key,'status': status}, // change this to send js object
			type: "post",
			success: function(response){
			   $("#alertzzzz").show();
			}
		  });
		 /* ajax code ends*/
      }
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
