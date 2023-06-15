<!doctype html>
<html lang="en">

<head>
    <title>#madewithtwill website</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    @extends('layouts.layout')

    @section('main')

        {{-- SCRIPT DE INICIALIZAÇÂO DO SWIPER --}}

        <script type="module">
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

        <div class="container-fluid p-0">

            <!-- START-DESKTOP !-->
            <div class="swiper swiper-container mySwiper mb-4 d-none d-md-block">
                <div class="swiper-wrapper">

                    <div class="swiper-slide swiper-slide-home"
                        style="background-image: url({{ $item->image('cover', 'default') }});">
                        <div class="col-12 padded-children">
                            {!! $item->text !!}
                            @if (isset($item->button_text))
                                <button class="btn btn-md btn-primary">
                                    <a class="text-decoration-none"
                                        href="{{ $item->button_link }}">{{ $item->button_text }}</a></button>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- END-DESKTOP !-->


            <!-- START-MOBILE !-->
            <div class="swiper swiper-container mySwiper d-md-none">
                <div class="swiper-wrapper">

                    <div class="swiper-slide swiper-slide-home"
                        style="background-image: url({{ $item->image('cover', 'mobile') }});">
                        <div class="col-12">
                            {!! $item->text !!}
                            @if (isset($item->button_text))
                                <button class="btn btn-md btn-primary">
                                    <a class="text-decoration-none"
                                        href="{{ $item->button_link }}">{{ $item->button_text }}</a></button>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- END-MOBILE !-->


        </div>

    @stop

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
