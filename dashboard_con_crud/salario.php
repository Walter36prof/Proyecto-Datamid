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
$query_umas= mysqli_query ($conex,"SELECT * FROM salario ORDER BY anio DESC, zona ASC;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">            
            <div class="form-row">
                <h1 style="color: black">Administrar Salario&nbsp;&nbsp;</h1>
                <div class="col-2">
                    <a class="btn btn-primary" href="formNuevoSalario.php"><i class="fa fa-plus"></i> Nuevo
                        Registro</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-secondary" href="services/actualizaranios.php?tabla=salario"><i class="fa fa-sync-alt"></i> 
                    Actualizar años</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" style="color: black">
                <thead>
                    <tr>
                        <!-- <th>ID SALARIO</th> -->
                        <th>AÑO</th>
                        <th>ZONA</th>
                        <th>VALOR</th>                       
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_umas)){ 
                
				?>

                    <tr>
                        <!-- <td><?php echo $res['idsalrio'] ?></td> -->
                        <td><?php echo $res['anio'] ?></td>
                        <td><?php echo $res['zona'] ?></td>
                        <td><?php echo $res['valor'] ?></td>
                        
                        <td><a class="btn btn-warning" href="<?php echo "editarSalario.php?idsalrio=" . $res['idsalrio']?>"><i class="fa fa-edit"></i></a></td>

                        <td><a class="btn btn-danger eliminarSalario" href="<?php echo $res['idsalrio']?>"><i class="fa fa-trash"></i></a></td>
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