@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">
        <!-- <form class="form" method="POST" action="{{ route('login') }}">
          @csrf -->

          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title"><strong>{{ __('Pilih Filter') }}</strong></h4>
            </div>
            <div class="card-body" style="">
                <div class="form-group">

                    <div class="dropdown" >
                      <button class="btn btn-default btn-round btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        Provinsi
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="aceh">Aceh</a>
                        <a class="dropdown-item" href="sumut">Sumatera Utara</a>
                        <a class="dropdown-item" href="sumbar">Sumatera Barat</a>
                        <a class="dropdown-item" href="riau">Riau</a>
                        <a class="dropdown-item" href="kepri">Kepulauan Riau</a>
                        <a class="dropdown-item" href="jambi">Jambi</a>
                        <a class="dropdown-item" href="bengkulu">Bengkulu</a>
                        <a class="dropdown-item" href="sumsel">Sumatera Selatan</a>
                        <a class="dropdown-item" href="babel">Bangka Belitung</a>
                        <a class="dropdown-item" href="lampung">Lampung</a>
                        <a class="dropdown-item" href="banten">Banten</a>
                        <a class="dropdown-item" href="dki">DKI Jakarta</a>
                        <a class="dropdown-item" href="jabar">Jawa Barat</a>
                        <a class="dropdown-item" href="jateng">Jawa Tengah</a>
                        <a class="dropdown-item" href="diy">DI Yogyakarta</a>
                        <a class="dropdown-item" href="jatim">Jawa Timur</a>
                        <a class="dropdown-item" href="bali">Bali</a>
                        <a class="dropdown-item" href="ntb">Nusa Tenggara Barat</a>
                        <a class="dropdown-item" href="ntt">Nusa Tenggara Timur</a>
                        <a class="dropdown-item" href="kalbar">Kalimantan Barat</a>
                        <a class="dropdown-item" href="kalteng">Kalimantan Tengah</a>
                        <a class="dropdown-item" href="kalsel">Kalimantan Selatan</a>
                        <a class="dropdown-item" href="kaltim">Kalimantan Timur</a>
                        <a class="dropdown-item" href="kaltara">Kalimantan Utara</a>
                        <a class="dropdown-item" href="sulsel">Sulawesi Selatan</a>
                        <a class="dropdown-item" href="sulbar">Sulawesi Barat</a>
                        <a class="dropdown-item" href="sulteng">Sulawesi Tengah</a>
                        <a class="dropdown-item" href="sultra">Sulawesi Tenggara</a>
                        <a class="dropdown-item" href="sulut">Sulawesi Utara</a>
                        <a class="dropdown-item" href="gorontalo">Gorontalo</a>
                        <a class="dropdown-item" href="maluku">Maluku</a>
                        <a class="dropdown-item" href="malut">Maluku Utara</a>
                        <a class="dropdown-item" href="pabar">Papua Barat</a>
                        <a class="dropdown-item" href="papua">Papua</a>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text-input"><p class="text-primary">Tipe Wisata </p></label><br>
                    <div class="form-check form-check-inline col-3" >
                      <label class="form-check-label" >
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Pantai
                        <span class="form-check-sign" >
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3" >
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> Gunung
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" > Desa
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" > Hutan
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5" > Kota
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6" > Kebun
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7" > Danau
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8" > Air terjun
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9" > Sejarah
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input"><p class="text-primary">Tipe Aktivitas </p></label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1B"> Berbelanja
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2B"> Kuliner
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3B" > Pesta
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4B" > Bersantai
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5B" > Tamasya
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6B" > Menantang
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input"><p class="text-primary">Partner Wisata</p></label> <br>
                    <div class="form-check form-check-radio form-check-inline col-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1c">
                            Keluarga
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <div class="form-check form-check-radio form-check-inline col-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2c" >
                            Teman
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <div class="form-check form-check-radio form-check-inline col-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option3c">
                            Partner
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-13 text-center">
                    <a href="{{ route('tempat_wisata') }}" class="nav-link">
                    <button class="btn btn-primary">
                        Temukan!
                    </button>
                    </a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
