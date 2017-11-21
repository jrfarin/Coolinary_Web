<?php

$to = "info@jfchef.com";
$subject = "jfchef Formulario";
$message = "Customer name:    " . $_POST['name'] . "\r\n" .
"Email:               " . $_POST['email'] . "\r\n" .
"Telefono:            " . $_POST['phone'] . "\r\n" . "\r\n" .
"Mensaje:        " . $_POST['message'] . "\r\n" . "\r\n" .
$from = $_POST['email'];
$headers = "From: $from" . "\r\n";
$headers = "Bcc: joserfarin@gmail.com" . "\r\n";
mail($to,$subject,$message,$headers);

?>