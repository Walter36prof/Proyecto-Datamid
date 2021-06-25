<?php
session_start();
// require_once "includes/parte_superior.php";

error_reporting(0);
//verificamos si hay algo en la variable
$varsesion= $_SESSION['nameUser'];
$varProfile=$_SESSION['idProfile'];
if($varsesion== null || $varsesion=''){
    header("Location: index.php");
    die();
}   
else if($varProfile != 1){
	require_once "includes/sidebarInvitado.php";
    }
	else{require_once "includes/parte_superior.php";}

include_once "database/db.config.php";
// $sentencia = DBC::get()->query("SELECT * FROM clients;");
// $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
$query_umas= mysqli_query ($conex,"SELECT * FROM umas ORDER BY anio DESC;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">   
            <div class="form-row">
                <h1 class="text-center" style="color: black">Administrar Unidad de Medida y Actualizacion "UMAS"</h1>
                <div class="col-2">
                    <a class="btn btn-primary" href="formNuevaUma.php"><i class="fa fa-plus"></i> Nuevo
                        Registro</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-secondary" href="services/actualizaranios.php?tabla=umas"><i class="fa fa-sync-alt"></i> 
                    Actualizar año</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" style="color: black">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>UMA</th>
                        <th>Año</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_umas)){ 
                
				?>

                    <tr>
                        <!-- <td><?php echo $res['idumas'] ?></td> -->
                        <td><?php echo $res['uma'] ?></td>
                        <td><?php echo $res['anio'] ?></td>
                        
                        
                        <td><a class="btn btn-warning" href="<?php echo "editarUma.php?idUma=" . $res['idumas']?>"><i class="fa fa-edit"></i></a></td>

                        <td><a class="btn btn-danger eliminarUmas" href="<?php echo $res['idumas']?>"><i class="fa fa-trash"></i></a></td>
                    </tr>

                 <?php } ?>
				<!-- CLIENTES  -->
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>