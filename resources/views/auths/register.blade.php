<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register | Sewa Mobil</title>

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
    <div class="row justify-content-center">
      <div class="col-xl-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900">Create an Account!</h1>
                    <span class="small">Sewa Mobil <sup>kng</sup></span>
                  </div>
                  <form action="{{ url('/daftar/member') }}" method="post" class="user">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nama" id="  exampleFirstName" placeholder="Full Name" value="{{ old('nama') }}">
                      @error('nama')
                        <span class="small text-danger ml-3">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address" value="{{ old('email') }}">
                      @error('email')
                        <span class="small text-danger ml-3">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group row mb-3">
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                      </div>
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" name="password_confirmation" id="exampleRepeatPassword" placeholder="Repeat Password">
                      </div>
                      <div class="row ml-4">
                        @error('password')
                          <span class="small text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                      Register Account
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <span class="small">Sudah memiliki akun? </span><a class="small" href="{{ url('/login') }}">klik disini!</a>
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
