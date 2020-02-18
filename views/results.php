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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	

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
        font-size:18px !important;
      }
      .note
      {
        border-radius:5px;
        color: #eb8b10;
        border:3px solid #EC8B0E;
        padding:10px;
        margin-bottom:20px;
        font-weight:bold;
        font-size:17px;
      }
      .c_names
      {
        margin: 0 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 12px;
        font-weight: 600;
        border-bottom: 1px solid #dca7a7;
        color:#010101
      }
      .main_image
      {
        height:100px;
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

	  /* Style the tab */
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
		}
		/* range slider starts */
		.range-control {
		  padding:3px;
		}

		input[type=range]{
		  display: block;
		  width: 100%;
		  margin: 0;
		  -webkit-appearance: none;
		  outline: none;
		}

		input[type=range]::-webkit-slider-runnable-track {
		  position: relative;
		  height: 12px;
		  border: 1px solid #b2b2b2;
		  border-radius: 5px;
		  background-color: #e2e2e2;
		  box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, 0.1);
		}

		input[type=range]::-webkit-slider-thumb {
		  position: relative;
		  top: -5px;
		  width: 20px;
		  height: 20px;
		  border: 1px solid #999;
		  -webkit-appearance: none;
		  background-color: #fff;
		  box-shadow: inset 0 -1px 2px 0 rgba(0, 0, 0, 0.25);
		  border-radius: 100%;
		  cursor: pointer;
		}

		output {
		  position: absolute;
		  min-width:10px;
		  background-color: #fff;
		  border-radius: 7px;
		  color: #777;
		  font-size: .8em;
		  text-align: center;
		}

		input[type=range]:active + output {
		  display: block;
		  transform: translateX(-50%);
		}
		
		output:after {
		  position: absolute;
		  border-top: 10px solid #999999;
		  border-left: 5px solid transparent;
		  border-right: 5px solid transparent;
		  top: 100%;
		  left: 50%;
		  margin-left: -5px;
		  margin-top: -1px;
		}
		.range-control h6{
			margin-top:30px;
		}
		.hide_e{
			display:none !important;
		}
		/* range slider ends */

		/*Range color slider start*/
		.lft-wht{padding-right:0;}
			input[type='range'] {
			  -webkit-appearance: none;
			  background-color: #ddd;
			  height:15px;
			  overflow: hidden;
			  width: 100%;
			  border-radius: 20px;
			}

			input[type='range']::-webkit-slider-runnable-track {
			  -webkit-appearance: none;
			  height: 15px;
			  position: relative;
			  top:0;
			}

			input[type='range']::-webkit-slider-thumb {
			  -webkit-appearance: none;
			  background: #eee;
			  border-radius: 50%;
			  box-shadow: -210px 0 0 200px #83C72A;
			  cursor: pointer;
			  height: 14px;
			  width: 14px;
			  border: solid 1px #ccc;
			  position: relative;
			  top:0;
			}

			input[type='range']::-moz-range-thumb {
			  background: #eee;
			  border-radius: 50%;
			  box-shadow: -1010px 0 0 1000px #83C72A;
			  cursor: pointer;
			  height: 14px;
			  width: 14px;
			  border: solid 1px #ccc;
			  position: relative;
			  top:0;
			}

			input[type="range"]::-moz-range-track {
			  background-color: #ddd;
			}
			input[type="range"]::-moz-range-progress {
			  background-color: #83C72A;
			  height: 15px
			}
			input[type="range"]::-ms-fill-upper {
			  background-color: #ddd;
			}
			input[type="range"]::-ms-fill-lower {
			  background-color: #83C72A;
			  width: 100%;
			}
		/*Range color slider end*/
    </style>
	<link rel="stylesheet" href="<?php echo base_url();?>css/rangeslider.css">
  </head>
  <body>
    <div id="load"></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;z-index:1">
          Results
        </div>
      </div>
    </section>
    <!-- End section -->
	
    <div class="col-md-12" style="padding:20px;background:#e6e7e9;">
      <div class="container">
	   <form method="GET" action="<?php echo base_url('results/top_filter');?>">
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" style="">Suppliers <a data-container="body" title="Click items shown below to ONLY include them in the Results." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label> 
			
            <div class="col-md-12">
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" multiple="multiple" name="suppliers[]" data-dropup-auto="false">
                <?php
				    if(!empty($unique_supp)){
					foreach($unique_supp AS $result){
					  if($result != NUll){
						if(!empty($this->session->userdata['top_filter']['session_suppliers'])){
							$preferred_suppliers = $this->session->userdata['top_filter']['session_suppliers'];
						}else if(!empty($top_filter_supplier)){
							$preferred_suppliers = $top_filter_supplier;
						}else{
							$preferred_suppliers = array();
						}
                ?>
					<option value="<?php echo $result;?>" <?php echo (in_array($result,$preferred_suppliers)?'selected':'')?> ><?php echo ucfirst($result);?></option>
                <?php
						}
					  }
					}
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Solutions <a data-container="body" title="Click items shown below to ONLY include them in the Results." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
            <div class="col-md-12">
			<select id="dates-field2" class="selectpicker form-control" data-live-search="true" multiple="multiple" name="solution[]" data-dropup-auto="false">
                <?php
					if(!empty($unique_supplier_category)){
					foreach($unique_supplier_category as $combined_category){
						if($combined_category != NUll){
							
							if(!empty($this->session->userdata['top_filter']['session_solution'])){
								$included_solution = $this->session->userdata['top_filter']['session_solution'];
							}else if(!empty($sidebar_json->top_filter_solution)){
								$included_solution = $sidebar_json->top_filter_solution;
							}else{
								$included_solution = array();
							}
					?>
							<option value="<?php echo $combined_category;?>" <?php echo (in_array($combined_category,$included_solution)?'selected':'')?>><?php echo ucfirst($combined_category);?></option>
					<?php
						  }
						}
					  }
					?>
              </select>
            </div> 
          </div>
        </div>
		
        <div class="col-md-3" style="">
          <div class="form-group">
            <label class="col-md-12 control-label preferd" for="rolename" >Price
			<a data-container="body" title="Click items shown below to ONLY include them in the Results." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
            </label>
            <div class="col-md-12">
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" name="price_range" data-dropup-auto="false">
				<option value="">Nothing selected</option>
				<?php
					if(!empty($all_price_range)){
						if(!empty($this->session->userdata['top_filter']['session_price_range_top'])){
							$top_price_range = $this->session->userdata['top_filter']['session_price_range_top'];
						}else if(!empty($top_filter_price_range)){
							$top_price_range = $top_filter_price_range;
						}else if(empty($this->session->userdata['top_filter']['session_price_range_top']) && empty($top_filter_price_range)){
							$top_price_range = "";
						}

					 foreach($all_price_range as $each_price_range){
						if($each_price_range != Null){
				?>
						<option value="<?php echo $each_price_range;?>" <?php echo (($each_price_range == $top_price_range)?'selected':'')?>><?php echo ucfirst($currencyCode);?>&nbsp;<?php echo $each_price_range;?></option>
				<?php
						}
					}
				  }
				?>
              </select>

            </div>
          </div>
        </div>
        <div class="col-md-3" style="">
		  <button name="update_results" value="update_result" type="submit" class="btn_1 medium pull-right" style="width:100%;margin-top:0px;border:1px solid #000;">Update Results</button>
		  <a name="update_results" class="btn_1 medium pull-right" style="width:100%;background:#f5f5f5;border:1px solid #000;color:#000;padding:7px;width:100%;margin-top:5px;text-align:center;" href="<?php echo base_url('results/clear_filter');?>">Clear All Results</a>
        </div>
		</form>
      </div>
    </div>
    <main>    
    <div class="container " style="margin-top:120px;">
	  <div class="col-md-12 note">
	  	 Based on your answers, these are the BEST deals for you.<br>Click the product names/logos in the bundles (in boxes on right, below) to get more information on each product.<br>Click on filters (above) to change by brand, solution type or price.<br>Move sliders which are “Risk Scores” (in grey box on left, below) to change the level of protection you want. If you want an Anti-virus with a higher level of protection then move the slider to the right, to a higher number.<br>Don’t miss out on these deals that only we can offer you, BUY NOW IN 1-CLICK!
	  </div>

      <div class="row">
        <div class="col-md-4">
		  <div class="box_style_1  rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 10px;width: 360px;min-height:920px;">
			<form id="myform" action="<?php echo base_url('results/left_sidebar');?>" method="POST">
				<div class="row">
					<div class="pull-right" style="padding-right:20px;">
						<a href="<?php echo base_url('results/clear_sidebar');?>" class="btn_1 medium" style="background:#ccc;color:#fff;">Clear</a>
						<button name="update_results" value="update_result" type="submit" class="btn_1 medium">Update</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="range-control">
							<!--<input id="inputRange" type="range" min="100" max="250" step="5" value="200" data-thumbwidth="20">
							<output name="rangeVal">50</output>-->
						
						<?php
							if(isset($this->session->userdata['results']['session_price_range']) && $this->session->userdata['results']['session_price_range'] != NULL){
								$smb_budget_f = $this->session->userdata['results']['session_price_range'];
							}else if(!empty($sidebar_json->sidebar_price)){
								$smb_budget_f = $sidebar_json->sidebar_price;
							}else{
								$smb_budget_f = $smb_budget;
							}
						?>	
							<h6 style="color:#73859B;">Budget(Total in <?php echo $currencyCode;?>)&nbsp;&nbsp;<span class="budget"><?php echo (($smb_budget_f != NULL)?number_format($smb_budget_f,2):0);?></span></h6>
							<b class="pull-left"><?php echo number_format($min_budget,2);?></b><b class="pull-right"><?php echo number_format($max_budget,2);?></b>
							<input type="range" id="myRange" data-rangeslider  value="<?php echo (($smb_budget_f != NULL)?$smb_budget_f:0);?>" min="<?php echo $min_budget;?>" max="<?php echo $max_budget;?>" data-thumbwidth="20" name="budget">
							<output><?php echo $smb_budget_f;?></output>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<h4 style="color:#73859B;">Technical</h4>
					</div>
				</div> -->
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
					<?php
						if(isset($this->session->userdata['results']['session_antivirus']) && $this->session->userdata['results']['session_antivirus'] != NULL){
							$smb_antivirus_score_f = $this->session->userdata['results']['session_antivirus'];
						}else if(!empty($sidebar_json->sidebar_antivirus)){
							$smb_antivirus_score_f = $sidebar_json->sidebar_antivirus;
						}else{
							$smb_antivirus_score_f = (($smb_antivirus_score != NULL)?$smb_antivirus_score:0)*10;
						}
					?>
						<h6 style="color:#73859B;">Antivirus&nbsp;<a data-container="body" title="Software designed to detect and destroy computer viruses." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="antivirus"><?php echo '('.$smb_antivirus_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>

						<input type="range" value="<?php echo (($smb_antivirus_score_f != NULL)?$smb_antivirus_score_f:0);?>" min="0" max="10" id="antirange" data-rangeslider data-thumbwidth="20" name="antivirus"><output><?php echo $smb_antivirus_score_f;?></output>
					
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_opt_system']) && $this->session->userdata['results']['session_opt_system'] != NULL){
								$smb_os_score_f = $this->session->userdata['results']['session_opt_system'];
							}else if(!empty($sidebar_json->sidebar_operating_system)){
								$smb_os_score_f = $sidebar_json->sidebar_operating_system;
							}else{
								$smb_os_score_f = (($smb_os_score != NULL)?$smb_os_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Operating System&nbsp;<a data-container="body" title="Windows, Mac, Linux etc." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="os"><?php echo '('.$smb_os_score_f.')';?></span></h6>
							<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_os_score_f != NULL)?$smb_os_score_f:0);?>" min="0" max="10" id="osange" data-rangeslider data-thumbwidth="20" name="opt_system">
							<output><?php echo $smb_os_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
					<?php
						if(isset($this->session->userdata['results']['session_firewall']) && $this->session->userdata['results']['session_firewall'] != NULL){
							$smb_firewall_score_f = $this->session->userdata['results']['session_firewall'];
						}else if(!empty($sidebar_json->sidebar_firewall)){
							$smb_firewall_score_f = $sidebar_json->sidebar_firewall;
						}else{
							$smb_firewall_score_f = (($smb_firewall_score != NULL)?$smb_firewall_score:0)*10;
						}	
					?>
						<h6 style="color:#73859B;">Firewall&nbsp;<a data-container="body" title="Monitors and controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="firewall"><?php echo '('.$smb_firewall_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>

						<input type="range" value="<?php echo (($smb_firewall_score_f != NULL)?$smb_firewall_score_f:0);?>" min="0" max="10" id="firerange" data-rangeslider data-thumbwidth="20" name="firewall"><output><?php echo $smb_firewall_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_internet']) && $this->session->userdata['results']['session_internet'] != NULL){
								$smb_internet_score_f = $this->session->userdata['results']['session_internet'];
							}else if(!empty($sidebar_json->sidebar_internet)){
								$smb_internet_score_f = $sidebar_json->sidebar_internet;
							}else{
								$smb_internet_score_f = (($smb_internet_score != NULL)?$smb_internet_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Internet&nbsp;<a data-container="body" title="WiFi/LAN, spam filtering and ad-blocking. A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area. Spam filtering detects unwanted and unsolicited emails and stops from arriving. Ad blocking prevents advertisements from appearing on a webpage. " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="internet"><?php echo '('.$smb_internet_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_internet_score_f != NULL)?$smb_internet_score_f:0);?>" min="0" max="10" id="internetrange" data-rangeslider data-thumbwidth="20" name="internet"><output><?php echo $smb_internet_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_access_control']) && $this->session->userdata['results']['session_access_control'] != NULL){
								$smb_system_access_score_f = $this->session->userdata['results']['session_access_control'];
							}else if(!empty($sidebar_json->sidebar_access_control)){
								$smb_system_access_score_f = $sidebar_json->sidebar_access_control;
							}else{
								$smb_system_access_score_f = (($smb_system_access_score != NULL)?$smb_system_access_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Access control&nbsp;<a data-container="body" title="Data encryption (need secret key to decrypt data to read it), Tiered user access (administrator, editor), Two factor authentication, Updating software, Activity Logs and Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="access"><?php echo '('.$smb_system_access_score_f.')';?></span></h6>
							<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_system_access_score_f != NULL)?$smb_system_access_score_f:0);?>" min="0" max="10" id="accessrange" data-rangeslider data-thumbwidth="20" name="access_control"><output><?php echo $smb_system_access_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_data_protection']) && $this->session->userdata['results']['session_data_protection'] != NULL){
								$smb_data_encrypt_score_f = $this->session->userdata['results']['session_data_protection'];
							}else if(!empty($sidebar_json->sidebar_data_protection)){
								$smb_data_encrypt_score_f = $sidebar_json->sidebar_data_protection;
							}else{
								$smb_data_encrypt_score_f = (($smb_data_encrypt_score != NULL)?$smb_data_encrypt_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Data&nbsp;<a data-container="body" title="Email security keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise. Plus enhanced data encryption or public key infrastructure (PKI) that manages digital signatures or wi-fi certificates for processes such as e-commerce, internet banking and confidential information amongst others." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="protect"><?php echo '('.$smb_data_encrypt_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>
							
							<input type="range" value="<?php echo (($smb_data_encrypt_score_f != NULL)?$smb_data_encrypt_score_f:0);?>" min="0" max="10" id="protectrange" data-rangeslider data-thumbwidth="20" name="data_protection"><output><?php echo $smb_data_encrypt_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_managed_service']) && $this->session->userdata['results']['session_managed_service'] != NULL){
								$smb_msp_score_f = $this->session->userdata['results']['session_managed_service'];
							}else if(!empty($sidebar_json->sidebar_managed_service)){
								$smb_msp_score_f = $sidebar_json->sidebar_managed_service;
							}else{
								$smb_msp_score_f = (($smb_msp_score != NULL)?$smb_msp_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Managed Service Solution Provider&nbsp;<a data-container="body" title=" Company that remotely manages their customer’s IT infrastructure and systems, as an all-in-one service." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="servicezzz"><?php echo '('.$smb_msp_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_msp_score_f != NULL)?$smb_msp_score_f:0);?>" min="0" max="10" id="serviceRange" data-rangeslider data-thumbwidth="20" name="managed_service"><output><?php echo $smb_msp_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_business_continuity']) && $this->session->userdata['results']['session_business_continuity'] != NULL){
								$smb_business_continuity_plan_score_f = $this->session->userdata['results']['session_business_continuity'];
							}else if(!empty($sidebar_json->sidebar_business_continuity)){
								$smb_business_continuity_plan_score_f = $sidebar_json->sidebar_business_continuity;
							}else{
								$smb_business_continuity_plan_score_f = (($smb_business_continuity_plan_score != NULL)?$smb_business_continuity_plan_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Business continuity&nbsp;<a data-container="body" title="Management plan to continue doing business in case of attack " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="business"><?php echo '('.$smb_business_continuity_plan_score_f.')';?></span></h6>
							<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_business_continuity_plan_score_f != NULL)?$smb_business_continuity_plan_score_f:0);?>" min="0" max="10" id="businessrange" data-rangeslider data-thumbwidth="20" name="business_continuity"><output><?php echo $smb_business_continuity_plan_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
					
					<?php
						if(isset($this->session->userdata['results']['session_password_policy']) && $this->session->userdata['results']['session_password_policy'] != NULL){
							$smb_password_rules_score_f = $this->session->userdata['results']['session_password_policy'];
						}else if(!empty($sidebar_json->sidebar_password_policy)){
							$smb_password_rules_score_f = $sidebar_json->sidebar_password_policy;
						}else{
							$smb_password_rules_score_f = (($smb_password_rules_score != NULL)?$smb_password_rules_score:0)*10;
						}
					?>
						<h6 style="color:#73859B;">Password policy&nbsp;&nbsp;&nbsp;<span class="password"><?php echo '('.$smb_password_rules_score_f.')';?></span></h6>
						<b class="pull-left">0</b><b class="pull-right">10</b>

						<input type="range" value="<?php echo (($smb_password_rules_score_f != NULL)?$smb_password_rules_score_f:0);?>" min="0" max="10" id="passwordrange" data-rangeslider data-thumbwidth="20" name="password_policy"><output><?php echo $smb_password_rules_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_accreditation_regulation']) && $this->session->userdata['results']['session_accreditation_regulation'] != NULL){
								$smb_aware_information_security_standard_score_f = $this->session->userdata['results']['session_accreditation_regulation'];
							}else if(!empty($sidebar_json->sidebar_accreditation_regulation)){
								$smb_aware_information_security_standard_score_f = $sidebar_json->sidebar_accreditation_regulation;
							}else{
								$smb_aware_information_security_standard_score_f = (($smb_aware_information_security_standard_score != NULL)?$smb_aware_information_security_standard_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Accreditation&nbsp; <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="accreditation"><?php echo '('.$smb_aware_information_security_standard_score_f.')';?></span></h6>
							<b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_aware_information_security_standard_score_f != NULL)?$smb_aware_information_security_standard_score_f:0);?>" min="0" max="10" id="accreditationrange" data-rangeslider data-thumbwidth="20" name="accreditation_regulation"><output><?php echo $smb_aware_information_security_standard_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_device']) && $this->session->userdata['results']['session_device'] != NULL){
								$smb_device_to_employees_score_f = $this->session->userdata['results']['session_device'];
							}else if(!empty($sidebar_json->sidebar_device)){
								$smb_device_to_employees_score_f = $sidebar_json->sidebar_device;
							}else{
								$smb_device_to_employees_score_f = (($smb_device_to_employees_score != NULL)?$smb_device_to_employees_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Devices&nbsp;<a data-container="body" title="Device management solutions  that keep mobiles, laptops, tablets or combinations of these devices, safe." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="devices"><?php echo '('.$smb_device_to_employees_score_f.')';?></span></h6><b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_device_to_employees_score_f != NULL)?$smb_device_to_employees_score_f:0);?>" min="0" max="10" id="devicesrange" data-rangeslider data-thumbwidth="20" name="device"><output><?php echo $smb_device_to_employees_score_f;?></output>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_training']) && $this->session->userdata['results']['session_training'] != NULL){
								$smb_training_cybersecurity_score_f = $this->session->userdata['results']['session_training'];
							}else if(!empty($sidebar_json->sidebar_training)){
								$smb_training_cybersecurity_score_f = $sidebar_json->sidebar_training;
							}else{
								$smb_training_cybersecurity_score_f = (($smb_training_cybersecurity_score != NULL)?$smb_training_cybersecurity_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Training&nbsp;<a data-container="body" title="Cybersecurity and Physical security training for your management and staff." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="training"><?php echo '('.$smb_training_cybersecurity_score_f.')';?></span></h6><b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_training_cybersecurity_score_f != NULL)?$smb_training_cybersecurity_score_f:0);?>" min="0" max="10" id="trainingrange" data-rangeslider data-thumbwidth="20" name="training"><output><?php echo $smb_training_cybersecurity_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
					
					<?php
						if(isset($this->session->userdata['results']['session_remote_working']) && $this->session->userdata['results']['session_remote_working'] != NULL){
							$smb_employees_use_remotely_score_f = $this->session->userdata['results']['session_remote_working'];
						}else if(!empty($sidebar_json->sidebar_remote_working)){
							$smb_employees_use_remotely_score_f = $sidebar_json->sidebar_remote_working;
						}else{
							$smb_employees_use_remotely_score_f = (($smb_employees_use_remotely_score != NULL)?$smb_employees_use_remotely_score:0)*10;
						}
					?>
						<h6 style="color:#73859B;">Remote working&nbsp;<a data-container="body" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="remote"><?php echo '('.$smb_employees_use_remotely_score_f.')';?></span></h6><b class="pull-left">0</b><b class="pull-right">10</b>

						<input type="range" value="<?php echo (($smb_employees_use_remotely_score_f != NULL)?$smb_employees_use_remotely_score_f:0);?>" min="0" max="10" id="remoterange" data-rangeslider data-thumbwidth="20" name="remote_working"><output><?php echo $smb_employees_use_remotely_score_f;?></output>
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 lft-wht">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_reputation_manage']) && $this->session->userdata['results']['session_reputation_manage'] != NULL){
								$smb_member_cisp_score_f = $this->session->userdata['results']['session_reputation_manage'];
							}else if(!empty($sidebar_json->sidebar_reputation_manage)){
								$smb_member_cisp_score_f = $sidebar_json->sidebar_reputation_manage;
							}else{
								$smb_member_cisp_score_f = (($smb_reputation_mgmt != NULL)?$smb_reputation_mgmt:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Reputation manage&nbsp;<a data-container="body" title="Cybersecurity Insurance, Cyber Security Information Sharing Partnership (CiSP), Threat Detection / Prevention and Data Storage." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="reputation"><?php echo '('.$smb_member_cisp_score_f.')';?></span></h6><b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_member_cisp_score_f != NULL)?$smb_member_cisp_score_f:0);?>" min="0" max="10" id="reputationrange" data-rangeslider data-thumbwidth="20" name="reputation_manage"><output><?php echo $smb_member_cisp_score_f;?></output>
					</div>
				</div>
				<div class="col-md-6">
					<div class="range-control">
						<?php
							if(isset($this->session->userdata['results']['session_consultancy']) && $this->session->userdata['results']['session_consultancy'] != NULL){
								$smb_cyber_consultant_score_f = $this->session->userdata['results']['session_consultancy'];
							}else if(!empty($sidebar_json->sidebar_consultancy)){
								$smb_cyber_consultant_score_f = $sidebar_json->sidebar_consultancy;
							}else{
								$smb_cyber_consultant_score_f = (($smb_cyber_consultant_score != NULL)?$smb_cyber_consultant_score:0)*10;
							}
						?>
							<h6 style="color:#73859B;">Consultancy&nbsp;<a data-container="body" title="Teams or individuals that can help with design and/or implementation of technology, people and processes. ProtectBox can find those to help you implement your chosen solutions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>&nbsp;&nbsp;<span class="consultancy"><?php echo '('.$smb_cyber_consultant_score_f.')';?></span></h6><b class="pull-left">0</b><b class="pull-right">10</b>

							<input type="range" value="<?php echo (($smb_cyber_consultant_score_f != NULL)?$smb_cyber_consultant_score_f:0);?>" min="0" max="10" id="consultancyrange" data-rangeslider data-thumbwidth="20" name="consultancy"><output><?php echo $smb_cyber_consultant_score_f;?></output>
					</div>
				</div>
			</div>
			</form>
		   </div>               
		 </div>
		
        <div class="col-md-8">
				<!----------------------------------- first bound ------------------------------------------>
				<?php
				  if(!empty($smb_bundles_fnal)){
				  $id_identifier = 0; 
				  foreach($smb_bundles_fnal As $i=>$bundle_fetch){
					
					

				?>
				<div class="col-md-12 rounded_div space">
					 <div class="col-md-12">

							<div class="col-md-12" style="margin-top:0px;position:absolute;">
								<div class="row">
									<div class="col-md-5">
										<div style="font-size:1.6em !important" class="price">

											<?php
												$this->load->model('results_m');
												$get_currency_symbol = $this->results_m->get_symbol($currencyCode);
												$get_currency = $get_currency_symbol->symbol;
											?>
		
											<?php echo $get_currency;?> <?php echo number_format($bundle_fetch->total_bundle_price,2);?> /year
											
											<!--
											<?php
												$tech_data_uk = $result->user_id;
												if($tech_data_uk == '52'){
											?>
												<a data-container="body" title="Refund Policy for Techdata UK" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
											<?php
												}
											?>-->
										</div>

										<!--<div class="details">
										  <input type="range" value="<?php echo $total_payable_bundle_cost;?>" name="" min="0" max="<?php echo $total_payable_bundle_cost;?>" data-rangeslider disabled>
										</div>-->
										<div class="details" style="text-align:center;">
										  <a href="javascript:void();"  data-toggle="modal" data-target="#myModal" class="btn" style="background:#ccc;color:#000;padding:7px;width:100%;margin-top:-16px;">Terms & Conditions</a>
										</div>
										<?php
											 $total_price = 0;
											 $service_idz = array();
											 $business_cats = json_decode($bundle_fetch->bundle_json,true);
											 	$i = 0;
												foreach($business_cats As $chabi=>$get_suppliers)
													{
														//print_r($get_suppliers);
														$all_suppliers[$i] = $get_suppliers['service_id'];
														 
														$i++;
													}
													
													$merged = call_user_func_array('array_merge', $all_suppliers);
													//print_r($merged);
													//$unique_service = array_unique($merged);
													foreach ($merged As $services)
														{
															$this->load->model('results_m');
															$service_id = $services;
															$get_supplier_info = $this->results_m->get_details($service_id);
															//print_r($get_supplier_info);
															$supplier_name[] = $get_supplier_info->company_name;
															$refund_policy[] = $get_supplier_info->refund;
														
														}
												
													$unique_supplier = array_unique($supplier_name);
													$unique_refund = array_unique($refund_policy);
													//print_r($unique_refund);
											?>
										<!-- The Modal -->
										
										<div class="modal " id="myModal" style="margin-top:20px;">
										<div class="modal-dialog modal-lg">
										  <div class="modal-content">
										  
											<!-- Modal Header -->
											
											
											<!-- Modal body -->
											<div class="modal-body ">
												<div class="well text-center col-md-12">
													<div class="col-md-6 col-md-offset-3">
														<button type="button" class="btn btn-hot text-uppercase btn-lg" onclick="window.location.href='<?php echo base_url('terms');?>';" style="width:100%;background:#cccccc;border:1px solid #cccccc;"><span style="font-size:15px;" >ProtectBox T&C</span></button>
													</div>
													<?php
														$i = 0;
														foreach($unique_supplier As $main_supplier)
															{
																$suupplier = $main_supplier;
																$refund = $unique_refund[0];

														?>
													<div class="col-md-6 col-md-offset-3" style="margin-top:10px;">
														<button type="button" class="btn btn-sunny text-uppercase btn-lg" onclick="window.location.href='<?php echo base_url('td_terms');?>';" style="width:100%;background:#cccccc;border:1px solid #cccccc;"><span  style="font-size:15px;"><?php echo $suupplier;?> T&C </span></button>
														<span style="margin-top:20px;">Refundable:&nbsp;&nbsp;<code style='margin-right:10px;font-size:18px;'><?php echo $refund;?>&nbsp;<a data-container="body" title="Click Supplier Terms and Conditions for more details" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></code></span>
													</div>
													<?php
															$i++;
															}
													?>
												</div>
											</div>
											
											<!-- Modal footer fdfd-->
											<div class="modal-footer">
											  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
											
										  </div>
										</div>
									  </div>
									</div>
									<div class="col-md-7"style="margin-top:5px;">
										<form method="POST" action="<?php echo base_url('results/bundle_array');?>">
											<textarea style="display:none;" name="bundle_idz">
												<?php print_r($bundle_fetch->bundle_json);?></textarea>
											<button type="submit" class="btn_1 medium pull-right" style="padding:16px;width:100%;text-align:center;height:62px;font-size:20px;">Buy Now</button>
										</form>
									</div>
								</div>
						   </div>
						
						<!-- categories er loop starts -->
						 <?php
							
							

							 $loop_bundlt_cnt = 0;
							 foreach($business_cats As $chabi=>$cat_boxesz){
								 $cat_boxes = $cat_boxesz['product_category'];
								 $count_cat_products = count($cat_boxesz['service_id']);
								 $risk_score = $cat_boxesz['score'];

						?>
								<div class="col-md-12"  style="<?php echo(($loop_bundlt_cnt == 0)?'margin-top:105px;':'margin-top:15px;')?>">
								  <div class="row">
									<div class="col-md-3">

									  <div class="c_names" style="border-bottom:none !important;">
										<?php $cat_price = $cat_boxesz['cat_price'];?>
										
										<?php echo $cat_boxes;?>&nbsp; 
											<?php
											if($cat_boxes == 'Operating System'){
												?>
													<a data-container="body" title="Windows, Mac, Linux etc." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Internet'){
												?>
													<a data-container="body" title="WiFi/LAN, spam filtering and ad-blocking. A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area. Spam filtering detects unwanted and unsolicited emails and stops from arriving. Ad blocking prevents advertisements from appearing on a webpage. " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Antivirus'){
												?>
													<a data-container="body" title="Software designed to detect and destroy computer viruses." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Firewall'){
												?>
													<a data-container="body" title="Monitors and controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Access Control'){
												?>
													<a data-container="body" title="Data encryption (need secret key to decrypt data to read it), Tiered user access (administrator, editor), Two factor authentication, Updating software, Activity Logs and Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Data'){
												?>
													<a data-container="body" title="Email security keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise. Plus enhanced data encryption or public key infrastructure (PKI) that manages digital signatures or wi-fi certificates for processes such as e-commerce, internet banking and confidential information amongst others." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Managed Service Solution Provider'){
												?>
													<a data-container="body" title=" Company that remotely manages their customer’s IT infrastructure and systems, as an all-in-one service." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Business Continuity'){
												?>
													<a data-container="body" title="Management plan to continue doing business in case of attack " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Accreditation/Regulation'){
												?>
													<a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Training'){
												?>
													<a data-container="body" title="Cybersecurity and Physical security training for your management and staff." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Reputation Management'){
												?>
													<a data-container="body" title="Cybersecurity Insurance, Cyber Security Information Sharing Partnership (CiSP), Threat Detection / Prevention and Data Storage." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Devices'){
												?>
													<a data-container="body" title="Device management solutions  that keep mobiles, laptops, tablets or combinations of these devices, safe." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Remote working'){
												?>
													<a data-container="body" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
												}else if($cat_boxes == 'Consultancy/Implementation'){	
												?>
													<a data-container="body" title="Teams or individuals that can help with design and/or implementation of technology, people and processes. ProtectBox can find those to help you implement your chosen solutions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
												<?php
											}
												$cat_score = $cat_boxesz['score']*10;
											?>
										<span>(<?php echo $cat_score;?>)</span>
										<input type="range" value="<?php echo $cat_score;?>" min="0" max="10" data-rangeslider disabled>
									  </div>
									</div>

									<!-- product fetching starts -->
									<?php

										//$fetch_prod_data = $this->results_m->fetch_each_results($service_id_set[$id_identifier]); // FETCHING PRODUCTS DATA
										foreach($cat_boxesz['service_id'] As $key=> $product_value){

											$fetch_prod_data = $this->results_m->fetch_each_results($product_value);
						            ?>
											<div class="col-md-3">
											  <a href="javascript:void(0);" onClick="openBtn(<?php echo $product_value;?>)">
												<?php
													if($fetch_prod_data->logo != ''){
														$pro_logo = base_url('uploads/'.$fetch_prod_data->logo);	

													}else if($fetch_prod_data->openrange != ''){

														if($fetch_prod_data->openrange == 'scraped'){
															$fetch_image = $this->results_m->fetch_scrape_image($fetch_prod_data->td_part);
															$decode_images = json_decode($fetch_image->product_image,TRUE);
															$fetch_last_url = count($decode_images) - 2;
															$pro_logo = $decode_images[$fetch_last_url];

														}else if($fetch_prod_data->openrange == 'mapped'){
															$fetch_image = $this->results_m->fetch_openrange_image($fetch_prod_data->td_part);
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
														$pro_details = $fetch_prod_data->product_detail;
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
														$pro_details = $fetch_prod_data->product_detail;
														$substr_details = substr($pro_details,0,30);
														echo $substr_details;
														echo "...";
													 ?>
												</div>
												<?php
												}
												?>
											  </a>						
										 </div>
									<?php									
										}
									?>

								  </div>
								  </div>
							<?php
									  	$loop_bundlt_cnt++;
						      }
						    ?>
                            
						<!-- categories er loop ends -->
					  </div>
						
				   </div>

			  <?php	
				  		if($i==5){
				  			break;
						}
					} //bundle loop ends
				}else{
			  ?>
				<div class="col-md-12 rounded_div space" style="height:510px;"> 
				   <div class="col-md-12 text-center c_names">Sorry, no bundle found. Please try again later...</div>
				</div>
			  <?php
				}	  
			  ?>
      
				<!----------------------------------- first bound -------------------------------------------->
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
		function openBtn(e){
		/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>result_modal/open_modal',
			data: {'service_id': e}, // change this to send js object
			type: "post",
			success: function(response){
				//alert(response);
				//exit;
			   //document.write(data); just do not use document.write
				$(response).modal({show:true});
			}
		  });
		 /* ajax code ends*/
	}
	</script>
