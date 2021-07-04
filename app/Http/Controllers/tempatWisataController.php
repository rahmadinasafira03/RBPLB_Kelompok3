<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use Illuminate\Support\Facades\DB;

class tempatWisataController extends Controller
{

    public function index()
    {
    //
    }

    public function upload(){
        $tempatwisata = DB::table('tempat_wisatas') ->paginate(10);
		// $tempatwisata = TempatWisata::all();
		return view('pages.table_list',['tempatwisata' => $tempatwisata]);
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

        //return view('pages.table_list');
        return redirect('/table_list');
	}
    public function hapus(TempatWisata $idTW){

    $idTW -> delete();
    return redirect ('table_list');

    }

    public function displayEditTable($idTW)
    {
        //
        $tempatwisata = DB::table('tempat_wisatas')->where ('idTW', $idTW)->get();
        //$tempatwisata = \App\Models\TempatWisata::find($idTW)->get();
        return view('pages.editTW', ['tempatwisata' => $tempatwisata]);

    }

    public function edit(Request $request)
    {
        // $request->validate([
        //     'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		// 	// 'keterangan' => 'required',
        //     // 'nama' => 'required',
        //     // 'deskripsi' => 'required',
        //     // 'trait' => 'required',
        //     // 'funFact' => 'required',
        //     // 'officialAcc' => 'required',
        //     // 'akomodasi' => 'required',
        //     // 'provinsi' => 'required',
        //     // 'tipeWisata' => 'required',
        //     // 'tipeAktivitas' => 'required',
        //     // 'partnerWisata' => 'required'
        // ]);

        // $idTW->update($request->all());

        // return redirect('/table_list');

		// menyimpan data file yang diupload ke variabel $gambar
		$gambar = $request->file('gambar');

		$nama_gambar = time()."_".$gambar->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'material/img';
		$gambar->move($tujuan_upload,$nama_gambar);

        DB::table('tempat_wisatas')->where('idTW', $request->idTW)->update([

			'gambar' => $nama_gambar,
			'deskripsi' => $request-> deskripsi,
            'nama' => $request-> nama,
            'trait' => $request-> trait,
            'funFact' => $request-> funFact,
            'officialAcc' => $request-> officialAcc,
            'akomodasi' => $request-> akomodasi,
            'provinsi' => $request-> provinsi,
            'tipeWisata' => $request-> tipeWisata,
            'tipeAktivitas' => $request-> tipeAktivitas,
            'partnerWisata' => $request->  partnerWisata,
		]);

        //return view('pages.table_list');
        return redirect('/table_list');
    }

}
