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
<h1 class="text-center">Agregar una Nueva Empresa</h1>
<div class="container"  style="width: 500px; margin: 0 auto;" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<!-- <h1 class="text-center">Agregar un nuevo usuario al sistema</h1> -->
	<form class="formulario" name="formulario-empresa" id="form-empresa">
		<label for="empresa">Nombre de Empresa: </label>
		<input class="form-control" name="empresa" required type="text" id="empresa" placeholder="Escribe nombre de la empresa">

		<!-- <label for="">Estado:</label>
		<input class="form-control" name="estado" required type="number" id="estado" placeholder="Escribe el estado de empresa">  -->

        

		<br><center><input class="btn btn-primary" id="btn-new-empresa" type="button" value="Guardar"><a class="btn btn-danger" href="empresas.php">Cancelar</a></center>
	</form>
</div>
   		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>s