<?php

namespace Tests\Feature\Auth;

use App\Models\User; // Tambahkan use model App\User
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class RegisterTest extends TestCase
{
    // Trait refresh database agar migration dijalankan
    use RefreshDatabase;

/*
Ganendra Aby Bhamakerti (05211940000091)
*/

    /** @test */
    public function user_can_register()
    {
        $this->post('/register', [
            'name'                  => 'kennard reeve',
            'email'                 => 'kean@mail.com',
            'password'              => 'admin123',
            'password_confirmation' => 'admin123',
        ]);

        $this->assertDatabaseHas('users', [
            'name'  => 'kennard reeve',
            'email' => 'kean@mail.com',
        ]);
    }
//     public function user_name_is_required()
//     {
//         // Submit form untuk register dengan field 'name' kosong.
//         $this->post('/register', [
//             'name'                  => '',
//             'email'                 => 'kean@mail.com',
//             'password'              => 'admin123',
//             'password_confirmation' => 'admin123',
//         ]);

//         // Cek pada session apakah ada error untuk field 'name'.
//         $this->assertSessionHasErrors(['name']);
//     }

//     /** @test */
//     public function user_name_maximum_is_255_characters()
//     {
//         // Submit form untuk register dengan field 'name' 260 karakter.
//         $this->post('/register', [
//             'name'                  => str_repeat('kean reeve', 26),
//             'email'                 => 'kean@mail.com',
//             'password'              => 'admin123',
//             'password_confirmation' => 'admin123',
//         ]);

//         // Cek pada session apakah ada error untuk field 'name'.
//         $this->assertSessionHasErrors(['name']);
//     }

//     /** @test */
//     public function user_email_is_required()
//     {
//         // Submit form untuk register dengan field 'email' kosong.
//         $this->post('/register', [
//             'name'                  => 'kean reeve',
//             'email'                 => '',
//             'password'              => 'admin123',
//             'password_confirmation' => 'admin123',
//         ]);

//         // Cek pada session apakah ada error untuk field 'email'.
//         $this->assertSessionHasErrors(['email']);
//     }

//     /** @test */
//     public function user_email_must_be_a_valid_email()
//     {
//         // Submit form untuk register dengan field 'email' tidak valid.
//         $this->post('/register', [
//             'name'                  => 'kennard reeve',
//             'email'                 => 'kean.mail.com',
//             'password'              => 'admin123',
//             'password_confirmation' => 'admin123',
//         ]);

//         // Cek pada session apakah ada error untuk field 'email'.
//         $this->assertSessionHasErrors(['email']);
//     }

//     /** @test */
//     public function user_email_maximum_is_255_characters()
//     {
//         // Submit form untuk register dengan field 'email' 260 karakter.
//         $this->post('/register', [
//             'name'                  => 'kennard reeve',
//             'email'                 => str_repeat('kean@mail.com', 25),
//             'password'              => 'admin123',
//             'password_confirmation' => 'admin123',
//         ]);

//         // Cek pada session apakah ada error untuk field 'email'.
//         $this->assertSessionHasErrors(['email']);
//     }

//     /** @test */
//     public function user_email_must_be_unique_on_users_table()
//     {
//         // Buat satu user baru
//         $user = factory(User::class)->create(['email' => 'keanbaru@email.com']);

//         // Submit form untuk register dengan field
//         // 'email' yang sudah ada di tabel users.
//         $this->post('/register', [
//             'name'                  => 'kean baru',
//             'email'                 => 'keanbaru@email.com',
//             'password'              => 'secret66',
//             'password_confirmation' => 'secret66',
//         ]);

//         // Cek pada session apakah ada error untuk field 'email'.
//         $this->assertSessionHasErrors(['email']);
//     }

//     /** @test */
//     public function user_password_is_required()
//     {
//         // Submit form untuk register dengan field 'password' kosong.
//         $this->post('/register', [
//             'name'                  => 'kean baru',
//             'email'                 => 'keanbaru@email.com',
//             'password'              => '',
//             'password_confirmation' => 'secret66',
//         ]);

//         // Cek pada session apakah ada error untuk field 'password'.
//         $this->assertSessionHasErrors(['password']);
//     }

//     /** @test */
//     public function user_password_minimum_is_8_characters()
//     {
//         // Submit form untuk register dengan field 'password' 6 karakter.
//         $this->post('/register', [
//             'name'                  => 'kean baru',
//             'email'                 => 'keanbaru@email.com',
//             'password'              => 'secret',
//             'password_confirmation' => 'secret',
//         ]);

//         // Cek pada session apakah ada error untuk field 'password'.
//         $this->get(route('register'));
//         // $this->assertTrue(true);
//         $this->assertSessionHasErrors(['']);
//     }

//     /** @test */
//     public function user_password_must_be_same_with_password_confirmation_field()
//     {
//         // Submit form untuk register dengan field 'password'
//         // beda dengan 'password_confirmation'.
//         $this->post('/register', [
//             'name'                  => 'kean baru',
//             'email'                 => 'keanbaru@email.com',
//             'password'              => 'secret66',
//             'password_confirmation' => 'secret76',
//         ]);

//         // Cek pada session apakah ada error untuk field 'password'.
//         $this->assertSessionHasErrors(['password']);
//     }
 }
