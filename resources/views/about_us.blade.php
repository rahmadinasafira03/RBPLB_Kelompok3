@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container">
    <!-- About section one-->
    <section class="bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <br>
                <div class="col-lg-12" style="text-align: center">
                    <br>
                    <h2 class="fw-bolder text-primary">Indolidays!</h2>
                    <p class="lead fw-normal text-muted mb-0">Indolidays! merupakan website yang membantu para wisatawan domestik maupun mancanegara dalam memilih
                        rekomendasi tempat wisata yang berada di Indonesia sesuai dengan filter yang dipilih oleh visitor
                        sehingga dapat memudahkan para wisatawan untuk bepergian. Selain itu, dengan adanya website
                        ini, kita juga dapat memperkenalkan tempat wisata di Indonesia agar lebih dikenal oleh para
                        wisatawan.
                        </p>
                </div>
            </div>
        </div>


    <!-- Team members section-->
    <section class="bg-light">
        <div class="container px-5 ">
            <div class="text-center">
                <h2 class="fw-bolder text-primary">Kelompok 3 </h2>
                <p class="lead fw-normal text-muted mb-5">RBPL B</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('material') }}/img/jess.jpeg" alt="..." />
                        <h5 class="fw-bolder text-info">Jessica Patricia Halim  </h5>
                        <div class="fst-italic text-muted">05211940000004</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('material') }}/img/aura.jpeg" alt="..." />
                        <h5 class="fw-bolder text-info">Aura Febriyanti </h5>
                        <div class="fst-italic text-muted">05211940000020 </div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center ">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('material') }}/img/aby.jpg" alt="..." />
                        <h5 class="fw-bolder text-info">Ganendra Aby B. </h5>
                        <div class="fst-italic text-muted">05211940000091 </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('material') }}/img/kean.jpeg" alt="..." />
                        <h5 class="fw-bolder text-info">Kennard Mahib B.</h5>
                        <div class="fst-italic text-muted">05211940000101</div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('material') }}/img/dina.jpg" alt="..." />
                        <h5 class="fw-bolder text-info">Rahmadina Safira</h5>
                        <div class="fst-italic text-muted">05211940000109</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
