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
$query_umas= mysqli_query ($conex,"SELECT * FROM salarios;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <h1 class="text-center">Administrar Salarios</h1>
            <div class="form-row">
                <div class="col-2">
                    <a class="btn btn-outline-primary" href="formNuevoSalarios.php"><i class="fa fa-plus"></i> Nuevo
                        Registro de salarios</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>AÑO</th>
                        <th>ZONA A</th>
                        <th>ZONA B</th>
                        <th>ZONA C</th>                       
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_umas)){ 
                
				?>

                    <tr>
                        <td><?php echo $res['anio'] ?></td>
                        <td><?php echo $res['zona_a'] ?></td>
                        <td><?php echo $res['zona_b'] ?></td>
                        <td><?php echo $res['zona_c'] ?></td>
                        
                        <td><a class="btn btn-warning" href="<?php echo "editarSalarios.php?anio=" . $res['anio']?>"><i class="fa fa-edit"></i></a></td>
                        <td><a class="btn btn-danger" href="<?php echo "services/eliminarSalarios.php?anio=" . $res['anio']?>"><i class="fa fa-trash"></i></a></td>
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