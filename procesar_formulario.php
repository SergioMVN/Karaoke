<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $to = "sergiovelasquezn@gmail.com"; // Reemplaza esto con tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje:\n$mensaje";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Gracias por tu mensaje! Nos pondremos en contacto pronto.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    echo "Ha ocurrido un error al procesar el formulario.";
}
?>

