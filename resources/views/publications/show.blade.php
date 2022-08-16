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
                                <a href="/" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>

                            <li class="trail-item trail-begin">
                                <a href="/publications" rel="home">
                                    <span>Publicações</span>
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

        <div class="container page-content">
            <div class="col-md-10 offset-md-1 blog-main">

                <div class="blog-post">
                    <img class="img-fluid" src="{{ $publication->image('cover', 'default') }}">

                    <h2 class="blog-post-title mt-5">{!! $publication->text !!}</h2>

                    <h5>{{ $publication->description }}</h5>

                    <a  class="btn btn-outline-primary btn-lg btn-block" target="_blank" role="button">
                        <i class="far fa-file-pdf mr-2"></i>DOWNLOAD PDF
                    </a>

                    
                </div>





                <!-- /blog-post -->

            </div>
            <!-- /.blog-main -->
        </div>

    </main>

@stop
