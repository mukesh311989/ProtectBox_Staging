<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Orders | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>--> 
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
        width:60%;
        margin: 0 15px 30px 0;
      }
	  .checked {
		color: #EC6B0D;
	}
	
	.starrr { color: #ee8b2d;}
	.read_only { color: #ee8b2d !important;}
	
	</style>
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div id="load"></div> 
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          My Orders
        </div>
      </div>
    </section>
    <!-- End section -->
		
	
    <main>    
      <div class="container margin_60">
	  			<?php
					if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
				<?php
					}
				?>
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
			  <h3>My Orders</h3>
			  <div class=" table-responsive">
			  	<?php
						if(sizeof($order_data) > 0)
						{
						foreach($order_data as $fetch_order)
						{
						?>
						<div class="col-md-12" style="padding:10px;">
							<p class="col-md-6" style="padding:0 !important;">Order Number:-&nbsp;&nbsp;<span style="font-weight:bold;"><?php echo $fetch_order->orders_id;?></span></p>
							<div class=" col-md-6 text-right" style="padding:0 !important;"><a href="<?php echo base_url('');?>invoice/<?php echo $fetch_order->orders_id;?>" class="btn btn-success " style="color:#fff;font-size:1.0em;padding:7px 10px;margin-top:-5px;">View Invoice
							</a></div>
						</div>
						<table id="" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%"> Order No</th>
							<th width="15%">Category</th>
							<th width="25%">Product</th>
							<th >Total</th>
							<th width="15%">Payment&nbsp;Method</th>
							<th>Payment&nbsp;Status</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">Download</th>
							<th width="10%">Ratings&nbsp;&&nbsp;Review</th>
							<th width="10%">Refund</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
							$supplier_service_id = explode(",",$fetch_order->supplier_service_id);
							//print_r($supplier_service_id);
							foreach($supplier_service_id as $service_key)
								{
								$get_category_name = $this->my_order_m->fetch_service_name($service_key);
								//print_r($get_category_name);
								$service_id = $get_category_name->supplier_service_id;
								$get_order_stat = $this->my_order_m->fetch_trans($fetch_order->orders_id,$service_key);
								
								$cu = explode(",",$fetch_order->supplier_service_currency);
								$main_cu = $cu[0];
								$fetch_currency_code =  $this->my_order_m->fetch_currency_code($main_cu);
								
						?>
						  <tr>
							<td><?php echo $fetch_order->orders_id;?></td>
							<td>
							<?php
								echo $get_category_name->product_category;
							?>
							</td>
							<td>
							<?php
								echo $get_category_name->product_detail;
							?>
							</td>
							<td>
							<?php echo $fetch_currency_code->symbol;?>&nbsp;<?php echo $fetch_order->total_price;?>/<?php echo $get_category_name->payment_option;?>
							
							</td>
							<td><?php echo (($fetch_order->payment_method != 'Stripe')?$fetch_order->payment_method:'Card');?></td>
							<td><?php
							if($fetch_order->cus_payment_status == 'Success' && $fetch_order->sup_payment_status == 'Confirm'){
								$payment_status = 'Success';
							}else{
								$payment_status = 'Pending';
							}
							 echo $payment_status;
							 ?></td>
							<td>
								 <?php
								 if($get_order_stat->sup_order_status == "smb_placed_order" || $get_order_stat->sup_order_status == "seller_informed" || $get_order_stat->sup_order_status == "confirmed-by-seller" || $get_order_stat->sup_order_status == "seller_paid"){
								 	echo "Order Processing";
								 }else if($get_order_stat->sup_order_status == "seller_rejected" || $get_order_stat->sup_order_status == "admin_cancelled"){
									echo "Order Cancelled";
								 }else if($get_order_stat->sup_order_status == "order_delivered"){
									echo "Order Complete";
								 }
								 
								?>
							</td>
							<td>
							<?php
								if($get_order_stat->sup_order_status == "order_delivered"){

									if($get_order_stat->supplier_id == 52)
									{
							?>
								<a href="javascript:void(0);">Download</a>
							<?php
									}else
									{
							?>
								<a href="javascript:void(0);">Download</a>
							<?php
									}
								}
							else
									{
								?>
									<a href="javascript:void(0);">Processing</a>
							<?php
									}
							?>
							</td>
							<td>
							<?php
							$get_rating = $this->my_order_m->check_rating($this->session->userdata['logged_in']['user_id'],$fetch_order->orders_id,$service_id);
							if(count($get_rating) < 1)
							{
							?>
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#<?php echo $fetch_order->orders_id;?>">
								  Give Rating
								</button>
								<form action="<?php echo base_url("my_order/save_rating");?>" method="post" enctype="multipart/form-data">
								<div class="modal fade" id="<?php echo $fetch_order->orders_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Rating & Review</h5>
									  </div>
									  <div class="modal-body">
										<div id="<?php echo $fetch_order->orders_id;?>" class="starrr" data-rating='0'></div>
										
										<input type="hidden"  id="get_value<?php echo $fetch_order->orders_id; ?>" name="rating_value">

										<div class="form-group">
											<label for="exampleFormControlTextarea1" style="font-weight:normal;">Write a review</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="" name="review"></textarea>
										  </div>
									    </div>
										<input type="hidden" value="<?php echo $fetch_order->supplier_id;?>" name="supplier_id">
										<input type="hidden" value="<?php echo $fetch_order->orders_id;?>" name="order_id">
										<input type="hidden" value="<?php echo $service_id;?>" name="service_id">
										
									    <div class="modal-footer">
										  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										  <button type="submit" class="btn btn-warning">Submit Rating</button>
									    </div>
									</div>
								  </div>
								</div>
								</form>
							<?php
							}
							else{
							?>
							<input type="number"  id="rating-readonly" class="rating read_only" data-clearable="remove" value="<?php echo $get_rating->rating;?>" data-readonly/>
							<span style="font-size:11px;"><?php echo $get_rating->review;?></span>
							<?php
							}
							?>
							</td>
							
							<td>
							<?php
							 $refund_policy = $get_category_name->refund;
							
								if($refund_policy = "yes")
									{
										
										$check_status = $this->my_order_m->check_return_status($this->session->userdata['logged_in']['user_id'],$fetch_order->orders_id,$service_id);
										//echo $check_status;
										//exit;
										if($check_status == 0)
										{
											if($get_order_stat->sup_order_status == "order_delivered"){
												
							?>			
							<a  data-toggle="modal" data-target="#refund_modal_<?php echo $fetch_order->orders_id;?>" class="btn btn-success">Refund</a>
							<?php
											}
							else
											{
							?>
								<a  href="javascript:void();" disabled class="btn btn-success">Not Refundable Yet!</a>
							<?php
											}
							?>
				
							<!-- refund modal starts-->
							<form action="<?php echo base_url();?>my_order/refund_request" id="refund_request_form" method="POST" enctype="multipart/form-data">
							  <div class="modal fade" id="refund_modal_<?php echo $fetch_order->orders_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
								  <div class="modal-content">
									<div class="modal-header">
									  <h5 class="modal-title" id="exampleModalLongTitle">Add A Payment Option For Refund
									  </h5>
									</div>
									<div class="modal-body">
									  <div class="row" id="paypalBrowser" >
										<div class="alert alert-danger bank_required" style="display:none;"> 
										  <strong>You must fill all the details!
										  </strong> 
										</div>
										<div class="alert alert-success bank_success" style="display:none;"> 
										  <strong>Bank details has been updated.
										  </strong> 
										</div>
										<div class="col-md-12">
										  <div class="form-group">
											<label>Choose Currency &nbsp;
											  <span style="color:#ec8b0d;font-size:22px;">*
											  </span>
											</label>
											<select class="form-control" name="bank_currency" onchange="country_select(this.value);">
											  <option hidden value="">Choose an Option
											  </option>
											  <option value="EUR" <?php echo (($get_it->currency == 'EUR')?'selected':'')?>>EUR
											  </option>
											  <option value="GBP" <?php echo (($get_it->currency == 'GBP')?'selected':'')?>>GBP
											  </option>
											  <option value="USD" <?php echo (($get_it->currency == 'USD')?'selected':'')?>>USD
											  </option>
											</select>
										  </div>
										</div>
										<!-- EUR CURRENCY FORM STARTS -->
										<div id="form_eur" style="<?php echo (($get_it->currency == 'EUR')?'':'display:none');?>">
										  <div class="col-md-6">
											<div class="form-group">
											  <label>IBAN &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="iban_eur"  placeholder="Enter your IBAN number." value="<?php echo $get_it->iban_eur;?>" required>
											</div>
										  </div>
										</div>
										<!-- EUR CURRENCY FORM ENDS -->
										<!-- GBP CURRENCY FORM STARTS -->
										<div id="form_gbp" style="<?php echo (($get_it->currency == 'GBP')?'':'display:none');?>">
										  <div class="col-md-6">
											<div class="form-group">
											  <label>Sort Code &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="sort_code_gbp"  placeholder="Enter your sort code number." value="<?php echo $get_it->sort_code_gbp;?>" required>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group">
											  <label>Account Number &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="account_number_gbp"  placeholder="Enter your account number." value="<?php echo $get_it->account_number_gbp;?>" required>
											</div>
										  </div>
										</div>
										<!-- GBP CURRENCY FORM ENDS -->
										<!-- USD CURRENCY FORM STARTS -->
										<div id="form_usd" style="<?php echo (($get_it->currency == 'USD')?'':'display:none');?>">
										  <div class="col-md-6">
											<div class="form-group">
											  <label>Account Type &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="account_type_usd"  placeholder="Enter your account type." value="<?php echo $get_it->account_type_usd;?>" required>
											</div>
											<div class="form-group">
											  <label>Account Number &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="account_number_usd"  placeholder="Enter your account number." value="<?php echo $get_it->account_number_usd;?>" required>
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group">
											  <label>Routing Number &nbsp;
												<span style="color:#ec8b0d;font-size:22px;">*
												</span>
											  </label>
											  <input type="text" class="form-control required valid " name="routing_number_usd"  placeholder="Enter your routing number." value="<?php echo $get_it->routing_number_usd;?>" required>
											</div>
										  </div>
										  <input type="hidden" value="<?php echo $fetch_order->supplier_id;?>" name="supplier_id">
										  <input type="hidden" value="<?php echo $fetch_order->orders_id;?>" name="order_id">
										  <input type="hidden" value="<?php echo $service_id;?>" name="service_id">
										</div>
										<!-- USD CURRENCY FORM ENDS -->
									  </div> 
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
									  </button>
									  <button onclick="form_submit();" class="btn btn-warning">Place Refund
									  </button>
									</div>
								  </div>
								</div>
							  </div>
							</form>
							<!-- refund modal ends-->


							<?php
										}
										else
										{
								$refund_status = $this->my_order_m->check_refund_status($this->session->userdata['logged_in']['user_id'],$fetch_order->orders_id,$service_id);
								//print_r($refund_status);
						
							?>
								<a href="javascript:void(0);" class="btn btn-success">
								<?php
								if($refund_status->refund_status == 'seller_payment_pending'){
									echo "Seller payment pending";
								}else if($refund_status->refund_status == 'seller_refund_request_sent'){
									echo "Refund request sent to seller";
								}
								else if($refund_status->refund_status == 'seller_refunded'){
									echo "Seller refunded";
								}
								else if($refund_status->refund_status == 'seller_payment_confirmed'){
									echo "Seller payment confirmed";
								}else if($refund_status->refund_status == 'smb_refunded'){
									echo "SMB refunded";
								}

							
							?>
								</a>
							<?php
							
										}
							
									}
							?>
							</td>
							
						  </tr>
						  <?php
							}
							?>
						</tbody>
					  </table>
					  	<?php
						}
						}else{
						?>
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<tbody>
								<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>NO ORDERS YET</b></td></tr>
							</tbody>
						</table>
						<?php
						}
						?>
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
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		function country_select(e){
			var currency = e;
			if(currency == 'EUR'){
				$('#form_eur').show();
				$('#form_gbp').hide();
				$('#form_usd').hide();
			}else if(currency == 'GBP'){
				$('#form_eur').hide();
				$('#form_gbp').show();
				$('#form_usd').hide();
			}else if(currency == 'USD'){
				$('#form_eur').hide();
				$('#form_gbp').hide();
				$('#form_usd').show();
			}
		}

		function form_submit() {
			document.getElementById("refund_request_form").submit();
		}    
	</script>
<!-- rating start -->
<?php
	foreach($order_data as $fetch_order)
	{
?>
	<script>
	var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {

	//var htmlString="hearts-existing<?php echo $fetch_order->supplier_id; ?>";
	//alert(htmlString);
	$('#input-id').attr('disabled', 'true');
  
  $('#<?php echo $fetch_order->orders_id; ?>').on('starrr:change', function(e, value){
	$('#get_value<?php echo $fetch_order->orders_id; ?>').val(value);
  });
});
	</script>
	<?php
	}
	?>
	<!-- rating end -->
  </body>
</html>
