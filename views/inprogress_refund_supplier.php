<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>In Progress Refund Request | ProtectBox</title>
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
          All In Progress Refund Request
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
					<div class="alert alert-success"> <strong>Order status updated successfully!</strong> </div>
				</div>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Sl&nbsp;No.</th>
							<th width="30%">SMB</th>
							<th width="15%">Supplier&nbsp;Email</th>
							<th width="15%">Order Id</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th width="15%">Customer&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Supplier&nbsp;Payment&nbsp;Status</th>
							<th width="15%">Refund&nbsp;Status</th>
							<th width="15%">Date</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($inprogress_refund AS $all_pending_orders){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php 
								$sme_id = $all_pending_orders->smb_id;
								
								$get_smb_name = $this->inprogress_refund_supplier_m->supp_info($sme_id);
								echo $get_smb_name->firstname; 
								echo "&nbsp;";
								echo $get_smb_name->lastname;
							?></td>

							<td><?php
							 	$order_id = $all_pending_orders->order_id;
								//$this->load->model('pending_refund_request_m');
								$get_supplier_info = $this->inprogress_refund_supplier_m->get_supplier_id($order_id);
								//print_r($get_supplier_info);

								$supplier_id = $get_supplier_info->	supplier_id;
								$get_suup_details = $this->inprogress_refund_supplier_m->supp_info($supplier_id);
								
								echo $get_suup_details->email; 
								
							 ?></td>
							
						
					
							<td><?php echo $all_pending_orders->order_id;?></td>
							<td><?php echo $get_supplier_info->payment_method;?></td>
							<td><?php echo $get_supplier_info->cus_payment_status;?></td>
							<td><?php echo $get_supplier_info->sup_payment_status;?></td>
							<td><?php echo $all_pending_orders->refund_status;?></td>
							
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
