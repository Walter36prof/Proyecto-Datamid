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

include '../database/db.config.php';
$fecha= date("Y")."-".date("m")."-".date("d");

$idArea = $_POST["idArea"];
$areaName = $_POST["areaName"];
$areaDesc = $_POST["areaDesc"];
$nombrearea='areas';
$tiporegistro='ACTUALIZAR';


// $str1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $areaDesc);

$str1 = nl2br($areaDesc);

$archivo=$_FILES["imagenPortadaact"];
$extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
$imagen=$areaName."-edit-".$fecha.".".$extension;

move_uploaded_file($archivo["tmp_name"], "../images/$imagen");
// $imagenPortada = $_POST["imagenPortada"];


// $sentencia = DBC::get()->prepare("UPDATE areas SET nombreArea = ?, descripcionArea = ?, imagenPortada = ? WHERE idArea = ?;");
// $resultado = $sentencia->execute([$areaName, $areaDesc, $imagen, $idArea]);
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
		VALUES (?, ?, ?, ?, ?, ?);");
		$stmt->bind_param('ssisss',$nombrearea, $tiporegistro,$idArea, $areaName,$str1,$imagen);
		$stmt->execute();
		if($stmt->affected_rows){
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


		// 	if($stmt == TRUE){
		// 		header("Location: ../areasdelsistema.php");  
		// 		exit;
		// 	}
		// 	else{echo "Algo salió mal. Por favor verifica que la tabla exista";}

		// exit();
		}else {
			$stmt = $conex->prepare("UPDATE modareas SET tiporegistro = ?, nombrearea=?, descripcionarea=?, imagenarea=? WHERE idarea=?;");
			$stmt->bind_param('ssssi',$tiporegistro,$areaName,$str1,$imagen,$idArea);
			$stmt->execute();

			if($stmt->affected_rows){
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
		
				// if($stmt == TRUE){
				// 	header("Location: ../areasdelsistema.php");  
				// 	exit;
				// }
				// else echo "Algo salió mal. Por favor verifica que la tabla exista";		
			}	
    	}
	else{
		//administrador
		
		try
		{  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
			$stmt = $conex->prepare("UPDATE areas SET nombreArea = ?, descripcionArea = ?, imagenPortada = ? WHERE idArea = ?;");
			$stmt->bind_param('sssi',$areaName,$str1,$imagen,$idArea);
			$stmt->execute();
			// $id_registro = $stmt->insert_id;
			if($stmt->affected_rows){//aqui valido si se inserta, hasta aqui todo bien
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
	




		// $stmt = $conex->prepare("UPDATE areas SET nombreArea = ?, descripcionArea = ?, imagenPortada = ? WHERE idArea = ?;");
		// $stmt->bind_param('sssi',$areaName,$str1,$imagen,$idArea);
		// $stmt->execute();

		// if($stmt == TRUE){
		// 	header("Location: ../areasdelsistema.php");  
		// 	exit;
		// }
		// else echo "Algo salió mal. Por favor verifica que la tabla exista";
		// }
?>