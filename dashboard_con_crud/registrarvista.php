<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="styles/estilosLogin.css">
    
    <link rel="stylesheet" href="alert/style.css" />
    <script src="alert/cute-alert.js"></script>
	

</head>  
<body>
 <!-- <form class="formulario" name="formulario-registro" id="form-registro" action="services/newUser.php" method="POST"> -->


    <form class="formulario" name="formulario-registro" id="form-registro">
    <h1>Registro de Cuenta</h1>
    <div class="contenedor">
     
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" id="cuenta" name="cuenta" placeholder="Cuenta de usuario">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" name="correo" id="correo" placeholder="Correo Electronico">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" id="password" name="password" placeholder="Contraseña">        
        </div>   
        
        <!--<input type="submit" value="Registrate" class="button">-->
        <input type="button" value="Registrate" class="button" id="btn-new-user">
        <input type="hidden" name="registro" id="registro" value="nuevo">
        
            
        <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
        <p>¿Ya tienes una cuenta?<a class="link" href="index.php">Iniciar Sesion</a></p>
        
    </div>
</form>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/registrarusuario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.1/sweetalert2.all.min.js" integrity="sha512-xMsHU2/I2z60+PZXbUVRn3E62Q5NwwbE0H1JNbVmAhuADCyFCFBuVK2OA9RurGxOAudnM3u3LAjyFOcda9/8PQ==" crossorigin="anonymous"></script>
</html>