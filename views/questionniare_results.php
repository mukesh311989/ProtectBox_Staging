<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Questionniare Results | ProtectBox
    </title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
     <style>
     	.lft-wht{padding-right:0;}
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
        font-size:15px;
      }
      .c_names
      {
        margin: 0 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 13px;
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
		
		.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

/*Range color slider start*/
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
  	<!--<div id="load"></div>-->
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
            <label class="col-md-12 control-label preferd" for="rolename" style="">Suppliers</label>
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
            <label class="col-md-12 control-label preferd" for="rolename" >Solutions</label>
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
            </label>
            <div class="col-md-12">
              <select id="dates-field2" class="selectpicker form-control" data-live-search="true" name="price_range" data-dropup-auto="false">
                <option value="" selected="" disabled="">Nothing selected</option>
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
          <button name="update_results" value="update_result" type="submit" class="btn_1 medium pull-right" style="width:100%;margin-top:0px;position: relative;z-index: 1;">Update Results</button>
		  <a name="update_results" class="btn_1 medium pull-right" style="width:100%;background:#f5f5f5;border:1px solid #000;color:#000;padding:7px;width:100%;margin-top:5px;text-align:center;position: relative;z-index: 1;" href="<?php echo base_url('results/clear_filter');?>">Clear All Results</a>
        </div>
		</form>
      </div>
    </div>
    <main>    
    <div class="container " style="margin-top:120px;">
		  <div class="col-md-12 note">
		 Based on your answers, these are the BEST deals for you.<br/>Click on filters (above) to change by brand, solution type or price.<br/> Move sliders = “Risk Scores” (in grey box on left, below) to change the level of protection you want. If you want an Anti-virus with a higher level of protection then move the slider to the right, to a higher number.<br/>Click the Logos to get more information on each product.<br/>Don’t miss out on these deals that only we can offer you , BUY NOW!
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
							<b class="pull-left"><?php echo $min_budget;?></b><b class="pull-right"><?php echo $max_budget;?></b>
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
		/*print_r($this->session->userdata['results']);*/
		  if(!empty($questionniare_results_data)){
		  $max= 0; $min = 0;
		  

		  
		  
		  foreach($questionniare_results_data AS $key=>$results_data){
			  $price_array_bundle = array();
	          $commission_price_bundle = array();
	          $total_commision_price_bundle = array();
			  $service_idz = array();
			  foreach($results_data AS $result){
				  $each_service_idz = array();
				  
				  foreach($result['service_id'] AS $bundle_result){
					$service_data = $this->questionniare_results_m->fetch_results($bundle_result);
					
					
					foreach($service_data AS $logos){
						$each_service_idz[] = $logos->supplier_service_id;

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
					}

					$total_price = array_sum($price_array_bundle);
					$total_commision_price = array_sum($commission_price_bundle);
					$total_payable_bundle_cost = ($total_commision_price + $total_price);
					$round_off_price = number_format($total_payable_bundle_cost,2);
				  }
				  $service_idz[] = array('product_category' => $result['product_category'],
				  						 'score' => $result['score'],
				  						 'service_id'=> $each_service_idz
										);
			  }
			  $object_result = (object)($service_idz);
		?>
      <div class="col-md-12 rounded_div space">	
      	<div class="col-md-12">
			  <div class="col-md-12">
			  	<div class="row">
					<div class="col-md-5">
						<div style="font-size:1.6em !important" class="price"><?php echo $currencySymbol;?>&nbsp;<?php echo $round_off_price;?>/year</div>
						<!--<div class="details">
						  <input type="range" value="<?php echo $total_payable_bundle_cost;?>" name="" min="0" max="<?php echo $total_payable_bundle_cost;?>" data-rangeslider disabled>
						</div>-->
						<div class="details" style="text-align:center;">
						  <a href="<?php echo base_url();?>terms" target="_blank" class="btn" style="background:#ccc;color:#000;padding:7px;width:100%;margin-top:-16px;">Terms & Conditions</a>
						</div>
					</div>
					<div class="col-md-7" style="margin-top:5px;">
						<form method="POST" action="<?php echo base_url('results/bundle_array');?>">
							<textarea style="display:none;" name="bundle_idz">
								<?php print_r(json_encode($object_result));?></textarea>
							<button type="submit" class="btn_1 medium pull-right" style="padding:16px;width:100%;text-align:center;height:62px;font-size:20px;">Buy Now</button>
						</form>
						<!--<a href="<?php echo base_url('payment_process');?>" class="btn_1 medium pull-right" style="padding:16px;width:100%;text-align:center;height:62px;font-size:20px;">Buy Now</a>-->
					</div>
				</div>
              </div>
			  
			<?php
				foreach($results_data AS $key=>$result){
			?>
                <div class="col-md-12"  style="margin-top:15px;">
				
				 <div class="row">
				 	<div class="col-md-3">
					  <div class="c_names" style="border-bottom:none !important;">
							<?php echo $result['product_category'];?>&nbsp;
							<?php
								if($result['product_category'] == 'Operating System'){
							?>
								<a data-container="body" title="Windows, Mac, Linux etc." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Internet'){
							?>
								<a data-container="body" title="WiFi/LAN, spam filtering and ad-blocking. A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area. Spam filtering detects unwanted and unsolicited emails and stops from arriving. Ad blocking prevents advertisements from appearing on a webpage. " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Antivirus'){
							?>
								<a data-container="body" title="Software designed to detect and destroy computer viruses." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Firewall'){
							?>
								<a data-container="body" title="Monitors and controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Access Control'){
							?>
								<a data-container="body" title="Data encryption (need secret key to decrypt data to read it), Tiered user access (administrator, editor), Two factor authentication, Updating software, Activity Logs and Physical security (protecting buildings and equipment using video surveillance, alarms, locks)." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Data'){
							?>
								<a data-container="body" title="Email security keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise. Plus enhanced data encryption or public key infrastructure (PKI) that manages digital signatures or wi-fi certificates for processes such as e-commerce, internet banking and confidential information amongst others." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Managed Service Solution Provider'){
							?>
								<a data-container="body" title=" Company that remotely manages their customer’s IT infrastructure and systems, as an all-in-one service." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Business Continuity'){
							?>
								<a data-container="body" title="Management plan to continue doing business in case of attack " href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Accreditation/Regulation'){
							?>
								<a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Training'){
							?>
								<a data-container="body" title="Cybersecurity and Physical security training for your management and staff." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Reputation Management'){
							?>
								<a data-container="body" title="Cybersecurity Insurance, Cyber Security Information Sharing Partnership (CiSP), Threat Detection / Prevention and Data Storage." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Devices'){
							?>
								<a data-container="body" title="Device management solutions  that keep mobiles, laptops, tablets or combinations of these devices, safe." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Remote working'){
							?>
								<a data-container="body" title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}else if($result['product_category'] == 'Consultancy/Implementation'){	
							?>
								<a data-container="body" title="Teams or individuals that can help with design and/or implementation of technology, people and processes. ProtectBox can find those to help you implement your chosen solutions." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							<?php
								}
								$cat_score = $result['score']*10;
							?>
							<span>(<?php echo $cat_score;?>)</span>

							<input type="range" value="<?php echo $cat_score;?>" name="" min="0" max="10" data-rangeslider disabled>
					  </div>
					</div>
				    
					<?php
					  foreach($result['service_id'] AS $bundle_result){
					  $service_data = $this->questionniare_results_m->fetch_results($bundle_result);
					  foreach($service_data as $key=>$logos){
					?>
					<div class="col-md-3">
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
							<img src="<?php echo $pro_logo;?>" class="main_image amar_img__<?php echo $key;?>"/>


							<div class="imager_dev yoo_okk" style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:2px;min-height:50px;display:none;" >
							 <?php
								$pro_details = $logos->product_detail;
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
					</div>
				  <?php
					}
					}
				  ?>
				</div>
				
				</div>
				<?php
				}
				?>
              </div>
			</div>
			<?php
				}
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
         
          <!-- End col-md-12-->
        </div>
        <!-- End row -->
      </div>
	   <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div" >
			  <h3>Orders</h3>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th >Order&nbsp;ID</th>
							<th >Supplier</th>
							<th >Services</th>
							<th >Total Price</th>
							<th >Payment&nbsp;Option</th>
							<th >Payment&nbsp;Method</th>
							<th >Order&nbsp;Status</th>
						  </tr>
						</thead>
						<tbody>
					<?php
						if(count($order_data) > 0)
						{
						foreach($order_data as $fetch_order){
					?>
						  <tr>
							<td><?php echo rand(99,9999);?></td>
							<td>
								<?php
									$service_id = $fetch_order->supplier_service_id;
									$explode_service_id = explode(',',$service_id);
									foreach($explode_service_id AS $each_service_id){
										$get_supplier = $this->questionniare_results_m->fetch_supplier_name($each_service_id);
										echo $get_supplier->service_name;
										echo "<br>";
									}
								?>
							</td>
							<td>
								<?php
									$get_service_array = explode(",",$fetch_order->supplier_service_id);
									//print_r($get_service_array);
									foreach($get_service_array As $service_data){
									$get_supplier_details = $this->questionniare_results_m->get_service_image($service_data);
								?>
									<!--<img src="<?php echo base_url();?>uploads/<?php echo $get_supplier_details->logo;?>" style="height:25px;">-->
									<?php
										if($get_supplier_details->logo != ''){
									?>
										<img src="<?php echo base_url();?>uploads/<?php echo $get_supplier_details->logo;?>" style="height:25px;">
									<?php
										}else{	
											$fetch_icecat_logo = $this->questionniare_results_m->fetch_icecat_data($get_supplier_details->service_stockcode);
											if($fetch_icecat_logo != ''){
									?>
										<img src="<?php echo $fetch_icecat_logo->HighPic?>" style="height:25px;">
										<?php
											}else{
												$pro_details = $get_supplier_details->product_detail;
												if($pro_details != ''){
										?>
											<div style="border:1px solid #ccc;background:#f5f5f5;text-align:center;color:#353535;font-size:13px;font-weight:bold;padding:5px;">
												<?php 
													$substr_details = substr($pro_details,0,30);
													echo $substr_details;
													echo "...";
												?>
											</div>
											<?php
												}else{
											?>
												<img src="<?php echo base_url('images/noimage1.png');?>" style="height:60px;">
										<?php
												}
											}
										}
									}
								?>
							</td>
							<td><?php echo $currencySymbol;?>&nbsp;<?php echo $fetch_order->total_price;?></td>
							<td><?php echo $fetch_order->payment_option;?></td>
							<td><?php echo $fetch_order->payment_method;?></td>
							<td><?php 
								$order_status = explode(',',$fetch_order->order_status);
								foreach($order_status AS $each_order_status){
									if($each_order_status == 'smb_placed_order'){
										echo "Processing";
									}else if($each_order_status == 'seller_informed'){
										echo "Processing";
									}else if($each_order_status == 'seller_confirmed'){
										echo "Processing";
									}else if($each_order_status == 'seller_rejected'){
										echo "Rejected";
									}else if($each_order_status == 'admin_cancelled'){
										echo "Rejected";
									}else if($each_order_status == 'delivered'){
										echo "Delivered";
									}
									echo "<br>";
								}
							?></td>
						  </tr>
						<?php
						}
						}else{
						?>
						<tr><td colspan="7" align="center" style="font-size:20px;color:red;"><b>No sales yet</b></td></tr>
						<?php
						}
						?>
						</tbody>
					  </table>
				  </div>
				</div>

		<?php
			$date = time();
			if($date <= $fetch_subscription->subscription_end_date){
		?>	
		<div class="tab-content rounded_div" id="qq_div">
			<h3>Answers</h3>
            <div class="panel with-nav-tabs panel-primary" style="border:none;background:transparent !important;">
                <div class="panel-heading" style="border:none;background:transparent !important;">
                        <ul class="nav nav-tabs">
                            <li class="active" style="width:25%;"><a href="#tab1primary" data-toggle="tab" style="text-align:center;">Basics</a></li>
                            <li style="width:25%;"><a href="#tab2primary" data-toggle="tab" style="text-align:center;">Technical Info</a></li>
                            <li style="width:25%;"><a href="#tab3primary" data-toggle="tab" style="text-align:center;">Non-Technical info</a></li>
							<li style="width:25%;"><a href="#tab4primary" data-toggle="tab" style="text-align:center;">Budget</a></li>
                        </ul>
                </div>
                <div class="panel-body" >
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
						<form name="questionaire" method="POST" action="<?php echo base_url('questionniare_results/update_basics');?>">
						<div class="alert alert-success" id="success_div" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account – Delegates" in top right hand corner.</strong> </div>
						  <div class="form_title">
						<h3>
						  <strong><i class="icon-industrial-building"></i></strong> Industry
						</h3>
					  </div>
							<div class="step">
							   <div class="row">
							  <div class="col-md-5 col-sm-5">
								<div class="form-group">
									  <label><b>1a</b> What industry are you in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
									  <a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
									  <img src="<?php echo base_url();?>images/deligate_icon.png" class="industry_button" style="height:15px;cursor: pointer;margin-top: -2px;">
									  <br/>
									  <div id="industry_in">
										  <select class="form-control del_industry"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'industry_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
											 <option selected disabled>Select Delegate</option> 
											 <?php
											 $ci =&get_instance();
											 $ci->load->model('questionaire_m');
											 $get_delegate_info = $ci->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
											 if(count($get_delegate_info) > 0)
											 {
												 foreach($get_delegate_info as $del_result)
												 {
													 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
													 if(count($get_del_name) > 0)
													 {
														 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
													 }else{
														 $name = $del_result->delicate_email;
													 }
												 ?>
												 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->industry_input; ?>" ><?php echo $name;?></option>  
												 <?php
												 }
											 }
											 ?>
											 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
										  </select>
										  <?php
										  $get_assign_del = $ci->questionaire_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
										  if(count($get_assign_del) > 0)
										  {
											  foreach($get_assign_del as $assign_del)
											  {
												  if($assign_del->industry_input == 1)
												  {
													  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
													  if(count($del_name) > 0)
													  {
														  $name = $del_name->firstname.' '.$del_name->lastname;
													  }else{
														  $name = $del_name->email;
													  }
													  echo "<code style='margin-right: 10px;'>".$name."</code>";
												  }
											  }
										  }
										?>
									</div>
								 </div>
							  </div>
							 <?php
								//print_r($get_basic_answars);
							 ?>
							  <div class="col-md-7 col-sm-7">
								<div class="form-group">
								  <select name="industry" class="form-control" required>
									<option disabled="" selected="">Choose an option</option>
									
									<option  value="Agriculture and Mining" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Agriculture and Mining")?'selected':'');?>>Agriculture and Mining</option>

										<option  value="Business Services" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Business Services")?'selected':'');?>>Business Services</option>


										<option  value="Computer and Electronics" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Computer and Electronics")?'selected':'');?>>Computer and Electronics</option>


										<option  value="Consumer Services" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Consumer Services")?'selected':'');?>>Consumer Services</option>


										<option  value="Education" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Education")?'selected':'');?>>Education</option>


										<option  value="Energy and Utilities" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Energy and Utilities")?'selected':'');?>>Energy and Utilities</option>


										<option  value="Financial Services" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Financial Services")?'selected':'');?>>Financial Services</option>

										<option  value="Government" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Government")?'selected':'');?>>Government</option>


										<option  value="Health, Pharmaceuticals, and Biotech" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Health, Pharmaceuticals, and Biotech")?'selected':'');?>>Health, Pharmaceuticals, and Biotech</option>


										<option  value="Manufacturing" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Manufacturing")?'selected':'');?>>Manufacturing</option>


										<option  value="Media and Entertainment" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Media and Entertainment")?'selected':'');?>>Media and Entertainment</option>


										<option  value="Non-profit" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Non-profit")?'selected':'');?>>Non-profit</option>

										<option  value="Real Estate and Construction" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Real Estate and Construction")?'selected':'');?>>Real Estate and Construction</option>


										<option  value="Retail" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Retail")?'selected':'');?>>Retail</option>


										<option  value="Software and Internet" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Software and Internet")?'selected':'');?>>Software and Internet</option>


										<option  value="Telecommunications" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Telecommunications")?'selected':'');?>>Telecommunications</option>


										<option  value="Transportation and Storage" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Transportation and Storage")?'selected':'');?>>Transportation and Storage</option>


										<option  value="Travel Recreation and Leisure" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Travel Recreation and Leisure")?'selected':'');?>>Travel Recreation and Leisure</option>


										<option  value="Wholesale and Distribution" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Wholesale and Distribution")?'selected':'');?>>Wholesale and Distribution</option>


										<option  value="Other" <?php echo ((isset($get_basic_answars->industry_input) && $get_basic_answars->industry_input == "Other")?'selected':'');?>>Other</option>
								
								  </select>

								</div>
							  </div>
							</div>

							<div class="row">
							  <div class="col-md-5 col-sm-5">
								<div class="form-group">
								  <label><b>1b</b> How many employees do you have?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> </label>
								  <a data-container="body" title="Please select 1 of the 3 categories for the number of current employees in your company" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								  <img src="<?php echo base_url();?>images/deligate_icon.png" class="employees_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="employee_havezz">
								  <select class="form-control del_employees"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'employees_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0){
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>

								  <input type="hidden" class="del_employees_val" value="<?php echo $del_access->employees_input;?>" style="width:200px;height:30px;">
								  <?php
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->employees_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							 ?>
							</div>
							
								 </div>
							  </div>

							  <!--<?php
								if(isset($sage_import) && count($sage_import) > 0){
									foreach($sage_import AS $get_sage_import){
										$a = $get_sage_import[0]['EmployeeNumber'];
										echo $a;
									}
							  }else{
									echo "Not received";
							  }
							  ?>-->

							  <div class="col-md-7 col-sm-7">
								<div class="form-group">
								  <select name="employees" class="form-control">
									<option disabled="" selected="">Choose an option</option>
								
									<option  value="1-500" <?php echo ((isset($get_basic_answars->employees_input) && $get_basic_answars->employees_input == "1-500")?'selected':'');?>>1-500</option>
									<option  value="500-5000" <?php echo ((isset($get_basic_answars->employees_input) && $get_basic_answars->employees_input == "500-5000")?'selected':'');?>>500-5000</option>
									<option  value="5000 >" <?php echo ((isset($get_basic_answars->employees_input) && $get_basic_answars->employees_input == "5000 >")?'selected':'');?>>5000 ></option>
							
								  </select>
								</div>
							  </div>
							</div>
						  </div>
						    <div class="form_title">
						<h3>
						  <strong><i class="icon-location-6"></i></strong> Location&nbsp;
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>2</b> Where are you located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							  <a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in."><i class="icon-info-circled-3"></i></a>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="location_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="located">
								  <select class="form-control del_location"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'location_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->location_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->location_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  ?>
							</div>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							<div class="row">
								<div class="col-md-6">
								<p>Located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></p>
									<?php
											$location_inputzz = explode(",",$get_basic_answars->location_input);
											//print_r($location_inputzz);
										?>
								<select name="located[]" class="form-control" multiple="multiple">
									<option disabled value="">press ctrl for multiple locations</option>
									
										<option  value="Northern Ireland" <?php echo (in_array("Northern Ireland",$location_inputzz)?'selected':'')?>> Northern Ireland (UK)</option>
										<option  value="Ireland"  <?php echo ((in_array("Ireland",$location_inputzz))?'selected':'')?>> Ireland (Europe)</option>
										<option  value="Mainland UK"  <?php echo ((in_array("Mainland UK",$location_inputzz))?'selected':'')?>> Mainland UK</option>
										<option  value="Europe"  <?php echo ((in_array("Europe",$location_inputzz))?'selected':'')?>>Europe (Continental)</option>
										<option  value="North America"  <?php echo ((in_array("North America",$location_inputzz))?'selected':'')?>>North America</option>
										<option  value="Central America"  <?php echo ((in_array("Central America",$location_inputzz))?'selected':'')?>>Central America</option>
										<option  value="South America"  <?php echo ((in_array("South America",$location_inputzz))?'selected':'')?>>South America</option>
										<option  value="Africa"  <?php echo ((in_array("Africa",$location_inputzz))?'selected':'')?>>Africa</option>
										<option  value="Middle East Qatar"  <?php echo ((in_array("Middle East Qatar",$location_inputzz))?'selected':'')?>>Middle East (UAE, Qatar, Oman etc)</option>
										<option  value="Middle East Israel"  <?php echo ((in_array("Middle East Israel",$location_inputzz))?'selected':'')?>>Middle East (Israel)</option>
										<option  value="Russia"  <?php echo ((in_array("Russia",$location_inputzz))?'selected':'')?>>Russia</option>
										<option  value="South Asia"  <?php echo ((in_array("South Asia",$location_inputzz))?'selected':'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
										<option  value="South East Asia"  <?php echo ((in_array("South East Asia",$location_inputzz))?'selected':'')?>>South East Asia (China, Japan etc)</option>
										<option  value="South Pacific"  <?php echo ((in_array("South Pacific",$location_inputzz))?'selected':'')?>>South Pacific (Australia, New Zealand etc)</option>
								
									 </select>
								</div>
								<div class="col-md-6">
								<p>Do business in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></p>
									
								  <select name="location_business[]" class="form-control" multiple="multiple">
										<option disabled="" value="">press ctrl for multiple locations</option>
								
									<?php
										
										$location_business_inputzz = explode(",",$get_basic_answars->location_business_input);
									?>
											<option  value="Northern Ireland" <?php echo (in_array("Northern Ireland",$location_business_inputzz)?'selected':'')?>> Northern Ireland (UK)</option>
											<option  value="Ireland"  <?php echo ((in_array("Ireland",$location_business_inputzz))?'selected':'')?>> Ireland (Europe)</option>
											<option  value="Mainland UK"  <?php echo ((in_array("Mainland UK",$location_business_inputzz))?'selected':'')?>> Mainland UK</option>
											<option  value="Europe"  <?php echo ((in_array("Europe",$location_business_inputzz))?'selected':'')?>>Europe (Continental)</option>
											<option  value="North America"  <?php echo ((in_array("North America",$location_business_inputzz))?'selected':'')?>>North America</option>
											<option  value="Central America"  <?php echo ((in_array("Central America",$location_business_inputzz))?'selected':'')?>>Central America</option>
											<option  value="South America"  <?php echo ((in_array("South America",$location_business_inputzz))?'selected':'')?>>South America</option>
											<option  value="Africa"  <?php echo ((in_array("Africa",$location_business_inputzz))?'selected':'')?>>Africa</option>
											<option  value="Middle East Qatar"  <?php echo ((in_array("Middle East Qatar",$location_business_inputzz))?'selected':'')?>>Middle East (UAE, Qatar, Oman etc)</option>
											<option  value="Middle East Israel"  <?php echo ((in_array("Middle East Israel",$location_business_inputzz))?'selected':'')?>>Middle East (Israel)</option>
											<option  value="Russia"  <?php echo ((in_array("Russia",$location_business_inputzz))?'selected':'')?>>Russia</option>
											<option  value="South Asia"  <?php echo ((in_array("South Asia",$location_business_inputzz))?'selected':'')?>>South Asia (India, Pakistan, Bangladesh etc)</option>
											<option  value="South East Asia"  <?php echo ((in_array("South East Asia",$location_business_inputzz))?'selected':'')?>>South East Asia (China, Japan etc)</option>
											<option  value="South Pacific"  <?php echo ((in_array("South Pacific",$location_business_inputzz))?'selected':'')?>>South Pacific (Australia, New Zealand etc)</option>
									
									 </select>


								</div>
							  </div>
							</div>
						  </div>
						</div>
					 </div>
					 <div class="form_title">
						<h3>
							<strong><i class="icon-users"></i></strong> Supply Chain
						</h3>
					</div>
					 <div class="step">
					  <div class="row">
					  <div class="col-md-5 col-sm-5">
						<div class="form-group">
						  <label><b>3</b> Do you handle or manage personal or financial data or information for others <br/>(e.g. your supply chain or customers)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
							 <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Let us know if you also handle or manage personal or financial data or information for 3rd parties as this has legal implications for you."><i class="icon-info-circled-3"></i></a>
							 <img src="<?php echo base_url();?>images/deligate_icon.png" class="supply_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="handlez_data">
								  <select class="form-control del_supply"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'handle_data_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->handle_data_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->handle_data_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								?>
							</div>
				
						 </div>
					  </div>
					  <div class="col-md-7 col-sm-7">
						  <div class="form-group">
							  <select name="handle_data" class="form-control ">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($get_basic_answars->handle_data_input) && $basics_data->handle_data_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($get_basic_answars->handle_data_input) && $basics_data->handle_data_input == "0")?'selected':'');?>> No </option>
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
							  <td><input  type="radio" name="budget_individual" value="supplier" <?php echo ((isset($get_basic_answars->individuals_input) && $get_basic_answars->individuals_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="budget_individual" value="customer" <?php echo ((isset($get_basic_answars->individuals_input) && $get_basic_answars->individuals_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Small and medium businesses</td>
							  <td><input  type="radio" name="sme" value="supplier" <?php echo ((isset($get_basic_answars->get_basic_answars) && $get_basic_answars->sme_business_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="sme" value="customer" <?php echo ((isset($get_basic_answars->get_basic_answars) && $get_basic_answars->sme_business_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Enterprise</td>
							  <td><input  type="radio" name="enterprise" value="supplier" <?php echo ((isset($get_basic_answars->enterprise_input) && $get_basic_answars->enterprise_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="enterprise" value="customer" <?php echo ((isset($get_basic_answars->enterprise_input) && $get_basic_answars->enterprise_input == "customer")?'checked':'');?>></td>
							   </tr>
							   <tr>
							  <td>Governments</td>
							  <td><input  type="radio" name="governments" value="supplier" <?php echo ((isset($get_basic_answars->governments_input) && $get_basic_answars->governments_input == "supplier")?'checked':'');?>></td>
							  <td><input  type="radio" name="governments" value="customer" <?php echo ((isset($get_basic_answars->governments_input) && $get_basic_answars->governments_input == "customer")?'checked':'');?>></td>
							   </tr>
							 </tbody>
							</table>
						 </div><!-- End col-md-12-->
					   </div>
					  <div class="col-md-12 text-right" style="padding:10px;">
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium">Update and Continue</button>
					</div>
					</div>
				  </div>
				  </form>
				</div>
                        <div class="tab-pane fade" id="tab2primary">
							<form method="POST" name="questionaire_tech_info" action="<?php echo base_url('questionniare_results/update_tech');?>">
							<div class="alert alert-success" id="success_div_tech" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account – Delegates" in top right hand corner.</strong> </div>
								<div class="form_title">
								<h3>
								  <strong><i class=" icon-desktop-3"></i></strong> Operating System
								</h3>
							  </div>
							   <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>4</b> What Operating System do you use?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us the primary operating system used in your company."><i class="icon-info-circled-3"></i></a>
							</label>
							<img src="<?php echo base_url();?>images/deligate_icon.png" class="operating_system_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="os_use">
							  <select class="form-control del_operating_system"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'os_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $ci =&get_instance();
								 $ci->load->model('questionaire_tech_info_m');
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->os_input;?>"><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->os_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								?>
							</div>
						 </div>
					  </div>

						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
								  <select  name="operating_system" class="form-control " >
									<option disabled="" selected=""> choose an option</option>
									<option  value="Windows 7 or below" <?php echo ((isset($get_tech_answars->os_input) && $get_tech_answars->os_input == "Windows 7 or below")?'selected':'');?>>Windows 7 or below</option>
									<option  value="Windows 8 or above" <?php echo ((isset($get_tech_answars->os_input) && $get_tech_answars->os_input == "Windows 8 or above")?'selected':'');?>> Windows 8 or above </option>
									<option  value="Mac" <?php echo ((isset($get_tech_answars->os_input) && $get_tech_answars->os_input == "Mac")?'selected':'');?>> Mac</option>4
									<option  value="Linux" <?php echo ((isset($get_tech_answars->os_input) && $get_tech_answars->os_input == "Linux")?'selected':'');?>>Linux</option>
								  </select>
							  </div>
						  </div>

						</div>
					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-block-2"></i></strong> Antivirus
						</h3>
					  </div>
					  	  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>5</b> Do you have an antivirus product installed?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines."><i class="icon-info-circled-3"></i></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="antivirus_installed_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="antivirus_product">
							  <select class="form-control del_antivirus_installed"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'antivirus_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->antivirus_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->antivirus_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="antivirus_installed">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->antivirus_input) && $get_tech_answars->antivirus_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->antivirus_input) && $get_tech_answars->antivirus_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
							</div>
						  </div>
					  </div>
					   <div class="form_title">
						<h3>
						  <strong><i class="icon-globe-2"></i></strong> Firewall
						</h3>
					  </div>
					  	 <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>6</b> Do you have more than basic system firewall?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Firewall monitors &amp; controls incoming &amp; outgoing network traffic based on predetermined security rules. It protects from unauthorised access."><i class="icon-info-circled-3"></i></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="firewall_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="firewalzz">
							  <select class="form-control del_firewall"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'firewall_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->firewall_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->firewall_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="firewall">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->firewall_input) && $get_tech_answars->firewall_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->firewall_input) && $get_tech_answars->firewall_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
					</div>
					<div class="form_title">
					<h3>
					  <strong><i class="icon-globe-2"></i></strong> IT Management
					</h3>
				  </div>
				  	  <div class="step">
					<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>7</b> Who manages your IT?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely.You may want to add them as a delegate user to answer some of these questions for you"><i class="icon-info-circled-3"></i></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="manage_it_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="it_manage">
							  <select class="form-control del_manage_it"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'manage_it_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->manage_it_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->manage_it_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								?>
							</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control " name="manage_it" onchange="java_script_:show(this.options[this.selectedIndex].value)" >
								
									<option disabled="" selected="" value="">Choose an option</option>
									<option  value="Your own system administrator in-house" <?php echo ((isset($get_tech_answars->manage_it_input) && $get_tech_answars->manage_it_input == "Your own system administrator in-house")?'selected':'');?>>Your own system administrator in-house</option>
									<option  value="3rd party contracted by your organization" <?php echo ((isset($get_tech_answars->manage_it_input) && $get_tech_answars->manage_it_input == "3rd party contracted by your organization")?'selected':'');?>>Third party contracted by your organization</option>
									<option  value="3rd party located in same building / facilities managed" <?php echo ((isset($get_tech_answars->manage_it_input) && $get_tech_answars->manage_it_input == "3rd party located in same building / facilities managed")?'selected':'');?>>Third party located in same building / facilities managed</option>
									<option  value="None" <?php echo ((isset($get_tech_answars->manage_it_input) && $get_tech_answars->manage_it_input == "None")?'selected':'');?>>None</option>
								
							    </select>
								
							 </div>
						  </div>
						  <div class="col-md-12" id='hiddenDiv' style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;color:#F0A84C;font-weight:bold;font-size:15px;display:none;" href="javascript:void(0);">You may need to ask your third party provider for answers to the next sections (if you&acute;d like to review your third party&acute;s recommendations) or give them &acute;Delegate&acute; access (see &acute;Settings&acute; for this) to answer it themselves. Or answer &acute;Yes&acute; or &quot;Don&acute;t Know&quot; or &quot;None&quot; to these questions so that we don&acute;t include them in your bundles of solutions.</div>
						</div>
						
				  </div>
				  	<div class="form_title">
						<h3>
						  <strong><i class="icon-network"></i></strong> Internet
						</h3>
					  </div>
					    <div class="step">
					  		 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>8a</b> Do you have internet?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if your network is connected to the internet."><i class="icon-info-circled-3"></i></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="internet_have_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="have_internet">
							  <select class="form-control del_internet_have"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'internet_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->internet_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->internet_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_have" id="internet_have" >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->internet_input) && $get_tech_answars->internet_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->internet_input) && $get_tech_answars->internet_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_wifi_lan" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class=""><b>8b</b> Do you have WiFi or LAN?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. WiFi  allows computers, smartphones, or other devices to connect to the Internet or communicate with one another wirelessly within a particular area." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="internet_wifi_lan_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wifi_lan">
							  <select class="form-control del_internet_wifi_lan"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'internet_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->internet_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_internet_wifi_lan_val" value="<?php echo $del_access->internet_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->internet_option_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								 <select class="form-control " name="internet_wifi_lan">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->internet_option_input) && $get_tech_answars->internet_option_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->internet_option_input) && $get_tech_answars->internet_option_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							 </div>
						  </div>
						</div>
						<div class="row" id="internet_public_wifi" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8c</b> Is your wifi open to the public?<a data-container="body" class="tooltiplink" title="Please tell us if you allow non-employees access to the network." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="wifi_public_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wifi_public">
							  <select class="form-control del_wifi_public"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'wifi_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->wifi_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_wifi_public_val" value="<?php echo $del_access->wifi_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->wifi_option_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_public_wifi" >
								
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->wpa2_input) && $get_tech_answars->wpa2_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->wpa2_input) && $get_tech_answars->wpa2_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>

						<div class="row" id="internet_wpa2" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8d</b> Do you have WPA2 (Wi-Fi Protected Access 2) enabled?<a data-container="body" class="tooltiplink" title="WPA2 (Wi-Fi Protected Access 2) is a network security technology commonly used on Wi-Fi wireless networks. It's an upgrade from the original WPA technology, which was designed as a replacement for the older and much less secure  Wired Equivalent Privacy (WEP) . Please tell us if you have this enabled." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="wpa2_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="wpa2_input">
							  <select class="form-control del_wpa2_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'wpa2_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->wpa2_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_wpa2_input_val" value="<?php echo $del_access->wpa2_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->wpa2_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_wpa2">
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->wpa2_input) && $get_tech_answars->wpa2_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->wpa2_input) && $get_tech_answars->wpa2_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="browser_use" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8e</b> What browser(s) do you use?<a data-container="body" class="tooltiplink" title="Please select if you use Internet Explorer, Firefox, Chrome or another browser e.g..Opera" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_browser_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="browser_input">
							  <select class="form-control del_browser_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'browser_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->browser_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_browser_input_val" value="<?php echo $del_access->browser_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->browser_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
				
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control "  id="other_browser" name="browser_use" onchange="browser_check();"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="Internet Explorer" <?php echo ((isset($get_tech_answars->browser_input) && $get_tech_answars->browser_input == "Internet Explorer")?'selected':'');?>> Internet Explorer </option>
									<option  value="Firefox" <?php echo ((isset($get_tech_answars->browser_input) && $get_tech_answars->browser_input == "Firefox")?'selected':'');?>> Firefox </option>
									<option  value="Edge (Windows 10)" <?php echo ((isset($get_tech_answars->browser_input) && $get_tech_answars->browser_input == "Edge (Windows 10)")?'selected':'');?>> Edge (Windows 10) </option>
									<option  value="Other-please specify" <?php echo ((isset($get_tech_answars->browser_input) && $get_tech_answars->browser_input == "Other-please specify")?'selected':'');?>> Other</option>
							
								  </select>
							  </div>
						  </div>
						</div>

						<div class="row" id="hiddenBrowser" style="display:none">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please Specifty The Bowser Name?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Mention The Browser Name." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <input type="text" name="browser_other" value="<?php echo ((isset($get_tech_answars->browser_name_input) && $get_tech_answars->browser_name_input!="")?$get_tech_answars->browser_name_input:'') ;?>" class="form-control required" >
							</div>
						  </div>
						</div>
						<div class="row" id="internet_browser_update" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8f</b> Do you or your systems administrator update your browser with the latest patches?<a data-container="body" class="tooltiplink" title="Please tell us if you update your browsers" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_update_browser_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="update_browser_input">
							  <select class="form-control del_update_browser_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'update_browser_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->update_browser_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_update_browser_input_val" value="<?php echo $del_access->update_browser_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->update_browser_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_browser_update"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->update_browser_input) && $get_tech_answars->update_browser_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->update_browser_input) && $get_tech_answars->update_browser_input == "0")?'selected':'');?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_email" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8g</b> Do you use email to communicate outside the business ?<a data-container="body" class="tooltiplink" title="Please tell us if you use email to contact others outside the business." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_email_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="email_input">
							  <select class="form-control del_email_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'email_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->email_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_email_input_val" value="<?php echo $del_access->email_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->email_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_email">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->email_input) && $get_tech_answars->email_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->email_input) && $get_tech_answars->email_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_spam" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8h</b> Do you have spam filtering?&nbsp;<a data-container="body" class="tooltiplink" title="Spam filtering is a program used to detect unsolicited and unwanted email and prevent those messages from getting to a user's inbox. Like other types of filtering programs, a spam filter looks for certain criteria on which it bases judgments." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_spam_filtering_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="spam_filtering_input">
							  <select class="form-control del_spam_filtering_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'spam_filtering_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->spam_filtering_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_spam_filtering_input_val" value="<?php echo $del_access->spam_filtering_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->spam_filtering_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_spam"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->spam_filtering_input) && $get_tech_answars->spam_filtering_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->spam_filtering_input) && $get_tech_answars->spam_filtering_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_ad_block" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8i</b> Do you integrate ad blocking software on your systems?&nbsp;<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you use ad blockers which prevents advertisements from appearing on a webpage."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_ad_blocking_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="ad_blocking_input">
							  <select class="form-control del_ad_blocking_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'ad_blocking_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->ad_blocking_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_ad_blocking_input_val" value="<?php echo $del_access->ad_blocking_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->ad_blocking_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_ad_block"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->ad_blocking_input) && $get_tech_answars->ad_blocking_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->ad_blocking_input) && $get_tech_answars->ad_blocking_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
				
			
						<div class="row" id="internet_web_host" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8j</b> Do you have Web hosting on your network? <a data-container="body" class="tooltiplink" title="Web hosting is the activity or business of providing storage space and access for websites." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_web_hosting_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="web_hosting_input">
							  <select class="form-control del_web_hosting_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'web_hosting_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->web_hosting_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_web_hosting_input_val" value="<?php echo $del_access->web_hosting_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->web_hosting_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="internet_web_host"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->web_hosting_input) && $get_tech_answars->web_hosting_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->web_hosting_input) && $get_tech_answars->web_hosting_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="internet_inhouse_remote" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>8k</b> Do you have web hosting in house or remote?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Are your webservers accessible by external third parties  via the internet?"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_web_hosting_option_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="web_hosting_option_input">
							  <select class="form-control del_web_hosting_option_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'web_hosting_option_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->web_hosting_option_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_web_hosting_option_input_val" value="<?php echo $del_access->web_hosting_option_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->web_hosting_option_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								 <select class="form-control " name="internet_inhouse_remote"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="inhouse" <?php echo ((isset($get_tech_answars->web_hosting_option_input) && $get_tech_answars->web_hosting_option_input == "inhouse")?'selected':'');?>> In-house </option>
									<option  value="remote" <?php echo ((isset($get_tech_answars->web_hosting_option_input) && $get_tech_answars->web_hosting_option_input == "remote")?'selected':'');?>> Remote </option>
								
								  </select>
							 </div>
						  </div>
						</div>
					  </div>
					   <div class="form_title">
						<h3>
						  <strong><i class="icon-key-5"></i></strong> Access Control
						</h3>
					  </div>
					  		  <div class="step">
						  <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>9a</b> Do you know what hacking is ?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose."><i class="icon-info-circled-3"></i></a>
							  </label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="hacking_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="is_hacking">
							  <select class="form-control del_hacking"  name="hacking" style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'hacking_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->hacking_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->hacking_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="hacking" id="access_control_what">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->hacking_input) && $get_tech_answars->hacking_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->hacking_input) && $get_tech_answars->hacking_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_logs" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9b</b> Do you keep logs?&nbsp;<a data-container="body" class="tooltiplink" title="Does your IT system automatically keep activity logs about system use and/or network activity?" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_logs_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="logs_input">
							  <select class="form-control del_logs_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'logs_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->logs_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_logs_input_val" value="<?php echo $del_access->logs_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->logs_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="access_control_logs" >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->logs_input) && $get_tech_answars->logs_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->logs_input) && $get_tech_answars->logs_input == "0")?'selected':'');?>> No </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_update_software" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9c</b> Do you regularly update your software?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Do you keep your systems patched."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_software_update_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="software_update_input">
							  <select class="form-control del_software_update_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'software_update_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->software_update_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_software_update_input_val" value="<?php echo $del_access->software_update_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->software_update_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="update_software" >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->software_update_input) && $get_tech_answars->software_update_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->software_update_input) && $get_tech_answars->software_update_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="access_control_encrypt" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>9d</b> Do you encrypt your data?<a data-container="body" class="tooltiplink" title="Encrypting data can prevent unauthorised parties reading and tampering with your data. do you or your system administrator encrypt your organisation’s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_data_encrypt_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="data_encrypt_input">
							  <select class="form-control del_data_encrypt_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'data_encrypt_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->data_encrypt_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_data_encrypt_input_val" value="<?php echo $del_access->data_encrypt_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->data_encrypt_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control " name="encrypt" >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->data_encrypt_input) && $get_tech_answars->data_encrypt_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->data_encrypt_input) && $get_tech_answars->data_encrypt_input == "0")?'selected':'');?>> No </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label><b>9e</b> Do you provide differing levels of access to your systems? <span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Do your systems have tier access? "><i class="icon-info-circled-3"></i></a><br/>E.g. Administrator access, user access. &nbsp;
							    </label>
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="access_button" style="height:15px;cursor: pointer;margin-top: -2px;">
							  <br/>
							  <div id="access_levels">
							  <select class="form-control del_access"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'system_access_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
								 <option selected disabled>Select Delegate</option> 
								 <?php
								 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
								 if(count($get_delegate_info) > 0)
								 {
									 foreach($get_delegate_info as $del_result)
									 {
										 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
										 if(count($get_del_name) > 0)
										 {
											 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
										 }else{
											 $name = $del_result->delicate_email;
										 }
									 ?>
									 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->system_access_input;?>" ><?php echo $name;?></option>  
									 <?php
									 }
								 }
								 ?>
								 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
							  </select>
							  <input type="hidden" class="del_access_val" value="<?php echo $del_access->system_access_input;?>" style="width:200px;height:30px;">
							  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->system_access_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								?>
							</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="access" >
						
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($get_tech_answars->system_access_input) && $get_tech_answars->system_access_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($get_tech_answars->system_access_input) && $get_tech_answars->system_access_input == "0")?'selected':'');?>> No </option>
							
								  </select>
								 </div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9f</b> Do you use Open Directory or Active Directory service ?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="It authenticates and authorizes all users and computers in a Windows domain type network. Open Directory is a directory service which is software which stores and organises information about a computer network's users and network resources and which allows network administrators to manage users' access."><i class="icon-info-circled-3"></i></a></label>
								 <img src="<?php echo base_url();?>images/deligate_icon.png" class="directory_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="open_active_dir">
								  <select class="form-control directory"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'directory_service_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->directory_service_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->directory_service_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								?>
								</div>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
									<select class="form-control " name="directory" >
							
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="Active Directory" <?php echo ((isset($get_tech_answars->directory_service_input) && $get_tech_answars->directory_service_input == "Active Directory")?'selected':'');?>>Active Directory</option>
									 <option  value="Open Directory" <?php echo ((isset($get_tech_answars->directory_service_input) && $get_tech_answars->directory_service_input == "Open Directory")?'selected':'');?>>Open Directory</option>
									 <option  value="Both" <?php echo ((isset($get_tech_answars->directory_service_input) && $get_tech_answars->directory_service_input == "Both")?'selected':'');?>>Both</option>
									 <option  value="Neither" <?php echo ((isset($get_tech_answars->directory_service_input) && $get_tech_answars->directory_service_input == "Neither")?'selected':'');?>>Neither</option>
									 <option  value="Don't know" <?php echo ((isset($get_tech_answars->directory_service_input) && $get_tech_answars->directory_service_input == "Don't know")?'selected':'');?>>Don't know</option>
							
									</select>
								</div>
								</div>
							  </div>
							 <div class="row">
								<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								 <label class="not_required"><b>9g</b> Do you use Two factor authentication?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Two-factor authentication (also known as 2FA) is a method of confirming a user's claimed identity by using a combination of two different components. These components may be something that the user knows, something that the user possesses or something that is inseparable from the user. "><i class="icon-info-circled-3"></i></a></label>
								 <img src="<?php echo base_url();?>images/deligate_icon.png" class="authentication_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								 <div id="two_factorzz">
								  <select class="form-control authentication"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'two_factor_authentication_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->two_factor_authentication_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->two_factor_authentication_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 ?>
								</div>
								</div>
								</div>
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control " name="authentication" >
							
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="1" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "1")?'selected':'');?>> Yes </option>
									 <option  value="0" <?php echo ((isset($technical_data->two_factor_authentication_input) && $technical_data->two_factor_authentication_input == "0")?'selected':'');?>> No </option>
								
								  </select>
								 </div>
								</div>
							  </div>
							  <div class="row">
								<div class="col-md-6 col-sm-6">
								   <div class="form-group">
									 <label class="not_required"><b>9h</b> Do you secure your premises from a physical point of view?<a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title=" Physical security (protecting buildings and equipment using video surveillance, alarms, locks)."><i class="icon-info-circled-3"></i></a>
									 </label>
									 <img src="<?php echo base_url();?>images/deligate_icon.png" class="secure_premises_button" style="height:15px;cursor: pointer;margin-top: -2px;">
									 <br/>
									<div id="secure_premise">
									  <select class="form-control secure_premises"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'premises_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
										 <option selected disabled>Select Delegate</option> 
										 <?php
										 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
										 if(count($get_delegate_info) > 0)
										 {
											 foreach($get_delegate_info as $del_result)
											 {
												 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
												 if(count($get_del_name) > 0)
												 {
													 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
												 }else{
													 $name = $del_result->delicate_email;
												 }
											 ?>
											 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->premises_input;?>" ><?php echo $name;?></option>  
											 <?php
											 }
										 }
										 ?>
										 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
									  </select>
									  <?php
									  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									  if(count($get_assign_del) > 0)
									  {
										  foreach($get_assign_del as $assign_del)
										  {
											  if($assign_del->premises_input == 1)
											  {
												  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
												  if(count($del_name) > 0)
												  {
													  $name = $del_name->firstname.' '.$del_name->lastname;
												  }else{
													  $name = $del_name->email;
												  }
												  echo "<code style='margin-right: 10px;'>".$name."</code>";
											  }
										  }
									  }
									?>
								</div>
									</div>
								</div>
						 
								<div class="col-md-6 col-sm-6">
								 <div class="form-group">
								  <select class="form-control" name="secure_premises">
							
									 <option disabled="" selected=""> choose an option</option>
									 <option  value="Yes" <?php echo ((isset($get_tech_answars->premises_input) && $get_tech_answars->premises_input == "Yes")?'selected':'');?>> Yes </option>
									 <option  value="No" <?php echo ((isset($get_tech_answars->premises_input) && $get_tech_answars->premises_input == "No")?'selected':'');?>> No </option>
									 <option  value="N/A" <?php echo ((isset($get_tech_answars->premises_input) && $get_tech_answars->premises_input == "N/A")?'selected':'');?>> N/A </option>
									 <option  value="Don’t know" <?php echo ((isset($get_tech_answars->premises_input) && $get_tech_answars->premises_input == "Don’t know")?'selected':'');?>> Don't know</option>
						
								  </select>
								 </div>
								</div>
						</div>

					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Data
						</h3>
					  </div>
					  		  <div class="step">
						 <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10a</b> If your business involves, sensitive data rich activities such as e-commerce, internet banking or confidential email etc,do you encrypt your data by using public key infrastructure (PKI) to manage your digital signatures and wifi certificates?&nbsp;<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Encrypting data can prevent unauthorised parties reading and tampering with your data. Do you or your system administrator encrypt your organisation�s data? To read an encrypted file, you must have access to a secret key or password that enables you to decrypt it.Public key infrastructure is a set of roles, policies, and procedures needed to create, manage, distribute, use, store, and revoke digital certificates and manage public-key encryption. The purpose of a PKI is to facilitate the secure electronic transfer of information for a range of network activities such as e-commerce, internet banking and confidential email. It is required for activities where simple passwords are an inadequate authentication method and more rigorous proof is required to confirm the identity of the parties involved in the communication and to validate the information being transferred."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="public_key_infrastructure_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="sense_data">
								  <select class="form-control public_key_infrastructure_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'public_key_infrastructure_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->public_key_infrastructure_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->public_key_infrastructure_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								</div>
							 </div>
						  </div>
							<div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="public_key_infrastructure_input"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->public_key_infrastructure_input) && $get_tech_answars->public_key_infrastructure_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->public_key_infrastructure_input) && $get_tech_answars->public_key_infrastructure_input == "0")?'selected':'');?>> No </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>10b</b> Do you have email security? <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Keeping sensitive information in email communication and accounts secure against unauthorized access, loss, or compromise."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="server_option_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="email_div">
								  <select class="form-control server_option"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'email_input_score',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->email_input_score;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <input type="hidden" class="server_option_val" value="<?php echo $del_access->email_input_score;?>" style="width:200px;height:30px;">
								  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->email_input_score == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								 </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="server_option"  >
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="yes" <?php echo ((isset($get_tech_answars->server_option_input) && $get_tech_answars->server_option_input == "yes")?'selected':'');?>> Yes </option>
									<option  value="no" <?php echo ((isset($get_tech_answars->server_option_input) && $get_tech_answars->server_option_input == "no")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						
					 </div>
					 	  <div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Managed Service Solution Providers
						</h3>
					  </div>
					  	  <div class="step">
				
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>11</b> Would you use a managed service provider (MSP), if you don't have a MSP? <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="A managed service solution provider (MSP or sometimes also called a MSSP) is a multi technology purpose solution provided by one company that remotely manages a customer's IT infrastructure and/or end-user systems, typically on a proactive basis and under a subscription model. In contrast to IT projects that tend to be one-time transactions. MSPs often provide their offerings under a service-level agreement, a contractual arrangement between the MSP and its customer that spells out the performance and quality metrics that will govern the relationship."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="managed_msp_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								 <br/>
								<div id="msp_div">
								  <select class="form-control managed_msp_input"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate_tech(this.value,'managed_msp_input',<?php echo $this->session->userdata['logged_in']['user_id'];?>);"> 
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_tech_info_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_tech_info_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->managed_msp_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_tech_info_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->managed_msp_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								</div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							   <div class="form-group">
								  <select class="form-control " name="managed_msp_input"  >
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_tech_answars->managed_msp_input) && $get_tech_answars->managed_msp_input == "1")?'selected':'');?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_tech_answars->managed_msp_input) && $get_tech_answars->managed_msp_input == "0")?'selected':'');?>> No </option>
								
								  </select>
							  </div>
						  </div>
					  	   <div class="col-md-12 text-right">
							<button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium">Update and Continue</button>
							</div>
						</div>
					 </div>
							</form>
						</div>
                        <div class="tab-pane fade" id="tab3primary">
							<form name="questionaire_non_tech" method="POST" action="<?php echo base_url('questionniare_results/update_nontech');?>">
							<div class="alert alert-success" id="success_div_nontech" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account – Delegates" in top right hand corner.</strong> </div>
								<div class="form_title">
									<h3><strong><i class="icon-cog-6"></i></strong> Business Continuity Procedures</h3>
      			 				</div>
								  <div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>12a</b> Do you use security monitoring solutions for your Business Continuity?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms."><i class="icon-info-circled-3"></i></a></label>
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="business_continuity" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="business_continuity_image">
								  <select class="form-control del_industry"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'business_continuity_security',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_non_tech_m');
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_plan_input;?>" ><?php echo $name;?></option>   
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->business_continuity_plan_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
											 }
										 }
									 }
									?>
								</div>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				          <select class="form-control" name="business_continuity_plan" id="business_continuity_plan">
					
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($get_nontech_answars->business_continuity_plan_input) && $get_nontech_answars->business_continuity_plan_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($get_nontech_answars->business_continuity_plan_input) && $get_nontech_answars->business_continuity_plan_input == '0')?'selected':'')?>> No </option>
						
				          </select>
				       </div>
				        </div>
				      </div>
				      <div class="row"  id="business_continuity_procedures" style="display:none;">
				        <div class="col-md-6 col-sm-6">
					       <div class="form-group">
					         <label class="not_required"><b>12b</b> Which Business Continuity Procedures do you use?<a data-container="body" class="tooltiplink" title="Please tell us if you use any business continuity procedures such as IDS (see above), IPS (see below) or Backups (see below). Intrusion Prevention System (IPS) is a network security/threat prevention technology that examines network traffic flows to detect and prevent vulnerability exploits. Vulnerability exploits usually come in the form of malicious inputs to a target application or service that attackers use to interrupt and gain control of an application or machine. Following a successful exploit, the attacker can disable the target application (resulting in a denial-of-service state), or can potentially access to all the rights and permissions available to the compromised application. Backups make copies of computer data to keep in case anything goes wrong with the original." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 <img src="<?php echo base_url();?>images/deligate_icon.png" class="del_business_continuity_procedure_input_button" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="business_continuity_procedure_input">
								  <select class="form-control del_business_continuity_procedure_input"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'business_continuity_procedure_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->business_continuity_procedure_input;?>" ><?php echo $name;?></option>   
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->business_continuity_procedure_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
											 }
										 }
									 }
									?>
								</div>
							  	 
					       </div>
				        </div>
						<?php
							$explode_proceduress = explode(',',$get_nontech_answars->business_continuity_procedure_input);
						 ?>
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_procedureszz[]" multiple="multiple">
						
								 <option disabled="" selected=""> choose an option</option>
								 <option value="IDS" <?php echo ((in_array("IDS",$explode_proceduress))?'selected':'')?>> IDS </option>
								 <option value="IPS" <?php echo ((in_array("IPS",$explode_proceduress))?'selected':'')?>> IPS </option>
								 <option value="Backups" <?php echo ((in_array("Backups",$explode_proceduress))?'selected':'')?>> Backups </option>
								 <option value="None" <?php echo ((in_array("None",$explode_proceduress))?'selected':'')?>> None </option>
							
							  </select>
						   </div>
				        </div>
				      </div>
				      <div class="row" id="business_continuity_regular_backup" style="display:none;">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label class="not_required"><b>12c</b> Does your business have regular backups?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you have Local or Remote backups or no backups at all."><i class="icon-info-circled-3"></i></a></label>
							 <img src="<?php echo base_url();?>images/deligate_icon.png" class="regular_backup" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="regular_backup_image">
								  <select class="form-control del_regular_backup"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'regular_backup',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->regular_backup;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->regular_backup == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
									}
								  ?>
								  </div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
						   <div class="form-group">
							<select class="form-control" name="business_continuity_regular_backup">
						
								 <option disabled="" value=""> choose an option</option>
								 <option  value="Local" <?php echo ((isset($get_nontech_answars->regular_backup_input) && $get_nontech_answars->regular_backup_input == 'Local')?'selected':'')?>> Local </option>
								 <option  value="Remote" <?php echo ((isset($get_nontech_answars->regular_backup_input) && $get_nontech_answars->regular_backup_input == 'Remote')?'selected':'')?>> Remote </option>
								 <option  value="None" <?php echo ((isset($get_nontech_answars->regular_backup_input) && $get_nontech_answars->regular_backup_input == 'None')?'selected':'')?>> None </option>
						
							  </select>
							</div>
						</div>
					</div>
				  </div>
				    <div class="form_title">
				      <h3>
				        <strong><i class="icon-certificate"></i></strong> Training
				      </h3>
				    </div>
					    <div class="step">
						<div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>13</b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training."><i class="icon-info-circled-3"></i></a></label>
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_training" style="height:15px;cursor: pointer;margin-top: -2px;">
						  <br/>
						  <div id="cybersecurity_training_image">
								  <select class="form-control cybersecurity_training_only"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'cybersecurity_training',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->training_cybersecurity_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->training_cybersecurity_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
						 
								  ?>
								  </div>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
							<select class="form-control" name="training_staff">
						
								 <option disabled="" selected=""> choose an option</option>
								 <option  value="Cyber security"  <?php echo ((isset($get_nontech_answars->training_cybersecurity_input) && $get_nontech_answars->training_cybersecurity_input == 'Cyber security')?'selected':'')?>> Cyber security </option>
								 <option  value="Physical security"  <?php echo ((isset($get_nontech_answars->training_cybersecurity_input) && $get_nontech_answars->training_cybersecurity_input == 'Physical security')?'selected':'')?>> Physical security </option>
								 <option  value="Cyber & Physical security"  <?php echo ((isset($get_nontech_answars->training_cybersecurity_input) && $get_nontech_answars->training_cybersecurity_input == 'Cyber & Physical security')?'selected':'')?>> Cyber & Physical security </option>
								 <option  value="None"  <?php echo ((isset($get_nontech_answars->training_cybersecurity_input) && $get_nontech_answars->training_cybersecurity_input == 'None')?'selected':'')?>> None </option>
							
							</select>
				         </div>
				        </div>
				      </div>
					</div>
					<div class="form_title">
				      <h3><strong><i class="icon-hammer"></i></strong> Accreditation/Regulation</h3>
				    </div>
					    	<div class="step">
				      <div class="row">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label><b>14</b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click<a href="https://staging.protectbox.com/regulation" target="_blank"> here</a> for detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink " title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &amp;/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>"><i class="icon-info-circled-3"></i></a></label>
						 <img src="<?php echo base_url();?>images/deligate_icon.png" class="security_standerds" style="height:15px;cursor: pointer;margin-top: -2px;">
						  <br/>
						  <div id="security_standers_image">
						  <select class="form-control information_security_standers"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'security_standerd',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
							 <option selected disabled>Select Delegate</option> 
							 <?php
							 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
							 if(count($get_delegate_info) > 0)
							 {
								 foreach($get_delegate_info as $del_result)
								 {
									 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
									 if(count($get_del_name) > 0)
									 {
										 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
									 }else{
										 $name = $del_result->delicate_email;
									 }
								 ?>
								 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->accreditation_security_standerd_input;?>" ><?php echo $name;?></option>  
								 <?php
								 }
							 }
							 ?>
							 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
						  </select>
						  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->accreditation_security_standerd_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
						 
								  ?>
								  </div>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_iso_iec" data-dropup-auto="false">
						 
						  	<option disabled="" selected="" value=""> choose an option</option>
							<option value='CyberEssentials only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials only') ? 'selected' :'')?>>CyberEssentials only</option>
							<option value='CyberEssentials+ only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ only') ? 'selected' :'')?>>CyberEssentials+ only</option>
							<option value='GDPR only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR only') ? 'selected' :'')?>>GDPR only</option>
							<option value='PCI/DSS only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'PCI/DSS only') ? 'selected' :'')?>>PCI/DSS only</option>
							<option value='ISO only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'ISO only') ? 'selected' :'')?>>ISO only</option>
							<option value='NIST only'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'NIST only') ? 'selected' :'')?>>NIST only</option>
							<option value='CyberEssentials & GDPR'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR') ? 'selected' :'')?>>CyberEssentials & GDPR</option>
							<option value='CyberEssentials+ & GDPR'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ & GDPR') ? 'selected' :'')?>>CyberEssentials+ & GDPR</option>
							<option value='CyberEssentials & GDPR & PCI/DSS'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials & GDPR & PCI/DSS</option>
							<option value='CyberEssentials+ & GDPR & PCI/DSS'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & PCI/DSS') ? 'selected' :'')?>>CyberEssentials+ & GDPR & PCI/DSS</option>
							<option value='GDPR & PCI/DSS'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & PCI/DSS') ? 'selected' :'')?>>GDPR & PCI/DSS</option>
							<option value='GDPR & PCI/DSS & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & PCI/DSS & NIST') ? 'selected' :'')?>>GDPR & PCI/DSS & NIST</option>
							<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
							<option value='CyberEssentials+ & GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO & NIST</option>
							<option value='GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
							<option value='GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
							<option value='CyberEssentials & GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='CyberEssentials+ & GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials+ & GDPR & ISO') ? 'selected' :'')?>>CyberEssentials+ & GDPR & ISO</option>
							<option value='CyberEssentials & GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'CyberEssentials & GDPR & ISO & NIST') ? 'selected' :'')?>>CyberEssentials & GDPR & ISO & NIST</option>
							<option value='GDPR & ISO'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & ISO') ? 'selected' :'')?>>GDPR & ISO</option>
							<option value='GDPR & ISO & NIST'<?php echo((isset($get_nontech_answars->aware_information_security_standard_input) && $get_nontech_answars->aware_information_security_standard_input == 'GDPR & ISO & NIST') ? 'selected' :'')?>>GDPR & ISO & NIST</option>
					
				          </select>
				         </div>
				        </div>
				      </div>
					  <!--<div class="row" id="training_iss" style="display:none;">
				        <div class="col-md-6 col-sm-6">
						   <div class="form-group">
							 <label class="not_required">Are you covered for any Information Security standards?</label>
						   </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
							<select name="training_isss[]" id="dates-field2" class="form-control" multiple="multiple">
								<?php 
									$explode_trainingzz = explode(',',$get_nontech_answars->cover_information_security_standard_input);
						        ?>
								 <option disabled="" selected="">click all that apply</option>
								 <option  value="CyberEssentials" <?php echo ((in_array("CyberEssentials",$explode_trainingzz))?'selected':'')?>>CyberEssentials</option>
								 <option  value="GDPR" <?php echo ((in_array("GDPR",$explode_trainingzz))?'selected':'')?>>GDPR</option>
								 <option  value="ISO/IEC" <?php echo ((in_array("ISO/IEC",$explode_trainingzz))?'selected':'')?>>ISO/IEC</option>
								 <option  value="NIST" <?php echo ((in_array("NIST",$explode_trainingzz))?'selected':'')?>> NIST </option>
								 <option  value="PDPA" <?php echo ((in_array("PDPA",$explode_trainingzz))?'selected':'')?>>PDPA</option>
								 <option  value="DFS/NYCRR500" <?php echo ((in_array("DFS/NYCRR500",$explode_trainingzz))?'selected':'')?>>DFS/NYCRR500</option>
								 <option  value="FFIEC" <?php echo ((in_array("FFIEC",$explode_trainingzz))?'selected':'')?>>FFIEC</option>
								 <option  value="CIS" <?php echo ((in_array("CIS",$explode_trainingzz))?'selected':'')?>> CIS </option>
								 <option  value="SOC 2" <?php echo ((in_array("SOC 2",$explode_trainingzz))?'selected':'')?>>SOC 2</option>
								 <option  value="HIPAA" <?php echo ((in_array("HIPAA",$explode_trainingzz))?'selected':'')?>>HIPAA</option>
								 <option  value="Other" <?php echo ((in_array("Other",$explode_trainingzz))?'selected':'')?>> Other </option>
							</select>
				         </div>
				        </div>
				      </div>-->
				      <!--<div class="row" id="accreditation_regular_audit" style="display:none;">
				        <div class="col-md-6 col-sm-6">
				       <div class="form-group">
				         <label class="not_required">Do you have any IT governance policies?<a data-container="body" class="tooltiplink" title="These policies can include Information security policy, Asset Management, Human resources security, Physical & Environmental Security, Communications & Operations Management, Access Control, Information systems acquisition, development & maintenance, Information security incident management, Business Continuity Management & Compliance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
				        </div>
				        </div>
				        <div class="col-md-6 col-sm-6">
				         <div class="form-group">
				          <select class="form-control" name="accreditation_regular_audit">
							 <option disabled="" selected=""> choose an option</option>
							 <option value="1" <?php echo ((isset($get_nontech_answars->it_governance_policy_input) && $get_nontech_answars->it_governance_policy_input == '1')?'selected':'')?>> Yes </option>
							 <option value="0" <?php echo ((isset($get_nontech_answars->it_governance_policy_input) && $get_nontech_answars->it_governance_policy_input == '0')?'selected':'')?>> No </option>
				          </select>
				         </div>
				        </div>
				      </div>-->
				    </div>
					 <div class="form_title">
				      <h3>
				        <strong><i class="icon-lock"></i></strong> <b>15</b> Passwords Policy
				      </h3>
				       </div>
					      <div class="step">
							<div class="row">
							  <div class="col-md-6 col-sm-6">
								<div class="form-group">
								  <label><b>a</b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you provide password strength checks on your customers."><i class="icon-info-circled-3"></i></a></label>
								  <img src="<?php echo base_url();?>images/deligate_icon.png" class="password_policy" style="height:15px;cursor: pointer;margin-top: -2px;">
								   <br/>
								   <div id="password_policy_image">
								  <select class="form-control password_policy_rules"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'password_policy_rules',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->adaquate_password_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->adaquate_password_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								 
								  ?>
								  </div>
								 </div>
							  </div>
							  <div class="col-md-6 col-sm-6">
								  <div class="form-group">
									  <select class="form-control" name="password_policy_rules">
									
											<option disabled="" selected=""> choose an option</option>
											<option  value="1" <?php echo ((isset($get_nontech_answars->password_rules_input) && $get_nontech_answars->password_rules_input == '1')?'selected':'')?>> Yes </option>
											<option  value="0" <?php echo ((isset($get_nontech_answars->password_rules_input) && $get_nontech_answars->password_rules_input == '0')?'selected':'')?>> No </option>
										
									  </select>
								  </div>
							  </div>
							</div>
						</div>
						  <div class="form_title">
						<h3>
						  <strong><i class="icon-user-md"></i></strong> Reputation Management
						</h3>
					  </div>
					    <div class="step">
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16a</b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cisp_pertnership" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="cisp_image">
								  <select class="form-control cisp_partnership_rule"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'cisp_partnership',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_security_information_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cyber_security_information_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							 
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_member_cisp">
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->member_cisp_input) && $get_nontech_answars->member_cisp_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->member_cisp_input) && $get_nontech_answars->member_cisp_input == '0')?'selected':'')?>>No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
					   <div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16b</b> Do you have cyber insurance?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you have taken out cyber insurance."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cyber_insurence" style="height:15px;cursor: pointer;margin-top: -2px;">
							    <br/>
								<div id="cyber_insurence_image">
								  <select class="form-control cyber_insurence_pertnership"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'cyber_insurence',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cyber_insurence_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cyber_insurence_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cyber_insurance">
						
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->cyber_insurance_input) && $get_nontech_answars->cyber_insurance_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->cyber_insurance_input) && $get_nontech_answars->cyber_insurance_input == '0')?'selected':'')?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>16c</b> Do you have threat detection and prevention solutions?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="threat_prvention" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="threat_prevention_image">
								  <select class="form-control threat_prevention_detection"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'threat_prevention_detection',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->threat_detection_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->threat_detection_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							 
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_threat_detection">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="Detection" <?php echo ((isset($get_nontech_answars->threat_detection_input) && $get_nontech_answars->threat_detection_input == 'Detection')?'selected':'')?>> Detection </option>
									<option  value="Prevention" <?php echo ((isset($get_nontech_answars->threat_detection_input) && $get_nontech_answars->threat_detection_input == 'Prevention')?'selected':'')?>> Prevention </option>
									<option  value="Detection_prevention" <?php echo ((isset($get_nontech_answars->threat_detection_input) && $get_nontech_answars->threat_detection_input == 'Detection_prevention')?'selected':'')?>>Detection And Prevention </option>
									<option  value="none" <?php echo ((isset($get_nontech_answars->threat_detection_input) && $get_nontech_answars->threat_detection_input == 'none')?'selected':'')?>>None </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>16d</b> Do you use cloud data storage solutions?&nbsp;<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Data storage solutions is the recording (storing) of information (data).Examples include Dropbox, OneDrive, Google Drive, Amazon Drive, Apple iCloud etc."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cloud_storage" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="cloud_storage_image">
								  <select class="form-control del_cloud_storage"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'cloud_storage',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->cloud_storage;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->cloud_storage == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="reputation_management_cloud_storage">
							
										<option disabled="" selected=""> choose an option</option>
										<option  value="1" <?php echo ((isset($get_nontech_answars->cloud_data_storage_solution_input) && $get_nontech_answars->cloud_data_storage_solution_input == '1')?'selected':'')?>> Yes </option>
										<option  value="0" <?php echo ((isset($get_nontech_answars->cloud_data_storage_solution_input) && $get_nontech_answars->cloud_data_storage_solution_input == '0')?'selected':'')?>> No </option>
									
								  </select>
							  </div>
						  </div>
						</div>
						
					  </div>
					    <div class="form_title">
						<h3>
						  <strong><i class="icon-laptop"></i></strong> Devices
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>17</b> Do you have device management solutions on the devices issued to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees"><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="device_management" style="height:15px;cursor: pointer;margin-top: -2px;">
							    <br/>
								<div id="device_management_image">
								  <select class="form-control device_management_solution"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'device_management_solution',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->device_management_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->device_management_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_mdm" id="device_mdm">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->device_to_employees_input) && $get_nontech_answars->device_to_employees_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->device_to_employees_input) && $get_nontech_answars->device_to_employees_input == '0')?'selected':'')?>> No </option>
								
								  </select>
							  </div>
						  </div>
						</div>
						<!--<div class="row" id="device_for_employees" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">What devices do you issue to your employees?&nbsp;<a data-container="body" class="tooltiplink" title="Do you provide Laptops, Phones or Tablets to your employees." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								<select class="form-control" name="device_for_employeess">
									<option disabled="" selected=""> choose an option</option>
									<option value="Laptops" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Laptops')?'selected':'')?>> Laptops </option>
									<option value="Phones" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Phones')?'selected':'')?>> Phones </option>
									<option value="Tablets" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'Tablets')?'selected':'')?>> Tablets </option>
									<option value="None" <?php echo ((isset($non_tech_detail->what_devices_employees_input) && $non_tech_detail->what_devices_employees_input == 'None')?'selected':'')?>> None </option>
								</select>
							 </div>
						  </div>
						</div>
						<div class="row" id="device_policy_software" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Does your company enforce a policy regarding loss or misuse of equipment?<a data-container="body" class="tooltiplink" title="Is there policies in place to cover misuse" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="device_policy_softwarezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->misuse_equipment_input) && $non_tech_detail->misuse_equipment_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->misuse_equipment_input) && $non_tech_detail->misuse_equipment_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<div class="row" id="device_have" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Do you have mobile device management (MDM)? <a data-container="body" class="tooltiplink" title="MDM primarily deals with corporate data segregation, securing emails, securing corporate documents on devices, enforcing corporate policies, integrating and managing mobile devices including laptops and handhelds of various categories. MDM implementations may be either on-premises or cloud-based. Usually involves use of a third party product that has management features for particular vendors of mobile devices such as such as smartphones, tablet computers, laptops and desktop computers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="device_havezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($non_tech_detail->mdm_input) && $non_tech_detail->mdm_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($non_tech_detail->mdm_input) && $non_tech_detail->mdm_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>-->
					</div>
					 <div class="form_title">
						<h3>
						  <strong><i class="icon-database"></i></strong> Remote working
						</h3>
					  </div>
					    <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required"><b>18</b> Do you have provide Virtual Private Networks (VPNs) or Web proxies to your employees who use their devices remotely?&nbsp;<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Virtual Private Networks (VPN) or web proxies that help keep employees devices safe when working remotely from office by changing your IP address and encrypting your data. Useful when using public wifis or travelling to countries like restrictive countries like China so a hacker or website spying on you wouldn't know which web pages you access. They also won't be able to see private information like passwords, usernames and bank or shopping details and so on. Don’t usually need both VPN and web proxy."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="vpn_home" style="height:15px;cursor: pointer;margin-top: -2px;">
						 	  <br/>
							  <div id="vpn_home_image">
								  <select class="form-control del_vpn_home"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'vpn_home',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->vpn_home;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->vpn_home == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remotezz" id="vpn_home_remote_deleted">
									<option disabled="" selected=""> choose an option</option>
									<option  value="VPN" <?php echo ((isset($get_nontech_answars->employees_use_remotely_input) && $get_nontech_answars->employees_use_remotely_input == 'VPN')?'selected':'')?>> VPN </option>
									<option  value="Web Proxy" <?php echo ((isset($get_nontech_answars->employees_use_remotely_input) && $get_nontech_answars->employees_use_remotely_input == 'Web Proxy')?'selected':'')?>> Web Proxy </option>
									<option  value="None" <?php echo ((isset($get_nontech_answars->employees_use_remotely_input) && $get_nontech_answars->employees_use_remotely_input == 'None')?'selected':'')?>> None </option>
							
								  </select>
							  </div>
						  </div>
						</div>
						<!-- <div class="row" id="vpn_home_remote_from_company" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Please tell us if employees ever work from home &/or access your company's systems & data remotely?&nbsp;<a data-container="body" class="tooltiplink" title="Do your employees use these devices remotely." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_home_remote_from_companyzz">
							
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->employees_work_home_input) && $get_nontech_answars->employees_work_home_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->employees_work_home_input) && $get_nontech_answars->employees_work_home_input == '0')?'selected':'')?>> No </option>
							
								  </select>
							  </div>
						  </div>
						</div> 
						<div class="row" id="vpn_have" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Do you have Virtual Private Networks (VPN) software?&nbsp; <a data-container="body" class="tooltiplink" title="Virtual Private Network (VPN) is the extension of a private network that encompasses links across shared or public networks like the Internet. With a VPN, you can send data between two computers across a shared or public network in a manner that emulates a point-to-point private link." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="vpn_havezz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->vpn_software_input) && $get_nontech_answars->vpn_software_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->vpn_software_input) && $get_nontech_answars->vpn_software_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>-->
					</div>
					<div class="form_title">
						<h3>
						  <strong><i class="icon-shield"></i></strong> Consultancy/Implementation
						</h3>
					  </div>
					  	  <div class="step">
						<div class="row">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label><b>19</b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cyber_consultent" style="height:15px;cursor: pointer;margin-top: -2px;">
							   <br/>
							   <div id="cyber_consultent_image">
								  <select class="form-control cyber_consultent_solution"  style="width:50%;display:none" onchange="get_delegate_nontech(this.value,'cyber_consultent',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->need_consultant_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_non_tech_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->need_consultant_input == 1)
										  {
											  $del_name = $ci->questionaire_non_tech_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
							  
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_cyber_consultantzz" id="consultancy_cyber_consultant_deleted">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->cyber_consultant_input) && $get_nontech_answars->cyber_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->cyber_consultant_input) && $get_nontech_answars->cyber_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div>
						<!-- <div class="row" id="consultancy_consultant_help" style="display:none;">
						  <div class="col-md-6 col-sm-6">
							<div class="form-group">
							  <label class="not_required">Would you need a consultant to help with implementation only, if you don't already have one?&nbsp;<a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"></a></label>
							 </div>
						  </div>
						  <div class="col-md-6 col-sm-6">
							  <div class="form-group">
								  <select class="form-control" name="consultancy_consultant_helpzz">
									<option disabled="" selected=""> choose an option</option>
									<option  value="1" <?php echo ((isset($get_nontech_answars->need_consultant_input) && $get_nontech_answars->need_consultant_input == '1')?'selected':'')?>> Yes </option>
									<option  value="0" <?php echo ((isset($get_nontech_answars->need_consultant_input) && $get_nontech_answars->need_consultant_input == '0')?'selected':'')?>> No </option>
								  </select>
							  </div>
						  </div>
						</div> -->
						 <div class="col-md-12 text-right">
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium">Update and Continue</button>
						</div>
					</div>
					</form>
				</div>
				<div class="tab-pane fade" id="tab4primary">
					<form method="POST" id="qstn_budget" name="questionaire" action="<?php echo base_url('questionniare_results/update_budget');?>">
					<div class="alert alert-success" id="success_div_budget" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account – Delegates" in top right hand corner.</strong> </div>
						<div class="form_title">
						<h3>
						  <strong><i class="icon-briefcase"></i></strong> Your Budget
						</h3>
					  </div>
					  <div class="step">
						  <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20a</b> What amount did you spend on cybersecurity annually?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>
								<a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please select from one of the five categories the amount you spend on cybersecurity products."><i class="icon-info-circled-3"></i></a></label>
								<img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="cybersecurity_image">
								<select class="form-control del_cybersecurity"  style="width:50%;display:none" onchange="get_delegate_budget(this.value,'amount_cybersecurity_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $ci =&get_instance();
									 $ci->load->model('questionaire_budget_m');
									 $get_delegate_info = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id;?>,<?php echo $del_result->amount_cybersecurity_input;?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
							  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->amount_cybersecurity_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_cyber_security" >
						
									<option  disabled="" selected="">choose an option</option>
									<option  value="Under £100" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "Under £100")?'selected':'');?>>Under £100</option>
									<option  value="£100-500" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "£100-500")?'selected':'')?>>£100-500</option>
									<option  value="£500-1,000" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "£500-1,000")?'selected':'')?>>£500-1,000</option>
									<option  value="£1,000-5,000" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "£1,000-5,000")?'selected':'')?>>£1,000-5,000</option>
									<option  value="£5,000-10,000" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "£5,000-10,000")?'selected':'')?>>£5,000-10,000</option>
									<option  value="£10,000+" <?php echo ((isset($get_budget_answars->amount_cybersecurity_input) && $get_budget_answars->amount_cybersecurity_input == "£10,000+")?'selected':'')?>>£10,000+</option>
						
							  </select>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20b</b> What percentage of your annual budget is that?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Could you tell us what % of your IT budget this amounted to."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="annual_budget_button"  style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="percentage_image">
								<select class="form-control del_annual_budget"  style="width:50%;display:none" onchange="get_delegate_budget(this.value,'percentage_annual_budget_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $del_result->user_id; ?>,<?php echo $del_result->percentage_annual_budget_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->percentage_annual_budget_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select class="form-control" name="budget_annual">
						
									<option disabled="" selected="">choose an option</option>
									<option  value="Under 25%" <?php echo ((isset($get_budget_answars->percentage_annual_budget_input) && $get_budget_answars->percentage_annual_budget_input == "Under 25%")?'selected':'')?>>Under 25%</option>
									<option  value="25-50%" <?php echo ((isset($get_budget_answars->percentage_annual_budget_input) && $get_budget_answars->percentage_annual_budget_input == "25-50%")?'selected':'')?>>25-50%</option>
									<option  value="50-75%" <?php echo ((isset($get_budget_answars->percentage_annual_budget_input) && $get_budget_answars->percentage_annual_budget_input == "50-75%")?'selected':'')?>>50-75%</option>
									<option  value="75%+" <?php echo ((isset($get_budget_answars->percentage_annual_budget_input) && $get_budget_answars->percentage_annual_budget_input == "75%+")?'selected':'')?>>75%+</option>
						
							  </select>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label><b>20c</b> What is your budget for Cyber Security per year?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us how much you intend to spend on security services each year."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="cybersecurity_year_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="security_image">
								<select class="form-control del_cybersecurity_year"  style="width:50%;display:none" onchange="get_delegate_budget(this.value,'budget_cybersecurity_per_year_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);"> 
								<option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->budget_cybersecurity_per_year_input; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->budget_cybersecurity_per_year_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
									
								  ?>
								  </div>
							 </div>
						  </div>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <?php
								if(isset($get_budget_answars->budget_cybersecurity_per_year_input) && $get_budget_answars->budget_cybersecurity_per_year_input != ''){
							  ?>
									<input type="text" name="budget_per_year" class="form-control" value="<?php echo $get_budget_answars->budget_cybersecurity_per_year_input;?>">
							  
							  <?php
								}else{	  
							  ?>
									<input type="text" name="budget_per_year" class="form-control">
							   <?php
									}
							   ?>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
							  <label class="not_required"><b>20d</b> How else should it be paid for?<a data-container="body" class="tooltiplink" title="" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" data-html="true" data-original-title="Please tell us if it should be paid for through cyber protection subsidise, Government funding (training, vouchers, etc.) or some other mechanism."><i class="icon-info-circled-3"></i></a></label>
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="budget_paid_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="budget_paid_image">
								<select class="form-control budget_paid"  style="width:50%;display:none" onchange="get_delegate_budget(this.value,'budget_paid',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->other_payment; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->other_payment == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								  ?>
								  </div>
							 </div>
						  </div>
						  <?php 
								$explode_budgets = explode(',',$get_budget_answars->paid_for_input);
						  ?>
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<select name="budget_paid[]" class="form-control" multiple="multiple">
									
												<option disabled="" selected="">click all that apply</option>
												<option value="Sellers of cyber protection subsidise" <?php echo ((in_array("Sellers of cyber protection subsidise",$explode_budgets))?'selected':'')?>>Sellers of cyber protection subsidise</option>
												<option value="Government" <?php echo ((in_array("Government",$explode_budgets))?'selected':'')?>>Government funding (training,vouchers,etc.)</option>
												<option value="other" <?php echo ((in_array("other",$explode_budgets))?'selected':'')?>>other</option>
										
									 </select>
								</div>	
							  </div>
							</div>
						</div>
					  </div>
					 </div>

					 	<div class="form_title">
							<h3 class="not_required">
							  <strong><i class="icon-users"></i></strong> <b>21</b> Do you have a preferred budget breakdown?
							</h3>
							<img src="<?php echo base_url();?>images/deligate_icon.png" class="budget_breakdown_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								<br/>
								<div id="budget_breakdown_image">
								<select class="form-control budget_breakdown"  style="width:15%;display:none" onchange="get_delegate_budget(this.value,'budget_breakdown',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
									 if(count($get_delegate_info) > 0)
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(count($get_del_name) > 0)
											 {
												 $name = $get_del_name->firstname.' '.$get_del_name->lastname;
											 }else{
												 $name = $del_result->delicate_email;
											 }
										 ?>
										 <option value="<?php echo $get_del_name->user_id;?>,<?php echo $del_result->budget_breakdown; ?>" ><?php echo $name;?></option>  
										 <?php
										 }
									 }
									 ?>
									 <option value="add_new_del"  data-toggle="modal" data-target="#modal">Add Delegate User</option>
								  </select>
								  <?php
								  $get_assign_del = $ci->questionaire_budget_m->get_assign_del($this->session->userdata['logged_in']['user_id']);
								  if(count($get_assign_del) > 0)
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->budget_breakdown == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(count($del_name) > 0)
											  {
												  $name = $del_name->firstname.' '.$del_name->lastname;
											  }else{
												  $name = $del_name->email;
											  }
											  echo "<code style='margin-right: 10px;'>".$name."</code>";
										  }
									  }
								  }
								
								  ?>
								  </div>
						  </div>
						  	  <div class="step">
						<div class="row">
						  <div class="col-md-12">
							<table class="table">
								<thead>
								  <tr>
									<th colspan="5">Budget Component</th>
									<th>Amount in</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td colspan="5">Currency</td>
									<td>
										<select name="currency" class="selectpicker form-control" data-live-search="true" style="width:90%;" data-dropup-auto="false">
										<option disabled="" selected="" <?php echo((isset($get_budget_answars->preferred_budget_breakdown_currency_input) && $get_budget_answars->preferred_budget_breakdown_currency_input != "") ? '' :'selected')?>>Please select</option>
										<?php
											foreach($get_currency AS $all_currency){
										?>
										<option value="<?php echo $all_currency->code;?>" <?php echo((isset($budget_detail->preferred_budget_breakdown_currency_input) && $budget_detail->preferred_budget_breakdown_currency_input == $all_currency->code) ? 'selected' :'')?>><?php echo $all_currency->country;?> <?php echo $all_currency->code;?> - <?php echo $all_currency->currency;?> <?php echo $all_currency->symbol;?></option>
										<?php
											}
										?>
									</select>
									</td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5" >Operating System</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_operating_system_input) && $get_budget_answars->tech_operating_system_input != ''){
										?>
										  <input  type="text" name="tech_os" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_operating_system_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_os" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Internet</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_internet_input) && $get_budget_answars->tech_internet_input != ''){
										?>
										  <input  type="text" name="tech_internet" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_internet_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_internet" class="form-control" style="width:90%;">
										<?php
											}
									    ?>										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Antivirus</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_antivirus_input) && $get_budget_answars->tech_antivirus_input != ''){
										?>
										  <input  type="text" name="tech_antivirus" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_antivirus_input;?>">
									    <?php
										 }else{
									    ?>
										   <input  type="text" name="tech_antivirus" class="form-control" style="width:90%;">
										<?php
											}
									    ?>										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Firewall</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_firewall_input) && $get_budget_answars->tech_firewall_input != ''){
										?>
										  <input  type="text" name="tech_firewall" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_firewall_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_firewall" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Access Control</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_access_control_input) && $get_budget_answars->tech_access_control_input != ''){
										?>
										  <input  type="text" name="tech_access_control" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_access_control_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_access_control" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Data</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_protecting_data_input) && $get_budget_answars->tech_protecting_data_input != ''){
										?>
										  <input  type="text" name="tech_protect_data" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_protecting_data_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_protect_data" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Managed Service Solution Providers (MSSPs)</td>
									<td>
										<?php
											if(isset($get_budget_answars->tech_mssp_input) && $get_budget_answars->tech_mssp_input != ''){
										?>
										 <input  type="text" name="tech_mssp" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->tech_mssp_input;?>">
									    <?php
										 }else{
									    ?>
										  <input  type="text" name="tech_mssp" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5"><strong>Non-Technical</strong></td>
									<td></td>
								  </tr>
								  <tr>
									<td colspan="5">Business Continuity Procedures</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_business_continuity_input) && $get_budget_answars->non_tech_business_continuity_input != ''){
										?>
										 <input  type="text" name="ntech_continuity_procedure" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_business_continuity_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_continuity_procedure" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Training</td> 
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_training_input) && $get_budget_answars->non_tech_training_input != ''){
										?>
										 <input  type="text" name="ntech_training" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_training_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_training" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Accreditation/Regulation</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_accredation_input) && $get_budget_answars->non_tech_accredation_input != ''){
										?>
										 <input  type="text" name="ntech_regulation" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_accredation_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_regulation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Reputation Management</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_reputation_management_input) && $get_budget_answars->non_tech_reputation_management_input != ''){
										?>
										 <input  type="text" name="ntech_reputation" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_reputation_management_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_reputation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Passwords policy</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_password_policy_input) && $get_budget_answars->non_tech_password_policy_input != ''){
										?>
										<input  type="text" name="ntech_pass_policy" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_password_policy_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_pass_policy" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Devices</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_devices_input) && $get_budget_answars->non_tech_devices_input != ''){
										?>
										<input  type="text" name="ntech_devices" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_devices_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_devices" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
										
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Remote working/Virtual Private Networks (VPN)</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_vpn_input) && $get_budget_answars->non_tech_vpn_input != ''){
										?>
										<input  type="text" name="ntech_vpn" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_vpn_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_vpn" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
									</td>
								  </tr>
								  <tr>
									<td colspan="5">Consultancy/Implementation</td>
									<td>
										<?php
											if(isset($get_budget_answars->non_tech_consultancy_input) && $get_budget_answars->non_tech_consultancy_input != ''){
										?>
										<input  type="text" name="ntech_implementation" class="form-control" style="width:90%;" value="<?php echo $get_budget_answars->non_tech_consultancy_input;?>">
									    <?php
										 }else{
									    ?>
										 <input  type="text" name="ntech_implementation" class="form-control" style="width:90%;">
										<?php
											}
									    ?>
										
									</td>
								  </tr>
								</tbody>
							</table>
						  </div><!-- End col-md-12-->
						</div>
						
						 <div class="col-md-12 text-right">
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium">Update and Continue</button>
						</div>
					  </div>
					</form>
					</div>
                </div>
                </div>
            </div>
        </div>
		<?php
			}					 
		?>
				<div class="tab-content rounded_div" style="min-height:150px;">
					<h3>News</h3>
					<div class=" table-responsive">
						
						<div class="col-md-6" style="border:1px solid #CCC;height:700px;overflow-x:scroll;">
							<!--<div align="center" style="font-size:20px;color:red;font-weight:bold;">No News Yet</div>-->
							<a class="twitter-timeline" href="https://twitter.com/ProtectBoxLtd?ref_src=twsrc%5Etfw">Tweets by ProtectBoxLtd</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						
						<div class="col-md-1">
							
						</div>

						<div class="col-md-5" style="border:1px solid #CCC;height:700px;overflow-x:scroll;">
							<!--<div align="center" style="font-size:20px;color:red;font-weight:bold;">No News Yet</div>-->
							<a class="twitter-timeline" href="https://twitter.com/securityXTV?ref_src=twsrc%5Etfw">Tweets by securityXTV</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						
						
					</div>

					<div class="row" style="text-align:center;margin-top:50px;"> <a href="<?php echo base_url('full_news_view');?>" class="btn btn-success btn-medium" style="text-align:center;"> Load More </a> </div>

				</div>
			  </div><!-- End col-md-12-->
		  </div>
        <!-- End row -->
		
	  <?php
		$date = time();
		if($date > $fetch_subscription->subscription_end_date){
	  ?>
	  <!-- strat -->
	 <!--<div class="tab-content rounded_div">-->
			<!--<div class="col-md-12 text-center">
				<p style="color:#EC8C0E;font-size:15px;font-weight:bold">SUBSCRIBE TO MONITOR PROGRESS OF PRODUCTS YOU&acute;RE BUYING</p>
			</div>-->
		<!--	<div class="col-md-12 text-center">
				<!-- COUPON CODE STARTS -->
				  <!--<div class="col-md-12">
						<?php
					//	if($this->session->flashdata('coupon_success')){
						?>
							<div class="alert alert-success"> <strong><?php //echo $this->session->flashdata('coupon_success');?></strong> </div>
						<?php
						//	}
						//	if($this->session->flashdata('coupon_invalid')){
						?>
							<div class="alert alert-danger"> <strong><?php //echo $this->session->flashdata('coupon_invalid');?></strong> </div>
						<?php
						//	}
							
						?>
					</div>-->
				<!--	<div class="col-md-12 text-center">
						<div class="row">
						  <div class="col-md-12 col-sm-5">
							<div class="form-group">
								<form name="copnsss" action="<?php echo base_url();?>questionniare_results/addcoupn" method="POST">
									
			
									<div class="details" style="text-align:right;">
									  Do you have coupon code? <input type="text" value="<?php echo((isset($this->session->userdata['subscription_coupon']) && $this->session->userdata['subscription_coupon'] != NULL)? $this->session->userdata['subscription_coupon']['coupon_code']:'');?>" name="subscr_coupon_code" class="clss_cpn_code" placeholder="Enter your coupon code" style="padding:5px;background:#ccff99;border:1px solid #CCC;">
									  <input type="submit" value="Apply" name="sub" style="padding:6px;" >
									  
									</div>
								</form>
							</div>
						  </div>
					   </div>
					</div>-->
				<!-- COUPON CODE ENDS -->
				<?php
				/*	$NumberOfEmployees = $employee_number->employees_input;
					if($NumberOfEmployees == '1-500'){
						$subs_price = 10;
					}else if($NumberOfEmployees == '500-5000'){
						$subs_price = 20;
					}else if($NumberOfEmployees == '5000 >'){
						$subs_price = 100;
					}*/
				?>
			<!--	<div class="col-md-12 text-center">
					
					<p style="color:#EC8C0E;font-size:20px;font-weight:bold">SUBSCRIBE for <?php echo $currencySymbol;?>&nbsp;<?php echo $subs_price;?> per month for access to your answers & our tool!</p>
				</div>-->
				<!--<a href="javascript:void(0);" class="btn btn-success"  style="text-align:center;width:100%;">SUBSCRIBE for <?php echo $currencyCode;?>&nbsp;<?php echo $subs_price;?> per month for access to your answers & our tool!</a>-->
				<!-- BUTTON -->
			<!--	<div class="row">
				
				  <div class="col-md-5 col-sm-5">
					<div class="form-group">
						<div id="paypal-button-container-subscribe"></div>
						<!--<a href="javascript:void(0);" class="btn btn-success"  style="text-align:center;width:100%;"><?php echo $currencyCode;?> <?php echo $total_payable_bundle_cost;?> BUY  NOW By Credit Card!</a>-->
				<!--	</div>
				  </div>
				 
				  <div class="col-md-2 col-sm-2">
					<div class="form-group">
						  <p style="font-size:30px;"> OR </p>
					</div>
				  </div>
				  
				  
				  

				   <div class="col-md-5 col-sm-5">
						<div class="form-group">
							
						<a href="javascript:void(0);" class="btn"  style="text-align:center;width:100%;color: #fff;
    background: #6772e5;border-radius: 23px;height: 45px;min-height: 30px;max-height: 55px;line-height: 30px;" data-toggle="modal" data-target="#StripePop"> Stripe Checkout</a>
						</div>
				  </div>
			   </div>-->
			   <!-- BUTTON -->
			
	<!--	</div>-->
		<!-- end -->
	
	<ul class="nav "></ul> 
	<!--<div class="tab-content rounded_div" style="margin-top:21px;">
		<div class="tab-pane active" id="home">
			  <div class="form_title">
				<h3>
				  <strong><i class="icon-stripe"></i></strong>CHOOSE PAYMENT OPTION
				</h3>
			  </div>
	
			  <div class="step" style="margin-top:50px;">
				   <div class="row">
					  <div class="col-md-5 col-sm-5">
						<div class="form-group">
							<div id="paypal-button-container"></div>
						</div>
					  </div>
					 
					  <div class="col-md-2 col-sm-2">
						<div class="form-group">
							  <p style="font-size:30px;"> OR </p>
						</div>
					  </div>

					   <div class="col-md-5 col-sm-5">
							<div class="form-group">
								<form action="<?php echo base_url('order_process');?>" method="POST">
								  <script
									src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									data-key="pk_test_n7WrQXu5AFq89DrbDVMlvUuE"
									data-amount="<?php echo ($total_payable_bundle_cost * 100);?>"
									data-name="ProtectBox Ltd"
									data-description="Purchase Order"
									data-image="https://staging.protectbox.com/images/favicon.png"
									data-locale="auto"
									data-currency="<?php echo $currencyCode;?>">
								  </script>
								</form>	
							</div>
					  </div>
				   </div>
			  </div>
 
		</div>
	</div>-->
  </div><!-- End col-md-12-->
  <?php
		}	  
  ?>
