@extends('dashboards.master')
@section('title', 'Admin | Sewa Mobil')
@section('mobil', 'active')
@section('heading', 'Edit data mobil '.$mobil->nama)
@section('content')
  <div class="row">
    {{-- awal table mobil --}}
    <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data mobil</h6>
      </div>
      <div class="card-body">
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            {{ $errors->first() }}
          </div>
        @endif
        <form action="{{ url('/admin/editmobil/edit') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mobil->id }}">
          <div class="form-group">
            <label for="inputNama">Nama mobil</label>
            <input type="text" class="form-control" name="nama" id="inputNama" value="{{ $mobil->nama }}">
          </div>
          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label for="inputMesin">Mesin</label>
                <input type="text" class="form-control" name="mesin" id="inputMesin" value="{{ $mobil->mesin }}">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="inputSeat">Seat</label>
                <input type="number" class="form-control" name="tempat_duduk" id="inputSeat" value="{{ $mobil->tempat_duduk }}">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="inputBagasi">Bagasi</label>
                <input type="number" class="form-control" name="bagasi" id="inputBagasi" value="{{ $mobil->bagasi }}">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="inputBensin">Bensin</label>
                <input type="text" class="form-control" name="bensin" id="inputBensin" value="{{ $mobil->bensin }}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputJmlmobil">Jumlah mobil</label>
            <input type="number" class="form-control" name="jml_mobil" id="inputJmlmobil" value="{{ $mobil->jml_mobil }}">
          </div>
          <div class="form-group">
            <label for="inputGambar">Gambar</label> <br>
            <img src="{{ asset('/mobil/'.$mobil->gambar) }}" width="240px">
            <input type="hidden" name="gambar_lama" value="{{ $mobil->gambar }}">
            <input type="file" name="gambar_baru" id="inputGambar">
          </div>
          <div class="form-group">
            <label for="inputHarga">Harga</label>
            <input type="number" class="form-control" name="harga" id="inputHarga" value="{{ $mobil->harga }}">
          </div>
        </div>
        <div class="row mr-4 ml-auto mb-4">
          <a href="{{ url('/admin/editmobil') }}" class="btn btn-light">Batal</a> &nbsp;
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
      </div>
    </div>

</div>
  {{-- akhir tambah modal --}}
@endsection