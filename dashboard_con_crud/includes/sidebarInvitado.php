<?php
session_start();
// if (!isset($_SESSION["matricula"])) {
//   header("Location:../index.php");
//   # code.he..
// }

if(isset($_SESSION['tiempo']) ) {
   // $inactivo = 30;//30 segundos para prueba de funcionalidad.
    //Descomentar la linea de abajo......................................................
    $inactivo = 1800;// 30 minutos reales como pide el documento
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_unset();
            session_destroy();              
            header("Location:../dashboar_con_crud/index.php");
            exit();
        }
}

$_SESSION['tiempo'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <title>DASHBOARD</title> -->

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.32.1/sweetalert2.all.min.js" integrity="sha512-xMsHU2/I2z60+PZXbUVRn3E62Q5NwwbE0H1JNbVmAhuADCyFCFBuVK2OA9RurGxOAudnM3u3LAjyFOcda9/8PQ==" crossorigin="anonymous"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">      
    
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion toggled"   style="background: #455279 !important;"  id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="areasdelsistema.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <img src="images/G2.png" width="50px" height="60px">
        <div class="sidebar-brand-text mt-2 mx-0">GONZALEZ ALONZO Y ASOCIADOS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-2">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="areasdelsistema.php">
          <i class="fas fa-home"></i>
          <span>INICIO</span></a>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- <li class="nav-item">
        <a class="nav-link" href="catalogoRegistros.php">
          <i class="fas fa-book"></i>
          <span>REGISTROS</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu de opciones
      </div>

<!-- AQUI EDITAMOS LOS MENUS DESPLEGABLES DEL SIDEBAR -->
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUsuarios">
        <i class="fas fa-city"></i>
          <span>Areas</span>
        </a>
        <div id="collapseUsuarios" class="collapse" aria-labelledby="headingUsuarios" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Areas</h6>
            <a class="collapse-item" href="areasdelsistema.php">Administrar Areas</a>
            <!-- <a class="collapse-item" href="formListarAreas.php">Ver areas</a> -->
            <a class="collapse-item" href="formNuevaArea.php">Agregar nueva Area</a>
            
          </div>
        </div>
      </li>
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseClientes">
        <i class="fas fa-user-friends"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseClientes" class="collapse" aria-labelledby="headingClientes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Clientes</h6>
            <a class="collapse-item" href="vistaInvitadoclientesdelsistema.php">Administrar Clientes</a>
            <a class="collapse-item" href="formNuevoCliente.php">Agregar Clientes</a>
            
            
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCalculadoras" aria-expanded="true" aria-controls="collapseCalculadoras">
        <i class="fas fa-calculator"></i>
          <span>Calculadoras</span>
        </a>
        <div id="collapseCalculadoras" class="collapse" aria-labelledby="headingCalculadoras" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Calcular</h6>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraNomina.php">Nomina</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraNominaNeto.php">Nomina Neto</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraNominaExcel.php">Nominas por Excel</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraAsimilados.php">Asimilados</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraAsimiladosNeto.php">Asimilados neto</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraTablaImpuestos.php">Tabla de impuestos</a>
            <a class="collapse-item" href="../dashboard_con_crud/invitadoCalculadoraPTU.php">PTU</a>                         
          </div>
        </div>
      </li> -->


    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background: #FFFFFF !important;">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         

          
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nameUser'] ?></span>
                <img class="img-profile rounded-circle" src="images/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                  
               
               
               
                <!-- <a class="dropdown-item" href="../dashboard_con_crud/miperfilInvitado.php" >
                  <i class="fas fa-address-card fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mi perfil
                  
                </a> -->
                <!-- <a class="dropdown-item" href="../dashboard_con_crud/services/cierre.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                  </a> -->
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Cerrar Sesion
              </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
