<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pending Orders | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    
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
          Pending Orders
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
							<th width="10%">Order&nbsp;No.</th>
							<th width="30%">SME</th>
							<th width="15%">Supplier&nbsp;Name</th>
							<th width="30%">Service&nbsp;Provider</th>
							<th width="30%">Sage/Direct/Xero</th>
							<th width="15%">Total&nbsp;Price</th>
							<th width="15%">ProtectBox&nbsp;Amount</th>
							<th width="15%">Supplier&nbsp;Amount</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th width="15%">Date</th>
							<th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_pending_orders AS $all_orders){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php 
								$sme_id = $all_orders->sme_id;
								$ci =&get_instance();
								$ci->load->model('view_all_orders_m');
								$get_sme_name = $ci->view_all_orders_m->get_sme_name($sme_id);
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
							<td><?php
							 	$supplier_id = $all_orders->supplier_id;
								
								$get_sme_name = $ci->view_all_orders_m->get_sme_name($supplier_id);
								echo $get_sme_name->firstname; 
								echo "&nbsp;";
								echo $get_sme_name->lastname;
							 ?></td>
							<td>
							<?php 
								$get_providing_method = $ci->view_all_orders_m->get_method($supplier_id);
								echo ucfirst($get_providing_method->service_provider);
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
							<td><?php echo $all_orders->total_price;?></td>
							<td><?php echo $all_orders->pb_amt_received;?></td>
							<td><?php echo $all_orders->sup_amt_received;?></td>
							<td><?php echo $all_orders->payment_method;?></td>
							<td><?php echo date('d/m/Y',$all_orders->upload_date);?></td>
							<td>
								<a href="javascript:void(0);" class="btn btn-success" style="width:110px;">Pay Now</a>
							</td>
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
    
    <script>
     
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
    		if ($('#option_2').is(":checked")){
    			var status_val = '1';
    		}else{
    			var status_val = '0';
    		}

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_all_orders/update_status',
		        data: {'status_val': status_val,'order_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          $('#alertzzzz').show();
		        }
		      });
    		 /* ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
