<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Post as PostController;
use App\Http\Controllers\Photo as PhotoController;

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

/*Route::get('/', function () {
    return view('home.index');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts',[PostController::class, 'index'])->name('post');

Route::get('/posts/{slug}',[PostController::class, 'show'])->name('posts.show');


Route::get('/history', function () {
    return view('history.index');
});

Route::get('/guided-tour', function () {
    return view('guided-tour.index');
});

Route::get('/location', function () {
    return view('location.index');
});

Route::get('/timeline', function () {
    return view('timeline.index');
});

Route::get('/virtual-tour', function () {
    return view('virtual-tour.index');
});

Route::get('/clipping', function () {
    return view('clipping.index');
});

Route::get('/videos', function () {
    return view('videos.index');
});

Route::get('/photos',[PhotoController::class, 'index'])->name('photo');

Route::get('/photos/{slug}',[PhotoController::class, 'show'])->name('photo.show');


Route::get('/cultural-calendar', function () {
    return view('cultural-calendar.index');
});
