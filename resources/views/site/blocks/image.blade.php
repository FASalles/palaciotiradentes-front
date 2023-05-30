@php
    $alignClass = $block->input('image_alignment') == 'left' ? 'justify-content-start' : ($block->input('image_alignment') == 'right' ? 'justify-content-end' : 'justify-content-center');
    $dsk = $block->input('image_width_desktop') ?? 'col-lg-12';
    $tblt = $block->input('image_width_tablet') ?? 'col-md-12';
@endphp

<section class="container mt-4">
    <div class="d-flex flex-row">
        <div class="{{ $dsk }} {{ $tblt }} {{$alignClass}}">

        </div>
    </div>

    <div class="">
        <div class="d-flex {{$alignClass}}">
            <img class="img-fluid image-block-tag" style="height: auto; object-fit: cover;" src="{!! $block->image('image', 'default') !!}" />
        </div>
    </div>



</section>

<style>
    @media (min-width: 100px) {
        .image-block-tag {
            width: {{$tblt}}%;
        }
    }

    /*@media (min-width: 576px) {*/
    /*    .image-block-tag {*/
    /*        width: 10%;*/
    /*    }*/
    /*}*/

    @media (min-width: 768px) {
        .image-block-tag {
            width: {{$dsk}}%;
        }
    }

    /*@media (min-width: 992px) {*/
    /*    .image-block-tag {*/
    /*        width: 50%;*/
    /*    }*/
    /*}*/

    /*@media (min-width: 1200px) {*/
    /*    .image-block-tag {*/
    /*        width: 70%;*/
    /*    }*/
    /*}*/
</style>
