<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Registro de nueva cuenta</title>
	
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="styles/estilosLogin.css">
    
    <link rel="stylesheet" href="alert/style.css" />
    <script src="alert/cute-alert.js"></script>
	
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="" class="formulario" name="formulario_registro" id="formulario_registro">
				<h1>Registro de Cuenta</h1>
				<br>
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre">
						<label class="label" for="nombre"><i class="fas fa-user icon"></i>Nombre:</label>
					</div>
					<div class="input-group">
						<input type="text" id="cuenta" name="cuenta">
						<label class="label" for="cuenta"><i class="fas fa-user icon"></i>Cuenta de usuario:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo"><i class="fas fa-envelope icon"></i>Correo Electronico:</label>
					</div>
					<div class="input-group">
						<input type="password" id="password" name="password">
						<label class="label" for="password"><i class="fas fa-key icon"></i>Contraseña:</label>
					</div>					
						
					<input type="button" value="Registrate" class="button" id="btn-new-user">
					<input type="hidden" name="registro" id="registro" value="nuevo">
					<br><br>
					<p style="color: black;">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
					<p style="color: black;">¿Ya tienes una cuenta?<a class="link" href="index.php"> Iniciar Sesion</a></p>
				</div>
			</form>
		</div>
	</div>

	<script src="js/formularioRegistro.js"></script>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/registrarusuario.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.1/sweetalert2.all.min.js" integrity="sha512-xMsHU2/I2z60+PZXbUVRn3E62Q5NwwbE0H1JNbVmAhuADCyFCFBuVK2OA9RurGxOAudnM3u3LAjyFOcda9/8PQ==" crossorigin="anonymous"></script>
</html>