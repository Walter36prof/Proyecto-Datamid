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
    
if(!isset($_GET["idIsrAsimi"])) exit();
$idIsrAsimi = $_GET["idIsrAsimi"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM israsimilados WHERE id_isr = ?;");
            $stmt->bind_param('i', $idIsrAsimi);
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
		<h1 class="text-center">Editar Registro de ISR Asimilado </h1>
		<form class="formulario" name="formulario-editarIsrAsimi" id="form-editarIsrAsimi">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
		    <input class="form-control" name="idIsr" type="hidden" readonly id="idIsr" placeholder="Id de ISR" value="<?php echo $res['id_isr']; ?>">

		    <label for="sueldoinf">Sueldo Inferior:</label>
		    <input class="form-control" name="sueldoinf" required type="number" id="sueldoinf"  placeholder="Ingresa el sueldo inferior" value="<?php echo $res['sueldoinf']; ?>">

		    <label for="sueldosup">Sueldo superior:</label>
		    <input required type="number" id="sueldosup" name="sueldosup" class="form-control" placeholder="Ingresa el sueldo superior" value="<?php echo $res['sueldosup']; ?>"></input>

            <label for="limiteinf">Limite inferior:</label>
		    <input required type="number" id="limiteinf" name="limiteinf" class="form-control" placeholder="Ingresa el limite inferior" value="<?php echo $res['limiteinf']; ?>"></input>
            
            <label for="limitesup">Limite superior:</label>
		    <input required type="number" id="limitesup" name="limitesup" class="form-control" placeholder="Ingresa el limite superior" value="<?php echo $res['limitesup']; ?>"></input>

            <label for="cuotafija">Cuota fija:</label>
		    <input required type="number" id="cuotafija" name="cuotafija" class="form-control" placeholder="Ingresa el cuota fija" value="<?php echo $res['coutafija']; ?>"></input>

            <label for="porcentaje">Porcentaje:</label>
		    <input required type="number" id="porcentaje" name="porcentaje" class="form-control" placeholder="Ingresa el porcentaje" value="<?php echo $res['porcentaje']; ?>"></input>

            <label for="anio">Año de ISR:</label>
		    <input required type="number" id="anio" name="anio" class="form-control" placeholder="Ingresa el Año del ISR" value="<?php echo $res['anio']; ?>"></input>

            <label for="tipo">Tipo: </label>
            <select class="form-control" id="tipo" name="tipo">
                <option value="diarios">Diario</option>
                <option value="quincenal">Quincenal</option>
                <option value="mensual">Mensual</option>
            </select>
		
		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-isrAsimi" value="Guardar"><a class="btn btn-danger" href="isrAsimilados.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>