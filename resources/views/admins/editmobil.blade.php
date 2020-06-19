@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('mobil', 'active')
@section('heading', 'Edit data mobil')
@section('report')
  <a href="#" data-toggle="modal" data-target="#tambahModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah mobil</a>
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
                <th>Opsi</th>
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
                <td>
                  <a href="{{ url('/admin/editmobil/edit/'.$row->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> </a>
                  <a href="{{ url('/admin/editmobil/hapus/'.$row->id) }}" class="btn btn-danger" onclick='return confirm("Apakah anda yakin akan menghapus data {{ $row->nama }} ?")'><i class="fas fa-trash"></i> </a>
                </td>
            	</tr>
            	@endforeach
            </tbody>
          </table>
      </div>
    </div>
    </div>
    {{-- akhir table mobil --}}
	</div>

  {{-- awal tambah modal --}}
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah mobil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/admin/editmobil/tambah') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          @if(count($errors) > 0)
            <div class="alert alert-danger">
              {{ $errors->first() }}
            </div>
          @endif
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputNama">Nama mobil</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="nama" id="inputNama"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputMesin">Mesin</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="mesin" id="inputMesin"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputSeat">Seat</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="tempat_duduk" id="inputSeat"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputBagasi">Bagasi</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="bagasi" id="inputBagasi"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputBensin">Bensin</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="bensin" id="inputBensin"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputJmlmobil">Jumlah mobil</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="jml_mobil" id="inputJmlmobil"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputGambar">Gambar</label></div>
            <div class="col-md-8"><input type="file" name="gambar" id="inputGambar"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 text-right pt-2"><label for="inputHarga">Harga</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="harga" id="inputHarga"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
  {{-- akhir tambah modal --}}
@endsection