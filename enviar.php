<!-- PHP enviar.php -->
<?php
  $destino = "contacto@notros.cl";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";
  mail($destino, "Mensaje desde sitio web", $contenido);
  header("Location: gracias.html");
?>