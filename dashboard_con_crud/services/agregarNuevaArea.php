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

#Salir si alguno de los datos no está presente
if(!isset($_POST["areaName"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../database/db.config.php';
$fecha= date("Y")."-".date("m")."-".date("d");

$areaName = $_POST["areaName"];
$areaDesc = $_POST["areaDesc"];
$nombrearea='areas';
$tiporegistro='NUEVO';

$archivo=$_FILES["imagenPortada"];
$extension= pathinfo($archivo["name"], PATHINFO_EXTENSION);
$imagen=$areaName."-".$fecha.".".$extension;

move_uploaded_file($archivo["tmp_name"], "../images/$imagen");

$str1 = nl2br($areaDesc);

if($varProfile != 1){
	//invitado
$stmt = $conex->prepare("INSERT INTO modareas (nombretabla,tiporegistro,nombrearea,descripcionarea,imagenarea) 
VALUES (?, ?, ?, ?, ?);");
$stmt->bind_param('sssss', $nombrearea, $tiporegistro, $areaName,$str1,$imagen);
$stmt->execute();
$id_registro = $stmt->insert_id;

if($id_registro>0){
	// header("Location: ../areasdelsistema.php");  
	// exit;
	$respuesta = array(
		'respuesta' => "exitoso",
		// 'idusuario' => $id_registro//realiza todo esto
	   
	);

}
else{
	$respuesta = array(
		'respuesta' => 'fallo',
		// 'idusuario' => $id_registro
	);
}
	$stmt->close();
	$conex->close();

	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
// else echo "Algo salió mal. Por favor verifica que la tabla exista";
}
else {
	//admin
	$stmt = $conex->prepare("INSERT INTO areas (nombreArea, descripcionArea, imagenPortada) VALUES (?, ?, ?);");
	$stmt->bind_param('sss', $areaName,$str1,$imagen);
	$stmt->execute();
	$id_registro = $stmt->insert_id;

	if($id_registro>0){
		$respuesta = array(
			'respuesta' => "exitoso",
			// 'idusuario' => $id_registro//realiza todo esto
		   
		);

		// header("Location: ../areasdelsistema.php");  
		// exit;
	}
	else{
		$respuesta = array(
			'respuesta' => 'fallo',
			// 'idusuario' => $id_registro
		);
	}
	$stmt->close();
	$conex->close();

	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
}
// 	else echo "Algo salió mal. Por favor verifica que la tabla exista";
// }
?>