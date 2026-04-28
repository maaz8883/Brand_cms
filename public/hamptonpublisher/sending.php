<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './php_mail/vendor/autoload.php';

// -------- Get Form Data --------
$name   = $_POST['cn'] ?? '';
$phone  = $_POST['pn'] ?? '';
$email  = $_POST['em'] ?? '';
$link   = $_POST['link'] ?? '';
$msg    = $_POST['msg'] ?? '';

// -------- Get IP Address --------
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else return $_SERVER['REMOTE_ADDR'];
}
$ip = getUserIP();

// -------- Get Referrer URL --------
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct Visit';

// -------- Get Country from IP --------
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);
$country = $ipData['country'] ?? 'Unknown';

// -------- Get User Agent and OS --------
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

function getOS($userAgent) {
    $osArray = [
        'Windows'   => 'Windows',
        'Macintosh' => 'Mac OS',
        'iPhone'    => 'iOS',
        'iPad'      => 'iOS',
        'Android'   => 'Android',
        'Linux'     => 'Linux'
    ];
    foreach ($osArray as $key => $os) {
        if (stripos($userAgent, $key) !== false) {
            return $os;
        }
    }
    return 'Unknown OS';
}
$deviceOS = getOS($userAgent);

// -------- Submission Date --------
$submittedAt = date('Y-m-d H:i:s');

// -------- Email Body --------
$txt = '
Name: ' . $name . '<br> 
Phone: ' . $phone . '<br>
Email: ' . $email . '<br>
Link: ' . $link . '<br>
Message: ' . $msg . '<br>
Brand: $bname<br><br>

<b>IP Address:</b> ' . $ip . '<br>
<b>Country:</b> ' . $country . '<br>
<b>Referrer:</b> ' . $referrer . '<br>
<b>Submitted At:</b> ' . $submittedAt . '<br>
<b>Browser Info:</b> ' . $userAgent . '<br>
<b>Device OS:</b> ' . $deviceOS;

// -------- Mail Setup --------
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
$mail->setFrom('info@hamptonpublishers.com', '$bname');

$mail->addAddress('signups.hampton@gmail.com'); 
$mail->addAddress('leads.staffshaw@gmail.com');
$mail->addAddress('usama.staffshaws@gmail.com');
$mail->addAddress('elichris414@gmail.com');
$mail->addAddress('eli.chris@digitalsynergyservices.com');
$mail->addAddress('stafford@staffshaw.com');
$mail->addAddress('staffordkhokhar@gmail.com');
$mail->addAddress('zohaibkhan.staffshaw@gmail.com');
$mail->addAddress('shahan.signups@digitalsynergyservices.com');

$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);
$mail->AltBody = 'alternative body if html fails to load';

// -------- Send Email --------
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: thankyou.php');
}
?>
