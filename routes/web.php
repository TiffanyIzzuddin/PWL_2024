<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});
// Route::get('/hello', [WelcomeController::class,'hello']);

// kode program routing
Route::get('mahasiswa', function ($id) {
});
Route::post('mahasiswa', function ($id) {
});
Route::put('mahasiswa', function ($id) {
});
Route::delete('mahasiswa', function ($id) {
});
Route::get('mahasiswa/{id}', function ($id) {
});
Route::put('mahasiswa/{id}', function ($id) {
});
Route::delete('mahasiswa/{id}', function ($id) {
});

// Jika anda membutuhkan route yang dapat memiliki lebih dari satu http method routing
// nya dapat dibuat dengan cara seperti ini.

Route::match(['get', 'post'], '/specialUrl', function () {
});
Route::any('/specialMahasiswa', function ($id) {
});
