@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('sewa', 'active')
@section('heading', 'Data Sewa')
@section('content')
  <div class="row">
    <div class="col">
      <p>Apabila mobil telah dikembalikan klik tombol "Telah dikembalikan", pada kolom Konfirmasi.</p>
    </div>
  </div>
  <div class="row">
    {{-- awal table sewa --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Pengembalian</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead align="center">
              <tr>
                <th rowspan="2">ID User</th>
                <th rowspan="2">Nama Penyewa</th>
                <th colspan="2">Tanggal sewa</th>
                <th rowspan="2">ID Mobil</th>
                <th rowspan="2">Nama Mobil</th>
                <th rowspan="2">Konfirmasi</th>
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
                <td align="center">{{ $row->id_mobil }}</td>
            		<td>{{ $row->nama_mobil }}</td>
            		<td align="center"><a href="{{ url('/admin/pengembalian/'.$row->id) }}" class="btn btn-primary" onclick='return confirm("Apakah anda yakin {{ $row->nama_penyewa }} telah mengembalikan mobil?")'>Telah dikembalikan</a></td>
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