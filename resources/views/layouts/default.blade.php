<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Prototipo Matemáticas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" /> @yield('customStyles')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      @if(Auth::user()->idTipoUsuario == 1)
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{route('index')}}" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('usuarios.index')}}" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Usuarios</a>
          </li>
          <li class="nav-item">
            <a href="{{route('temas.index')}}" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Parcial 1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Parcial 2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Parcial 3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Semestral</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{ url('/logout')}}" class="nav-link">
              <i class="mdi mdi-account-off"></i>Cerrar Sesión</a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    @endif
    @if(Auth::user()->idTipoUsuario == 3)
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{route('index')}}" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-account-edit"></i>Matemáticas</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{ url('/logout')}}" class="nav-link">
              <i class="mdi mdi-account-off"></i>Cerrar Sesión</a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>    
    @endif
    @yield('content')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async
    defer></script>
  <script src="/js/maps.js"></script>
  <!-- End custom js for this page-->

  @yield('customScripts')
</body>

</html>