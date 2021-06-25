<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["idProfile"]) || !isset($_POST["profileName"]) || !isset($_POST["profileDesc"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...


include '../database/db.config.php';
$idProfile = $_POST["idProfile"];
$profileName = $_POST["profileName"];
$profileDesc = $_POST["profileDesc"];


try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE profiles SET nameProfile = ?, descriptionProfile = ? WHERE idProfile = ?;");//manda 0 como inactivo el usuario    
        $stmt->bind_param('ssi',$profileName, $profileDesc,$idProfile);
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

// $stmt = $conex->prepare("UPDATE profiles SET nameProfile = ?, descriptionProfile = ? WHERE idProfile = ?;");
// $stmt->bind_param('ssi',$profileName, $profileDesc,$idProfile);
// $stmt->execute();
// // $sentencia = DBC::get()->prepare("UPDATE profiles SET nameProfile = ?, descriptionProfile = ? WHERE idProfile = ?;");
// // $resultado = $sentencia->execute([$profileName, $profileDesc, $idProfile]);

// if($stmt == TRUE){
// 	header("Location: ../perfilesUsuario.php");
// 	exit;
// }
// else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>