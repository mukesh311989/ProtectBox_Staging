<header>
  <!-- End top line-->

  <div class="container">
    <div class="row" style="margin-top:10px;margin-bottom:10px;">
      <div class="col-xs-3">
        <div id="logo">
          <a href="<?php echo base_url('/');?>">
            <img src="<?php echo base_url();?>images/logo.png" style="height:50px;" alt="" data-retina="true">
          </a>
        </div>
      </div>
      <nav class="col-xs-9">
        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);" onclick="myFunction();">
          <span>Menu mobile</span>
        </a>
        <div class="main-menu" id="mobile_menuzz">
          
		  <div id="header_menu">
            <img src="<?php echo base_url();?>images/logo.png" style="width:50%;" alt="" data-retina="true">
          </div>
          
		  <a href="javascript:void(0);" class="open_close" id="close_in" onclick="myFunction();"><img src="<?php echo base_url();?>images/close.png" style="height:50px;"></a>

          <ul>
            <li>
              <a href="<?php echo base_url('/');?>" style="font-size:1.0em;">Home
              </a>
            </li>
            <!--<?php
				if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != NULL && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
			?>
            <li>
              <a href="<?php echo base_url('questionaire');?>" style="font-size:1.0em;">Business
              </a>
            </li>
            <?php
				}else if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != NULL && $this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
			?>
            <li>
              <a href="<?php echo base_url('error_page');?>" style="font-size:1.0em;">Business
              </a>
            </li>
            <?php
			}else{
			?>
            <li>
              <a href="<?php echo base_url('login');?>" style="font-size:1.0em;">Business
              </a>
            </li>
            <?php
			}

			if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != NULL && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
			?>
            <li>
              <a href="<?php echo base_url('edit_solution');?>"style="font-size:1.0em;">Suppliers
              </a>
            </li>
            <?php
			}else if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != NULL && $this->session->userdata['logged_in']['user_type'] != "Supplier"){
			?>
            <li>
              <a href="<?php echo base_url('error_page');?>"style="font-size:1.0em;">Suppliers
              </a>
            </li>
            <?php
			}else{
			?>
            <li>
              <a href="<?php echo base_url('login');?>"style="font-size:1.0em;">Suppliers
              </a>
            </li>
            <?php
			}
			?>-->
            <li>
              <a href="<?php echo base_url('about');?>" style="font-size:1.0em;">About
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('contact');?>"style="font-size:1.0em;">Contact Us
              </a>
            </li>
           <?php
			if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != NULL){
				if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
				?>
					<li class="hidden-sm hidden-md hidden-lg ">
					  <a href="<?php echo base_url('my_order');?>"style="font-size:1.0em;">Orders
					  </a>
					</li >
					<?php
					$user_id = $this->session->userdata['logged_in']['user_id'];
					$ci =&get_instance();
					$ci->load->model('questionaire_m');
					$ci->load->model('login_m');
					$get_basic = $ci->questionaire_m->row_check($user_id);
					$get_tech = $ci->questionaire_m->tech_row($user_id);
					$get_non_tech = $ci->questionaire_m->tech_non_tech($user_id);
					$get_budget = $ci->questionaire_m->tech_budget($user_id);
					$get_orders = $ci->login_m->smb_orders($user_id);

					if($get_basic < 1)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionaire');?>"style="font-size:1.0em;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech < 1)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionaire');?>"style="font-size:1.0em;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech < 1)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionaire_tech_info');?>"style="font-size:1.0em;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget < 1)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionaire_nontech_info');?>"style="font-size:1.0em;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders < 1)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('results');?>"style="font-size:1.0em;"> Solutions
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders > 0)
					{
						?>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionaire');?>"style="font-size:1.0em;"> Questionnaire
							  </a>
							</li>
							<li class="hidden-sm hidden-md hidden-lg ">
							  <a href="<?php echo base_url('questionniare_results');?>"style="font-size:1.0em;"> Subscription
							  </a>
							</li>
						<?php
					}
					?>
					<li class="hidden-sm hidden-md hidden-lg ">
					  <a href="<?php echo base_url('profile');?>"style="font-size:1.0em;">Settings
					  </a>
					</li>
				<?php
				}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "delegate"){
				?>
				<li class="hidden-sm hidden-md hidden-lg ">
                  <a href="<?php echo base_url('delegate_questionaire');?>" style="font-size:1.0em;"> Informations
                  </a>
                </li>
				<?php
					$ci =&get_instance();
					$ci->load->model('delicate_login_m');
					$get_del_info = $ci->delicate_login_m->get_del_info($this->session->userdata['logged_in']['user_id']);
					if(sizeof($get_del_info) > 0)
					{
						if($get_del_info->user_type == 'Small and medium business'){
					?>
						<li class="hidden-sm hidden-md hidden-lg ">
						  <a href="<?php echo base_url('switch_user');?>" style="font-size:1.0em;"> Switch back to SMB
						  </a>
						</li>
					<?php
						}else if($get_del_info->user_type == 'Supplier'){
					?>
						<li class="hidden-sm hidden-md hidden-lg ">
						  <a href="<?php echo base_url('switch_user');?>" style="font-size:1.0em;"> Switch back to Supplier
						  </a>
						</li>
					<?php
						}
					}
				?>
				
				<li class="hidden-sm hidden-md hidden-lg ">
                  <a href="<?php echo base_url('profile');?>" style="font-size:1.0em;"> Settings
                  </a>
                </li>
				<?php
				}
				else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
			?>
			
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('sales');?>"style="font-size:1.0em;"> Sales
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('edit_solution');?>"style="font-size:1.0em;">Solutions
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('payments');?>"style="font-size:1.0em;">Payments
				  </a>
				</li>
				
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Delegates</a>
				  <ul class="dropdown-menu" style="margin-left:50px;">
					<li>
					  <a href="<?php echo base_url('be_delegate');?>" style="font-size:1.0em;"> Be a Delegate
					  </a>
					</li>
				  </ul>
				</li>

				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('profile');?>"style="font-size:1.0em;">Settings
				  </a>
				</li>

				
            <?php
				}
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
				
			?>

				<li  class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('admin_dashboard');?>" style="font-size:1.0em;"> Dashboard
				  </a>
				</li>
				<?php
					if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] == "24"){	
				?>
				<li  class="hidden-sm hidden-md hidden-lg ">
				  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Dynamic Algorithm<span class="caret"></span></a>
				  <ul class="dropdown-menu" style="margin-left:50px;">
				  	<li><a href="<?php echo base_url('dynamic_gv_score')?>" style="font-size:1.0em;">GV Score</a></li>
				  	<li><a href="<?php echo base_url('dynamic_c_risk')?>" style="font-size:1.0em;">C Risk Score</a></li>
				  	<li><a href="<?php echo base_url('dynamic_max_score')?>" style="font-size:1.0em;">MES T & NT Max Score</a></li>
				  </ul>
				</li>

				<li  class="hidden-sm hidden-md hidden-lg ">
				  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> TechData&nbsp;<span class="caret"></span></a>
				  <ul class="dropdown-menu" style="margin-left:50px;">
				  	<li><a href="<?php echo base_url('techdata_uk_pull')?>" style="font-size:1.0em;">UK Pull</a></li>
				  	<li><a href="<?php echo base_url('techdata_us_pull')?>" style="font-size:1.0em;">US Pull</a></li>
				  </ul>
				</li>
				<?php
					}	
				?>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_all_staff');?>" style="font-size:1.0em;"> Staff Admin
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_sme');?>" style="font-size:1.0em;">SMB
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_suppliers');?>" style="font-size:1.0em;">Suppliers
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_all_services');?>" style="font-size:1.0em;"> Services
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_all_orders');?>" style="font-size:1.0em;">Orders
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('manage_sup_payments');?>" style="font-size:1.0em;"> Manage supplier payments
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('pending_refund_request');?>" style="font-size:1.0em;">Refund</a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('coupons');?>" style="font-size:1.0em;"> Coupons/ Vouchers
				  </a>
				</li>
				<li class="hidden-sm hidden-md hidden-lg ">
				  <a href="<?php echo base_url('view_pending_orders');?>" style="font-size:1.0em;">Pending Orders
				  </a>
				</li>
				
            <?php
			}
			?>
            <li class="submenu hidden-xs">
              <span class="btn btn-warning" style="height:38px;padding:8px;padding-right:0px;"><a href="javascript:void(0);" class="show-submenu" style="color:#fff;margin-top:-12px;">Account
                <i class="icon-down-open-mini"></i>
              </a></span> 
              <ul>
                <?php
				if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){
				?>
                <li>
                  <a href="<?php echo base_url('my_order');?>" style="color:#73859B;"> Orders
                  </a>
                </li>
				<?php
					$user_id = $this->session->userdata['logged_in']['user_id'];
					$ci =&get_instance();
					$ci->load->model('questionaire_m');
					$ci->load->model('login_m');
					$get_basic = $ci->questionaire_m->row_check($user_id);
					$get_tech = $ci->questionaire_m->tech_row($user_id);
					$get_non_tech = $ci->questionaire_m->tech_non_tech($user_id);
					$get_budget = $ci->questionaire_m->tech_budget($user_id);
					$get_orders = $ci->login_m->smb_orders($user_id);

					if($get_basic < 1)
					{
						?>
							<li>
							  <a href="<?php echo base_url('questionaire');?>" style="color:#73859B;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech < 1)
					{
						?>
							<li>
							  <a href="<?php echo base_url('questionaire');?>" style="color:#73859B;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech < 1)
					{
						?>
							<li>
							  <a href="<?php echo base_url('questionaire_tech_info');?>" style="color:#73859B;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget < 1)
					{
						?>
							<li>
							  <a href="<?php echo base_url('questionaire_nontech_info');?>" style="color:#73859B;"> Questionnaire
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders < 1)
					{
						?>
							<li>
							  <a href="<?php echo base_url('results');?>" style="color:#73859B;"> Solutions
							  </a>
							</li>
						<?php
					}
					else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders > 0)
					{
						?>
							<li>
							  <a href="<?php echo base_url('questionaire');?>" style="color:#73859B;"> Questionnaire
							  </a>
							</li>
							<li>
							  <a href="<?php echo base_url('questionniare_results');?>" style="color:#73859B;"> Subscription
							  </a>
							</li>
						<?php
							}				
						?>
					<li>
					  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Delegates&nbsp;<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="margin-left:50px;">
						<li>
						  <a href="<?php echo base_url('be_delegate');?>" style="font-size:1.0em;"> Be a Delegate
						  </a>
						</li>
						<li>
						  <a href="<?php echo base_url('manage_delegates');?>" style="font-size:1.0em;"> Manage Delegate
						  </a>
						</li>
					  </ul>
					</li>

                <li>
                  <a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings
                  </a>
                </li>
                <?php
				}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
				?>
               <!-- <li>
                  <a href="<?php echo base_url('dashboard');?>" style="color:#73859B;">Dashboard
                  </a>
                </li> -->
                <li>
                  <a href="<?php echo base_url('sales');?>" style="color:#73859B;"> Sales
                  </a>
                </li>

				<!-- <li>
				  <a href="<?php echo base_url('pending_refund_request')?>" style="color:#73859B;"> Refund</a>
				</li> -->

                <li>
                  <a href="<?php echo base_url('edit_solution');?>" style="color:#73859B;"> Solutions
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('payments');?>" style="color:#73859B;"> Payments 
                  </a>
                </li>

				<li>
				  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> Delegates</a>
				  <ul class="dropdown-menu" style="margin-left:50px;">
					<li>
					  <a href="<?php echo base_url('be_delegate');?>" style="font-size:1.0em;"> Be a Delegate
					  </a>
					</li>
				  </ul>
				</li>

                <li>
                  <a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings
                  </a>
                </li>
                <?php
				} else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "delegate"){
				?>
                <li>
                  <a href="<?php echo base_url('delegate_questionaire');?>" style="color:#73859B;"> Informations
                  </a>
                </li>
				<?php
					$ci =&get_instance();
					$ci->load->model('delicate_login_m');
					$get_del_info = $ci->delicate_login_m->get_del_info($this->session->userdata['logged_in']['user_id']);
					if(sizeof($get_del_info) > 0)
					{
						if($get_del_info->user_type == 'Small and medium business'){
					?>
						<li>
						  <a href="<?php echo base_url('switch_user');?>" style="color:#73859B;"> Switch back to SMB
						  </a>
						</li>
					<?php
						}else if($get_del_info->user_type == 'Supplier'){
					?>
						<li>
						  <a href="<?php echo base_url('switch_user');?>" style="color:#73859B;"> Switch back to Supplier
						  </a>
						</li>
					<?php
						}
					}
				?>
				
				<li>
                  <a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings
                  </a>
                </li>
                <?php
				}
				else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin")
				{
					$ci =&get_instance();
					$ci->load->model('admin_role_m');
					$get_admin_info = $ci->admin_role_m->fetch_admin($this->session->userdata['logged_in']['user_id']);
					if (empty($get_admin_info))
					{
					?>
					<li>
					  <a href="<?php echo base_url('admin_dashboard');?>" style="color:#73859B;"> Dashboard
					  </a>
					</li>
					<?php
						if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] == "24"){	
					?>
					<li class="">
					  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  style="color:#73859B;"> Dynamic Algorithm&nbsp;<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="margin-left:120px;">
					  	<li><a href="<?php echo base_url('dynamic_gv_score')?>" style="font-size:1.0em;">GV Score</a></li>
					  	<li><a href="<?php echo base_url('dynamic_c_risk')?>" style="font-size:1.0em;">C Risk Score</a></li>
					  	<li><a href="<?php echo base_url('dynamic_max_score')?>" style="font-size:1.0em;">MES T & NT Max Score</a></li>
					  </ul>
					</li>

					<li class="">
					  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  style="color:#73859B;"> TechData&nbsp;<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="margin-left:120px;">
					  	<li><a href="<?php echo base_url('techdata_uk_pull')?>" style="font-size:1.0em;">UK Pull</a></li>
					  	<li><a href="<?php echo base_url('techdata_us_pull')?>" style="font-size:1.0em;">US Pull</a></li>
					  </ul>
					</li>
					<!-- indian data link  start-->
					<li class="">
					  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  style="color:#73859B;"> SMB India &nbsp;<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="margin-left:120px;">
					  	<li><a href="<?php echo base_url('smb_india')?>" style="font-size:1.0em;"> SMB List</a></li>
					  	<li><a href="<?php echo base_url('view_indian_orders')?>" style="font-size:1.0em;">Order List</a></li>
					  </ul>
					</li>
					<!-- indian data link  end-->

					<?php
						}	
					?>
					<li>
					  <a href="<?php echo base_url('view_all_staff');?>" style="color:#73859B;"> Staff Admin
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('view_sme');?>" style="color:#73859B;"> SMB
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('view_suppliers');?>" style="color:#73859B;"> Suppliers
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('view_all_services');?>" style="color:#73859B;"> Services
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> Orders
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('manage_sup_payments');?>" style="color:#73859B;"> Manage supplier payments
					  </a>
					</li>
					<li>
					<a href="<?php echo base_url('pending_refund_request');?>" style="color:#73859B;">Refund</a>
					</li>
					
					<li>
					  <a href="<?php echo base_url('coupons');?>" style="color:#73859B;"> Coupons/ Vouchers
					  </a>
					</li>

					<li>
					  <a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings
					  </a>
					</li>

					<?php
					}else{
						?>
						<li>
						  <a href="<?php echo base_url('admin_dashboard');?>" style="color:#73859B;"> Dashboard
						  </a>
						</li>
						<?php
						if($get_admin_info->smb_leads_edit !='' || $get_admin_info->smb_leads_edit_only !='' || $get_admin_info->smb_leads_review !='')
						{
						?>
						<li>
						  <a href="<?php echo base_url('view_sme');?>" style="color:#73859B;"> SMB
						  </a>
						</li>
						<?php
						}
						if($get_admin_info->supplier_price_edit !='' || $get_admin_info->supplier_price_edit_only !='' || $get_admin_info->supplier_price_review !='' || $get_admin_info->supplier_desc_edit !='' || $get_admin_info->supplier_desc_edit_only !='' || $get_admin_info->supplier_desc_review !='')
						{
						?>
						<li>
						  <a href="<?php echo base_url('view_suppliers');?>" style="color:#73859B;"> Suppliers
						  </a>
						</li>
						<li>
						  <a href="<?php echo base_url('view_all_services');?>" style="color:#73859B;"> Services
						  </a>
						</li>
						<?php
						}
						if($get_admin_info->smb_orders_review !='')
						{
						?>
						<li>
						  <a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> Orders
						  </a>
						</li>
						<?php
						}
						if($get_admin_info->smb_leads_review !='')
						{
						?>
						<li>
						  <a href="<?php echo base_url('view_pending_orders');?>" style="color:#73859B;"> Pending Orders
						  </a>
						</li>
						<?php
						}
					}
				}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "accountant"){
				?>
					<li>
					  <a href="<?php echo base_url('view_all_orders');?>" style="color:#73859B;"> Order
					  </a>
					</li>
					<li>
					  <a href="<?php echo base_url('manage_sup_payments');?>" style="color:#73859B;"> Manage supplier payments
					  </a>
					</li>
					<!--<li>
					  <a href="<?php echo base_url('view_pending_orders');?>" style="color:#73859B;"> Pending Orders
					  </a>
					</li>-->
					<li>
					<a href="<?php echo base_url('pending_refund_request')?>" style="color:#73859B;">Refund</a>
					</li>
					<li>
	                  <a href="<?php echo base_url('profile');?>" style="color:#73859B;"> Settings
	                  </a>
	                </li>
				<?php
					}
				?>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url('logout');?>"class="btn btn-success" style="color:#fff;font-size:1.0em;padding:7px 10px;">Logout
              </a>
            </li>
            <?php
			}else{
			?>
			<li>
			  <a href="<?php echo base_url('login');?>"class="btn btn-warning" style="color:#fff;font-size:1.0em;padding:7px 10px;">Login
			  </a>
			</li>
			<li>
			  <a href="<?php echo base_url('register');?>" class="btn btn-success" style="color:#fff;font-size:1.0em;padding:7px 10px;">Register
			  </a>
			</li>
			<?php
			}
			?>
            <li>
              <div id="google_translate_element">
              </div>
              <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                    pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}
                                                        , 'google_translate_element');
                }
              </script>
              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
              </script>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>
  <!-- container -->
</header>
<!-- End Header -->
<!--<div id="preloader">
<div class="sk-spinner sk-spinner-wave">
<div class="sk-rect1"></div>
<div class="sk-rect2"></div>
<div class="sk-rect3"></div>
<div class="sk-rect4"></div>
<div class="sk-rect5"></div>
<p style="margin-left:-100px;"><img src="<?php echo base_url();?>images/logo.png" style="height:50px;" alt="ProtectBox" data-retina="true"></p>
</div>
</div><!-- End Preload -->
<div class="layer">
</div>
