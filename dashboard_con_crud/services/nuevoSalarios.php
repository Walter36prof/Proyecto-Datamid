<?php

include '../database/db.config.php';

if(isset($_POST['anio'])){
    $anio= $_POST['anio'];
    $zonaA= $_POST['zonaA'];
    $zonaB= $_POST['zonaB'];
    $zonaC= $_POST['zonaC'];
    try 
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("INSERT INTO salarios(anio,zona_a,zona_b,zona_c) values (?,?,?,?)");//manda 0 como inactivo el usuario
        $stmt->bind_param('iddd', $anio, $zonaA, $zonaB, $zonaC);          
        $stmt->execute();
        $id_registro = $stmt->insert_id;
            if($id_registro>0){ //aqui valido si se inserta, hasta aqui todo bien
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