<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>All Orders | ProtectBox</title>
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
          All Orders
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
					<div class="alert alert-success"> <strong>Order status updated successfully!</strong> </div>
				</div>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
						  	
							<th width="10%">Order&nbsp;Number</th>
							<th width="30%">SME</th>
							<th width="15%">Supplier&nbsp;Name</th>
							<th width="30%">Sage/Direct/Xero</th>
							<th width="15%">Total&nbsp;Price</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th width="15%">Customer&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Supplier&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">Refund&nbsp;Status</th>
							<th width="15%">Refund&nbsp;Item</th>
							<th width="15%">Status</th>
							<th width="15%">Supplier&nbsp;Bank&nbsp;Details</th>
							<th width="15%">Date</th>
							<th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_all_orders AS $all_orders){
							?>
						  <tr>
							
							<td><a href="<?php echo base_url('order_details/');?><?php echo $all_orders->orders_id;?>"><?php echo $all_orders->orders_id;?></td>
							<td><?php 
								$sme_id = $all_orders->sme_id;
								$this->load->model('view_all_orders_m');
								$get_sme_name = $this->view_all_orders_m->get_sme_name($sme_id);
								echo $get_sme_name->firstname; 
								echo "&nbsp;";
								echo $get_sme_name->lastname;
							?>&nbsp;
							<?php
							$check_date = $all_orders->upload_date;
							$present_time = time();
							$last_seven_days = strtotime("7 days ago");
							if($check_date > $last_seven_days && $check_date <= $present_time){
								echo '<span style="color:red;font-size:20px;">*</span>';
							}else{
								echo '';
							}
						?></td>
							<td>
							<?php
							 	$supplier_id = $all_orders->supplier_id;
								$get_supplier_id = explode("," ,$supplier_id);
								$unique_supplier = array_unique($get_supplier_id);
								$this->load->model('view_all_orders_m');
								foreach($unique_supplier As $yoo)
								{
									$get_sup_name = $this->view_all_orders_m->get_sme_name($yoo);
									//print_r($get_sup_name);
									$supplier_name = $get_sup_name->company_name;
									echo ucfirst($supplier_name);
									echo "<br />";
								}
							 ?>
							 
							 </td>
							<td>
								<?php 
									if($get_sme_name->user_id == '52'){
										echo "Sage";
									}else{
										echo "Direct";
									}
								?>
							</td>
							<td><?php

									$this->load->model('view_all_orders_m');
									$currency = $all_orders->supplier_service_currency;
									$get_symbol = $this->view_all_orders_m->currency_sym($currency);
									echo $get_symbol->symbol;
									echo $all_orders->total_price;

								?>
							</td>
							<td><?php echo $all_orders->payment_option;?></td>
							<td><?php echo (($all_orders->payment_method == 'Stripe')?'Card': $all_orders->payment_method);?></td>
							<td><?php echo $all_orders->cus_payment_status;?></td>
							<td>
								<?php 
									$sup_payment_status = explode(",",$all_orders->sup_payment_status);
									$sup_tmp = array_count_values($sup_payment_status);
									if (in_array("Pending", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Pending'];
									  echo $cnt.' Supplier payment pending';
									  echo "<br>";
									}
									if (in_array("Confirm", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Confirm'];
									  echo $cnt.' Supplier payment complete';
									  echo "<br>";
									}
									if (in_array("Refund_requested", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Refund_requested'];
									  echo $cnt.' Refund requested';
									  echo "<br>";
									}
									if (in_array("Refund_completed", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Refund_completed'];
									  echo $cnt.' Refund completed';
									  echo "<br>";
									}

									if (in_array("Closed", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Closed'];
									  echo $cnt.' Supplier payment closed';
									  echo "<br>";
									}
									
								?>
							</td>
							<td>
								<?php 
									$order_status = explode(",",$all_orders->order_status);
									$tmp = array_count_values($order_status);
									if (in_array("smb_placed_order", $order_status))
									{
									  $cnt = $tmp['smb_placed_order'];
									  echo $cnt.' Order Pending';
									  echo "<br>";
									}
									if (in_array("seller_informed", $order_status))
									{
									  $cnt = $tmp['seller_informed'];
									  echo $cnt.' Order informed to Seller';
									  echo "<br>";
									}
									if (in_array("confirmed-by-seller", $order_status))
									{
									  $cnt = $tmp['confirmed-by-seller'];
									  echo $cnt.' Order confirmed by Seller';
									  echo "<br>";
									}
									if (in_array("reject-by-seller", $order_status))
									{
									  $cnt = $tmp['reject-by-seller'];
									  echo $cnt.' Order rejected by Seller';
									  echo "<br>";
									}

									if (in_array("seller_paid", $order_status))
									{
									  $cnt = $tmp['seller_paid'];
									  echo $cnt.' Supplier paid';
									  echo "<br>";
									}
									if (in_array("admin_cancelled", $order_status))
									{
									  $cnt = $tmp['admin_cancelled'];
									  echo $cnt.' Order cancelled by Admin';
									  echo "<br>";
									}
									if (in_array("order_delivered", $order_status))
									{
									  $cnt = $tmp['order_delivered'];
									  echo $cnt.' Order delivered';
									  echo "<br>";
									}
									
								?>
							</td>
							<td>
								<?php
									$check_refund = $this->view_all_orders_m->check_refund($all_orders->orders_id);
									if(!empty($check_refund)){
										if($check_refund->refund_status == 'seller_payment_pending'){
											echo "Seller payment pending";
										}else if($check_refund->refund_status == 'seller_refund_request_sent'){
											echo "Seller refund request sent";
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
							<td>
								<?php 
									if(!empty($check_refund)){
										echo ucfirst($check_refund->product_detail);
									}else{
										echo "NA";
									}
								?>
							</td>
							<td>
								<div class="form-group options">
	                                <label class="switch-light switch-ios">
	                                <input type="checkbox" name="status" id="option_2" <?php echo (($all_orders->status == '1')?'checked':'')?> onchange="statzz(<?php echo $all_orders->orders_id?>);">
	                                <span>
	                                	<span>Inactive</span>
	                                	<span>Active</span>
	                                </span>
	                                <a></a>
	                                </label>
                            	</div>
								<input type="hidden" id="order_tgle_<?php echo $all_orders->orders_id;?>" value="<?php echo $all_orders->status;?>">
							</td>
							<td>
								<?php
									$supplier_bank_details = $this->view_all_orders_m->payment_info($all_orders->supplier_id);
									if(!empty($supplier_bank_details->account_number)){
								?>
								<a href="javascript:void(0);" onClick="bank_details(<?php echo $all_orders->supplier_id;?>)" class="btn btn-success">View Details</a>
								<?php
									}else{
									echo "NA";
									}
								?>
							</td>
							<td><?php echo date('d/m/Y',$all_orders->upload_date);?></td>
							<td><a href="<?php echo base_url('order_details');?>/<?php echo $all_orders->orders_id;?>" class="btn btn-success" style="width:100px;">View Details</a></td>
						  </tr>
						 	<?php
						 		$i++;
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
    <script>
		function bank_details(e){
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url('pending_refund_request/bank_info');?>',
			data: {'sbm_id': e}, // change this to send js object
			type: "post",
			success: function(response){
				//alert(response);
			   //document.write(data); just do not use document.write
				$(response).modal({show:true});
			}
		  });
		 /* ajax code ends*/
		}
	</script>
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
    	function statzz(e){
    		var status_val = $('#order_tgle_'+e+'').val();
    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_all_orders/update_status',
		        data: {'status_val': status_val,'order_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#order_tgle_'+e+'').val(response);
		          $('#alertzzzz').show();
		        }
		      });
    		 /* ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
