<?php
$mensajeConfirmacion = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores enviados del formulario
  $nombre = $_POST["nombre"];
  $telefono = $_POST["telefono"];
  $correo = $_POST["correo"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];

  // Realizar las acciones necesarias con los datos recibidos
  // Por ejemplo, enviar un correo electrónico, guardar en la base de datos, etc.

  // Mostrar mensaje de confirmación
  $mensajeConfirmacion = "¡Gracias por enviar el formulario!";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Confirmación de envío</title>
</head>
<body>
  <?php if (!empty($mensajeConfirmacion)): ?>
    <h1>Confirmación de envío</h1>
    <p><?php echo $mensajeConfirmacion; ?></p>
  <?php else: ?>
    <h1>Error al enviar el formulario</h1>
    <p>Ha ocurrido un error al procesar el formulario. Por favor, inténtalo nuevamente.</p>
  <?php endif; ?>
</body>
</html>

