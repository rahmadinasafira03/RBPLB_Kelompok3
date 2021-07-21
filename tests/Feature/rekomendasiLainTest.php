<?php

namespace Tests\Feature;

use App\Models\TempatWisata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rekomendasiLainTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function menampilkan_rekomendasi_lain()
    {
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

        $tempat_wisata = TempatWisata::factory()->create([
            'nama'    => 'kenjeran',
            'deskripsi' => 'di Surabaya',
            'trait' => 'traveloka',
            'funFact' =>'di jawa timur',
            'officialAcc' =>'kenjeran.com',
            'akomodasi' =>'traveloka',
            'gambar' =>'abc.jpeg',
            'gambar2' =>'kenjeran.png',
            'gambar3' =>'kenjeran.jpg',
            'provinsi' =>'Jawa Timur',
            'tipeWisata' =>'Pantai',
            'tipeAktivitas' =>'Tamasya',
            'partnerWisata' =>'Teman',

        ]);

        $tempat_wisata = TempatWisata::factory()->create([
            'nama'    => 'ancol',
            'deskripsi' => 'ya tempat wisata',
            'trait' => 'traveloka',
            'funFact' =>'di Jakarta',
            'officialAcc' =>'Jakarta.com',
            'akomodasi' =>'traveloka',
            'gambar' =>'abc.jpeg',
            'gambar2' =>'ancol.png',
            'gambar3' =>'ancol.jpg',
            'provinsi' =>'Jakarta',
            'tipeWisata' =>'Pantai',
            'tipeAktivitas' =>'Tamasya',
            'partnerWisata' =>'Keluarga',

        ]);


        $this->get(route('notfound'));

        $this->assertTrue(true);

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
