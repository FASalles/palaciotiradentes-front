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
                            <h4>Notícias em Destaque</h4>

                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                    </div>


                    <div class="row featured-news">
                        <div class="col-sm-4">
                            <div class="ts-our-blog-item">
                                <a class="" href="http://www.palaciotiradentes.rj.gov.br/romanos/">
                                    <figure>
                                        <img src="http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/13-569x340.jpg" alt="">
                                    </figure>
                                    <span class=""></span>
                                </a>
                                <div class="ts-our-blog-item-info">
                                    <h4 class="item-title">
                                        <a href="http://www.palaciotiradentes.rj.gov.br/romanos/">Descubra de onde vieram os símbolos que já deram o que falar</a>
                                    </h4>
                                    <ul class="essence-meta-latestpost">
                                        <li class="byline post-by"> Por <span class="author vcard">
              <a class="url fn n" href="http://www.palaciotiradentes.rj.gov.br/author/admin/">Redação Alerj</a>
            </span>
                                        </li>
                                        <li class="posted-on post-date">
                                            <a href="http://www.palaciotiradentes.rj.gov.br/romanos/" rel="bookmark">1 de maio de 2016</a>
                                        </li>
                                    </ul>
                                    <!--End .essence-meta-latestpost-->
                                </div>
                            </div>
                            <!--End .ts-our-blog-item-->
                        </div>
                        <div class=" col-sm-4">
                            <div class="ts-our-blog-item">
                                <a class="img-post" href="http://www.palaciotiradentes.rj.gov.br/lendasememorias/">
                                    <figure>
                                        <img src="http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/header-1-569x340.jpg" alt="">
                                    </figure>
                                    <span class="icon-hover"></span>
                                </a>
                                <div class="ts-our-blog-item-info">
                                    <h4 class="item-title">
                                        <a href="http://www.palaciotiradentes.rj.gov.br/lendasememorias/">Conheça lendas e curiosidades do Palácio Tiradentes.</a>
                                    </h4>
                                    <ul class="essence-meta-latestpost">
                                        <li class="byline post-by"> Por <span class="author vcard">
              <a class="url fn n" href="http://www.palaciotiradentes.rj.gov.br/author/admin/">Redação Alerj</a>
            </span>
                                        </li>
                                        <li class="posted-on post-date">
                                            <a href="http://www.palaciotiradentes.rj.gov.br/lendasememorias/" rel="bookmark">22 de abril de 2016</a>
                                        </li>
                                    </ul>
                                    <!--End .essence-meta-latestpost-->
                                </div>
                            </div>
                            <!--End .ts-our-blog-item-->
                        </div>
                        <div class=" col-sm-4">
                            <div class="ts-our-blog-item">
                                <a class="img-post" href="http://www.palaciotiradentes.rj.gov.br/tiradentes90/">
                                    <figure>
                                        <img src="http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/header-2-569x340.jpg" alt="">
                                    </figure>
                                    <span class="icon-hover"></span>
                                </a>
                                <div class="ts-our-blog-item-info">
                                    <h4 class="item-title">
                                        <a href="http://www.palaciotiradentes.rj.gov.br/tiradentes90/">A Casa de Leis completa 90 anos cheios de histórias</a>
                                    </h4>
                                    <ul class="essence-meta-latestpost">
                                        <li class="byline post-by"> Por <span class="author vcard">
              <a class="url fn n" href="http://www.palaciotiradentes.rj.gov.br/author/admin/">Redação Alerj</a>
            </span>
                                        </li>
                                        <li class="posted-on post-date">
                                            <a href="http://www.palaciotiradentes.rj.gov.br/tiradentes90/" rel="bookmark">22 de abril de 2016</a>
                                        </li>
                                    </ul>
                                    <!--End .essence-meta-latestpost-->
                                </div>
                            </div>
                            <!--End .ts-our-blog-item-->
                        </div>
                    </div>



                    <div class="row">
                        @foreach ($featuredPosts as $featuredPost)
                            <div class="col-md-4">
                                <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                                    <div class="col p-4">
                                        <div class="mb-1 text-muted">{{ date("d/m/Y", strtotime($featuredPost->publish_start_date)) }}
                                        </div>
                                        <h3 class="mb-2">{{ $featuredPost->title }}</h3>
                                        <a href="{{ route('posts.show', ['slug' => $featuredPost->slug]) }}"
                                           class="btn btn-bricks mt-2">Leia Mais</a>
                                    </div>
                                    <img class="card-img-right flex-auto d-none d-md-block img-fluid"
                                         data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"
                                         src="{{ $featuredPost->image('cover', 'mobile') }}" data-holder-rendered="true">
                                </div>
                            </div>
                        @endforeach
                    </div>


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

                    <livewire:posts-filter />

                </div>
            </div>
        </section>

    </main>

@stop
