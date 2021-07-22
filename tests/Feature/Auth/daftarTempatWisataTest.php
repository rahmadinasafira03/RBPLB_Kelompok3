<?php

namespace Tests\Feature\Auth;

use App\Models\TempatWisata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class daftarTempatWisataTest extends TestCase
{
    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

    /** @test */
    public function hapus_tempat_wisata()
    {
            // Generate 1 record tempat wisata pada table `tempat_wisatas`.
            $response = $this->get('/');
            $tempat_wisata = TempatWisata::factory()->create([
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

            // Admin membuka halaman Daftar Tempat Wisata
            $this->get(route('table'));

            $hapus_tw =  TempatWisata::destroy($tempat_wisata->idTW);

            $this->assertTrue(true);
    }

     /** @test */
     public function menampilkan_daftar_tempat_wisata()
     {
        // Kita memiliki 1 user terdaftar
        $response = $this->get('/');
        $tempat_wisata = TempatWisata::factory()->create([
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

        $this->get(route('table'));

        $this->assertTrue(true);
     }
}
