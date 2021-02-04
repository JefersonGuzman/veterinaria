<!--  Lo que realizamos es incluir el archivo que realiza la conexion con la base de datos -->
<?php include("conexion.php");?>    
<?php include("archivos/header.php"); ?>


<!-- Tabla donde ver todos los Colaboradores -->

<?php include("archivos/tabla_colaborador.php"); ?>


<!--Tabla donde podran ver todos los usuarios -->
<?php include("archivos/tabla_usuario.php"); ?>


<!--Tabla donde podran ver todos las Mascotas -->
<?php include("archivos/tabla_mascota.php"); ?>

<!-- Footer de la pagina -->
<?php include("archivos/footer.php"); ?>
