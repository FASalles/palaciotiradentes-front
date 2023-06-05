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
                                <a href="{{ route('home') }}" rel="home">
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
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div
                            class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                            <h4>Notícias em Destaque</h4>

                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                    </div>


                    <div class="row featured-news mt-4">

                        @foreach ($featuredPosts as $featuredPost)
                            <div class="col-12 col-xl-4">
                                <div class="featured-news-item">
                                    <a class="" href="{{ route('posts.show', ['slug' => $featuredPost->slug]) }}">
                                        <figure class="image-container">
                                            <img src="{{ $featuredPost->image('cover', 'default') }}" alt=""
                                                class="img-fluid full-width">
                                        </figure>
                                        <span class=""></span>
                                    </a>
                                    <div class="featured-news-item-info">
                                        <h4 class="item-title">
                                            <a href="{{ route('posts.show', ['slug' => $featuredPost->slug]) }}">
                                                {{ $featuredPost->title }}
                                            </a>
                                        </h4>

                                        <ul class="text-center">
                                            <li class="byline post-by"> Por
                                                <span class="author vcard">
                                                    <a class="url fn n"
                                                        href="http://www.palaciotiradentes.rj.gov.br/author/admin/">
                                                        Redação Alerj
                                                    </a>
                                                </span>
                                            </li>
                                            <li class="posted-on post-date">
                                                <a href="http://www.palaciotiradentes.rj.gov.br/romanos/"
                                                    rel="bookmark">{{ date('d/m/Y', strtotime($featuredPost->publish_start_date)) }}</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>

            <div class="container-fluid latest-news">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                            <h4>Todas as Notícias </h4>

                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                    </div>

                    <livewire:posts-filter />

                </div>
            </div>
        </section>

    </main>

@stop
