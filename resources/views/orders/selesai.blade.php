@extends('dashboards.master-member')
@section('title', 'Order')
@section('tahapan')
	<h1 class="display-4" style="margin-top: 60px;">Selamat!</h1>
@endsection
@section('content')
	<div class="jumbotron jumbotron-fluid" style="background-color: white; height: 300px;">
	  <div class="container">
	    <p class="lead">
				Sewa mobil telah berhasil anda lakukan, untuk download invoice <a href="{{ url('/member/order/invoice') }}">klik disini</a>. Dan untuk perihal pembayaran dapat dilakukan saat pengambilan mobil, serta diwajibkan membawa fotocopy KTP/SIM terimakasih.
	    </p>
	  </div>
	</div>
@endsection