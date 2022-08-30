@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">
            </div>
            
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Programação Cultural</h2>
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
                                <a href="{{ route('exhibitions') }}">
                                    <span>Programação Cultural</span>
                                </a>
                            </li>

                            <li class="trail-item trail-end">
                                <span>{{ $exhibition->title }}</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="col-md-10 offset-md-1 blog-main">

                <div class="blog-post">
                    <img class="img-fluid" src="{{ $exhibition->image('cover', 'default') }}">

                    <h2 class="blog-post-title mt-5">{{ $exhibition->title }}</h2>

                    <h5>{{ $exhibition->description }}</h5>
                    <p class="blog-post-meta">
                        {!! $exhibition->text !!}
                    </p>

                </div>

            </div>

        </div>

    </main>
@endsection
