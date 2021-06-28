@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
    <div class="row align-items-center" >
      <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">
        <!-- <form class="form" method="POST" action="{{ route('login') }}">
          @csrf -->

          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-info text-center">
              <h4 class="card-title"><strong>{{ __('Pilih Filter') }}</strong></h4>
            </div>
            <div class="card-body text-center">
                <div class="form-group">
                    <div class="dropdown" >
                      <select button class="btn btn-primary btn-round btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" if(this.options.length>10){this.size=10;}" onchange="this.blur()" onblur="this.size=0;"> </button>
                        <option selected >Pilih Provinsi</option>
                        <option value="aceh">Aceh</option>
                        <option value="sumut">Sumatera Utara</option>
                        <option value="sumbar">Sumatera Barat</option>
                        <option value="riau">Riau</option>
                        <option value="kepri">Kepulauan Riau</option>
                        <option value="jambi">Jambi</option>
                        <option value="bengkulu">Bengkulu</option>
                        <option value="sumsel">Sumatera Selatan</option>
                        <option value="babel">Bangka Belitung</option>
                        <option value="lampung">Lampung</option>
                        <option value="banten">Banten</option>
                        <option value="dki">DKI Jakarta</option>
                        <option value="jabar">Jawa Barat</option>
                        <option value="jateng">Jawa Tengah</option>
                        <option value="diy">DI Yogyakarta</option>
                        <option value="jatim">Jawa Timur</option>
                        <option value="bali">Bali</option>
                        <option value="ntb">Nusa Tenggara Barat</option>
                        <option value="ntt">Nusa Tenggara Timur</option>
                        <option value="kalbar">Kalimantan Barat</option>
                        <option value="kalteng">Kalimantan Tengah</option>
                        <option value="kalsel">Kalimantan Selatan</option>
                        <option value="kaltim">Kalimantan Timur</option>
                        <option value="kaltara">Kalimantan Utara</option>
                        <option value="sulsel">Sulawesi Selatan</option>
                        <option value="sulbar">Sulawesi Barat</option>
                        <option value="sulteng">Sulawesi Tengah</option>
                        <option value="sultra">Sulawesi Tenggara</option>
                        <option value="sulut">Sulawesi Utara</option>
                        <option value="gorontalo">Gorontalo</option>
                        <option value="maluku">Maluku</option>
                        <option value="malut">Maluku Utara</option>
                        <option value="pabar">Papua Barat</option>
                        <option value="papua">Papua</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text-input"><p class="text-primary">Tipe Wisata </p></label><br>
                    <div class="form-check form-check-inline col-3">
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
