@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Galeria de Vídeos</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="/" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Galeria de Vídeos</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <div class="container page-content">
            <div class="row mb-2 text-center">
                <div class="col-md-12 page-title">
                    <h2>
                        UM PALÁCIO QUE FAZ HISTÓRIA!
                    </h2>
                    <h6>
                        Palco de inúmeras discussões políticas e local de trabalho de milhares de pessoas
                        ao longo de seus 90 anos, não faltam histórias
                        de quem caminha ou já passou pelo movimentado Palácio Tiradentes.
                        Confira os depoimentos e documentários de quem participou dessa trajetória.
                    </h6>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($videos as $video)
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="{{ route('videos.show', ['slug' => $video->slug]) }}"><img
                                    src="{{ $video->image('cover', 'default') }}" class="card-img-top" alt="..."></a>

                            <div class="card-body">
                                <h5>{{ $video->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>


    </main>
@endsection
