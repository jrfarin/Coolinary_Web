<?php
//Importamos las variables del formulario de contacto

@$Nombre = htmlspecialchars($_POST['Nombre']);
@$Email = htmlspecialchars($_POST['Email']);
@$Mensaje = htmlspecialchars($_POST['Mensaje']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$asunto = "From: CONTACTO DISYTEL IMPORT $Motivo\n"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "coolinaryl@webflix.es"; //cambiar por tu email
$contenido = "$Nombre ha enviado un mensaje desde el sitio web www.webflix.es\n"
. "\n"
. "Nombre: $Nombre\n"
. "Email: $Email\n"
. "Mensaje: $Mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {


//Si el mensaje se envía muestra una confirmación
echo '<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Thank you</title>
    <link rel="icon" type="image/svg+xml" href="assets/img/icons/urku-ico.svg">
    <link rel="stylesheet" href="../css/aurora-pack.min.css">
    <link rel="stylesheet" href="../css/aurora-theme-base.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body class="top-fixed">
    <section class="ae-container-fluid rk-main">
        <div class="ae-grid au-pt-10">
            <div class="ae-grid__item item-lg-8 item-lg--offset-2 au-xs-ta-center">
                <h4 class="ae-u-custom">Coolinary Master Classe\'s Recipes</h4>
                <p>Su mensaje ha sido enviado correctamente</p>
                <a href="/../../index.html" class="arrow-button btn-back">Volver</a>
            </div>
        </div>
    </section>
  </body>
</html>';
}else{
//Si el mensaje no se envía muestra el mensaje de error
echo '<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Thank you</title>
    <link rel="icon" type="image/svg+xml" href="assets/img/icons/urku-ico.svg">
    <link rel="stylesheet" href="../css/aurora-pack.min.css">
    <link rel="stylesheet" href="../css/aurora-theme-base.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body class="top-fixed">
    <section class="ae-container-fluid rk-main">
        <div class="ae-grid au-pt-2">
            <div class="ae-grid__item item-lg-8 item-lg--offset-2 au-xs-ta-center">
                <h4 class="ae-u-custom">Coolinary Master Classe\'s Recipes</h4>
                <p>Ooops! parece que hemos tenido algun problema. Por favor inténtalo más tarde. Gracias</p>
                <a href="/../../index.html" class="arrow-button btn-back">Volver</a>
            </div>
        </div>
    </section>
  </body>
</html>';
}

?>  -->
