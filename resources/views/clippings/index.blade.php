@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Na Mídia</h2>
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

                    @foreach ($clippings as $clipping)
                        <a href="{{ route('clippings.show', ['slug' => $clipping->slug]) }}">
                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-4">
                                    <img src="{{ $clipping->image('cover', 'mobile') }}" class="img-fluid">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-0">{{ $clipping->description }}</h3>
                                    <div class="mt-2 mb-1 text-muted">Postado por <i>Redação</i> Alerj em
                                        <strong>{{ date("d/m/Y", strtotime($clipping->publish_start_date)) }}</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach


                </div>


            </div>

        </div>

    </main>
@endsection
