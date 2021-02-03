<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="text-center">Tabla Listado de Usuario</h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr  class="text-center">
                        <th scope="col">identificador</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">tipo de documento</th>
                        <th scope="col">doc de identificacion</th>
                        <th scope="col">estado</th>
                        <th scope="col">Sexo</th>
                        <th colspan="2">Accion</th>
                    </tr>
                    
                </thead>
                <tbody>
                
                    <?php 
                        $consulta_ = "SELECT * FROM usuario";
                        $todos_productos = mysqli_query($conexion,$consulta_);
                        // Sirve para bug encontrar los errores mas faciles.
                        // var_dump($todos_productos);

                        while($row = mysqli_fetch_array($todos_productos)){ ?>                    
                            <tr>
                                <th scope="row"><?php echo $row['id'] ?> </th>
                                <th scope="row"><?php echo $row['nombre'] ?> </th>
                                <th scope="row"><?php echo $row['apellido'] ?> </th>
                                <th scope="row"><?php echo $row['tipo_documento'] ?> </th>
                                <th scope="row"><?php echo $row['documento_identificacion'] ?> </th>
                                <th scope="row"><?php echo $row['estado'] ?> </th>
                                <th scope="row"><?php echo $row['sexo'] ?> </th>
                                <th class="text-center">
                                    <a href="editar.php?doc=<?php echo $row['documento_identificacion']?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                </th>
                                <th  class="text-center">
                                    <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </th>                                       
                            </tr>
                            
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

