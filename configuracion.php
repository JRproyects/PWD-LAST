<?php
session_start();
define('ROOT', __DIR__ . "/");

// 🔁 Función para obtener subdirectorios ejX de un TP
function obtenerSubdirectoriosEj($tp) {
    $base = ROOT . "Control/$tp/";
    return glob($base . 'ej*', GLOB_ONLYDIR) ?: [];
}

spl_autoload_register(function ($class_name) {
    $base = ROOT;

    // Rutas fijas
    $dirs = [
        $base . 'Modelo/TP4/',
        $base . 'Modelo/conector/',
        $base . 'Modelo/TP1/',
        $base . 'Modelo/TP2/',
        $base . 'Modelo/TP3/',
        $base . 'BaseDeDatos/',
        $base . 'Control/TP4/', // TP4 no tiene ejX, se incluye directo
    ];

    // 🔁 Agregar subdirectorios ejX de TP1, TP2, TP3
    foreach (['TP1', 'TP2', 'TP3'] as $tp) {
        $dirs[] = $base . "Control/$tp/"; // también incluye el nivel raíz del TP
        $dirs = array_merge($dirs, obtenerSubdirectoriosEj($tp) ?: []);
    }

    foreach ($dirs as $dir) {
        $file = rtrim($dir, '/') . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require_once($file);
            return;
        }
    }
});

// Funciones globales
include_once(ROOT . 'util/funciones.php');
