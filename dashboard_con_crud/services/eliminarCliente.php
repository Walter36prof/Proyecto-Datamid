<?php
if(!isset($_GET["idClient"])) exit();
$idClient = $_GET["idClient"];
include_once "../database/db.config.php";
// $sentencia = DBC::get()->prepare("DELETE FROM clients WHERE idClient = ?;");
// $resultado = $sentencia->execute([$idClient]);
$stmt = $conex->prepare("DELETE FROM clients WHERE idClient = ?;");
$stmt->bind_param('i',$idClient);
$stmt->execute();
if($stmt == TRUE){
	header("Location: ../clientesDelSistema.php");
	exit;
}
else echo "Algo salió mal";
?>