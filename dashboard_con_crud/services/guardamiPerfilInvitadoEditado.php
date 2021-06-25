<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) || !isset($_POST["cuenta"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../database/db.config.php';
$nombre = $_POST["nombre"];
$cuenta = $_POST["cuenta"];
$idUser = $_POST["idUser"];
$correo = $_POST["correo"];



// $sentencia = DBC::get()->prepare("UPDATE productos SET codigo = ?, descripcion = ?, precioCompra = ?, precioVenta = ?, existencia = ? WHERE id = ?;");
// $resultado = $sentencia->execute([$codigo, $descripcion, $precioCompra, $precioVenta, $existencia, $id]);

$stmt = $conex->prepare("UPDATE users SET nameUser = ?, accountUser = ?, emailUser = ?  where idUser = ?;");
$stmt->bind_param('sssi', $nombre, $cuenta, $correo, $idUser);
$stmt->execute();

// $sentencia = DBC::get()->prepare("UPDATE users SET idProfile = ?, nameUser = ?, accountUser = ?, emailUser = ?, passwordUser = ? where idUser = ?;");
// $resultado = $sentencia->execute([$idProfile, $nameEmployee, $employeeAccount, $employeeEmail, $employeePass, $idEmployee]);

if($stmt == TRUE){
    session_start();
    $_SESSION['nameUser']= $_POST['nombre'];
    $_SESSION['accountUser']= $_POST['cuenta'];
    $_SESSION['emailUser']= $_POST['correo'];
	header("Location: ../miperfilInvitado.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>