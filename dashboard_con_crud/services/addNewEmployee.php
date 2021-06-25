<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nameEmployee"]) || !isset($_POST["idProfile"]) || !isset($_POST["employeeAccount"]) || !isset($_POST["employeePass"]) || !isset($_POST["employeeEmail"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../database/db.config.php';
$nameEmployee = $_POST["nameEmployee"];
$idProfile = $_POST["idProfile"];
$employeeAccount = $_POST["employeeAccount"];
$employeePass = $_POST["employeePass"];
$employeeEmail = $_POST["employeeEmail"];
$opcion = array(//opcion para el encriptamiento de datos
	'cons' => 24
);
$password_hash = password_hash($employeePass, PASSWORD_BCRYPT, $opcion);


// $sentencia = DBC::get()->prepare("INSERT INTO users(idProfile, nameUser, accountUser, emailUser, passwordUser) VALUES (?, ?, ?, ?, ?);");
// $resultado = $sentencia->execute([$idProfile, $nameEmployee, $employeeAccount, $employeeEmail, $employeePass]);
try
        {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
            $stmt = $conex->prepare("INSERT INTO users(idProfile,nameUser,accountUser,emailUser, passwordUser) values (?,?,?,?,?)");//manda 0 como inactivo el usuario
            $stmt->bind_param('issss', $idProfile, $nameEmployee, $employeeAccount, $employeeEmail, $password_hash);
            $stmt->execute();
            $id_registro = $stmt->insert_id;
            if($id_registro>0){ //aqui valido si se inserta, hasta aqui todo bien
                $respuesta = array(
                    'respuesta' => "exitoso",
                    'idusuario' => $id_registro//realiza todo esto
                   
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
    
    //header('Content-type: application/json; charset=UTF-8');
    //die(json_encode($respuesta));
    //echo (json_encode($respuesta));
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 



// $stmt = $conex->prepare("INSERT INTO users(idProfile, nameUser, accountUser, emailUser, passwordUser) values (?,?,?,?,?)");
// $stmt->bind_param('issss', $idProfile, $nameEmployee,  $employeeAccount, $employeeEmail, $employeePass);
// $stmt->execute();


// if($stmt == TRUE){
	
// 	header("Location: ../usuariosdelsistema.php");
// 	exit;
// }
// else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>