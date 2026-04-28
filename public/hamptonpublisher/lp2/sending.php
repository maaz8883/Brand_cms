<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './php_mail/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

$txt = 'Name: '.$_POST['cn'].'<br> 
Phone: 	'.$_POST['pn'].'<br>
Email: 	'.$_POST['em'].'<br>
Link: 	'.$_POST['link'].'<br>
Message: '.$_POST['msg'].'<br>
Brand: Hampton Publishers Landing Page  LP2';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
// $mail->Host = 'mail.hamptonpublishers.com';premium52.web-hosting.com
$mail->Host = 'premium52.web-hosting.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->Username = 'info@hamptonpublishers.com';
$mail->Password = '!Computer@123';
$mail->setFrom('info@hamptonpublishers.com	', 'Hampton Publishers Landing Page  LP2');
$mail->addAddress('signups.hampton@gmail.com'); 
$mail->addAddress('leads.staffshaw@gmail.com'); 
$mail->addAddress('usama.staffshaws@gmail.com'); //call this multiple times for
$mail->addAddress('elichris414@gmail.com'); //call this multiple times for
$mail->addAddress('eli.chris@digitalsynergyservices.com'); //call this multiple times for
$mail->addAddress('stafford@staffshaw.com'); //call this multiple times for
$mail->addAddress('staffordkhokhar@gmail.com'); //call this multiple times for
$mail->addAddress('shahan.signups@digitalsynergyservices.com');
$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);





$mail->AltBody = 'alternative body if html fails to load';
//$mail->addAttachment('/path/to/file/); //OPTIONAL attachment

if (!$mail->send()) {
    echo "Mailer Error: ";
    echo $mail->ErrorInfo;
} else {
    header('Location: https://hamptonpublishers.com/thankyou.php');

}

?>