@extends('layouts.layout')
@section('main')

<main>
    <div class="header-banner-wrap">
        <div class="essence-banner-image" style="background-image: url(&quot;http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/bg-header-internas.jpg&quot;)">

        </div>
        <div class="tr-content-title-banner">
            <div class="header-title-wrap">
                <h2 class="header-title" style="color: #ffffff">Galeria de Vídeos</h2>
            </div>

            <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="trail-item trail-begin">
                            <a href="//www.palaciotiradentes.rj.gov.br" rel="home">
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

            @foreach($videos as $video)
            <div class="col">
                <div class="card shadow-sm">
                    <a href="{{route('videos.show', ['slug'=> $video->slug])}}"><img src="{{$video->image('cover', 'mobile')}}" class="card-img-top" alt="..."></a>

                    <div class="card-body">
                        <h5>{{$video->title}}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            @endforeach
           {{--
                @foreach($videos as $video)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('videos.show', ['slug'=> $video->slug])}}"><img src="{{$video->image('cover', 'mobile')}}" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5>{{$video->title}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach--}}

        </div>


    </div>


    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <h4>Titulo do Video</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img class="bd-placeholder-img card-img-top" src="https://picsum.photos/seed/picsum/1280/720">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                        </div>
                    </div>
                </div>
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
