<?php
    require '../PHPMailer/PHPMailerAutoload.php';


if(isset($_POST['conSub'])){

$first = $_POST['conFName'];
$last = $_POST['conLName'];
$conEM = $_POST['conEmail'];
$conMsg = $_POST['conMsg'];


$mail = new PHPMailer;
      //Enable SMTP debugging.
      //$mail->SMTPDebug = 3;
      //Set PHPMailer to use SMTP.
      $mail->isSMTP();
      //Set SMTP host name
      $mail->Host = "smtp.gmail.com";
      //Set this to true if SMTP host requires authentication to send email
      $mail->SMTPAuth = true;
      //Provide username and password
      $mail->Username = "wearedelco2017@gmail.com";
      $mail->Password = "kurosaki123";
      //If SMTP requires TLS encryption then set it
      $mail->SMTPSecure = "tls";
      //Set TCP port to connect to
      $mail->Port = 587;
      $mail->From = "wearedelco2017@gmail.com";
      $mail->FromName = $first." ".$last ;
      $mail->addAddress('wearedelco2017@gmail.com', 'Leon Ampah');
      $mail->isHTML(true);
      $mail->Subject = $conEM;
      $mail->Body = $conMsg;
      $mail->AltBody = "This is the plain text version of the email content";
      if(!$mail->send())
      {
          echo "Mailer Error: " . $mail->ErrorInfo;
      }
      else
      {
        
            echo 'Success!!';
            header('Location: ../index.php');
      }

     
}

?>