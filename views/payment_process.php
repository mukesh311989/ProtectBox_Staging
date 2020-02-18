<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment Process | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <!-- BUTTON -->
     <link href="<?php echo base_url();?>css/rangeslider.css" rel="stylesheet">
	  <!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
	 <script src="https://www.paypal.com/sdk/js?client-id=AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0&currency=<?php echo $currencyCode;?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="<?php echo base_url();?>css/stripe.css" rel="stylesheet">
	<style>
		.main_image
      {
        height:100px;
        margin: 0 15px 30px 0;
      }
     
           
            body #paypal-button-container {
                min-width: 240px !important;
                max-width: 230px !important;
                font-size: 10px !important;
            }
            .paypal-button.paypal-button-layout-vertical {
                margin-bottom: 11px;
                width: 239px;
                height: 40px;
                border-radius: 18px;
            }
           body  body #paypal-button-container .paypal-button.paypal-button-number-1.paypal-button-layout-vertical.paypal-button-shape-pill.paypal-button-number-multiple.paypal-button-env-sandbox.paypal-button-color-black.paypal-logo-color-white {
                display: none !important;
            }
     
	</style>
  </head>
  <body >
    <div id="load"></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;z-index:1;">
          Confirm Your Order
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="alert alert-success cpn_suc" style="display:none" > <strong class="cpn_success"> </strong> </div>
			<div class="col-md-12 text-center">
				<div class="row">
				  <div class="col-md-12 col-sm-5">
					<div class="form-group">
						<form name="copnsss" action="<?php echo base_url();?>payment_process/addcoupn" method="POST">
							<div class="col-md-6">
								<?php
								if($this->session->flashdata('coupon_success')){
								?>
									<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('coupon_success');?></strong> </div>
								<?php
									}
									if($this->session->flashdata('coupon_invalid')){
								?>
									<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('coupon_invalid');?></strong> </div>
								<?php
									}
									
								?>
							</div>
	
							<div class="details" style="text-align:right;">
							  Do you have coupon code? <input type="text" value="<?php echo((isset($this->session->userdata['coupon']) && $this->session->userdata['coupon'] != NULL)? $this->session->userdata['coupon']['coupon_code']:'');?>" name="coupon_code" class="clss_cpn_code" placeholder="Enter your coupon code" style="padding:5px;background:#ccff99;border:1px solid #CCC;">
							  <input type="hidden" name="bundle_id" value="<?php echo $this->uri->segment(2);?>">
							  <input type="submit" value="Apply" name="sub" style="padding:6px;" >
							  
							</div>
						</form>
					</div>
				  </div>
				 
			   </div>
			</div>

			<div class="col-md-12">
			<!--<div class="col-md-12" style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;margin-bottom:20px;font-weight:bold;font-size:21px;text-align:center;" href="javascript:void(0);"><strong>Confirm your order</strong></div>-->
				<!--  Tabs -->  
            <?php 
            	$price_array_bundle = array();
				$commission_price_bundle = array();
				$total_payable_bundle_cost = array(); 

            ?>
           <div class="col-md-12 rounded_div space"  id="hide_pay_data">
			
              <div class="col-md-8">
			 	<?php 
			 		foreach($bundle_decode AS $each_bundle_decode){ 
			 	?>
                <div class="col-md-6 what">
					 <div class="c_names">
							<?php echo $each_bundle_decode['product_category'];?>
					 </div>
				<?php
					  foreach($each_bundle_decode['service_id'] as $each_service_id){
					  	$bundle_array = $this->payment_process_m->fetch_results($each_service_id,$currencyCode);
					  	
					  	foreach($bundle_array as $logos){
						/*if($logos->price_detail <= $mean_price){*/
							$service_id[] = $logos->supplier_service_id;
							$total_service = implode(",",$service_id);
							$service_each_price[] = $logos->price_detail;
							$each_service_price = implode(",",$service_each_price);
							$service_each_payment_option[] = $logos->payment_option;
							$each_service_payment_option = implode(",",$service_each_payment_option);
							$service_each_commission[] = $logos->commission_detail;
							$each_service_commission = implode(",",$service_each_commission);
							$service_each_currency[] = $logos->currency;
							$each_service_currency = implode(",",$service_each_currency);
							$supplier_each_id[] = $logos->user_id;
							$each_supplier_id = implode(",",$supplier_each_id);
							$each_currency = $logos->currency;
						

							if($logos->payment_option == "Monthly"){
							/*$price_array_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 12);
							$commission_price_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 12)*($logos->commission_detail/100);*/
							$price_array_bundle[] = ($logos->price_detail * 12);
							$commission_price_bundle[] = ($logos->price_detail * 12)*($logos->commission_detail/100);
						  }
						  else if($logos->payment_option == "Yearly"){
							/*$price_array_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 1);
							$commission_price_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 1)*($logos->commission_detail/100);*/
							$price_array_bundle[] = ($logos->price_detail * 1);
							$commission_price_bundle[] = ($logos->price_detail * 1)*($logos->commission_detail/100);
						  }
						  else if($logos->payment_option == "Quarterly"){
							/*$price_array_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 4);
							$commission_price_bundle[] = (str_replace( [','], [''], $logos->price_detail ) * 4)*($logos->commission_detail/100);*/
							$price_array_bundle[] = ($logos->price_detail * 4);
							$commission_price_bundle[] = ($logos->price_detail * 4)*($logos->commission_detail/100);
						  }
						
							
				  ?>

					 <div class="col-md-6" style="padding:6px;">
					 <a href="javascript:void(0);" onClick="openBtn(<?php echo $logos->supplier_service_id;?>)">

						<?php
							$this->load->model('results_m');
							if($logos->logo != ''){
								$pro_logo = base_url('uploads/'.$logos->logo);	

							}else if($logos->openrange != ''){

								if($logos->openrange == 'scraped'){
									$fetch_image = $this->results_m->fetch_scrape_image($logos->td_part);
									$decode_images = json_decode($fetch_image->product_image,TRUE);
									$fetch_last_url = count($decode_images) - 2;
									$pro_logo = $decode_images[$fetch_last_url];

								}else if($logos->openrange == 'mapped'){
									$fetch_image = $this->results_m->fetch_openrange_image($logos->td_part);
									$pro_logo = $fetch_image->HighPic;
								}

							}else{
								$pro_logo = '';
							}
							if($pro_logo != ''){
						?>
							<img src="<?php echo $pro_logo;?>" class="main_image">
						
							<?php
								}else{	
							?>
							<div style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;">
								 <?php
									$pro_details = $logos->product_detail;
									$substr_details = substr($pro_details,0,30);
									echo $substr_details;
									echo "...";
								 ?>
							</div>
							<?php
							}
							?>
					</a>
					
					<script>
						function openBtn(e){
						/*ajax code start*/
						 $.ajax({
							url: '<?php echo base_url();?>result_modal/open_modal',
							data: {'service_id': e}, // change this to send js object
							type: "post",
							success: function(response){
							   //document.write(data); just do not use document.write
								$(response).modal({show:true});
							}
						  });
						 /* ajax code ends*/
						}
					 </script>
					 <!-- MODAL PART -->
					 </div>
					  <?php
						/*}*/
						}
					  	}
					  	$total_price = array_sum($price_array_bundle);
						$total_commision_price = array_sum($commission_price_bundle);
						$total_payable_bundle_cost = ($total_commision_price + $total_price);
						$round_off_price = round($total_payable_bundle_cost,2);
					  ?>
					 
				</div>
				<?php
					}
				
				?>
            </div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<?php
								
								if(isset($this->session->userdata['coupon']) && $this->session->userdata['coupon'] != NULL){
									$coupn_valz = $this->session->userdata['coupon'];
								    $coupn_type = $coupn_valz['discount_type'];
								    $coupn_discount_value = $coupn_valz['discount_value'];
									if($coupn_type == "percentage"){
										$dis_amt = $round_off_price*($coupn_discount_value/100);
									}else{
										$dis_amt = $coupn_discount_value;
									}
									$prc = $round_off_price-$dis_amt;
									$final_price = round($prc, 2);
								}else{
									$final_price = $round_off_price;
								}

								
							?>

							<input type="hidden" value="<?php echo $round_off_price;?>" class="rnd_prc">
							<div style="text-align:center;font-size:1.6em !important" class="price">
							<span id="without_sub">
								<?php
									if(isset($this->session->userdata['coupon']) && $this->session->userdata['coupon'] != NULL){
									echo "<strike>";
									echo $currencySymbol;?>&nbsp;<?php echo $round_off_price;
									echo "/year";
									echo "</strike>";
								}
								?>
								<?php
									if(isset($this->session->userdata['coupon']) && $this->session->userdata['coupon'] != NULL){
									$final_price = $final_price;
								?>
									

								<?php
								}
									if(isset($this->session->userdata['subscription']) && $this->session->userdata['subscription'] != NULL){
												$sub_value="10";
												$final_price = $final_price+$sub_value;
											}
										else
											{
												$final_price = $final_price;
											}
								?>
									<?php echo $currencySymbol;?>&nbsp;<?php echo $final_price;?>/year
								</span>
								<?php
									if(isset($this->session->userdata['coupon']) && $this->session->userdata['coupon'] != NULL){
										if($coupn_type == "percentage"){
											echo '<div class="alert alert-success" style="margin-bottom:0 !important;"> <strong>';
											echo "Discount: ".$coupn_discount_value."% off";
											echo '</strong></div>';
										}else{
											echo '<div class="alert alert-success" style="margin-bottom:0 !important;"> <strong>';
											echo "Discount: ".$coupn_discount_value." ".$currencySymbol." off";
											echo '</strong></div>';
										}
									}
								?>

							</div>
					
							<div >
							</div>
							<div class="details " style="text-align:center;">
							  <a href="<?php echo base_url();?>terms" target="_blank" class="btn" style="background:#ccc;color:#000;padding:10px;width:100%;">Terms & Conditions</a>
							</div>

							<div class="col-md-12 details_sub" >
							   <div class="checkbox">
								  <label>
								  		<form method="post" action="<?php echo base_url('payment_process/sme_subscribe');?>">
								  		<input type="hidden" id="amount" value="<?php echo $final_price;?>">
										<input type="hidden" name="bundle_id" value="<?php echo $this->uri->segment(2);?>">
										<input type="hidden" name>
										<input type="checkbox" value="yes" <?php echo ((isset($this->session->userdata['subscription']) && $this->session->userdata['subscription'] != NULL)?'checked':'');?>  name="subscribes" >
										<span style="font-size:14px;"><b>Subscribe for &#163;10 per month for access to your answers & our tool!</b></span>
								  </label>
								</div>
								<!-- <span style="padding:10px;">Subscribe for &#163;10 per month for access to your answers & our tool!</span> -->
							</div>
							
						</div>
					</div>
				 </div>
			  
				

				<div class="col-md-12 text-center" style="margin-top:10px;">
					<div class="row">
				
					    <div class="col-md-3 col-sm-3">
							<div class="form-group">
							<a  class="btn card_details" data-toggle="modal" data-target="#myModal" role="button" style="">Pay With Card</a>
								<!--<a href="javascript:void(0);" class="btn btn-success"  style="text-align:center;width:100%;"><?php echo $currencyCode;?> <?php echo $total_payable_bundle_cost;?> BUY  NOW By PayPal!</a>-->
							</div>
					  </div>
				
					  <div class="col-md-3 col-sm-3">
						<!-- <div class="form-group">
							  <p style="font-size:30px;"> OR </p>

						</div> -->
						<?php
							$this->load->model('payment_process_m');
							$user_id = $this->session->userdata['logged_in']['user_id'];
							$get_user_info = $this->payment_process_m->user_info($user_id);
						?>
						<form id="credit_1" >
							<input type="hidden" id="total_price" value="<?php echo $final_price;?>">
							<input type="hidden" id="first_name" value="<?php echo $get_user_info->firstname;?>">
							<input type="hidden" id="last_name" value="<?php echo $get_user_info->lastname;?>">
							<input type="hidden" id="company_name" value="<?php echo $get_user_info->company_name;?>">
							<input type="hidden" id="phone_no" value="<?php echo $get_user_info->phone;?>">
							<input type="hidden" id="email" value="<?php echo $get_user_info->email;?>">
							<input type="hidden" id="address" value="<?php echo $get_user_info->address;?>">
							<div id="example-widget-container"></div>
						</form>
					</div>
					<div class="col-md-5 col-sm-5" style="padding:0px !important;">
						<div class="form-group">
							<div id="paypal-button-container" ></div>
							<!--<a href="javascript:void(0);" class="btn btn-success"  style="text-align:center;width:100%;"><?php echo $currencyCode;?> <?php echo $total_payable_bundle_cost;?> BUY  NOW By Credit Card!</a>-->
						</div>
					  </div>
				   </div>
              </div>
			</div>

			<div class="col-md-12 rounded_div space" id="please_wait" style="height:400px;display:none;text-align:center;">
			  <img src="<?php echo base_url();?>images/favicon.gif" style="height:64px;margin-top:100px;"><br>
			  <h3>Please wait while we process your order...</h3>
			</div>

			<ul class="nav "></ul> 
		  </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
  <style>
