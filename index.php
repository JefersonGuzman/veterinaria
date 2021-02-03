<!--  Lo que realizamos es incluir el archivo que realiza la conexion con la base de datos -->
<?php include("conexion.php");?>    
<?php include("archivos/header.php"); ?>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <?php include("archivos/formulario_crear_usuario.php"); ?>
  </div>
</div>
<hr/>
<!--Tabla donde podran ver todos los usuarios -->
<?php include("archivos/tabla_usuario.php"); ?>

<div class="collapse" id="form_mascotas">
  <div class="card card-body">
  <?php include("archivos/formulario_crear_mascota.php"); ?>
  </div>
</div> 
<hr/>
<!--Tabla donde podran ver todos las Mascotas -->
<?php include("archivos/tabla_mascota.php"); ?>

<?php include("archivos/footer.php"); ?>
