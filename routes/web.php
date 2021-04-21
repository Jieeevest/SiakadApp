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
    return redirect()->to('/gate/login');
});
Route::get('/test', function () {
    return view('index');
});


//Mahasiswa Handler Controller

Route::group(['prefix' => 'mahasiswa'], function () {
    Route::get('/', function () {
        return view('Mahasiswa.index');
    });
    Route::get('/menu-utama', function () {
        return 'menu utama';
    });
    Route::get('/my-profile', function () {
        return 'my profile';
    });
    Route::put('/update-image', function () {
        return 'update image';
    });
    Route::put('/update-profile', function () {
        return 'update profile';
    });
    Route::put('/update-password', function () {
        return 'update password';
    });
});

//Dosen Controller Handler
Route::group(['prefix' => 'dosen'], function () {
    Route::get('/', function () {
        return 'index dosen';
    });
    Route::get('/menu-utama', function () {
        return 'menu utama dosen!';
    });
    Route::get('/my-profile', function () {
        return 'dosen profile';
    });
    Route::put('/update-password', function () {
        return 'update password dosen';
    });

    Route::put('/update-profile', function () {
        return 'update profile dosen';
    });
    Route::put('/update-image', function () {
        return 'update image dosen';
    });
});



//Auth Handler
Route::group(['prefix' => 'gate'], function () {

    Route::get('/forgot-password', function () {
        return 'forgot password';
    });

    Route::get('/login', function () {
        return 'halaman login';
        // return view('auth.login');
    });
    Route::get('/logout', function () {
        return 'logout';
    });
});
