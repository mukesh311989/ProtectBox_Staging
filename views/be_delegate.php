<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Be a Delegate | ProtectBox</title>
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
    <!--<div id="load"></div>-->
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
         	Be a Delegate
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
			  <div class=" table-responsive" style="zoom:90%;">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Serial&nbsp;Number</th>
							<th width="15%">SMB&nbsp;Name</th>
							<th width="30%">SMB&nbsp;Email</th>
							<th width="15%">SMB&nbsp;Phone</th>
							<th width="30%">SMB&nbsp;Questionnaire&nbsp;Answers</th>
							<th width="30%">Invite&nbsp;Date</th>
						  </tr>
						</thead>
						<tbody id="paremt_element">
						<?php
							$i = 1;
							foreach($delecate_data as $fetch_del) {
						?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $fetch_del->firstname;?>&nbsp;<?php echo $fetch_del->lastname;?></td>
							<td><?php echo $fetch_del->email;?></td>
							<td><?php echo $fetch_del->phone;?></td>
							<td>
							<?php
							$get_basic = $this->be_delegate_m->get_basic($this->session->userdata['logged_in']['user_id'],$fetch_del->user_id);
							if(!empty($get_basic))
							{
							?>
								<a href="<?php echo base_url('delegate_questionaire');?>/<?php echo $fetch_del->sme_id;?>" class="btn btn-md btn-success">Basics</a>
							<?php
							}
							$get_tech = $this->be_delegate_m->get_tech($this->session->userdata['logged_in']['user_id'],$fetch_del->user_id);
							if(!empty($get_tech))
							{
							?>
								<a href="<?php echo base_url('delegate_questionaire_tech_info');?>/<?php echo $fetch_del->sme_id;?>" class="btn btn-success">Technical</a>
							<?php
							}
							$get_non_tech = $this->be_delegate_m->get_non_tech($this->session->userdata['logged_in']['user_id'],$fetch_del->user_id);
							if(!empty($get_non_tech))
							{
							?>
								<a href="<?php echo base_url('delegate_questionaire_nontech_info');?>/<?php echo $fetch_del->sme_id;?>" class="btn btn-success">Non-Technical</a>
							<?php
							}
							$get_budget = $this->be_delegate_m->get_budget($this->session->userdata['logged_in']['user_id'],$fetch_del->user_id);
							if(!empty($get_budget))
							{
							?>
								<a href="<?php echo base_url('delegate_questionaire_budget');?>/<?php echo $fetch_del->sme_id;?>" class="btn btn-success">Budget</a>
							<?php
							}
							?>
							</td>
							<td><?php echo date('d/m/Y',$fetch_del->date);?></td>
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
