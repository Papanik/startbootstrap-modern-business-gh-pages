
<!-- Created by PhpStorm.-->
<!-- User: COSTAS-->
<!-- Date: 10/19/2016-->
<!-- Time: 10:52 AM-->
<!---->
<!---->
<!---->
<!---->
<!--1->cheing require path...-->
<!--2->cheing Host-->
<!--3->cheing Username-->
<!--4->cheing Password-->
<!---->
<!--5->cheing setFrom-->
<!--6->cheing addAddress-->


<?php
require 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';


$vars = [
    'email' => 'costaspapanikolaou1@gmail.com',
    'pass' => 'sarantapodarousa'
];


$mail = new PHPMailer();

$mail->SMTPDebug = 4;
//$mail->isMail();                                      // Set mailer to use SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $vars['email'];                 // SMTP username
$mail->Password = $vars['pass'];
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to or 465 or 587




$mail->From = $vars['email'];
$mail->FromName = 'kostas';

//$mail->setFrom('costaspapanikolaou1@gmail.com', 'Mailer');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress($vars['email']);               // Name is optional

# $mail->addCC('cc@example.com');
# $mail->addBCC('bcc@example.com');



$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message;l;zmvx.c,mx.v,mxcv.xm.m.xcvxcvbody <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>