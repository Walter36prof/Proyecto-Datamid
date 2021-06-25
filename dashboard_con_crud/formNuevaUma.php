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
<h1 class="text-center">Agregar nuevo registro de UMA</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-umas" id="form-umas">
		<label for="aniominimo">UMA: </label>
		<input class="form-control" name="uma" required type="number" id="uma" placeholder="Escribe la UMA">

		<label for="aniomaximo">Año:</label>
		<input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el año de la UMA">

        

		<br><center><input class="btn btn-primary" id="btn-new-uma" type="button" value="Guardar"><a class="btn btn-danger" href="umas.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>s