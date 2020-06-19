<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | Sewa Mobil</title>

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
          <a class="nav-item btn btn-outline-light tombol px-4" href="{{ url('/login') }}">LOGIN</a>
        </div>
      </div>
    </div>
  </nav>
  {{-- akhir navbar --}}
  {{-- awal jumbotron --}}
  <div class="jumbotron jumbotron-fluid awal">
    <div class="container">
      <h1 class="display-4">Ingin <span>sewa mobil</span>, tapi takut dengan<br><span>kondisi mobil</span>nya? disini solusinya!</h1>
      <a class="btn btn-outline-light tombol px-4" href="{{ url('/login') }}">LOGIN</a>&nbsp;
      <a class="btn btn-light tombol px-4" href="{{ url('/daftar') }}">DAFTAR</a><br>
    </div>
  </div>
  {{-- akhir jumbotron --}}
  {{-- awal kenapa kami --}}
  <div class="container mb-5">
    <div class="row why">
      <div class="col">
        <h2>Kenapa harus memilih kami?</h2>
        <p>sebagai jasa sewa mobil</p>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="why__media">
          <img src="{{ asset('img/kondisi.png') }}" class="why__img">
        </div>
        <h4>Kondisi mobil</h4>
        <p>Kondisi mobil terawat dengan baik, layaknya mobil rumahan.</p>
      </div>
      <div class="col-md-4">
        <div class="why__media">
          <img src="{{ asset('img/simple.png') }}" class="why__img">
        </div>
        <h4>Proses yang mudah</h4>
        <p>Layaknya melakukan pembelian di toko online, sebegitu mudahnya.</p>
      </div>
      <div class="col-md-4">
        <div class="why__media">
          <img src="{{ asset('img/price.png') }}" class="why__img">
        </div>
        <h4>Harga terjangkau</h4>
        <p>Kualitas mobil terbaik, dengan harga termurah. Ya, itu adalah kami.</p>
      </div>
    </div>
  </div>
  {{-- akhir kenapa kami --}}
	{{-- awal shell --}}
  <div class="jumbotron jumbotron-fluid shell">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('img/shell.png') }}" class="img">
        </div>
        <div class="col-md-6">
          <h2 class="title">Bekerja sama dengan Shell V-Power</h2>
          <p>
            <strong>SewaMobil<sup>kng</sup></strong> bekerja sama dengan Shell dalam segi bahan bakar, dengan begitu mesin akan bekerja lebih maksimal, karena bukan hanya perihal tenaga mesin tetapi daya tahan mesin pun akan tetap terjaga dengan penggunaan <strong>Shell V-Power</strong> untuk bahan bakar.
          </p>
        </div>
      </div>
    </div>
  </div>
  {{-- akhir shell --}}
  {{-- awal dari mulai --}}
  <div class="container mulaidari">
    <div class="row mb-4">
      <div class="col">
        <h2>Dari Entry level hingga Premium class</h2>
        <p>Tak hanya mobil jepang, kami pun menyediakan beberapa mobil eropa.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('mobil/bmw-m2.png') }}">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('mobil/mini-cooper.jpeg') }}">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('mobil/nissan-gtr.png') }}">
      </div>
    </div>
  </div>
  {{-- akhir dari mulai --}}
  {{-- awal shell --}}
  <div class="jumbotron jumbotron-fluid akhir">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="title">Cari mobil?</h2>
          <p>
            <strong>SewaMobil <sup>kng</sup></strong> banyak menyediakan berbagai jenis mobil untuk disewakan.
          </p>
          <a class="btn btn-light tombol mt-3 px-4" href="{{ url('/daftar') }}">DAFTAR</a>
        </div>
      </div>
    </div>
  </div>
  {{-- akhir shell --}}
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
</body>
</html>