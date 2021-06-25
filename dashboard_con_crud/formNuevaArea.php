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
<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title></title>
	
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="styles/estilosLogin.css">
    
    <link rel="stylesheet" href="alert/style.css" />
    <script src="alert/cute-alert.js"></script>

<div class="contenedor-formularioAreas">
		<div class="wrapAreas">
		<form enctype="multipart/form-data" class="formulario" name="formulario_area" id="formulario_area2">
		<h1 class="text-center">Agregar una nueva area</h1>
				<br>
				<div>
					<div class="input-group">
					
						<input type="text" id="areaName" name="areaName" required>
						<label class="label" for="areaName">Escriba el nombre del area:</label>
					</div>
					<input value="<?php echo $_SESSION['idProfile'] ?>" class="form-control" name="tipo" required type="text" hidden id="tipouser" placeholder="id del Area">
					<div class="input-group">
						<textarea class="form-control" name="areaDesc" required rows="4" cols="50" id="areaDesc" placeholder="Escriba la descripcion del area"></textarea>						
					</div>
					
					<CENTER><label for="imagenPortada" style="color: black">Imagen del area:</label></CENTER>
					<div class="container">
					<input style="color: black; text-align-last: center; margin: auto;" type="file" required id="imagenPortada" name="imagenPortada" class="form-control-file " placeholder="Descripcion de perfil"></input>
					</div>					
																				
					<br><CENTER><input class="btn btn-info" type="submit" value="Guardar">
					<a class="btn btn-warning" href="areasdelsistema.php">Cancelar</a></CENTER>
				</div>
			</form>
		</div>
	</div>
	<script src="js/formularioArea.js"></script>
<!--INICIO del cont principal-
<div class="container">
		<div class="row">
<div class="col-md-12 text-center">
	<h1 class="text-center">Agregar una nueva Area</h1>
	<form method="post" action="services/agregarNuevaArea.php " enctype="multipart/form-data">

		<label for="nombre">Nombre de Area:</label>
		<input class="form-control" name="areaName" required type="text" id="areaName" placeholder="Escriba el nombre del area">

		<label for="descripcion">Descripción del Area:</label>		
        <textarea class="form-control" name="areaDesc" required rows="10" cols="50" id="areaDesc" placeholder="Escriba la descripcion del area"></textarea>
        
        <label for="imagenPortada">Imagen de portada:</label>
        <div class="container">
		<input type="file" required id="imagenPortada" name="imagenPortada" class="form-control-file " placeholder="Descripcion de perfil"></input>
        </div>
        

    <br><CENTER><input class="btn btn-info" type="submit" value="Guardar"></CENTER>
	</form>
</div>
            		</div>
	</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>