</div>
      <!-- End container -->
    </main>

	<div class="modal fade" id="alert_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<div class="form-group">
				<h3 style="text-align:center;">You have already assign this delegate user for this question!</h3>
			  </div>
			</div>
			<div class="modal-footer" style="border-top: 1px solid white;text-align:center;margin-top: -25px;">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	  </div>
	</div>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Add Delegate User</h5>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="exampleFormControlTextarea1" style="font-weight:normal;float:left">Delegate User's Email</label>
				<input type class="form-control" type="email" name="delegate_mail" required>
			  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-warning">Send Invitation</button>
			</div>
		</div>
	  </div>
	</div>
	
	
	
<div class="modal fade" id="StripePop" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1 class="text-center login-title">ProtectBox Ltd</h1>
                        <div class="account-wall1">
                            <img class="profile-img" src="https://staging.protectbox.com/images/favicon.png"
                                alt="">
                            <form class="form-signin" action="<?php echo base_url('order_process/smb_stripe_pay');?>" method="POST" id="paymentFrm">
                             <input type="hidden" name="amount" id="amount" value="<?php echo ($subs_price * 100);?>">
            					<input type="hidden" name="email" id="email" value="<?php echo $email;?>">
            					<input type="hidden" name="currency" id="currency" value="<?php echo $currencyCode;?>">
            					<input type="hidden" name="image" id="image" value="https://staging.protectbox.com/images/favicon.png">
                            <input type="text" name="card_name" id="card_name"  class="form-control forreadonly" placeholder="Name On Card" required autofocus>
                            <input type="text" name="card_number" id="card_number"  class="form-control forreadonly" placeholder="Card Number" required>
                            <input type="text" name="card_month" id="card_month" class="form-control forreadonly" autocomplete="off" data-dataidvaklue="expirymonth_valdation" maxlength="2"  placeholder="Expiry Month (MM)" required>
                            <input type="text" name="card_year" id="card_year"  class="form-control forreadonly" autocomplete="off"  placeholder="Expiry Year (YYYY)" required>
                            <input type="password"  name="card_cvv" id="name="card_cvv" class="form-control forreadonly"  placeholder="CVV" autocomplete="off"  maxlength="4" data-dataidvaklue="card_cvv_valdation"  required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="payBtn">
                                <?php echo $currencyCode;?> <?php echo $subs_price;?> Pay</button>
                           
                            </form>
                        </div>
                      
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
  
  

    <!-- End main -->
    <?php $this->load->view("common/footer");?>


	<!-- questionnaire delegate assign starts -->
	<script>
	$('.industry_button').click(function() {
		$('.del_industry').toggle();
	});

	$('.employees_button').click(function() {
		$('.del_employees').toggle();
	});

	$('.location_button').click(function() {
		$('.del_location').toggle();
	});

	$('.supply_button').click(function() {
		$('.del_supply').toggle();
	});

	function get_delegate(del,key,sme_id)
	{
		var split = del.split(",");
		var del_id = split[0];
		var key_val = split[1];
		
		if(del =="add_new_del")
		{ 
			$('#modal').modal("show"); 
			$('.del_industry').hide();
			$('.del_employees').hide();
			$('.del_location').hide();
			$('.del_supply').hide();
		}
		else if(key == 'industry_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_industry').hide();
		}else if(key == 'employees_input' && key_val == 1){
			$('#alert_modal').modal("show");
			$('.del_employees').hide();
		}else if(key == 'location_input' && key_val == 1){
			$('#alert_modal').modal("show");
			$('.del_location').hide();
		}else if(key == 'handle_data_input' && key_val == 1){
			$('#alert_modal').modal("show");
			$('.del_supply').hide();
		}
		else{
				if(key == 'industry_input'){
					var update_array = 'UPDATE delegate_basics SET industry_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'employees_input'){
					var update_array = 'UPDATE delegate_basics SET employees_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'location_input'){
					var update_array = 'UPDATE delegate_basics SET location_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'handle_data_input'){
					var update_array = 'UPDATE delegate_basics SET handle_data_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
		
				
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire/delegate_assign',
				  data: {	'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div').show();
					 $('.del_industry').hide();
					 $('.del_employees').hide();
					 $('.del_location').hide();
					 $('.del_supply').hide();
					 if(key == 'industry_input'){
						 $("#industry_in").html(response);
					 }else if(key == 'employees_input'){
						 $("#employee_havezz").html(response);
					 }else if(key == 'location_input'){
						 $("#located").html(response);
					 }else if(key == 'handle_data_input'){
						 $("#handlez_data").html(response);
					 }
					 $('html, body').animate({
						scrollTop: ($('#qq_div').offset().top)
					},500);
				  }
				}); 
		}
	}
	</script>
	<!-- questionnaire delegate assign ends -->

	<!-- questionnaire tech info delegate assign starts -->

	<script>
	$('.operating_system_button').click(function() {
		$('.del_operating_system').toggle();
	});

	$('.antivirus_installed_button').click(function() {
		$('.del_antivirus_installed').toggle();
	});

	$('.firewall_button').click(function() {
		$('.del_firewall').toggle();
	});

	$('.manage_it_button').click(function() {
		$('.del_manage_it').toggle();
	});

	$('.internet_have_button').click(function() {
		$('.del_internet_have').toggle();
	});

	$('.internet_wifi_lan_button').click(function() {
		$('.del_internet_wifi_lan').toggle();
	});

	$('.wifi_public_button').click(function() {
		$('.del_wifi_public').toggle();
	});

	$('.wpa2_input_button').click(function() {
		$('.del_wpa2_input').toggle();
	});

	$('.del_browser_button').click(function() {
		$('.del_browser_input').toggle();
	});

	$('.del_update_browser_button').click(function() {
		$('.del_update_browser_input').toggle();
	});

	$('.del_email_input_button').click(function() {
		$('.del_email_input').toggle();
	});

	$('.del_spam_filtering_input_button').click(function() {
		$('.del_spam_filtering_input').toggle();
	});

	$('.del_ad_blocking_input_button').click(function() {
		$('.del_ad_blocking_input').toggle();
	});

	$('.del_web_hosting_input_button').click(function() {
		$('.del_web_hosting_input').toggle();
	});

	$('.del_web_hosting_option_input_button').click(function() {
		$('.del_web_hosting_option_input').toggle();
	});

	$('.hacking_button').click(function() {
		$('.del_hacking').toggle();
	});

	$('.del_logs_input_button').click(function() {
		$('.del_logs_input').toggle();
	});

	$('.del_software_update_input_button').click(function() {
		$('.del_software_update_input').toggle();
	});

	$('.del_data_encrypt_input_button').click(function() {
		$('.del_data_encrypt_input').toggle();
	});

	$('.access_button').click(function() {
		$('.del_access').toggle();
	});

	$('.directory_button').click(function() {
		$('.directory').toggle();
	});

	$('.authentication_button').click(function() {
		$('.authentication').toggle();
	});

	$('.secure_premises_button').click(function() {
		$('.secure_premises').toggle();
	});

	$('.public_key_infrastructure_input_button').click(function() {
		$('.public_key_infrastructure_input').toggle();
	});

	$('.server_option_button').click(function() {
		$('.server_option').toggle();
	});

	$('.managed_msp_input_button').click(function() {
		$('.managed_msp_input').toggle();
	});

	function get_delegate_tech(del,key,sme_id)
	{
		var split = del.split(",");
		var del_id = split[0];
		var key_val = split[1];
		
		if(del =="add_new_del")
		{ 
			 $('#modal').modal("show"); 
			 $('.del_operating_system').hide();
			 $('.del_antivirus_installed').hide();
			 $('.del_firewall').hide();
			 $('.del_manage_it').hide();
			 $('.del_internet_have').hide();
			 $('.del_internet_wifi_lan').hide();
			 $('.del_wifi_public').hide();
			 $('.del_wpa2_input').hide();
			 $('.del_browser_input').hide();
			 $('.del_update_browser_input').hide();
			 $('.del_email_input').hide();
			 $('.del_spam_filtering_input').hide();
			 $('.del_ad_blocking_input').hide();
			 $('.del_web_hosting_input').hide();
			 $('.del_web_hosting_option_input').hide();
			 $('.del_hacking').hide();
			 $('.del_logs_input').hide();
			 $('.del_software_update_input').hide();
			 $('.del_data_encrypt_input').hide();
			 $('.del_access').hide();
			 $('.directory').hide();
			 $('.authentication').hide();
			 $('.secure_premises').hide();
			 $('.public_key_infrastructure_input').hide();
			 $('.server_option').hide();
			 $('.managed_msp_input').hide();
		}
		else if(key == 'os_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_operating_system').hide();
		}
		else if(key == 'antivirus_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_antivirus_installed').hide();
		}
		else if(key == 'firewall_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_firewall').hide();
		}
		else if(key == 'manage_it_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_manage_it').hide();
		}
		else if(key == 'internet_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_internet_have').hide();
		}
		else if(key == 'internet_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_internet_wifi_lan').hide();
		}
		else if(key == 'wifi_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_wifi_public').hide();
		}
		else if(key == 'wpa2_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_wpa2_input').hide();
		}
		else if(key == 'browser_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_browser_input').hide();
		}
		else if(key == 'update_browser_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_update_browser_input').hide();
		}
		else if(key == 'email_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_email_input').hide();
		}
		else if(key == 'spam_filtering_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_spam_filtering_input').hide();
		}
		else if(key == 'ad_blocking_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_ad_blocking_input').hide();
		}
		else if(key == 'web_hosting_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_web_hosting_input').hide();
		}
		else if(key == 'web_hosting_option_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_web_hosting_option_input').hide();
		}
		else if(key == 'hacking_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_hacking').hide();
		}
		else if(key == 'logs_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_logs_input').hide();
		}
		else if(key == 'software_update_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_software_update_input').hide();
		}
		else if(key == 'data_encrypt_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_data_encrypt_input').hide();
		}
		else if(key == 'system_access_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_access').hide();
		}
		else if(key == 'directory_service_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.directory').hide();
		}
		else if(key == 'two_factor_authentication_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.authentication').hide();
		}
		else if(key == 'premises_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.secure_premises').hide();
		}
		else if(key == 'public_key_infrastructure_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.public_key_infrastructure_input').hide();
		}
		else if(key == 'email_input_score' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.server_option').hide();
		}
		else if(key == 'managed_msp_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.managed_msp_input').hide();
		}
		else{
				if(key == 'os_input'){
					var update_array = 'UPDATE delegate_technical SET os_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'antivirus_input'){
					var update_array = 'UPDATE delegate_technical SET antivirus_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'firewall_input'){
					var update_array = 'UPDATE delegate_technical SET firewall_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'manage_it_input'){
					var update_array = 'UPDATE delegate_technical SET manage_it_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'internet_input'){
					var update_array = 'UPDATE delegate_technical SET internet_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'internet_option_input'){
					var update_array = 'UPDATE delegate_technical SET internet_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'wifi_option_input'){
					var update_array = 'UPDATE delegate_technical SET wifi_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'wpa2_input'){
					var update_array = 'UPDATE delegate_technical SET wpa2_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'browser_input'){
					var update_array = 'UPDATE delegate_technical SET browser_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'update_browser_input'){
					var update_array = 'UPDATE delegate_technical SET update_browser_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'email_input'){
					var update_array = 'UPDATE delegate_technical SET email_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'spam_filtering_input'){
					var update_array = 'UPDATE delegate_technical SET spam_filtering_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'ad_blocking_input'){
					var update_array = 'UPDATE delegate_technical SET ad_blocking_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'web_hosting_input'){
					var update_array = 'UPDATE delegate_technical SET web_hosting_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'web_hosting_option_input'){
					var update_array = 'UPDATE delegate_technical SET web_hosting_option_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'hacking_input'){
					var update_array = 'UPDATE delegate_technical SET hacking_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'logs_input'){
					var update_array = 'UPDATE delegate_technical SET logs_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'software_update_input'){
					var update_array = 'UPDATE delegate_technical SET software_update_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'data_encrypt_input'){
					var update_array = 'UPDATE delegate_technical SET data_encrypt_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'system_access_input'){
					var update_array = 'UPDATE delegate_technical SET system_access_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'directory_service_input'){
					var update_array = 'UPDATE delegate_technical SET directory_service_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'two_factor_authentication_input'){
					var update_array = 'UPDATE delegate_technical SET two_factor_authentication_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'premises_input'){
					var update_array = 'UPDATE delegate_technical SET premises_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'public_key_infrastructure_input'){
					var update_array = 'UPDATE delegate_technical SET public_key_infrastructure_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'email_input_score'){
					var update_array = 'UPDATE delegate_technical SET email_input_score = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'managed_msp_input'){
					var update_array = 'UPDATE delegate_technical SET managed_msp_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				
				//alert(del);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_tech_info/delegate_assign',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div_tech').show();
					 $('.del_operating_system').hide();
					 $('.del_antivirus_installed').hide();
					 $('.del_firewall').hide();
					 $('.del_manage_it').hide();
					 $('.del_internet_have').hide();
					 $('.del_internet_wifi_lan').hide();
					 $('.del_hacking').hide();
					 $('.del_access').hide();
					 $('.directory').hide();
					 $('.authentication').hide();
					 $('.secure_premises').hide();
					 $('.public_key_infrastructure_input').hide();
					 $('.server_option').hide();
					 $('.managed_msp_input').hide();

					if(key == 'os_input'){
						 $("#os_use").html(response);
					 }else if(key == 'antivirus_input'){
						$("#antivirus_product").html(response);
					 }else if(key == 'firewall_input'){
						$("#firewalzz").html(response);
					 }else if(key == 'manage_it_input'){
						$("#it_manage").html(response);
					 }else if(key == 'internet_input'){
						$("#have_internet").html(response);
					 }else if(key == 'internet_option_input'){
						$("#wifi_lan").html(response);
					 }else if(key == 'wifi_option_input'){
						$("#wifi_public").html(response);
					 }else if(key == 'wpa2_input'){
						$("#wpa2_input").html(response);
					 }else if(key == 'browser_input'){
						$("#browser_input").html(response);
					 }else if(key == 'update_browser_input'){
						$("#update_browser_input").html(response);
					 }else if(key == 'email_input'){
						$("#email_input").html(response);
					 }else if(key == 'spam_filtering_input'){
						$("#spam_filtering_input").html(response);
					 }else if(key == 'ad_blocking_input'){
						$("#ad_blocking_input").html(response);
					 }else if(key == 'web_hosting_input'){
						$("#web_hosting_input").html(response);
					 }else if(key == 'web_hosting_option_input'){
						$("#web_hosting_option_input").html(response);
					 }else if(key == 'hacking_input'){
						$("#is_hacking").html(response);
					 }else if(key == 'logs_input'){
						$("#logs_input").html(response);
					 }else if(key == 'software_update_input'){
						$("#software_update_input").html(response);
					 }else if(key == 'data_encrypt_input'){
						$("#data_encrypt_input").html(response);
					 }else if(key == 'system_access_input'){
						$("#access_levels").html(response);
					 }else if(key == 'directory_service_input'){
						$("#open_active_dir").html(response);
					 }else if(key == 'two_factor_authentication_input'){
						$("#two_factorzz").html(response);
					 }else if(key == 'premises_input'){
						$("#secure_premise").html(response);
					 }else if(key == 'public_key_infrastructure_input'){
						$("#sense_data").html(response);
					 }else if(key == 'email_input_score'){
						$("#email_div").html(response);
					 }else if(key == 'managed_msp_input'){
						$("#msp_div").html(response);
					 }
					
					 $('html, body').animate({
						scrollTop: ($('#qq_div').offset().top)
					},500);
				  }
				}); 
			   /* ajax code ends*/
		}
	}
	</script>

	<!-- questionnaire tech info delegate assign ends -->

	<!-- questionnaire non-tech info delegate assign strats -->

	<script>
	$('.business_continuity').click(function() {
		$('.del_industry').toggle();
	});

	$('.del_business_continuity_procedure_input_button').click(function() {
		$('.del_business_continuity_procedure_input').toggle();
	});

	$('.regular_backup').click(function() {
		$('.del_regular_backup').toggle();
	});

	$('.cybersecurity_training').click(function() {
		$('.cybersecurity_training_only').toggle();
	});

	$('.security_standerds').click(function() {
		$('.information_security_standers').toggle();
	});

	$('.password_policy').click(function() {
		$('.password_policy_rules').toggle();
	});

	$('.cisp_pertnership').click(function() {
		$('.cisp_partnership_rule').toggle();
	});

	$('.cyber_insurence').click(function() {
		$('.cyber_insurence_pertnership').toggle();
	});

	$('.threat_prvention').click(function() {
		$('.threat_prevention_detection').toggle();
	});

	$('.cloud_storage').click(function() {
		$('.del_cloud_storage').toggle();
	});
	
	$('.device_management').click(function() {
		$('.device_management_solution').toggle();
	});

	$('.vpn_home').click(function() {
		$('.del_vpn_home').toggle();
	});

	$('.cyber_consultent').click(function() {
		$('.cyber_consultent_solution').toggle();
	});

	function get_delegate_nontech(del,key,sme_id)
	{
		var split = del.split(",");
		var del_id = split[0];
		var key_val = split[1];
		
		if(del =="add_new_del")
		{ 
			 $('#modal').modal("show"); 
			 $('.del_industry').hide();
			 $('.del_business_continuity_procedure_input').hide();
			 $('.del_regular_backup').hide();
			 $('.cybersecurity_training_only').hide();
			 $('.information_security_standers').hide();
			 $('.password_policy_rules').hide();
			 $('.cisp_partnership_rule').hide();
			 $('.cyber_insurence_pertnership').hide();
			 $('.threat_prevention_detection').hide();
			 $('.del_cloud_storage').hide();
			 $('.device_management_solution').hide();
			 $('.del_vpn_home').hide();
			 $('.cyber_consultent_solution').hide();
		}
		else if(key == 'business_continuity_security' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_industry').hide();
		}
		else if(key == 'business_continuity_procedure_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_business_continuity_procedure_input').hide();
		}else if(key == 'regular_backup' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_regular_backup').hide();
		}
		else if(key == 'cybersecurity_training' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cybersecurity_training_only').hide();
		}
		else if(key == 'security_standerd' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.information_security_standers').hide();
		}
		else if(key == 'password_policy_rules' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.password_policy_rules').hide();
		}
		else if(key == 'cisp_partnership' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cisp_partnership_rule').hide();
		}
		else if(key == 'cyber_insurence' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cyber_insurence_pertnership').hide();
		}
		else if(key == 'threat_prevention_detection' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.threat_prevention_detection').hide();
		}
		else if(key == 'cloud_storage' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cloud_storage').hide();
		}
		else if(key == 'device_management_solution' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.device_management_solution').hide();
		}
		else if(key == 'vpn_home' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_vpn_home').hide();
		}
		else if(key == 'cyber_consultent' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.cyber_consultent_solution').hide();
		}
		else{
				if(key == 'business_continuity_security')
				{
					var update_array = 'UPDATE delegate_non_technical SET business_continuity_plan_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'business_continuity_procedure_input')
				{
					var update_array = 'UPDATE delegate_non_technical SET business_continuity_procedure_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'regular_backup')
				{
					var update_array = 'UPDATE delegate_non_technical SET regular_backup = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cybersecurity_training')
				{
					var update_array = 'UPDATE delegate_non_technical SET training_cybersecurity_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'security_standerd')
				{
					var update_array = 'UPDATE delegate_non_technical SET accreditation_security_standerd_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'password_policy_rules')
				{
					var update_array = 'UPDATE delegate_non_technical SET adaquate_password_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cisp_partnership')
				{
					var update_array = 'UPDATE delegate_non_technical SET cyber_security_information_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cyber_insurence')
				{
					var update_array = 'UPDATE delegate_non_technical SET cyber_insurence_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'threat_prevention_detection')
				{
					var update_array = 'UPDATE delegate_non_technical SET threat_detection_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cloud_storage')
				{
					var update_array = 'UPDATE delegate_non_technical SET cloud_storage = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'device_management_solution')
				{
					var update_array = 'UPDATE delegate_non_technical SET device_management_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'vpn_home')
				{
					var update_array = 'UPDATE delegate_non_technical SET vpn_home = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'cyber_consultent')
				{
					var update_array = 'UPDATE delegate_non_technical SET need_consultant_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				//alert(update_array);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_nontech_info/delegate_assign',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div_nontech').show();
					 $('.del_industry').hide();
					 $('.business_continuity_procedure_input').hide();
					 $('.del_regular_backup').hide();
					 $('.cybersecurity_training_only').hide();
					 $('.information_security_standers').hide();
					 $('.password_policy_rules').hide();
					 $('.cisp_partnership_rule').hide();
					 $('.cyber_insurence_pertnership').hide();
					 $('.threat_prevention_detection').hide();
					 $('.del_cloud_storage').hide();
					 $('.device_management_solution').hide();
					 $('.del_vpn_home').hide();
					 $('.cyber_consultent_solution').hide();

					 if(key == 'business_continuity_security')
					 {
						 $("#business_continuity_image").html(response);
					 }
					 else if(key == 'business_continuity_procedure_input')
					 {
						 $("#business_continuity_procedure_input").html(response);
					 }
					 else if(key == 'regular_backup')
					 {
						 $("#regular_backup_image").html(response);
					 }
					 else if(key == 'cybersecurity_training')
					 {
						 $("#cybersecurity_training_image").html(response);
					 }
					 else if(key == 'security_standerd')
					 {
						 $("#security_standers_image").html(response);
					 }
					 else if(key == 'password_policy_rules')
					 {
						 $("#password_policy_image").html(response);
					 }
					 else if(key == 'cisp_partnership')
					 {
						 $("#cisp_image").html(response);
					 }
					 else if(key == 'cyber_insurence')
					 {
						 $("#cyber_insurence_image").html(response);
					 }
					 else if(key == 'threat_prevention_detection')
					 {
						 $("#threat_prevention_image").html(response);
					 }
					 else if(key == 'cloud_storage')
					 {
						 $("#cloud_storage_image").html(response);
					 }
					 else if(key == 'device_management_solution')
					 {
						 $("#device_management_image").html(response);
					 }
					 else if(key == 'vpn_home')
					 {
						 $("#vpn_home_image").html(response);
					 }
					 else if(key == 'cyber_consultent')
					 {
						 $("#cyber_consultent_image").html(response);
					 }
					
					 $('html, body').animate({
						scrollTop: ($('#qq_div').offset().top)
					},500);
				  }
				}); 
			   /* ajax code ends*/
		}
		
		
	}
	</script>

	<!-- questionnaire non-tech info delegate assign ends -->

	<!-- questionnaire budget info delegate assign starts -->

	<script>
	$('.cybersecurity_button').click(function() {
		$('.del_cybersecurity').toggle();
	});

	$('.annual_budget_button').click(function() {
		$('.del_annual_budget').toggle();
	});

	$('.cybersecurity_year_button').click(function() {
		$('.del_cybersecurity_year').toggle();
	});

	$('.budget_paid_button').click(function() {
		$('.budget_paid').toggle();
	});

	$('.budget_breakdown_button').click(function() {
		$('.budget_breakdown').toggle();
	});

	function get_delegate_budget(del,key,sme_id)
	{
		var split = del.split(",");
		var del_id = split[0];
		var key_val = split[1];

		if(del =="add_new_del")
		{ 
			$('#modal').modal("show"); 
			$('.del_cybersecurity').hide();
			 $('.del_annual_budget').hide();
			 $('.del_cybersecurity_year').hide();
			 $('.budget_paid').hide();
			 $('.budget_breakdown').hide();
		}
		if(key == 'amount_cybersecurity_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cybersecurity').hide();
		}
		else if(key == 'percentage_annual_budget_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_annual_budget').hide();
		}
		else if(key == 'budget_cybersecurity_per_year_input' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.del_cybersecurity_year').hide();
		}
		else if(key == 'budget_paid' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.budget_paid').hide();
		}
		else if(key == 'budget_breakdown' && key_val == 1)
		{
			$('#alert_modal').modal("show");
			$('.budget_breakdown').hide();
		}
		else{
				if(key == 'amount_cybersecurity_input')
				{
					var update_array = 'UPDATE delegate_budget SET amount_cybersecurity_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'percentage_annual_budget_input')
				{
					var update_array = 'UPDATE delegate_budget SET percentage_annual_budget_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_cybersecurity_per_year_input')
				{
					var update_array = 'UPDATE delegate_budget SET budget_cybersecurity_per_year_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_paid')
				{
					var update_array = 'UPDATE delegate_budget SET other_payment = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				else if(key == 'budget_breakdown')
				{
					var update_array = 'UPDATE delegate_budget SET budget_breakdown = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
				//alert(update_array);
				/*ajax code start*/
			   $.ajax({
				  url: '<?php echo base_url();?>questionaire_budget/delegate_assign_budget',
				  data: {
					  		'key' : key,
							'del' : del_id,
							'update_array': update_array
					    }, 
				  type: "post",
				  success: function(response){
					 $('#success_div_budget').show();
					 $('.del_cybersecurity').hide();
					 $('.del_annual_budget').hide();
					 $('.del_cybersecurity_year').hide();
					 $('.budget_paid').hide();
					 $('.budget_breakdown').hide();
					 if(key == 'amount_cybersecurity_input')
					 {
						 $("#cybersecurity_image").html(response);
					 }
					 else if(key == 'percentage_annual_budget_input')
					 {
						 $("#percentage_image").html(response);
					 }
					 else if(key == 'budget_cybersecurity_per_year_input')
					 {
						 $("#security_image").html(response);
					 }
					 else if(key == 'budget_paid')
					 {
						 $("#budget_paid_image").html(response);
					 }
					 else if(key == 'budget_breakdown')
					 {
						 $("#budget_breakdown_image").html(response);
					 }
					 
					 $('html, body').animate({
						scrollTop: ($('#qq_div').offset().top)
					},500);
				  }
				}); 
			   /* ajax code ends*/
		}
		
		
	}
	</script>
	<!-- questionnaire budget info delegate assign ends -->


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


	<script src="<?php echo base_url('js/rangeslider.js');?>"></script>
	<script src="<?php echo base_url('js/bootstrap-select.min.js');?>"></script>

	<script>
	/* Business continuity Procedures */

		$(document).ready(function() {
			
			$("img").on("error", function() {
			  //alert('error');
			  $(this).hide();
			 $(this).siblings('.yoo_okk').show();
			});

			$('[data-toggle="tooltip"]').tooltip(); 
			
			 /* TOP FILTER DROPDOWN OPTION STARTS*/ 
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
				}else{
				  // Enable all checkboxes.
				  $('.multiselect-ui option').each(function() {
					var input = $('input[value="' + $(this).val() + '"]');
					input.prop('disabled', false);
					input.parent('li').addClass('disabled');
				  });
				}
			  }
			});
			/* TOP FILTER DROPDOWN OPTION ENDS*/ 

		    $("#business_continuity_plan").change(function(){
			    if( $(this).val()=="1"){
					$("#business_continuity_procedures").show()
					$("#business_continuity_regular_backup").show()
				} else{
					$("#business_continuity_procedures").hide()
					$("#business_continuity_regular_backup").show()
				}
			});
			if( $("#business_continuity_plan").val()=="1"){
					$("#business_continuity_procedures").show()
					$("#business_continuity_regular_backup").show()
				} else{
					$("#business_continuity_procedures").hide()
					$("#business_continuity_regular_backup").show()
				}
		
	/* Information Security standards */
	
	    $("#accreditation_iso_iec").change(function(){
			if( $(this).val()=="1"){
				$("#training_iss").show()
				$("#accreditation_regular_audit").show()
			} else{
				$("#training_iss").hide()
				$("#accreditation_regular_audit").hide()
			}
		});
		if( $("#accreditation_iso_iec").val()=="1"){
				$("#training_iss").show()
				$("#accreditation_regular_audit").show()
			} else{
				$("#training_iss").hide()
				$("#accreditation_regular_audit").hide()
			}
		
	/* devices to your employees */
	
	    $("#device_mdm").change(function(){
			if( $(this).val()=="1"){
				$("#device_for_employees").show()
				$("#device_policy_software").show()
				$("#device_have").show()
			} else{
				$("#device_for_employees").hide()
				$("#device_policy_software").hide()
				$("#device_have").hide()
			}
		});
		if( $("#device_mdm").val()=="1"){
				$("#device_for_employees").show()
				$("#device_policy_software").show()
				$("#device_have").show()
			} else{
				$("#device_for_employees").hide()
				$("#device_policy_software").hide()
				$("#device_have").hide()
			}
		
	/* devices remotely */
	
	    $("#vpn_home_remote").change(function(){
			if( $(this).val()=="1"){
				$("#vpn_home_remote_from_company").show()
				$("#vpn_have").show()
			} else{
				$("#vpn_home_remote_from_company").hide()
				$("#vpn_have").hide()
			}
		});
		if( $("#vpn_home_remote").val()=="1"){
				$("#vpn_home_remote_from_company").show()
				$("#vpn_have").show()
			} else{
				$("#vpn_home_remote_from_company").hide()
				$("#vpn_have").hide()
			}
		
	/* Consultancy/Implementation */
	
	    $("#consultancy_cyber_consultant").change(function(){
			if( $(this).val()=="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
		});
		if( $("#consultancy_cyber_consultant").val()=="1"){
				$("#consultancy_consultant_help").show()
			} else{
				$("#consultancy_consultant_help").hide()
			}
	
		    $('#internet_have').on('change',function(){
				if( $(this).val()=="1"){
					$("#internet_wifi_lan").show(),
					$("#internet_public_wifi").show(),
					$("#internet_wpa2").show(),
					$("#browser_use").show(),
					$("#internet_browser_update").show(),
					$("#internet_email").show(),
					$("#internet_spam").show(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").show(),
					$("#internet_inhouse_remote").show()
				}
				else if( $(this).val()=="0"){
					$("#internet_wifi_lan").hide(),
					$("#internet_public_wifi").hide(),
					$("#internet_wpa2").hide(),
					$("#browser_use").hide(),
					$("#internet_browser_update").hide(),
					$("#internet_email").hide(),
					$("#internet_spam").hide(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").hide(),
					$("#internet_inhouse_remote").show()
				}
			});

			if( $('#internet_have').val()=="1"){
					$("#internet_wifi_lan").show(),
					$("#internet_public_wifi").show(),
					$("#internet_wpa2").show(),
					$("#browser_use").show(),
					$("#internet_browser_update").show(),
					$("#internet_email").show(),
					$("#internet_spam").show(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").show(),
					$("#internet_inhouse_remote").show()
				}
				else if( $('#internet_have').val()=="0"){
					$("#internet_wifi_lan").hide(),
					$("#internet_public_wifi").hide(),
					$("#internet_wpa2").hide(),
					$("#browser_use").hide(),
					$("#internet_browser_update").hide(),
					$("#internet_email").hide(),
					$("#internet_spam").hide(),
					$("#internet_ad_block").show(),
					$("#internet_web_host").hide(),
					$("#internet_inhouse_remote").show()
				}


			$('#access_control_what').on('change',function(){
				if( $(this).val()=="1"){
					$("#access_control_logs").show(),
					$("#access_control_update_software").show(),
					$("#access_control_encrypt").show()
				}
				else if( $(this).val()=="0"){
					$("#access_control_logs").hide(),
					$("#access_control_update_software").show(),
					$("#access_control_encrypt").hide()
				}
			});

			 if( $('#access_control_what').val()=="1"){
					$("#access_control_logs").show(),
					$("#access_control_update_software").show(),
					$("#access_control_encrypt").show()
				}
				else if( $('#access_control_what').val()=="0"){
					$("#access_control_logs").hide(),
					$("#access_control_update_software").show(),
					$("#access_control_encrypt").hide()
				}
			
			
				});
	</script>

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
			.css('left', 'calc(' + position + '% - ' + positionOffset + 'pt)')
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
    });
    </script>
	<script>
        paypal.Button.render({

            env: 'sandbox', // sandbox | production

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
			style: {
            label: 'checkout',
            size:  'medium',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
        },
            client: {
                sandbox:    'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
                production: 'xxxxxxxxxx'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '0.01', currency: 'USD' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
                });
            }

        }, '#paypal-button-container');

    </script>

   
	<script>
		paypal.Button.render({

			env: 'sandbox', // sandbox | production
		style: {
				label: 'checkout',
				size:  'responsive',    // small | medium | large | responsive
				shape: 'pill',     // pill | rect
				color: 'blue'      // gold | blue | silver | black
			},
			client: {
				sandbox:    'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
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
							   amount: { total: '<?php echo $subs_price;?>', currency: '<?php echo $currencyCode;?>' }      
							}
					],

					
					}
				});
			},

			// onAuthorize() is called when the buyer approves the payment
			onAuthorize: function(data, actions) {

				// Make a call to the REST API to execute the payment
				return actions.payment.execute().then(function() {
					 window.alert('Payment Complete!');
					//window.location.href = '<?php echo base_url();?>order_process/<?php echo $total_service;?>/<?php echo $supplier_id;?>/<?php echo $total_price;?>/<?php echo $total_commision_price;?>/<?php echo $total_payable_bundle_cost;?>';
					var pb_price = '<?php echo $subs_price; ?>';
					
					
				 /*ajax code start*/
				 $.ajax({
					url: '<?php echo base_url("order_process/smb_subscription_paypal");?>',
					data: {
							'subscription_price': pb_price
						  },
					type: "post",
					success: function(response){
						/*alert(response);
						exit;*/
						window.location.href = '<?php echo base_url();?>paypal_payment_success/'+response+'';
					}
				  });
				 /* ajax code ends*/
				}
			);
		},

			onCancel: function(data, actions) {
				window.location.href = '<?php echo base_url();?>payment_error';
			}

		}, '#paypal-button-container-subscribe');
	</script>
  

	
