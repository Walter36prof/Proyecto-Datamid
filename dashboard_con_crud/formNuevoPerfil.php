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

    echo '<script type="text/javascript">
	alert("Debes ser un administrador para entrar a esta pagina. La sesion se finalizara para fines de seguridad");
	    window.location="services/cierre.php";
        </script> ';
    }
require_once "includes/parte_superior.php";


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
		<form class="formulario" name="formularionuevoperfil" id="form-new-perfil">		
		<h1 class="text-center">Agregar un nuevo perfil</h1>
				<br>
				<div>
					<div class="input-group">
						<input type="text" id="profileName" name="profileName" required>
						<label class="label" for="profileName">Escriba el tipo de perfil:</label>
					</div>
					<div class="input-group">
						<textarea class="form-control" name="profileDesc" required rows="4" cols="50" id="profileDesc" placeholder="Escriba la descripcion del perfil"></textarea>						
					</div>															
																				
					<br><CENTER><input class="btn btn-primary" id="btn-new-perfil" type="button" value="Guardar">
					<a class="btn btn-warning" href="perfilesUsuario.php">Cancelar</a></CENTER>
				</div>
			</form>
		</div>
	</div>
	<script src="js/formularioPerfilnew.js"></script>
<!--INICIO del cont principal
<div class="container">
		<div class="row">
<div class="col-md-12 text-center">
	<h1 class="text-center">Agregar un Nuevo perfil</h1>
	<form class="formulario" name="formulario-nuevoperfil" id="form-new-perfil">

		<label for="nombre">Nombre:</label>
		<input class="form-control" name="profileName" required type="text" id="profileName" placeholder="Tipo de perfil">

		<label for="descripcion">Descripción:</label>
		<input required id="profileDesc" name="profileDesc" cols="30" rows="1" class="form-control " placeholder="Descripcion de perfil"></input>

    <br><CENTER><input class="btn btn-primary" id="btn-new-perfil" type="button" value="Guardar"></CENTER>
	</form>
</div>
            		</div>
	</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>