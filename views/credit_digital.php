<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment Process | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>css/bootstrap-select.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
	   .tooltiplink + .tooltip > .tooltip-inner {
			background-color: #73AD21; 
			color: #FFFFFF; 
			border: 1px solid green;
			padding: 15px;
			font-size: 20px;
		}
		.tooltip-inner{
			min-width: 300px; 	
		}
		/* Tooltip on top */
		.tooltiplink + .tooltip.top > .tooltip-arrow {
			border-top: 5px solid green;
		}

		/* Tooltip on bottom */
		.tooltiplink + .tooltip.bottom > .tooltip-arrow {
			border-bottom: 5px solid blue;
		}

		/* Tooltip on left */
		.tooltiplink + .tooltip.left > .tooltip-arrow {
			border-left: 5px solid red;
		}

		/* Tooltip on right */
		.tooltiplink + .tooltip.right > .tooltip-arrow {
			border-right: 5px solid black;
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
      .rounded_div {
        border:1px solid #CCC;
        box-shadow: 0px 0px 3px #bfbfbf;
        border-radius:5px;
      }
      label{
        font-weight:normal !important;
      }
      .preferd
      {
        text-align:center;
        font-size:18px !important;
      }
      .note
      {
        border-radius:5px;
        text-transform: capitalize;
        color: #eb8b10;
        border:3px solid #EC8B0E;
        padding:10px;
        margin-bottom:20px;
        font-weight:bold;
        font-size:15px;
      }
      .c_names
      {
        margin: 24px 0 15px 0;
        padding: 0 0 5px 0;
        font-size: 1.0em;
        font-weight: 600;
        border-bottom: 1px solid #dca7a7;
        color:#010101
      }
      .main_image
      {
        height:40px;
        margin: 24px 15px 30px 0;
      }
      .price
      {
        margin: 0 0 15px 0;
        font-weight: 600;
        font-size: 2em;
        color:#010101;
      }
      .details
      {
        margin: 0 0 5px 0;
        font-size: 1.2em;
        color:#010101;
        line-height: 1.4;
      }
      .trust_pilot
      {
        max-width: 150px;
        margin: 5px 0 0 0;
      }
      .what
      {
        min-height: 170px;
      }
      .space
      {
        padding:15px;
        margin-top:15px;
        margin-bottom:15px;
      }
    .more_info
    {
      font-weight: 500;font-size: 1em;text-transform: uppercase;cursor: pointer;text-align:center;
    }
    .certified
    {
    box-sizing: border-box;margin-top:70px;background:#f5f5f5;border:1px solid #CCC;border-radius:7px;padding:15px
    }
    .sage_border
    {
      border:3px solid #83c627;padding:10px;margin-top:18px;border-radius:10px;
    }
    .transparent {
	    opacity: 0.2;
	}
	 /* Style the tab */
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
		}
		.stripe-button-el span{
			height:45px !important;
			padding:7px 37px !important;
		}

    </style>

		  
		   <script>
			var credit_data = {
				form_id:'123',	
				 cash_price: '5000',
				 invoice_number:'223332',
				 order_id: '111',
				 invoice_description: 'This is a sample description',
				 forename:'John,
				 surname:'Doe',
				 company_name: 'XYZ Ltd',
				 mobile_phone_number: '009988899',
				 email_address:'admin@poplify.com',
				 dob:'10/10/2001',
				 house_number:'222 Sample 1',
				 street:'Street X',
				 town:'Town'​,
				 country:'United Kingdom',
				 post_code:'EC2A4NE',
				 callback_url:'https://www.staging.protectbox.com/payment_process/credit_response',
				 secret_key:'0YMh2XxlFEkTfgZtk5-WLA',
				 publish_key:'df3ee800567c32a3d579709598060f2a'
				
				 };
			 </script>
			 <script type="text/javascript" src="https://widget.creditdigital.co.uk/widget-external.js"></script>

		   <!-- BUTTON -->
     <link href="<?php echo base_url();?>css/rangeslider.css" rel="stylesheet">
	 <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  </head>
  <body >
    <!-- <div id="load"></div> -->
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;z-index:1;">
          Confirm Your Order
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>  
	<div class="container margin_60">
        <div class="row">
		<div id="example-widget-container"></div>
		</div>
	</div>
      <!-- End container -->
    </main>
    <!-- End main -->
  <style>
