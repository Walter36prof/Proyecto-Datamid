<?php
if(!isset($_GET["IdIsr"])) exit();
$idIsr = $_GET["IdIsr"];
include '../database/db.config.php';
// $sentencia = DBC::get()->prepare("DELETE FROM areas WHERE idArea = ?;");
// $resultado = $sentencia->execute([$idArea]);

 $stm1=$conex->prepare("SELECT * FROM isr WHERE id_isr=".$idIsr);
 $stm1->execute();
 $result = $stm1->get_result();

$output = array();
while ($row = $result->fetch_assoc()) {
    $output[] = $row['sueldoinf'];
    $output[] = $row['sueldosup'];
    $output[] = $row['limiteinf'];
    $output[] = $row['limitesup'];
    $output[] = $row['coutafija'];
    $output[] = $row['porcentaje'];
    $output[] = 2021;
    $output[] = $row['tipo'];
}


$stmt = $conex->prepare("INSERT INTO isr (sueldoinf,sueldosup,limiteinf,limitesup,coutafija,porcentaje,anio,tipo) VALUES (".$output[0].", ". $output[1].", ". $output[2].", ". $output[3].",". $output[4].",". $output[5].",". $output[6].",'". $output[7]."');");



$stmt->execute();
if($stmt == TRUE){

    // Swal.fire({
    //     icon: 'error',
    //     title: 'No se actualizaron los datos',
    //     text: 'Modifica un campo antes de guardar',
       
    //   })
      
	header("Location: ../isr.php");
	exit;
}
else echo "Algo salió mal";

/*
$stmt = $conex->prepare("CREATE TEMPORARY TABLE tmp SELECT IdINomina,Estado,Porcentaje,Descripcion, anio from impuestosnomina WHERE anio=2020 and IdINomina= ?;
UPDATE tmp SET anio=2022 WHERE anio = 2020;
INSERT INTO impuestosnomina (Estado,Porcentaje,Descripcion,anio) SELECT * FROM tmp WHERE anio = 2022;");
*/


//$stmt->bind_param('i',$idNomina);

?>