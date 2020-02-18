<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manage Delegates | ProtectBox</title>
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
		min-height: 350px;
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
          Manage Delegates
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<div class="col-md-12">
				<?php
					if($this->session->flashdata('success_reminder')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success_reminder');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('user_has')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('user_has');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_failed')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_failed');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_admin')){
				?>
					<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('del_failed');?></strong> </div>
				<?php
					}
					if($this->session->flashdata('del_first_success')){
				?>
					<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('del_first_success');?></strong> </div>
				<?php
					}
				?>
				<div class="alert alert-success" id="status_div" style="display:none;"> <strong>Success , Your have changed status for this delegate user!</strong> </div>
				
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			
			<div class="tab-content rounded_div">
			<div class="row">
				<form action="<?php echo base_url("manage_delegates/add_delegate");?>" method="post">
					<div class="col-md-3 hidable" style="display:none;">
						<input type="text" class="form-control" name="del_email">
					</div>
					<div class="col-md-3 hidable" style="display:none;">
						<button class="btn btn-success" type="submit" style="margin-bottom:10px;" >Add delegate</button>
					</div>
				</form>
				<div class="col-md-3 showable">
					<button class="btn btn-success" style="margin-bottom:10px;" onclick="kholoamar_modal();">Add delegate</button>
				</div>
			</div>
			  <div class=" table-responsive" style="zoom:90%;">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Delegate&nbsp;No.</th>
							<th width="15%">Name</th>
							<th width="30%">Email</th>
							<th width="15%">Phone</th>
							<th width="30%">Questionnaire Access</th>
							<th width="30%">Invite Date</th>
							<th width="30%">Last Reminder Date</th>
							<th width="30%">Status</th>
							<th width="30%">Send Reminder</th>
							<th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody id="paremt_element">
						<?php
						$i = 1;
						foreach ($get_delegate as $fetch_del) {
						$user_details = $this->manage_delegates_m->fetch_user($fetch_del->user_id);
						$del_acess = $this->manage_delegates_m->get_access($fetch_del->delicate_email,$this->session->userdata['logged_in']['user_id']);
						?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php 
								if(!empty($user_details)){
									echo $user_details->firstname;?>&nbsp;<?php echo $user_details->lastname;
								}else{
									echo "Not yet registered!";
								}
							?></td>
							<td><?php echo $fetch_del->delicate_email;?></td>
							<td><?php 
								if(!empty($user_details)){
									echo $user_details->phone;
								}else{
									echo "Not yet registered!";
								}
							?></td>
							<td>
							<?php
								if($fetch_del->user_id != ''){
									$get_basic = $this->manage_delegates_m->get_basic($fetch_del->user_id,$this->session->userdata['logged_in']['user_id']);
									if(!empty($get_basic)){
										if($get_basic->industry_input != '' || $get_basic->employees_input != '' || $get_basic->location_input != '' || $get_basic->handle_data_input != ''){
											echo "<code>Basics</code>";
											echo "<br>";
										}
									}
									$get_tech = $this->manage_delegates_m->get_tech($fetch_del->user_id,$this->session->userdata['logged_in']['user_id']);
									if(!empty($get_tech)){
										if($get_tech->os_input != '' || $get_tech->antivirus_input != '' || $get_tech->firewall_input != '' || $get_tech->manage_it_input != '' || $get_tech->internet_input != '' || $get_tech->internet_option_input != '' || $get_tech->wifi_option_input != '' || $get_tech->wpa2_input != '' || $get_tech->browser_input != '' || $get_tech->update_browser_input != '' || $get_tech->email_input != '' || $get_tech->spam_filtering_input != '' || $get_tech->ad_blocking_input != '' || $get_tech->web_hosting_input != '' || $get_tech->web_hosting_option_input != '' || $get_tech->hacking_input != '' || $get_tech->logs_input != '' || $get_tech->software_update_input != '' || $get_tech->data_encrypt_input != '' || $get_tech->system_access_input != '' || $get_tech->directory_service_input != '' || $get_tech->two_factor_authentication_input != '' || $get_tech->premises_input != '' || $get_tech->public_key_infrastructure_input != '' || $get_tech->email_input_score != '' || $get_tech->managed_msp_input != '' ){
											echo "<code>Technical</code>";
											echo "<br>";
										}
									}
									$get_nontech = $this->manage_delegates_m->get_nontech($fetch_del->user_id,$this->session->userdata['logged_in']['user_id']);
									if(!empty($get_nontech)){
										if($get_nontech->business_continuity_plan_input != '' || $get_nontech->business_continuity_procedure_input != '' || $get_nontech->regular_backup != '' || $get_nontech->training_cybersecurity_input != '' || $get_nontech->accreditation_security_standerd_input != '' || $get_nontech->adaquate_password_input != '' || $get_nontech->adaquate_password_input != '' || $get_nontech->cyber_security_information_input != '' || $get_nontech->cyber_insurence_input != '' || $get_nontech->threat_detection_input != '' || $get_nontech->cloud_storage != '' || $get_nontech->device_management_input != '' || $get_nontech->vpn_home != '' || $get_nontech->need_consultant_input != '' ){
											echo "<code>Non-Technical</code>";
											echo "<br>";
										}
									}

									$get_budget = $this->manage_delegates_m->get_budget($fetch_del->user_id,$this->session->userdata['logged_in']['user_id']);
									if(!empty($get_budget)){
										if($get_budget->amount_cybersecurity_input != '' || $get_budget->percentage_annual_budget_input != '' || $get_budget->budget_cybersecurity_per_year_input != '' || $get_budget->other_payment != '' || $get_budget->budget_breakdown != '' ){
											echo "<code>Budget</code>";
										}
									}
								}
							?>
							</td>
							<?php
							if(!empty($user_details)){
							$get_access = $this->manage_delegates_m->get_access($user_details->email,$this->session->userdata['logged_in']['user_id']);
							}
							?>
							<td><?php echo date('d/m/Y',$fetch_del->date);?></td>
							<td>
								<?php
									if($fetch_del->last_reminder != '')
									{
										echo date('d/m/Y',$fetch_del->last_reminder);
									}else{
										echo "Not yet sent!";
									}
								?>
							</td>
							<td>
								<?php
									if(!empty($user_details)){
								?>
								<div class="form-group options">
	                                <label class="switch-light switch-ios">
	                                <input type="checkbox" name="status" id="option_2" <?php echo (($del_acess->status == 'active')?'checked':'');?> onchange="change_status(<?php echo $user_details->user_id?>);">
	                                <span>
	                                	<span>Inactive</span>
	                                	<span>Active</span>
	                                </span>
	                                <a></a>
	                                </label>
                            	</div>
								<input type ="hidden" id="status" value="<?php echo $get_access->status;?>">
								<input type ="hidden" id="sme_id" value="<?php echo $this->session->userdata['logged_in']['user_id'];?>">
								<?php
									}else{
										echo "Not yet registered!";
									}
								?>
							</td>
							<td>
								<?php
									if(!empty($user_details)){
								?>
								<a href="<?php echo base_url('manage_delegates/send_reminder');?>/<?php echo $user_details->user_id;?>" class="btn btn-success">Email</a>
								<?php
									}else{
										echo "Not yet registered!";
									}
								?>
							</td>
							<td>
								<?php
									if(!empty($user_details)){
								?>
								<a href="<?php echo base_url('edit_delegate');?>/<?php echo $user_details->user_id;?>" class="btn btn-success">Edit Delegate</a>
								<?php
									}else{
										echo "Not yet registered!";
									}
								?>
							</td>
						  </tr>
						<?php
						$i++;
						}
						?>
						 </tbody>
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
    <!-- Specific scripts -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<!-- Export button for tables Starts-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<!-- Export button for tables ends-->


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

		function kholoamar_modal(){
			$('.hidable').show();
			$('.showable').hide();
		}
    </script>


    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
	  $(document).ready(function() {
			$('#example').DataTable();
		} );
    </script>
    <script>
    	function change_status(del_id) {
    		var status = $("#status").val();
    		var sme_id = $("#sme_id").val();
    		$.ajax({
		        url: '<?php echo base_url();?>manage_delegates/update_status',
		        data: {'status': status,'del_id': del_id ,'sme_id':sme_id},
		        type: "post",
		        success: function(response){
		          $("#status_div").show();
				  $("#status").val(response);
		          $(window).scrollTop(0);
		        }
		      });
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