p{
	margin:0 0 13px;
}
</style>

 <!-- 2nd footer -->
	 <div class="container" style="background:#e6e7e9;width:100%;border-top:2px solid #ccc;height:auto;">
		  <div class="container">
			<div class="row ">
			  <div class="col-md-4 col-sm-12">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">Contact Information</h3>
				<p style="font-size:1.1em;">
					<p style="color:#010101;">Email as shown below or use the blue chat icon in the bottom right, our customer service team is available Mon-Fri 9am-9pm (UK time)</p>
					<!--<i class="icon-phone-outline" aria-hidden="true" style="color:#000;"></i> <a href="tel:+442080892979" style="color:#010101;">+44 208 089 2979 (Our customer service team is available Mon-Fri 9am-9pm (UK time))</a></br>-->
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:team@protectbox.com" style="color:#010101;">team@protectbox.com (Businesses) </a></br>
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:supplier@protectbox.com" style="color:#010101;">supplier@protectbox.com (Suppliers)</a></br>
					<i class="icon-mail" aria-hidden="true" style="color:#000;"></i> <a href="mailto:kiran@protectbox.com" style="color:#010101;">kiran@protectbox.com (Investors & Media) </a>
				</p>
				
				<p style="font-size:1.1em;">
					<a href="https://www.facebook.com/protectbox/" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="fa icon-facebook"></i></a>
					<a href="https://www.linkedin.com/company/protectbox-ltd" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="fa icon-linkedin"></i></a>
					<a href="https://twitter.com/ProtectBoxLtd/" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="icon-twitter"></i></a>
					<a href="mailto:team@protectbox.com" target="_BLANK" style="color:#000;background:#CCC;padding:10px;border-radius:50%;"><i class="icon-mail"></i></a>
				
				  	  <p style="font-size:1.1em;">
					<a href="https://itunes.apple.com/us/app/apple-store/id375380948?mt=8" target="_blank">
					  <img src="<?php echo base_url();?>images/apple_store.png" style="height:30px;">
					</a>

					<a href="https://play.google.com/store?hl=en" class="" style="margin-left:10px;" target="_blank">
					  <img src="<?php echo base_url();?>images/google-play.png" style="height:30px;">
					</a>
					<br>(Coming soon)
			  </p>
				<!--<p><img src="<?php echo base_url();?>images/britain_office.png" style="border:1px solid #CCC;height:70px;"></p>-->
			  </div>
			  <div class="col-md-4 col-sm-12">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">What are you looking for</h3>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('about');?>" style="color:#010101;" target="_blank">About</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('register');?>" style="color:#010101;">Register</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('login');?>" style="color:#010101;">Login</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('contact');?>" style="color:#010101;" target="_blank">Contact Us</a></p>
			  </div>

			  <div class="col-md-4 col-sm-12" id="contact_bg">
				<h3 style="border-bottom:1px solid #000;margin-bottom:10px;padding-bottom:5px;">Useful Links</h3>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('terms');?>" style="color:#010101;" target="_blank">Terms and Conditions</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('privacy');?>" style="color:#010101;" target="_blank">Privacy Policy</a></p>
				<p style="font-size:1.1em;"><a href="<?php echo base_url('supplier_policy');?>" style="color:#010101;" target="_blank">Supplier Policy</a></p>
			  </div>
			</div>
			<!-- End row -->	
		  </div>

		  
	 </div>
	 	 <div class="container" style="background:#e6e7e9;width:100%;padding-bottom:20px;padding-top:20px;align:center;">
		  <div class="container">
			        <div class="row">
          <div class="col-md-1 col-sm-6 col-xs-6" style="text-align:center;">
            <div class="team_box" style="text-align:center;">
              <a href="javascript:void();"  style="text-align:center">
                <img src="<?php echo base_url();?>images/britain_office.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
              </a>
         
            </div>

            </div>
            <!--<div class="col-md-2 col-sm-12" >
              <div class="team_box" style="text-align:center;">
                <a href="#" data-toggle="modal" data-target="#team_modal_roshsaran">
                  <img src="<?php echo base_url();?>images/colorado_office.png" class="" style="display:block;text-align:center;width:100%;height:76px;">
                </a>
          
            </div>

            </div>-->
            <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
              <div class="team_box" style="text-align:center;">
                <a href="#" style="text-align:center;">
                  <img src="<?php echo base_url();?>images/mcafee.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                </a>
              </div>
              </div>
              <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                <div class="team_box" style="text-align:center;">
                  <a href="#" style="text-align:center;">
                    <img src="<?php echo base_url();?>images/SSLcertificate.png" class="" style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                  </a>
           
                </div>

                </div>
                <div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                  <div class="team_box" style="text-align:center;">
                    <a href="#"  style="text-align:center;">
                      <img src="<?php echo base_url();?>images/aws1.png" class=""  style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                    </a>
                  
                   
                  </div>

                </div>
				<div class="col-md-2 col-sm-6 col-xs-6" style="text-align:center;">
                  <div class="team_box" style="text-align:center;">
                    <a href="#"  style="text-align:center;">
                      <img src="<?php echo base_url();?>images/pci.png" class=""  style="display:block;text-align:center;height:56px;padding:5px 0px 0px 0px !important;">
                    </a>
                  
                   
                  </div>

                </div>
                <!--<div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_paulfinnigan2">
                      <img src="<?php echo base_url();?>images/team-6.png" class="" style="display:block;text-align:center;width:100%;height:76px;">
                    </a>
           
                  </div>

                  </div>-->
                </div>
			<!-- End row -->	
		  </div>

		  
	 </div>
	 <div id="copy" style="background:#85c62c;">
		<div class="container">
		  Copyright &copy; 2018 ProtectBox Ltd. Company number: NI643316 - VAT registration number: 297 5082 62- All rights reserved.
		</div>
	  </div>
 <!-- 2nd footer ends -->


