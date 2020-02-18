<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Forgotten Password | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
    <link href="<?php echo base_url();?>css/date_picker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.switch.css" rel="stylesheet">
  </head>
  <body>
    <div id="load" style=""></div>
    <!-- Mobile menu overlay mask -->
    <!-- Header================================================== -->
    <?php $this->load->view("common/header");?>
    <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Forgotten Password
        </div>
      </div>
    </section>
    <!-- End section -->
    <main>    
      <div class="container margin_60">
        <div class="row">
          <div class="col-md-6 col-md-offset-3" style="padding: 10px 25px 10px;border: 1px solid #CCC;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;background:#f5f5f5">
            <?php
              if($this->session->flashdata('success')){
            ?>
              <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
            <?php
              }else if($this->session->flashdata('failed')){
            ?>
			  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
			<?php
			}else if($this->session->flashdata('failed2')){
			?>
			  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed2');?></strong> </div>
			<?php
			}
			?>
            <form id="quotation" action="<?php echo base_url('forgetpass/send_mail');?>" method="POST">
              <div class="row" style="margin-top:20px;">
                <div class="col-md-10 col-sm-10 col-md-offset-1">
                  <div class="form-group">
                    <label>Email Address
                    </label>
                    <input type="email" class="form-control required" id="email_quote" name="email">
                  </div>
                </div>
              </div>

              <!--<div class="col-md-12 col-sm-12">
                <div class="form-group col-md-offset-3">
                  <input type="checkbox" name="phone_quote">
                  <label> I acknowledge the 
                    <a href="terms.php">Terms and Conditions
                    </a>.
                  </label>
                </div>
              </div>-->

              <div class="col-md-12 col-sm-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg col-md-offset-5">Submit
                  </button>
                </div>
              </div>
              <!--End step -->
            </form>
          </div>
          <!-- End col-md-3 -->
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
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.js">
    </script>
    <script>
      $('.datepicker').datepicker();
      $("#quotation").validate();
    </script>
	<script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
  </body>
</html>
