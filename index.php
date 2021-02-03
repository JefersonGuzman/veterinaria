<!--  Lo que realizamos es incluir el archivo que realiza la conexion con la base de datos -->
<?php include("conexion.php");?>    
<?php include("archivos/header.php"); ?>

<!-- FORMULARIO DE CREAR COLABORADOR -->
<div class="collapse" id="form_colaborador">
  <div class="card card-body">
  <?php include("archivos/formulario_crear_colaborador.php"); ?>
  </div>
</div>

<!-- Tabla donde ver todos los Colaboradores -->
<?php include("archivos/tabla_colaborador.php"); ?>

<!-- FORMULARIO DE CREAR USAURIO -->
<div class="collapse" id="form_usuario">
  <div class="card card-body">
  <?php include("archivos/formulario_crear_usuario.php"); ?>
  </div>
</div>

<!--Tabla donde podran ver todos los usuarios -->
<?php include("archivos/tabla_usuario.php"); ?>

<!-- FORMULARIO DE CREAR MASCOTAS -->
<div class="collapse" id="form_mascota">
  <div class="card card-body">
  <?php include("archivos/formulario_crear_mascota.php"); ?>
  </div>
</div> 

<!--Tabla donde podran ver todos las Mascotas -->
<?php include("archivos/tabla_mascota.php"); ?>

<?php include("archivos/footer.php"); ?>
