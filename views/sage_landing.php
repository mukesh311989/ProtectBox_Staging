
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title> ProtectBox: Cyber comparison marketplace </title>
	<?php $this->load->view("common/metalinks");?>
	<link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
	<style>
		#owl-demo .item img{
			display: block;
			width: 100%;
			height: auto;
			padding:30px;
		}
		.banner {
			padding-top: 150px;
			padding-bottom: 150px;
			color: #ffffff;
			text-shadow: 0px 2px 2px rgba(1, 1, 1, 0.3);
			background-color: #84c72a;
			background-image: url(<?php echo base_url();?>images/front-page-banner-background.png);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.front-page .testimonials {
			position: relative;
			padding-top: 150px;
			padding-bottom: 150px;
			color: #ffffff;
			background-image: url(<?php echo base_url();?>images/front-page-testimonials-background.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.front-page .testimonials .slider-navigation {
			position: absolute;
			display: block;
			top: 50%;
			transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			-webkit-transform: translateY(-50%);
			height: 45px;
			width: 45px;
			border: 3px solid #84c72a;
			border-radius: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: 16px;
			cursor: pointer;
		}
		.front-page .testimonials .slider-navigation.left {
			left: 30px;
			right: auto;
			background-image: url(<?php echo base_url();?>images/testimonials-slider-navigation-left.png);
		}
		.front-page .testimonials .slider-navigation.right {
			right: 30px;
			left: auto;
			background-image: url(<?php echo base_url();?>images/testimonials-slider-navigation-right.png);
		}
		.front-page .testimonials #testimonials-slider p {
			font-size: 1.2em;
			line-height: 1.6em;
			font-weight: 500;
		}
		.front-page .testimonials #testimonials-slider p:last-of-type {
			margin: 0;
		}
		.front-page .testimonials #testimonials-slider .author {
			margin: 60px 0 0 0;
		}
		.front-page .testimonials #testimonials-slider .author .separator {
			margin: 0 15px;
		}
		.front-page .testimonials #testimonials-slider .author .company {
			color: #84c72a;
		}
		.achor_problem_default{
			width: unset !important;
			height: unset !important;
			top: unset !important;
			right: unset !important;
			position: unset !important;
			font-size: unset !important;
			color: unset !important;
			line-height: unset !important;
			font-weight:bold !important;
			text-decoration:underline !important;
		}
		.box_feat{
			min-height:550px;
		}
		.anchor_hover_wala:hover{
			text-decoration:underline !important;
		}
		.slide_first
		{
			color:white;font-weight:norma;font-size:48px;font-weight:normal
		}
		.slide_secound
		{
			color:#83c627;font-weight:normal;margin-top:30px;
		}
		.slide_third
		{
			color:white;font-size:22px;margin-top:30px;
		}
		.black
		{
			border:0px;text-align:center;color:black;font-size:22px;
		}
	.pattern
		{
			background:white;border-top:#eb8b10 !important;
		}
	.cyber_first
		{
			background-image: linear-gradient(rgba(132, 199, 42, 0.8) 0%, rgba(132, 199, 42, 0.8) 100%), url(<?php echo base_url()?>images/about1.png);display: inline-block;padding:40px;vertical-align: top;float: left;0 0 60px 0;
		}
	.cyber_secound
	{
		margin: 0;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;line-height: 1.4;color: #010101;font-size:16px;text-align:center;
	}
	.about_universal_first
	{
		height: 570px;padding: 30px;font-size: 1em;border: 8px solid #ffffff;
	}
	.about_universal_secound
	{
		margin: 0 0 30px 0;color: #ffffff;text-transform: uppercase;font-size: 1.7em;font-weight: 500;margin-bottom: 10px;text-align:center
	}
	.award_wining
	{
		background-image: linear-gradient(rgba(230, 231, 233, 0.8) 0%, rgba(230, 231, 233, 0.8) 100%), url(<?php echo base_url()?>images/front-page-about-us-two.png);display: inline-block;padding:40px;vertical-align: top;float: left;0 0 60px 0;
	}
	.award_first
	{
		margin: 0;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;line-height: 1.4;color: #010101;font-size:19px;text-align:center;font-weight:normal;
	}
	.award_secound
	{
		margin: 0;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;line-height: 1.4;color: #010101;font-size:16px;text-align:center;
	}

	.media_first
	{
		background-image: linear-gradient(rgba(235, 139, 16, 0.8) 0%, rgba(235, 139, 16, 0.8) 100%), url(<?php echo base_url()?>images/front-page-about-us-three.png);display: inline-block;padding:40px;vertical-align: top;float: left;0 0 60px 0;
	}
	.media_secound
	{
		margin: 0;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;line-height: 1.4;    color: #ffffff;text-align:center;
	}
	.ai_fluid
	{
		background-image: url(<?php echo base_url();?>images/front-page-testimonials-background.jpg);background-repeat: no-repeat;background-color:#000;
	}
	.carousel-item{
		display:none;
	}
	.itm_slide_img{
		height:140px;
	}
	.g_play{
		padding-left:20px;
	}
