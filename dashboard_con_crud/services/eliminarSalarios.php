<?php
if(!isset($_GET["anio"])) exit();
$anio = $_GET["anio"];
include_once "../database/db.config.php";
// $sentencia = DBC::get()->prepare("DELETE FROM clients WHERE idClient = ?;");
// $resultado = $sentencia->execute([$idClient]);
$stmt = $conex->prepare("DELETE FROM salarios WHERE anio = ?;");
$stmt->bind_param('i',$anio);
$stmt->execute();
if($stmt == TRUE){
	header("Location: ../salarios.php");
	exit;
}
else echo "Algo salió mal";
?>