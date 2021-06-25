<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["clientName"]) || !isset($_POST["clientSurname"]) || !isset($_POST["clientLastname"]) || !isset($_POST["clientStreet"]) || !isset($_POST["clientIntNo"]) || !isset($_POST["clientExtNo"]) || !isset($_POST["clientAddLineOne"]) || !isset($_POST["clientAddLineTwo"]) || !isset($_POST["clientCol"]) || !isset($_POST["clientCity"]) || !isset($_POST["clientZip"]) || !isset($_POST["clientPhone"])    || !isset($_POST["clientMail"]) || !isset($_POST["clientCurp"]) || !isset($_POST["clientRfc"]) || !isset($_POST["clientType"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../database/db.config.php';
$clientName = $_POST["clientName"];
$clientSurname = $_POST["clientSurname"];
$clientLastname = $_POST["clientLastname"];
$clientStreet = $_POST["clientStreet"];
$clientIntNo = $_POST["clientIntNo"];
$clientExtNo = $_POST["clientExtNo"];
$clientAddLineOne = $_POST["clientAddLineOne"];
$clientAddLineTwo = $_POST["clientAddLineTwo"];
$clientCol = $_POST["clientCol"];
$clientCity = $_POST["clientCity"];
$clientZip = $_POST["clientZip"];
$clientPhone = $_POST["clientPhone"];
$clientMail = $_POST["clientMail"];
$clientCurp = $_POST["clientCurp"];
$clientRfc = $_POST["clientRfc"];
$clientType = $_POST["clientType"];

// $sentencia = DBC::get()->prepare("INSERT INTO clients(nameClient, lastnameClient, surnameClient, streetClient, intNum, extNum, crossingOne, crossingTwo, suburb, cityClient, zipClient, phoneClient, emailClient, curpClient, rfcClient, typeClient) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
// $resultado = $sentencia->execute([$nameClient, $clientSurname, $clientLastname, $clientStreet, $clientIntNo, $clientExtNo, $clientAddLineOne, $clientAddLineTwo, $clientCol, $clientCity, $clientZip, $clientPhone, $clientMail, $clientCurp, $clientRfc, $clientType]);
$stmt = $conex->prepare("INSERT INTO clients(nameClient, lastnameClient, surnameClient, streetClient, intNum, extNum, crossingOne, crossingTwo, suburb, cityClient, zipClient, phoneClient, emailClient, curpClient, rfcClient, typeClient) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$stmt->bind_param('ssssssssssssssss', $clientName,$clientSurname,$clientLastname,$clientStreet,$clientIntNo,$clientExtNo,$clientAddLineOne,$clientAddLineTwo,$clientCol,$clientCity,$clientZip,$clientPhone,$clientMail,$clientCurp,$clientRfc,$clientType);
$stmt->execute();


if($stmt == TRUE){
	header("Location: ../clientesDelSistema.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>