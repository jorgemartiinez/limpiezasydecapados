<?php

if(empty($_POST['name'])      ||
    empty($_POST['email'])     ||
    empty($_POST['mensaje'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "Faltan campos por rellenar y/o alguno de ellos no es correcto.";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'info@limpiezasydecapadosalcoy.es'; //email que recibirá.
$email_subject = "Mensaje de contacto recibido de:  $name";
$email_body = "Ha recibido un mensaje de contacto de la pagina web de Limpiezas y Decapados.\n\n"."Aqui tiene los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = 'From: '.$email_address."\r\n".
    'Reply-To: '.$email_address."\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\"Content-Type: text/html; charset=UTF-8\"";
mail($to,$email_subject,$email_body,$headers);
return true;
