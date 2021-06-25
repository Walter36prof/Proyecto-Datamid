<?php 
session_start();
error_reporting(0);
$varsesion= $_SESSION['nameUser'];
$varProfile=$_SESSION['idProfile'];
if($varsesion== null || $varsesion=''){
    header("Location: index.php");
    die();
}   
else if($varProfile != 1){

    echo '<script type="text/javascript">
	alert("Debes ser un administrador para entrar a esta pagina. La sesion se finalizara para fines de seguridad");
	window.location="services/cierre.php";
        </script> ';
    }

require_once "includes/parte_superior.php";
include_once "database/db.config.php";
// $sentencia = DBC::get()->query("SELECT * FROM profiles;");
// $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
$query_Usuarios= mysqli_query ($conex,"SELECT * FROM profiles;");
?>
<!--INICIO del cont principal-->
<div class="container">
		<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-row">
			<h1 style="color:black">Administrar Perfiles de Usuario&nbsp;&nbsp;&nbsp;</h1>
			<div>
				<a class="btn btn-primary" href="formNuevoPerfil.php"><i class="fa fa-plus"></i> Nuevo Perfil</a>
			</div>
		</div>
		<br>
        <div class="table-responsive">
		    <table class="table table-bordered table-hover" style="color:black">
			    <thead>
				    <tr>
					    <!-- <th>ID</th> -->
					    <th>Perfil</th>
					    <th>Descripción</th>
					    <th>Editar</th>
					    <th>Eliminar</th>
				    </tr>
			    </thead>
			    <tbody>
				    <?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ ?>
				    <tr>
				         <!-- <td><?php echo $res['idProfile'] ?></td> -->
					    <td><?php echo $res['nameProfile'] ?></td>
					    <td><?php echo $res['descriptionProfile'] ?></td>
					    <td><a class="btn btn-warning" href="<?php echo "editarPerfilUsuario.php?idProfile=". $res['idProfile']?>"><i class="fa fa-edit"> Editar</i></a></td>
						
						<td><a class="btn btn-danger eliminarPerfil" href="<?php echo $res['idProfile']?>"><i class="fa fa-trash"> Eliminar</i></a></td>
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