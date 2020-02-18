<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>C Risk Score Dynamic Algorithm | ProtectBox</title>
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
          C Risk Score Dynamic Algorithm
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
					<div class="alert alert-success"> <strong>C Risk Score updated successfully!</strong> </div>
				</div>
			
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th style="width:10%;">C&nbsp;Risk&nbsp;Score&nbsp;No.</th>
							<th style="width:20%;">Industry Type</th>
							<th>Accreditation/ Regulation</th>
							<th>Ad&nbsp;blocking</th>
							<th style="width:20%">Antivirus&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th style="width:20%">Audit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Authentication</th>
							<th>CISP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Consultancy/ Implementation</th>
							<th>Cybersecurity Insurance</th>
							<th>Data&nbsp;Storage</th>
							<th>Device Management</th>
							<th>Email&nbsp;Security</th>
							<th>Encryption&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Firewall&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Internet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Intrustion Detection Systems (IDS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Logs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Managed Service Soluton Provider&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Microsoft Active/ Open Directory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Operating System&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Password Policy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Police&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Patching Software&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Physical Security&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Proxy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Public Key infrastructure (PKI)</th>
							<th>Secure Domain Name Systems&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Spam Filtering&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Systems Hardware&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Threat Prevention&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Tiered User Access&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
							<th>Training&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_c_risk AS $all_c_risk_scores){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $all_c_risk_scores->industry_type;?></td>

							<td >
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;"  class="form-control " value="<?php echo $all_c_risk_scores->accreditation_regulation;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'accreditation_regulation');" id="c_risk_score_idzz_accreditation_regulation_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled title="Previous Score"  class="form-control " value="<?php echo $all_c_risk_scores->previous_acc_reg ;?>" name="gv_score">

								<!-- recent score listed hidden input-->
								<input type="hidden" name="previous_score" id="perv_c_risk_score_idzz_accreditation_regulation_<?php echo $all_c_risk_scores->c_risk_score_id?>" value="<?php echo $all_c_risk_scores->accreditation_regulation;?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->ad_blocking;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'ad_blocking');" id="c_risk_score_idzz_ad_blocking_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled class="form-control" value="<?php echo $all_c_risk_scores->previous_ad_blocking;?>"
								name="gv_score"  >

								<!-- recent score listed hidden input-->
								<input type="hidden"  class="form-control" value="<?php echo $all_c_risk_scores->ad_blocking;?>" name="gv_score"  id="perv_c_risk_score_idzz_ad_blocking_<?php echo $all_c_risk_scores->c_risk_score_id?>">

							</td>

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->antivirus;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'antivirus');" id="c_risk_score_idzz_antivirus_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_antivirus ;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden"  class="form-control" value="<?php echo $all_c_risk_scores->antivirus;?>"  id="perv_c_risk_score_idzz_antivirus_<?php echo $all_c_risk_scores->c_risk_score_id?>">

							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->audit;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'audit');" id="c_risk_score_idzz_audit_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_audit;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->audit;?>" name="gv_score" id="perv_c_risk_score_idzz_audit_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->authentication;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'authentication');" id="c_risk_score_idzz_authentication_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_authentication;?>" name="gv_score">
								
								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->authentication;?>" name="gv_score"  id="perv_c_risk_score_idzz_authentication_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->cisp;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'cisp');" id="c_risk_score_idzz_cisp_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_cisp;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->cisp;?>" name="gv_score"  id="perv_c_risk_score_idzz_cisp_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->consultancy_implementation;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'consultancy_implementation');" id="c_risk_score_idzz_consultancy_implementation_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_consultancy_implemation;?>" name="gv_score">

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->consultancy_implementation;?>" name="gv_score" id="perv_c_risk_score_idzz_consultancy_implementation_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td> 

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->cybersecurity_insurance;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'cybersecurity_insurance');" id="c_risk_score_idzz_cybersecurity_insurance_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled class="form-control" value="<?php echo $all_c_risk_scores->previous_cyber_inc;?>" >

								<!-- recent score listed hidden input-->
								<input type="hidden"  class="form-control" value="<?php echo $all_c_risk_scores->cybersecurity_insurance;?>" name="gv_score"  id="perv_c_risk_score_idzz_cybersecurity_insurance_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->data_storage;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'data_storage');" id="c_risk_score_idzz_data_storage_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_data_storage;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->data_storage;?>" name="gv_score" id="perv_c_risk_score_idzz_data_storage_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->device_management;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'device_management');" id="c_risk_score_idzz_device_management_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_device_menagement;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->device_management;?>"  id="perv_c_risk_score_idzz_device_management_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control"  style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->email_security;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'email_security');" id="c_risk_score_idzz_email_security_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_email_security;?>" name="gv_score">

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"   value="<?php echo $all_c_risk_scores->email_security;?>" name="gv_score"  id="perv_c_risk_score_idzz_email_security_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->encryption;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'encryption');" id="c_risk_score_idzz_encryption_<?php echo $all_c_risk_scores->c_risk_score_id?>">
	
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_encryption;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"  value="<?php echo $all_c_risk_scores->encryption;?>" name="gv_score"  id="perv_c_risk_score_idzz_encryption_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;"  value="<?php echo $all_c_risk_scores->firewall;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'firewall');" id="c_risk_score_idzz_firewall_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;"  disabled value="<?php echo $all_c_risk_scores->previous_firewall;?>" name="gv_score">

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control"   value="<?php echo $all_c_risk_scores->firewall;?>" name="gv_score"  id="perv_c_risk_score_idzz_firewall_<?php echo $all_c_risk_scores->c_risk_score_id?>">

							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->internet;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'internet');" id="c_risk_score_idzz_internet_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_internet ;?>" name="gv_score">
								
								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->internet;?>" name="gv_score"  id="perv_c_risk_score_idzz_internet_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->ids;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'ids');" id="c_risk_score_idzz_ids_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_ids;?>" name="gv_score" disabled>

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" value="<?php echo $all_c_risk_scores->ids;?>" name="gv_score"  id="perv_c_risk_score_idzz_ids_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->logs;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'logs');" id="c_risk_score_idzz_logs_<?php echo $all_c_risk_scores->c_risk_score_id?>">
								
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_logs;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->logs;?>" name="gv_score"  id="perv_c_risk_score_idzz_logs_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->mssp;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'mssp');" id="c_risk_score_idzz_mssp_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_mssp;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->mssp;?>" name="gv_score"  id="perv_c_risk_score_idzz_mssp_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->microsoft_i_o_directory;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'microsoft_i_o_directory');" id="c_risk_score_idzz_microsoft_i_o_directory_<?php echo $all_c_risk_scores->c_risk_score_id?>">
								
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_microsoft_i_o_directory ;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->microsoft_i_o_directory;?>" name="gv_score"  id="perv_c_risk_score_idzz_microsoft_i_o_directory_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->os;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'os');" id="c_risk_score_idzz_os_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_os;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" value="<?php echo $all_c_risk_scores->os;?>" name="gv_score"  id="perv_c_risk_score_idzz_os_<?php echo $all_c_risk_scores->c_risk_score_id?>">

							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->password_policy;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'password_policy');" id="c_risk_score_idzz_password_policy_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_password_policy;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->password_policy;?>" name="gv_score"  id="perv_c_risk_score_idzz_password_policy_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->police;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'police');" id="c_risk_score_idzz_police_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control " style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_police;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->police;?>" name="gv_score"  id="perv_c_risk_score_idzz_police_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->patching_software;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'patching_software');" id="c_risk_score_idzz_patching_software_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_patching_software;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->patching_software;?>" name="gv_score"  id="perv_c_risk_score_idzz_patching_software_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->physical_security;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'physical_security');" id="c_risk_score_idzz_physical_security_<?php echo $all_c_risk_scores->c_risk_score_id?>">
									
								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_physical_security ;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->physical_security;?>" name="gv_score"  id="perv_c_risk_score_idzz_physical_security_<?php echo $all_c_risk_scores->c_risk_score_id?>">

							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->proxy;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'proxy');" id="c_risk_score_idzz_proxy_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_proxy;?>" name="gv_score">
								
								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->proxy;?>" name="gv_score"  id="perv_c_risk_score_idzz_proxy_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->pki;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'pki');" id="c_risk_score_idzz_pki_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" style="width:45%;float:left;margin-left:5px;" disabled value="<?php echo $all_c_risk_scores->previous_pki;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->pki;?>" name="gv_score"  id="perv_c_risk_score_idzz_pki_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->sdns;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'sdns');" id="c_risk_score_idzz_sdns_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled class="form-control" value="<?php echo $all_c_risk_scores->previous_sdns;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->sdns;?>" name="gv_score"  id="perv_c_risk_score_idzz_sdns_<?php echo $all_c_risk_scores->c_risk_score_id?>">


							</td>

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->spam_filtering;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'spam_filtering');" id="c_risk_score_idzz_spam_filtering_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled class="form-control" value="<?php echo $all_c_risk_scores->previous_spam_filtering ;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->spam_filtering;?>" name="gv_score"  id="perv_c_risk_score_idzz_spam_filtering_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->system_hardware;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'system_hardware');" id="c_risk_score_idzz_system_hardware_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_system_hardware;?>" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->system_hardware;?>"  id="perv_c_risk_score_idzz_system_hardware_<?php echo $all_c_risk_scores->c_risk_score_id?>">


							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->threat_prevention;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'threat_prevention');" id="c_risk_score_idzz_threat_prevention_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_threat_prevention;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->threat_prevention;?>" name="gv_score"  id="perv_c_risk_score_idzz_threat_prevention_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->tiered_user_access;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'tiered_user_access');" id="c_risk_score_idzz_tiered_user_access_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" class="form-control" disabled style="width:45%;float:left;margin-left:5px;" value="<?php echo $all_c_risk_scores->previous_tired_user;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" class="form-control" style="width:45%; float:left;" value="<?php echo $all_c_risk_scores->tiered_user_access;?>" name="gv_score"  id="perv_c_risk_score_idzz_tiered_user_access_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

							<td>
								<!-- score update input-->
								<input type="text" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->training;?>" name="gv_score" onchange="c_risk_scorezz(<?php echo $all_c_risk_scores->c_risk_score_id?>,'training');" id="c_risk_score_idzz_training_<?php echo $all_c_risk_scores->c_risk_score_id?>">

								<!-- previous score listed disabled input-->
								<input type="text" style="width:45%;float:left;margin-left:5px;" disabled class="form-control" value="<?php echo $all_c_risk_scores->previous_training;?>" name="gv_score" >

								<!-- recent score listed hidden input-->
								<input type="hidden" style="width:45%; float:left;" class="form-control" value="<?php echo $all_c_risk_scores->training;?>" name="gv_score"  id="perv_c_risk_score_idzz_training_<?php echo $all_c_risk_scores->c_risk_score_id?>">
							</td>

						  </tr>
						 	<?php
						 		$i++;
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
	<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" style="margin-top:105px;">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <strong style="font-size:18px;">C Risk Score Updated Successfully!</strong>
		  
        </div>
		 <a href="<?php echo base_url('dynamic_c_risk');?>" style="margin-left:225px;margin-top:20px;" type="button" class="btn btn-success">Continue <i class="far fa-gem ml-1 text-white"></i></a>
      </div>

      <!--Footer-->
    
    </div>
    <!--/.Content-->
  </div>
</div>
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
    <script>
    	function c_risk_scorezz(e,f){

    		var score_gv = $("#c_risk_score_idzz_"+f+"_"+e+"").val();
			var previous_score = $("#perv_c_risk_score_idzz_"+f+"_"+e+"").val();
			//alert(previous_score);
			//exit;
			

    		/* ajax starts */
    		 $.ajax({
		        url: '<?php echo base_url();?>dynamic_c_risk/update_c_risk',
		        data: {'c_risk_id': e,'row_name': f,'score_of_c_risk':score_gv,'previous_score':previous_score}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          //alert(response);
				  //exit;
		           $("#centralModalSuccess").modal('show');
		        }
		      });
    		 /* ajax ends */
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
