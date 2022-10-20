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
            @foreach ($banners as $banner)
                <div class="swiper-slide swiper-slide-home"
                    style="background-image: url({{ $banner->image('cover', 'default') }});">
                    <div class="col-12">
                        {!! $banner->text !!}
                        @if (isset($banner->button_text))
                            <button class="btn btn-md btn-primary">
                                <a class="text-decoration-none"
                                    href="{{ $banner->button_link }}">{{ $banner->button_text }}</a></button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- END-DESKTOP !-->

    
    <!-- START-MOBILE !-->
    <div class="swiper swiper-container mySwiper d-md-none">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide swiper-slide-home"
                    style="background-image: url({{ $banner->image('cover', 'mobile') }});">
                    <div class="col-12">
                        {!! $banner->text !!}
                        @if (isset($banner->button_text))
                            <button class="btn btn-md btn-primary">
                                <a class="text-decoration-none"
                                    href="{{ $banner->button_link }}">{{ $banner->button_text }}</a></button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- END-MOBILE !-->


</div>
