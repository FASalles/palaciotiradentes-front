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

                @foreach($posts as $post)
                <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                    <div class="col p-4">
                        <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>

                        <h3 class="mb-2">{{$post->title}}</h3>
                        <p class="card-text mb-auto"> {{ $post->description}} </p>
                        <a href="#" class="btn btn-bricks mt-2">Leia Mais</a>
                    </div>
                </div>
                @endforeach

            </div>



            <div class="col-md-6">

                <h1><strong>Assista&nbsp;</strong>aos Vídeos</h1>
                <div class="vc-separator mb-4"><span class="vc_sep_holder"><span class="vc_sep_line"></span></span>
                </div>

                <div class="row mt-5 g-0  overflow-hidden flex-md-row mb-5  h-md-250 position-relative">
                    <div class="wpb_wrapper">
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
                        <div class="embed-container"><iframe src="https://www.youtube.com/embed/7m43iOJpqtg" frameborder="0" allowfullscreen=""></iframe></div>
                    </div>
                </div>

                <div class="row g-0  overflow-hidden flex-md-row mb-5  h-md-250 position-relative">
                    <div class="wpb_wrapper">
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
                        <div class="embed-container"><iframe src="https://www.youtube.com/embed/hzjDVLq3sik" frameborder="0" allowfullscreen=""></iframe></div>
                    </div>
                </div>

                <div class="row g-0  overflow-hidden flex-md-row mb-5  h-md-250 position-relative">
                    <div class="wpb_wrapper">
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
                        <div class="embed-container"><iframe src="https://www.youtube.com/embed/fQrOez6AkLI" frameborder="0" allowfullscreen=""></iframe></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

@endsection