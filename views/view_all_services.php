<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>All Services | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
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
          All Services
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
			<div class="tab-content rounded_div">
				<div id="alertzzzz" style="display:none;">
					<div class="alert alert-success"> <strong>Service status updated successfully!</strong> </div>
				</div>
				<?php
				if($this->session->flashdata('success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
				<?php
					}
				?>
			  <div class="row">
				<form action="<?php echo base_url("view_all_services/import");?>" method="post" enctype="multipart/form-data">
					<div class="col-md-3 hidable" style="display:none;">
						<input type="file" class="form-control" name="mapped">
					</div>
					<div class="col-md-3 hidable" style="display:none;">
						<button class="btn btn-success" type="submit" style="margin-bottom:10px;" >Upload Data</button>
					</div>
				</form>
				<div class="col-md-3 showable">
					<button class="btn btn-success" style="margin-bottom:10px;" onclick="kholoamar_modal();">Upload Data</button>
				</div>
			</div>
			  <div class=" table-responsive">
				<?php
					/*$ci =&get_instance();
					$ci->load->model('admin_role_m');
					$get_admin_info = $ci->admin_role_m->fetch_admin($this->session->userdata['logged_in']['user_id']);
					print_r($get_admin_info);*/
				?>
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Service&nbsp;No.</th>
							<th>Service&nbsp;Provider</th>
							<th width="30%">Logo</th>
							<th width="15%">Service&nbsp;Name</th>
							<th width="15%">Customer&nbsp;Type</th>
							<th width="15%">Product&nbsp;Category</th>
							<th width="15%">Product&nbsp;Detail</th>
							<th width="15%">Currency</th>
							<th width="15%">Price&nbsp;Range</th>
							<th width="15%">Price&nbsp;Detail</th>
							<th width="15%">Operating&nbsp;System</th>
							<th width="15%">Specialist&nbsp;Hardware</th>
							<th width="15%">Third&nbsp;Party&nbsp;Supplier</th>
							<th width="15%">Ease&nbsp;of&nbsp;setup</th>
							<th width="15%">Protection&nbsp;level</th>
							<th width="15%">Product&nbsp;link</th>
							<th width="15%">Commission&nbsp;detail</th>
							<th width="15%">Payment&nbsp;option</th>
							<th width="15%">Government&nbsp;voucher</th>
							<th width="15%">Cashback</th>
							<th width="15%">Rating</th>
							<th width="15%">Location</th>
							<th width="15%">Regulation</th>
							<th width="15%">User&nbsp;instruction</th>
							<th width="15%">Date&nbsp;Joined</th>
							<th>Status</th>
							<th width="15%">More&nbsp;Info</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($get_all_services AS $service_info){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td>
								<?php 
									echo ucfirst($service_info->service_provider);
								?>
							</td>
							<td>
								<?php
									$this->load->model('results_m');
									if($service_info->logo != ''){
										$pro_logo = base_url('uploads/'.$service_info->logo);	

									}else if($service_info->openrange != ''){

										if($service_info->openrange == 'scraped'){
											$fetch_image = $this->results_m->fetch_scrape_image($service_info->td_part);
											$decode_images = json_decode($fetch_image->product_image,TRUE);
											$fetch_last_url = count($decode_images) - 2;
											$pro_logo = $decode_images[$fetch_last_url];

										}else if($service_info->openrange == 'mapped'){
											$fetch_image = $this->results_m->fetch_openrange_image($service_info->td_part);
											$pro_logo = $fetch_image->HighPic;
										}

									}else{
										$pro_logo = '';
									}
									if($pro_logo != ''){
								?>
									<img src="<?php echo $pro_logo;?>" class="main_image amar_img__<?php echo $key;?>" />


									<div class="imager_dev yoo_okk" style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;display:none;">
									 <?php
										$pro_details = $service_info->product_detail;
										$substr_details = substr($pro_details,0,30);
										echo $substr_details;
										echo "...";
									 ?>
								</div>
								<?php
									}else{	
								?>
								<div class="imager_dev" style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;">
									 <?php
										$pro_details = $service_info->product_detail;
										$substr_details = substr($pro_details,0,30);
										echo $substr_details;
										echo "...";
									 ?>
								</div>
								<?php
									}
								?>
							</td>
							<td><?php echo $service_info->service_name;?>&nbsp;
								<?php
								$check_date = $service_info->upload_date;
								$present_time = time();
								$last_seven_days = strtotime("7 days ago");
								if($check_date > $last_seven_days && $check_date <= $present_time){
									echo '<span style="color:red;font-size:20px;">*</span>';
								}else{
									echo '';
								}
							?></td>
							<td><?php echo $service_info->customer_type;?></td>
							<td><?php echo $service_info->product_category;?></td>
							<td><?php echo $service_info->product_detail;?></td>
							<td><?php echo $service_info->currency;?></td>
							<td><?php echo $service_info->price_range;?></td>
							<td><?php echo $service_info->price_detail;?></td>
							<td><?php echo $service_info->operating_system;?></td>
							<td><?php echo $service_info->specialist_hardware;?></td>
							<td><?php echo $service_info->third_party_supplier;?></td>
							<td><?php echo $service_info->ease_of_setup;?></td>
							<td><?php echo $service_info->protection_level;?></td>
							<td><a href="<?php echo $service_info->product_link;?>"><?php echo $service_info->product_link;?></a></td>
							<td><?php echo $service_info->commission_detail;?></td>
							<td><?php echo $service_info->payment_option;?></td>
							<td><?php echo $service_info->govt_voucher;?></td>
							<td><?php echo $service_info->cashback;?></td>
							<td><?php echo $service_info->rating;?></td>
							<td><?php echo $service_info->location;?></td>
							<td><?php echo $service_info->regulation;?></td>
							<td><?php echo $service_info->user_instruction;?></td>
							<td><?php echo $service_info->upload_date;?></td>
							<td>
								<div class="form-group options">
	                                <label class="switch-light switch-ios">
	                                <input type="checkbox" name="status" id="option_2" <?php echo (($service_info->status == '1')?'checked':'')?> onchange="statzz(<?php echo $service_info->supplier_service_id?>);">
	                                <span>
	                                	<span>Inactive</span>
	                                	<span>Active</span>
	                                </span>
	                                <a></a>
	                                </label>
                            	</div>
								<input type="hidden" id="serv_tgle_<?php echo $service_info->supplier_service_id;?>" value="<?php echo $service_info->status;?>">
							</td>
							
							<td>
								<a href="<?php echo base_url('edit_admin_service_details');?>/<?php echo $service_info->supplier_service_id;?>" class="btn btn-warning">Edit Services</a>
							</td>
							
						  </tr>
						 	<?php
						 		$i++;
								}
						 	?>
						</tbody>
					  </table>

						<div class="dataTables_paginate paging_simple_numbers" style="float:right;">
						   <?php 
								if(isset($links)){
									echo $links;
								}
							?>
						</div>
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
				],
				"paging":   false,
				"bInfo" : false
			} );
		} );
		$("img").on("error", function() {
		  $(this).hide();
		 $(this).siblings('.yoo_okk').show();
		});
		function kholoamar_modal(){
			$('.hidable').show();
			$('.showable').hide();
		}
    </script>
    <script>
    	function statzz(e){
    		var status_val = $('#serv_tgle_'+e+'').val();

    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_all_services/update_status',
		        data: {'status_val': status_val,'supplier_service_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#serv_tgle_'+e+'').val(response);
		          $('#alertzzzz').show();
		        }
		      });
    		 /* ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
