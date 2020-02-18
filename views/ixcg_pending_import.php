<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ixcg Product Import | ProtectBox</title>
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
          Import IXCG Product
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
        <div class="row">
			<?php $this->load->view("common/admin_sidebar");?>
			<div class="col-md-9">
				<!--  Tabs -->   
			<!-- <ul class="nav nav-tabs"></ul> -->
			<div class="tab-content rounded_div">
			  <h3>All Services</h3>
			  <div class=" table-responsive">
				  <table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
						  <tr>
							<th width="10%">Sl&nbsp;No.</th>
							<th width="15%">Action</th>
							<th width="30%">Description</th>
							<th width="15%">Stock Code</th>
							<th width="15%">Manufactured By</th>
							<th width="15%">Net Price</th>
							<th width="15%">Gross Price</th>
							<th width="15%">Unit</th>
							<th width="15%">Product Class</th>
							<th width="15%">Product Type</th>
							<th width="15%">Virtual</th>
							<th width="15%">Currency</th>
							
					
						  </tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach($all_import_data AS $value){
								$function = "import_ixcg('".$i."')";
							?>
							<tr>
								<td><?php echo $i;?></td>
								<td><a onclick="<?php echo $function;?>" class="btn btn-success">Import</a></td>
								<td  class="nr"><?php echo $value['description'];?>
								<input type="hidden" id="description_<?php echo $i;?>" value="<?php echo $value['description'];?>">
								</td>
								
								<td><?php echo $value['stockcode'];?>
									<input type="hidden" id="stockcode_<?php echo $i;?>" value="<?php echo $value['stockcode'];?>">
								</td>
								<td><?php echo $value['manufname'];?>
									<input type="hidden" id="menufname_<?php echo $i;?>" value="<?php echo $value['manufname'];?>">
								</td>
								<td><?php echo $value['nettprice'];?>
									<input type="hidden" id="nettprice_<?php echo $i;?>" value="<?php echo $value['nettprice'];?>">
								</td>
								<td><?php echo $value['grossprice'];?>
									<input type="hidden" id="grossprice_<?php echo $i;?>" value="<?php echo $value['grossprice'];?>">
									
								</td>
								<td><?php echo $value['unit'];?>
									<input type="hidden" id="unit_<?php echo $i;?>" value="<?php echo $value['unit'];?>">
									
								</td>
								<td><?php echo $value['prodclass'];?>
									<input type="hidden" id="prodclass_<?php echo $i;?>" value="<?php echo $value['prodclass'];?>">
								</td>
								<td><?php echo $value['prodtype'];?>
									<input type="hidden" id="prodtype_<?php echo $i;?>" value="<?php echo $value['prodtype'];?>">
								</td>
								<td><?php echo $value['virtual'];?>
									<input type="hidden" id="virtual_<?php echo $i;?>" value="<?php echo $value['virtual'];?>">
								</td>
								<td><?php echo $value['currency'];?>
									<input type="hidden" id="currency_<?php echo $i;?>" value="<?php echo $value['currency'];?>">	
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
    <!-- Specific scripts -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
	  $(document).ready(function() {
			$('#example').DataTable();
		} );
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
	<script type="text/javascript">
		function import_ixcg(val)
			{
				var description = $("#description_"+val+"").val();
				var stockcode =  $("#stockcode_"+val+"").val();
				var manufname = $("#menufname_"+val+"").val();
				var nettprice = $("#nettprice_"+val+"").val();
				var grossprice = $("#grossprice_"+val+"").val();
				var unit = $("#unit_"+val+"").val();
				var prodclass = $("#prodclass_"+val+"").val();
				var prodtype = $("#prodtype_"+val+"").val();
				var virtual = $("#virtual_"+val+"").val();
				var currency = $("#currency_"+val+"").val();
				$.ajax({
					url: '<?php echo base_url();?>ixcg_pending_import/get_insert_ixcg',
					data: {'product_description': description, 'stock_code': stockcode, 'manufacture':manufname ,'net_price': nettprice, 'gross_price': grossprice, 'unit': unit, 'product_class': prodclass, 'product_type':prodtype ,'virtual' :virtual, 'currency':currency}, // change this to send js object
					type: "post",
					success: function(response){
						alert(response);
						
					//$('#showit').replaceWith(response);
					//$("#message").val('');
					//$('#nichenam').scrollTop($('#nichenam')[0].scrollHeight);
					}
				  });
				
			}

	</script>
  </body>
</html>
