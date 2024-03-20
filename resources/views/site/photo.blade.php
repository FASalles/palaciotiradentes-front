<!doctype html>
<html lang="en">

<head>
    <title>#madewithtwill website</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    @extends('layouts.layout')

    @section('main')

        <main>

            <div class="header-banner-wrap">
                <div class="essence-banner-image bg-header">

                </div>
                <div class="tr-content-title-banner">
                    <div class="header-title-wrap">
                        <h2 class="header-title" style="color: #ffffff">{{ $item->title }}</h2>
                    </div>

                    <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li class="trail-item trail-begin">
                                    <a href="{{ route('home') }}" rel="home">
                                        <span>Home</span>
                                    </a>

                                </li>
                                <li class="trail-item trail-begin">
                                    <a href="{{ route('photos') }}">
                                        <span>Galeria de Fotos</span>
                                    </a>

                                </li>
                                <li class="trail-item trail-end">
                                    <span>{{ $item->title }}</span>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="m-4 row d-flex justify-content-center photo-gallery" id="photo-gallery">
                <p class="text-center">Créditos: {{ $item->credits }}</p>
                @foreach ($item->imagesAsArrays('slideshow', 'default') as $image)
                    <a class="m-1 p-0 content col-sm-6 col-md-5 col-lg-4 col-xl-3" data-pswp-src="{{ $image['src'] }}"
                        data-pswp-width="{{ $image['width'] }}" data-pswp-height="{{ $image['height'] }}" target="_blank">
                        <img caption="{{ $image['caption'] }}" class="content-image" src="{{ $image['src'] }}">
                        <div class="content-overlay"></div>
                        <div class="content-details fadeIn-bottom">
                            <h3 class="p-1 content-title">{{ $image['caption'] }}</h3>
                            <i class="fa-xl fa-solid fa-magnifying-glass"></i>
                        </div>
                    </a>
                @endforeach
                <span class="pt-3">{!! $item->text !!}</span>
            </div>
        </main>

    @stop

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
