@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Linha do Tempo</h2>
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
                                <span>Linha do Tempo</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="row">
                <div class="cool_timeline">
                    <h1 class="timeline-main-title center-block">Através da História</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline cooltimeline_cont">
                                <dl>
                                    @foreach ($timelineChapters as $item)
                                        <dd id="{{ $loop->index }}"
                                            class="{{ $loop->iteration % 2 == 0 ? 'pos-left odd' : 'pos-right even' }} clearfix full">
                                            <div class="circ"></div>
                                            <div class="events">
                                                <h4 class="events-heading">{{ $item->title }}</h4>
                                                <div class="ctl_info event-description full">
                                                    <div class="events-body">
                                                        @if(!empty($item->hasImage('cover', 'default')))
                                                            <img src="{{ $item->image('cover', 'default') }}"
                                                                class="img-fluid mb-3 w-100" alt="">
                                                        @endif
                                                        {!! $item->text !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </dd>
                                    @endForEach
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="bg-light bg-timeline text-secondary px-4 py-5 text-center">
                    <div class="py-5">
                        <h1 class="display-5 fw-bold mt-3 ">Confira como tudo começou</h1>
                        <div class="col-lg-8 mx-auto mb-5">
                            <p class="fs-5 mb-5 mt-4"> Venha mergulhar na nossa história e descubra um grande pedaço da
                                memória política do Brasil.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="{{ route('history') }}"><button type="button"
                                        class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Conheça a Nossa
                                        História <i class="ms-3 fa-solid fa-arrow-right"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
