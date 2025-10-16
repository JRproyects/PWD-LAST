<?php 
require_once(__DIR__ . "/../../../../../configuracion.php");
include_once "../../../header.php";
?>

<style>
body {
    background-color: #f0f0f0;
}
.login-modal {
    max-width: 400px;
    margin: 80px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    padding: 30px;
    position: relative;
}
.login-modal .close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 1.2rem;
    cursor: pointer;
}
.login-modal h2 {
    text-align: center;
    margin-bottom: 25px;
}
.input-group-text {
    background-color: #fff;
    border-right: 0;
}
.form-control {
    border-left: 0;
}
</style>

<div class="login-modal">
    <span class="close-btn">&times;</span>
    <h2>Member Login</h2>
    <form id="loginForm" action="../../../../accion/TP2/ej3/verificaPass.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
            <div class="invalid-feedback">Por favor ingrese su usuario.</div>
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" required>
            <div class="invalid-feedback" id="claveFeedback">Por favor ingrese una contraseña válida.</div>
        </div>
        <button type="submit" class="btn btn-success w-100">Login</button>
    </form>
</div>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

        if (!form.checkValidity()) {
            valid = false;
        }

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