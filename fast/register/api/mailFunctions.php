<?php

require_once("business/Phpmailer.class.php");


function sendAccountConfMail($username)
{
	$account = getAccountbyname($username);
	$email = $account[0]['email'];
	$code = $account[0]['code'];
	$url = URL. "?page=confirm&code=" .$code;
	$url .= "&token=sadb153nfalopadityatuie7nxcvgRTyhjdfbnUjatinInmakloso90";
	$subject = SUBSCRIBE_SUBJECT;
	$username = $account[0]['username'];
	$body = "<html>
	<head>

	</head>
	<body>
		Hi {$username},<br> 
		This is a confirmation mail for IIIT-Allahabad Effervescence user account. <br>
		Please click the following link to validate your account. <br><br> 
		<a href='{$url}' >Click to Confirm.</a><br><br>

		Thank You for connecting with Effervescence MMXIV in association with eBay Inc., Line App and <span style='size:4'><span style='color:#ff9900;'>MOBI</span><span style='color:#0b5394'>KWIK</span></span><br><br><br>
		<img src='cid:qrcode' /><br>

		<h3>Feel like buying exciting stuff from eBay for free?</h3>
		Here are three easy steps for you:
		<ol>
			<li>Download the LINE messenger Android application by simply scanning the given QR code or from the link - <a href='http://bit.ly/XRuJSL' target='_blank'>http://bit.ly/XRuJSL</a></li>
			<li>Just text 'EFFE14' over the LINE app to the <b>Phone Number</b> - +91 9559039231. <b>USER ID</b> - effemm14</li>
			<li>As soon as you complete the above two steps, your eBay vouchers are on their way to your homes.</li>
			&#42; The eBay voucher will be of &#8377; 100/- and can be redeemed online on the website <a href='http://ebay.in' target='_blank'>http://ebay.in</a> . The minimum purchase one has to make is of &#8377; 110/-.
		</ol>

		For any queries please mail to <a href='mailto:effervescence@iiita.ac.in'>effervescence@iiita.ac.in</a><br><br>

		--<br>

		<i>This email has been generated automatically. Please do not reply.</i>
	</body>
</html>" ;
	
	if (sendMail($email, $subject, $body)) {
		return 1;
	} else {
		return 0;
	}
}

function sendMail( $subscriberEmail, $subject, $body) 
{
	$timezone = "Asia/Calcutta";
	date_default_timezone_set($timezone);
	$mail  = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->IsSMTP();    // set mailer to use SMTP^M
	$mail->Host = MAIL_HOST;    // specify main and backup server^M
	$mail->SMTPAuth = true;    // turn on SMTP authentication^M
	$mail->Username = MAIL_FROM;    // Gmail username for smtp.gmail.com -- CHANGE --^M
	$mail->Password = MAIL_FROM_PWD;    // SMTP password -- CHANGE --^M
	$mail->Port = MAIL_PORT;    // SMTP Port^M
	$mail->Subject = $subject;
	$mail->AddEmbeddedImage('img/qrcode.jpg', 'qrcode');
	$mail->MsgHTML($body);
	//echo $body;
	$mail->IsHTML(true);
	$mail->SetFrom(MAIL_FROM, 'Effervescence IIITA');
	$mail->From = MAIL_FROM;    //From Address -- CHANGE --^M
	$mail->FromName = "Effervescence IIITA";    //From Name -- CHANGE --^M
	$mail->AddAddress($subscriberEmail, "");    //To Address -- CHANGE --^M
	
	if(!$mail->Send()) {
			return 0;
	}
	return 1;
}
?>	
