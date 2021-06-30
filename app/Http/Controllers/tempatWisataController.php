<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;

class tempatWisataController extends Controller
{
    public function upload(){
		$tempatwisata = TempatWisata::get();
		return view('pages.createTW',['tempat_wisatas' => $tempatwisata]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			// 'keterangan' => 'required',
            // 'nama' => 'required',
            // 'deskripsi' => 'required',
            // 'trait' => 'required',
            // 'funFact' => 'required',
            // 'officialAcc' => 'required',
            // 'akomodasi' => 'required',
            // 'provinsi' => 'required',
            // 'tipeWisata' => 'required',
            // 'tipeAktivitas' => 'required',
            // 'partnerWisata' => 'required'


		]);

		// menyimpan data file yang diupload ke variabel $gambar
		$gambar = $request->file('gambar');

		$nama_gambar = time()."_".$gambar->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'material/img';
		$gambar->move($tujuan_upload,$nama_gambar);

		TempatWisata::create([
			'gambar' => $nama_gambar,
			'keterangan' => $request-> keterangan,
            'nama' => $request-> nama,
            'deskripsi' => $request-> deskripsi,
            'trait' => $request-> trait,
            'funFact' => $request-> funFact,
            'officialAcc' => $request-> officialAcc,
            'akomodasi' => $request-> akomodasi,
            'provinsi' => $request-> provinsi,
            'tipeWisata' => $request-> tipeWisata,
            'tipeAktivitas' => $request-> tipeAktivitas,
            'partnerWisata' => $request->  partnerWisata,
		]);

		return redirect()->back();
	}
}