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
// $sentencia = DBC::get()->query("SELECT * FROM clients;");
// $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
$query_Usuarios= mysqli_query ($conex,"SELECT * FROM clients;");
?>
<title>Clientes</title>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <h1 class="text-center">Administrar Clientes</h1><br><br>
            <div class="form-row">
                <div class="col-2">
                    <a class="btn btn-outline-primary" href="formNuevoCliente.php"><i class="fa fa-plus"></i> Nuevo
                        cliente</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Calle</th>
                        <th>Numero Interior</th>
                        <th>Numero Exterior</th>
                        <th>Primer Cruzamiento</th>
                        <th>Segundo Cruzamiento</th>
                        <th>Colonia</th>
                        <th>Ciudad</th>
                        <th>Código Postal</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <!-- <th>Eliminar</th> -->
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_Usuarios)){ 
                
				?>

                    <tr>
                        <td><?php echo $res['idClient'] ?></td>
                        <td><?php echo $res['nameClient'] ?></td>
                        <td><?php echo $res['lastnameClient'] ?></td>
                        <td><?php echo $res['surnameClient'] ?></td>
                        <td><?php echo $res['streetClient'] ?></td>
                        <td><?php echo $res['intNum'] ?></td>
                        <td><?php echo $res['extNum'] ?></td>
                        <td><?php echo $res['crossingOne'] ?></td>
                        <td><?php echo $res['crossingTwo'] ?></td>
                        <td><?php echo $res['suburb'] ?></td>
                        <td><?php echo $res['cityClient'] ?></td>
                        <td><?php echo $res['zipClient'] ?></td>
                        <td><?php echo $res['phoneClient'] ?></td>
                        <td><?php echo $res['emailClient'] ?></td>
                        <td><?php echo $res['curpClient'] ?></td>
                        <td><?php echo $res['rfcClient'] ?></td>
                        <td><?php echo $res['typeClient'] ?></td>

                        <td><a class="btn btn-warning" href="<?php echo "editarCliente.php?idClient=" . $res['idClient']?>"><i class="fa fa-edit"></i></a></td>
                        <!-- <td><a class="btn btn-danger" href="<?php echo "services/eliminarCliente.php?idClient=" . $res['idClient']?>"><i class="fa fa-trash"></i></a></td> -->
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