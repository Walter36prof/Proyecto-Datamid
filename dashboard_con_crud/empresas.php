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
$query_empresas= mysqli_query ($conex,"SELECT * FROM empresa;");
?>
<!--INICIO del cont principal-->
<div class="container" style="display: block; overflow-x: auto;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">           
            <div class="form-row">
            <h1 style="color: black">Administrar Empresas&nbsp;&nbsp;</h1>
                <div class="col-2">
                    <a class="btn btn-primary" href="formNuevaEmpresa.php"><i class="fa fa-plus"></i> Nuevo Registro</a>
                </div>
                
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" style="color: black">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Empresa</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="container">
                <?php while ($res=mysqli_fetch_assoc($query_empresas)){ 
                
				?>

                    <tr>
                        <!-- <td><?php echo $res['id_empresa'] ?></td> -->
                        <td><?php echo $res['empresa'] ?></td>
                        <td><?php echo $res['estado'] ?></td>
                        
                        
                        <td><a class="btn btn-warning" href="<?php echo "editarEmpresa.php?idEmpresa=" . $res['id_empresa']?>"><i class="fa fa-edit"></i></a></td>

                       <td><a class="btn btn-danger eliminarEmpresa" href="<?php echo $res['id_empresa']?>"><i class="fa fa-trash"></i></a></td>
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