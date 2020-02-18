<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMB Pending Orders | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
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
.starrr { color: #ee8b2d;}
.read_only { color: #ee8b2d !important;}
	</style>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">
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
          View Small and medium business (SMB) Pending Orders
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
			<div id="alertzzzz" style="display:none;">
				<div class="alert alert-success"> <strong>SMB Order status updated successfully!</strong> </div>
			</div>
			<div class="tab-content rounded_div">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6"></div>
						<div class="col-md-6 text-right">
							<a href="<?php echo base_url('view_sme');?>" class="btn btn-warning">Back</a>
						</div>
					</div>
				</div>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Order&nbsp;ID</th>
							<th width="15%">SME</th>
							<th width="15%">Supplier</th>
							<th width="15%">Service&nbsp;Provider</th>
							<th width="15%">Sage/Direct</th>
							<th width="15%">Category</th>
							<th width="30%">Product</th>
							<th width="15%">Total&nbsp;Price</th>
							<th width="15%">Payment&nbsp;Option</th>
							<th width="15%">Order&nbsp;Status</th>
							<th width="15%">Order&nbsp;Date</th>
							<th>Ratings</th>
							<th>Status</th>
						  </tr>
						</thead>
						<tbody>
						<?php
						if(sizeof($order_data) > 0){
						foreach($order_data as $fetch_order){
							$supplier_service_id = explode(",",$fetch_order->supplier_service_id);
						?>
						  <tr>
							<td><?php echo $fetch_order->orders_id;?>&nbsp;
								<?php
								$check_date = $fetch_order->upload_date;
								$present_time = time();
								$last_seven_days = strtotime("7 days ago");
								if($check_date > $last_seven_days && $check_date <= $present_time){
									echo '<span style="color:red;font-size:20px;">*</span>';
								}else{
									echo '';
								}
							?></td>
							<td>
							<?php 
								$sme_name_fetch = $this->my_order_m->fetch_sme_name($this->uri->segment(2));
								echo $sme_name_fetch->firstname;
								echo "&nbsp;";
								echo $sme_name_fetch->lastname;
							?>
							</td> 
							<td>
							<?php 
								$supplier_name_fetch = $this->my_order_m->fetch_supplier_name($fetch_order->supplier_id);
								echo $supplier_name_fetch->firstname;
								echo "&nbsp;";
								echo $supplier_name_fetch->lastname;
							?>
							</td>
							<td>
							<?php
							$ci =&get_instance();
							$ci->load->model('sme_order_m');
							$get_method = $ci->sme_order_m->fetch_method($fetch_order->supplier_id);
							echo ucfirst($get_method->service_provider);
							?>
							</td>
							<td>
							<?php
								$category_name = "";
								foreach($supplier_service_id as $service_key)
								{
									$get_category_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_category_name as $category_key)
									{
										$category_name .= $category_key->product_category;
										$category_name .= ",<br/>";
									}
									
								}
								echo rtrim($category_name,",<br/>");
							?>
							</td>
							<td>
								<?php 
									if($sme_name_fetch->user_id == '52'){
										echo "Sage";
									}else{
										echo "Direct";
									}
								?>
							</td>
							<td>
							<?php
								$service_name = "";
								foreach($supplier_service_id as $service_key)
								{
									$get_service_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_service_name as $serv_key)
									{
										$service_name .= $serv_key->service_name;
										$service_name .= ",<br/>";
									}
									
								}
								echo rtrim($service_name,",<br/>");
							?>
							</td>
							<td>
							<?php 
								foreach($supplier_service_id as $service_key)
								{
									$get_service_name = $this->my_order_m->fetch_service_name($service_key);
									
									foreach($get_service_name as $currency_key)
									{
										$currency =  $currency_key->currency;
										
									}
									
								}
								echo $fetch_order->total_price;
								echo "&nbsp;";
								echo $currency;
							?>
							</td>
							<td><?php echo $fetch_order->payment_method;?></td>
							<td><?php echo $fetch_order->order_status;?></td>
							<td><?php echo date('d/m/Y',$fetch_order->upload_date);?></td>
							<td>
							<?php
							$get_rating = $this->my_order_m->check_rating($this->uri->segment(2),$fetch_order->orders_id);
							if(sizeof($get_rating) == 0){
								echo "Not Rated Yet";
							}
							else{
							?>
							<input type="number"  id="rating-readonly" class="rating read_only" data-clearable="remove" value="<?php echo $get_rating->rating;?>" data-readonly/>
							<?php
							}
							?>
							</td>
							<td>
								<div class="form-group options">
	                                <label class="switch-light switch-ios">
	                                <input type="checkbox" name="status" id="option_2" <?php echo (($fetch_order->status == '1')?'checked':'')?> onchange="statzz(<?php echo $fetch_order->orders_id?>);">
	                                <span>
	                                	<span>Inactive</span>
	                                	<span>Active</span>
	                                </span>
	                                <a></a>
	                                </label>
                            	</div>
							</td>
						  </tr>
						<?php
						}
						}else{
						?>
						<tr>
							<td colspan="12">No results to display</td>
						</tr>
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
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<!-- Export button for tables Starts-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<!-- Export button for tables ends-->
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
	  $(document).ready(function() {
			$('#example').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'print'
				]
			} );

		} );
    </script>

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
  
  $('#<?php echo $fetch_order->supplier_id; ?>').on('starrr:change', function(e, value){
	$('#get_value<?php echo $fetch_order->supplier_id; ?>').val(value);
  });
});
	</script>
	<?php
	}
	?>
	<script>
    	function statzz(e){
    		var checkbox = document.getElementById('option_2');
  			if (checkbox.checked == true){
    			var status_val = 1;
    		}else{
    			var status_val = 0;
    		}

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>sme_order/update_status',
		        data: {'status_val': status_val,'order_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          $('#alertzzzz').show();
		          //alert(response);
		        }
		      });
    		 /* ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
