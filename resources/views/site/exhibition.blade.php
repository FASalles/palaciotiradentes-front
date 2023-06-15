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
                                <li class="trail-item trail-end">
                                    <a href="{{ route('exhibitions') }}">
                                        <span>Programação Cultural</span>
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

            <div class="container page-content">
                <div class="col-md-10 offset-md-1 blog-main">

                    <div class="blog-post pb-5">

                        <img class="img-fluid" src="{{ $item->image('cover', 'default') }}">

                        <p class="pt-3">
                            <span class="me-3">Data:</span>{{ date('d/m/Y', strtotime($item->event_date)) }}
                        </p>

                        @if (!empty($item->event_time_end))
                            <p>
                                <span class="me-3">Horário: de
                                    {{ date('H:i', strtotime($item->event_date)) }} a
                                    {{ date('H:i', strtotime($item->event_time_end)) }}
                            </p>
                        @else
                            <p>
                                <span class="me-3">Horário:</span>{{ date('H:i', strtotime($item->event_date)) }}
                            </p>
                        @endif

                        <p>
                            <span class="me-3">Local:</span>{{ $item->place }}
                        </p>
                        <p class="blog-post-meta">
                            {!! $item->text !!}
                        </p>

                    </div>

                </div>

            </div>

        </main>

    @stop

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
