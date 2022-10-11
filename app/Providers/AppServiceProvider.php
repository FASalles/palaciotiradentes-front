<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') == 'shared') {

            \URL::forceRootUrl(config('app.shared.url'));

            \URL::forceScheme('https');
        }

        Relation::morphMap([
            'posts' => 'App\Twill\Capsules\Posts\Models\Post',
            'videos' => 'App\Models\Video',
        ]);
    }
}
