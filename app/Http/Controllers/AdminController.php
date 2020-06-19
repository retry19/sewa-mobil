<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Mobil;
use App\Sewa;
use App\User;

use PDF;
use File;

class AdminController extends Controller
{
	// Memanggil view Dashboard Admin
	public function index()
	{
		$sewa = Sewa::all();
		$mobil = Mobil::all();
		$jml_sewa = count($sewa);

		$jml_member = User::where('role_id', '0')->count();
		$jml_admin = User::where('role_id', '1')->count();

		$total_pemasukan = Sewa::sum('total_biaya');

		return view('admin', [
			'sewa'=>$sewa,
			'mobil'=>$mobil,
			'jml_sewa'=>$jml_sewa,
			'total_pemasukan'=>$total_pemasukan,
			'jml_admin'=>$jml_admin,
			'jml_member'=>$jml_member
		]);
	}

	// url('/datasewa')
	public function datasewa()
	{
		$sewa = Sewa::all();
		return view('admins.datasewa', ['sewa'=>$sewa]);
	}

	// url('/datasewa/download')
	public function datasewapdf()
	{
		$sewa = Sewa::all();
		$pdf = PDF::loadview('pdf.tabelsewa', ['sewa'=>$sewa]);

		return $pdf->download('tabel-daftar-sewa.pdf');
	}

	// url('/pengembalian')
	public function pengembalian()
	{
		$sewa = Sewa::all();
		return view('admins.pengembalian', ['sewa'=>$sewa]);
	}

	// url('/pengembalian/{id}')
	public function pengembalianid($id)
	{
		$data = Sewa::where('id', $id)->first();
		$data_mobil = Mobil::where('id', $data->id_mobil)->first();
		$jml_mobil = $data_mobil->jml_mobil;
		$jml_baru = $jml_mobil + 1;

		Mobil::find($data->id_mobil)->update([
			'jml_mobil'=>$jml_baru,
		]);

		Sewa::find($id)->delete();
		return redirect('admin/pengembalian');
	}

	// url('/datamobil')
	public function datamobil()
	{
		$mobil = Mobil::all();
		return view('admins.datamobil', ['mobil'=>$mobil]);
	}

	// url('/datamobil/download')
	public function datamobilpdf()
	{
		$mobil = Mobil::all();
		$pdf = PDF::loadview('pdf.tabelmobil', ['mobil'=>$mobil]);

		return $pdf->download('tabel-daftar-mobil.pdf');
	}

	// url('/editmobil')
	public function editmobil()
	{
		$mobil = Mobil::all();

		return view('admins.editmobil', ['mobil'=>$mobil]);
	}

	// url('/editmobil/tambah')
	public function tambahmobil(Request $req)
	{
		$this->validate($req, [
			'nama'=>'required',
			'mesin'=>'required',
			'tempat_duduk'=>'required',
			'bagasi'=>'required',
			'bensin'=>'required',
			'jml_mobil'=>'required',
			'gambar'=>'required|file|image|mimes:jpeg,png,jpg',
			'harga'=>'required'
		]);

		$gambar = $req->file('gambar');
  	$gambar_name = time()."_".$req->nama.".".$gambar->getClientOriginalExtension();

  	$gambar_temp = 'mobil';
  	$gambar->move($gambar_temp, $gambar_name);

  	Mobil::create([
  		'nama'=>$req->nama,
  		'gambar'=>$gambar_name,
  		'mesin'=>$req->mesin,
  		'tempat_duduk'=>$req->tempat_duduk,
  		'bagasi'=>$req->bagasi,
  		'bensin'=>$req->bensin,
  		'harga'=>$req->harga,
  		'jml_mobil'=>$req->jml_mobil 
  	]);

  	return redirect('admin/editmobil');
	}

	// url('/editmobil/edit/{id}')
	public function editdatamobil($id)
	{
		$mobil = Mobil::find($id);
		
		return view('admins.editdatamobil', ['mobil'=>$mobil]);
	}

	// url('/editmobil/edit')
	public function savemobil(Request $req)	
	{
		$this->validate($req, [
			'nama'=>'required',
			'mesin'=>'required',
			'tempat_duduk'=>'required',
			'bagasi'=>'required',
			'bensin'=>'required',
			'jml_mobil'=>'required',
			'gambar'=>'file|image|mimes:jpeg,png,jpg',
			'harga'=>'required'
		]);

		if ($req->file('gambar_baru') == null) {
			$gambar_name = $req->gambar_lama;
		}
		else {
			$gambar = $req->file('gambar_baru');
  		$gambar_name = time()."_".$req->nama.".".$gambar->getClientOriginalExtension();
	  	$gambar_temp = 'mobil';
	  	$gambar->move($gambar_temp, $gambar_name);
		}


  	Mobil::find($req->id)->update([
  		'nama'=>$req->nama,
  		'gambar'=>$gambar_name,
  		'mesin'=>$req->mesin,
  		'tempat_duduk'=>$req->tempat_duduk,
  		'bagasi'=>$req->bagasi,
  		'bensin'=>$req->bensin,
  		'harga'=>$req->harga,
  		'jml_mobil'=>$req->jml_mobil 
  	]);

  	return redirect('admin/editmobil');
	}

	// url('/editmobil/hapus/{id}')
	public function hapusmobil($id)
	{
		$data = Mobil::where('id', $id)->first();
		File::delete('mobil/'.$data->gambar);

		Mobil::find($id)->delete();

		return redirect('admin/editmobil');
	}

	// url('/dataadmin')
	public function dataadmin()
	{
		$admin = User::where('role_id', '1')->get();
		$i = 1;

		return view('admins.dataadmin', ['admin'=>$admin, 'i'=>$i]);
	}

	public function tambahadmin(Request $req)
	{
		$password = bcrypt($req->password);
		User::create([
			'name'=>$req->nama,
			'email'=>$req->email,
			'password'=>$password,
			'role_id'=>'1'
		]);

		return redirect('admin/dataadmin');
	}

	public function hapusadmin($id)
	{
		User::find($id)->delete();

		return redirect('admin/dataadmin');
	}

	// url('/datamember')
	public function datamember()
	{
		$member = User::where('role_id', '0')->get();
		$i = 1;

		return view('admins.datamember', ['member'=>$member, 'i'=>$i]);
	}

	public function hapusmember($id)
	{
		User::find($id)->delete();

		return redirect('admin/datamember');
	}
}
