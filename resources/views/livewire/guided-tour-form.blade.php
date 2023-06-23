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

        <form action="{{route('create.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="visitingDate" class="form-label">Data da Visita *</label>
                    <input type="date" class="form-control @error('visitingDate') is-invalid @enderror" id="visitingDate"
                    name="visitingDate" value="{{old('visitingDate')}}">
                    @error('visitingDate')
                    <div class="invalid-feedback">
                        @foreach($errors->get('visitingDate') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="visitingHour" class="form-label">Hora da Visita *</label>
                    <input type="time" class="form-control @error('visitingHour') is-invalid @enderror" name="visitingHour" id="visitingHour">
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
                <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Nome Completo *</label>
                    <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" id="fullName" value="{{ old('fullName') }}">

                    @error('fullName')
                    <div class="invalid-feedback">
                        @foreach($errors->get('fullName') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="socialName" class="form-label">Nome Social *</label>
                        <input type="text"class="form-control @if($errors->has('socialName')) is-invalid @endif" name="socialName" id="socialName" value="{{ old('socialName') }}">

                        @if($errors->has('socialName'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('socialName') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="birthDate" class="form-label">Data de Nascimento *</label>
                        <input type="date" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" id="birthDate" value="{{ old('birthDate') }}">
                        @error('birthDate')
                        <div class="invalid-feedback">
                            @foreach($errors->get('birthDate') as $error)
                                {{ $error}}
                            @endforeach()
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="genderIdentity" class="form-label">Qual seu gênero? *</label>
                        <select class="form-select @error('genderIdentity') is-invalid @enderror" name="genderIdentity" id="genderIdentity" value="{{ old('genderIdentity') }}">
                            <option value="">selecione uma opção</option>
                            <option value="option1">Masculino</option>
                            <option value="option2">Feminino</option>
                            <option value="option2">Outros</option>
                            <option value="option2">Prefiro não informar</option>
                        </select>
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
                    <div class="col-md-4 mb-3">
                        <label for="disability" class="form-label">Possui Alguma Deficiência? *</label>
                        <select class="form-select @error('disability') is-invalid @enderror" name="disability" id="disability" x-ref="disability" wire:model.debounce.500ms="disability" wire:ignore>
                            <option value="">selecione uma opção</option>
                            <option value="yes">Sim</option>
                            <option value="no">Não</option>
                        </select>
                        @error('disability')
                        <div class="invalid-feedback">
                            @foreach($errors->get('disability') as $error)
                                {{ $error}}
                            @endforeach()
                        </div>
                        @enderror
                    </div>

                    <br><br><br><br><br><br><br><br><br><br>


                    @if ($showDisabilityType)
                        <div class="col-md-4 mb-3">
                            <p class=" @error('tipeOfDisability') is-invalid @enderror">Tipo de Deficiência *</p>
                            <div class="form-group">
                                <label for="option1" class="form-check-label">
                                    <input type="checkbox" id="option1" name="tipeOfDisability[]" value="Opção 1" class="form-check-input"> Deficiência Física
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="option2" class="form-check-label">
                                    <input type="checkbox" id="option2" name="tipeOfDisability[]" value="Opção 2" class="form-check-input"> Deficiência Visual
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="option3" class="form-check-label">
                                    <input type="checkbox" id="option3" name="tipeOfDisability[]" value="Opção 3" class="form-check-input"> Deficiência Mental
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="option4" class="form-check-label">
                                    <input type="checkbox" id="option4" name="tipeOfDisability[]" value="Opção 4" class="form-check-input"> Deficiência Intelectual
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="option5" class="form-check-label">
                                    <input type="checkbox" id="option5" name="tipeOfDisability[]" value="Opção 5" class="form-check-input"> Deficiência Psicossocial
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="option6" class="form-check-label">
                                    <input type="checkbox" id="option6" name="tipeOfDisability[]" value="Option 6" class="form-check-input"> Deficiência Auditiva
                                </label>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country" class="form-label">País *</label>
                        <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" x-ref="country" wire:model.debounce.500ms="country" wire:ignore>
                            <option value="Brasil" selected>Brasil</option>
                            <option value="França">França</option>
                        </select>
                    </div>

                    @if ($showUfCity)
                        <div class="col-md-4 mb-3">
                            <label for="fu" class="form-label">Estado *</label>
                            <select class="form-select @error('fu') is-invalid @enderror" name="fu" id="fu">
                                <option value="">selecione uma opção</option>
                                <option value="option1">Rio de Janeiro</option>
                                <option value="option2">São Paulo</option>
                            </select>
                            @error('fu')
                            <div class="invalid-feedback">
                                @foreach($errors->get('fu') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="city" class="form-label">Cidade *</label>
                            <select class="form-select @error('city') is-invalid @enderror" name="city" id="city">
                                <option value="">selecione uma opção</option>
                                <option value="option1">Campos</option>
                                <option value="option2">Maricá</option>
                            </select>
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
                        <div class="col-md-4 mb-3">
                            <label for="city2" class="form-label">Cidade *</label>
                            <input type="text" class="form-control @error('city2') is-invalid @enderror" name="city2" id="city2" value="{{ old('city2') }}">
                        </div>
                    @endif

                </div>

                <div class="col-md-3 mb-3">
                    <label for="typeOfDocument" class="form-label">Tipo de Documento *</label>
                    <select class="form-select @error('typeOfDocument') is-invalid @enderror" name="typeOfDocument" id="typeOfDocument" x-ref="state" wire:model.debounce.500ms="state" wire:ignore>
                        <option value="CPF" selected>CPF</option>
                        <option value="RG">RG</option>
                        <option value="Passaporte">Passaporte</option>
                    </select>
                    @error('typeOfDocument')
                    <div class="invalid-feedback">
                        @foreach($errors->get('typeOfDocument') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>


                <div class="col-md-3 mb-3">
                    <label for="document" class="form-label">Número / Código *</label>
                    <input type="text" class="form-control @error('document') is-invalid @enderror" name="document" id="document" value="{{ old('document') }}">
                    @error('document')
                    <div class="invalid-feedback">
                        @foreach($errors->get('document') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

                @if ($showState)
                    <div class="col-md-3 mb-3">
                        <label for="state" class="form-label">Estado de Expedição*</label>
                        <select class="form-select @error('state') is-invalid @enderror" name="state" id="state">
                            <option value="">selecione uma opção</option>
                            <option value="estado">estado</option>
                        </select>
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

                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail *</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="email@domínio.com" oninput="validateEmailConfirmation()">
                    @error('email')
                    <div class="invalid-feedback">
                        @foreach($errors->get('genderIdentity') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="emailConfirmation" class="form-label">Confirmação do E-mail *</label>
                    <input type="email" class="form-control @error('emailConfirmation') is-invalid @enderror" name="emailConfirmation" id="emailConfirmation" value="{{ old('email') }}" oninput="validateEmailConfirmation()" onpaste="return false;">
                    <p id="emailError" style="color: red; display: none;">Os campos de e-mail não correspondem.</p>
                    @error('emailConfirmation')
                    <div class="invalid-feedback">
                        @foreach($errors->get('emailConfirmation') as $error)
                            {{ $error}}
                        @endforeach()
                    </div>
                    @enderror
                </div>

                <div wire:ignore>
                    @if(config('recaptcha.enabled'))
                        <br>
                        <br>
                        <div class="row text-left mb-2">
                            <div class="col-6">
                                {!! htmlFormSnippet() !!}
                            </div>
                        </div>
                    @endIf
                </div>

                <div class="col-md-12 mb">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br><br>
</div>
