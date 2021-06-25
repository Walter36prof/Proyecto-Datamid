<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
   
	<title>INICIAR SESION GAA</title> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/estilosLogin.css">
    <script src="js/validarLogin.js"></script> 
    <link rel="stylesheet" href="alert/style.css" />
    <script src="alert/cute-alert.js"></script>

	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
</head>  
<body>
    
    <?php
            require_once ("services/isLogin.php");
            
            if($estado && $tipouser=="admin"){
            ?>
                <form class="formulario" >

                <CENTER><h1 class="title">Usted esta saliendo del sitio web</h1></CENTER>
                <br>
                
                    <input type="button" class="button" id="regresar" value="Volver al Inicio" onclick="window.location='catalogos.php'">
              
               
                    <input type="button" class="button" id="cerrar" value="Si, quiero cerrar sesion" onclick="window.location='services/cierre.php'" style="background: red">
                
                </form>
            <?php
            }
            else{  
                if($estado && $tipouser=="invitado"){  
                    ?>
                    <form class="formulario" >
    
                    <CENTER><h1 class="title">Usted esta saliendo del sitio web</h1></CENTER>
                    <br>
                    
                        <input type="button" class="button" id="regresar" value="Volver al Inicio" onclick="window.location='catalogoInvitado.php'">
                  
                   
                        <input type="button" class="button" id="cerrar" value="Si, quiero cerrar sesion" onclick="window.location='services/cierre.php'" style="background: red">
                    
                    </form>
                <?php
                }
            
            else{
            ?>
             <div class="contenedor-formularioLogin">
		<div class="wrapLogin">
        <form class="formulario" method="POST" action="services/validar.php" id="login-usuario" name="formLoginUsuario">
				<h1>Iniciar Sesión</h1>
				<br>
				<div>
									
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo"><i class="fas fa-envelope icon"></i>Correo Electronico:</label>
					</div>
					<div class="input-group">
						<input type="password" id="password" name="password">
						<label class="label" for="password"><i class="fas fa-key icon"></i>Contraseña:</label>
					</div>					
						
                    <input type="submit" id="verificar-usuario" value="Iniciar Sesion"  class="button" onclick="return validar();">
                    <br><br>
                    <p style="color: black;">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                    <p style="color: black;">¿No tienes una cuenta? <a class="link" href="registrarvista2.php">Registrate </a></p>
				</div>
			</form>
		</div>
	</div>   
            <!--
                <form class="formulario" method="POST" action="services/validar.php" id="login-usuario" name="formLoginUsuario">
    
                    <h1>Iniciar Sesión</h1>
                        <div class="contenedor">
     
     
         
                            <div class="input-contenedor">
                                <i class="fas fa-envelope icon"></i>
                                <input type="text" id="correo" name="correo" placeholder="Correo Electronico">
         
                            </div>
         
                            <div class="input-contenedor">
                                <i class="fas fa-key icon"></i>
                                <input type="password" id="password" name="password" placeholder="Contraseña">
                            </div>

                            <input type="submit" id="verificar-usuario" value="Iniciar Sesion"  class="button" onclick="return validar();">
                            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                            <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
                        </div>
                </form>-->
            <?php 
            }
        }
        ?>
        <script src="js/formularioLogin.js"></script> 
</body>
</html>