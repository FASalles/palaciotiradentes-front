<div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <select wire:model="month" class="form-select">
                <option value="">Selecione o mês</option>
                @foreach ($months as $month)
                    <option value="{{ $month['number'] }}">{{ $month['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 col-lg-3 mt-3 mt-md-0">
            <select wire:model="year" class="form-select">
                <option value="">Selecione o ano</option>
                @foreach ($years as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div wire:loading wire:target="month, year">
                <h3 class="mt-4 mb-4">Carregando....</h3>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div wire:loading.remove>
                @forelse ($exhibitions as $item)
                    <div class="row mt-1 border-bottom mb-5 d-flex align-items-center pb-4">
                        <div class="col-6 offset-3 offset-md-0 col-md-3 col-lg-2 col-xxl-1 text-center">
                            <p
                                class="fs-2 fw-bolder lh-1 bg-agenda text-white rounded-circle p-3 py-4 py-md-5 py-lg-4 py-xxl-3">
                                {{ date('d', strtotime($item->event_date)) }} <br>
                                {{ \Carbon\Carbon::parse($item->event_date)->locale('pt_BR')->isoFormat('MMM') }}
                                <br>{{ date('y', strtotime($item->event_date)) }}
                                {{-- {{ date('M', strtotime($item->event_date)) }} <br> --}}
                            </p>
                        </div>
                        <div class="col-12 col-md-9 col-lg-10 col-xxl-11 text-center text-md-start">
                            <a href="{{ route('exhibitions.show', ['slug' => $item->slug]) }}"
                                class="text-decoration-none p-0 text-center text-md-start">
                                <h3 class="">
                                    {{ $item->title }}
                                </h3>
                                <p>
                                    <span class="me-3">Data:</span> {{ date('d/m/Y', strtotime($item->event_date)) }}
                                </p>

                                @if (!empty($item->event_time_end))
                                    <p>
                                        <span class="me-3">Horário: de
                                            {{ date('H:i', strtotime($item->event_date)) }} a
                                            {{ date('H:i', strtotime($item->event_time_end)) }}
                                    </p>
                                @else
                                    <p>
                                        <span
                                            class="me-3">Horário:</span>{{ date('H:i', strtotime($item->event_date)) }}
                                    </p>
                                @endif

                                <p>
                                    <span class="me-3">Local:</span>{{ $item->place }}
                                </p>
                            </a>
                        </div>
                    </div>
                @empty
                    <h1>Nenhum Evento Encontrado</h1>
                    <p>Parece que não conseguimos encontrar o que você está procurando.</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
