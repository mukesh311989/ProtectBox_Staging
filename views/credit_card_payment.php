<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Credit Card Details | ProtectBox</title>
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
		height:100px;
	}
	.other_title
	{
		background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
	}
	.transparent {
	    opacity: 0.2;
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
          Credit Card Details
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
			<!--  Tabs -->  
			<div class="tab-content rounded_div">
				  <form name="profile" action="<?php echo base_url("profile/update_data");?>" method="POST">
						<div class="col-md-12 text-center">
							<a href="javascript:void();" class="btn btn-success" data-toggle="modal" data-target="#credit_details"  style="text-align:center;">Credit Card</a>
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

   <div class="modal fade" id="credit_details" role="dialog" >
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <form id = "payment_form">
	      <div class="modal-content" style="width:300px;left:25%;top:50%;margin-bottom:42px;">
	        <div class="modal-header" style="text-align:center;background-color:#e8e9eb">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <img class="Header-logoImageCatchError" src="https://staging.protectbox.com/images/favicon.png" style="border-radius:100%;margin-top:-40px;margin-bottom:20px;">
	          <h4 class="modal-title">Protectbox Payment</h4>
	        </div>
	        <div class="modal-body" style="background-color:#f5f5f7;">

	          <div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
						  <div class="input-group" id="card-number-field">
						    <div class="input-group-addon"><span class="icon-credit-card-2"></span></div>
						    <input class="form-control card_number" name="card_number" type="text" placeholder="Card Number" id="cardNumber"/>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <div class="input-group" id="expiration-date">
						    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
						    <input class="form-control expiry_date" name="expiry_date" type="text" placeholder="Expiry Date" id="expiration-date"/>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <div class="input-group">
						    <div class="input-group-addon"><span class="icon-lock-2"></span></div>
						    <input class="form-control cvv_number" name="cvv_number" type="text" placeholder="CVV2" id="cvv"/>
						  </div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
						  <div class="input-group">
						    <div class="input-group-addon"><span class="icon-user-male"></span></div>
						    <input class="form-control cardholder_name" name="cardholder_name" type="text" placeholder="Cardholder's Name" id="owner"/>
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
	          <button type="button" class="btn btn-primary" data-dismiss="modal">Pay $ AMOUNT</button>
	        </div>
	      </div>
	    </form>
	    </div>
	  </div>

	   <script src="<?php echo base_url();?>js/jquery.payform.min.js"></script>
   	   <script src="<?php echo base_url();?>js/script.js"></script>

   	   <!-- Load the required components. -->
		<script src="https://js.braintreegateway.com/web/3.25.0/js/client.min.js"></script>
		<script src="https://js.braintreegateway.com/web/3.25.0/js/paypal-checkout.min.js"></script>

		<script>
		paypal.Button.render({
		  braintree: braintree,
		  // Other configuration
		}, '#id-of-element-where-paypal-button-will-render');
		</script>

		<script type="text/javascript">
				var createClient = require('braintree-web/client').create;

				var card_number = $('.card_number').val(); 
				var expiry_date = $('.expiry_date').val(); 
				var cvv = $('.cvv_number').val(); 
				var cardholder_name = $('.cardholder_name').val();
				alert(card_number);
				exit;

			createClient({
			  authorization: CLIENT_AUTHORIZATION
			}, function (createErr, clientInstance) {
			  var form = document.getElementById('my-form-id');
			  var data = {
			    creditCard: {
			      number: form['cc-number'].value,
			      cvv: form['cc-cvv'].value,
			      expirationDate: form['cc-expiration-date'].value,
			      billingAddress: {
			        postalCode: form['cc-postal-code'].value
			      },
			      options: {
			        validate: false
			      }
			    }
			  };

			  // Warning: For a merchant to be eligible for the easiest level of PCI compliance (SAQ A),
			  // payment fields cannot be hosted on your checkout page.
			  // For an alternative to the following, use Hosted Fields.
			  clientInstance.request({
			    endpoint: 'payment_methods/credit_cards',
			    method: 'post',
			    data: data
			  }, function (requestErr, response) {
			    // More detailed example of handling API errors: https://codepen.io/braintree/pen/MbwjdM
			    if (requestErr) { throw new Error(requestErr); }

			    console.log('Got nonce:', response.creditCards[0].nonce);
			  });
			});
		
		</script>>
  </body>
</html>
