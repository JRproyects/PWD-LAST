<?php 
require_once(__DIR__ . "/../../../../../configuracion.php");
include_once "../../../header.php";
?>

<div class="container mt-5">
    <h2 class="mb-4">Member Login</h2>
    <form id="loginForm" action="../../../../accion/TP2/ej3/verificaPass.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="usuario" class="form-label">Username</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
            <div class="invalid-feedback">Por favor ingrese su usuario.</div>
        </div>
        <div class="mb-3">
            <label for="clave" class="form-label">Password</label>
            <input type="password" class="form-control" id="clave" name="clave" required>
            <div class="invalid-feedback" id="claveFeedback">Por favor ingrese una contraseña válida.</div>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>

<script>
// Validación Bootstrap + personalizada
(() => {
    'use strict';
    const form = document.getElementById('loginForm');
    const usuarioInput = document.getElementById('usuario');
    const claveInput = document.getElementById('clave');
    const claveFeedback = document.getElementById('claveFeedback');

    form.addEventListener('submit', event => {
        let valid = true;

        // Validación básica
        if (!form.checkValidity()) {
            valid = false;
        }

        // Validación personalizada de contraseña segura
        const usuario = usuarioInput.value.trim();
        const clave = claveInput.value.trim();

        const tieneLongitud = clave.length >= 8;
        const noIgualUsuario = clave !== usuario;
        const tieneLetra = /[a-zA-Z]/.test(clave);
        const tieneNumero = /[0-9]/.test(clave);

        if (!(tieneLongitud && noIgualUsuario && tieneLetra && tieneNumero)) {
            claveInput.classList.add('is-invalid');
            claveFeedback.textContent = "La contraseña debe tener al menos 8 caracteres, contener letras y números, y no ser igual al usuario.";
            valid = false;
        } else {
            claveInput.classList.remove('is-invalid');
        }

        if (!valid) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
})();
</script>
<?php include_once "../../../footer.php"; ?>