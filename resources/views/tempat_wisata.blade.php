@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container">
            <!-- Page Content-->
            <div class="container px-4 px-lg-5">
                <!-- Heading Row-->
                <div class="row gx-4 gx-lg-5 align-items-center my-5">
                    <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-lg-5">
                        <h1 class="font-weight-light">Nama tempat wisata</h1>
                        <p>[DESKRPSI] This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                        <!-- <a class="btn btn-primary" href="#!">Share button</a> -->
                    </div>
                </div>
                <!-- Call to Action-->
                <div class="card text-white bg-secondary my-5 py-4 text-center">
                    <div class="card-body"><p class="text-white m-0">[Fun Fact]This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
                </div>
                <!-- Content Row-->
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Trait</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Official Account</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                            </div>
                            <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Akomodasi</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                            </div>
                            <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div>
                        </div>
                    </div>
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
