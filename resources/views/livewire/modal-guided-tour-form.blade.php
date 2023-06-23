<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        + Incluir Convidados
    </button>

{{--    <form action="{{ route('guided-group-tour-form') }}" method="GET">--}}
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Preencher os dados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="fullName" class="form-label">Nome Completo *</label>
                                    <input type="text" class="form-control" id="fullName" required>
                                </div>
                                @error('fullName')
                                <div class="invalid-feedback">
                                    @foreach($errors->get('fullName') as $error)
                                        {{ $error}}
                                    @endforeach()
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
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

                            <div class="row">
                                <div class="col-md-6 mb-3">
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

                                <div class="col-md-6 mb-3">
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

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
{{--    </form>--}}

</div>
