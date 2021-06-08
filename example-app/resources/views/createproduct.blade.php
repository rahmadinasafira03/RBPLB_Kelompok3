@extends('template')

@section('judulHalaman')
    <h1>Tambah Tempat Wisata</h1>
@endsection

@section ('tombol')
    <a href="/"> <button type="button" class="btn btn-outline-primary">Kembali </button></a>
@endsection

@section('konten')
            <form method="POST" action="{{ config('app.url')}}/products">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Tempat Wisata</label>
                <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"> </textarea>
                </div>
                <div class="form-group">
                    <label for="trait">Trait</label>
                <input type="text" class="form-control" name="trait" id="trait">
                </div>
                <div class="form-group">
                    <label for="funFact">Fun Fact</label>
                <input type="text" class="form-control" name="funFact" id="funFact">
                </div>
                <div class="form-group">
                    <label for="officialAcc">Official Account</label>
                <input type="text" class="form-control" name="officialAcc" id="officialAcc">
                </div>
                <div class="form-group">
                    <label for="akomodasi">Akomodasi</label>
                <input type="text" class="form-control" name="akomodasi" id="akomodasi">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                <input type="text" class="form-control" name="gambar" id="gambar">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi" class="form-control" placeholder="Pilih provinsi">
                        <option value="Jatim">Jawa Timur</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="tipeWisata">Tipe Wisata</label>
                    <select name="tipeWisata" id="tipeWisata" class="form-control">
                        <option value="pantai">Pantai</option>
                        <option value="gunung">Gunung</option>
                        <option value="desa">Desa</option>
                        <option value="kota">Kota</option>
                        <option value="hutan">Hutan</option>
                        <option value="kebun">Kebun</option>
                        <option value="danau">Danau</option>
                        <option value="airTerjun">Air Terjun</option>
                        <option value="sejarah">Sejarah</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="tipeAktivitas">Tipe Aktivitas</label>
                    <select name="tipeAktivitas" id="tipeAktivitas" class="form-control">
                        <option value="berbelanja">Berbelanja</option>
                        <option value="kuliner">Kuliner</option>
                        <option value="pesta">Pesta</option>
                        <option value="bersantai">Bersantai</option>
                        <option value="tamasya">Tamasya</option>
                        <option value="menantang">Menantang</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="partnerWisata">Partner Wisata</label>
                    <select name="partnerWisata" id="partnerWisata" class="form-control">
                        <option value="teman">Teman</option>
                        <option value="keluarga">Keluarga</option>
                        <option value="pasangan">Pasangan</option>
                        <option value="sendiri">Sendiri</option>
                      </select>
                </div>

                <input type="submit" button type="button" class="btn btn-primary" value="simpan">
            </form>
@endsection

