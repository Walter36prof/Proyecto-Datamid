<?php
session_start();

    $estado = false;
    $tipouser="admin";
    if(isset($_SESSION['matricula']))
    {
        if($_SESSION['idProfile']==1){
            $estado=true;
            $tipouser="admin";
        }
        else if($_SESSION['idProfile']==2){
            $estado=true;
            $tipouser="invitado";
        }

    }
?>