<?php
require_once __DIR__ . '/../../../configuracion.php';
$abm = new AbmPersona();
$dni = $_GET['NroDni'] ?? '';
$persona = $abm->buscarPersona($dni);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h2>Resultado de búsqueda</h2>
    <?php if($persona): ?>
        <form action="ActualizarDatosPersona.php" method="post">
            <div class="mb-3"><label>DNI:</label><input type="text" class="form-control" value="<?= $persona->getNroDni() ?>" readonly></div>
            <div class="mb-3"><label>Nombre:</label><input type="text" name="Nombre" class="form-control" value="<?= $persona->getNombre() ?>"></div>
            <div class="mb-3"><label>Apellido:</label><input type="text" name="Apellido" class="form-control" value="<?= $persona->getApellido() ?>"></div>
            <div class="mb-3"><label>Fecha de Nacimiento:</label><input type="date" name="fechaNac" class="form-control" value="<?= $persona->getFechaNac() ?>"></div>
            <div class="mb-3"><label>Teléfono:</label><input type="text" name="Telefono" class="form-control" value="<?= $persona->getTelefono() ?>"></div>
            <div class="mb-3"><label>Domicilio:</label><input type="text" name="Domicilio" class="form-control" value="<?= $persona->getDomicilio() ?>"></div>
            <input type="hidden" name="NroDni" value="<?= $persona->getNroDni() ?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    <?php else: ?>
        <div class="alert alert-warning">No se encontró persona con DNI <?= htmlspecialchars($dni) ?></div>
    <?php endif; ?>
    <a href="../../estructura/TP4/BuscarPersona.php" class="btn btn-secondary mt-3">Regresar</a>
</div>
</body>
</html>
