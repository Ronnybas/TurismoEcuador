<?php
// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $destino = isset($_POST['destino']) ? $_POST['destino'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $personas = isset($_POST['personas']) ? $_POST['personas'] : '';
    $presupuesto = isset($_POST['presupuesto']) ? $_POST['presupuesto'] : '';
    $duracion = isset($_POST['duracion']) ? $_POST['duracion'] : '';
    $transporte = isset($_POST['transporte']) ? $_POST['transporte'] : '';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

    // Validar los datos (esto es básico, puedes agregar más validaciones si lo necesitas)
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo "Por favor, completa todos los campos obligatorios.";
        exit;
    }

    // Aquí no vamos a enviar el correo, solo mostramos los datos
    echo "<h2>Información del formulario recibida:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Destino de interés:</strong> $destino</p>";
    echo "<p><strong>Fecha de viaje:</strong> $fecha</p>";
    echo "<p><strong>Número de personas:</strong> $personas</p>";
    echo "<p><strong>Presupuesto estimado:</strong> $presupuesto USD</p>";
    echo "<p><strong>Duración del viaje:</strong> $duracion días</p>";
    echo "<p><strong>Medio de transporte preferido:</strong> $transporte</p>";
    echo "<p><strong>Mensaje adicional:</strong> $mensaje</p>";

    // Aquí podrías agregar cualquier otro mensaje adicional
    echo "<p><strong>Gracias por tu interés en Turismo Ecuador. ¡Te responderemos pronto!</strong></p>";

} else {
    // Si el formulario no fue enviado correctamente, redirige al formulario.
    header("Location: index.html");
    exit;
}
?>

