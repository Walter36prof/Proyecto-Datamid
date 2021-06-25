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

    echo '<script type="text/javascript">
    alert("Debes ser un administrador para entrar a esta pagina. La sesion se finalizara para fines de seguridad");
    window.location="services/cierre.php";
        </script> ';
    }

if(!isset($_GET["idEmployee"])) exit();
$id = $_GET["idEmployee"];
include_once "database/db.config.php";
// $sentencia = DBC::get()->prepare("SELECT * FROM users WHERE idUser = ?;");
// $sentencia->execute([$id]);
// $user = $sentencia->fetch(PDO::FETCH_OBJ);

$stmt = $conex->prepare("SELECT * FROM users WHERE idUser = ?;");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt -> get_result();
            $num_of_rows = $result->num_rows;
            // $stmt->bind_result($id);
            // if($stmt->affected_rows){

if($num_of_rows<1){
    echo "¡No existe algún user con ese ID!";
    exit();
}
?>

<?php require_once "includes/parte_superior.php"?>

<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title></title>
	
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="styles/estilosLogin.css">
    
    <link rel="stylesheet" href="alert/style.css" />
    <script src="alert/cute-alert.js"></script>

<div class="contenedor-formnewemp">
		<div class="wrapnewEmp">
        <form class="formulario" name="formularioeditarUsuario" id="form-editarUsuario">				
		    <?php  while ($res = $result->fetch_assoc()) { ?>
            <h1>Editar el usuario <?php echo $res['accountUser']; ?></h1>
				<br>
				<div>
				
					<?php						
					include_once "database/db.config.php";
					// $sentencia = DBC::get()->query("SELECT * FROM profiles;");
					// $profiles = $sentencia->fetchAll(PDO::FETCH_OBJ);
					$query_Perfiles= mysqli_query ($conex,"SELECT * FROM profiles;");
					?>

                    <input type="hidden" name="id" value="<?php echo $res['id']; ?>">                    
                    <input value="<?php echo $res['idUser'] ?>" class="form-control" name="idEmployee" required type="hidden"
                    id="idEmployee" placeholder="Escribe el id" readonly>

                    <label for="idProfile" style="color:#303F9F">Perfil de usuario:</label>
					<?php
                        $stmt = $conex->prepare("SELECT * FROM profiles;");
                        
                        $stmt->execute();
                        $result = $stmt -> get_result();
                        $result->num_rows;
                    ?>                    
                    <select name="idProfile" id="idProfile" class="form-control">
                        <?php while ($res2 = $result->fetch_assoc()){
                            if($res2['idProfile'] == $res['idProfile']){ ?>
                            <option value='<?php echo $res2['idProfile']?>' selected><?php echo $res2['nameProfile']?></option>
                            <?php }
                            else{ ?>
                                <option value='<?php echo $res2['idProfile']?>'><?php echo $res2['nameProfile']?></option>					
                        <?php }}?>
                    </select><br>

                    <div class="input-group">
						<input type="text" id="nameEmployee" name="nameEmployee" required value="<?php echo $res['nameUser'] ?>">
						<label class="label" for="nameEmployee">Escribe el nombre del empleado:</label>
					</div>                    																										
					<?php } ?>
                    
                    <?php
                        $stmt = $conex->prepare("SELECT * FROM users WHERE idUser = ?;");
                        $stmt->bind_param('i', $id);
                        $stmt->execute();
                        $result = $stmt -> get_result();
                        ?>

                        <?php  while ($res3 = $result->fetch_assoc()) {										
                    ?>

					<div class="input-group">
						<input type="text" id="employeeAccount" name="employeeAccount" required value="<?php echo $res3['accountUser'] ?>">
						<label class="label" for="employeeAccount">Cuenta de empleado:</label>
					</div>					
							
					<div class="input-group">
						<input type="email" id="employeeEmail" name="employeeEmail" required value="<?php echo $res3['emailUser']  ?>">
						<label class="label" for="employeeEmail">Correo del usuario:</label>
					</div>
                    <?php } ?>
					<br><CENTER>
                    <input class="btn btn-primary" type="button" id="btn-edit-usuario" value="Guardar">
                    <a class="btn btn-warning" href="usuariosdelsistema.php">Cancelar</a>
                    </CENTER>				
				</div>
			</form>
		</div>
	</div>
	<br>
	<script src="js/formularioEditEmpleado.js"></script>
    <script>
		function ponleFocus(){
    		document.getElementById("employeeEmail").focus();  
            document.getElementById("employeeAccount").focus();  
            document.getElementById("nameEmployee").focus();          
		}
		ponleFocus();
	</script>
<!--INICIO del cont principal
<div class="container" >
    <div class="row">
        <div class="col-md-12 text-center">

        <?php  while ($res = $result->fetch_assoc()) {
					
					
        ?>
            <h1>Editar usuario con el ID <?php echo $res['idUser']; ?></h1>
            
            <form class="formulario" name="formulario-editarUsuario" id="form-editarUsuario">
                <input type="hidden" name="id" value="<?php echo $res['id']; ?>">

                <label for="iduser">Id de usuario:</label>
                <input value="<?php echo $res['idUser'] ?>" class="form-control" name="idEmployee" required type="text"
                    id="idEmployee" placeholder="Escribe el id" readonly>

                <label for="nombre">Nombre:</label>
                <input required id="nameEmployee" value=<?php echo $res['nameUser'] ?> name="nameEmployee" cols="30"
                    rows="1" class="form-control">
        <?php } ?>
                
                <?php

                $stmt = $conex->prepare("SELECT * FROM profiles;");
                
                $stmt->execute();
                $result = $stmt -> get_result();
                $result->num_rows;
				?>


                <label for="idperfil">id Perfil:</label>
                <select name="idProfile" id="idProfile" class="form-control">

				<?php while ($res2 = $result->fetch_assoc()){

					if($res2['idProfile'] == $res['idProfile']){ ?>
					<option value='<?php echo $res2['idProfile']?>' selected><?php echo $res2['nameProfile']?></option>
					<?php }
					else{ ?>
						<option value='<?php echo $res2['idProfile']?>'><?php echo $res2['nameProfile']?></option>					
					<?php }}?>
                </select>
                

                <?php


                $stmt = $conex->prepare("SELECT * FROM users WHERE idUser = ?;");
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $result = $stmt -> get_result();
				?>

                <?php  while ($res3 = $result->fetch_assoc()) {
					
					
                ?>

                <label for="cuenta">Cuenta de usuario:</label>
                <input value="<?php echo $res3['accountUser'] ?>" class="form-control" name="employeeAccount" required
                    type="text" id="employeeAccount" placeholder="Cuenta de usuario">            

                <label for="correo">Correo de Usuario:</label>
                <input value="<?php echo $res3['emailUser']  ?>" class="form-control" name="employeeEmail" required
                    type="text" id="employeeEmail" placeholder="Correo de user">
                    <?php } ?>
                <br>
                <CENTER>
                <input class="btn btn-primary" type="button" id="btn-edit-usuario" value="Guardar">
                <a class="btn btn-warning" href="usuariosdelsistema.php">Cancelar</a>
                </CENTER><br>
            </form>
        </div>
    </div>
</div>
FIN del cont principal-->

<?php require_once "includes/parte_inferior.php"?>