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
else if($varProfile != 2){

    echo '<script type="text/javascript">
	alert("No tienes permiso para ingresar a esta pagina. La sesion se finalizara para fines de seguridad");
	    window.location="services/cierre.php";
        </script> ';
    }
require_once "includes/sidebarInvitado.php";
include_once "database/db.config.php";
// $sentencia = DBC::get()->query("SELECT * FROM areas;");
// $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
$query_Usuarios= mysqli_query ($conex,"SELECT * FROM areas;");

?>

<title>Areas</title>
<!--INICIO del cont principal-->
<div class="container">
		<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-center">Areas del Sistema</h1>
		<div>
			<a class="btn btn-outline-primary" href="formNuevaArea.php"><i class="fa fa-plus"></i> Nueva Area</a>
		</div>
		<br>
        <div class="table-responsive">
		    <table class="table table-bordered">
			    <thead>
				    <tr>
					    <th>ID</th>
					    <th>Nombre</th>
					    <th>Descripción</th>
                        <th>imagenPortada</th>
					    <th>Editar</th>
					    <!-- <th>Eliminar</th> -->
				    </tr>
			    </thead>
			    <tbody>
				<!-- Aqui realizamos la insercion de datos a la BD  -->
				    <?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ 
                
				?>
				    <tr>
				         <td><?php echo $res['idArea'] ?></td>
					    <td><?php echo $res['nombreArea'] ?></td>
					    <td><?php echo $res['descripcionArea'] ?></td>

                        <td><img class="img-thumbnail" src="images/<?php echo $res['imagenPortada']?>" style="width: 100px;"> </td>
						

					    <td><a class="btn btn-warning" href="<?php echo "editarAreaSistema.php?idArea=". $res['idArea']?>"><i class="fa fa-edit"> Editar</i></a></td>

					    <!-- <td><a class="btn btn-danger" href="<?php echo "services/eliminarAreaSistema.php?idArea=" . $res['idArea']?>"><i class="fa fa-trash"> Eliminar</i></a></td> -->
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