@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
<div class="content">
    <main class="container">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header" style="text-primary">
                <h3>Tambah Tempat Wisata Baru</h3>
              </div>
              <div class="card-body card-block">
                <form action="/createTW" method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="text-input">Nama Tempat Wisata</label>
                    <input required type="text-input" class="form-control" name="nama" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Tempat Wisata</label>
                    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Trait</label>
                    <input required type="text-input" class="form-control" name="trait" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Fun Fact</label>
                    <input required type="text-input" class="form-control" name="funFact" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Official Account</label>
                    <input required type="text-input" class="form-control" name="officialAcc" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Link Akomodasi</label>
                    <input required type="text-input" class="form-control" name="akomodasi" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Provinsi</label>
                    <div class="dropdown" >
                      <select button class="btn btn-primary btn-round btn-block dropdown-toggle" type="button" name="provinsi" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" if(this.options.length>10){this.size=10;}" onchange="this.blur()" onblur="this.size=0;"> </button>
                        <option selected >Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumut">Sumatera Utara</option>
                        <option value="Sumbar">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepri">Kepulauan Riau</option>
                        <option value="Jambi">Jambi</option>
                        <option value="Bengkulu">Bengkulu</option>
                        <option value="Sumsel">Sumatera Selatan</option>
                        <option value="Babel">Bangka Belitung</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Banten">Banten</option>
                        <option value="DKI">DKI Jakarta</option>
                        <option value="Jabar">Jawa Barat</option>
                        <option value="Jateng">Jawa Tengah</option>
                        <option value="DIY">DI Yogyakarta</option>
                        <option value="Jatim">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="NTB">Nusa Tenggara Barat</option>
                        <option value="NTT">Nusa Tenggara Timur</option>
                        <option value="Kalbar">Kalimantan Barat</option>
                        <option value="Kalteng">Kalimantan Tengah</option>
                        <option value="Kalsel">Kalimantan Selatan</option>
                        <option value="Kaltim">Kalimantan Timur</option>
                        <option value="Kaltara">Kalimantan Utara</option>
                        <option value="Sulsel">Sulawesi Selatan</option>
                        <option value="Sulbar">Sulawesi Barat</option>
                        <option value="Sulteng">Sulawesi Tengah</option>
                        <option value="Sultra">Sulawesi Tenggara</option>
                        <option value="Sulut">Sulawesi Utara</option>
                        <option value="Gorontalo">Gorontalo</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Malut">Maluku Utara</option>
                        <option value="Pabar">Papua Barat</option>
                        <option value="Papua">Papua</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Tipe Wisata</label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox1" value="Pantai"> Pantai
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox2" value="Gunung"> Gunung
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox3" value="Desa" > Desa
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox4" value="Hutan" > Hutan
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox5" value="Kota" > Kota
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox6" value="Kebun" > Kebun
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox7" value="Danau" > Danau
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox8" value="Air Terjun" > Air terjun
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeWisata" id="inlineCheckbox9" value="Sejarah" > Sejarah
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Tipe Aktivitas</label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox1" value="Berbelanja"> Berbelanja
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox2" value="Kuliner"> Kuliner
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox3" value="Pesta" > Pesta
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox4" value="Bersantai" > Bersantai
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox5" value="Tamasya" > Tamasya
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="tipeAktivitas" id="inlineCheckbox6" value="Menantang" > Menantang
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Partner Wisata</label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="partnerWisata" id="inlineCheckbox1" value="Teman"> Teman
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="partnerWisata" id="inlineCheckbox2" value="Keluarga"> Keluarga
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="partnerWisata" id="inlineCheckbox3" value="Pasangan" > Pasangan
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                    <label for="file-input">Gambar tempat wisata </label>
                    <div class="form-file-upload form-file-multiple">
                        <input type="file" multiple="" class="inputFileHidden" name="gambar" accept="image/*">
                    </div>
                <div class="col-lg-12 col-md-13 text-center">
                    <button class="btn btn-primary" input type="submit" value="Upload">
                        Submit
                    </button>
                </div>
                </form>
              </div>
            </div>
        </div>
        </div>
@endsection
