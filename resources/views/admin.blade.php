@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('dashboard', 'active')
@section('heading', 'Dashboard')
@section('content')
	<div class="row">
		{{-- awal jumlah sewa --}}
		<div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah sewa</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_sewa }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-car fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- akhir jumlah sewa --}}
    {{-- awal total pemasukan --}}
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total pemasukan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ $total_pemasukan }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- akhir total pemasukan --}}
    {{-- awal jml admin --}}
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_admin }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- awal jml admin --}}
    {{-- awal jml member --}}
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah member</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_member }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- akhir jml member --}}
  </div>
  <div class="row">
    {{-- awal table sewa --}}
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Sewa</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead align="center">
                <tr>
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
    {{-- awal jml mobil --}}
    <div class="col-md-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead align="center">
                <tr>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mobil as $mbl)
                <tr>
                  <td align="center"><img src="{{ asset('/mobil/'.$mbl->gambar) }}" width="70px"></td>
                  <td>{{ $mbl->nama }}</td>
                  <td align="center">{{ $mbl->jml_mobil }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {{-- akhir jml mobil --}}
	</div>
@endsection