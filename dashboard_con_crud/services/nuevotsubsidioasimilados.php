<?php

include '../database/db.config.php';

if(isset($_POST['sueldoinf'])){    
    $sueldoinf= $_POST['sueldoinf'];
    $sueldosup= $_POST['sueldosup'];
    $limiteinf= $_POST['limiteinf'];
    $limitesup= $_POST['limitesup'];
    $subsidio= $_POST['subsidio'];
    $Anio= $_POST['Anio'];
    $tipo= $_POST['tipo'];

    try 
    {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
        $stmt = $conex->prepare("INSERT INTO tsubsidioasimilados(sueldoinf,sueldosup,limiteinf,limitesup,subsidio,Anio,tipo) values (?,?,?,?,?,?,?)");//manda 0 como inactivo el usuario 
        $stmt->bind_param('dddddis', $sueldoinf, $sueldosup, $limiteinf, $limitesup ,$subsidio , $Anio ,$tipo);          
   
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