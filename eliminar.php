<?php 

include("conexion.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "DELETE FROM usuario WHERE id =$id";
    $respuesta = mysqli_query($conexion,$consulta);
    var_dump($consulta);
    if(!$respuesta){
        echo "Tenemos problema Jefe";
    }else{
        $_SESSION['respuesta_crear_usuario'] = "El Usuario Fue Eliminado";
        $_SESSION['tipo_respuesta'] = 'success';
        header("location:index.php");
    }
}



// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $consulta = "DELETE FROM mascota WHERE id = $id";
//     $respuesta = mysqli_query($conexion,$consulta);
//     if(!$respuesta){
//         echo "Tenemos problema Jefe";
//     }else{
//         $_SESSION['respuesta_crear_usuario'] = "la Mascota Fue Eliminado";
//         $_SESSION['tipo_respuesta'] = 'success';
//         header("location:index.php");
//     }
// }


?>