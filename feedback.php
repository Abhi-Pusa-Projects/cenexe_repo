<?php
  require './PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $comment=$_POST['comment'];


  $mail = new PHPMailer;
      $mail->IsSMTP();
      $mail->SMTPDebug = 1;
      $mail->SMTPAuth = true;                                   // Set mailer to use SMTP
      $mail->SMTPSecure = 'tsl';                            // Enable encryption, 'ssl' also accepted
      $mail->Host = 'www.cenexe.com';  // Specify main and backup server
      //$mail->Port=465;
      $mail->IsHTML(true);                              // Enable SMTP authentication
      $mail->Username = 'info@cenexe.com';                            // SMTP username
      $mail->Password = 'varuneha.0312';                           // SMTP password
      //$mail->SetFrom = 'info@cenexe.com';
      $mail->From = "info@cenexe.com";
      $mail->FromName = "Cenexe Team";
      $mail->Subject = 'FeedBack';
      $mail->Body    =     '<p>
                                  Hi Varun,
                            </p>
                            <p>
                                  Mr.'.$name.'has provided the below feedback
                            </p>
                              <p>
                                  Comment:<br>'.$comment.'
                              </p>
                              <p>
                                  Regards,<br>
                                  '.$name.'<br>
                                  '.$email.'<br>
                                  '.$phone.'<br>
                              </p>';
      $mail->AddAddress("info@cenexe.com");               // Name is optional
      if(!$mail->Send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
         exit;
      }
      else{
         echo("Created Successfully");
      }
?>
