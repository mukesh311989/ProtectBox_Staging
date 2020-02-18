<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Email Template of ProtectBox
 *
 * @author Sujit
 */
 

 
class Emailtemplate {
	

	public function forgotpass($fullname,$encrypted_key){
		
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Password Reset</title>
		 </head>
		 <body>
				<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
				<tr>
					<td valign="midudle" align="center">
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Forgotten Password
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																
																You asked to reset your password.To do this please click the "Reset Password" button below (or http://www.protectbox.com/recover_pass) and enter this encryption key <span style="color:#EC8C0E">' . $encrypted_key . '</span> alongwith your registered email address.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																						<a href="https://www.staging.protectbox.com/recover_pass" style="text-decoration:none; color:#FFF;" data-color="link-white">Reset Password</a>
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
																		<unsubscribe>
																			Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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
		return $message;
	}

	public function regisuccess($fullname){

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
																						<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																				Please click the "Activate Account" button below (or <a href="https://www.staging.protectbox.com/login?email_segment=activate" target="_blank">https://www.staging.protectbox.com/login?email_segment=activate</a>) & enter your email address & password to access your account. We look forward to helping you find and buy all of your cybersecurity in one place, in an hour for free!
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
																							<a href="https://www.staging.protectbox.com/login?email_segment=activate" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
																							Company number: NI643316  VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																							<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																							<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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

	public function recoverpass($fullname){

		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Password Reset</title>
		 </head>
		 <body>
				<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
				<tr>
					<td valign="midudle" align="center">
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . $fullname . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Password Reset
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
																
																To change your password, please click the below green "Reset Password" button (or <a href="https://www.staging.protectbox.com/recover_pass" target="_blank">https://www.staging.protectbox.com/recover_pass</a>) and enter this encryption key <span style="color:#EC8C0E">' . $encrypted_key . '</span> along with your registered email address.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																						<a href="https://www.staging.protectbox.com/recover_pass" style="text-decoration:none; color:#FFF;" data-color="link-white">Password Reset</a>
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
																			Company number: NI643316  VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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
		return $message;

	}

	public function deligate_assign_question($email,$del_name,$username){

		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>New Delegate Question-ProtectBox</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucwords($del_name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									A question for you to answer
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
																'.ucwords($username).', would like your help with completing our questionnaire to help them find and buy all of their cybersecurity. Please click the "Be A Delegate" button or <a href="https://www.staging.protectbox.com/be_delegate" target="_blank">https://www.staging.protectbox.com/be_delegate</a> and complete your delegated questions.
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
																						<a href="https://www.staging.protectbox.com/be_delegate" style="text-decoration:none; color:#FFF;" data-color="link-white">Be a delegate</a>
																					</multiline>
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
															If this was not you, please report this to team@protectbox.com. This is an automated message from ProtectBox. Please do not reply to this message. Contact our Customer Support team using team@protectbox.com or +44 (0)207 993 3037) or use chat on our website. 
															</multiline>
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
																			Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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
		return $message;

	}

	public function deligate_questioniare_basics_if_email($delegate_email,$fullname,$delegate_key,$company=""){
		
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
																			<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																	<span style="color:#6CA71B;">' . $fullname .', '.$company.'</span>,  would like your help with completing our questionnaire to help them find and buy all of their cybersecurity in one place, in an hour for free. As a delegate user you are not the company&#697;s main account holder but you are authorised to answer questions on their behalf.
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
																	Please click the "Activate Account" button or <a href="https://www.staging.protectbox.com/register/'.$delegate_key.'" target="_blank">https://www.staging.protectbox.com/register/'.$delegate_key.'</a> and use the following key <span style="color:#EC8C0E;">' . $delegate_key . '</span> to activate your account.
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
																							<a href="https://www.staging.protectbox.com/register/'.$delegate_key.'" style="text-decoration:none; color:#FFF;" data-color="link-white">Activate Account</a>
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
																			Company number: NI643316 VAT registration number 297 5082 62
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
	
	public function deligate_questioniare_basics_else_email($delegate_email,$del_name,$fullname,$delegate_key,$company=""){

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
																			<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																										Hi ' . $del_name . ',
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
																	<span style="color:#6CA71B;">'. $fullname . ' ,'.$company.'</span> would like your help with completing our questionnaire to help them find and buy all of their cybersecurity in one place, in an hour for free. Please click the "Login Here" button or <a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none;" data-color="link-white">https://www.staging.protectbox.com/delegate_login</a> using your email address and [insert password] to login. 
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
																							<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
																			Copyright &copy; 2020 ProtectBox Ltd. &nbsp;
																		</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																		<unsubscribe>
																		Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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

	public function deligate_questioniare_technical_if_email($delegate_email,$firstname,$lastname,$delegate_key){
		
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
						<!--Content Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as technical delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please take a second to sign up as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . '</span>. 
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Use <span style="color:#EC8C0E;">' . $delegate_key . '</span> as your secret key for activate your account. 
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
																						<a href="https://www.staging.protectbox.com/delegate_register" style="text-decoration:none; color:#FFF;" data-color="link-white">Sign up Here</a>
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
		return $message;
	}

	public function deligate_questioniare_technical_else_email($delegate_email,$firstname,$lastname){
	$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as technical delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please login as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . ' and password</span>. 
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
		</html>01-03-2019
		';
		return $message;
	}

	

	public function deligate_questioniare_nontech_if_email($delegate_email,$firstname,$lastname){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as non-technical delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please take a second to sign up as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . '</span>. 
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Use <span style="color:#EC8C0E;">' . $delegate_key . '</span> as your secret key for activate your account. 
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
																						<a href="https://www.staging.protectbox.com/delegate_register" style="text-decoration:none; color:#FFF;" data-color="link-white">Sign up Here</a>
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
		return $message;
	}

	public function deligate_questioniare_nontech_else_email($delegate_email,$firstname,$lastname){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as non-technical delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please login as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . ' and password</span>. 
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
		return $message;
	}

	public function deligate_questioniare_budget_if_email($delegate_email,$firstname,$lastname,$delegate_key){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as budget delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please take a second to sign up as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . '</span>. 
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Use <span style="color:#EC8C0E;">' . $delegate_key . '</span> as your secret key for activate your account. 
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
																						<a href="https://www.staging.protectbox.com/delegate_register" style="text-decoration:none; color:#FFF;" data-color="link-white">Sign up Here</a>
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
		return $message;
	}

	public function deligate_questioniare_budget_else_email($delegate_email,$firstname,$lastname){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Notification</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
						<!--Content Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi ' . $delegate_email . ',
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
																Congratulations! You have been chosen as budget delegate user for <span style="color:#6CA71B;">' . $firstname . ' ' . $lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please login as a delegate user using your email address <span style="color:#EC8C0E;">' . $delegate_email . ' and password</span>. 
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
		return $message;
	}

	public function deligate_send_reminder_email($del_email,$del_firstname,$del_lastname,$sme_firstname,$sme_lastname){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Delegate Reminder</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($del_firstname) . ' ' . ucfirst($del_lastname) . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																You have notified for answering delegate access questions by <span style="color:#6CA71B;">' . $sme_firstname . ' ' . $sme_lastname . '</span>.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Please login as a delegate user using your email address <span style="color:#EC8C0E;">' . $del_email . ' and password</span> for completing your task.
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
		return $message;
	}

	public function paypal_supplier_subscription_success($supplier_name,$email){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox Subscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($supplier_name) . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																You have notified for subscribing the dashboard successfully.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
															
														<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function stripe_supplier_unsubscription_success($supplier_name,$supplier_email,$subscriber_id){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox Unsubcription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($supplier_name) . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Message from ProtectBox
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																Thank you for your request. You have been unsubscribed. If your next month&#697;s subscription payment has alreday been requested, your payments will stop next month. Thank you for your business.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
															&nbsp;
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
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function stripe_supplier_unsubscription_success_admin($supplier_name,$supplier_email,$subscriber_id){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Supplier Unsubscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi Admin,
																								</multiline>
																							</td>
																						</tr>
																						
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Supplier Unsubcription
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																' . ucfirst($supplier_name) . ' has unsubscribed from ProtectBox.
																<li>Subscription No : '.$subscriber_id.'</li>
																<li>Supplier Email: '.$supplier_email.'</li>
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
															&nbsp;
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}


	public function paypal_supplier_subscription_failed($supplier_name,$email){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Supplier Subscription Failed</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($name) . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																You have notified for subscribing the dashboard unsuccessfully. Please login and try again later.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
															
														<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function paypal_smb_subscription_success($smb_name,$email,$currency,$amount){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox SUbscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($smb_name) . ',
																								</multiline>
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
														<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
															<multiline>
																Thank you for subscribing
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																You have successfully signed up to our Subscription service, which gives you continuos ongoing access to your answers to our questionnaire & our comparison tool.
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
																We have recieved your first month&#697;s payment of '.$currency.'&nbsp;'.$amount.' & will take each future payment for the same amount on this date each month.
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
																Please login by clicking the button below (or <a href="https://www.staging.protectbox.com/login" target="_blank">https://www.staging.protectbox.com/login</a>) to enjoy your service.
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
																						<a href="https://www.staging.protectbox.com/login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
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
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
															
														<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function paypal_supplier_subscription_successss($supplier_name,$email,$currency,$subscription_price){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox Subscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi ' . ucfirst($supplier_name) . ',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Message from ProtectBox
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																Thank you for your request. You have successfully signed up to our Subscription service. We have received your first month&#697;s payment of '.$currency.'&nbsp;'.$subscription_price.' & will take each future payment on this date each month. Please login below to enjoy your service.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
																					</multiline>
																				</td>
																			</tr>
																			
																		</table>
																		
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:60px; font-size:60px;" valign="middle" align="center" height="60">
															&nbsp;
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function paypal_smb_subscription_success_admin($smb_name,$email,$currency,$amount,$sme_id){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>SMB Subscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi Admin,
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									SMB Subscription
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
																Below new SMB subscription (&b first month&#697;s '.$currency.'&nbsp;'.$amount.' payment) received :
																<li>SMB ID: '.$sme_id.'</li>
																<li>SMB Name: '.$smb_name.'</li>
																<li>SMB Email: '.$email.'</li>
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
																			<!--<tr>
																				<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																					<multiline>
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
																					</multiline>
																				</td>
																			</tr>-->
																			
																		</table>
																		
																	</td>
																</tr>
															</table>
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function paypal_supplier_subscription_success_admin($supplier_name,$email,$currency,$amount,$supplier_id){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Supplier Subscription</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																									Hi Admin,
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Supplier Subscription
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																Below new Supplier Subcription(& first month&#697;s GBP 5.00 payment) received:
																<li>Supplier ID: '.$supplier_id.'</li>
																<li>Supplier Name: '.$supplier_name.'</li>
																<li>Supplier Email: '.$email.'</li>
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left">
															<table class="two-left-inner" width="335" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td valign="top" align="left">
																		<table class="two-left-inner" width="160" cellspacing="0" cellpadding="0" border="0" align="left">
																			<!--<tr>
																				<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																					<multiline>
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
																					</multiline>
																				</td>
																			</tr>-->
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
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
															
														<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function smb_refund_request($fullname,$email,$order_id,$serv_name,$price_detail,$price_cuurency)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Refund</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi ' . $fullname . ',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Thank you for your request
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					We have received the below refund request :
																					<li>Order number : ' . $order_id . '</li>
																					<li>Order amount : ' . $price_cuurency . ' ' . $price_detail . '</li> 
																					<li>Refunded product(s) : ' . $serv_name . '</li>
																					<li>Order email : ' . $email . '</li>
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
											 									&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					There could be a delay as we process the request due to banking & payment service requirements which we cannot control.
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Please visit your orders page in your account  by clicking the button below (or <a href="https://www.staging.protectbox.com/my_order" target="_blank">https://www.staging.protectbox.com/my_order</a>) to check the status of yur refund.
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:20px; font-size:30px;" valign="middle" align="center" height="20">
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
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">Order Status</a>
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
		return $message;

	}

	public function smb_refund_completed($fullname,$order_id,$service_currency,$service_price,$service_name,$cus_phone,$email)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Refund</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi ' . $fullname . ',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Your Refund has been completed
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
																					We have completed the below refund:
																					<li>Order number : ' . $order_id . '</li>
																					<li>Order amount : ' . $service_currency . ' ' . $service_price . '</li>
																					<li>Refunded Product(s) : ' . $service_name . '</li>
																					<li>Customer number : ' . $cus_phone . '</li>
																					<li>Customer email : ' . $email . '</li>
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
																					There could be a delay in your receiving the refund due to banking & payment service requirements which we do not control.
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:20px; font-size:30px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Please visit your "Orders" page in your account by clicking the button below (or <a href="https://www.staging.protectbox.com/my_order" target="_blank">https://www.staging.protectbox.com/my_order</a>) to see all of your orders.
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:30px;" valign="middle" align="center" height="20">
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
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">My Order</a>
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
																					If this was not you, then please ignore and delete this email.
																				</multiline>
																			</td>
																		</tr>
																				
																			<tr>
																			<td style="line-height:20px; font-size:25px;" valign="middle" align="center" height="20">
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
																			<td style="line-height:20px; font-size:25px;" valign="middle" align="center" height="20">
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
																			<td style="line-height:20px; font-size:40px;" valign="middle" align="center" height="20">
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
																			<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;

	}

	public function admin_refund_request($admin_fullname,$service_name,$order_id,$serv_name,$price_detail,$price_cuurency,$email,$cus_phone)
	{
		$message_supplier = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>SMB Refund</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
																						</td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:25px;" valign="middle" align="center" height="20">
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
																														Hi '.$admin_fullname.',
																													</multiline>
																												</td>
																											</tr>
																											<tr>
																												<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																													<multiline>
																														SMB Refund Request
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
																					Below SMB Refund received :
																					<li>SMB Order number : ' . $order_id . '</li>
																					<li>SMB Order amount : ' . $price_cuurency . ' ' . $price_detail . '</li>
																					<li>SMB Refunded product(s) : ' . $service_name . '</li>
																					<li>SMB number : ' . $cus_phone . '</li>
																					<li>SMB email : ' . $email . '</li>
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
																											<a href="https://www.www.protectbox.com/pending_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Approve</a>
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
																					Please approve this refund by visiting "Refunds" page by clicking below button (or <a href="https://www.www.protectbox.com/pending_refund_request" target="_blank">https://www.www.protectbox.com/pending_refund_request</a>)
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
						return $message_supplier;
						
	}

	public function admin_return_supplier($order_id,$cuurency,$ammount,$service_name,$smb_name,$smb_email,$supplier_fullnames)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Refund Request</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
																						</td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:25px;" valign="middle" align="center" height="20">
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
																														Hi ' . $supplier_fullname . ',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					You have a Refund, please process
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
																					We have received the below refund request : 
																					<li>Order number : ' . $order_id . '</li>
																					<li>Order amount : ' . $cuurency . ' ' . $ammount . '</li>
																					<li>Refunded product(s) : ' . $service_name . '</li>
																					<li>Customer name : ' . $smb_name . '</li>
																					<li>Customer email : ' . $smb_email . '</li>
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
																					Please process this refund by clciking the below button (or <a href="https://www.staging.protectbox.com/pending_refund_supplier" target="_blank">https://www.staging.protectbox.com/pending_refund_supplier</a>), making sure to add proof of refund payment.
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
																											<a href="https://www.staging.protectbox.com/pending_refund_supplier" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Process</a>
																										</multiline>
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

		return $message;
	}

	public function supplier_pending_refund_email($supplier_email,$supplier_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Refund Request</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi ' . $supplier_name . ',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Thank you for processing your refund
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					We have received your refund payment.
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
																					Please check the status of your refund by visiting "Refunds" page by clicking below button (or <a href="https://www.staging.protectbox.com/inprogress_refund_supplier" target="_blank">https://www.staging.protectbox.com/inprogress_refund_supplier</a>). We will keep this updated as the refund is completed.
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
																											<a href="https://www.staging.protectbox.com/inprogress_refund_supplier" style="text-decoration:none; color:#FFF;" data-color="link-white">My Refund Status</a>
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

		return $message;
	}

	public function supplier_pending_refund_email_admin($admin_fullname,$supplier_email,$supplier_name,$supplier_number,$order_id,$service_curency,$service_price,$service_name,$smb_number,$smb_email)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Refund Request</title>
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
																							<a href="#"><img src="https://www.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
																												</td>
																											</tr>
																											
																											<tr>
																												<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																					Below SMB Refund has been processed :
																					<li>SMB Order number : ' . $order_id . '</li>
																					<li>SMB Order amount : ' . $service_curency . ' ' . $service_price . ' </li>
																					<li>SMB Refund product(s) : ' . $service_name . '</li>
																					<li>SMB number : ' . $smb_number . '</li>
																					<li>SMB email : ' . $smb_email . '</li>
																					<li>Supplier name : ' . $supplier_name . '</li>
																					<li>Supplier number : ' . $supplier_number . '</li>
																					<li>Supplier email : ' . $supplier_email . '</li>
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
																					Please visit the "processing refund request" page to complete this refund by clicking below button (or <a href="https://www.protectbox.com/processing_refund_request" target="_blank">https://www.protectbox.com/processing_refund_request</a>).
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
																											<a href="https://www.protectbox.com/processing_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Complete</a>
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

		return $message;
	}

	public function supplier_payment_confirmed_email_admin($admin_fullname,$supplier_email,$supplier_name,$supplier_number,$order_id,$service_curency,$service_price,$service_name,$smb_number,$smb_email)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Refund Request</title>
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
																							<a href="#"><img src="https://www.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
																												</td>
																											</tr>
																											
																											<tr>
																												<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																					Below SMB Refund has been confirmed:
																					<li>SMB Order number : ' . $order_id . '</li>
																					<li>SMB Order amount : ' . $service_curency . ' ' . $service_price . ' </li>
																					<li>SMB Refund product(s) : ' . $service_name . '</li>
																					<li>SMB number : ' . $smb_number . '</li>
																					<li>SMB email : ' . $smb_email . '</li>
																					<li>Supplier name : ' . $supplier_name . '</li>
																					<li>Supplier number : ' . $supplier_number . '</li>
																					<li>Supplier email : ' . $supplier_email . '</li>
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
																					Please visit the "processing refund request" page to complete this refund by clicking below button (or <a href="https://www.protectbox.com/processing_refund_request" target="_blank">https://www.protectbox.com/processing_refund_request</a>).
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
																											<a href="https://www.protectbox.com/processing_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Complete</a>
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

		return $message;
	}
	
	public function smb_complete_refund_email($smb_name,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Refund Request</title>
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
																							<a href="#"><img src="https://www.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$smb_name.',
																													</multiline>
																												</td>
																											</tr>
																											<tr>
																												<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																													<multiline>
																														Refund complete
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
																					Your refund has been completed
																					<li>Order number : ' . $order_id . '</li>
																					<li>Order amount : ' . $cuurency . ' ' . $ammount . ' </li>
																					<li>Refund product(s) : ' . $service_name . '</li>
																					<li>Supplier name : ' . $supplier_fullnames . '</li>
																					<li>Supplier number : ' . $supplier_number . '</li>
																					<li>Supplier email : ' . $sup_email . '</li>
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
																					Please visit the "processing refund request" page to see this refund by clicking below button (or <a href="https://www.protectbox.com/processing_refund_request" target="_blank">https://www.protectbox.com/processing_refund_request</a>).
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
																											<a href="https://www.protectbox.com/processing_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Complete</a>
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

		return $message;
	}

	public function admin_complete_refund_email($admin_fullname,$sup_email,$supplier_fullnames,$supplier_number,$order_id,$cuurency,$ammount,$service_name,$smb_number,$smb_email)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Refund Request</title>
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
																							<a href="#"><img src="https://www.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
																												</td>
																											</tr>
																											<tr>
																												<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																													<multiline>
																														Refund complete
																													</multiline>
																												</td>
																											</tr>
																										
																											<tr>
																												<td style="line-height:20px; font-size:60px;" valign="middle" align="center" height="20">
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
																					Below SMB Refund has been completed
																					<li>SMB Order number : ' . $order_id . '</li>
																					<li>SMB Order amount : ' . $cuurency . ' ' . $ammount . ' </li>
																					<li>SMB Refund product(s) : ' . $service_name . '</li>
																					<li>SMB number : ' . $smb_number . '</li>
																					<li>SMB email : ' . $smb_email . '</li>
																					<li>Supplier name : ' . $supplier_fullnames . '</li>
																					<li>Supplier number : ' . $supplier_number . '</li>
																					<li>Supplier email : ' . $sup_email . '</li>
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
																					Please visit the "processing refund request" page to see this refund by clicking below button (or <a href="https://www.protectbox.com/processing_refund_request" target="_blank">https://www.protectbox.com/processing_refund_request</a>).
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
																											<a href="https://www.protectbox.com/processing_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Complete</a>
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

		return $message;
	}
	
	public function supplier_complete_refund_email($supplier_fullnames,$order_id,$cuurency,$ammount,$smb_name,$service_name,$smb_number,$smb_email)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Refund Request</title>
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
																							<a href="#"><img src="https://www.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$supplier_fullnames.',
																													</multiline>
																												</td>
																											</tr>
																											<tr>
																												<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																													<multiline>
																														Refund complete
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
																					Your refund has been completed
																					<li>SMB Order number : ' . $order_id . '</li>
																					<li>SMB Order amount : ' . $cuurency . ' ' . $ammount . ' </li>
																					<li>SMB Refund product(s) : ' . $service_name . '</li>
																					<li>SMB name : ' . $smb_name . '</li>
																					<li>SMB number : ' . $smb_number . '</li>
																					<li>SMB email : ' . $smb_email . '</li>
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
																					Please visit the "processing refund request" page to see this refund by clicking below button (or <a href="https://www.protectbox.com/processing_refund_request" target="_blank">https://www.protectbox.com/processing_refund_request</a>).
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
																											<a href="https://www.protectbox.com/processing_refund_request" style="text-decoration:none; color:#FFF;" data-color="link-white">Refund Complete</a>
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

		return $message;
	}

	public function smb_order_bundle($smb_email,$smb_name,$insert_order,$currency,$bundle_price)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>Order (No. '.$insert_order.', '.$currency.' '.number_format($bundle_price,2).') Received-ProtectBox</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																				<table class="two-left-inner" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																					<tr>
																						<td valign="top" align="left">
																							
																							<table class="full" width="250" cellspacing="0" cellpadding="0" border="0" align="left">
																								<tr>
																									<td valign="top" align="left">
																										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																											<tr>
																												<td style="font-family:Open Sans, Verdana, Arial; font-size:20px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																													<multiline>
																														Hi '.$smb_name.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Thank you for your Order
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																				We have received your payment of '.$currency.' '.number_format($bundle_price,2).'  for the below Order, invoice attached:
																					<li>Order No. : '.$insert_order.'</li>
																					<li>Company Name : &nbsp;</li>
																					<li>Order email : '.$smb_email.'</li>
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Please visit your Orders page for updates or to download your order now by clicking the "Order Status" button below (or <a href="https://www.protectbox.com/my_order" target="_blank">https://www.protectbox.com/my_order</a>).
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td valign="top" align="left">
																				<table class="two-left-inner" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																					<tr>
																						<td valign="top" align="left">
																							<table class="two-left-inner" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																								<tr>
																									<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																										<multiline>
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">Order Status</a>
																										</multiline>
																									</td>
																								</tr>
																								<tr>
																									<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																										&nbsp;
																									</td>
																								</tr>
																								<tr>
																									<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
																										<hr>
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
																		<
																				
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
																							<unsubscribe>
																							Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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

		return $message;
	}

	public function supplier_order_bundle($smb_email,$smb_name,$insert_order,$currency,$bundle_price,$sme_id,$supplier_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order Received</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$supplier_name.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					You have made a sale
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					We have received a payment of '.$currency.' '.$bundle_price.' : 
																					<li>Order number : '.$insert_order.'</li>
																					<li>Order email : '.$smb_email.'</li>
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					This payment has been processed to your account.There could be a delay due to banking & payment system requirements which we cannot control.
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
																					Please visit your "Sales" page in your ProtectBox account now by clcking the button below (or <a href="https://www.staging.protectbox.com/my_order" target="_blank">https://www.staging.protectbox.com/my_order</a>) to check the sale status.
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
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">Sale Status</a>
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

		return $message;
	}

	public function smb_order_bundle_admin($admin_fullname,$smb_email,$smb_name,$insert_order,$currency,$bundle_price,$sme_id)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>SMB Order</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
																												</td>
																											</tr>
																											<tr>
																												<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																													<multiline>
																														SMB ORDER
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
																				Below SMB order
																					We have received payment of '.$currency.' '.$bundle_price.' :
																					<li>SME order number : '.$insert_order.'</li>
																					<li>SME order email : '.$smb_email.'</li>
																					<li>SME order name : '.$smb_name.'</li>
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Please visit pending orders page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/view_pending_orders" target="_blank">https://www.staging.protectbox.com/view_pending_orders</a>)  to check the pending order.
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
																											<a href="https://www.staging.protectbox.com/view_pending_orders" style="text-decoration:none; color:#FFF;" data-color="link-white">Pending Orders</a>
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

		return $message;
	}
	
	public function send_query($admin_fullname,$first_name,$last_name,$email,$phone,$message){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Enquiry Mail</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.$admin_fullname.',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									New enquiry from user
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
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
																Below new mail received from contact page :
																<li>Name: '.$first_name.' '.$last_name.'</li>
																<li>Email: '.$email.'</li>
																<li>Phone: '.$phone.'</li>
																<li>Message: '.$message.'</li>
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
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
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
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
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
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
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
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
		return $message;
	}

	public function regisuccess_admin($admin_fullname,$fullname,$email,$user_type){
		
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>User Registration</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucfirst($admin_fullname).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									User Registration
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
																A new user has recently registered in ProtectBox.
																Below is new user details:
																<li>User Name: '.$fullname.'</li>
																<li>User Email: '.$email.'</li>
																<li>User Type: '.$user_type.'</li>
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
																			<!--<tr>
																				<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																					<multiline>
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
																					</multiline>
																				</td>
																			</tr>-->
																			
																		</table>
																		
																	</td>
																</tr>
															</table>
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		return $message;
	}

	public function delegate_reg_admin($admin_fullname,$fullname,$delegate_email,$del_name,$user_type){
		
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>User Registration</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucwords($admin_fullname).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Delegate Registration
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
																A new delegate user has recently assigned in ProtectBox for '.$fullname.'.
																Below is new delegate user details:
																<li>Delegate User Name: '.$del_name.'</li>
																<li>Delegate Email: '.$delegate_email.'</li>																
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
																			<!--<tr>
																				<td style="background: rgb(108, 167, 27); font-family: Open Sans, Verdana, Arial; font-size: 14px; color: rgb(255, 255, 255); font-weight: normal; text-transform: uppercase; line-height: 28px; border-radius: 25px;" data-bgcolor="theme-bg" valign="middle" align="center" height="48">
																					<multiline>
																						<a href="https://www.staging.protectbox.com/delegate_login" style="text-decoration:none; color:#FFF;" data-color="link-white">Login Here</a>
																					</multiline>
																				</td>
																			</tr>-->
																			
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
																			Company number: NI643316 VAT registration number 297 5082 62 <a href="https://www.linkedin.com/company/protectbox-ltd" ><img src="https://www.staging.protectbox.com/images/in-1.png" width="30px"> </a>
																			<a href="https://twitter.com/ProtectBoxLtd/" ><img src="https://www.staging.protectbox.com/images/tw-1.png" width="30px"> </a>
																			<a href="https://www.facebook.com/protectbox/" ><img src="https://www.staging.protectbox.com/images/fb-1.png" width="30px"> </a>
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
		return $message;
	}

	public function order_status_update_sme($smb_fullname,$status,$order_id,$service_name){
		
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$smb_fullname.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					New update for your Order no '.$order_id.'
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Item in your order has been updated.
																					'.$service_name.' in order with order id '.$order_id.' has been <b>'.$status.'</b>! 
																					Hope you liked our service.
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Detailed order details have been also updated in your orders page.
																					Please visit your orders page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/my_order" target="_blank">https://www.staging.protectbox.com/my_order</a>).
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">Order Status</a>
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
		return $message;
	}

	public function order_status_update_supplier($sup_fullname,$status,$order_id,$service_name){
		
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$sup_fullname.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Order update of your received order '.$order_id.'
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Order status of your order id '.$order_id.' has been updated  to <b>'.$status.'</b>
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Detailed order details have been also updated in your sales page.
																					Please visit your sales page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/sales" target="_blank">https://www.staging.protectbox.com/sales</a>).
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																											<a href="https://www.staging.protectbox.com/sales" style="text-decoration:none; color:#FFF;" data-color="link-white">Sales</a>
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
		return $message;
	}

	public function order_status_update_admin($admin_fullname,$status,$order_id,$service_name){
		
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Order status changed for Order '.$order_id.'
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Order status of your order id '.$order_id.' has been updated  to <b>'.$status.'</b>
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Detailed order details have been also updated in your order page.
																					Please visit your sales page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/view_all_orders" target="_blank">https://www.staging.protectbox.com/view_all_orders</a>).
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																											<a href="https://www.staging.protectbox.com/view_all_orders" style="text-decoration:none; color:#FFF;" data-color="link-white">Order</a>
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
							</html>';
		return $message;
	}

	public function refund_request($message_body,$supplier_fullname)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Refund Request</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
																						</td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:25px;" valign="middle" align="center" height="20">
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
																														Hi ' . $supplier_fullname . ',
																													</multiline>
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
																		
																		'.$message_body.'
																			
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

		return $message;
	}

	public function payment_status_update_supplier($sup_fullname,$selectedstat,$real_order,$service_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order</title>
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
																			<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$sup_fullname.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Payment status update of your received order '.$real_order.'
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Payment status of your order id '.$real_order.' has been updated  to <b>'.$selectedstat.'</b>
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Detailed order details have been also updated in your sales page.
																					Please visit your sales page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/sales" target="_blank">https://www.staging.protectbox.com/sales</a>).
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
																											<a href="https://www.staging.protectbox.com/sales" style="text-decoration:none; color:#FFF;" data-color="link-white">Sales</a>
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

		return $message;
	}
	


	public function payment_status_update_admin($admin_fullname,$selectedstat,$real_order,$service_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$admin_fullname.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					Supplier payment status changed for Order '.$real_order.'
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Supplier payment status of your order id '.$real_order.' has been updated  to <b>'.$selectedstat.'</b>
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					Detailed order details have been also updated in your order page.
																					Please visit your sales page in your ProtectBox account now by clicking the button below(or <a href="https://www.staging.protectbox.com/view_all_orders" target="_blank">https://www.staging.protectbox.com/view_all_orders</a>).
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="line-height:30px; font-size:30px;" valign="middle" align="center" height="30">
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
																											<a href="https://www.staging.protectbox.com/view_all_orders" style="text-decoration:none; color:#FFF;" data-color="link-white">Order</a>
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

		return $message;
	}

	public function td_uk_daily_email($admin_name,$totat_product_updated,$active_product,$new_product)
	{
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox Daily TD UK Data Pulling</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucfirst($admin_name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Daily TD UK Active data selection
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
																TD UK data pulling complete for '.date('Y-m-d').' Below is the result :
																<h3>Total number of products placed in local DB</h3>
																<li><b>#'.$totat_product_updated.'</b> of updated products</li>
																<li><b>#'.$active_product.'</b> of active products (TD Group category auto-mapped to PB category)</li>
																<li><b>#'.$new_product.'</b> of new products to map (TD Group category NOT auto-mapped to PB category so have to be mapped individually by Kiran or Admin Team)</li>
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		</html>';

		return $message;
	}

	public function td_uk_daily_email_two($admin_name,$total_products)
	{
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox automatically pulled Data from TD UK daily email feeds</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucfirst($admin_name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Automatically pulled Data from TD UK daily email feeds
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
																TD UK data product pulling has been completed. Total number of products pulled from TD UK email feeds are <b>'.$total_products.'</b>.
																
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		</html>';

		return $message;
	}

	public function td_us_daily_email_two($admin_name,$total_products)
	{
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox automatically pulled Data from TD US daily email feeds</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucfirst($admin_name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Automatically pulled Data from TD US daily email feeds
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
																TD US data product pulling has been completed. Total number of products pulled from TD US email feeds are <b>'.$total_products.'</b>.
																
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		</html>';

		return $message;
	}

	public function td_us_daily_email($admin_name,$totat_product_updated,$active_product,$new_product)
	{
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>ProtectBox Daily TD US Data Pulling</title>
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
																		<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
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
																									Hi '.ucfirst($admin_name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Daily TD US Active data selection
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
																TD US data pulling complete for '.date('Y-m-d').' Below is the result :
																<h3>Total number of products placed in local DB</h3>
																<li><b>#'.$totat_product_updated.'</b> of updated products</li>
																<li><b>#'.$active_product.'</b> of active products (TD Group category auto-mapped to PB category)</li>
																<li><b>#'.$new_product.'</b> of new products to map (TD Group category NOT auto-mapped to PB category so have to be mapped individually by Kiran or Admin Team)</li>
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
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
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
		</html>';

		return $message;
	}


	public function techdata_uk_orders($smb_email,$smb_name,$insert_order,$currency,$bundle_price,$sme_id,$supplier_name)
	{
		$message = '<!doctype html>
							<html lang="en">
							 <head>
							  <meta charset="UTF-8">
							  <meta name="Generator" content="EditPlus®">
							  <meta name="Author" content="">
							  <meta name="Keywords" content="">
							  <meta name="Description" content="">
							  <title>ProtectBox Order Received</title>
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
																							<a href="#"><img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /></a>
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
																														Hi '.$supplier_name.',
																													</multiline>
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
																			<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																				<multiline>
																					You have made a sale
																				</multiline>
																			</td>
																		</tr>
																		<tr>
																			<td style="line-height:20px; font-size:5px;" valign="middle" align="center" height="20">
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					We have received a payment of '.$currency.' '.$bundle_price.' : 
																					<li>Order number : '.$insert_order.'</li>
																					<li>Order email : '.$smb_email.'</li>
																				</multiline>
																			</td>
																		</tr>

																		<tr>
																			<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
																				<multiline>
																					This payment has been processed to your account.There could be a delay due to banking & payment system requirements which we cannot control.
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
																					Please visit your "Sales" page in your ProtectBox account now by clcking the button below (or <a href="https://www.staging.protectbox.com/my_order" target="_blank">https://www.staging.protectbox.com/my_order</a>) to check the sale status.
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
																											<a href="https://www.staging.protectbox.com/my_order" style="text-decoration:none; color:#FFF;" data-color="link-white">Sale Status</a>
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

		return $message;
	}
}