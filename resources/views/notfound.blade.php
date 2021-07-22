@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
@php
   $lainnya = $recommendations->random(3)->shuffle();
@endphp
<div class="container">
        <div class="row gx-5 align-items-center">
            <br>
            <div class="col-lg-12" style="text-align: center">
                <br>
                <h1 class="fw-bolder "> <strong> Oops! Tempat wisata tidak ditemukan </strong></h1>
                <h3 class="fw-bolder "> Coba ubah filter atau cek rekomendasi di bawah ini!</h3>
            </div>
            <div class="col-lg-12 text-center">
        <a href="{{ route('filter') }}" class="nav-link">
        <button class="btn btn-primary btn-lg">
            Pilih filter lagi, yuk! &nbsp; &nbsp; <i class="material-icons" style="font-size:30px;">fast_rewind</i>
        </button></a>
    </div>
        </div> 
        <br>

        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Rekomendasi Lain</h2>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('material/img/'.$lainnya[0]->gambar) }}" alt="..." style="width: 100%; height: 26.82%;"/>
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Paling banyak dikunjungi</div>
                        <a class="text-decoration-none link-dark stretched-link"><h5 class="card-title mb-3">{{$lainnya[0]->nama}}</h5></a>
                        <p class="card-text mb-0">{{$lainnya[0]->funFact}}</p>
                    </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{route('display_rekomendasi', $lainnya[0]->idTW)}}">Selengkapnya</a></div>
                    </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('material/img/'.$lainnya[1]->gambar) }}" alt="..." style="width: 100%; height: 26.82%;"/>
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Sedang viral</div>
                        <a class="text-decoration-none link-dark stretched-link"><h5 class="card-title mb-3">{{$lainnya[1]->nama}}</h5></a>
                        <p class="card-text mb-0">{{$lainnya[1]->funFact}}</p>
                    </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{route('display_rekomendasi', $lainnya[1]->idTW)}}">Selengkapnya</a></div>
                    </div>
            </div>
            <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="{{ asset('material/img/'.$lainnya[2]->gambar) }}" alt="..." style="width: 100%; height: 26.82%;"/>
                <div class="card-body p-4">
                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Terbaik minggu ini</div>
                    <a class="text-decoration-none link-dark stretched-link" ><h5 class="card-title mb-3">{{$lainnya[2]->nama}}</h5></a>
                    <p class="card-text mb-0">{{$lainnya[2]->funFact}}</p>
                </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{route('display_rekomendasi', $lainnya[2]->idTW)}}">Selengkapnya</a></div>
                </div>
            </div>
        </div>
</div>
@endsection
