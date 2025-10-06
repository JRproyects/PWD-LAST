<?php
require_once __DIR__ . '/../../../configuracion.php';
require_once __DIR__ . '/../../../util/funciones.php';

$datos = data_submitted();

require_once __DIR__ . "/../../../Control/AbmPersona.php";
$abmPersona = new AbmPersona();

$resultado = $abmPersona->altaPersona($datos);

if ($resultado === true) {
    echo "<h3>Persona cargada correctamente.</h3>";
} elseif (is_string($resultado)) {
    // Si altaPersona devuelve un mensaje de error
    echo "<h3>Error al cargar la persona: $resultado</h3>";
} else {
    echo "<h3>Error al cargar la persona.</h3>";
}

echo "<a href='../NuevaPersona.php' class='btn btn-secondary mt-2'>Volver</a>";
?>
