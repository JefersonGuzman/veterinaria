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

// Verificamos si la conexion fue realizado correctamente
// if( isset($conexion)){
//     echo 'Estamos conectados';
// }

?>