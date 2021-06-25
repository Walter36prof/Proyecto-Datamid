<?php
include('../database/conexion.php');

$correo=$_POST['correo'];
$pass=$_POST['password'];

$query="SELECT * FROM users WHERE emailUser='$correo'";
$result = DBC::get()->query($query);
$result->execute();
$rows = $result->fetch(PDO::FETCH_OBJ);
$verify=$rows->passwordUser;//asignamos el valor de la contrasenia encriptada en la BD a verify


if(password_verify($pass, $verify)){
	if ($rows->idProfile == 1 ){//si es admin
		session_start();
		$_SESSION["matricula"]=$_POST["password"];
		$_SESSION['nameUser'] = $rows->nameUser;
		$_SESSION['emailUser'] = $rows->emailUser;
		$_SESSION['accountUser'] = $rows->accountUser;
		$_SESSION['idUser'] = $rows->idUser;
		$_SESSION['tipoUser'] = "Administrador";
		$_SESSION['idProfile']=$rows->idProfile;
		header("location:../catalogos.php");
	}else{
		if($rows->idProfile>=2){//si es invitado
		session_start();
    	$_SESSION["matricula"]=$_POST["password"];
		$_SESSION['nameUser'] = $rows->nameUser;
		$_SESSION['emailUser'] = $rows->emailUser;
		$_SESSION['accountUser'] = $rows->accountUser;
		$_SESSION['tipoUser'] = "Usuario";
		$_SESSION['idUser'] = $rows->idUser;
		$_SESSION['idProfile']=$rows->idProfile;
		header("location:../areasdelsistema.php");
		}
		else
		{
			echo '<h1>Hubo un error</h1>';
	
		}
	}
}
else{
	echo '<script type="text/javascript">
	alert("Correo o Clave incorrecta");
	window.location="../index.php";
</script> ';
	
}






  
	


?>
