<?php
/** 
 * Front Controller
 * Centralizo todas las peticiones.
 */

require __DIR__ . '/../vendor/autoload.php'; //con __DIR__ obtengo ruta absoluta

$request = new App\Http\Request; //Clase aún no creada
$request->send();
