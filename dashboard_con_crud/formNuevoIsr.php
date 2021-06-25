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
<h1 class="text-center">Agregar un nuevo registro de ISR</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-isr" id="form-isr">

		<label for="sueldoinf">Sueldo Inferior: </label>
		<input class="form-control" name="sueldoinferior" required type="number" id="sueldoinferior" placeholder="Ingresa el sueldo inferior">

        <label for="sueldosup">Sueldo Superior: </label>
		<input class="form-control" name="sueldosuperior" required type="number" id="sueldosuperior" placeholder="Ingresa el sueldo superior">

        <label for="limiteinf">Limite Inferior: </label>
		<input class="form-control" name="limiteinferior" required type="number" id="limiteinferior" placeholder="Ingresa el limite superior">

        <label for="limitesup">Limite Superior: </label>
		<input class="form-control" name="limitesuperior" required type="number" id="limitesuperior" placeholder="Ingresa el limite superior">

        <label for="cuotafija">Cuota Fija: </label>
		<input class="form-control" name="cuotafija" required type="number" id="cuotafija" placeholder="Ingresa la cuota fija">

        <label for="porcentaje">Porcentaje: </label>
		<input class="form-control" name="porcentaje" required type="number" id="porcentaje" placeholder="Ingresa el porcentaje">

        <label for="anio">Año de ISR: </label>
		<input class="form-control" name="anioisr" required type="number" id="anioisr" placeholder="Ingresa el año del ISR">

        <label for="tipo">Tipo: </label>
		<!-- <input class="form-control" name="tipo" required type="number" id="tipo" placeholder="Ingresa la cuota fija"> -->
        <select class="form-control" id="tipo" name="tipo">
            <option value="Diarios">Diario</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>
		<!-- <label for="">Estado:</label>
		<input class="form-control" name="estado" required type="number" id="estado" placeholder="Escribe el estado de empresa">  -->

        

		<br><br><center><input class="btn btn-primary" id="btn-new-isr" type="button" value="Guardar"><a class="btn btn-danger" href="isr.php">Cancelar</a></center>
	</form>
    </div>
   	</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>