<!--<div id="toTop"></div>-->

<!-- Common scripts -->


<!--<script src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<script src="<?php echo base_url();?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url();?>js/functions.js"></script>
<script src="<?php echo base_url();?>js/multiselect.js"></script>
<script>
	$(document).ready(function () {          
		setTimeout(function() {
			$('.mylodr').hide();
		}, 1000);
	});
	$('.tooltip-1')['tooltip']({
		html: true
	});
</script>
<script>
function myFunction() {
	if($( "#mobile_menuzz" ).hasClass( "show" )){
		$("#mobile_menuzz").removeClass( "show" );
		
	}else{
		$("#mobile_menuzz").addClass( "show" );
		$("#close_in").removeClass( "open_close" );
	}
}
</script>
<!-- LayerSlider script files -->
<script type="text/javascript">
	document.onreadystatechange = function () {
	  var state = document.readyState
	  if (state == 'complete') {
		  setTimeout(function(){
			  document.getElementById('interactive');
			 document.getElementById('load').style.visibility="hidden";
		  },1000);
	  }
	}
</script>

<!-- Start of HubSpot Embed Code --> 
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5307998.js"></script> 
<!-- End of HubSpot Embed Code -->
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	<script src="<?php echo base_url();?>js/rangeslider.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>
    <!-- Specific scripts -->
	<script>
    $(function() {

        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);

        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
			
        }

        $document.on('input', 'input[type="range"], ' + selector, function(e) {
            valueOutput(e.target);
        });

        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
                valueOutput(this.$element[0]);
            },

           
        });

    });


    </script>
  
   <script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production
	style: {
            label: 'checkout',
            size:  'responsive',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
        },
        client: {
            sandbox:    'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
            production: 'xxxxxxxxxx'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
            // Make a call to the REST API to set up the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                           amount: { total: '<?php echo $final_price;?>', currency: '<?php echo $currencyCode;?>' }      
                        }
                ],

                
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST API to execute the payment
            return actions.payment.execute().then(function() {
      			
				var total_service = '<?php echo $total_service;?>';
				var service_each_price = '<?php echo $each_service_price?>';
				var service_each_currency = '<?php echo $each_service_currency?>';
				var each_service_payment_option = '<?php echo $each_service_payment_option?>';
				var each_service_commission = '<?php echo $each_service_commission?>';
				var supplier_id = '<?php echo $supplier_id;?>';
				var sup_price = '<?php echo $total_price; ?>';
				var pb_price = '<?php echo $total_commision_price; ?>';
				var total_price = '<?php echo $final_price; ?>';
				var bundle_id = '<?php echo $bundle_id;?>';
				
				var sup_payment_status = 'Success';
				
				/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url("order_process");?>',
				type: "post",
		        data: {
						'total_service': total_service,
						'each_service_price': service_each_price,
						'each_service_payment_option': each_service_payment_option,
						'each_service_commission': each_service_commission,
						'each_service_currency': service_each_currency,
						'supplier_id': supplier_id,
						'sup_price': sup_price,
						'pb_price': pb_price,
						
						'total_price': total_price,
						'sup_payment_status': sup_payment_status,
						'bundle_payment_id' : bundle_id
					  },
					beforeSend: function(){
					$('#load').show();
					},
					complete: function(){
						$('#load').hide();
					},
		        success: function(response){
				
				window.location.href = '<?php echo base_url();?>thank_you/'+response+'';
		        }
		      });
    		 /* ajax code ends*/
            }
        );
    },

        onCancel: function(data, actions) {
            window.location.href = '<?php echo base_url();?>payment_failed';
        }

    }, '#paypal-button-container');

	/*function checkcpn(){
		var cpn_code = $(".clss_cpn_code").val();
		var rnd_prc = $(".rnd_prc").val();
		$.ajax({
			url: '<?php echo base_url("payment_process/addcoupn");?>',
			data: {'cpn_code': cpn_code,'rnd_prc':rnd_prc},
			type: "post",
			success: function(response){
				$(".cpn_success").html("Your coupon added successfully! ");
				$(".cpn_suc").show();
				
			}
		  });
	}*/