<script>
function browser_check()
{
	var browser_val = $('#other_browser').val();
	if(browser_val == 'Other-please specify')
	{
		$('#hiddenBrowser').show();
	}else{
		$('#hiddenBrowser').hide();
	}
}
</script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">

Stripe.setPublishableKey('pk_test_hNwF9WEpwjhptOF1t8T8tewN');


function stripeResponseHandler(status, response) {
    if (response.error) {
        
        $('#payBtn').removeAttr("disabled");
      
        $(".payment-errors").html('<div class="alert alert-danger"><strong>'+response.error.message+'</strong></div>');
    } else {
		
	  if (typeof ($(".redeemamount:checked").val()) == "undefined" || $(".redeemamount:checked").val() == "") {
     	$( '#redeemamountshow' ).append('<span style="margin: 0 auto; margin-top: -15px; margin-left: auto;margin-left: 0%;" class="error2  help-block redeemamounterr" id="redeemamounterr">Please enter Top Up Amount </span>');
     	$('#payBtn').removeAttr("disabled");
	  }else{
        var form$ = $("#paymentFrm");
        var token = response['id'];
       
form$.append('<input type="hidden" name="stripeToken" value='" + token + "' />');
        form$.get(0).submit();
	  }
	  
    }
}
$(document).ready(function() {
    //on form submit
    $("#paymentFrm").submit(function(event) {  
        //disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
        //create single-use token to charge the user
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        
        //submit from callback
        return false;
    });
});
</script>

	
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>


</html>