<!-- Script for Tabs starts-->
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
<!-- Script for Tabs Ends -->

    <script>
  		$(document).ready(function(){
			$("img").on("error", function() {
			  $(this).hide();
			 $(this).siblings('.yoo_okk').show();
			});
  			$('[data-toggle="tooltip"]').tooltip();   
  		});
  	</script>

	<script src="<?php echo base_url();?>js/rangeslider.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
	

    <script>
	$('input[type="range"]').on('input', function() {

	  var control = $(this),
		controlMin = control.attr('min'),
		controlMax = control.attr('max'),
		controlVal = control.val(),
		controlThumbWidth = control.data('thumbwidth');

	  var range = controlMax - controlMin;
	  
	  var position = ((controlVal - controlMin) / range) * 100;
	  var positionOffset = Math.round(controlThumbWidth * position / 100);
	  var output = control.next('output');

	  if (controlVal > 5) {
	  		positionOffset = controlVal*2;
	  	} else if (controlVal < 5) {
	  		positionOffset = -((controlVal*2)+5);
		
			if (controlVal == 0) {
			  	positionOffset = -13;
			} else if (controlVal == 3) {
			  	positionOffset = -5;
			} else if (controlVal == 4) {
			  	positionOffset = 0;
			}
	  	}
	  
	  output
		.css('left', 'calc(' + position + '% - ' + positionOffset + 'px)')
		.text(controlVal);

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
        $('span.antivirus').text('('+anti_val+')');

		var osange = $('#osange').val();
        $('span.os').text('('+osange+')');

		var firerange = $('#firerange').val();
        $('span.firewall').text('('+firerange+')');

		var internetrange = $('#internetrange').val();
        $('span.internet').text('('+internetrange+')');

		var accessrange = $('#accessrange').val();
        $('span.access').text('('+accessrange+')');

		var protectrange = $('#protectrange').val();
        $('span.protect').text('('+protectrange+')');

		var serviceRange = $('#serviceRange').val();
        $('span.servicezzz').text('('+serviceRange+')');

		var businessrange = $('#businessrange').val();
        $('span.business').text('('+businessrange+')');

		var passwordrange = $('#passwordrange').val();
        $('span.password').text('('+passwordrange+')');

		var accreditationrange = $('#accreditationrange').val();
        $('span.accreditation').text('('+accreditationrange+')');

		var devicesrange = $('#devicesrange').val();
        $('span.devices').text('('+devicesrange+')');

		var trainingrange = $('#trainingrange').val();
        $('span.training').text('('+trainingrange+')');

		var remoterange = $('#remoterange').val();
        $('span.remote').text('('+remoterange+')');

		var reputationrange = $('#reputationrange').val();
        $('span.reputation').text('('+reputationrange+')');

		var consultancyrange = $('#consultancyrange').val();
        $('span.consultancy').text('('+consultancyrange+')');
    }

	$document.on('input', 'input[type="range"], ' + selector, function(e) {
		valueOutput(e.target);
	});
})
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
</html>