</script>

<script>
    paypal.Button.render({

        env: 'sandbox', // sandbox | production
	style: {
            label: 'checkout',
            size:  'responsive',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'blue'      // gold | blue | silver | black
        },
        client: {
            sandbox:    'AeihSfLUhwnyz6ascHEbv6gdprHt8khKlGsCRgoCesyib9G3AL_L4fFGxZcNIR3EX3-dSvRM7c75NZe0',
            production: 'xxxxxxxxxx'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,

        // payment() is called when the button is clicked
        payment: function(data, actions) {
            // Make a call to the REST API to set up the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                           amount: { total: '<?php echo $subs_price;?>', currency: '<?php echo $currencyCode;?>' }      
                        }
                ],

                
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function(data, actions) {

            // Make a call to the REST API to execute the payment
            return actions.payment.execute().then(function() {
                 window.alert('Payment Complete!');
				//window.location.href = '<?php echo base_url();?>order_process/<?php echo $total_service;?>/<?php echo $supplier_id;?>/<?php echo $total_price;?>/<?php echo $total_commision_price;?>/<?php echo $total_payable_bundle_cost;?>';
				var pb_price = '<?php echo $subs_price; ?>';
				
				
			 /*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url("order_process/smb_subscription_paypal");?>',
		        data: {
						'subscription_price': pb_price
					  },
		        type: "post",
		        success: function(response){
					/*alert(response);
					exit;*/
					window.location.href = '<?php echo base_url();?>paypal_payment_success/'+response+'';
		        }
		      });
    		 /* ajax code ends*/
            }
        );
    },

        onCancel: function(data, actions) {
            window.location.href = '<?php echo base_url();?>payment_failed';
        }

    }, '#paypal-button-container-subscribe');
</script>

		<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});	
		</script>
 
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>

  </body>
</html>