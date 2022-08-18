@extends('layouts.layout')

@section('main')


    <main>

        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">
            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Blog</h2>
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
                                <span>Blog</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>



        <section class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                            <h4>Notícias em Destaques</h4>
                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                    </div>
                    @foreach ($featuredPosts as $featuredPost)
                        <div class="col-md-6">
                            <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                                <div class="col p-4">
                                    <div class="mb-1 text-muted">{{ $featuredPost->publish_start_date->format('d/m/Y') }}
                                    </div>
                                    <h3 class="mb-2">{{ $featuredPost->title }}</h3>
                                    <p class="card-text mb-auto"> {{ $featuredPost->description }} </p>
                                    <a href="{{ route('posts.show', ['slug' => $featuredPost->slug]) }}"
                                        class="btn btn-bricks mt-2">Leia Mais</a>
                                </div>
                                <img class="card-img-right flex-auto d-none d-md-block"
                                    data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                                    src="{{ $featuredPost->image('cover', 'mobile') }}" data-holder-rendered="true"
                                    style="width: 200px; height: 250px;">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                            <h4>Últimas Notícias </h4>
                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                    </div>

                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                                <div class="col p-4">
                                    <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                                    <h3 class="mb-2">{{ $post->title }}</h3>
                                    <p class="card-text mb-auto"> {{ $post->description }} </p>
                                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}"
                                        class="btn btn-bricks mt-2">Leia Mais</a>
                                </div>
                                <img class="card-img-right flex-auto d-none d-md-block"
                                    data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                                    src="{{ $post->image('cover', 'mobile') }}" data-holder-rendered="true"
                                    style="width: 200px; height: 250px;">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

    </main>

@stop
