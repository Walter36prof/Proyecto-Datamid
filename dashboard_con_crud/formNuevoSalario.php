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
<h1 class="text-center">Agregar nuevo registro de salario</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-salario" id="form-salario">
		<label for="aniominimo">AÑO DEL SALARIO: </label>
		<input class="form-control" name="anio" required type="number" id="anio" placeholder="año del salario">
		<label for="aniominimo">ZONA: </label>
		<input class="form-control" name="zona" required type="text" id="zona" placeholder="Escribe la zona">

		<label for="aniominimo">VALOR: </label>
		<input class="form-control" name="valor" required type="number" id="valor" placeholder="Escribe el valor">       

		<br><center><input class="btn btn-primary" id="btn-new-salario" type="button" value="Guardar"><a class="btn btn-danger" href="salario.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>s