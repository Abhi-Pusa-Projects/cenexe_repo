<?php
  require './PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $service_details=$_POST['service_name'];
  $comment=$_POST['comment'];
  $address=$_POST['address'];
  //echo $name.$email.$phone.$service_details.$comment.$address;

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
      $mail->Subject = 'Request for new service is created';
      $mail->Body    =     '<p>
                                  Hi ' .$name.
                              ',</p>
                              <p>
                                  New request has been created in www.cenexe.com. for the service '.$service_details.'
                              </p>
                              <p>
                                  We will get back to you.
                              </p>
                              <p>
                                  Regards,<br>
                                  Cenexe Team<br>
                                  Bangalore India<br>
                              </p>';
      $mail->AddAddress($email);               // Name is optional
      $mail->addCC("info@cenexe.com");
      if(!$mail->Send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: ' . $mail->ErrorInfo;
         exit;
      }
      else{
         echo("Created Successfully");
      }



?>
