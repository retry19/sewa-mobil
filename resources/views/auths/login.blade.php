<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login | Sewa Mobil</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('dashboards/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('dashboards/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style>
    html {
      min-height: 100%;
    }
    body {
      min-height: 100vh;
    }
    .bg-light {
      background-image: url({{ asset('img/back.jpg') }});
      background-size: cover;
      position: relative;
      z-index: 1; }
    .bg-light::after {
      content: '';
      display: block;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      background-image: linear-gradient(to top, rgba(0,109,204,1), rgba(0,109,204,0.3));
      position: absolute;
    }
    .card {
      position: relative;
      z-index: 1;
    }
  </style>
</head>

<body class="bg-light">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900">Welcome Back!</h1>
                    <span class="small">Sewa Mobil <sup>kng</sup></span>
                  </div>
                  @if(session('akun'))
                    <div class="alert alert-success">
                      <span class="small">{{ session('akun') }}</span>
                    </div>
                  @endif
                  <form class="user" action="{{ url('/smlogin') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block mt-4">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <span class="small">Belum punya akun? </span><a class="small" href="{{ url('/daftar') }}">klik disini!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('dashboards/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dashboards/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('dashboards/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('dashboards/js/sb-admin-2.min.js') }}"></script>

</body>
</html>