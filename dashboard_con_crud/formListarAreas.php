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
include_once "database/conexion.php";


$sentencia = DBC::get()->query("SELECT * FROM areas;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!--INICIO del cont principal-->
<div class="container">

    <h1 class="text-center">Areas del sistema</h1><br>
    <?php foreach($productos as $producto){ ?>
    <div class="card shadow mb-3 bg-white rounded" >
            <div class="row">
                <div class="col-md-4">
                
                    <img src="images/<?php echo $producto->imagenPortada?>">
                </div>
                <div class="col-md-8 mt-2">
                    <!-- <div class="card-body"> -->
                        <h5 class="card-title font-weight-bold"><?php echo $producto->nombreArea ?></h5>
                        <p class="card-text"><?php echo $producto->descripcionArea ?></p>
                        
                    <!-- </div> -->
                </div>
            </div>
    </div>
    <br>
    
    <?php } ?>
</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>