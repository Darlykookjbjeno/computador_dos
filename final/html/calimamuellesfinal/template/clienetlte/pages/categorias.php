<?php

require_once('../../../categorias.php');
$ModeloCategoria = new Categorias();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Categorias</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../../css/adminlte.min.css">
  <link rel="stylesheet" href="../../../css/arreglosadmin.css">
  <link rel="stylesheet" href="../../../css/metodos.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!---barra horizontal!-->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <img src="../../../img/usuario.png" width="30" height="30">
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Editar Perfil
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            
            <div class="dropdown-divider"></div>
            <a href="http://localhost/html/calimamuellesfinal/usuarios/controlador/salir.php" class="dropdown-item dropdown-footer">salir</a>
          </div>
        </li>



      </ul>
    </nav>

    <!---barra vertical!-->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Brand Logo -->
      <a href="../pages/categorias.php" class="brand-link">
        <img src="../../../img/lgo.png" alt="AdminLTE Logo" class="brand-image ">
        <span class="brand-text font-weight-light">CalimaMuelles</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../../img/admin.png" class="img-circle " alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrador</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/usuarios.php" class="nav-link">
                    <i class="far fa-user-circle"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/categorias.php" class="nav-link">
                    <i class="far fa-window-maximize "></i>
                    <p>Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/productos.php" class="nav-link">
                    <i class="far fa-window-restore "></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/imagenes.php" class="nav-link">
                    <i class="far fa-id-badge"></i>
                    <p>imagenes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/metodosPago.php" class="nav-link">
                    <i class="far fa-id-card "></i>
                    <p>Metodos de Pago</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/orden.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Ordenes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/detallesOrden.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Detalles de Ordene</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/domicilios.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Domicilio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/agregarAdmin.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Agregar Administrador</p>
                  </a>
                </li>
              </ul>
            </li>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-2">
              <h1>Categorias</h1>
            </div>
            <?php include_once("../../../categorias/vista/modal_agregar.php"); ?>
            
            <div class="col-sm-4">
              <h3 class='text-right'>
                <button type="submit" name="btnAgregar" class="btn info" data-toggle="modal" data-target="#dataRegister">Agregar</button>
              </h3>
            </div>




          </div>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid" method="POST">



          <div class="row">
            <?php
            $listarCategorias = $ModeloCategoria->vercategoria();
            if ($listarCategorias != Null) {
              foreach ($listarCategorias as $listarCategoria) {
            ?>
                <div class="col-md-5 col-sm-1 col-12">
                  <div class="info-box">

                    <i class="fa fa-archive" aria-hidden="true"></i>

                    <div class="info-box-content" style="width: 80px;">
                      <span  class="info-box-text"><?= $listarCategoria['id_categoria']; ?></span>
                      <span class="info-box-text"><?= $listarCategoria['nombre_categoria']; ?></span>

                    </div>

                    <div class="card-footer">
                      <div class="text-right">
                        <a href="eliminarCategoria.php?Id=<?= $listarCategoria['id_categoria']; ?>"    class="btn btn-sm teal">
                          <i class="fas fa-trash-alt"></i>
                        </a>

                        <a type="button" class="btn col-sm-6 info"  href="editCategoria.php?Id=<?= $listarCategoria['id_categoria']; ?>" class="btn2 btn-sm active" role="button" aria-pressed="true">Editar</a> 
                      </div>
                    </div>
                  </div>

                </div>

            <?php
              }
            }

            ?>

          </div>


          <p>

        </div>
      </section>





      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../js/adminlte.min.js"></script>
    <script src="../../../js/demo.js"></script>


    <!-- Latest compiled and minified JavaScript -->


</body>

</html>