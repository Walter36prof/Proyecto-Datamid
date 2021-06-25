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
    
if(!isset($_GET["idEmpresa"])) exit();
$idEmpresa = $_GET["idEmpresa"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM empresa WHERE id_empresa = ?;");
            $stmt->bind_param('i', $idEmpresa);
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
		<h1 class="text-center">Editar datos de Empresa </h1>
		<form class="formulario" name="formulario-editarEmpresa" id="form-editarEmpresa">

		    <!-- <input type="hidden" name="id" value="<?php echo $res['idClient']; ?>"> -->
	
            <!-- <label for="idcliente">Id de Registro Vacación:</label> -->
		    <input class="form-control" name="idEmpresa" type="hidden" readonly id="idEmpresa" placeholder="Id de empresa" value="<?php echo $res['id_empresa']; ?>">

		    <label for="Nombre de la empresa">Nombre de la empresa:</label>
		    <input class="form-control" name="nombreEmpresa" required type="text" id="nombreEmpresa"  placeholder="Escribe nombre de la empresa" value="<?php echo $res['empresa']; ?>">

		   

		
	<?php } ?>
			<br><CENTER><input class="btn btn-primary" type="button" id="btn-edit-empresa" value="Guardar"><a class="btn btn-danger" href="empresas.php">Cancelar</a></CENTER>
		</form>
	</div>
    </div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>