.protectSagImg1{
    width:120px !important;margin-top:12px;    
}	
.protectSagImg2{width:120px !important;margin-left:35px;
    
}	
  .ProtectMObimg{
        display:none;
    }
    .Protectdeximg{
        display:block;
    }
	@media all and (max-width: 1199px) and (min-width: 280px){
		.g_play{
			padding-left:10px;
		}
	}
	.padding-20{
		padding-top: 20px;
		padding-bottom: 20px;
	}
	@media only screen and (max-width: 991px) {
        .protectSag {
        display: flex;
        text-align: center;
        justify-content: center;
        }
    }
	@media only screen and (max-width: 767px) {

    .ProtectMObimg{
        display:block;
           margin-bottom: 30px;
    }
    .Protectdeximg{
        display:none;
    }
	}
	@media all and (max-width: 600px) and (min-width: 280px){
		#zzzttyy{
			margin-top:200px !important;
		}

		.itm_slide_img{
			height:120px;
		}
		.video_nndd{
			margin-left:15px;
		}
		.protectSagImg1{
    width:100px !important;  
}	
.protectSagImg2{width:100px !important;margin-left:10px;
    
}	
		
	}   
    
    
    
    
</style>

</head>
<body>
	<div id="load" style=""></div>
	<?php $this->load->view("common/header");?>

	<main style="margin-top:90px;">
		<div style="background:#83c627 !important;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align:left;" class="lanch_bar">
						<h3 style="font-weight:normal;font-size:20px;padding-bottom:10px;">Auto-pull info from Sage to make finding & buying the right cybersecurity bundle, in an hour for free, even easier in ProtectBox.
