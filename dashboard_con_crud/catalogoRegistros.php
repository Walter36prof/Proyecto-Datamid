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
	require_once "includes/sidebarInvitado.php";
    }
	else{require_once "includes/parte_superior.php";}
?>

<!--INICIO del cont principal-->
<!-- <div class="container">-->  
    <!-- Inicia el contenido -->  
          
    <div class="col-xs-12">
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>Catalogo Registros</title>
                <link rel="stylesheet" href="styles/estiloscatalogo.css">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            </head>
                <body>
                    <div class="container">
                        <div class="card">
                            <img src="img/subsidios.svg">
                            <h4>TSubsidios</h4>
                            <a href="tsubsidio.php">Acceder</a>
                        </div>                        		                
                        <div class="card">
                            <img src="img/asimiladosexcel.svg">
                            <h4>Subsidio Asimilados</h4>
                            <a href="tsubsidioasimilados.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/subsidio.svg">
                            <h4>Subsidios</h4>
                            <a href="subsidios.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/impuestonomina.svg">
                            <h4>Impuesto nomina</h4>
                            <a href="impuestonomina.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/salario.svg">
                            <h4>Salario</h4>
                            <a href="salario.php">Acceder</a>
                        </div>   
                        <!-- <div class="card">
                            <img src="img/salarios.svg">
                            <h4>Salarios</h4>
                            <a href="salarios.php">Acceder</a>
                        </div>                                              -->
                        <div class="card">
                            <img src="img/el-verano.svg">
                            <h4>Vacaciones</h4>
                            <a href="vacaciones.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/umas.svg">
                            <h4>Umas</h4>
                            <a href="umas.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/empresa.svg">
                            <h4>Empresas</h4>
                            <a href="empresas.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/isr.svg">
                            <h4>ISR</h4>
                            <a href="isr.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/ispt.svg">
                            <h4>ISPT</h4>
                            <a href="ispt.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="img/isrAsimilado.svg">
                            <h4>ISR Asimilados</h4>
                            <a href="isrAsimilados.php">Acceder</a>
                        </div>
                    </div>                                         
                </body>
                 
        </html>
    </div>
    <?php include_once "includes/pie.php" ?>
<!-- </div> -->
<!--FIN del cont principal-->
<?php require_once "includes/parte_inferior.php"?> 

