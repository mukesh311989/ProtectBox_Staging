<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payments | ProtectBox</title>
    <!-- Favicons-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  
  
    <?php $this->load->view("common/metalinks");?>
    
	<style>
	ul#sortable{
	list-style-type: none;
	}

	.ui-state-default {
	height:35px;
	width:300px;
	margin-bottom:10px;
	padding-top: 7px;
	}
	
.custom-button {
    padding: 12px 25px 8px 25px;
    font-weight: 600;
    text-transform: uppercase;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    background: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border-radius: 0;
}

.custom-button.orange {
    color: #eb8b10;
    border: 3px solid #eb8b10;
}

.custom-button.green {
    color: #84c72a;
    border: 3px solid #84c72a;
}
.stripe_btn {
	color: #708299;
	background-color: #EAF1F8;
	font-weight: bold;
}
.stripe_btn:hover {
	color: #708299;
	background-color: #EAF1F8;
	font-weight: bold;
}
span.multiselect-native-select {
	position: relative
}
span.multiselect-native-select select {
	border: 0!important;
	clip: rect(0 0 0 0)!important;
	height: 1px!important;
	margin: -1px -1px -1px -3px!important;
	overflow: hidden!important;
	padding: 0!important;
	position: absolute!important;
	width: 1px!important;
	left: 50%;
	top: 30px
}
.multiselect-container {
	position: absolute;
	list-style-type: none;
	margin: 0;
	padding: 0
}
.multiselect-container .input-group {
	margin: 5px
}
.multiselect-container>li {
	padding: 0
}
.multiselect-container>li>a.multiselect-all label {
	font-weight: 700
}
.multiselect-container>li.multiselect-group label {
	margin: 0;
	padding: 3px 20px 3px 20px;
	height: 100%;
	font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
	cursor: pointer
}
.multiselect-container>li>a {
	padding: 0
}
.multiselect-container>li>a>label {
	margin: 0;
	height: 100%;
	cursor: pointer;
	font-weight: 400;
	padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
	margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
	margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
	border-top-left-radius: 4px;
	border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
	padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
	margin-left: -20px;
	margin-right: 0
}
.new_div {
	margin-bottom:20px;
}
.rounded_div {
	border:1px solid #CCC;
	box-shadow: 0px 0px 3px #bfbfbf;
	border-radius:5px;
}
label{
			font-weight:normal !important;
		}
