
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
	#carouselExampleControls .carousel-indicators {
    bottom: -10px;
    }
     .quoteP{
        font-size:28px;text-align:center;
    }
     .margin_100 {
    padding-top: 100px;
    padding-bottom: 100px;
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
	}
	@media all and (max-width: 1199px) and (min-width: 280px){
		.g_play{
			padding-left:10px;
		}
	}
</style>

</head>
<body>
	<div id="load" style=""></div>
	<?php $this->load->view("common/header");?>
	<div class="container-fluid banner">
	  <div class="container">
		<div class="row">
		  <div class="col-sm-12 col-md-12">
			<h1 class="slide_first" style="">Security for small <br/> & medium businesses</h1>
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-12">
			<h2 style="" class="slide_secound">In an hour for free <br/>             find & buy all your security
			</h2>
			<p style="" class="slide_third">Cybersecurity & Data Protection               <br/> Comparison Website & Marketplace.
			</p>
		  </div>
		</div>

		<p>&nbsp;</p>

		<div class="row">
			  <div class="col-md-12">
					<a href="<?php echo base_url('questionaire');?>" class="btn btn-warning btn-lg" style="width:200px;">
					  Protect My Business
					</a>

					<a href="<?php echo base_url('edit_solution');?>" class="btn btn-success btn-lg" style="width:200px;">
					  Supply Businesses 
					</a>
			  </div>
			  <div class="col-md-2" style="padding-top:9px;padding-left:10px;">
					<a href="https://itunes.apple.com/us/app/apple-store/id375380948?mt=8" class="" target="_blank">
					  <img src="<?php echo base_url();?>images/apple_store.png" style="height:60px;margin-top:3px;">
					</a>
					<br />
					<div style="margin-top:15px;font-size:16px">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Coming soon)
					</div>
					
			  </div>
			  <div class="col-md-2 g_play" style="padding-top:9px;">
					<a href="https://play.google.com/store?hl=en" class=""  target="_blank">
					  <img src="<?php echo base_url();?>images/google-play.png" style="height:60px;margin-top:3px;">
					</a>
					<br />
					<div style="margin-top:15px;font-size:16px">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Coming soon)
					</div>
			  </div>
		</div>
	</div>
  </div>
