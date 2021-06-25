<?php

include '../database/db.config.php';

if(isset($_POST['idIspt'])){
    $idIspt=$_POST['idIspt'];
    $limiteinf= $_POST['limiteinf'];
    $limitesup= $_POST['limitesup'];
    $cuotafija= $_POST['cuotafija'];
    $porcentaje= $_POST['porcentaje'];
    $anio= $_POST['anio'];
    $tipo= $_POST['tipo'];
    
   
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE ispt SET limiteInf = ?, limiteSup = ?, coutafija = ?, porcentajeEx = ?, anio = ?, tipo = ? WHERE id_fila = ?;");//manda 0 como inactivo el usuario
        $stmt->bind_param('ddddisi', $limiteinf, $limitesup, $cuotafija, $porcentaje, $anio, $tipo, $idIspt);
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