<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Refund Request | ProtectBox</title>
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
          All Refund Request
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
		<?php
			if($this->session->flashdata('failed_status')){
		?>
			<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed_status');?></strong> </div>
		<?php
			}
			if($this->session->flashdata('success_status')){
		?>
			<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success_status');?></strong> </div>
		<?php
			}
		?>
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->  
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
			  	<div id="alertzzzz" style="display:none;">
					<div class="alert alert-success"> <strong>Refund status updated successfully!</strong> </div>
				</div>
				<div id="please_wait" style="display:none;">
					<div class="alert alert-info"> <strong>Please Wait</strong> </div>
				</div>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Refund&nbsp;No.</th>
							<th width="30%">SMB</th>
							<th width="15%">Supplier&nbsp;Email</th>
							<th width="15%">Order&nbsp;Id</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th width="15%">Customer&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Supplier&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Refund&nbsp;Status</th>
							<th width="15%">Transaction ID</th>
							<th width="15%">SMB&nbsp;Bank&nbsp;Details</th>
							<th width="15%">Notify</th>
							<th width="15%">Date</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($pending_refund AS $all_pending_orders){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php 
								$sme_id = $all_pending_orders->smb_id;
								
								$get_smb_name = $this->pending_refund_request_m->supp_info($sme_id);
								echo $get_smb_name->firstname; 
								echo "&nbsp;";
								echo $get_smb_name->lastname;
							?></td>

							<td><?php
							 	$order_id = $all_pending_orders->order_id;
								//$this->load->model('pending_refund_request_m');
								$get_supplier_info = $this->pending_refund_request_m->get_supplier_id($order_id);
								//print_r($get_supplier_info);
								if($get_supplier_info != ""){
									$supplier_id = $get_supplier_info->supplier_id;
									$get_suup_details = $this->pending_refund_request_m->supp_info($supplier_id);
									echo $get_suup_details->email; 
								}								
							 ?></td>
							
						
					
							<td><?php echo $all_pending_orders->order_id;?></td>
							<td><?php echo $get_supplier_info->payment_method;?></td>
							<td><?php echo $get_supplier_info->cus_payment_status;?></td>
							<td>
								<a href="javascript:void(0);" onClick="supplier_service_details(<?php echo $all_pending_orders->order_id;?>)">
								<?php 

									$sup_payment_status = explode(",",$get_supplier_info->sup_payment_status);
									$sup_tmp = array_count_values($sup_payment_status);
									if (in_array("Pending", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Pending'];
									  echo $cnt.' Pending';
									  echo "<br>";
									}
									if (in_array("Success", $sup_payment_status))
									{
									  $cnt = $sup_tmp['Success'];
									  echo $cnt.' Success';
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
								?>
								</a>
							</td>
							<td>
								<?php
									if($all_pending_orders->refund_status == 'seller_payment_pending'){
										echo "Seller payment pending";
									}else if($all_pending_orders->refund_status == 'seller_refund_request_sent'){
										echo "Seller refund request sent";
									}else if($all_pending_orders->refund_status == 'seller_refunded'){
										echo "Seller refunded";
									}else if($all_pending_orders->refund_status == 'seller_payment_confirmed'){
										echo "Seller payment confirmed";
									}else if($all_pending_orders->refund_status == 'smb_refunded'){
										echo "SMB refunded";
									}
								?>
							</td>
							<td>
								<input type="text" class="form-control" id="trans_id_<?php echo $all_pending_orders->service_id;?>" value="<?php echo $all_pending_orders->transaction_id;?>"/>
							</td>
							<td><a href="javascript:void(0);" onClick="bank_details(<?php echo $all_pending_orders->smb_id;?>)" class="btn btn-success">View Details
							</td>
							<td>
								<select class="form-control" onchange="update_status(this.value,'<?php echo $all_pending_orders->refund_id;?>','<?php echo $all_pending_orders->order_id;?>','<?php echo $all_pending_orders->service_id;?>')">
									<option value="seller_payment_pending" <?php echo(($all_pending_orders->refund_status == 'seller_payment_pending')?'selected':'');?>>Seller payment pending</option>
									<option value="seller_refund_request_sent" <?php echo(($all_pending_orders->refund_status == 'seller_refund_request_sent')?'selected':'');?>>Seller refund request sent</option>
									<option value="seller_refunded" <?php echo(($all_pending_orders->refund_status == 'seller_refunded')?'selected':'');?>>Seller refunded</option>
									<option value="seller_payment_confirmed" <?php echo(($all_pending_orders->refund_status == 'seller_payment_confirmed')?'selected':'');?>>Seller payment confirmed</option>
									<option value="smb_refunded" <?php echo(($all_pending_orders->refund_status == 'smb_refunded')?'selected':'');?>>SMB refunded</option>
								</select>
							</td>
							<td><?php echo date('d/m/Y',$all_pending_orders->refund_date);?></td>
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
    <?php
		$i = 1;
		foreach($pending_refund AS $all_processing_orders){
	?>
		<div id="myModal_<?php echo $i;?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Refund Proof</h4>
			  </div>
			  <div class="modal-body">
			  		<?php
			  		if($all_processing_orders->proof != ""){
						$image = $all_processing_orders->proof;
						$ext = pathinfo($image, PATHINFO_EXTENSION);
						if($ext == 'pdf'){	
					?>
						<p>Please Click <a href="<?php echo base_url('uploads')?>/<?php echo $image?>" target="_blank"  class="btn btn-primary">HERE</a> To Download The File</p>
					<?php
						}else{
					?>
						<p><a href="<?php echo base_url('uploads')?>/<?php echo $image?>" target="_blank" ><img src= "<?php echo base_url('uploads')?>/<?php echo $image;?>"></a></p>
					<?php
						}
					}else{
					?>
						<p>No Documents Found</p>
					<?php
						}
					?>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
	<?php
			$i++;
		}
	?>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <script>

	  function update_status(refund_status,refund_id,order_id,service_id){
		 $("#alertzzzz").hide();
		 var trans_id = $("#trans_id_"+service_id+"").val();
		  
		  /*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>pending_refund_request/update_pending_request',
			data: {'refund_status': refund_status,'refund_id' :refund_id,'order_id': order_id,'trans_id': trans_id,'service_id': service_id}, // change this to send js object
			type: "post",
			success: function(response){
			   $('#example').load(' #example');
			   $("#alertzzzz").show();
			}
		  });
		 /* ajax code ends*/
		
      }
    </script>
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
	<script>
		function supplier_service_details(e){
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url('pending_refund_request/supplier_service_details');?>',
			data: {'order_id': e}, // change this to send js object
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

	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