</div>


	<main>
		<div style="background:#83c627 !important;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align:center;padding-top:10px;padding-bottom:20px;" class="lanch_bar">
						<h3 style="font-weight:normal">"Winner of Access Stage  pitch" <img src="images/Wired_logo.png" style="width:100px;">  <br/><img src="images/the-times-logo.png" style="width:160px;">"far removed from your typical 'geek' "<br/>
						"business leaders can take action themselves...says   Mary Portas " <img src="images/The_Telegraph_logo.svg.png" style="width:150px;">
						<!--<a href="https://voom.virginmediabusiness.co.uk/pitches/cyber-a-right-all-deserve-we-make-it-simple-fun" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">Sir Richard Branson’s Virgin Media VOOM</a> , <a href="https://goo.gl/ThcdTm" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">DL100 Cyber Resilience of Yr</a> & <a href="https://goo.gl/9KQW1B" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">DL100 Digital SME of Yr</a>--> </h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" >
			<div class="container">
				<div id="partnersslider" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						  <div class="item active">
							 <img src="images/partner1 (1).jpg" class="itm_slide_img" alt="partner 1" style="text-align:center;">
						  </div>

						  <div class="item">
							<img src="images/partner2-banner (1).jpg" class="itm_slide_img" alt="partner 2" style="text-align:center;">
						  </div>

						 <div class="item">
							<img src="images/partner3-banner.jpg" class="itm_slide_img" alt="partner 3" style="text-align:center;">
						  </div>
						  
					  </div>
				</div>
			</div>
		</div>

		<!-- about services -->
		<div id="get_abt" style="background:#f4f4f4;">
			<div class="container margin_60">
				<div class="row">
					  <div class="col-sm-6 col-sm-12" id="intro">
						<h2> IN AN HOUR FOR FREE  FIND & BUY ALL OF YOUR CYBERSECURITY (TECHNOLOGY, PEOPLE & PROCESSES)</h2>
						
						<p style="text-align:left;font-size:22px;">
						Fill out our simple online questionnaire. ‘Ask a friend’ or our friendly, no-jargon team, to make this easier for you. Then 1-click to pay (including 3 months interest free) for your chosen bundle, which we give you for free. To save your answers, market news, best buys & more, we ask for a tiny admin fee (our auto-CISO). We’re giving away 3 months free auto-CISO to celebrate the new decade, just add coupon XMAS2019 after your 1st buy!&nbsp;<!--<b>Vote for us <a href="https://voom.virginmediabusiness.co.uk/pitches/cyber-a-right-all-deserve-we-make-it-simple-fun" target="_blank"><u>Sir Richard Branson’s Virgin Media VOOM</u> </a> , <a href="https://goo.gl/ThcdTm" target="_blank"><u>DL100 Cyber Resilience of Yr</u> </a> & <a href="https://goo.gl/9KQW1B" target="_blank"><u>DL100 Digital SME of Yr</u> </a> </b>-->
						</p>
						<div class="clearfix"></div>
					  </div>
					  
					  <div class="col-sm-6 col-sm-12" id="intro">
						  <div class="col-md-6 col-sm-12">
								<iframe src="https://www.youtube.com/embed/vWoNJ3nwzXs" frameborder="0" allowfullscreen="" style="height:315px;"></iframe>
								<div class="clearfix"></div>
						  </div>

						  <div class="col-md-6 col-sm-12">
							<iframe style="height:315px;" src="https://www.youtube.com/embed/wM1lfbCKtSo" frameborder="0"  allowfullscreen=""></iframe>
							<div class="clearfix"></div>
						  </div>
						  
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
		

		<div id="zzzttyy">
			<div class="container margin_60">
				<div class="row">
					<h1 style="text-align:center;margin-top:0px;">THE PROCESS</h1>
					<blockquote style="" class="black">Automating buying the right cybersecurity for small and medium businesses</blockquote>

					<div class="col-md-4 col-sm-4">
						<div class="pattern" style="">
							<p style="text-align:center;"> <img src="<?php echo base_url();?>images/front-page-process-compare.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">COMPARE</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="pattern">
							<p style="text-align:center;">	<img src="<?php echo base_url();?>images/front-page-process-personalise.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">PERSONALISE</h3>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-4">
						<div class="pattern" >
							<p style="text-align:center;"> <img src="<?php echo base_url();?>images/front-page-process-buy.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">BUY</h3>
						</div>
					</div>
				</div><!-- End row -->
			</div>
		</div><!-- End feat home -->
		
		<div class="container-fluid ai_fluid" >
			<div class="container margin_100">
				<h1 style="text-align:center;color:#fff;">TESTIMONIALS</h1>
	
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleControls" data-slide-to="1"></li>
				    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
					<li data-target="#carouselExampleControls" data-slide-to="3"></li>
					<li data-target="#carouselExampleControls" data-slide-to="4"></li>
					<li data-target="#carouselExampleControls" data-slide-to="5"></li>
					<li data-target="#carouselExampleControls" data-slide-to="6"></li>
					<li data-target="#carouselExampleControls" data-slide-to="7"></li>
				  </ol>

				  <div class="carousel-inner">
					  <div class="item active">
						 <blockquote class="" style="color:white;border:0px;">
							<p  class="quoteP">“Winner of Access Stage.. comparisons for SMEs trying to choose security”</p>
							<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">Wired <span class="separator"></span></span><a href="http://www.wired.co.uk" style="color:#0563C1;" target="_blank"> http://www.wired.co.uk</a><span class="company" style="color:#92D050;"> - 100th issue</span></p>
						  </blockquote>
			
						  
					  </div>

					  <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“new simplicity approach, helping businesses become secure“</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">Gibrahn Verdult  <span class="separator"> - </span><span></span><span class="company" style="color:#92D050">Managing Partner</span> <span style="color:#0563C1;"><a href="https://www.venpropartners.com" style="color:#0563C1;" target="_blank"> www.venpropartners.com</a></span> <span style="color:#92D050;">(Fintech, USA)</span></p>
						  </blockquote>
					  </div>
					  
					   <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“business leaders can take action themselves ...says Mary Portas“</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">The Telegraph <span style="color:#ffc000;"><a href="https://www.telegraph.co.uk" style="color:#ffc000;" target="_blank"> www.telegraph.co.uk </a></span><span class="separator"> - </span></span><span style="color:#92D050;">Mary Portas puts SMEs under the cybersecurity spotlight</span></p>
						  </blockquote>
					  </div>
					  
					  <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“easy to use and would use this service again“</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">Dato’ Dr Nick Boden and Dato’ Arif Abdullah,<span class="separator"> </span></span><span class="company" style="color:#92D050">co-founders, </span><span style="color:#0563C1;"><a href="https://www.klean.my" style="color:#0563C1;" target="_blank"> www.klean.my</a> </span><span style="color:#92D050;">(Envirotech, Asia-Pacific)</span></p>
						  </blockquote>
					  </div>
					  
					  <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“far removed from your typical ‘geek’ “</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">The Times <span class="separator"> </span></span><span style="color:#0563C1;"><a href="https://www.thetimes.co.uk" style="color:#0563C1;" target="_blank"> www.thetimes.co.uk</a> </span><span style="color:#92D050;">in Lloyds Bank National Business Awards 2018 Supplement</span></p>
						  </blockquote>
					  </div>
                     <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“weren't sure what to do, support helped us delegate questions”</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">Ifeyinwa Kanu <span class="separator"> - </span></span><span class="company" style="color:#92D050">CEO/Founder, </span><span style="color:#0563C1;"><a href="https://intellidigest.com" style="color:#0563C1;" target="_blank"> https://intellidigest.com</a> </span><span style="color:#92D050;">(Envirotech, UK)</span></p>
						  </blockquote>
					  </div>
					  
					  <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“quickly found best providers for us to keep our customer's secure”</p>
						<p style="text-align:center;font-size: 22px;"><span style="color:#ffc000;">Andrew Irvine <span class="separator"> - </span></span><span class="company" style="color:#92D050">CEO/Founder, </span><span style="color:#0563C1;"><a href="https://www.tuskcapital.com" style="color:#0563C1;" target="_blank"> www.tuskcapital.com</a> </span><span style="color:#92D050;">(Fintech, Europe)</span></p>
						  </blockquote>
					  </div>
					   <div class="item">
						<blockquote class="" style="color:white;border:0px;">
							<p class="quoteP">“encourage partners to support...change in ‘game changer’ “</p>
						<p style="text-align:center;font-size: 22px;"> <span style="color:#ffc000;">Omar Al Busaidy</span>  <span class="separator"> - </span><span style="color:#92D050;">World Economic Forum (WEF) Global Shaper (Middle East)</span></p>
						  </blockquote>
					  </div>
					 

					    
					  
					</div>

				</div>
			</div>
		</div>

		<!-- about content -->


		<div id="" style="background:#f4f4f4;">
		  <div class="container margin_60">
			<div class="row">
			  <h1 style="text-align:center;margin-top:0px;">About ProtectBox</h1>
			  <blockquote class="black" >Security for all – in an hour for free find & buy all your security</blockquote>
			  <p>&nbsp;</p>
				<div class="col-md-12" style="margin:0 auto;">
					<div class="col-md-4 col-xs-12 col-sm-12 cyber_first" style="">
						<div class="col-md-12 col-xs-12 col-sm-12 about_universal_first">
							<div class="about_universal_secound">
								Cyber champions
							</div>
							<p style="" class="cyber_secound"> Selling in the UK, Europe, Middle East, Africa, Canada, the Americas & Asia-Pacific, our pioneering search and comparison engine has been developed by a team of cyber and data experts from government and industry supported by organisations who are the voice of small business. We want to be the 'go-to' platform so we have built it by listening to what you said you want.</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-12 award_wining" style="">
						<div class="col-md-12 col-xs-12 col-sm-12 about_universal_first">
							<div class="about_universal_secound">
								AWARD WINNING
							</div>
							<p style="" class="cyber_secound">Winner of <a href="https://www.wired.co.uk/article/wired-security-2017-startup-stage" target="_blank" class="achor_problem_default" style="font-weight:normal;">Wired Security 2017’s Start-Up Award, </a><a href="https://www.securityandfireawards.com/winners-2018" target="_blank" class="achor_problem_default" style="font-weight:normal;">Security & Fire Excellence Awards 2018’s Cybersecurity Project of the Year,</a> <a href="https://youtu.be/NvNG9Ro74G8" target="_blank" class="achor_problem_default" style="font-weight:normal;">TechNation Rising Stars 2019’s BDODrive Creative Award,</a> Corporate LiveWire Awards 2019’s Cybersecurity Site of the Year &  <a href="http://www.ifsecglobal.com/uncategorized/women-in-security-awards-2019-winners-revealed/amp/" target="_blank" class="achor_problem_default" style="font-weight:normal;">Women in Security Awards 2019's Technical Award</a> <a href="https://oceanicconsultingblog.wordpress.com/2019/07/26/winners-for-the-7th-british-indian-awards-2019-are-revealed/" target="_blank" class="achor_problem_default" style="font-weight:normal;">British Indian Awards 2019’s Creative Entrepreneur of Year.</a> Plus finalist in 25+ other Awards including <a href="https://www.youtube.com/watch?v=XSirv-Nh7_Y&feature=youtu.be" target="_blank" class="achor_problem_default" style="font-weight:normal;">HRH Duke of York’s Pitch@Palace 9.0 People’s Choice Award (2nd)</a></p>

							<!--<p style="" class="cyber_secound"><a href="https://www.securityandfireawards.com/winners-2018" target="_blank" class="achor_problem_default" style="font-weight:normal;">Winner of Corporate LiveWire’s Cyber Security Site of the Year 2019, Security & Fire Excellence Awards 2018’s Cybersecurity Project of Year </a><br/>& <a href="https://www.wired.co.uk/article/wired-security-2017-startup-stage" target="_blank" class="achor_problem_default" style="font-weight:normal;">Winner of Wired Security 2017’s Start-Up Award</a>.<br>Plus finalist in 25+ other Awards including<br/><a href="https://www.youtube.com/watch?v=XSirv-Nh7_Y&feature=youtu.be" target="_blank" class="achor_problem_default" style="font-weight:normal;">HRH Duke of York’s Pitch@Palace 9.0 People’s Choice Award (2nd)</a></p>-->


							<!--<p style="" class="award_secound"><!--For general / media enquiries, contact <a href="mailto:team@protectbox.com" style="color:#fff;">team@protectbox.com</a>.Investors contact our CEO/Founder Miss Kiran Bhagotra‎ on <a href="mailto:kiran@protectbox.com" style="color:#fff;">kiran@protectbox.com</a>.</p>-->

							<!--<p style="" class="award_first"><a href="https://voom.virginmediabusiness.co.uk/pitches/cyber-a-right-all-deserve-we-make-it-simple-fun" target="_blank" class="achor_problem_default" style="font-weight:normal;">Vote for us for Sir Richard Branson’s Virgin Media VOOM</a></p>

							<p style="" class="award_first"><a href="https://goo.gl/ThcdTm" target="_blank" class="achor_problem_default" style="font-weight:normal;">DL100 Cyber Resilience of Yr</a> & <a href="https://goo.gl/9KQW1B" target="_blank" class="achor_problem_default" style="font-weight:normal;">DL100 Digital SME of Yr</a></p>-->
						</div>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-12 media_first" style="" class="">
						<div class="col-md-12 col-xs-12 col-sm-12 about_universal_first">
							<div class="about_universal_secound">
								MEDIA
							</div>
							<p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://ciolook.com/kiran-bhagota-changing-hearts-and-minds-in-cybersecurity/" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">Changing Hearts & Minds in Cyber</a>
							 </p>
							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://www.cityam.com/wp-content/uploads/2019/10/022-023-crypto-1oct2019.pdf" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">CityAM: Rise of Quantum Internet</a>
							 </p>
							  <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://www.youtube.com/watch?time_continue=7&v=o2wXq3Fs58E" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">TN Rising Stars "Household Name</a>
							 </p>


							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://www.gov.uk/government/news/uk-and-india-leaders-celebrate-strong-financial-ties" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">UK/India leaders celebrate strong ties</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://www.mirrorreview.com/kiran-bhagotra-cybersecurity-customer-building-trust/" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">A Determined Founder</a>
							 </p>

							<p style="text-align:center;margin: 0 0 0px;"><a href="https://www.insightssuccess.com/kiran-bhagotra-making-cybersecurity-simple-quick-and-affordable/" target="_blank" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Most Inspirational Women in Tech 2019</a>
							 </p>

							<p style="text-align:center;margin: 0 0 0px;"><a href="https://www.wired.co.uk/article/blockchain-quantum-security" target="_blank" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">It’s time to protect the Blockchain from quantum-enabled hackers</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;"><a href="https://youtu.be/NvNG9Ro74G8" target="_blank" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">TechNation - May ProtectBox Be With You</a>
							 </p>

							<p style="text-align:center;margin: 0 0 0px;"><a href="https://www.bmmagazine.co.uk/national-business-awards/getting-to-know-you-kiran-bhagotra-ceo-founder-protectbox/amp/" target="_blank" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Getting to Know You Kiran Bhagotra</a>
							 </p>

							<p style="text-align:center;margin: 0 0 0px;"><a href="https://twitter.com/TechNation/status/1063361801029595136?s=19" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Rising Stars "World Domination"</a>
							 </p>
							
							 <p style="text-align:center;margin: 0 0 0px;"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6444520559039512576" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Plenty of Tech Zest in Belfast</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;"><a href="http://edition.pagesuite-professional.co.uk/html5/reader/production/default.aspx?pubname=&edid=b8e77336-725e-4891-afcf-10aa159b3f57&pnum=67" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Scuba diving helped me come up for air</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;"><a href="https://www.computerweekly.com/news/252444636/Most-influential-women-in-UK-tech-the-2018-longlist" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Most Influential Women in UK Tech</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;"><a href="https://www.telegraph.co.uk/business/tips-for-the-future/smes-cybersecurity/?WT.mc_id=tmg_share_tw" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala" target="_BLANK">Mary Portas puts SMEs under the cybersecurity spotlight</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="http://natwestbusinesshub.com/content/ced08d7d-82a8-be47-89e1-99be23976923" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">NatWest Business Spotlight Sessions with Mary Portas</a>
							 </p>
							
							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="http://www.businesscloud.co.uk/news/i-left-government-role-to-tackle-unacceptable-security-gap" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">Addressing 'unacceptable' gap</a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="http://www.cybersecurity-review.com/articles/back-to-the-future-continual-security-for-small-medium-business/" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">CyberSecurity Review: Back to the Future </a>
							 </p>

							 <p style="text-align:center;margin: 0 0 0px;">
								<a target="_blank" href="https://www.pwc.co.uk/who-we-are/regional-sites/northern-ireland/insights/changing-times/protectbox.html" style="color: #ffffff;font-size:12px;" class="anchor_hover_wala">Security is a right</a>
							 </p>

							

						</div>
					</div>
				</div>
			</div>
			<!-- End row -->

			<div class="phone_feat margin_60">
			  <div class="row">
					  <div class="col-md-12">
							<a href="<?php echo base_url('questionaire');?>" class="btn btn-warning btn-lg button-link first" style="width:200px;color:white;margin-top:3px;">
							  Protect My Business
							</a>

							<a href="<?php echo base_url('edit_solution');?>" class="btn btn-success btn-lg button-link" style="width:200px;color:white;margin-top:3px;">
							  Supply Businesses 
							</a>
					  </div>
				</div>
			</div>
		  </div>
		</div>

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