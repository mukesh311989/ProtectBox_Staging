<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Order Invoice | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
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
	.invoice_header{
		font-size:16px;
		padding-right:3px;
		text-align:right;
	}
	.table>thead>tr>th{
		border-top:none;
		border-left:none;
		border-bottom:none;
		vertical-align: 0;
	}
	.table-bordered>thead>tr>th{
		border-right:2px solid #ddd;
	}
	.no-line{
		border:none !important;
		font-size:16px;
	}
	.table-responsive{
		overflow-x:hidden;
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
          Order Invoice
        </div>
      </div>
    </section>
    <!-- End section -->
	<?php
	//echo $order_data->sme_id;
	?>
    <main>    
      <div class="container margin_60">
	<div class="container" id="content" style="background:white;">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-6">
						<div class="invoice-title">
							<h2>INVOICE</h2>
						</div>
					</div>
					<div class="col-xs-6 text-right">
						<div class="invoice-title">
							<img src="<?php echo base_url();?>/images/logo.png" style="width:250px;">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-9">
					<div class="table-responsive">
						<table class="table table-bordered " style="width:200px;border:none;">
							<thead>
								<tr>
									<th class="invoice_header">Order&nbsp;number</th>
									<th class="no-line"><?php echo $order_data->orders_id;?></th>
								</tr>
								<tr>
									<th class="invoice_header">Date</th>
									<th class="no-line"><?php echo date('d-m-Y',$order_data->upload_date);?></th>
								</tr>
								<tr>
									<th class="invoice_header">VAT&nbsp;No.</th>
									<th class="no-line"></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>


					<div class="col-xs-3">
						<!--<address>
						<?php
							 $sme_id = $order_data->sme_id;
							//exit;
							$get_sme_details = $this->invoice_m->get_sme_details($sme_id);
							//print_r($get_sme_details);

						?>
						<strong>To:</strong><br>
							<?php echo $get_sme_details->firstname;?>&nbsp;<?php echo $get_sme_details->lastname;?><br>

							<strong>Address:</strong><br>
							<?php echo $get_sme_details->address;?><br>
						
						</address>-->
						<div class="table-responsive text-right">
							<?php
								 $sme_id = $order_data->sme_id;
								 $get_sme_details = $this->invoice_m->get_sme_details($sme_id);
							?>
							<table class="table table-bordered " style="width:200px;border:none;">
								<thead>
									<tr>
										<th class="invoice_header">To</th>
										<th class="no-line"><?php echo $get_sme_details->firstname;?>&nbsp;<?php echo $get_sme_details->lastname;?></th>
									</tr>
									<tr>
										<th class="invoice_header">Address</th>
										<th class="no-line"><?php echo $get_sme_details->address;?></th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				
				</div>
		
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td colspan="2" style="width:75%;"><h3>Description</h3></td>
								<td class="" style="width:25%;"><h3>Amount</h3></td>
							</tr>
						</thead>
						<?php
							if($this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
						?>
						<tbody style="font-size:17px;">
							<!-- foreach ($order->lineItems as $line) or some such thing here -->
							<?php
								$service_id = explode(",",$order_data->supplier_service_id);
								$supplier_service_price = explode(",",$order_data->supplier_service_price);
								$service_payment_option = explode(",",$order_data->service_payment_option);
								$supplier_service_currency = explode(",",$order_data->supplier_service_currency);
								$commission_percentage = explode(",",$order_data->commission_percentage);
								foreach($service_id As $key=>$all_item){

								$get_details = $this->invoice_m->item_details($all_item);
								$get_currency = $get_details->currency;
								$fetch_currencyCode = $this->invoice_m->fetch_currency_code($get_currency);
								$currencyCode = $fetch_currencyCode->symbol;
							?>
							<tr>
								<td colspan="2"><?php echo $get_details->service_name;?></td>
								
								<td class="text-right">
									<?php
										if($service_payment_option[$key] == 'Monthly')
										{
											$total_price = $supplier_service_price[$key] * 12;
											$commission_price = $total_price * ($commission_percentage[$key]/100);
											$total_showable_price = $total_price + $commission_price;

										}
										else if($service_payment_option[$key] == 'Quarterly')
										{
											$total_price = $supplier_service_price[$key] * 4;
											$commission_price = $total_price * ($commission_percentage[$key]/100);
											$total_showable_price = $total_price + $commission_price;
										}
										else if($service_payment_option[$key] == 'Yearly')
										{
											$total_price = $supplier_service_price[$key] * 1;
											$commission_price = $total_price * ($commission_percentage[$key]/100);
											$total_showable_price = $total_price + $commission_price;
										}
									?>
									<?php echo $currencyCode;?>&nbsp;<?php echo $total_showable_price;?>
								</td>
							</tr>
							<?php
								}
							?>
							<tr>
								<td class="no-line text-right"></td>
								<td class="no-line text-right"><strong>Subtotal</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;<?php echo $order_data->total_price;?>.00</strong></td>
							</tr>
							<tr>
								<td class="no-line"></td>
								
								<td class="no-line text-right"><strong>VAT</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;0.00</strong></td>
							</tr>
							<tr>
								<td class="no-line"></td>
								
								<td class="no-line text-right"><strong>Total</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;<?php echo $order_data->total_price;?>.00</strong></td>
							</tr>
						</tbody>
					
					<?php
						}else if($this->session->userdata['logged_in']['user_type'] == "Supplier"){
					?>
					
						<tbody>
							<!-- foreach ($order->lineItems as $line) or some such thing here -->
							<?php
								$service_id = explode(",",$order_data->supplier_service_id);
								$supplier_service_price = explode(",",$order_data->supplier_service_price);
								$service_payment_option = explode(",",$order_data->service_payment_option);
								$supplier_service_currency = explode(",",$order_data->supplier_service_currency);
								$commission_percentage = explode(",",$order_data->commission_percentage);
								$commisson_pricezz = array();
								foreach($service_id As $key=>$all_item){

								$get_details = $this->invoice_m->item_details($all_item);
								$get_currency = $get_details->currency;
								$fetch_currencyCode = $this->invoice_m->fetch_currency_code($get_currency);
								$currencyCode = $fetch_currencyCode->symbol;
							?>
							<tr>
								<td colspan="2"><?php echo $get_details->service_name;?></td>
								<td class="text-right">		
								<?php
										if($service_payment_option[$key] == 'Monthly')
										{
											$total_price = $supplier_service_price[$key] * 12;
											$commission_price[] = $total_price * ($commission_percentage[$key]/100);

										}
										else if($service_payment_option[$key] == 'Quarterly')
										{
											$total_price = $supplier_service_price[$key] * 4;
											$commission_price[] = $total_price * ($commission_percentage[$key]/100);
										}
										else if($service_payment_option[$key] == 'Yearly')
										{
											$total_price = $supplier_service_price[$key] * 1;
											$commission_price[] = $total_price * ($commission_percentage[$key]/100);
										}
									?>
										<?php echo $currencyCode;?>&nbsp;<?php echo $total_price;?>
									</td>
								</tr>
						<?php
							}
							$commisson_pricezz = array_sum($commission_price);
						?>
							<tr>
								<td class="no-line text-right"></td>
								<td class="no-line text-right"><strong>Commission</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;<?php echo $commisson_pricezz;?></strong></td>
							</tr>
							<tr>
								<td class="no-line text-right"></td>
								<td class="no-line text-right"><strong>Subtotal</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;<?php echo $order_data->total_price;?></strong></td>
							</tr>
							<tr>
								<td class="no-line text-right"></td>
								
								<td class="no-line text-right"><strong>VAT</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;00</strong></td>
							</tr>
							<tr>
								<td class="no-line text-right"></td>
								
								<td class="no-line text-right"><strong>Total</strong></td>
								<td class="no-line text-right"><strong><?php echo $currencyCode;?>&nbsp;<?php echo $order_data->total_price;?></strong></td>
							</tr>
						</tbody>
					<?php
						}
					?>
					</table>

				</div>
				
				<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					<tr>
						<td valign="top" align="center">
							<table class="main" width="500" cellspacing="0" cellpadding="0" border="0" align="left">
								<tr>
									<td valign="middle" align="center">
										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
										
											<tr>
												<td valign="top" align="center">
													<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td style="font-family:Open Sans, Verdana, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" valign="top" align="left">
																<multiline>
																	Copyright &copy; 2018 ProtectBox Ltd. &nbsp;
																</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																<unsubscribe>
																	Company number: NI643316 VAT registration number 297 5082 62
																</unsubscribe>
																<multiline>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
													&nbsp;
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
					
			</div>
		</div>
	</div>
	<div class="col-md-4 col-md-offset-5" id="editor">
		<a id="cmd" class="btn btn-success btn-lg button-link" style="width:200px;color:white;margin-top:3px;">
			Download As Pdf
		</a>
	</div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->

   <script>
	$('#cmd').click(function() {
	  var options = {
	  };
	  var pdf = new jsPDF('p', 'pt', 'a4');
	  pdf.addHTML($("#content"), 20, 80, options, function() {
		pdf.save('ProtectBox.pdf');
	  });
	});
</script>
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
	</script>
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
