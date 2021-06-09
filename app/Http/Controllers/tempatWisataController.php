<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tempatWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tempat_wisatas = \App\Models\TempatWisata::all();

        return view('tempat_wisata', ['allTempatWisata' => $tempat_wisatas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('daftarTW');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \App\Models\TempatWisata::create([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'trait' => $request->get('trait'),
            'funFact' => $request->get('funFact'),
            'officialAcc' => $request->get('officialAcc'),
            'akomodasi' => $request->get('akomodasi'),
            'gambar' => $request->get('gambar'),
            'provinsi' => $request->get('provinsi'),
            'tipeWisata' => $request->get('tipeWisata'),
            'tipeAktivitas' => $request->get('tipeAktivitas'),
            'partnerWisata' => $request->get('partnerWisata'),
          ]);

          return redirect('/daftarTW');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
