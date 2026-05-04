<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './php_mail/vendor/autoload.php';

// -------- Collecting Data --------
$name = $_POST['cn'] ?? '';
$phone = $_POST['pn'] ?? '';
$email = $_POST['em'] ?? '';
$link = $_POST['link'] ?? '';
$su = $_POST['su'] ?? '';
$si = $_POST['si'] ?? '';
$pb = $_POST['pb'] ?? '';
$sp = $_POST['sp'] ?? '';
$ep = $_POST['ep'] ?? '';
$cd = $_POST['cd'] ?? '';
$pi = $_POST['pi'] ?? '';
$if = $_POST['if'] ?? '';
$il = $_POST['il'] ?? '';

// -------- IP, Country, Referrer --------
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else return $_SERVER['REMOTE_ADDR'];
}

$ip = getUserIP();
$referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct Visit';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$submittedAt = date('Y-m-d H:i:s');

// Get Country
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);
$country = $ipData['country'] ?? 'Unknown';

// -------- Message --------
$txt = "
<b>Manuscript:</b> $su<br>
<b>Published:</b> $si<br>
<b>Publishing:</b> $pb<br>
<b>Self Publishing:</b> $sp<br>
<b>Editing:</b> $ep<br>
<b>Cover Design:</b> $cd<br>
<b>Purchase ISBN:</b> $pi<br>
<b>Interior Formatting:</b> $if<br>
<b>Illustration:</b> $il<br><br>

<b>Name:</b> $name<br>
<b>Phone:</b> $phone<br>
<b>Email:</b> $email<br>
<b>Link:</b> $link<br>
<b>Brand:</b> <?php echo $bname ?><br><br>

<b>IP Address:</b> $ip<br>
<b>Country:</b> $country<br>
<b>Referrer:</b> $referrer<br>
<b>Browser/Device Info:</b> $userAgent<br>
<b>Submitted At:</b> $submittedAt
";

// -------- Mail Send --------
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

$mail->Subject = 'Lead Information';
$mail->msgHTML($txt);
$mail->AltBody = strip_tags($txt);

// -------- Send Mail --------
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: https://theglobalpublishers.com/thankyou.php');
}

?>
