<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
	{{-- <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet"> --}}
	<style>
		.kanan {
			text-align: right;
		}
		.kiri {
			text-align: left;
		}
		footer {
			margin-top: 240px;
		}
		.display-4 {
			font-family: Arial;
			font-size: 64px;
      color: white;
		}
	</style>
</head>
<body>

	<div class="jumbotron jumbotron-fluid bg-primary text-light">
	  <div class="container">
	    <span class="display-4">Sewa Mobil<sup>kng</sup></span>
	    <p class="lead">Data Sewa Mobil</p>
	  </div>
	</div>
	<br>
		<div class="row">
			<div class="col">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead align="center">
              <tr>
                <th>Nama Mobil</th>
                <th>Gambar</th>
                <th>Mesin</th>
                <th>Seat</th>
                <th>Bagasi</th>
                <th>Bensin</th>
                <th>Jumlah</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
            	@foreach($mobil as $row)
            	<tr align="center">
                <td align="left">{{ $row->nama }}</td>
            		<td><img src="{{ asset('mobil/'.$row->gambar) }}" width="120px"></td>
            		<td>{{ $row->mesin }}</td>
            		<td>{{ $row->tempat_duduk }}</td>
            		<td>{{ $row->bagasi }}</td>
                <td>{{ $row->bensin }}</td>
                <td>{{ $row->jml_mobil }}</td>
            		<td align="right">{{ $row->harga }}</td>
            	</tr>
            	@endforeach
            </tbody>
        </table>
			</div>
		</div>
</body>
</html>