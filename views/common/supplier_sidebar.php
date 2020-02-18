
<?php
if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
?>
 <div class="col-md-3">
  <div class="box_style_1 hidden-xs rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 20px;position: fixed;width: 280px;">
	<div class="widget">
		<div class="widget" align="center" style="border-bottom:1px solid #CCC;margin-bottom:10px;">
			<!--<img class="img-circle" style="border:1px solid #cbdfef;" src="images/user.png" height="80">-->
			<h4 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['name']?></h4>
			<h5 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['email']?></h5>
		</div>
		<ul id="cat_nav">
			<li><a href="<?php echo base_url('dashboard');?>" style="color:#73859B;">Dashboard</a></li>
			<li><a href="<?php echo base_url('sales');?>" style="color:#73859B;"> Sales</a></li>
			<li><a href="<?php echo base_url('edit_solution');?>" style="color:#73859B;"> Solutions</a></li>
			<li><a href="<?php echo base_url('payments');?>" style="color:#73859B;"> Payments </a></li>
			<li><a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings</a></li>
		</ul>
	</div><!-- End widget -->
   </div>               
 </div>

<?php
}else{
?>
<div class="col-md-3">
  <div class="box_style_1 hidden-xs rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 20px;position: fixed;width: 280px;">
	<div class="widget">
		<div class="widget" align="center" style="border-bottom:1px solid #CCC;margin-bottom:10px;">
			<h4 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['name']?></h4>
			<h5 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['email']?></h5>
		</div>
		<ul id="cat_nav">
			<li><a href="<?php echo base_url('my_order');?>" style="color:#73859B;"> My Orders</a></li>
			<li><a href="<?php echo base_url('my_subscription');?>" style="color:#73859B;"> My Subscription</a></li>
			<li><a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings</a></li>
		</ul>
	</div><!-- End widget -->
   </div>               
 </div>
 <?php
	}
 ?>