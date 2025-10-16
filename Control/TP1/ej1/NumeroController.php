<?php
class NumeroController {
    public function analizarNumero($numero) {
        $respuesta = '';
        if ($numero > 0) {
            $respuesta = "Positivo";
        } elseif ($numero < 0) {
            $respuesta = "Negativo";
        } else {
            $respuesta = "Cero";
        }
        return $respuesta;
    }
}
