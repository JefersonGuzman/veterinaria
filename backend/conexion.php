<?php 

session_start();

$servidor="localhost";
$usuario="root";
$clave="";
$nombre_bd="app_veterinaria";


$conexion = mysqli_connect(
    $servidor,
    $usuario,
    $clave,
    $nombre_bd
);



?>