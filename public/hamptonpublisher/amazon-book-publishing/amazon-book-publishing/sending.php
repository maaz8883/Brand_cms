<?php 
require './php_mail/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions 

$txt = 'Name: '.$_POST['cn'].'<br> 
Phone: 	'.$_POST['pn'].'<br>
Email: 	'.$_POST['em'].'<br>
Link: 	'.$_POST['link'].'<br>
Message: '.$_POST['msg'].'<br>
Brand: Hampton Publishers';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
$mail->Host = 'mail.hamptonpublishers.com';
// $mail->Host = 'premium52.web-hosting.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'info@hamptonpublishers.com';
$mail->Password = '!Computer@123';
$mail->setFrom('info@hamptonpublishers.com	', 'Hampton Publishers Landing Page');
$mail->addAddress('signups.hampton@gmail.com'); 
$mail->addAddress('signups.hampton@gmail.com'); 
$mail->addAddress('leads.staffshaw@gmail.com'); 
$mail->addAddress('muhammadusamastaffshaw@gmail.com'); //call this multiple times for
$mail->addAddress('elichris414@gmail.com'); //call this multiple times for
$mail->addAddress('eli.chris@digitalsynergyservices.com'); //call this multiple times for
$mail->addAddress('shahan.signups@digitalsynergyservices.com'); //call this multiple times for

$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);





$mail->AltBody = 'alternative body if html fails to load';

$name = $_POST['cn'];
$phone = $_POST['pn'];
$email = $_POST['em'];
$link = $_POST['link'];
$msg = $_POST['msg'];



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.hubapi.com/crm/v3/objects/contacts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"properties\":{\"email\": \"$email\",\"phone\":\"$phone\",\"company\":\"$link\",\"website\":\"$link\",\"lastname\":\" \",\"firstname\": \"$name\"}}",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: Bearer pat-na1-91564e76-f0b7-477b-bb7e-cbb1d6655951",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

//hampton hubspot token pat-na1-91564e76-f0b7-477b-bb7e-cbb1d6655951
//$mail->addAttachment('/path/to/file/); //OPTIONAL attachment

if (!$mail->send()) {
    echo "Mailer Error: ";
    echo $mail->ErrorInfo;
} else {
    header('Location: https://hamptonpublishers.com/thankyou.php');

}

?>