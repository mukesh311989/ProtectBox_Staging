
				
                <!--<div style="box-sizing: border-box;margin-top:25px;">
				  <img src="<?php echo base_url();?>images/trustpilot.png" class="trust_pilot">
				  <img src="<?php echo base_url();?>images/reviews-four-stars.png" class="trust_pilot">
				</div>-->
               <!--<div class="col-md-12" style="margin-top:15px;">
					<div class="col-md-6 col-sm-6 col-xs-6" >
						<a href="<?php echo base_url('payment_process');?>/<?php echo $result->supplier_service_id;?>" class="btn_1 medium pull-right" >Select</a>
					</div>
				
					<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top:10px;">
						<span class="more_info" style="">More info
						</span>
					</div>
					<div class="clearfix"></div>
                </div>-->
	
				<!-- <?php
					
						if($result->regulation != 'Please select'){
				 ?>
				 <div class="certified">
				<?php
				    $fresh_cat = array();
					$get_all_service_names = $this->results_m->fetch_results_category($result->user_id,$result->protection_level);
					foreach($get_all_service_names AS $all_services){
						 if(count($this->input->get('solution')) > 0){
                $top_filter_category = $this->input->get('solution');
                foreach($top_filter_category AS $key=> $top_filter_each_category){
                  if(isset($all_services->product_category, $top_filter_category)){
                        $fresh_cat[] = $all_services->product_category;
                    }
                }
            }else{
              foreach($sorting_data As $key=>$cat_score){
                  if(array_key_exists($all_services->product_category, $sorting_data)){
                      $fresh_cat[] = $all_services->product_category;
                  }
              }
            }
					}
					$regulation_array = array();
					foreach(array_unique($fresh_cat) as $combined_category){

					if(in_array("", $this->session->userdata['results'])){
						$servicesz = $this->results_m->fetch_results_smb_services($combined_category,$result->user_id,$max_budget,$max_antivirus,$max_os,$max_firewall,$max_internet,$max_access_control,$max_data,$max_mssp,$max_bu_continue,$max_pass_policy,$max_accreditation,$max_devices,$max_training,$max_remote_working,$max_reputation_manage,$max_consultancy,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
					}else{
						$sessionzz = $this->session->userdata['results'];
						$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id,$sessionzz,$max_proxy,$max_audit,$max_encryption,$max_spam,$max_prevention,$max_ids);
   				    }

					  /*$servicesz = $this->results_m->fetch_results_serviceszz($combined_category,$result->user_id);*/
					  foreach($servicesz as $regulations){
						$regulation_array[] = $regulations->regulation;
					  }
					  foreach($servicesz as $key => $logos){
					  }
					}
					 foreach(array_unique($regulation_array) as $key=> $each_regulation){
					
						if($each_regulation == 'FSMA/NIST'){
					?>
						<img src="<?php echo base_url();?>images/fizma.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Federal Information Systems Management Act, or FISMA, requires U.S. federal government agencies comply with several standards, including NIST (National Institute for Standards and Technologies) Special Publication 800‐53, and FIPS (Federal Information Processing Standards) Publication 200.<br/>NIST 800-53, is a highly recognized and respected framework of security controls for both government and private organizations. It’s published by the National Institute for Standards and Technology (NIST), a branch of the U.S. Department of Commerce and a nonregulatory federal agency whose goal is to promote innovation and United States competitiveness by advancing standards, measurement science, and technology. All agencies of the U.S. federal government are required to comply with NIST SP 800‐53 understand cloud computing. NIST’s Small Business Information Security: The Fundamentals guide walks users through a simple risk assessment to understand their vulnerabilities. Worksheets help them too. Or an external consultant can help assess and implement.<br/>Many nongovernment organizations voluntarily comply with the NIST and FIPS standards, because they recognize their value.<br/>The certification part is the assessment of the system against NIST 800‐53, FIPS‐200, and possibly other standards and requirements. The accreditation part is the formal authorization to use the system after the assessment has been completed and analyzed.<br/>See https://www.nist.gov/ for more information" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'ISO/IEC 27000-series'){ 
					?>
						<img src="<?php echo base_url();?>images/iso.png" style="border:1px solid #CCC;text-align:center;height:40px;">&nbsp;<a data-container="body" title="ISO/IEC 27000-series (also known as the 'ISMS Family of Standards' or 'ISO27k' for short) are a highly respected series of international standard deliberately broad in scope, covering more than just privacy, confidentiality and IT/technical/cybersecurity issues. It is applicable to organizations of all shapes and sizes. Companies can either do it themselves using the ISO/IEC standards which are sold directly by ISO, mostly in English and French. Sales outlets associated with various national standards bodies also sell directly translated versions in other languages. A single user copy of the ISO 27001 standard costs nearly $300. Other ways include getting an outside expert. A higher‐quality external audit can also be done. ISO 27001 certification is generally more costly than an external audit but may be required in some circumstances.See https://www.iso.org/standards.html and www.27000.org/ for more information" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'CyberEssentials'){
					?>
						<img src="<?php echo base_url();?>images/cyberessentials.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Cyber Essentials is a UK government-backed, industry supported scheme to help organisations protect themselves against common cyber attacks. Since October 2014 Cyber Essentials has been mandatory for suppliers of UK Government contracts which involve handling personal information and providing some ICT products and services. Holding a Cyber Essentials badge enables you to bid for these contracts. The Cyber Essentials documents are FREE to download and any organisation can use them to put essential security controls in place. However, applying for a Cyber Essentials certificate will provide independent assurance that you have the protections correctly in place. You will also be able to display the Cyber Essentials badge to demonstrate that you meet a Government-endorsed standard. There are two levels of badges that your organisation can apply for: Cyber Essentials requires the organisation to complete a self-assessment questionnaire, with responses independently reviewed by an external certifying body. Cyber Essentials Plus covers the same requirements as Cyber Essentials but tests of the systems are carried out by an external certifying body, using a range of tools and techniques.See https://www.cyberessentials.ncsc.gov.uk/ and www.cyberaware.gov.uk/cyberessentials for more information" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'General Data Protection regulation (GDPR)'){
					?>
					<img src="<?php echo base_url();?>images/gdpr.jpg" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="General Data Protection Regulation (GDPR) (Regulation (EU) 2016/679) ruling intended to protect the data of citizens within the European Union. The GDPR is a move by The Council of the European Union, European Parliament, and European Commission to provide citizens with a greater level of control over their personal data. GDPR has far-reaching implications for all citizens of the European Union and businesses operating within the EU, regardless of physical location. If businesses hope to offer goods or services to citizens of the EU, they will be subject to the penalties imposed by the GDPR. In addition, any business that holds personal data of EU citizens can be held accountable under the GDPR. The UK government has confirmed that UK businesses will need to become GDPR compliant by 25 May 2018, regardless of Brexit (UK’s decision to leave the EU).It simplifies the regulatory environment for international business by unifying the regulation within the EU. Reciprocally it involves a stricter data protection compliance regime with severe penalties of up to 4% of worldwide turnover. GDPR took effect, on 25 May 2018, it will replace the data protection directive (officially Directive 95/46/EC)[2] of 1995.See https://www.eugdpr.org/  and https://ico.org.uk/for-organisations/guide-to-the-general-data-protection-regulation-gdpr/ for more information" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'Control Objectives for Information and Related Technology (COBIT)'){
					?>
					<img src="<?php echo base_url();?>images/cobit.jpg" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="COBIT, Control Objectives for Information and Related Technology is an IT process and governance framework created by ISACA (Information Systems Audit and Control Association) in the mid 1990s. ISACA offers the COBIT framework and related documentation to its members for free as a download. Hard copies are available for purchase or an ISACA accredited consultant can help." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'PDPA (Singapore)'){
					?>
					<img src="<?php echo base_url();?>images/pdpa.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="Personal Data Protection Act 2012 sets out the law on data protection in Singapore. Apart from establishing a general data protection regime, the Act also regulates telemarketing practices. Fines of up to $1m per breach can be imposed." href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
					} if($each_regulation == 'Payment Card Industry Data Security Standard (PCI DSS)'){
					?>
					<img src="<?php echo base_url();?>images/pci.png" style="border:1px solid #CCC;text-align:center;height:50px;">&nbsp;<a data-container="body" title="The Payment Card Industry Data Security Standard (PCI DSS) applies to companies of any size that accept credit card payments. If your company intends to accept card payment, and store, process and transmit cardholder data, you need to host your data securely with a PCI compliant hosting provider.See https://www.pcisecuritystandards.org/pci_security/  and http://www.theukcardsassociation.org.uk/security/What_is_PCI%20DSS.asp for more information" href="javascript:void(0);" class="tooltiplink" data-toggle="tooltip" data-placement="left" data-html="true"><i class="icon-info-circled-3"></i></a>
					<?php
						}
					 }
					?>
				</div>
				<?php
					}
				?>-->