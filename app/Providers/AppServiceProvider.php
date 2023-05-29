<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
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

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('posts')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('banners')
        );
        
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('clippings')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('exhibitions')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('publications')
        );
    }
}
