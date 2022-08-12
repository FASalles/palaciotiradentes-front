@extends('layouts.layout')
@section('main')

    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image" style="background-image: url(&quot;http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/bg-header-internas.jpg&quot;)">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Na Mídia</h2>
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
                                <span>Na Mídia</span>

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
                        Palácio Tiradentes na mídia
                    </h2>
                    <h6>
                        Seja por sua história ou pelos eventos realizados nele, o Palácio foi notícia. Confira!
                    </h6>
                </div>
            </div>

            <div class="row mb-2 clipping">

                <div class="col-md-12">

                    @foreach($clippings as $clipping)

                    <a href="{{route('clippings.show', ['slug'=> $clipping->slug])}}">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col-4">
                                <img src="{{$clipping->image('cover', 'mobile')}}" class="img-fluid">
                            </div>
                            <div class="col p-4 d-flex flex-column position-static">
                                {{--<strong class="d-inline-block mb-2 text-primary">World</strong>--}}
                                <h3 class="mb-0">{{$clipping->description}}</h3>
                                <div class="mt-2 mb-1 text-muted">Postado por <i>Redação</i> Alerj em <strong>{{$clipping->publish_start_date}}</strong></div>
                                {{--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>--}}
                                {{--<a href="#" class="stretched-link">Continue reading</a>--}}
                            </div>
                        </div>
                    </a>
                    @endforeach


                </div>


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
