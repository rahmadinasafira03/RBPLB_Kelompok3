@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container">
@php
	$index = rand(0, $data->count() - 1)
@endphp
            <!-- Page Content-->
            <div class="container px-4 px-lg-5">
                <!-- Heading Row-->
                <div class="row gx-4 gx-lg-5 align-items-center my-5">
                    <div class="col-lg-7">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('material/img/'.$data[$index]->gambar) }}" alt="First slide" height="300px">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('material/img/'.$data[$index]->gambar2) }}" alt="Second slide" height="300px">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('material/img/'.$data[$index]->gambar3) }}" alt="Third slide" height="300px">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>




                    </div>
                    <div class="col-lg-5">
                        <h1 class="font-weight-light">{{$data[$index]->nama}}</h1>
                        <p>{{$data[$index]->deskripsi}}</p>
                        <!-- <a class="btn btn-primary" href="#!">Share button</a> -->
                    </div>
                </div>
                <!-- Call to Action-->
                <div class="card text-white bg-secondary my-5 py-4 text-center">
                    <div class="card-body"><h4 class="text-white m-0">{{$data[$index]->funFact}}</h4></div>
                </div>
                <!-- Content Row-->
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Trait</h2>
                                <p class="card-text">{{$data[$index]->trait}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Official Account</h2>
                                <p class="card-text">{{$data[$index]->officialAcc}}</p>
                            </div>
                            <!-- <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div> -->
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title">Akomodasi</h2>
                                <p class="card-text">{{$data[$index]->akomodasi}}</p>
                            </div>
                            <!-- <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Selengkapnya</a></div> -->
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
