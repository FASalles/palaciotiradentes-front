<?php

Route::module('banners');
Route::module('clippings');
Route::module('publications');
Route::group(['prefix' => 'galleries'], function () {
    Route::module('photos');
    Route::module('videos');
});