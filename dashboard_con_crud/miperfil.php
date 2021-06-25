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
    <title>Mi perfil</title>
    <link rel="stylesheet" href="styles/estilocalculadoras.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    <section class="calculonominaneto">
      <h5>MI PERFIL</h5>
      <h3 class="text-center"><b>Foto de perfil:</b></h3>
      <img class="img-profile rounded-circle" src="images/undraw_profile.svg" style="width:200px; margin-left: 260px;"><br><br>
      <h2 class="text-center" style=""><b>Nombre: <?php echo $_SESSION['nameUser'];?></b></h2> 
      <h2 class="text-center" style=""><b>Cuenta de Usuario: <?php echo $_SESSION['accountUser'];?></b></h2>
      <h2 class="text-center" style=""><b>Correo de usuario: <?php echo $_SESSION['emailUser'];?></b></h2>
      <h2 class="text-center" style=""><b>Rol: <?php echo $_SESSION['tipoUser'];?></b></h2>   
     
                       
      
        
        
        <center>
        <button type="button" class="btn btn-primary" style="margin-right: 10px;" onclick="window.location.href='catalogos.php';">Aceptar</button>
        <a href="miperfilEditarAdmin.php" class="btn btn-warning" role="button" style="margin-left: 10px;">Editar</a>
       
        </center>
        
    </section>

  </body>
</html>
</div>
<?php include_once "includes/pie.php" ?>
<!-- </div> -->
<!--FIN del cont principal-->
<?php require_once "includes/parte_inferior.php"?> 