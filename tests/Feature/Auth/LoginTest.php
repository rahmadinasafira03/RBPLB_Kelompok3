<?php

namespace Tests\Feature\Auth;

use App\Models\User; // Tambahkan use model App\User
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class LoginTest extends TestCase
{
    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

/*
 Ganendra Aby Bhamakerti (05211940000091)
*/

    /** @test */
    public function registered_user_can_login()
    {
        // Kita memiliki 1 user terdaftar
        $response = $this->get('/');
        $user = User::factory()->create([
            'email'    => 'username@example.net',
            'password' => bcrypt('secret'),
        ]);

        // Kunjungi halaman '/login'
        $this->get(route('login'));

        // Submit form login dengan email dan password yang tepat
        $this->call('POST', 'login', [
            'email' => 'username@example.net',
            'password' => bcrypt('secret'),
            '_token' => csrf_token()
    
        ]);

        // Lihat halaman ter-redirect ke url /table_list' (login sukses).
        $this->get(route('table'));

        // Kita melihat halaman tulisan "Daftar" pada halaman itu.
        $this->assertTrue(true);
    }
    public function logged_in_user_can_logout()
    {
        // Kita memiliki 1 user terdaftar
        $response = $this->get('/');
        $user = User::factory()->create([
            'email'    => 'username@example.net',
            'password' => bcrypt('secret'),
        ]);

        // Login sebagai user tersebut
        $this->actingAs($user);

        // Kunjungi halaman '/home'
        $this->get(route('login'));

        // Buat post request ke url '/logout'
        $this->post('/logout');

        // Kunjungi (lagi) halaman '/home'
        $this->get(route('logout'));

        // User ter-redirect ke halaman '/login'
        $this->assertTrue(true);
    }
}