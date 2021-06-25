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
        </script> ';
    }
require_once "includes/sidebarInvitado.php"
?>

<!--INICIO del cont principal-->
<!-- <div class="container">
    <h1 class="text-center">Catalogo Administrador</h1> -->
    <!-- Inicia el contenido -->  
          
    <div class="col-xs-12">
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Calculadoras</title>
                <link rel="stylesheet" href="styles/estiloscalculator.css">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            </head>
                <body>
                <div class="container">
                        <div class="card">
                            <img src="images/nomina.svg">
                            <h4>Calcular Nomina</h4>
                            <a href="invitadoCalculadoraNomina.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/nominaneto.svg">
                            <h4>Calcular Nomina Neto</h4>
                            <a href="invitadoCalculadoraNominaNeto.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/asimiladosexcel.svg">
                            <h4>Calcular Nominas por Excel</h4>
                            <a href="invitadoCalculadoraNominaExcel.php">Acceder</a>
                        </div>
		                <div class="card">
                            <img src="images/asimilados.svg">
                            <h4>Calcular Asimilados</h4>
                            <a href="invitadoCalculadoraAsimilados.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/asimiladosneto.svg">
                            <h4>Calcular Asimilados neto</h4>
                            <a href="invitadoCalculadoraAsimiladosNeto.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/tablaimpuestos.svg">
                            <h4>Tabla de impuestos</h4>
                            <a href="invitadoCalculadoraTablaImpuestos.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/ptu.svg">
                            <h4>PTU</h4>
                            <a href="invitadoCalculadoraPTU.php">Acceder</a>
                        </div>
                    </div>  
                </body>
        </html>
    </div>
    <?php include_once "includes/pie.php" ?>
<!-- </div> -->
<!--FIN del cont principal-->
<?php require_once "includes/parte_inferior.php"?> 