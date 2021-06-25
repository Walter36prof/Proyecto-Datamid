<?php 
session_start();
// require_once "includes/parte_superior.php";

error_reporting(0);
//verificamos si hay algo en la variable
$varsesion= $_SESSION['nameUser'];
$varProfile=$_SESSION['idProfile'];
if($varsesion== null || $varsesion=''){
    header("Location: index.php");
    die();
}   
else if($varProfile != 1){

    echo '<script type="text/javascript">
    alert("Debes ser un administrador para entrar a esta pagina. La sesion se finalizara para fines de seguridad");
	    window.location="services/cierre.php";
        </script> ';
    }
require_once "includes/parte_superior.php"
?>
<div class="col-xs-12">
        <html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Editar mi perfil</title>
    <link rel="stylesheet" href="styles/estilocalculadoras.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    <section class="calculoptu" style="height: 500px;">
    <form method="post" action="services/guardamiPerfilAdminEditado.php">
      <h5>EDITAR PERFIL DE ADMIN</h5>
      <h6 class="text-center">Nombre y Apellido</h6>
      <input class="controlsasimilados" type="text" name="nombre" placeholder="Nombre y apellidos" value="<?php echo $_SESSION['nameUser'];?>" >
      <h6 class="text-center">Cuenta de Admin:</h6>
      <input class="controlsasimilados" type="text" name="cuenta" placeholder="Cuenta de usuario" value="<?php echo $_SESSION['accountUser'];?>">
      <h6 class="text-center">Correo Electronico:</h6>
      <input class="controlsasimilados" type="text" name="correo" placeholder="Correo de usuario" value="<?php echo $_SESSION['emailUser'];?>">
      <h6 class="text-center">Rol:</h6>
      <input class="controlsasimilados" type="text" name="Rol" placeholder="ADMINISTRADOR" readonly>
      <input class="controlsasimilados" type="text" hidden name="idUser" value=" <?php echo $_SESSION['idUser'];?>" readonly>
      <!-- <h2 class="text-center">Foto de perfil:</h2>
      <img class="img-profile rounded-circle" src="images/undraw_profile.svg" style="width:200px; margin-left: 260px;"><br><br>
      <h2 class="text-center" style=""><b>Nombre: <?php echo $_SESSION['nameUser'];?></b></h2> 
      <h2 class="text-center" style=""><b>Cuenta de Usuario: <?php echo $_SESSION['accountUser'];?></b></h2>
      <h2 class="text-center" style=""><b>Rol: <?php echo $_SESSION['tipoUser'];?></b></h2>    -->
     
                       
      
        <br>
        <br>
        <center>
        <input type="submit" value="Guardar" class="btn btn-primary" style="margin-right: 10px;">
        <a href="miperfil.php" class="btn btn-warning" role="button" style="margin-left: 10px;">Cancelar</a>

       
        </center>
        </form>
    </section>

  </body>
</html>
</div>
<?php include_once "includes/pie.php" ?>
<!-- </div> -->
<!--FIN del cont principal-->
<?php require_once "includes/parte_inferior.php"?> 