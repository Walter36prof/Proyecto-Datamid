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
// $sentencia = DBC::get()->query("SELECT * FROM areas;");
// $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
$query_Usuarios= mysqli_query ($conex,"SELECT * FROM areas;");

?>


<!--INICIO del cont principal-->
<div class="container" >
		<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
		<div class="form-row">
			<h1 style="color:black">Areas del Sistema&nbsp;&nbsp;</h1>
			<div >
			<a class="btn btn-primary" href="formNuevaArea.php"><i class="fa fa-plus"></i> Nueva Area</a>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<div>
			<a class="btn btn-secondary" href="areasServicios.php"><i class="fas fa-clipboard-list"></i> listar areas</a>
			</div>
		</div>
		<br>
        <div class="table-responsive">
		    <table class="table table-bordered table-hover" style="color:black;" >
			    <thead>
				    <tr>
					    <!-- <th>ID</th> -->
					    <th>Nombre</th>
					    <th>Descripción</th>
                        <th>imagenPortada</th>
					    <th>Editar</th>
					    <th>Eliminar</th>
				    </tr>
			    </thead>
			    <tbody>
				<!-- Aqui realizamos la insercion de datos a la BD  -->
				    <?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ 
                
				?>
				    <tr >
				         <!-- <td><?php echo $res['idArea'] ?></td> -->
					    <td><?php echo $res['nombreArea'] ?></td>
					    <td><?php echo $res['descripcionArea'] ?></td>

                        <td><img class="img-thumbnail" src="images/<?php echo $res['imagenPortada']?>" style="width: 100px;"> </td>
						

					    <td><a class="btn btn-warning" href="<?php echo "editarAreaSistema.php?idArea=". $res['idArea']?>"><i class="fa fa-edit"> Editar</i></a></td>

					    <!-- <td><a class="btn btn-danger" href="<?php echo "services/eliminarAreaSistema.php?idArea=" . $res['idArea']."&nombreArea=" .$res['nombreArea']."&descripcionArea=".$res['descripcionArea']."&imagenPortada=".$res['imagenPortada']?>"><i class="fa fa-trash"> Eliminar</i></a></td> -->

						<td><a class="btn btn-danger eliminarAreas" data-tipo="<?php echo $_SESSION['idProfile']?>" data-nombrearea="<?php echo $res['nombreArea']?>" data-descripcion="<?php echo $res['descripcionArea']?>" data-imagen="<?php echo $res['imagenPortada']?>" href="<?php echo $res['idArea']?>"><i class="fa fa-trash"> Eliminar</i></a></td>
				    </tr>
				    <?php } ?>
			    </tbody>
		    </table>
        </div>
	</div>
            		</div>
	</div>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>