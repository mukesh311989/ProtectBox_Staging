<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Contact Us | ProtectBox</title>
    <!-- Favicons-->
    <?php $this->load->view("common/metalinks");?>
	<style>
	.rounded_div {
			border:1px solid #CCC;
			box-shadow: 0px 0px 3px #bfbfbf;
			border-radius:5px;
		}
	</style>
</head>

<body>
	<div id="load"></div> <!-- Mobile menu overlay mask -->
	<!-- Header================================================== -->
	<?php $this->load->view("common/header");?>
	 <section id="sub_header" style="background:#f5f5f5;box-shadow:inset 0 1px 10px 1px rgba(0,0,0,.41);">
      <div class="container">
        <div class="main_title" style="background:none;text-align:center;font-size:40px;color:#000;bottom:30px;">
          Contact Us
        </div>
      </div>
    </section>
	
      <main>
        <div class="container margin_60">
        	<div class="row">
                
            <div class="col-md-7 col-md-offset-3 rounded_div" style="padding: 10px 25px 10px;border: 1px solid #CCC;box-shadow: 0px 0px 3px #bfbfbf;border-radius: 5px;background:#f5f5f5">
			<?php
              if($this->session->flashdata('success')){
            ?>
              <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
            <?php
              }else if($this->session->flashdata('failed')){
            ?>
              <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
            <?php
              }
			?>
                <form name="contactzzzz" method="POST" action="<?php echo base_url("contact/send_mail");?>">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" name="first_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email_id" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" name="phone_number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea rows="5" name="message_info" class="form-control" style="height:100px;"></textarea>
                            </div>
                        </div>
                    </div>

					<!-- <p>&nbsp;</p>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6" style="margin-top:-30px;">
											<img src="<?php echo base_url();?>Contact/captcha/" style="height:50px;width:auto;text-align:center;"/><br/>
											<label>Enter the text in the box</label>
										</div>
										<div class="col-md-6">
											 <div class="form-group">
												<input type="text" name="captcha" class="form-control" >
											 </div>
									   </div>
									</div>
								</div>
							 </div>
						 </div>
					</div> -->
					<div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg col-md-offset-5"> Submit </button>
                            </div>
                        </div>
                    </div>
                </form>                    
           </div><!-- End col-md-9 -->
		</div><!-- End row -->
	</div><!-- End container -->
</main><!-- End main --> 
	
	<?php $this->load->view("common/footer");?>
	<!-- Form validation -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	 <script src="<?php echo base_url();?>js/jquery.validate.js"></script>
	 <script>
		$(function() {
		  $("form[name='contactzzzz']").validate({
			rules: {
			  first_name: "required",
			  last_name: "required",
			  email_id : "required",
			  phone_number : "required",
			  message_info : "required",
			},
			messages: {
			  first_name: "This field is required",
			  last_name: "This field is required",
			  email_id : "This field is required",
			  phone_number : "This field is required",
			  message_info : "This field is required",
			},
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		});	
	 </script>
	 <script> window.fcWidget.init({ token: "2f7024f1-229c-4632-b1aa-9c0acb300c6e", host: "https://wchat.freshchat.com" });</script>
</body>
</html>