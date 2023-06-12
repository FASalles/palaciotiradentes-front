@extends('layouts.layout')

@section('main')

    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">
            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">{{ $publication->title }}</h2>
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
                                <a href="{{route('publications')}}">
                                    <span>Arquivos</span>
                                </a>

                            </li>

                            <li class="trail-item trail-end">
                                <span>{{ $publication->title }}</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content pb-5">
            <div class="col-md-10 offset-md-1 blog-main">

                <div class="blog-post">
                    <img class="img-fluid" src="{{ $publication->image('cover', 'default') }}">

                    <h4 class="blog-post-title mt-5">{!! $publication->text !!}</h4>

                    <a href="{{ $publication->files[0]->toCmsArray()['src'] }}" class="btn btn-outline-primary btn-lg btn-block"
                        download="{{ $publication->title }}" target="_blank" role="button">
                        <i class="far fa-file-pdf mr-2"></i>DOWNLOAD PDF
                    </a>
                </div>
            </div>
        </div>

    </main>

@stop
