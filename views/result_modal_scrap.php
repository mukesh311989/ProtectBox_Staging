 
<!-- Modal -->
<div class="modal fade" id="reload_div" role="dialog" style="margin-top:30px;">
    <div class="modal-dialog" style="width:1230px !important;overflow-y: initial !important;">
      <div class="modal-content">
	    <script type='text/javascript'>
			$('#reload_div').on('hidden.bs.modal', function (e) {           
				location.reload();
			})
		</script>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title"><?php echo $fetch_ice_cat_data->ProductTitle;?>
			
		  </h4> -->
		  <div class="row">
		  <div class="col-md-8">
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Manufacturer</div>
						<h5 style="font-weight:bold;"><?php echo $fetch_ice_cat_data->service_provider;?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Category</div>
						<h5 style="font-weight:bold;"><?php echo $fetch_service_data->product_category;?></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ">
						<div class="c_names">Mfg Part Number</div>
						<h5 style="font-weight:bold;">#<?php echo $fetch_ice_cat_data->td_part;?></h5>
					</div>
					<div class="col-md-6 ">
						<div class="c_names">Currency</div>
						<h5 style="font-weight:bold;"><?php echo $fetch_service_data->currency;?></h5>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="text-align:center;">
				<?php
				$decode_images = json_decode($fetch_ice_cat_data->product_image,TRUE);
				$fetch_last_url = count($decode_images) - 2;
				$pro_logo = $decode_images[$fetch_last_url];
				?>
				<img src="<?php echo $pro_logo;?>"  style="height:180px;">
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
			
				<?php echo (($fetch_ice_cat_data->desc_html != '')?htmlspecialchars_decode(stripslashes($fetch_ice_cat_data->desc_html)) : 'No Data Found');?>
			</div>
			<!-- Main Specs Ends -->

			<!-- Extended Specs Starts -->
			<div id="Extended Specs_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent">
			
				<?php echo (($fetch_ice_cat_data->spec_html != '')?htmlspecialchars_decode(stripslashes($fetch_ice_cat_data->spec_html)) : 'No Data Found');?>
			</div>
			<!-- Extended Specs Ends -->

			<!-- Marketing Description Starts -->
			<div id="Marketing Description_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent" style="text-align:center;">
			  <h3>No Data Found</h3>
			 
			</div>
			<!-- Marketing Description Ends -->

			<!-- Features Starts -->
			<div id="Features_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent" style="text-align:center;">
				 <h3>No Data Found</h3>
			</div>
			<!-- Features Ends -->

			<!-- Multiple Images Starts -->
			<div id="Multiple Images_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent" style="text-align:center;height:300px;">
				<?php 
					$img_data =  json_decode($fetch_ice_cat_data->product_image, TRUE);
				?>
				<div class="col-md-6 col-md-offset-3">
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
					 <!-- Indicators -->
					<ol class="carousel-indicators">
					<?php
						$i = 0;
					foreach($img_data As $data)
					{
					?>
					  <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="active"></li>
					 
					 <?php
						$i++;
					}
						?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					<?php
					$i = 0;
					foreach($img_data As $data)
					{
					?>

					  <div class="item <?php echo (($i == 0)?'active':'');?>">
						<img src="<?php echo $data;?>" alt="Los Angeles" style="width:100%;position:relative;text-align:center;height:250px;">
					  </div>
					<?php
						$i++;
					}
					?>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
			</div>
			</div>
			<!-- Multiple Images Ends -->
			<!-- Ratings Starts -->
			<div id="Ratings_<?php echo $fetch_service_data->supplier_service_id;?>" class="tabcontent" style="text-align:center;">
			
		
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