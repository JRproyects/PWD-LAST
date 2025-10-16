<?php 
require_once __DIR__ . '/../../../../configuracion.php';
include_once "../../../estructura/header.php";
// Lista de usuarios simulados
$usuarios = [
    ['usuario' => 'admin', 'clave' => '1234'],
    ['usuario' => 'nicolas', 'clave' => 'abc123'],
    ['usuario' => 'invitado', 'clave' => 'guest']
];

// Obtener datos del formulario
$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

$accesoValido = false;
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario && $u['clave'] === $clave) {
        $accesoValido = true;
        break;
    }
}
?>

<div class="container mt-5">
    <?php if ($accesoValido): ?>
        <div class="alert alert-success" role="alert">
            ¡Bienvenido <strong><?php echo htmlspecialchars($usuario); ?></strong>!
        </div>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Usuario o contraseña incorrectos.
        </div>
    <?php endif; ?>
    <a href="../../estructura/TP2/ej3/ej3a/index.php" class="btn btn-secondary">Volver</a>
</div>
<?php include_once "../../../estructura/footer.php"; ?>
