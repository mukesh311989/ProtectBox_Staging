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
	.invoice_header{
		font-size:20px;
		height:2px;
		border:0 !important;
	}
	.table-header>thead>tr>td{
		border-top:0;
		border-left:0;
		border-bottom:0;
		vertical-align: 0;
	}
	.table-product>thead>tr>td{
		border-top:1px solid #ddd;
		border-left:1px solid #ddd;
		border-bottom:1px solid #ddd;
		vertical-align: 0;
	}
	.table>tbody>tr>td{
		border-right:2px solid #ddd;
		vertical-align: 0;
	}
	.no-line{
		border:0px solid #fff !important;
		padding:5px;
		height:2px;
		font-size:16px;
		vertical-align: 0;
	}
	.table-bordered>tbody>tr>.no-line{
		border: 1px solid #fff;
	}
	.table-responsive{
		overflow:hidden !important;
	}
	</style>
  </head>
  <body>
    <main>    
	
      <div class="container margin_60">
	  	<form  method="post">
			<div class="container" id="content" style="background:white;">
				<div class="col-md-12">
						<div class="row" style="margin-bottom:20px;">
							<div class="col-md-12 col-xs-12 col-sm-12">
							<?php
								 $this->load->model('order_process_m');
								 $sme_id = $order_data->sme_id;
								 $get_sme_details = $this->order_process_m->get_sme_details($sme_id);
							?>
							<div class="table-responsive">
								<table class="table table-header" cellpadding="10" cellspacing="5" style="width:100%;border:none;">
									<thead>
										<tr>
											<td class="no-line text-left" colspan="5"><h2>INVOICE</h2></td>
											<td class="text-right"><img src="https://www.staging.protectbox.com/images/logo.png" style="height:40px;"></td>
										</tr>
										<tr>
											<td class="no-line text-left" colspan="4"><span><b class="invoice_header">Contact&nbsp;Email&nbsp;|</b>&nbsp;<?php echo $td_uk_account->pb_email;?></span><br></td>
											<td class="no-line text-right" colspan="2">
												<span><b class="invoice_header">Account&nbsp;Number&nbsp;|</b>&nbsp;<?php echo $td_uk_account->account_number;?></span><br>
												<span><b class="invoice_header">Account&nbsp;Name&nbsp;|</b>&nbsp;<?php echo $td_uk_account->account_name;?></span><br>
												<p><b class="invoice_header">Account&nbsp;Address&nbsp;|</b>&nbsp;<?php echo $td_uk_account->account_address;?></p>
											</td>
										</tr>
										
									</thead>
									<tbody>
										
										<tr>
											<td class="invoice_header text-right"><h3>Order&nbsp;number&nbsp;|</h3></td>
											<td class="no-line text-left" ><?php echo $order_data->orders_id;?></td>
											<td class="no-line text-left" style="width:200px;"></td>
											<td class="no-line text-left" style="width:200px;"></td>
											<td class="invoice_header text-right"><h3>To&nbsp;|</h3></td>
											<td class="no-line text-left"><?php echo $get_sme_details->firstname;?>&nbsp;<?php echo $get_sme_details->lastname;?></td>
										</tr>
										<tr>
											<td class="invoice_header text-right"><h3>Date&nbsp;|</h3></td>
											<td class="no-line" colspan="3"><?php echo date('d-m-Y',$order_data->upload_date);?></td>
											<td class="invoice_header text-right"><h3>Address&nbsp;|</h3></td>
											<td class="no-line text-left"><?php echo $get_sme_details->address;?></td>
										</tr>
										<tr>
											<td class="invoice_header text-right"><h3>VAT&nbsp;No.&nbsp;|</h3></td>
											<td class="no-line" colspan="3"></td>
											<td class="invoice_header text-right"><h3>SMB&nbsp;Email&nbsp;|</h3></td>
											<td class="no-line text-left"><?php echo $get_sme_details->email;?></td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="table-responsive">
							<table class="table  table-bordered" cellpadding="10" cellspacing="5">
								<thead>
									<tr>
										<td style="width:40%;padding:3px;text-align:center;"><h3>Description</h3></td>
										<td style="width:20%;padding:3px;text-align:center;"><h3>Stockcode</h3></td>
										<td style="width:20%;padding:3px;text-align:center;"><h3>Quantity</h3></td>
										<td style="width:20%;padding:3px;text-align:center;"><h3>Price</h3></td>
									</tr>
								</thead>
							
								<tbody>
									<!-- foreach ($order->lineItems as $line) or some such thing here -->
									<?php
										$service_id = explode(",",$order_data->supplier_service_id);
										$supplier_service_price = explode(",",$order_data->supplier_service_price);
										$service_payment_option = explode(",",$order_data->service_payment_option);
										$supplier_service_currency = explode(",",$order_data->supplier_service_currency);
										$commission_percentage = explode(",",$order_data->commission_percentage);
										$commisson_pricezz = array();
										$sub_total_pricezz = array();
										$total_pricezz = array();
										foreach($service_id As $key=>$all_item){

										$get_details = $this->order_process_m->item_details($all_item);
									?>
									<tr>
										<td style="font-size:15px;padding:9px;width:40%;"><?php echo $get_details->service_name;?></td>
										<td style="font-size:15px;padding:9px;width:20%;text-align:center;"><?php echo $get_details->service_stockcode;?></td>
										<td style="font-size:15px;padding:9px;width:20%;text-align:center;"><?php echo '1';?></td>
										<td style="font-size:15px;padding:9px;width:20%;text-align:center;">		
										<?php
											if($service_payment_option[$key] == 'Monthly')
											{
												$total_price = $supplier_service_price[$key] * 12;
												$sub_total_price[] = $supplier_service_price[$key] * 12;
												$commission_price[] = $total_price * ($commission_percentage[$key]/100);

											}
											else if($service_payment_option[$key] == 'Quarterly')
											{
												$total_price = $supplier_service_price[$key] * 4;
												$sub_total_price[] = $supplier_service_price[$key] * 4;
												$commission_price[] = $total_price * ($commission_percentage[$key]/100);
											}
											else if($service_payment_option[$key] == 'Yearly')
											{
												$total_price = $supplier_service_price[$key] * 1;
												$sub_total_price[] = $supplier_service_price[$key] * 1;
												$commission_price[] = $total_price * ($commission_percentage[$key]/100);
											}
										?>
											<?php echo $order_data->currency;?>&nbsp;<?php echo $total_price;?>
										</td>
									</tr>
								<?php
									}
									$commisson_pricezz = array_sum($commission_price);
									$sub_total_pricezz = array_sum($sub_total_price);
									$total_pricezz = $commisson_pricezz + $sub_total_pricezz;
								?>
									<tr>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"><h4>Commission</h4></td>
										<td class="no-line text-right" style="font-size:20px;"><?php echo $order_data->currency;?>&nbsp;<?php echo number_format((float)$commisson_pricezz, 2, '.', '');?></td>
									</tr>
									<tr>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"><h4>Subtotal</h4></td>
										<td class="no-line text-right" style="font-size:20px;"><?php echo $order_data->currency;?>&nbsp;<?php echo number_format((float)$sub_total_pricezz, 2, '.', '');?></td>
									</tr>
									<tr>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"><h4>VAT</h4></td>
										<td class="no-line text-right" style="font-size:20px;"><?php echo $order_data->currency;?>&nbsp;00</td>
									</tr>
									<tr>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"></td>
										<td class="no-line text-right"><h4>Total</h4></td>
										<td class="no-line text-right" style="font-size:20px;"><?php echo $order_data->currency;?>&nbsp;<?php echo number_format((float)$total_pricezz, 2, '.', '');?></td>
									</tr>
								</tbody>
							
							</table>
							<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
								<tr>
									<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
										<multiline>
											If this was not you, then please ignore and delete this email.
										</multiline>
									</td>
								</tr>
										
									<tr>
									<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
										&nbsp;
									</td>
								</tr>
								<tr>
									<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
										<multiline>
											Kind regards,<br/>
											ProtectBox
										</multiline>
									</td>
								</tr>
								<tr>
									<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
										&nbsp;
									</td>
								</tr>
									
								<tr>
									<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
										<multiline>
											 This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com the telephone number(s) or chat on our website.
										</multiline>
									</td>
								</tr>
								<tr>
									<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
										&nbsp;
									</td>
								</tr>
							</table>
							<!--Copyright Part Start-->

							<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
								<tr>
									<td valign="top" align="center">
										<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
											<tr>
												<td valign="middle" align="center">
													<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																&nbsp;
															</td>
														</tr>
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
							<!--Copyright Part End-->
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->

  </body>
</html>
