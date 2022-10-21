<div>
    <div class="container-fluid">
        <div class="pb-4">
            <span>Filtro</span>
            <select name="" id="" wire:model="select">
                <option value="">Todos</option>
                <option value="eventos_futuros">Eventos futuros</option>
                <option value="eventos_ja_realizados">Eventos já realizados</option>
            </select>
        </div>
        <div class="row schedule-itens-list">
            @foreach ($exhibitions as $exhibition)
                <div class="col-lg-6">
                    <div class="row mt-4 g-0 border-bottom overflow-hidden pb-4">
                        <div class="col-4">
                            <img class="card-img-right flex-auto img-fluid" data-src="holder.js/200x250?theme=thumb"
                                 alt="Thumbnail [200x250]" src="{{ $exhibition->image('cover', 'mobile') }}"
                                 data-holder-rendered="true">
                        </div>
                        <div class="col-8 px-4 d-flex flex-column">
                            <h3 class="mb-2">{{ $exhibition->title }}</h3>
                            <h5 class="mb-2">DATA: <br>
                                {{ date('d/m/Y H:i', strtotime($exhibition->event_date)) }}
                            </h5>
                            <div class="mt-auto d-flex justify-content-end">
                                <a href="{{ route('exhibitions.show', ['slug' => $exhibition->slug]) }}"
                                   class="btn btn-bricks px-5">
                                    Leia Mais
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
