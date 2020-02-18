 <div class="container-fluid">

                <!-- Page Heading -->
	
				<?php echo $message;?>	
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
					<form action="<?php echo base_url('stripeintegration/submtpay');?>" method="POST">
					  <script
						src="https://checkout.stripe.com/checkout.js" class="stripe-button"
						data-key="pk_test_VYA5gUyuOlx1psPVIuBwLvN1"
						data-amount="99999"
						data-name="CLICKRSTOP SOFTWARE SOLUTIONS PRIVATE LIMITED"
						data-description="Widget"
						data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
						data-locale="auto"
						currency="GBP">
					  </script>
					</form>
					</div>
				</div>

</div>
<!-- /.container-fluid -->