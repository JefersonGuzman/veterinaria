<?php 


include("conexion.php");


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $consulta = "SELECT * FROM mascota WHERE id = $id";
    $respuesta = mysqli_query($conexion,$consulta);
    if(mysqli_num_rows($respuesta) == 1){
       $row = mysqli_fetch_array($respuesta);
       $nombre = $row['nombre'];
    }

} ?>



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

    <div class="container" id="M_crear_usuario">
    <br>
        <div class="row">
            <?php
                if(isset($_SESSION['respuesta'])){ ?>
                    <div class="alert alert-<?=$_SESSION['tipo_respuesta']?> alert-dismissible" role="alert">
                    <?=$_SESSION['respuesta_crear_usuario'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>           

            <div class="col-md-12">
                <h1>Historia Clinica</h1>
                    <form action="crear.php" method="POST" name="formulario">
                        <div class="form-group">
                                <div class="col-m6">
                                        <label >Nombre</label>
                                        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'];?> " autofocus required>
                                    </div>

                                    <div class="col-m6">
                                        <label >Temperatura</label>
                                        <input type="text" name="temperatura" class="form-control"  autofocus required>
                                    </div>


                                    <label >Peso</label>
                                    <input type="text" name="peso" class="form-control"  autofocus required>

                                    <label >Frecuencia cardiaca</label>
                                    <input type="text" name="frec_cardiaca" class="form-control"  autofocus required>

                                    <label >Frecuencia respiratoria</label>
                                    <input type="text" name="frec_respiratoria" class="form-control"  autofocus required>

                                
                                    <label >alimentacion</label>
                                    <textarea type="text" name="alimentacion" class="form-control"  autofocus required></textarea>

                                    <label >habitad</label>
                                    <input type="text" name="habitad" class="form-control"  autofocus required>

                                    <label >Observaciones</label>
                                    <input type="text" name="observacion" class="form-control"  autofocus required>

                                    <label >Numero de identidad ( Encargado )</label>
                                    <input type="text" name="id_colaborador" class="form-control"  autofocus required>
                                </div>
                                <br/>
                                <div class="col-md-12">                               
                                    <input  class="btn btn-success" type="submit" name="crear_historia">
                                </div>
                                <br/>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>