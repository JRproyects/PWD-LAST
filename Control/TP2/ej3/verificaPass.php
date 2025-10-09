<?php

 include_once("../../util/funciones.php");

function validar() {

    $datos = data_submitted();

    $usuarios = [
        ["usuario" => "admin", "clave" => "1234"],
        ["usuario" => "juan", "clave" => "abcd"],
        ["usuario" => "maria", "clave" => "clave123"]
    ];

    $valido = false;
    $usuarioEncontrado = "";
    $i = 0;
    $cantUsuarios = count($usuarios);

    while (!$valido && $i < $cantUsuarios) {
        $u = $usuarios[$i];

        if ($u["usuario"] === $datos["usuario"] && $u["clave"] === $datos["clave"]) {
            $valido = true;
            $usuarioEncontrado = $u["usuario"];
        } else {
            $i++;
        }
    }
    return [
        "valido" => $valido,
        "usuario" => $usuarioEncontrado
    ];
}


    

?>
