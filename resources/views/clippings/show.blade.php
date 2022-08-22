@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title">{{ $clipping->title }}</h2>
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
                                <a href="{{ route('clippings') }}">
                                    <span>Na Mídia</span>
                                </a>
                            </li>
                            <li class="trail-item trail-end">
                                <span>{{ $clipping->title }}</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row clipping">
                <div class="accordion" id="accordionExample">
                    @foreach ($clipping->clippings as $clippingAccordion)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $clippingAccordion['id'] }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $clippingAccordion['id'] }}" aria-expanded="true"
                                    aria-controls="collapse{{ $clippingAccordion['id'] }}">
                                    {{ $clippingAccordion['name'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $clippingAccordion['id'] }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $clippingAccordion['id'] }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! $clippingAccordion['description'] !!}
                                </div>

                                <a href="{{ $clippingAccordion['link'] }}" target="_blank">Confira a matéria na
                                    íntegra.</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </main>
@endsection
