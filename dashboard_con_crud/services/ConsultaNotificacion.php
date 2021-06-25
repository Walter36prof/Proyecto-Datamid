<?php

    if(isset($_POST["key"])){

    include '../database/db.config.php';

    $key= $_POST['key'];

    $stmt = $conex->prepare("SELECT * FROM modareas ");
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;
            if($num_of_rows>0){
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
            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
        }
            

?>