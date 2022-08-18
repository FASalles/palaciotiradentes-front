@extends('layouts.layout')

@section('main')

    <main>

        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">
            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">{{ $post->title }}</h2>
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
                                <a href="{{route('posts')}}">
                                    <span>Blog</span>
                                </a>

                            </li>

                            <li class="trail-item trail-end">
                                <span>{{ $post->title }}</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="col-md-10 offset-md-1 blog-main">

                <div class="blog-post">
                    <img class="img-fluid" src="{{ $post->image('cover', 'default') }}">

                    <h2 class="blog-post-title mt-5">{{ $post->title }}</h2>

                    <h5>{{ $post->description }}</h5>
                    <p class="blog-post-meta">
                        {{ $post->publish_start_date->format('d/m/Y') }} | {{ $post->authors }}
                    </p>

                    {!! $post->subject !!}
                </div>

            </div>

        </div>

    </main>

@stop
