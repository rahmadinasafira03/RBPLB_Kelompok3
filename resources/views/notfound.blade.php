@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container">
        <div class="row gx-5 align-items-center">
            <br>
            <div class="col-lg-12" style="text-align: center">
                <br>
                <h1 class="fw-bolder "> <strong> Oops! Tempat wisata tidak ditemukan </strong></h1>
                <h3 class="fw-bolder "> Coba ubah filter atau cek rekomendasi dibawah ini </h3>
            </div>
            <br>
        </div> <br>

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
                    <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Paling banyak dikunjungi</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div>
                    </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Sedang viral</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div>
                    </div>
            </div>
            <div class="col-lg-4 mb-5">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                <div class="card-body p-4">
                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Terbaik minggu ini</div>
                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div>
                </div>
            </div>
        </div>
</div>
@endsection
