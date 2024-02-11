<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    // Dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "robertoaguilarbadilla91@gmail.com";
    
    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de contacto desde el sitio web";
    
    // Contenido del correo electrónico
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Cabeceras del correo electrónico
    $cabeceras = "From: $nombre <$email>";
    
    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        // El correo se envió correctamente
        echo "Tu mensaje ha sido enviado con éxito.";
    } else {
        // Error al enviar el correo
        echo "Ha ocurrido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si el formulario no se ha enviado mediante el método POST, redirige al usuario a la página de inicio o muestra un mensaje de error
    echo "Ha ocurrido un error. Por favor, intenta enviar tu mensaje nuevamente.";
}
?>