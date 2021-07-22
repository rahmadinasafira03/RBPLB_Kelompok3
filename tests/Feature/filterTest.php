<?php

namespace Tests\Feature;

use App\Models\TempatWisata;
use App\Models\Filter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class filterTest extends TestCase
{

/*
Kennard Mahib Bariumanto (05211940000101)
*/

    /** @test */
    public function memilih_filter()
    {
        $response = $this->get('/');

        // Kita memiliki 1 tempat wisata
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

        
        //pengguna memilih filter
        $filter = Filter:: factory()->create([
            'provinsi' =>'Jawa Tengah',
            'tipeWisata' =>'Sejarah',
            'tipeAktivitas' =>'Tamasya',
            'partnerWisata' =>'Keluarga',
            ]);


        //periksa apakah ada tempat wisata sesuai dengan filter yang dipilih dan arahkan ke halaman tempat wisata
        if (
            $this->assertDatabaseHas('tempat_wisatas', [
                'provinsi' => $filter->provinsi,
                'tipeWisata' => $filter->tipeWisata,
                'tipeAktivitas' =>$filter->tipeAktivitas,
                'partnerWisata' =>$filter->partnerWisata,
        ])){
            $this->get(route('tempat_wisata'));
        }
        //kalau tidak sesuai diarahkan ke halaman not found
        elseif (
            $this->assertDatabaseMissing('tempat_wisatas', [
                'provinsi' => $filter->provinsi,
                'tipeWisata' => $filter->tipeWisata,
                'tipeAktivitas' =>$filter->tipeAktivitas,
                'partnerWisata' =>$filter->partnerWisata,
            ])){
            $this->get(route('notfound')); 
            }
        


        
        $response->assertStatus(200);
    }
}
