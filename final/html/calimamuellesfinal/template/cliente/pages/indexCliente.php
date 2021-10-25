<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vista cliente</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/adminlte.min.css">
  <link rel="stylesheet" href="../../../css/style.css">

  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">

</head>
<div class="contenedorprincipal">
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../plugins/fontawesome-free/img/photo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cliente</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link"></a>
          </li>

         <!-- <li class="nav-item">
            <a href="#" class="nav-link">CONTACTANOS</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">CATALOGOS</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">CATALOGO HERCULES </a></li>
              <li><a href="#" class="dropdown-item">CATALOGO IMAL</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown...
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">MAS CATALOGOS+</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">Catalogo A</a>
                  </li>

                  <!-- Level three dropdown...
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Catalogo B</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">catalogo A</a></li>
                      <li><a href="#" class="dropdown-item">catalogo B</a></li>
                    </ul>
                  </li>
                  <!-- End Level three .....
                  <li><a href="#" class="dropdown-item">Catalogo C</a></li>
                  <li><a href="#" class="dropdown-item">Catalogo D</a></li>
                </ul>
              </li>
              <!-- End Level two... 
            </ul>
          </li>
        </ul> -->

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plugins/fontawesome-free/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Juan Pablo Campo
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plugins/fontawesome-free/img/user2-160x160.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Juan Pablo Campo
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../plugins/fontawesome-free/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Darly Gineth Giron
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
  

</div>
<div class="caja1234">
  <img src ="../../img1/cart4.svg"  height="4%" width="2%"  alt="carro de compras">

  <section class="ld">
  </section>

  <section class="lizq"> 
    <img class="imgizq" src="../../img1/facebook.svg" height="10%" width="5%"  alt="FACEBOOK">
    <img class="imgizq" src="../../img1/instagram.svg" height="10%" width="5%"  alt="INSTAGRAM">
    <img class="imgizq" src="../../img1/whatsapp.svg" height="10%" width="5%"  alt="WHATSSAP">
    <img class="imgizq" src="../../img1/correo.svg" height="10%" width="5%"  alt="EMAIL">
   
  </section>

  <section class="cajacentral">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">

          <img class="img1" src="../../img1/pexels-brady-knoll-3221163.jpg"  alt="img1">

        </div>
        <div class="carousel-item">
          <img class="img2" src="../../img1/pexels-kendall-hoopes-1015555.jpg" height="100%" width="25%"  alt="img2">
        </div>
        <div class="carousel-item">
          <img class="img3" src="../../img1/pexels-pixabay-164634.jpg" height="20%" width="25%"  alt="img3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
<section class="cajadecatalogos">

  <section class="caja1">
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link active" href="#">Catalogo1</a>
    </nav>
  </section>

  <section class="caja2">
    <!-- <img src="../../img1/estante.svg"  height="30%" width="20%"   alt="imagen2">-->
    <nav class="nav nav-pills nav-fill">
     <a class="nav-item nav-link active" href="#">Catalogo2</a>
   </nav>
   </section> 
    
   <section class="caja3">
    <!--<img src="../../img1/logoimg.svg"  height="30%" width="20%" alt="imagen3">-->
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link active" href="#">Catalogo3</a>
    </nav>
  </section>

  <section class="caja4"> 
    <!-- <img src="../../img1/cart4.svg"  height="30%" width="20%" alt="imagen4">-->
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link active" href="#">Catalogo4</a>
   </nav>
   </section>

   <section class="caja5">
    <!--<img src="../../img1/caja.svg"  height="30%" width="20%" alt="imagen5">-->
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link active" href="#">Catalogo5</a>
    </nav>
  </section>
   
  <section class="caja6">
    <!--<img src="../../img1/logoimg.svg"  height="30%" width="20%" alt="imagen6">-->
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link active" href="#">Catalogo6</a>
    </nav>
  </section>
  

  <section class="caja7">
    <!-- <img src="../../img1/cart4.svg"  height="30%" width="20%" alt="imagen7">-->
    <nav class="nav nav-pills nav-fill">
     <a class="nav-item nav-link active" href="#">Catalogo7</a>
    </nav>
    </section>


    <section class="caja8">
      <!--<img src="../../img1/logoimg.svg"  height="30%" width="20%" alt="imagen8">-->
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active" href="#">Catalogo8</a>
      </nav>
    </section>
   
  
   
</section>





</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</div>
</body>
</html>
