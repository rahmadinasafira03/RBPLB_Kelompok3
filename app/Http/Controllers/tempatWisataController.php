<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatWisata;
use Illuminate\Support\Facades\DB;

class tempatWisataController extends Controller
{

    public function index(Request $request)
    {
        //  DB::table('tempat_wisatas')->where('provinsi', $request->provinsi)->where('tipeWisata', $request->tipeWisata)->where('tipeAktivitas', $request->tipeAktivitas)->where('partnerWisata', $request->partnerWisata)->get();
        //  return view('tempat_wisata', ['tempatwisata' => $tempatwisata]);
        return view('tempat_wisata');
    }

    public function upload(){
        $tempatwisata = DB::table('tempat_wisatas') ->paginate(10);
		return view('pages.table_list',['tempatwisata' => $tempatwisata]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'gambar2' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'gambar3' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);

		// menyimpan data file yang diupload ke variabel $gambar
		$gambar = $request->file('gambar');
        $gambar2 = $request->file('gambar2');
        $gambar3 = $request->file('gambar3');

		$nama_gambar = time()."_".$gambar->getClientOriginalName();
        $nama_gambar2 = time()."_".$gambar2->getClientOriginalName();
        $nama_gambar3 = time()."_".$gambar3->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'material/img';
		$gambar->move($tujuan_upload,$nama_gambar);
        $gambar2->move($tujuan_upload,$nama_gambar2);
        $gambar3->move($tujuan_upload,$nama_gambar3);

		TempatWisata::create([
			'gambar' => $nama_gambar,
            'gambar2' => $nama_gambar2,
            'gambar3' => $nama_gambar3,
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
        return redirect('/table-list');
	}
    public function hapus(TempatWisata $idTW){

    $idTW -> delete();
    return redirect ('table-list');
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
        // menyimpan data file yang diupload ke variabel $gambar
		$gambar = $request->file('gambar');
        $gambar2 = $request->file('gambar2');
        $gambar3 = $request->file('gambar3');

		$nama_gambar = time()."_".$gambar->getClientOriginalName();
        $nama_gambar2 = time()."_".$gambar2->getClientOriginalName();
        $nama_gambar3 = time()."_".$gambar3->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'material/img';
		$gambar->move($tujuan_upload,$nama_gambar);
        $gambar2->move($tujuan_upload,$nama_gambar2);
        $gambar3->move($tujuan_upload,$nama_gambar3);

        DB::table('tempat_wisatas')->where('idTW', $request->idTW)->update([

			'gambar' => $nama_gambar,
            'gambar2' => $nama_gambar2,
            'gambar3' => $nama_gambar3,
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
        return redirect('/table-list');
    }

}
