<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Sewa Mobil</title>

	{{-- CSS Bootstrap --}}
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

  <link href="{{ asset('dashboards/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('dashboards/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

	{{-- My CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    .awal {
      background-image: url({{ asset('img/back.jpg') }});
    }
    .why__img {
      /*width: 313px;*/
      height: 170px;
      
    }
    .why__media {
      margin: 32pt 0;
    }
    .mulaidari img {
      height: 170px;
    }
  </style>
  @yield('css')

</head>
<body>
  {{-- awal navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <span class="navbar-brand">Sewa Mobil <sup>kng</sup></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
          </li>
        </div>
      </div>
    </div>
  </nav>
  {{-- akhir navbar --}}
  {{-- awal jumbotron --}}
  <div class="jumbotron jumbotron-fluid awal" style="height: 300px;">
    <div class="container mt-5">
      @yield('tahapan')
    </div>
  </div>
  {{-- akhir jumbotron --}}
  {{-- awal content --}}
	@yield('content')
  {{-- akhir content --}}

	{{-- awal logout modal --}}
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Tekan "Logout" apabila anda yakin hendak keluar akun.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  {{-- akhir logout modal --}}
  {{-- awal footer --}}
  <div class="jumbotron jumbotron-fluid footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <p class="title">
            Sewa Mobil <sup>kng</sup>
          </p>
        </div>
        <div class="col-md-7">
          <p>Created by Reza Rachmanuddin</p>
          <p>Design/Code by Reza Rachmanuddin</p>
        </div>
        <div class="col-md-2">
          <a href="https://www.instagram.com/re_try19/" target="_blank">Instagram</a>
        </div>
      </div>
    </div>
  </div>
  {{-- akhir footer --}}
	{{-- JS JQuery, Popper, Bootstrap --}}
	<script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
	<script src="{{ asset('/js/popper.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.js') }}"></script>

	{{-- My JS --}}
  @yield('js')
</body>
</html>