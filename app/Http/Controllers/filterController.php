<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filter;
use Illuminate\Support\Facades\DB;

class filterController extends Controller
{
    public function index()
    {
        return view('filter');
    }

    public function proses_upload(Request $request){

		Filter::create([
            'provinsi' => $request-> provinsi,
            'tipeWisata' => $request-> tipeWisata,
            'tipeAktivitas' => $request-> tipeAktivitas,
            'partnerWisata' => $request->  partnerWisata,
		]);

        //return view('pages.table_list');
        return redirect('/tempat_wisata');
	}

    public function find_filter($provinsi, $tipeWisata, $tipeAktivitas, $partnerWisata){
//        $tempat = DB::select('select * from users where (provinsi, tipeWisata, tipeAktivitas, partnerWisata) values(?, ?, ?, ?)',
//        [$provinsi, $tipeWisata, $tipeAktivitas, $partnerWisata]);
//        return $tempat;

        $getFilter = DB::table('tempat_wisatas')
        ->where('provinsi', '=', $provinsi)
        ->where('tipeWisata', '=', $tipeWisata)
        ->where('tipeAktivitas', '=', $tipeAktivitas)
        ->where('partnerWisata', '=', $partnerWisata)        
        ->get();
        //return $users;
        return view('tempat_wisata', ['getFilter' => $getFilter]);

    }

    /*public function display_filter(Request $request)
    {

                  // mengambil data pegawai berdasarkan id yang dipilih
        $request = DB::table('tempat_wisatas')->where('pegawai_id',$id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view ('read',['pegawai' => $pegawai, 'absen' => $absen]);



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
    }*/
}
