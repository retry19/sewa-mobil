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
              <th rowspan="2">ID User</th>
              <th rowspan="2">Nama Penyewa</th>
              <th colspan="2">Tanggal sewa</th>
              <th rowspan="2">Nama Mobil</th>
              <th rowspan="2">Total biaya</th>
            </tr>
            <tr>
            	<th>Mulai</th>
            	<th>Sampai</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($sewa as $row)
          	<tr>
              <td align="center">{{ $row->id_user }}</td>
          		<td>{{ $row->nama_penyewa }}</td>
          		<td>{{ $row->tgl_awal }}</td>
          		<td>{{ $row->tgl_akhir }}</td>
          		<td>{{ $row->nama_mobil }}</td>
          		<td align="right">{{ $row->total_biaya }}</td>
          	</tr>
          	@endforeach
          </tbody>
        </table>
			</div>
		</div>
</body>
</html>