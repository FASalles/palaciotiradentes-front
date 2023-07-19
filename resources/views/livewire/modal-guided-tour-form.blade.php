<div>
    @php
        $guestList = session('guestList', []);
    @endphp

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        + Incluir Convidados
    </button>

    <form wire:submit.prevent="save">
        @csrf
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered" role="document" wire:ignore.self>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Preencher os dados</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-floating col-md-12 mb-3">
                                <input type="text" class="form-control" wire:model.defer='fullNameGuest' id="fullNameGuest" name="fullNameGuest" placeholder="fullNameGuest">
                                <label for="fullNameGuest" style="margin-left: 10px;"> <i class="fa-solid fa-user fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> Nome Completo *</label>
                                @error('fullNameGuest')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating col-md-12 mb-3">
                                <input type="text" class="form-control" wire:model.defer='form.socialNameGuest' id="socialNameGuest" name="socialNameGuest" placeholder="socialNameGuest">
                                <label for="socialNameGuest" style="margin-left: 10px;"> <i class="fa-regular fa-user fa-lg" style="margin-right: 20px; margin-left: 10px;"></i>Nome Social</label>
                                @error('socialNameGuest')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating col-md-6 mb-3">
                                <input type="date" class="form-control" wire:model.defer='birthDateGuest' id="birthDateGuest" name="birthDateGuest" placeholder="birthDateGuest">
                                <label for="birthDateGuest" style="margin-left: 10px;">Data de Nascimento *</label>
                                @error('birthDateGuest')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating col-md-6 mb-3">
                                <select class="form-select" name="genderIdentityGuest" id="genderIdentityGuest" wire:model="genderIdentityGuest">
                                <option value="">selecione uma opção</option>
                                    <option value="option1">Masculino</option>
                                    <option value="option2">Feminino</option>
                                    <option value="option3">Outros</option>
                                    <option value="option4">Prefiro não informar</option>
                                </select>
                                <label for="genderIdentityGuest" style="margin-left: 10px;" class="form-label">Qual seu gênero? *</label>
                                @error('genderIdentityGuest')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-floating col-md-6 mb-3">
                                <select class="form-select @error('disability') is-invalid @enderror" name="disability" id="disability" x-ref="disability" wire:model="disability">
                                <option value="">selecione uma opção</option>
                                    <option value="yes">Sim</option>
                                    <option value="no">Não</option>
                                </select>
                                <label for="disability" style="margin-left: 10px;" class="form-label">Possui Alguma Deficiência? *</label>
                                @error('disability')
                                <span class="text-danger">{{ $message }}</span>
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
                        <button type="submit" class="btn btn-primary">
                            + Incluir Convidados
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
