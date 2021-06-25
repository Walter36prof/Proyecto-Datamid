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
    
if(!isset($_GET["idSubsidio"])) exit();
$idSubsidio = $_GET["idSubsidio"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM tsubsidio WHERE idSubsidio = ?;");
            $stmt->bind_param('i', $idSubsidio);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;

if($num_of_rows<1){
	echo "¡No existe algún subsidio con ese ID!";
	exit();
}
?>

<!--INICIO del cont principal-->
<div class="container" style="width: 500px; margin: 0 auto;">
		<div class="row">
	<div class="col-xs-12">

	<?php  while ($res = $result->fetch_assoc()) {
					
					
	?>
		<h1 class="text-center">Editar Registro de Tsubsidio </h1>
		<form class="formulario" name="formulario-editartsubsidio" id="form-editartsubsidio">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
			<input class="form-control" name="idSubsidio" required type="hidden" id="idSubsidio" placeholder="id Subsidio" value="<?php echo $res['idSubsidio']; ?>">
			<label for="Año">SUELDO INFERIOR:</label>
		    <input class="form-control" name="sueldoinf" required type="number" id="sueldoinf" placeholder="Escribe el sueldo inferior" value="<?php echo $res['sueldoinf']; ?>">
			<label for="Zona">SUELDO SUPERIOR:</label>
			<input class="form-control" name="sueldosup" required type="number" id="sueldosup" placeholder="Escribe el sueldo superior" value="<?php echo $res['sueldosup']; ?>">
			<label for="Valor">LIMITE INFERIOR:</label>
			<input class="form-control" name="limiteinf" required type="number" id="limiteinf" placeholder="Escribe el limite inferior" value="<?php echo $res['limiteinf']; ?>">					    
			<label for="Valor">LIMITE SUPERIOR:</label>
			<input class="form-control" name="limitesup" required type="number" id="limitesup" placeholder="Escribe el limite superior" value="<?php echo $res['limitesup']; ?>">					    
			<label for="Valor">SUBSIDIO:</label>
			<input class="form-control" name="subsidio" required type="number" id="subsidio" placeholder="Escribe el subsidio" value="<?php echo $res['subsidio']; ?>">					    
			<label for="Valor">AÑO:</label>
			<input class="form-control" name="Anio" required type="number" id="Anio" placeholder="Escribe el año" value="<?php echo $res['Anio']; ?>">					    
			<label for="Valor">TIPO:</label>
			<!-- <input class="form-control" name="tipo" required type="text" id="tipo" placeholder="Escribe el tipo" value="<?php echo $res['tipo']; ?>">					       -->
			<select class="form-control" id="tipo" name="tipo">
                <option value="Diarios">Diario</option>
                <option value="Quincenal">Quincenal</option>
                <option value="Mensual">Mensual</option>
            </select>

	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-tsubsidio" value="Guardar"><a class="btn btn-danger" href="tsubsidio.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>