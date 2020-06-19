@extends('dashboards.master-member')
@section('title', 'Order')
@section('tahapan')
	<div class="row mb-4">
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-warning mb-3" disabled><strong>1</strong></button><br>Waktu Sewa</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-light mb-3" disabled><strong>2</strong></button><br>Pilih Mobil</div>
		<div class="col-4 text-center text-light"><button class="btn btn-circle btn-lg btn-light mb-3" disabled><strong>3</strong></button><br>Detail Pesanan</div>
	</div>
@endsection
@section('content')
	<div class="container">
        <div class="row">
					<div class="col-md-6">
	          <div class="card mb-4">
			        <div class="card-header py-3">
			          <h6 class="m-0 font-weight-bold text-primary">Durasi Sewa</h6>
			        </div>
			        <div class="card-body">
						<form action="{{ url('member/2') }}" method="post">
									{{ csrf_field() }}
					          	<div class="form-group">
										    <label for="inputTanggal1">Mulai :</label>
										    <input type="text" name="tglmulai" class="form-control" id="inputTanggal1" autocomplete="off">
										  </div>
					          	<div class="form-group">
										    <label for="inputTanggal2">Sampai :</label>
										    <input type="text" name="tglsampai" class="form-control" id="inputTanggal2" autocomplete="off">
										  </div>
										  <div class="form-group">
										    <label for="outputDurasi">Durasi :</label>
										    <input type="text" name="" class="form-control" id="outputDurasi" disabled>
										    <input type="hidden" name="lamasewa" id="lamasewa">
										  </div>
	          		</div>
			     		</div>
					</div>
					<div class="col-md-6">
			      <div class="card mb-4">
			        <div class="card-header py-3">
			          <h6 class="m-0 font-weight-bold text-primary">Keterangan Lanjut</h6>
			        </div>
			        <div class="card-body">
				          	<div class="form-group">
									    <label for="inputNama">Nama :</label>
									    <input type="text" name="nama" class="form-control" id="inputNama">
									  </div>
				          	<div class="form-group">
									    <label for="inputNohp">No. HP :</label>
									    <input type="number" name="nohp" class="form-control" id="inputNohp">
									  </div>
	          	</div>
			      </div>
					</div>
				</div>
				<div class="d-flex justify-content-end">
	      	<button type="submit" class="btn btn-primary mr-0 ml-auto mb-5">Cari Mobil &nbsp;<i class="
	      		fas fa-angle-right"></i></button>
				</div>
				</form>
       </div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/jquery.css') }}">
<link rel="stylesheet" href="{{ asset('/css/jquery-ui-1.9.2.min.css') }}">
@endsection

@section('js')
	<script src="{{ asset('/js/jquery191.js') }}"></script>
	<script src="{{ asset('/js/jquery-ui-1.9.2.min.js') }}"></script>
	<script>
		$(function() {
			$("#inputTanggal1").datepicker({
		    minDate: 0,
		    maxDate: '+1Y+6M',
		    onSelect: function (dateStr) {
		        var min = $(this).datepicker('getDate'); // Get selected date
		        $("#inputTanggal2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
			    }
			});

			$("#inputTanggal2").datepicker({
			    minDate: '0',
			    maxDate: '+1Y+6M',
			    onSelect: function (dateStr) {
			        var max = $(this).datepicker('getDate'); // Get selected date
			        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
			        var start = $("#inputTanggal1").datepicker("getDate");
			        var end = $("#inputTanggal2").datepicker("getDate");
			        var days = (end - start) / (1000 * 60 * 60 * 24);
			        $("#outputDurasi").val(days+' hari');
			        $("#lamasewa").val(days);
			    }
			});
		});
	</script>

@endsection