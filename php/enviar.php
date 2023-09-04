<?php  

// Llamando a los campos
$nome = $_POST['nome'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "mugarte5672@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nome \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location: ../index.html');

?>