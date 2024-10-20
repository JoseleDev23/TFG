<?php

$servidor = 'PMYSQL174.dns-servicio.com:3306';
$usuario = 'Admin';
$password = 'L_h78p92u';
$base_datos = '10426733_drinkdrone';

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
