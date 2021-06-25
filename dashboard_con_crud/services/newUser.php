<?php

include '../database/db.config.php';

if(isset($_POST['registro'])){
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    if($_POST['registro'] == "nuevo"){
        $nombre = $_POST['nombre']; 
        $cuenta = $_POST['cuenta'];
        $profile=2;
        $opcion = array(//opcion para el encriptamiento de datos
            'cons' => 24
        );
        $password_hash = password_hash($password, PASSWORD_BCRYPT, $opcion);//encriptamos el password, le pasamos el password ingresado, la encriptacion y los caracteres y lo asignamos a la variable password_hash
        try
        {  //aqui inserta el nuevo registro en la tabla correspondiente evitando sql injection
            $stmt = $conex->prepare("INSERT INTO users(idProfile,nameUser,accountUser,emailUser, passwordUser) values (?,?,?,?,?)");//manda 0 como inactivo el usuario
            $stmt->bind_param('issss', $profile, $nombre, $cuenta, $correo, $password_hash);
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
    }
    //header('Content-type: application/json; charset=UTF-8');
    //die(json_encode($respuesta));
    //echo (json_encode($respuesta));
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE); 
}
//espera no le muevas dame un min

?>