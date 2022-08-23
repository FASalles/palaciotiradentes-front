<?php

use App\Http\Controllers\Video as VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Post as PostController;
use App\Http\Controllers\Photo as PhotoController;
use App\Http\Controllers\Clipping as ClippingController;
use App\Http\Controllers\Publication as PublicationController;
use App\Http\Controllers\Exhibition as ExhibitionController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');


Route::get('/history', function () {
    return view('history.index');
})->name('history');

Route::get('/guided-tour', function () {
    return view('guided-tour.index');
})->name('guided-tour');

Route::get('/location', function () {
    return view('location.index');
})->name('location');

Route::get('/timeline', function () {
    return view('timeline.index');
})->name('timeline');

Route::get('/virtual-tour', function () {
    return view('virtual-tour.index');
})->name('virtual-tour');

Route::get('/exhibitions', [ExhibitionController::class, 'index'])->name('exhibitions');

Route::get('/exhibitions/{slug}', [ExhibitionController::class, 'show'])->name('exhibitions.show');

Route::get('/clippings', [ClippingController::class, 'index'])->name('clippings');

Route::get('/clippings/{slug}', [ClippingController::class, 'show'])->name('clippings.show');

Route::get('/videos', [VideoController::class, 'index'])->name('videos');

Route::get('/videos/{slug}', [VideoController::class, 'show'])->name('videos.show');

Route::get('/photos', [PhotoController::class, 'index'])->name('photos');

Route::get('/photos/{slug}', [PhotoController::class, 'show'])->name('photos.show');

Route::get('/publications', [PublicationController::class, 'index'])->name('publications');

Route::get('/publications/{slug}', [PublicationController::class, 'show'])->name('publications.show');
