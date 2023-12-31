<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cancion = $_POST["cancion"];
    $mensaje = $_POST["frase"];


    echo $cancion;
    echo $mensaje;

    $to = "diego.piedra29@yahoo.com"; // Cambia esto con tu dirección de correo electrónico
    $subject = "Nueva solicitud de canción y mensaje para la boda";
    $message = "Canción: $cancion\nMensaje: $mensaje";

    // Utiliza la función mail para enviar el correo
    if(mail($to, $subject, $message, 'From: di.piedra@aulanz.net')){
        echo 'Mail Sended';
    }else{
        echo 'An error has occurred'; 
    };

    // Redirecciona a una página de agradecimiento u otra página después de enviar el correoç
    //header("Location: gracias.html");
    exit;
}
?>
