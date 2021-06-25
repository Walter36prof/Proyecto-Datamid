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
<h1 class="text-center">Agregar nuevo registro de vacaciones</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-vacaciones" id="form-vacaciones">
		<label for="aniominimo">Año mínimo: </label>
		<input class="form-control" name="aniominimo" required type="number" id="aniominimo" placeholder="Escribe el año mínimo">

		<label for="aniomaximo">Año Máximo:</label>
		<input class="form-control" name="aniomaximo" required type="number" id="aniomaximo" placeholder="Escribe el año máximo">

        <label for="diasvacaciones">Dias de vacaciones:</label>
		<input class="form-control" name="diasvacaciones" required type="number" id="diasvacaciones" placeholder="Escribe numero de Dias de vacaciones">
		
        <label for="prima">Prima:</label>
		<input class="form-control" name="prima" required type="number" id="prima" placeholder="Escribe la Prima">

		<br><center><input class="btn btn-primary" id="btn-new-vacation" type="button" value="Guardar"><a class="btn btn-danger" href="vacaciones.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>s