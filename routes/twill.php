<?php

use A17\Twill\Facades\TwillRoutes;

TwillRoutes::module('banners');
TwillRoutes::module('clippings');
TwillRoutes::module('exhibitions');
TwillRoutes::module('publications');
Route::group(['prefix' => 'galleries'], function () {
    TwillRoutes::module('photos');
    TwillRoutes::module('videos');
});
