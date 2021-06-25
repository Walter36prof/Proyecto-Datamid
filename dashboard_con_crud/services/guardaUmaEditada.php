<?php

include '../database/db.config.php';

if(isset($_POST['idUma'])){
    $idUma=$_POST['idUma'];
    $uma= $_POST['uma'];
    $aniouma= $_POST['aniouma'];
   
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE umas SET uma = ?, anio = ? WHERE idumas = ?;");//manda 0 como inactivo el usuario
        $stmt->bind_param('dii', $uma, $aniouma, $idUma);
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