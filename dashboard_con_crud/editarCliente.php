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

    echo '<script type="text/javascript">
	alert("Debes ser un administrador para entrar a esta pagina. La sesion se finalizara para fines de seguridad");
	    window.location="services/cierre.php";
        </script> ';
    }

if(!isset($_GET["idClient"])) exit();
$idClient = $_GET["idClient"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM clients WHERE idClient = ?;");
// $sentencia->execute([$idClient]);
// $client = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM clients WHERE idClient = ?;");
            $stmt->bind_param('i', $idClient);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;

if($num_of_rows<1){
	echo "¡No existe algún cliente con ese ID!";
	exit();
}
?>

<?php require_once "includes/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container" style="width: 500px; margin: 0 auto;">
		<div class="row">
	<div class="col-xs-12">

	<?php  while ($res = $result->fetch_assoc()) {
					
					
	?>
		<h1>Editar Cliente con el ID <?php echo $res['idClient']; ?></h1>
		<form method="post" action="services/guardarClienteEditado.php">
		<input type="hidden" name="id" value="<?php echo $res['idClient']; ?>">
	
        <label for="idcliente">Id de cliente:</label>
		<input class="form-control" name="idClient" required type="text" id="idClient" placeholder="Id de cliente" value="<?php echo $res['idClient']; ?>">

		<label for="nombre">Nombre de cliente:</label>
		<input class="form-control" name="clientName" required type="text" id="clientName" placeholder="Escribe el nombre" value="<?php echo $res['nameClient']; ?>">

		<label for="apellidopaterno">Apellido Paterno:</label>
		<input required id="clientLastname" name="clientLastname" cols="30" rows="1" class="form-control" placeholder="Apellido paterno" value="<?php echo $res['lastnameClient']; ?>"></input>

		<label for="apellidomaterno">Apellido Materno:</label>
		<input class="form-control" name="clientSurname" required type="text" id="clientSurname" placeholder="Apellido materno" value="<?php echo $res['surnameClient']; ?>">

		<label for="calle">Calle:</label>
		<input class="form-control" name="clientStreet" required type="text" id="clientStreet" placeholder="Calle" value="<?php echo $res['streetClient']; ?>">

		<label for="intNo">Numero Interior:</label>
		<input class="form-control" name="clientIntNo" required type="text" id="clientIntNo" placeholder="Numero interior" value="<?php echo $res['intNum']; ?>">

        <label for="extNo">Numero Exterior:</label>
		<input class="form-control" name="clientExtNo" required type="text" id="clientExtNo" placeholder="Numero exterior" value="<?php echo $res['extNum']; ?>">

        <label for="primercruzamiento">Primer Cruzamiento:</label>
		<input class="form-control" name="clientAddLineOne" required type="number" id="clientAddLineOne" placeholder="Primer cruzamiento" value="<?php echo $res['crossingOne']; ?>">

        <label for="segundocruzamiento">Segundo Cruzamiento:</label>
		<input class="form-control" name="clientAddLineTwo" required type="number" id="clientAddLineTwo" placeholder="Segundo cruzamiento" value="<?php echo $res['crossingTwo']; ?>">

        <label for="colonia">Coloña:</label>
		<input class="form-control" name="clientCol" required type="text" id="clientCol" placeholder="Coloña" value="<?php echo $res['suburb']; ?>">

        <label for="ciudad">Ciudad:</label>
		<input class="form-control" name="clientCity" required type="text" id="clientCity" placeholder="Ciudad" value="<?php echo $res['cityClient']; ?>">

        <label for="codigopostal">Codigo Postal:</label>
		<input class="form-control" name="clientZip" required type="number" id="clientZip" placeholder="Codigo Postal" value="<?php echo $res['zipClient']; ?>">

        <label for="telefono">Telefono:</label>
		<input class="form-control" name="clientPhone" required type="number" id="clientPhone" placeholder="Telefono" value="<?php echo $res['phoneClient']; ?>">

        <label for="correo">Correo:</label>
		<input class="form-control" name="clientMail" required type="text" id="clientMail" placeholder="Correo" value="<?php echo $res['emailClient']; ?>">

        <label for="curp">CURP:</label>
		<input class="form-control" name="clientCurp" required type="text" id="	clientCurp" placeholder="CURP" value="<?php echo $res['curpClient']; ?>">

        <label for="rfc">RFC:</label>
		<input class="form-control" name="clientRfc" required type="text" id="clientRfc" placeholder="RFC" value="<?php echo $res['rfcClient']; ?>">

        <label for="tipodecliente">Tipo de cliente:</label>
		<input class="form-control" name="clientType" required type="text" id="clientType" placeholder="Tipo de cliente" value="<?php echo $res['typeClient']; ?>">
	<?php } ?>
			<br><CENTER><input class="btn btn-info" type="submit" value="Guardar">
        <a class="btn btn-warning" href="clientesDelSistema.php">Cancelar</a></CENTER>
		</form>
	</div>
            		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>