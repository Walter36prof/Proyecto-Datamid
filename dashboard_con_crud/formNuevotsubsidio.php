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
<h1 class="text-center">Agregar nuevo registro de Tsubsidio</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-tsubsidio" id="form-tsubsidio">
		<label for="aniominimo">SUELDO INFERIOR: </label>
		<input class="form-control" name="sueldoinf" required type="number" id="sueldoinf" placeholder="Escribe el sueldo inferior">
		<label for="aniominimo">SUELDO SUPERIOR: </label>
		<input class="form-control" name="sueldosup" required type="number" id="sueldosup" placeholder="Escribe el sueldo superior">
		<label for="aniominimo">LIMITE INFERIOR: </label>
		<input class="form-control" name="limiteinf" required type="number" id="limiteinf" placeholder="Escribe el limite inferior">
		<label for="aniominimo">LIMITE SUPERIOR: </label>
		<input class="form-control" name="limitesup" required type="number" id="limitesup" placeholder="Escribe el limite superior">       
		<label for="aniominimo">SUBSIDIO: </label>
		<input class="form-control" name="subsidio" required type="number" id="subsidio" placeholder="Escribe el subsidio">
		<label for="aniominimo">AÑO: </label>
		<input class="form-control" name="Anio" required type="number" id="Anio" placeholder="Escribe el año">
		<label for="aniominimo">TIPO: </label>
		<select class="form-control" id="tipo" name="tipo">
            <option value="Diarios">Diario</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>

		<br><center><input class="btn btn-primary" id="btn-new-tsubsidio" type="button" value="Guardar"><a class="btn btn-danger" href="tsubsidio.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>