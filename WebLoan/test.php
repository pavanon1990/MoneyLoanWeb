<?PHP
  require("phpmailer/PHPMailerAutoload.php");
  $mail = new PHPMailer();

  $body = "กู้เงินทันใจ : ทดสอบการส่ง Email ";

  $mail->CharSet = "utf-8";
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->Host = "mail.xn--12cmd3djb1ova7b5dvb2d.com"; // SMTP server
  $mail->Port = 587; // พอร์ท
  $mail->Username = "info@xn--12cmd3djb1ova7b5dvb2d.com"; // account SMTP
  $mail->Password = "info123*"; // รหัสผ่าน SMTP

  $mail->SetFrom("nfo@xn--12cmd3djb1ova7b5dvb2d.com", "Auto Email");
  //$mail->AddReplyTo("email@yourdomain.com", "yourname");
  $mail->Subject = "ทดสอบ กู้เงินทันใจ";

  $mail->MsgHTML($body);

  $mail->AddAddress("pavanon.z@outlook.com", "recipient1"); // ผู้รับคนที่หนึ่ง
  //$mail->AddAddress("recipient2@somedomain.com", "recipient2"); // ผู้รับคนที่สอง

  if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "Message sent!";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
</head>
<body>

  <label for="Phonenumber">Phone Number</label>
  <input type="text">
  <button>Request OTP</button>
  
  </br>
  <label for="Phonenumber">OTP</label>
  <input type="text">

</body>
</html>
