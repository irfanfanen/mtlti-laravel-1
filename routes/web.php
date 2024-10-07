<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//List Route
Route::get('/users', function () {
    return 'Menampilkan daftar pengguna';
});

Route::post('/users', function () {
    return 'Membuat pengguna baru';
});

Route::get('/users/{id}', function ($id) {
    return 'Memperbarui pengguna dengan ID: ' . $id;
});

Route::delete('/users/{id}', function ($id) {
    return 'Menghapus pengguna dengan ID: ' . $id;
});
  

// Group Route
Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', function () {
        return 'Menampilkan pengguna admin';
    });
});

// to Controller
Route::group(['prefix' => 'main'], function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users-one', [UserController::class, 'userOne']);
    Route::get('/users-all', [UserController::class, 'userAll']);
});

// Resource
Route::resource('usersOne', UserController::class);

//Home
Route::get('/home', function () {
    return view('home');
});