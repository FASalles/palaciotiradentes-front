@extends('layouts.layout')
@section('main')

<main>
    <div class="header-banner-wrap">
        <div class="essence-banner-image" style="background-image: url(&quot;http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/bg-header-internas.jpg&quot;)">

        </div>
        <div class="tr-content-title-banner">
            <div class="header-title-wrap">
                <h2 class="header-title" style="color: #ffffff">Galerias de Fotos</h2>
            </div>

            <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="trail-item trail-begin">
                            <a href="http://www.palaciotiradentes.rj.gov.br" rel="home">
                                <span>Home</span>
                            </a>

                        </li>
                        <li class="trail-item trail-end">
                            <span>Galerias de Fotos</span>

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
                    Belas obras de artes e arquitetura que impressionam! Confira todos os detalhes do Palácio Tirantes pelas lentes dos nossos fotógrafos:
                </h6>
            </div>
        </div>

        <div class="row">

            @foreach($photos as $photo)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="photos/{{$photo->slug}}"><img src="{{$photo->image('slideshow', 'mobile')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5>{{$photo->title}}</h5>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="bg-light bg-history text-secondary px-4 py-5 text-center">
                <div class="py-5">
                    <h1 class="display-5 fw-bold mt-3 ">Entre no Túnel do Tempo</h1>
                    <div class="col-lg-8 mx-auto mb-5">
                        <p class="fs-5 mb-5 mt-4">Desde os tempos do Brasil Colônia, o Palácio Tiradentes é um lugar histórico que guarda um grande pedaço da memória política do Brasil.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Conheça a Linha do Tempo <i class="ms-3 fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection