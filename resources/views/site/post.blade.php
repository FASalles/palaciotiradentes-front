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
                                    <a href="{{ route('posts') }}">
                                        <span>Notícias</span>
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

                    @if (empty($item->renderBlocks()))
                        {!! $item->subject !!}
                    @else
                        {!! $item->renderBlocks() !!}
                    @endif

                </div>

            </div>

        </main>

    @stop

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
