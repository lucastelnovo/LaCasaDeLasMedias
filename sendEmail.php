<?php

/*
 * Este script necesita de un server SMTP (MiniRelay) y una posible configuracion de php.ini
 */

$to = "lucastelnovo@hotmail.com";
$subject = "LaCasaDeLasMedias.com - Consulta";
//$message = $_POST['email_content'];
//$from = $_POST['email'];
$message = "HELLO WORLD!";
$from = "lucas.castelnovo@treebeo.com";
$headers = "From:" . $from;
ini_set('sendmail_from', 'lucastelnovo@hotmail.com');
$result = mail($to,$subject,$message,$headers);
echo $result;
header('contacto.php');
?>