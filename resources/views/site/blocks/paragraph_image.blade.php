@php
    $align = $block->input('image_alignment');
    $dsk = $block->input('image_width_desktop') ?? 'col-lg-12';
    $tblt = $block->input('image_width_tablet') ?? 'col-md-12';
@endphp

<section>
    <div class="row mb-4">
        @if ($align == 'left')
            <div class="{{ $tblt }} {{ $dsk }}">
                <img class="img-fluid" src="{!! $block->image('block_img', 'free') !!}" />
            </div>
            <div class="col">
                {!! $block->input('subject') !!}
            </div>
            {{-- <div class="col">
            {!! $block->input('subject') !!}
        </div> --}}
        @else
            <div class="col">
                {!! $block->input('subject') !!}
            </div>
            <div class="{{ $tblt }} {{ $dsk }}">
                <img class="img-fluid" src="{!! $block->image('block_img', 'free') !!}" />
            </div>
        @endif
    </div>
</section>
