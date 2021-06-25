<?php
#Salir si alguno de los datos no está presente
// if(!isset($_POST["areaName"]) || !isset($_POST["areaDesc"]) || !isset($_POST["imagenPortada"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

//verificamos si hay algo en la variable


if(!isset($_GET["idSubsidio"])) exit();
$idSubsidio = $_GET["idSubsidio"];
$nombrearea='tsubsidio';
$tiporegistro='delete';
include_once "../database/db.config.php";
// $sentencia = DBC::get()->prepare("DELETE FROM clients WHERE idClient = ?;");
// $resultado = $sentencia->execute([$idClient]);


	//admin
	try{
		$stmt = $conex->prepare("DELETE FROM tsubsidio WHERE idSubsidio = ?;");
		$stmt->bind_param('i',$idSubsidio);
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


?>