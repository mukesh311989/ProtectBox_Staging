<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Results | ProtectBox
    </title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
     <style>
		.tooltiplink + .tooltip > .tooltip-inner {
			background-color: #73AD21; 
			color: #FFFFFF; 
			border: 1px solid green;
			padding: 15px;
			font-size: 20px;
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
      .custom-button {
        padding: 12px 25px 8px 25px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        background: none;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        border-radius: 0;
      }
      .custom-button.orange {
        color: #eb8b10;
        border: 3px solid #eb8b10;
      }
      .custom-button.green {
        color: #84c72a;
        border: 3px solid #84c72a;
      }
      .stripe_btn {
        color: #708299;
        background-color: #EAF1F8;
        font-weight: bold;
      }
      .stripe_btn:hover {
        color: #708299;
        background-color: #EAF1F8;
        font-weight: bold;
      }
      .rounded_div {
        border:1px solid #CCC;
        box-shadow: 0px 0px 3px #bfbfbf;
        border-radius:5px;
      }
      label{
        font-weight:normal !important;
      }
      .preferd
      {
        text-align:center;
        font-size:18px !important;
      }
      .note
      {
        border-radius:5px;
        text-transform: capitalize;
        color: #eb8b10;
        border:3px solid #EC8B0E;
        padding:10px;
        margin-bottom:20px;
        font-weight:bold;
        font-size:15px;
      }
      .c_names
      {
        margin: 0 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 1.2em;
        font-weight: 600;
        border-bottom: 1px solid #dca7a7;
        color:#010101
      }
      .main_image
      {
        height:40px;
        margin: 0 15px 30px 0;
      }
      .price
      {
        margin: 0 0 15px 0;
        font-weight: 600;
        font-size: 2em;
        color:#010101;
      }
      .details
      {
        margin: 0 0 5px 0;
        font-size: 1.2em;
        color:#010101;
        line-height: 1.4;
      }
      .trust_pilot
      {
        max-width: 150px;
        margin: 5px 0 0 0;
      }
      .what
      {
        min-height: 170px;
      }
      .space
      {
        padding:15px;
        margin-top:15px;
        margin-bottom:15px;
      }
	  .more_info
	  {
			font-weight: 500;font-size: 1em;text-transform: uppercase;cursor: pointer;text-align:center;
	  }
	  .certified
	  {
		box-sizing: border-box;margin-top:70px;background:#f5f5f5;border:1px solid #CCC;border-radius:7px;padding:15px
	  }
    </style>
	<link rel="stylesheet" href="<?php echo base_url();?>css/rangeslider.css">
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
          Results
        </div>
      </div>
    </section>
    <!-- End section -->
    <div class="col-md-12" style="padding:20px;background:#e6e7e9;">
      <div class="container">
	   <form method="POST" action="<?php echo base_url('results');?>">
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" style="">Preferred Suppliers
            </label>
            <div class="col-md-12">
              <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" name="preferred_suppliers[]">
                <?php 
                  foreach($suppliers_data AS $preferred_supplier){
                ?>
                <option value="<?php echo $preferred_supplier->user_id;?>"><?php echo $preferred_supplier->company_name;?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
        </div>
        <?php 
		  $a = array();
		  foreach($location_data AS $locat){
			  $a[] = $locat->location;
		  }
		  $unique = array_unique($a);
		  
		?>
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Preferred Locations</label>
            <div class="col-md-12">
              <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" name="included_location[]">
               <?php 
                  foreach($unique AS $prefered_loaction){
                ?>
                <option value="<?php echo $prefered_loaction;?>"><?php echo $prefered_loaction;?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
        </div><div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Price & Payment Options
            </label>
            <div class="col-md-12">
              <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" name="payment_option[]">
                <option value="Monthly">Monthly</option>
        				<option value="Quarterly">Quarterly</option>
        				<option value="Yearly">Yearly</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
          <button name="update_results" value="update_result" type="submit" name="update" class="btn_1 medium pull-right" style="width:100%;margin-top:25px;">Update Results</button>
        </div>
		</form>
      </div>
    </div>
    <main>    
      <div class="container " style="margin-top:120px;">
        <div class="row">
          <div class="col-md-4">
		  <div class="box_style_1 hidden-xs rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 20px;position: fixed;width: 360px;">
			<div class="row">
				<div class="col-md-12">
					<h5 style="color:#73859B;">Budget(Total)&nbsp;&nbsp;<span class="budget"><span></h5>
					<input type="range" value="0" id="myRange" data-rangeslider>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<h4 style="color:#73859B;">Technical</h4>
				</div>
			</div> -->

			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Antivirus&nbsp;&nbsp;<span class="antivirus"><span></h5>
					<input type="range" value="0" id="antirange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Operating System&nbsp;&nbsp;<span class="os"><span></h5>
					<input type="range" value="0" id="osange" data-rangeslider>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Firewall&nbsp;&nbsp;<span class="firewall"><span></h5>
					<input type="range" value="0" id="firerange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Internet&nbsp;&nbsp;<span class="internet"><span></h5>
					<input type="range" value="0" id="internetrange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Access control&nbsp;&nbsp;<span class="access"><span></h5>
					<input type="range" value="0" id="accessrange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Data protection&nbsp;&nbsp;<span class="protect"><span></h5>
					<input type="range" value="0" id="protectrange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h5 style="color:#73859B;">Managed Service Solution Provider&nbsp;&nbsp;<span class="service"><span></h5>
					<input type="range" value="0" id="serviceRange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Business continuity&nbsp;&nbsp;<span class="business"><span></h5>
					<input type="range" value="0" id="businessrange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Password policy&nbsp;&nbsp;<span class="password"><span></h5>
					<input type="range" value="0" id="passwordrange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Accreditation regulation&nbsp;&nbsp;<span class="accreditation"><span></h5>
					<input type="range" value="0" id="accreditationrange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Devices&nbsp;&nbsp;<span class="devices"><span></h5>
					<input type="range" value="0" id="devicesrange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Training&nbsp;&nbsp;<span class="training"><span></h5>
					<input type="range" value="0" id="trainingrange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Remote working&nbsp;&nbsp;<span class="remote"><span></h5>
					<input type="range" value="0" id="remoterange" data-rangeslider>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h5 style="color:#73859B;">Reputation manage&nbsp;&nbsp;<span class="reputation"><span></h5>
					<input type="range" value="0" id="reputationrange" data-rangeslider>
				</div>
				<div class="col-md-6">
					<h5 style="color:#73859B;">Consultancy&nbsp;&nbsp;<span class="consultancy"><span></h5>
					<input type="range" value="0" id="consultancyrange" data-rangeslider>
				</div>
			</div>
		   </div>               
		 </div>
          <div class="col-md-8">
            <div class="col-md-12 note" style="" href="javascript:void(0);">
              <strong>NOTE:</strong>  Results presented are not accurate, for display purposes only. Only the 'Included Solutions' filter is currently functional. 'Sort' option is functional.
            </div>
<!----------------------------------- first bound ------------------------------------------>
		<?php 
		  if(is_array($results_data) && count($results_data) > 0){
		  foreach($results_data AS $result){
			
			if($result->status != '0'){
	
		?>
            <div class="col-md-12 rounded_div space">	
              <div class="col-md-8">
			  <?php
				$fresh_cat = array();
				$get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level);
				foreach($get_all_service_names AS $all_services){
					foreach($sorting_data As $key=>$cat_score){
						  if(array_key_exists($all_services->product_category, $sorting_data)){
								  $fresh_cat[] = $all_services->product_category;
						  }
					}
				}
				foreach(array_unique($fresh_cat) as $combined_category){
			  ?>
                <div class="col-md-6 what">
                  <div class="c_names" class="c_names"><?php echo $combined_category?></div>
					<?php
					  $servicesz = $this->results_m->fetch_results_services($combined_category,$result->user_id);
					  $p_array = array();
					  foreach($servicesz as $product_price){
							$p_array[] = $product_price->price_detail;
					  }
					  $total_price = array_sum($p_array);
					   if(count($servicesz) == 0){
						 $mean_price = 0;
					  }else{
						  $mean_price = $total_price/count($servicesz);
					  }
					  $price_array = array();
					  $commission_price = array();
					  $total_commission_price = array();
					  foreach($servicesz as $logos){
						/*if($logos->price_detail <= $mean_price){*/
						  if($logos->payment_option == "Monthly"){
								$price_array[] = ($logos->price_detail * 12);
								$commission_price[] = ($logos->price_detail * 12)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Yearly"){
								$price_array[] = ($logos->price_detail * 1);
								$commission_price[] = ($logos->price_detail * 1)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Quarterly"){
								$price_array[] = ($logos->price_detail * 4);
								$commission_price[] = ($logos->price_detail * 4)*($logos->commission_detail/100);
							}
				  ?>
					 <img src="<?php echo base_url();?>uploads/<?php echo $logos->logo;?>" class="main_image" style="height:20px;">
					 <!--<input type="text" value="<?php echo $logos->supplier_service_id;?>">-->
				  <?php
					/*}*/
				  }
				  ?>
                </div>
				<?php
					}
				?>
              </div>
				<?php
					$fresh_cat = array();
					$get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level);
					foreach($get_all_service_names AS $all_services){
						foreach($sorting_data As $key=>$cat_score){
							  if(array_key_exists($all_services->product_category, $sorting_data)){
									  $fresh_cat[] = $all_services->product_category;
							  }
						}
					}
					foreach(array_unique($fresh_cat) as $combined_category){
			
					  $servicesz = $this->results_m->fetch_results_services($combined_category,$result->user_id);
					  $p_array = array();
					  foreach($servicesz as $product_price){
							$p_array[] = $product_price->price_detail;
					  }
					  $total_price = array_sum($p_array);
					   if(count($servicesz) == 0){
						 $mean_price = 0;
					  }else{
						  $mean_price = $total_price/count($servicesz);
					  }
					  $price_array = array();
					  $commission_price = array();
					  $total_commission_price = array();
					  foreach($servicesz as $logos){
						/*if($logos->price_detail <= $mean_price){*/
						  if($logos->payment_option == "Monthly"){
								$price_array[] = ($logos->price_detail * 12);
								$commission_price[] = ($logos->price_detail * 12)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Yearly"){
								$price_array[] = ($logos->price_detail * 1);
								$commission_price[] = ($logos->price_detail * 1)*($logos->commission_detail/100);
							}
						  else if($logos->payment_option == "Quarterly"){
								$price_array[] = ($logos->price_detail * 4);
								$commission_price[] = ($logos->price_detail * 4)*($logos->commission_detail/100);
							}
						}
					}
						$total_price = array_sum($price_array);
						$total_commision_price = array_sum($commission_price);
						$total_payable_bundle_cost = $total_commision_price + $total_price;

				  ?>

			  <div class="col-md-4">
				<div style="" class="price"><?php echo $result->currency?>&nbsp;<?php echo $total_payable_bundle_cost;?>/year</div>
				<div class="details">
				  <strong>Payment option:</strong> <?php echo "Yearly";?>
				  <!--<input type="text" value="<?php echo $result->supplier_service_id;?>">-->
				</div>
                <div style="box-sizing: border-box;margin-top:25px;">
				  <img src="<?php echo base_url();?>images/trustpilot.png" class="trust_pilot">
				  <img src="<?php echo base_url();?>images/reviews-four-stars.png" class="trust_pilot">
				</div>
                <div class="col-md-12" style="margin-top:15px;">
					<div class="col-md-6 col-sm-6 col-xs-6" >
						<a href="<?php echo base_url('payment_process');?>/<?php echo $result->supplier_service_id;?>" class="btn_1 medium pull-right" >Select</a>
					</div>
				
					<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top:10px;">
						<span class="more_info" style="">More info
						</span>
					</div>
					<div class="clearfix"></div>
                </div>
	
				 <?php
					
						if($result->regulation != 'Please select'){
				 ?>
				 <div class="certified">
				<?php
				   $fresh_cat = array();
					$get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level);
					foreach($get_all_service_names AS $all_services){
						foreach($sorting_data As $key=>$cat_score){
							  if(array_key_exists($all_services->product_category, $sorting_data)){
									  $fresh_cat[] = $all_services->product_category;
							  }
						}
					}
					$regulation_array = array();
					foreach(array_unique($fresh_cat) as $combined_category){
					  $servicesz = $this->results_m->fetch_results_services($combined_category,$result->user_id);
					  foreach($servicesz as $regulations){
						$regulation_array[] = $regulations->regulation;
					  }
					  foreach($servicesz as $key => $logos){
					  }
					}
					 foreach(array_unique($regulation_array) as $key=> $each_regulation){
					?>
					<?php	
						if($each_regulation == 'FSMA/NIST'){
					?>
						<img src="<?php echo base_url();?>images/fizma.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Federal Information Systems Management Act, or FISMA, requires U.S. federal government agencies comply with several standards, including NIST (National Institute for Standards and Technologies) Special Publication 800‐53, and FIPS (Federal Information Processing Standards) Publication 200.NIST 800-53, is a highly recognized and respected framework of security controls for both government and private organizations. It’s published by the National Institute for Standards and Technology (NIST), a branch of the U.S. Department of Commerce and a nonregulatory federal agency whose goal is to promote innovation and United States competitiveness by advancing standards, measurement science, and technology. All agencies of the U.S. federal government are required to comply with NIST SP 800‐53 understand cloud computing. NIST’s Small Business Information Security: The Fundamentals guide walks users through a simple risk assessment to understand their vulnerabilities. Worksheets help them too. Or an external consultant can help assess and implement.
						Many nongovernment organizations voluntarily comply with the NIST and FIPS standards, because they recognize their value.The certification part is the assessment of the system against NIST 800‐53, FIPS‐200, and possibly other standards and requirements. The accreditation part is the formal authorization to use the system after the assessment has been completed and analyzed." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'ISO/IEC 27000-series'){ 
					?>
						<img src="<?php echo base_url();?>images/iso.png" style="border:1px solid #CCC;text-align:center;height:40px;">&nbsp;<a data-container="body" title="ISO/IEC 27000-series (also known as the 'ISMS Family of Standards' or 'ISO27k' for short) are a highly respected series of international standard deliberately broad in scope, covering more than just privacy, confidentiality and IT/technical/cybersecurity issues. It is applicable to organizations of all shapes and sizes. Companies can either do it themselves using the ISO/IEC standards which are sold directly by ISO, mostly in English and French. Sales outlets associated with various national standards bodies also sell directly translated versions in other languages. A single user copy of the ISO 27001 standard costs nearly $300. Other ways include getting an outside expert. A higher‐quality external audit can also be done. ISO 27001 certification is generally more costly than an external audit but may be required in some circumstances." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'CyberEssentials'){
					?>
						<img src="<?php echo base_url();?>images/cyberessentials.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Cyber Essentials is a UK government-backed, industry supported scheme to help organisations protect themselves against common cyber attacks. Since October 2014 Cyber Essentials has been mandatory for suppliers of UK Government contracts which involve handling personal information and providing some ICT products and services. Holding a Cyber Essentials badge enables you to bid for these contracts. The Cyber Essentials documents are FREE to download and any organisation can use them to put essential security controls in place. However, applying for a Cyber Essentials certificate will provide independent assurance that you have the protections correctly in place. You will also be able to display the Cyber Essentials badge to demonstrate that you meet a Government-endorsed standard. There are two levels of badges that your organisation can apply for: Cyber Essentials requires the organisation to complete a self-assessment questionnaire, with responses independently reviewed by an external certifying body. Cyber Essentials Plus covers the same requirements as Cyber Essentials but tests of the systems are carried out by an external certifying body, using a range of tools and techniques. See also www.cyberaware.gov.uk/cyberessentials" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'General Data Protection regulation (GDPR)'){
					?>
					<img src="<?php echo base_url();?>images/gdpr.jpg" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Cyber Essentials is a UK government-backed, industry supported scheme to help organisations protect themselves against common cyber attacks. Since October 2014 Cyber Essentials has been mandatory for suppliers of UK Government contracts which involve handling personal information and providing some ICT products and services. Holding a Cyber Essentials badge enables you to bid for these contracts. The Cyber Essentials documents are FREE to download and any organisation can use them to put essential security controls in place. However, applying for a Cyber Essentials certificate will provide independent assurance that you have the protections correctly in place. You will also be able to display the Cyber Essentials badge to demonstrate that you meet a Government-endorsed standard. There are two levels of badges that your organisation can apply for: Cyber Essentials requires the organisation to complete a self-assessment questionnaire, with responses independently reviewed by an external certifying body. Cyber Essentials Plus covers the same requirements as Cyber Essentials but tests of the systems are carried out by an external certifying body, using a range of tools and techniques. See also www.cyberaware.gov.uk/cyberessentials" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'Control Objectives for Information and Related Technology (COBIT)'){
					?>
					<img src="<?php echo base_url();?>images/cobit.jpg" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Cyber Essentials is a UK government-backed, industry supported scheme to help organisations protect themselves against common cyber attacks. Since October 2014 Cyber Essentials has been mandatory for suppliers of UK Government contracts which involve handling personal information and providing some ICT products and services. Holding a Cyber Essentials badge enables you to bid for these contracts. The Cyber Essentials documents are FREE to download and any organisation can use them to put essential security controls in place. However, applying for a Cyber Essentials certificate will provide independent assurance that you have the protections correctly in place. You will also be able to display the Cyber Essentials badge to demonstrate that you meet a Government-endorsed standard. There are two levels of badges that your organisation can apply for: Cyber Essentials requires the organisation to complete a self-assessment questionnaire, with responses independently reviewed by an external certifying body. Cyber Essentials Plus covers the same requirements as Cyber Essentials but tests of the systems are carried out by an external certifying body, using a range of tools and techniques. See also www.cyberaware.gov.uk/cyberessentials" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'PDPA (Singapore)'){
					?>
					<img src="<?php echo base_url();?>images/pdpa.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Cyber Essentials is a UK government-backed, industry supported scheme to help organisations protect themselves against common cyber attacks. Since October 2014 Cyber Essentials has been mandatory for suppliers of UK Government contracts which involve handling personal information and providing some ICT products and services. Holding a Cyber Essentials badge enables you to bid for these contracts. The Cyber Essentials documents are FREE to download and any organisation can use them to put essential security controls in place. However, applying for a Cyber Essentials certificate will provide independent assurance that you have the protections correctly in place. You will also be able to display the Cyber Essentials badge to demonstrate that you meet a Government-endorsed standard. There are two levels of badges that your organisation can apply for: Cyber Essentials requires the organisation to complete a self-assessment questionnaire, with responses independently reviewed by an external certifying body. Cyber Essentials Plus covers the same requirements as Cyber Essentials but tests of the systems are carried out by an external certifying body, using a range of tools and techniques. See also www.cyberaware.gov.uk/cyberessentials" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
						}
					 }
					?>
				</div>
				<?php
					}
				?>
              </div>
			  
            </div>
			<?php
					}
				}
			}else{
			?>
			<div class="col-md-12 rounded_div space" style="height:300px;"> 
                <div class="col-md-12 text-center c_names">Sorry, no bundle found. Please try again later...</div>
            </div>
            <?php
                  }
            ?>
