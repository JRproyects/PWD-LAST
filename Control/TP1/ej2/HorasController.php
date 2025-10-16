<?php
class HorasController {
    public function calcularTotal($arrayHoras) {
        $respuesta = -1;
        // Asegura que sea un array válido
        if (!is_array($arrayHoras)) {
            $respuesta = 0;
        }
        // Convierte los valores a enteros y suma
        $arrayHoras = array_map('intval', $arrayHoras);
        $respuesta = array_sum($arrayHoras);

        return $respuesta;
    }
}
