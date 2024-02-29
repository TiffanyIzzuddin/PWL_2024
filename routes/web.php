<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
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

// soal latihan
Route::get('/user/{name}', function ($name) {
    return 'Tiffany ' . $name;
});

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// soal praktikum
Route::get('/user/{name?}', function ($name = 'Tiffany') {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId = '1', $commentId = '5') {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
// http://127.0.0.1:8000/posts/1/comments/5

Route::get( '/user/profile',[UserProfileController::class, 'show'])->name('profile');

// Generating URLs...
// $url = route('profile');
// Generating Redirects...
// return redirect()->route('profile');

// route group
Route::middleware(['first', 'second'])->group(function () {
    // Route::get('/', function () {
        // Uses first & second middleware...
    // });
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Redirect Routes
Route::redirect('/here', '/there');
// View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Andi']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Soal Praktikum

Route::get('/user/{id}/name/{name}', function ($userId = '1', $name = 'Tiffanny') {
    return 'User id ke-' . $userId . " User: " . $name;
});

Route::get( '/category/food-beverage',[CategoryController::class, 'foodBaverage']);
Route::get( '/category/beauty-health',[CategoryController::class, 'beautyHealth']);
Route::get( '/category/home-care',[CategoryController::class, 'homeCare']);
Route::get( '/category/baby-kid',[CategoryController::class, 'babyKid']);