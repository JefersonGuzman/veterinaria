<?php 

include("conexion.php");

/* Logica para Guardar los usuarios */
if(isset($_POST['guardar_usuario'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $documento_identificacion = $_POST['doc_identificacion'];
    $sexo = $_POST['sexo'];
    $consulta = "INSERT INTO `usuario`(`nombre`, `apellido`, `tipo_documento`, `documento_identificacion`, `estado`, `sexo`)  VALUES ('$nombre','$apellido','$tipo_documento',$documento_identificacion,'Habilitado','$sexo')";
    $respuesta = mysqli_query($conexion,$consulta);
    if(!$respuesta){
        echo "Tenemos problema Jefe";
        var_dump($consulta);
    }else{
        $_SESSION['respuesta_crear_usuario'] = "El Usuario Fue Creado Correctamente!";
        $_SESSION['tipo_respuesta'] = 'success';
        header("location: index.php");
    }
}


/* Logica para Guardar las Mascotas */
if(isset($_POST['guardar_mascota'])){
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $doc_identific = $_POST['doc_identific'];
    $sexo = $_POST['sexo'];
     
    $consulta = "INSERT INTO colaborador (`nombre`, `raza`,`usuario_id`, `sexo`)  VALUES ('$nombre','$raza',$doc_identific,'$sexo')";
    $respuesta = mysqli_query($conexion,$consulta);
    
    if(!$respuesta){
        echo "Tenemos problema Jefe...... mascota";
    }else{
        $_SESSION['respuesta_crear_usuario'] = "El Usuario Fue Creado Correctamente!";
        $_SESSION['tipo_respuesta'] = 'success';
        header("location: index.php");
    }
}

/* Logica para Guardar los Colaboradores */
if(isset($_POST['guardar_colaborador'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cargo = $_POST['cargo'];
    $especialidad = $_POST['especialidad'];
    $tipo_documento = $_POST['tipo_documento'];
    $num_identificacion = $_POST['num_identificacion'];
     
    $consulta = "INSERT INTO `colaborador`(`nombre`, `apellido`, `cargo`, `especialidad`, `tipo_documento`, `documento_identificacion`) VALUES ('$nombre','$apellido','$cargo','$especialidad','$tipo_documento',$num_identificacion)";
    $respuesta = mysqli_query($conexion,$consulta);
    
    if(!$respuesta){
        echo "Tenemos problema Jefe...... mascota";
    }else{
        $_SESSION['respuesta_crear_usuario'] = "El Usuario Fue Creado Correctamente!";
        $_SESSION['tipo_respuesta'] = 'success';
        header("location: index.php");
    }
}

/* Logica para Guardar las Historias clinicas */
if(isset($_POST['crear_historia'])){
    $nombre = $_POST['nombre'];
    $temperatura = $_POST['temperatura'];
    $peso = $_POST['peso'];
    $frec_cardiaca = $_POST['frec_cardiaca'];
    $frec_respiratoria = $_POST['frec_respiratoria'];
    $alimentacion = $_POST['alimentacion'];
    $habitad = $_POST['habitad'];
    $observacion =$_POST['observacion'];
    $id_colaborador =$_POST['id_colaborador'];
     
    $consulta = "INSERT INTO `detalle_historia_clinica`( `temperatura`, `peso`, `frecuencia_cardiaca`, `frecuencia_respiratoria`,  `alimentación`, `habitad`, `observacion`, `colaborador_id`, `historia_clinica_id`) VALUES ('$nombre','$temperatura','$peso','$frec_cardiaca','$frec_respiratoria','$alimentacion','$habitad','$observacion','$id_colaborador')";
    var_dump($consulta);
    exit;
    $respuesta = mysqli_query($conexion,$consulta);

    if(!$respuesta){
        echo "Tenemos problema Jefe...... mascota";
    }else{
        $_SESSION['respuesta_crear_usuario'] = "El Usuario Fue Creado Correctamente!";
        $_SESSION['tipo_respuesta'] = 'success';
        header("location: index.php");
    }
}


?>