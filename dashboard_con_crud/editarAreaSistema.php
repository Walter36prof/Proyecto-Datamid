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

<?php
if(!isset($_GET["idArea"])) exit();
$idArea = $_GET["idArea"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM areas WHERE idArea = ?;");
// $sentencia->execute([$idArea]);
// $producto = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM areas WHERE idArea = ?;");
            $stmt->bind_param('i', $idArea);
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
		<form enctype="multipart/form-data" class="formulario" name="formulario_area" id="formulario_area">		
			<?php  while ($res = $result->fetch_assoc()) {
				$notas= str_replace("<br />", "", $res['descripcionArea']);						
			?>
				<h1 class="text-center">Editar area de <?php echo $res['nombreArea']; ?></h1>			
				<br>

				<div>
					<input value="<?php echo $res['idArea'] ?>" class="form-control" name="idArea" required type="text" hidden id="idArea" placeholder="id del Area">
					<input value="<?php echo $_SESSION['idProfile'] ?>" class="form-control" name="tipo" required type="text"  hidden id="tipouser" placeholder="id del Area">
					
					<div class="input-group">
						<input value="<?php echo $res['nombreArea'] ?>" type="text" id="areaName" name="areaName" required>
						<label class="label" for="areaName">Escriba el nombre del area:</label>
					</div>
					<div class="input-group">
						<textarea class="form-control" name="areaDesc" required rows="4" cols="50" id="areaDesc" placeholder="Escriba la descripcion del area"><?php echo $notas?></textarea>						
					</div>

					<CENTER><label for="imagenPortada" style="color: black">Imagen del area actual:</label></CENTER>
            		<CENTER><img class="img-thumbnail" src="images/<?php echo $res['imagenPortada']?>" style="width: 200px;"></CENTER>
					<?php } ?>
					<br>			
					<input style="color: black; text-align-last: center; margin: auto;" type="file" required id="imagenPortadaact" name="imagenPortadaact" cols="30" rows="1" class="form-control-file " placeholder="Descripcion de perfil"></input>
					</div>					
																				
					<br><CENTER><input class="btn btn-info" type="submit" value="Guardar">
						<a class="btn btn-warning" href="areasdelsistema.php">Cancelar</a></CENTER>
				</div>
			</form>
		</div>
	</div>
	<br>
	<script src="js/formularioArea.js"></script>
	<script>
		function ponleFocus(){
    		document.getElementById("areaName").focus();	
		}
		ponleFocus();
	</script>

<!--INICIO del cont principal
<div class="container" >
		<div class="row">
	<div class="col-md-12 text-center">
	<?php  while ($res = $result->fetch_assoc()) {
	$notas= str_replace("<br />", "", $res['descripcionArea']);
					
	?>
		<h1>Editar area con el ID <?php echo $res['idArea']; ?></h1>
		
        <form method="post" action="services/guardarAreaEditada.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $res['idArea']; ?>">
	
			 <label for="idperfil">id Area:</label> -->
			<!--<input value="<?php echo $res['idArea'] ?>" class="form-control" name="idArea" required type="text" hidden id="idArea" placeholder="id del Area">

			<label for="nombre">Nombre de Area:</label>

            <input value="<?php echo $res['nombreArea'] ?>" class="form-control" name="areaName" required type="text" id="areaName" placeholder="Escriba el nuevo nombre del area">

			<label for="descripcion">Descripcion del area:</label>
			 <input value="<?php echo $res['descripcionArea'] ?>" class="form-control" name="areaDesc" required type="text" id="areaDesc" placeholder="Escriba la nueva descripcion del area"> -->
<!--
			<textarea class="form-control" name="areaDesc" required rows="10" cols="50" id="areaDesc" placeholder="Escriba la nueva descripcion del area"><?php echo $notas?></textarea>

            <label for="imagenPortada">Imagen de portada actual:</label> <br>
            <img class="img-thumbnail" src="images/<?php echo $res['imagenPortada']?>" style="width: 200px;">
	<?php } ?>
            <br><label for="imagenPortada">Seleccione nueva imagen de portad:</label> <br>
            <input type="file" required id="imagenPortadaact" name="imagenPortadaact" cols="30" rows="1" class="form-control-file " placeholder="Descripcion de perfil"></input>

			
            <br><CENTER><input class="btn btn-info" type="submit" value="Guardar">

			<a class="btn btn-warning" href="areasdelsistema.php">Cancelar</a></CENTER>
		</form>
	</div>
            		</div>
	</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>