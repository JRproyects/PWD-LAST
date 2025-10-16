<?php 
require_once __DIR__ . "..\..\..\..\..\configuracion.php";
require_once __DIR__ . "../../../../estructura/header.php";

// Validar que todos los campos estén presentes
$campos = ['titulo', 'actores', 'director', 'guion', 'produccion', 'anio', 'nacionalidad', 'genero', 'duracion', 'edad', 'sinopsis'];
$datos = [];

foreach ($campos as $campo) {
    $datos[$campo] = isset($_POST[$campo]) ? htmlspecialchars(trim($_POST[$campo])) : '';
}

// Validaciones básicas
$errores = [];
if (!preg_match('/^\d{4}$/', $datos['anio'])) {
    $errores[] = "El año debe tener 4 dígitos.";
}
if (!preg_match('/^\d{1,3}$/', $datos['duracion'])) {
    $errores[] = "La duración debe tener hasta 3 dígitos.";
}
foreach ($datos as $clave => $valor) {
    if ($valor === '') {
        $errores[] = "El campo '$clave' es obligatorio.";
    }
}
?>

<div class="container mt-5">
    <?php if (!empty($errores)): ?>
        <div class="alert alert-danger">
            <h5>Errores en el formulario:</h5>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="../../estructura/TP2/ej4/index.php" class="btn btn-secondary mt-3">Volver</a>
        </div>
    <?php else: ?>
        <div class="card bg-success text-white">
            <div class="card-body">
                <h4 class="card-title">La película introducida es</h4>
                <p><strong>Título:</strong> <?php echo $datos['titulo']; ?></p>
                <p><strong>Actores:</strong> <?php echo $datos['actores']; ?></p>
                <p><strong>Director:</strong> <?php echo $datos['director']; ?></p>
                <p><strong>Guión:</strong> <?php echo $datos['guion']; ?></p>
                <p><strong>Producción:</strong> <?php echo $datos['produccion']; ?></p>
                <p><strong>Año:</strong> <?php echo $datos['anio']; ?></p>
                <p><strong>Nacionalidad:</strong> <?php echo $datos['nacionalidad']; ?></p>
                <p><strong>Género:</strong> <?php echo $datos['genero']; ?></p>
                <p><strong>Duración:</strong> <?php echo $datos['duracion']; ?> minutos</p>
                <p><strong>Restricciones de edad:</strong> <?php echo $datos['edad']; ?></p>
                <p><strong>Sinopsis:</strong> <?php echo $datos['sinopsis']; ?></p>
                <a href="../../estructura/TP2/ej4/index.php" class="btn btn-light mt-3">Volver</a>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php require_once __DIR__ . "../../../../estructura/footer.php"; ?>