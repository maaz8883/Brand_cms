<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './php_mail/vendor/autoload.php';

// Form Data
$name = $_POST['cn'] ?? '';
$phone = $_POST['pn'] ?? '';
$email = $_POST['em'] ?? '';
$link = $_POST['link'] ?? '';
$message = $_POST['msg'] ?? '';

// IP Address
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    else return $_SERVER['REMOTE_ADDR'];
}
$ip = getUserIP();

// Country using ip-api.com
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);
$country = $ipData['country'] ?? 'Unknown';

// Referrer URL
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct / Unknown';

// Browser Details
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

// Build Message
$txt = "
<b>Name:</b> $name<br> 
<b>Phone:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Link:</b> $link<br>
<b>Message:</b> $message<br>
<b>Brand:</b> <?php echo $bname ?><br><br>

<b>IP Address:</b> $ip<br>
<b>Country:</b> $country<br>
<b>Referrer URL:</b> $referrer<br>
<b>Browser/Device Info:</b> $userAgent<br>
";

// PHPMailer
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
$mail->Host = 'mail.theglobalpublishers.com'; 
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;

$mail->Username = '<?php echo $email ?>';
$mail->Password = '!Global@Publishers110';
$mail->setFrom('<?php echo $email ?>', '<?php echo $bname ?>');
$mail->addAddress('<?php echo $email ?>');
$mail->addAddress('muhammadusamastaffshaw@gmail.com');
$mail->addAddress('shahan.salman@digitalsynergyservices.com');
$mail->addAddress('zohaibkhan.staffshaw@gmail.com');


$mail->Subject = 'Lead Information with Visitor Details';
$mail->msgHTML($txt);
$mail->AltBody = strip_tags($txt);

// Send Mail
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: https://theglobalpublishers.com/thankyou.php');
}

?>
