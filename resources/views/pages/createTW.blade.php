@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
<div class="content">
    <main class="container">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <strong>Tambah Tempat Wisata Baru</strong>
              </div>
              <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="text-input">Nama Tempat Wisata</label>
                    <input type="text-input" class="form-control" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Tempat Wisata</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                  <div class="row">
                    <div class="col">
                      <label for="text-input">Trait 1</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                      <label for="text-input">Trait 2</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Fun Fact 1</label>
                    <input type="text-input" class="form-control" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Fun Fact 2</label>
                    <input type="text-input" class="form-control" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Official Account</label>
                    <input type="text-input" class="form-control" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Link Akomodasi</label>
                    <input type="text-input" class="form-control" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Provinsi</label>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <label for="text-input">Tipe Wisata</label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Pantai
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
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
                    <label for="text-input">Tipe Aktivitas</label> <br>
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
                    <label for="text-input">Partner Wisata</label> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1C"> Teman
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2C"> Keluarga
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3C" > Pasangan
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="file-input">Gambar tempat wisata 1</label>
                    <div class="form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <div class="input-group">
                          <input type="text" class="form-control inputFileVisible" placeholder="">
                          <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-round btn-primary">
                                  <i class="material-icons">attach_file</i>
                              </button>
                          </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-13 text-center">
                    <button class="btn btn-primary">
                        Submit
                    </button>
                </div>
                </form>
              </div>
            </div>
        </div>

@endsection
