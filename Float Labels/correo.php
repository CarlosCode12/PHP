<?php
    $destinatario = 'delacruzaguilarcarlos89@gmail.com';
    
    $nombre = $_POST['nombres'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    $header = 'Enviado desde Tequilon';
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $mensajeCompleto, $header );
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>