p{
	margin:0 0 13px;
}
</style>

 <!-- 2nd footer -->
	 <div class="container" style="background:#e6e7e9;width:100%;border-top:2px solid #ccc;height:auto;">
		  <div class="container">
			<div class="row ">
			  <div class="col-md-4 col-sm-12">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">Contact Information</h3>
				<p style="font-size:1.1em;">
					<p style="color:#010101;">Email as shown below or use the blue chat icon in the bottom right, our customer service team is available Mon-Fri 9am-9pm (UK time)</p>
					<!--<i class="icon-phone-outline" aria-hidden="true" style="color:#000;"></i> <a href="tel:+442080892979" style="color:#010101;">+44 208 089 2979 (Our customer service team is available Mon-Fri 9am-9pm (UK time))</a></br>-->
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:team@protectbox.com" style="color:#010101;">team@protectbox.com (Businesses) </a></br>
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:supplier@protectbox.com" style="color:#010101;">supplier@protectbox.com (Suppliers)</a></br>
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:kiran@protectbox.com" style="color:#010101;">kiran@protectbox.com (Investors & Media) </a>
				</p>
				
				<p style="font-size:1.1em;">
					<a href="https://www.facebook.com/protectbox/" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="fa icon-facebook"></i></a>
					<a href="https://www.linkedin.com/company/protectbox-ltd" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="fa icon-linkedin"></i></a>
					<a href="https://twitter.com/ProtectBoxLtd/" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="icon-twitter"></i></a>
					<a href="mailto:team@protectbox.com" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="icon-mail"></i></a>
				
				  	  <p style="font-size:1.1em;">
					<a href="https://itunes.apple.com/us/app/apple-store/id375380948?mt=8" target="_blank">
					  <img src="<?php echo base_url();?>images/apple_store.png" style="height:30px;">
					</a>

					<a href="https://play.google.com/store?hl=en" class="" style="margin-left:10px;" target="_blank">
					  <img src="<?php echo base_url();?>images/google-play.png" style="height:30px;">
					</a>
					<br>(Coming soon)
			  </p>
				<!--<p><img src="<?php echo base_url();?>images/britain_office.png" style="border:1px solid #CCC;height:70px;"></p>-->
			  </div>
			  <div class="col-md-4 col-sm-12">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">What are you looking for</h3>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('about');?>" style="color:#010101;" target="_blank">About</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('register');?>" style="color:#010101;">Register</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('login');?>" style="color:#010101;">Login</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('contact');?>" style="color:#010101;" target="_blank">Contact Us</a></p>
			  </div>

			  <div class="col-md-4 col-sm-12" id="contact_bg">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">Useful Links</h3>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('terms');?>" style="color:#010101;" target="_blank">Terms and Conditions</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('privacy');?>" style="color:#010101;" target="_blank">Privacy Policy</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('supplier_policy');?>" style="color:#010101;" target="_blank">Supplier Policy</a></p>
			  </div>
			</div>
			<!-- End row -->	
		  </div>

		  
	 </div>
	 	 <div class="container" style="background:#e6e7e9;width:100%;padding-bottom:20px;padding-top:20px;align:center;">
		  <div class="container">
			        <div class="row">
          <div class="col-md-1 col-sm-6 col-xs-6" style="text-align:center;">
            <div class="team_box" style="text-align:center;">
              <a href="javascript:void();"  style="text-align:center">
                <img src="<?php echo base_url();?>images/britain_office.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
              </a>
         
            </div>

            </div>
            <!--<div class="col-md-2 col-sm-12" >
              <div class="team_box" style="text-align:center;">
                <a href="#" data-toggle="modal" data-target="#team_modal_roshsaran">
                  <img src="<?php echo base_url();?>images/colorado_office.png" class="" style="display:block;text-align:center;width:100%;height:76px;">
                </a>
          
            </div>

            </div>-->
            <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
              <div class="team_box" style="text-align:center;">
                <a href="#" style="text-align:center;">
                  <img src="<?php echo base_url();?>images/mcafee.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                </a>
              </div>
              </div>
              <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                <div class="team_box" style="text-align:center;">
                  <a href="#" style="text-align:center;">
                    <img src="<?php echo base_url();?>images/SSLcertificate.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                  </a>
           
                </div>

                </div>
                <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                  <div class="team_box" style="text-align:center;">
                    <a href="#"  style="text-align:center;">
                      <img src="<?php echo base_url();?>images/aws1.png" class=""  style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                    </a>
                  
                   
                  </div>

                </div>
				<div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                  <div class="team_box" style="text-align:center;">
                    <a href="#"  style="text-align:center;">
                      <img src="<?php echo base_url();?>images/pci.png" class=""  style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                    </a>
                  
                   
                  </div>

                </div>
                <!--<div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_paulfinnigan2">
                      <img src="<?php echo base_url();?>images/team-6.png" class="" style="display:block;text-align:center;width:100%;height:76px;">
                    </a>
           
                  </div>

                  </div>-->
                </div>
			<!-- End row -->	
		  </div>

		  
	 </div>
	 <div class="modal fade" id="myModal" role="dialog" style="margin-top:90px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
		<!--<div class="col-md-12 ">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                 <?php if($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p><?php echo $this->session->flashdata('success'); ?></p>
                        </div>
                    <?php } ?>
     
                    <form role="form" action="<?php echo base_url('order_process');?>" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                                                    id="payment-form">
     
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
     
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
      
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
									<input type="hidden" name="total_price" value="<?php echo $final_price;?>">
									<input type="hidden" name="total_service" value="<?php echo $total_service;?>">
									<input type="hidden" name="service_each_price" value="<?php echo $each_service_price;?>">
									<input type="hidden" name="service_each_currency" value="<?php echo $each_service_currency;?>">
									<input type="hidden" name="each_service_payment_option" value="<?php echo $each_service_payment_option;?>">
									<input type="hidden" name="each_service_commission" value="<?php echo $each_service_commission;?>">
									<input type="hidden" name="supplier_id" value="<?php echo $each_supplier_id;?>">
									<input type="hidden" name="sup_price" value="<?php echo $total_price;?>">
									<input type="hidden" name="pb_price" value="<?php echo $total_commision_price;?>">
									<input type="hidden" name="bundle_payment_id" value="<?php echo $bundle_id;?>">
                            </div>
                        </div>
      
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
      
                    
      
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" id="payBtn">Pay Now (&#xa3;<?php echo $final_price;?>)</button>
                            </div>
                        </div>
                             
                    </form>
                </div>
            </div>        
        </div>-->


		<form role="form" action="<?php echo base_url('order_process');?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
	      <div class="modal-content" style="width:300px;left:25%;top:50%;margin-bottom:42px;">
	        <div class="modal-header" style="text-align:center;background-color:#e8e9eb">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <img class="Header-logoImageCatchError" src="https://staging.protectbox.com/images/favicon.png" style="border-radius:100%;margin-top:-40px;margin-bottom:20px;">
	          <h4 class="modal-title">ProtectBox Payment</h4>
	        </div>
	        <div class="modal-body" style="background-color:#f5f5f7;">

	          <div class="container-fluid">
				<div class="row">
				    
				    <div class="col-md-12 col-sm-12">
						<div class="form-group">
						  <div class="input-group" id="card-namer-field">
						    <div class="input-group-addon"><span class="icon-credit-card-2"></span></div>
						    <!-- <input class="form-control card_number" name="card_number" type="text" placeholder="Card Number" id="cardNumber"/> -->
							<input autocomplete='off' class='form-control card-name' name="card_name" placeholder="Card Name" type='text' id="cardName">
						  </div>
						</div>
					</div>
				
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
						  <div class="input-group" id="card-number-field">
						    <div class="input-group-addon"><span class="icon-credit-card-2"></span></div>
						    <!-- <input class="form-control card_number" name="card_number" type="text" placeholder="Card Number" id="cardNumber"/> -->
							<input autocomplete='off' class='form-control card-number' size='20' name="card_number" placeholder="Card Number" type='text' id="cardNumber">
						  </div>
						</div>
					</div>
				
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <div class="input-group" id="expiration-date">
						    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
						    <!-- <input class="form-control expiry_date" name="expiry_date" type="text" placeholder="Expiry Date" id="expiration-date"/> -->
							<input class='form-control card-expiry-month' placeholder='MM'  name="card_month"  size='2' type='text'>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
						  <div class="input-group" id="expiration-date">
						    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
						    <!-- <input class="form-control expiry_date" name="expiry_date" type="text" placeholder="Expiry Date" id="expiration-date"/> -->
							<input class='form-control card-expiry-year' placeholder='YYYY' name="card_year"  size='4' type='text'>
						  </div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="form-group">
						  <div class="input-group">
						    <div class="input-group-addon"><span class="icon-lock-2"></span></div>
						    <!-- <input class="form-control cvv_number" name="cvv_number" type="text" placeholder="CVV2" id="cvv"/> -->
							<input autocomplete='off' class='form-control card-cvc'  name="card_cvv"  placeholder='ex. 311' size='4' type='text' id="cvv">
								<input type="hidden" name="total_price" value="<?php echo $final_price;?>">
								<input type="hidden" name="total_service" value="<?php echo $total_service;?>">
								<input type="hidden" name="service_each_price" value="<?php echo $each_service_price;?>">
								<input type="hidden" name="each_service_currency" value="<?php echo $each_service_currency;?>">
								<input type="hidden" name="each_service_payment_option" value="<?php echo $each_service_payment_option;?>">
								<input type="hidden" name="each_service_commission" value="<?php echo $each_service_commission;?>">
								<input type="hidden" name="supplier_id" value="<?php echo $each_supplier_id;?>">
								<input type="hidden" name="sup_price" value="<?php echo $total_price;?>">
								<input type="hidden" name="pb_price" value="<?php echo $total_commision_price;?>">
								<input type="hidden" name="bundle_payment_id" value="<?php echo $bundle_id;?>">
								<input type="hidden" name="payment_mode" value="stripe">
								<input type="hidden" name="currency" value="<?php echo $each_currency;?>">
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
	           <button class="btn btn-primary btn-lg btn-block" id="payBtn">Pay Now (<?php echo $currencySymbol;?>&nbsp;<?php echo $final_price;?>)</button>
	        </div>
	      </div>
	    </form>

    </div>
      
    </div>
  </div>
	 <div id="copy" style="background:#85c62c;">
		<div class="container">
		  Copyright &copy; 2018 ProtectBox Ltd. Company number: NI643316 - VAT registration number: 297 5082 62- All rights reserved.
		</div>
	  </div>
 <!-- 2nd footer ends -->


