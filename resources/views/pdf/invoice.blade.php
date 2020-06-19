<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
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
	</style>
</head>
<body>

	<div class="jumbotron jumbotron-fluid bg-primary text-light">
	  <div class="container">
	    <h1 class="display-4">Invoice</h1>
	    <p class="lead">Sewa Mobil</p>
	  </div>
	</div>
	<br>
		<div class="row">
			<div class="col">
				<table class="table" width="100%">
				  <thead>
				    <tr>
				      <th scope="col" width="60%">Nama Mobil</th>
				      <th scope="col" width="20%" class="kanan">Lama Sewa</th>
				      <th scope="col" width="20%" class="kanan">Harga</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>{{ $nama_mobil }}</td>
				      <td class="kanan">{{ $lamasewa }}</td>
				      <td class="kanan">{{ $harga }}</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col">
				<table border="0" cellpadding="10" width="100%">
					<tbody>
						<tr>
							<td width="60%">&nbsp;</td>
							<td width="20%" class="kiri">Harga per hari</td>
							<th width="20%" class="kanan">{{ $harga }}</th>
						</tr>
						<tr>
							<td width="60%">&nbsp;</td>
							<td width="20%" class="kiri">Jumlah hari</td>
							<th width="20%" class="kanan">{{ $lamasewa }}</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table" width="100%">
				  <thead>
				    <tr>
				      <th scope="col" width="60%">Total Biaya</th>
				      <th scope="col" width="40%" class="kanan">{{ $total_biaya }}</th>
				    </tr>
				  </thead>
				</table>
			</div>
		</div>
	<footer>
		<p>
			*untuk perihal pembayaran dapat dilakukan saat pengambilan mobil
		</p>
	</footer>
</body>
</html>