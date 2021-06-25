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
require_once "includes/parte_superior.php"
?>

<!--INICIO del cont principal-->
<!-- <div class="container">--> 
    <!-- Inicia el contenido -->  
          
    <div class="col-xs-12">
        <html lang="es">
            <head>
           
                <meta charset="UTF-8">
                <title>Catalogo Administrador</title>
                <link rel="stylesheet" href="styles/estiloscatalogo.css">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                
                <script>
                    function load() {
                        $.ajax({
                            type: 'POST', //forma en que lo estas pasando
                            data: 'key='+1,  //parametros serializados
                            url: 'services/ConsultaNotificacion.php', // url del archivo q va a procesar los datos
        
                            success: function(response) //si la respuesta es exitosa
                            {
                                console.log(response);
                                var resultado=JSON.parse(response);//parseamos el resultado a JSON
                                if(resultado.respuesta == "exitoso"){//comparamos si lo que tien
                                    
                                    Push.create("¡Hay nuevos cambios!", {
                                    body: "Llegaron peticiones de cambios que requieren de su aprobacion, click aqui para ir a revisarlos",
                                    icon: 'images/gonzalez.jpg',
                                   
                                    timeout: 10000,
                                        onClick: function () {
                                        window.location = "cambios.php";
                                        this.close();
                                    }
                                    });

    

                                }
                             }

                            });
                        }
                            window.onload = load;
                </script>
            </head>
                <body>
                
                    <div class="container">                        
                        <div class="card">
                            <img src="images/impuesto.svg">
                            <h4>Areas del Sistema</h4>
                            <a href="areasdelsistema.php" role="button">Acceder</a>
                        </div>
                        <!--
                        <div class="card">
                            <img src="images/cliente3.svg">
                            <h4>Clientes</h4>
                            <a href="clientesDelSistema.php">Acceder</a>
                        </div>-->
                        <div class="card">
                            <img src="img/registro.svg">
                            <h4>Registros</h4>
                            <a href="catalogoRegistros.php">Acceder</a>
                        </div>
                        <div class="card">
                            <img src="images/perfil2.svg">
                            <h4>Usuarios Del Sistema</h4>
                            <a href="usuariosdelsistema.php">Acceder</a>
                        </div>
		                <div class="card">
                            <img src="images/settings.svg">
                            <h4>Perfiles de Usuarios</h4>
                            <a href="perfilesUsuario.php">Acceder</a>
                        </div> 
                        <div class="card">
                            <img src="images/refresh3.svg">
                            <h4>Cambios</h4>
                            <a href="cambios.php">Acceder</a>
                        </div>                                               
                    </div>
                    <br><br><br><br><br><br>                                         
                </body>                
        </html>
    </div>
    
    <?php include_once "includes/pie.php" ?>
<!-- </div> -->
<!--FIN del cont principal-->
<?php require_once "includes/parte_inferior.php"?> 

