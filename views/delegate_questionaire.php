<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Questionnaire | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">

	<style>
		.tooltiplink + .tooltip > .tooltip-inner {
			background-color: #73AD21; 
			color: #FFFFFF; 
			border: 1px solid green;
			padding: 15px;
			font-size: 20px;
		}
		.tooltip-inner{
			min-width: 300px; 	
		}
		/* Tooltip on top */
		.tooltiplink + .tooltip.top > .tooltip-arrow {
			border-top: 5px solid green;
		}

		/* Tooltip on bottom */
		.tooltiplink + .tooltip.bottom > .tooltip-arrow {
			border-bottom: 5px solid blue;
		}

		/* Tooltip on left */
		.tooltiplink + .tooltip.left > .tooltip-arrow {
			border-left: 5px solid red;
		}

		/* Tooltip on right */
		.tooltiplink + .tooltip.right > .tooltip-arrow {
			border-right: 5px solid black;
		}
		.rounded_div {
			border:1px solid #CCC;
			box-shadow: 0px 0px 3px #bfbfbf;
			border-radius:5px;
		}
		label{
			font-weight:normal !important;
		}
		/* style*/
body {
    color: #000;
}
.arrow_success {
    position: relative;
    color: #fff;
    font-weight: bold;
	width:24%;
	text-align:center;
	margin:0.5%;
	
	
}
.red-gradient_success {
    
    
    width: 100%;
    color: #fff;
    background: #9FD45B; /* Old browsers */
	
}

.arrow {
    position: relative;
    color: #fff;
    font-weight: bold;
	width:24%;
	text-align:center;
	margin:0.5%;
 
 
}
.red-gradient {
    
    
    width: 100%;
    color: #EC8C0E;
    background: #fff;
 
}

.arrow1:after {
    z-index: 9999;
    right: -12px;
    border-top: 26px solid transparent;
    border-left: 15px solid #EC8C0E;
    border-bottom: 26px solid transparent;
	position: absolute;
    content: '';
	top:-5px;

}


.nav-tabs>li.active>a{
  background-color:#EC8C0E !important;
  color:#fff !important;
  border-left: 16px solid #EC8C0E;
}

