@php
    $align = $block->input('image_alignment');
    $dsk = $block->input('image_width_desktop') ?? 'col-12';
    $tblt = $block->input('image_width_tablet') ?? 'col-12';
@endphp

<section>
    <div class="row mb-4 {{ $align }}">
        <div class="{{ $tblt }} {{ $dsk }}">
            <img class="img-fluid" src="{!! $block->image('image', 'default') !!}" />
        </div>
        <div class="col">
            {!! $block->input('subject') !!}
        </div>
    </div>
</section>
