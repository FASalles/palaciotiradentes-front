@extends('layouts.layout')
@section('main')
    <main>
{{--        <div class="pswp-gallery pswp-gallery--single-column" id="photo-gallery">--}}
{{--            <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-2500.jpg"--}}
{{--               data-pswp-width="1669"--}}
{{--               data-pswp-height="2500"--}}
{{--               target="_blank">--}}
{{--                <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-200.jpg" alt="" />--}}
{{--            </a>--}}
{{--            <!-- cropped thumbnail: -->--}}
{{--            <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-2500.jpg"--}}
{{--               data-pswp-width="1875"--}}
{{--               data-pswp-height="2500"--}}
{{--               data-cropped="true"--}}
{{--               target="_blank">--}}
{{--                <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-200.jpg" alt="" />--}}
{{--                Cropped--}}
{{--            </a>--}}
{{--            <!-- data-pswp-src with custom URL in href -->--}}
{{--            <a href="https://unsplash.com"--}}
{{--               data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"--}}
{{--               data-pswp-width="2500"--}}
{{--               data-pswp-height="1666"--}}
{{--               target="_blank">--}}
{{--                <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg" alt="" />--}}
{{--            </a>--}}
{{--            <!-- Without thumbnail: -->--}}
{{--            <a href="http://example.com"--}}
{{--               data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/5/img-2500.jpg"--}}
{{--               data-pswp-width="2500"--}}
{{--               data-pswp-height="1668"--}}
{{--               target="_blank">--}}
{{--                No thumbnail--}}
{{--            </a>--}}
{{--            <!-- wrapped with any element: -->--}}
{{--            <div>--}}
{{--                <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-2500.jpg"--}}
{{--                   data-pswp-width="2500"--}}
{{--                   data-pswp-height="1667"--}}
{{--                   target="_blank">--}}
{{--                    <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-200.jpg" alt="" />--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}








            <div class="header-banner-wrap">
                <div class="essence-banner-image bg-header">

                </div>
                <div class="tr-content-title-banner">
                    <div class="header-title-wrap">
                        <h2 class="header-title" style="color: #ffffff">{{ $photo->title }}</h2>
                    </div>

                    <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li class="trail-item trail-begin">
                                    <a href="{{ route('home') }}" rel="home">
                                        <span>Home</span>
                                    </a>

                                </li>
                                <li class="trail-item trail-begin">
                                    <a href="{{ route('photos') }}">
                                        <span>Galeria de Fotos</span>
                                    </a>

                                </li>
                                <li class="trail-item trail-end">
                                    <span>{{ $photo->title }}</span>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        <div class="m-4 row d-flex justify-content-center photo-gallery"
             id="photo-gallery"
        >
            @foreach ($photo->imagesAsArrays('slideshow', 'default') as $image)
                <a class="m-1 p-0 content col-sm-6 col-md-5 col-lg-4 col-xl-3" data-pswp-src="{{ $image['src'] }}"
                   data-pswp-width="{{$image['width']}}"
                   data-pswp-height="{{$image['height']}}" target="_blank">
                    <img caption="{{$image['caption']}}" class="content-image" src="{{ $image['src'] }}">
                    <div class="content-overlay"></div>
                    <div class="content-details fadeIn-bottom">
                        <h3 class="p-1 content-title">{{$image['caption']}}</h3>
                        <i class="fa-xl fa-solid fa-magnifying-glass"></i>
                    </div>
                </a>
            @endforeach
        </div>
        </main>
    @endsection