</style>

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
          Payments
        </div>
      </div>
    </section>
    <!-- End section -->

    <main>    
      <div class="container margin_60">
	  
        <div class="row">
			<div class="col-md-12">
			<!--<div class="col-md-12" style="border-radius:5px;text-transform: capitalize;border:3px solid #EC8B0E;padding:10px;margin-bottom:20px;font-weight:bold;font-size:15px;" href="javascript:void(0);"> Choose how you want to receive payments.</div>- -->
				<!--  Tabs -->   
			<ul class="nav "></ul> 
			<div class="tab-content rounded_div" >
			  <div class="tab-pane active" id="home" style="min-height:350px;">
					
						  <div class="form_title" style="margin-bottom:50px;">
							<h3>
							  <strong><i class="icon-stripe"></i></strong>Payment
							</h3>
						  </div>
						  
						  <form action="<?php echo base_url('payments/add_paypal');?>" enctype="multipart/form-data" method="POST" name="paypal">
							   <div class="row" id="paypalBrowser" style="margin-top:30px;">
								  <div class="col-md-12">
                                    <div class="card">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab">Paypal</a></li>
											<li role="presentation"><a href="#stripe" aria-controls="stripe" role="tab" data-toggle="tab">Stripe</a></li>
											<li role="presentation"><a href="#bank" aria-controls="bank" role="tab" data-toggle="tab">Bank</a></li>
											<li role="presentation"><a href="#priority" aria-controls="priority" role="tab" data-toggle="tab">Priority</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="paypal">
												<div class="row" id="paypalBrowser" style="margin-top:30px;">
												<div class="alert alert-danger paypal_required" style="display:none;"> <strong>You must fill the details!</strong></div> 
												<div class="alert alert-success paypal_success" style="display:none;"> <strong>Paypal details has been updated.</strong> </div>
												  <div class="col-md-7">
													<div class="form-group">
													  <label>Please can you give us your PayPal email so that we can pay you (automatically, directly and securely) when we sell your products or services through ProtectBox.We only provide payment through PayPal at the moment. But will be offering other methods shortly.<span style="color:red;">*</span></label>
													 </div>
												  </div>
												  <div class="col-md-5">
													<div class="row">
														<div class="form-group">
															<input type="email" class="form-control required valid paypal_in" name="paypal_in"  placeholder="Enter your paypal email." value="<?php echo $user_paydetails->paypal_email;?>" required>
														 </div>
														 <div class="form-group" style="text-align:center;">
															<button class="btn btn-success" name="paypal" value="Update" style="margin-top:5px;text-align:left;float:left;" onclick="update_paypal();">Update</button>
														 </div>

													</div>
												  </div>
											   </div> 
											</div>
											<div role="tabpanel" class="tab-pane" id="stripe">
												<div class="row" id="paypalBrowser" style="margin-top:30px;">
												  <div class="col-md-7">
													<div class="form-group">
													  <label>Connect Stripe to recieve payments.<span style="color:red;">*</span></label>
													 </div>
												  </div>
												  <?php
												  	$user_id = $this->session->userdata['logged_in']['user_id'];
												  	  define('CLIENT_ID', 'ca_AdvVrUfeTGrSqwHPqbBlgHOKXV9XyQ0G');
													  define('API_KEY', 'sk_test_mhunZ60QIWw44BEYGZNypmTp');
													  define('TOKEN_URI', 'https://connect.stripe.com/oauth/token');
													  define('AUTHORIZE_URI', 'https://connect.stripe.com/oauth/authorize');

														// Show OAuth link
													  $authorize_request_body = array(
														  'response_type' => 'code',
														  'scope' => 'read_write',
														  'client_id' => CLIENT_ID
														);

													 $url = AUTHORIZE_URI . '?' . http_build_query($authorize_request_body);
													$get_check_payment = $this->payments_m->get_details($user_id);
													if($get_check_payment->stripe_authcode == '')
													{
													
												  ?>
												  <div class="col-md-5">
													<a href="<?php echo $url?>"><img src="<?php echo base_url();?>images/connect.png"></a>
												  </div>
												  <?php
													}
												  else
												  {
												 ?>
												<div class="col-md-5">
												<span class="btn btn-success" style="margin-top:5px;text-align:left;float:left;"><i class="fa fa-check" aria-hidden="true"></i>
												Connected!!</span>
												  </div>
											<?php
												  }
													?>
											   </div> 
											</div>
											<div role="tabpanel" class="tab-pane" id="bank">
												

												<div class="row" id="paypalBrowser" >
												<div class="alert alert-danger bank_required" style="display:none;"> <strong>You must fill all the details!</strong> </div>
												<div class="alert alert-success bank_success" style="display:none;"> <strong>Bank details has been updated.</strong> </div>
												 
												<div class="col-md-12">
													 <div class="form-group">
														<label>Choose Currency &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<select class="form-control bank_currency" name="bank_country" onchange="country_select(this.value);">
															<option hidden value="">Choose an Option</option>
															<option value="EUR" <?php echo (($user_paydetails->currency == 'EUR')?'selected':'')?>>EUR</option>
															<option value="GBP" <?php echo (($user_paydetails->currency == 'GBP')?'selected':'')?>>GBP</option>
															<option value="USD" <?php echo (($user_paydetails->currency == 'USD')?'selected':'')?>>USD</option>
														</select>
													 </div>
												</div>
												
												<!-- EUR CURRENCY FORM STARTS -->
												<div id="form_eur" style="<?php echo (($user_paydetails->currency == 'EUR')?'':'display:none');?>">
												  <div class="col-md-6">
													 <div class="form-group">
													 	<label>IBAN &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid iban_eur" name="iban_number"  placeholder="Enter your IBAN number." value="<?php echo $user_paydetails->iban_eur;?>" required>
													 </div>
												  </div>
												</div>
												<!-- EUR CURRENCY FORM ENDS -->

												<!-- GBP CURRENCY FORM STARTS -->
												<div id="form_gbp" style="<?php echo (($user_paydetails->currency == 'GBP')?'':'display:none');?>">
												  <div class="col-md-6">
													 <div class="form-group">
													 	<label>Sort Code &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid sort_code_gbp" name="sort_code"  placeholder="Enter your sort code number." value="<?php echo $user_paydetails->sort_code_gbp;?>" required>
													 </div>
													</div>
													<div class="col-md-6">
													 <div class="form-group">
													 	<label>Account Number &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid account_number_gbp" name="account_number"  placeholder="Enter your account number." value="<?php echo $user_paydetails->account_number_gbp;?>" required>
													 </div>
												  </div>
												</div>
												<!-- GBP CURRENCY FORM ENDS -->

												<!-- USD CURRENCY FORM STARTS -->
												<div id="form_usd" style="<?php echo (($user_paydetails->currency == 'USD')?'':'display:none');?>">
												  <div class="col-md-6">
												  	<div class="form-group">
													 	<label>Account Type &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid account_type_usd" name="account_type"  placeholder="Enter your account type." value="<?php echo $user_paydetails->account_type_usd;?>" required>
													 </div>
													 <div class="form-group">
													 	<label>Account Number &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid account_number_usd" name="account_number"  placeholder="Enter your account number." value="<?php echo $user_paydetails->account_number_usd;?>" required>
													 </div>
												  </div>
												  <div class="col-md-6">
													  <div class="form-group">
													 	<label>Routing Number &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid routing_number_usd" name="routing_number"  placeholder="Enter your routing number." value="<?php echo $user_paydetails->routing_number_usd;?>" required>
													 </div>
												  </div>
												</div>
												<!-- USD CURRENCY FORM ENDS -->
												<div class="col-md-12" style="text-align:center;">
													 <div class="form-group" style="text-align:center;">
														<button class="btn btn-success" name="update_bank" onclick="save_bank();" style="margin-top:5px;text-align:left;float:left;">Update</button>
													 </div>
												  </div>
												<!--<div style="display:none;">
												  <div class="col-md-6">
													 <div class="form-group">
													 	<label>Bank Name &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid bank_name" name="bank_name"  placeholder="Enter your bank name." value="<?php echo $user_paydetails->bank;?>" required>
													 </div>
													 <div class="form-group">
													 	<label>IFSC Code &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid ifsc" name="ifsc"  placeholder="Enter IFSC code." value="<?php echo $user_paydetails->IFSC_code;?>" required>
													 </div>
												  </div>
												  <div class="col-md-6">
													<div class="form-group">
														<label>Branch Name &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="text" class="form-control required valid branch_name" name="branch_name"  placeholder="Enter branch name." value="<?php echo $user_paydetails->branch_name;?>" required>
													 </div>
													 <div class="form-group">
													 	<label>Account Number &nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span></label>
														<input type="number" class="form-control required valid account_number" name="account_number" placeholder="Enter your account number." value="<?php echo $user_paydetails->account_number;?>" required>
													 </div>
												  </div>
												  <div class="col-md-12" style="text-align:center;">
													 <div class="form-group" style="text-align:center;">
														<button class="btn btn-success" name="update_bank" onclick="save_bank();" style="margin-top:5px;text-align:left;float:left;">Update</button>
													 </div>
												  </div>
												  </div>-->


											   </div> 
											</div>
											<div role="tabpanel" class="tab-pane" id="priority">
												<div class="row" id="paypalBrowser" style="margin-top:30px;">
												<div class="alert alert-success" id="yoo" style="display:none;"> <strong>Payment priority has been changed.</strong> </div>
												<div class="alert alert-success " id="result" style="display:none;"> <strong>Payment receive option has been changed.</strong> </div>
												<div class="col-md-12 row" style="padding:10px;">
													<div class="col-md-6">
														<div class="form-group">
														  <label><b>Choose how you want to process order and receive payments</b></label>
														 </div>
													</div>
													<div class="col-md-6">
														<label class="radio-inline">
														  <input type="radio" name="optradio" value="PRIOR" <?php echo (($user_paydetails->payment_receive_option == 'PRIOR')?'checked':'')?>>AUTO
														   <a data-container="body" title="This option enables you to receive payments instantly when a order is placed." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
														</label>
														<label class="radio-inline">
														  <input type="radio" name="optradio" value="POST" <?php echo (($user_paydetails->payment_receive_option == 'POST')?'checked':'')?>>MANUAL
														  <a data-container="body" title="This option requires you to approve order manually on your dashboard to receive payment." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a>
														</label>
														
													</div>
												</div>
												<div class="col-md-12 row" style="margin-top:10px;padding:10px;">
												<div class="col-md-6">
													<div class="form-group">
													  <label><b>Drag/drop to set your payment priority.</b></label>
													 </div>
												</div>
												<div class="col-md-6" >
													<ul id="sortable" style="width:100%;margin-left:-45px;">
													<?php
                                        
													for($i = 0; $i < sizeof($get_priority); $i++){
													?>
														<li class="ui-state-default" id="<?php echo $get_priority[$i];?>" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo (($get_priority[$i] == "paypal_priority")? 'Paypal':(($get_priority[$i] == "stripe_priority")?'Stripe':'Bank'));?></li>
													<?php
													}
													?>
													  <!-- <li class="ui-state-default" id="paypal_priority" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Paypal</li>
													  <li class="ui-state-default" id="stripe_priority"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Stripe</li>
													  <li class="ui-state-default" id="bank_priority"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Bank</li> -->
													</ul>
												</div>
												 </div>
											   </div> 
											</div>
										</div>
								   </div>
                                </div>
								
							   </div>
							   </form>
						 
					  
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
    <script src="<?php echo base_url();?>js/jquery.validate.js">
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		function country_select(e){
			var currency = e;
			if(currency == 'EUR'){
				$('#form_eur').show();
				$('#form_gbp').hide();
				$('#form_usd').hide();
			}else if(currency == 'GBP'){
				$('#form_eur').hide();
				$('#form_gbp').show();
				$('#form_usd').hide();
			}else if(currency == 'USD'){
				$('#form_eur').hide();
				$('#form_gbp').hide();
				$('#form_usd').show();
			}
		}
	</script>
  <script>
  function update_paypal()
  {
	  var paypal = $(".paypal_in").val();
	  if(paypal == '')
	  {
		  $(".paypal_required").show();
	  }else{
		  $(".paypal_required").hide();
		   $.ajax({
                url: '<?php echo base_url("payments/update_paypal");?>',
				data: {
						'paypal': paypal
					  },
				type: 'POST',
				success: function(response){
		           $(".paypal_success").show();
		        }
            });
	  }
  }
  </script>

  <script>
  function save_bank(){
	  
	  var currency = $(".bank_currency").val();
	  
	  var iban_eur = $(".iban_eur").val();

	  var sort_code_gbp = $(".sort_code_gbp").val();
	  var account_number_gbp = $(".account_number_gbp").val();
	
	  var account_type_usd = $(".account_type_usd").val();
	  var account_number_usd = $(".account_number_usd").val();
	  var routing_number_usd = $(".routing_number_usd").val();

	  /*var bank_name = $(".bank_name").val();
	  var ifsc = $(".ifsc").val();
	  var branch_name = $(".branch_name").val();
	  var account_number = $(".account_number").val();*/
	  if(currency == '')
	  {
		  $(".bank_required").show();
	  }else{
		  $.ajax({
                url: '<?php echo base_url("payments/update_bank");?>',
				data: {
						'currency': currency,
						'iban_eur': iban_eur,
						'sort_code_gbp': sort_code_gbp,
						'account_number_gbp': account_number_gbp,
						'account_type_usd': account_type_usd,
						'account_number_usd': account_number_usd,
						'routing_number_usd': routing_number_usd
					  },
				type: 'POST',
				success: function(response){
		           $(".bank_success").show();
		        }
            });
	  }
	  
  }
  </script>


  <script>
  $(document).ready(function () {
    $('ul').sortable({
        axis: 'y',
        stop: function (event, ui) {
	        var data_order = $(this).sortable('toArray');
            //$('span').text(data);
           $.ajax({
                url: '<?php echo base_url("payments/update_priority");?>',
				data: {'order': data_order},
				type: 'POST',
				success: function(response){
		           $("#yoo").show();
		        }
            });
	}
    });


	$("input[name='optradio']").click(function(){

		var payment_option =$("input[name='optradio']:checked").val();
		$.ajax({
                url: '<?php echo base_url("payments/update_payment_option");?>',
				data: {'payment_option': payment_option},
				type: 'POST',
				success: function(response){
					
		           $("#result").show();
		        }
            });
		
	});
});
  </script>
	<!-- <script>
	$(function() {
	  $("form[name='paypal']").validate({
		rules: {
		  paypal_in: "required email",
		},
		messages: {
		  paypal_in: "Enter a valid paypal email"
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script> -->
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	<script type="text/javascript">
	$(function() {
	    $('.multiselect-ui').multiselect({
	        includeSelectAllOption: true
	    });
	});
	</script>

	<script>
	function add_more()
	{
		var html = $(".after_div").html();
	    $(".new_div").after(html);
	}
	</script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
	<SCRIPT> 	
		$(function() {

		$('#payment_option').change(function(){
			if($('#payment_option').val() == 'Stripe') {
				$('#stripeBrowser').show();  
			} else {
				$('#stripeBrowser').hide(); 
			} 
			
		});
	});
  </SCRIPT>
  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>