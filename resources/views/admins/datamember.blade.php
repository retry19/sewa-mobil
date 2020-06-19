@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('member', 'active')
@section('heading', 'Data member')
@section('content')
  <div class="row">
    {{-- awal table admin --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data member</h6>
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
            	@foreach($member as $row)
            	<tr>
                <td align="center">{{ $i++ }}</td>
                <td>{{ $row->name }}</td>
            		<td>{{ $row->email }}</td>
                <td align="center"><a href="{{ url('/admin/datamember/'.$row->id.'/hapus') }}" class="btn btn-danger" onclick='return confirm("Apakah anda yakin akan menghapus data {{ $row->name }} ?")'><i class="fas fa-trash"></i></a></td>
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