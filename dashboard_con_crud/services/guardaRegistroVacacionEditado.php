<?php

include '../database/db.config.php';

if(isset($_POST['idVacacion'])){
    $idVaca=$_POST['idVacacion'];
    $aniomin= $_POST['aniominimo'];
    $aniomax= $_POST['aniomaximo'];
    $diasvac= $_POST['diasvacaciones'];
    $prima= $_POST['prima'];
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE vacaciones SET aniominimo = ?, aniomaximo = ?, dias = ?, prima = ? WHERE idvacaciones = ?;");//manda 0 como inactivo el usuario
        $stmt->bind_param('ddidi', $aniomin, $aniomax, $diasvac, $prima, $idVaca);
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