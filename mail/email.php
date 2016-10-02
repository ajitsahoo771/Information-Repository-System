<?php
//mail service start
	include("class.phpmailer.php");
include("class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com"; // specify main and backup server // Twinbrothers SMTP server Name "gains.lathalinuxcloud.com";
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "cutmmarket@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "cutmmarket15"; // give your gmail password
$mail->SMTPDebug =0;
$mail->SMTPSecure = 'ssl';

$from1 = "cutmmarket@gmail.com"; // Reply to this email
$password = "cutmmarket15";// your password
$pass=$password;
//mail service end	
?>
