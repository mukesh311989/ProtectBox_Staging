<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Supplier Payment Details | ProtectBox</title>
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
          Supplier Payment Details
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
							
						      <th width="15%" id="del">Order Number</th>
						      <th width="15%" id="active">Supplier Name</th>
						      <th width="15%">Supplier company Name</th>    
							  <th width="15%">Service Name</th>    
						      <th width="15%">Pay Amount</th>
						      <th width="15%">Pay date</th>
						      <th width="15%">Transaction ID</th>
							  <th width="15%">Pay Status</th>
							  <th width="15%">Pay Mode</th>
							  <th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							$i = 0;
							foreach($fetch_order as $order_details)
							{?>
						  <tr>
							
							<td><?php echo $order_details->order_id;?></td>
						<td><?php
							 	$supplier_id = $order_details->seller_id;
								
								$ci =&get_instance();
								$ci->load->model('view_all_orders_m');
								$get_sup_name = $ci->view_all_orders_m->get_sme_name($supplier_id);
								
								echo $get_sup_name->company_name;
							 ?></td>
							<td><?php echo $order_details->supplier_name;?></td>
							<td>
								 <?php echo ucfirst($order_details->product_detail);;?>
								 <input type="hidden" id="serv_name_<?php echo $order_details->id;?>" value="<?php echo $order_details->product_detail;?>">
							</td>
							<td><input type="text" class="form-control" id="pay_amnt_<?php echo $order_details->id;?>" value="<?php echo $order_details->seller_amount;?>"></td>
							
							<td><input type="date" class="form-control" id="pay_date_<?php echo $order_details->id;?>" value="<?php echo $order_details->pay_date;?>"></td>
							<td>
								<input type="text" class="form-control" id="trans_key_<?php echo $order_details->id;?>" value="<?php echo $order_details->transaction_id;?>">
							</td>
							<td>
							
								<select class="form-control" id="status_<?php echo $order_details->id;?>" >
									 <option value="Pending" <?php if($order_details->pay_status == 'Pending'){ echo "selected"; } ?>>Pending</option>
									 <option value="Confirm" <?php if($order_details->pay_status == 'Confirm'){ echo "selected"; } ?>>Confirm</option>
									 <option value="Refund_requested" <?php if($order_details->pay_status == 'Refund_requested'){ echo "selected"; } ?>>Seller To refund</option>
									 <option value="Refund_completed" <?php if($order_details->pay_status == 'Refund_completed'){ echo "selected"; } ?>>Refunded</option>
									 <option value="Closed" <?php if($order_details->pay_status == 'Closed'){ echo "selected"; } ?>>Closed</option>
								</select>
								<input type="hidden" id="key_<?php echo $order_details->id;?>" value="<?php echo $i;?>">
								
							</td>

							<td>
								<?php if($order_details->pay_mode ==1){ echo "Auto"; }else{ echo "Manual"; } ?>
							</td>
							<td><a href="javascript:void(0);" class="btn btn-success" style="width:100px;" onclick="update_pay_stat('<?php echo $order_details->id;?>');">Update</td>
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
		 $("#alertzzzz").hide();
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>order_details/update_status',
			data: {'order_id': order_id,'service_id' :service_id,'key': key,'status': status}, // change this to send js object
			type: "post",
			success: function(response){
			   $("#alertzzzz").show();
			}
		  });
		 /* ajax code ends*/
      }

	  function update_pay_stat(sl_id){
		$("#alertzzzz").hide();
		var serv_name = $("#serv_name_"+sl_id+"").val();
		var pay_date = $("#pay_date_"+sl_id+"").val();
		var pay_amnt = $("#pay_amnt_"+sl_id+"").val();
		var trans_key = $("#trans_key_"+sl_id+"").val();
		var status = $("#status_"+sl_id+"").val();
		var key = $("#key_"+sl_id+"").val();
		
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>sup_payment_details/update_status',
			data: {'serv_name' :serv_name,'sl_id' :sl_id,'pay_date': pay_date,'pay_amnt': pay_amnt,'trans_key':trans_key,'status': status,'key':key}, // change this to send js object
			type: "post",
			success: function(response){
			   $('#example').load(' #example');
			   $("#alertzzzz").show();
			}
		  });
		 /* ajax code ends*/
		
	  }
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
