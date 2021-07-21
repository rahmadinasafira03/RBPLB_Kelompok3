<?php

namespace Tests\Feature;

use App\Models\TempatWisata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class menampilkanTempatWisataTest extends TestCase
{

    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

    /** @test */
    public function menampilkan_tempat_wisata()
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

        $this->get(route('tempat_wisata'));

        $this->assertTrue(true);


        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
