<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_process extends CI_Controller {
    
	 public function __construct() {
        parent::__construct();	
		//$this->load->library('stripegateway');
		$IP=$_SERVER['HTTP_X_FORWARDED_FOR'];
		$this->$ipdat = @json_decode(file_get_contents( 
		    "http://www.geoplugin.net/json.gp?ip=" . $IP));

		$user_type = $this->session->userdata['logged_in']['user_type'];

		$this->db = $this->load->database('default', TRUE);
  		if ($user_type == 'Small and medium business' && $this->$ipdat->geoplugin_countryCode == 'IN') {
			$this->db = $this->load->database('db4_india', TRUE);
  		}
  			
		if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
        if($this->session->userdata['logged_in']['user_type'] != "Small and medium business"){
            redirect('error_page');
        }
		$this->load->model('questionaire_budget_m');
		$get_budget = $this->questionaire_budget_m->check_questioniare_budget($this->session->userdata['logged_in']['user_id']);
		$this->data['currencyCode'] = $get_budget->preferred_budget_breakdown_currency_input;
	}

    
    public function index()
    {
	
		$data["message"] = "";
		$user_id = $this->session->userdata['logged_in']['user_id'];
    	$service_id = $this->uri->segment(2);
    	$data['bundle_id'] = $this->uri->segment(2);
        $this->load->model('payment_process_m');
        $this->load->model('results_m');
        $data['currencyCode'] = $this->data['currencyCode'];
		$fetch_currency_symbol = $this->payment_process_m->currency_code($data['currencyCode']);
		$data['currencySymbol'] = $fetch_currency_symbol->symbol;
		

		$bundle_array_fetch = $this->payment_process_m->bundle_array_fetch($service_id);
	    $view_data = $bundle_array_fetch->bundle_array;
	    $data['bundle_decode'] = json_decode($view_data,true);
		$data['employee_number'] = $this->payment_process_m->fetch_employees($user_id);
	/*echo '<pre>';
		print_r($data); die;*/
		$this->load->view('payment_process',$data);
		/* Sorting category of bundle Ends */

        
    }
	public function remove_cpn(){
		SESSION_START();
		$this->session->unset_userdata('coupon');
		return true;
	}
	public function addcoupn(){
		$this->db = $this->load->database('default', TRUE);
		$this->load->model("payment_process_m");
		$cpn_code = $this->input->post('coupon_code');
		$bundle_id = $this->input->post('bundle_id');
		
		$check_cpn_code = $this->payment_process_m->get_cpn($cpn_code);
		$cur_date = strtotime(date('Y-m-d'));
		$exp_date = strtotime($check_cpn_code[0]->coupon_expiry_date);

		$date_diff = $exp_date - $cur_date;

		$count_arr = count($check_cpn_code);
		if($count_arr > 0 && $date_diff > 0){
			foreach($check_cpn_code As $val_cpn){
				$coupon = array(
				'coupon_code' => $val_cpn->coupon_code,
				'discount_type' => $val_cpn->discount_type,
				'discount_value' => $val_cpn->discount_value
				);
			}
			$this->session->set_userdata("coupon",$coupon);
			$this->session->set_flashdata("coupon_success", "Your coupon applied successfully");
			
		}else{
			$coupon = array();
			$this->session->set_flashdata("coupon_invalid", "Your coupon code is invalid");
				
		}
		redirect('payment_process/'.$bundle_id.'');
		/*
		
		print_r($check_cpn_code);*/

	}

	public function sme_subscribe()
	{
		$sub_check = $this->input->post('subscribes');
		$bundle_id = $this->input->post('bundle_id');
		
		if($sub_check != '')
		{
			$subscribe = array(
				'sub_code' => $sub_check
				);
			$this->session->set_userdata("subscription",$subscribe);
			redirect('payment_process/'.$bundle_id.'');

		}
		else
		{
			$this->session->unset_userdata("subscription");
			
			
			redirect('payment_process/'.$bundle_id.'');
		}
		
		
	}
	public function submtpay(){
			$this->load->model("payment_process_m");
			$this->load->model("payments_m");
			
			//order inserted data
			$sme_id = $this->session->userdata['logged_in']['user_id'];
			$service_id = $this->input->post('service_id');
			$get_supplier = $this->payment_process_m->fetch_results($service_id);
			$supplier_id = $get_supplier[0]->user_id; 
		    $token = $_POST['stripeToken'];
			$total_price = $this->input->post('total_price');
			$total_commision_price = $this->input->post('total_commision_price');
			
			$currency = $this->input->post('currency');
			$payment_option = "Yearly";
			$payment_method = "Stripe";
			$date = time();
			//echo "</br>";
			$stripe_reply = $this->stripegateway->checkout($token,$total_price,$service_id,$currency);
			
			if($stripe_reply == "succeeded")
			{
				$data = array(
				'sme_id' => $sme_id,
				'supplier_id' => $supplier_id,
				'supplier_service_id'=> $service_id,
				'total_price' => $total_price,
				'pb_amt_received' => $total_commision_price,
				'sup_amt_received' => $total_price,
				'payment_option' => $payment_option,
				'payment_method'=> $payment_method,
				'order_status' => 'Success',
				'cus_payment_status' => 'Success',
				'sup_payment_status' => 'Success',
				'upload_date' => $date,
				'status' => '1'
				);

			
					$insert_order = $this->payment_process_m->save_order($data);
					
					if($insert_order){
					$email = $this->session->userdata['logged_in']['email'];
					$fullname = $this->session->userdata['logged_in']['name'];;
					$encrypted_key = md5($get_details->registration_date);
					$this->load->library('email');
					$this->email->set_mailtype("html");

					$message = '<!doctype html>
						<html lang="en">
						 <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
						  
						  <meta name="Generator" content="EditPlus®">
						  <meta name="Author" content="">
						  <meta name="Keywords" content="">
						  <meta name="Description" content="">
						  <title>Registration Confirmation</title>
						 </head>
						 <body>
								<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
								<tr>
									<td valign="middle" align="center">
										<!--Logo Part Start-->

										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tr>
												<td valign="top" align="center">
													<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td style="line-height:80px; font-size:80px;" valign="middle" align="center" height="80">
																&nbsp;
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!--Logo Part End-->

										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tr>
												<td valign="top" align="center">
													<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td style="border-radius: 8px 8px 0px 0px; background-color:white;border-bottom: 2px solid #EC6B0D;" data-bgcolor="theme-bg" valign="middle" bgcolor="#18c197" align="center">
																<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
																	<tr>
																		<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
																		<td valign="top" align="left" class="editable">
																			<table class="full" width="165" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																						&nbsp;
																					</td>
																				</tr>
																				<tr>
																					<td valign="middle" align="center">
																						<a href="#"><img src="https://staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
																			&nbsp;
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!--Content Part Start-->

										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tr>
												<td valign="top" align="center">
													<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
																<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
																	<tr>
																		<td style="line-height:30px; font-size:60px;" valign="middle" align="center" height="30">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
																		<td valign="top" align="left">
																			<table class="two-left-inner" width="365" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td valign="top" align="left">
																						
																						<table class="full" width="250" cellspacing="0" cellpadding="0" border="0" align="left">
																							<tr>
																								<td valign="top" align="left">
																									<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																										<tr>
																											<td style="font-family:Open Sans, Verdana, Arial; font-size:24px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																												<multiline>
																													Hi ' . $fullname . '
																												</multiline>
																											</td>
																										</tr>
																										<tr>
																											<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																												<multiline>
																													Welcome to ProtectBox
																												</multiline>
																											</td>
																										</tr>
																										<tr>
																											<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
																												&nbsp;
																											</td>
																										</tr>
																										<tr>
																											<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																												&nbsp;
																											</td>
																										</tr>
																									</table>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				Thank You For Subscribing In ProtectBox.
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				You’ve Been Successfully Subscribe in ProtectBox. Supplier Will Contact With Their Product Shortly!!
																			</multiline>
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				If this was not you, then please ignore and delete this email.
																			</multiline>
																		</td>
																	</tr>
																			
																		<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				Kind regards,<br/>
																				ProtectBox
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																		
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				 This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com the telephone number(s) or chat on our website.
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!--Content Part End-->

										<!--Copyright Part Start-->

										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tr>
												<td valign="top" align="center">
													<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
														<tr>
															<td valign="middle" align="center">
																<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
																		<td valign="top" align="center">
																			<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
																				<tr>
																					<td style="font-family:Open Sans, Verdana, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" valign="top" align="left">
																						<multiline>
																							Copyright &copy; 2018 ProtectBox Ltd. &nbsp;
																						</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																						<unsubscribe>
																							Company number: NI643316 VAT registration number 297 5082 62
																						</unsubscribe>
																						<multiline>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<tr>
																		<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
																			&nbsp;
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!--Copyright Part End-->

									</td>
								</tr>
							</table>
						  
						 </body>
						</html>
			';

						$this->email->from('noreply@protectbox.com', 'ProtectBox');
						$this->email->to($email); 

						$this->email->subject('Registration Confirmation-ProtectBox');
						$this->email->message($message);    

						$okay = $this->email->send();
					if($okay)
						{
							
							redirect('thank_you/'.$this->db->insert_id().'');
						}else{
						
							redirect('thank_you/'.$this->db->insert_id().'');
						}
						
						
					}else{
						echo "insert error!";
					}
			}else{
				$data = array(
				'sme_id' => $sme_id,
				'supplier_id' => $supplier_id,
				'supplier_service_id'=> $service_id,
				'total_price' => $total_price,
				'pb_amt_received' => $total_commision_price,
				'sup_amt_received' => $total_price,
				'payment_option' => $payment_option,
				'payment_method'=> $payment_method,
				'order_status' => 'Pending',
				'cus_payment_status' => 'Pending',
				'sup_payment_status' => 'Pending',
				'upload_date' => $date,
				'status' => '1'
			);
				$insert_order = $this->payment_process_m->save_order($data);
				//echo "gateway error!";
				redirect('payment_failed/'.$this->db->insert_id().'');
			}
			
	}
}
?>