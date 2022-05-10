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
    return view('home.index');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts/show', function () {
    return view('posts.show');
});


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
Route::get('/cultural-calendar', function () {
    return view('cultural-calendar.index');
});
