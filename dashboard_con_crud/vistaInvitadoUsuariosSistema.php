<?php 
session_start();
// require_once "includes/parte_superior.php";

error_reporting(0);
//verificamos si hay algo en la variable
$varsesion= $_SESSION['nameUser'];
if($varsesion== null || $varsesion=''){
    header("Location: index.php");
    die();
}
require_once "includes/sidebarInvitado.php";


include_once "database/db.config.php";

$query_Usuarios= mysqli_query ($conex,"SELECT users.idUser, users.nameUser, users.accountUser, users.emailUser, profiles.nameProfile FROM users INNER JOIN profiles ON users.idProfile = profiles.idProfile;");
?>


<!--INICIO del cont principal-->
<div class="container" style="">
		<div class="row">
            
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h1 class="text-center">Administracion de usuarios del sistema</h1>
		<div>
			<a class="btn btn-outline-primary" href="formularioNuevoEmpleado.php"><i class="fas fa-user-plus"></i> Nuevo usuario</a>
		</div>
		<br>

        <div class="table-responsive">
		    <table class="table table-bordered">
			    <thead>
			    	<tr>
				    	<th>ID</th>
				    	<th>Nombre</th>
					    <th>Cuenta</th>
					    <th>Correo</th>
					    <th>Cargo</th>
					    <th>Editar</th>
					    <!-- <th>Eliminar</th> -->
				    </tr>
			    </thead>
			    <tbody>
				<?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ 
				
				?>
				   
					<tr>
					<td><?php echo $res['idUser'] ?></td>
					<td><?php echo $res['nameUser' ]?></td>
					<td><?php echo $res['accountUser'] ?></td>
					<td><?php echo $res['emailUser'] ?></td>
					<td><?php echo $res['nameProfile'] ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarUsuario.php?idEmployee=" . $res['idUser']?>"><i class="fa fa-edit"></i> Editar</a></td>
					<!-- <td><a class="btn btn-danger" href="<?php echo "services/eliminarUsuario.php?idEmployee=" . $res['idUser']?>"><i class="fa fa-trash"></i> Eliminar</a></td> -->
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