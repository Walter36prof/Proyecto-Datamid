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
    
if(!isset($_GET["idsalrio"])) exit();
$idsalrio = $_GET["idsalrio"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM salario WHERE idsalrio = ?;");
            $stmt->bind_param('i', $idsalrio);
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
		<h1 class="text-center">Editar Registro de Salario</h1>
		<form class="formulario" name="formulario-editarSalario" id="form-editarSalario">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
			<input class="form-control" name="idsalrio" required type="hidden" id="idsalrio" placeholder="id salario" value="<?php echo $res['idsalrio']; ?>">
			<label for="Año">Año:</label>
		    <input class="form-control" name="anio" required type="number" id="anio" placeholder="Escribe el año" value="<?php echo $res['anio']; ?>">
			<label for="Zona">Zona:</label>
			<input class="form-control" name="zona" required type="text" id="zona" placeholder="Escribe la zona" value="<?php echo $res['zona']; ?>">
			<label for="Valor">Valor:</label>
			<input class="form-control" name="valor" required type="number" id="valor" placeholder="valor de la zona" value="<?php echo $res['valor']; ?>">					    
		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-salario" value="Guardar"><a class="btn btn-danger" href="salario.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>