<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Email Template of ProtectBox
 *
 * @author Sujit
 */
 

 
class Cronemailtemplate {
	

	public function regismbnotactive($fullname){

		$message = '<!doctype html>
						<html lang="en">
						 <head>
						  <meta charset="UTF-8">
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
																						<a href="#"><img src="'.base_url().'images/logo.png" alt=""  height="45" /></a>
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
																											<td style="font-family:Open Sans, Verdana, Arial; font-size:20px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																												<multiline>
																													Hi  ' . $fullname . ',
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
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				You have successfully signed up for ProtectBox.
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				Please click the "Activate Account" button below (or <a href="'.base_url().'login?email_segment=activate" target="_blank">'.base_url().'login?email_segment=activate</a>) & enter your email address & password to access your account. In an hour for free, fill out our simple online questionnaire. ‘Ask a friend’ or our friendly, no-jargon team. Then 1-click to pay (including 3 months interest free or government grant discounts). Really is easy!
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
															<td valign="top" align="left">
																<table class="two-left-inner" width="335" cellspacing="0" cellpadding="0" border="0" align="left">
																	<tr>
																		<td valign="top" align="left">
																			<table class="two-left-inner" width="160" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																						<multiline>
																							<a href="'.base_url().'login?email_segment=activate" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
																If this was not you, please report this to team@protectbox.com. This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com or +44 (0)207 993 3037) or use chat on our website. 
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
																							Copyright &copy; 2020 ProtectBox Ltd. &nbsp;
																						</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																							Company number: NI643316  VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="'.base_url().'images/in-1.png" width="30px"> </a>
																							<a href="https://twitter.com/ProtectBoxLtd/" ><img src="'.base_url().'images/tw-1.png" width="30px"> </a>
																							<a href="https://www.facebook.com/protectbox/" ><img src="'.base_url().'images/fb-1.png" width="30px"> </a>
																						<multiline>
																					</td>
																				</tr>
																			</table>
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
										<!--Copyright Part End-->

									</td>
								</tr>
							</table>
						  
						 </body>
						</html>
			';

