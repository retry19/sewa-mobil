@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('admin', 'active')
@section('heading', 'Data admin')
@section('report')
  <a href="#" data-toggle="modal" data-target="#tambahAdmin" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah admin</a>
@endsection
@section('content')
  <div class="row">
    {{-- awal table admin --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data admin</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead align="center">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
            	@foreach($admin as $row)
            	<tr>
                <td align="center">{{ $i++ }}</td>
                <td>{{ $row->name }}</td>
            		<td>{{ $row->email }}</td>
                <td align="center"><a href="{{ url('/admin/dataadmin/'.$row->id.'/hapus') }}" class="btn btn-danger" onclick='return confirm("Apakah anda yakin akan menghapus data {{ $row->name }} ?")'><i class="fas fa-trash"></i></a></td>
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

  {{-- awal tambah modal --}}
  <div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/admin/dataadmin/tambah') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-md-3 text-right pt-2"><label for="inputNama">Nama</label></div>
            <div class="col-md-9"><input type="text" class="form-control" name="nama" id="inputNama"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3 text-right pt-2"><label for="inputEmail">Email</label></div>
            <div class="col-md-9"><input type="email" class="form-control" name="email" id="inputEmail"></div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3 text-right pt-2"><label for="inputPassword">Password</label></div>
            <div class="col-md-9"><input type="password" class="form-control" name="password" id="inputPassword"></div>
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