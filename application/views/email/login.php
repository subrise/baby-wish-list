<html>
<head>
	<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8' />
</head>
<body style="background-color: #ececec" align="center">
	<div width="100%" height="100%" align="center">
		<table border="0" left="0" top="0" cellpadding="0" cellspacing="0">
			<tr>
				<td style="border-spacing: 0px; padding: 20px 0 20px 0;">
					<table border="0" width="539" left="0" top="0" cellpadding="0" cellspacing="0" style="border-spacing: 0px;">
						<tr>
							<td colspan="3" width="539" height="1" bgcolor="#d2d2d2"></td>
						</tr>
						<tr>
							<td width="1" bgcolor="#d2d2d2"></td>
							<td width="537" style="padding: 0 30px 0 30px" bgcolor="#FFFFFF">
								<table border="0" bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0px; border-collapse: collapse; -webkit-text-size-adjust: 100%;">
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #000000; line-height: 15px; padding-bottom: 22px; padding-top: 47px;">
											Dear<?php echo (isset($name) && !empty($name)) ? ' '.$name : ''  ?>,
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #000000; line-height: 15px; padding-bottom: 22px;">
											By visiting this link you will be able to login to our baby's wishlist.
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #000000; line-height: 15px; padding-bottom: 22px;">
											<?php echo (isset($login_url)) ? HTML::anchor($login_url, $login_url, array('style' => "color:#0a8de9; text-decoration:none;")) : 'LOGIN URL' ?>
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #7A7A7A;  line-height: 15px; padding-bottom: 37px;">
											We are trying to make our login process as simple as possible.
											You can always use this link to login to our site, or create a
											password on the website and login the traditional way.
											<?php echo (isset($help_url)) ? HTML::anchor($help_url, 'Learn more.', array('style' => "color:#0a8de9; text-decoration:none;")) : '' ?>
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #000000; line-height: 15px; padding-bottom: 22px;">
											Sincerely,
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #000000; line-height: 15px; padding-bottom: 5px;">
											Shanti &amp; Sammy
										</td>
									</tr>
									<tr>
										<td align="left" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 13px; font-weight: normal; color: #7A7A7A; line-height: 15px; padding-bottom: 22px;">
											The Parents
										</td>
									</tr>
								</table>
							</td>
							<td width="1" bgcolor="#d2d2d2"></td>
						</tr>
						<tr>
							<td colspan="3" width="539" class="paperBottomImage" height="24" style="vertical-align:top;">
								<img src="<?php echo URL::base() ?>assets/email/paper_bottom_539x24.png" width="539" height="100%" style="display: block;" alt=""/>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table border="0" width="539" left="0" top="0" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%;">
			<tr>
				<td align="center" style="border-spacing: 0px; line-height: 14px; padding-left: 10px; padding-right: 10px;">
					<a style="font-family: Helvetica, Arial, Sans-Serif; font-size: 11px; color: #AAADB4; text-shadow: 0px 1px #FFFFFF; font-weight:bold; text-decoration: none;" href="http://subrise.com">
						Subrise Games
					</a>
				</td>
			</tr>
			<tr>
				<td align="center" style="font-family: Helvetica, Arial, Sans-Serif; font-size: 11px;font-weight: normal;color: #AAADB4; line-height: 14px; text-shadow: 0px 1px #FFFFFF; padding-left: 10px; padding-right: 10px;">
					Copyright 2012 <?php if (date('Y', time()) > 2012) echo ' - '.date('Y', time()) ?> Subrise Games. All Rights Reserved.
				</td>
			</tr>
		</table>
	</div>
</body>
</html>