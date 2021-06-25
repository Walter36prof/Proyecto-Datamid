<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nameEmployee"]) || !isset($_POST["idProfile"]) || !isset($_POST["employeeAccount"]) || !isset($_POST["employeeEmail"]) || !isset($_POST["idEmployee"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...

include '../database/db.config.php';
$idEmployee = $_POST["idEmployee"];
$nameEmployee = $_POST["nameEmployee"];
$idProfile = $_POST["idProfile"];
$employeeAccount = $_POST["employeeAccount"];
// $employeePass = $_POST["employeePass"];
$employeeEmail = $_POST["employeeEmail"];


// $sentencia = DBC::get()->prepare("UPDATE productos SET codigo = ?, descripcion = ?, precioCompra = ?, precioVenta = ?, existencia = ? WHERE id = ?;");
// $resultado = $sentencia->execute([$codigo, $descripcion, $precioCompra, $precioVenta, $existencia, $id]);
try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE users SET idProfile = ?, nameUser = ?, accountUser = ?, emailUser = ? where idUser = ?;");//manda 0 como inactivo el usuario    
        $stmt->bind_param('isssi', $idProfile, $nameEmployee,  $employeeAccount, $employeeEmail, $idEmployee);
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

// $stmt = $conex->prepare("UPDATE users SET idProfile = ?, nameUser = ?, accountUser = ?, emailUser = ? where idUser = ?;");
// $stmt->bind_param('isssi', $idProfile, $nameEmployee,  $employeeAccount, $employeeEmail, $idEmployee);
// $stmt->execute();

// // $sentencia = DBC::get()->prepare("UPDATE users SET idProfile = ?, nameUser = ?, accountUser = ?, emailUser = ?, passwordUser = ? where idUser = ?;");
// // $resultado = $sentencia->execute([$idProfile, $nameEmployee, $employeeAccount, $employeeEmail, $employeePass, $idEmployee]);

// if($stmt == TRUE){
// 	header("Location: ../usuariosdelsistema.php");
// 	exit;
// }
// else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>