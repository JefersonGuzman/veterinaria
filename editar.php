<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app_veterinario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  </head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Veterinaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
    </div>
  </div>
</nav>

<?php 

include("conexion.php");


if(isset($_GET['doc'])){

    $id = $_GET['doc'];
    $consulta = "SELECT * FROM usuario WHERE documento_identificacion = $id";
    $respuesta = mysqli_query($conexion,$consulta);
    if(mysqli_num_rows($respuesta) == 1){
       $row = mysqli_fetch_array($respuesta);
       $nombre = $row['nombre'];
       $apellido = $row['apellido'];
       $tipo_documento = $row['tipo_documento'];
       $documento_identificacion = $row['documento_identificacion'];
       $estado = $row['estado'];
       $sexo = $row['sexo']; 


    } ?>

    <div class="container">
       <br/>
    <div class="row">
    
        <div class="card car-body">
        <h1 class="text-center"> Editar Informacion ( Usuario )</h1>
            <form action="editar.php?doc=<?php echo $_GET['doc'];?>" method="POST" name="formulario">
                        <div class="form-group">
                            <label >Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre" autofocus required>

                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="<?php echo $apellido; ?>" placeholder="Actualiza el apellido" required>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Tipo de documento</label>
                                    <input type="text" name="tipo_documento" class="form-control" value="<?php echo $tipo_documento; ?>" readonly="readonly">

                                </div>
                                <div class="col-md-4">
                                    <label>Numero de documento</label>
                                    <input type="text" name="doc_identificacion" class="form-control" value="<?php echo $documento_identificacion; ?>" readonly="readonly">    
                                </div>

                                <div class="col-md-2">
                                    <label>Estado</label>
                                    <select class="form-select" name="estado" aria-label="Default select example" required>
                                        <option value="Habilitado">HABILITADO</option>
                                        <option value="Desabilitado">DESABILITADO</option>
                                    </select>
                                </div>

                                <div class="col-md-2">                               
                                    <label>Sexo</label>
                                    <input type="text" name="sexo" class="form-control" value="<?php echo $sexo; ?>" readonly="readonly">    
                                </div>
                            </div>
                                <br/>
                                <div class="col-md-12">                               
                                    <input class="btn btn-success" type="submit" name="actualizar_usuario">
                                </div>
                                <br/>
                            </div>
                        </div>
                    </form>

            </form>
        </div>
    </div>
</div>

<?php } 

// ACTUALIZAR LOS DATOS USUARIO
    if(isset($_POST['actualizar_usuario'])){
       $doc = $_GET['doc'];
       $nombre = $_POST['nombre'];
       $apellido = $_POST['apellido'];
       $estado = $_POST['estado'];
       $consulta = "UPDATE `usuario` SET `nombre`='$nombre',`apellido`='$apellido',`tipo_documento`='$tipo_documento',`estado`='$estado'  WHERE documento_identificacion = $doc";
    //    var_dump($consulta);
    //    exit;
       $respuesta = mysqli_query($conexion,$consulta);
        header('location:index.php');
    }



if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta = "SELECT * FROM mascota WHERE id = $id";
    $respuesta = mysqli_query($conexion,$consulta);
    if(mysqli_num_rows($respuesta) == 1){
       $row = mysqli_fetch_array($respuesta);
       $nombre = $row['nombre'];
       $raza = $row['raza'];
       $usuario_id = $row['usuario_id'];
       $sexo = $row['sexo'];
    } ?>
    
    <div class="container">
       <br/>
    <div class="row">
    
        <div class="card car-body">
        <h1 class="text-center"> Editar Informacion ( Mascota )</h1>
            <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST" name="formulario">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                <label >Nombre</label>
                                    <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre" autofocus required>
                                </div>

                                <div class="col-6">
                                <label >Raza</label>
                                    <input type="text" name="raza" class="form-control" value="<?php echo $raza; ?>" placeholder="Actualiza la raza" autofocus required>
                                </div>

                                <div class="col-6">
                                <label >Sexo</label>
                                    <select class="form-select" name="sexo" aria-label="Default select example">
                                        <option value="Macho">Macho</option>
                                        <option value="hembra">Hembra</option>
                                    </select>

                            </div>

                            </div>
                                <br/>
                                <div class="col-md-12">                               
                                    <input class="btn btn-success" type="submit" name="actualizar_mascota">
                                </div>
                                <br/>
                            </div>
                        </div>
                    </form>

            </form>
        </div>
    </div>
</div>

<?php } 
// ACTUALIZAR LOS DATOS MASCOTA
    if(isset($_POST['actualizar_mascota'])){
       $id = $_GET['id'];
       $nombre = $_POST['nombre'];
       $raza = $_POST['raza'];
       $sexo = $_POST['sexo'];
       $consulta = "UPDATE `mascota` SET `nombre`='$nombre',`raza`='$raza',`sexo`='$sexo'   WHERE id = $id";
    //    var_dump($consulta);
    //    exit;
       $respuesta = mysqli_query($conexion,$consulta);
        header('location:index.php');
    }
?>