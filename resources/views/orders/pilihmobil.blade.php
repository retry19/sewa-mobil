@extends('dashboards.master-member')
@section('title', 'Order')
@section('tahapan')
	<div class="row mb-4">
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>1</strong></button><br>Waktu Sewa</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>2</strong></button><br>Pilih Mobil</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-light mb-3" disabled><strong>3</strong></button><br>Detail Pesanan</div>
	</div>
@endsection
@section('content')
	<div class="container">
  	<div class="row">
			<div class="col-md-4">
				<div class="card mb-4">
          <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Detail Order</h6>
          </a>
          <div class="collapse show" id="collapseCardExample">
            <div class="card-body">
            	<table cellpadding="5">
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
			
			<div class="col-md-8">
			@foreach($mobil as $row)
				<div class="card border-left-primary mx-auto mb-3" style="max-height: 197;">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<img src="{{ url('mobil/'.$row->gambar) }}" class="card-img"></div>
							<div class="col-md-5 px-3">
								<h3 class="card-title">{{ $row->nama }}</h3>
								<p class="card-text">
									<table cellpadding="10">
										<tr>
											<td width="130"><i class="fas fa-cog"></i> {{ $row->mesin }}</td>
											<td><i class="fas fa-suitcase"></i> {{ $row->bagasi }} Bags</td>
										</tr>
										<tr>
											<td><i class="fas fa-user"></i> {{ $row->tempat_duduk }} Seats</td>
											<td><i class="fas fa-gas-pump"></i> {{ $row->bensin }}</td>
										</tr>
									</table>
								</p>
							</div>
							<div class="col-md-3 border-left-light text-right">
								<h3 class="card-title">Rp. {{ $row->harga }}</h3>
								<p class="card-text">
									<small class="text-muted">*per hari</small><br><br><br>
									<a href="{{ url('member/3/'.$row->id) }}" class="btn btn-primary">Pilih</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
  	</div>
  				
		<div class="d-flex justify-content-end">
    	<a href="{{ URL::previous() }}" class="btn btn-light ml-0 mr-auto mb-5"><i class="
    		fas fa-angle-left"></i>&nbsp; Waktu Sewa</a>
		</div>
		</form>
	</div>
@endsection