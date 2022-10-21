@extends('layouts.layout')
@section('main')
    <main class="mb-5">
        @include('home.partials.banner')

        @include('home.partials.bricks')

        @include('home.partials.history-block')

        <div class="container">
            <div class="row mb-2">
                <div class="col-md-6 last-news">
                    <h1><strong>Últimas&nbsp;</strong>Notícias</h1>
                    <div class="vc-separator mb-4"><span class="vc_sep_holder"><span class="vc_sep_line"></span></span>
                    </div>

                    @foreach ($posts->slice(0, 5) as $post)
                        <div class="row mt-4 pb-4 g-0 border-bottom overflow-hidden blog-articles-list">
                            <div class="col-12 col-md-4">
                                <img class="img-fluid"
                                     data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                                     src="{{ $post->image('cover', 'mobile') }}" data-holder-rendered="true">
                            </div>
                            <div class="col-12 col-md-8 mt-3 mt-md-0 px-3 d-flex flex-column">
                                <div class="mb-1 text-muted">
                                    {{ date('d/m/Y', strtotime($post->publish_start_date)) }}
                                </div>
                                <h3 class="mb-2">
                                    {{ $post->title }}
                                </h3>
                                <div class="mt-auto d-flex justify-content-end">
                                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn btn-bricks mt-2 px-4">
                                        Leia Mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="pt-3 pb-3">
                        <a class="btn btn-lg btn-primary text-white" href="{{ route('posts') }}" role="button">LEIA MAIS NOTÍCIAS</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <h1><strong>Assista&nbsp;</strong>aos Vídeos</h1>
                    <div class="vc-separator mb-4">
                        <span class="vc_sep_holder"><span class="vc_sep_line"></span></span>
                    </div>
                    @foreach ($featuredVideos as $featuredVideo)
                        <div class="row mt-2 g-0 overflow-hidden pb-3">
                            <div class="col-12">

                                <style>
                                    .embed-container {
                                        position: relative;
                                        padding-bottom: 56.25%;
                                        height: 0;
                                        overflow: hidden;
                                        max-width: 100%;
                                    }

                                    .embed-container iframe,
                                    .embed-container object,
                                    .embed-container embed {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                </style>

                                <div class='embed-container'>
                                    <x-embed url="{{ $featuredVideo->link }}" />
                                </div>

                            </div>
                        </div>
                    @endForEach
                </div>
            </div>
        </div>
    </main>
@endsection
