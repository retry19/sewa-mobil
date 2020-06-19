@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('mobil', 'active')
@section('heading', 'Data mobil')
@section('report')
  <a href="{{ url('/admin/datamobil/download') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak pdf</a>
@endsection
@section('content')
  <div class="row">
    {{-- awal table mobil --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data mobil</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
    </div>
    </div>
    {{-- akhir table sewa --}}
	</div>
@endsection