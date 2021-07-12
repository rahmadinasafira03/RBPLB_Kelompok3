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
                @foreach($tempatwisata as $tw)
                <form action="{{ route('pages.displayEditTable.edit', $tw->idTW) }}"  enctype="multipart/form-data"  method = "POST">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="idTW" value="{{ $tw->idTW}}">
                  <div class="form-group">
                    <label for="text-input">Nama Tempat Wisata</label>
                    <input required type="text-input" value = "{{ $tw->nama }}" class="form-control" name="nama" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Tempat Wisata</label>
                    <textarea class="form-control"  name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $tw->deskripsi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Trait</label>
                    <input required type="text-input" value = "{{ $tw->trait }}" class="form-control" name="trait" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Fun Fact</label>
                    <input required type="text-input" value = "{{ $tw->funFact }}" class="form-control" name="funFact" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Official Account</label>
                    <input required type="text-input" value = "{{ $tw->officialAcc }}" class="form-control" name="officialAcc" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Link Akomodasi</label>
                    <input required type="text-input" class="form-control" value = "{{ $tw->akomodasi }}" name="akomodasi" id="text-input" aria-describedby="text-input">
                  </div>
                  <div class="form-group">
                    <label for="text-input">Provinsi</label>
                    <div class="dropdown" >
                        <select button class="btn btn-primary btn-round btn-block dropdown-toggle" type="button" name="provinsi" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" if(this.options.length>10){this.size=10;}" onchange="this.blur()" onblur="this.size=0;"> </button>
                            <option selected value="{{ $tw->provinsi }}">{{ $tw->provinsi }}</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Tipe Wisata</label> <br>
                    <div class="form-check form-check-radio form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox1" value="Pantai"> Pantai
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox2" value="Gunung"> Gunung
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox3" value="Desa" > Desa
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox4" value="Hutan" > Hutan
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox5" value="Kota" > Kota
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox6" value="Kebun" > Kebun
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox7" value="Danau" > Danau
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox8" value="Air Terjun" > Air terjun
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeWisata" id="inlineCheckbox9" value="Sejarah" > Sejarah
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Tipe Aktivitas</label> <br>
                    <div class="form-check form-check-radio form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox1" value="Berbelanja"> Berbelanja
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox2" value="Kuliner"> Kuliner
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox3" value="Pesta" > Pesta
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div> <br>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox4" value="Bersantai" > Bersantai
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox5" value="Tamasya" > Tamasya
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="tipeAktivitas" id="inlineCheckbox6" value="Menantang" > Menantang
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text-input">Partner Wisata</label> <br>
                    <div class="form-check form-check-radio form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="partnerWisata" id="inlineCheckbox1" value="Teman"> Teman
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="partnerWisata" id="inlineCheckbox2" value="Keluarga"> Keluarga
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <div class="form-check form-check-inline col-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="partnerWisata" id="inlineCheckbox3" value="Pasangan" > Pasangan
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                    <label for="file-input">Gambar tempat wisata </label>
                    <div class="form-file-upload form-file-multiple">
                        <input type="file" multiple="" class="inputFileHidden" name="gambar" accept="image/*">
                        <br>
                        <br>
                        <img src="{{ asset('material/img/'.$tw->gambar) }}" width="100px">
                      </div>
                      <label for="file-input">Gambar tempat wisata 2 </label>
                    <div class="form-file-upload form-file-multiple">
                        <input type="file" multiple="" class="inputFileHidden" name="gambar2" accept="image/*">
                        <br>
                        <br>
                        <img src="{{ asset('material/img/'.$tw->gambar2) }}" width="100px">
                      </div>
                      <label for="file-input">Gambar tempat wisata 3 </label>
                    <div class="form-file-upload form-file-multiple">
                        <input type="file" multiple="" class="inputFileHidden" name="gambar3" accept="image/*">
                        <br>
                        <br>
                        <img src="{{ asset('material/img/'.$tw->gambar3) }}" width="100px">
                      </div>
                <div class="col-lg-12 col-md-13 text-center">
                    <button class="btn btn-primary" input type="submit" value="Upload">
                        Submit
                    </button>
                </div>
                </form>
                @endforeach
              </div>
            </div>
        </div>
        </div>
@endsection