			return $message;

	}

	public function regiQuesNotCompleteMail($fullname,$msg){

		$message = '<!doctype html>
						<html lang="en">
						 <head>
						  <meta charset="UTF-8">
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
																						<a href="#"><img src="'.base_url().'images/logo.png" alt=""  height="45" /></a>
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
																											<td style="font-family:Open Sans, Verdana, Arial; font-size:20px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																												<multiline>
																													Hi  ' . $fullname . ',
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
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				You have successfully signed up for ProtectBox.
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				'.$msg.'
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
															<td valign="top" align="left">
																<table class="two-left-inner" width="335" cellspacing="0" cellpadding="0" border="0" align="left">
																	<tr>
																		<td valign="top" align="left">
																			<table class="two-left-inner" width="160" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																						<multiline>
																							<a href="'.base_url().'login?email_segment=activate" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
																If this was not you, please report this to team@protectbox.com. This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com or +44 (0)207 993 3037) or use chat on our website. 
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
																							Copyright &copy; 2020 ProtectBox Ltd. &nbsp;
																						</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																							Company number: NI643316  VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="'.base_url().'images/in-1.png" width="30px"> </a>
																							<a href="https://twitter.com/ProtectBoxLtd/" ><img src="'.base_url().'images/tw-1.png" width="30px"> </a>
																							<a href="https://www.facebook.com/protectbox/" ><img src="'.base_url().'images/fb-1.png" width="30px"> </a>
																						<multiline>
																					</td>
																				</tr>
																			</table>
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
										<!--Copyright Part End-->

									</td>
								</tr>
							</table>
						  
						 </body>
						</html>
			';

			return $message;

	}


	public function regiQuesCompleteMail($fullname){

		$message = '<!doctype html>
						<html lang="en">
						 <head>
						  <meta charset="UTF-8">
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
																						<a href="#"><img src="'.base_url().'images/logo.png" alt=""  height="45" /></a>
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
																											<td style="font-family:Open Sans, Verdana, Arial; font-size:20px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																												<multiline>
																													Hi  ' . $fullname . ',
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
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				You have successfully signed up for ProtectBox.
																			</multiline>
																		</td>
																	</tr>
																	<tr>
																		<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																			<multiline>
																				
																		</td>
																	</tr>
																	
																	<tr>
																		<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																			&nbsp;
																		</td>
																	</tr>
																	<tr>
															<td valign="top" align="left">
																<table class="two-left-inner" width="335" cellspacing="0" cellpadding="0" border="0" align="left">
																	<tr>
																		<td valign="top" align="left">
																			<table class="two-left-inner" width="160" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																						<multiline>
																							<a href="'.base_url().'login?email_segment=activate" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
																If this was not you, please report this to team@protectbox.com. This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com or +44 (0)207 993 3037) or use chat on our website. 
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
																							Copyright &copy; 2020 ProtectBox Ltd. &nbsp;
																						</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																							Company number: NI643316  VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="'.base_url().'images/in-1.png" width="30px"> </a>
																							<a href="https://twitter.com/ProtectBoxLtd/" ><img src="'.base_url().'images/tw-1.png" width="30px"> </a>
																							<a href="https://www.facebook.com/protectbox/" ><img src="'.base_url().'images/fb-1.png" width="30px"> </a>
																						<multiline>
																					</td>
																				</tr>
																			</table>
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
										<!--Copyright Part End-->

									</td>
								</tr>
							</table>
						  
						 </body>
						</html>
			';

			return $message;

	}


	public function regiDelNotActiveMail($delegate_email,$fullname,$delegate_key,$company=""){
		
		$message = '<!doctype html>
			<html lang="en">
			 <head>
			  <meta charset="UTF-8">
			  <meta name="Generator" content="EditPlus®">
			  <meta name="Author" content="">
			  <meta name="Keywords" content="">
			  <meta name="Description" content="">
			  <title>Delegate User Request-ProtectBox</title>
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
																			<a href="#"><img src="'.base_url().'images/logo.png" alt=""  height="45" /></a>
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
																								<td style="font-family:Open Sans, Verdana, Arial; font-size:20px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																									<multiline>
																										Hi ' . $fullname . ',
																									</multiline>
																								</td>
																							</tr>
																							<tr>
																								<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																									<multiline>
																										Delegate User Request
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
															</td>
														</tr>
														
														<tr>
															<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																<multiline>
																	<span style="color:#6CA71B;"> A reminder that' . $fullname .', '.$company.'</span>, asked for your help with completing our questionnaire, as a delegate, last week.
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
																	Please click the "Activate Account" button or <a href="'.base_url().'register/'.$delegate_key.'" target="_blank">'.base_url().'register/'.$delegate_key.'</a> and use the following key <span style="color:#EC8C0E;">' . $delegate_key . '</span> to activate your account.
																</multiline>
															</td>
														</tr>
														<tr>
															<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																&nbsp;
															</td>
														</tr>
														<tr>
															<td valign="top" align="left">
																<table class="two-left-inner" width="335" cellspacing="0" cellpadding="0" border="0" align="left">
																	<tr>
																		<td valign="top" align="left">
																			<table class="two-left-inner" width="160" cellspacing="0" cellpadding="0" border="0" align="left">
																				<tr>
																					<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																						<multiline>
																							<a href="'.base_url().'register/'.$delegate_key.'" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
															If this was not you, please report this to team@protectbox.com. This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com or +44 (0)207 993 3037) or use chat on our website.															</multiline>
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
																			Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="'.base_url().'images/in-1.png" width="30px"> </a>
<a href="https://twitter.com/ProtectBoxLtd/" ><img src="'.base_url().'images/tw-1.png" width="30px"> </a>
<a href="https://www.facebook.com/protectbox/" ><img src="'.base_url().'images/fb-1.png" width="30px"> </a>
																		</unsubscribe>
																		<multiline>
																	</td>
																</tr>
																</table>
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
							<!--Copyright Part End-->

						</td>
					</tr>
				</table>
			  
			 </body>
			</html>
			';
			return $message;
	}




}


 ?>