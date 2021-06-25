<?php
#Salir si alguno de los datos no está presente
// if(!isset($_POST["areaName"]) || !isset($_POST["areaDesc"]) || !isset($_POST["imagenPortada"])) exit();

#Si todo va bien, se ejecuta esta parte del código...
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

if(!isset($_GET["idArea"])) exit();
$idArea = $_GET["idArea"];
$nombreArea2 = $_GET["nombreArea"];
$descripcionArea = $_GET["descripcionArea"];
$imagenPortada = $_GET["imagenPortada"];
$nombrearea='areas';
$tiporegistro='ELIMINAR';
include_once "../database/db.config.php";
// $sentencia = DBC::get()->prepare("DELETE FROM areas WHERE idArea = ?;");
// $resultado = $sentencia->execute([$idArea]);
if($varProfile != 1){
			//invitado
			$stmt = $conex->prepare("SELECT * FROM modareas WHERE idarea = ?;");
            $stmt->bind_param('i', $idArea);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;
			if($num_of_rows<1){	
				//	La búsqueda no arrojó usuarios con ese ID, por lo tanto el usuario no existe	
				
				
					$stmt = $conex->prepare("INSERT INTO modareas (nombretabla,tiporegistro,idarea,nombrearea,descripcionarea,imagenarea) 
					VALUES (?, ?, ?, ?, ?,?);");
				   $stmt->bind_param('ssisss', $nombrearea, $tiporegistro,$idArea,$nombreArea2,$descripcionArea,$imagenPortada);
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
					
				
					echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 


				//  $stmt = $conex->prepare("INSERT INTO modareas (nombretabla,tiporegistro,idarea,nombrearea,descripcionarea,imagenarea) 
				//  VALUES (?, ?, ?, ?, ?,?);");
				// $stmt->bind_param('ssisss', $nombrearea, $tiporegistro,$idArea,$nombreArea2,$descripcionArea,$imagenPortada);
				// $stmt->execute();
				// 	if($stmt == TRUE){
				// 		header("Location: ../areasdelsistema.php");
				// 		exit;
				// 	}
				// 	else {echo "Algo salió mal";}
				// exit();
			}
			else {
				$stmt = $conex->prepare("UPDATE modareas SET tiporegistro = ?, nombrearea=?, descripcionarea=?, imagenarea=? WHERE idarea=?;");				
				$stmt->bind_param('ssssi',$tiporegistro,$nombreArea2,$descripcionArea,$imagenPortada,$idArea);
				$stmt->execute();
					if($stmt == TRUE){
						header("Location: ../areasdelsistema.php");
						exit;
					}
					else echo "Algo salió mal";			
			}
}
else{
		//admin
		// $stmt = $conex->prepare("DELETE FROM areas WHERE idArea = ?;");
		// $stmt->bind_param('i',$idArea);
		// $stmt->execute();
		// if($stmt == TRUE){
		// 	header("Location: ../areasdelsistema.php");
		// 	exit;
		// }
		// else echo "Algo salió mal";
		try{
			$stmt = $conex->prepare("DELETE FROM areas WHERE idArea = ?;");
			$stmt->bind_param('i',$idArea);
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
?>