<!----------------------------------- first bound ------------------------------------------
            <!-- End row -->
            <!--  Tabs -->   
          </div>
          <!-- End col-md-12-->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
     <script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

	<script src="<?php echo base_url();?>js/rangeslider.js"></script>

    <script>
    $(function() {

        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);

        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
			var new_val = $('#myRange').val();
            $('span.budget').text(new_val);

			var anti_val = $('#antirange').val();
            $('span.antivirus').text(anti_val);

			var osange = $('#osange').val();
            $('span.os').text(osange);

			var firerange = $('#firerange').val();
            $('span.firewall').text(firerange);

			var internetrange = $('#internetrange').val();
            $('span.internet').text(internetrange);

			var accessrange = $('#accessrange').val();
            $('span.access').text(accessrange);

			var protectrange = $('#protectrange').val();
            $('span.protect').text(protectrange);

			var serviceRange = $('#serviceRange').val();
            $('span.service').text(serviceRange);

			var businessrange = $('#businessrange').val();
            $('span.business').text(businessrange);

			var passwordrange = $('#passwordrange').val();
            $('span.password').text(passwordrange);

			var accreditationrange = $('#accreditationrange').val();
            $('span.accreditation').text(accreditationrange);

			var devicesrange = $('#devicesrange').val();
            $('span.devices').text(devicesrange);

			var trainingrange = $('#trainingrange').val();
            $('span.training').text(trainingrange);

			var remoterange = $('#remoterange').val();
            $('span.remote').text(remoterange);

			var reputationrange = $('#reputationrange').val();
            $('span.reputation').text(reputationrange);

			var consultancyrange = $('#consultancyrange').val();
            $('span.consultancy').text(consultancyrange);
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

	 

    <script type="text/javascript">
      $(document).ready(function() {
        $('.multiselect-ui').multiselect({
          onChange: function(option, checked) {
            // Get selected options.
            var selectedOptions = $('.multiselect-ui option:selected');
            if (selectedOptions.length >= 15) {
              // Disable all other checkboxes.
              var nonSelectedOptions = $('.multiselect-ui option').filter(function() {
                return !$(this).is(':selected');
              }
                                                                         );
              nonSelectedOptions.each(function() {
                var input = $('input[value="' + $(this).val() + '"]');
                input.prop('disabled', true);
                input.parent('li').addClass('disabled');
              }
                                     );
            }
            else {
              // Enable all checkboxes.
              $('.multiselect-ui option').each(function() {
                var input = $('input[value="' + $(this).val() + '"]');
                input.prop('disabled', false);
                input.parent('li').addClass('disabled');
              }
                                              );
            }
          }
        }
                                        );
      }
                       );
    </script>
	
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
