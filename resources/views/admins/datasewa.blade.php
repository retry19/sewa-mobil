@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('sewa', 'active')
@section('heading', 'Data Sewa')
@section('report')
  <a href="{{ url('/admin/datasewa/download') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak pdf</a>
@endsection
@section('content')
  <div class="row">
    {{-- awal table sewa --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Sewa</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
    </div>
    </div>
    {{-- akhir table sewa --}}
	</div>
@endsection