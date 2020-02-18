<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unanswered Questions | ProtectBox
    </title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
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
        background: #9FD45B;
        /* Old browsers */
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
      .other_title
      {
        background:none;
        text-align:center;
        font-size:40px;
        color:#000;
        bottom:30px;
      }
      .account_info
      {
        border:3px solid #000;
        padding:10px;
        margin:10px;
        border-radius:10px;
        margin-bottom:30px;
      }
      .another
      {
        border:3px solid #EC8C0E;
        padding:10px;
        margin:10px;
        border-radius:10px;
        margin-bottom:30px;
      }
      .another_header
      {
        background:#f5f5f5;
        box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);
        "
      }
      .sage_border
      {
        border:3px solid #83C72A;
        padding:10px;
        margin:10px;
        border-radius:10px;
        margin-bottom:30px;
      }
      .not_required
      {
        color: #A9A9A9;
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
    </style>
  </head>
  <body>
   <div id="load"></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header"  style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title other_title" style="">
          Unanswered Questions
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-12">
			<div class="alert alert-success" id="success_reminder" style="display:none"><strong>You have successfully send email reminder to this delegate user, thank you.</strong> </div>
			<div class="alert alert-danger" id="failed_reminder" style="display:none"><strong>Your send email reminder to this delegate user has failed, please try again.</strong> </div>
			<div class="alert alert-danger" id="email_error" style="display:none"><strong>Your email reminder sending is failed since email id doesn't exist.</strong> </div>
            <!--  Tabs -->
            <div class="tab-content rounded_div">
              <div class="tab-pane active" id="messages">
                <div style="" class="another">
                  <div class="row">
                    <div class="col-md-12">
                      <p style="color:#ec8b0d;font-size:14px;font-weight:normal">
                        <i class="icon-circle-empty"> 
                        </i> Below questions have been delegated & need to be answered before we can show you your results/bundles of products. You can answer the question yourself by pressing <a href="javascript:void(0);" class="btn btn-previous btn-md">Previous</a> or remind your delegate to answer the question by pressing <a href="javascript:void(0);" class="btn btn-primary btn-md">Send Reminder</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row " style="padding:20px;">
					<ul class="nav nav-tabs">
					 <?php
						if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == '' || $questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == '' || $questionnaire_basics_data['handle_data_input'] == ''){
					 ?>
					  <li class="active arrow_success">
					    <a href="javascript:void(0);" onclick="openCity(event, 'basic')" class="tablinks active red-gradient_success">Basics
					    </a>
					  </li>
					  <?php
						} 
						if($questionnaire_technical_data['os_input'] == '' || $questionnaire_technical_data['antivirus_input'] == '' || $questionnaire_technical_data['firewall_input'] == '' || $questionnaire_technical_data['manage_it_input'] == '' || $questionnaire_technical_data['internet_input'] == '' || $questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){
					  ?>
					  <li class="arrow_success">
					    <a href="javascript:void(0);" onclick="openCity(event, 'tech_info')" class="tablinks red-gradient_success">Technical Info
					    </a>
					  </li>
					  <?php
						} 
						if($questionnaire_non_technical_data['business_continuity_plan_input'] == '' || $questionnaire_non_technical_data['training_cybersecurity_input'] == '' || $questionnaire_non_technical_data['aware_information_security_standard_input'] == '' || $questionnaire_non_technical_data['password_rules_input'] == '' || $questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == '' || $questionnaire_non_technical_data['device_to_employees_input'] == '' || $questionnaire_non_technical_data['cyber_consultant_input'] == ''){
					  ?>
					  <li class="arrow_success ">
					    <a href="javascript:void(0);" onclick="openCity(event, 'nontech_info')" class="tablinks red-gradient_success">Non-Technical Info
					    </a>
					  </li>
					  <?php
						}
						if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
					  ?>
					  <li class="arrow_success">
					    <a href="javascript:void(0);" onclick="openCity(event, 'budget')" class="tablinks red-gradient_success">Budget
					    </a>  
					  </li>
					  <?php
						}
					  ?>
					</ul>



					<!-- QUESTIONNAIRE BASICS STARTS -->
					<div id="basic" class="tabcontent active" style="display: block;">
					<?php
					if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == '' || $questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == '' || $questionnaire_basics_data['handle_data_input'] == ''){
					if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-industrial-building">
					      </i>
					    </strong> Industry
					  </h3>
					  <div class="step">
					    <?php
						if($questionnaire_basics_data['industry_input'] == ''){
						?>
					    <div class="form-group">
					      <label>
					        <b>1a
					        </b> What industry are you in?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'industry_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
						}
						if($questionnaire_basics_data['employees_input'] == ''){
						?>
					    <div class="form-group">
					      <label>
					        <b>1b
					        </b> How many employees do you have?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" title="Please select 1 of the 3 categories for the number of current employees in your company" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'employees_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
						if($questionnaire_basics_data['location_input'] == ''){
					  ?>
					  <h3>
					    <strong>
					      <i class="icon-location-6">
					      </i>
					    </strong> Location&nbsp;
					  </h3>
					  <div class="step">
					    <div class="form-group">
					      <label>
					        <b>2
					        </b> Where are you located?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'location_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					  </div>
					  <?php
					}
					?>
					<?php
						if($questionnaire_basics_data['handle_data_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-users">
					      </i>
					    </strong> Supply Chain
					  </h3>
					  <div class="step">
					    <div class="form-group">
					      <label>
					        <b>3
					        </b> Do you handle or manage personal or financial data or information for others 
					        <br/>(e.g. your supply chain or customers)?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Let us know if you also handle or manage personal or financial data or information for 3rd parties as this has legal implications for you." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'handle_data_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					  </div>
					  <?php
					}
					?>
					  <?php
					}else{
					?>
					  <div class="row">
					    <div class="col-md-12" style="padding:25px;">
					      <p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! 
					      </p>
					    </div>
					  </div>
					  <?php
					}
					?>
					</div>
					<!-- QUESTIONNAIRE BASICS ENDS -->
					<!-- QUESTIONNAIRE TECHNICAL STARTS -->
					<div id="tech_info" class="tabcontent" style="display: none;">
					<?php
					if($questionnaire_technical_data['os_input'] == '' || $questionnaire_technical_data['antivirus_input'] == '' || $questionnaire_technical_data['firewall_input'] == '' || $questionnaire_technical_data['manage_it_input'] == '' || $questionnaire_technical_data['internet_input'] == '' || $questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){
					if($questionnaire_technical_data['os_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-desktop-3">
					      </i>
					    </strong> Operating System
					  </h3>
					  <div class="step">
					    <?php
						if($questionnaire_technical_data['os_input'] == ''){
						?>
					    <div class="form-group">
					      <label>
					        <b>4
					        </b> What Operating System do you use?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Please tell us the primary operating system used in your company." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'os_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					<?php
					if($questionnaire_technical_data['antivirus_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-block-2">
					      </i>
					    </strong> Antivirus
					  </h3>
					  <div class="step">
					    <?php
						if($questionnaire_technical_data['antivirus_input'] == ''){
						?>
					    <div class="form-group">
					      <label>
					        <b>5
					        </b> Do you have an antivirus product installed?&nbsp;
					        <span style="color:#ec0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'antivirus_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_technical_data['firewall_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-globe-2">
					      </i>
					    </strong> Firewall
					  </h3>
					  <div class="step">
					    <?php
						if($questionnaire_technical_data['firewall_input'] == ''){
						?>
					    <div class="form-group">
					      <label>
					        <b>6
					        </b> Do you have more than basic system firewall?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Firewall monitors & controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'firewall_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_technical_data['manage_it_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-globe-2">
					      </i>
					    </strong> IT Management
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_technical_data['manage_it_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>7
					        </b> Who manages your IT?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely.You may want to add them as a delegate user to answer some of these questions for you" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'manage_it_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_technical_data['internet_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-network">
					      </i>
					    </strong> Internet
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_technical_data['internet_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>8a
					        </b> Do you have internet?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Please tell us if your network is connected to the internet." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'internet_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-key-5">
					      </i>
					    </strong> Access Control
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_technical_data['hacking_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>9a
					        </b> Do you know what hacking is ?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'hacking_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					    <?php
					if($questionnaire_technical_data['system_access_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>9e
					        </b> Do you provide differing levels of access to your systems? 
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Do your systems have tier access? " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					        <br/>E.g. Administrator access, user access. &nbsp;
					      </label>
					      <a href="<?php echo base_url('questionaire_tech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'system_access_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					}else{
					?>
					  <div class="row">
					    <div class="col-md-12" style="padding:25px;">
					      <p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! 
					      </p>
					    </div>
					  </div>
					  <?php
					}
					?>
					</div>
					<!-- QUESTIONNAIRE TECHNICAL ENDS -->
					<!-- QUESTIONNAIRE NON-TECHNICAL STARTS -->
					<div id="nontech_info" class="tabcontent" style="display: none;">
					<?php
					if($questionnaire_non_technical_data['business_continuity_plan_input'] == '' || $questionnaire_non_technical_data['training_cybersecurity_input'] == '' || $questionnaire_non_technical_data['aware_information_security_standard_input'] == '' || $questionnaire_non_technical_data['password_rules_input'] == '' || $questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == '' || $questionnaire_non_technical_data['device_to_employees_input'] == '' || $questionnaire_non_technical_data['cyber_consultant_input'] == ''){
					if($questionnaire_non_technical_data['business_continuity_plan_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-cog-6">
					      </i>
					    </strong> Business Continuity Procedures
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['business_continuity_plan_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>12a
					        </b> Do you use security monitoring solutions for your Business Continuity?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'business_continuity_plan_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['training_cybersecurity_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-certificate">
					      </i>
					    </strong> Training
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['training_cybersecurity_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>13
					        </b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink" title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						   <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'training_cybersecurity_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['aware_information_security_standard_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-hammer">
					      </i>
					    </strong> Accreditation/Regulation
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['aware_information_security_standard_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>14
					        </b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click
					        <a href="https://staging.protectbox.com/regulation" target="_blank"> here
					        </a> for detail&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span> 
					        <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						   <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'accreditation_security_standerd_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['password_rules_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-lock">
					      </i>
					    </strong>  Passwords Policy
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['password_rules_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>15
					        </b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>  
					        <a data-container="body" class="tooltiplink" title="Please tell us if you provide password strength checks on your customers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						   <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'adaquate_password_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-user-md">
					      </i>
					    </strong> Reputation Management
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['member_cisp_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>16a
					        </b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>  
					        <a data-container="body" class="tooltiplink" title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						   <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'cyber_security_information_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					    <?php
					if($questionnaire_non_technical_data['cyber_insurance_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>16b
					        </b> Do you have cyber insurance?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>  
					        <a data-container="body" class="tooltiplink" title="Please tell us if you have taken out cyber insurance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						   <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'cyber_insurence_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					    <?php
					if($questionnaire_non_technical_data['threat_detection_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>16c
					        </b> Do you have threat detection and prevention solutions?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>   
					        <a data-container="body" class="tooltiplink" title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'threat_detection_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['device_to_employees_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-laptop">
					      </i>
					    </strong> Devices
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['device_to_employees_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>17
					        </b> Do you have device management solutions on the devices issued to your employees?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>  
					        <a data-container="body" class="tooltiplink" title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'device_management_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					if($questionnaire_non_technical_data['cyber_consultant_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-shield">
					      </i>
					    </strong> Consultancy/Implementation
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_non_technical_data['cyber_consultant_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>19
					        </b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_nontech_info');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'need_consultant_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					}else{
					?>
					  <div class="row">
					    <div class="col-md-12" style="padding:25px;">
					      <p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! 
					      </p>
					    </div>
					  </div>
					  <?php
					}
					?>
					</div>
					<!-- QUESTIONNAIRE NON-TECHNICAL ENDS -->
					<!-- QUESTIONNAIRE BUDGET STARTS -->
					<div id="budget" class="tabcontent" style="display: none;">
					  <?php
					if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
					if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
					?>
					  <h3>
					    <strong>
					      <i class="icon-briefcase">
					      </i>
					    </strong> Your Budget
					  </h3>
					  <div class="step">
					    <?php
					if($questionnaire_budget_data['amount_cybersecurity_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>20a
					        </b> What amount did you spend on cybersecurity annually?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" title="Please select from one of the five categories the amount you spend on cybersecurity products." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_budget');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'amount_cybersecurity_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					    <?php
					if($questionnaire_budget_data['percentage_annual_budget_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>20b
					        </b> What percentage of your annual budget is that?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" title="Could you tell us what % of your IT budget this amounted to." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_budget');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'percentage_annual_budget_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					    <?php
					if($questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
					?>
					    <div class="form-group">
					      <label>
					        <b>20c
					        </b> What is your budget for Cyber Security per year?&nbsp;
					        <span style="color:#ec8b0d;font-size:22px;">*
					        </span>
					        <a data-container="body" class="tooltiplink" title="Please tell us how much you intend to spend on security services each year." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true">
					          <i class="icon-info-circled-3">
					          </i>
					        </a>
					      </label>
						  <a href="<?php echo base_url('questionaire_budget');?>" class="btn btn-previous btn-md">Previous</a>
					      <?php
					      	$fetch_delegate = $this->unanswered_questions_m->fetch_delegate_details($smb_id,'budget_cybersecurity_per_year_input');
					      	$del_id = array();
			      			foreach($fetch_delegate AS $each_delegate){
			      				$del_id[] = $each_delegate->user_id;
			      			}
			      			$del_encode = json_encode($del_id,true);
					      ?>
					      <a href="javascript:void(0);" onclick='reminder_send(<?php echo $del_encode;?>);' class="btn btn-primary btn-md">Send Reminder</a>
					    </div>
					    <?php
					}
					?>
					  </div>
					  <?php
					}
					?>
					  <?php
					}else{
					?>
					  <div class="row">
					    <div class="col-md-12" style="padding:25px;">
					      <p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! 
					      </p>
					    </div>
					  </div>
					  <?php
					}
					?>
					</div>
					<!-- QUESTIONNAIRE BUDGET ENDS -->
				</div>

              </div>
            </div>
          </div>
          <!-- End col-md-12-->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
    <script src="<?php echo base_url();?>js/jquery.validate.js">
    </script>
    <script src="<?php echo base_url();?>js/bootstrap-select.min.js">
    </script>
    <script>
    	function reminder_send(e){
    	/*ajax code start*/
		 $.ajax({
			url: '<?php echo base_url();?>unanswered_questions/send_reminder',
			data: {'del_idz': e}, // change this to send js object
			type: "post",
			beforeSend: function(){
				$('#success_reminder').hide();
				$('#failed_reminder').hide();
				$('#email_error').hide();
			},
			success: function(response){
				if(response == 'success'){
			  		$('#success_reminder').show();
			  	}else if(response == 'failed'){
			  		$('#failed_reminder').show();
			  	}else if(response == 'email_error'){
			  		$('#email_error').show();
			  	}
			}
		  });
		 /* ajax code ends*/
    	}
    </script>
    <script>
      var header = document.getElementById("myDIV");
      var btns = header.getElementsByClassName("arrow");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("arrow1");
          current[0].className = current[0].className.replace(" arrow1", "");
          this.className += " arrow1";
        }
                                );
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
    <script> window.fcWidget.init({
        token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" }
                                 );
    </script>
  </body>
</html>