.oi_header
{
	background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);
}
.other_title{
		background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
}
.another
{
	border:3px solid #EC8C0E;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.sage_border
{
	border:3px solid #83C72A;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
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
        <div class="main_title other_title" >
          Let's source your protection..
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->
				<?php
					if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}else if($this->session->flashdata('update')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update');?></strong> </div>
				<?php
					}
				$array = explode(',',$delegate_data);
				?>

				<ul class="nav nav-tabs " id="myDIV" style="margin-bottom:10px;">
					<li class="active arrow"><a href="<?php echo base_url('delegate_questionaire/');?><?php echo $this->uri->segment(2);?>"   class="red-gradient">Basics</a></li>
					<?php
					if(in_array("tech", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_tech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient_success">Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Technical Info</a></li>
					<?php
					}
					if(in_array("non_tech", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_nontech_info/');?><?php echo $this->uri->segment(2);?>" class="red-gradient_success">Non-Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Non-Technical Info</a></li>
					<?php
					}
					if(in_array("budget", $array))
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('delegate_questionaire_budget/');?><?php echo $this->uri->segment(2);?>"  class="red-gradient_success">Budget</a>  </li>
					<?php
					}
					else{
					?>
					<li class="arrow"><a href="javascript:void(0);"  class="red-gradient">Budget</a>  </li>
					<?php
					}
					?>
				</ul>
	
				<div class="tab-content rounded_div">
					<div class="tab-pane active" id="home">
					<?php
					if($questions->industry_input != '' || $questions->employees_input != '' || $questions->location_input != '' || $questions->handle_data_input != '')
					{
					?>
						<div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> All questions with an asterisk <span style="color:#ec8b0d;font-size:22px;margin-top:10px;">*</span> must be answered.</p>
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:20px;font-weight:bold"><i class="icon-circle-empty"> </i> Click on  <a data-container="body"  href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> for more info. </p>
								</div>
							</div>
						</div>
						<?php
						$tab_one = $progress->tab_one;
						$total_progress = $tab_one;
						?>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
						</div>
						<div style="margin-top:-18px;margin-bottom:20px;float:right;margin-right:20px;"><span>10 minutes to complete this section, 1 hour in total</span></div>

					<form name="questionaire" method="POST" action="<?php echo base_url('delegate_questionaire/add_info/');?><?php echo $this->uri->segment(2);?>">
					<?php
					if($questions->industry_input != '' || $questions->employees_input != '')
					{
					?>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-industrial-building"></i></strong> Industry
						</h3>
					  </div>
					<?php
					}
					?> 
					
					  <?php
							if($questions->industry_input != '' || $questions->employees_input != '')
							{
						?>	
					  <div class="step">
						<?php
						if($questions->industry_input != '')
						{
						?>
						   <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
								  <label><b>1a</b> What industry are you in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 </div>
						  </div>

						  
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select name="industry" class="form-control">
								<option disabled="" selected="">Choose an option</option>
								<option  value="Agriculture and Mining" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Agriculture and Mining")?'selected':'');?> <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Agriculture and Mining")?'selected':'');?> <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Agriculture and Mining")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Agriculture and Mining') !== false)?'selected':'');?>>Agriculture and Mining</option>

								<option  value="Business Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Business Services")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Business Services') !== false)?'selected':'');?>>Business Services</option>


								<option  value="Computer and Electronics" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Computer and Electronics")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business,'Computer and Electronics') !== false)?'selected':'');?>>Computer and Electronics</option>


								<option  value="Consumer Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Consumer Services")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Consumer Services') !== false)?'selected':'');?>>Consumer Services</option>


								<option  value="Education" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Education")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Education') !== false)?'selected':'');?>>Education</option>


								<option  value="Energy and Utilities" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Energy and Utilities")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Energy and Utilities') !== false)?'selected':'');?>>Energy and Utilities</option>


								<option  value="Financial Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Financial Services")?'selected':'');?><?php echo ((isset($what_business) && strpos($what_business, 'Financial Services') !== false)?'selected':'');?>>Financial Services</option>



								<option  value="Government" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Government")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Government') !== false)?'selected':'');?>>Government</option>


								<option  value="Health, Pharmaceuticals, and Biotech" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Health, Pharmaceuticals, and Biotech")?'selected':'');?>  <?php echo ((isset($what_business) && strpos($what_business, 'Health, Pharmaceuticals, and Biotech') !== false)?'selected':'');?>>Health, Pharmaceuticals, and Biotech</option>


								<option  value="Manufacturing" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Manufacturing")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Manufacturing') !== false)?'selected':'');?>>Manufacturing</option>


								<option  value="Media and Entertainment" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Media and Entertainment")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Media and Entertainment') !== false)?'selected':'');?>>Media and Entertainment</option>


								<option  value="Non-profit" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Non-profit")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Non-profit') !== false)?'selected':'');?>>Non-profit</option>

								<option  value="Real Estate and Construction" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Real Estate and Construction")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Real Estate and Construction') !== false)?'selected':'');?>>Real Estate and Construction</option>


								<option  value="Retail" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Retail")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Retail') !== false)?'selected':'');?>>Retail</option>


								<option  value="Software and Internet" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Software and Internet")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Software and Internet') !== false)?'selected':'');?>>Software and Internet</option>


								<option  value="Telecommunications" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Telecommunications")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Telecommunications') !== false)?'selected':'');?>>Telecommunications</option>


								<option  value="Transportation and Storage" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Transportation and Storage")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Transportation and Storage') !== false)?'selected':'');?>>Transportation and Storage</option>


								<option  value="Travel Recreation and Leisure" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Travel Recreation and Leisure")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Travel Recreation and Leisure') !== false)?'selected':'');?>>Travel Recreation and Leisure</option>


								<option  value="Wholesale and Distribution" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Wholesale and Distribution")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Wholesale and Distribution') !== false)?'selected':'');?>>Wholesale and Distribution</option>


								<option  value="Other" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Other")?'selected':'');?> <?php echo ((isset($what_business) && strpos($what_business, 'Other') !== false)?'selected':'');?>>Other</option>
							  </select>

							  
							</div>
						  </div>
						</div>
						<?php
						}
						?>
						
						<?php
						if($questions->employees_input != '')
						{
						?>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>1b</b> How many employees do you have?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> </label>
							  <a data-container="body" title="Please select 1 of the 3 categories for the number of current employees in your company" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select name="employees" class="form-control">
								<option disabled="" selected="">Choose an option</option>
								<option  value="1-500"  <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "1-500")?'selected':'');?>>1-500</option>
								<option  value="500-5000" <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "500-5000")?'selected':'');?>>500-5000</option>
								<option  value="5000 >" <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "5000 >")?'selected':'');?>>5000 ></option>
							  </select>
							</div>
						  </div>
						</div>
						<?php
						}
						?>

					  </div>
					  <?php
						}
						?>
					 
					 <?php
						if($questions->location_input != '')
						{
					 ?>
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-location-6"></i></strong> Location
						</h3>
					  </div>
					  <div class="step">
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>2</b> Where are you located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <a data-container="body" title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<p>Located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></p>
									<?php
									if($basics_data != NULL && $basics_data->location_input != NULL){
										$location_inputzz = explode(',',$basics_data->location_input);
									}else{
										$location_inputzz = array();
									}
										//print_r($basics_data);
									?>
									<select name="located[]" class="form-control" multiple="multiple">
										<option disabled="" selected="">click all that apply</option>
										<option  value="Northern Ireland" <?php echo (in_array("Northern Ireland",$location_inputzz)?'selected':'')?> 
										<?php echo ((isset($located) && in_array($located,$location_inputzz))?'selected':'');?>> Northern Ireland (UK)</option>

										<option  value="Ireland"  <?php echo ((in_array("Ireland",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>> Ireland (Europe)</option>


										<option  value="Mainland UK"  <?php echo ((in_array("Mainland UK",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>> Mainland UK</option>

										<option  value="Europe"  <?php echo ((in_array("Europe",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Europe (Continental)</option>


										<option  value="North America"  <?php echo ((in_array("North America",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>North America</option>

										<option  value="Central America"  <?php echo ((in_array("Central America",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Central America</option>
										<option  value="South America"  <?php echo ((in_array("South America",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>South America</option>
										<option  value="Africa"  <?php echo ((in_array("Africa",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Africa</option>
										<option  value="Middle East Qatar"  <?php echo ((in_array("Middle East Qatar",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option  value="Middle East Israel"  <?php echo ((in_array("Middle East Israel",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Middle East (Israel)</option>
										<option  value="Russia"  <?php echo ((in_array("Russia",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>Russia</option>
										<option  value="South Asia"  <?php echo ((in_array("South Asia",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option  value="South East Asia"  <?php echo ((in_array("South East Asia",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>South East Asia (China, Japan etc)</option>
										<option  value="South Pacific"  <?php echo ((in_array("South Pacific",$location_inputzz))?'selected':'')?> <?php echo ((isset($located)&& in_array($located,$location_inputzz))?'selected':'')?>>South Pacific (Australia, New Zealand etc)</option>
									 </select>
								</div>	

								<div class="col-md-6">
								<p>Do business in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></p>
								<?php
									if($basics_data != NULL && $basics_data->location_business_input != NULL){
										$location_business_inputzz = explode(',',$basics_data->location_business_input);
									}else{
										$location_business_inputzz = array();
									}
						        ?>
								  <select name="location_business[]" class="form-control" multiple="multiple">
										<option disabled="" selected="">click all that apply</option>
										<option  value="Northern Ireland (UK)" <?php echo ((isset($location_business_inputzz) && in_array("Northern Ireland (UK)",$location_business_inputzz))?'selected':'')?>> Northern Ireland (UK)</option>
										<option  value="Ireland (Europe)"  <?php echo ((isset($location_business_inputzz) && in_array("Ireland (Europe)",$location_business_inputzz))?'selected':'')?>> Ireland (Europe)</option>
										<option  value="Mainland UK"  <?php echo ((isset($location_business_inputzz) && in_array("Mainland UK",$location_business_inputzz))?'selected':'')?>> Mainland UK</option>
										<option  value="Europe (Continental)"  <?php echo ((isset($location_business_inputzz) && in_array("Europe (Continental)",$location_business_inputzz))?'selected':'')?>>Europe (Continental)</option>
										<option  value="North America"  <?php echo ((isset($location_business_inputzz) && in_array("North America",$location_business_inputzz))?'selected':'')?>>North America</option>
										<option  value="Central America"  <?php echo ((isset($location_business_inputzz) && in_array("Central America",$location_business_inputzz))?'selected':'')?>>Central America</option>
										<option  value="South America"  <?php echo ((isset($location_business_inputzz) && in_array("South America",$location_business_inputzz))?'selected':'')?>>South America</option>
										<option  value="Africa"  <?php echo ((isset($location_business_inputzz) && in_array("Africa",$location_business_inputzz))?'selected':'')?>>Africa</option>
										<option  value="Middle East (UAE, Qatar, Oman etc)"  <?php echo ((isset($location_business_inputzz) && in_array("Middle East (UAE, Qatar, Oman etc)",$location_business_inputzz))?'selected':'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option  value="Middle East (Israel)"  <?php echo ((isset($location_business_inputzz) && in_array("Middle East (Israel)",$location_business_inputzz))?'selected':'')?>>Middle East (Israel)</option>
										<option  value="Russia"  <?php echo ((isset($location_business_inputzz) && in_array("Russia",$location_business_inputzz))?'selected':'')?>>Russia</option>
										<option  value="South Asia (India, Pakistan, Bangladesh etc)"  <?php echo ((isset($location_business_inputzz) && in_array("South Asia (India, Pakistan, Bangladesh etc)",$location_business_inputzz))?'selected':'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option  value="South East Asia (China, Japan etc)"  <?php echo ((isset($location_business_inputzz) && in_array("South East Asia (China, Japan etc)",$location_business_inputzz))?'selected':'')?>>South East Asia (China, Japan etc)</option>
										<option  value="South Pacific (Australia, New Zealand etc)"  <?php echo ((isset($location_business_inputzz) && in_array("South Pacific (Australia, New Zealand etc)",$location_business_inputzz))?'selected':'')?>>South Pacific (Australia, New Zealand etc)</option>
									 </select>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					 </div>
					 <?php
						}
					 ?>

					 <?php
						if($questions->handle_data_input != '')
						{
					 ?>
				  <div class="form_title">
					<h3>
					  <strong><i class="icon-users"></i></strong> Supply Chain
					</h3>
				  </div>
				  <?php
						}
				  ?>
				  <div class="step">
				   <?php
						if($questions->handle_data_input != '')
						{
					 ?>
					  <div class="row">
					  <div class="col-md-5 col-sm-5">
						<div class="form-group">
						  <label><b>3</b> Do you handle or manage personal or financial data or information for others <br/>(e.g. your supply chain or customers)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <a data-container="body" class="tooltiplink" title="Let us know if you also handle data for 3rd parties as this has legal implications for you." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
						 </div>
					  </div>
					  <div class="col-md-7 col-sm-7">
						  <div class="form-group">
							  <select name="handle_data" class="form-control ">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($basics_data->handle_data_input) && $basics_data->handle_data_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($basics_data->handle_data_input) && $basics_data->handle_data_input == "0")?'selected':'');?>> No </option>
							  </select>
						  </div>
					  </div>
					</div>
					<div class="row">
					<div class="row">
						<div class="col-md-12">
							<table class="table">
							 <thead>
							   <tr>
							  <th></th>
							  <th>You are supplier to?</th>
							  <th>Your customer?</th>
							   </tr>
							 </thead>
							 <tbody>
							   <tr>
							  <td>Individuals</td>
							  <td><input  type="radio" name="budget_individual" value="supplier" <?php echo ((isset($basics_data->individuals_input) && $basics_data->individuals_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="budget_individual" value="customer" <?php echo ((isset($basics_data->individuals_input) && $basics_data->individuals_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Small and medium businesses</td>
							  <td><input  type="radio" name="sme" value="supplier" <?php echo ((isset($basics_data->sme_business_input) && $basics_data->sme_business_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="sme" value="customer" <?php echo ((isset($basics_data->sme_business_input) && $basics_data->sme_business_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Enterprise</td>
							  <td><input  type="radio" name="enterprise" value="supplier" <?php echo ((isset($basics_data->enterprise_input) && $basics_data->enterprise_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="enterprise" value="customer" <?php echo ((isset($basics_data->enterprise_input) && $basics_data->enterprise_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Governments</td>
							  <td><input  type="radio" name="governments" value="supplier" <?php echo ((isset($basics_data->governments_input) && $basics_data->governments_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="governments" value="customer" <?php echo ((isset($basics_data->governments_input) && $basics_data->governments_input == "customer")?'checked':'');?>></td>
							   </tr>
							 </tbody>
							</table>
						 </div><!-- End col-md-12-->
					   </div>
					   <?php
						}
					   ?>
					  
					</div>
				  </div>
				  
				  
				  <div class="col-md-12 text-right" style="padding:10px;margin-top:-40px;">
						  <button name="save_return" type="submit" value="return" class="btn btn-warning btn-medium logout">Save and Return</button>
						
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium continue">Save and Continue</button>
						  <input type="hidden" id="btn_val" name="sub_val" value="">
					</div>
				  
				  
				  </form>
				<?php
					}else{
				?>
					<div style="" class="another">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
								</div>
							</div>
						</div>
				<?php
				  }
				?>
				</div>
<!-----------------------------------------------------------Step 2---------------------------------------------------------------------------------->
					<div class="tab-pane" id="profile"></div>
<!-----------------------------------------------------------Step 3---------------------------------------------------------------------------------->
					<div class="tab-pane" id="messages"></div>
<!-----------------------------------------------------------------------Step 4---------------------------------------------------------------------->
					<div class="tab-pane" id="settings"></div>

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
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	

<script>
$(function() {
  $("form[name='questionaire']").validate({
    rules: {
      industry: "required",
      employees: "required",
	  located : "required",
	  location_business : "required",
	  supply_chain_handle_data : "required",
	  budget_individual : "required",
	  sme : "required",
	  enterprise : "required",
	  governments : "required",
	  handle_data : "required",
      manage_it : "required",
    },
    messages: {
      industry: "This field is required",
      employees: "This field is required",
	  located : "This field is required",
	  location_business : "This field is required",
	  supply_chain_handle_data : "This field is required",
	  budget_individual : "This field is required",
	  sme : "This field is required",
	  enterprise : "This field is required",
	  governments : "This field is required",
	  handle_data : "This field is required",
	  manage_it : "This field is required",
      
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});	
</script>
<SCRIPT> 	
	function show(select_item) {
	    if (select_item == "3rd party located in same building / facilities managed") {
		    hiddenDiv.style.visibility='visible';
			hiddenDiv.style.display='block';
			Form.fileURL.focus();
		} 
		else{
			hiddenDiv.style.visibility='hidden';
			hiddenDiv.style.display='none';
		}
	}	
</SCRIPT> 


	 <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   

			$( ".continue" ).click(function() {
			  $('#btn_val').val('continue');
			});
			$( ".logout" ).click(function() {
			  $('#btn_val').val('logout');
			});
		});
	</script>

	<script>
		var header = document.getElementById("myDIV");
		var btns = header.getElementsByClassName("arrow");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
			var current = document.getElementsByClassName("arrow1");
			current[0].className = current[0].className.replace(" arrow1", "");
			this.className += " arrow1";
		  });
		}
	</script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
