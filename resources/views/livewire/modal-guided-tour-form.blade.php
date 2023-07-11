<div>
    @php
        $guestList = session('guestList', []);
    @endphp

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        + Incluir Convidados
    </button>

    <form action="{{route('Modal.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" wire:ignore.self>
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Preencher os dados</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="fullNameGuest" class="form-label">Nome Completo *</label>
                                        <input type="text" class="form-control" id="fullNameGuest" name="fullNameGuest">
                                    </div>
                                    @error('fullNameGuest')
                                    <div class="invalid-feedback">
                                        @foreach($errors->get('fullNameGuest') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="socialNameGuest" class="form-label">Nome Social</label>
                                        <input type="text" class="form-control @error('socialNameGuest') is-invalid @enderror" name="socialNameGuest" id="socialNameGuest" value="{{ old('socialNameGuest') }}">

                                        @if($errors->has('socialNameGuest'))
                                            <div class="invalid-feedback">
                                                @foreach($errors->get('socialNameGuest') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </div>
                                            @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="birthDateGuest" class="form-label">Data de Nascimento *</label>
                                        <input type="date" class="form-control @error('birthDateGuest') is-invalid @enderror" name="birthDateGuest" id="birthDateGuest" value="{{ old('birthDateGuest') }}">
                                        @error('birthDateGuest')
                                        <div class="invalid-feedback">
                                            @foreach($errors->get('birthDateGuest') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="genderIdentityGuest" class="form-label">Qual seu gênero? *</label>
                                        <select class="form-select @error('genderIdentityGuest') is-invalid @enderror" name="genderIdentityGuest" id="genderIdentityGuest">
                                            <option value="">selecione uma opção</option>
                                            <option value="option1">Masculino</option>
                                            <option value="option2">Feminino</option>
                                            <option value="option3">Outros</option>
                                            <option value="option4">Prefiro não informar</option>
                                        </select>
                                        @error('genderIdentityGuest')
                                        <div class="invalid-feedback">
                                            @foreach($errors->get('genderIdentityGuest') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-floating col-md-6 mb-3">
                                        <select class="form-select @error('disability') is-invalid @enderror" name="disability" id="disability" x-ref="disability" wire:model.debounce.500ms="disability">
                                            <option value="">selecione uma opção</option>
                                            <option value="yes">Sim</option>
                                            <option value="no">Não</option>
                                        </select>
                                        <label for="disability" style="margin-left: 10px;" class="form-label">Possui Alguma Deficiência? *</label>
                                        @error('disability')
                                        <div class="invalid-feedback">
                                            @foreach($errors->get('disability') as $error)
                                                {{ $error}}
                                            @endforeach()
                                        </div>
                                        @enderror
                                    </div>

                                    @if ($showDisabilityType)
                                        <div class="col-md-4 mb-3">
                                            <p class=" @error('tipeOfDisability') is-invalid @enderror">Tipo de Deficiência *</p>
                                            <div class="form-group">
                                                <label for="option1" class="form-check-label">
                                                    <input type="checkbox" id="option1" name="tipeOfDisability[]" value="Opção 1" class="form-check-input"> Física
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="option2" class="form-check-label">
                                                    <input type="checkbox" id="option2" name="tipeOfDisability[]" value="Opção 2" class="form-check-input"> Visual
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="option3" class="form-check-label">
                                                    <input type="checkbox" id="option3" name="tipeOfDisability[]" value="Opção 3" class="form-check-input"> Mental
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="option4" class="form-check-label">
                                                    <input type="checkbox" id="option4" name="tipeOfDisability[]" value="Opção 4" class="form-check-input"> Intelectual
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="option5" class="form-check-label">
                                                    <input type="checkbox" id="option5" name="tipeOfDisability[]" value="Opção 5" class="form-check-input"> Psicossocial
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="option6" class="form-check-label">
                                                    <input type="checkbox" id="option6" name="tipeOfDisability[]" value="Option 6" class="form-check-input"> Auditiva
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                + Incluir Convidados
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

{{--    <script>--}}
{{--        document.addEventListener("DOMContentLoaded", function() {--}}
{{--            // adicione um evento de clique ao botão "Adicionar"--}}
{{--            document.getElementById("btnAddGuest").addEventListener("click", function() {--}}
{{--                // obtem o valor do campo "socialName" no modal--}}
{{--                var socialName = document.getElementById("socialName").value;--}}

{{--                // redirecione o usuário para a view original com o conteúdo adicionado como parâmetro na url--}}
{{--                window.location.href = window.location.origin + "/guided-group-tour?socialName=" + encodeURIComponent(socialName);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
</div>
