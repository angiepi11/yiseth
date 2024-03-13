<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// variables, ruta, controlador 
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');
$routes->get('inicio', 'Home::inicio');
$routes->post('guardar', 'Home::guardar');
$routes->post('guardarl', 'Home::guardarl');
$routes->post('adminguardar', 'Home::adminguardar');
$routes->post('agregarcarrito', 'Home::agregarcarrito');

$routes->post('agregarproducto', 'Home::agregarproducto');
$routes->get('contacto', 'Home::contacto');
$routes->get('carrito', 'Home::carrito');
$routes->get('index', 'Home::index');
$routes->get('productos', 'Home::producto');
$routes->get('categoria', 'Home::categoria');
$routes->get('seguimiento', 'Home::seguimiento');
$routes->get('pago', 'Home::pago');
$routes->get('cerrar_sesion', 'Home::cerrar_sesion');
$routes->get('cerrar_sesion_admin', 'Home::cerrar_sesion_admin');
$routes->get('admin', 'Home::admin');
$routes->get('productos_admin', 'Home::productos_admin');
$routes->get('usuarios_admin', 'Home::usuarios_admin');
$routes->get('soporte_admin', 'Home::soporte_admin');
$routes->get('loginadmin', 'Home::loginadmin');
$routes->get('encriptar', 'Home::encriptar');
$routes->post('enviar', 'home::enviar');



$routes->get('editar_producto/(:num)', 'Home::editar_producto/$1');
$routes->get('eliminar_producto', 'Home::eliminar_producto');



//el Home es el nombre de la funcion del controlador
//las rutas siempren llevan a un controlador en este caso Home y la funcion que se llama registrarse
