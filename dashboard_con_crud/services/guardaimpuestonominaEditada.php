<?php

include '../database/db.config.php';

if(isset($_POST['IdINomina'])){
    $IdINomina=$_POST['IdINomina'];
    $estado= $_POST['estado'];
    $porcentaje= $_POST['porcentaje'];
    $descripcion= $_POST['descripcion'];
    $anio= $_POST['anio'];
   
    try
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("UPDATE impuestosnomina SET Estado = ?, Porcentaje = ? , Descripcion = ?, anio=? WHERE IdINomina = ?;");//manda 0 como inactivo el usuario    
        $stmt->bind_param('sdsii', $estado, $porcentaje, $descripcion, $anio, $IdINomina);
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