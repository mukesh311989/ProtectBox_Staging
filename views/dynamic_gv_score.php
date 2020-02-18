<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GV Score Dynamic Algorithm | ProtectBox</title>
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
          GV Score Dynamic Algorithm
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
					<div class="alert alert-success"> <strong>GV Score updated successfully!</strong> </div>
				</div>
			
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">GV&nbsp;Score&nbsp;No.</th>
							<th width="30%">GV Score Employees Input</th>
							<th width="15%">Risk Score</th>
							<th width="15%">Previous Risk Score</th>
							<th width="15%">Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_gv_scores AS $all_gv_scores){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $all_gv_scores->gv_score_employee_input;?></td>
							<td><input type="text" class="form-control" value="<?php echo $all_gv_scores->risk_score;?>" name="gv_score" onchange="gv_scorezz(<?php echo $all_gv_scores->gv_score_id?>);" id="gv_score_idzz_<?php echo $all_gv_scores->gv_score_id?>"></td>
							<td><input type="text" class="form-control" disabled value="<?php echo $all_gv_scores->previous_risk_score;?>" name="previous_gv_score">
							<input type="hidden" value="<?php echo $all_gv_scores->risk_score;?>" id="previous_score_<?php echo $all_gv_scores->gv_score_id?>" name="previous_gv_score">
							</td>
							<td><a href="javascript:void();" class="btn btn-success" onclick="gv_scorezz(<?php echo $all_gv_scores->gv_score_id?>);"> Update Score</td>

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
          <strong style="font-size:18px;">GV Score Updated Successfully!</strong>
		  
        </div>
		 <a href="<?php echo base_url('dynamic_gv_score');?>" style="margin-left:225px;margin-top:20px;" type="button" class="btn btn-success">Continue <i class="far fa-gem ml-1 text-white"></i></a>
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
    	function gv_scorezz(e){
			
    		var score_gv = $("#gv_score_idzz_"+e+"").val();
			var previos_score_gv = $("#previous_score_"+e+"").val();
		
    		/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>dynamic_gv_score/update_gv_score',
		        data: {'score_of_gv': score_gv,'gv_score_id': e ,'previous_score':previos_score_gv}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          $("#centralModalSuccess").modal('show');
		        }
		      });
    		 /*ajax code ends*/
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
