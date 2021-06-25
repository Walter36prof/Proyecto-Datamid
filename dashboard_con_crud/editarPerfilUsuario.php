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

<?php
if(!isset($_GET["idProfile"])) exit();
$idProfile = $_GET["idProfile"];
include_once "database/db.config.php";

// $sentencia = DBC::get()->prepare("SELECT * FROM profiles WHERE idProfile = ?;");
// $sentencia->execute([$idProfile]);
// $producto = $sentencia->fetch(PDO::FETCH_OBJ);
$stmt = $conex->prepare("SELECT * FROM profiles WHERE idProfile = ?;");
            $stmt->bind_param('i', $idProfile);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;

if($num_of_rows<1){
	echo "¡No existe algún perfil con ese ID!";
	exit();
}
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
		<form class="formulario" name="formularioperfilUsuario" id="form-editperfilUsuario">
		<?php  while ($res = $result->fetch_assoc()) {?>
			<h1>Editar perfil de usuario</h1>
				<br>
				<div>
					<input type="hidden" name="id" value="<?php echo $res['idProfile']; ?>">
					<input value="<?php echo $res['idProfile'] ?>" class="form-control" name="idProfile" required type="hidden" id="idProfile" placeholder="id Perfil">

					<div class="input-group">
						<input autofocus type="text" id="profileName" name="profileName" required value="<?php echo $res['nameProfile']?>">
						<label class="label" for="profileName">Escriba el tipo de perfil:</label>
					</div>
					<div class="input-group">
						<textarea class="form-control" name="profileDesc" required rows="4" cols="50" id="profileDesc" placeholder="Escriba la descripcion del perfil"><?php echo $res['descriptionProfile'] ?></textarea>						
					</div>															
		<?php } ?>														
					<br><CENTER>
					<input class="btn btn-primary" type="button" id="btn-edit-perfil" value="Guardar">
					<a class="btn btn-warning" href="perfilesUsuario.php">Cancelar</a></CENTER>
				</div>
			</form>
		</div>
	</div>
	<script src="js/formularioPerfiledit.js"></script>

<!--INICIO del cont principal
<div class="container" >
		<div class="row">
	<div class="col-md-12 text-center">

	<?php  while ($res = $result->fetch_assoc()) {
					
					
	?>
		<h1>Editar datos de perfil de usuario</h1>

		<form class="formulario" name="formulario-perfilUsuario" id="form-editperfilUsuario">

			<input type="hidden" name="id" value="<?php echo $res['idProfile']; ?>">
	
			<label for="idperfil">id Perfil:</label>
			<input value="<?php echo $res['idProfile'] ?>" class="form-control" name="idProfile" required type="text" id="idProfile" placeholder="id Perfil">

			<label for="nombre">nombre de perfil:</label>
			<textarea required id="profileName" name="profileName" cols="30" rows="1" class="form-control"><?php echo $res['nameProfile']?></textarea>

			<label for="descripcion">Descripcion de perfil:</label>	
			<textarea class="form-control" name="profileDesc" required  id="profileDesc" placeholder="descripcion de perfil" name= cols="30" rows="5"><?php echo $res['descriptionProfile'] ?></textarea>

	<?php } ?>
            <br><CENTER>
			<input class="btn btn-primary" type="button" id="btn-edit-perfil" value="Guardar">
			<a class="btn btn-warning" href="perfilesUsuario.php">Cancelar</a></CENTER>
		</form>
	</div>
            		</div>
	</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>