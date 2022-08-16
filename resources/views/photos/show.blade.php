@extends('layouts.layout')
@section('main')

<main>
    <div class="header-banner-wrap">
        <div class="essence-banner-image bg-header">

        </div>
        <div class="tr-content-title-banner">
            <div class="header-title-wrap">
                <h2 class="header-title" style="color: #ffffff">{{$photo->title}}</h2>
                <h5 class="text-center">Créditos: {{$photo->credits}}</h5>
            </div>

            <div class="mt-5 header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="trail-item trail-begin">
                            <a href="/" rel="home">
                                <span>Home</span>
                            </a>

                        </li>
                        <li class="trail-item trail-begin">
                            <a href="/photos" rel="home">
                                <span>Galeria de Fotos</span>
                            </a>

                        </li>
                        <li class="trail-item trail-end">
                            <span>{{$photo->title}}</span>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container page-content">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @foreach($photo->images('slideshow', 'default') as $image)
                <div class="col">
                    <img src="{{$image}}" class="card-img-top">
                </div>
            @endforeach
        </div>

        <h3 class="text-center pt-4">{!! $photo->text !!}</h3>

    </div>

</main>

@endsection
