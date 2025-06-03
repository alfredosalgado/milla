<?php
$para = "jasr@asew.cl"; // reemplaza por tu correo real
$asunto = "Prueba de función mail()";
$mensaje = "Este es un mensaje de prueba enviado desde PHP.";
$cabeceras = "From: no-reply@asew.cl";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
    echo "✅ ¡Correo enviado con éxito! Revisa tu bandeja de entrada.";
} else {
    echo "❌ Error: la función mail() no está habilitada o falló el envío.";
}
?>
