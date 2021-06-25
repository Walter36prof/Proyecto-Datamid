<?php
if(!isset($_GET["IdSubsidio"])) exit();
$IdSubsidio = $_GET["IdSubsidio"];
include '../database/db.config.php';
// $sentencia = DBC::get()->prepare("DELETE FROM areas WHERE idArea = ?;");
// $resultado = $sentencia->execute([$idArea]);

 $stm1=$conex->prepare("SELECT * FROM subsidios WHERE id_fila=".$IdSubsidio);
 $stm1->execute();
 $result = $stm1->get_result();

$output = array();
while ($row = $result->fetch_assoc()) {
    $output[] = $row['ingDesde'];
    $output[] = $row['ingHasta'];
    $output[] = $row['credito'];
    $output[] = 2021;
    $output[] = $row['tipo'];
}


$stmt = $conex->prepare("INSERT INTO subsidios (ingDesde,ingHasta,credito,anio,tipo) VALUES (".$output[0].", ". $output[1].", ". $output[2].", ". $output[3].",'". $output[4]."');");



$stmt->execute();
if($stmt == TRUE){

    // Swal.fire({
    //     icon: 'error',
    //     title: 'No se actualizaron los datos',
    //     text: 'Modifica un campo antes de guardar',
       
    //   })
      
	header("Location: ../subsidios.php");
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