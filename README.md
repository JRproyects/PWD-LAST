# PWD_TP4

Proyecto de ejemplo en PHP para TP4 — gestión de Personas y Autos.

Este repositorio contiene la lógica del lado servidor en PHP, controladores, modelos y vistas para realizar operaciones básicas (alta, búsqueda, modificación) sobre personas y autos. Está pensado para ser ejecutado localmente con XAMPP en Windows.

## Estructura principal

- `Control/` — clases de control (ABM)
- `Modelo/` — modelos y conexión a la base de datos
- `Vista/` — vistas y acciones (formularios y scripts que procesan requests)
- `BaseDeDatos/` — clases relacionadas con la DB
- `infoautos.sql` — volcado SQL de ejemplo (tablas y datos)
- `configuracion.php` — archivo de configuración de rutas/includes

## Requisitos

- Windows con XAMPP (Apache + MySQL)
- PHP 8.x (el proyecto fue probado con PHP 8.2)
- Un navegador web

## Instalación y puesta en marcha (resumen)

1. Coloca la carpeta del proyecto en la carpeta de documentos de Apache (ej.: `C:\xampp\htdocs\PWD_TP4`).
2. Inicia Apache y MySQL desde el panel de XAMPP.
3. Importa la base de datos `infoautos.sql` a través de phpMyAdmin o la línea de comandos:

```powershell
# Importar con mysql (ajusta usuario/contraseña si corresponde)
mysql -u root -p < "C:\xampp\htdocs\PWD_TP4\infoautos.sql"
```

4. Revisa `configuracion.php` para ajustes de rutas o includes si cambiaste la ubicación del proyecto.

## Rutas útiles (local)

- Formulario para buscar persona por DNI:
  http://localhost/PWD_TP4/Vista/estructura/TP4/BuscarPersona.php
- Acción que procesa la búsqueda (GET `NroDni`):
  /PWD_TP4/Vista/accion/TP4/accionBuscarPersona.php

> Nota: Si la ruta relativa en el `action` del formulario no funciona (depende de desde dónde se incluya la vista), cambia `action` por la ruta absoluta desde la raíz del servidor (`/PWD_TP4/...`).

## Cómo probar la búsqueda por DNI

1. Asegúrate que tienes al menos una persona en la tabla `persona` (puedes importarla desde `infoautos.sql`).
2. Abre la URL del formulario (`BuscarPersona.php`) en el navegador.
3. Ingresa el DNI y pulsa Buscar. Si se encuentra la persona verás un formulario con sus datos; si no, un mensaje indicando que no se encontró.

Si obtienes un error 404 al enviar el formulario, revisa los dos puntos siguientes:

- Asegúrate que el archivo `Vista/accion/TP4/accionBuscarPersona.php` existe y tiene ese nombre (sin typos).
- Preferible: usar una ruta absoluta en `action` para evitar problemas con rutas relativas si la vista se incluye desde otro directorio.

## Problema común detectado en este repo

Había un archivo con un nombre mal escrito: `Vista/accion/TP4/accionBusacarPersona.php` (nota la 's' extra). Esto causaba que la URL apuntada por el form no existiera y se devolviera un 404. Se añadió `accionBuscarPersona.php` y se eliminó el archivo con typo.

## Sugerencias y mejoras

- Usar rutas absolutas en los `action` de formularios.
- Validar y sanitizar entradas (evitar inyecciones SQL; idealmente usar sentencias preparadas).
- Añadir manejo de errores más amigable y logging (archivos o consola).
- Añadir pruebas unitarias/livianas para los métodos del ABM.

## Contacto

Si querés que adapte el README (por ejemplo, instrucciones para Linux/macOS, agregar capturas, o pasos de despliegue), decímelo y lo actualizo.
