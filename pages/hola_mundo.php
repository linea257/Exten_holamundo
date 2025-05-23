<?php
$page_security = "SA_OPEN";
$path_to_root = "../../..";  // Cambiado de "../.." a "../../.."
include_once($path_to_root . "/includes/session.inc");
add_access_extensions();  // Esta línea es necesaria para algunas extensiones
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/includes/date_functions.inc");  // Para funciones de fecha

// Título de la página
page(_("Hola Mundo Extension"));

// Contenido principal
echo "<div style=\"text-align: center; margin: 50px; padding: 20px; background-color: #f9f9f9; border-radius: 10px; border: 1px solid #ddd;\">";
echo "<h1 style=\"color: #2a5885;\">¡Hola Mundo desde GitHub!</h1>";
echo "<p style=\"font-size: 16px;\">Esta es una extensión cargada desde un repositorio de GitHub.</p>";
echo "<p>Fecha actual: " . Today() . " " . date("H:i:s") . "</p>";
echo "<p style=\"font-weight: bold; margin-top: 20px; color: #4CAF50;\">Esta extensión está funcionando correctamente.</p>";
echo "</div>";

// Enlaces o botones (opcional)
echo "<div style=\"text-align: center; margin-top: 30px;\">";
echo "<a href='" . $path_to_root . "/index.php' class='menuitem'>Volver al Inicio</a>";
echo "</div>";

end_page();
?>
