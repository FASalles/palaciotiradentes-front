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

<div class="container-fluid">

    <div class="swiper swiper-container mySwiper mb-4">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide"
                     style="background-image: url({{ $banner->image('cover', 'default') }});
            background-size:cover; display:flex; justify-content: center;
            align-items: center; height:900px;">
                    <div class="col-12" style="color: {{ $banner->text_color }};">
                        <h1>{{ $banner->title }}</h1>
                        <h1>{!! $banner->text !!}</h1>
                        <button class="btn btn-md btn-primary"><a class="text-decoration-none"
                                                                  href="{{ $banner->button_link }}">{{ $banner->button_text }}</a></button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>


</div>
