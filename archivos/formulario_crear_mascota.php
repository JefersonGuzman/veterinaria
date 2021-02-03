<body>
    <div class="container">
    <br>
        <div class="row">
            <?php
                if(isset($_SESSION['respuesta'])){ ?>
                    <div class="alert alert-<?=$_SESSION['tipo_respuesta']?> alert-dismissible fade show" role="alert">
                    <?=$_SESSION['respuesta'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

            <?php  session_unset();} ?>

            <div class="col-md-12" id="M_crear_mascota">
                <h1>Formulario Crear Mascotas</h1>
                    <form action="crear.php" method="POST" name="formulario">
                        <div class="form-group">
                            <label >Nombre</label>
                            <input type="text" name="nombre" class="form-control"  autofocus required>

                            <label >Raza</label>
                                <select class="form-select" name="raza" aria-label="Default select example">
                                    <option selected>Seleccionar.....</option>
                                    <option value="pug">Pug</option>
                                    <option value="rottweiler">Rottweiler</option>
                                    <option value="pastor">Pastor</option>
                                    <option value="pug">pug</option>
                                    <option value="chihuahua">Chihuahua</option>
                                    <option value="golden">Golden</option>

                                </select>

                            <label >Sexo</label>
                                    <select class="form-select" name="sexo" aria-label="Default select example">
                                        <option selected>Seleccionar.....</option>
                                        <option value="Macho">Macho</option>
                                        <option value="hembra">Hembra</option>
                                    </select>
                            <label >Acudiente</label>
                            <input type="text" name="doc_identific" class="form-control"  placeholder=" id del acudiente" required>
                            
                            <div class="row" id="contenedor_btn">
                                <div class="col-md-2">                               
                                    <input  class="btn btn-success" type="submit" name="guardar_mascota" id="btn">
                                </div>
                                <div class="col-md-2">                               
                                    <a  class="btn btn-danger" id="btn" value=""  data-bs-toggle="collapse" href="#form_mascota">Cerrar</a>
                                </div>
                            </div>

                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>