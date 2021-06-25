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
<h1 class="text-center">Agregar nuevo registro de Impuestos Nomina</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-impuestonomina" id="form-impuestonomina">
		<label for="aniominimo">ESTADO: </label>
		<input class="form-control" name="estado" required type="text" id="estado" placeholder="Escriba el estado">
		<label for="aniominimo">PORCENTAJE: </label>
		<input class="form-control" name="porcentaje" required type="number" id="porcentaje" placeholder="Escribe el porcentaje">
		<label for="aniominimo">DESCRIPCION: </label>	
		<textarea class="form-control" rows="10" cols="50" name="descripcion" required type="text" id="descripcion" placeholder="Escribe una pequeña descripcion"></textarea>
		<label for="aniominimo">AÑO: </label>
		<input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el año">       

		<br><center><input class="btn btn-primary" id="btn-new-impuestonomina" type="button" value="Guardar"><a class="btn btn-danger" href="impuestonomina.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>s