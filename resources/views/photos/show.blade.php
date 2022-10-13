@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">{{ $photo->title }}</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-begin">
                                <a href="{{route('photos')}}">
                                    <span>Galeria de Fotos</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>{{ $photo->title }}</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content mb-5">

            <h4 class="text-center">{!! $photo->text !!}</h4>
            <h6 class="text-center">Créditos: {{ $photo->credits }}</h6>

            <div class="pt-4 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($photo->images('slideshow', 'default') as $image)
                    <div class="col">
                        <img src="{{ $image }}" class="card-img-top">
                    </div>
                @endforeach
            </div>


        </div>

    </main>
@endsection
