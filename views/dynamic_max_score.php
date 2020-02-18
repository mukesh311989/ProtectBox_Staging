<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MES T & NT Score Dynamic Algorithm | ProtectBox</title>
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
          MES T & NT Score Dynamic Algorithm
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
				<h3>Technical Max Scores</h3>
			  	<div id="alertzz_tech" style="display:none;">
					<div class="alert alert-success"> <strong>MES T Score updated successfully!</strong> </div>
				</div>
			
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
				  		<thead>
						  <tr>
							<th width="10%">T&nbsp;Risk&nbsp;Score&nbsp;No.</th>
							<th width="80%">Questions</th>
							<th width="10%">Max score</th>
							<th width="10%">Previous score</th>
							<th width="10%">Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_tech_max_scores AS $all_tech_max_scores){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $all_tech_max_scores->score_type;?></td>
							<td><input type="text" class="form-control" value="<?php echo $all_tech_max_scores->max_score;?>" name="max_tech_score"  id="max_tech_scorezz_<?php echo $all_tech_max_scores->max_score_id?>"></td>
							<td><input type="text" disabled class="form-control" value="<?php echo $all_tech_max_scores->previous_max_score;?>" name="max_tech_score">
							<input type ="hidden" value="<?php echo $all_tech_max_scores->max_score;?>" id="previous_max_score_<?php echo $all_tech_max_scores->max_score_id?>" name="previous_max_score">
							</td>
							<td><a href="javascript:void();" class="btn btn-success" onclick="max_tech_scorezz(<?php echo $all_tech_max_scores->max_score_id?>);">Update Score</a></td>
						  </tr>
						 	<?php
						 		$i++;
								}
						 	?>
						</tbody>
					  </table>
					 
				  </div> 
				
				</div>

				<div class="tab-content rounded_div">
				<h3>Non - Technical Max Scores</h3>
			  	<div id="alertzz_non_tech" style="display:none;">
					<div class="alert alert-success"> <strong>MES NT Score updated successfully!</strong> </div>
				</div>
			
			  <div class=" table-responsive">
				  <table id="example1" class="table table-striped table-bordered" style="width:100%">
				  		<thead>
						  <tr>
							<th width="10%">NT&nbsp;Risk&nbsp;Score&nbsp;No.</th>
							<th width="70%">Questions</th>
							<th width="10%">Max score</th>
							<th width="20%">Previous score</th>
							<th width="10%">Action</th>
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($fetch_non_tech_max_scores AS $all_non_tech_max_scores){
							?>
						  <tr>
							<td><?php echo $i;?></td>
							<td><?php echo $all_non_tech_max_scores->score_type;?></td>
							<td><input type="text" class="form-control" value="<?php echo $all_non_tech_max_scores->max_score;?>" name="max_non_tech_score"  id="max_non_tech_scorezz_<?php echo $all_non_tech_max_scores->max_score_id?>"></td>
							<td>
								<input type="text" class="form-control" disabled value="<?php echo $all_non_tech_max_scores->previous_max_score;?>" name="max_non_tech_score">
								<input type ="hidden" value="<?php echo $all_non_tech_max_scores->max_score;?>" id="previous_nontech_max_score_<?php echo $all_non_tech_max_scores->max_score_id?>" name="previous_max_score">
							</td>
							<td><a href="javascript:void();" class="btn btn-success" onclick="max_non_tech_scorezz(<?php echo $all_non_tech_max_scores->max_score_id?>);">Update Score</a></td>

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
          <strong style="font-size:18px;">MES Tech Score Updated Successfully!</strong>
		  
        </div>
		 <a href="<?php echo base_url('dynamic_max_score');?>" style="margin-left:225px;margin-top:20px;" type="button" class="btn btn-success">Continue <i class="far fa-gem ml-1 text-white"></i></a>
      </div>

      <!--Footer-->
    
    </div>
    <!--/.Content-->
  </div>
</div>


<div class="modal fade" id="centralModalSuccess_nontech" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" style="margin-top:105px;">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <strong style="font-size:18px;">MES Non Tech Score Updated Successfully!</strong>
		  
        </div>
		 <a href="<?php echo base_url('dynamic_max_score');?>" style="margin-left:225px;margin-top:20px;" type="button" class="btn btn-success">Continue <i class="far fa-gem ml-1 text-white"></i></a>
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
		  $(document).ready(function() {
			$('#example1').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'print'
				]
			} );

		} );
	</script>
    <script>
    	function max_tech_scorezz(e){

    		var score_tech_max = $("#max_tech_scorezz_"+e+"").val();
			var previous_max_score = $("#previous_max_score_"+e+"").val();
			//alert (previous_max_score);
			//exit;
    		/* ajax starts */
    		 $.ajax({
		        url: '<?php echo base_url();?>dynamic_max_score/update_tech_max_score',
		        data: {'max_tech_score_id': e,'tech_max_score':score_tech_max,'previous_max_score':previous_max_score}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          
		         $("#centralModalSuccess").modal('show');
		        }
		      });
    		 /* ajax ends */
    	}

    	function max_non_tech_scorezz(e){

    		var score_non_tech_max = $("#max_non_tech_scorezz_"+e+"").val();
			var previous_nontech_score = $("#previous_nontech_max_score_"+e+"").val();
			
    		/* ajax starts */
    		 $.ajax({
		        url: '<?php echo base_url();?>dynamic_max_score/update_non_tech_max_score',
		        data: {'max_non_tech_score_id': e,'non_tech_max_score':score_non_tech_max,'previous_non_tech_score':previous_nontech_score}, // change this to send js object
		        type: "post",
		        success: function(response){
		           //document.write(data); just do not use document.write
		          //alert(response);
		         $("#centralModalSuccess_nontech").modal('show');
		        }
		      });
    		 /* ajax ends */
    	}
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
