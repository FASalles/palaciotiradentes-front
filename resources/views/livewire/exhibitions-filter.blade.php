<div>
    <div class="container-fluid">
        <div>
            <span>Filtro</span>
            <select name="" id="" wire:model="select">
                <option value="">Filtrar</option>
                <option value="1">Eventos futuros</option>
                <option value="2">Eventos já realizados</option>
            </select>
        </div>
        <div class="row">
            @foreach ($exhibitions as $exhibition)
                <div class="col-md-6">
                    <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                        <div class="col p-4">
                            <h3 class="mb-2">{{ $exhibition->title }}</h3>
                            <h5 class="mb-2">DATA: {{ date('d/m/Y H:i', strtotime($exhibition->event_date)) }}</h5>
                            <p class="card-text mb-auto"> {{ $exhibition->description }} </p>
                            <a href="{{ route('exhibitions.show', ['slug' => $exhibition->slug]) }}"
                                class="btn btn-bricks mt-2">Leia
                                Mais</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                            alt="Thumbnail [200x250]" src="{{ $exhibition->image('cover', 'mobile') }}"
                            data-holder-rendered="true" style="width: 200px; height: 250px;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
