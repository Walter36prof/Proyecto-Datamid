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

if(!isset($_GET["idVacacion"])) exit();
$idVacacion = $_GET["idVacacion"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM vacaciones WHERE idvacaciones = ?;");
            $stmt->bind_param('i', $idVacacion);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;

if($num_of_rows<1){
	echo "¡No existe algún cliente con ese ID!";
	exit();
}
?>

<!--INICIO del cont principal-->
<div class="container" style="width: 500px; margin: 0 auto;">
		<div class="row">
	<div class="col-xs-12">

	<?php  while ($res = $result->fetch_assoc()) {
					
					
	?>
		<h1 class="text-center">Editar Registro de vacación </h1>
		<form class="formulario" name="formulario-editarVacacion" id="form-editarVacacion">
		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
		    <input class="form-control" name="idVacacion" type="hidden" readonly id="idVacacion" placeholder="Id de registro" value="<?php echo $res['idvacaciones']; ?>">

		    <label for="aniominimo">Ano mínimo:</label>
		    <input class="form-control" name="aniominimo" required type="number" id="aniominimo"  placeholder="Escribe el año mínimo" value="<?php echo $res['aniominimo']; ?>">

		    <label for="aniomaximo">Año máximo:</label>
		    <input required type="number" id="aniomaximo" name="aniomaximo" class="form-control" placeholder="Escribe Años Máximos" value="<?php echo $res['aniomaximo']; ?>"></input>

		    <label for="diasvacaciones">Dias de vacaciones:</label>
		    <input class="form-control" name="diasvacaciones" required type="number" id="diasvacaciones"  placeholder="Dias de vacaciones" value="<?php echo $res['dias']; ?>">

		    <label for="calle">Prima:</label>
		    <input class="form-control" name="prima" required type="number" id="prima" placeholder="Escribe la Prima" value="<?php echo $res['prima']; ?>">

		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-vacation" value="Guardar"><a class="btn btn-danger" href="vacaciones.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>