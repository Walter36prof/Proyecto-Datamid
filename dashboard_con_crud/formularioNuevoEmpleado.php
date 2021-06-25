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

<div class="contenedor-formnewemp">
		<div class="wrapnewEmp">
			
		<form class="formulario" name="formularionuevoEmpleado" id="form-nuevoEmpleado">		
		<h1 class="text-center">Agregar nuevo usuario</h1> 
				<br>
				<div>
					<label for="idProfile" style="color:#303F9F">Perfil de usuario:</label>
					<?php						
					include_once "database/db.config.php";
					// $sentencia = DBC::get()->query("SELECT * FROM profiles;");
					// $profiles = $sentencia->fetchAll(PDO::FETCH_OBJ);
					$query_Perfiles= mysqli_query ($conex,"SELECT * FROM profiles;");
					?>	
					<select name="idProfile" id="idProfile" class="form-control">
						<?php while ($res=mysqli_fetch_assoc($query_Perfiles)){ ?>
						<option value="<?php echo $res['idProfile']?>"> <?php echo $res['nameProfile']?> </option>
						<?php } ?>
					</select>
					<br>
					<div class="input-group">
						<input type="text" id="nameEmployee" name="nameEmployee" required>
						<label class="label" for="nameEmployee">Escribe el nombre del empleado:</label>
					</div>																
					
					<div class="input-group">
						<input type="text" id="employeeAccount" name="employeeAccount" required>
						<label class="label" for="employeeAccount">Cuenta de empleado:</label>
					</div>					
							
					<div class="input-group">
						<input type="email" id="employeeEmail" name="employeeEmail" required>
						<label class="label" for="employeeEmail">Correo del usuario:</label>
					</div>

					<div class="input-group">
						<input type="password" id="employeePass" name="employeePass" required>
						<label class="label" for="employeePass">Contraseña de usuario:</label>
					</div>

					<br><center>
					<input type="button" value="Guardar" class="btn btn-primary" id="btn-new-empleado">
					<a class="btn btn-warning" href="usuariosdelsistema.php">Cancelar</a>
					</center>					
				</div>
			</form>
		</div>
	</div>
	<br>
	<script src="js/formularioNuevoEmpleado.js"></script>

<!--INICIO del cont principal
<h1 class="text-center">Agregar nuevo usuario</h1>
<div class="container" >
		<div class="row">
            
<div class="col-md-12 text-center ">
	<h1 class="text-center">Agregar un nuevo usuario al sistema</h1> 
	<form class="formulario" name="formulario-nuevoEmpleado" id="form-nuevoEmpleado">

		<label for="codigo">Nombre: </label>
		<input class="form-control" name="nameEmployee" required type="text" id="nameEmployee" placeholder="Escribe el nombre del empleado">

        	 PERFILES DE USUARIO 
            	<PERFILES DE USUARIO 
			<?php
				include_once "database/db.config.php";
				// $sentencia = DBC::get()->query("SELECT * FROM profiles;");
				// $profiles = $sentencia->fetchAll(PDO::FETCH_OBJ);
				$query_Perfiles= mysqli_query ($conex,"SELECT * FROM profiles;");
			?>
		
			<label for="idperfil">Perfil de usuario:</label>
			<select name="idProfile" id="idProfile" class="form-control">

				<?php while ($res=mysqli_fetch_assoc($query_Perfiles)){ ?>
				<option value="<?php echo $res['idProfile']?>"> <?php echo $res['nameProfile']?> </option>
				<?php } ?>
			</select>

            	 ------------------------------------------------------------------ 
        <label for="cuentadeempleado">Cuenta de empleado:</label>
		<input class="form-control" name="employeeAccount" required type="text" id="employeeAccount" placeholder="Cuenta del nuevo empleado">
		
        <label for="contraseña">Contraseña:</label>
		<input class="form-control" name="employeePass" required type="text" id="employeePass" placeholder="Contraseña de usuario">

        <label for="Correo">Correo:</label>
		<input class="form-control" name="employeeEmail" required type="text" id="employeeEmail" placeholder="Correo del usuario">

		<br><center>
		<input type="button" value="Guardar" class="btn btn-primary" id="btn-new-empleado">
		</center> <br>
	</form>
</div>
   		</div>
	</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>


