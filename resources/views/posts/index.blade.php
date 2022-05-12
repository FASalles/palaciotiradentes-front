@extends( 'layouts.layout')

@section('main')


<main>

    <div class="header-banner-wrap">
        <div class="essence-banner-image" style="background-image: url('/images/bg-header-internas.jpeg')">
        </div>
        <div class="tr-content-title-banner">
            <div class="header-title-wrap">
                <h2 class="header-title" style="color: #ffffff">Blog</h2>
            </div>

            <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="trail-item trail-begin">
                            <a href="http://www.palaciotiradentes.rj.gov.br" rel="home">
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
                    <div class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                        <h4>Notícias em Destaques</h4>
                        <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                    </div>
                </div>
                @foreach($posts->where('featured','true') as $post)
                <div class="col-md-6">
                    <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                        <div class="col p-4">
                            <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                            <h3 class="mb-2">{{$post->title}}</h3>
                            <p class="card-text mb-auto"> {{ $post->description}} </p>
                            <a href="#" class="btn btn-bricks mt-2">Leia Mais</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{$post->image('cover', 'mobile')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mt-5 vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_dotted vc_sep_pos_align_center vc_sep_color_grey vc_separator-has-text">
                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                        <h4>Últimas Notícias </h4>
                        <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                    </div>
                </div>

                @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                        <div class="col p-4">
                            <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                            <h3 class="mb-2">{{$post->title}}</h3>
                            <p class="card-text mb-auto"> {{ $post->description}} </p>
                            <a href="#" class="btn btn-bricks mt-2">Leia Mais</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{$post->image('cover', 'mobile')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
<!--
            <div class="container">
                {{--

                            @foreach($news as $new)
                                <div class="row mb-2 mt-4">
                                    <div class="col-md-3 offset-md-1">
                                        <img class="img-fluid"  src="{{$new->image('cover', 'mobile')}}" >
                                    </div>

                                    <div class="col-md-7">
                                        <h3 class="mb-0">
                                            <a class="text-dark" href="{{$new->show_url}}"> {{$new->title}}</a>
                                        </h3>
                                        <div class="mb-1 text-muted">{{ $new->publish_start_date->format('d/m/Y') }}</div>
                                        <p class="card-text mb-auto"> {!! $new->lead !!}</p>
                                        <p>
                                            {!! $new->short_body !!}
                                        </p>
                                        <p class="mt-3">
                                            <a href="{{$new->show_url}}" >Continuar lendo</a>
                                        </p>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <hr>
                                    </div>
                                </div>
                            @endForEach

                --}}


                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17a7c4c9404%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17a7c4c9404%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17a7c4c9409%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17a7c4c9409%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>


            </div>

            {{--
                    <div class="container">
                        @foreach($news as $new)
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    <a href="{{$new->show_url}}">Link 1</a>
                                    </p>
                                    <div class="images">
                                        Desktop
                                        <img src="{{$new->image('cover', 'desktop')}}" />

                                        Mobile
                                        <img src="{{$new->image('cover', 'mobile')}}" />

                                        Flexible
                                        <img src="{{$new->image('cover', 'flexible')}}" />
                                    </div>
                                    <h1>{{$new->title}}</h1>
                                    <h2>{{$new->subtitle}}</h2>
                                    <div>{{$new->lead}}</div>
                                </div>
                            </div>
                        @endForEach
                    </div>
            --}}
!-->
        </section>

    </main>

@stop
