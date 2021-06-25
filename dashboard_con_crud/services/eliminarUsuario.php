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

if(!isset($_GET["idEmployee"])) exit();
$idEmployee = $_GET["idEmployee"];
$nombrearea='tsubsidio';
$tiporegistro='delete';
include_once "../database/db.config.php";

// $sentencia = DBC::get()->prepare("DELETE FROM users WHERE idUser = ?;");
// $resultado = $sentencia->execute([$idEmployee]);
if($varProfile != 1){
	//invitado
	$stmt = $conex->prepare("INSERT INTO modregistro (nombretabla,tiporegistro,id) 
	    VALUES (?, ?, ?);");
$stmt->bind_param('ssi', $nombrearea, $tiporegistro,$idSubsidio);
$stmt->execute();
if($stmt == TRUE){
	header("Location: ../tsubsidio.php");
	exit;
}
else echo "Algo salió mal";
}
else{
	try{
		$stmt = $conex->prepare("DELETE FROM users WHERE idUser = ?;");
		$stmt->bind_param('i',$idEmployee);
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
}

// $stmt = $conex->prepare("DELETE FROM users WHERE idUser = ?;");
// $stmt->bind_param('i',$idEmployee);
// $stmt->execute();

// if($stmt == TRUE){
// 	header("Location: ../usuariosdelsistema.php");
// 	exit;
// }
// else echo "Algo salió mal";
?>