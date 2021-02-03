

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
                                <br/>
                                <div class="col-md-12">                               
                                    <input  class="btn btn-success" type="submit" name="guardar_usuario">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>