
<link rel="stylesheet" href="estilo.css" type="text/css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand icono" href="../index.php"><i class="far fa-bone"></i> Veterianaria 24 / 7 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php 
        switch ($vista) {
            case 'colaborador':

                echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>";
                echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='../index.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'>TABLA COLABORADOR </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='formulario_crear_usuario.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> CREAR USUARIO </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark' href='formulario_crear_mascota.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> CREAR MASCOTAS </a>";
                echo "</li>";
                echo "</ul>";

                break;
            case 'mascota':
                echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>";
                echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='formulario_crear_colaborador.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'>CREAR COLABORADOR </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='formulario_crear_usuario.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> CREAR USUARIO </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark' href='../index.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> TABLA DE MASCOTAS </a>";
                echo "</li>";
                echo "</ul>";
                break;
            case 'usuario':
                echo "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>";
                echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='formulario_crear_colaborador.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'>CREAR COLABORADOR </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark'  href='../index.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> TABLA USUARIO </a>";
                    echo "</li>";
                    echo "<li class='nav-item'>";
                    echo "<a class='btn btn-dark' href='formulario_crear_mascota.php' role='button' aria-expanded='false' aria-controls='collapseExample' id='menu'> CREAR  MASCOTAS </a>";
                echo "</li>";
                echo "</ul>";
                break;
        }
    ?>

    </div>
  </div>
</nav>