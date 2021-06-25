<?php

session_start();
// require_once "includes/parte_superior.php";

error_reporting(0);
//verificamos si hay algo en la variable
$varsesion= $_SESSION['nameUser'];
$varProfile=$_SESSION['idProfile'];
if($varsesion== null || $varsesion=''){
	header("Location:../index.php");
    die();
}

if(!isset($_GET["idProfile"])) exit();
$idProfile = $_GET["idProfile"];
include_once "../database/db.config.php";

// $sentencia = DBC::get()->prepare("DELETE FROM profiles WHERE idProfile = ?;");
// $resultado = $sentencia->execute([$idProfile]);
try{
	$stmt = $conex->prepare("DELETE FROM profiles WHERE idProfile = ?;");
	$stmt->bind_param('i',$idProfile);
	$stmt->execute();
	if($stmt==TRUE){
	// $id_registro = $stmt->insert_id;
	// 	if($id_registro>0){ //aqui valido si se inserta, hasta aqui todo bien
			$respuesta = array(
				'respuesta' => "exitoso",
				// 'idusuario' => $id_registro//realiza todo esto
		   
			);
		
		}else{
			$respuesta = array(
				'respuesta' => 'fallo',
			// 'idusuario' => $id_registro
			);
		}
	
	
	$stmt->close();
	$conex->close();
	}
	catch (Exception $e) {
		echo "error ".$e->getMessage();
	}
	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 

// $stmt = $conex->prepare("DELETE FROM profiles WHERE idProfile = ?;");
// $stmt->bind_param('i',$idProfile);
// $stmt->execute();
// if($stmt == TRUE){
// 	header("Location: ../perfilesUsuario.php");
// 	exit;
// }
// else echo "Algo salió mal";
?>