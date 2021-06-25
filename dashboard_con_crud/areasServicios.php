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
include_once "database/conexion.php";


$sentencia = DBC::get()->query("SELECT * FROM areas;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

    <!DOCTYPE html>
    <html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link href="styles/cards.css" rel="stylesheet">
  <link rel="stylesheet" href="alert/style.css" />
    <title>Areas y Servicios</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Gonzalez alonzo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="catalogos.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      

    </ul>


    
  </div>

  
</nav><br>
<h1 class="text-center">Nuestros Servicios</h1>


<?php foreach($productos as $producto){ ?>

    <div class="container">

      <div class="card shadow  my-4  bg-white rounded" >
            <div class="row no-gutters">
                <div class="col-md-4">
                
                    <img src="images/<?php echo $producto->imagenPortada?>" class="card-img h-100">
                </div>
                <div class="col-md-8 mt-0">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"><?php echo $producto->nombreArea ?></h5>
                        <div class="cuerpo">
                        <p class="card-text"><?php echo $producto->descripcionArea ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
      </div>

    </div>
    <br>
    
    <?php } ?>
</body>
</html>
