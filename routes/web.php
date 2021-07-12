<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tempat_wisatas', 'tempatWisataController');

Route::resource('/admins', 'adminController');

Route::get('home', function () {
    return view('main');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/filter', [App\Http\Controllers\filterController::class, 'index'])->name('filter');
//Route::post('/filter', 'App\Http\Controllers\filterController@proses_upload');
Route::get('/filter/cari', [App\Http\Controllers\filterController::class, 'find_filter'])->name('hasil_filter');
//{provinsi}/{tipeWisata}/{tipeAktivitas}/{partnerWisata}

Route::get('/about_us', [App\Http\Controllers\aboutusController::class, 'index'])->name('about_us');

Route::get('/notfound', [App\Http\Controllers\notfoundController::class, 'index'])->name('notfound');

Route::get('/tempat_wisata', [App\Http\Controllers\tempatWisataController::class, 'index'])->name('tempat_wisata');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		$tempatwisata = DB::table('tempat_wisatas') ->paginate(10);
		return view('pages.table_list',['tempatwisata' => $tempatwisata]);;
	})->name('table');

    Route::get('createTW', function () {
		return view('pages.createTW');
	})->name('createTW');

	Route::get('/table_list', 'App\Http\Controllers\tempatWisataController@upload')->name('upload_tw');
	Route::post('/createTW', 'App\Http\Controllers\tempatWisataController@proses_upload');

    Route::delete('/table_list.delete.{idTW}', [App\Http\Controllers\tempatWisataController::class,'hapus'])->name('hapusTW');

	Route::get('/table_list/{idTW}', 'App\Http\Controllers\tempatWisataController@hapus');
    Route::post('/editTW', [App\Http\Controllers\tempatWisataController::class, 'edit'])->name('pages.displayEditTable.edit');
    Route::get('/editTW/{idTW}', [App\Http\Controllers\tempatWisataController::class, 'displayEditTable'])->name('displayEditTable');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


