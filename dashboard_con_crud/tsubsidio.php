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
$query_umas= mysqli_query ($conex,"SELECT * FROM tsubsidio ORDER BY Anio DESC, idSubsidio ASC;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <!--<h1 class="text-center">Administrar Tsubsidios</h1> outline-->
            <div class="form-row">
            <h1 style="color: black">Administrar Tsubsidios&nbsp;&nbsp;</h1>
                <div class="col-2">
                    <a class="btn btn-primary" href="formNuevotsubsidio.php"><i class="fa fa-plus"></i> 
                    Nuevo Registro</a>
                </div>
                <div class="col-2">
                    <a class="btn btn-secondary" href="services/actualizaranios.php?tabla=tsubsidio"><i class="fa fa-sync-alt"></i> 
                    Actualizar años</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" style="color: black">
                <thead>
                    <tr>                  
                        <!-- <th>ID SUBSIDIO</th> -->
                        <th>SUELDO INF</th>
                        <th>SUELDO SUP</th>
                        <th>LIMITE INF</th>  
                        <th>LIMITE SUP</th> 
                        <th>SUBSIDIO</th> 
                        <th>AÑO</th> 
                        <th>TIPO</th>                      
                        <th>Editar</th>
                        <th>Eliminar</th>
                        
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_umas)){ 
                
				?>

                    <tr>
                        <!-- <td><?php echo $res['idSubsidio'] ?></td> -->
                        <td><?php echo $res['sueldoinf'] ?></td>
                        <td><?php echo $res['sueldosup'] ?></td>
                        <td><?php echo $res['limiteinf'] ?></td>
                        <td><?php echo $res['limitesup'] ?></td>
                        <td><?php echo $res['subsidio'] ?></td>
                        <td><?php echo $res['Anio'] ?></td>
                        <td><?php echo $res['tipo'] ?></td>
                        
                        <td><a class="btn btn-warning" href="<?php echo "editartsubsidio.php?idSubsidio=" . $res['idSubsidio']?>"><i class="fa fa-edit"></i></a></td>

                        <td><a class="btn btn-danger eliminar" href="<?php echo $res['idSubsidio']?>"><i class="fa fa-trash"></i></a></td>
                        <!-- <td><a class="btn btn-danger" data-toggle="modal" data-target="#confirmaEliminar" href="#"><i class="fa fa-trash"></i></a></td> -->
                        
                     
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