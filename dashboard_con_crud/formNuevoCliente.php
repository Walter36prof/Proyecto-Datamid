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

require_once "includes/parte_superior.php";
?>

<!--INICIO del cont principal-->
<div class="container">
		<div class="row">

<div class="col-md-12 text-center">
	<h1>Agregar Nuevo cliente</h1>
	<form method="post" action="services/agregarNuevoCliente.php">
		<label for="nombre">Nombre de cliente:</label>
		<input class="form-control" name="clientName" required type="text" id="clientName" placeholder="Escribe el nombre">

		<label for="apellidopaterno">Apellido Paterno:</label>
		<input required id="clientSurname" name="clientSurname" cols="30" rows="1" class="form-control" placeholder="Apellido paterno"></input>

		<label for="apellidomaterno">Apellido Materno:</label>
		<input class="form-control" name="clientLastname" required type="text" id="clientLastname" placeholder="Apellido materno">

		<label for="calle">Calle:</label>
		<input class="form-control" name="clientStreet" required type="number" id="clientStreet" placeholder="Calle">

		<label for="intNo">Numero Interior:</label>
		<input class="form-control" name="clientIntNo" required type="number" id="clientIntNo" placeholder="Numero interior">

        <label for="extNo">Numero Exterior:</label>
		<input class="form-control" name="clientExtNo" required type="number" id="clientExtNo" placeholder="Numero exterior">

        <label for="primercruzamiento">Primer Cruzamiento:</label>
		<input class="form-control" name="clientAddLineOne" required type="number" id="clientAddLineOne" placeholder="Primer cruzamiento">

        <label for="segundocruzamiento">Segundo Cruzamiento:</label>
		<input class="form-control" name="clientAddLineTwo" required type="number" id="clientAddLineTwo" placeholder="Segundo cruzamiento">

        <label for="colonia">Colonia:</label>
		<input class="form-control" name="clientCol" required type="text" id="clientCol" placeholder="Colonia">

        <label for="ciudad">Ciudad:</label>
		<input class="form-control" name="clientCity" required type="text" id="clientCity" placeholder="Ciudad">

        <label for="codigopostal">Codigo Postal:</label>
		<input class="form-control" name="clientZip" required type="number" id="clientZip" placeholder="Codigo Postal">

        <label for="telefono">Telefono:</label>
		<input class="form-control" name="clientPhone" required type="number" id="clientPhone" placeholder="Telefono">

        <label for="correo">Correo:</label>
		<input class="form-control" name="clientMail" required type="text" id="clientMail" placeholder="Correo">

        <label for="curp">Curp:</label>
		<input class="form-control" name="clientCurp" required type="text" id="	clientCurp" placeholder="Curp">

        <label for="rfc">Rfc:</label>
		<input class="form-control" name="clientRfc" required type="text" id="clientRfc" placeholder="Rfc">

        <label for="tipodecliente">Tipo de cliente:</label>
		<input class="form-control" name="clientType" required type="text" id="clientType" placeholder="Tipo de cliente">

		<br><center><input class="btn btn-info" type="submit" value="Guardar"></center><br>
	</form>
</div>
            		</div>
	</div>
<!--FIN del cont principal-->


<?php require_once "includes/parte_inferior.php"?>