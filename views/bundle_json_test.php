<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Loading Please Wait | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	
	<style>
		#progressbar {
		  width: 0%;
		  height: 30px;
		  background-color: #4CAF50;
		  text-align: center; /* To center it horizontally (if you want) */
		  line-height: 30px; /* To center it vertically */
		  color: white;
		}

		#myBar {
		  width: 0%;
		  height: 31px;
		  background-color: #4caf50;
		  text-align: center; /* To center it horizontally (if you want) */
		  line-height: 30px; /* To center it vertically */
		  padding:2px;
		  color: white;
		  border-radius:5px 0px 0px 5px;
		}
		.progress{
			color:#fff;
			padding:5px;
			height:41px;
		}
	</style>
  </head>
  <body>
  	<!--<div id="load"></div>-->
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <main>    
      <div class="container margin_60" id="loaderImg" style="margin-top:100px;">
		  <div class="col-md-12" style="padding: 10px 25px 10px;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;text-align:center;height:400px;" id="contents">
              <!--<img src="<?php echo base_url();?>images/favicon.gif" style="height:64px;margin-top:100px;">-->
			  <!--<div id="myBar" class="progress" style="margin-top:100px"></div>-->
			  <div class="progress" style="margin-top:100px">
				  <div id="myBar" class="progrz progress-bar-success"></div>
			  </div>

			  <h3>Please wait while we process your bundles.....</h3>
			  <h3 class="fnlz" style="display:none;">Finalizing your process.....</h3>
			  <p>This could take five minutes to process as we have thousands of bundles to check.</p>
			  <p>Please do NOT press the Back button. If you press Back, you will have to login again to get your new Results.</p>
			  <br />
			  <input type="hidden" value="<?php echo $this->session->userdata['logged_in']['user_id'];?>" id="sess_user">
			  <!--<div id="myProgress">
				  <div id="progressbar" style="border:1px solid #CCC;width:<?php echo((isset($progress_data) && $progress_data != NULL)?$progress_data:0);?>%"><?php echo((isset($progress_data) && $progress_data != NULL)?$progress_data:0);?> %</div>
			  </div>-->

		  </div>
          <!-- End col-md-3 -->
       
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>

    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->

	<script>
		$(document).ready(function(){
			
			$.ajax({
			  url: '<?php echo base_url();?>bundle_json_test/result_bundle',
			  type: "post",
			  //async: true,
			  success: function(response){
				  if(response == 'complete'){
					var prepare_bundle = "<?php echo base_url('results');?>";
					window.location.href = prepare_bundle;
				  }
			  }
			});
		});

		interval = setInterval(readTextFile,200);
		
		function readTextFile(){
			$.ajax({
			  url: '<?php echo base_url();?>bundle_json_test/fetch_loader',
			  type: "post",
			  async: true,
			  success: function(response){
				 var bal = response+'%';
				 $("div#myBar").width(bal);
				 $('.progrz').html(bal+' Completed');
				 if(response == 100){

					clearInterval(interval);
					$(".fnlz").show();
					$.ajax({
					  url: '<?php echo base_url();?>bundle_json_test/delete_txt',
					  type: "post",
					  success: function(response){
						if(response == 'success'){
							var prepare_bundle = "<?php echo base_url('prepare_my_bundle');?>";
							window.location.href = prepare_bundle;
						}else if(response == 'failed'){
							alert(response);
						}
					  }
					});

				 }
			  }
			});
		}
	</script>
	</body>
</html>