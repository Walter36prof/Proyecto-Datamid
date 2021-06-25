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
$query_Usuarios= mysqli_query ($conex,"SELECT * FROM modareas;");

if (mysqli_num_rows($query_Usuarios)) 
    {
		//echo "Existen cambios por aprobar";
?>


<!--INICIO del cont principal-->
<div class="container">
		<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-center" style="color:black;">Actualizaciones de campos</h1>		
		<br>		
        <div class="table-responsive">
		    <table class="table table-bordered" style="color:black;">
			    <thead>
				    <tr>
					    <!--<th>TABLA</th>-->
					    <th>MODIFICACIÓN</th>
					    <!-- <th>ID</th> -->
                        <th>AREA</th>
						<th>DESCRIPCION</th>
                        <th>IMAGEN</th>
					    <th>PERMITIR</th>
					    <th>RECHAZAR</th>
				    </tr>
			    </thead>
			    <tbody>
				<!-- Aqui realizamos la insercion de datos a la BD  -->
				    <?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ 
                
				?>
				    <tr>
				        <!--<td><?php echo $res['nombretabla'] ?></td>-->
					    <td><?php echo $res['tiporegistro'] ?></td>
					    <!-- <td><?php echo $res['idarea'] ?></td> -->
						<td><?php echo $res['nombrearea'] ?></td>
					    <td><?php echo $res['descripcionarea'] ?></td>
                        <td><img class="img-thumbnail" src="images/<?php echo $res['imagenarea']?>" style="width: 100px;"> </td>
						

					    <!-- <td>
						<a class="btn btn-primary" data-1="" href="<?php echo "services/permitircambios.php?idtabla=" . $res['idtabla']."&tiporegistro=". $res['tiporegistro']."&idarea=" . $res['idarea']."&nombrearea=" .$res['nombrearea']."&descripcionarea=".$res['descripcionarea']."&imagenarea=".$res['imagenarea']?>">
						<i class="fas fa-check"> Permitir</i>
						</a>
						</td> -->
						<td>
						<a class="btn btn-primary permitircambio" data-tabla="<?php echo $res['idtabla']?>" data-tipo="<?php echo $res['tiporegistro']?>" data-idarea="<?php echo $res['idarea']?>" data-nombrearea="<?php echo $res['nombrearea']?>" data-descripcion="<?php echo $res['descripcionarea']?>" data-imagen="<?php echo $res['imagenarea']?>" href="#">
						<i class="fas fa-check"> Permitir</i>
						</a>
						</td>

					    <td><a class="btn btn-danger eliminarCambio" href="<?php echo $res['idtabla']?>"><i class="fa fa-trash"> Rechazar</i></a></td>
				    </tr>
				    <?php } ?>
			    </tbody>
		    </table>
        </div>
		
	</div>
            		</div>
	</div>
	<?php
	} else {
		?>		
			<center><img src="img/vacio3.svg" width="600px">	
			<h2>NO SE ENCONTRARON CAMBIOS POR APROBAR<h2></center>
        <?php		
    }
	?>
<!--FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>