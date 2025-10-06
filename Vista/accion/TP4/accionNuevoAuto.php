<?php

require_once __DIR__ . '/../../../configuracion.php';
require_once __DIR__ . '/../../../util/funciones.php';

$datos = data_submitted();
require_once __DIR__ . '/../../../Control/TP4/AbmAuto.php';
require_once __DIR__ . '/../../../Control/TP4/AbmPersona.php';

$abmPersona = new AbmPersona();
$persona = $abmPersona->buscarPersona($datos['DniDuenio']);

if (!$persona) {
    echo "<h3>El dueño no está cargado. <a href='../NuevaPersona.php'>Cargar persona</a></h3>";
    exit;
}

$abmAuto = new AbmAuto();
if ($abmAuto->altaAuto($datos)) {
    echo "<h3>Auto cargado correctamente.</h3>";
} else {
    echo "<h3>Error al cargar el auto.</h3>";
}

echo "<a href='../../estructura/TP4/NuevoAuto.php' class='btn btn-secondary mt-2'>Volver</a>";
?>
