<?php

namespace Tests\Feature\Auth;

use App\Models\TempatWisata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ubahTWTest extends TestCase
{
    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

/*
Kennard Mahib Bariumanto (05211940000101)
*/

    /** @test */
    public function mengubah_tempat_wisata()
    {
        $response = $this->get('/');
        // Kita memiliki 1 tempat wisata terdaftar
        $tempat_wisata = TempatWisata:: factory()->create([
            'nama'    => 'borobudur',
            'deskripsi' => 'di jawa tengah',
            'trait' => 'traveloka',
            'funFact' =>'di jawa tengah',
            'officialAcc' =>'instagramborobudur.com',
            'akomodasi' =>'traveloka',
            'gambar' =>'abc.jpeg',
            'gambar2' =>'borobudur.png',
            'gambar3' =>'boroboro.jpg',
            'provinsi' =>'Jawa Tengah',
            'tipeWisata' =>'Sejarah',
            'tipeAktivitas' =>'Tamasya',
            'partnerWisata' =>'Keluarga',
            ]);
    
            $this->assertDatabaseHas('tempat_wisatas', [
                'nama'    => 'borobudur',
                'deskripsi' => 'di jawa tengah',
                'trait' => 'traveloka',
                'funFact' =>'di jawa tengah',
                'officialAcc' =>'instagramborobudur.com',
                'akomodasi' =>'traveloka',
                'gambar' =>'abc.jpeg',
                'gambar2' =>'borobudur.png',
                'gambar3' =>'boroboro.jpg',
                'provinsi' =>'Jawa Tengah',
                'tipeWisata' =>'Sejarah',
                'tipeAktivitas' =>'Tamasya',
                'partnerWisata' =>'Keluarga',
            ]);
    
            TempatWisata::find($tempat_wisata->idTW)->update([
                'nama'    => 'ancol',
                'deskripsi' => 'di jakarta',
                'trait' => 'seru',
                'funFact' =>'di jakarta',
                'officialAcc' =>'igAncol.com',
                'akomodasi' =>'traveloka',
                'gambar' =>'ancol1.jpeg',
                'gambar2' =>'ancol2.png',
                'gambar3' =>'ancol3.jpg',
                'provinsi' =>'DKI Jakarta',
                'tipeWisata' =>'Sejarah',
                'tipeAktivitas' =>'Tamasya',
                'partnerWisata' =>'Keluarga',
            ]);
    
            $this->assertDatabaseHas('tempat_wisatas', [
                'nama'    => 'ancol',
                'deskripsi' => 'di jakarta',
                'trait' => 'seru',
                'funFact' =>'di jakarta',
                'officialAcc' =>'igAncol.com',
                'akomodasi' =>'traveloka',
                'gambar' =>'ancol1.jpeg',
                'gambar2' =>'ancol2.png',
                'gambar3' =>'ancol3.jpg',
                'provinsi' =>'DKI Jakarta',
                'tipeWisata' =>'Sejarah',
                'tipeAktivitas' =>'Tamasya',
                'partnerWisata' =>'Keluarga',
            ]);
    
            // Kunjungi halaman profil admin
            $this->get(route('table'));
    
            $response->assertStatus(200);
    }
}
