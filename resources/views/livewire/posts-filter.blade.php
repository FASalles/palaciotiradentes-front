<div>
    <div class="form-outline pb-2">
        <label class="form-label" for="typeText">FILTRO</label>
        <input type="text" wire:model="search" class="form-control" />

    </div>

    <div class="row mt-3">
        @foreach ($posts1 as $pos)
            <div class="col-md-6 blog-articles-list">
                <div class="row g-0 border-bottom overflow-hidden mt-4 pb-4 ">
                    <div class="col-4">
                        <img class="card-img-right flex-auto d-none d-md-block img-fluid" data-src="holder.js/200x250?theme=thumb"
                             alt="Thumbnail" src="{{ $pos->image('cover', 'mobile') }}" data-holder-rendered="true">
                    </div>
                    <div class="col-8 px-3 d-flex flex-column">
                        <div class="mb-1 text-muted">{{ $pos->publish_start_date->format('d/m/Y') }}</div>
                        <h3 class="mb-2">{{ $pos->title }}</h3>

                        <div class="mt-auto d-flex justify-content-end">
                            <a href="{{ route('posts.show', ['slug' => $pos->slug]) }}" class="btn btn-bricks mt-2">
                                Leia Mais
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if (count($posts1))
        <div class="pb-4 pt-2">
            {{ $posts1->links('livewire.livewire-pagination-links') }}
        </div>
    @endif
</div>
