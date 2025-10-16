<?php 
require_once __DIR__ . '\..\..\header.php';
require_once __DIR__ . '/../../../../configuracion.php';
?>

<div class="container mt-5 mb-5">
    <h2 class="text-primary mb-4"><i class="bi bi-pencil-square"></i> Cinem@s</h2>
    <form id="formCinemas" method="post" action="../../../../Vista/accion/TP2/ej4/procesarPelicula.php" class="needs-validation" novalidate>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="col-md-6">
                <label for="actores" class="form-label">Actores</label>
                <input type="text" class="form-control" id="actores" name="actores" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" required>
            </div>
            <div class="col-md-6">
                <label for="guion" class="form-label">Guión</label>
                <input type="text" class="form-control" id="guion" name="guion" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="produccion" class="form-label">Producción</label>
                <input type="text" class="form-control" id="produccion" name="produccion" required>
            </div>
            <div class="col-md-3">
                <label for="anio" class="form-label">Año</label>
                <input type="text" class="form-control" id="anio" name="anio" maxlength="4" pattern="\d{4}" required>
                <div class="invalid-feedback">Ingrese un año válido (4 dígitos).</div>
            </div>
            <div class="col-md-3">
                <label for="duracion" class="form-label">Duración (minutos)</label>
                <input type="text" class="form-control" id="duracion" name="duracion" maxlength="3" pattern="\d{1,3}" required>
                <div class="invalid-feedback">Ingrese duración en minutos (máx. 3 dígitos).</div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
            </div>
            <div class="col-md-6">
                <label for="genero" class="form-label">Género</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="">Seleccione...</option>
                    <option>Comedia</option>
                    <option>Drama</option>
                    <option>Terror</option>
                    <option>Románticas</option>
                    <option>Suspenso</option>
                    <option>Otras</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Restricciones de edad</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="edad" id="edad1" value="Todo Público" required>
                <label class="form-check-label" for="edad1">Todo Público</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="edad" id="edad2" value="Mayores de 7 años">
                <label class="form-check-label" for="edad2">Mayores de 7 años</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="edad" id="edad3" value="Mayores de 18 años">
                <label class="form-check-label" for="edad3">Mayores de 18 años</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" required></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
    </form>
</div>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script>
// Validación Bootstrap
(() => {
    'use strict';
    const form = document.getElementById('formCinemas');
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
})();
</script>
<?php require_once __DIR__ . '\..\..\footer.php'; ?>