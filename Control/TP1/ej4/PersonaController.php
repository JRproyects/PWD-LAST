<?php
class PersonaController {
    public function verificarEdad($datos) {
        $nombre = $datos['nombre'] ?? '';
        $apellido = $datos['apellido'] ?? '';
        $edad = intval($datos['edad'] ?? 0);
        $direccion = $datos['direccion'] ?? '';

        $respuesta = 'epaaa algo esta mal para que salga esto';

        if ($edad >= 18) {
            $respuesta = "Hola, soy $nombre $apellido, tengo $edad años, vivo en $direccion y soy <b>mayor de edad</b>.";
        } else {
            $respuesta = "Hola, soy $nombre $apellido, tengo $edad años, vivo en $direccion y soy <b>menor de edad</b>.";
        }
        return $respuesta;
    }
}
