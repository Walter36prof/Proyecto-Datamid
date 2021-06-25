<?php

include '../database/db.config.php';

if(isset($_POST['idsalrio'])){
    $idsalrio=$_POST['idsalrio'];
    $anio= $_POST['anio'];
    $zona= $_POST['zona'];
    $valor= $_POST['valor'];
   
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE salario SET anio = ?, zona = ? , valor = ? WHERE idsalrio = ?;");//manda 0 como inactivo el usuario    
        $stmt->bind_param('isdi', $anio, $zona, $valor, $idsalrio);
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

?>