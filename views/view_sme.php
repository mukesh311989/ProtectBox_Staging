<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMB | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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
          View Small and medium business (SMB) 
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			
			<div class="col-md-12">
				<!--  Tabs -->   
			<div id="alertzzzz" style="display:none;">
				<div class="alert alert-success"> <strong>SMB status updated successfully!</strong> </div>
			</div>
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
			  <div class=" table-responsive">
				<?php
					$ci =&get_instance();
					$ci->load->model('admin_role_m');
					$get_admin_info = $ci->admin_role_m->fetch_admin($this->session->userdata['logged_in']['user_id']);
				?>
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">SMB&nbsp;No.</th>
							<th width="15%">SME&nbsp;Name</th>
							<th width="30%">Company&nbsp;Name</th>
							<th width="15%">Email</th>
							<th width="15%">Phone</th>
							<th width="15%">Medium</th>
							<th width="15%">Status</th>
							<th width="15%">Date</th>
							<?php
								if (sizeof($get_admin_info) < 1){
							?>
								<th width="15%">Order&nbsp;Info</th>
								<th width="15%">More&nbsp;Info</th>
							<?php
								}else{
							
								if($get_admin_info->smb_leads_edit == 'YES' || $get_admin_info->smb_leads_review == 'YES'){
							?>
								<th width="15%">Order&nbsp;Info</th>
								<th width="15%">More&nbsp;Info</th>
							<?php
								}
							}	
							?>

						  </tr>
						</thead>
						<tbody>
							<?php
								$size_all_sme = sizeof($all_sme);
								if($size_all_sme > 0){							
								$i = 1;
								foreach($all_sme AS $sme_info){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $sme_info->firstname;?>&nbsp;<?php echo $sme_info->lastname;?>&nbsp;
								<?php
								$check_date = $sme_info->registration_date;
								$present_time = time();
								$last_seven_days = strtotime("7 days ago");
								if($check_date > $last_seven_days && $check_date <= $present_time){
									echo '<span style="color:red;font-size:20px;">*</span>';
								}else{
									echo '';
								}
							?>
							</td>
							<td><?php echo $sme_info->company_name;?></td>
							<td><?php echo $sme_info->email;?></td>
							<td><?php echo $sme_info->phone;?></td>
							<td><?php echo $sme_info->method;?></td>
							<td>
								<div class="form-group options">
	                                <label class="switch-light switch-ios">
	                                <input type="checkbox" name="status" id="option_2" <?php echo (($sme_info->status == '1')?'checked':'')?> onchange="statzz('<?php echo $sme_info->user_id;?>');">
	                                <span>
	                                	<span>Inactive</span>
	                                	<span>Active</span>
	                                </span>
	                                <a></a>
	                                </label>
                            	</div>
								<input type="hidden" id="tgle_<?php echo $sme_info->user_id;?>" value="<?php echo $sme_info->status;?>">
							</td>
							<td><?php echo date('d/m/Y',$sme_info->registration_date);?></td>
							
							<?php
								if (sizeof($get_admin_info) < 1){
							?>
							<td>
								<a href="<?php echo base_url('edit_smb');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Edit SMB</a><br/><a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
							</td>
							<td>
								<a href="<?php echo base_url('sme_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">View Orders</a><a href="<?php echo base_url('sme_pending_order');?>/<?php echo $sme_info->user_id;?>" class="btn" style="background-color:#808080;color:#fff;border-color: #4cae4c;font-size:13px;padding-left:4px;width:100px;">Pending Orders</a>
							</td>
							<?php
								}else{
							?>
							<?php 
								if($get_admin_info->smb_leads_edit == 'YES'){
							?>
							<td>
								<a href="<?php echo base_url('edit_smb');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Edit SMB</a><br/><a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
							</td>
							<?php 
							}if($get_admin_info->smb_leads_review == 'YES'){
							?>
							<td>
								<a href="<?php echo base_url('view_smb_questionnaire');?>/<?php echo $sme_info->user_id;?>" class="btn btn-warning" style="width:100px;">Questionnaire</a>
							</td>
							<?php
							}
							?>
							<td>
								<a href="<?php echo base_url('sme_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">View Orders</a><br/><a href="<?php echo base_url('sme_pending_order');?>/<?php echo $sme_info->user_id;?>" class="btn btn-success" style="width:100px;">Pending Orders</a>
							</td>
						   <?php
							}
						   ?>
						  </tr>
						 	<?php
						 		$i++;
								}
							}else{
						 	?>
						 	<tr>
						 		<td colspan="6">No results to display</td>
						 	</tr>
						 	<?php
							}
						 	?>
						</tbody>
					  </table>
					  <div class="dataTables_paginate paging_simple_numbers" style="float:right;">
						   <?php 
								if(isset($links)){
									echo $links;
								}
							?>
					  </div>
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
				],
				"paging":   false,
				"bInfo" : false
			} );

		} );
    </script>
    <script>
    	function statzz(e){
    		var status_val = $('#tgle_'+e+'').val();
    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>view_sme/update_status',
		        data: {'status_val': status_val,'user_id': e}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
				  $('#tgle_'+e+'').val(response);
		          $('#alertzzzz').show();
		        }
		      });
    		 /* ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
