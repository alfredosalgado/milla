<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicio'] ?? 'Formulario de Contacto';
    $nombre = $_POST['nombre'] ?? 'No ingresado';
    $telefono = $_POST['telefono'] ?? 'No ingresado';
    $correo = $_POST['correo'] ?? 'No ingresado';
    $mensaje = $_POST['mensaje'] ?? 'Sin mensaje';

    $to = "jasr@asew.cl"; // Correo real donde llegarán los mensajes
    $subject = "Nuevo contacto desde la web - $servicio";

    $body = "Servicio: $servicio\n";
    $body .= "Nombre: $nombre\n";
    $body .= "Teléfono: $telefono\n";
    $body .= "Correo: $correo\n\n";
    $body .= "Mensaje:\n$mensaje\n";

    $headers = "From: no-reply@asew.cl\r\n";
    $headers .= "Reply-To: $correo\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";

        exit();
    } else {
        echo "Error al enviar el correo. Intenta más tarde.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
