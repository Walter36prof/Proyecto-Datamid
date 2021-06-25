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
    
if(!isset($_GET["IdINomina"])) exit();
$IdINomina = $_GET["IdINomina"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM impuestosnomina WHERE IdINomina = ?;");
            $stmt->bind_param('i', $IdINomina);
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
		<h1 class="text-center">Editar Registro de Impuestos Nomina</h1>
		<form class="formulario" name="formulario-editarimpuestonomina" id="form-editarimpuestonomina">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
			<input class="form-control" name="IdINomina" required type="hidden" id="IdINomina" placeholder="id nomina" value="<?php echo $res['IdINomina']; ?>">
			<label for="estado">ESTADO:</label>
		    <input class="form-control" name="estado" required type="text" id="estado" placeholder="Escribe el estado" value="<?php echo $res['Estado']; ?>">
			<label for="porcentaje">PORCENTAJE:</label>
			<input class="form-control" name="porcentaje" required type="number" id="porcentaje" placeholder="Escribe el porcentaje" value="<?php echo $res['Porcentaje']; ?>">
			<label for="descripcion">DESCRIPCION:</label>
			<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Escribe una pequeña descripcion" value="<?php echo $res['Descripcion']; ?>">					    
			<label for="anio">AÑO:</label>
			<input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el año" value="<?php echo $res['anio']; ?>">						      


	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-impuestonomina" value="Guardar"><a class="btn btn-danger" href="impuestonomina.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>