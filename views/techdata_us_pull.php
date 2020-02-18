<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TechData US Pull | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="css/date_picker.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
	<style>
	.new_div {
		margin-bottom:20px;
	}
	.rounded_div {
		border:1px solid #CCC;
		box-shadow: 0px 0px 3px #bfbfbf;
		border-radius:5px;
	}
	.other_title
	{
		background:none;text-align:center;font-size:40px;color:#000;bottom:30px;
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
        <div class="main_title other_title" style="">
          TechData US Pull
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>
      <div class="container margin_60">
        <div class="row">

		  <div class="col-md-12 col-sm-12" style="margin-top:15px;">
			<div class="table-responsive rounded_div">
				<h3 style="padding:8px;">TechData US</h3>
                <input type="hidden" name="counter" id="counter" value="0">
				<!-- Data pulling starts -->
			   <div class="col-md-12 col-sm-12">
				   <div id="loaderImg_us" style="display:none;">
					   <div class="col-md-12" style="border-radius: 5px;text-align:center;" id="contents">
						   <img src="<?php echo base_url();?>images/favicon.gif" style="height:64px;">
						   <h3>Please wait while we import TechData US.....</h3>
						   <p id="td_status_us">This might take several minutes , Please be patient.</p>
					   </div>
					   <!-- End col-md-3 -->
					   <!-- End row -->
				   </div>
				   <div class="col-md-12 col-sm-12" id="load_data_us" style="display:none;">
						<h3>Total number of products placed in local DB</h3>
						<p style="font-size: 18px;">#<b id="total_products_us">0</b> products pulled</p>
						<p style="font-size: 18px;">#<b id="total_records_us">0</b> of updated products</p>
						<p style="font-size: 18px;">#<b id="total_mapped_records_us">0</b> of Active products (TD Group category auto-mapped to PB category)</p>
						<p style="font-size: 18px;">#<b id="total_unmapped_records_us">0</b> new products to map (TD Group category NOT auto-mapped to PB category so have to be mapped individually by Kiran or Admin Team)</p>
				   </div>
				</div>
				<!-- Data pulling ends -->

				<!-- Data scraping starts -->
				   <div class="col-md-12 col-sm-12">
					   <div id="scraping_loader" style="display:none;">
						   <div class="col-md-12" style="border-radius: 5px;text-align:center;" id="contents">
							   <img src="<?php echo base_url();?>images/favicon.gif" style="height:64px;">
							   <h3>Please wait while we scrape data from TechData US.....</h3>
							   <p>Make sure to allow pop-up from your browser to perform this task.</p>
							   <p>This might take several minutes , Please be patient and do not close the pop-up window.</p>
						   </div>
					   </div>
					   <div class="col-md-12 col-sm-12" id="scrape_data" style="display:none;">
							<h3>Total number of products scraped in local DB</h3>
							<p style="font-size: 18px;">#<b id="total_p">0</b> total products.</p>
							<p style="font-size: 18px;">#<b id="p_scraped">0</b> products scraped.</p>
							<p style="font-size: 18px;">#<b id="u_scraped">0</b> of products yet to scraped.</p>
					   </div>
					</div>
					<!-- Data scraping ends -->
				<div class="col-md-12 col-sm-12" id="btn_div">
					<div class="col-md-4" style="text-align:center;padding:10px;"  id="btn_hidezz_us">
						<a href="javascript:void(0);" class="btn btn-primary" onclick="fetch_data_tdus();">Start Pulling</a>
				    </div>
					<div class="col-md-4" style="text-align:center;padding:10px;">
						<a href="javascript:void(0);" class="btn btn-primary" onclick="start_scrape();">Start Scraping</a>
				   </div>
				   <div class="col-md-4" style="text-align:center;padding:10px;">
						<a href="javascript:void(0);" class="btn btn-primary" onclick="start_newscrape();">Scrap New ONLY</a>
				   </div>
				</div>
			</div>
		   </div>
			
		  </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </main>
    <!-- End main -->
    <?php $this->load->view("common/footer");?>
    <!-- Specific scripts -->
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
	
	<script>
		// TD US DATA PULL STARTS
		$('#load_data_us').hide();
		 $('#btn_hidezz_us').show();
		 var myWindow_us;
			function fetch_data_tdus(){
				$('#loaderImg_us').show();
				$('#load_data_us').hide();
				$('#btn_hidezz_us').hide();
				$('#no_emails_us').hide();
				myWindow_us = window.open("<?php echo $instance_id;?>", "myWindow_us", "width=400,height=600");
			}

			function load_link_us(){
			 $.ajax({
				url: '<?php echo base_url();?>techdata_us_pull/refresh_div_us',
				type: "post",
				dataType: "json",
				success: function(response){

					if(response.mapped_records != ''){
						var map_records = parseInt(response.mapped_records);
					}else{
						var map_records = 0;
					}
					if(response.unmap_records != ''){
						var unmap_records = parseInt(response.unmapped_records);
					}else{
						var unmap_records = 0;
					}
					 var total_pull_records = map_records+unmap_records;

					 $('#total_records_us').html(total_pull_records);
					 $('#total_products_us').html(response.total_records);
					 if(response.mapped_records != ''){
						$('#total_mapped_records_us').html(response.mapped_records);
					 }else{
						$('#total_mapped_records_us').html('0');
					 }

					 if(response.unmapped_records != ''){
						$('#total_unmapped_records_us').html(response.unmapped_records);
					 }else{
						$('#total_unmapped_records_us').html('0');
					 }
					 
					 if(response.status != ''){
						$('#td_status_us').html(response.status);
					 }
					 
					 if(response.status == 'Completed')
					 {
						$('#load_data_us').show();
						$('#loaderImg_us').hide();
						$('#btn_hidezz_us').show();
						$('#no_emails_us').hide();
						myWindow_us.close();
					 }
					 
					 if(response.status == 'No Emails to read...'){
						$('#load_data_us').hide();
						$('#loaderImg_us').hide();
						$('#btn_hidezz_us').show();
						$('#no_emails_us').show();
						myWindow_us.close();
					 }
				}
			  });
			}
			
			/*setInterval(function(){
				load_link_us() // this will run after every 5 seconds
			}, 2000);*/

		// TD US DATA PULL ENDS
	</script>

	<!--<script>
		
		// TD US DATA PULL STARTS
		function fetch_data_tdus(){

			window.ref = window.setInterval(function() { readTextFile(); }, 2000);

			$.ajax({
			  url: '<?php echo base_url();?>techdata_us_pull/tdus_pull',
			  type: "post",
			  beforeSend: function(){
				$('#loaderImg_us').show();
				$('#btn_hidezz_us').hide();
			  },
			  complete: function(){
				clearInterval(window.ref);
			  },
			  success: function(response){
				  if(response == 'complete'){

					if(response.mapped_records != ''){
						var map_records = parseInt(response.mapped_records);
					}else{
						var map_records = 0;
					}
					if(response.unmap_records != ''){
						var unmap_records = parseInt(response.unmapped_records);
					}else{
						var unmap_records = 0;
					}
					var total_pull_records = map_records+unmap_records;
					
					 if(total_pull_records != ''){
						$('#total_products_us').html(total_pull_records);
					 }else{
						$('#total_products_us').html('0');
					 }

					 if(total_pull_records != ''){
						$('#total_records_us').html(total_pull_records);
					 }else{
						$('#total_records_us').html('0');
					 }

					 if(response.mapped_records != ''){
						$('#total_mapped_records_us').html(response.mapped_records);
					 }else{
						$('#total_mapped_records_us').html('0');
					 }

					 if(response.unmapped_records != ''){
						$('#total_unmapped_records_us').html(response.unmapped_records);
					 }else{
						$('#total_unmapped_records_us').html('0');
					 }
					 $('#load_data_us').show();
					 $('#loaderImg_us').hide();
					 $('#btn_hidezz_us').hide();

				  }
			  }
			});
		}
		
		function readTextFile(){

			$.ajax({
			  url: '<?php echo base_url();?>techdata_us_pull/fetch_loader',
			  type: "post",
			  dataType: "JSON",
			  success: function(response){
				
				if(response != ''){
					if(response.mapped_records != ''){
						var map_records = parseInt(response.mapped_records);
					}else{
						var map_records = 0;
					}
					if(response.unmap_records != ''){
						var unmap_records = parseInt(response.unmapped_records);
					}else{
						var unmap_records = 0;
					}
					var total_pull_records = map_records+unmap_records;
					
					 if(total_pull_records != ''){
						$('#total_products_us').html(total_pull_records);
					 }else{
						$('#total_products_us').html('0');
					 }

					 if(total_pull_records != ''){
						$('#total_records_us').html(total_pull_records);
					 }else{
						$('#total_records_us').html('0');
					 }

					 if(response.mapped_records != ''){
						$('#total_mapped_records_us').html(response.mapped_records);
					 }else{
						$('#total_mapped_records_us').html('0');
					 }

					 if(response.unmapped_records != ''){
						$('#total_unmapped_records_us').html(response.unmapped_records);
					 }else{
						$('#total_unmapped_records_us').html('0');
					 }
					 
					 if(response.status != ''){
						$('#td_status_us').html(response.status);
					 }
					 if(response.status == 'Inserting data in database...'){
						$('#loaderImg_us').show();
					 }else{
						$('#loaderImg_us').hide();
					 }
					 if(response.status == 'Completed'){
						$('#load_data_us').show();
						$('#btn_hidezz_us').hide();
						clearInterval(interval);

					 }else{
						$('#load_data_us').show();
						$('#btn_hidezz_us').show();
					 }
				}else{
					$('#total_records_us').html('0');
					$('#total_products_us').html('0');
					$('#total_mapped_records_us').html('0');
					$('#total_unmapped_records_us').html('0');
					$('#loaderImg_us').show();
				}
			  }
			});
		}
		// TD US DATA PULL ENDS
	</script>-->
	<script>
	var scrape_window;
	function start_scrape(){
		  $("#scraping_loader").show();
		  $("#btn_div").hide();
		  $("#scrape_data").hide();
		  scrape_window = window.open("http://18.222.237.239:5000/tdus", "scrape_window", "width=400,height=300");
		  setTimeout(function() {
			$.ajax({
			url: '<?php echo base_url();?>techdata_us_pull/fetch_scrape_data',
			type: "post",
			dataType: "json",
			success: function(response){
				$('#total_p').html(response['all']);
				$('#p_scraped').html(response['scrape']);
				$('#u_scraped').html(response['unscrape']);
			}
		  }),
		   scrape_window.close(),
		   $("#scraping_loader").hide(),
		   $("#scrape_data").show(),
		   $("#btn_div").show();
		}, 180000);
	}
	
	function start_newscrape(){
	    console.log('response');
	    // alert('response');
		$("#scraping_loader").show();
		$("#btn_div").hide();
		$("#scrape_data").hide();
		
		scrape_window = window.open("http://18.222.237.239:5000/tdusnew?start=2020-01-19&end=2020-01-19", "scrape_window", "width=400,height=300");
		  setTimeout(function() {
			$.ajax({
			url: '<?php echo base_url();?>techdata_us_pull/fetch_scrape_data',
			type: "post",
			dataType: "json",
			success: function(response){
				$('#total_p').html(response['all']);
				$('#p_scraped').html(response['scrape']);
				$('#u_scraped').html(response['unscrape']);
			}
		  }),
		   scrape_window.close(),
		   $("#scraping_loader").hide(),
		   $("#scrape_data").show(),
		   $("#btn_div").show();
		}, 180000);	  
	}	
	</script>
	
  </body>
</html>
