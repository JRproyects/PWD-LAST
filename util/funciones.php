<?php


function data_submitted() {
    $data = !empty($_POST) ? $_POST : (!empty($_GET) ? $_GET : []);
    foreach ($data as $k => $v) {
        if ($v === "") $data[$k] = 'null';
    }
    return $data;
}

function verEstructura($e) {
    echo "<pre>"; print_r($e); echo "</pre>";
}

function darDatosSubmitted(){
    $datos = [];
    //piso el array de datos con los datos que vienen por POST para darles prioridad
    foreach($_GET as $key => $value){
        $datos[$key] = $value;
    }
    foreach($_POST as $key => $value){
        $datos[$key] = $value;
    }
    return $datos;
}

?>