<!--<a href="https://voom.virginmediabusiness.co.uk/pitches/cyber-a-right-all-deserve-we-make-it-simple-fun" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">Sir Richard Branson’s Virgin Media VOOM</a> , <a href="https://goo.gl/ThcdTm" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">DL100 Cyber Resilience of Yr</a> & <a href="https://goo.gl/9KQW1B" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">DL100 Digital SME of Yr</a>--> </h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" >
			<div class="container" >
				<div class="col-md-12" style="padding:10px;">
					<div class="col-md-6 col-md-offset-3 protectSag" >
						<div class="col-md-5">
							<img src="<?php echo base_url();?>landing_images/Sage_Accounting_EN_stacked_RGB.jpg" class="protectSagImg1">
						</div>
						<div class="col-md-2 protectSagicon">
							<i class="fa fa-plus" style="font-size:40px;margin-top:30px;"></i>
						</div>
						<div class="col-md-5">
							<img src="<?php echo base_url();?>landing_images/LOGO-01.png" class="protectSagImg2">
						</div>

					</div>
				</div>
				<div class="col-md-12" style="padding-top:10px;padding-bottom:10px;text-align:center;">
					<p style="font-weight:normal;font-size:17px;">In an hour for free (vs months & £000s it takes otherwise), find and buy the right cybersecurity (technology, people, processes) by connecting Sage Accounting with ProtectBox. With the click of a button in ProtectBox, automatically pull answers to ProtectBox’s questions from Sage by auto-searching all your invoices:</h3>
				</div>
			</div>
		</div>

		<!-- about services -->
		<div id="get_abt" style="">
			<div class="container margin_60">
				<div class="row">
					<h1 style="text-align:center;margin-top:0px;font-size:20px;margin-bottom:10px;">How the integration works:</h1>
					<div class ="col-md-12 padding-20" style=";">
						<div class="col-md-4" style="">
							<img src="<?php echo base_url();?>landing_images/register.png" style="width:100%;height:200px;border:2px solid #afabab;">
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4">
							<img src="<?php echo base_url();?>landing_images/import.png" style="width:100%;height:200px;">
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4">
							<img src="<?php echo base_url();?>landing_images/import_options.png" style="width:100%;height:200px;border:2px solid #afabab;">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class ="col-md-12 padding-18" >
					  <div class="col-sm-8 col-sm-12"  style="text-align:left;font-size:16px;" id="intro">
						<p>1. &nbsp; Register by clicking green “REGISTER” button in top right corner & selecting “Small & Medium Business”. </p>
						<div class="clearfix"></div>
						<p>2. &nbsp;  Login  (click orange “LOGIN” button in top right corner) & Click on the “Import from Sage” button.” </p>
						<p>3. &nbsp; Click on ‘Import from Sage Accounting” button, to take you to Sage Accounting login page. </p>
						<p>4. &nbsp; After you log in with your Sage login, the page will automatically go back to ProtectBox’s questionnaire page, now showing with all your auto-pulled Sage data (examples below). </p>
					  </div>
					  
					  <div class="col-sm-4 col-sm-12" id="intro">
						<img src="<?php echo base_url();?>landing_images/sage_account_login.png" style="width:100%;height:200px;border:2px solid #afabab;">
					</div>
					
					 <div class="clearfix"></div>
				</div>
				<div class ="col-md-12 padding-20" style=";">
						<div class="col-md-4">
							<h1 style="text-align:center;margin-top:0px;font-size:18px;margin-bottom:10px;">Basic Tab:</h1>
							<img src="<?php echo base_url();?>landing_images/questionaire.png" style="width:100%;height:200px;">
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4">
							<h1 style="text-align:center;margin-top:0px;font-size:18px;margin-bottom:10px;">Technical Tab:</h1>
							<img src="<?php echo base_url();?>landing_images/technical.png" style="width:100%;height:200px;">
							<div class="clearfix"></div>
						</div>
						<div class="col-md-4">
							<h1 style="text-align:center;margin-top:0px;font-size:18px;margin-bottom:10px;">Non-Technical Tab:</h1>
							<img src="<?php echo base_url();?>landing_images/non-tech.png" style="width:100%;height:200px;">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class ="col-md-12 padding-18" >
					  <div class="col-sm-8 col-sm-12"  style="text-align:left;font-size:16px;" id="intro">
					  	<div class="col-md-6">
							<p>5. &nbsp; Fill out rest of ProtectBox’s questionnaire in just 1 hour. Use our customer service & non-jargonised info icons, or ask a friend (“Delegates”). </p>
							<div class="clearfix"></div>
							<p>6. &nbsp;  Use the sliders & filters on our comparison tool (just like Skyscanner/Kayak) to get the right bundle of solutions for you.</p>
							<p>7. &nbsp; Click “Buy” to pay for the whole bundle in one go. ProtectBox offers interest-free financing. ProtectBox is free up to this point.</p>
						</div>
						<div class="col-md-6">
							<img src="<?php echo base_url();?>landing_images/results.png" style="width:100%;height:250px;">
						</div>
						<div class="col-md-12 padding-20">
							<h1 style="text-align:left;margin-top:0px;font-size:20px;margin-bottom:10px;">New Year…New Decade Offer (Sage customers only)</h1>
							<p>8. &nbsp; Click “Subscribe” to pay for continuous access to your risk profile/comparison tool, orders, breaking news etc (your auto-CISO), see far right picture for what you get. If you add code “SAGE2019” at checkout you will get your first 3 months subscription, for free! </p>
						</div>
							<div class="col-md-6 ProtectMObimg" >
							<a href="https://drive.google.com/file/d/17GlxdAnh1zGAZiZ58uZRBFeVhLQN2hs-/view" target="_blank"><img src="<?php echo base_url();?>landing_images/golden_member.png" style="width:100%;height:250px;"></a>
						</div>
							<div class="col-md-6 ProtectMObimg" >
							<img src="<?php echo base_url();?>landing_images/questionaire_results.png" style="width:100%;">
							</div>
						
						<div class="col-md-6">
							<p>9. &nbsp; Spread the cyber-love by clicking on the Golden Ticket on the right & sharing this offer with your family & friends. Sharing is caring! (Offer expires 31 January 2020). </p>
						</div>
						<div class="col-md-6 Protectdeximg ">
							<a href="https://drive.google.com/file/d/17GlxdAnh1zGAZiZ58uZRBFeVhLQN2hs-/view" target="_blank"><img src="<?php echo base_url();?>landing_images/golden_member.png" style="width:100%;height:250px;"></a>
						</div>
						<div class="col-md-3 margin_60">
							<img src="<?php echo base_url();?>landing_images/help.jpg" style="width:100%;">
						</div>
						<div class="col-md-9 margin_60">
							<p style="text-align:left;margin-top:0px;font-size:16px;margin-bottom:10px;color:#ec6b0d !important;">Need more help to get started? Click on the blue chat icon in the bottom</br> right hand corner to speak to one of our customer service team.</p>
							
						</div>
					  </div>
					  
					  <div class="col-sm-4 col-sm-12" id="intro">
						<img src="<?php echo base_url();?>landing_images/questionaire_results.png" style="width:100%;">
					</div>
					
					 <div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- about services ends -->

		<!--<div class="bg_content magnific">
			<div>
				<h3>Buying cyber protection.Simple Fast.</h3>

			</div>
		</div><!-- End bg_content -->
		


		

		<!-- about content -->


		

		<!-- about content ends -->
	</main><!-- End main -->

<?php $this->load->view("common/footer");?>
	<!-- LayerSlider script files -->
<script>
	$('.carousel').carousel({
	  interval: 5000
	})
</script>
<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
</body>
</html>