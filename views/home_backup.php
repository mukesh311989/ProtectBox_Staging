
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title> ProtectBox: Cyber comparison website </title>
	<?php $this->load->view("common/metalinks");?>
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
	</style>
</head>

<body>
	<div class="layer"></div>

	<?php $this->load->view("common/header");?>

	<div class="container-fluid banner">
	  <div class="container">
		<div class="row">
		  <div class="col-sm-12 col-md-12">
			<h1 class="" style="color:white;font-weight:norma;font-size:48px;font-weight:normal">Cyber Security and Data Protection <br /> Comparison Website</h1>
		  </div>
		</div>
		<div class="row">
		  <div class="col-md-12">
			<h2 style="color:#83c627;font-weight:normal;margin-top:30px;">Automating buying the right cyber security 
			  <br />for small and medium businesses
			</h2>
			<p style="color:white;font-size:22px;margin-top:30px;">Compare cyber protection products 
			  <br />to find the bundle of solutions that’s right for you.
			</p>
		  </div>
		</div>

		<p>&nbsp;</p>

		<div class="row">
			  <div class="col-md-12">
					<a href="<?php echo base_url('questionaire');?>" class="btn btn-warning btn-lg">
					  Protect My Business
					</a>

					<a href="<?php echo base_url('edit_solution');?>" class="btn btn-success btn-lg" style="margin-left:10px;">
					  Supply Businesses 
					</a>
			  </div>
		</div>
	  </div>
	</div>


	<main>
		<div style="background:#83c627 !important;">
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="text-align:center;padding-top:10px;padding-bottom:20px;">
						<h3 style="color:#fff;font-weight:normal"> Launching soon, sign up & vote for us for <a href="http://peopleschoice.pitchatpalace.com/entry/24/protectbox" target="_BLANK" style="font-weight:bold;color:#fff;text-decoration:underline;">HRH Duke of York’s Pitch@Palace People’s Choice Award</a> </h3>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div id="owl-demo" class="owl-carousel owl-theme">
			  <div class="item"><img src="images/partners-row/new_slide_partners.png" alt="partner 1"></div>
			  <div class="item"><img src="images/partners-row/partner2.png" alt="partner 2"></div>
			  <div class="item"><img src="images/partners-row/partner3.png" alt="partner 3"></div>
			</div>
		</div>

		<!-- about services -->
		<div id="get_abt" style="background:#f4f4f4;">
			<div class="container margin_60">
				<div class="row">

					  <div class="col-sm-6" id="intro">
						<h2>Automated buying of technology, people & processes so that it’s Quick, Simple & Affordable</h2>
						<p>&nbsp;</p>
						<p style="text-align:left;font-size:22px;">
						 There’s too much advice on cyber security. We help find the right fit at the right price, rating & regulation. Businesses, you pay us nothing, you pay suppliers for their products. Suppliers, you pay us a fee. Video shows how it works. More to come, sign up for updates!
						</p>
					  </div>

					  <div class="col-sm-3">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/vWoNJ3nwzXs" frameborder="0" allowfullscreen="" style="height:315px;"></iframe>
					  </div>

					  <div class="col-sm-3">
							<iframe width="560" height="315" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fprotectbox%2Fvideos%2F151119855556645%2F&height=650" frameborder="0" allowfullscreen="" style="height:315px;"></iframe>
					  </div>
				</div>
			</div>
		</div>
		<!-- about services ends -->

		<!--<div class="bg_content magnific">
			<div>
				<h3>Buying cyber protection.Simple Fast.</h3>

			</div>
		</div><!-- End bg_content -->
		

		<div id="">
			<div class="container margin_60">
				<div class="row">
					<h1 style="text-align:center;margin-top:0px;">THE PROCESS</h1>
					<blockquote style="border:0px;text-align:center;color:black;font-size:22px;">Automating buying the right cyber security for small and medium businesses</blockquote>
					<div class="col-md-4 col-sm-4">
						<div style="background:white;border-top:#eb8b10 !important;">
							<p style="text-align:center;">	<img src="<?php echo base_url();?>images/front-page-process-personalise.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">PERSONALISE</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div style="background:white;border-top:#eb8b10 !important;">
							<p style="text-align:center;"> <img src="<?php echo base_url();?>images/front-page-process-compare.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">COMPARE</h3>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div style="background:white;border-top:#eb8b10 !important;">
							<p style="text-align:center;"> <img src="<?php echo base_url();?>images/front-page-process-buy.png" alt="" style="height:200px;" data-retina="true"></p>
							<h3 style="color:#eb8b10;text-align:center;">BUY</h3>
						</div>
					</div>
				</div><!-- End row -->
			</div>
		</div><!-- End feat home -->
		
		<div class="container-fluid " style="background-image: url(<?php echo base_url();?>images/front-page-testimonials-background.jpg);background-repeat: no-repeat;background-color:#000;">
			<div class="container margin_60">
				<h1 style="text-align:center;margin-top:5%;color:#fff;">TESTIMONIALS</h1>
				<div id="owl-demo2" class="owl-carousel owl-theme">
				  <div class="item">
					 <blockquote class="" style="color:white;border:0px;">
						<p style="font-size:20px;">ProtectBox is an innovative but powerful answer to the dilemma of many small businesses faced with overwhelming cyber protection advice. ProtectBox can help make small businesses and individuals across all sectors more secure.</p>
						<p style="font-size:20px;">It can help them bring competitive advantage to their business and online activities, and when bidding for work against companies from other regions and countries. ProtectBox is part of the new approach</p>
					  </blockquote>
		
					  <h4 style="color:#fff;text-align:center;">Malcolm Warr OBE <span class="separator"> - </span><span class="company" style="color:#84c72a">Member Federation of Small Businesses Home Affairs Committee & Chair, SKEO Associates</span></h4>
				  </div>

				  <div class="item">
					<blockquote class="" style="color:white;border:0px;">
						<p style="font-size:20px;">Kiran is an exceptionally amazing personality that I'm honored to have met as a speaker and discussed her project that I strongly believe will serve the SMB community in a very big way.</p>
						<p style="font-size:20px;">She is intelligent, persistent and hard working and I encourage the right partners to support Kiran in her project as she's bringing the change in "game changer".</p>
					  </blockquote>
		
					  <h4 style="color:#fff;text-align:center;">Omar Al Busaidy <span class="separator"> - </span><span class="company" style="color:#84c72a">World Economic Forum (WEF) Global Shaper and Abu Dhabi Tourism Authority (UAE)</span></h4>
				  </div>

				 <div class="item">
					<blockquote class="" style="color:white;border:0px;">
						<p style="font-size:20px;">We are focusing our efforts to make sure that the advice and guidance published by NCSC is accessible by smaller organisations and can be used to improve their security at minimal cost.</p>
						<p style="font-size:20px;">There’s no single right answer. We can’t tell you what to do in every situation - but we want to make it easier for you to take some sensible steps to make yourself safer.</p>
					  </blockquote>
		
					  <h4 style="color:#fff;text-align:center;">National Cyber Security Centre <span class="separator"> - </span><span class="company" style="color:#84c72a">HM Government (UK)</span></h4>
				  </div>

				  <div class="item">
					<blockquote class="" style="color:white;border:0px;">
						<p style="font-size:20px;">VenPro Partners has provided advisory services and fundings to cybersecurity industry for years.</p>
						<p style="font-size:20px;">We have found that ProtectBox is part of the new simplicity approach, helping businesses across all sectors become more secure. It masters the ability of quickly assessing a situation and knowing how to manage it for a proper outcome ‎in supporting the initiatives at hand.</p>
					  </blockquote>
		
					  <h4 style="color:#fff;text-align:center;">Gibrahn Verdult <span class="separator"> - </span><span class="company" style="color:#84c72a">Managing Partner at VenPro Partners</span></h4>
				  </div>

				</div>
			</div>
		</div>

		<!-- about content -->


		<div id="" style="border:1px solid red;background:#f4f4f4;">
		  <div class="container margin_60">
			<div class="row">
			  <h1 style="text-align:center;margin-top:0px;">About ProtectBox</h1>
			  <blockquote class="" style="border:0px;text-align:center;color:black;font-size:22px;">Automating buying the right cyber security for small and medium businesses</blockquote>
			  <p>&nbsp;</p>
			  <div class="col-md-4 col-sm-4" style="padding:0px !important">

				<div class="" style="background:url(<?php echo base_url();?>images/about_one.png) ;">

					  <h3>CYBER CHAMPIONS</h3>
					  <p style="font-size:20px;">
						Launching soon, our pioneering search and comparison engine has been developed by a team of cyber and data experts from government and industry supported by organisations who are the voice of small business. We want to be the 'go-to' platform so we are building it by listening to what you want.
					  </p>

				</div>
			  </div>


			  <div class="col-md-4 col-sm-4" style="padding:0px !important">
				<div class="box_feat" style="background: url('<?php echo base_url();?>images/about_two.png') center;">

					  <h3>AWARD WINNING</h3>
					  <p style="font-size:19px;">
						<a href="https://www.gitexfuturestars.com/exhibitor-press-releases/congratulations-protectbox-for-winning-wired-security-2017" class="achor_problem_default">Winner of Wired Security 2017 and finalist in 20+ other international Awards and competitions.</a> <br /> ProtectBox was finalist for the 'Human Factor' award in the Computing Security Awards 2016 as well as finalist in several pitch competitions. For general / media enquiries, contact <b>team@protectbox.com</b> Investors contact our CEO/Founder Miss Kiran Bhagotra‎ on <b>kiran@protectbox.com</b>.
					  </p>

				</div>
			  </div>

			  <div class="col-md-4 col-sm-4" style="padding:0px !important">
				<div class="box_feat" style="background:url(<?php echo base_url();?>images/about_three.png) center;">

					  <h3>MEDIA</h3>

					  <p style="line-height:30px;font-size:19px;color:#000"><a target="_blank" href="http://peopleschoice.pitchatpalace.com/entry/24/protectbox" class="achor_problem_default">Vote for us for People’s Choice Award in HRH Duke of York’s Pitch@Palace 9.0</a></p>
					  
					  <p style="line-height:25px;font-size:17px;font-weight:normal !important;"><a target="_blank" href="http://www.businesscloud.co.uk/news/i-left-government-role-to-tackle-unacceptable-security-gap" class="achor_problem_default">Addressing ‘unacceptable’ gap</a></p>

					  <p style="line-height:25px;font-size:17px;font-weight:normal !important;"><a target="_blank" href="https://www.siliconrepublic.com/start-ups/16-brilliant-belfast-start-ups-watch" class="achor_problem_default">Best of Belfast</a></p>

					  <p style="line-height:25px;font-size:17px;font-weight:normal !important;"><a target="_blank" href="http://www.wired.co.uk/article/wired-security-2017-startup-stage" class="achor_problem_default">Wired Security 2017 winner</a></p>

					  <p style="line-height:25px;font-size:17px;font-weight:normal !important;"><a target="_blank" href="http://www.wired.co.uk/article/wired-security-2017-startup-stage" class="achor_problem_default">Wired Security 2017 winner</a></p>
					  <p style="line-height:25px;font-size:17px;"><a target="_blank" href="http://www.cybersecurity-review.com/articles/back-to-the-future-continual-security-for-small-medium-business/" class="achor_problem_default">CyberSecurity Review: Back to the Future</a></p>
					  <p style="line-height:25px;font-size:17px;"><a target="_blank" href="https://www.pwc.co.uk/who-we-are/regional-sites/northern-ireland/insights/changing-times/protectbox.html" class="achor_problem_default">Security is a right</a></p>
					  <p style="line-height:25px;font-size:17px;"><a target="_blank" href="https://startacus.net/culture/protectbox-cyber-security-decisions-made-easy" class="achor_problem_default">Cyber decisions made Easy</a></p>
					  <p style="line-height:25px;font-size:17px;"><a target="_blank" href="https://www.beechermadden.co.uk/cm/news/2016/jul/womenincyber" class="achor_problem_default">CyberSecurity Awards 2016 finalist</a></p>
					  <p style="line-height:25px;font-size:17px;"><a target="_blank" href="https://medium.com/@mattoliver1037/making-kids-apps-cyber-safe-8aa85c1a6863" class="achor_problem_default">Keeping kids apps safe</a></p>

					  
 
				</div>
			  </div>
			</div>
			<!-- End row -->

			<div class="phone_feat margin_60">
			  <div class="row">
				  <div class="col-md-12">
					<a href="<?php echo base_url('questionaire');?>" class="button-link first">
					  <button type="button" class="btn btn-warning btn-lg">Protect My Business
					  </button>
					</a>
					<a href="<?php echo base_url('edit_solution');?>" class="button-link"  style="margin-left:10px;">
					  <button type="button" class="btn btn-success btn-lg">Supply Businesses
					  </button>
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
	<script src="<?php echo base_url();?>js/greensock.js"></script>
	<script src="<?php echo base_url();?>js/layerslider.transitions.js"></script>
	<script src="<?php echo base_url();?>js/layerslider.kreaturamedia.jquery.js"></script>
	<script src="<?php echo base_url();?>js/slider_func.js"></script>
<script>
$(document).on('ready', function(){
        'use strict';
        $('#sponser').layerSlider({
            autoStart: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
            skinsPath: '<?php echo base_url();?>layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });// JavaScript Document
</script>
</body>
</html>