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

$stmt = $conex->prepare("SELECT * FROM subsidios WHERE id_fila = ?;");
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
		<h1 class="text-center">Editar Registro de subsidio </h1>
		<form class="formulario" name="formulario-subsdioEditado" id="form-subsidioEditado">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
			<input class="form-control" name="idSubsidio" required type="hidden" id="idSubsidio" placeholder="id Subsidio" value="<?php echo $res['id_fila']; ?>">

			<label for="ingdesde">Ingreso desde:</label>
		    <input class="form-control" name="ingdesde" required type="number" id="ingdesde" placeholder="Escribe el Ingreso desde" value="<?php echo $res['ingDesde']; ?>">
			<label for="Zona">Ingreso hasta:</label>
			<input class="form-control" name="inghasta" required type="number" id="inghasta" placeholder="Escribe el sueldo superior" value="<?php echo $res['ingHasta']; ?>">
			<label for="Valor">Crédito:</label>
			<input class="form-control" name="credito" required type="number" id="credito" placeholder="Escribe el limite inferior" value="<?php echo $res['credito']; ?>">					    
			<label for="Valor">Año:</label>
			<input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el limite superior" value="<?php echo $res['anio']; ?>">					    		    
			<label for="Valor">Tipo:</label>
			<!-- <input class="form-control" name="tipo" required type="text" id="tipo" placeholder="Escribe el tipo" value="<?php echo $res['tipo']; ?>">					       -->
			<select class="form-control" id="tipo" name="tipo">
                <option value="Diarios">Diario</option>
                <option value="Quincenal">Quincenal</option>
                <option value="Mensual">Mensual</option>
            </select>

	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-Subsidio" value="Guardar"><a class="btn btn-danger" href="subsidios.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>