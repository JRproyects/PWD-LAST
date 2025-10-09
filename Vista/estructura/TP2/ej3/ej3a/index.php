<?php
include_once("../../../../estructura/header.php");
?>

<div class="container mt-5" style="max-width: 400px;">
    <h3 class="text-center mb-4">Login de Usuario</h3>
    <form action="Control\TP2\ej3\verificaPass.php" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="clave" class="form-label">Contraseña:</label>
            <input type="password" id="clave" name="clave" class="form-control" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>
</div>

<?php
include_once("../../../../estructura/footer.php");
?>
