<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Mobil;
use App\Sewa;

use Session;
use PDF;

class SewaController extends Controller
{
	// untuk menampilkan view waktusewa
	public function kesatu()
	{
		return view('orders.waktusewa');
	}

	// untuk menampilkan view pilihmobil
	public function kedua(Request $req)
	{
		$mobil = Mobil::all();

		$req->session()->put('tglmulai', $req->tglmulai);
		$req->session()->put('tglsampai', $req->tglsampai);
		$req->session()->put('lamasewa', $req->lamasewa);
		$req->session()->put('nama', $req->nama);
		$req->session()->put('nohp', $req->nohp);

		$tglmulai = $req->session()->get('tglmulai');
		$tglsampai = $req->session()->get('tglsampai');
		$lamasewa = $req->session()->get('lamasewa');
		$nama = $req->session()->get('nama');
		$nohp = $req->session()->get('nohp');

		return view('orders.pilihmobil', [
			'mobil'=>$mobil,
			'tglmulai'=>$tglmulai, 
			'tglsampai'=>$tglsampai, 
			'lamasewa'=>$lamasewa, 
			'nama'=>$nama, 
			'nohp'=>$nohp
		]);
	}

	// fungsi untuk menyimpan Waktu sewa sementara
	public function ketiga($id)
	{
		$mobil = Mobil::find($id);

		$tglmulai = session()->get('tglmulai');
		$tglsampai = session()->get('tglsampai');
		$lamasewa = session()->get('lamasewa');
		$nama = session()->get('nama');
		$nohp = session()->get('nohp');

		$harga = $mobil->harga;
		$total_biaya = $harga * $lamasewa;

		return view('orders.detailpesanan', [
			'mobil'=>$mobil,
			'total_biaya'=>$total_biaya,
			'tglmulai'=>$tglmulai, 
			'tglsampai'=>$tglsampai, 
			'lamasewa'=>$lamasewa, 
			'nama'=>$nama, 
			'nohp'=>$nohp
		]);

	}

	// fungsi saat selesai order
	public function selesai(Request $request)
	{
		$id_user = auth()->user()->id;
		$nama = session()->get('nama');
		$tgl_awal = session()->get('tglmulai');
		$tgl_akhir = session()->get('tglsampai');

		$jml = $request->jml_mobil;
		$jml_baru = $jml - 1;

		$mobil = Mobil::find($request->id_mobil);

		Mobil::find($request->id_mobil)->update([
			'nama' => $mobil->nama,
			'gambar' => $mobil->gambar,
			'mesin' => $mobil->mesin,
			'tempat_duduk' => $mobil->tempat_duduk,
			'bagasi' => $mobil->bagasi,
			'bensin' => $mobil->bensin,
			'harga' => $mobil->harga,
			'jml_mobil' => $jml_baru
		]);

		Sewa::create([
			'id_user' => $id_user,
			'nama_penyewa' => $nama,
			'tgl_awal' => $tgl_awal,
			'tgl_akhir' => $tgl_akhir,
			'id_mobil' => $request->id_mobil,
			'nama_mobil' => $request->nama_mobil,
			'total_biaya' => $request->total_biaya
		]);

		session()->put('nama_mobil', $request->nama_mobil);
		session()->put('harga', $mobil->harga);
		session()->put('total_biaya', $request->total_biaya);

		return view('orders.selesai');
	}

	public function invoice()
	{
		$nama_mobil = session()->get('nama_mobil');
		$lamasewa = session()->get('lamasewa');
		$harga = session()->get('harga');
		$total_biaya = session()->get('total_biaya');

		$pdf = PDF::loadview('pdf.invoice',[
			'nama_mobil'=>$nama_mobil,
			'lamasewa'=>$lamasewa,
			'harga'=>$harga,
			'total_biaya'=>$total_biaya
		]);
		return $pdf->download('invoice.pdf');

	}
	
}
