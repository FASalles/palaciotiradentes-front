<div>
    <div class="form-outline pb-2">
        <label class="form-label" for="typeText">FILTRO</label>
        <input type="text" wire:model="search" class="form-control" />

    </div>
    @foreach ($posts1 as $pos)
        <div class="col-md-6">
            <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                <div class="col p-4">
                    <div class="mb-1 text-muted">{{ $pos->publish_start_date->format('d/m/Y') }}</div>
                    <h3 class="mb-2">{{ $pos->title }}</h3>
                    <a href="{{ route('posts.show', ['slug' => $pos->slug]) }}" class="btn btn-bricks mt-2">Leia
                        Mais</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" src="{{ $pos->image('cover', 'mobile') }}" data-holder-rendered="true"
                    style="width: 200px; height: 250px;">
            </div>
        </div>
    @endforeach
    @if (count($posts1))
        <div class="pb-4 pt-2">
            {{ $posts1->links('livewire.livewire-pagination-links') }}
        </div>
    @endif
</div>
