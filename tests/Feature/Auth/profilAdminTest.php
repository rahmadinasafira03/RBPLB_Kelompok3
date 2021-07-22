<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class profilAdminTest extends TestCase
{
    use RefreshDatabase;

     /** @test */
    public function menampilkan_profil_admin()
    {
        // Kita memiliki 1 user terdaftar
        $response = $this->get('/');

        $user = User::factory()->create([
            'email'    => 'username@example.net',
            'password' => bcrypt('secret123'),
        ]);
        
        // Kunjungi halaman profil admin
        $this->get(route('profile.edit'));

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_mengubah_password()
    {
        $response = $this->get('/');

        // Kita memiliki 1 user terdaftar

        $user = User::factory()->create([
        'name'     => 'Kean',
        'email'    => 'tes@mail.com',
        'password' => 'secret123',
        ]);

        $this->assertDatabaseHas('users', [
        'name'     => 'Kean',
        'email'    => 'tes@mail.com',
        'password' => 'secret123',
        ]);

        User::find($user->id)->update([
            'name'     => 'Kean',
            'email'    => 'tes@mail.com',
            'password' => 'secret456',
            ]);

        $this->assertDatabaseHas('users', [
            'name'     => 'Kean',
            'email'    => 'tes@mail.com',
            'password' => 'secret456',
            ]);

        // Kunjungi halaman profil admin
        $this->get(route('profile.edit')); 

        $response->assertStatus(200);
    }
}

