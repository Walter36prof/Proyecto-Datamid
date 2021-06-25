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
$query_isr= mysqli_query ($conex,"SELECT * FROM isr ORDER BY anio DESC, id_isr ASC;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">            
            <div class="form-row">
                <h1 style="color: black">Administración de ISR&nbsp;&nbsp;</h1>
                <div class="col-2">
                    <a class="btn btn-primary" href="formNuevoIsr.php"><i class="fa fa-plus"></i> Nuevo
                        Registro</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-secondary" href="services/actualizaranios.php?tabla=isr"><i class="fa fa-sync-alt"></i> 
                    Actualizar años</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" style="color: black">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Sueldo Inferior</th>
                        <th>Sueldo Superior</th>
                        <th>Limite Inferior</th>
                        <th>Limite Superior</th>
                        <th>Cuota Fija</th>
                        <th>Porcentaje</th>
                        <th>Año</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_isr)){ 
                
				?>

                    <tr>
                        <!-- <td><?php echo $res['id_isr'] ?></td> -->
                        <td><?php echo $res['sueldoinf'] ?></td>
                        <td><?php echo $res['sueldosup'] ?></td>
                        <td><?php echo $res['limiteinf'] ?></td>
                        <td><?php echo $res['limitesup'] ?></td>
                        <td><?php echo $res['coutafija'] ?></td>
                        <td><?php echo $res['porcentaje'] ?></td>
                        <td><?php echo $res['anio'] ?></td>
                        <td><?php echo $res['tipo'] ?></td>
                        
                        
                        <td><a class="btn btn-warning" href="<?php echo "editarIsr.php?idIsr=" . $res['id_isr']?>"><i class="fa fa-edit"></i></a></td>

                        <td><a class="btn btn-danger eliminarISR" href="<?php echo $res['id_isr']?>"><i class="fa fa-trash"></i></a></td>

                        
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