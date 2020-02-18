<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title> News  | ProtectBox 
    </title>
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/ourstory.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/additional-style.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.min.css" rel="stylesheet">
    <style>
	  body{
		overflow-x: hidden !important;
	  }
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
        background-image: url(<?php echo base_url();
        ?>images/front-page-banner-background.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .front-page .testimonials {
        position: relative;
        padding-top: 150px;
        padding-bottom: 150px;
        color: #ffffff;
        background-image: url(<?php echo base_url();
        ?>images/front-page-testimonials-background.jpg);
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
        background-image: url(<?php echo base_url();
        ?>images/testimonials-slider-navigation-left.png);
      }
      .front-page .testimonials .slider-navigation.right {
        right: 30px;
        left: auto;
        background-image: url(<?php echo base_url();
        ?>images/testimonials-slider-navigation-right.png);
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
        min-height:500px;
      }
	  #history_timeline::before {
			background: #ec8c0e;
	  }
	  .history_timeline_point {
			box-shadow: 0 0 0 5px #ec8c0e, 0 3px 0 4px rgba(0,0,0,0.05);
     }
	 .team_box{
		padding:0px !important;
		min-height:0px !important;
	 }
	 .team_box img {
		-webkit-filter:none !important;
		filter: none !important;
		opacity: .9;
	  }
    </style>
  </head>
  <body>
    <div id="load"></div>
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          News
        </div>
      </div>
    </section>
    <main>

	  <section class="media" style="background:#fff;margin-top:50px;">
			    <div class="container">
					<h2 class="text-center m-b-40">Media</h2>
					<div class="row" style="margin-top:20px;text-align:center;">
						<div class="col-md-12">
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/rise_of_qnt.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.cityam.com/wp-content/uploads/2019/10/022-023-crypto-1oct2019.pdf" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Rise of Quantum Internet</a></p>
							</div>
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/change.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://ciolook.com/kiran-bhagota-changing-hearts-and-minds-in-cybersecurity/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Changing Hearts & Minds in Cyber</a></p>
							</div>
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/technation1.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.youtube.com/watch?time_continue=7&v=o2wXq3Fs58E" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Rising Stars "Household Name"</a></p>
							</div>


							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/gov_uk.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.gov.uk/government/news/uk-and-india-leaders-celebrate-strong-financial-ties" style="font-weight:bold;color:#ec8c0e" target="_BLANK">UK Government's UK/India Leaders celebrate strong ties </a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/7th british indian award new.png" style="margin-top:-40px;height:100px;"></p>
								<p><a href="https://oceanicconsultingblog.wordpress.com/2019/07/26/winners-for-the-7th-british-indian-awards-2019-are-revealed/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Winner 7th British Indian Awards' Creative Entrepreneur of Year</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/computer_weekly.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.computerweekly.com/news/252466636/Most-influential-women-in-UK-tech-The-2019-longlist" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Most Influential Women  in UK Tech 2019 (longlist)</a></p>
							</div>

							

						</div>
					</div>

					<div class="row" style="margin-top:30px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/mirror_review.png" style="height:40px;margin-top:17px"></p>
								<p><a href="https://www.mirrorreview.com/kiran-bhagotra-cybersecurity-customer-building-trust/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">A Determined Founder, Making How We Buy Cybersecurity Customer-Friendly By Building Trust</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/advertising week europe.png" style="height:23px;margin-top:35px;"></p>
								<p><a href="https://www.youtube.com/watch?v=oQlTdf-Lthg&feature=youtu.be" style="font-weight:bold;color:#ec8c0e" target="_BLANK">AWEurope Conference</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/business_cloud1.png" style="height:28px;margin-top:31px;"></p>
								<p><a href="https://www.businesscloud.co.uk/301-tech-trailblazers" style="font-weight:bold;color:#ec8c0e" target="_BLANK">301 Female Tech Trailblazers</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/technation1.png" style="height:33px;margin-top:23px;"></p>
								<p><a href="https://youtu.be/NvNG9Ro74G8" style="font-weight:bold;color:#ec8c0e" target="_BLANK">TechNation Rising Stars BDODrive Creative Award for Lego Movie "May The ProtectBox Be With You"</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/technation1.png" style="height:33px;margin-top:23px;"></p>
								<p><a href="https://www.youtube.com/watch?v=BBEqZMgtiLg&feature=youtu.be" style="font-weight:bold;color:#ec8c0e" target="_BLANK">TechNation Rising Stars Final</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/most inspiration women1.jpg" style="height:49px;margin-top:10px;"></p>
								<p><a href="https://www.insightssuccess.com/kiran-bhagotra-making-cybersecurity-simple-quick-and-affordable/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Most Inspirational Women in Tech 2019: Kiran Bhagotra (Insights Success)</a></p>
							</div>



														
						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/inside quantum technology.png" style="height:49px;margin-top:10px;"></p>
								<p><a href="https://iqtevent.com/speakers/#kiran" style="font-weight:bold;color:#ec8c0e" target="_BLANK">IQT Conference</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture2.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.businesscloud.co.uk/news/tech-nation-reveals-20-finalists-for-rising-stars" style="font-weight:bold;color:#ec8c0e" target="_BLANK">TechNation reveals 20 finalists for Rising Stars</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture4.jpg" style="height:40px;width:130px;margin-top:14px"></p>
								<p><a href="https://www.wired.co.uk/article/blockchain-quantum-security" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Wired World in 2019: Protect Blockchain from Quantum-enabled hackers</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/business_matters.png" style="height:20px;margin-top:31px"></p>
								<p><a href="https://www.bmmagazine.co.uk/national-business-awards/getting-to-know-you-kiran-bhagotra-ceo-founder-protectbox/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Getting to Know You: CEO/Founder Kiran</a></p>
							</div>

						    <div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/technation.png" style="height:26px;margin-top:29px"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Rising Stars "World Domination"</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/the_times.png" style="height:20px;margin-top:31px"></p>
								<p><a href="https://www.linkedin.com/feed/update/urn:li:activity:6444520559039512576" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Plenty of Tech Zest in Belfast </a></p>
							</div>



						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture2.png" style="height:28px;margin-top:31px"></p>
								<p><a href="http://edition.pagesuite-professional.co.uk/html5/reader/production/default.aspx?pubname=&edid=b8e77336-725e-4891-afcf-10aa159b3f57&pnum=67" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Scuba diving helped me come up for air </a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/computer_weekly.png" style="height:28px;margin-top:31px"></p>
								<p><a href="https://www.computerweekly.com/news/252444636/Most-influential-women-in-UK-tech-the-2018-longlist" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Most Influential Women  in UK Tech 2018 (longlist)</a></p>
							</div>
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/telegraph.png" style="height:30px;margin-top:31px;"></p>
								<p><a href="https://www.telegraph.co.uk/business/tips-for-the-future/smes-cybersecurity/?WT.mc_id=tmg_share_tw" style="font-weight:bold;color:#ec8c0e;" target="_BLANK">Mary Portas puts SMEs under the cybersecurity spotlight</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/natwest.png" style="height:35px;margin-top:24px;"></p>
								<p><a href="http://natwestbusinesshub.com/content/ced08d7d-82a8-be47-89e1-99be23976923" style="font-weight:bold;color:#ec8c0e;" target="_BLANK">NatWest Business' Spotlight Sessions with Mary Portas</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/digital_leaders.png" style="height:70px;margin-top:-10px;"></p>
								<p><a href="https://twitter.com/DigiLeaders/status/1010103358382854144?s=19" style="font-weight:bold;color:#ec8c0e;" target="_BLANK">DL100's (2018) Cyber Resilience of the Year & Digital SME of the Year (Finalist) </a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/family.png" style="height:70px;margin-top:-10px;"></p>
								<p><a href="https://www.youtube.com/watch?v=XSirv-Nh7_Y&feature=youtu.be" style="font-weight:bold;color:#ec8c0e" target="_BLANK">CEO's video for HRH Duke of York's 9.0(Top 5 in Pepole's Choice Award)</a></p>
							</div>

							

							
						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/family.png" style="height:70px;margin-top:-10px;"></p>
								<p><a href="https://youtu.be/26HsKItgTvc" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Pitch for HRH Duke of York&acute;s Pitch@Palace 9.0 (Top 5 in People&acute;s Choice Award)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture1.png" style="height:40px;margin-top:18px;"></p>
								<p><a href="https://www.infosecurity-magazine.com/news/cse18-panel-discussion-ransomware/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">#CSE18 Panel discussion: Ransomware</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/cw.png" style="height:40px;margin-top:16px"></p>
								<p><a href="http://www.computerweekly.com/news/252437553/Ransomware-publicity-heightened-awareness-but-other-threats-remain-experts-say" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Greatest cyber threat?</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/syncni.png" style="height:28px;margin-top:27px"></p>
								<p><a href="https://syncni.com/view/985/addressing-the-challenges-faces-by-startups" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Addressing challenges faced by start-ups</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture3.png" style="height:50px;margin-top:3px"></p>
								<p><a href="https://www.siliconrepublic.com/start-ups/16-brilliant-belfast-start-ups-watch" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Best of Belfast</a></p>
							  </div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture4.jpg" style="height:40px;width:170px;margin-top:16px"></p>
								<p><a href="http://www.wired.co.uk/article/wired-security-2017-startup-stage" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Best Security Start-Up</a></p>
							</div>


						</div>
					</div>


					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture5.png" style="height:50px;margin-top:-21px"></p>
								<p><a href="https://www.pwc.co.uk/who-we-are/regional-sites/northern-ireland/insights/changing-times/protectbox.html" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Security is a Right </a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture6.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="https://startacus.net/culture/protectbox-cyber-security-decisions-made-easy#.WeW8OLp2trQ" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Cyber decisions made easy </a></p>
							</div>
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture7.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="http://www.cybersecurity-review.com/articles/back-to-the-future-continual-security-for-small-medium-business/" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Back to the Future: Continual Security</a></p>
							</div>

							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture8.jpg" style="height:70px;margin-top:-10px"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#ec8c0e"></a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture9.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="http://connect.catalyst-inc.org/techwatch/protectbox" style="font-weight:bold;color:#ec8c0e" target="_BLANK">No meerkats here</a></p>
							</div>
              
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture10.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="https://code.likeagirl.io/top-tips-for-promoting-more-women-in-cyber-security-a51441f89659" style="font-weight:bold;color:#ec8c0e" target="_BLANK">HutZero: Support cyber women</a></p>
							</div>


							

						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture11.png" style="height:60px;margin-top:-27px"></p>
								<p><a href="http://www.pictame.com/media/1387333234451081516_1767295442" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Limitless Academy Showcase</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture12.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="https://medium.com/@mattoliver1037/making-kids-apps-cyber-safe-8aa85c1a6863" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Keeping kids apps safe</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/media/Picture13.png" style="height:40px;margin-top:-10px"></p>
								<p><a href="https://www.beechermadden.co.uk/cm/news/2016/jul/womenincyber" style="font-weight:bold;color:#ec8c0e" target="_BLANK">Woman of Year finalist</a></p>
							</div>
							

						</div>
					</div>

				</div>
              </section>

			  <!---<section class="awards" style="background:#fff;margin-top:30px;">
			    <div class="container">
					<h2 class="text-center m-b-40">Awards</h2>

					<div class="row" style="margin-top:20px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/Picture14.jpg" style="height:70px;">
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">WINNER Best Security StartUp</a></p>
							</div>
							
							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/security-fire-excellence-award.jpg" style="height:36px;">
								<p style="margin-top:37px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">WINNER <a href="https://www.securityandfireawards.com/winners-2018" target="_blank" style="font-weight:bold;color:#4a8522">Cybersecurity Project of Yr</a> & <a href="https://www.securityandfireawards.com/winners-2018/finalists-2018/" target="_blank" style="font-weight:bold;color:#4a8522">Security Project of Yr (Finalist)</a></p>
							</div>
							<div class="col-md-2" style="margin-top:-25px;">
								<img src="<?php echo base_url();?>images/awards/innovation.jpg" style="height:100px;">
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Cybersecurity Comparison SIte of the Year (Winner)</a></p>
							</div>

							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/technation rising star.png" style="height:60px;">
								<p style="margin-top:20px;"><a href="https://technation.io/news/announcing-the-20-tech-startups-set-to-pitch-at-the-rising-stars-grand-final/" target="_blank" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/women in it awards.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="https://www.information-age.com/women-in-it-awards-2019-finalists-123477952/" target="_blank" style="font-weight:bold;color:#4a8522">Editor's Choice Award (Finalist)</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-38px;">
								<img src="<?php echo base_url();?>images/awards/Techpreneurs Awards for Women (Runner up).png" style="height:110px;">
								<p><a href="http://techpreneurs.co.uk/" style="font-weight:bold;color:#4a8522" target="_blank">Techpreneurs Awards for Women (Runner up)</a></p>
							</div>

							
							
						</div>
					</div>

					<div class="row" style="margin-top:30px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/picture1.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">national business awards' duke of york new entrepreneur of yr (finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/british-small-business-award.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">e-commerce platform & small business advocate of yr (finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/picture55.jpg" style="height:27px;"></p>
								<p style="margin-top:40px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">great british entrepreneur awards' entrepreneurial spirit of yr (finalist)</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/bmwi.jpg" style="height:40px;margin-top:-10px;margin-left:11px;"></p>
								<p  style="margin-top:40px;"><a href="http://techfounderawards.uk/news/2018-shortlist-bmw-uk-tech-founder-awards/" style="font-weight:bold;color:#4a8522">regtech founder of yr (finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/computer-weekly.png" style="height:25px;"></p>
								<p  style="margin-top:40px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Most Influential Women in UK Tech (longlist) </a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture15.png" style="height:70px;"></p>
								<p  style="margin-top:-18px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Cyber Resilience Innovation of Year & Digital SME of the Year (Finalist)</a></p>
							</div>
						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture16.png" style="height:100px;margin-top:-24px;"></p>
								<p  style="margin-top:-24px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">HRH Duke of York&acute;s Pitch@Palace 9.0 finalist (Top 5 in People&acute;s Choice Award)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/digital_dna(1).png" style="height:50px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">E-Commerce Project of Yr & StartUpof Yr  Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture17.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Business & Product Innovation (Area Finalist)</a></p>
							</div>
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture18.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Security Champion (Finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture19.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">StartUp Founder (Finalist)</a></p>
							</div>

							<div class="col-md-2" style="margin-top:27px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture20.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Top10</a></p>
							</div>
						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture21.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture22.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Top50</a></p>
							</div>

							<div class="col-md-2">
								<p style="margin-top:-10px;"><img src="<?php echo base_url();?>images/awards/Picture23.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522"></a></p>
							</div>
							<div class="col-md-2">
								<p style="margin-top:-10px;"><img src="<?php echo base_url();?>images/awards/digital_dna.PNG" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture24.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture25.png" style="height:50px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Most Investible (2nd)</a></p>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture26.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Woman of Year (2nd)</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-28px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture27.jpg" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Human Factor & Personal Contribution to IT</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture28.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Start-Up Pitch Finalist</a></p>
							</div>
						</div>
					</div>
				</div>
              </section>-->
			  <P>&nbsp;</P>

      <section id="company_history" >
        <div class="container">
          <h2 class="text-center">News</h2>
          <section id="history_timeline" class="history_container">
            <div class="history_timeline_point" style=""></div>
            <div class=" history_timeline-block" style="background:transparent">
              <div class=" history_timeline_content" style="float:left;">
					<a class="twitter-timeline" href="https://twitter.com/ProtectBoxLtd?ref_src=twsrc%5Etfw">Tweets by ProtectBoxLtd</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <div class=" history_timeline_content" style="float:right">
					<a class="twitter-timeline" href="https://twitter.com/securityXTV?ref_src=twsrc%5Etfw">Tweets by securityXTV</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>

          </section>
        </div>
       </section>



     
                <!-- End feat home -->
                </main>
              <!-- End main -->
              <?php $this->load->view("common/footer");?>
              <!-- LayerSlider script files -->
			  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
              </body>
            </html>