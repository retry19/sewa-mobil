@extends('dashboards.master-member')
@section('title', 'Order')
@section('tahapan')
	<div class="row mb-4">
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>1</strong></button><br>Waktu Sewa</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>2</strong></button><br>Pilih Mobil</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>3</strong></button><br>Detail Pesanan</div>
	</div>
@endsection
@section('content')
	<div class="container">
  	<div class="row">
			<div class="col-md-4">
				<div class="card border-left-primary mx-auto mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h2 class="card-title">Detail Order</h2>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<table cellpadding="7">
									<tr>
              			<td>Email</td><td> : {{ auth()->user()->email }}</td>
              		</tr>
              		<tr><td> </td><td> </td></tr>
									<tr>
              			<td>Nama</td><td> : {{ $nama }}</td>
              		</tr>
              		<tr>
              			<td>No. HP</td><td> : {{ $nohp }}</td>
              		</tr>
              		<tr>
              			<td>Mulai</td><td> : {{ $tglmulai }}</td>
              		</tr>
              		<tr>
              			<td>Sampai</td><td> : {{ $tglsampai }}</td>
              		</tr>
              		<tr>
              			<td>Durasi Sewa</td><td> : {{ $lamasewa }} hari</td>
              		</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<div class="col-md-8">
				<div class="card border-left-primary mx-auto mb-3" style="max-height: 197;">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<img src="{{ url('mobil/'.$mobil->gambar) }}" class="card-img"></div>
							<div class="col-md-5 px-3">
								<h3 class="card-title">{{ $mobil->nama }}</h3>
								<p class="card-text">
									<table cellpadding="10">
										<tr>
											<td width="130"><i class="fas fa-cog"></i> {{ $mobil->mesin }}</td>
											<td><i class="fas fa-suitcase"></i> {{ $mobil->bagasi }} Bags</td>
										</tr>
										<tr>
											<td><i class="fas fa-user"></i> {{ $mobil->tempat_duduk }} Seats</td>
											<td><i class="fas fa-gas-pump"></i> {{ $mobil->bensin }}</td>
										</tr>
									</table>
								</p>
							</div>
							<div class="col-md-3 border-left-light text-right">
								<h3 class="card-title">Rp. {{ $mobil->harga }}</h3>
								<p class="card-text">
									<small class="text-muted">*per hari</small><br><br><br>
							</div>
						</div>
					</div>
				</div>

				<div class="card border-left-primary mx-auto mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-md-8">
								<h4 class="card-title">Total biaya</h4>
							</div>
							<div class="col-md-4 text-right">
								<h3 class="card-title">Rp. {{ $total_biaya }}</h3>
							</div>
						</div>
						<div class="row">
							<div class="col text-right">
								<p class="card-text">
									<small class="text-muted">*untuk pembayaran dilakukan ditempat pengambilan mobil</small>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
  	</div>
  				
		<div class="d-flex justify-content-end">
			<form action="{{ url('/member/order') }}" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id_mobil" value="{{ $mobil->id }}">
				<input type="hidden" name="nama_mobil" value="{{ $mobil->nama }}">
				<input type="hidden" name="jml_mobil" value="{{ $mobil->jml_mobil }}">
				<input type="hidden" name="total_biaya" value="{{ $total_biaya }}">	
    		<button type="submit" class="btn btn-primary mr-0 ml-auto mb-5">Selesai &nbsp;<i class="
    		fas fa-angle-right"></i></button>
    	</form>
		</div>
	</div>
@endsection