<?php 
session_start();
// require_once "includes/parte_superior.php";

error_reporting(0);
//verificamos si hay algo en la variable
$varsesion= $_SESSION['nameUser'];
if($varsesion== null || $varsesion=''){
    header("Location: index.php");
    die();
}
require_once "includes/parte_superior.php"
?>

<!--INICIO del cont principal-->
<div class="container">
    <h1 class="text-center">Contenido principal</h1>
    <!-- Inicia el contenido -->  
          
    <div class="col-xs-12">
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Dashboard Invitado</title>
                <link rel="stylesheet" href="styles/estiloscatalogo.css">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            </head>
                <body>
                    <div class="container">
                        <div class="card">
                            <img src="images/perfil2.svg">
                            <h4>Usuarios Del Sistema</h4>
                            <a href="usuariosdelsistema.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/impuesto.svg">
                            <h4>Areas del Sistema</h4>
                            <a href="areasdelsistema.php" role="button">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/cliente3.svg">
                            <h4>Clientes</h4>
                            <a href="clientesDelSistema.php">Acceder</a>
                        </div>
		                <div class="card">
                            <img src="images/settings.svg">
                            <h4>Perfiles de Usuarios</h4>
                            <a href="perfilesUsuario.php">Acceder</a>
                        </div>
                    </div>  
                </body>
        </html>
    </div>
</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>