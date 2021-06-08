<?php

namespace App\Http\Controllers;



use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $products = \App\Models\Product::all();
        return view('viewproducts', ['allProducts' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        //
        return view('createproduct');
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
        \App\Models\Product::create([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'trait' => $request->get('trait'),
            'funFact' => $request->get('funFact'),
            'officialAcc' => $request->get('officialAcc'),
            'akomodasi' => $request->get('akomodasi'),
            'gambar' => $request->get('gambar'),
            'provinsi' => $request->get('provinsi'),
            'trait' => $request->get('trait'),
            'tipeWisata' => $request->get('tipeWisata'),
            'tipeAktivitas' => $request->get('tipeAktivitas'),
            'partnerWisata' => $request->get('partnerWisata'),
          ]);

          return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'trait' => 'required',
            'funFact' => 'required',
            'officialAcc' => 'required',
            'akomodasi' => 'required',
            'gambar' => 'required',
            'provinsi' => 'required',
            'trait' => 'required',
            'tipeWisata' => 'required',
            'tipeAktivitas' => 'required',
            'partnerWisata' => 'required',
        ]);
        $product ->update($request->all());

        return redirect()->route('viewproducts')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product ->delete();

        return redirect()->route('viewproducts')
            ->with('success', 'Product deleted successfully');
    }
}
