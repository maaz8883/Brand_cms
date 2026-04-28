<?php 
require './php_mail/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// -------- FORM FIELDS --------
$name     = $_POST['cn'] ?? '';
$phone    = $_POST['pn'] ?? '';
$email    = $_POST['em'] ?? '';
$link     = $_POST['link'] ?? '';
$message  = $_POST['msg'] ?? '';
$manuscript = $_POST['manuscript'] ?? '';
$publishedBefore = $_POST['publishedbefore'] ?? '';
$publishedPlan   = $_POST['publishedplan'] ?? '';
$servicelooking  = isset($_POST['servicelooking']) ? implode(', ', $_POST['servicelooking']) : '';

// -------- GET IP --------
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else return $_SERVER['REMOTE_ADDR'];
}
$ip = getUserIP();

// -------- REFERRER / COUNTRY / BROWSER INFO --------
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct Visit';
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);
$country = $ipData['country'] ?? 'Unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

function getOS($ua) {
    $oses = ['Windows' => 'Windows', 'Macintosh' => 'Mac', 'iPhone' => 'iOS', 'Android' => 'Android', 'Linux' => 'Linux'];
    foreach ($oses as $key => $val) {
        if (stripos($ua, $key) !== false) return $val;
    }
    return 'Unknown OS';
}
$os = getOS($userAgent);
$submittedAt = date('Y-m-d H:i:s');

// -------- EMAIL BODY --------
$txt = "
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Link:</b> $link<br>
<b>Message:</b> $message<br>
<b>Manuscript:</b> $manuscript<br>
<b>Published Before:</b> $publishedBefore<br>
<b>Publishing Plan:</b> $publishedPlan<br>
<b>Services Looking For:</b> $servicelooking<br>
<b>Brand:</b> Hampton Publishers<br><br>

<b>IP Address:</b> $ip<br>
<b>Country:</b> $country<br>
<b>Referrer:</b> $referrer<br>
<b>Submitted At:</b> $submittedAt<br>
<b>Browser:</b> $userAgent<br>
<b>Device OS:</b> $os
";

// -------- SETUP PHPMailer --------
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
// $mail->Host = 'premium52.web-hosting.com';
$mail->Host = 'mail.hamptonpublishers.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'info@hamptonpublishers.com';
$mail->Password = '!Computer@123';
$mail->setFrom('info@hamptonpublishers.com', 'Hampton Publishers Landing Page');

$mail->addAddress('signups.hampton@gmail.com'); 
$mail->addAddress('leads.staffshaw@gmail.com'); 
$mail->addAddress('muhammadusamastaffshaw@gmail.com'); 
$mail->addAddress('elichris414@gmail.com'); 
$mail->addAddress('eli.chris@digitalsynergyservices.com'); 
$mail->addAddress('stafford@staffshaw.com'); 
$mail->addAddress('staffordkhokhar@gmail.com');
$mail->addAddress('zohaibkhan.staffshaw@gmail.com');
$mail->addAddress('shahan.signups@digitalsynergyservices.com');

$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);
$mail->AltBody = strip_tags($txt);

// -------- SEND --------
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: https://hamptonpublishers.com/thankyou.php');
}
?>
