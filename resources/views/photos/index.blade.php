@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Galeria de Fotos</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Galeria de Fotos</span>

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
                        TODOS OS ÂNGULOS DA HISTÓRIA
                    </h2>
                    <h6>
                        Belas obras de artes e arquitetura que impressionam! Confira todos os detalhes do Palácio Tirantes
                        pelas lentes dos nossos fotógrafos:
                    </h6>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-5">


                @foreach ($photos as $photo)
                    <div class="col col-sm-12">
                        <div class="card shadow-sm">
                            <a href="{{ route('photos.show', ['slug' => $photo->slug]) }}"><img
                                    src="{{ $photo->image('slideshow', 'mobile') }}" class="card-img-top"
                                    alt="..." style="aspect-ratio: 16 / 9;"></a>
                            <div class="card-body">
                                <h5>{{ $photo->title }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </main>
@endsection
