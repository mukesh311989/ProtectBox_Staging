<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Staff Admin | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
	<style>
	.new_div {
		margin-bottom:20px;
	}
	.rounded_div {
		border:1px solid #CCC;
		box-shadow: 0px 0px 3px #bfbfbf;
		border-radius:5px;
	}
	.other_title
	{
		background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
	}
	.tooltiplink + .tooltip > .tooltip-inner {
		background-color: #73AD21; 
		color: #FFFFFF; 
		border: 1px solid green;
		padding: 15px;
		font-size: 20px;
	}
	.tooltip-inner{
		min-width: 300px; 	
	}
	/* Tooltip on top */
	.tooltiplink + .tooltip.top > .tooltip-arrow {
		border-top: 5px solid green;
	}

	/* Tooltip on bottom */
	.tooltiplink + .tooltip.bottom > .tooltip-arrow {
		border-bottom: 5px solid blue;
	}

	/* Tooltip on left */
	.tooltiplink + .tooltip.left > .tooltip-arrow {
		border-left: 5px solid red;
	}

	/* Tooltip on right */
	.tooltiplink + .tooltip.right > .tooltip-arrow {
		border-right: 5px solid black;
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
        <div class="main_title other_title" style="">
          Edit Staff Admin
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
			<?php
			if($this->session->flashdata('success')){
			?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php
				}
				if($this->session->flashdata('failed')){
			?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
			<?php
				}
				
			?>
			<div class="col-md-12" style="text-align:right;margin-top:15px;">
				<a href="<?php echo base_url('view_all_staff');?>" class="btn btn-warning">Back</a>
			</div>
			<div class="tab-content rounded_div">
				
				  <form name="profile" action="<?php echo base_url("edit_staff/update_staff");?>/<?php echo $fetch_staff->user_id;?>" method="POST">
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-user-8"></i>
						  </strong>Personal info
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>First name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="firstname" value="<?php echo $fetch_staff->firstname;?>">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Last name <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="lastname" value="<?php echo $fetch_staff->lastname;?>">
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Email <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="email" class="form-control" name="email" value="<?php echo $fetch_staff->email;?>" disabled>
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Telephone <span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please enter without any gaps and country code eg +4402080000000 Or +97316670000." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <input type="text" class="form-control" name="phone" value="<?php echo $fetch_staff->phone;?>">
							</div>
						  </div>
						</div>
					  </div>
					  <!--End step -->
					  
					  <div class="form_title">
						<h3>
						  <strong>
							<i class="icon-location-5">
							</i>
						  </strong>Manage Role 
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
							<div class="col-md-12 col-sm-12">
							  <div class=" table-responsive">
								  <table id="example" class="table table-striped table-bordered" style="width:100%">
										<thead>
										  <tr>
											<th width="30%"></th>
											<th width="15%" style="text-align:center;">Edit<br/>(Except Active/Inactive)</th>
											<th width="15%" style="text-align:center;">Edit Only (Active/Inactive)</th>
											<th width="15%" style="text-align:center;">Review Only</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<td>SMB Pending Orders</td>
											<td><input type="checkbox" id="smb_edit" name="smb_edit" value="YES" <?php echo(($fetch_staff->smb_leads_edit == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_edit_only" name="smb_edit_only" value="YES" <?php echo(($fetch_staff->smb_leads_edit_only == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_review" name="smb_review" value="YES" <?php echo(($fetch_staff->smb_leads_review == 'YES')?'checked':'');?>></td>
										  </tr>
										  <tr>
											<td>SMB Orders</td>
											<td><input type="checkbox" id="smb_orders_edit" name="smb_orders_edit" value="YES" <?php echo(($fetch_staff->smb_orders_edit == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_orders_edit_only" name="smb_orders_edit_only" value="YES" <?php echo(($fetch_staff->smb_orders_edit_only == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_orders_review" name="smb_orders_review" value="YES" <?php echo(($fetch_staff->smb_orders_review == 'YES')?'checked':'');?>></td>
										  </tr>
										   <tr>
											<td>SMB Refund Request</td>
											<td><input type="checkbox" id="smb_refund_request_edit" name="smb_refund_request_edit" value="YES" <?php echo(($fetch_staff->smb_refund_request_edit == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_refund_request_edit_only" name="smb_refund_request_edit_only" value="YES" <?php echo(($fetch_staff->smb_refund_request_edit_only == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="smb_refund_request_review" name="smb_refund_request_review" value="YES" <?php echo(($fetch_staff->smb_refund_request_review == 'YES')?'checked':'');?>></td>
										  </tr>
										  <tr>
											<td>Supplier Pricing / Ordering</td>
											<td><input type="checkbox" id="supplier_pricing_edit" name="supplier_pricing_edit" value="YES" <?php echo(($fetch_staff->supplier_price_edit == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="supplier_pricing_only" name="supplier_pricing_only" value="YES" <?php echo(($fetch_staff->supplier_price_edit_only == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="supplier_pricing_review" name="supplier_pricing_review" value="YES" <?php echo(($fetch_staff->supplier_price_review == 'YES')?'checked':'');?>></td>
										  </tr>
										  <tr>
											<td>Supplier Descriptions</td>
											<td><input type="checkbox" id="supplier_desc_edit" name="supplier_desc_edit" value="YES" <?php echo(($fetch_staff->supplier_desc_edit == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="supplier_desc_only" name="supplier_desc_only" value="YES" <?php echo(($fetch_staff->supplier_desc_edit_only == 'YES')?'checked':'');?>></td>
											<td><input type="checkbox" id="supplier_desc_review" name="supplier_desc_review" value="YES" <?php echo(($fetch_staff->supplier_desc_review == 'YES')?'checked':'');?>></td>
										  </tr>

										</tbody>
									  </table>
								  </div>
								</div>
								<div class="form-group">
									<input type="hidden" value="<?php echo $fetch_staff->role_id?>" name="roll_idz">
									<button type="submit" class="btn btn-success pull-right" >Update Staff Admin</button>
								</div>
							  </div>
					  <!--End step -->
					</form>
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
   <script src="js/jquery.validate.js"></script>
	<script>
	$(function() {
	  $("form[name='profile']").validate({
		rules: {
		  firstname: "required",
		  lastname: "required",
		  email : "required",
		  phone : "required",
		  message : "required",
		},
		messages: {
		  firstname: "This field is required",
		  lastname: "This field is required",
		  email : "This field is required",
		  phone : "This field is required",
		  message : "This field is required",
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>  

	<script>
	function check_pass() {
      var pass1 = $('.pass1').val();
      var pass2 = $('.pass2').val();
      if(pass1 != pass2)
  	  {
  		  $('.pass_error').show();
  	  }
  	  else{
  		  $('.pass_error').hide();
  	  }
    }
  </script>
  <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});


		//checked section jquery starts here

	$("#smb_edit").click(function(){
		if($('#smb_edit').prop("checked") == true){
			 $('#smb_review').prop('checked', true);
		}
	});
	$("#smb_edit_only").click(function(){
		if($('#smb_edit_only').prop("checked") == true){
			 $('#smb_review').prop('checked', true);
		}
	});


	$("#smb_orders_edit").click(function(){
		if($('#smb_orders_edit').prop("checked") == true){
			 $('#smb_orders_review').prop('checked', true);
		}
	});
	$("#smb_orders_edit_only").click(function(){
		if($('#smb_orders_edit_only').prop("checked") == true){
			 $('#smb_orders_review').prop('checked', true);
		}
	});


	$("#smb_refund_request_edit").click(function(){
		if($('#smb_refund_request_edit').prop("checked") == true){
			 $('#smb_refund_request_review').prop('checked', true);
		}
	});
	$("#smb_refund_request_edit_only").click(function(){
		if($('#smb_refund_request_edit_only').prop("checked") == true){
			 $('#smb_refund_request_review').prop('checked', true);
		}
	});


	$("#supplier_pricing_edit").click(function(){
		if($('#supplier_pricing_edit').prop("checked") == true){
			 $('#supplier_pricing_review').prop('checked', true);
		}
	});
	$("#supplier_pricing_only").click(function(){
		if($('#supplier_pricing_only').prop("checked") == true){
			 $('#supplier_pricing_review').prop('checked', true);
		}
	});


	$("#supplier_desc_edit").click(function(){
		if($('#supplier_desc_edit').prop("checked") == true){
			 $('#supplier_desc_review').prop('checked', true);
		}
	});
	$("#supplier_desc_only").click(function(){
		if($('#supplier_desc_only').prop("checked") == true){
			 $('#supplier_desc_review').prop('checked', true);
		}
	});

	//checked section jquery starts end
	</script>
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
