<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require './php_mail/vendor/autoload.php';

// -------- FORM DATA --------
$name     = $_POST['cn'] ?? '';
$phone    = $_POST['pn'] ?? '';
$email    = $_POST['em'] ?? '';
$service  = $_POST['ser'] ?? '';
$budget   = $_POST['quotebudget'] ?? '';
$link     = $_POST['link'] ?? '';
$message  = $_POST['msg'] ?? '';

// -------- GET IP --------
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else return $_SERVER['REMOTE_ADDR'];
}
$ip = getUserIP();

// -------- REFERRER / COUNTRY / OS / BROWSER --------
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

// -------- EMAIL CONTENT --------
$txt = "
<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Service Interested:</b> $service<br>
<b>Budget:</b> $budget<br>
<b>Link:</b> $link<br>
<b>Message:</b> $message<br>
<b>Brand:</b> <?php echo $bname ?><br><br>

<b>IP Address:</b> $ip<br>
<b>Country:</b> $country<br>
<b>Referrer:</b> $referrer<br>
<b>Submitted At:</b> $submittedAt<br>
<b>Browser:</b> $userAgent<br>
<b>Device OS:</b> $os
";

// -------- PHPMailer Setup --------
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
$mail->Host = 'hireabookwriter.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = '<?php echo $email ?>';
$mail->Password = '!Computer@123';
$mail->setFrom('<?php echo $email ?>', '<?php echo $bname ?>');

$mail->addAddress('<?php echo $email ?>'); 
$mail->addAddress('usama.staffshaws@gmail.com');
$mail->addAddress('shahan.salman@digitalsynergyservices.com');
$mail->addAddress('leads.staffshaw@gmail.com');

$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);
$mail->AltBody = strip_tags($txt);

// -------- Send Mail --------
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: thankyou');
}
?>
