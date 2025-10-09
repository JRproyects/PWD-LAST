<?php
include_once("../../../../estructura/header.php");
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
          <h4>Iniciar Sesión</h4>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate method="post" action="../../../accion/TP2/ej3/formAccion.php">
            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required>
              <div class="invalid-feedback">Por favor ingrese su usuario.</div>
            </div>
            <div class="mb-3">
              <label for="clave" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="clave" name="clave" required>
              <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

<?php
include_once("../../../../estructura/footer.php");
?>
