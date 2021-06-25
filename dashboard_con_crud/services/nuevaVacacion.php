<?php

include '../database/db.config.php';

if(isset($_POST['aniominimo'])){
    $aniomin= $_POST['aniominimo'];
    $aniomax= $_POST['aniomaximo'];
    $diasvac= $_POST['diasvacaciones'];
    $prima= $_POST['prima'];
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("INSERT INTO vacaciones(aniominimo,aniomaximo,dias,prima) values (?,?,?,?)");//manda 0 como inactivo el usuario
        $stmt->bind_param('ddid', $aniomax, $aniomax, $diasvac, $prima);
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
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
    }

?>