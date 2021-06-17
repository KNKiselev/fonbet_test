<?php
include("class.phpmailer.php");
$mail = new PHPMailer();    
$mail->IsHTML(true);
$mail->SetFrom('tyrin_ea@fonbet.ru'); //pass K#D9ijui@8hHDg3h
$mail->AddAddress('alekseev_ai@fonbet.ru'); 
$mail->Server('owa.bkfon.ru');
$mail->Subject="fon test";
$mail->Body="test message";
$mail->Send();
?>
