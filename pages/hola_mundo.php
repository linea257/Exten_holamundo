<?php
$page_security = 'SA_OPEN';
$path_to_root = "../..";
include_once($path_to_root . "/includes/session.inc");
include_once($path_to_root . "/includes/ui.inc");

page(_("Hola Mundo Extension"));

echo "<div style='text-align: center; margin: 50px;'>";
echo "<h1>¡Hola Mundo desde GitHub!</h1>";
echo "<p>Esta es una extensión cargada desde un repositorio de GitHub.</p>";
echo "<p>Fecha actual: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>Esta extensión está funcionando correctamente.</p>";
echo "</div>";

end_page();
?>