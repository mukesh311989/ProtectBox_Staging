<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Staff Admin | ProtectBox</title>
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
		min-height: 350px;
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
          View Staff Admin
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
			<div class="col-md-12" style="text-align:right;margin-top:15px;">
				<a href="<?php echo base_url('add_staff_admin');?>" class="btn btn-warning">Add Staff Admin</a>
			</div>
			<div class="tab-content rounded_div">
			  <h3>View Staff Admin</h3>

			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Sl&nbsp;No.</th>
							<th width="15%">Staff Name</th>
							<th width="30%">Email</th>
							<th width="15%">Phone</th>
							<th width="30%">SME&nbsp;Leads</th>
							<th width="30%">SMB&nbsp;Orders</th>
							<th width="30%">SMB&nbsp;Refund&nbsp;Request</th>
							<th width="30%">Supplier&nbsp;Pricing/Ordering</th>
							<th width="30%">Supplier&nbsp;Descriptions</th>
							<th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						$i = 1;
						foreach ($staff_data as $fetch_staff) {
						?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $fetch_staff->firstname;?>&nbsp;<?php echo $fetch_staff->lastname;?></td>
							<td><?php echo $fetch_staff->email;?></td>
							<td><?php echo $fetch_staff->phone;?></td>
							<td>
							<?php 
								echo "Edit"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_leads_edit == 'YES')?$fetch_staff->smb_leads_edit:'NO');echo "<br/>";
								
								echo "Edit Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_leads_edit_only == 'YES')?$fetch_staff->smb_leads_edit_only:'NO');echo "<br/>";
								
								echo "Review&nbsp;Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_leads_review == 'YES')?$fetch_staff->smb_leads_review:'NO');echo "<br/>";
							?>
							</td>
							<td>
							<?php
								echo "Edit"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_orders_edit == 'YES')?$fetch_staff->smb_orders_edit:'NO');echo "<br/>";
								
								echo "Edit Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_orders_edit_only == 'YES')?$fetch_staff->smb_orders_edit_only:'NO');echo "<br/>";
								
								echo "Review&nbsp;Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_orders_review == 'YES')?$fetch_staff->smb_orders_review:'NO');echo "<br/>";
							?>
							</td>
							<td>
							<?php
								echo "Edit"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_refund_request_edit == 'YES')?$fetch_staff->smb_refund_request_edit:'NO');echo "<br/>";
								
								echo "Edit Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_refund_request_edit_only == 'YES')?$fetch_staff->smb_refund_request_edit_only:'NO');echo "<br/>";
								
								echo "Review&nbsp;Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->smb_refund_request_review == 'YES')?$fetch_staff->smb_refund_request_review:'NO');echo "<br/>";
							?>
							</td>
							<td><?php
								echo "Edit"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_price_edit == 'YES')?$fetch_staff->supplier_price_edit:'NO');echo "<br/>";
								
								echo "Edit Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_price_edit_only == 'YES')?$fetch_staff->supplier_price_edit_only:'NO');echo "<br/>";
								
								echo "Review&nbsp;Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_price_review == 'YES')?$fetch_staff->supplier_price_review:'NO');echo "<br/>";
							?></td>
							<td><?php
								echo "Edit"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_desc_edit == 'YES')?$fetch_staff->supplier_desc_edit:'NO');echo "<br/>";
								
								echo "Edit Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_desc_edit_only == 'YES')?$fetch_staff->supplier_desc_edit_only:'NO');echo "<br/>";
								
								echo "Review&nbsp;Only"; echo "&nbsp;:&nbsp;"; echo (($fetch_staff->supplier_desc_review == 'YES')?$fetch_staff->supplier_desc_review:'NO');echo "<br/>";
							?></td>
							<td><a href="<?php echo base_url('edit_staff');?>/<?php echo $fetch_staff->user_id;?>" class="btn btn-success">Edit Staff</a></td>
						  </tr>
						<?php
						$i++;
						}
						?>
						 </tbody>
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
