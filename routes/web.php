<?php

use App\Http\Controllers\Video as VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Post as PostController;
use App\Http\Controllers\Photo as PhotoController;
use App\Http\Controllers\Clipping as ClippingController;
use App\Http\Controllers\Publication as PublicationController;
use App\Http\Controllers\Exhibition as ExhibitionController;
use App\Http\Controllers\TimelineChapter as TimelineChapterController;

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

Route::get('/noticias', [PostController::class, 'index'])->name('posts');

Route::get('/noticias/{slug}', [PostController::class, 'show'])->name('posts.show');


Route::get('/historia', function () {
    return view('history.index');
})->name('history');

Route::get('/visitaguiada', function () {
    return view('guided-tour.index');
})->name('guided-tour');

Route::get('/como-chegar', function () {
    return view('location.index');
})->name('location');

Route::get('/tour-virtual', function () {
    return view('virtual-tour.index');
})->name('virtual-tour');

Route::get('/linha-do-tempo', [TimelineChapterController::class, 'index'])->name('timeline');

Route::get('/programacao-cultural', [ExhibitionController::class, 'index'])->name('exhibitions');

Route::get('/programacao-cultural/{slug}', [ExhibitionController::class, 'show'])->name('exhibitions.show');

Route::get('/na-midia', [ClippingController::class, 'index'])->name('clippings');

Route::get('/na-midia/{slug}', [ClippingController::class, 'show'])->name('clippings.show');

Route::get('/galeria-de-videos', [VideoController::class, 'index'])->name('videos');

Route::get('/galeria-de-videos/{slug}', [VideoController::class, 'show'])->name('videos.show');

Route::get('/galeria-de-fotos', [PhotoController::class, 'index'])->name('photos');

Route::get('/galeria-de-fotos/{slug}', [PhotoController::class, 'show'])->name('photos.show');

Route::get('/arquivos', [PublicationController::class, 'index'])->name('publications');

Route::get('/arquivos/{slug}', [PublicationController::class, 'show'])->name('publications.show');
