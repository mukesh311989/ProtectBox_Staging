<style>
.modal-title{
	margin-top:10px;
	margin-bottom:15px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="reload_div" role="dialog">
    <div class="modal-dialog" style="width:1230px !important;overflow-y: initial !important;">
      <div class="modal-content">
	    <script type='text/javascript'>
			$('#reload_div').on('hidden.bs.modal', function (e) {           
				location.reload();
			})
		</script>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $fetch_ice_cat_data->ProductTitle;?></h4>
		  <div class="row">
		  <div class="col-md-8">
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Manufacturer</div>
						<h5><?php echo $fetch_ice_cat_data->Supplier;?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Category</div>
						<h5><?php echo $fetch_ice_cat_data->Category;?></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Mfg Part Number</div>
						<h5><?php echo $fetch_ice_cat_data->requested_prod_id;?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Currency</div>
						<h5 style="font-weight:bold;"><?php echo $fetch_service_data->currency;?></h5>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="text-align:center;">
				<img src="<?php echo $fetch_ice_cat_data->HighPic;?>" alt="<?php echo $fetch_ice_cat_data->ProductTitle;?>"  style="height:180px;">
			</div>
		  </div>
        </div>
        <div class="modal-body" style="height: 300px;overflow-y: auto;">

			<div class="tab">
			  <button class="tablinks active" onclick="openCity(event, 'Main Specs_<?php echo $fetch_service_data->supplier_service_id;?>')">Main Specs</button>
			  <button class="tablinks" onclick="openCity(event, 'Extended Specs_<?php echo $fetch_service_data->supplier_service_id;?>')">Extended Specs</button>
			  <button class="tablinks" onclick="openCity(event, 'Marketing Description_<?php echo $fetch_service_data->supplier_service_id;?>')">Marketing Description</button>
			  <button class="tablinks" onclick="openCity(event, 'Features_<?php echo $fetch_service_data->supplier_service_id;?>')">Features</button>
			  <button class="tablinks" onclick="openCity(event, 'Multiple Images_<?php echo $fetch_service_data->supplier_service_id;?>')">Multiple Images</button>
			  <!-- <button class="tablinks" onclick="openCity(event, 'Logo_<?php echo $fetch_service_data->supplier_service_id;?>')">Logo</button>
			  <button class="tablinks" onclick="openCity(event, 'Attributes_<?php echo $fetch_service_data->supplier_service_id;?>')">Attributes</button> -->
			  <button class="tablinks" onclick="openCity(event, 'Ratings_<?php echo $fetch_service_data->supplier_service_id;?>')">Ratings</button>
			</div>
			
			<!-- Main Specs Starts -->
			<div id="Main Specs_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent" style="display: block;">
			  <h3>Main Specifications</h3>
			  <div class="row" style="padding:5px;border:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Product Description</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->ShortDesc;?></div>
			  </div>
			  <div class="row" style="padding:5px;border:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Category</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->Category;?></div>
			  </div>
			  <div class="row" style="padding:5px;border:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Model</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->Model;?></div>
			  </div>
			  <div class="row" style="padding:5px;border:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Quality</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->Quality;?></div>
			  </div>
			  <div class="row" style="padding:5px;border:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Product Views</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->Product_Views;?></div>
			  </div>
			</div>
			<!-- Main Specs Ends -->

			<!-- Extended Specs Starts -->
			<div id="Extended Specs_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
			   <h3>Extended Specifications</h3>
			  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
					<div class="col-md-12">General</div>
			  </div>
			  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Category</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->Category;?></div>
			  </div>
			  <div class="row" style="background:#ddd;padding:5px;border:1px solid #ddd;margin:0px;">
					<div class="col-md-12">Description</div>
			  </div>
			  <div class="row" style="background:#fff;padding:5px;border-right:1px solid #ccc;border-left:1px solid #ccc; border-top:1px solid #ccc;margin:0px;">
					<div class="col-md-4">Short Description</div>
					<div class="col-md-8"><?php echo $fetch_ice_cat_data->ShortSummaryDescription;?></div>
			  </div>
			</div>
			<!-- Extended Specs Ends -->

			<!-- Marketing Description Starts -->
			<div id="Marketing Description_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
			  <h3>Marketing Description</h3>
			  <p><?php echo $fetch_ice_cat_data->Short_Marketing_Text;?></p>
			</div>
			<!-- Marketing Description Ends -->

			<!-- Features Starts -->
			<div id="Features_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
			<h3>Product Features</h3>
				<ul>
					<?php
						foreach($array_specs AS $each_specs){
					?>
						<li><?php echo $each_specs;?></li>
					<?php
						}
					?>
				</ul>
			</div>
			<!-- Features Ends -->

			<!-- Multiple Images Starts -->
			<div id="Multiple Images_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
			  <h3>Multiple Images</h3>
				<div class="row">
					<div class="col-md-12" style="text-align:center;"><img src="<?php echo $fetch_ice_cat_data->HighPic;?>" alt="<?php echo $fetch_ice_cat_data->ProductTitle;?>" style="height:100%;"></div>
				</div>
			</div>
			<!-- Multiple Images Ends -->
			<!-- Ratings Starts -->
			<div id="Ratings_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
				<h3>Ratings and Reviews</h3>
				<div class="row" style="border-bottom:1px solid #ccc;">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1" style="margin-top:14px;">
								<span class="btn btn-success" style="font-size:1.5rem;">5 <i class="fa fa-star"></i></span>
							</div>
							<div class="col-md-8">
								<h3>Best in the market</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>I think I have the same issue. My coffee machine at home doesn't want to make cappuchino sometimes. Maybe you know the reason for that?<br/>Information, details about the setup, logs, configs and settings, your actions and tests? Nobody will be able to help you without some basic input information.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row" style="margin-bottom:1px solid #ccc;">
							<div class="col-md-1" style="margin-top:14px;">
								<span class="btn btn-success" style="font-size:1.5rem;">5 <i class="fa fa-star"></i></span>
							</div>
							<div class="col-md-8">
								<h3>Best in the market</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>I think I have the same issue. My coffee machine at home doesn't want to make cappuchino sometimes. Maybe you know the reason for that?<br/>Information, details about the setup, logs, configs and settings, your actions and tests? Nobody will be able to help you without some basic input information.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Ratings Ends -->

		</div>
        <div class="modal-footer">
		  <p style="color:#000;font-style:italic;text-align:left;font-weight:bold;">Product descriptions & Ratings/Reviews are provided by third parties, we do not warrant the accuracy and completeness of the material contained in this description.</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- MODAL ENDS -->
  <!-- Script for Tabs starts-->
  <script src="<?php echo base_url();?>js/result_modal.js"></script>
	
<!-- Script for Tabs Ends -->