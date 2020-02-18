<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="/">
    <title>Add Coupons | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
		.rounded_div {
			border:1px solid #CCC;
			box-shadow: 0px 0px 3px #bfbfbf;
			border-radius:5px;
		}
		.field-icon {
		  float: right;
		  margin-right: 5px;
		  margin-top: -29px;
		  position: relative;
		  font-size:18px;
		  z-index: 2;
		}
		
	</style>
  </head>
  <body onload="makeid(5);">
    <div id="load">
    </div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Add Coupons
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
			<div class="tab-content rounded_div">
				  <form name="coupon" action="<?php echo base_url("coupons/add_data");?>" method="POST">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Coupon code <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control coupn_code" name="coupon_code" value="">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label> Discount type <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <select class="form-control" name="discount_type">
							  		<option selected disabled> -Choose- </option>
									<option value="percentage">Percentage (%)</option>
									<option value="amount">Amount</option>
							  </select>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label>Discount value <span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <input type="text" class="form-control" name="discount_value" value="">
							</div>
						  </div>
						  <div class="col-md-6 col-sm-6">
						  	<div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label>Start Date <span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="text" class="form-control" id="start_date" name="start_date">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label>End Date <span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <input type="text" class="form-control" id="end_date" name="end_date">
								</div>
							</div>
						  </div>
						</div>

						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <input type="submit" class="form-control btn-warning" name="sub" value="Save" style="color:#fff;">
							</div>
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
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.password-validation.js"></script>
	<script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
	//jQuery(document).ready(function($) {
		function makeid(length) {
		   var result           = '';
		   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		   var charactersLength = characters.length;
		   for ( var i = 0; i < length; i++ ) {
			  result += characters.charAt(Math.floor(Math.random() * charactersLength));
		   }
		   $(".coupn_code").val(result);
		}

		//console.log(makeid(5));
	//});
</script>
	<script>
	$(function() {
	  $("form[name='coupon']").validate({
		rules: {
		  coupon_code: "required",
		  discount_type: "required",
		  discount_value : "required",
		  start_date: "required",
		  end_date: "required"
		},
		messages: {
		  coupon_code: "This field is required",
		  discount_type: "This field is required",
		  discount_value : "This field is required",
		  start_date: "This field is required",
		  end_date: "This field is required"
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});

	$( function() {
	  	var from = $( "#start_date" ).datepicker({
	  		dateFormat: "yy-mm-dd",
	        minDate: 0,
	    }).on( "change", function() {
	        to.datepicker( "option", "minDate", getDate( this ) );
	    }),
	    to = $( "#end_date" ).datepicker({
	    	dateFormat: "yy-mm-dd",
	    	minDate: 0,
	    }).on( "change", function() {
	      from.datepicker( "option", "maxDate", getDate( this ) );
	    });

	  function getDate( element ) {
	    var date;
	    var dateFormat = "yy-mm-dd";
	    try {
	      date = $.datepicker.parseDate( dateFormat, element.value );
	    } catch( error ) {
	      date = null;
	    }
	    return date;
	  }
	});	
	</script>  


  <script>
  	jQuery('document').ready(function () {
  		window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });
  	});
	</script>
  </body>
</html>
