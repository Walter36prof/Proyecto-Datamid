<?php
session_start();


error_reporting(0);

$varsesion= $_SESSION['nameUser'];
$varProfile=$_SESSION['idProfile'];
if($varsesion== null || $varsesion=''){
	header("Location:../index.php");
    die();
} 

if(!isset($_GET["idtabla"])) exit();
include '../database/db.config.php';

    $idtabla= $_GET['idtabla'];
    $tiporegistro= $_GET['tiporegistro'];
    $idarea= $_GET['idarea'];
    $nombrearea= $_GET['nombrearea'];
    $descripcionarea= $_GET['descripcionarea'];
    $imagenarea= $_GET['imagenarea']; 
    $var1="NUEVO";
    $var2="ACTUALIZAR";
    $var3="ELIMINAR";

    $str1= nl2br($descripcionarea);
    //    echo $idtabla,$tiporegistro,$idarea,$nombrearea,$descripcionarea,$imagenarea;

        if($tiporegistro==$var1)          
        {   
             //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
             $stmt = $conex->prepare("INSERT INTO areas (nombreArea, descripcionArea, imagenPortada) VALUES (?, ?, ?);");//manda 0 como inactivo el usuario
                $stmt->bind_param('sss', $nombrearea,$str1,$imagenarea);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                    if($id_registro>0){ //aqui valido si se inserta, hasta aqui todo bien
                        $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
                        $stmt->bind_param('i', $idtabla);
                        $stmt->execute(); 
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
                
              
                 echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
               
            // //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
            // $stmt = $conex->prepare("INSERT INTO areas (nombreArea, descripcionArea, imagenPortada) VALUES (?, ?, ?);");
            // $stmt->bind_param('sss', $nombrearea,$descripcionarea,$imagenarea);
            // $stmt->execute();

            // if($stmt == TRUE){
            //     $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
            //     $stmt->bind_param('i', $idtabla);
            //     $stmt->execute(); 
            //     if($stmt == TRUE){                                                 
            //         header("Location: ../cambios.php");  
            //         exit;
            //     }
            //     else echo "Algo salió mal. Por favor verifica que la tabla exista";
            // }
            // else echo "Algo salió mal. Por favor verifica que la tabla exista";
        }
        else{

            if($tiporegistro==$var2)          
            {
                //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
            $stmt = $conex->prepare("UPDATE areas SET nombreArea = ?, descripcionArea = ?, imagenPortada = ? WHERE idArea = ?;");
            $stmt->bind_param('sssi',$nombrearea,$descripcionarea,$imagenarea,$idarea);
            $stmt->execute();
            // $id_registro = $stmt->insert_id;
            if($stmt->affected_rows){ //aqui valido si se inserta, hasta aqui todo bien
                $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
                $stmt->bind_param('i', $idtabla);
                $stmt->execute(); 
           
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
        
      
            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 

            // if($stmt == TRUE){
            //     $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
            //     $stmt->bind_param('i', $idtabla);
            //     $stmt->execute(); 
            //     if($stmt == TRUE){                                                 
            //         header("Location: ../cambios.php");  
            //         exit;
            //     }
            //     else echo "Algo salió mal. Por favor verifica que la tabla exista";
            // }
            // else echo "Algo salió mal. Por favor verifica que la tabla exista";                     
            } 
            else {

                if($tiporegistro==$var3){
                    //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
                    $stmt = $conex->prepare("DELETE FROM areas WHERE idArea = ?;");
                    $stmt->bind_param('i',$idarea);
                    $stmt->execute();
                    // $id_registro = $stmt->insert_id;
                    if($stmt==TRUE){ //aqui valido si se inserta, hasta aqui todo bien
                        $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
                        $stmt->bind_param('i', $idtabla);
                        $stmt->execute(); 
                   
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
                
              
                 echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
        
                    // if($stmt == TRUE){
                    //     $stmt = $conex->prepare("DELETE FROM modareas WHERE idtabla = ?;");
                    //     $stmt->bind_param('i', $idtabla);
                    //     $stmt->execute(); 
                    //     if($stmt == TRUE){                                                 
                    //         header("Location: ../cambios.php");  
                    //         exit;
                    //     }
                    //     else echo "Algo salió mal. Por favor verifica que la tabla exista";
                    // }
                    // else echo "Algo salió mal. Por favor verifica que la tabla exista";                    
                }                
            }       
            // echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);  
        }
               
      
?>