<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sales | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-rating-input.min.js"></script>
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
        width:40%;
        margin: 0 15px 30px 0;
      }
      .starrr { color: #ee8b2d;}
	.read_only { color: #ee8b2d !important;}
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
          Sales
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
      	<?php
			$current_time = time();
			//echo $current_time;
			
			if(!empty($subscribed_supplier) && $current_time < $subscribed_supplier->subscription_end_date){
		?>
      	<div class="row">
		<div class="col-md-12">
		  <div class="tab-content rounded_div">
			<div class="tab-pane active" id="home">
				<div style="" class="account_info">
					<div class="row">
						<div class="col-md-12">
							<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>For GBP5 per month (+ VAT, if applicable) you can have continuous access to the dashboard with information on all of your sales.</p>
						</div>
					</div>
				</div>
			</div>
		  </div>
		  <div class="tab-content rounded_div" style="margin-top:21px;">
			<div class="tab-pane active" id="home">
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-cw-1"></i></strong>CHOOSE SUBSCRIPTION OPTION
					</h3>
				  </div>
		
				  <div class="step text-center" style="margin-top:50px;">
					   <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group text-center">
								<div id="paypal-button-container-subscribe"></div>						
							</div>
						  </div>
						 
						  <div class="col-md-2 col-sm-2">
							<div class="form-group">
								  <p style="font-size:30px;"> OR </p>
							</div>
						  </div>

						   <div class="col-md-5 col-sm-5">
							<div class="form-group text-center">
								<form action="<?php echo base_url('stripe_payment_success/supplier_stripe_subscription_success');?>" method="POST">
								  <script
								    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								    data-key="pk_test_n7WrQXu5AFq89DrbDVMlvUuE"
								    data-amount="500"
								    data-name="ProtectBox Ltd"
								    data-description="Dashboard Monthly Subscription Plan"
								    data-image="https://staging.protectbox.com/images/favicon.png"
								    data-locale="auto"
								    data-currency="gbp">
								  </script>
								</form>	
							</div>
						  </div>
					   </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		}else{
	?>
        <div class="row">
			<div class="col-md-12">
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
					<div class="tab-pane active" id="home">
						<div style="" class="account_info">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>For GBP5 per month (+ VAT, if applicable) you can have continuous access to the below dashboard of information on all of your sales.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
				<div class=" table-responsive">
					<div class="col-md-12">
						<div class="row" >
							
							<?php
							$i = 0;
							foreach($unique_mycat As $amarcat){
							?>
							<div class="col-md-4" style="margin-top:10px;">
								<div id='<?php echo $i;?>'></div>
							</div>
							<?php
								$i++;
							}
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div id='graph_solution' class="text-center"></div>
					</div>
				</div>
			</div>
			<div class="tab-content rounded_div" style="min-height:275px;">
			  <h3>All Sales</h3>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Order&nbsp;Number</th>
							<th width="15%">Category</th>
							<th width="30%">Product</th>
							<th width="15%">Total&nbsp;Price</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">View&nbsp;Invoice</th>
							<th width="15%">View&nbsp;Details</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						if(count($order_data) > 0)
						{
						//print_r($order_data)
						$i = 1;
						foreach($order_data as $fetch_order){
						$supplier_service_id = explode(",",$fetch_order->supplier_service_id);
						$supplier_id = explode(",",$fetch_order->supplier_id);
						?>
						  <tr>
							<td><?php echo $i;?></td>
							<td>
							<?php
								$category_name = "";
								$service_name = "";
								$service_price = array();
								foreach($supplier_id as $key => $supp_id)
								{
									if($supp_id == $this->session->userdata['logged_in']['user_id']){
										$get_serv_id = $supplier_service_id[$key];
										$get_category_name = $this->sales_m->fetch_service_name($get_serv_id);
										$category_name .= $get_category_name->product_category;
										$category_name .= ",";

										$service_name .= $get_category_name->service_name;
										$service_name .= ",";

										$service_price[] = $get_category_name->price_detail;
										
										$fetch_currency = $this->sales_m->get_symbol($get_category_name->currency);
										$curr = $fetch_currency->symbol;
										
									}
								}
								echo rtrim($category_name,",");
							?>
							</td>
							<td>
							<?php
								echo rtrim($service_name,",");
							?>
							</td>
							<td>
							<?php
								echo $curr;
								echo "&nbsp;";
								echo array_sum($service_price);
								echo "&nbsp;";
								
							?>
							</td>
							<td><?php echo (($fetch_order->payment_method == 'Stripe')?'Card': $fetch_order->payment_method);?></td>
							<td>
								<?php 
									$order_status = explode(",",$fetch_order->order_status);
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
							<td><a href="<?php echo base_url('invoice/')?><?php echo $fetch_order->orders_id?>" class="btn btn-success" >Invoice</a></td>
							<td><a href="<?php echo base_url('sales/sales_details/')?><?php echo $fetch_order->orders_id?>" class="btn btn-success" >View Details</a></td>
						  </tr>
						<?php
						$i++;

						}
						}else{
						?>
						<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>No sales yet</b></td></tr>
						<?php
							}
						?>
						</tbody>
					  </table>
				  </div>
				</div>

				<div class="tab-content rounded_div" style="min-height:150px;">
					<h3>News</h3>
					<div class=" table-responsive">
						<div align="center" style="font-size:20px;color:red;font-weight:bold;">No news yet</div>
					</div>
				</div>

				<div class="tab-content rounded_div" style="min-height:150px;">
					<h3>Payments</h3>
					<div class=" table-responsive">
				  	<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Subscription&nbsp;ID</th>
							<th width="15%">Total Price</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Subscription&nbsp;Status</th>
							<th width="15%">Subscription Start Date</th>
							<th width="15%">Subscription End Date</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						if(sizeof($subscription_data) > 0){
							foreach($subscription_data as $fetch_subscription){
						?>
							  <tr>
								<td>#<?php echo $fetch_subscription->subscription_id;?></td>
								<td><?php echo $fetch_subscription->total_amount;?></td>
								<td><?php echo $fetch_subscription->payment_processor;?></td>
								<td><?php
								 $subscription_end_date = $fetch_subscription->subscription_end_date;
								 $current_date = time();
								 if($current_date < $subscription_end_date){
								 	echo "Active";
								 }else{
								 	echo "Expired";
								 }
								 ?></td>
								<td><?php echo date('d/m/Y',$fetch_subscription->date);?></td>
								<td><?php echo date('d/m/Y',$fetch_subscription->subscription_end_date);?></td>
							  </tr>
						<?php
							}
						}else{
						?>
						<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>No payments yet</b></td></tr>
						<?php
							}
						?>
						</tbody>
					  </table>
				  </div>
				</div>

				<div class="tab-content rounded_div" style="min-height:150px;">
					<h3>Feedback</h3>
					<div class=" table-responsive">
				  	<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="15%">Customer&nbsp;Name</th>
							<th width="15%">Product</th>
							<th width="15%">Rating</th>
							<th width="15%">Review</th>
							<th width="15%">Date</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						if(sizeof($ratings_data) > 0){
							foreach($ratings_data as $fetch_reviews){
						?>
							  <tr>
								<td><?php
								 	$cu_id = $this->sales_m->fetch_cu_info($fetch_reviews->sme_id);
								 	echo $cu_id->firstname;
								 	echo " ";
								 	echo $cu_id->lastname;
								 ?></td>
								<td>
								<?php
								$get_service_name = $this->sales_m->fetch_each_service_name($fetch_reviews->service_id);
								echo $get_service_name->service_name;								
								?>
								</td>
								<td>
									<input type="number"  id="rating-readonly" class="rating read_only" data-clearable="remove" value="<?php echo $fetch_reviews->rating;?>" data-readonly/>
								</td>
								<td><?php echo $fetch_reviews->review;?></td>
								<td><?php echo date('d/m/Y',$fetch_reviews->orders_date);?></td>
							  </tr>
						<?php
							}
						}else{
						?>
						<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>No payments yet</b></td></tr>
						<?php
							}
						?>
						</tbody>
					  </table>
				  </div>
				</div>
				

			  </div><!-- End col-md-12-->
		  </div>
        <!-- End row -->
		<form method="POST" name="sales_information">
			<div class="row">
			  <div class="col-md-12 col-sm-12">
				<div class="form-group">
				  <div class="checkbox">	
					<label style="font-weight:bold;">
					  <input  type="checkbox" name="check_payment" value="1"> <span style="font-size:18px;color:#ec8b0d;">Yes, I have completed payment setup.</span> If you haven't, <a href="<?php echo base_url('payments');?>" target="_blank" style="color:#83c627">Click here</a> to setup.
					  <span class="checkmark"></span>
					</label>
				  </div>
				 </div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-md-12 col-sm-12">
				<div class="form-group">
				  <div class="checkbox">	
					<label style="font-weight:bold;">
					  <input  type="checkbox" name="terms_condition" value="1"> I acknowledge the <a href="<?php echo base_url('terms')?>" target="_blank" style="color:#83c627">Terms and Conditions</a>.
					  <span class="checkmark"></span>
					</label>
				  </div>
				 </div>
			  </div>
			</div>
		  
	  </form>
	  <div class="row">
		<div class="col-md-12">
		  <div class="tab-content rounded_div" style="margin-top:21px;">
			<div class="tab-pane active" id="home">
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-block"></i></strong>Dashboard Unsubscription
					</h3>
				  </div>
		
				  	<div class="step" style="margin-top:50px;">
					   <div class="row">
						   <div class="col-md-12 col-sm-12">
							<div class="form-group">
								<p>Click the unsubscribe button to stop the dashboard subscription.</p>
								<form action="<?php echo base_url('sales/stripe_unsubscribe')?>" method="POST">
								<input type="hidden" value="<?php echo ((!empty($subscribed_supplier))? $subscribed_supplier->subscription_id:'') ;?>" name="subscriber_id">
								<button type="submit" class="btn btn-success">Unsubscribe</button>		
							</div>
						  </div>
					   </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  <?php
			}
	  ?>
	
</div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
   <div class="modal fade" id="credit_details" role="dialog" >
    <div class="modal-dialog">
      <form>
      <div class="modal-content" style="width:300px;left:25%;top:50%;margin-bottom:42px;margin-top: 140px;">
        <div class="modal-header" style="text-align:center;background-color:#e8e9eb">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img class="Header-logoImageCatchError" src="http://localhost/pb-clickrstop/dev/images/logo.png" style="border-radius:50px;margin-top:-40px;margin-bottom:20px;height:40px;">
          <h4 class="modal-title">ProtectBox Subscription</h4>
        </div>
        <div class="modal-body" style="background-color:#f5f5f7;">

          <div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
					  <div class="input-group" id="card-number-field">
					    <div class="input-group-addon"><span class="icon-credit-card-2"></span></div>
					    <input class="form-control" name="email" type="text" placeholder="Card Number" id="cardNumber"/>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
					  <div class="input-group" id="expiration-date">
					    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
					    <input class="form-control" name="email" type="text" placeholder="Expiry Date" id="expiration-date"/>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
					  <div class="input-group">
					    <div class="input-group-addon"><span class="icon-lock-2"></span></div>
					    <input class="form-control" name="email" type="text" placeholder="CVV2" id="cvv"/>
					  </div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
					  <div class="input-group">
					    <div class="input-group-addon"><span class="icon-user-male"></span></div>
					    <input class="form-control" name="email" type="text" placeholder="Cardholder's Name" id="owner"/>
					  </div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="form-group" id="credit_cards">
                        <img src="<?php echo base_url();?>images/card_types/visa.jpg" id="visa">
                        <img src="<?php echo base_url();?>images/card_types/mastercard.jpg" id="mastercard">
                        <img src="<?php echo base_url();?>images/card_types/amex.jpg" id="amex">
                    </div>
                </div>
			</div>
		  </div>
        </div>
        <div class="modal-footer" style="background-color:#f5f5f7;text-align:center">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Pay GBP 5.00  monthly</button>
        </div>
      </div>
    </form>
    </div>
  </div>

	<script>
	$(function() {
	  $("form[name='sales_information']").validate({
		rules: {
		  check_payment: "required",
		  terms_condition: "required",
		},
		messages: {
		  check_payment: "This field is required",
		  terms_condition: "This field is required",

		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production
	style: {
            label: 'checkout',
            size:  'responsive',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
        },
        client: {
            sandbox:    'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
            production: 'xxxxxxxxxx'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
            // Make a call to the REST API to set up the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                           amount: { total: '5', currency: '<?php echo $currency;?>' }      
                        }
                ],

                
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST API to execute the payment
            return actions.payment.execute().then(function() {
                // window.alert('Payment Complete!');
				var pb_price = '5';
				
				
			 /*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url("sales/supplier_subscription_paypal");?>',
		        data: {
						'subscription_price': pb_price
					  },
		        type: "post",
		        success: function(response){
					window.location.href = '<?php echo base_url();?>paypal_payment_success/'+response+'';
		        }
		      });
    		 /* ajax code ends*/
            }
        );
    },

        onCancel: function(data, actions) {
            window.location.href = '<?php echo base_url();?>payment_error';
        }

    }, '#paypal-button-container-subscribe');
</script>


	<script src= "<?php echo base_url();?>js/zingchart.min.js"></script>
	<?php
		$i = 0;
		foreach($unique_mycat As $key=>$amarcat){
	?>
	  <script>
		var myConfig = {
		backgroundColor:'#FBFCFE',
			type: "ring",
			title: {
			  text: "<?php echo $amarcat;?>",
			  fontFamily: 'Lato',
			  fontSize: 14,
			  // border: "1px solid black",
			  fontColor : "#1E5D9E",
			},
		
			plotarea: {
			  backgroundColor: 'transparent',
			  borderWidth: 0,
			  borderRadius: "0 0 0 10",
			  margin: "70 0 10 0"
			},
			legend : {
			toggleAction:'remove',
			backgroundColor:'#FBFCFE',
			borderWidth:0,
			adjustLayout:true,
			align:'center',
			verticalAlign:'bottom',
			marker: {
				type:'circle',
				cursor:'pointer',
				borderWidth:0,
				size:5
			},
			item: {
				fontColor: "#777",
				cursor:'pointer',
				offsetX:-6,
				fontSize:12
			},
			mediaRules:[
				{
					maxWidth:500,
					visible:false
				}
			]
			},
			scaleR:{
			  refAngle:270
			},
			<?php
				if($cat_from_orders[$amarcat] < $cat_from_services[$amarcat]){
					$sold = (($cat_from_orders[$amarcat]/$cat_from_services[$amarcat])*100);
			?>
			series : [
				{
				  text: "Sold",
					values : [<?php echo $sold;?>],
					lineColor: "#00BAF2",
					backgroundColor: "#00BAF2",
					lineWidth: 1,
					marker: {
					  backgroundColor: '#00BAF2'
					}
				},
				{
				    text: "Total",
					values : [100],
					lineColor: "#E80C60",
					backgroundColor: "#c1bfc1",
					lineWidth: 1,
					marker: {
					  backgroundColor: '#E80C60'
					}
				},
			]
			<?php
				}else{
					$sold = (($cat_from_services[$amarcat]/$cat_from_orders[$amarcat])*100);
			?>
			series : [
				{
				  text: "Sold",
					values : [<?php echo $sold;?>],
					lineColor: "#00BAF2",
					backgroundColor: "#00BAF2",
					lineWidth: 1,
					marker: {
					  backgroundColor: '#00BAF2'
					}
				},
				{
				    text: "Unsold",
					values : [100],
					lineColor: "#E80C60",
					backgroundColor: "#c1bfc1",
					lineWidth: 1,
					marker: {
					  backgroundColor: '#E80C60'
					}
				},
			]
			<?php
				}
			?>
		};
		 
		zingchart.render({ 
			id : '<?php echo $i;?>', 
		  data: {
			graphset: [myConfig]
		  },
			height: '250', 
			width: '100%'
		});
   </script>
   <?php
   		$i++;
	}
	?>
   <!-- 1st circle progress ends --> 

	<script>
		zingchart.THEME="classic";
		var myConfig = {
			"graphset": [
				{
					"type": "hbar3d",
					"background-color": "#FFF",
					"stacked": true,
					"3d-aspect": {
						"true3d": false,
						"y-angle": 10,
						"depth": 15
					},
					
					"legend": {
						"layout": "float",
						"margin":"12% auto auto auto",
						"align":"center",
						"background-color": "none",
						"border-width": 0,
						"shadow": 0,
						"toggle-action": "remove",
						"marker": {
							"border-color": "#fff"
						},
						"item": {
							"font-color": "#000"
						}
					},
					"tooltip": {
						"text": "%t / %k = %v<br>%k Total = %total",
						"font-color": "#000",
						"border-width": "1px",
						"border-color": "#ffffff"
					},
					"plot": {
						"bar-width": 25,
						"alpha": 0.9
					},
					"plotarea": {
						"background-color": "#FFF",
						"margin": "25% 5% 20% 15%"
					},
					"scale-x": {
						"values": [
							"<?php
								foreach($all_country_names AS $each_country){
									echo $each_country;
								}	
							?>"				
						],
						"background-color": "#4F678E",
						"guide": {
							"line-color": "#fff"
						},
						"tick": {
							"line-color": "#6e82a1"
						},
						"item": {
							"font-color": "#000",
							"offset-x": "-5%"
						}
					},
					"scale-y": {
						"background-color": "#43577c",
						
						"guide": {
							"line-color": "#fff"
						},
						"tick": {
							"line-color": "#6e82a1"
						},
						"item": {
							"font-color": "#000"
						}
					},
					
					"series": [
					<?php
						$i = 5;
						foreach($unique_mycat As $key=>$amarcat){
					?>
						{
							"values": [
								<?php echo $countrywise_categories[$amarcat];?>
							],
							<?php
								if($i == 1){
							?>
								"background-color": "#eea236",
							<?php
								}else if($i == 2){
							?>
								"background-color": "#4cae4c",
							<?php
								}else if($i == 3){
							?>
								"background-color": "#808080",	
							<?php								
								}
							?>
							"text": "<?php echo $amarcat;?>"
						},
						/*{
							"values": [
								11
							],
							"background-color": "#4cae4c",
							"text": "Antivirus"
						},
						{
							"values": [
								13
							],
							"background-color": "#808080",
							"text": "Business Continuity"
						},*/
					<?php
						$i++;
						}
					?>
					]					
				}
			]
		};
		 
		zingchart.render({ 
			id : 'graph_solution', 
			data : myConfig, 
			height: 400, 
			width: 800
		});
	</script>
	
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
