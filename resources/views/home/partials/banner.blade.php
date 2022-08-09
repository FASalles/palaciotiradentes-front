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



{{-- HTML DO SWIPER --}}


<!-- Swiper -->
{{-- <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/images/swiper/header-1.jpeg" /></div>
        <div class="swiper-slide"><img src="/images/swiper/header-2.jpeg" /></div>
        <div class="swiper-slide"><img src="/images/swiper/header-3.jpeg" /></div>
        <div class="swiper-slide"><img src="/images/swiper/header-4.jpeg" /></div>

    </div>
    <div class="swiper-pagination"></div>
</div> --}}



<div class="swiper swiper-container mySwiper mb-4">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide"
                style="background-image: url({{ $banner->image('cover', 'default') }}); 
            background-size:cover; display:flex; justify-content: center; 
            align-items: center; height:900px;">
                <div class="col-12" >
                    <h1 style="color: {{ $banner->text_color }};">{{ $banner->title }}</h1>
                    <h1>{!! $banner->text !!}</h1>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
