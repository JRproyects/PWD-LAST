<?php 
require_once(__DIR__ . "/../../../../configuracion.php");
include_once($_SESSION['ROOT'] . "Vista/estructura/header.php");

//esta andando y esta usando configuracion.php como autoloader! 



// Obtenemos los datos enviados (pueden ser GET o POST)
$datos = darDatosSubmitted();
$numero = isset($datos['numero']) ? (int)$datos['numero'] : null;

$controlador = new NumeroController();
$resultado = $controlador->analizarNumero($numero);
?>

<div class="container mt-5">
    <h4>Resultado</h4>
    <p>El número ingresado <strong><?php echo $numero; ?></strong> es: 
       <span class="fw-bold"><?php echo $resultado; ?></span>
    </p>
    <a href="../../../estructura/TP1/ej1/index.php" class="btn btn-secondary">Volver</a>
</div>

<?php include_once(__DIR__ . "/../../../estructura/footer.php"); ?>
