<?php

if(!isset($_GET["idtabla"])) exit();
$idtabla = $_GET["idtabla"];

include_once "../database/db.config.php";
// $sentencia = DBC::get()->prepare("DELETE FROM areas WHERE idArea = ?;");
// $resultado = $sentencia->execute([$idArea]);

try{
	$stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
	$stmt->bind_param('i',$idtabla);
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


// 	$stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
// $stmt->bind_param('i', $idtabla);
// $stmt->execute();
// if($stmt == TRUE){
// 	header("Location: ../cambios.php");
// 	exit;
// }
// else echo "Algo salió mal";
?>