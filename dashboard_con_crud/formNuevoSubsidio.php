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
<h1 class="text-center">Agregar nuevo registro de Subsidio</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-subsidio" id="form-subsidio">
		<label for="ingdesde">Ingresos Desde: </label>
		<input class="form-control" name="ingdesde" required type="number" id="ingdesde" placeholder="Escribe el Ingreso Desde">
		<label for="inghasta">Ingresos Hasta: </label>
		<input class="form-control" name="inghasta" required type="number" id="inghasta" placeholder="Escribe el Ingreso Hasta">
		<label for="credito">Crédito: </label>
		<input class="form-control" name="credito" required type="number" id="credito" placeholder="Escribe el crédito">
		<label for="anio">Año: </label>
		<input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el Año">
		<label for="aniominimo">Tipo: </label>
		<select class="form-control" id="tipo" name="tipo">
            <option value="Diarios">Diario</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>

		<br><center><input class="btn btn-primary" id="btn-new-Subsidio" type="button" value="Guardar"><a class="btn btn-danger" href="subsidios.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>