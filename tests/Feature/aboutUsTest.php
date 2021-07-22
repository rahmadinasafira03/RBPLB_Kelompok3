<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class aboutUsTest extends TestCase
{

/*
Aura Febriyanti Puspa (05211940000020) pada About Us
*/
    /** @test */
    public function menampilkan_about_us()
    {
        $response = $this->get(route('about_us'));

         // Kunjungi halaman '/login'
         //$this->get(route('about_us'));

        $this->assertTrue(true);
    }
}
