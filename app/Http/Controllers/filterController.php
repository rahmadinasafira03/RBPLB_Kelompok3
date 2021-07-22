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

        return redirect('/tempat_wisata');
	}

    public function find_filter(Request $request){

        //var_dump ($request->input ('provinsi'));
        $data = DB::table('tempat_wisatas')
        ->where([
        ['provinsi', '=', $request->input ('provinsi')],
        ['tipeWisata', '=', $request->input ('tipeWisata')],
        ['tipeAktivitas', '=', $request->input ('tipeAktivitas')],
        ['partnerWisata', '=', $request->input ('partnerWisata')]
        ])        
        ->get();

        if ($data->isNotEmpty()){
        $rekomendasi = DB::table('tempat_wisatas')
        ->where([
        ['idTW', '!=', $data[0]->idTW]
        ])        
        ->get();
        }
        else {
            $rekomendasi = DB::table('tempat_wisatas')
        ->where([
        ['idTW', '!=', rand()]
        ])        
        ->get();
        }

        if ($data->isEmpty()) {return view('notfound', ['recommendations' => $rekomendasi]);}

        return view('tempat_wisata', ['data' => $data, 'recommendations' => $rekomendasi]);
    }

    public function display_rekomendasi(Request $request){
        $data = DB::table('tempat_wisatas')
        ->where([
        ['idTW', '=', $request->idTW],
        ])        
        ->get();

        $rekomendasi = DB::table('tempat_wisatas')
        ->where([
        ['idTW', '!=', $data[0]->idTW]
        ])        
        ->get();

        if ($data->isEmpty()) {return view('notfound', ['recommendations' => $rekomendasi]);}

        return view('tempat_wisata', ['data' => $data, 'recommendations' => $rekomendasi]);
    }
        
}
