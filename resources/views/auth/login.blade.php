<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cavi Asesorías</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="col-md-6">
          <div class="col-md-6">
          </div>
          <div class="col-md-4">
            <img src="/images/cav.png" alt="CavLogo">
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row w-100 col-md-6">
          <div class="col-md-6 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Inicio de sesión</h2>
              <h4 class="font-weight-light">Hola, bienvenido a Cavi Asesorías.</h4>
              <form class="pt-5" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Usuario" name="email">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="mt-5">
                    <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium" href="../../index.html">Iniciar Sesión</button>
                  </div>
                  <div class="mt-3 text-center">
                    <a href="#" class="auth-link text-white">Se te olvidó la contraseña?</a>
                  </div>                 
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>