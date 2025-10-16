<?php 
require_once(__DIR__ . "/../../../../../configuracion.php");
include_once "../../../header.php";
?>

<div class="container mt-5">
    <h2 class="mb-4">Member Login</h2>
    <form action="../../../../accion/TP2/ej3/verificaPass.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="usuario" class="form-label">Username</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
            <div class="invalid-feedback">Por favor ingrese su usuario.</div>
        </div>
        <div class="mb-3">
            <label for="clave" class="form-label">Password</label>
            <input type="password" class="form-control" id="clave" name="clave" required>
            <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>

<script>
// Bootstrap validation
(() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>
<?php include_once "../../../footer.php"; ?>