<div>
    @if($errors->any())
        <div class="col-md-8 offset-md-2 alert alert-danger text-center mt-5 pt-4 pb-4">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <h3 class="text-center">Agendamento Individual</h3>
        <a href="http://localhost:10010/guided-group-tour" style="font-size: smaller; color: blue; display: block; text-align: center;">(Deseja acessar o agendamento coletivo?)</a>
        <br><br>
        <h1>Preencha seus dados</h1>
        <h6>* Campos obrigatórios</h6>
        <br><br><br>

        <form action="{{route('GuidedTour.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="row">
                <div class="form-floating col-md- mb-3">
                    <input type="date" class="form-control @error('visitingDate') is-invalid @enderror" id="visitingDate"
                    name="visitingDate" value="{{old('visitingDate')}}">
                    <label for="visitingDate" style="margin-left: 10px;" class="form-label">Data da Visita *</label>
                    @error('visitingDate')
                    <div class="invalid-feedback">
                        @foreach($errors->get('visitingDate') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>
                <div class="form-floating col-md-4 mb-3">
                    <input type="time" class="form-control @error('visitingHour') is-invalid @enderror" name="visitingHour" id="visitingHour">
                    <label for="visitingHour" style="margin-left: 10px;" class="form-label">Hora da Visita *</label>
                    @error('visitingHour')
                    <div class="invalid-feedback">
                        @foreach($errors->get('visitingHour') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="form-floating mb-3 col-md-6">
                    <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" id="fullName" value="{{ old('fullName') }}" placeholder="fullName">
                    <label for="fullName" style="margin-left: 10px;">
                        <i class="fa-solid fa-user fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> Nome Completo *
                    </label>
                    @error('fullName')
                    <div class="invalid-feedback">
                        @foreach($errors->get('fullName') as $error)
                            {{ $error }}
                        @endforeach()
                    </div>
                    @enderror
                </div>
            </div>
                <div class="row">
                    <div class="form-floating col-md-6 mb-3">
                        <input type="text"class="form-control @error('socialName') is-invalid @enderror" name="socialName" id="socialName" value="{{ old('socialName') }}" placeholder="socialName">
                        <label for="socialName" style="margin-left: 10px;">
                            <i class="fa-regular fa-user fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> Nome Social *
                        </label>

                        @if($errors->has('socialName'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('socialName') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-floating col-md-3 mb-3">
                            <input type="date" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" id="birthDate" value="{{ old('birthDate') }}">
                            <label for="birthDate" style="margin-left: 10px;" class="form-label">Data de Nascimento *</label>
                            @error('birthDate')
                            <div class="invalid-feedback">
                                @foreach($errors->get('birthDate') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating col-md-3 mb-3">
                            <select class="form-select @error('genderIdentity') is-invalid @enderror" name="genderIdentity" id="genderIdentity" value="{{ old('genderIdentity') }}">
                                <option value="">selecione uma opção</option>
                                <option value="option1">Masculino</option>
                                <option value="option2">Feminino</option>
                                <option value="option2">Outros</option>
                                <option value="option2">Prefiro não informar</option>
                            </select>
                            <label for="genderIdentity" style="margin-left: 10px;" class="form-label">Qual seu gênero? *</label>
                            @error('genderIdentity')
                            <div class="invalid-feedback">
                                @foreach($errors->get('genderIdentity') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-floating mb-3">
                                <select class="form-select @error('disability') is-invalid @enderror" name="disability" id="disability" x-ref="disability" wire:model.debounce.500ms="disability" wire:ignore x-on:change="isYesSelected = ($event.target.value === 'yes')">
                                    <option value="">Selecione uma opção</option>
                                    <option value="yes">Sim</option>
                                    <option value="no">Não</option>
                                </select>
                                <label for="disability" class="form-label">Possui Alguma Deficiência? *</label>
                                @error('disability')
                                <div class="invalid-feedback">
                                    @foreach($errors->get('disability') as $error)
                                        {{ $error}}
                                    @endforeach()
                                </div>
                                @enderror
                            </div>
                        </div>

                        @if ($showDisabilityType)
                            <div class="col-md-6" style="transition: height 0.3s ease;">
                                <div class="mb-3">
                                    <p class="@error('typeOfDisability') is-invalid @enderror">Tipo de Deficiência *</p>
                                    <div class="form-group">
                                        <label for="option1" class="form-check-label">
                                            <input type="checkbox" id="option1" name="typeOfDisability[]" value="Opção 1" class="form-check-input"> Física
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="option2" class="form-check-label">
                                            <input type="checkbox" id="option2" name="typeOfDisability[]" value="Opção 2" class="form-check-input"> Visual
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="option3" class="form-check-label">
                                            <input type="checkbox" id="option3" name="typeOfDisability[]" value="Opção 3" class="form-check-input"> Mental
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="option4" class="form-check-label">
                                            <input type="checkbox" id="option4" name="typeOfDisability[]" value="Opção 4" class="form-check-input"> Intelectual
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="option5" class="form-check-label">
                                            <input type="checkbox" id="option5" name="typeOfDisability[]" value="Opção 5" class="form-check-input"> Psicossocial
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="option6" class="form-check-label">
                                            <input type="checkbox" id="option6" name="typeOfDisability[]" value="Option 6" class="form-check-input"> Auditiva
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>


                    <div class="row">
                    <div class="form-floating col-md-4 mb-3">
                        <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" x-ref="country" wire:model.debounce.500ms="country" wire:ignore>
                            <option value="Brasil" selected>Brasil</option>
                            <option value="França">França</option>
                        </select>
                        <label for="country" style="margin-left: 10px;" class="form-label">País *</label>
                    </div>

                    @if ($showUfCity)
                        <div class="form-floating col-md-4 mb-3">
                            <select class="form-select @error('fu') is-invalid @enderror" name="fu" id="fu">
                                <option value="">selecione uma opção</option>
                                <option value="option1">Rio de Janeiro</option>
                                <option value="option2">São Paulo</option>
                            </select>
                            <label for="fu" style="margin-left: 10px;" class="form-label">Estado *</label>
                            @error('fu')
                            <div class="invalid-feedback">
                                @foreach($errors->get('fu') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating col-md-4 mb-3">
                            <select class="form-select @error('city') is-invalid @enderror" name="city" id="city">
                                <option value="">selecione uma opção</option>
                                <option value="option1">Campos</option>
                                <option value="option2">Maricá</option>
                            </select>
                            <label for="city" style="margin-left: 10px;" class="form-label">Cidade *</label>
                            @error('city')
                            <div class="invalid-feedback">
                                @foreach($errors->get('city') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>
                    @endif

                    @if (!$showUfCity)
                        <div class="form-floating col-md-4 mb-3">
                            <input type="text" class="form-control @error('city2') is-invalid @enderror" name="city2" id="city2" value="{{ old('city2') }}">
                            <label for="city2" style="margin-left: 10px;" class="form-label">Cidade *</label>
                        </div>
                    @endif
                </div>

                <div class="form-floating col-md-3 mb-3">
                    <select class="form-select @error('typeOfDocument') is-invalid @enderror" name="typeOfDocument" id="typeOfDocument" x-ref="state" wire:model.debounce.500ms="state" wire:ignore>
                        <option value="CPF" selected>CPF</option>
                        <option value="RG">RG</option>
                        <option value="Passaporte">Passaporte</option>
                    </select>
                    <label for="typeOfDocument" style="margin-left: 10px;" class="form-label">Tipo de Documento *</label>
                    @error('typeOfDocument')
                    <div class="invalid-feedback">
                        @foreach($errors->get('typeOfDocument') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

                <div class="form-floating col-md-3 mb-3">
                    <input type="text" class="form-control @error('document') is-invalid @enderror" name="document" id="document" value="{{ old('document') }}" placeholder="document">
                    <label for="document" style="margin-left: 10px;">Número / Código *</label>
                    @error('document')
                    <div class="invalid-feedback">
                        @foreach($errors->get('document') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

                @if ($showState)
                    <div class="form-floating col-md-3 mb-3">
                        <select class="form-select @error('state') is-invalid @enderror" name="state" id="state">
                            <option value="">selecione uma opção</option>
                            <option value="estado">estado</option>
                        </select>
                        <label for="state" style="margin-left: 10px;" class="form-label">Estado de Expedição*</label>
                        @error('state')
                        <div class="invalid-feedback">
                            @foreach($errors->get('state') as $error)
                                {{ $error}}
                            @endforeach()
                        </div>
                        @enderror
                    </div>
                @endif
                <div class="row"></div>

                <div class="form-floating col-md-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.debounce.1000ms="email" name="email" id="email" value="{{ old('email') }}" placeholder="email@domínio.com">
                    <label for="email" style="margin-left: 10px;"><i class="fa-solid fa-envelope fa-lg" style="margin-right: 20px; margin-left: 10px;"></i>E-mail *</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                @if ($showEmailConfirmation)
                    <div class="form-floating col-md-4">
                        <input type="email" class="form-control @error('emailConfirmation') is-invalid @enderror" wire:model.lazy="emailConfirmation" name="emailConfirmation" id="emailConfirmation" value="{{ old('emailConfirmation') }}" placeholder="email@domínio.com" onpaste="return false;">
                        <label for="emailConfirmation" style="margin-left: 10px;"><i class="fa-solid fa-envelope-circle-check fa-lg" style="margin-right: 20px; margin-left: 10px;"></i>Confirmação do E-mail *</label>
                        @error('emailConfirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                @endif

                <div>
                    @if(config('recaptcha.enabled'))
                        <br><br>
                        <div class="row text-left mb-2">
                            <div class="col-6" wire:ignore>
                                {!! htmlFormSnippet() !!}
                            </div>
                        </div>
                    @endIf
                </div>

                    <div class="col-md-12 mb" wire:ignore>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br>
</div>
