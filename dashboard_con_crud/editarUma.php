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
    
if(!isset($_GET["idUma"])) exit();
$idUma = $_GET["idUma"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM umas WHERE idumas = ?;");
            $stmt->bind_param('i', $idUma);
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
		<h1 class="text-center">Editar Registro de UMA </h1>
		<form class="formulario" name="formulario-editarUma" id="form-editarUma">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
		    <input class="form-control" name="idUma" type="hidden" readonly id="idUma" placeholder="Id de Uma" value="<?php echo $res['idumas']; ?>">

		    <label for="Uma">UMA:</label>
		    <input class="form-control" name="uma" required type="number" id="uma"  placeholder="Escribe la UMA" value="<?php echo $res['uma']; ?>">

		    <label for="AÑO">Año de UMA:</label>
		    <input required type="number" id="aniouma" name="aniouma" class="form-control" placeholder="Escribe el año del UMA" value="<?php echo $res['anio']; ?>"></input>

		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-uma" value="Guardar"><a class="btn btn-danger" href="umas.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>