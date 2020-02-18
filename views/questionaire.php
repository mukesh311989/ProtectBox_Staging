<!DOCTYPE html>
<html lang="en">
<?php
	include("sageone/sageone_constants.php");
	include("sageone/SageoneClient.php");
	include("sageone/SageoneSigner.php");
	$sageone_client = new SageoneClient($client_id, $client_secret, $callback_url, $auth_endpoint, $token_endpoint, $scope);
	/* get the redirect url for authorisation */
	$redirect_url = $sageone_client->authRedirect();
?>
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
.account_info
{
	border:3px solid #000;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.another
{
	border:3px solid #EC8C0E;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.sage_border
{
	border:3px solid #83C72A;padding:10px;margin:10px;border-radius:10px;margin-bottom:30px;
}
.btn-previous{
	color: #fff;
    background-color: #808080;
    border-color: #808080;
}
.btn-previous:hover {
  color: #fff;
  background-color: #5b5b5b;
  border-color: #5b5b5b;
}
.lbl_error {
	font-size: 11px;
	right: 0;
	height: 35px;
	line-height: 25px;
	background-color: #e34f4f;
	color: #fff;
	font-weight: 400;
	padding: 5px 6px;
	margin-top: 8px;
	border-radius: 4px;
}
.err_btn{
	height: 25px;
	font-size: 10px;
}
.reset_onchange{
	width: 200px !important;
}

	</style>
		
		
  </head>
  <body>
    <div id="load"></div>
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
    <main id="mouse_move">    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<!--  Tabs -->
				<div class="alert alert-success" id="success_div" style="display:none;"> <strong>You have successfully assigned this question to your chosen delegate user. You will see their name appear in red under the question & can manage their access through "Account - Delegates" in top right hand corner.</strong> </div>
				
				<?php
					if($this->session->flashdata('failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_failed');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('del_admin')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_admin');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_first_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_has')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_has');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('user_has')){
				?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('user_has');?></strong> </div>
				<?php
					}if($this->session->flashdata('del_first_success')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}if($this->session->flashdata('update')){
				?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update');?></strong> </div>
				<?php
					}
				if($this->session->flashdata('skip_flash') && !empty($this->session->flashdata('skip_flash'))){
					$flash = $this->session->flashdata('skip_flash');
				?>
				<div class="alert alert-danger"> <strong>You need to answer the required question or assign a delegate user to required question for skipping this page, thank you.</strong> </div>
				<?php
				}
				?>

				<ul class="nav nav-tabs " id="myDIV" style="margin-bottom:10px;">
					<li class="active arrow"><a href="<?php echo base_url('questionaire');?>"   class="red-gradient">Basics</a></li>
					<?php
					if($get_tech > 0)
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_tech_info');?>" class="red-gradient_success">Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Technical Info</a></li>
					<?php
					}
					if($get_non_tech > 0)
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_nontech_info');?>" class="red-gradient_success">Non-Technical Info</a></li>
					<?php
					}
					else{
					?>
					<li class="arrow "><a href="javascript:void(0);" class="red-gradient">Non-Technical Info</a></li>
					<?php
					}
					if($get_budget > 0)
					{
					?>
					<li class="arrow_success"><a href="<?php echo base_url('questionaire_budget');?>"  class="red-gradient_success">Budget</a> </li>
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

					   <div style="" class="account_info">
							<div class="row">
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>Click "Account" button in top right corner to change your details (Settings), see your purchases (Orders) or to come back to your saved answers before your first purchase (Questionnaire).</p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>You must answer each section (Basics, Technical Info etc) COMPLETELY to save your answers. You can press the <img src="<?php echo base_url('images/');?>skip.png" style="height:30px;"> button (in the bottom right of the page) if you have asked delegates to answer questions on a tab & are waiting for them to reply. This will take you to the next tab of questions. But your delegate will need to provide their answers before you can see the bundles in our Results. You can send reminder emails to your delegates, delete or re-assign delegates, from the "Delegates" menu, found by clicking the "Account" button in top right corner.</p>
								</div>
								<div class="col-md-12">
									<p style="font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>After you've bought from us once, you can buy a monthly subscription to store your answers to buy add-ons as many times as you'd like.</p>
								</div>
							</div>
						</div>


						<div style="" class="another">
							<div class="row">

							<?php
								define("CLIENT_ID", "3MVG95NPsF2gwOiPJ2VWkhIaH7yJwW2NgDvZz.QnMMg6oluCuc5.cX0aUx1SRBLC8sW4w1wLrN371Qj2lWML6");
								define("CLIENT_SECRET", "0D75BADBB995389B7FF69007984B8BBECD2465DB1A8BE18FC265327A3C2E9019");
								define("REDIRECT_URI", "https://protectbox.com/questionaire/callback");
								define("LOGIN_URI", "https://login.salesforce.com");
								$auth_url = LOGIN_URI. "/services/oauth2/authorize?response_type=code&client_id=". CLIENT_ID . "&redirect_uri=" . urlencode(REDIRECT_URI);

							?>
								<div class="col-md-12">
									<p style="color:#ec8b0d;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> All questions with an asterisk <span style="color:#ec8b0d;font-size:22px;margin-top:10px;">*</span> must be answered.</p>
								</div>
								
								<div class="col-md-12" style="padding:0px;margin:0px;">
									<div class="col-md-12">
										<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on  <a data-container="body"  href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a> for more info. </p>
									</div>
									<!-- <?php   
									$ci =&get_instance();
									$ci->load->model('questionaire_tech_info_m');
									$check_delegate = $ci->questionaire_tech_info_m->get_sme($this->session->userdata['logged_in']['user_id']);
									if($check_delegate->delegate_status == 1)
									{
									?>
									<div class="col-md-8">
										<p style="color:#808080;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> to ask delegate user to answer this question. </p>
									</div>
									<?php
									}
									?> -->
								
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i> If you still have further questions (after reading our green info icons, please use our chat function, in bottom right corner, in blue).</p>
								</div>
								<div class="col-md-12">
									<p style="color:#808080;font-size:13px;font-weight:normal"><i class="icon-circle-empty"> </i> Click on <img src="<?php echo base_url();?>images/deligate_icon.png" style="height:15px;margin-top: -2px;"> (next to each question) to ask delegate user to answer this question. You can also add a new delegate user by clicking this button.&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-previous" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div>
								<!-- <div class="col-md-12">
									<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div> -->

								<div class="col-md-12 text-center">
								<form action="<?php echo base_url("questionaire/add_delegate");?>" method="post" class="delegate_modal" enctype="multipart/form-data">
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
								</form>
								</div>
							</div>
						</div>
						 <?php
							if(isset($this->session->userdata['sage']['service_yourdetails']) || ($this->session->userdata['salesforce']['service_contact']))
							{
						?>
						<div style="" class="sage_border">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>We can get your answers to some of the following questions,  if you are a customer of the following partners. Click the box to allow us to get that information from them. Thank you</p>
								</div>
								<div class="col-md-12 text-center">
									<a href="javascript:void();" class="btn btn-success"  style="text-align:center;">Already Imported From Sage</a>
								</div>
							</div>
						</div>
						<?php
							}else{
						?>
						<div style="" class="sage_border">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:14px;font-weight:normal"><i class="icon-circle-empty"> </i>We can get your answers to some of the following questions,  if you are a customer of the following partners. Click the box to allow us to get that information from them. Thank you</p>
								</div>
								<div class="col-md-12 text-center">
									<a href="javascript:void();" class="btn btn-success" data-toggle="modal" data-target="#myModal"  style="text-align:center;">Import using SAGE</a>
									 <a href="<?php echo base_url("questionaire/import_xero?authenticate=1");?>" class="btn btn-success"  style="text-align:center;">Import using XERO</a> 
								</div>
							</div>
						</div>
						<?php
						}
						
						?> 
						<!-- <div style="margin:10px;margin-bottom:30px;">
							<div class="row">
								<div class="col-md-12">
									<p style="color:#808080;font-size:15px;font-weight:bold"><i class="icon-circle-empty"> </i>Give Delegate Access to your team member for answering your question.</p>
								</div>
								<div class="col-md-12">
									<p style="color:#83C72A;font-size:15px;"><code>Names of delegates that have been assigned a question will be shown in this way (red background)</code> &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" style="text-align:center;" data-toggle="modal" data-target="#modal">Create Delegate  User</button></p>
								</div>

								<div class="col-md-12 text-center">
								<form action="<?php echo base_url("questionaire/add_delegate");?>" method="post" class="delegate_modal" enctype="multipart/form-data">
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
								</form>
								</div>
							</div>
						</div> -->
						<?php
						$tab_one = $progress->tab_one;
						$total_progress = $tab_one;

						?>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"> 15% </div>
						</div>
						<div style="margin-top:-10px;margin-bottom:20px;margin-right:20px;"><span>10 minutes to complete this section, 1 hour in total</span></div>
					<form id="qstn" name="questionaire" method="POST" action="<?php echo base_url('questionaire/add_info');?>">
					  <div class="form_title">
						<h3>
						  <strong><i class="icon-industrial-building"></i></strong> Industry
						</h3>
					  </div>

					  <?php
						if(isset($this->session->userdata['sage']['business_info']))
						{
						
								$service = $this->session->userdata['sage']['service_yourdetails'];
								print_r ($service);
								//exit;
								$business = $this->session->userdata['sage']['business_info'];
								print_r($business);
								
								$product = $this->session->userdata['sage']['product_yourdetails'];
								print_r($product);

							
								$what_business =  $business['business']['subscriptions'][0]['displayed_as'];
								echo $what_business;
								$located = $business['business']['country']['displayed_as'];

								//echo $business[subscriptions]['displayed_as'];
							
						
					  ?>
					  <input type="hidden" value="sage" name="method">
					  <?php
						}
					  else if(isset($this->session->userdata['salesforce']['service_contact']))
					  {
						  $contact = $this->session->userdata['salesforce']['service_contact'];
						  //print_r($contact);
						 // foreach( )

					 ?>
					 <input type="hidden" value="sage" name="method">
					 <?php
					  }
						else
						{
					  ?>
					  <input type="hidden" value="direct" name="method">
					  <?php
					    }
					  ?>

			
					  <div class="step">
						   <div class="row">
						  <div class="col-md-5 col-sm-5">
							<div class="form-group">
								  <label><b>1a</b> What industry are you in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
								  <a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
								
								  <img src="<?php echo base_url();?>images/deligate_icon.png" class="industry_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="industry_in">
								  <select class="form-control del_industry reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'industry_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
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
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->industry_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
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
							if(isset($this->session->userdata['salesforce']['department']) && $this->session->userdata['salesforce']['department']!=''){
								$department = ucfirst($this->session->userdata['salesforce']['department']);
									if(isset($this->session->userdata['xero']['industry']) && $this->session->userdata['xero']['industry']!=''){
										$department = ucfirst($this->session->userdata['xero']['industry']);
								}
							}
							else if(isset($this->session->userdata['xero']['industry']) && $this->session->userdata['xero']['industry']!=''){
								$department = ucfirst($this->session->userdata['xero']['industry']);
								if(isset($this->session->userdata['salesforce']['department']) && $this->session->userdata['salesforce']['department']!=''){
									$department = ucfirst($this->session->userdata['salesforce']['department']);
								}

							}


							
						 ?>
						
						  <div class="col-md-7 col-sm-7">
							<div class="form-group">
							  <select name="industry" id="industry_1a" class="form-control" required >
								<option disabled="" selected="">Choose an option</option>
								<?php
									if(isset($department) && $department != ''){
								?>
									<option  value="Agriculture and Mining"<?php echo ((strstr("Agriculture and Mining",$department))?'selected':'')?>>Agriculture and Mining</option>

									<option  value="Business Services" <?php echo ((strstr("Business Services",$department))?'selected':'')?>>Business Services</option>

									<option  value="Computer and Electronics" <?php echo ((strstr("Computer and Electronics",$department))?'selected':'')?>>Computer and Electronics</option>

									<option  value="Consumer Services" <?php echo ((strstr("Consumer Services",$department))?'selected':'')?>>Consumer Services</option>

									<option  value="Education" <?php echo ((strstr("Education",$department))?'selected':'')?>>Education</option>

									<option  value="Energy and Utilities" <?php echo ((strstr("Energy and Utilities",$department))?'selected':'')?>>Energy and Utilities</option>


									<option  value="Financial Services" <?php echo ((strstr("Financial Services",$department))?'selected':'')?>>Financial Services</option>

									<option  value="Government" <?php echo ((strstr("Government",$department))?'selected':'')?>>Government</option>


									<option  value="Health, Pharmaceuticals, and Biotech" <?php echo ((strstr("Health, Pharmaceuticals, and Biotech",$department))?'selected':'')?>>Health, Pharmaceuticals, and Biotech</option>


									<option  value="Manufacturing" <?php echo ((strstr("Manufacturing",$department))?'selected':'')?>>Manufacturing</option>


									<option  value="Media and Entertainment" <?php echo ((strstr("Media and Entertainment",$department))?'selected':'')?>>Media and Entertainment</option>


									<option  value="Non-profit" <?php echo ((strstr("Non-profit",$department))?'selected':'')?>>Non-profit</option>

									<option  value="Real Estate and Construction" <?php echo ((strstr("Real Estate and Construction",$department))?'selected':'')?>>Real Estate and Construction</option>


									<option  value="Retail" <?php echo ((strstr("Retail",$department))?'selected':'')?>>Retail</option>


									<option  value="Software and Internet" <?php echo ((strstr("Software and Internet",$department))?'selected':'')?>>Software and Internet</option>


									<option  value="Telecommunications" <?php echo ((strstr("Telecommunications",$department))?'selected':'')?>>Telecommunications</option>


									<option  value="Transportation and Storage" <?php echo ((strstr("Transportation and Storage",$department))?'selected':'')?>>Transportation and Storage</option>


									<option  value="Travel Recreation and Leisure" <?php echo ((strstr("Travel Recreation and Leisure",$department))?'selected':'')?>>Travel Recreation and Leisure</option>


									<option  value="Wholesale and Distribution" <?php echo ((strstr("Wholesale and Distribution",$department))?'selected':'')?>>Wholesale and Distribution</option>


									<option  value="Other" <?php echo ((strstr("Other",$department))?'selected':'')?>>Other</option>-->
							<?php
									
								}else{		
							?>
								<option  value="Agriculture and Mining" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Agriculture and Mining")?'selected':'');?>>Agriculture and Mining</option>

									<option  value="Business Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Business Services")?'selected':'');?>>Business Services</option>


									<option  value="Computer and Electronics" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Computer and Electronics")?'selected':'');?>>Computer and Electronics</option>


									<option  value="Consumer Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Consumer Services")?'selected':'');?>>Consumer Services</option>


									<option  value="Education" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Education")?'selected':'');?>>Education</option>


									<option  value="Energy and Utilities" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Energy and Utilities")?'selected':'');?>>Energy and Utilities</option>


									<option  value="Financial Services" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Financial Services")?'selected':'');?>>Financial Services</option>

									<option  value="Government" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Government")?'selected':'');?>>Government</option>


									<option  value="Health, Pharmaceuticals, and Biotech" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Health, Pharmaceuticals, and Biotech")?'selected':'');?>>Health, Pharmaceuticals, and Biotech</option>


									<option  value="Manufacturing" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Manufacturing")?'selected':'');?>>Manufacturing</option>


									<option  value="Media and Entertainment" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Media and Entertainment")?'selected':'');?>>Media and Entertainment</option>


									<option  value="Non-profit" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Non-profit")?'selected':'');?>>Non-profit</option>

									<option  value="Real Estate and Construction" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Real Estate and Construction")?'selected':'');?>>Real Estate and Construction</option>


									<option  value="Retail" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Retail")?'selected':'');?>>Retail</option>


									<option  value="Software and Internet" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Software and Internet")?'selected':'');?>>Software and Internet</option>


									<option  value="Telecommunications" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Telecommunications")?'selected':'');?>>Telecommunications</option>


									<option  value="Transportation and Storage" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Transportation and Storage")?'selected':'');?>>Transportation and Storage</option>


									<option  value="Travel Recreation and Leisure" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Travel Recreation and Leisure")?'selected':'');?>>Travel Recreation and Leisure</option>


									<option  value="Wholesale and Distribution" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Wholesale and Distribution")?'selected':'');?>>Wholesale and Distribution</option>


									<option  value="Other" <?php echo ((isset($basics_data->industry_input) && $basics_data->industry_input == "Other")?'selected':'');?>>Other</option>
								<?php
									}
								?>
								
							  </select>
							  <div id="1a"></div>

							</div>
							  
								<?php
								if(isset($this->session->userdata['salesforce']['department']) && $this->session->userdata['salesforce']['department']!=''){
									
								?>
									<span style="padding-bottom:20px;">Sage shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['salesforce']['department'];?></code></span><br/>
								<?php
									if(isset($this->session->userdata['xero']['industry']) && $this->session->userdata['xero']['industry']!=''){
								?>
									<span style="padding-bottom:20px;">Xero shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['xero']['industry'];?></code></span><br/>

								<?php
								}
								}else if(isset($this->session->userdata['xero']['industry']) && $this->session->userdata['xero']['industry']!=''){
								?>
									<span style="padding-bottom:20px;">Xero shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['xero']['industry'];?></code></span><br/>
									<?php
									if(isset($this->session->userdata['salesforce']['department']) && $this->session->userdata['salesforce']['department']!=''){
									?>
									<span style="padding-bottom:20px;">Sage shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['salesforce']['department'];?></code></span><br/>
								<?php
								}
								}
								if(isset($this->session->userdata['sage']['department']) && $this->session->userdata['sage']['department']!='')
								{
								?>
									<span style="padding-bottom:20px;">Sage Accounting shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['sage']['department'];?></code></span><br/>
								<?php
								}
								?>
						
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
								  <select class="form-control del_employees reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'employees_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info)){
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
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
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->employees_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
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
							if(isset($sage_import) && sizeof($sage_import) > 0){
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
							  <select name="employees" id="employees_1b" class="form-control">
								<option disabled="" selected="">Choose an option</option>
								<?php
									if(isset($this->session->userdata['salesforce']['employee_number']) && $this->session->userdata['salesforce']['employee_number'] > 0){
										if($this->session->userdata['salesforce']['employee_number'] >= 1 && $this->session->userdata['salesforce']['employee_number'] < 500){
								?>
											<option  value="1-500" selected>1-500</option>
											<option  value="500-5000">500-5000</option>
											<option  value="5000 >">5000 ></option>
									<?php
										}else if($this->session->userdata['salesforce']['employee_number'] >= 500 && $this->session->userdata['salesforce']['employee_number'] < 5000){	
									?>
											<option  value="1-500">1-500</option>
											<option  value="500-5000" selected>500-5000</option>
											<option  value="5000 >">5000 ></option>
									<?php
										}else if($this->session->userdata['salesforce']['employee_number'] >= 5000){	
									?>
											<option  value="1-500">1-500</option>
											<option  value="500-5000">500-5000</option>
											<option  value="5000 >" selected>5000 ></option>
								<?php
										}
									}else{
								?>
								<option  value="1-500" <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "1-500")?'selected':'');?>>1-500</option>
								<option  value="500-5000" <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "500-5000")?'selected':'');?>>500-5000</option>
								<option  value="5000 >" <?php echo ((isset($basics_data->employees_input) && $basics_data->employees_input == "5000 >")?'selected':'');?>>5000 ></option>
								<?php
								}	
								?>
							  </select>
							  <div id="1b"></div>
							</div>
								<?php
								if(isset($this->session->userdata['salesforce']['employee_number']) && $this->session->userdata['salesforce']['employee_number'] != '')
										{
							?>
							  <span style="padding-bottom:20px;">Sage shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;"><?php echo $this->session->userdata['salesforce']['employee_number'];?></code></span>
							<?php
										}
							?>
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
							  <a data-container="body" title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							  
							  <img src="<?php echo base_url();?>images/deligate_icon.png" class="location_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="located">
								  <select class="form-control del_location reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'location_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
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
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->location_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
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
									if(isset($this->session->userdata['salesforce']['country']) && $this->session->userdata['salesforce']['country'] != '')
									{
										$api_country = $this->session->userdata['salesforce']['country'];
										
										
									}else if(isset($this->session->userdata['xero']['country']) && $this->session->userdata['xero']['country'] != ''){
										$api_country = $this->session->userdata['xero']['country'];
										
									}
									else if(isset($this->session->userdata['sage']['country']) && $this->session->userdata['sage']['country'] != '')
									{
										$api_country = $this->session->userdata['sage']['country'];
									}

									
								
								?>
								<select name="located[]" id="located_2a" class="form-control" multiple="multiple">
									<option disabled value="">press ctrl for multiple locations</option>
									
									<?php
									
									if($api_country != ''){
										
									?>
											
											<option  value="Northern Ireland" <?php echo ((array_key_exists($api_country,$northern_ireland)))?'selected':''?>> Northern Ireland (UK)</option>
											<option  value="Ireland" <?php echo ((array_key_exists($api_country,$ireland)))?'selected':''?>> Ireland (Europe)</option>
											<option  value="Mainland UK" <?php echo ((array_key_exists($api_country,$mainland_uk)))?'selected':''?>> Mainland UK</option>
											<option  value="Europe <?php echo ((array_key_exists($api_country,$europe_continental)))?'selected':''?>">Europe (Continental)</option>
											<option  value="North America" <?php echo ((array_key_exists($api_country,$north_america)))?'selected':''?>>North America</option>
											<option  value="Central America" <?php echo ((array_key_exists($api_country,$central_america)))?'selected':''?>>Central America</option>
											<option  value="South America" <?php echo ((array_key_exists($api_country,$south_america)))?'selected':''?>>South America</option>
											<option  value="Africa" <?php echo ((array_key_exists($api_country,$africa)))?'selected':''?>>Africa</option>
											<option  value="Middle East Qatar" <?php echo ((array_key_exists($api_country,$middle_east_uae)))?'selected':''?>>Middle East (UAE, Qatar, Oman etc)</option>
											<option  value="Middle East Israel" <?php echo ((array_key_exists($api_country,$middle_east_israel)))?'selected':''?>>Middle East (Israel)</option>
											<option  value="Russia" <?php echo ((array_key_exists($api_country,$russia)))?'selected':''?>>Russia</option>
											<option  value="South Asia" <?php echo ((array_key_exists($api_country,$south_asia)))?'selected':''?>>South Asia (India, Pakistan, Bangladesh etc)</option>
											<option  value="South East Asia" <?php echo ((array_key_exists($api_country,$south_east_asia)))?'selected':''?>>South East Asia (China, Japan etc)</option>
											<option  value="South Pacific" <?php echo ((array_key_exists($api_country,$south_pacific)))?'selected':''?>>South Pacific (Australia, New Zealand etc)</option>
									
								<?php
									}else{	
										$location_inputzz = explode(",",$basics_data->location_input);
								?>
										
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
									<?php
										}	
									?>
									 </select>
									 <div id="2a"></div>
									 <?php
										if(isset($this->session->userdata['salesforce']['country']) && $this->session->userdata['salesforce']['country'] != ''){
									 ?>
										<span style="padding-bottom:20px;" >Sage Financials shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;">
										<?php 
											 	$this->load->model('questionaire_m');
												 $get_country =  $this->questionaire_m->get_country($this->session->userdata['salesforce']['country']);
												 echo $get_country->name;
											?>
										</code></span><br/>
										<?php
										}
										 if(isset($this->session->userdata['xero']['country']) && $this->session->userdata['xero']['country'] != ''){
										 ?>
										<span style="padding-bottom:20px;">Xero shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;">
											 <?php 
											 	$this->load->model('questionaire_m');
												 //echo $this->session->userdata['xero']['country'];
												 $country =  $this->questionaire_m->get_country($this->session->userdata['xero']['country']);
												 echo $country->name;
												?>
											 </code></span><br/>
									 <?php
									 }

									if(isset($this->session->userdata['sage']['country']) && $this->session->userdata['sage']['country'] != '')
									{
									 ?>
										 <span style="padding-bottom:20px;">Sage Accounting shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;">
										 	<?php 
												
												$country =  $this->questionaire_m->get_country($this->session->userdata['sage']['country']);
												echo $country->name;
											?>
										 </code></span>
									<?php
									}
									?>

								</div>

								

								<div class="col-md-6">
								<p>Do business in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></p>
									
								  <select name="location_business[]" id="location_business_2b" class="form-control" multiple="multiple">
										<option disabled="" value="">press ctrl for multiple locations</option>
										<?php
										if(isset($this->session->userdata['salesforce']['country']) && $this->session->userdata['salesforce']['country'] != '')
										{
											$api_country = $this->session->userdata['salesforce']['country'];
										}else if(isset($this->session->userdata['xero']['country']) && $this->session->userdata['xero']['country'] != ''){
											$api_country = $this->session->userdata['xero']['country'];
										}
										else if(isset($this->session->userdata['sage']['country']) && $this->session->userdata['sage']['country'] != '')
										{
											$api_country = $this->session->userdata['sage']['country'];
										}
										if($api_country != ''){
											
										?>
											<option  value="Northern Ireland" <?php echo ((array_key_exists($api_country,$northern_ireland)))?'selected':''?>> Northern Ireland (UK)</option>
											<option  value="Ireland" <?php echo ((array_key_exists($api_country,$ireland)))?'selected':''?>> Ireland (Europe)</option>
											<option  value="Mainland UK" <?php echo ((array_key_exists($api_country,$mainland_uk)))?'selected':''?>> Mainland UK</option>
											<option  value="Europe <?php echo ((array_key_exists($api_country,$europe_continental)))?'selected':''?>">Europe (Continental)</option>
											<option  value="North America" <?php echo ((array_key_exists($api_country,$north_america)))?'selected':''?>>North America</option>
											<option  value="Central America" <?php echo ((array_key_exists($api_country,$central_america)))?'selected':''?>>Central America</option>
											<option  value="South America" <?php echo ((array_key_exists($api_country,$south_america)))?'selected':''?>>South America</option>
											<option  value="Africa" <?php echo ((array_key_exists($api_country,$africa)))?'selected':''?>>Africa</option>
											<option  value="Middle East Qatar" <?php echo ((array_key_exists($api_country,$middle_east_uae)))?'selected':''?>>Middle East (UAE, Qatar, Oman etc)</option>
											<option  value="Middle East Israel" <?php echo ((array_key_exists($api_country,$middle_east_israel)))?'selected':''?>>Middle East (Israel)</option>
											<option  value="Russia" <?php echo ((array_key_exists($api_country,$russia)))?'selected':''?>>Russia</option>
											<option  value="South Asia" <?php echo ((array_key_exists($api_country,$south_asia)))?'selected':''?>>South Asia (India, Pakistan, Bangladesh etc)</option>
											<option  value="South East Asia" <?php echo ((array_key_exists($api_country,$south_east_asia)))?'selected':''?>>South East Asia (China, Japan etc)</option>
											<option  value="South Pacific" <?php echo ((array_key_exists($api_country,$south_pacific)))?'selected':''?>>South Pacific (Australia, New Zealand etc)</option>
										
									<?php
										}else{	
										$location_business_inputzz = explode(",",$basics_data->location_business_input);
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
										<?php
											}	
										?>
									 </select>
									 <div id="2b"></div>
									 <?php
										if(isset($this->session->userdata['salesforce']['country']) && $this->session->userdata['salesforce']['country'] != ''){
									 ?>
									<span style="padding-bottom:20px;">Sage Financials shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;">
										 
									 <?php 
										$this->load->model('questionaire_m');
										//echo $this->session->userdata['xero']['country'];
										$country =  $this->questionaire_m->get_country($this->session->userdata['salesforce']['country']);
										echo $country->name;
									 ?>
									</code></span><br/>
									<?php
										}
										if(isset($this->session->userdata['xero']['country']) && $this->session->userdata['xero']['country'] != '')
											{
									?>
									<span style="padding-bottom:20px;">Xero shows:&nbsp;&nbsp;<code style="margin-right: 10px;color:black;">
										<?php 
											$this->load->model('questionaire_m');
												 //echo $this->session->userdata['xero']['country'];
												 $country =  $this->questionaire_m->get_country($this->session->userdata['xero']['country']);
												 echo $country->name;
										?>
									</code></span><br/>
									 <?php
											}
										if(isset($this->session->userdata['sage']['country']) && $this->session->userdata['sage']['country'] != '')
										{
									 ?>
										 <span style="padding-bottom:20px;">Sage Accounting shows:&nbsp;&nbsp;<code style="margin-right:10px;color:black;">
										 	<?php 
												$this->load->model('questionaire_m');
												$country = $this->questionaire_m->get_country($this->session->userdata['sage']['country']);
												echo $country->name;
											?>
										 </code></span><br/>
									<?php
										}
										?>
										
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
							 <a data-container="body" class="tooltiplink" title="Let us know if you also handle or manage personal or financial data or information for 3rd parties as this has legal implications for you." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
							 
							 <img src="<?php echo base_url();?>images/deligate_icon.png" class="supply_button" style="height:15px;cursor: pointer;margin-top: -2px;">
								  <br/>
								  <div id="handlez_data">
								  <select class="form-control del_supply reset_onchange"  style="width:50%;display:none;margin-bottom:10px;" onchange="get_delegate(this.value,'handle_data_input',<?php echo $this->session->userdata['logged_in']['user_id']; ?>);">        
									 <option selected disabled>Select Delegate</option> 
									 <?php
									 $get_delegate_info = $this->questionaire_m->fetch_delegate_info($this->session->userdata['logged_in']['user_id']);
									 if(!empty($get_delegate_info))
									 {
										 foreach($get_delegate_info as $del_result)
										 {
											 $get_del_name = $ci->questionaire_m->get_sme($del_result->user_id);
											 if(!empty($get_del_name))
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
								  if(!empty($get_assign_del))
								  {
									  foreach($get_assign_del as $assign_del)
									  {
										  if($assign_del->handle_data_input == 1)
										  {
											  $del_name = $ci->questionaire_m->get_sme($assign_del->user_id);
											  if(!empty($del_name))
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
							  <select name="handle_data" id="handle_data_3" class="form-control ">
								<option disabled="" selected=""> choose an option</option>
								<option  value="1" <?php echo ((isset($basics_data->handle_data_input) && $basics_data->handle_data_input == "1")?'selected':'');?>> Yes </option>
								<option  value="0" <?php echo ((isset($basics_data->handle_data_input) && $basics_data->handle_data_input == "0")?'selected':'');?>> No </option>
							  </select>
							  <div id="3a">
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
							  <td><input  type="radio" name="budget_individual"  value="supplier" <?php echo ((isset($basics_data->individuals_input) && $basics_data->individuals_input == "supplier")?'checked':'');?>></td>
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
					  <div class="col-md-12 text-right" style="padding:10px;">
						  <button name="save_continue" type="submit" value="skip" class="btn btn-previous btn-medium" onclick="do_something();">Skip</button>
						  <button name="save_continue" type="submit" value="return" class="btn btn-warning btn-medium">Save and Return</button>
						  <button name="save_continue" type="submit" value="continue" class="btn btn-success btn-medium" onclick="skip_error();">Save and Continue</button>
					</div>
					</div>
				  </div>
				  
				  </form>
				
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

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Import From Sage</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ml-auto" style="border:1px solid #ccc;padding:30px;">
					<img src="<?php echo base_url();?>images/sageone.jpg" style="height:110px;width:110px;margin-left:50px;">
					<a href="<?php echo $redirect_url;?>" class="btn btn-success"  style="text-align:center;">Import From Sage Accounting</a>
				</div>
				
				<div class="col-md-6 ml-auto" style="border:1px solid #ccc;padding:30px;">
					<img src="<?php echo base_url();?>images/salesforce.png" style="height:110px;width:110px;margin-left:50px;">
					<a href="<?php echo $auth_url;?>" class="btn btn-success"  style="text-align:center;">Import From Sage Financials</a>
				</div>
				<div class="col-md-3 ml-auto" style="padding:30px;"></div>
			</div>
		</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

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
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>

<script>
function do_something(){
	$("form[name='questionaire']").validate().cancelSubmit = true;
}
</script>

<?php
if($this->session->flashdata('skip_flash') && !empty($this->session->flashdata('skip_flash'))){
	$flash_array = $this->session->flashdata('skip_flash');
?>
	<script>
	var response = <?php echo json_encode($flash_array); ?>;
	if(response.industry_1a_res == '1')
	{
		$("#1a").html('<label for="industry_1a" generated="true" class="error">This field is required</label>');
	}
	if(response.employees_1b_res == '1')
	{
		$("#1b").html('<label for="employees_1b" generated="true" class="error">This field is required</label>');
	}
	if(response.located_2a_res == '1')
	{
		$("#2a").html('<label for="located_2a" generated="true" class="error">This field is required</label>');
	}
	if(response.location_business_2b_res == '1')
	{
		$("#2b").html('<label for="location_business_2b" generated="true" class="error">This field is required</label>');
	}
	if(response.handle_data_3_res == '1')
	{
		$("#3a").html('<label for="handle_data_3" generated="true" class="error">This field is required</label>');
	}
	</script>
<?php
}
?>

<script>
	function skip_error(){
		var industry_1a = $("#industry_1a").val();
		var employees_1b = $("#employees_1b").val();
		var located_2a = $("#located_2a").val();
		var location_business_2b = $("#location_business_2b").val();
		var handle_data_3 = $("#handle_data_3").val();
		
		$.ajax({
		  url: '<?php echo base_url();?>questionaire/check_delegate',
		  type: "post",
		  dataType: "json",
		  success: function(response){
			if(industry_1a == null && response.industry_1a_res == 'exist')
			{
				$('#1a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(employees_1b == null && response.employees_1b_res == 'exist')
			{
				$('#1b').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(located_2a == '' && response.located_2a_res == 'exist')
			{
				$('#2a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(location_business_2b == '' && response.location_business_2b_res == 'exist')
			{
				$('#2b').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
			if(handle_data_3 == null && response.handle_data_3_res == 'exist')
			{
				$('#3a').html('<label class="lbl_error">Press <a class="btn btn-previous btn-medium err_btn" href="javascript:void(0);">Skip</a> button to continue</label>');
			}
		  }
		}); 
	}
	</script>

<script>
$(function() {
  $("form[name='questionaire']").validate({
    rules: {
      industry: "required",
      employees: "required",
	  "located[]" : "required",
	  "location_business[]" : "required",
	  handle_data : "required",
      manage_it : "required",
    },
    messages: {
      industry: "This field is required",
      employees: "This field is required",
	  "located[]" : "This field is required",
	  "location_business[]" : "This field is required",
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
		});

		$( "#mouse_move" ).mousemove(function( event ) {
		    var industry_1a = $("#industry_1a").val();
			var employees_1b = $("#employees_1b").val();
			var located_2a = $("#located_2a").val();
			var location_business_2b = $("#location_business_2b").val();
			var handle_data_3 = $("#handle_data_3").val();
			if(industry_1a != null)
			{
				$('#1a').hide();
			}
			if(employees_1b != null)
			{
				$('#1b').hide();
			}
			if(located_2a != '')
			{
				$('#2a').hide();
			}
			if(location_business_2b != '')
			{
				$('#2b').hide();
			}
			if(handle_data_3 != null)
			{
				$('#3a').hide();
			}
		});
	</script>
<!-- delegate ajax starts here -->
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
			$('.reset_onchange').prop('selectedIndex',0);
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

		else {
				if(key == 'industry_input'){
					var update_array = 'UPDATE delegate_basics SET industry_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'employees_input'){
					var update_array = 'UPDATE delegate_basics SET employees_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'location_input'){
					var update_array = 'UPDATE delegate_basics SET location_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}else if(key == 'handle_data_input'){
					var update_array = 'UPDATE delegate_basics SET handle_data_input = 1 WHERE user_id = '+del_id+' and sme_id = '+sme_id+'';
				}
		
				
				//alert(del);
				/*ajax code start*/
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
					 $(window).scrollTop(0);
					
				  }
				}); 
			   /* ajax code ends*/
			
		}
		
			
			
		
	}
	</script>
<!-- delegate ajax ends here -->

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
