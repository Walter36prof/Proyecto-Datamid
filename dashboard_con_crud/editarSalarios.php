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
    
if(!isset($_GET["anio"])) exit();
$anio = $_GET["anio"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM salarios WHERE anio = ?;");
            $stmt->bind_param('i', $anio);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;

if($num_of_rows<1){
	echo "¡No existe algún salario con ese ID!";
	exit();
}
?>

<!--INICIO del cont principal-->
<div class="container" style="width: 500px; margin: 0 auto;">
		<div class="row">
	<div class="col-xs-12">

	<?php  while ($res = $result->fetch_assoc()) {
					
					
	?>
		<h1 class="text-center">Editar Registro de salarios del año <?php echo $res['anio']; ?></h1>
		<form class="formulario" name="formulario-editarSalarios" id="form-editarSalarios">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
			<input class="form-control" name="anio" required type="hidden" id="anio" placeholder="año del salario" value="<?php echo $res['anio']; ?>">
			<label for="Uma">Zona A:</label>
		    <input class="form-control" name="zonaA" required type="number" id="zonaA" placeholder="Salario zona A" value="<?php echo $res['zona_a']; ?>">
			<label for="Uma">Zona B:</label>
			<input class="form-control" name="zonaB" required type="number" id="zonaB" placeholder="Salario zona B" value="<?php echo $res['zona_b']; ?>">
			<label for="Uma">Zona C:</label>
			<input class="form-control" name="zonaC" required type="number" id="zonaC" placeholder="Salario zona C" value="<?php echo $res['zona_c']; ?>">					    
		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-salarios" value="Guardar"><a class="btn btn-danger" href="salarios.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>