<!--<div id="toTop"></div>-->

<!-- Common scripts -->

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.payform.min.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>js/script.js"></script>     
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
     
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
    
  });
      
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
			
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
<!--<script src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

<script src="<?php echo base_url();?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url();?>js/functions.js"></script>
<script src="<?php echo base_url();?>js/multiselect.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
//set your publishable key



$(document).ready(function() {
    //on form submit


	//callback to handle the response from stripe


	setTimeout(function() {
		$('.mylodr').hide();
		}, 1000);

	$('.tooltip-1')['tooltip']({
		html: true
	});
});
</script>


<script>
function myFunction() {
	if($( "#mobile_menuzz" ).hasClass( "show" )){
		$("#mobile_menuzz").removeClass( "show" );
		
	}else{
		$("#mobile_menuzz").addClass( "show" );
		$("#close_in").removeClass( "open_close" );
	}
}
</script>
<!-- LayerSlider script files -->
<script type="text/javascript">
	document.onreadystatechange = function () {
	  var state = document.readyState
	  if (state == 'complete') {
		  setTimeout(function(){
			  document.getElementById('interactive');
			 document.getElementById('load').style.visibility="hidden";
		  },1000);
	  }
	}
</script>

<!-- Start of HubSpot Embed Code --> 
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5307998.js"></script> 
<!-- End of HubSpot Embed Code -->
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	<script src="<?php echo base_url();?>js/rangeslider.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
    <!-- Specific scripts -->
	<script>

	   $('input[name="subscribes"]').click(function(){

            if($(this).prop("checked") == true){
				 this.form.submit();
				
            }
            else if($(this).prop("checked") == false){
				 this.form.submit();
            }

        });
    $(function() {

        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);

        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
			
        }

        $document.on('input', 'input[type="range"], ' + selector, function(e) {
            valueOutput(e.target);
        });

        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
                valueOutput(this.$element[0]);
            },

           
        });

    });


    </script>
  	<script>
		var price = $("#total_price").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var company_name = $("#company_name").val();
		var phone_no = $("#phone_no").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var credit_data = {
			'form_id':'credit_1',
			 'cash_price': price,
			 'invoice_number':'1234',
			 'order_id': '111',
			 'invoice_description': 'Purchase ProtectBox Package',
			 'forename':first_name,
			 'surname':last_name,
			 'company_name': company_name,
			 'mobile_phone_number':phone_no,
			 'email_address':email,
			 'dob':'',
			 'house_number':'',
			 'street':'',
			 'town':address,
			 'country':'United Kingdom',
			 'post_code':'EC2A4NE',
			 'callback_url':'https://www.staging.protectbox.com/payment_process/credit_response',
			 'secret_key':'0YMh2XxlFEkTfgZtk5-WLA',
			 'publish_key':'df3ee800567c32a3d579709598060f2a'
			 };
	</script>
	<script type="text/javascript" src="https://widget.creditdigital.co.uk/widget-external.js"></script>

   <script>
   /* paypal.Button.render({

        env: 'sandbox', // sandbox | production
	style: {
            label: 'checkout',
            size:  'small',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
        },
        client: {
            sandbox: 'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
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
                           amount: { total: '<?php echo $final_price;?>', currency: '<?php echo $currencyCode;?>' }      
                        }
                ],
                
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST API to execute the payment
            return actions.payment.execute().then(function() {
      			$('#load').show();
				var total_service = '<?php echo $total_service;?>';
				var service_each_price = '<?php echo $each_service_price?>';
				var service_each_currency = '<?php echo $each_service_currency?>';
				var each_service_payment_option = '<?php echo $each_service_payment_option;?>';
				var each_service_commission = '<?php echo $each_service_commission?>';
				var supplier_id = '<?php echo $each_supplier_id;?>';
				var sup_price = '<?php echo $total_price; ?>';
				var pb_price = '<?php echo $total_commision_price; ?>';
				var total_price = '<?php echo $final_price; ?>';
				var bundle_id = '<?php echo $bundle_id;?>';

				
    		 $.ajax({

				
		        url: '<?php echo base_url("order_process");?>',
				type: "post",
		        data: {
						'total_service': total_service,
						'each_service_price': service_each_price,
						'each_service_payment_option': each_service_payment_option,
						'each_service_commission': each_service_commission,
						'each_service_currency': service_each_currency,
						'supplier_id': supplier_id,
						'sup_price': sup_price,
						'pb_price': pb_price,
						'total_price': total_price,
						'bundle_payment_id' : bundle_id
					  },
						
				
		        success: function(response){
				$('#load').hide();
				window.location.href = '<?php echo base_url();?>thank_you/'+response+'';
		        }
		      });
    		 
            }
        );
    },

        onCancel: function(data, actions) {
            window.location.href = '<?php echo base_url();?>payment_failed';
        }

    }, '#paypal-button-container');*/

	/*function checkcpn(){
		var cpn_code = $(".clss_cpn_code").val();
		var rnd_prc = $(".rnd_prc").val();
		$.ajax({
			url: '<?php echo base_url("payment_process/addcoupn");?>',
			data: {'cpn_code': cpn_code,'rnd_prc':rnd_prc},
			type: "post",
			success: function(response){
				$(".cpn_success").html("Your coupon added successfully! ");
				$(".cpn_suc").show();
				
			}
		  });
	}*/
