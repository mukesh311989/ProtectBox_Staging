<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title> About | ProtectBox 
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
          About Us
        </div>
      </div>
    </section>
    <main>
      <section id="company_history" >
        <div class="container">
          <h2 class="text-center">Our Story</h2>
          <section id="history_timeline" class="history_container">
            <div class="history_timeline_point" style=""></div>
            <div class=" history_timeline-block" style="background:transparent">
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Beginning (2016)
                </h2>
                <p style="font-size:18px;">Our founder, a 3rd time entrepreneur, left her UK government (Cabinet Office promoting UK cyber globally) role to 'put her (little) money where her (big) mouth is' to disrupt the 'unacceptable security gap' for small and medium businesses globally - despite having no background in coding.
                </p>    
              </div>
              <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Mission (Jan 2017)
                </h2>
                <p style="font-size:18px;">'Go-to' cyber marketplace for small, medium businesses & suppliers globally. Security a right all deserve, we make it a reality by automating empowerment. Using an independent plug and play marketplace, global strategic alliances, regulation focus & novel sales analytics.  
                </p>
              </div>
            </div>

            <div class=" history_timeline-block">
              <div class=" history_timeline_point"></div>
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Purpose (Mar 2017)
                </h2>
                <p style="font-size:18px;">We're not only making cybersecurity simple, we're also changing hearts & minds. Small and medium businesses can trust & engage with us. We're all about collaboration, empowerment, challenging norms of who can work in cyber by hiring ex-forces, graduates, returners etc. & fun. This is why our customers, partners, investors, supporters etc, are all as much a part of the ProtectBox family as our staff.
                </p>
              </div>
              <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Process (Jun 2017)
                </h2>
                <p style="font-size:18px;">Automates the buying of cyber security (technology, people, processes) to be quick, affordable and simple. In an hour, business owners or IT managers can go from filling out our online form to personalising our six comparisons to downloading the bundle of technology, training & processes they've just bought. Without wasting the thousands of pounds & weeks it takes to find them right now.</p>
              </div>
            </div>

            <div class=" history_timeline-block">
              <div class=" history_timeline_point"></div>
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Partnerships (Sep 2017)
                </h2>
                <p style="font-size:18px;">Trusted accountants, telcos, banks, insurers.any data service provider including governments refer us to businesses (we're sold as a cyber add-on in same way as insurance add-ons are sold with banking products). Existing marketplaces (our competitiors) partnering to refer suppliers to us. 4 government & corporate partners signed, 10+ in the pipeline.</p>
              </div>

			  <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Product (launch 2019)
                </h2>
				<p style="font-size:18px;">Businesses pay us nothing, the first time they use our comparisons. After that they pay a small annual Subscription for ongoing access & updates on market news. We get a re-seller affiliate fee from Suppliers. Multi-lingual website, with customer services on the phone/chat & lots of ways to pay even spreading the cost over a year. Mobile apps coming soon.</p>
              </div>
            </div>

          </section>
        </div>
      </section>
      <section class="section_content container">
        <h2 class="text-center m-b-40"> Team</h2>
        <div class="row">
		<div class="col-md-2 col-sm-12">
            <div class="team_box" style="text-align:center;">
              <a href="#" data-toggle="modal" data-target="#team_modal_andrewmartin" style="text-align:center">
                <img src="<?php echo base_url();?>images/KBB Sep2018 BW 2.jpg" class="" style="text-align:center;height:140px;">
              </a>
              <a href="https://uk.linkedin.com/in/kiran-bhagotra-9a9455137" target="_blank">
                <h3 style="color:#ec8c0e;">Kiran Bhagotra</h3>
              </a>
              <h2 style="font-size:16px;">Founder &amp; CEO
              </h2>
              <a class="info_button" data-toggle="modal" data-target="#team_modal_andrewmartin" style="background-color:#ec8b0d !important;margin-top:-10px;">
                <i class="icon-ok-circled" style="font-size:35px;align:center;">
                </i>
              </a>
            </div>
            <div class="modal fade" id="team_modal_andrewmartin" tabindex="-1" role="dialog" aria-labelledby="team_modal_andrewmartin">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">
                        <span aria-hidden="true">
                          <i class="icon-scissors-1">
                          </i>
                        </span>
                        </button>
                      <h2 class="modal-title" id="myModalLabel">Kiran Bhagotra</h2>
                      </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-xs-4">
                          <img src="<?php echo base_url();?>images/KBB Sep2018 BW 2.jpg" class="img-responsive">
                        </div>
                        <div class="col-xs-8">
                          <h3 class="m-t-5">Founder &amp; CEO
                          </h3>
                          <p>20+ yrs Sales/Operations  </p>
                          <p>Ex-govt, Industry, Investments </p>
                          <p>3 prior start-ups </p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close                
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

			<div class="col-md-2 col-sm-12">
				<div class="team_box" style="text-align:center;">
				  <a href="#" data-toggle="modal" data-target="#team_modal_nickbray" style="text-align:center">
					<img src="<?php echo base_url();?>images/nick bray1.jpg" class="" style="text-align:center;height:140px;">
				  </a>
				  <a href="https://www.linkedin.com/in/nick-bray/" target="_blank">
					<h3 style="color:#ec8c0e;">Nick Bray CBE</h3>
				  </a>
				  <h2 style="font-size:16px;">COO
				  </h2>
				  <a class="info_button" data-toggle="modal" data-target="#team_modal_nickbray" style="background-color:#ec8b0d !important;margin-top:-10px;">
					<i class="icon-ok-circled" style="font-size:35px;align:center;">
					</i>
				  </a>
				</div>
				<div class="modal fade" id="team_modal_nickbray" tabindex="-1" role="dialog" aria-labelledby="team_modal_nickbray">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">
							<span aria-hidden="true">
							  <i class="icon-scissors-1">
							  </i>
							</span>
							</button>
						  <h2 class="modal-title" id="myModalLabel">Nick Bray CBE</h2>
						  </div>
						<div class="modal-body">
						  <div class="row">
							<div class="col-xs-4">
							  <img src="<?php echo base_url();?>images/nick bray1.jpg" class="img-responsive">
							</div>
							<div class="col-xs-8">
							  <h3 class="m-t-5">COO
							  </h3>
							  <p>30+ yrs Strategy/Operations</p>
							  <p>Special Advisor to Security & Defence businesses</p>
							  <p>Ex-Royal Air Force, Defence & Security</p>
							</div>
						  </div>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">
							Close                
						  </button>
						</div>
					  </div>
					</div>
				  </div>
				</div>

		<!--		<div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_simonhopper">
                      <img src="<?php //echo base_url();?>images/simonhopper.jpg" class="" style="text-align:center;height:140px;">
                    </a>
                    <a href="https://www.linkedin.com/in/simonhopperaca/" target="_blank">
                      <h3 style="color:#ec8c0e;">Simon Hopper FCA
                      </h3>
                    </a>
                    <h2 style="font-size:16px;">CFO UK (Outsourced)
                    </h2>
                    <a class="info_button" data-toggle="modal" data-target="#team_modal_simonhopper" style="background-color:#ec8b0d !important;margin-top:-10px;">
                      <i class="icon-ok-circled" style="font-size:35px;align:center;">
                      </i>
                    </a>
                  </div>
                  <div class="modal fade" id="team_modal_simonhopper" tabindex="-1" role="dialog" aria-labelledby="team_modal_simonhopper" >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <span aria-hidden="true">
                                <i class="icon-scissors-1">
                                </i>
                              </span>
                              </button>
                            <h2 class="modal-title" id="myModalLabel">Simon Hopper FCA
                            </h2>
                            </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xs-4">
                                <img src="<?php// echo base_url();?>images/simonhopper.jpg" class="img-responsive">
                              </div>
                              <div class="col-xs-8">
                                <h3 class="m-t-5">CFO UK (Outsourced)
                                </h3>
                                <p>20+ yrs Accounting, Tax, Compliance
                                </p>
                                <p>Supported by team of 5+ 
                                </p>
                                <p>Partner of own SMB practice
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Close                
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>-->

				  <div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_paulfinnigan1">
                      <img src="<?php echo base_url();?>images/team-5.png" class=""  style="text-align:center;height:140px;">
                    </a>
                    <a href="https://uk.linkedin.com/in/profkevincurran" target="_blank">
                      <h3 style="color:#ec8c0e;">Prof. Kevin Curran
                      </h3>
                    </a>
                    <h2 style="font-size:16px;">Advisor (Technical)
                    </h2>
                    <a class="info_button" data-toggle="modal" data-target="#team_modal_paulfinnigan1"  style="background-color:#ec8b0d !important;margin-top:-10px;">
                      <i class="icon-ok-circled" style="font-size:35px;align:center;">
                      </i>
                    </a>
                  </div>
                  <div class="modal fade" id="team_modal_paulfinnigan1" tabindex="-1" role="dialog" aria-labelledby="team_modal_paulfinnigan">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <i class="icon-scissors-1">
                              </i>
                            </span>
                          </button>
                          <h2 class="modal-title" id="myModalLabel">Professor Kevin Curran
                          </h2>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-xs-4">
                              <img src="<?php echo base_url();?>images/team-5.png" class="img-responsive">
                            </div>
                            <div class="col-xs-8">
                              <h3 class="m-t-5">Advisor (Technical)
                              </h3>
                              <p>20+ yrs Coding (Accred.)
                              </p>
                              <p>Expert/Author/Spokesperson
                              </p>
                              <p>3 Start-ups (Patented)
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close                
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

				<div class="col-md-2 col-sm-12" >
				  <div class="team_box" style="text-align:center;">
					<a href="#" data-toggle="modal" data-target="#team_modal_roshsaran">
					  <img src="<?php echo base_url();?>images/team-2.jpg" class="" style="text-align:center;height:140px;">
					</a>
					<h3 style="color:#333;">Technical (Outsourced)
					</h3>
					<!--<h2 style="font-size:16px;">CTO</h2>-->
					<a class="info_button" data-toggle="modal" data-target="#team_modal_roshsaran" style="background-color:#ec8b0d !important;margin-top:-10px;">
					  <i class="icon-ok-circled" style="font-size:35px;align:center;">
					  </i>
					  </i>
					</a>
				</div>
				<div class="modal fade" id="team_modal_roshsaran" tabindex="-1" role="dialog" aria-labelledby="team_modal_roshsaran">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">
							<span aria-hidden="true">
							  <i class="icon-scissors-1">
							  </i>
							</span>
							</button>
						  <h2 class="modal-title" id="myModalLabel">Technical (Outsourced)
						  </h2>
						  </div>
						<div class="modal-body">
						  <div class="row">
							<div class="col-xs-4">
							  <img src="<?php echo base_url();?>images/team-2.jpg" class="img-responsive">
							</div>
							<div class="col-xs-8">
							  <!--<h3 class="m-t-5">CTO</h3>-->
							  <p>1+ teams of Developers (5+)</p>
							  <p>Re-sellers (1+ with 50+ staff between them)</p>
							  
							</div>
						  </div>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">
							Close                
						  </button>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				
				<div class="col-md-2 col-sm-12" >
              <div class="team_box" style="text-align:center;">
                <a href="#" data-toggle="modal" data-target="#team_modal_johnreilly">
                  <img src="<?php echo base_url();?>images/team-2.jpg" class="" style="text-align:center;height:140px;">
                </a>
                  <h3 style="color:#333;">Customer Service (Outsourced)</h3>
				  <!--<h2 style="font-size:16px;">Advisor (Marketing)</h2>-->
                <a class="info_button" data-toggle="modal" data-target="#team_modal_johnreilly" style="background-color:#ec8b0d !important;margin-top:-10px;">
                  <i class="icon-ok-circled" style="font-size:35px;align:center;">
                  </i>
                </a>
              </div>
              <div class="modal fade" id="team_modal_johnreilly" tabindex="-1" role="dialog" aria-labelledby="team_modal_johnreilly">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                          <span aria-hidden="true">
                            <i class="icon-scissors-1">
                            </i>
                          </span>
                          </button>
                        <h2 class="modal-title" id="myModalLabel">Customer Service (Outsourced)
                        </h2>
                        </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-xs-4">
                            <img src="<?php echo base_url();?>images/team-2.jpg" class="img-responsive">
                          </div>
                          <div class="col-xs-8">
                            <!--<h3 class="m-t-5">Advisor (Marketing)</h3>-->
                            <p>Customer service team (2+)</p>
							<p>Available Mon-Fri 9am-5pm UK time</p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Close                
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
		</div>
		<div class="row">
			  <div class="col-md-2 col-sm-12">
                <div class="team_box" style="text-align:center;">
                  <a href="#" data-toggle="modal" data-target="#team_modal_paulfinnigan">
                    <img src="<?php echo base_url();?>images/team-4.png" class="" style="text-align:center;height:140px;">
                  </a>
                  <a href="https://www.linkedin.com/in/omar-al-busaidy-229102a/" target="_blank">
                    <h3 style="color:#ec8c0e;">Omar Al-Busaidy
                    </h3>
                  </a>
                  <h2 style="font-size:16px;">Advisor (Exporting)
                  </h2>
                  <a class="info_button" data-toggle="modal" data-target="#team_modal_paulfinnigan" style="background-color:#ec8b0d !important;margin-top:-10px;">
                    <i class="icon-ok-circled" style="font-size:35px;align:center;">
                    </i>
                  </a>
                </div>
                <div class="modal fade" id="team_modal_paulfinnigan" tabindex="-1" role="dialog" aria-labelledby="team_modal_paulfinnigan">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">
                            <span aria-hidden="true">
                              <i class="icon-scissors-1">
                              </i>
                            </span>
                            </button>
                          <h2 class="modal-title" id="myModalLabel">Omar Al-Busaidy
                          </h2>
                          </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-xs-4">
                              <img src="<?php echo base_url();?>images/team-4.png" class="img-responsive" >
                            </div>
                            <div class="col-xs-8">
                              <h3 class="m-t-5">Advisor (Exporting)
                              </h3>
                              <p>10+ yrs Exporting
                              </p>
                              <p>Serial Entrepreneur
                              </p>
                              <p>Author/Influencer
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close                
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

				<div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_malcolm">
                      <img src="<?php echo base_url();?>images/Picture2.jpg" class="" style="text-align:center;height:140px;">
                    </a>
                    <a href="https://uk.linkedin.com/in/malcolm-warr-9a5908a" target="_blank">
                      <h3 style="color:#ec8c0e;">Malcolm Warr OBE
                      </h3>
                    </a>
                    <h2 style="font-size:16px;">Advisor (Channels)
                    </h2>
                    <a class="info_button" data-toggle="modal" data-target="#team_modal_malcolm" style="background-color:#ec8b0d !important;margin-top:-10px;">
                      <i class="icon-ok-circled" style="font-size:35px;align:center;">
                      </i>
                    </a>
                  </div>
                  <div class="modal fade" id="team_modal_malcolm" tabindex="-1" role="dialog" aria-labelledby="team_modal_malcolm" >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <span aria-hidden="true">
                                <i class="icon-scissors-1">
                                </i>
                              </span>
                              </button>
                            <h2 class="modal-title" id="myModalLabel">Malcolm Warr OBE
                            </h2>
                            </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xs-4">
                                <img src="<?php echo base_url();?>images/team-6.png" class="img-responsive">
                              </div>
                              <div class="col-xs-8">
                                <h3 class="m-t-5">Advisor (Channels)
                                </h3>
                                <p>30+ yrs Resilience/Cyber
                                </p>
                                <p>Special Advisor to Federation of Small Businesses
                                </p>
                                <p>Ex-Navy, Defence
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Close                
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  	  <div class="col-md-2 col-sm-12">
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_shielacobourne">
                      <img src="<?php echo base_url();?>images/team-2.png" class="" style="text-align:center;height:140px;">
                    </a>
                    <a href="javascript:void(0);" target="_blank">
                      <h3 style="color:#ec8c0e;">Dr Sheila Cobourne 
                      </h3>
                    </a>
                    <h2 style="font-size:16px;">Advisor (Technical)
                    </h2>
                    <a class="info_button" data-toggle="modal" data-target="#team_modal_shielacobourne" style="background-color:#ec8b0d !important;margin-top:-10px;">
                      <i class="icon-ok-circled" style="font-size:35px;align:center;">
                      </i>
                    </a>
                  </div>
                  <div class="modal fade" id="team_modal_shielacobourne" tabindex="-1" role="dialog" aria-labelledby="team_modal_shielacobourne" >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <span aria-hidden="true">
                                <i class="icon-scissors-1">
                                </i>
                              </span>
                              </button>
                            <h2 class="modal-title" id="myModalLabel">Dr Sheila Cobourne 
                            </h2>
                            </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xs-4">
                                <img src="<?php echo base_url();?>images/team-2.png" class="img-responsive">
                              </div>
                              <div class="col-xs-8">
                                <h3 class="m-t-5">Advisor (Technical)
                                </h3>
                                <p>20+ yrs Systems Development  
                                </p>
                                <p>ex-BP/Banking/Telco developer
                                </p>
                                <p>Cyber Consultancy, Lecturer
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Close                
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

				  <div class="col-md-2 col-sm-12" >
					  <div class="team_box" style="text-align:center;">
						<a href="#" data-toggle="modal" data-target="#team_modal_johnreilly">
						  <img src="<?php echo base_url();?>images/team-2.jpg" class="" style="text-align:center;height:140px;">
						</a>
						  <h3 style="color:#333;">Operations Global (Outsourced)</h3>
						  <!--<h2 style="font-size:16px;">Advisor (Marketing)</h2>-->
						<a class="info_button" data-toggle="modal" data-target="#team_modal_global_outsurce" style="background-color:#ec8b0d !important;margin-top:-10px;">
						  <i class="icon-ok-circled" style="font-size:35px;align:center;">
						  </i>
						</a>
					  </div>
					  <div class="modal fade" id="team_modal_global_outsurce" tabindex="-1" role="dialog" aria-labelledby="team_modal_global_outsurce">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
								  <span aria-hidden="true">
									<i class="icon-scissors-1">
									</i>
								  </span>
								  </button>
								<h2 class="modal-title" id="myModalLabel">Operations Global (Outsourced)
								</h2>
								</div>
							  <div class="modal-body">
								<div class="row">
								  <div class="col-xs-4">
									<img src="<?php echo base_url();?>images/team-2.jpg" class="img-responsive">
								  </div>
								  <div class="col-xs-8">
									<!--<h3 class="m-t-5">Advisor (Marketing)</h3>-->
									<p>All-in-one Legal, Accounting, Tax<br>Team of 5+<br>Multi-practice teams</p>
								  </div>
								</div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
								  Close                
								</button>
							  </div>
							</div>
						  </div>
						</div>
					  </div>

				

				  <div class="col-md-2 col-sm-12" >
                  <div class="team_box" style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#team_modal_marketing">
                      <img src="<?php echo base_url();?>images/team-2.jpg" class="" style="text-align:center;height:140px;">
                    </a>
                      <h3 style="color:#333;">Marketing (Outsourced)</h3>
              <!--<h2 style="font-size:16px;">Advisor (Marketing)</h2>-->
                    <a class="info_button" data-toggle="modal" data-target="#team_modal_marketing" style="background-color:#ec8b0d !important;margin-top:-10px;">
                      <i class="icon-ok-circled" style="font-size:35px;align:center;">
                      </i>
                    </a>
                  </div>
                  <div class="modal fade" id="team_modal_marketing" tabindex="-1" role="dialog" aria-labelledby="team_modal_marketing">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                              <span aria-hidden="true">
                                <i class="icon-scissors-1">
                                </i>
                              </span>
                              </button>
                            <h2 class="modal-title" id="myModalLabel">Marketing (Outsourced)
                            </h2>
                            </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-xs-4">
                                <img src="<?php echo base_url();?>images/team-2.jpg" class="img-responsive">
                              </div>
                              <div class="col-xs-8">
                                <!--<h3 class="m-t-5">Advisor (Marketing)</h3>-->
                                <p>Students from Ulster University Business Schools & Hult University Business School (through Pitch@Palace) who have included Karin Andersson (<a href="https://www.linkedin.com//in/anderssonkarin9" target="_blank">https://www.linkedin.com//in/anderssonkarin9</a>), Brecht Van Acker (<a href="https://www.linkedin.com//in/brecht-van-acker" target="_blank">https://www.linkedin.com//in/brecht-van-acker</a>), Katie Lemon (<a href="https://www.linkedin.com/in/katie-lemon-93774a108/" target="_blank">https://www.linkedin.com/in/katie-lemon-93774a108/</a>), Alison McMurtry (<a href="https://www.linkedin.com/in/alison-mcmurtry-771632129/" target="_blank">https://www.linkedin.com/in/alison-mcmurtry-771632129/</a>) & Ashleigh McCorry (<a href="http://linkedin.com/in/ashleigh-mccorry-795200104" target="_blank">http://linkedin.com/in/ashleigh-mccorry-795200104</a>)</p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                              Close                
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
			</section>

			
            <section class="awards" style="background:#fff;margin-top:50px;">  
			  <div class="container">
			  <h2 class="text-center m-b-40"> Partners / Investors</h2>
                <div class="row" style="margin-top:-6px;">
				 <div class="col-md-12"> 

				 	  <div class="col-md-2" style="text-align:center;">
						 <p><a href="https://www.xero.com" target="_blank"> <img src="<?php echo base_url();?>images/xero.png" style="height:50px;margin-top:0px;"></a></p>
					  </div>
					  
					  <div class="col-md-2" style="text-align:center;">
						 <p><a href="http://www.sage.com" target="_blank"> <img src="<?php echo base_url();?>images/investor-01.png" style="height:30px;margin-top:0px;"></a></p>
					  </div>
					   <div class="col-md-2" style="text-align:center;">
						 <p><a href="https://www.oracle.com/partners" target="_blank"> <img src="<?php echo base_url();?>images/oracle-logosm.jpg" style="height:50px;margin-top:0px;"></a></p>
					  </div>

					  <div class="col-md-2" style="text-align:center;">
						<p><a href="https://aws.amazon.com/partners" target="_blank"> <img src="<?php echo base_url();?>images/Picture1.png" style="height:55px;margin-top:0px;"></a></p>
					  </div>
					 <!-- <div class="col-md-2" style="text-align:center;">
						<p><a href="https://www.investni.com" target="_blank"><img src="<?php// echo base_url();?>images/investor-03.png" style="height:65px;margin-top:0px;"></a></p>
					  </div>-->
					  <div class="col-md-2" style="text-align:center;">
							<p><a href="https://cyberexchange.uk.net" target="_blank"><img src="<?php echo base_url();?>images/investor-04.png" style="height:25px;margin-top:0px;"></a></p>
					  </div>
					   <div class="col-md-2" style="text-align:center;">
						<p><a href="https://cyber-center.org" target="_blank"><img src="<?php echo base_url();?>images/investor-06.png" style="height:50px;margin-top:0px;"></a></p>
					  </div>
					 
				  </div>

				  <div class="col-md-12">
				      
					   <div class="col-md-2" style="text-align:center;">
						<p><a href="https://www.gan.co" target="_blank"> <img src="<?php echo base_url();?>images/investor-07.png" style="height:45px;margin-top:0px;"></a></p>
					  </div>
					  <div class="col-md-2" style="text-align:center;">
						<p><a href="https://technation.io/" target="_blank"> <img src="<?php echo base_url();?>images/technation_io.png" style="height:28px;margin-top:10px;"></a></p>
					</div>
					<div class="col-md-2" style="text-align:center;">
						<p><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url();?>images/london and partners.png" style="height:70px;margin-top:0px;"></a></p>
				    </div>
				    
				    	<div class="col-md-2" style="text-align:center;">
						<p><a href="javascript:void(0);" target="_blank"><img src="<?php echo base_url();?>images/pitch palace.png" style="height:70px;margin-top:0px;"></a></p>
				    </div>
				    
				    <div class="col-md-2" style="text-align:center;">
						 <p><a href="http://www.hutzero.co.uk" target="_blank"><img src="<?php echo base_url();?>images/investor-09.png" style="height:25px;margin-top:0px;"></a></p>
					  </div>
				    <div class="col-md-2" style="text-align:center;">
						 <p><a href="https://inogesis.com" target="_blank"><img src="<?php echo base_url();?>images/investor-10.png" style="height:45px;margin-top:0px;"></a></p>
					  </div>
					  
				  </div>

				  <div class="col-md-12">
				      
					   <div class="col-md-2" style="text-align:center;">
						<p><a href="https://www.investni.com" target="_blank"><img src="<?php echo base_url();?>images/investor-03.png" style="height:65px;margin-top:0px;"></a></p>
					  </div>
					   <div class="col-md-2" style="text-align:center;">
						<p><a href="http://www.techlondonadvocates.org.uk/" target="_blank"> <img src="<?php echo base_url();?>images/investor-13.png" style="height:63px;margin-top:0px;"></a></p>
					  </div>
					  
					    <div class="col-md-2" style="text-align:center;">
						 <p><a href="https://fiftyfiftypledge.com/" target="_blank"> <img src="<?php echo base_url();?>images/investor-14.png" style="height:60px;"></a></p>
					  </div>
					  
				      <!--<div class="col-md-2" style="text-align:center;">
						 <p><a href="https://www.digicatapult.org.uk" target="_blank"> <img src="<?php //echo base_url();?>images/investor-08.png" style="height:30px;margin-top:10px;"></a></p>
					  </div>-->
					  
					  
					  <div class="col-md-2" style="text-align:center;">
						<p><a href="https://techtalentcharter.co.uk" target="_blank"><img src="<?php echo base_url();?>images/investor-11.png" style="height:30px;margin-top:0px;"></a></p>
					  </div>
					  <div class="col-md-2" style="text-align:center;">
						<p><a href="https://aws-restart.com" target="_blank"> <img src="<?php echo base_url();?>images/investor-12.png" style="height:50px;margin-top:0px;"></a></p>
					  </div>
					 
					
					
					<!--<div class="col-md-2" style="text-align:center;">
						<p><a href="https://www.thetechpartnership.com" target="_blank"><img src="<?php //echo base_url();?>images/investor-05.png" style="height:40px;margin-top:10px;"></a></p>
				    </div>-->

				
					

				 </div>

				 </div>
        </div>
      </section>

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

			  <section class="awards" style="background:#fff;margin-top:30px;">
			    <div class="container">
					<h2 class="text-center m-b-40">Awards</h2>

					<div class="row" style="margin-top:20px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/Picture14.jpg" style="height:72px;">
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">WINNER Best Security StartUp</a></p>
							</div>
							
							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/security-fire-excellence-award.jpg" style="height:36px;">
								<p style="margin-top:37px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">WINNER <a href="https://www.securityandfireawards.com/winners-2018" target="_blank" style="font-weight:bold;color:#4a8522">Cybersecurity Project of Yr</a> & <a href="https://www.securityandfireawards.com/winners-2018/finalists-2018/" target="_blank" style="font-weight:bold;color:#4a8522">Security Project of Yr (Finalist)</a></p>
							</div>
							<!---------------------------------->
							<div class="col-md-2" style="margin-top:-25px;">
								<img src="<?php echo base_url();?>images/awards/innovation.jpg" style="height:100px;">
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">WINNER Cybersecurity Comparison Site of the Year</a></p>
							</div>
							
							<div class="col-md-2">
								<img src="<?php echo base_url();?>images/awards/technation rising star.png" style="height:60px;">
								<p style="margin-top:16px;"><a href="https://youtu.be/NvNG9Ro74G8" target="_blank" style="font-weight:bold;color:#4a8522">WINNER BDO Drive's Creative Award for Lego Movie "May The ProtectBox Be With You"</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-25px;">
								<img src="<?php echo base_url();?>images/awards/7th british indian award new.png" style="height:100px;">
								<p><a href="https://oceanicconsultingblog.wordpress.com/2019/07/26/winners-for-the-7th-british-indian-awards-2019-are-revealed/" target="_blank" style="font-weight:bold;color:#4a8522">WINNER 7th British Indian Awards' Creative Entrepreneur of Year</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-15px;">
								<img src="<?php echo base_url();?>images/awards/wis1.png" style="height:90px;">
								<p><a href="http://www.ifsecglobal.com/uncategorized/women-in-security-awards-2019-winners-revealed/amp/" target="_blank" style="font-weight:bold;color:#4a8522">WINNER Women in Security Awards' Technical Award</a></p>
							</div>
							<!---------------------------------->

						</div>
					</div>

					<div class="row" style="margin-top:30px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/women in it awards.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="https://www.information-age.com/women-in-it-awards-2019-finalists-123477952/" target="_blank" style="font-weight:bold;color:#4a8522">Editor's Choice Award (Finalist)</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-38px;">
								<img src="<?php echo base_url();?>images/awards/Techpreneurs Awards for Women (Runner up).png" style="height:110px;">
								<p><a href="http://techpreneurs.co.uk/" style="font-weight:bold;color:#4a8522" target="_blank">Techpreneurs Awards for Women (Runner up)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture1.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="http://www.nationalbusinessawards.co.uk/2018-finalists" target="_blank" style="font-weight:bold;color:#4a8522">National BusinessAawards’ Duke of York New Entrepreneur of Yr (Finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/british-small-business-award.png" style="height:36px;"></p>
								<p style="margin-top:37px;"><a href="https://smallbusiness.co.uk/british-small-business-awards-2018-final-shortlist-released-2545465/" target="_blank" style="font-weight:bold;color:#4a8522">E-commerce Platform & Small Business Advocate of Yr (Finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture55.jpg" style="height:27px;"></p>
								<p style="margin-top:44px;"><a href="https://www.greatbritishentrepreneurawards.com/news/2018-finalists-edinburgh/" target="_blank" style="font-weight:bold;color:#4a8522">Great British Entrepreneur Awards’ Entrepreneurial Spirit of Yr (Finalist)</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/bmwi.jpg" style="height:40px;margin-top:-10px;margin-left:11px;"></p>
								<p  style="margin-top:40px;"><a href="http://techfounderawards.uk/news/2018-shortlist-bmw-uk-tech-founder-awards/" target="_blank" style="font-weight:bold;color:#4a8522">Regtech Founder of Yr (Finalist)</a></p>
							</div>

							

							
						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/computer-weekly.png" style="height:25px;"></p>
								<p  style="margin-top:40px;"><a href="https://www.computerweekly.com/news/252444636/Most-influential-women-in-UK-tech-the-2018-longlist" target="_blank"  style="font-weight:bold;color:#4a8522">Most Influential Women in UK Tech 2019 & 2018 (Longlist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture15.png" style="height:70px;"></p>
								<p  style="margin-top:-18px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Cyber Resilience Innovation of Year & Digital SME of the Year (Finalist)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture16.png" style="height:100px;margin-top:-24px;"></p>
								<p  style="margin-top:-24px;"><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">HRH Duke of York&acute;s Pitch@Palace 9.0 finalist (Top 5 in People&acute;s Choice Award)</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/digital_dna(1).png" style="height:50px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">E-Commerce Project of Yr & StartUpof Yr  Finalist</a></p>
							</div>

							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture17.png" style="height:51px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Business & Product Innovation (Area Finalist)</a></p>
							</div>
							<div class="col-md-2" style="margin-top:-21px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture18.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Security Champion (Finalist)</a></p>
							</div>

							

						</div>
					</div>

					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2" style="margin-top:-21px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture19.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">StartUp Founder (Finalist)</a></p>
							</div>
							
							<div class="col-md-2">
								<p><img src="<?php echo base_url();?>images/awards/Picture20.png" style="height:40px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Top10</a></p>
							</div>

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
								<p style="margin-top:-26px;"><img src="<?php echo base_url();?>images/awards/digital_dna.PNG" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							

							
						</div>
					</div>
					<div class="row" style="margin-top:40px;text-align:center;">
						<div class="col-md-12">
							<div class="col-md-2" style="margin-top:-26px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture24.png" style="height:70px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Finalist</a></p>
							</div>

							<div class="col-md-2" style="margin-top:-10px;">
								<p><img src="<?php echo base_url();?>images/awards/Picture25.png" style="height:50px;"></p>
								<p><a href="javascript:void(0);" style="font-weight:bold;color:#4a8522">Most Investible (2nd)</a></p>
							</div>

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
              </section>
				<P>&nbsp;</P>
                <!-- End feat home -->
                </main>
              <!-- End main -->
              <?php $this->load->view("common/footer");?>
              <!-- LayerSlider script files -->
			  <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
              </body>
            </html>