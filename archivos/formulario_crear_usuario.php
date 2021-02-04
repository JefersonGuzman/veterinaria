<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="archivos/estilo.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <?php $vista="usuario"?>
    <?php include("nav.php"); ?>

</head>
<body>
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
            <h1>Formulario Crear Usuario</h1> 
                <form action="crear.php" method="POST" name="formulario">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="nombre" class="form-control"  autofocus required>

                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control"required>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Tipo de documento</label>
                                <select class="form-select" aria-label="" name="tipo_documento">
                                    <option selected>Seleccionar.....</option>
                                    <option value="tarjeta identidad">Tarjeta de identidad</option>
                                    <option value="cedula">Cedula</option>
                                    <option value="pasaporte">Pasaporte</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Numero de documento</label>
                                <input type="text" name="doc_identificacion" class="form-control"  required>    
                            </div>

                            <div class="col-md-2">
                                <label>Estado</label>
                                <input type="text"  class="form-control" names="estado" value="HABILITADO" readonly="readonly">
                            </div>

                            <div class="col-md-2">                               
                                <label>Sexo</label>
                                <select class="form-select" name="sexo" aria-label="Default select example">
                                    <option selected>Seleccionar.....</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>
                        </div>
                            <div class="row" id="contenedor_btn">
                                <div class="col-md-2">                               
                                    <input  class="btn btn-success" type="submit" name="guardar_usuario" id="btn">
                                </div>
                                <div class="col-md-2">                               
                                    <a  class="btn btn-danger"  name="" id="btn" value=""  data-bs-toggle="collapse" href="../index.php">Cerrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
