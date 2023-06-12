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

        TwillNavigation::addLink(NavigationLink::make()->forModule('banners'));

        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('posts')
                ->title('Notícias')
        );

        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('clippings')
                ->title('Na Mídia')
        );
        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('exhibitions')
                ->title('Agenda')
        );
        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('publications')
                ->title('Arquivos')
        );

        TwillNavigation::addLink(
            NavigationLink::make()
                ->forModule('photos')
                ->setChildren([
                    NavigationLink::make()
                        ->forModule('photos')
                        ->title('Fotos'),
                    NavigationLink::make()
                        ->forModule('videos')
                        ->title('Vídeos'),
                ])
                ->doNotAddSelfAsFirstChild()
                ->title('Galerias')
        );
        
        TwillNavigation::addLink(
            NavigationLink::make()
                ->forRoute('twill.featured.videos')
                ->setChildren([
                    NavigationLink::make()
                        ->forRoute('twill.featured.videos')
                        ->title('Vídeos'),
                    NavigationLink::make()
                        ->forRoute('twill.featured.posts')
                        ->title('Notícias'),
                ])
                ->doNotAddSelfAsFirstChild()
                ->title('Destaques')
        );
    }
}
