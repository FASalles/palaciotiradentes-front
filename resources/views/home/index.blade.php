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

                    @foreach ($posts as $post)
                        <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                            <div class="col p-4">
                                <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>

                                <h3 class="mb-2">{{ $post->title }}</h3>
                                <p class="card-text mb-auto"> {{ $post->description }} </p>
                                <a href="posts/{{ $post->slug }}" class="btn btn-bricks mt-2">Leia Mais</a>
                            </div>
                        </div>
                    @endforeach

                </div>



                <div class="col-md-6">
                    @foreach ($featuredVideos as $featuredVideo)
                        <div class="row pt-4">
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
