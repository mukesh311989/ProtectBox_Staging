<!-- Modal -->
<div class="modal fade" id="unanswered_questionnaire" role="dialog">
    <div class="modal-dialog" style="width:1230px !important;overflow-y: initial !important;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Unanswered Questions</h4>
        </div>
        <div class="modal-body " style="height: 420px;overflow-y: auto;">
        	 <p class="text-center" style="color:#000;font-style:italic;text-align:left;font-weight:bold;">Please answer the below questions by clicking the previous button. Or you can send a reminder to the delegates for filling up the below questions.</p>
        	 <div class="row">
        	 	<div class="col-md-6 text-right">
        	 		<?php
        	 			if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == '' || $questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == '' || $questionnaire_basics_data['handle_data_input'] == ''){
        	 				
        	 				$prev_url = 'questionaire';

        	 			}else if($questionnaire_technical_data['os_input'] == '' || $questionnaire_technical_data['antivirus_input'] == '' || $questionnaire_technical_data['firewall_input'] == '' || $questionnaire_technical_data['manage_it_input'] == '' || $questionnaire_technical_data['internet_input'] == '' || $questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){

        	 				$prev_url = 'questionaire_tech_info';

        	 			}else if($questionnaire_non_technical_data['business_continuity_plan_input'] == '' || $questionnaire_non_technical_data['training_cybersecurity_input'] == '' || $questionnaire_non_technical_data['aware_information_security_standard_input'] == '' || $questionnaire_non_technical_data['password_rules_input'] == '' || $questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == '' || $questionnaire_non_technical_data['device_to_employees_input'] == '' || $questionnaire_non_technical_data['cyber_consultant_input'] == ''){

        	 				$prev_url = 'questionaire_nontech_info';
        	 			}else if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){

        	 				$prev_url = 'questionaire_budget';
        	 			}
        	 		?>
        	 		<a href="<?php echo base_url("$prev_url");?>" class="btn btn-previous btn-md">Previous</a>
        	 	</div>
        	 	<div class="col-md-6 text-left">
        	 		<a href="javascript:void(0);" class="btn btn-primary btn-md">Send Reminder</a>
        	 	</div>
        	 </div>
        	 <div class="row " style="padding:20px;">
	        	 	<ul class="nav nav-tabs">
	        	 		<?php
	        	 			if(empty($questionnaire_basics_data)){
	        	 		?>
							<li class="active arrow"><a href="javascript:void(0);" onclick="openCity(event, 'basic')" class="tablinks active red-gradient">Basics</a></li>
						<?php
							}else{
						?>
							<li class="active arrow_success"><a href="javascript:void(0);" onclick="openCity(event, 'basic')" class="tablinks active red-gradient_success">Basics</a></li>
						<?php
							}
							if(empty($questionnaire_technical_data)){
						?>
							<li class="arrow"><a href="javascript:void(0);" onclick="openCity(event, 'tech_info')" class="tablinks red-gradient">Technical Info</a></li>
						<?php
							}else{
						?>
							<li class="arrow_success"><a href="javascript:void(0);" onclick="openCity(event, 'tech_info')" class="tablinks red-gradient_success">Technical Info</a></li>
						<?php
							}
							if(empty($questionnaire_non_technical_data)){
						?>
							<li class="arrow "><a href="javascript:void(0);" onclick="openCity(event, 'nontech_info')" class="tablinks red-gradient">Non-Technical Info</a></li>
						<?php
							}else{
						?>
							<li class="arrow_success "><a href="javascript:void(0);" onclick="openCity(event, 'nontech_info')" class="tablinks red-gradient_success">Non-Technical Info</a></li>
						<?php
							}
							if(empty($questionnaire_budget_data)){
						?>
							<li class="arrow"><a href="javascript:void(0);" onclick="openCity(event, 'budget')" class="tablinks red-gradient">Budget</a>  </li>
						<?php
							}else{
						?>
							<li class="arrow_success"><a href="javascript:void(0);" onclick="openCity(event, 'budget')" class="tablinks red-gradient_success">Budget</a>  </li>
						<?php
							}
						?>
					</ul>

					<!-- QUESTIONNAIRE BASICS STARTS -->
					<div id="basic" class="tabcontent active" style="display: block;">
						<?php
						if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == '' || $questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == '' || $questionnaire_basics_data['handle_data_input'] == ''){
							if($questionnaire_basics_data['industry_input'] == '' || $questionnaire_basics_data['employees_input'] == ''){
						?>
						<h3><strong><i class="icon-industrial-building"></i></strong> Industry</h3>
						<div class="step">
							<?php
								if($questionnaire_basics_data['industry_input'] == ''){
							?>
								<div class="form-group">
									<label><b>1a</b> What industry are you in?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please select your primary industry from the list" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
								if($questionnaire_basics_data['employees_input'] == ''){
							?>
								<div class="form-group">
									<label><b>1b</b> How many employees do you have?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please select 1 of the 3 categories for the number of current employees in your company" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_basics_data['location_input'] == '' || $questionnaire_basics_data['location_business_input'] == ''){
						?>
						<h3><strong><i class="icon-location-6"></i></strong> Location&nbsp;</h3>
						<div class="step">
							<div class="form-group">
								<label><b>2</b> Where are you located?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please select 1 or more locations where you have offices. Please select as well which regions you do business in." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							</div>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_basics_data['handle_data_input'] == ''){
						?>
						<h3><strong><i class="icon-users"></i></strong> Supply Chain</h3>
						<div class="step">
							<div class="form-group">
								<label><b>3</b> Do you handle or manage personal or financial data or information for others <br/>(e.g. your supply chain or customers)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Let us know if you also handle or manage personal or financial data or information for 3rd parties as this has legal implications for you." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
							</div>
						</div>
						<?php
							}
						?>
						<?php
				  			}else{
					  	?>
						<div class="row">
							<div class="col-md-12" style="padding:25px;">
								<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
							</div>
						</div>
						<?php
							}
						?>
				  	</div>
				  	<!-- QUESTIONNAIRE BASICS ENDS -->
				  	<!-- QUESTIONNAIRE TECHNICAL STARTS -->
				  	<div id="tech_info" class="tabcontent" style="display: none;">
				  		<?php
				  		if($questionnaire_technical_data['os_input'] == '' || $questionnaire_technical_data['antivirus_input'] == '' || $questionnaire_technical_data['firewall_input'] == '' || $questionnaire_technical_data['manage_it_input'] == '' || $questionnaire_technical_data['internet_input'] == '' || $questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){
							if($questionnaire_technical_data['os_input'] == ''){
						?>
						<h3><strong><i class="icon-desktop-3"></i></strong> Operating System</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['os_input'] == ''){
							?>
								<div class="form-group">
									<label><b>4</b> What Operating System do you use?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Please tell us the primary operating system used in your company." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_technical_data['antivirus_input'] == ''){
						?>
						<h3><strong><i class="icon-block-2"></i></strong> Antivirus</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['antivirus_input'] == ''){
							?>
								<div class="form-group">
									<label><b>5</b> Do you have an antivirus product installed?&nbsp;<span style="color:#ec0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if you already have software designed to detect and destroy computer viruses installed on company machines." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_technical_data['firewall_input'] == ''){
						?>
						<h3><strong><i class="icon-globe-2"></i></strong> Firewall</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['firewall_input'] == ''){
							?>
								<div class="form-group">
									<label><b>6</b> Do you have more than basic system firewall?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Firewall monitors & controls incoming & outgoing network traffic based on predetermined security rules. It protects from unauthorised access." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_technical_data['manage_it_input'] == ''){
						?>
						<h3><strong><i class="icon-globe-2"></i></strong> IT Management</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['manage_it_input'] == ''){
							?>
								<div class="form-group">
									<label><b>7</b> Who manages your IT?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Let us know if your technical resource that manages your IT infrastructure is managed In-house or remotely.You may want to add them as a delegate user to answer some of these questions for you" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_technical_data['internet_input'] == ''){
						?>
						<h3><strong><i class="icon-network"></i></strong> Internet</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['internet_input'] == ''){
							?>
								<div class="form-group">
									<label><b>8a</b> Do you have internet?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us if your network is connected to the internet." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_technical_data['hacking_input'] == '' || $questionnaire_technical_data['system_access_input'] == ''){
						?>
						<h3><strong><i class="icon-key-5"></i></strong> Access Control</h3>
						<div class="step">
							<?php
								if($questionnaire_technical_data['hacking_input'] == ''){
							?>
								<div class="form-group">
									<label><b>9a</b> Do you know what hacking is ?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Hacking is the unauthorised access to or control over computer network security systems for some illicit purpose." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
							<?php
								if($questionnaire_technical_data['system_access_input'] == ''){
							?>
								<div class="form-group">
									<label><b>9e</b> Do you provide differing levels of access to your systems? <span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Do your systems have tier access? " href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a><br/>E.g. Administrator access, user access. &nbsp;</label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>

						<?php
				  			}else{
					  	?>
					  	<div class="row">
							<div class="col-md-12" style="padding:25px;">
								<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
							</div>
						</div>
						<?php
							}
						?>
				  	</div>
				  	<!-- QUESTIONNAIRE TECHNICAL ENDS -->
				  	<!-- QUESTIONNAIRE NON-TECHNICAL STARTS -->
				  	<div id="nontech_info" class="tabcontent" style="display: none;">
				  		<?php
				  		if($questionnaire_non_technical_data['business_continuity_plan_input'] == '' || $questionnaire_non_technical_data['training_cybersecurity_input'] == '' || $questionnaire_non_technical_data['aware_information_security_standard_input'] == '' || $questionnaire_non_technical_data['password_rules_input'] == '' || $questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == '' || $questionnaire_non_technical_data['device_to_employees_input'] == '' || $questionnaire_non_technical_data['cyber_consultant_input'] == ''){
							if($questionnaire_non_technical_data['business_continuity_plan_input'] == ''){
						?>
						<h3><strong><i class="icon-cog-6"></i></strong> Business Continuity Procedures</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['business_continuity_plan_input'] == ''){
							?>
								<div class="form-group">
									<label><b>12a</b> Do you use security monitoring solutions for your Business Continuity?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Business Continuity is a management plan that enables them to carry on doing business in case of planned or unplanned outage.Intrusion Detection System (IDS) is a device or software application that monitors a network or systems for malicious activity or policy violations. Any detected activity or violation is typically reported either to an administrator or collected centrally using a security information and event management (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques to distinguish malicious activity from false alarms." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['training_cybersecurity_input'] == ''){
						?>
						<h3><strong><i class="icon-certificate"></i></strong> Training</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['training_cybersecurity_input'] == ''){
							?>
								<div class="form-group">
									<label><b>13</b> Please tell us if your staff have had Cybersecurity training only, Physical Security training, Both or no training?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink" title="Tell us if your staff have had Physical Security training only/Cyber only training/Both or no training." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['aware_information_security_standard_input'] == ''){
						?>
						<h3><strong><i class="icon-hammer"></i></strong> Accreditation/Regulation</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['aware_information_security_standard_input'] == ''){
							?>
								<div class="form-group">
									<label><b>14</b> Which Information Security Standards are relevant to you that you don’t have?&nbsp;Click<a href="https://staging.protectbox.com/regulation" target="_blank"> here</a> for detail&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span> <a data-container="body" class="tooltiplink " title="<div>Depending upon which of the below data that you hold, will the various combinations of standards be relevant to you:</div><div class='table-responsive'><table class='table table-bordered'><thead></tr><th>Type of data</th><th>Legislation, regulation or standard relevant to you</th></tr></thead><tr><td>Private information (PI)</td><td>General Data Protection Regulation (GDPR) &/or CyberEssentials</td></tr><tr><td>Financial data</td><td>ISO/IEC</td></tr><tr><td>Card data</td><td>PCI/DSS</td></tr><tr><td>Other sensitive data</td><td>NIST</td></tr></table></div>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['password_rules_input'] == ''){
						?>
						<h3><strong><i class="icon-lock"></i></strong>  Passwords Policy</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['password_rules_input'] == ''){
							?>
								<div class="form-group">
									<label><b>15</b> Do you implement simple but adequate password rules that encourage customers to have long, random passwords?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide password strength checks on your customers." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['member_cisp_input'] == '' || $questionnaire_non_technical_data['cyber_insurance_input'] == '' || $questionnaire_non_technical_data['threat_detection_input'] == ''){
						?>
						<h3><strong><i class="icon-user-md"></i></strong> Reputation Management</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['member_cisp_input'] == ''){
							?>
								<div class="form-group">
									<label><b>16a</b> Are you a member of Cyber Security Information Sharing Partnership (CiSP)?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="See <a href='https://www.ncsc.gov.uk/cisp' target='_blank'>https://www.ncsc.gov.uk/cisp</a>" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
							<?php
								if($questionnaire_non_technical_data['cyber_insurance_input'] == ''){
							?>
								<div class="form-group">
									<label><b>16b</b> Do you have cyber insurance?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you have taken out cyber insurance." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
							<?php
								if($questionnaire_non_technical_data['threat_detection_input'] == ''){
							?>
								<div class="form-group">
									<label><b>16c</b> Do you have threat detection and prevention solutions?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>   <a data-container="body" class="tooltiplink" title="Threat detection detects anomalous activities indicating unusual and potentially harmful attempts to access or exploit databases. Protecting the network from advanced threats by identifying and scanning all traffic – applications, users, and content – across all ports and protocols.Threat prevention provides multiple layers of prevention, confronting threats at each phase of the attack." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['device_to_employees_input'] == ''){
						?>
						<h3><strong><i class="icon-laptop"></i></strong> Devices</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['device_to_employees_input'] == ''){
							?>
								<div class="form-group">
									<label><b>17</b> Do you have device management solutions on the devices issued to your employees?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span>  <a data-container="body" class="tooltiplink" title="Please tell us if you provide device management solutions (which keep devices safe) on mobiles, laptops, tablets or combinations of these devices, to your employees" href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
							if($questionnaire_non_technical_data['cyber_consultant_input'] == ''){
						?>
						<h3><strong><i class="icon-shield"></i></strong> Consultancy/Implementation</h3>
						<div class="step">
							<?php
								if($questionnaire_non_technical_data['cyber_consultant_input'] == ''){
							?>
								<div class="form-group">
									<label><b>19</b> Do you need a cyber consultant to help with implementation, if you don't already have one?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Cyber consultants both assess software, computer systems, and networks for vulnerabilities, then also design and implement the best security solutions for an organisation’s needs. They play the role of both the attacker and the victim. Customers don't always use them for both design and implementation, many use them for just implementation. Governments and enterprises tend to use them for both as they can charge £000s for both services, in addition to the cost of the products that they recommend. Consultants can be established corporate teams or small, independent individuals. ProtectBox can find consultants to help with implementation." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
								</div>
							<?php
								}
							?>
						</div>
						<?php
							}
						?>
						<?php
				  			}else{
					  	?>
					  	<div class="row">
							<div class="col-md-12" style="padding:25px;">
								<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
							</div>
						</div>
						<?php
							}
						?>
				  	</div>
				  	<!-- QUESTIONNAIRE NON-TECHNICAL ENDS -->
				  	<!-- QUESTIONNAIRE BUDGET STARTS -->
				  	<div id="budget" class="tabcontent" style="display: none;">
				  		<?php
				  		if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
							if($questionnaire_budget_data['amount_cybersecurity_input'] == '' || $questionnaire_budget_data['percentage_annual_budget_input'] == '' || $questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
						?>
							<h3><strong><i class="icon-briefcase"></i></strong> Your Budget</h3>
							<div class="step">
								<?php
									if($questionnaire_budget_data['amount_cybersecurity_input'] == ''){
								?>
									<div class="form-group">
										<label><b>20a</b> What amount did you spend on cybersecurity annually?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Please select from one of the five categories the amount you spend on cybersecurity products." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
									</div>
								<?php
									}
								?>
								<?php
									if($questionnaire_budget_data['percentage_annual_budget_input'] == ''){
								?>
									<div class="form-group">
										<label><b>20b</b> What percentage of your annual budget is that?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" title="Could you tell us what % of your IT budget this amounted to." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
									</div>
								<?php
									}
								?>
								<?php
									if($questionnaire_budget_data['budget_cybersecurity_per_year_input'] == ''){
								?>
									<div class="form-group">
										<label><b>20c</b> What is your budget for Cyber Security per year?&nbsp;<span style="color:#ec8b0d;font-size:22px;">*</span><a data-container="body" class="tooltiplink" title="Please tell us how much you intend to spend on security services each year." href="javascript:void(0);"  data-toggle="tooltip" data-placement="right" data-html="true"><i class="icon-info-circled-3"></i></a></label>
									</div>
								<?php
									}
								?>
							</div>
						<?php
							}
						?>
						<?php
				  			}else{
					  	?>
					  	<div class="row">
							<div class="col-md-12" style="padding:25px;">
								<p style="color:#ec8b0d;font-size:20px;font-weight:bold">You don't have any questions to answer right now! </p>
							</div>
						</div>
						<?php
							}
						?>
				  	</div>
				  	<!-- QUESTIONNAIRE BUDGET ENDS -->
        	 </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- MODAL ENDS -->
  <!-- Script for Tabs starts-->
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>
	
<!-- Script for Tabs Ends -->