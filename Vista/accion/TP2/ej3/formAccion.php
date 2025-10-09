<?php
include_once("../../../configuracion.php");
include_once("Control\TP2\ej3\verificaPass.php");

$control = new verificaPass();
$resultado = $control->validar();
?>

<div class="container mt-5 text-center">
  <div class="card p-4 shadow-sm">
    <?php if ($resultado["valido"]): ?>
      <h4 class="text-success">¡Bienvenido, <?= htmlspecialchars($resultado["usuario"]) ?>!</h4>
    <?php else: ?>
      <h4 class="text-danger">Usuario o contraseña incorrectos.</h4>
      <a href="../../estructura/TP2/ej3/ej3a/index.php" class="btn btn-primary mt-3">Volver al login</a>
    <?php endif; ?>
  </div>
</div>
