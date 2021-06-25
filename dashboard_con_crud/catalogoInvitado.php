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
else if($varProfile != 2){

    echo '<script type="text/javascript">
	    alert("No tienes permiso para ingresar a esta pagina. La sesion se finalizara para fines de seguridad");
        window.location="services/cierre.php";
       
	   
        </script> ';
    }

require_once "includes/sidebarInvitado.php";
?>

<!--INICIO del cont principal-->
<!-- <div class="container">-->
    <h1 class="text-center">Catalogo de usuario</h1>
    <!-- Inicia el contenido -->   
          
    <div class="col-xs-12">
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Home</title>
                <link rel="stylesheet" href="styles/estiloscatalogo.css">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            </head>
                <body>
                    <div class="container" >                                           
                        <div class="card">
                            <img src="images/impuesto.svg">
                            <h4>Areas del Sistema</h4>
                            <a href="areasdelsistema.php" role="button">Acceder</a>
                        </div>
                        <!--
                        <div class="card">
                            <img src="images/cliente3.svg">
                            <h4>Clientes</h4>
                            <a href="clientesDelSistema.php">Acceder</a>
                        </div>
                        -->
                        <div class="card">
                            <img src="img/registro.svg">
                            <h4>Registros</h4>
                            <a href="catalogoRegistros.php">Acceder</a>
                        </div>                                                                     
                    </div>    
                </body>               
        </html>
    </div>
</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?> 