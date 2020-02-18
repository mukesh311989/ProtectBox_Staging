<?php
	if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
?>
 <div class="col-md-3">
  <!--<div class="box_style_1 hidden-xs rounded_div affix" data-spy="affix" data-offset-top="200" data-offset-bottom="355" style="padding: 20px;position: fixed;width: 280px;">-->
  <div class="box_style_1 hidden-xs rounded_div">
	<div class="widget">
		<div class="widget" align="center" style="border-bottom:1px solid #CCC;margin-bottom:10px;">
			<h4 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['name']?></h4>
			<h5 style="color:#73859B;"><?php echo $this->session->userdata['logged_in']['email']?></h5>
		</div>
		<?php
		$ci =&get_instance();
	    $ci->load->model('admin_role_m');
		$get_admin_info = $ci->admin_role_m->fetch_admin($this->session->userdata['logged_in']['user_id']);
		if (sizeof($get_admin_info) < 1)
		{
		?>
		<ul id="cat_nav">
			<li><a href="<?php echo base_url('admin_dashboard');?>" style="color:#73859B;"> Dashboard</a></li>
			<li><a href="<?php echo base_url('view_all_staff');?>" style="color:#73859B;"> Staff Admin</a></li>
			<li><a href="<?php echo base_url('view_sme');?>" style="color:#73859B;"> SMB</a></li>
			<li><a href="<?php echo base_url('view_suppliers');?>" style="color:#73859B;"> Suppliers</a></li>
			<li><a href="<?php echo base_url('view_all_services');?>" style="color:#73859B;"> Services</a></li>
			<li><a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> Orders</a></li>
			<li><a href="<?php echo base_url('ixcg_pending_import');?>" style="color:#73859B;"> IXCG Pending Import</a></li>
			<li><a href="<?php echo base_url('view_all_import_ixcg');?>" style="color:#73859B;"> IXCG Publish Products</a></li>
			<!--<li><a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> IXCG Live Products</a></li>-->
		</ul>
		<?php
		}else{
		?>
		<ul id="cat_nav">
			<li><a href="<?php echo base_url('admin_dashboard');?>" style="color:#73859B;"> Dashboard</a></li>
			
			<?php
			if($get_admin_info->manage_sme !='')
			{
			?>
				<li><a href="<?php echo base_url('view_sme');?>" style="color:#73859B;"> SME</a></li>
			<?php
			}
			if($get_admin_info->manage_supllier !='')
			{
			?>
				<li><a href="<?php echo base_url('view_suppliers');?>" style="color:#73859B;"> Suppliers</a></li>
				<li><a href="<?php echo base_url('view_all_services');?>" style="color:#73859B;"> Services</a></li>
				
			<?php
			}
			if($get_admin_info->manage_order !='')
			{
			?>
				<li><a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> Orders</a></li>
			<?php
			}
			?>
		</ul>
		<?php
		}
		?>
	</div><!-- End widget -->
   </div>               
 </div>
 <?php
}
 ?>

 