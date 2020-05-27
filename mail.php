<?php
if($_POST){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";

  $subject="AVIS CHESSFIGHTER";
  $destinataire="eijibm@gmail.com";
  $body="$message";

  if(mail($destinataire,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'Merci !';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Erreur';
  }

  echo json_encode($response);
}
?>