</script>

  <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            
			style: {
            label: 'checkout',
            size:  'small',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
		 },

            // Set up the transaction
            createOrder: function(data, actions) {
                console.log(data);
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $final_price;?>',
							currency: '<?php echo $each_currency;?>'
                        }
                    }]
                });
                
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
               return actions.order.capture().then(function(orderdetail) {
                $('#hide_pay_data').hide();
				$('#please_wait').show();
				
                var transaction_id =orderdetail.id;
				var total_service = '<?php echo $total_service;?>';
				var service_each_price = '<?php echo $each_service_price?>';
				var service_each_currency = '<?php echo $each_service_currency?>';
				var each_service_payment_option = '<?php echo $each_service_payment_option;?>';
				var each_service_commission = '<?php echo $each_service_commission?>';
				var supplier_id = '<?php echo $each_supplier_id;?>';
				var sup_price = '<?php echo $total_price; ?>';
				var pb_price = '<?php echo $total_commision_price; ?>';
				var total_price = '<?php echo $final_price; ?>';
				var bundle_id = '<?php echo $bundle_id;?>';
				var currency = '<?php echo $each_currency;?>';

				
				 $.ajax({
					url: '<?php echo base_url("order_process");?>',
					type: "post",
					data: {
							'total_service': total_service,
							'service_each_price': service_each_price,
							'each_service_payment_option': each_service_payment_option,
							'each_service_commission': each_service_commission,
							'each_service_currency': service_each_currency,
							'supplier_id': supplier_id,
							'sup_price': sup_price,
							'pb_price': pb_price,
							'total_price': total_price,
							'bundle_payment_id' : bundle_id,
							'payment_mode' : 'paypal',
							'currency': currency,
							'transaction_id':transaction_id
						  },
					
					success: function(response){
				//	alert(response);
						window.location.href = '<?php echo base_url();?>thank_you/'+response+'';
					}
				  });
               });
                
            }

        }).render('#paypal-button-container');
    </script>



		<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});	
		</script>
 
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>

  </body>
</html>