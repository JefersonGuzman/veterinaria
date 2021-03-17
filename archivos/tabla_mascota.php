<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="text-center">Tabla listado de Mascotas</h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">IDENTIFICACION</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">RAZA</th>
                        <th scope="col">ACUDIENTE</th>
                        <th colspan="3">Accion</th>

                    </tr>
                    
                </thead>
                <tbody>
                
                    <?php 
                        $consulta_ = "SELECT mascota.id , mascota.nombre , mascota.raza , mascota.usuario_id , CONCAT (usuario.documento_identificacion,' - ',usuario.nombre) AS nombre_user FROM usuario INNER JOIN mascota ON usuario.id = mascota.usuario_id;";
                        $con = mysqli_query($conexion,$consulta_);
                        while($row = mysqli_fetch_array($con)){ ?>                    
                            <tr>
                                <th scope="row"><?php echo $row['id'] ?> </th>
                                <th scope="row"><?php echo $row['nombre'] ?> </th>
                                <th scope="row"><?php echo $row['raza'] ?> </th>
                                <th scope="row"><?php echo $row['nombre_user'] ?> </th>
                                <input name='id_mascota' type="hidden" value='<?= $id_mascota =$row['id']; ?>'>    
                                <th class="text-center">
                                    <a href="editar.php?id=<?php echo $id_mascota ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                </th>
                                <th  class="text-center">
                                    <a href="eliminar.php?id=<?php echo $id_mascota ?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </th>  
                                <!-- <th  class="text-center">
                                    <a href="historia_clinica.php?id=<?php echo $id_mascota ?>" class="btn btn-primary">
                                        <i class="far fa-notes-medical"></i>
                                    </a>
                                </th>   -->
                            </tr>
                            
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>