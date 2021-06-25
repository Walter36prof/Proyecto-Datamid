<?php
#Salir si alguno de los datos no está presente
// if(!isset($_POST["areaName"]) || !isset($_POST["areaDesc"]) || !isset($_POST["imagenPortada"])) exit();

#Si todo va bien, se ejecuta esta parte del código...
//verificamos si hay algo en la variable


include '../database/db.config.php';

if(isset($_POST['idSubsidio'])){
    $idSubsidio= $_POST['idSubsidio'];
    $sueldoinf= $_POST['sueldoinf'];
    $sueldosup= $_POST['sueldosup'];
    $limiteinf= $_POST['limiteinf'];
    $limitesup= $_POST['limitesup'];
    $subsidio= $_POST['subsidio'];
    $Anio= $_POST['Anio'];
    $tipo= $_POST['tipo'];
    $nombrearea='tsubsidio';
    $tiporegistro='update';
    try
    {  
        
             //admin
            //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
            $stmt = $conex->prepare("UPDATE tsubsidio SET sueldoinf = ?, sueldosup = ? , limiteinf = ?, limitesup = ?,subsidio = ?,Anio = ?,tipo = ? WHERE idSubsidio = ?;");//manda 0 como inactivo el usuario    
            $stmt->bind_param('dddddisi', $sueldoinf, $sueldosup, $limiteinf, $limitesup ,$subsidio , $Anio ,$tipo, $idSubsidio);        
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